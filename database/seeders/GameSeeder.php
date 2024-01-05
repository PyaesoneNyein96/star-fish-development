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

        $Gif_path = $domain . "/storage/InstructionGif/";


        // //----------------- Grade 1 games -------------------------

        // unit 1's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 1, 'category_id' => 1, 'instructionGIF' => null,],
            ['name' => 'Read and Practice', 'unit_id' => 2, 'category_id' => 2, 'instructionGIF' => null,],
            ['name' => 'Song', 'unit_id' => 3, 'category_id' => 3, 'instructionGIF' => null,],
            ['name' => 'Listen and Practice', 'unit_id' => 4,  'category_id' => 4, 'instructionGIF' => $Gif_path . "Listen-and-Practice-1.gif",],
            ['name' => 'Writing', 'unit_id' => 5,  'category_id' => 5, 'instructionGIF' =>  $Gif_path . "Putting.gif",],
        ]);

        // unit 2's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 6, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read and Practice', 'unit_id' => 7,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Song', 'unit_id' => 8, 'category_id' => 3, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 9,  'category_id' => 6, 'instructionGIF' => $Gif_path . "Listen-and-Practice-1.gif"],
            ['name' => 'Matching', 'unit_id' => 10,  'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 11,  'category_id' => 5, 'instructionGIF' => $Gif_path . "Putting.gif"],

        ]);


        // unit 3's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 12, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read Listen and Repeat', 'unit_id' => 13,  'category_id' => 8, 'instructionGIF' => $Gif_path . "Conversation.gif"],
            ['name' => 'Listen and Practice', 'unit_id' => 14,  'category_id' => 13, 'instructionGIF' => $Gif_path . "Conversation.gif"],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 15,  'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking', 'unit_id' => 16,  'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],

        ]);

        // unit 4's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 17,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read, Listen & Repeat', 'unit_id' => 18,  'category_id' => 8, 'instructionGIF' => $Gif_path . "Conversation.gif"],
            ['name' => 'Read, Listen & Repeat', 'unit_id' => 19,  'category_id' => 12, 'instructionGIF' => $Gif_path . "Speak-and-Practice.gif"],
            ['name' => 'Listening & Practice', 'unit_id' => 20, 'category_id' => 13, 'instructionGIF' => $Gif_path . "Conversation.gif"],
            ['name' => 'Writing (Arranging Order)', 'unit_id' => 21, 'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 5's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 22,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 23,  'category_id' => 15, 'instructionGIF' => null],
            ['name' => 'Read, Listen and Repeat', 'unit_id' => 24,  'category_id' => 8, 'instructionGIF' => $Gif_path . "Conversation.gif"],
            ['name' => 'Reading Passage', 'unit_id' => 25,  'category_id' => 16, 'instructionGIF' => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 26,  'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 27,  'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],

        ]);
        // // unit 6's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 28,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 29,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 30,  'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 31,  'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 32,  'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 33,  'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],
        ]);

        // // unit 7's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 34, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read, Listen and Repeat', 'unit_id' => 35, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 36, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 37, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 38, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Writing 1', 'unit_id' => 39,  'category_id' => 18, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Writing 2', 'unit_id' => 39,  'category_id' => 10, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 8's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 40, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read', 'unit_id' => 41,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'listening Practice', 'unit_id' => 42,  'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 43,  'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 44,  'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Reading Passage', 'unit_id' => 45,  'category_id' => 16, 'instructionGIF' => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Writing', 'unit_id' => 46,  'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 9's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 47,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 48,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and practice', 'unit_id' => 49,  'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 50,  'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 51,  'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 52,  'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],
        ]);

        // // unit 10's games
        DB::table('games')->insert([

            ['name' => 'Target', 'unit_id' => 53,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 54,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 55,  'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 56,  'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 57,  'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 58,  'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],
        ]);

        // // unit 11's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 59,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read, Listen and Repeat', 'unit_id' => 60,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 61,  'category_id' => 6, 'instructionGIF' => $Gif_path . "Listen-and-Practice-1.gif"],
            ['name' => 'Matching', 'unit_id' => 62,  'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 63,  'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Reading Passage', 'unit_id' => 64,  'category_id' => 16, 'instructionGIF' => $Gif_path . "Read-the-passage.gif"],
        ]);

        // unit 12's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 65, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 66, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 67, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 68, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 69, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'writing 1', 'unit_id' => 70, 'category_id' => 18, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'writing 2',  'unit_id' => 70,   'category_id' => 10, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);


        // // unit 13's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 71,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading, Listen and Repeat', 'unit_id' => 72,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Drag and Drop', 'unit_id' => 73,  'category_id' => 19, 'instructionGIF' => $Gif_path . "Putting.gif"],
            ['name' => 'Listen and Practice', 'unit_id' => 74,  'category_id' => 20, 'instructionGIF' => $Gif_path . "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 75, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
        ]);

        // // unit 14's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 76,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading, Listen and Repeat', 'unit_id' => 77,  'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 78,  'category_id' => 20, 'instructionGIF' => $Gif_path . "Listen-and-choose-correct.gif"],
            ['name' => 'Grammar', 'unit_id' => 79,  'category_id' => 21, 'instructionGIF' => $Gif_path . "Listen-and-choose-correct.gif"],
            ['name' => 'Writing', 'unit_id' => 80,  'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 81, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],

        ]);

        // // unit 15's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 82,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 83,  'category_id' => 8, 'instructionGIF' => $Gif_path . "Conversation.gif"],
            ['name' => 'Reading 2', 'unit_id' => 83,  'category_id' => 8, 'instructionGIF' => $Gif_path . "Conversation.gif"],
            ['name' => '1', 'unit_id' => 84,   'category_id' => 17, 'instructionGIF' => null],
            ['name' => '2', 'unit_id' => 84,   'category_id' => 21, 'instructionGIF' => $Gif_path . "Listen-and-choose-correct.gif"],
            ['name' => 'Grammar', 'unit_id' => 85,  'category_id' => 21, 'instructionGIF' => $Gif_path . "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 86,  'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 87, 'category_id' => 16, 'instructionGIF' => $Gif_path . "Read-the-passage.gif"],

        ]);

        // // unit 16's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 88, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading, Listen and Repeat', 'unit_id' => 89, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice, Game', 'unit_id' => 90, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 91, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],

            ['name' => 'Speaking 1', 'unit_id' => 92, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking 2', 'unit_id' => 92, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

            ['name' => 'Writing 1', 'unit_id' => 93, 'category_id' => 18, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Writing 2', 'unit_id' => 93, 'category_id' => 10, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 17's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 94, 'category_id' => 1, 'instructionGIF' => null],

            ['name' => 'Reading 1', 'unit_id' => 95, 'category_id' => 22, 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 95, 'category_id' => 2, 'instructionGIF' => null],

            ['name' => 'Listen and Practice', 'unit_id' => 96, 'category_id' => 23, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 97, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Listen and Act', 'unit_id' => 98, 'category_id' => 13, 'instructionGIF' => $Gif_path . "Listen-and-Practice-2.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 99, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        // // unit 18's games
        DB::table('games')->insert([

            ['name' => 'Grammar Explanation', 'unit_id' => 100, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen Read and Repeat', 'unit_id' => 101, 'category_id' => 22, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 102, 'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Listen and Act', 'unit_id' => 103, 'category_id' => 13, 'instructionGIF' => $Gif_path . "Listen-and-Practice-2.gif"],
            ['name' => 'Writing', 'unit_id' => 104, 'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 105, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        // // unit 19's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 106, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 107, 'category_id' => 22, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 108, 'category_id' => 21, 'instructionGIF' => $Gif_path . "Listen-and-choose-correct.gif"],
            ['name' => 'Listen and Act', 'unit_id' => 109, 'category_id' => 13, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 110, 'category_id' => 16, 'instructionGIF' => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 111, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        // // unit 20's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 112, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read ,Listen and Repeat', 'unit_id' => 113, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice Game', 'unit_id' => 114, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 115, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],

            ['name' => 'Speaking 1', 'unit_id' => 116, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking 2', 'unit_id' => 116, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

            ['name' => 'Writing 1', 'unit_id' => 117, 'category_id' => 18, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Writing 2', 'unit_id' => 117, 'category_id' => 10, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 21's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 118, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 1 )', 'unit_id' => 119, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 2 )', 'unit_id' => 119, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 120, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 121, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 122, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        // // unit 22's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 123, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 1 )', 'unit_id' => 124, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 2 )', 'unit_id' => 124, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 125, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 126, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Writing', 'unit_id' => 127, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking', 'unit_id' => 128, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        // // unit 23's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 129, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 1 )', 'unit_id' => 130, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat ( Reading 2 )', 'unit_id' => 130, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 131, 'category_id' => 24, 'instructionGIF' => null],
            ['name' => 'True or False', 'unit_id' => 132, 'category_id' => 20, 'instructionGIF' =>  null],
            ['name' => 'Reading', 'unit_id' => 133, 'category_id' => 16, 'instructionGIF' => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 134, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        // // unit 24's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 135, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 136, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 137, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Song', 'unit_id' => 138, 'category_id' => 3, 'instructionGIF' =>  null],
            ['name' => 'Speaking', 'unit_id' => 139, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 140, 'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 25's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 141, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 142, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 143, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 144, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 145, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Writing ( 1 )', 'unit_id' => 146, 'category_id' => 18, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Writing ( 2 )', 'unit_id' => 146, 'category_id' => 10, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 26's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 147, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read ,Listen and Repeat', 'unit_id' => 148, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice Game', 'unit_id' => 149, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 150, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Grammar', 'unit_id' => 151, 'category_id' => 21, 'instructionGIF' =>  null],
            ['name' => 'Speaking', 'unit_id' => 152, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        // // unit 27's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 153, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read ,Listen and Repeat', 'unit_id' => 154, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice Game', 'unit_id' => 155, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 156, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 157, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 158, 'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 28's games
        DB::table('games')->insert([

            ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 159, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read ,Listen and Repeat', 'unit_id' => 160, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 161, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 162, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Reading', 'unit_id' => 163, 'category_id' => 16, 'instructionGIF' => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speaking', 'unit_id' => 164, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        // // unit 29's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 165, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 166, 'category_id' => 8, 'instructionGIF' =>  $Gif_path . "Conversation.gif"],
            ['name' => 'Listen and Practice', 'unit_id' => 167, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Song', 'unit_id' => 168, 'category_id' => 3, 'instructionGIF' =>  null],
            ['name' => 'Word Order', 'unit_id' => 169, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking', 'unit_id' => 170, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        // // unit 30's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 171, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 172, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 173, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 174, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 175, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing ( 1 )', 'unit_id' => 176, 'category_id' => 18, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Writing ( 2 )', 'unit_id' => 176, 'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);

        // // unit 31's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 177, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 178, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Game 1', 'unit_id' => 179, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Game 2', 'unit_id' => 179, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 180, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 181, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing 1', 'unit_id' => 182, 'category_id' => 18, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Writing 2', 'unit_id' => 182, 'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

        ]);


        // // unit 32's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 183, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 184, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Round 1', 'unit_id' => 185, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Round 2', 'unit_id' => 185, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 186, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Reading', 'unit_id' => 187, 'category_id' => 16, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speaking', 'unit_id' => 188, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],


        ]);

        // // unit 33's games
        DB::table('games')->insert([

            ['name' => 'Target Language and Grammar Explanation', 'unit_id' => 189, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read,Listen and Repeat', 'unit_id' => 190, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 191, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 192, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 193, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],


        ]);

        // // unit 34's games
        DB::table('games')->insert([

            ['name' => 'Target Language and Grammar Explanation', 'unit_id' => 194, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read,Listen and Repeat', 'unit_id' => 195, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 196, 'category_id' => 25, 'instructionGIF' => null],
            ['name' => 'Writing', 'unit_id' => 197, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking', 'unit_id' => 198, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);


        // // unit 35's games
        DB::table('games')->insert([

            ['name' => 'Target Language and Grammar Explanation', 'unit_id' => 199, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read,Listen and Repeat', 'unit_id' => 200, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'True or False', 'unit_id' => 201, 'category_id' => 25, 'instructionGIF' => null],
            ['name' => 'Song', 'unit_id' => 202, 'category_id' => 3, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 203, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Reading', 'unit_id' => 204, 'category_id' => 16, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speaking', 'unit_id' => 205, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);


        // // unit 36's games
        DB::table('games')->insert([

            ['name' => 'Target Language and Grammar Explanation', 'unit_id' => 206, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read,Listen and Repeat', 'unit_id' => 207, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice Game', 'unit_id' => 208, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 209, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 210, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Writing 1', 'unit_id' => 211, 'category_id' => 18, 'instructionGIF' =>  $Gif_path . "Tracing.gif"],
            ['name' => 'Writing 2', 'unit_id' => 211, 'category_id' => 10, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],

        ]);


        // // unit 37's games
        DB::table('games')->insert([

            ['name' => 'Target Language and Grammar Explanation', 'unit_id' => 212, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read,Listen and Repeat', 'unit_id' => 213, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice Game', 'unit_id' => 214, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 215, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 216, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);


        // // unit 38's games
        DB::table('games')->insert([

            ['name' => 'Target Language and Grammar Explanation', 'unit_id' => 217, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Read,Listen and Repeat', 'unit_id' => 218, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice Game', 'unit_id' => 219, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Writing', 'unit_id' => 220, 'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking', 'unit_id' => 221, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);


        // // unit 39's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 222, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 223, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 223, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Round 1', 'unit_id' => 224, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Grammar', 'unit_id' => 225, 'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Writing(Arranging Order)', 'unit_id' => 226, 'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speaking', 'unit_id' => 227, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);


        // // unit 40's games
        DB::table('games')->insert([

            ['name' => 'Target Language', 'unit_id' => 228, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 229, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 229, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 230, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 231, 'category_id' => 16, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speaking', 'unit_id' => 232, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        //  Grade 1 Games end.......



        // //----------------- Grade 2 games -------------------------

        // // unit 1's games
        DB::table('games')->insert([

            ['name' => 'Video', 'unit_id' => 233, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Pronounciation', 'unit_id' => 234, 'category_id' => 9, 'instructionGIF' => null],
            ['name' => 'Practice for Speaking', 'unit_id' => 235, 'category_id' => 11, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 236, 'category_id' => 38, 'instructionGIF' => null],
            ['name' => 'Fill in the blank', 'unit_id' => 237, 'category_id' => 30, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Free Practice', 'unit_id' => 238, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],


        // // unit 2's games


            ['name' => 'Reading', 'unit_id' => 239, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Word', 'unit_id' => 240, 'category_id' => 31, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 241, 'category_id' => 7, 'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 242, 'category_id' => 14, 'instructionGIF' => null],
            ['name' => 'Video', 'unit_id' => 243, 'category_id' => 1, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Listen & Speak', 'unit_id' => 244, 'category_id' => 32, 'instructionGIF' => $Gif_path . "Speaking.gif"],



        // // unit 3's games


            ['name' => 'Listen and Repeat', 'unit_id' => 245, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 246, 'category_id' => 11, 'instructionGIF' => null],
            ['name' => 'Reading Passage', 'unit_id' => 247, 'category_id' => 16, 'instructionGIF' => null],



        // // unit 4's games


            ['name' => 'Read', 'unit_id' => 248, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 249, 'category_id' => 31, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 250, 'category_id' => 7, 'instructionGIF' => null],
            ['name' => 'Writing', 'unit_id' => 251, 'category_id' => 14, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 252, 'category_id' => 32, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],




        // // unit 5's games


            ['name' => 'Video', 'unit_id' => 253, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Vocab ( Reading )', 'unit_id' => 254, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listern and Learn', 'unit_id' => 255, 'category_id' => 3, 'instructionGIF' => null],
            ['name' => 'Sing And Dance', 'unit_id' => 256, 'category_id' => 3, 'instructionGIF' => null],




        // // unit 6's games


            ['name' => 'Target language Learn Words', 'unit_id' => 257, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Describing People ( Reading 1 )', 'unit_id' => 258, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Describing People ( Reading 2 )', 'unit_id' => 258, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 259, 'category_id' => 7, 'instructionGIF' => null],
            ['name' => 'Speaking', 'unit_id' => 260, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],



        // // unit 7's games


            ['name' => 'Video', 'unit_id' => 261, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 262, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace', 'unit_id' => 263, 'category_id' => 31, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 264, 'category_id' => 7, 'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 265, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Practice', 'unit_id' => 266, 'category_id' => 32, 'instructionGIF' => $Gif_path . "Speaking.gif"],




        // // unit 8's games


            ['name' => 'Video', 'unit_id' => 267, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 268, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Write', 'unit_id' => 269, 'category_id' => 14, 'instructionGIF' => null],
            ['name' => 'Look and Write', 'unit_id' => 270, 'category_id' => 40, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 271, 'category_id' => 16, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speak', 'unit_id' => 272, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],




        // // unit 9's games


            ['name' => 'Listen and Repeat', 'unit_id' => 273, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace and Write', 'unit_id' => 274, 'category_id' => 31, 'instructionGIF' => null],
            ['name' => 'Matching and words picture', 'unit_id' => 275, 'category_id' => 7, 'instructionGIF' => null],
            ['name' => 'Arrange the letter', 'unit_id' => 276, 'category_id' => 14, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 277, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],




        // // unit 10's games


            ['name' => 'Grammar Explain', 'unit_id' => 278, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 279, 'category_id' => 33, 'instructionGIF' => null],
            ['name' => 'Look and Write', 'unit_id' => 280, 'category_id' => 34, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 281, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],



        // // unit 11's games


            ['name' => 'Listen and Write', 'unit_id' => 282, 'category_id' => 36, 'instructionGIF' => null],
            ['name' => 'Coloring', 'unit_id' => 283, 'category_id' => 35, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 284, 'category_id' => 11, 'instructionGIF' => null],



        // // unit 12's games


            ['name' => 'Grammar Explanation', 'unit_id' => 285, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 286, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Choose', 'unit_id' => 287, 'category_id' => 37, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 288, 'category_id' => 11, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 289, 'category_id' => 16, 'instructionGIF' => null],



        // // unit 13's games


            ['name' => 'Listen and Repeat', 'unit_id' => 290, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 291, 'category_id' => 31, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 292, 'category_id' => 7, 'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 293, 'category_id' => 14, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 294, 'category_id' => 11, 'instructionGIF' => null],
            ['name' => 'Target Grammar', 'unit_id' => 295, 'category_id' => 1, 'instructionGIF' => null],



        // // unit 14's games


            ['name' => 'Video', 'unit_id' => 296, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 297, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Choose', 'unit_id' => 298, 'category_id' => 53, 'instructionGIF' => null],
            ['name' => 'Speak ( 1 )', 'unit_id' => 299, 'category_id' => 8, 'instructionGIF' => null],
            ['name' => 'Speak ( 2 )', 'unit_id' => 299, 'category_id' => 11, 'instructionGIF' => null],
            ['name' => 'Speak more', 'unit_id' => 300, 'category_id' => 11, 'instructionGIF' => null],



        // // unit 15's games


            ['name' => 'Vocabulary', 'unit_id' => 301, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 302, 'category_id' => 31, 'instructionGIF' => null],
            ['name' => 'Matching Words and Picture', 'unit_id' => 303, 'category_id' => 7, 'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 304, 'category_id' => 14, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 305, 'category_id' => 11, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 306, 'category_id' => 16, 'instructionGIF' => null],



        // // unit 16's games


            ['name' => 'Target Language Explanation', 'unit_id' => 307, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 308, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Learn', 'unit_id' => 309, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Sing and Dance', 'unit_id' => 310, 'category_id' => 3, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 311, 'category_id' => 11, 'instructionGIF' => null],



        // // unit 17's games


            ['name' => 'Video', 'unit_id' => 312, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 313, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'True or False', 'unit_id' => 314, 'category_id' => 20, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 315, 'category_id' => 11, 'instructionGIF' => null],



        // // unit 18's games


            ['name' => 'Grammar Explain', 'unit_id' => 316, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 317, 'category_id' => 9, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 318, 'category_id' => 11, 'instructionGIF' => null],
            ['name' => 'Listen and Choose', 'unit_id' => 319, 'category_id' => 37, 'instructionGIF' => null],



        // // unit 19's games


            ['name' => 'Video', 'unit_id' => 320, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 321, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 322, 'category_id' => 31, 'instructionGIF' => null],
            ['name' => 'Matching words and picture', 'unit_id' => 323, 'category_id' => 7, 'instructionGIF' => null],
            ['name' => 'Listen and write', 'unit_id' => 324, 'category_id' => 14, 'instructionGIF' => null],
            ['name' => 'Speak ( 1 )', 'unit_id' => 325, 'category_id' => 8, 'instructionGIF' => null],
            ['name' => 'Speak ( 2 )', 'unit_id' => 325, 'category_id' => 11, 'instructionGIF' => null],



        // // unit 20's games


            ['name' => 'Listen and Repeat', 'unit_id' => 326, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 327, 'category_id' => 31, 'instructionGIF' => null],
            ['name' => 'Matching words', 'unit_id' => 328, 'category_id' => 7, 'instructionGIF' => null],
            ['name' => 'Listen and write', 'unit_id' => 329, 'category_id' => 14, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 330, 'category_id' => 16, 'instructionGIF' => null],







        // // unit 21's games


            ['name' => 'Grammar Explanation', 'unit_id' => 331,'category_id' => 1, 'instructionGIF' => null ],
            ['name' => 'Listen and Repeat', 'unit_id' => 332,'category_id' => 2, 'instructionGIF' => null ],
            ['name' => 'Matching words and pictures', 'unit_id' => 332,'category_id' => 7, 'instructionGIF' => null ],
            ['name' => 'Choose your answer', 'unit_id' => 334,'category_id' => 20, 'instructionGIF' => null ],
            ['name' => 'Speak', 'unit_id' => 335,'category_id' => 11 , 'instructionGIF' => null ],



        // // unit 22's games

            ['name' => 'Target Language Explanation', 'unit_id' => 336,'category_id' => 1, 'instructionGIF' => null ],
            ['name' => 'Listen and Learn the song', 'unit_id' => 337,'category_id' => 2, 'instructionGIF' => null ],
            ['name' => 'Sing and dance', 'unit_id' => 338,'category_id' => 7, 'instructionGIF' => null ],
            ['name' => 'Speak', 'unit_id' => 339,'category_id' => 11 , 'instructionGIF' => null ],


        // // unit 23's games

            ['name' => 'Video', 'unit_id' => 340, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 341, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 342, 'category_id' => 1, 'instructionGIF' => null ],
            ['name' => 'Listen and Choose', 'unit_id' =>343 , 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 344, 'category_id' => 1, 'instructionGIF' => null,],


        // // unit 24's games

            ['name' => 'Video', 'unit_id' => 345 , 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 346 , 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 347 , 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 348 ,'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Writing', 'unit_id' => 349 ,  'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Speaking', 'unit_id' => 350 , 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Reading short', 'unit_id' => 351 ,'category_id' => 1, 'instructionGIF' => null],


        // // unit 25's games

            ['name' => 'Grammar Explanation', 'unit_id' => 352 ,'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 353 ,'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Choose', 'unit_id' => 354 , 'instructionGIF' => null],
            ['name' => 'Listen and write', 'unit_id' => 355 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 356 , 'instructionGIF' => null],


        // // unit 26's games

            ['name' => 'Listen and Repeat', 'unit_id' => 357, 'instructionGIF' => null ],
            ['name' => 'Trace words', 'unit_id' => 358 , 'instructionGIF' => null],
            ['name' => 'Matching words and pictures', 'unit_id' => 359 , 'instructionGIF' => null],
            ['name' => 'Listen and write', 'unit_id' => 360 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 361 , 'instructionGIF' => null],


        // // unit 27's games

            ['name' => 'Video', 'unit_id' => 362 , 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 363 , 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 363 , 'instructionGIF' => null],
            ['name' => 'Listen and write', 'unit_id' => 364 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 365 , 'instructionGIF' => null],



        // // unit 28's games

            ['name' => 'Video', 'unit_id' => 366 , 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 367 , 'instructionGIF' => null],
            ['name' => 'Listen and write', 'unit_id' => 368 , 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 369 , 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 370 , 'instructionGIF' => null],


        // // unit 29's games

            ['name' => 'Grammar Explanation', 'unit_id' => 371, 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 372, 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 372 , 'instructionGIF' => null],
            ['name' => 'Look and Write', 'unit_id' => 373 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 374 , 'instructionGIF' => null],



        // // unit 30's games

            ['name' => 'Listen and Repeat', 'unit_id' => 375 , 'instructionGIF' => null],
            ['name' => 'Trace words', 'unit_id' => 376 , 'instructionGIF' => null],
            ['name' => 'Matching words and pictures', 'unit_id' => 377 , 'instructionGIF' => null],
            ['name' => 'Listen and write', 'unit_id' => 378 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 379 , 'instructionGIF' => null],


        // // unit 31's games

            ['name' => 'Video', 'unit_id' => 380 , 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 381 , 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 381 , 'instructionGIF' => null],
            ['name' => 'Look and Write', 'unit_id' => 382 , 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 383 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 384 , 'instructionGIF' => null],



        // // unit 32's games

            ['name' => 'Video', 'unit_id' => 385 , 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 386 , 'instructionGIF' => null],
            ['name' => 'Trace', 'unit_id' => 387 , 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 388 , 'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 389 , 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 390 , 'instructionGIF' => null],



        // // unit 33's games


            ['name' => 'Grammar Explanation', 'unit_id' => 391 , 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 392 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 393 , 'instructionGIF' => null],


        // // unit 34's games

            ['name' => 'Listen and Repeat', 'unit_id' => 394 , 'instructionGIF' => null],
            ['name' => 'Trace Word', 'unit_id' => 395 , 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 396 , 'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 397 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 398 , 'instructionGIF' => null],


        // // unit 35's games

            ['name' => 'Video', 'unit_id' => 399 , 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 400 , 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 400 , 'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 401, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 402, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 403, 'instructionGIF' => null],


        // // unit 36's games

            ['name' => 'Video', 'unit_id' => 404 , 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 405 , 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 405 , 'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 406 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 407 , 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 408 , 'instructionGIF' => null],


        // // unit 37's games

            ['name' => 'Target Language Explanation', 'unit_id' => 409 , 'instructionGIF' => null],
            ['name' => 'Listen and Learn', 'unit_id' => 410 , 'instructionGIF' => null],
            ['name' => 'Sing and Dance', 'unit_id' => 411 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 412 , 'instructionGIF' => null],


        // // unit 38's games

            ['name' => 'Video', 'unit_id' => 413 , 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 414 , 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 414 , 'instructionGIF' => null],
            ['name' => 'Tracing', 'unit_id' => 415 , 'instructionGIF' => null],
            ['name' => 'Arranging Letters', 'unit_id' => 416 , 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 417 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 418 , 'instructionGIF' => null],


        // // unit 39's games

            ['name' => 'Grammar Explanation', 'unit_id' => 419 , 'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 420 , 'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 420 , 'instructionGIF' => null],
            ['name' => 'Look and write', 'unit_id' => 421 , 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 422 , 'instructionGIF' => null],


        // // unit 40's games

            ['name' => 'Grammar Explanation', 'unit_id' => 423 , 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 424 , 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 425 , 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 426 , 'instructionGIF' => null],
            ['name' => 'Reading Passage', 'unit_id' => 427, 'instructionGIF' => null],




        ]);


















        //--------------  Grade 3 Games -------------------

        // DB::table('games')->insert([
        //     ['name' => 'Target Language', 'unit_id' => 233, 'category_id' => 1],
        //     ['name' => 'Vocabulary', 'unit_id' => 234, 'category_id' => 1],
        //     ['name' => 'Practice', 'unit_id' => 235, 'category_id' => 1],
        //     ['name' => 'Listening', 'unit_id' => 236, 'category_id' => 1],
        //     ['name' => 'Speaking', 'unit_id' => 237, 'category_id' => 1],
        //     ['name' => 'Reading', 'unit_id' => 238, 'category_id' => 3],
        //     ['name' => 'Writing', 'unit_id' => 239, 'category_id' => 26],   // ***
        //     ['name' => 'Free practice', 'unit_id' => 240, 'category_id' => 3],
        // ]);

        // ////////////////////

        // DB::table('games')->insert([
        //     ['name' => 'Video', 'unit_id' => 241, 'category_id' => 1],
        //     ['name' => 'Vocabulary', 'unit_id' => 242, 'category_id' => 1],
        //     ['name' => 'Write the opposite', 'unit_id' => 243, 'category_id' => 27],  // ***
        //     ['name' => 'Writing', 'unit_id' => 244, 'category_id' => 1],
        //     ['name' => 'Listen', 'unit_id' => 245, 'category_id' => 1],
        //     ['name' => 'Speaking', 'unit_id' => 246, 'category_id' => 3],
        //     ['name' => 'Free Speaking Practice', 'unit_id' => 247, 'category_id' => 3],
        // ]);



        // // //----------------- Grade 3 games -------------------------

        // DB::table('games')->insert([
        //     ['name' => 'Reading Lesson', 'unit_id' => 248, 'category_id' => 1],
        //     ['name' => 'Listen and Repeat', 'unit_id' => 249, 'category_id' => 1],
        //     ['name' => 'Speaking Practice', 'unit_id' => 250, 'category_id' => 1],
        //     ['name' => 'Listen and Practice', 'unit_id' => 251, 'category_id' => 28],
        //     ['name' => 'Speaking Topic', 'unit_id' => 252, 'category_id' => 1],
        // ]);
    }
}
