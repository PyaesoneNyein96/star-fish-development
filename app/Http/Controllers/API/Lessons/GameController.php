<?php

namespace App\Http\Controllers\API\Lessons;

use stdClass;
use App\Models\Game;
use App\Models\Grade;
use App\Models\Round;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\StudentGame;
use App\Models\StudentGrade;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class GameController extends Controller
{


    // public function __construct(){

    // }



    public function grades(Request $request){

        $token = $request->header('token');


        $student = Student::where('token', $token)->first();
        $studentGrades = $student->grades;

        $isDone = StudentGrade::where('student_id', $student->id)->where('isDone',1)->get();
        $allGrades = Grade::all();


        $studentGrade = $allGrades->map(function ($grade) use($studentGrades, $isDone){
            return [
                'id' => $grade->id,
                'grade' => $grade->grade,
                'paid' => $studentGrades->contains('id',$grade->id),
                'status' => $isDone->contains('id',$grade->id)
            ];
        });

        return $studentGrade;

    }


    public function lessons(Request $request){

        $token = $request->header('token');
        $grade = $request->header('grade');


        $student = Student::where('token', $token)->first();

        $allLessons = Lesson::where('grade_id', $grade)->get();

        $studentGrade = $student->grades;

        $studentLessons = $student->lessons; // ဆော့ပီးတဲ့ lessons

        $lessons = $allLessons->map(function ($lesson) use($studentLessons, $grade){
            return [
                'id' => $lesson->id,
                'grade_id' =>$grade,
                'lesson' => $lesson->lesson,
                'status' => $studentLessons->contains('id',$lesson->id),
            ];
        });

        return $lessons;

    }


    public function games(Request $request){

        $student = Student::where('token', $request->header('token'))->first();
        $lesson = $request->header('lesson');

        $allGame = Game::where('lesson_id',$lesson)->get();
        $studentGames = $student->games; // ဆော့ပီးတဲ့ ဟာ ရွေး

        $games = $allGame->map(function ($game) use ($studentGames, $lesson) {
                return [
                    'id' => $game->id,
                    'lesson_id' => $game->lesson_id,
                    'game' => $game->game,
                    'status' => $studentGames->contains('id', $game->id)
                ];
        });

        return $games;

    }

    public function specificGame(Request $request){


        $student = Student::where('token', $request->header('token'))->first();
        $gameId = $request->header('game');

        $game = Game::with('images','category','audios','videos','items','rounds')->where('id', $gameId)->first();

        // return $game->category;

        if(count($game->rounds) == 0){
            return $game;
        }else{
           $rounds = Round::with('backgrounds','questions','answers')->where('game_id', $gameId)->get();
            return $rounds;
        }




    }


    public function match_end(Request $request){

        $token = $request->header('token');
        $gameId = $request->header('game');
        $lessonGames = $request->header('lesson');

        $student = Student::where('token', $token)->first();
        $game = Game::where('id', $gameId)->first();

        $alreadyDone = StudentGame::where('student_id', $student->id)->where('game_id', $gameId)->first();

        $lessonGamesList = Game::where('lesson_id', $lessonGames)->get();

        $gameDone  = StudentGame::where('student_id', $student->id)->get();


        if($student && $game && !$alreadyDone){

            StudentGame::insert([
                'student_id' => $student->id,
                'game_id' => $gameId,
            ]);


            return response()->json(['status' => 'success and recorded'], 200);
        }
         else if
         ($student && $game &&  $alreadyDone){

            // Rand changed process
            $filter = $lessonGamesList->filter(function ($g) use($gameDone){
                return !$gameDone->contains('game_id', $g->id);
            });

            if($filter->count() == 0){

                StudentLesson::create(['student_id' => $student->id, 'lesson_id' => $lessonGames]);
                return "all done";
            }

            return response()->json(['status' => 'success'], 200);
        }


        return 404;


    }






}
