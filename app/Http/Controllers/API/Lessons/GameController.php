<?php

namespace App\Http\Controllers\API\Lessons;

use stdClass;
use App\Models\Game;
use App\Models\Grade;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\StudentGrade;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class GameController extends Controller
{

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
        // $studentLessons = StudentLesson::where('student_id',$student->id)->get();
        $studentLessons = $student->lessons;

        $lessons = $allLessons->map(function ($lesson) use($studentLessons, $grade){
            return [
                'id' => $lesson->id,
                'grade' =>$grade,
                'lesson' => $lesson->lesson,
                'status' => $studentLessons->contains('id',$lesson->id),
            ];
        });

        return $lessons;

    }


    public function games(Request $request){

        $student = Student::where('token', $request->header('token'))->first();
        $lesson = $request->header('lesson');

        $allGame = Game::all();
        $studentGames = $student->games;


        $Games = $allGame->map(function ($game) use($studentGames){
            return [
                'id' => $game->id,
                'game' => $game->game,
                'status' => $studentGames->contains('id',$game->id), // true & false
            ];
        });

        return $Games;

    }

    public function specificGames(Request $request){

        $student = Student::where('token', $request->header('token'))->first();
        $gameId = $request->header('game');


        // $gameRound = Game::with(['rounds'=> function ($q) {
        //     $q->with('audios')->get();
        // }])->where('id', $gameId)->first();


        $gameRound = Game::with(['rounds.audios'])->where('id', $gameId)->first();

        // return count($gameRound->rounds);

        if(count($gameRound->rounds) === 0){
            $game = Game::with('audios')->where('id',$gameId)->first();
            return  $game;
            // return  "game";

        }else{
            return $gameRound;
            // return "Round";
        }





    }

}
