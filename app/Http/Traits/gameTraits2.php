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
     *  10. listening_and_search_items
     *  11. mcq_tf_instruction
     *
     *
     */



    // rearrange_with_audio
    public function rearrange_with_audio($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques->groupBy('round')->values()
        ];
    }

    // speaking_and_recording
    public function speaking_and_recording($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques
        ];
    }

    // reading_and_record_speaking
    public function reading_and_record_speaking($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques
        ];
    }

    // listening_conversation_and_choosing_answer
    public function listening_conversation_and_choosing_answer($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques->groupBy('round')->values()
        ];
    }

    // reading_passage
    public function reading_passage($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques->groupBy('round')->values()
        ];
    }

    // drag_n_drop_and_columns
    public function drag_n_drop_and_columns($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'lesson_id' => $unit->lesson_id,
            'game_name' => $game->name,
            'unit_name' => $unit->name,
            'game_status' => $game->status,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'category' => $game->category->name,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques->groupBy('round')->values()
        ];
    }

    // reading_conversation
    public function reading_conversation($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques->groupBy('round')->values()
        ];
    }

    // reading_two_columns
    public function reading_two_columns($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques
        ];
    }

    // listening_and_choosing_pics_one
    public function listening_and_choosing_pics_one($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques->groupBy('round')->values()
        ];
    }

    // listening_and_search_items
    public function listening_and_search_items($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques->groupBy('round')->values()
        ];
    }

    // mcq_tf_instruction
    public function mcq_tf_instruction($game, $student, $unit)
    {
        if (isset($game[0])) $game = $game[0];

        return [
            'game_id' => $game->id,
            'game_name' => $game->name,
            'game_status' => $game->status,
            'unit_name' => $unit->name,
            'lesson_id' => $unit->lesson_id,
            'sub_unit'  => $game->count() < 1 ? true : false,
            'instructionGIF'  => $game->instructionGIF,
            'instructions' => !$game->instructions ? null : $game->instructions,
            'rounds' => $game->ans_n_ques->groupBy('round')->values()
        ];
    }
}
