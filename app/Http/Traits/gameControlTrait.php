<?php
namespace App\Http\Traits;

use App\Models\Game;
use Illuminate\Http\Request;

trait gameControlTrait
{


    public function lockAll(Request $request){

        if($request->lock_games !== null ){
            $lockGames = Game::whereIn('id', $request->lock_games)->get();

            return $lockGames;
            $lockGames->update('status',0);

            // if($lockGames) return "$request->lock_games were locked";
        }


        return $request;

    }



















}
