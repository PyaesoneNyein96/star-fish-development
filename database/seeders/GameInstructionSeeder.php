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

        $Instructions = $domain . "/storage/audios/Instructions/";

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
            [
                'content' => "Listen and pop the bubbles of alphabet", 'game_id' => 9, 'audio' =>  $Instructions . "Listen-and-pop-the-bubbles-of-alphabet" . ".mp3"
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
            // G-1 lesson_6 U-29
            ['content' => "reading carousel", 'game_id' => 29, 'audio' =>  $Instructions . "reading_carousel_audio" . ".mp3"],

            // G-1 lesson_6 U-30
            ['content' => "Finding things", 'game_id' => 30, 'audio' =>  $Instructions . "Finding-things" . ".mp3"],

            // G-1 lesson_6 U-31
            ['content' => "Matching things in class", 'game_id' => 31, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-1 lesson_6 U-32
            ['content' => "Tap the things you see and answer the question", 'game_id' => 32, 'audio' =>  $Instructions . "Tap-the-things-you-see-and-ans" . ".mp3"],

            // G-1 lesson_6 U-33
            ['content' => "Jumbled letters", 'game_id' => 33, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],


            // ================
            // G-1 lesson_8 U-41
            ['content' => "Reading carousel", 'game_id' => 42, 'audio' =>  $Instructions . "reading_carousel_audio" . ".mp3"],

            // G-1 lesson_8 U-42
            ['content' => "Finding things", 'game_id' => 43, 'audio' =>  $Instructions . "Finding-things" . ".mp3"],

            // G-1 lesson_8 U-43
            ['content' => "Matching things in class", 'game_id' => 44, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-1 lesson_8 U-44
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 45, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

            // G-1 lesson_8 U-45
            ['content' => "Answer the question", 'game_id' => 46, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            // G-1 lesson_8 U-46
            ['content' => "Jumbled letters", 'game_id' => 47, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],


            // ================
            // G-1 lesson_9 U-48
            ['content' => "reading carousel", 'game_id' => 49, 'audio' =>  $Instructions . "reading_carousel_audio" . ".mp3"],

            // G-1 lesson_9 U-49
            ['content' => "Finding animals", 'game_id' => 50, 'audio' =>  $Instructions . "Finding-animals" . ".mp3"],

            // G-1 lesson_9 U-50
            ['content' => "Matching things in class", 'game_id' => 51, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-1 lesson_9 U-51
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 52, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

            // G-1 lesson_9 U-52
            ['content' => "Jumbled letters", 'game_id' => 53, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],


            // ================
            // G-1 lesson_10 U-54
            ['content' => "reading carousel", 'game_id' => 55, 'audio' =>  $Instructions . "reading_carousel_audio" . ".mp3"],

            // G-1 lesson_10 U-55
            ['content' => "Finding animals", 'game_id' => 56, 'audio' =>  $Instructions . "Finding-animals" . ".mp3"],

            // G-1 lesson_10 U-56
            ['content' => "Matching things in class", 'game_id' => 57, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-1 lesson_10 U-57
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 58, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

            // G-1 lesson_10 U-58
            ['content' => "Jumbled letters", 'game_id' => 59, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],


            // ================
            // G-1 lesson_11 U-60
            ['content' => "reading carousel", 'game_id' => 61, 'audio' =>  $Instructions . "reading_carousel_audio" . ".mp3"],

            // G-1 lesson_11 U-61
            ['content' => "Pop the balloons", 'game_id' => 62, 'audio' =>  $Instructions . "Pop-the-balloons" . ".mp3"],

            // G-1 lesson_11 U-62
            ['content' => "Matching the colors you hear with the picture", 'game_id' => 63, 'audio' =>  $Instructions . "Matching-the-colors-you-hear-w" . ".mp3"],

            // G-1 lesson_11 U-63
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 64, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

            // G-1 lesson_11 U-64
            ['content' => "Answer the question", 'game_id' => 65, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],


            // ================
            // G-1 lesson_13 U-72
            ['content' => "reading carousel", 'game_id' => 74, 'audio' =>  $Instructions . "reading_carousel_audio" . ".mp3"],

            // G-1 lesson_13 U-73
            ['content' => "Put the objects in the correct places", 'game_id' => 75, 'audio' =>  $Instructions . "Put-the-objects-in-the-correct" . ".mp3"],

            // G-1 lesson_13 U-74
            ['content' => "Listen and look at the picture. Choose true or false", 'game_id' => 76, 'audio' =>  $Instructions . "Listen-and-look-at-the-picture" . ".mp3"],

            // G-1 lesson_13 U-75
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 77, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_14 U-77
            ['content' => "reading carousel", 'game_id' => 79, 'audio' =>  $Instructions . "reading_carousel_audio" . ".mp3"],

            // G-1 lesson_14 U-78
            ['content' => "Listen and look at the picture. Choose true or false", 'game_id' => 80, 'audio' =>  $Instructions . "Listen-and-look-at-the-picture" . ".mp3"],

            // G-1 lesson_14 U-79
            ['content' => "Choose the correct word", 'game_id' => 81, 'audio' =>  $Instructions . "Choose-the-correct-word" . ".mp3"],

            // G-1 lesson_14 U-80
            ['content' => "Jumbled letters", 'game_id' => 82, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],

            // G-1 lesson_13 U-81
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 83, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],





            // G-1 lesson_7 U-39
            // Game 39,40
            ['content' => "Trace-and-write", "game_id" => 39, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write-the-correct-letter", "game_id" => 40, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],


            // ================
            // G-1 lesson_17 U-98
            ['content' => "Listen and Act", 'game_id' => 105, 'audio' => $Instructions . "Listen-and-Act" . ".mp3"],

            // G-1 lesson_17 U-102
            [
                'content' => "Listen and put the body parts in the correct place.", 'game_id' => 102,
                'audio' =>  $Instructions . "Listen-and-put-the-body-parts-in-the-correct-place" . ".mp3"
            ],


        ]);



        // Grade 3   (Temporary)
        DB::table('game_instructions')->insert([
            // G-3 lesson_26 U-7
            [
                'content' => "Write about your daily routines.", 'game_id' => 113,
                'audio' =>  $Instructions . "Write-about-your-daily-routine" . ".mp3"
            ],

            // G-3 lesson_33 U-3
            [
                'content' => "Write the opposite.", 'game_id' => 117,
                'audio' =>  $Instructions . "Write_the_opposite(N/A)" . ".mp3"
            ],
        ]);

        // Grade 4   (Temporary)
        DB::table('game_instructions')->insert([

            // G-3 lesson_33 U-3
            [
                'content' => "Listen to the audio and choose the right picture.",
                'game_id' => 125,
                'audio' =>  $Instructions . "Listen-to-the-audio-and-choose-the-right-picture" . ".mp3"
            ],
        ]);
    }
}
