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
            'writing_opposite',
            'listening_and_choosing_pics_two',
            'listening_and_choosing_bubbles'

        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                ['name' => $category, 'type' => null],
            ]);
        }
    }
}
