<?php
namespace App\Http\Traits;

use App\Models\Game;
use App\Models\Unit;
use App\Models\Lesson;
use Illuminate\Http\Request;

trait gameControlTrait
{


    public function lockAndUnlock(Request $request){


        $lockGameId = [
            71 ,98,125,158, 189, 198, 227,

            // 259,
            268, 283, 294, 310, 322, 342, 348,
            363, 368, 379, 399, 411, 420, 443

            ];



        if(!$request->games) {
            Game::whereIn('id', $lockGameId)->update(['status' => 0]);
            return Game::whereIn('id', $lockGameId)->get();
        }



        // if(!$request->games) return "Games list is empty!";

        $games = explode(",", $request->games);
        $status = $request->status == "lock" ? 0 : 1 ;


        if($request->games == "all") {
            Game::query()->update(['status' => $status]);
            return Game::where('status', $status)->get();
        }

        Game::whereIn('id', $games)->update(['status' => $status]);
        return Game::whereIn('id', $games)->get();

    }




    public function showLockAndUnlock(Request $request){

        $status = $request->status == "lock" ? 0 : 1;

        $games = Game::where('status',$status)->get();

        return $games;

    }


    public function LessonLock(Request $request) {

        $status = $request->status == "lock" ? 0 : 1;

        if($request->grade_id){
            $lesson = Lesson::where('name',$request->lesson_name)->where('grade_id',$request->grade_id)->first();
        }else{
            $lesson = Lesson::where('id',$request->lesson_id)->first();
        }

        $games = $lesson->games->pluck('id');

        Game::whereIn('id', $games)->update(['status' => $status]);
        return Game::whereIn('id', $games)->get();


    }


    public function lessonLockCheck(Request $request){

        $status = $request->status == "lock" ? 0 : 1;

        $games = Game::where('status',$status)->with('unit')->get();


        $units = $games->map(function ($g) {
            return $g->unit['id'];
        });

        $lessonsId = Unit::whereIn('id',$units)->pluck('lesson_id');

        return $units;


    }

















}
