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
use App\Models\BackgroundImage;
use App\Http\Controllers\Controller;
use App\Http\Resources\GameResource;
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
                'name' => $grade->name,
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

        // return $allLessons;

        $studentGrade = $student->grades;

        $studentLessons = $student->lessons; // ဆော့ပီးတဲ့ lessons

        $lessons = $allLessons->map(function ($lesson) use($studentLessons, $grade){
            return [
                'id' => $lesson->id,
                'grade_id' =>$grade,
                'name' => $lesson->name,
                'status' => $studentLessons->contains('id',$lesson->id),
            ];
        });

        return $lessons;

    }


    public function games(Request $request){

        $student = Student::where('token', $request->header('token'))->first();
        $lesson = $request->header('lesson');
        $gradeId = Lesson::where('id', $lesson)->pluck('grade_id')->first();


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

        return $games;

    }



    public function specificGame(Request $request){


        $student = Student::where('token', $request->header('token'))->first();
        $gameId = $request->header('game');

        $game = Game::with('images','category','audios','items','rounds','conversations','characters','background')->where('id', $gameId)->first();

        if(!$game) return null;

        if(count($game->rounds) == 0){
            return $game;
        }else{

            $rounds = Round::with
            ('backgrounds','questions','characters','conversations','answers')
            ->where('game_id', $gameId)->get();

            $game = Game::with('category','instructions')->where('id', $gameId)->first();

            foreach ($rounds as $r) {
                if($r['backgrounds']){
                    $r['background'] = $r['backgrounds']->image;
                    unset($r['backgrounds']);
                }
            }



            $game['rounds'] = $rounds;

            $game = [
                "id" => $game["id"],
                "name" => $game["name"],
                "instructions" => $game['instructions'],
                "rounds" => $game["rounds"],
                // "lesson_id" => $game["lesson_id"],
                // "category" => $game["category"],
            ];


            return $game;

        }


    }


    public function match_end(Request $request){


        $token = $request->header('token');
        $gameId = $request->header('game');
        $lesson = $request->header('lesson');

        // =================================

        $student = Student::where('token', $token)->first();
        $game = Game::find($gameId);


        if(!isset($game->lesson)) return 404;

        $exists = $game->lesson['id'] == $lesson ? true : false;

        if(!$student || !$game || !$exists){
            return 404;
        }

        $alreadyDone = StudentGame::where('student_id', $student->id)->where('game_id', $gameId)->first();

        $lessonGamesList = Game::where('lesson_id', $lesson)->get();


        if(!$alreadyDone){

            StudentGame::insert([
                'student_id' => $student->id,
                'game_id' => $gameId,
                'status' => 1,
            ]);

            if($this->levelCheck($student, $lessonGamesList)) $this->levelPush($student, $lesson);

            //htoo_htoo

            return response()->json(['status' => 'success and recorded'], 200);

        }


        if($alreadyDone){

            if($filter->isEmpty()){

                $lessonDone = StudentLesson::where('student_id', $student->id)
                ->where('lesson_id', $lesson)->get();

                if($lessonDone->isEmpty()){

                // if($this->levelCheck($student, $lessonGamesList)) $this->levelPush($student, $lesson);

                    return response()->json([
                        'status' => 'lesson one done.'
                    ], 200);
                }

            }

            return response()->json(['status' => 'success'], 200);


        }


    }

    private function levelCheck($student, $lessonGamesList){

        $gameDone  = StudentGame::where('student_id', $student->id)->get();

        $filter = $lessonGamesList->filter(function ($g) use($gameDone){
            return !$gameDone->contains('game_id', $g->id);
        });

        return $filter;

    }

    private function levelPush($student, $lesson){

        return StudentLesson::insert(['student_id' => $student->id,
                     'lesson_id' => $lesson, 'status' => 1]);

    }





}
