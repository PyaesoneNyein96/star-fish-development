<?php

namespace App\Http\Traits;

use App\Models\Game;
use App\Models\Round;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Subunit;
use App\Http\Resources\DataResource;


trait gameTraits
{

    // listening_and_choosing_clouds_one, reading_carousel, video_player_lessons,
    // video_player_song, drag_n_drop_and_letter



    //////////////////////////////////////////////////////////////
    // For without round Games
    public function reading_carousel($games, $student, $unit)
    {

        if(isset($game[0])) $game = $game[0];
        $game = $games[0];

        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $games->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  isset($game->instructions) ? null : $game->instructions,
            'data' => $game->ans_n_ques
        ];

        return $game;
    }

    ///////////////////////////////////////////////////////////////
    // Video
    public function video_player_lessons($game, $student, $unit)
    {

        $count = count($game);
        $game = $game[0];

        $data = $game->ans_n_ques;

        $result = $data->filter(function ($v) use ($student) {
            return $v->isLocal == $student->isLocal;
        });

        $videos = $result->values()->map(function ($v) use ($student) {
            return [
                'video_id' => $v->a_content,
                'isLocal' => $v->isLocal,
                'type' => 'Video',
            ];
        });

        $collection = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit' => $count == 1 ? false : true,
            'instructionGIF' => $game->instructionGIF,
            'instructions' => isset($game->instructions) ?  null : $game->instructions,
            'data' => $videos->first()
        ];

        return $collection;
    }

    ///////////////////////////////////////////////////////////////
    // Song
    public function video_player_song($game, $student, $unit)
    {
        $count = count($game);
        $game = $game[0];

        $result = $game->ans_n_ques->filter(function ($s) use ($student) {
            return $s->isLocal == $student->isLocal;
        });


        $songs = $result->values()->map(function ($s) {
            return [
                'song_id' => $s->path,
                'isLocal' => $s->isLocal,
                'type' => "song",
            ];
        });

        $collection = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit' => $count == 1 ? false : true,
            'instructionGIF' => $game->instructionGIF,
            'instructions' => isset($game->instructions) ? null : $game->instructions,
            'subUnit' => $count == 1 ? false : true,
            'data' => $songs->first()
        ];

        return $collection;
    }


    ///////////////////////////////////////////////////////////////
    // For Cloud Games One
    public function listening_and_choosing_clouds_one($games, $student, $unit)
    {

        $game = $games[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $games->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  isset($game->instructions) ? null : $game->instructions,
            'rounds' => $rounds
        ];

        return $game;
    }


    ///////////////////////////////////////////////////////////////
    // For Drag and Drop
    public function drag_n_drop_and_letter($game, $student, $unit)
    {

        $count = $game->count();

        $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  isset($game->instructions) ? null : $game->instructions,
            'rounds' => $rounds

        ];

        return $game;
    }

    ///////////////////////////////////////////////////////////////
    // For Cloud Games Two
    public function listening_and_choosing_clouds_two($games, $student, $unit)
    {

       $game = $games[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $games->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  isset($game->instructions) ? null : $game->instructions,
            'rounds' => $rounds
        ];

        return $game;
    }


    ///////////////////////////////////////////////////////////////
    // Matching Columns
    public function matching_columns($games, $student,$unit)
    {

        $game = $games[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $games->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  isset($game->instructions) ? null : $game->instructions,
            'rounds' => $rounds
        ];

        return $game;

    }


    ///////////////////////////////////////////////////////////////
    /// SUb Unit Games ************
    ///////////////////////////////////////////////////////////////
    public function Subunit_category($games, $student, $unit)
    {

        $gamesData = [];
        foreach ($games as  $game) {

            if($game && method_exists($this,$game->category)){

                 $game = [
                    'game_id' => $game->id,
                    'game_name' => $game->name,
                    'category' => $game->category,
                ];

                $gamesData[] = $game;

            }
            // else {
            //     $name =strval($game->category);
            //     $gamesData[] = $this->$name($game, $student, $unit);
            // }
            else{
                return "game and function are not match.";
            }

        }

        return $unit = [
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit' => $games->count() == 1 ? false : true,
            'games' => $gamesData,

        ];


    }



    public function letter_tracing($game, $student,$unit){

        if(isset($game[0])) $game = $game[0];

        $rounds = $game->ans_n_ques->groupBy('round')->values();
        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'status' => $game->status,
            'category' => $game->category,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  isset($game->instructions) ? null : $game->instructions,
            'rounds' => $rounds
        ];
        return $game;

    }


    public function fill_in_the_blanks($game,$student,$unit) {

        if(isset($game[0])) $game = $game[0];


        $rounds = $game->ans_n_ques->groupBy('round')->values();
        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'status' => $game->status,
            'category' => $game->category,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  isset($game->instructions) ? null : $game->instructions,
            'rounds' => $rounds
        ];
        return $game;


    }


    public function reading_diagram($game,$student,$unit) {

        if(isset($game[0])) $game = $game[0];


        // $rounds = $game->ans_n_ques->groupBy('round')->values();
        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'status' => $game->status,
            'category' => $game->category,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  isset($game->instructions) ? null : $game->instructions,
            'background' => $game->background,
            'data' => $game->ans_n_ques
        ];
        return $game;

    }






}
