<?php

namespace App\Http\Controllers\API\Lessons;

use stdClass;
use App\Models\Game;
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
        $isDone = StudentGrade::where('student_id', $student->id)->where('isDone',1)->get();


        $studentGrade = $allGrades->map(function ($grade) use($studentGrades, $isDone,$student){

            $paid = false;
            $lock = false;

            if($student->isSubscriber == 1 && $studentGrades->contains('id', $grade->id) ){
                $paid = true;
                $lock = true;

            } else if ($student->isSubscriber == 0 && $student->grade_chosen == null){
                $paid = false;
                $lock = true;
            } else if ($student->isSubscriber == 0 && $student->grade_chosen !== null){
                $paid = false;
                $lock = $student->grade_chosen == $grade->id;
            }

            return [
                'id' => $grade->id,
                'name' => $grade->name,
                'expiry' => $grade->expiry,
                'price' => $grade->price,
                'paid' => $paid,
                'allow' => $lock,
                'status' => $isDone->contains('id',$grade->id),
            ];
        });


        return $studentGrade;
    }


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
                'status' => $studentLessons->contains('id', $lesson->id),
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

            if($student->isSubscribe == 0 && $student->grade_chosen == null ){

                    Student::where('id', $student->id)->update([
                        'grade_chosen' => $gradeId
                    ]);

                }

                $allGame = Game::where('lesson_id',$lesson)->get();
                $studentGames = $student->games;

                $games = $allGame->map(function ($game) use ($studentGames, $lesson, $gradeId) {
                    return [
                        'id' => $game->id,
                        'lesson_id' => $game->lesson_id,
                        'name' => $game->name,
                        'grade_id' => $gradeId,
                        'status' => $studentGames->contains('id', $game->id),
                        'category' => $game->category['name']
                    ];
                });

                DB::commit();

                return $games;




        } catch (\Throwable $th) {
            return $th;
            DB::rollback();
        }

    }


    public function specificGame(Request $request)
    {

        $student = Student::where('token', $request->header('token'))->first();
        $gameId = $request->header('game_id');

        $game = Game::with('images','category','audios','items','rounds','conversations','characters','background')->where('id', $gameId)->first();


        if (!$game) return null;

        if(count($game->rounds) == 0){
            $name = strval($game->category['name']);
            return $this->$name($game);

        }
        else if (method_exists($this, $game->category['name'])) {

            $name = strval($game->category['name']);
            return $this->$name($gameId);
        }

        return "Function not found like Category !!";




    }


    public function end_match(Request $request)
    {

        $token = $request->header('token');
        $gameId = $request->header('game_id');
        $lesson_id = $request->header('lesson_id');

        // =================================

        $student = Student::where('token', $token)->first();
        $game = Game::find($gameId);

        if (!isset($game->lesson)) return 404;

        $exists = $game->lesson['id'] == $lesson_id ? true : false;

        if (!$student || !$game || !$exists) {
            return 404;
        }

        $alreadyDone = StudentGame::where('student_id', $student->id)
            ->where('game_id', $gameId)->first();

        $lessonGamesList = Game::where('lesson_id', $lesson_id)->get();

        if (!$alreadyDone) {

            DB::beginTransaction();
            try {

                StudentGame::insert([
                    'student_id' => $student->id,
                    'game_id' => $gameId,
                    'status' => 1,
                ]);

                if ($this->lessonCheck($student, $lessonGamesList)->count() == 0) {
                    $this->lessonPush($student, $lesson_id);
                }

                //ထူးထူး
                $this->addPointFunction($student, $request->header('point'));

                DB::commit();

                return response()->json(['status' => 'success and recorded'], 200);
            } catch (\Throwable $th) {
                DB::rollback();
                return  $th;
            }
        }

        return response()->json(['status' => 'already done this game'], 200);
    }

    private function lessonCheck($student, $lessonGamesList){

        $gameDone  = StudentGame::where('student_id', $student->id)->get();

        return $filter = $lessonGamesList->reject(function ($g) use ($gameDone) {
            return $gameDone->contains('game_id', $g->id);
        });
    }

    private function lessonPush($student, $lesson_id)
    {

        $alreadyExist =  StudentLesson::where('student_id', $student->id)
            ->where('lesson_id', $lesson_id)->first();

        if ($alreadyExist) {
            return "success";
        }

        StudentLesson::create([
            'student_id' => $student->id,
            'lesson_id' => $lesson_id,
            'status' => 1
        ]);

         if($this->gradeCheck($student, $lesson_id)->count() == 0 ){
           return $this->gradePush($student, $lesson_id);
         }


    }

    private function gradeCheck($student, $lesson_id)
    {

        $grade = Lesson::find($lesson_id)->grade;

        $lessons = Lesson::where('grade_id', $grade->id)->get();
        $studentLessons = studentLesson::where('student_id', $student->id)->get();

        return $result = $lessons->filter(function ($i) use ($studentLessons) {
            return !$studentLessons->contains('lesson_id', $i->id);
        });
    }

    private function gradePush($student, $lesson_id)
    {

        $grade_id = Lesson::find($lesson_id)->grade['id'];

        $studentGrade = StudentGrade::where('student_id', $student->id)
            ->where('grade_id', $grade_id)->first();

        if (!$studentGrade) {
            return response()->json([
                'status' => "You have not bought this grade yet."
            ], 403);
        }

        StudentGrade::where('student_id',$student->id)
        ->where('grade_id', $grade_id)
        ->update([
            'isDone' => 1,
        ]);

        return response()->json([
            'status' => 'grade status updated.'
        ], 200);


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