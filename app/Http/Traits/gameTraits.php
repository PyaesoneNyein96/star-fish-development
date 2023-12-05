<?php

namespace App\Http\Traits;

use App\Models\Game;
use App\Models\Round;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Subunit;


trait gameTraits
{

    // listening_and_choosing_clouds_one, reading_carousel, video_player_lessons,
    // video_player_song, drag_n_drop_and_letter



    //////////////////////////////////////////////////////////////
    // For without round Games
    public function reading_carousel($games, $student, $unit)
    {
        $game = $games[0];

        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $games->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'answer_&_questions' => $game->ans_n_ques
        ];

        return $game;

    }

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
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'subUnit' => $count == 1 ? false : true,
            'instructionGIF' => $game->instructionGIF,
            'instructions' => isset($game->instructions) ?  null : $game->instructions,
            'videos' => $videos->first()
        ];

        return $collection;
    }

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
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'subUnit' => $count == 1 ? false : true,
            'instructionGIF' => $game->instructionGIF,
            'instructions' => isset($game->instructions) ? null : $game->instructions,
            'subUnit' => $count == 1 ? false : true,
            'songs' => $songs->first()
        ];

        return $collection;
    }


       ///////////////////////////////////////////////////////////////
    // For Cloud Games One
    public function listening_and_choosing_clouds_one($games, $student, $unit)
    {

        $game = $games[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        // foreach ($rounds as $roundId => $groupedData) {
        //     $customKey = "Round_".$roundId;
        //     $rounds[$customKey] = $groupedData;
        //     unset($rounds[$roundId]);
        // }






        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $games->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $rounds
        ];

        return $game;

    }




    // For Drag and Drop
    public function drag_n_drop_and_letter($game, $student, $unit)
    {

        $count = $game->count();

        $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        $game = [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'answer_&_questions' => $rounds

        ];

        return $game;
    }


    // For Cloud Games Two
    public function listening_and_choosing_clouds_two($gameId)
    {

        return $gameId;


        $rounds = Round::with(
            'backgrounds',
            'questions',
            'characters',
            'conversations',
            'answers'
        )->where('game_id', $gameId)->get();

        $game = Game::with('category', 'instructions')->where('id', $gameId)->first();

        foreach ($rounds as $r) {
            if ($r['backgrounds']) {
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


    public function tracing_n_correct_letter($game, $student, $unit)
    {

        $gameId = $game->pluck('id');

        $games = Game::with([
            'instructions', 'rounds.questions', 'rounds.answers',
            'rounds.characters', 'rounds.conversations', 'rounds.backgrounds'
        ])->whereIn('id', $gameId)->get();

        // return $games;
        foreach ($games as $game) {
            $game['lesson_id'] = $unit->lesson_id;
        }

        $unit = [
            'id' => $unit->id,
            'unit' => $unit->unit,
            'lesson_id' => $unit->lesson_id,
            'subUnit' => $games->count() == 1 ? false : true,
            'games' => $games,
        ];

        return $unit;
    }


    // =====================================================
    // =====================================================


    // reading conversation
    public function reading_conversation()
    {
        //
    }

    // listening and choosing pics
    public function listening_and_choosing_pics()
    {
        //
    }

    // rearrange_a_sentence_with_audio
    public function rearrange_a_sentence_with_audio()
    {
        //
    }

    // speaking_and_recording
    public function speaking_and_recording()
    {
        //
    }
}
