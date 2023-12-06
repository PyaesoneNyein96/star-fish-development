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

            // G-1 lesson_3 U-16
            ['content' => "Speaking Audio", 'game_id' => 16, 'audio' => $domain . $Instructions . "speaking_audio" . ".mp3"],

            // G-1 lesson_4 U-19
            ['content' => "Read listen and Repeat", 'game_id' => 19, 'audio' => $domain . $Instructions . "Read_listen_and_Repeat" . ".mp3"],

            // G-1 lesson_4 U-20
            ['content' => "Watch the animation of student introduction", 'game_id' => 20, 'audio' => $domain . $Instructions . "Watch-the-animation-of-student" . ".mp3"],

            // G-1 lesson_5 U-25
            ['content' => "Answer the question", 'game_id' => 25, 'audio' => $domain . $Instructions . "Answer-the-question" . ".mp3"],

            // G-1 lesson_5 U-73
            ['content' => "Put the objects in the correct places", 'game_id' => 75, 'audio' => $domain . $Instructions . "Put-the-objects-in-the-correct" . ".mp3"],


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
            // [
            //     'content' => "Arranging the letters of alphabet in order", "game_id" => 11,
            //     'audio' => $domain.$Grade1Instructions."Arranging-the-letters-of-alphabet-in-order".".mp3"
            // ],



        ]);

        // DB::table('game_instructions')->insert([
        //     ['content' => "subOne GIF ......" ,"game_id" => 17 ,],
        //     ['content' => "subTwo GIF ......" ,"game_id" => 18 ,],
        // ]);



    }
}
