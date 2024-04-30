<?php

namespace Database\Seeders\Assessment;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "rearrange_with_audio",
            "fill_in_the_blanks",
            "listening_choosing_answer",
            "drag_and_drop_one",
            "reading_passage",
            "mcq_tf_instruction_two",
            "choose_right_sentence",
            "look_and_choose",
            "drag_and_drop_two",
            "drag_and_drop_three",
            "drag_and_drop_four",
            "listen_and_act",
            "matching_columns",
            "word_tracing",
            "listening_and_choosing_pics_one",
            "look_and_write",
            "listening_choosing_answer_two",
            "choose_right_answer"
        ];


        foreach ($categories as $category) {
            DB::table('assessment_categories')->insert([
                ['name' => $category],
            ]);
        }
    }
}
