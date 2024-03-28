<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



    public function run(): void
    {

        $categories = [
            'video_player_lessons',
            'reading_carousel',
            'video_player_song',
            'listening_and_choosing_clouds_one',
            'drag_n_drop_and_letter',
            'listening_and_choosing_clouds_two',
            'matching_columns',
            'reading_conversation',
            'reading_two_columns',
            'fill_in_the_blanks', // ***
            'speaking_and_recording',
            'reading_and_record_speaking',
            'listening_conversation_and_choosing_answer',
            'rearrange_with_audio',
            'listening_and_choosing_pics_one',
            'reading_passage',
            'listening_and_search_items',
            'letter_tracing',
            'drag_n_drop_and_columns',
            'mcq_tf_instruction',
            'mcq_grammar',
            'reading_diagram',
            'drag_n_drop_and_pics',
            'mcq_sentence',
            'mcq_tf_grammar',
            'writing_topic',
            'writing_image_topic',
            'listening_and_choosing_pics_two',
            'listening_and_choosing_bubbles',
            'fill_in_the_blanks_two',
            'sentence_tracing',
            'listen_and_speak',
            'reading_carousel_two',
            'look_and_write',
            'speak_listen_and_record',
            'rearrange_and_fill_blanks',
            'matching_columns_two',
            'listening_conversation_and_record_audio',
            'listening_choosing_answer',
            'choose_right_sentence',
            'reading_two_columns',
            'free_speaking',
            'listening_choosing_answer_two',
            'listening_drag_n_drop',
            'look_and_choose',
            'reading_passage_two',
            'look_and_write_two',
            'write_possible_answer',
            'look_and_write_three',
            'rearrange_with_audio_two',
            'look_and_choose_two',
            'speaking_and_recording_conversation',
            'listen_and_choose_three',
            'skimming_reading_passage',
            'listening_and_choosing_pics_three',
            'look_writing_topic',
            'skimming_reading_conversation',
            'fill_in_the_blanks_three',
            'matching_columns_three',
            'listening_and_choosing_pics_four'


        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                ['name' => $category, 'type' => null],
            ]);
        }
    }
}
