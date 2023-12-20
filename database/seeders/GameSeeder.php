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

        // unit 1's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 1, 'category_id' => 1, 'instructionGIF' => null,],
            ['name' => 'Read and Practice', 'unit_id' => 2, 'category_id' => 2, 'instructionGIF' => null,],
            ['name' => 'Song', 'unit_id' => 3, 'category_id' => 3, 'instructionGIF' => null,],
            ['name' => 'Listen and Practice', 'unit_id' => 4,  'category_id' => 4, 'instructionGIF' => $instructionGif_path . "Listen-_-Practice.gif",],
            ['name' => 'Writing', 'unit_id' => 5,  'category_id' => 5, 'instructionGIF' =>  $instructionGif_path . "Putting.gif",],
        ]);

        // unit 2's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 6, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read and Practice', 'unit_id' => 7,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Song', 'unit_id' => 8, 'category_id' => 3, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 9,  'category_id' => 6, 'instructionGIF' => $instructionGif_path . "Listen-&-Practice.gif"],
            ['name' => 'Matching', 'unit_id' => 10,  'category_id' => 7, 'instructionGIF' => $instructionGif_path . "Matching.gif"],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 11,  'category_id' => 5, 'instructionGIF' => $instructionGif_path . "Putting.gif"],

        ]);


        // unit 3's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 12, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read Listen and Repeat', 'unit_id' => 13,  'category_id' => 8, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 14,  'category_id' => 9, 'instructionGIF' => null],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 15,  'category_id' => 14, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking', 'unit_id' => 16,  'category_id' => 11, 'instructionGIF' =>  $instructionGif_path . "Speaking.gif"],

        ]);

        // unit 4's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 17,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read, Listen & Repeat', 'unit_id' => 18,  'category_id' => 8, 'instructionGIF' => null],
            ['name' => 'Read, Listen & Repeat', 'unit_id' => 19,  'category_id' => 12, 'instructionGIF' => null],
            ['name' => 'Listening & Practice', 'unit_id' => 20, 'category_id' => 13, 'instructionGIF' => null],
            ['name' => 'Writing (Arranging Order)', 'unit_id' => 21, 'category_id' => 14, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 5's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 22,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 23,  'category_id' => 15, 'instructionGIF' => null],
            ['name' => 'Read, Listen and Repeat', 'unit_id' => 24,  'category_id' => 8, 'instructionGIF' => null],
            ['name' => 'Reading Passage', 'unit_id' => 25,  'category_id' => 16, 'instructionGIF' => null],
            ['name' => 'Speaking Practice', 'unit_id' => 26,  'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 27,  'category_id' => 14, 'instructionGIF' =>  $instructionGif_path . "Re-arrange-in-order.gif"],

        ]);
        // // unit 6's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 28,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 29,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 30,  'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 31,  'category_id' => 7, 'instructionGIF' => $instructionGif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 32,  'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 33,  'category_id' => 14, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],
        ]);

        // // unit 7's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 34, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read, Listen and Repeat', 'unit_id' => 35, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 36, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 37, 'category_id' => 7, 'instructionGIF' =>  $instructionGif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 38, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'Writing 1', 'unit_id' => 39,  'category_id' => 18, 'instructionGIF' => $instructionGif_path . "Tracing.gif"],
            ['name' => 'Writing 2', 'unit_id' => 39,  'category_id' => 10, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 8's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 40, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read', 'unit_id' => 41,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'listening Practice', 'unit_id' => 42,  'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 43,  'category_id' => 7, 'instructionGIF' => $instructionGif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 44,  'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'Reading Passage', 'unit_id' => 45,  'category_id' => 16, 'instructionGIF' => null],
            ['name' => 'Writing', 'unit_id' => 46,  'category_id' => 14, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 9's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 47,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 48,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and practice', 'unit_id' => 49,  'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 50,  'category_id' => 7, 'instructionGIF' => $instructionGif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 51,  'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 52,  'category_id' => 14, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],
        ]);

        // // unit 10's games
        DB::table('games')->insert([

            ['name' => 'Target', 'unit_id' => 53,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 54,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 55,  'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 56,  'category_id' => 7, 'instructionGIF' => $instructionGif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 57,  'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 58,  'category_id' => 14, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],
        ]);

        // // unit 11's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 59,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read, Listen and Repeat', 'unit_id' => 60,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 61,  'category_id' => 6, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 62,  'category_id' => 7, 'instructionGIF' => $instructionGif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 63,  'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'Reading Passage', 'unit_id' => 64,  'category_id' => 16, 'instructionGIF' => null],
        ]);

        // unit 12's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 65, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 66, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 67, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 68, 'category_id' => 7, 'instructionGIF' => $instructionGif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 69, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'writing 1', 'unit_id' => 70, 'category_id' => 18, 'instructionGIF' => $instructionGif_path . "Tracing.gif"],
            ['name' => 'writing 2',  'unit_id' => 70,   'category_id' => 10, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],

        ]);


        // // unit 13's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 71,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading, Listen and Repeat', 'unit_id' => 72,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Drag and Drop', 'unit_id' => 73,  'category_id' => 19, 'instructionGIF' => $instructionGif_path . "Putting.gif"],
            ['name' => 'Listen and Practice', 'unit_id' => 74,  'category_id' => 20, 'instructionGIF' => null],
            ['name' => 'Speaking Practice', 'unit_id' => 75, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
        ]);

        // // unit 14's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 76,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading, Listen and Repeat', 'unit_id' => 77,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 78,  'category_id' => 20, 'instructionGIF' => null],
            ['name' => 'Grammar', 'unit_id' => 79,  'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Writing', 'unit_id' => 80,  'category_id' => 14, 'instructionGIF' =>  $instructionGif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 81, 'category_id' => 11, 'instructionGIF' =>  $instructionGif_path . "Speaking.gif"],

        ]);

        // // unit 15's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 82,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 83,  'category_id' => 8, 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 83,  'category_id' => 8, 'instructionGIF' => null],
            ['name' => '1', 'unit_id' => 84,   'category_id' => 17, 'instructionGIF' => null],
            ['name' => '2', 'unit_id' => 84,   'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Grammar', 'unit_id' => 85,  'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Speaking Practice', 'unit_id' => 86,  'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 87, 'category_id' => 16, 'instructionGIF' => null],

        ]);

        // // unit 16's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 88, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading, Listen and Repeat', 'unit_id' => 89, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice, Game', 'unit_id' => 90, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 91, 'category_id' => 7, 'instructionGIF' => $instructionGif_path . "Matching.gif"],

            ['name' => 'Speaking 1', 'unit_id' => 92, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'Speaking 2', 'unit_id' => 92, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],

            ['name' => 'Writing 1', 'unit_id' => 93, 'category_id' => 18, 'instructionGIF' => $instructionGif_path . "Tracing.gif"],
            ['name' => 'Writing 2', 'unit_id' => 93, 'category_id' => 10, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 17's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 94, 'category_id' => 1, 'instructionGIF' => null],

            ['name' => 'Reading 1', 'unit_id' => 95, 'category_id' => 22, 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 95, 'category_id' => 2, 'instructionGIF' => null],

            ['name' => 'Listen and Practice', 'unit_id' => 96, 'category_id' => 23, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 97, 'category_id' => 7, 'instructionGIF' => $instructionGif_path . "Matching.gif"],
            ['name' => 'Listen and Act', 'unit_id' => 98, 'category_id' => 13, 'instructionGIF' => null],
            ['name' => 'Speaking Practice', 'unit_id' => 99, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],

        ]);

        // // unit 18's games
        DB::table('games')->insert([

            ['name' => 'Grammar Explanation', 'unit_id' => 100, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen Read and Repeat', 'unit_id' => 101, 'category_id' => 22, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 102, 'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Listen and Act', 'unit_id' => 103, 'category_id' => 13, 'instructionGIF' => null],
            ['name' => 'Writing', 'unit_id' => 104, 'category_id' => 14, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 105, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],

        ]);

        // // unit 19's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 106, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 107, 'category_id' => 22, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 108, 'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Listen and Act', 'unit_id' => 109, 'category_id' => 13, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 110, 'category_id' => 16, 'instructionGIF' => null],
            ['name' => 'Speaking Practice', 'unit_id' => 111, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],

        ]);

        // // unit 20's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 112, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read ,Listen and Repeat', 'unit_id' => 113, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice Game', 'unit_id' => 114, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 115, 'category_id' => 7, 'instructionGIF' =>  $instructionGif_path . "Matching.gif"],

            ['name' => 'Speaking 1', 'unit_id' => 116, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],
            ['name' => 'Speaking 2', 'unit_id' => 116, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],

            ['name' => 'Writing 1', 'unit_id' => 117, 'category_id' => 18, 'instructionGIF' => $instructionGif_path . "Tracing.gif"],
            ['name' => 'Writing 2', 'unit_id' => 117, 'category_id' => 10, 'instructionGIF' => $instructionGif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 21's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 118, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 1 )', 'unit_id' => 119, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 2 )', 'unit_id' => 119, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 120, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 121, 'category_id' => 7, 'instructionGIF' =>  $instructionGif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 122, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],

        ]);

        // // unit 22's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 123, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 1 )', 'unit_id' => 124, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 2 )', 'unit_id' => 124, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 125, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 126, 'category_id' => 7, 'instructionGIF' =>  $instructionGif_path . "Matching.gif"],
            ['name' => 'Writing', 'unit_id' => 127, 'category_id' => 14, 'instructionGIF' =>  $instructionGif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking', 'unit_id' => 128, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],

        ]);

        // // unit 23's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 129, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 1 )', 'unit_id' => 130, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 2 )', 'unit_id' => 130, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 131, 'category_id' => 24, 'instructionGIF' => null],
            ['name' => 'True or False', 'unit_id' => 132, 'category_id' => 20, 'instructionGIF' =>  null],
            ['name' => 'Reading', 'unit_id' => 133, 'category_id' => 16, 'instructionGIF' => null],
            ['name' => 'Speaking Practice', 'unit_id' => 134, 'category_id' => 11, 'instructionGIF' => $instructionGif_path . "Speaking.gif"],

        ]);

        //  Grade 1 Games end.......

        //--------------  Grade 3 Games -------------------

        DB::table('games')->insert([
            ['name' => 'Target Language', 'unit_id' => 233, 'category_id' => 1],
            ['name' => 'Vocabulary', 'unit_id' => 234, 'category_id' => 1],
            ['name' => 'Practice', 'unit_id' => 235, 'category_id' => 1],
            ['name' => 'Listening', 'unit_id' => 236, 'category_id' => 1],
            ['name' => 'Speaking', 'unit_id' => 237, 'category_id' => 1],
            ['name' => 'Reading', 'unit_id' => 238, 'category_id' => 3],
            ['name' => 'Writing', 'unit_id' => 239, 'category_id' => 26],   // ***
            ['name' => 'Free practice', 'unit_id' => 240, 'category_id' => 3],
        ]);

        // ////////////////////

        DB::table('games')->insert([
            ['name' => 'Video', 'unit_id' => 241, 'category_id' => 1],
            ['name' => 'Vocabulary', 'unit_id' => 242, 'category_id' => 1],
            ['name' => 'Write the opposite', 'unit_id' => 243, 'category_id' => 27],  // ***
            ['name' => 'Writing', 'unit_id' => 244, 'category_id' => 1],
            ['name' => 'Listen', 'unit_id' => 245, 'category_id' => 1],
            ['name' => 'Speaking', 'unit_id' => 246, 'category_id' => 3],
            ['name' => 'Free Speaking Practice', 'unit_id' => 247, 'category_id' => 3],
        ]);



        // //----------------- Grade 3 games -------------------------

        DB::table('games')->insert([
            ['name' => 'Reading Lesson', 'unit_id' => 248, 'category_id' => 1],
            ['name' => 'Listen and Repeat', 'unit_id' => 249, 'category_id' => 1],
            ['name' => 'Speaking Practice', 'unit_id' => 250, 'category_id' => 1],
            ['name' => 'Listen and Practice', 'unit_id' => 251, 'category_id' => 28],
            ['name' => 'Speaking Topic', 'unit_id' => 252, 'category_id' => 1],
        ]);
    }
}
