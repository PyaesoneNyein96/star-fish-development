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
            ['name' => 'Listen and Practice', 'unit_id' => 23,  'category_id' => 15, 'instructionGIF' => $Gif_path . "Listen-and-Practice-2.gif"],
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
            ['name' => 'Listen and Practice', 'unit_id' => 61,  'category_id' => 29, 'instructionGIF' => $Gif_path . "Listen-and-Practice-1.gif"],
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
            ['name' => 'Trace and write', 'unit_id' => 70, 'category_id' => 18, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Write the correct letter ',  'unit_id' => 70,   'category_id' => 10, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],

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
            ['name' => 'Listen and Act', 'unit_id' => 98, 'category_id' => 13, 'instructionGIF' => null],
            ['name' => 'Speaking Practice', 'unit_id' => 99, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],

        ]);

        // // unit 18's games
        DB::table('games')->insert([

            ['name' => 'Grammar Explanation', 'unit_id' => 100, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen Read and Repeat', 'unit_id' => 101, 'category_id' => 22, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 102, 'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Listen and Act', 'unit_id' => 103, 'category_id' => 13, 'instructionGIF' => null],
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
            ['name' => 'Listen and Practice', 'unit_id' => 185, 'category_id' => 17, 'instructionGIF' => null],

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
            ['name' => 'Pronunciation', 'unit_id' => 234, 'category_id' => 8, 'instructionGIF' =>  $Gif_path . "Conversation.gif"],
            ['name' => 'Practice for Speaking', 'unit_id' => 235, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Listen and Practice', 'unit_id' => 236, 'category_id' => 38, 'instructionGIF' => $Gif_path . "Conversation.gif"],
            ['name' => 'Fill in the blank', 'unit_id' => 237, 'category_id' => 30, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Free Practice', 'unit_id' => 238, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],


            // // unit 2's games


            ['name' => 'Reading', 'unit_id' => 239, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Word', 'unit_id' => 240, 'category_id' => 31, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Matching', 'unit_id' => 241, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Listen and Write', 'unit_id' => 242, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Video', 'unit_id' => 243, 'category_id' => 1, 'instructionGIF' =>  null],
            ['name' => 'Listen & Speak', 'unit_id' => 244, 'category_id' => 32, 'instructionGIF' => $Gif_path . "Conversation.gif"],



            // // unit 3's games


            ['name' => 'Listen and Repeat', 'unit_id' => 245, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 246, 'category_id' => 35, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Reading Passage', 'unit_id' => 247, 'category_id' => 16, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],



            // // unit 4's games


            ['name' => 'Read', 'unit_id' => 248, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 249, 'category_id' => 31, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Matching', 'unit_id' => 250, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Writing', 'unit_id' => 251, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speak', 'unit_id' => 252, 'category_id' => 32, 'instructionGIF' =>  $Gif_path . "Conversation.gif"],




            // // unit 5's games


            ['name' => 'Video', 'unit_id' => 253, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Vocab ( Reading )', 'unit_id' => 254, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listern and Learn', 'unit_id' => 255, 'category_id' => 3, 'instructionGIF' => null],
            ['name' => 'Sing And Dance', 'unit_id' => 256, 'category_id' => 3, 'instructionGIF' => null],




            // // unit 6's games


            ['name' => 'Target language Learn Words', 'unit_id' => 257, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Describing People ( Reading 1 )', 'unit_id' => 258, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Describing People ( Reading 2 )', 'unit_id' => 258, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 259, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 260, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],



            // // unit 7's games


            ['name' => 'Video', 'unit_id' => 261, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 262, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace', 'unit_id' => 263, 'category_id' => 31, 'instructionGIF' =>  $Gif_path . "Tracing.gif"],
            ['name' => 'Matching', 'unit_id' => 264, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Listen and Write', 'unit_id' => 265, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Practice', 'unit_id' => 266, 'category_id' => 32, 'instructionGIF' => $Gif_path . "Conversation.gif"],




            // // unit 8's games


            ['name' => 'Video', 'unit_id' => 267, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 268, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Write', 'unit_id' => 269, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Look and Write', 'unit_id' => 270, 'category_id' => 40, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 271, 'category_id' => 16, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speak', 'unit_id' => 272, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],




            // // unit 9's games


            ['name' => 'Listen and Repeat', 'unit_id' => 273, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace and Write', 'unit_id' => 274, 'category_id' => 31, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Matching and words picture', 'unit_id' => 275, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Arrange the letter', 'unit_id' => 276, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speak', 'unit_id' => 277, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],




            // // unit 10's games


            ['name' => 'Grammar Explain', 'unit_id' => 278, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 279, 'category_id' => 33, 'instructionGIF' => null],
            ['name' => 'Look and Write', 'unit_id' => 280, 'category_id' => 34, 'instructionGIF' => $Gif_path . "Writing-Preview.gif"],
            ['name' => 'Speak', 'unit_id' => 281, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],



            // // unit 11's games


            ['name' => 'Listen and Write', 'unit_id' => 282, 'category_id' => 36, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speak', 'unit_id' => 283, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],



            // // unit 12's games


            ['name' => 'Grammar Explanation', 'unit_id' => 284, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 285, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Choose', 'unit_id' => 286, 'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 287, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 288, 'category_id' => 16, 'instructionGIF' => $Gif_path . "Read-the-passage.gif"],



            // // unit 13's games


            ['name' => 'Listen and Repeat', 'unit_id' => 289, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 290, 'category_id' => 31, 'instructionGIF' =>  $Gif_path . "Tracing.gif"],
            ['name' => 'Matching', 'unit_id' => 291, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Listen and Write', 'unit_id' => 292, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speak', 'unit_id' => 293, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Target Grammar', 'unit_id' => 294, 'category_id' => 1, 'instructionGIF' => null],



            // // unit 14's games


            ['name' => 'Video', 'unit_id' => 295, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 296, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Choose', 'unit_id' => 297, 'category_id' => 53, 'instructionGIF' => null],
            ['name' => 'Speak ( 1 )', 'unit_id' => 298, 'category_id' => 8, 'instructionGIF' => $Gif_path . "Conversation.gif"],
            ['name' => 'Speak ( 2 )', 'unit_id' => 298, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],
            ['name' => 'Speak more', 'unit_id' => 299, 'category_id' => 11, 'instructionGIF' => $Gif_path . "Speaking.gif"],



            // // unit 15's games


            ['name' => 'Vocabulary', 'unit_id' => 300, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 301, 'category_id' => 31, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Matching Words and Picture', 'unit_id' => 302, 'category_id' => 7, 'instructionGIF' => $Gif_path . "Matching.gif"],
            ['name' => 'Listen and Write', 'unit_id' => 303, 'category_id' => 14, 'instructionGIF' => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speak', 'unit_id' => 304, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 305, 'category_id' => 16, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],



            // // unit 16's games


            ['name' => 'Target Language Explanation', 'unit_id' => 306, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 307, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Listen and Learn', 'unit_id' => 308, 'category_id' => 17, 'instructionGIF' => null],
            ['name' => 'Sing and Dance', 'unit_id' => 309, 'category_id' => 3, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 310, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],



            // // unit 17's games


            ['name' => 'Video', 'unit_id' => 311, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 312, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'True or False', 'unit_id' => 313, 'category_id' => 20, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 314, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],



            // // unit 18's games


            ['name' => 'Grammar Explain', 'unit_id' => 315, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 316, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 317, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Listen and Choose', 'unit_id' => 318, 'category_id' => 21, 'instructionGIF' => null],



            // // unit 19's games


            ['name' => 'Video', 'unit_id' => 319, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 320, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 321, 'category_id' => 31, 'instructionGIF' =>  $Gif_path . "Tracing.gif"],
            ['name' => 'Matching words and picture', 'unit_id' => 322, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Listen and write', 'unit_id' => 323, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Speak ( 1 )', 'unit_id' => 324, 'category_id' => 8, 'instructionGIF' =>  $Gif_path . "Conversation.gif"],
            ['name' => 'Speak ( 2 )', 'unit_id' => 324, 'category_id' => 11, 'instructionGIF' =>  $Gif_path . "Speaking.gif"],



            // // unit 20's games


            ['name' => 'Listen and Repeat', 'unit_id' => 325, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 326, 'category_id' => 31, 'instructionGIF' =>  $Gif_path . "Tracing.gif"],
            ['name' => 'Matching words', 'unit_id' => 327, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Listen and write', 'unit_id' => 328, 'category_id' => 14, 'instructionGIF' =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Reading', 'unit_id' => 329, 'category_id' => 16, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],







            // // unit 21's games


            ['name' => 'Grammar Explanation', 'unit_id' => 330, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 331, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Matching words and pictures', 'unit_id' => 332, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Choose your answer', 'unit_id' => 333, 'category_id' => 20, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 334, 'category_id' => 11, 'instructionGIF' => null],



            // // unit 22's games

            ['name' => 'Target Language Explanation', 'unit_id' => 335, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Learn the song', 'unit_id' => 336, 'category_id' => 3, 'instructionGIF' => null],
            ['name' => 'Sing and dance', 'unit_id' => 337, 'category_id' => 3, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 338, 'category_id' => 11, 'instructionGIF' => null],


            // // unit 23's games

            ['name' => 'Video', 'unit_id' => 339, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 340, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 341, 'category_id' => 31, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Listen and Choose', 'unit_id' => 342, 'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 343, 'category_id' => 11, 'instructionGIF' => null,],


            // // unit 24's games

            ['name' => 'Video', 'unit_id' => 344, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 345, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Trace Words', 'unit_id' => 346, 'category_id' => 31, 'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Matching', 'unit_id' => 347, 'category_id' => 7, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Writing', 'unit_id' => 348,  'category_id' => 14, 'instructionGIF' => null],
            ['name' => 'Speaking', 'unit_id' => 349, 'category_id' => 11, 'instructionGIF' => null],
            ['name' => 'Reading short', 'unit_id' => 350, 'category_id' => 16, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],


            // // unit 25's games

            ['name' => 'Grammar Explanation', 'unit_id' => 351, 'category_id' => 1, 'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 352, 'category_id' => 2, 'instructionGIF' => null],
            ['name' => 'Choose', 'unit_id' => 353, 'category_id' => 21, 'instructionGIF' => null],
            ['name' => 'Listen and write', 'unit_id' => 354, 'category_id' => 39,  'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 355, 'category_id' => 11,  'instructionGIF' => null],


            // // unit 26's games

            ['name' => 'Listen and Repeat', 'unit_id' => 356, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Trace words', 'unit_id' => 357, 'category_id' => 31,  'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Matching words and pictures', 'category_id' => 7,  'unit_id' => 358, 'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Listen and write', 'unit_id' => 359, 'category_id' => 14,  'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 360, 'category_id' => 11,  'instructionGIF' => null],


            // // unit 27's games

            ['name' => 'Video', 'unit_id' => 361, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 362, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 362, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Listen and write', 'unit_id' => 363, 'category_id' => 39,  'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 364, 'category_id' => 11,  'instructionGIF' => null],



            // // unit 28's games

            ['name' => 'Video', 'unit_id' => 365, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 366, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Listen and write', 'unit_id' => 367, 'category_id' => 39,  'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 368, 'category_id' => 7,  'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Reading Short', 'unit_id' => 369, 'category_id' => 16,  'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],


            // // unit 29's games

            ['name' => 'Grammar Explanation', 'unit_id' => 370, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 371, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 371, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Look and Write', 'unit_id' => 372, 'category_id' => 39,  'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 373, 'category_id' => 11,  'instructionGIF' => null],



            // // unit 30's games

            ['name' => 'Listen and Repeat', 'unit_id' => 374, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Trace words', 'unit_id' => 375, 'category_id' => 31,  'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Matching words and pictures', 'unit_id' => 376, 'category_id' => 7,  'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Listen and write', 'unit_id' => 377, 'category_id' => 14,  'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 378, 'category_id' => 11,  'instructionGIF' => null],


            // // unit 31's games

            ['name' => 'Video', 'unit_id' => 379, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 380, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 380, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Look and Write', 'unit_id' => 381, 'category_id' => 39,  'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 382, 'category_id' => 7,  'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speak', 'unit_id' => 383, 'category_id' => 11,  'instructionGIF' => null],


            // // unit 32's games

            ['name' => 'Video', 'unit_id' => 384, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 385, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Trace', 'unit_id' => 386, 'category_id' => 31,  'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Matching', 'unit_id' => 387, 'category_id' => 7,  'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Listen and Write', 'unit_id' => 388, 'category_id' => 14,  'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 389, 'category_id' => 16,  'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],



            // // unit 33's games


            ['name' => 'Grammar Explanation', 'unit_id' => 390, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 391, 'category_id' => 8,  'instructionGIF' => null],

            ['name' => 'Writing exercise', 'unit_id' => 392, 'category_id' => 34,  'instructionGIF' => null],

            ['name' => 'Speak', 'unit_id' => 393, 'category_id' => 11,  'instructionGIF' => null],


            // // unit 34's games

            ['name' => 'Listen and Repeat', 'unit_id' => 394, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Trace Word', 'unit_id' => 395, 'category_id' => 31,  'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Matching', 'unit_id' => 396, 'category_id' => 7,  'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Listen and Write', 'unit_id' => 397, 'category_id' => 14, 'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 398, 'category_id' => 11, 'instructionGIF' => null],


            // // unit 35's games

            ['name' => 'Video', 'unit_id' => 399, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 400, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 400, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 401, 'category_id' => 14,  'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 402, 'category_id' => 7,  'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speak', 'unit_id' => 403, 'category_id' => 11,  'instructionGIF' => null],


            // // unit 36's games

            ['name' => 'Video', 'unit_id' => 404, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 405, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 405, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Listen and Write', 'unit_id' => 406, 'category_id' => 39,  'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 407, 'category_id' => 11, 'instructionGIF' => null],
            ['name' => 'Reading', 'unit_id' => 408, 'category_id' => 16, 'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],


            // // unit 37's games

            ['name' => 'Target Language Explanation', 'unit_id' => 409, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Listen and Learn', 'unit_id' => 410, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Sing and Dance', 'unit_id' => 411, 'category_id' => 3,  'instructionGIF' => null],
            ['name' => 'Speak', 'unit_id' => 412, 'category_id' => 11,  'instructionGIF' => null],


            // // unit 38's games

            ['name' => 'Video', 'unit_id' => 413, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 414, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 414, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Tracing', 'unit_id' => 415, 'category_id' => 31,  'instructionGIF' => $Gif_path . "Tracing.gif"],
            ['name' => 'Arranging Letters', 'unit_id' => 416, 'category_id' => 14,  'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 417, 'category_id' => 7,  'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speak', 'unit_id' => 418, 'category_id' => 11,  'instructionGIF' => null],


            // // unit 39's games

            ['name' => 'Grammar Explanation', 'unit_id' => 419, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Reading 1', 'unit_id' => 420, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Reading 2', 'unit_id' => 420, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Look and write', 'unit_id' => 421, 'category_id' => 39,  'instructionGIF' => null],
            ['name' => 'Speak 1', 'unit_id' => 422, 'category_id' => 11,  'instructionGIF' => null],
            ['name' => 'Speak 2', 'unit_id' => 422, 'category_id' => 11,  'instructionGIF' => null],


            // // unit 40's games

            ['name' => 'Grammar Explanation', 'unit_id' => 423, 'category_id' => 1,  'instructionGIF' => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 424, 'category_id' => 2,  'instructionGIF' => null],
            ['name' => 'Listen and Practice', 'unit_id' => 425, 'category_id' => 21,  'instructionGIF' => null],
            ['name' => 'Matching', 'unit_id' => 426, 'category_id' => 7,  'instructionGIF' =>  $Gif_path . "Matching.gif"],
            ['name' => 'Reading Passage', 'unit_id' => 427, 'category_id' => 16,  'instructionGIF' =>  $Gif_path . "Read-the-passage.gif"],




        ]);

        // //----------------- Grade 2 games end -------------------------




        // //----------------- Grade 3 games -------------------------

        DB::table('games')->insert([
            // // G3 lesson 1

            ['name' => 'Video', 'unit_id' => 428, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 429, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 430, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listen', 'unit_id' => 431, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 432, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 433, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 434, 'category_id' => 42, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 2

            ['name' => 'Video', 'unit_id' => 435, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 436, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 437, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listening', 'unit_id' => 438, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 439, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 440, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 441, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 3

            ['name' => 'Video', 'unit_id' => 442, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 443, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 444, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listening Practice', 'unit_id' => 445, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 446, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 447, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],
            ['name' => 'Free Practice', 'unit_id' => 448, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 4

            ['name' => 'Video', 'unit_id' => 449, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 450, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listen and Practice ( 1 )', 'unit_id' => 451, 'category_id' => 8, "instructionGIF" =>  $Gif_path . "Conversation.gif"],
            ['name' => 'Listen and Practice ( 2 )', 'unit_id' => 451, 'category_id' => 8, "instructionGIF" =>  $Gif_path . "Conversation.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 452, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 453, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],

            // // G3 lesson 5

            ['name' => 'Video', 'unit_id' => 454, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 455, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Choose Fruit and Vegetables', 'unit_id' => 456, 'category_id' => 19, "instructionGIF" => $Gif_path . "Putting.gif"],
            ['name' => 'Arrange Letter', 'unit_id' => 457, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Listen and Practice', 'unit_id' => 458, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listen Practice', 'unit_id' => 459, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 460, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 461, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Free Practice', 'unit_id' => 462, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 6

            ['name' => 'Video', 'unit_id' => 463, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 464, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 465, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Reading Passage', 'unit_id' => 466, 'category_id' => 16, "instructionGIF" =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 467, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Listening', 'unit_id' => 468, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Writing', 'unit_id' => 469, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],
            ['name' => 'Free Practice', 'unit_id' => 470, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 7

            ['name' => 'Target Language', 'unit_id' => 471, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 472, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Writing ( arranging )', 'unit_id' => 473, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Listen and Practice', 'unit_id' => 474, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 475, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Listening', 'unit_id' => 476, 'category_id' => 7, "instructionGIF" =>  $Gif_path . "Matching.gif"],
            ['name' => 'Free Practice', 'unit_id' => 477, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 8

            ['name' => 'Video', 'unit_id' => 478, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 479, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'look and write', 'unit_id' => 480, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Matching', 'unit_id' => 481, 'category_id' => 7, "instructionGIF" =>  $Gif_path . "Matching.gif"],
            ['name' => 'Speaking Practice', 'unit_id' => 482, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Listening', 'unit_id' => 483, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Reading', 'unit_id' => 484, 'category_id' => 16, "instructionGIF" => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Writing', 'unit_id' => 485, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],

            // // G3 lesson 9

            ['name' => 'Video', 'unit_id' => 486, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 487, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'write the words', 'unit_id' => 488, 'category_id' => 19, "instructionGIF" => $Gif_path . "Putting.gif"],
            ['name' => 'Language and Practice ( 1 )', 'unit_id' => 489, 'category_id' => 30, "instructionGIF" => null],
            ['name' => 'Language and Practice ( 2 )', 'unit_id' => 489, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Listening', 'unit_id' => 490, 'category_id' => 15, "instructionGIF" => $Gif_path . "Listen-and-Practice-2.gif"],
            ['name' => 'Speaking', 'unit_id' => 491, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 492, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 10

            ['name' => 'Video', 'unit_id' => 493, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 494, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 495, 'category_id' => 30, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 495, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'listen', 'unit_id' => 496, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' => 497, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 498, 'category_id' => 16, "instructionGIF" => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Writing', 'unit_id' => 499, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],
            ['name' => 'Free Practice', 'unit_id' => 500, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 11

            ['name' => 'Video', 'unit_id' => 501, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 502, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'look at the picture', 'unit_id' => 503, 'category_id' => 14, "instructionGIF" =>  $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Practice', 'unit_id' => 504, 'category_id' => 40, "instructionGIF" => null],
            ['name' => 'Listen', 'unit_id' => 505, 'category_id' => 43, "instructionGIF" => null],
            ['name' => 'Speaking', 'unit_id' => 506, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 507, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 12

            ['name' => 'Video', 'unit_id' => 508, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 509, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'arrange', 'unit_id' => 510, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'language learning and practice', 'unit_id' => 511, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Listening', 'unit_id' => 512, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' => 513, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 514, 'category_id' => 16, "instructionGIF" => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'writing', 'unit_id' => 515, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],
            ['name' => 'Free Practice', 'unit_id' => 516, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 13

            ['name' => 'Video', 'unit_id' => 517, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 518, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 519, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Read and choose', 'unit_id' => 520, 'category_id' => 43, "instructionGIF" => null],
            ['name' => 'Listening', 'unit_id' => 521, 'category_id' => 44, "instructionGIF" => null],
            ['name' => 'Speaking', 'unit_id' => 522, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],



            // // G3 lesson 14

            ['name' => 'Video', 'unit_id' => 523, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 524, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'arrange writing', 'unit_id' => 525, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'practice', 'unit_id' => 526, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'look and check', 'unit_id' => 527, 'category_id' => 37, "instructionGIF" => null],
            ['name' => 'Listening', 'unit_id' => 528, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' => 529, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 530, 'category_id' => 16, "instructionGIF" => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'writing', 'unit_id' => 531, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],


            // // G3 lesson 15

            ['name' => 'Video', 'unit_id' => 532, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 533, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'listening Practice', 'unit_id' => 534, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Listening', 'unit_id' => 535, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' => 536, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 16

            ['name' => 'Video', 'unit_id' => 537, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 538, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'choose', 'unit_id' => 539, 'category_id' => 45, "instructionGIF" => null],
            ['name' => 'practice', 'unit_id' => 540, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listen', 'unit_id' =>  541, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' =>  542, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' =>  543, 'category_id' => 16, "instructionGIF" => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Answer the question', 'unit_id' =>  544, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],

            // // G3 lesson 17

            ['name' => 'Video', 'unit_id' =>  545, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and say ( 1 )', 'unit_id' =>  546, 'category_id' => 7, "instructionGIF" =>  $Gif_path . "Matching.gif"],
            ['name' => 'Listen and say ( 2 )', 'unit_id' =>  546, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Write Color', 'unit_id' =>  547, 'category_id' => 30, "instructionGIF" => null],
            ['name' => 'practice', 'unit_id' =>  548, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listen', 'unit_id' =>  549, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' =>  550, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 18

            ['name' => 'Video', 'unit_id' => 551, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 552, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'choose the number', 'unit_id' => 553, 'category_id' => 40, "instructionGIF" => null],
            ['name' => 'practice', 'unit_id' => 554, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listen', 'unit_id' => 555, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' => 556, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 557, 'category_id' => 16, "instructionGIF" => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Writing', 'unit_id' => 558, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],

            // // G3 lesson 19

            ['name' => 'Video', 'unit_id' => 559, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 560, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 560, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'practice', 'unit_id' => 561, 'category_id' => 40, "instructionGIF" => null],
            ['name' => 'Listen', 'unit_id' => 562, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' => 563, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 20

            ['name' => 'Video', 'unit_id' => 564, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 565, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'practice', 'unit_id' => 566, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Arrange Writing', 'unit_id' => 567, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Listen', 'unit_id' => 568, 'category_id' => 39, "instructionGIF" => $Gif_path .  "Listen-and-choose-correct.gif"],
            ['name' => 'Reading', 'unit_id' => 569, 'category_id' => 16, "instructionGIF" => $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Speaking', 'unit_id' => 570, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 571, 'category_id' => 26, "instructionGIF" => $Gif_path . "Writing.gif"],



            //////////////////////////////////////////


            // // G3 lesson 21 start Game_Id - 607

            ['name' => 'Video', 'unit_id' => 572, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Reading', 'unit_id' => 573, 'category_id' => 2, "instructionGIF" => null],      //
            ['name' => 'Write', 'unit_id' => 573, 'category_id' => 34, "instructionGIF" => $Gif_path . "Writing-Preview gif"],        //
            ['name' => 'Practice', 'unit_id' => 574, 'category_id' => 34, "instructionGIF" => $Gif_path . "Writing-Preview.gif"],
            ['name' => 'Listen', 'unit_id' => 575, 'category_id' => 15, "instructionGIF" => $Gif_path . "Listen-and-Practice-2.gif"],
            ['name' => 'Speaking', 'unit_id' => 576, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 22

            ['name' => 'Video', 'unit_id' => 577, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Reading', 'unit_id' => 578, 'category_id' => 2, "instructionGIF" => null], //
            ['name' => 'Write', 'unit_id' => 578, 'category_id' => 34, "instructionGIF" => $Gif_path . "Writing-Preview.gif"],    //
            ['name' => 'Practice', 'unit_id' => 579, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listen', 'unit_id' => 580, 'category_id' => 15, "instructionGIF" => $Gif_path . "Listen-and-Practice-2.gif"],
            ['name' => 'Speaking', 'unit_id' => 581, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 582, 'category_id' => 16, "instructionGIF" =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Writing', 'unit_id' => 583, 'category_id' => 26, "instructionGIF" =>  $Gif_path . "Writing.gif"],



            // // G3 lesson 23

            ['name' => 'Video', 'unit_id' => 584, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary 1', 'unit_id' => 585, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Vocabulary 2', 'unit_id' => 585, 'category_id' => 14, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 586, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listen', 'unit_id' => 587, 'category_id' => 15, "instructionGIF" => $Gif_path . "Listen-and-Practice-2.gif"],
            ['name' => 'Speaking', 'unit_id' => 588, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],

            // // G3 lesson 24

            ['name' => 'Video', 'unit_id' => 589, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary 1', 'unit_id' => 590, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Practice 1', 'unit_id' => 591, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Practice 2', 'unit_id' => 591, 'category_id' => 14, "instructionGIF" => null],
            ['name' => 'Listen', 'unit_id' => 592, 'category_id' => 7, "instructionGIF" => $Gif_path . "Matching.gif"],
            ['name' => 'Speaking', 'unit_id' => 593, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 594, 'category_id' => 16, "instructionGIF" =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Writing', 'unit_id' => 595, 'category_id' => 26, "instructionGIF" =>  $Gif_path . "Writing.gif"],


            // // G3 lesson 25

            ['name' => 'Video', 'unit_id' => 596, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary 1', 'unit_id' => 597, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 598, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listening', 'unit_id' => 599, 'category_id' => 39, "instructionGIF" => $Gif_path . "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' => 600, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 601, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 26

            ['name' => 'Target Language ', 'unit_id' => 602, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary 1', 'unit_id' => 603, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Vocabulary 2', 'unit_id' => 603, 'category_id' => 34, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 604, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listening', 'unit_id' => 605, 'category_id' => 15, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking', 'unit_id' => 606, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 607, 'category_id' => 46, "instructionGIF" => $Gif_path . "Listen-and-Practice-2.gif"],
            ['name' => 'Writing', 'unit_id' => 608, 'category_id' => 26, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 609, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 27

            ['name' => 'Target Language ', 'unit_id' => 610, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 611, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 612, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listen', 'unit_id' => 613, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' => 614, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 615, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 28

            ['name' => 'Video ', 'unit_id' => 616, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 617, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 618, 'category_id' => 34, "instructionGIF" => $Gif_path . "Writing-Preview.gif"],
            ['name' => 'Listen', 'unit_id' => 619, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Listen-and-Practice-2.gif.gif"],
            ['name' => 'Speaking', 'unit_id' => 620, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 621, 'category_id' => 16, "instructionGIF" =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Writing', 'unit_id' => 622, 'category_id' => 26, "instructionGIF" =>  $Gif_path . "Writing.gif"],
            ['name' => 'Free Practice', 'unit_id' => 623, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 29

            ['name' => 'Video ', 'unit_id' => 624, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 625, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Choose', 'unit_id' => 626, 'category_id' => 45, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 627, 'category_id' => 14, "instructionGIF" => $Gif_path . "Re-arrange-in-order.gif"],
            ['name' => 'Listen', 'unit_id' => 628, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' => 629, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 630, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 30

            ['name' => 'Video ', 'unit_id' => 631, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 632, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 633, 'category_id' => 34, "instructionGIF" => $Gif_path . "Writing-Preview.gif"],
            ['name' => 'Answer the question', 'unit_id' => 634, 'category_id' => 34, "instructionGIF" => $Gif_path . "Writing-Preview.gif"],
            ['name' => 'Listening', 'unit_id' => 635, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Listen-and-choose-correct.gif"],
            ['name' => 'Speaking', 'unit_id' => 636, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 637, 'category_id' => 16, "instructionGIF" =>  $Gif_path . "Read-the-passage.gif"],
            ['name' => 'Writing', 'unit_id' => 638, 'category_id' => 26, "instructionGIF" =>  $Gif_path . "Writing.gif"],
            ['name' => 'Free Practice', 'unit_id' => 639, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 31

            ['name' => 'Video ', 'unit_id' => 640, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 641, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Fill in the blank', 'unit_id' => 642, 'category_id' => 47, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 643, 'category_id' => 34, "instructionGIF" => $Gif_path .  "Writing-Preview.gif"],
            ['name' => 'Listen', 'unit_id' => 644, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking', 'unit_id' => 645, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 646, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],


            // // G3 lesson 32

            ['name' => 'Target Language', 'unit_id' => 647, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 648, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Arrange', 'unit_id' => 649, 'category_id' => 14, "instructionGIF" => null],
            ['name' => 'Language and practice', 'unit_id' => 650, 'category_id' => 34, "instructionGIF" =>  null],
            ['name' => 'Listen', 'unit_id' => 651, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking', 'unit_id' => 652, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 653, 'category_id' => 16, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 654, 'category_id' => 48, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 655, 'category_id' => 11, "instructionGIF" => null],


            // // G3 lesson 33

            ['name' => 'Target Language', 'unit_id' => 656, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 657, 'category_id' => 33, "instructionGIF" => null],
            ['name' => 'Write the opposite', 'unit_id' => 658, 'category_id' => 27, "instructionGIF" => null],
            ['name' => 'Writing (Arranging Order)', 'unit_id' => 659, 'category_id' => 14, "instructionGIF" =>  null],
            ['name' => 'Listen', 'unit_id' => 660, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking', 'unit_id' => 661, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 662, 'category_id' => 11, "instructionGIF" => null],


            // // G3 lesson 34

            ['name' => 'Video', 'unit_id' => 663, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 664, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Write', 'unit_id' => 665, 'category_id' => 47, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 666, 'category_id' => 34, "instructionGIF" =>  null],
            ['name' => 'Listen', 'unit_id' => 667, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking', 'unit_id' => 668, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 669, 'category_id' => 16, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 670, 'category_id' => 26, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 671, 'category_id' => 11, "instructionGIF" => null],



            // // G3 lesson 35

            ['name' => 'Target Language', 'unit_id' => 672, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 673, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Language Practice and Learning', 'unit_id' => 674, 'category_id' => 34, "instructionGIF" => null],
            ['name' => 'look at the picture and choose the correct answer', 'unit_id' => 675, 'category_id' => 45, "instructionGIF" =>  null],
            ['name' => 'Listening', 'unit_id' => 676, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking', 'unit_id' => 677, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 678, 'category_id' => 11, "instructionGIF" => null],


            // // G3 lesson 36

            ['name' => 'Video', 'unit_id' => 679, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 680, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 681, 'category_id' => 34, "instructionGIF" => null],
            ['name' => 'Writing', 'unit_id' => 682, 'category_id' => 26, "instructionGIF" =>  null],
            ['name' => 'Listen', 'unit_id' => 683, 'category_id' => 15, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking', 'unit_id' => 684, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 685, 'category_id' => 16, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 686, 'category_id' => 11, "instructionGIF" => null],


            // // G3 lesson 37

            ['name' => 'Target Language', 'unit_id' => 687, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 688, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Choose', 'unit_id' => 689, 'category_id' => 45, "instructionGIF" => null],
            ['name' => 'Target Language and Practice', 'unit_id' => 690, 'category_id' => 34, "instructionGIF" =>  null],
            ['name' => 'Listen and answer the question', 'unit_id' => 691, 'category_id' => 39, "instructionGIF" =>  null],
            ['name' => 'Speaking', 'unit_id' => 692, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 693, 'category_id' => 11, "instructionGIF" => null],


            // // G3 lesson 38

            ['name' => 'Video', 'unit_id' => 694, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 695, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 696, 'category_id' => 34, "instructionGIF" => null],
            ['name' => 'Listening', 'unit_id' => 697, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking', 'unit_id' => 698, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 699, 'category_id' => 16, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Writing', 'unit_id' => 700, 'category_id' => 26, "instructionGIF" =>  null],
            ['name' => 'Free Practice', 'unit_id' => 701, 'category_id' => 11, "instructionGIF" => null],


            // // G3 lesson 39

            ['name' => 'Video', 'unit_id' => 702, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'write', 'unit_id' => 703, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Reading', 'unit_id' => 703, 'category_id' => 49, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 704, 'category_id' => 14, "instructionGIF" => null],
            ['name' => 'Listen', 'unit_id' => 705, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking', 'unit_id' => 706, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 707, 'category_id' => 11, "instructionGIF" => null],


            // // G3 lesson 40

            ['name' => 'Video', 'unit_id' => 708, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 709, 'category_id' => 2, "instructionGIF" => null],
            ['name' => 'Language Practice and Learning', 'unit_id' => 710, 'category_id' => 30, "instructionGIF" => null],
            ['name' => 'Match the pictures', 'unit_id' => 711, 'category_id' => 7, "instructionGIF" =>  null],
            ['name' => 'Listening', 'unit_id' => 712, 'category_id' => 39, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Speaking', 'unit_id' => 713, 'category_id' => 11, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Reading', 'unit_id' => 714, 'category_id' => 16, "instructionGIF" =>  $Gif_path . "Speaking.gif"],
            ['name' => 'Free Practice', 'unit_id' => 715, 'category_id' => 11, "instructionGIF" => null],
            // Game ID 756 .......


        ]);





        // //----------------- Grade 4 games -------------------------

        DB::table('games')->insert([
            // // G4 lesson 1

            ['name' => 'Video', 'unit_id' => 716, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 717, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Spelling Game', 'unit_id' => 718, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 719, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 720, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice ( A )', 'unit_id' => 721, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice ( B )', 'unit_id' => 722, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 723, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 724, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic', 'unit_id' => 725, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 2
            ['name' => 'Video', 'unit_id' => 726, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 727, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Spelling Game', 'unit_id' => 728, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 1 )', 'unit_id' => 729, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 2 )', 'unit_id' => 729, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 730, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 731, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 732, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 733, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic', 'unit_id' => 734, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 3
            ['name' => 'Video', 'unit_id' => 735, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 736, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Spelling Game', 'unit_id' => 737, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 1 )', 'unit_id' => 738, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 2 )', 'unit_id' => 738, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 739, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Reading Lesson', 'unit_id' => 740, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 741, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 742, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 743, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic', 'unit_id' => 744, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 4
            ['name' => 'Video',  'unit_id' => 745, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Reading Lesson',  'unit_id' => 746, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat',  'unit_id' => 747, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice',  'unit_id' => 748, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice',  'unit_id' => 749, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic',  'unit_id' => 750, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 5
            ['name' => 'Video',  'unit_id' => 751, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 1 )',  'unit_id' => 752, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 2 )',  'unit_id' => 752, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Spelling Practice',  'unit_id' => 753, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 1 )',  'unit_id' => 754, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 2 )',  'unit_id' => 754, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice',  'unit_id' => 755, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice',  'unit_id' => 756, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic',  'unit_id' => 757, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic',  'unit_id' => 758, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 6
            ['name' => 'Video', 'unit_id' => 759, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 760, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 761, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 762, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 763, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Reading', 'unit_id' => 764, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 7
            ['name' => 'Video', 'unit_id' => 765, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 1 )', 'unit_id' => 766, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 2 )', 'unit_id' => 766, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Spelling Practice', 'unit_id' => 767, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 1 )', 'unit_id' => 768, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 2 )', 'unit_id' => 768, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 769, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice ( 1 )', 'unit_id' => 770, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice ( 2 )', 'unit_id' => 770, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 771, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 8
            ['name' => 'Video', 'unit_id' => 772, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 773, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Spelling Game', 'unit_id' => 774, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 775, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 776, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 777, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 778, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic', 'unit_id' => 779, 'category_id' => 1, "instructionGIF" => null],



            // // G4 lesson 9
            ['name' => 'Video', 'unit_id' => 780, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 781, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Spelling Game', 'unit_id' => 782, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 783, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 784, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listening Practice', 'unit_id' => 785, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 786, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 10
            ['name' => 'Video', 'unit_id' => 787, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 788, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 1 )', 'unit_id' => 789, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 2 )', 'unit_id' => 789, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 790, 'category_id' => null, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 791, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 792, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 793, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic', 'unit_id' => 794, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 11
            ['name' => 'Video', 'unit_id' => 795, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Vocabulary', 'unit_id' => 796, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Spelling Game', 'unit_id' => 797, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 798, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 799, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Practice', 'unit_id' => 800, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 801, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 12
            ['name' => 'Video', 'unit_id' => 802, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 803, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Matching ( 1 )', 'unit_id' => 804, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Matching ( 2 )', 'unit_id' => 804, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 805, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listening', 'unit_id' => 806, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking', 'unit_id' => 807, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 808, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic', 'unit_id' => 809, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 13
            ['name' => 'Video', 'unit_id' => 810, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 811, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Find the same', 'unit_id' => 812, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Drag and Drop', 'unit_id' => 812, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 3 )', 'unit_id' => 812, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 813, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Reading', 'unit_id' => 814, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 815, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic', 'unit_id' => 816, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 14
            ['name' => 'Video', 'unit_id' => 817, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 818, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Matching', 'unit_id' => 819, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 820, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Reading', 'unit_id' => 821, 'category_id' => null, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 822, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 15
            ['name' => 'Video', 'unit_id' => 823, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 1 )', 'unit_id' => 824, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 2 )', 'unit_id' => 824, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 825, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listening Practice', 'unit_id' => 826, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 827, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Reading', 'unit_id' => 828, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic', 'unit_id' => 829, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 830, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 16
            ['name' => 'Video', 'unit_id' => 831, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat', 'unit_id' => 832, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 1 )', 'unit_id' => 833, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 2 )', 'unit_id' => 833, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listening Practice', 'unit_id' => 834, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 835, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 836, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 17
            ['name' => 'Video', 'unit_id' => 837, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 1 )', 'unit_id' => 838, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 2 )', 'unit_id' => 838, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 839, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 840, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listening Practice', 'unit_id' => 841, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 842, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 18
            ['name' => 'Video', 'unit_id' => 843, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 1 )', 'unit_id' => 844, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 2 )', 'unit_id' => 844, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 845, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 846, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listening Practice', 'unit_id' => 847, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Reading Practice', 'unit_id' => 848, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 849, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic', 'unit_id' => 850, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 19
            ['name' => 'Video', 'unit_id' => 851, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 1 )', 'unit_id' => 852, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 2 )', 'unit_id' => 852, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 1 )', 'unit_id' => 853, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice ( 2 )', 'unit_id' => 853, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 854, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listening Practice', 'unit_id' => 855, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Reading Practice', 'unit_id' => 856, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 857, 'category_id' => 1, "instructionGIF" => null],


            // // G4 lesson 20
            ['name' => 'Video', 'unit_id' => 858, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 1 )', 'unit_id' => 859, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listen and Repeat ( 2 )', 'unit_id' => 859, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Practice', 'unit_id' => 860, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Practice', 'unit_id' => 861, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Listening Practice', 'unit_id' => 862, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Speaking Topic', 'unit_id' => 863, 'category_id' => 1, "instructionGIF" => null],
            ['name' => 'Writing Topic', 'unit_id' => 864, 'category_id' => 1, "instructionGIF" => null],


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
