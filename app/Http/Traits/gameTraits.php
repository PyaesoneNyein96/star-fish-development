<?php

namespace App\Http\Traits;

use App\Models\Game;
use App\Models\Round;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Subunit;


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
    public function listening_and_choosing_clouds_one($gameId){

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


    // For without rand Games
    public function reading_carousel($game){
        return $game;
    }

    // Video
    public function video_player_lessons($game,$student){

        $videos = $game->videos;

        $result = $videos->filter(function ($v) use($student){
            return $v->isLocal == $student->isLocal;
        });

        $videos = $result->values()->map(function ($v) use($student){
            return [
                'video_id' => $v->path,
                'local' => $v->isLocal,
                'type' => 'Video',
            ];
        });

        $collection = [
            'id' => $game->id,
            'name' => $game->name,
            'lesson_id' => $game->lesson_id,
            'videos' => $videos
        ];

       return $collection;

    }

    // Song
    public function video_player_song($game, $student){

        $songs = $game->songs;

        $result = $songs->filter(function ($s) use($student){
            return $s->isLocal == $student->isLocal;
        });

        $songs = $result->values()->map(function ($s){
            return [
                'song_id' => $s->path,
                'local' => $s->isLocal,
                'type' =>"song",
            ];
        });

         $collection = [
            'id' => $game->id,
            'name' => $game->name,
            'lesson_id' => $game->lesson_id,
            'songs' => $songs
        ];

       return $collection;

    }

  // For Cloud Games Two
    public function listening_and_choosing_clouds_two($gameId){


        $rounds = Round::with('backgrounds','questions','characters',
        'conversations','answers')->where('game_id', $gameId)->get();

        // return $rounds;
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
                "lesson_id" => $game["lesson_id"],
                "rounds" => $game["rounds"],
            ];


        return $game;



    }


    public function tracing_n_correct_letter($game){

       return Subunit::where('game_id',$game->id)->with('questions')->get();

    }







}