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
use App\Models\StudentUnit;
use App\Models\StudentGrade;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Http\Traits\gameTraits;
use App\Models\BackgroundImage;
use App\Http\Traits\gameTraits2;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
use App\Http\Traits\gameControlTrait;
use Illuminate\Support\Facades\Cache;

class GameController extends Controller
{


    use gameTraits, gameTraits2, gameControlTrait;


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
                'grade_id' => $lesson->grade_id,
                'name' => $lesson->name,
                'complete' => $studentLessons->contains('id', $lesson->id),
            ];
        });

        return $lessons;
    }


    public function games(Request $request) // Units
    {

        $student = Student::where('token', $request->header('token'))->first();
        $lesson = $request->header('lesson_id');
        $gradeId = $request->header('grade_id');


        ////////////////////////////////////////////////////////////////////////////

        // $gradeId = Lesson::where('id', $lesson)->pluck('grade_id')->first();

        DB::beginTransaction();
        try {

            if ($student->isSubscriber == 0 && $student->grade_chosen == Null) {

                Student::where('id', $student->id)->update([
                    'grade_chosen' => $gradeId
                ]);
            }

            $lesson_id = Lesson::where('grade_id', $gradeId)
                ->where('id', $lesson)
                // ->where('name',$lesson)
                ->pluck('id')->first();


            $allGame = Unit::where('lesson_id', $lesson_id)->with('lesson')->get();

            $studentUnits = $student->units;


            $units = $allGame->map(function ($unit) use ($studentUnits, $lesson, $gradeId) {

                return [
                    'id' => $unit->id,
                    'lesson_id' => $unit->lesson_id,
                    'lesson_name' => $unit->lesson->name,
                    'name' => $unit->name,
                    'grade_id' => (int)$gradeId,
                    'complete' => $studentUnits->contains('id', $unit->id),
                    'sub_unit' => $unit->games->count() > 1 ? true : false,
                    'unit_status' => $unit->games->count() !== 1 ? Null : $unit->games[0]->status,
                    'category' => $unit->games->count() !== 1 ? Null : $unit->games[0]->category->name
                ];
            });


            DB::commit();
            // if(!$units) return "Game Not found!";
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
        $game_id = $request->header('game_id');


        $unit = Unit::where('id', $unit_id)->where('lesson_id', $lesson_id)->first();
        // $unit = Unit::find($unit_id);

        if (!$unit || !$student) return "lesson and unit are not match.";

        $gameInUnit = Game::where('unit_id', $unit_id)->where('id', $game_id)->exists();
        // if(!$gameUnit && $unit && $gameId) return "SubUnit game not found!";

        if ($gameInUnit) {

            $game = Game::find($game_id);

            $name = strval($game->category->name);

            $name = strval(Game::find($game_id)->category->name);
            if (!$name) return "this game is not subUnit game";

            return $this->$name(Game::find($game_id), $student, $unit);
        }

        $games = Game::where('unit_id', $unit_id)->get();

        if ($games->count() == 1) {
            $name = strval($games->first()->category->name);
            return $this->$name($games, $student, $unit);
        };

        return $this->Subunit_category($games, $unit);
    }



    public function end_match(Request $request)
    {


        $token = $request->header('token');
        $gameId = $request->header('game_id');
        $lesson_id = $request->header('lesson_id');

        // =================================

        // return $gradeId = Lesson::find($lesson_id)->grade['id'];


        $student = Student::where('token', $token)->first();

        $game = Game::find($gameId);

        $unit = optional($game)->unit;

        $grade = Lesson::where('id', $lesson_id)->first()->grade;

        $exists = $unit->lesson_id == $lesson_id ? true : false;


        if (!$student || !$game || !$exists) {
            return 404;
        }


        $alreadyDone = StudentGame::where('student_id', $student->id)
            ->where('game_id', $gameId)->first();

        $alreadyDoneUnit = StudentUnit::where('student_id', $student->id)
            ->where('unit_id', $unit->id)->first();

        $alreadyDoneLesson = StudentLesson::where('student_id', $student->id)
            ->where('lesson_id', $lesson_id)->first();

        $alreadyDoneGrade = StudentGrade::where('student_id', $student->id)
            ->where('grade_id', $grade->id)->where('isDone', 1)->first();

        if ($alreadyDone || $alreadyDoneUnit || $alreadyDoneLesson || $alreadyDoneGrade) {
            return response()->json(['status' => 'already done this game'], 403);
            // return 405;
        }

        // TEMPORARY BLOCK THIS FEATURE (POINT FILTER)
        // if ($student->grades->count() == 0)  return response()->json(["status" => "Plz subscribe the plan."], 200);


        StudentGame::insert([
            'student_id' => $student->id,
            'game_id' => $gameId,
            'unit_id' => $unit->id,
            'status' => 1,
        ]);



        $gameDone = StudentGame::where('student_id', $student->id)->get();

        $unitCheck = $unit->games->reject(function ($g) use ($gameDone) {
            return $gameDone->contains('game_id', $g->id);
        });

        if ($unitCheck->count() == 0) {

            $unitInsert = StudentUnit::insert([
                'student_id' => $student->id,
                'unit_id' => $unit->id,
                'lesson_id' => $lesson_id,
            ]);

            if ($unitInsert) {
                StudentGame::where('student_id', $student->id)
                    ->where('unit_id', $unit->id)->delete();
            }
        }



        $lessonUnit = Unit::where('lesson_id', $lesson_id)->get();


        if (
            $this->lessonCheck($student, $lessonUnit)->count() == 0
            && $unitCheck->count() == 0
        ) {

            $alreadyExist =  StudentLesson::where('student_id', $student->id)
                ->where('lesson_id', $lesson_id)->first();

            if ($alreadyExist) return 201;

            $lessonInsert = StudentLesson::create([
                'student_id' => $student->id,
                'lesson_id' => $lesson_id,
                'grade_id' => $grade->id,
                'status' => 1
            ]);

            if ($lessonInsert) {
                StudentUnit::where('student_id', $student->id)
                    ->where('lesson_id', $lesson_id)->delete();
            }
        }


        if ($this->gradeCheck($student, $lesson_id)->count() == 0) {

            $grade_id = Lesson::find($lesson_id)->grade['id'];

            $studentGrade = StudentGrade::where('student_id', $student->id)
                ->where('grade_id', $grade_id)->first();

            if (!$studentGrade) return response()->json(
                ["status" => "U need to buy a grade"],
                200
            );

            StudentGrade::where('student_id', $student->id)
                ->where('grade_id', $grade_id)
                ->update(['isDone' => 1,]);

            $gradeDoneCheck = StudentGrade::where('student_id', $student->id)
                ->where('isDone', 1)->pluck('grade_id');

            $DeleteLessons = Lesson::whereIn('grade_id', $gradeDoneCheck)->pluck('id');

            StudentLesson::where('student_id', $student->id)
                ->whereIn('lesson_id', $DeleteLessons)->delete();
        }


        //ထူးထူး
        // if ($student->grade_chosen == null) {
        //  $this->addPointFunction($student, $request->header('point'),$request->header('question_answer'));
        // }
        $this->addPointFunction($student, $request->header('point'), $request->header('question_answer'));


        return response()->json([
            'status' => 'success and recorded',
            'fixed_point' => Student::where('id', $student->id)->pluck('fixed_point')->first(),
        ], 200);
    }


    private function lessonCheck($student, $lessonUnit)
    {

        $unitDone = StudentUnit::where('student_id', $student->id)->get();

        return $filter = $lessonUnit->reject(function ($u) use ($unitDone) {
            return $unitDone->contains('unit_id', $u->id);
        });
    }



    private function gradeCheck($student, $lesson_id)
    {

        $grade = Lesson::find($lesson_id)->grade;

        $lessons = Lesson::where('grade_id', $grade->id)->get();
        $lessonDone = studentLesson::where('student_id', $student->id)->get();

        return $result = $lessons->filter(function ($i) use ($lessonDone) {
            return !$lessonDone->contains('lesson_id', $i->id);
        });
    }


    // =========***
    // add point
    // =========***

    private function addPointFunction($student, $point, $question_answer)
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

        // Total - ans_ques


        Student::where('id', $student_id)->update([
            'question_answer' => (int)$question_answer + Student::find($student_id)->question_answer
        ]);
    }
}
