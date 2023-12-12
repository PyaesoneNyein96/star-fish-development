<?php
namespace App\Http\Traits;

use App\Models\Game;
use Illuminate\Http\Request;

trait gameControlTrait
{


    public function lockAll(Request $request){

        $games = explode(",", $request->lock_games);

        if($request->lock_games !== null ){
            Game::whereIn('id', $games)->update(['status' => 0]);

            return Game::whereIn('id', $games)->get();


        }


        return $request;

    }



















}
