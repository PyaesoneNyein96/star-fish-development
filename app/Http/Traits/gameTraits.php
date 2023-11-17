<?php

namespace App\Http\Traits;

use App\Models\Game;
use App\Models\Round;
use App\Models\Lesson;
use App\Models\Student;


trait gameTraits{


    // For Drag and Drop
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

                foreach ($r['answers'] as $d) {
                    $d['content'] = $d['answer'];
                    $d['question'] = $d['correct_answer'];
                    $d['correct_place'] = $d['correct_answer'];
                    unset($d['answer']);
                    unset($d['correct_answer']);
                }
            }




            // return $rounds;
            $game['rounds'] = $rounds;

          return  $game = [
                "id" => $game["id"],
                "name" => $game["name"],
                "lesson_id" => $game["lesson_id"],
                // "category" => $game["category"]['name'],
                "instructions" => $game['instructions'],
                "rounds" => $game["rounds"],
            ];


    }


    // For Cloud Games
    public function listening_and_choosing_clouds($gameId){

            $rounds = Round::with('backgrounds','questions','characters',
            'conversations','answers')->where('game_id', $gameId)->get();

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
                // "category" => $game["category"]['name'],
                "instructions" => $game['instructions'],
                "rounds" => $game["rounds"],
            ];

    }


    // For without rand Games\
    public function reading_carousel($game){
        return $game;
    }







}
