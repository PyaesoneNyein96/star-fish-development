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


            // ================
            // G-1 lesson_3 U-13
            ['content' => "Read each sentence", 'game_id' => 13, 'audio' => $domain . $Instructions . "Read-each-sentence" . ".mp3"],

            // G-1 lesson_3 U-14
            ['content' => "Watch the animation of student introduction", 'game_id' => 14, 'audio' => $domain . $Instructions . "Watch-the-animation-of-student" . ".mp3"],

            // G-1 lesson_3 U-15
            ['content' => "Arranging the conversation in order", 'game_id' => 15, 'audio' => $domain . $Instructions . "Arranging-the-conversation-in" . ".mp3"],

            // G-1 lesson_3 U-16
            ['content' => "Speaking Audio", 'game_id' => 16, 'audio' => $domain . $Instructions . "audio" . ".mp3"],


            // ================
            // G-1 lesson_4 U-18
            ['content' => "Read listen and Repeat", 'game_id' => 18, 'audio' => $domain . $Instructions . "audio" . ".mp3"],

            // G-1 lesson_4 U-19
            ['content' => "Read listen and Repeat", 'game_id' => 19, 'audio' => $domain . $Instructions . "audio" . ".mp3"],

            // G-1 lesson_4 U-20
            ['content' => "Watch the animation of student introduction", 'game_id' => 20, 'audio' => $domain . $Instructions . "Watch-the-animation-of-student" . ".mp3"],

            // G-1 lesson_4 U-21
            ['content' => "Arranging the words in order for each sentence", 'game_id' => 21, 'audio' => $domain . $Instructions . "Arranging-the-words-in-order-f" . ".mp3"],


            // ================
            // G-1 lesson_5 U-23
            ['content' => "Listen and choose the correct picture of morning, afternoon and evening", 'game_id' => 23, 'audio' => $domain . $Instructions . "_Listen-and-choose-the-correct" . ".mp3"],

            // G-1 lesson_5 U-24
            ['content' => "Read Listen and repeat after it.", 'game_id' => 24, 'audio' => $domain . $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_5 U-25
            ['content' => "Answer the question", 'game_id' => 25, 'audio' => $domain . $Instructions . "Answer-the-question" . ".mp3"],

            // G-1 lesson_5 U-26
            ['content' => "Speaking Audio", 'game_id' => 26, 'audio' => $domain . $Instructions . "audio" . ".mp3"],

            // G-1 lesson_5 U-27
            ['content' => "Arranging the conversation in order", 'game_id' => 27, 'audio' => $domain . $Instructions . "Arranging-the-conversation-in" . ".mp3"],


            // ================
            // G-1 lesson_13 U-73
            ['content' => "Put the objects in the correct places", 'game_id' => 75, 'audio' => $domain . $Instructions . "Put-the-objects-in-the-correct" . ".mp3"],

            // ================
            // G-1 lesson_17 U-98
            ['content' => "Listen and Act", 'game_id' => 105, 'audio' => $domain . $Instructions . "Listen-and-Act" . ".mp3"],


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
