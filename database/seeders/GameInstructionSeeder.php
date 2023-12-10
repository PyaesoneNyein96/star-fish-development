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

        $Instructions = $domain."/storage/audios/Instructions/";

        DB::table('game_instructions')->insert([

            // G-1 lesson_1 U-2
            ['content' => "Reading the alphabet and repeat after each", 'game_id' => 2, 'audio' =>  $Instructions . "Reading-the-alphabet-and-repeat-after-each" . ".mp3"],

            // G-1 lesson_1 U-4
            ['content' => "Listen and pop the bubbles of alphabet", 'game_id' => 4, 'audio' =>  $Instructions . "Listen-and-pop-the-bubbles-of-alphabet" . ".mp3"],

            ['content' => "Find the capital letter in the sentence", 'game_id' => 4, 'audio' =>  $Instructions . "Find-the-capital-letter-in-the-sentences" . ".mp3"],

            // G-1 lesson_1 U-5
            ['content' => "Arranging the letters of alphabet in order", 'game_id' => 5, 'audio' =>  $Instructions . "Arranging-the-letters-of-alphabet-in-order" . ".mp3"],


            //////////////////////////////////
            // Lesson 2

            // G-1 lesson_2 U-7
            [
            'content' => "Reading-the-alphabet-and-repeat-after-each", "game_id" => 7,
            'audio' =>  $Instructions . "Reading-the-alphabet-and-repeat-after-each" . ".mp3"
            ],

            // G-1 lesson_2 U-9
            ['content' => "Listen and pop the bubbles of alphabet", 'game_id' => 9, 'audio' =>  $Instructions . "Listen-and-pop-the-bubbles-of-alphabet" . ".mp3"
            ],

           // G-1 lesson_2 U-11
            ['content' => "Arranging the letters of alphabet in order", 'game_id' => 11, 'audio' =>  $Instructions . "Arranging-the-letters-of-alphabet-in-order" . ".mp3"],



            // ================
            // G-1 lesson_3 U-13
            ['content' => "Read each sentence", 'game_id' => 13, 'audio' =>  $Instructions . "Read-each-sentence" . ".mp3"],

            // G-1 lesson_3 U-14
            ['content' => "Watch the animation of student introduction", 'game_id' => 14, 'audio' =>  $Instructions . "Watch-the-animation-of-student" . ".mp3"],

            // G-1 lesson_3 U-15
            ['content' => "Arranging the conversation in order", 'game_id' => 15, 'audio' =>  $Instructions . "Arranging-the-conversation-in" . ".mp3"],

            // G-1 lesson_3 U-16
            ['content' => "Speaking Audio", 'game_id' => 16, 'audio' =>  $Instructions . "audio" . ".mp3"],


            // ================
            // G-1 lesson_4 U-18
            ['content' => "Read listen and Repeat", 'game_id' => 18, 'audio' =>  $Instructions . "audio" . ".mp3"],

            // G-1 lesson_4 U-19
            ['content' => "Read listen and Repeat", 'game_id' => 19, 'audio' => $Instructions . "audio" . ".mp3"],

            // G-1 lesson_4 U-20
            ['content' => "Watch the animation of student introduction", 'game_id' => 20, 'audio' =>  $Instructions . "Watch-the-animation-of-student" . ".mp3"],

            // G-1 lesson_4 U-21
            ['content' => "Arranging the words in order for each sentence", 'game_id' => 21, 'audio' =>  $Instructions . "Arranging-the-words-in-order-f" . ".mp3"],


            // ================
            // G-1 lesson_5 U-23
            ['content' => "Listen and choose the correct picture of morning, afternoon and evening", 'game_id' => 23, 'audio' =>  $Instructions . "_Listen-and-choose-the-correct" . ".mp3"],

            // G-1 lesson_5 U-24
            ['content' => "Read Listen and repeat after it.", 'game_id' => 24, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_5 U-25
            ['content' => "Answer the question", 'game_id' => 25, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            // G-1 lesson_5 U-26
            ['content' => "Speaking Audio", 'game_id' => 26, 'audio' =>  $Instructions . "audio" . ".mp3"],

            // G-1 lesson_5 U-27
            ['content' => "Arranging the conversation in order", 'game_id' => 27, 'audio' =>  $Instructions . "Arranging-the-conversation-in" . ".mp3"],


            // ================
            // G-1 lesson_13 U-73
            ['content' => "Put the objects in the correct places", 'game_id' => 75, 'audio' =>  $Instructions . "Put-the-objects-in-the-correct" . ".mp3"],

            // G-1 lesson_7 U-39
            // Game 39,40
            [ 'content' => "Trace-and-write", "game_id" => 39,'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write-the-correct-letter", "game_id" => 40,'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],


            // ================
            // G-1 lesson_17 U-98
            ['content' => "Listen and Act", 'game_id' => 105, 'audio' => $Instructions . "Listen-and-Act" . ".mp3"],

            // G-1 lesson_17 U-102
            ['content' => "Listen and put the body parts in the correct place.", 'game_id' => 102,
             'audio' =>  $Instructions . "Listen-and-put-the-body-parts-in-the-correct-place" . ".mp3"],


        ]);









    }
}
