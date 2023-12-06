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

            ['name' => 'Video', 'lesson_id' => 2, 'category_id' => 1],
            ['name' => 'Read & Practice', 'lesson_id' => 2, 'category_id' => 2],
            ['name' => 'Song', 'lesson_id' => 2, 'category_id' => 3],
            ['name' => 'Listen & Practice', 'lesson_id' => 2, 'category_id' => 6],
            ['name' => 'Matching', 'lesson_id' => 2, 'category_id' => 7],
            ['name' => 'Writing (Arranging Order)', 'lesson_id' => 2, 'category_id' => 5],


            // lesson 3's games

            ['name' => 'Video', 'lesson_id' => 3, 'category_id' => 1],
            ['name' => 'Read Listen & Repeat', 'lesson_id' => 3, 'category_id' => 8],
            ['name' => 'Listen and practice', 'lesson_id' => 3, 'category_id' => 9],
            ['name' => 'Writing (Arranging Order)', 'lesson_id' => 3, 'category_id' => 14],
            ['name' => 'Speaking', 'lesson_id' => 3, 'category_id' => 11],


            // lesson 4's games

            ['name' => 'Video', 'lesson_id' => 4, 'category_id' => 1],
            ['name' => 'Read, Listen & Repeat', 'lesson_id' => 4, 'category_id' => 8],
            ['name' => 'Read, Listen & Repeat', 'lesson_id' => 4, 'category_id' => 12],
            ['name' => 'Listening & Practice', 'lesson_id' => 4, 'category_id' => 13],
            ['name' => 'Writing (Arranging Order)', 'lesson_id' => 4, 'category_id' => 14],

            // lesson 5's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 5, 'category_id' => 1],
            ['name' => 'Listen and Practice', 'lesson_id' => 5, 'category_id' => 15],
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 5, 'category_id' => null],
            ['name' => 'Reading Passage', 'lesson_id' => 5, 'category_id' => 16],
            ['name' => 'Speaking Practice', 'lesson_id' => 5, 'category_id' => 11],
            ['name' => 'Writing', 'lesson_id' => 5, 'category_id' => 14],

            // lesson 6's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 6, 'category_id' => 1],
            ['name' => 'Reading', 'lesson_id' => 6, 'category_id' => 2],
            ['name' => 'Listen and Practice', 'lesson_id' => 6, 'category_id' => 17],
            ['name' => 'Matching', 'lesson_id' => 6, 'category_id' => 7],
            ['name' => 'Speaking Practice', 'lesson_id' => 6, 'category_id' => 11],
            ['name' => 'Writing', 'lesson_id' => 6, 'category_id' => 14],

            // lesson 7's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 7, 'category_id' => 1],
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 7, 'category_id' => 2],
            ['name' => 'Listen and Practice', 'lesson_id' => 7, 'category_id' => 17],
            ['name' => 'Matching', 'lesson_id' => 7, 'category_id' => 7],
            ['name' => 'Speaking Practice', 'lesson_id' => 7, 'category_id' => 11],
            ['name' => 'Writing Sentences order', 'lesson_id' => 7, 'category_id' => 26], // <<<<====

            // lesson 8's games

            ['name' => 'Video', 'lesson_id' => 8, 'category_id' => 1],
            ['name' => 'Read', 'lesson_id' => 8, 'category_id' => 2],
            ['name' => 'listening Practice', 'lesson_id' => 8, 'category_id' => 17],
            ['name' => 'Matching', 'lesson_id' => 8, 'category_id' => 7],
            ['name' => 'Speaking Practice', 'lesson_id' => 8, 'category_id' => 11],
            ['name' => 'Reading Passage', 'lesson_id' => 8, 'category_id' => 16],
            ['name' => 'Writing', 'lesson_id' => 8, 'category_id' => 14],

            // lesson 9's games

            ['name' => 'Target Language', 'lesson_id' => 9, 'category_id' => 1],
            ['name' => 'Reading', 'lesson_id' => 9, 'category_id' => 2],
            ['name' => 'Listen and practice', 'lesson_id' => 9, 'category_id' => 17],
            ['name' => 'Matching', 'lesson_id' => 9, 'category_id' => 7],
            ['name' => 'Speaking Practice', 'lesson_id' => 9, 'category_id' => 11],
            ['name' => 'Writing', 'lesson_id' => 9, 'category_id' => 14],

            // lesson 10's games

            ['name' => 'Target', 'lesson_id' => 10, 'category_id' => 1],
            ['name' => 'Reading', 'lesson_id' => 10, 'category_id' => 2],
            ['name' => 'Listen and Practice', 'lesson_id' => 10, 'category_id' => 17],
            ['name' => 'Matching', 'lesson_id' => 10, 'category_id' => 7],
            ['name' => 'Speaking Practice', 'lesson_id' => 10, 'category_id' => 11],
            ['name' => 'Writing', 'lesson_id' => 10, 'category_id' => 14],

            // lesson 11's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 11, 'category_id' => 1],
            ['name' => 'Read, Listen and Repeat', 'lesson_id' => 11, 'category_id' => 2],
            ['name' => 'Listen and Practice', 'lesson_id' => 11, 'category_id' => 6],
            ['name' => 'Matching', 'lesson_id' => 11, 'category_id' => 7],
            ['name' => 'Speaking Practice', 'lesson_id' => 11, 'category_id' => 11],
            ['name' => 'Reading Passage', 'lesson_id' => 11, 'category_id' => 16],

            // lesson 12's games

            ['name' => 'Target Language', 'lesson_id' => 12, 'category_id' => 1],
            ['name' => 'Reading', 'lesson_id' => 12, 'category_id' => 2],
            ['name' => 'Listen and Practice', 'lesson_id' => 12, 'category_id' => 17],
            ['name' => 'Matching', 'lesson_id' => 12, 'category_id' => 7],
            ['name' => 'Speaking Practice', 'lesson_id' => 12, 'category_id' => 11],
            ['name' => 'Writing', 'lesson_id' => 12, 'category_id' => 26], // <<<<====

            // lesson 13's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 13, 'category_id' => 1],
            ['name' => 'Reading, Listen and Repeat', 'lesson_id' => 13, 'category_id' => 2],
            ['name' => 'Drag and Drop', 'lesson_id' => 13, 'category_id' => 19],
            ['name' => 'Listen and Practice', 'lesson_id' => 13, 'category_id' => 20],
            ['name' => 'Speaking Practice', 'lesson_id' => 13, 'category_id' => 11],

            // lesson 14's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 14, 'category_id' => 1],
            ['name' => 'Reading, Listen and Repeat', 'lesson_id' => 14, 'category_id' => 2],
            ['name' => 'Listen and Practice', 'lesson_id' => 14, 'category_id' => 20],
            ['name' => 'Grammar', 'lesson_id' => 14, 'category_id' => 21],
            ['name' => 'Writing', 'lesson_id' => 14, 'category_id' => 14],
            ['name' => 'Speaking Practice', 'lesson_id' => 14, 'category_id' => 11],

            // lesson 15's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 15, 'category_id' => 1],
            ['name' => 'Listen, Reading and Repeat', 'lesson_id' => 15, 'category_id' => 26], // <<<<====
            ['name' => 'Listen and Practice', 'lesson_id' => 15, 'category_id' => 26], // <<<<====
            ['name' => 'Grammar', 'lesson_id' => 15, 'category_id' => 21],
            ['name' => 'Speaking Practice', 'lesson_id' => 15, 'category_id' => 11],
            ['name' => 'Reading', 'lesson_id' => 15, 'category_id' => 16],

            // lesson 16's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 16, 'category_id' => 1],
            ['name' => 'Reading, Listen and Repeat', 'lesson_id' => 16, 'category_id' => 2],
            ['name' => 'Listen and Practice, Game', 'lesson_id' => 16, 'category_id' => 17],
            ['name' => 'Matching', 'lesson_id' => 16, 'category_id' => 7],
            ['name' => 'Speaking 1', 'lesson_id' => 16, 'category_id' => 26], // <<<<====
            ['name' => 'Writing 1', 'lesson_id' => 16, 'category_id' => 26], // <<<<====

            // lesson 17's games

            ['name' => 'Target Language', 'lesson_id' => 17, 'category_id' => 1],
            ['name' => 'Listen and Repeat', 'lesson_id' => 17, 'category_id' => 26], // <<<<====
            ['name' => 'Listen and Practice', 'lesson_id' => 17, 'category_id' => 23],
            ['name' => 'Matching', 'lesson_id' => 17, 'category_id' => 7],
            ['name' => 'Listen and Act', 'lesson_id' => 17, 'category_id' => 13],
            ['name' => 'Speaking Practice', 'lesson_id' => 17, 'category_id' => 11],

            // // lesson 18's games

            // ['name' => 'Grammar Explanation', 'lesson_id' => 18, 'category_id' => 1],
            // ['name' => 'Listen, Read and Repeat', 'lesson_id' => 18, 'category_id' => 22],
            // ['name' => 'Listen and Practice', 'lesson_id' => 18, 'category_id' => 21],
            // ['name' => 'Listen and Act', 'lesson_id' => 18, 'category_id' => 13],
            // ['name' => 'Writing', 'lesson_id' => 18, 'category_id' => 14],
            // ['name' => 'Speaking Practice', 'lesson_id' => 18, 'category_id' => 11],

            // // lesson 19's games

            // ['name' => 'Target Language', 'lesson_id' => 19, 'category_id' => 1],
            // ['name' => 'Listen and Repeat', 'lesson_id' => 19, 'category_id' => 22],
            // ['name' => 'Listen and Practice', 'lesson_id' => 19, 'category_id' => 21],
            // ['name' => 'Listen and Act', 'lesson_id' => 19, 'category_id' => 13],
            // ['name' => 'Reading', 'lesson_id' => 19, 'category_id' => 16],
            // ['name' => 'Speaking Practice', 'lesson_id' => 19, 'category_id' => 11],

            // // lesson 20's games

            // ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 20, 'category_id' => 1],
            // ['name' => 'Reading, Listen and Repeat', 'lesson_id' => 20, 'category_id' => 2],
            // ['name' => 'Listen and Practice Game', 'lesson_id' => 20, 'category_id' => 17],
            // ['name' => 'Matching', 'lesson_id' => 20, 'category_id' => 7],
            // ['name' => 'Speaking 1', 'lesson_id' => 20, 'category_id' => 11], // <<<<====
            // ['name' => 'Speaking 2', 'lesson_id' => 20, 'category_id' => 11], // <<<<====
            // ['name' => 'Writing 1', 'lesson_id' => 20, 'category_id' => null], // <<<<====
            // ['name' => 'Writing 2', 'lesson_id' => 20, 'category_id' => null], // <<<<====

            // // lesson 21's games

            // ['name' => 'Target Language', 'lesson_id' => 21, 'category_id' => 1],
            // ['name' => 'Listen and Repeat Reading 1', 'lesson_id' => 21, 'category_id' => 2], // <<<<====
            // ['name' => 'Reading 2', 'lesson_id' => 21, 'category_id' => 2],                   // <<<<====
            // ['name' => 'Listen and Practice', 'lesson_id' => 21, 'category_id' => 17],
            // ['name' => 'Matching', 'lesson_id' => 21, 'category_id' => 7],
            // ['name' => 'Speaking', 'lesson_id' => 21, 'category_id' => 11],

            // // lesson 22's games

            // ['name' => 'Target Language', 'lesson_id' => 22, 'category_id' => 1],
            // ['name' => 'Listen and Repeat Reading 1', 'lesson_id' => 22, 'category_id' => 2], // <<<<====
            // ['name' => 'Reading 2', 'lesson_id' => 22, 'category_id' => 2],                   // <<<<====
            // ['name' => 'Listen and Practice', 'lesson_id' => 22, 'category_id' => 17],
            // ['name' => 'Matching', 'lesson_id' => 22, 'category_id' => 7],
            // ['name' => 'Writing', 'lesson_id' => 22, 'category_id' => 14],
            // ['name' => 'Speaking', 'lesson_id' => 22, 'category_id' => 11],

            // // lesson 23's games

            // ['name' => 'Target Language', 'lesson_id' => 23, 'category_id' => 1],
            // ['name' => 'Listen and Repeat Reading 1', 'lesson_id' => 23, 'category_id' => 2], // <<<<====
            // ['name' => 'Reading 2', 'lesson_id' => 23, 'category_id' => 2],                   // <<<<====
            // ['name' => 'Listen and Practice', 'lesson_id' => 23, 'category_id' => 24],
            // ['name' => 'True or False', 'lesson_id' => 23, 'category_id' => 20],
            // ['name' => 'Reading', 'lesson_id' => 23, 'category_id' => 16],
            // ['name' => 'Speaking Practice', 'lesson_id' => 23, 'category_id' => 11],

            // // lesson 24's games

            // ['name' => 'Target Language', 'lesson_id' => 24, 'category_id' => 1],
            // ['name' => 'Reading 1', 'lesson_id' => 24, 'category_id' => 2],      // <<<<====
            // ['name' => 'Listen and Practice', 'lesson_id' => 24, 'category_id' => 17],
            // ['name' => 'Song', 'lesson_id' => 24, 'category_id' => 3],
            // ['name' => 'Speaking', 'lesson_id' => 24, 'category_id' => 11],
            // ['name' => 'Writing', 'lesson_id' => 24, 'category_id' => 11],

            // // lesson 25's games

            // ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 25, 'category_id' => 1],
            // ['name' => 'Listen and Repeat Reading 1', 'lesson_id' => 25, 'category_id' => 2],        // <<<<====
            // ['name' => 'Listen and Practice', 'lesson_id' => 25, 'category_id' => 17],
            // ['name' => 'Matching', 'lesson_id' => 25, 'category_id' => 7],
            // ['name' => 'Speaking', 'lesson_id' => 25, 'category_id' => 11],
            // ['name' => 'Writing Round 1', 'lesson_id' => 25, 'category_id' => null],  // <<<<====
            // ['name' => 'Writing', 'lesson_id' => 25, 'category_id' => null],          // <<<<====

            // // lesson 26's games

            // ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 26, 'category_id' => 1],
            // ['name' => 'Read, Listen and Repeat Reading 1', 'lesson_id' => 26, 'category_id' => 2],      // <<<<====
            // ['name' => 'Listen and Practice', 'lesson_id' => 26, 'category_id' => 17],
            // ['name' => 'Matching', 'lesson_id' => 26, 'category_id' => 7],
            // ['name' => 'Grammar', 'lesson_id' => 26, 'category_id' => 21],
            // ['name' => 'Speaking 1', 'lesson_id' => 26, 'category_id' => 11],    // <<<<====

            // // lesson 27's games

            // ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 27, 'category_id' => 1],
            // ['name' => 'Read, Listen and Repeat Reading 1', 'lesson_id' => 27, 'category_id' => 2],      // <<<<====
            // ['name' => 'Listen and Practice Game', 'lesson_id' => 27, 'category_id' => 17],
            // ['name' => 'Matching Round 1', 'lesson_id' => 27, 'category_id' => 7],      // <<<<====
            // ['name' => 'Speaking 1', 'lesson_id' => 27, 'category_id' => 11],      // <<<<====
            // ['name' => 'Writing', 'lesson_id' => 27, 'category_id' => 14],

            // // lesson 28's games

            // ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 28, 'category_id' => 1],
            // ['name' => 'Read, Listen and Repeat Reading 1', 'lesson_id' => 28, 'category_id' => 2],      // <<<<====
            // ['name' => 'Listen and Practice', 'lesson_id' => 28, 'category_id' => 17],
            // ['name' => 'Matching', 'lesson_id' => 28, 'category_id' => 7],
            // ['name' => 'Reading', 'lesson_id' => 28, 'category_id' => 16],
            // ['name' => 'Speaking 1', 'lesson_id' => 28, 'category_id' => 11],         // <<<<====

            // // lesson 29's games

            // ['name' => 'Target Language', 'lesson_id' => 29, 'category_id' => 1],
            // ['name' => 'Listen and Repeat Reading 1', 'lesson_id' => 29, 'category_id' => 8],      // <<<<====
            // ['name' => 'Listen and Practice', 'lesson_id' => 29, 'category_id' => 17],
            // ['name' => 'Song', 'lesson_id' => 29, 'category_id' => 3],
            // ['name' => 'Word order', 'lesson_id' => 29, 'category_id' => 14],
            // ['name' => 'Speaking', 'lesson_id' => 29, 'category_id' => 11],

            // // lesson 30's games

            // ['name' => 'Target Language', 'lesson_id' => 30, 'category_id' => 1],
            // ['name' => 'Listen and Repeat', 'lesson_id' => 30, 'category_id' => 2],
            // ['name' => 'Listen and Practice', 'lesson_id' => 30, 'category_id' => 17],
            // ['name' => 'Matching Round 1', 'lesson_id' => 30, 'category_id' => 7],    // <<<<====
            // ['name' => 'Speaking Round 1', 'lesson_id' => 30, 'category_id' => 11],     // <<<<====
            // ['name' => 'Writing Round 1', 'lesson_id' => 30, 'category_id' => null], // <<<<====
            // ['name' => 'Writing Round 2', 'lesson_id' => 30, 'category_id' => null], // <<<<====

            // // lesson 31's games

            // ['name' => 'Target Language', 'lesson_id' => 31, 'category_id' => 1],
            // ['name' => 'Listen and Repeat', 'lesson_id' => 31, 'category_id' => 2],
            // ['name' => 'Listen and Practice Game 1', 'lesson_id' => 31, 'category_id' => 17],  // <<<<====
            // ['name' => 'Game 2', 'lesson_id' => 31, 'category_id' => 17],                      // <<<<====
            // ['name' => 'Matching', 'lesson_id' => 31, 'category_id' => 7],
            // ['name' => 'Speaking', 'lesson_id' => 31, 'category_id' => 11],
            // ['name' => 'Writing 1', 'lesson_id' => 31, 'category_id' => null],  // <<<<====
            // ['name' => 'Writing 2', 'lesson_id' => 31, 'category_id' => null],  // <<<<====

            // // lesson 32's games

            // ['name' => 'Target Language', 'lesson_id' => 32, 'category_id' => 1],
            // ['name' => 'Listen and Repeat Reading 1', 'lesson_id' => 32, 'category_id' => 2],      // <<<<====
            // ['name' => 'Listen and Practice Round 1', 'lesson_id' => 32, 'category_id' => 17],  // <<<<====
            // ['name' => 'Listen and Practice Round 2', 'lesson_id' => 32, 'category_id' => 17],  // <<<<====
            // ['name' => 'Matching', 'lesson_id' => 32, 'category_id' => 7],
            // ['name' => 'Reading', 'lesson_id' => 32, 'category_id' => 16],
            // ['name' => 'Speaking', 'lesson_id' => 32, 'category_id' => 11],

            // // lesson 33's games

            // ['name' => 'Target Language and Grammar Explanation', 'lesson_id' => 33, 'category_id' => 1],
            // ['name' => 'Read, Listen and Repeat', 'lesson_id' => 33, 'category_id' => 2],
            // ['name' => 'Listen and Practice', 'lesson_id' => 33, 'category_id' => 17],
            // ['name' => 'Matching', 'lesson_id' => 33, 'category_id' => 7],
            // ['name' => 'Speaking', 'lesson_id' => 33, 'category_id' => 11],

            // // lesson 34's games

            // ['name' => 'Target Language and Grammar Explanation', 'lesson_id' => 34, 'category_id' => 1],
            // ['name' => 'Read, Listen and Repeat', 'lesson_id' => 34, 'category_id' => 2],
            // ['name' => 'Listen and Practice Game', 'lesson_id' => 34, 'category_id' => 25],
            // ['name' => 'Writing', 'lesson_id' => 34, 'category_id' => 14],
            // ['name' => 'Speaking', 'lesson_id' => 34, 'category_id' => 11],

            // // lesson 35's games

            // ['name' => 'Target Language and Grammar Explanation', 'lesson_id' => 35, 'category_id' => 1],
            // ['name' => 'Read, Listen and Repeat', 'lesson_id' => 35, 'category_id' => 2],
            // ['name' => 'True or False', 'lesson_id' => 35, 'category_id' => 25],
            // ['name' => 'Song', 'lesson_id' => 35, 'category_id' => 3],
            // ['name' => 'Matching', 'lesson_id' => 35, 'category_id' => 7],
            // ['name' => 'Reading', 'lesson_id' => 35, 'category_id' => 16],
            // ['name' => 'Speaking', 'lesson_id' => 35, 'category_id' => 11],

            // // lesson 36's games

            // ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 36, 'category_id' => 1],
            // ['name' => 'Read, Listen and Repeat', 'lesson_id' => 36, 'category_id' => 2],
            // ['name' => 'Listen and Practice Game', 'lesson_id' => 36, 'category_id' => 17],
            // ['name' => 'Matching', 'lesson_id' => 36, 'category_id' => 7],
            // ['name' => 'Speaking', 'lesson_id' => 36, 'category_id' => 11],
            // ['name' => 'Writing 1', 'lesson_id' => 36, 'category_id' => null],  // <<<<====
            // ['name' => 'Writing 2', 'lesson_id' => 36, 'category_id' => null],  // <<<<====

            // // lesson 37's games

            // ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 37, 'category_id' => 1],
            // ['name' => 'Read, Listen and Repeat', 'lesson_id' => 37, 'category_id' => 2],
            // ['name' => 'Listen and Practice Game', 'lesson_id' => 37, 'category_id' => 17],
            // ['name' => 'Matching', 'lesson_id' => 37, 'category_id' => 7],
            // ['name' => 'Speaking', 'lesson_id' => 37, 'category_id' => 11],

            // // lesson 38's games

            // ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 38, 'category_id' => 1],
            // ['name' => 'Read, Listen and Repeat', 'lesson_id' => 38, 'category_id' => 2],      // <<<<====
            // ['name' => 'Listen and Practice Game', 'lesson_id' => 38, 'category_id' => 17],
            // ['name' => 'Writing', 'lesson_id' => 38, 'category_id' => 14],
            // ['name' => 'Speaking', 'lesson_id' => 38, 'category_id' => 11],

            // // lesson 39's games

            // ['name' => 'Target Language', 'lesson_id' => 39, 'category_id' => 1],
            // ['name' => 'Listen and Repeat Reading 1', 'lesson_id' => 39, 'category_id' => 2],      // <<<<====
            // ['name' => 'Reading 2', 'lesson_id' => 39, 'category_id' => 2],                        // <<<<====
            // ['name' => 'Listen and Practice Round 1', 'lesson_id' => 39, 'category_id' => 17],  // <<<<====
            // ['name' => 'Round 2', 'lesson_id' => 39, 'category_id' => 17],                      // <<<<====
            // ['name' => 'Grammar', 'lesson_id' => 39, 'category_id' => 21],
            // ['name' => 'Writing (Arranging order)', 'lesson_id' => 39, 'category_id' => 14],
            // ['name' => 'Speaking', 'lesson_id' => 39, 'category_id' => 11],

            // // lesson 40's games

            // ['name' => 'Target Language', 'lesson_id' => 40, 'category_id' => 1],
            // ['name' => 'Listen and Repeat Reading 1', 'lesson_id' => 40, 'category_id' => 2],      // <<<<====
            // ['name' => 'Reading 1', 'lesson_id' => 40, 'category_id' => 2],                        // <<<<====
            // ['name' => 'Listen and Practice', 'lesson_id' => 40, 'category_id' => 17],
            // ['name' => 'Reading', 'lesson_id' => 40, 'category_id' => 18],
            // ['name' => 'Speaking', 'lesson_id' => 40, 'category_id' => 11],


        ]);
    }
}
