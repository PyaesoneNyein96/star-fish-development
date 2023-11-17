<?php

namespace App\Http\Traits;

use App\Models\Game;
use App\Models\Round;
use App\Models\Lesson;
use App\Models\Student;


trait gameTraits{


    public function drag_n_drop_and_letter($gameId){

          $rounds = Round::with('backgrounds','questions',
            'characters','conversations','answers')
            ->where('game_id', $gameId)->get();


            $game = Game::with('category','instructions')->where('id', $gameId)->first();

            foreach ($rounds as $r) {
                if($r['backgrounds']){
                    $r['background'] = $r['backgrounds']->image;
                    unset($r['backgrounds']);
                }
            }

            $game['rounds'] = $rounds;

            return  $game = [
                "id" => $game["id"],
                "name" => $game["name"],
                "lesson_id" => $game["lesson_id"],
                "instructions" => $game['instructions'],
                "rounds" => $game["rounds"],
            ];

    }







}
