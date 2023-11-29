<?php

namespace App\Http\Controllers\API\Lessons;

use stdClass;
use Carbon\Carbon;
use App\Models\Game;
use App\Models\Unit;
use App\Models\Grade;
use App\Models\Round;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Category;
use App\Models\StudentGame;
use App\Models\StudentGrade;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Http\Traits\gameTraits;
use App\Models\BackgroundImage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
use Illuminate\Support\Facades\Cache;

class GameController extends Controller
{


    use gameTraits;

    public function grades(Request $request)
    {

        $student = Student::where('token', $request->header('token'))->first();

        $studentGrades = $student->grades;


        $allGrades = Grade::all();
        $isDone = StudentGrade::where('student_id', $student->id)->where('isDone', 1)->get();


        $studentGrade = $allGrades->map(function ($grade) use ($studentGrades, $isDone, $student) {

            $paid = false;
            $lock = false;
            $day_count = null;
            $expire_date = null;

            foreach ($studentGrades as $studentGrade) {
                if ($studentGrade->id == $grade->id) {
                    $stu_grade = StudentGrade::where('grade_id', $studentGrade->id)->first();
                    $expire_date = $stu_grade->expire_date;

                    $day_count = $stu_grade->created_at
                        ->diff($stu_grade->expire_date);

                    $type = $day_count->invert ? '-' : '';
                    $day_count = $type . $day_count->days;

                    // $day_count = Carbon::now()
                    // ->diff($stu_grade->expire_date)->days;
                }
            }

            if ($student->isSubscriber == 1 && $studentGrades->contains('id', $grade->id)) {
                $paid = true;
                $lock = true;
            } else if ($student->isSubscriber == 0 && $student->grade_chosen == null) {
                $paid = false;
                $lock = true;
            } else if ($student->isSubscriber == 0 && $student->grade_chosen !== null) {
                $paid = false;
                $lock = $student->grade_chosen == $grade->id;
            }


            return [
                'id' => $grade->id,
                'name' => $grade->name,
                'price' => $grade->price,
                'paid' => $paid,
                'allow' => $lock,
                'complete' => $isDone->contains('id', $grade->id),
                'expire_date' => $expire_date,
                'day_count' => $day_count,
            ];
        });


        return $studentGrade;
    }


    // Lessons

    public function lessons(Request $request)
    {

        $token = $request->header('token');
        $grade = $request->header('grade_id');

        $student = Student::where('token', $token)->first();

        $allLessons = Lesson::where('grade_id', $grade)->get();

        $studentGrade = $student->grades;

        $studentLessons = $student->lessons; // ဆော့ပီးတဲ့ lessons

        $lessons = $allLessons->map(function ($lesson) use ($studentLessons, $grade) {

            return [
                'id' => $lesson->id,
                'grade_id' => $grade,
                'name' => $lesson->name,
                'complete' => $studentLessons->contains('id', $lesson->id),
            ];
        });

        return $lessons;
    }


    public function games(Request $request)
    {

        $student = Student::where('token', $request->header('token'))->first();
        $lesson = $request->header('lesson_id');
        $gradeId = $request->header('grade_id');
        // $gradeId = Lesson::where('id', $lesson)->pluck('grade_id')->first();

        DB::beginTransaction();
        try {

            if ($student->isSubscriber == 0 && $student->grade_chosen == Null) {

                Student::where('id', $student->id)->update([
                    'grade_chosen' => $gradeId
                ]);
            }

            $allGame = Unit::where('lesson_id', $lesson)->get();

            $studentUnits = $student->units;

            $units = $allGame->map(function ($unit) use ($studentUnits, $lesson, $gradeId) {
                return [
                    'id' => $unit->id,
                    'lesson_id' => $unit->lesson_id,
                    'name' => $unit->name,
                    'grade_id' => $gradeId,
                    'complete' => $studentUnits->contains('id', $unit->id),
                    'category' => $unit->category['name']
                ];
            });

            DB::commit();

            return $units;
        } catch (\Throwable $th) {
            return $th;
            DB::rollback();
        }
    }


    public function specificGame(Request $request)
    {

        $student = Student::where('token', $request->header('token'))->first();
        $unit_id = $request->header('unit_id');
        $lesson_id = $request->header('lesson_id');

        $unit = Unit::where('id', $unit_id)->with('category')->first();
        // return $unit->category['name'];

        $game = Game::with(
            'images',
            'instructions',
            'audios',
            'items',
            'rounds',
            'videos',
            'songs',
            'conversations',
            'characters',
            'background'
        )->whereIn('id', $unit->games->pluck('id'))
            ->get();



        if ($game  &&  method_exists($this, $unit->category['name'])) {

            $name = strval($unit->category['name']);

            return $this->$name($game, $student, $unit);
        }


        return "Function not found .!!";
    }


    public function end_match(Request $request)
    {

        $token = $request->header('token');
        $gameId = $request->header('game_id');
        $lesson_id = $request->header('lesson_id');

        // =================================

        $student = Student::where('token', $token)->first();

        $game = Game::find($gameId);
        $unit = optional($game)->unit;

        $exist = Unit::where('lesson_id', $lesson_id)->where('id',$unit->id)->first();

        if (!isset($game->unit) || !$student || !$game || !$exist) abort(404);


        $alreadyDone = StudentGame::where('student_id', $student->id)
            ->where('game_id', $gameId)->first();

        if ($alreadyDone)  return response()->json(['status' => 'already done this game'], 200);

        if ($student->grades->count() == 0) return response()->json(['status' => 'Plz subscribe the plan'], 200);


            StudentGame::insert([
                'student_id' => $student->id,
                'game_id' => $gameId,
                'unit_id' => $unit->id,
            ]);


            // unit check
            $unitGames = StudentGame::where('unit_id',$unit->id)->where('student_id',$student->id)->get();

            $unitDone = $unit->games->filter(function($game) use ($unitGames) {
                return !$unitGames->contains('game_id', $game->id);
            });

            $unitDones  = $unit->games->filter(function($game) use ($unitGames) {
                return $unitGames->contains('game_id', $game->id);
            });

            $lessonUnitList = Unit::where('lesson_id', $unit->lesson_id)->get();

            $lessonCheck = $lessonUnitList->filter(function ($u) use ($unitDones) {
                return !$unitDones->contains('unit_id', $u->id);
            })->values();

            return $lessonCheck;



            if ($this->lessonCheck($student, $lessonUnitList, $unitDones)->count() == 0 && $unitDone->count() == 0) {

                $alreadyExist =  StudentLesson::where('student_id', $student->id)
                    ->where('lesson_id', $lesson_id)->first();

                if ($alreadyExist) return 201;

                StudentLesson::create([
                    'student_id' => $student->id,
                    'lesson_id' => $lesson_id,
                    'status' => 1
                ]);
            }
            return "up";

            if ($this->gradeCheck($student, $lesson_id)->count() == 0) {

                $grade_id = Lesson::find($lesson_id)->grade['id'];

                $studentGrade = StudentGrade::where('student_id', $student->id)
                    ->where('grade_id', $grade_id)->first();

                if (!$studentGrade) return response()->json(["status" => "U need to buy a grade"], 200);

                StudentGrade::where('student_id', $student->id)
                    ->where('grade_id', $grade_id)
                    ->update(['isDone' => 1,]);
            }


            //ထူးထူး
            if ($student->grade_chosen == null) $this->addPointFunction($student, $request->header('point'));


            return response()->json(['status' => 'success and recorded'], 200);



    }




    private function lessonCheck($student, $lessonUnitList,$unitDones)
    {
        // return $lessonUnitList;
        return $lessonUnitList->filter(function ($u) use ($unitDones) {
            return $unitDones->contains('unit_id', $u->id);
        });
    }



    private function gradeCheck($student, $lesson_id)
    {

        $grade = Lesson::find($lesson_id)->grade;

        $lessons = Lesson::where('grade_id', $grade->id)->get();
        $studentLessons = studentLesson::where('student_id', $student->id)->get();

        return $lessons->filter(function ($i) use ($studentLessons) {
            return !$studentLessons->contains('lesson_id', $i->id);
        });
    }


    // =========***
    // add point
    // =========***

    private function addPointFunction($student, $point)
    {

        // return 'cc';
        $student_id = $student->id;

        $oldPoint = Student::where('id', $student_id)->first();
        $newPoint = $oldPoint->point + (int)$point;
        $newFixPoint = $oldPoint->fixed_point + (int)$point;

        if ($oldPoint->level >= 1 && $oldPoint->level <= 50) {
            $board = 'silver';
        }

        if ($oldPoint->level >= 51 && $oldPoint->level <= 100) {
            $board = 'platinum';
        }
        if ($oldPoint->level >= 101 && $oldPoint->level <= 200) {
            $board = 'gold';
        }
        if ($oldPoint->level >= 201 && $oldPoint->level <= 300) {
            $board = 'diamond';
        }

        if ($newFixPoint >= 0 && $newFixPoint <= 3000) {
            $level = ceil($newFixPoint / 10);
            Student::where('id', $student_id)->update([
                'point' => $newPoint,
                'fixed_point' => $newFixPoint,
                'level' => $level,
                'board' => $board
            ]);
        } else {
            Student::where('id', $student_id)->update([
                'point' => $newPoint,
                'fixed_point' => $newFixPoint,
                'board' => $board
            ]);
        }
    }
}
