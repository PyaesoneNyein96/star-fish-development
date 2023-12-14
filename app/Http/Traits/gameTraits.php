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
    // video_player_song, drag_n_drop_and_letter , writing_topic

    ///////////////////////////////////////////////////////////////
    /// SUb Unit Games ************
    ///////////////////////////////////////////////////////////////
    public function Subunit_category($games,  $unit)
    {

        $gamesData = [];
        foreach ($games as  $game) {

            if (!$game && !method_exists($this, $game->category->name)) return "game and function are not match.";

            $game = [
                'game_id' => $game->id,
                'game_name' => $game->name,
                'game_status' => $game->status,
                'category' => $game->category->name,
            ];

            $gamesData[] = $game;
        }

        return $unit = [
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit' => count($gamesData) > 1 ?  true  : false,
            'games' => $gamesData,

        ];
    }



    //////////////////////////////////////////////////////////////
    // For without round Games
    public function reading_carousel($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];
        // $game = $games[0];

        //  $rounds =  $game->ans_n_ques->groupBy('round')->values();

        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });


        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  =>  $game->count() < 1,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->isEmpty() ? null : $game->instructions,
            // 'data' => $game->ans_n_ques
        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
        }
        $data['data'] = $game->ans_n_ques;
        return $data;
    }

    ///////////////////////////////////////////////////////////////
    // Video
    public function video_player_lessons($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

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

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit' => $game->count() == 1 ? false : true,
            'category' => $game->category->name,
            'instructionGIF' => $game->instructionGIF,
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'data' => $videos->first()
        ];
    }

    ///////////////////////////////////////////////////////////////
    // Song
    public function video_player_song($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        $result = $game->ans_n_ques->filter(function ($s) use ($student) {
            return $s->isLocal == $student->isLocal;
        });

        // return $result->values();

        $songs = $result->values()->map(function ($s) {
            return [
                'song_id' => $s->a_content,
                'isLocal' => $s->isLocal,
                'type' => "song",
            ];
        });



        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit' => $game->count() == 1 ? false : true,
            'category' => $game->category->name,
            'instructionGIF' => $game->instructionGIF,
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'data' => $songs->first()
        ];
    }

    ///////////////////////////////////////////////////////////////
    // For Cloud Games One
    public function listening_and_choosing_clouds_one($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });


        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  !isset($game->instructions) ? null : $game->instructions,
            // 'rounds' => $rounds
        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
        }
        $data['data'] = $game->ans_n_ques;
        return $data;
    }

    ///////////////////////////////////////////////////////////////
    // For Drag and Drop
    public function drag_n_drop_and_letter($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $rounds

        ];
    }

    ///////////////////////////////////////////////////////////////
    // For Cloud Games Two
    public function listening_and_choosing_clouds_two($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];


        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });

        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,

        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
        }
        $data['data'] = $game->ans_n_ques;

        return $data;
    }


    ///////////////////////////////////////////////////////////////
    // Matching Columns
    public function matching_columns($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }


    public function letter_tracing($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds = $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }


    public function fill_in_the_blanks($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds = $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }


    public function reading_diagram($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        // if($game->ans_n_ques)

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
            'data' => $game->ans_n_ques
        ];
    }


    // Writing_topic

    public function writing_topic($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        // $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
            'data' => $game->ans_n_ques
        ];
    }


    //writing_opposite

    public function writing_opposite($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();


        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }


    public function listening_and_choosing_pics_two($game, $student, $unit)
    {

        if (isset($game[0])) $game = $game[0];

        $roundExist = $game->ans_n_ques->some(function ($g) {
            return array_key_exists('round', $g->toArray());
        });

        $data = [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' =>   $game->instructions->count() == 0 ? null : $game->instructions,
        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
        }
        $data['data'] = $game->ans_n_ques;

        return $data;
    }
}
