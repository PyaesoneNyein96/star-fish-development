<?php

namespace App\Http\Traits;

use App\Models\Game;
use App\Models\Round;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Subunit;


trait gameTraits{


    // For Drag and Drop
    public function drag_n_drop_and_letter($game,$student,$unit){

        $gameId = $game->pluck('id');


        $games = Game::with(['instructions','rounds.questions','rounds.answers',
            'rounds.characters','rounds.conversations','rounds.backgrounds'])->whereIn('id', $gameId)->get();


        $unit = [
                'id' => $unit->id,
                'name' => $unit->name,
                'category' => $unit->category['name'],
                'subUnit' => $unit->games->count() !== 1 ? true : false,
                'games' => $games,
        ];

        return $unit;

    }

    ///////////////////////////////////////////////////////////////

    // For Cloud Games
    public function listening_and_choosing_clouds_one($game,$student,$unit){

        $count = $game->count();
        if(count($game) == 1) {
            $game = $game[0];
        }
        $gameId = $game->id;




            $rounds = Round::with('backgrounds','questions','characters',
            'conversations','answers')->where('game_id', $gameId)->get();

            $game = Game::with('instructions')->where('id', $gameId)->first();

            foreach ($rounds as $r) {
                if($r['backgrounds']){
                    $r['background'] = $r['backgrounds']->image;
                    unset($r['backgrounds']);
                }
            }


            $game['rounds'] = $rounds;

            $subUnit['subOne'] = $rounds;

            $gameData = [
                "id" => $game["id"],
                "name" => $game["name"],
                "lesson_id" => $game["lesson_id"],
                'subUnit' => $count !== 1 ? true : false,
                "instructions" => $game['instructions'],
                'instructionGif' => "image_path ????",
                'subUnit' => $game->subUnit == 1 ? true : false,
                "rounds" => $game["rounds"],
            ];

            if($game['subUnit'] == 0) {
                $gameData['subUnits'] = $game->subUnits;
            }else{
                 $gameData['rounds'] = $game['rounds'];
            }

            return $gameData;

    }


    //////////////////////////////////////////////////////////////

    // For without round Games
    public function reading_carousel($game,$student, $unit){
        if(count($game) == 1) {
            $game = $game[0];
             $game['subunit'] = $unit->subUnit == 1 ? true : false;
             return $game;
        }


    }

    // Video
    public function video_player_lessons($game,$student){

        if(count($game) == 1) {
            $game = $game[0];
        }
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
    public function video_player_song($game, $student, $unit){

        if(count($game) == 1) {
            $game = $game[0];
        }


        $songs = $game->songs;


        // return $songs;

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
            'lesson_id' => $unit->lesson_id,
            'subUnit' => $game->subUnit == 1 ? true : false,
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
                "instructions" => $game['instructions'],
                "rounds" => $game["rounds"],
            ];


        return $game;



    }


    public function tracing_n_correct_letter($game,$student, $unit){

        $gameId = $game->pluck('id');

        $games = Game::with(['instructions','rounds.questions','rounds.answers',
            'rounds.characters','rounds.conversations','rounds.backgrounds'])->whereIn('id', $gameId)->get();

           $unit = [
                'id' => $unit->id,
                'name' => $unit->name,
                'category' => $unit->category['name'],
                'subUnit' => $unit->games->count() !== 1 ? true : false,
                'games' => $games,
        ];

        return $unit;

    }







}
