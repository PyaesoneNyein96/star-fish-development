<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('units')->insert([

            // lesson 1's games

            ['unit' => 'Video', 'lesson_id' => 1, 'category_id' => 1],
            ['unit' => 'Read & Practice', 'lesson_id' => 1, 'category_id' => 2],
            ['unit' => 'Song', 'lesson_id' => 1, 'category_id' => 3],
            ['unit' => 'Listen & Practice', 'lesson_id' => 1, 'category_id' => 4],
            ['unit' => 'Writing (Arranging Order)', 'lesson_id' => 1, 'category_id' => 5],

            // lesson 2's games

            ['unit' => 'Video', 'lesson_id' => 2, 'category_id' => 1],
            ['unit' => 'Read & Practice', 'lesson_id' => 2, 'category_id' => 2],
            ['unit' => 'Song', 'lesson_id' => 2, 'category_id' => 3],
            ['unit' => 'Listen & Practice', 'lesson_id' => 2, 'category_id' => 6],
            ['unit' => 'Matching', 'lesson_id' => 2, 'category_id' => 7],
            ['unit' => 'Writing (Arranging Order)', 'lesson_id' => 2, 'category_id' => 5],


            // lesson 3's games

            ['unit' => 'Video', 'lesson_id' => 3, 'category_id' => 1],
            ['unit' => 'Read Listen & Repeat', 'lesson_id' => 3, 'category_id' => 8],
            ['unit' => 'Listen and practice', 'lesson_id' => 3, 'category_id' => 9],
            ['unit' => 'Writing (Arranging Order)', 'lesson_id' => 3, 'category_id' => 10],
            ['unit' => 'Speaking', 'lesson_id' => 3, 'category_id' => 11],


            // lesson 4's games

            ['unit' => 'Video', 'lesson_id' => 4, 'category_id' => 1],
            ['unit' => 'Read, Listen & Repeat', 'lesson_id' => 4, 'category_id' => 8],
            ['unit' => 'Read, Listen & Repeat', 'lesson_id' => 4, 'category_id' => 12],
            ['unit' => 'Listening & Practice', 'lesson_id' => 4, 'category_id' => 13],
            ['unit' => 'Writing (Arranging Order)', 'lesson_id' => 4, 'category_id' => 14],

            // lesson 5's games

            ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 5, 'category_id' => 1],
            ['unit' => 'Listen and Practice', 'lesson_id' => 5, 'category_id' => 15],
            ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 5, 'category_id' => null],
            ['unit' => 'Reading Passage', 'lesson_id' => 5, 'category_id' => 16],
            ['unit' => 'Speaking Practice', 'lesson_id' => 5, 'category_id' => 11],
            ['unit' => 'Writing', 'lesson_id' => 5, 'category_id' => 14],

            // lesson 6's games

            ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 6, 'category_id' => 1],
            ['unit' => 'Reading', 'lesson_id' => 6, 'category_id' => 2],
            ['unit' => 'Listen and Practice', 'lesson_id' => 6, 'category_id' => 17],
            ['unit' => 'Matching', 'lesson_id' => 6, 'category_id' => 7],
            ['unit' => 'Speaking Practice', 'lesson_id' => 6, 'category_id' => 11],
            ['unit' => 'Writing', 'lesson_id' => 6, 'category_id' => 14],

            // lesson 7's games

            ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 7, 'category_id' => 1],
            ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 7, 'category_id' => 2],
            ['unit' => 'Listen and Practice', 'lesson_id' => 7, 'category_id' => 17],
            ['unit' => 'Matching', 'lesson_id' => 7, 'category_id' => 7],
            ['unit' => 'Speaking Practice', 'lesson_id' => 7, 'category_id' => 11],
            ['unit' => '6', 'lesson_id' => 7, 'category_id' => 18],
            ['unit' => '6', 'lesson_id' => 7, 'category_id' => 14],

            // lesson 8's games

            ['unit' => 'Video', 'lesson_id' => 8, 'category_id' => 1],
            ['unit' => 'Read', 'lesson_id' => 8, 'category_id' => 2],
            ['unit' => 'listening Practice', 'lesson_id' => 8, 'category_id' => 17],
            ['unit' => 'Matching', 'lesson_id' => 8, 'category_id' => 7],
            ['unit' => 'Speaking Practice', 'lesson_id' => 8, 'category_id' => 11],
            ['unit' => 'Reading Passage', 'lesson_id' => 8, 'category_id' => 16],
            ['unit' => 'Writing', 'lesson_id' => 8, 'category_id' => 14],

            // lesson 9's games

            ['unit' => 'Target Language', 'lesson_id' => 9, 'category_id' => 1],
            ['unit' => 'Reading', 'lesson_id' => 9, 'category_id' => 2],
            ['unit' => 'Listen and practice', 'lesson_id' => 9, 'category_id' => 17],
            ['unit' => 'Matching', 'lesson_id' => 9, 'category_id' => 7],
            ['unit' => 'Speaking Practice', 'lesson_id' => 9, 'category_id' => 11],
            ['unit' => 'Writing', 'lesson_id' => 9, 'category_id' => 14],

            // lesson 10's games

            ['unit' => 'Target', 'lesson_id' => 10, 'category_id' => 1],
            ['unit' => 'Reading', 'lesson_id' => 10, 'category_id' => 2],
            ['unit' => 'Listen and Practice', 'lesson_id' => 10, 'category_id' => 17],
            ['unit' => 'Matching', 'lesson_id' => 10, 'category_id' => 7],
            ['unit' => 'Speaking Practice', 'lesson_id' => 10, 'category_id' => 11],
            ['unit' => 'Writing', 'lesson_id' => 10, 'category_id' => 14],

            // lesson 11's games

            ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 11, 'category_id' => 1],
            ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 11, 'category_id' => 2],
            ['unit' => 'Listen and Practice', 'lesson_id' => 11, 'category_id' => 6],
            ['unit' => 'Matching', 'lesson_id' => 11, 'category_id' => 7],
            ['unit' => 'Speaking Practice', 'lesson_id' => 11, 'category_id' => 11],
            ['unit' => 'Reading Passage', 'lesson_id' => 11, 'category_id' => 16],

            // lesson 12's games

            ['unit' => 'Target Language', 'lesson_id' => 12, 'category_id' => 1],
            ['unit' => 'Reading', 'lesson_id' => 12, 'category_id' => 2],
            ['unit' => 'Listen and Practice', 'lesson_id' => 12, 'category_id' => 17],
            ['unit' => 'Matching', 'lesson_id' => 12, 'category_id' => 7],
            ['unit' => 'Speaking Practice', 'lesson_id' => 12, 'category_id' => 11],
            ['unit' => 'Writing', 'lesson_id' => 12, 'category_id' => 18],
            ['unit' => '7', 'lesson_id' => 12, 'category_id' => 14],


        ]);
    }
}
