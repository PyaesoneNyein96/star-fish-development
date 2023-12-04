<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lesson_games')->insert([

            // lesson 1

            ['grade_id' => 1, 'lesson' => 1, 'game_name' => "Video", "subunit_name" => null, "category_id" => 1],
            ['grade_id' => 1, 'lesson' => 1, 'game_name' => "Read & Practice", "subunit_name" => null, "category_id" => 2],
            ['grade_id' => 1, 'lesson' => 1, 'game_name' => "Song", "subunit_name" => null, "category_id" => 3],
            ['grade_id' => 1, 'lesson' => 1, 'game_name' => "Listen & Practice", "subunit_name" => null, "category_id" => 4],
            ['grade_id' => 1, 'lesson' => 1, 'game_name' => "Writing (Arranging Order)", "subunit_name" => null, "category_id" => 5],



            // lesson 7

            ['grade_id' => 1, 'lesson' => 7, 'game_name' => "Target Language & Grammar Explanation", "subunit_name" => null, "category_id" => 1],
            ['grade_id' => 1, 'lesson' => 7, 'game_name' => "Read, Listen and Repeat", "subunit_name" => null, "category_id" => 2],
            ['grade_id' => 1, 'lesson' => 7, 'game_name' => "Listen and Practice", "subunit_name" => null, "category_id" => 17],
            ['grade_id' => 1, 'lesson' => 7, 'game_name' => "Matching", "subunit_name" => null, "category_id" => 7],
            ['grade_id' => 1, 'lesson' => 7, 'game_name' => "Speaking Practice", "subunit_name" => null, "category_id" => 11],
            ['grade_id' => 1, 'lesson' => 7, 'game_name' => "Writing Sentences order", "subunit_name" => "Writing 1", "category_id" => 18],
            ['grade_id' => 1, 'lesson' => 7, 'game_name' => "Writing Sentences order", "subunit_name" => "Writing 2", "category_id" => 14],



            // lesson 15

            ['grade_id' => 1, 'lesson' => 15, 'game_name' => "Target Language & Grammar Explanation", "subunit_name" => null, "category_id" => 1],
            ['grade_id' => 1, 'lesson' => 15, 'game_name' => "Listen, Read and Repeat", "subunit_name" => "Reading 1", "category_id" => 8],
            ['grade_id' => 1, 'lesson' => 15, 'game_name' => "Listen, Read and Repeat", "subunit_name" => "Reading 2", "category_id" => 8],
            ['grade_id' => 1, 'lesson' => 15, 'game_name' => "Listen and Practice", "subunit_name" => 1, "category_id" => 17],
            ['grade_id' => 1, 'lesson' => 15, 'game_name' => "Listen and Practice", "subunit_name" => 2, "category_id" => 21],
            ['grade_id' => 1, 'lesson' => 15, 'game_name' => "Grammar", "subunit_name" => null, "category_id" => 21],
            ['grade_id' => 1, 'lesson' => 15, 'game_name' => "Speaking Practice", "subunit_name" => null, "category_id" => 11],
            ['grade_id' => 1, 'lesson' => 15, 'game_name' => "Reading", "subunit_name" => null, "category_id" => 16],






        ]);
    }
}
