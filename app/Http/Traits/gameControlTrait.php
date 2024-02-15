<?php
namespace App\Http\Traits;

use App\Models\Game;
use Illuminate\Http\Request;

trait gameControlTrait
{


    public function lockAndUnlock(Request $request){

    if(!$request->games) return "Games list is empty!";

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


        if($request->grade_id){
            $lesson = Lesson::where('name',$request->lesson_name)->where('grade_id',$request->grade_id)->first();
        }else{
            $lesson = Lesson::where('id',$request->lesson_id)->first();
        }

        $games = $lesson->games;

        $LockCount = $games->filter(function ($game){
            return $game->status == 0 ;
        });

        if($LockCount){
            $games->map(function ($game){
                $game->query()->update([
                    'status' => 1
                ]);
            });
        }else{
            $games->map(function ($game){
                $game->query()->update([
                    'status' => 0
                ]);
            });
        }



        return "success";


    }

















}