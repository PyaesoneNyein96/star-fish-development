<?php

namespace App\Http\Traits;

trait gameTraits2
{

    /**
     *
     *  1. rearrange_with_audio
     *  2. speaking_and_recording
     *  3. reading_and_record_speaking
     *  4. listening_conversation_and_choosing_answer
     *  5. reading_passage
     *  6. drag_n_drop_and_columns
     *  7. reading_conversation
     *  8. reading_two_columns
     *  9. listening_and_choosing_pics_one
     *
     */



    // rearrange_with_audio
    public function rearrange_with_audio($game, $student, $unit)
    {
        $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }

    // speaking_and_recording
    public function speaking_and_recording($game, $student, $unit)
    {
        $game = $game[0];

        $rounds =  $game->ans_n_ques;

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }

    // reading_and_record_speaking
    public function reading_and_record_speaking($game, $student, $unit)
    {
        $game = $game[0];

        $rounds =  $game->ans_n_ques;

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }

    // listening_conversation_and_choosing_answer
    public function listening_conversation_and_choosing_answer($game, $student, $unit)
    {
        $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }

    // reading_passage
    public function reading_passage($game, $student, $unit)
    {
        $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }

    // drag_n_drop_and_columns
    public function drag_n_drop_and_columns($game, $student, $unit)
    {
        $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }

    // reading_conversation
    public function reading_conversation($game, $student, $unit)
    {
        $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }

    // reading_two_columns
    public function reading_two_columns($game, $student, $unit)
    {
        $game = $game[0];

        $rounds =  $game->ans_n_ques;

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }

    // listening_and_choosing_pics_one
    public function listening_and_choosing_pics_one($game, $student, $unit)
    {
        $game = $game[0];

        $rounds =  $game->ans_n_ques->groupBy('round')->values();

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $rounds
        ];
    }
}
