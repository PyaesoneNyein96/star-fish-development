<?php

namespace App\Http\Traits;

use App\Models\Game;
use App\Models\Round;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Subunit;


trait gameTraits
{

    // For Drag and Drop
    public function drag_n_drop_and_letter($game, $student, $unit)
    {

        // $gameId = $game->pluck('id');


        $count = $game->count();
        if ($count == 1) {
            $game = $game[0];
        }


        $games = Game::with([
            'instructions', 'rounds.questions', 'rounds.answers',
            'rounds.characters', 'rounds.conversations', 'rounds.backgrounds'
        ])->where('id', $game->id)->first();



        $games['lesson_id'] = $unit->lesson_id;
        $games['subUnit'] = $count == 1 ? false : true;
        return $games;
    }

    ///////////////////////////////////////////////////////////////

    // For Cloud Games
    public function listening_and_choosing_clouds_one($game, $student, $unit)
    {


        // $game = $game[0]->ans_n_ques;

        // $game = $game[0]->ans_n_ques->groupBy('round_id');

        // foreach ($game as $roundId => $groupedData) {

        //     $customKey = "Round_".$roundId;

        //     $game[$customKey] = $groupedData;

        //     // Remove the original key (optional)
        //     unset($game[$roundId]);
        // }


        // return $game;


        $count = $game->count();
        if ($count == 1) {
            $game = $game[0];
        }
        // $gameId = $game->id;

        // return Game::where('id',$game->id)->with('rounds.')->first();


        // $game = Game::with('instructions', 'ans_n_ques')->where('id', $gameId)->get();

        $game = Game::with([
            'instructions', 'rounds.questions', 'rounds.answers',
             'rounds.conversations', 'rounds.backgrounds'
        ])->where('id', $game->id)->first();





        $gameData = [
            "id" => $game["id"],
            "name" => $game["name"],
            "lesson_id" => $unit->lesson_id,
            "unit_id" => $unit->id,
            'subUnit' => $count !== 1 ? true : false,
            "instructionGIF" => $game['instructionGIF'],
            "instructions" => $game['instructions'],
            "rounds" => $game["rounds"],

        ];

        return $gameData;
    }


    //////////////////////////////////////////////////////////////

    // For without round Games
    public function reading_carousel($game, $student, $unit)
    {

        return $game;

        // if (count($game) == 1) {
        //     $game = $game[0];
        //     $game['lesson_id'] = $unit->lesson_id;
        //     $game['subunit'] = $unit->subUnit == 1 ? true : false;
        //     return $game;
        // }
    }

    // Video
    public function video_player_lessons($game, $student, $unit)
    {

        $count = count($game);
        if ($count == 1) {
            $game = $game[0];
        }
        $videos = $game->videos;

        $result = $videos->filter(function ($v) use ($student) {
            return $v->isLocal == $student->isLocal;
        });

        $videos = $result->values()->map(function ($v) use ($student) {
            return [
                'video_id' => $v->path,
                'local' => $v->isLocal,
                'type' => 'Video',
            ];
        });

        $collection = [
            'id' => $game->id,
            'name' => $game->name,
            'lesson_id' => $unit->lesson_id,
            'unit_id' => $unit->id,
            'instructionGIF' => $game->instructionGIF,
            'instructions' => $game->instructions,
            'subUnit' => $count == 1 ? false : true,
            'videos' => $videos
        ];

        return $collection;
    }

    // Song
    public function video_player_song($game, $student, $unit)
    {

        $count = count($game);
        if ($count == 1) {
            $game = $game[0];
        }

        $songs = $game->songs;

        $result = $songs->filter(function ($s) use ($student) {
            return $s->isLocal == $student->isLocal;
        });



        $songs = $result->values()->map(function ($s) {
            return [
                'song_id' => $s->path,
                'local' => $s->isLocal,
                'type' => "song",
            ];
        });

        $collection = [
            'id' => $game->id,
            'name' => $game->name,
            'lesson_id' => $unit->lesson_id,
            'unit_id' => $unit->id,
            'instructions' => $game->instructions,
            'instructionGIF' => $game->instructionGIF,
            'subUnit' => $count == 1 ? false : true,
            'songs' => $songs
        ];

        return $collection;
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
