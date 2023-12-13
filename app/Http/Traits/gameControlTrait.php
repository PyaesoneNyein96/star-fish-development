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



















}
