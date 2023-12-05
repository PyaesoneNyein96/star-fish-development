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

            ['name' => 'Video', 'lesson_id' => 1, 'category_id' => 1],
            ['name' => 'Read and Practice', 'lesson_id' => 1, 'category_id' => 2],
            ['name' => 'Song', 'lesson_id' => 1, 'category_id' => 3],
            ['name' => 'Listen and Practice', 'lesson_id' => 1, 'category_id' => 4],
            ['name' => 'Writing (Arranging Order)', 'lesson_id' => 1, 'category_id' => 5],

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


            // // lesson 4's games

            // ['unit' => 'Video', 'lesson_id' => 4, 'category_id' => 1],
            // ['unit' => 'Read, Listen & Repeat', 'lesson_id' => 4, 'category_id' => 8],
            // ['unit' => 'Read, Listen & Repeat', 'lesson_id' => 4, 'category_id' => 12],
            // ['unit' => 'Listening & Practice', 'lesson_id' => 4, 'category_id' => 13],
            // ['unit' => 'Writing (Arranging Order)', 'lesson_id' => 4, 'category_id' => 14],

            // // lesson 5's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 5, 'category_id' => 1],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 5, 'category_id' => 15],
            // ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 5, 'category_id' => null],
            // ['unit' => 'Reading Passage', 'lesson_id' => 5, 'category_id' => 16],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 5, 'category_id' => 11],
            // ['unit' => 'Writing', 'lesson_id' => 5, 'category_id' => 14],

            // // lesson 6's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 6, 'category_id' => 1],
            // ['unit' => 'Reading', 'lesson_id' => 6, 'category_id' => 2],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 6, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 6, 'category_id' => 7],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 6, 'category_id' => 11],
            // ['unit' => 'Writing', 'lesson_id' => 6, 'category_id' => 14],

            // // lesson 7's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 7, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 7, 'category_id' => 2],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 7, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 7, 'category_id' => 7],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 7, 'category_id' => 11],
            // ['unit' => 'Writing Sentences order 6', 'lesson_id' => 7, 'category_id' => null], // <<<<====
            // ['unit' => '6', 'lesson_id' => 7, 'category_id' => null],                         // <<<<====

            // // lesson 8's games

            // ['unit' => 'Video', 'lesson_id' => 8, 'category_id' => 1],
            // ['unit' => 'Read', 'lesson_id' => 8, 'category_id' => 2],
            // ['unit' => 'listening Practice', 'lesson_id' => 8, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 8, 'category_id' => 7],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 8, 'category_id' => 11],
            // ['unit' => 'Reading Passage', 'lesson_id' => 8, 'category_id' => 16],
            // ['unit' => 'Writing', 'lesson_id' => 8, 'category_id' => 14],

            // // lesson 9's games

            // ['unit' => 'Target Language', 'lesson_id' => 9, 'category_id' => 1],
            // ['unit' => 'Reading', 'lesson_id' => 9, 'category_id' => 2],
            // ['unit' => 'Listen and practice', 'lesson_id' => 9, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 9, 'category_id' => 7],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 9, 'category_id' => 11],
            // ['unit' => 'Writing', 'lesson_id' => 9, 'category_id' => 14],

            // // lesson 10's games

            // ['unit' => 'Target', 'lesson_id' => 10, 'category_id' => 1],
            // ['unit' => 'Reading', 'lesson_id' => 10, 'category_id' => 2],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 10, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 10, 'category_id' => 7],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 10, 'category_id' => 11],
            // ['unit' => 'Writing', 'lesson_id' => 10, 'category_id' => 14],

            // // lesson 11's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 11, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 11, 'category_id' => 2],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 11, 'category_id' => 6],
            // ['unit' => 'Matching', 'lesson_id' => 11, 'category_id' => 7],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 11, 'category_id' => 11],
            // ['unit' => 'Reading Passage', 'lesson_id' => 11, 'category_id' => 16],

            // lesson 12's games

            // ['unit' => 'Target Language', 'lesson_id' => 12, 'category_id' => 1],
            // ['unit' => 'Reading', 'lesson_id' => 12, 'category_id' => 2],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 12, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 12, 'category_id' => 7],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 12, 'category_id' => 11],
            // ['unit' => 'Writing 7', 'lesson_id' => 12, 'category_id' => null], // <<<<====
            // ['unit' => '7', 'lesson_id' => 12, 'category_id' => null],         // <<<<====

            // // lesson 13's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 13, 'category_id' => 1],
            // ['unit' => 'Reading, Listen and Repeat', 'lesson_id' => 13, 'category_id' => 2],
            // ['unit' => 'Drag and Drop', 'lesson_id' => 13, 'category_id' => 19],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 13, 'category_id' => 20],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 13, 'category_id' => 11],

            // // lesson 14's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 14, 'category_id' => 1],
            // ['unit' => 'Reading, Listen and Repeat', 'lesson_id' => 14, 'category_id' => 2],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 14, 'category_id' => 20],
            // ['unit' => 'Grammar', 'lesson_id' => 14, 'category_id' => 21],
            // ['unit' => 'Writing', 'lesson_id' => 14, 'category_id' => 14],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 14, 'category_id' => 11],

            // // lesson 15's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 15, 'category_id' => 1],
            // ['unit' => 'Listen, Reading and Repeat', 'lesson_id' => 15, 'category_id' => 8], // <<<<====
            // ['unit' => 'Listen, Reading and Repeat', 'lesson_id' => 15, 'category_id' => 8], // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 15, 'category_id' => null], // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 15, 'category_id' => null], // <<<<====
            // ['unit' => 'Grammar', 'lesson_id' => 15, 'category_id' => 21],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 15, 'category_id' => 11],
            // ['unit' => 'Reading', 'lesson_id' => 15, 'category_id' => 16],

            // // lesson 16's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 16, 'category_id' => 1],
            // ['unit' => 'Reading, Listen and Repeat', 'lesson_id' => 16, 'category_id' => 2],
            // ['unit' => 'Listen and Practice, Game', 'lesson_id' => 16, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 16, 'category_id' => 7],
            // ['unit' => 'Speaking 1', 'lesson_id' => 16, 'category_id' => 11], // <<<<====
            // ['unit' => 'Speaking 2', 'lesson_id' => 16, 'category_id' => 11], // <<<<====
            // ['unit' => 'Writing 1', 'lesson_id' => 16, 'category_id' => null], // <<<<====
            // ['unit' => 'Writing 2', 'lesson_id' => 16, 'category_id' => null], // <<<<====

            // // lesson 17's games

            // ['unit' => 'Target Language', 'lesson_id' => 17, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat Reading 1', 'lesson_id' => 17, 'category_id' => null], // <<<<====
            // ['unit' => 'Reading 2', 'lesson_id' => 17, 'category_id' => null],                   // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 17, 'category_id' => 23],
            // ['unit' => 'Matching', 'lesson_id' => 17, 'category_id' => 7],
            // ['unit' => 'Listen and Act', 'lesson_id' => 17, 'category_id' => 13],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 17, 'category_id' => 11],

            // // lesson 18's games

            // ['unit' => 'Grammar Explanation', 'lesson_id' => 18, 'category_id' => 1],
            // ['unit' => 'Listen, Read and Repeat', 'lesson_id' => 18, 'category_id' => 22],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 18, 'category_id' => 21],
            // ['unit' => 'Listen and Act', 'lesson_id' => 18, 'category_id' => 13],
            // ['unit' => 'Writing', 'lesson_id' => 18, 'category_id' => 14],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 18, 'category_id' => 11],

            // // lesson 19's games

            // ['unit' => 'Target Language', 'lesson_id' => 19, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat', 'lesson_id' => 19, 'category_id' => 22],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 19, 'category_id' => 21],
            // ['unit' => 'Listen and Act', 'lesson_id' => 19, 'category_id' => 13],
            // ['unit' => 'Reading', 'lesson_id' => 19, 'category_id' => 16],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 19, 'category_id' => 11],

            // // lesson 20's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 20, 'category_id' => 1],
            // ['unit' => 'Reading, Listen and Repeat', 'lesson_id' => 20, 'category_id' => 2],
            // ['unit' => 'Listen and Practice Game', 'lesson_id' => 20, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 20, 'category_id' => 7],
            // ['unit' => 'Speaking 1', 'lesson_id' => 20, 'category_id' => 11], // <<<<====
            // ['unit' => 'Speaking 2', 'lesson_id' => 20, 'category_id' => 11], // <<<<====
            // ['unit' => 'Writing 1', 'lesson_id' => 20, 'category_id' => null], // <<<<====
            // ['unit' => 'Writing 2', 'lesson_id' => 20, 'category_id' => null], // <<<<====

            // // lesson 21's games

            // ['unit' => 'Target Language', 'lesson_id' => 21, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat Reading 1', 'lesson_id' => 21, 'category_id' => 2], // <<<<====
            // ['unit' => 'Reading 2', 'lesson_id' => 21, 'category_id' => 2],                   // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 21, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 21, 'category_id' => 7],
            // ['unit' => 'Speaking', 'lesson_id' => 21, 'category_id' => 11],

            // // lesson 22's games

            // ['unit' => 'Target Language', 'lesson_id' => 22, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat Reading 1', 'lesson_id' => 22, 'category_id' => 2], // <<<<====
            // ['unit' => 'Reading 2', 'lesson_id' => 22, 'category_id' => 2],                   // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 22, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 22, 'category_id' => 7],
            // ['unit' => 'Writing', 'lesson_id' => 22, 'category_id' => 14],
            // ['unit' => 'Speaking', 'lesson_id' => 22, 'category_id' => 11],

            // // lesson 23's games

            // ['unit' => 'Target Language', 'lesson_id' => 23, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat Reading 1', 'lesson_id' => 23, 'category_id' => 2], // <<<<====
            // ['unit' => 'Reading 2', 'lesson_id' => 23, 'category_id' => 2],                   // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 23, 'category_id' => 24],
            // ['unit' => 'True or False', 'lesson_id' => 23, 'category_id' => 20],
            // ['unit' => 'Reading', 'lesson_id' => 23, 'category_id' => 16],
            // ['unit' => 'Speaking Practice', 'lesson_id' => 23, 'category_id' => 11],

            // // lesson 24's games

            // ['unit' => 'Target Language', 'lesson_id' => 24, 'category_id' => 1],
            // ['unit' => 'Reading 1', 'lesson_id' => 24, 'category_id' => 2],      // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 24, 'category_id' => 17],
            // ['unit' => 'Song', 'lesson_id' => 24, 'category_id' => 3],
            // ['unit' => 'Speaking', 'lesson_id' => 24, 'category_id' => 11],
            // ['unit' => 'Writing', 'lesson_id' => 24, 'category_id' => 11],

            // // lesson 25's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 25, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat Reading 1', 'lesson_id' => 25, 'category_id' => 2],        // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 25, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 25, 'category_id' => 7],
            // ['unit' => 'Speaking', 'lesson_id' => 25, 'category_id' => 11],
            // ['unit' => 'Writing Round 1', 'lesson_id' => 25, 'category_id' => null],  // <<<<====
            // ['unit' => 'Writing', 'lesson_id' => 25, 'category_id' => null],          // <<<<====

            // // lesson 26's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 26, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat Reading 1', 'lesson_id' => 26, 'category_id' => 2],      // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 26, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 26, 'category_id' => 7],
            // ['unit' => 'Grammar', 'lesson_id' => 26, 'category_id' => 21],
            // ['unit' => 'Speaking 1', 'lesson_id' => 26, 'category_id' => 11],    // <<<<====

            // // lesson 27's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 27, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat Reading 1', 'lesson_id' => 27, 'category_id' => 2],      // <<<<====
            // ['unit' => 'Listen and Practice Game', 'lesson_id' => 27, 'category_id' => 17],
            // ['unit' => 'Matching Round 1', 'lesson_id' => 27, 'category_id' => 7],      // <<<<====
            // ['unit' => 'Speaking 1', 'lesson_id' => 27, 'category_id' => 11],      // <<<<====
            // ['unit' => 'Writing', 'lesson_id' => 27, 'category_id' => 14],

            // // lesson 28's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 28, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat Reading 1', 'lesson_id' => 28, 'category_id' => 2],      // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 28, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 28, 'category_id' => 7],
            // ['unit' => 'Reading', 'lesson_id' => 28, 'category_id' => 16],
            // ['unit' => 'Speaking 1', 'lesson_id' => 28, 'category_id' => 11],         // <<<<====

            // // lesson 29's games

            // ['unit' => 'Target Language', 'lesson_id' => 29, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat Reading 1', 'lesson_id' => 29, 'category_id' => 8],      // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 29, 'category_id' => 17],
            // ['unit' => 'Song', 'lesson_id' => 29, 'category_id' => 3],
            // ['unit' => 'Word order', 'lesson_id' => 29, 'category_id' => 14],
            // ['unit' => 'Speaking', 'lesson_id' => 29, 'category_id' => 11],

            // // lesson 30's games

            // ['unit' => 'Target Language', 'lesson_id' => 30, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat', 'lesson_id' => 30, 'category_id' => 2],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 30, 'category_id' => 17],
            // ['unit' => 'Matching Round 1', 'lesson_id' => 30, 'category_id' => 7],    // <<<<====
            // ['unit' => 'Speaking Round 1', 'lesson_id' => 30, 'category_id' => 11],     // <<<<====
            // ['unit' => 'Writing Round 1', 'lesson_id' => 30, 'category_id' => null], // <<<<====
            // ['unit' => 'Writing Round 2', 'lesson_id' => 30, 'category_id' => null], // <<<<====

            // // lesson 31's games

            // ['unit' => 'Target Language', 'lesson_id' => 31, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat', 'lesson_id' => 31, 'category_id' => 2],
            // ['unit' => 'Listen and Practice Game 1', 'lesson_id' => 31, 'category_id' => 17],  // <<<<====
            // ['unit' => 'Game 2', 'lesson_id' => 31, 'category_id' => 17],                      // <<<<====
            // ['unit' => 'Matching', 'lesson_id' => 31, 'category_id' => 7],
            // ['unit' => 'Speaking', 'lesson_id' => 31, 'category_id' => 11],
            // ['unit' => 'Writing 1', 'lesson_id' => 31, 'category_id' => null],  // <<<<====
            // ['unit' => 'Writing 2', 'lesson_id' => 31, 'category_id' => null],  // <<<<====

            // // lesson 32's games

            // ['unit' => 'Target Language', 'lesson_id' => 32, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat Reading 1', 'lesson_id' => 32, 'category_id' => 2],      // <<<<====
            // ['unit' => 'Listen and Practice Round 1', 'lesson_id' => 32, 'category_id' => 17],  // <<<<====
            // ['unit' => 'Listen and Practice Round 2', 'lesson_id' => 32, 'category_id' => 17],  // <<<<====
            // ['unit' => 'Matching', 'lesson_id' => 32, 'category_id' => 7],
            // ['unit' => 'Reading', 'lesson_id' => 32, 'category_id' => 16],
            // ['unit' => 'Speaking', 'lesson_id' => 32, 'category_id' => 11],

            // // lesson 33's games

            // ['unit' => 'Target Language and Grammar Explanation', 'lesson_id' => 33, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 33, 'category_id' => 2],
            // ['unit' => 'Listen and Practice', 'lesson_id' => 33, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 33, 'category_id' => 7],
            // ['unit' => 'Speaking', 'lesson_id' => 33, 'category_id' => 11],

            // // lesson 34's games

            // ['unit' => 'Target Language and Grammar Explanation', 'lesson_id' => 34, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 34, 'category_id' => 2],
            // ['unit' => 'Listen and Practice Game', 'lesson_id' => 34, 'category_id' => 25],
            // ['unit' => 'Writing', 'lesson_id' => 34, 'category_id' => 14],
            // ['unit' => 'Speaking', 'lesson_id' => 34, 'category_id' => 11],

            // // lesson 35's games

            // ['unit' => 'Target Language and Grammar Explanation', 'lesson_id' => 35, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 35, 'category_id' => 2],
            // ['unit' => 'True or False', 'lesson_id' => 35, 'category_id' => 25],
            // ['unit' => 'Song', 'lesson_id' => 35, 'category_id' => 3],
            // ['unit' => 'Matching', 'lesson_id' => 35, 'category_id' => 7],
            // ['unit' => 'Reading', 'lesson_id' => 35, 'category_id' => 16],
            // ['unit' => 'Speaking', 'lesson_id' => 35, 'category_id' => 11],

            // // lesson 36's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 36, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 36, 'category_id' => 2],
            // ['unit' => 'Listen and Practice Game', 'lesson_id' => 36, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 36, 'category_id' => 7],
            // ['unit' => 'Speaking', 'lesson_id' => 36, 'category_id' => 11],
            // ['unit' => 'Writing 1', 'lesson_id' => 36, 'category_id' => null],  // <<<<====
            // ['unit' => 'Writing 2', 'lesson_id' => 36, 'category_id' => null],  // <<<<====

            // // lesson 37's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 37, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 37, 'category_id' => 2],
            // ['unit' => 'Listen and Practice Game', 'lesson_id' => 37, 'category_id' => 17],
            // ['unit' => 'Matching', 'lesson_id' => 37, 'category_id' => 7],
            // ['unit' => 'Speaking', 'lesson_id' => 37, 'category_id' => 11],

            // // lesson 38's games

            // ['unit' => 'Target Language & Grammar Explanation', 'lesson_id' => 38, 'category_id' => 1],
            // ['unit' => 'Read, Listen and Repeat', 'lesson_id' => 38, 'category_id' => 2],      // <<<<====
            // ['unit' => 'Listen and Practice Game', 'lesson_id' => 38, 'category_id' => 17],
            // ['unit' => 'Writing', 'lesson_id' => 38, 'category_id' => 14],
            // ['unit' => 'Speaking', 'lesson_id' => 38, 'category_id' => 11],

            // // lesson 39's games

            // ['unit' => 'Target Language', 'lesson_id' => 39, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat Reading 1', 'lesson_id' => 39, 'category_id' => 2],      // <<<<====
            // ['unit' => 'Reading 2', 'lesson_id' => 39, 'category_id' => 2],                        // <<<<====
            // ['unit' => 'Listen and Practice Round 1', 'lesson_id' => 39, 'category_id' => 17],  // <<<<====
            // ['unit' => 'Round 2', 'lesson_id' => 39, 'category_id' => 17],                      // <<<<====
            // ['unit' => 'Grammar', 'lesson_id' => 39, 'category_id' => 21],
            // ['unit' => 'Writing (Arranging order)', 'lesson_id' => 39, 'category_id' => 14],
            // ['unit' => 'Speaking', 'lesson_id' => 39, 'category_id' => 11],

            // // lesson 40's games

            // ['unit' => 'Target Language', 'lesson_id' => 40, 'category_id' => 1],
            // ['unit' => 'Listen and Repeat Reading 1', 'lesson_id' => 40, 'category_id' => 2],      // <<<<====
            // ['unit' => 'Reading 1', 'lesson_id' => 40, 'category_id' => 2],                        // <<<<====
            // ['unit' => 'Listen and Practice', 'lesson_id' => 40, 'category_id' => 17],
            // ['unit' => 'Reading', 'lesson_id' => 40, 'category_id' => 18],
            // ['unit' => 'Speaking', 'lesson_id' => 40, 'category_id' => 11],


        ]);
    }
}
