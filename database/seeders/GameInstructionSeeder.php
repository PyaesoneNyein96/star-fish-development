<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameInstructionSeeder extends Seeder
{
    public function run(): void
    {


        $domain = app('domain');
        // $Path1 = "/storage/audios/Grade_1/Lesson_1/listen_practice/instructions/";
        // $Path2 = "/storage/audios/Grade_1/Lesson_1/Writing_Arranging_Order/instructions/";

        $Instructions = "/storage/audios/Instructions/";

        DB::table('game_instructions')->insert([

            // G-1 lesson_1 U-2
            ['content' => "Reading the alphabet and repeat after each", 'game_id' => 2, 'audio' => $domain . $Instructions . "Reading-the-alphabet-and-repeat-after-each" . ".mp3"],

            // G-1 lesson_1 U-4
            ['content' => "Listen and pop the bubbles of alphabet", 'game_id' => 4, 'audio' => $domain . $Instructions . "Listen-and-pop-the-bubbles-of-alphabet" . ".mp3"],

            ['content' => "Find the capital letter in the sentence", 'game_id' => 4, 'audio' => $domain . $Instructions . "Find-the-capital-letter-in-the-sentences" . ".mp3"],

            // G-1 lesson_1 U-5
            ['content' => "Arranging the letters of alphabet in order", 'game_id' => 5, 'audio' => $domain . $Instructions . "Arranging-the-letters-of-alphabet-in-order" . ".mp3"],

            // G-1 lesson_3 U-15
            ['content' => "Arranging the conversation in order", 'game_id' => 15, 'audio' => $domain . $Instructions . "Arranging-the-conversation-in" . ".mp3"],

        ]);

        //////////////


        DB::table('game_instructions')->insert([

            [
                'content' => "Reading-the-alphabet-and-repeat-after-each", "game_id" => 7,
                'audio' => $domain . $Instructions . "Reading-the-alphabet-and-repeat-after-each" . ".mp3"
            ],
            [
                'content' => "Listen and pop the bubbles of alphabet", "game_id" => 9,
                'audio' => $domain . $Instructions . "Listen-and-pop-the-bubbles-of-alphabet" . ".mp3"
            ],


        ]);

            // DB::table('game_instructions')->insert([

            // [
            //     'content' => "Sub Game first Instructions", "game_id" => 22,
            //     'audio' => $domain . $Instructions . "blah blah 1" . ".mp3"
            // ],
            // [
            //     'content' => "Listen and pop the bubbles of alphabet", "game_id" => 22,
            //     'audio' => $domain . $Instructions . "blah blah 2" . ".mp3"
            // ],


            // ]);



    }
}
