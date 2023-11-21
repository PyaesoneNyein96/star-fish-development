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
            'video_player_song',
            'video_player_lessons',
            'reading_carousel',
            'reading_diagram',
            'reading_passage',
            'reading_two_columns',
            'reading_conversation',
            'drag_n_drop_and_letter',
            'drag_n_drop_and_columns',
            // 'drag_n_drop_and_sentence',
            'drag_n_drop_and_pics',
            'matching_columns',
            'speaking_and_recording',
            'rearrange_a_sentence_with_audio',
            'rearrange_a_word_with_audio',
            'rearrange_a_sentence_without_audio',
            'listening_and_record_speaking',
            'listening_and_choosing_pics',
            'listening_and_choosing_clouds_one',
            'listening_and_choosing_clouds_two',
            'listening_and_choosing_answer',
            'listening_and_search_items',
            'mcq_grammar',
            'mcq_tf_Instruction',
            'Mcq_tf_grammar',
            'mcq_sentence',
            'letter_tracing',
            'fill_in_blank_word',

        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                ['name' => $category, 'type' => null ],
            ]);

        }
    }
}