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
     *  12. mcq_grammar
     *  13. mcq_sentence
     *  14. listening_and_choosing_bubbles
     *  15. fill_in_the_blanks_two
     *  16. sentence_tracing
     *  17. listen_and_speak
     *  18. choose_right_sentence
     *  19. rearrange_and_fill_blanks
     *  20. reading_carousel_two
     *  21. look_and_write
     *  22. listen_and_choose_three
     *  23. mcq_grammar_two
     *  24. listening_choosing_answer
     *  25. free_speaking
     *  26. listening_conversation_and_record_audio
     *  27. listening_choosing_answer_two
     *  28. look_and_choose
     *  29. speak_listen_and_record
     *  30. rearrange_with_audio_two
     *  31. look_and_choose_two
     *  32. speaking_and_recording_conversation
     *  33. matching_columns_two
     *  34. look_writing_topic
     *  35. writing_image_topic
     *
     *
     */



    public function rearrange_with_audio($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function speaking_and_recording($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function reading_and_record_speaking($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function listening_conversation_and_choosing_answer($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function reading_passage($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function drag_n_drop_and_columns($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function reading_conversation($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function reading_two_columns($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function listening_and_choosing_pics_one($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function listening_and_search_items($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function mcq_tf_instruction($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function mcq_grammar($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function mcq_sentence($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function listening_and_choosing_bubbles($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function fill_in_the_blanks_two($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function sentence_tracing($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function listen_and_speak($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function choose_right_sentence($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function rearrange_and_fill_blanks($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function look_and_write($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function listen_and_choose_three($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function mcq_grammar_two($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function listening_choosing_answer($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function free_speaking($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function listening_choosing_answer_two($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function look_and_choose($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function rearrange_with_audio_two($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function look_and_choose_two($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function speaking_and_recording_conversation($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function matching_columns_two($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function look_writing_topic($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    public function writing_image_topic($game, $student, $unit)
    {
        return $this->common_fun($game, $unit);
    }

    // speak_listen_and_record
    public function speak_listen_and_record($game, $student, $unit)
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
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $game->ans_n_ques->groupBy('round')->values()

        ];
    }

    // reading_carousel_two
    public function reading_carousel_two($game, $student, $unit)
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
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'data' => $game->ans_n_ques->groupBy('q_content')->values()

        ];
    }

    // listening_conversation_and_record_audio
    public function listening_conversation_and_record_audio($game, $student, $unit)
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
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,
            'rounds' => $game->ans_n_ques->groupBy('round')->values()

        ];
    }

    // common function
    private function common_fun($game, $unit)
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
            'instructions' =>  $game->instructions->count() == 0 ? null : $game->instructions,

        ];

        if ($roundExist) {
            $data['rounds'] = $game->ans_n_ques->groupBy('round')->values();
            if (count($data['rounds'][0]) == 1) $data["rounds"] = $game->ans_n_ques;
        } else {
            $data['data'] = $game->ans_n_ques;
        }
        return $data;
    }
}
