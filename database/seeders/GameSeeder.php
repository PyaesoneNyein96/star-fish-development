<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('games')->insert([

            // lesson 1's games

            ['name' => 'Video', 'unit_id' => 1],
            ['name' => 'Read and Practice', 'unit_id' => 2],
            ['name' => 'Song', 'unit_id' => 3],
            ['name' => 'Listen and Practice', 'unit_id' => 4],
            ['name' => 'Writing', 'unit_id' => 5],


            // lesson 2's games

            ['name' => 'Video', 'unit_id' => 6],
            ['name' => 'Read and Practice', 'unit_id' => 7],
            ['name' => 'Song', 'unit_id' => 8],
            ['name' => 'Listen and Practice', 'unit_id' => 9],
            ['name' => 'Matching', 'unit_id' => 10],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 11],


            // lesson 3's games

            ['name' => 'Video', 'unit_id' => 12],
            ['name' => 'Read Listen and Repect', 'unit_id' => 13],
            ['name' => 'Listen and Practice', 'unit_id' => 14],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 15],
            ['name' => 'Speaking', 'unit_id' => 16],

            // lesson 4's games

            ['name' => 'Video', 'unit_id' => 17],
            ['name' => 'Read Listen and Repect', 'unit_id' => 18],
            ['name' => 'Read, Listen & Repeat', 'unit_id' => 19],
            ['name' => 'Listen and Practice', 'unit_id' => 20],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 21],

            // lesson 5's games

            ['name' => 'Target Language & Grammar Explanation',  'unit_id' => 22],
            ['name' => 'Listen and Practice',  'unit_id' => 23],
            ['name' => 'Read, Listen and Repeat',  'unit_id' => 24],
            ['name' => 'Reading Passage',  'unit_id' => 25],
            ['name' => 'Speaking Practice',  'unit_id' => 26],
            ['name' => 'Writing',  'unit_id' => 27],

            // lesson 6's games

            ['name' => 'Target Language & Grammar Explanation',  'unit_id' => 28],
            ['name' => 'Reading',  'unit_id' => 29],
            ['name' => 'Listen and Practice',  'unit_id' => 30],
            ['name' => 'Matching',  'unit_id' => 31],
            ['name' => 'Speaking Practice',  'unit_id' => 32],
            ['name' => 'Writing',  'unit_id' => 33],

            // lesson 7's games

            ['name' => 'Target Language & Grammar Explanation',  'unit_id' => 34],
            ['name' => 'Read, Listen and Repeat',  'unit_id' => 35],
            ['name' => 'Listen and Practice',  'unit_id' => 36],
            ['name' => 'Matching',  'unit_id' => 37],
            ['name' => 'Speaking Practice',  'unit_id' => 38],
            ['name' => 'Writing Sentences order',  'unit_id' => 39], // <<<<====
            ['name' => 'Writing Sentences order',  'unit_id' => 39], // <<<<====

            // lesson 8's games

            ['name' => 'Video',  'unit_id' => 40],
            ['name' => 'Read',  'unit_id' => 41],
            ['name' => 'listening Practice',  'unit_id' => 42],
            ['name' => 'Matching',  'unit_id' => 43],
            ['name' => 'Speaking Practice',  'unit_id' => 44],
            ['name' => 'Reading Passage',  'unit_id' => 45],
            ['name' => 'Writing',  'unit_id' => 46],

            // lesson 9's games

            ['name' => 'Target Language',  'unit_id' => 47],
            ['name' => 'Reading',  'unit_id' => 48],
            ['name' => 'Listen and practice',  'unit_id' => 49],
            ['name' => 'Matching',  'unit_id' => 50],
            ['name' => 'Speaking Practice',  'unit_id' => 51],
            ['name' => 'Writing',  'unit_id' => 52],

            // lesson 10's games

            ['name' => 'Target', 'unit_id' => 53],
            ['name' => 'Reading',  'unit_id' => 54],
            ['name' => 'Listen and Practice',  'unit_id' => 55],
            ['name' => 'Matching',  'unit_id' => 56],
            ['name' => 'Speaking Practice',  'unit_id' => 57],
            ['name' => 'Writing',  'unit_id' => 58],

            // lesson 11's games

            ['name' => 'Target Language & Grammar Explanation',  'unit_id' => 59],
            ['name' => 'Read, Listen and Repeat',  'unit_id' => 60],
            ['name' => 'Listen and Practice',  'unit_id' => 61],
            ['name' => 'Matching',  'unit_id' => 62],
            ['name' => 'Speaking Practice',  'unit_id' => 63],
            ['name' => 'Reading Passage',  'unit_id' => 64],

            // lesson 12's games

            ['name' => 'Target Language',  'unit_id' => 65],
            ['name' => 'Reading',  'unit_id' => 66],
            ['name' => 'Listen and Practice',  'unit_id' => 67],
            ['name' => 'Matching',  'unit_id' => 68],
            ['name' => 'Speaking Practice',  'unit_id' => 69],
            ['name' => 'Writing',  'unit_id' => 70],    // <<<<====
            ['name' => 'Writing 2',  'unit_id' => 70],  // <<<<====

            // lesson 13's games

            ['name' => 'Target Language & Grammar Explanation',  'unit_id' => 71],
            ['name' => 'Reading, Listen and Repeat',  'unit_id' => 72],
            ['name' => 'Drag and Drop',  'unit_id' => 73],
            ['name' => 'Listen and Practice',  'unit_id' => 74],
            ['name' => 'Speaking Practice',  'unit_id' => 75],

            // // // lesson 12's games

            // ['name' => 'Target language & Grammar Explanation', 'unit_id' => 17],
            // ['name' => 'Read Listen & Repeat', 'unit_id' => 18],
            // ['name' => 'Drag and Drop', 'unit_id' => 19],
            // ['name' => 'Listen and Practice', 'unit_id' => 20],
            // ['name' => 'Speaking Practice', 'unit_id' => 21],
            // ['name' => 'trace and write', 'unit_id' => 23],
            // ['name' => 'Write the correct letter', 'unit_id' => 23],

        ]);

        DB::table('games')->insert([
            ['name' => 'writing 1', 'unit_id' => 39, 'instructionGIF' => "trace and writ GIF", 'category' => "letter_tracing"],
            ['name' => 'writing 2',  'unit_id' => 39, 'instructionGIF' => "Writ the correct Letter GIF", 'category' => "rearrange_with_audio"],

        ]);
    }
}
