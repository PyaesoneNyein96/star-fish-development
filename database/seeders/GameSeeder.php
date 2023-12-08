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

        $domain = app('domain');

        $instructionGif_path = $domain . "/storage/InstructionGif/";

        // lesson 1's games
        DB::table('games')->insert([

            ['name' => 'Video', 'instructionGIF' => null, 'unit_id' => 1],
            ['name' => 'Read and Practice', 'instructionGIF' => null, 'unit_id' => 2],
            ['name' => 'Song', 'instructionGIF' => null, 'unit_id' => 3],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 4],
            ['name' => 'Writing', 'instructionGIF' => null, 'unit_id' => 5],


            // lesson 2's games
            ['name' => 'Video', 'instructionGIF' => null, 'unit_id' => 6],
            ['name' => 'Read and Practice', 'instructionGIF' => null, 'unit_id' => 7],
            ['name' => 'Song', 'instructionGIF' => null, 'unit_id' => 8],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 9],
            ['name' => 'Matching', 'instructionGIF' => null, 'unit_id' => 10],
            ['name' => 'Writing (Arrange Order)', 'instructionGIF' => null, 'unit_id' => 11],


            // lesson 3's games
            ['name' => 'Video', 'instructionGIF' => null, 'unit_id' => 12],
            ['name' => 'Read Listen and Repect', 'instructionGIF' => null, 'unit_id' => 13],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 14],
            ['name' => 'Writing (Arrange Order)', 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order" . ".gif", 'unit_id' => 15],
            ['name' => 'Speaking', 'instructionGIF' => $instructionGif_path . "Speaking" . ".gif", 'unit_id' => 16],

        ]);

        // lesson 4's games
        DB::table('games')->insert([

            ['name' => 'Video', 'instructionGIF' => null, 'unit_id' => 17],
            ['name' => 'Read Listen and Repect', 'instructionGIF' => null, 'unit_id' => 18],
            ['name' => 'Read, Listen & Repeat', 'instructionGIF' => null, 'unit_id' => 19],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 20],
            ['name' => 'Writing (Arrange Order)', 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order" . ".gif", 'unit_id' => 21],

        ]);

        // // lesson 5's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'instructionGIF' => null, 'unit_id' => 22],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 23],
            ['name' => 'Read, Listen and Repeat', 'instructionGIF' => null, 'unit_id' => 24],
            ['name' => 'Reading Passage', 'instructionGIF' => null, 'unit_id' => 25],
            ['name' => 'Speaking Practice', 'instructionGIF' => $instructionGif_path . "Speaking" . ".gif", 'unit_id' => 26],
            ['name' => 'Writing', 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order" . ".gif", 'unit_id' => 27],

        ]);
        // // lesson 6's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'instructionGIF' => null, 'unit_id' => 28],
            ['name' => 'Reading', 'instructionGIF' => null, 'unit_id' => 29],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 30],
            ['name' => 'Matching', 'instructionGIF' => null, 'unit_id' => 31],
            ['name' => 'Speaking Practice', 'instructionGIF' => null, 'unit_id' => 32],
            ['name' => 'Writing', 'instructionGIF' => null, 'unit_id' => 33],
        ]);

        // // lesson 7's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'instructionGIF' => null, 'unit_id' => 34, 'category' => null],
            ['name' => 'Read, Listen and Repeat', 'instructionGIF' => null, 'unit_id' => 35, 'category' => null],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 36, 'category' => null],
            ['name' => 'Matching', 'instructionGIF' => null, 'unit_id' => 37, 'category' => null],
            ['name' => 'Speaking Practice', 'instructionGIF' => null, 'unit_id' => 38, 'category' => null],
            ['name' => 'Writing 1', 'instructionGIF' => null, 'unit_id' => 39, 'category' => "letter_tracing"],
            ['name' => 'Writing 2', 'instructionGIF' => null, 'unit_id' => 39,  'category' => "rearrange_with_audio"],
        ]);

        // // lesson 8's games
        DB::table('games')->insert([

            ['name' => 'Video', 'instructionGIF' => null, 'unit_id' => 40],
            ['name' => 'Read', 'instructionGIF' => null, 'unit_id' => 41],
            ['name' => 'listening Practice', 'instructionGIF' => null, 'unit_id' => 42],
            ['name' => 'Matching', 'instructionGIF' => null, 'unit_id' => 43],
            ['name' => 'Speaking Practice', 'instructionGIF' => null, 'unit_id' => 44],
            ['name' => 'Reading Passage', 'instructionGIF' => null, 'unit_id' => 45],
            ['name' => 'Writing', 'instructionGIF' => null, 'unit_id' => 46],

        ]);

        // // lesson 9's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'instructionGIF' => null, 'unit_id' => 47],
            ['name' => 'Reading', 'instructionGIF' => null, 'unit_id' => 48],
            ['name' => 'Listen and practice', 'instructionGIF' => null, 'unit_id' => 49],
            ['name' => 'Matching', 'instructionGIF' => null, 'unit_id' => 50],
            ['name' => 'Speaking Practice', 'instructionGIF' => null, 'unit_id' => 51],
            ['name' => 'Writing', 'instructionGIF' => null, 'unit_id' => 52],

            // lesson 10's games

            ['name' => 'Target', 'instructionGIF' => null, 'unit_id' => 53],
            ['name' => 'Reading', 'instructionGIF' => null, 'unit_id' => 54],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 55],
            ['name' => 'Matching', 'instructionGIF' => null, 'unit_id' => 56],
            ['name' => 'Speaking Practice', 'instructionGIF' => null, 'unit_id' => 57],
            ['name' => 'Writing', 'instructionGIF' => null, 'unit_id' => 58],

            // lesson 11's games

            ['name' => 'Target Language & Grammar Explanation', 'instructionGIF' => null, 'unit_id' => 59],
            ['name' => 'Read, Listen and Repeat', 'instructionGIF' => null, 'unit_id' => 60],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 61],
            ['name' => 'Matching', 'instructionGIF' => null, 'unit_id' => 62],
            ['name' => 'Speaking Practice', 'instructionGIF' => null, 'unit_id' => 63],
            ['name' => 'Reading Passage', 'instructionGIF' => null, 'unit_id' => 64],
        ]);

        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 59],
            ['name' => 'Read, Listen and Repeat', 'unit_id' => 60],
            ['name' => 'Listen and Practice', 'unit_id' => 61],
            ['name' => 'Matching', 'unit_id' => 62],
            ['name' => 'Speaking Practice', 'unit_id' => 63],
            ['name' => 'Reading Passage', 'unit_id' => 64],
        ]);

        // lesson 12's games
        DB::table('games')->insert([

            ['name' => 'Target Language',  'unit_id' => 65, 'instructionGIF' => null, 'category' => null],
            ['name' => 'Reading',  'unit_id' => 66, 'instructionGIF' => null, 'category' => null],
            ['name' => 'Listen and Practice',  'unit_id' => 67, 'instructionGIF' => null, 'category' => null],
            ['name' => 'Matching',  'unit_id' => 68, 'instructionGIF' => null, 'category' => null],
            ['name' => 'Speaking Practice', 'instructionGIF' => null,  'unit_id' => 69, 'category' => null],
            ['name' => 'writing 1', 'unit_id' => 70, 'instructionGIF' => "trace and writ GIF", 'category' => "letter_tracing"],
            ['name' => 'writing 2',  'unit_id' => 70, 'instructionGIF' => "Writ the correct Letter GIF", 'category' => "rearrange_with_audio"],
        ]);

        DB::table('games')->insert([
            [
                'name' => 'writing 1', 'unit_id' => 69, 'instructionGIF' => "trace and writ GIF",
                'category' => "letter_tracing"
            ],

            ['name' => 'writing 2',  'unit_id' => 69, 'instructionGIF' => "Writ the correct Letter GIF", 'category' => "fill_in_the_blanks"],

        ]);



        // // lesson 13's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation',  'instructionGIF' => null, 'unit_id' => 71],
            ['name' => 'Reading, Listen and Repeat',  'instructionGIF' => null, 'unit_id' => 72],
            ['name' => 'Drag and Drop',  'instructionGIF' => null, 'unit_id' => 73],
            ['name' => 'Listen and Practice',  'instructionGIF' => null, 'unit_id' => 74],
            ['name' => 'Speaking Practice',  'instructionGIF' => null, 'unit_id' => 75],

            // lesson 14's games
            ['name' => 'Target Language & Grammar Explanation', 'instructionGIF' => null, 'unit_id' => 76],
            ['name' => 'Reading, Listen and Repeat', 'instructionGIF' => null, 'unit_id' => 77],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 78],
            ['name' => 'Grammar', 'instructionGIF' => null, 'unit_id' => 79],
            ['name' => 'Writing', 'instructionGIF' => null, 'unit_id' => 80],
            ['name' => 'Speaking Practice', 'instructionGIF' => null, 'unit_id' => 81],

        ]);

        // // lesson 15's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 15, 'category' => null],
            ['name' => 'Listen, Reading and Repeat', 'unit_id' => 15, 'category' => 'listening_and_search_items'], // temporary
            ['name' => 'Listen and Practice', 'unit_id' => 15, 'category' => "mcq_grammar"], // temporary
            ['name' => 'Grammar', 'unit_id' => 15, 'category' => null],
            ['name' => 'Speaking Practice', 'unit_id' => 15, 'category' => null],
            ['name' => 'Reading', 'unit_id' => 15, 'category' => null],

        ]);

        // // lesson 16's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation',  'instructionGIF' => null, 'unit_id' => 82, 'category' => null],
            ['name' => 'Reading 1',  'instructionGIF' => null, 'unit_id' => 83, 'category' => "reading_conversation"],
            ['name' => 'Reading 2', 'instructionGIF' => null, 'unit_id' => 83, 'category' => "reading_conversation"],
            ['name' => '1',  'instructionGIF' => null, 'unit_id' => 84, 'category' => "listening_and_search_items"],
            ['name' => '2',  'instructionGIF' => null, 'unit_id' => 84, 'category' => "mcq_grammar"],
            ['name' => 'Grammar', 'instructionGIF' => null, 'unit_id' => 85, 'category' => null],
            ['name' => 'Speaking Practice',  'instructionGIF' => null, 'unit_id' => 86, 'category' => null],
            ['name' => 'Reading',  'instructionGIF' => null, 'unit_id' => 87, 'category' => null],

            // lesson 16's games

            ['name' => 'Target Language & Grammar Explanation',  'instructionGIF' => null, 'unit_id' => 88, 'category' => null],
            ['name' => 'Reading, Listen and Repeat',  'instructionGIF' => null, 'unit_id' => 89, 'category' => null],
            ['name' => 'Listen and Practice',  'instructionGIF' => null, 'unit_id' => 90, 'category' => null],
            ['name' => 'Matching',  'instructionGIF' => null, 'unit_id' => 91, 'category' => null],
            ['name' => 'Speaking 1',  'instructionGIF' => null, 'unit_id' => 92, 'category' => "speaking_and_recording"],
            ['name' => 'Speaking 2',  'instructionGIF' => null, 'unit_id' => 92, 'category' => "speaking_and_recording"],
            ['name' => 'writing 1', 'instructionGIF' => null, 'unit_id' => 93, 'category' => "letter_tracing"],
            ['name' => 'writing 2',  'instructionGIF' => null, 'unit_id' => 93, 'category' => "fill_in_the_blanks"],

        ]);

        // // lesson 17's games
        DB::table('games')->insert([

            ['name' => 'Target Language',  'instructionGIF' => null, 'unit_id' => 94, 'category' => null],
            ['name' => 'Reading 1',  'instructionGIF' => null, 'unit_id' => 95, 'category' => "reading_diagram"],
            ['name' => 'Reading 2', 'instructionGIF' => null, 'unit_id' => 95, 'category' => "reading_carousel"],
            ['name' => 'Listen and Practice', 'instructionGIF' => null, 'unit_id' => 96, 'category' => null],
            ['name' => 'Matching',  'instructionGIF' => null, 'unit_id' => 97, 'category' => null],
            ['name' => 'Listen and Act',  'instructionGIF' => null, 'unit_id' => 98, 'category' => null],
            ['name' => 'Speaking Practice',  'instructionGIF' => null, 'unit_id' => 99, 'category' => null],
        ]);
    }
}
