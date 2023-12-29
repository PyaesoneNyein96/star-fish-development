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
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 16, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],



            // ================
            // G-1 lesson_4 U-18
            ['content' => "Read Listen and repeat after it.", 'game_id' => 18, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_4 U-19
            ['content' => "Read listen and Repeat after it.", 'game_id' => 19, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_4 U-20
            ['content' => "Watch the animation of student introduction", 'game_id' => 20, 'audio' =>  $Instructions . "Watch-the-animation-of-student" . ".mp3"],

            // G-1 lesson_4 U-21
            ['content' => "Arranging the words in order for each sentence", 'game_id' => 21, 'audio' =>  $Instructions . "Arranging-the-words-in-order-f" . ".mp3"],


            // ================
            // G-1 lesson_5 U-23
            ['content' => "Listen and choose the correct picture of morning, afternoon and evening", 'game_id' => 23, 'audio' =>  $Instructions . "_Listen-and-choose-the-correct" . ".mp3"],

            // G-1 lesson_5 U-24
            ['content' => "Listen and Repeat", 'game_id' => 24, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_5 U-25
            ['content' => "Answer the question", 'game_id' => 25, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            // G-1 lesson_5 U-26
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 26, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

            // G-1 lesson_5 U-27
            ['content' => "Arranging the conversation in order", 'game_id' => 27, 'audio' =>  $Instructions . "Arranging-the-conversation-in" . ".mp3"],


            // ================
            // G-1 lesson_6 U-29
            ['content' => "Listen and Repeat", 'game_id' => 29, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_6 U-30
            ['content' => "Finding things", 'game_id' => 30, 'audio' =>  $Instructions . "Finding-things" . ".mp3"],

            // G-1 lesson_6 U-31
            ['content' => "Matching things in class", 'game_id' => 31, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-1 lesson_6 U-32
            ['content' => "Tap the things you see and answer the question", 'game_id' => 32, 'audio' =>  $Instructions . "Tap-the-things-you-see-and-ans" . ".mp3"],

            // G-1 lesson_6 U-33
            ['content' => "Jumbled letters", 'game_id' => 33, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],

            // ===============


            // G-1 lesson_7 U-2
            ['content' => "Listen and Repeat", 'game_id' => 35, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_7 U-3
            [
                'content' => "Listen and tick the pictures and letter", 'game_id' => 36,
                'audio' => $Instructions . "Listen-and-tick-the-pictures-and-letter.mp3"
            ],


            // G-1 lesson_7 U-37
            [
                'content' => "Matching things from this session", 'game_id' => 37,
                'audio' => $Instructions . "Matching-things-from-this-session.mp3"
            ],

            // G-1 lesson_7 U-5
            // ['content' => "Tap the things on the table and answer the question.",'game_id' => 38,
            // 'audio' => $Instructions."Tap-the-things-on-the-table-and-answer-the-question.mp3"],


            // G-1 lesson_7 U-39
            // Game 39,40
            ['content' => "Trace and write", "game_id" => 39, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write-the-correct-letter", "game_id" => 40, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],


            // ================
            // G-1 lesson_8 U-41
            ['content' => "Listen and Repeat", 'game_id' => 42, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

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
            ['content' => "Listen and Repeat", 'game_id' => 49, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

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
            ['content' => "Listen and Repeat", 'game_id' => 55, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

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
            ['content' => "Listen and Repeat", 'game_id' => 61, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_11 U-61
            ['content' => "Pop the balloons", 'game_id' => 62, 'audio' =>  $Instructions . "Pop-the-balloons" . ".mp3"],

            // G-1 lesson_11 U-62
            ['content' => "Matching the colors you hear with the picture", 'game_id' => 63, 'audio' =>  $Instructions . "Matching-the-colors-you-hear-w" . ".mp3"],

            // G-1 lesson_11 U-63
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 64, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

            // G-1 lesson_11 U-64
            ['content' => "Answer the question", 'game_id' => 65, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],



            // ======================
            // G-1 Lesson_12 U -3

            ['content' => "Listen and tap the words you hear", 'game_id' => 68, 'audio' =>  $Instructions . "Listen-and-tap-the-words-you-hear" . ".mp3"],

            ['content' => "Trace and write", "game_id" => 71, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write-the-correct-letter", "game_id" => 72, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],






            // ================
            // G-1 lesson_13 U-72
            ['content' => "Listen and Repeat", 'game_id' => 74, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_13 U-73
            ['content' => "Put the objects in the correct places", 'game_id' => 75, 'audio' =>  $Instructions . "Put-the-objects-in-the-correct" . ".mp3"],

            // G-1 lesson_13 U-74
            ['content' => "Listen and look at the picture. Choose true or false", 'game_id' => 76, 'audio' =>  $Instructions . "Listen-and-look-at-the-picture" . ".mp3"],

            // G-1 lesson_13 U-75
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 77, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_14 U-77
            ['content' => "Listen and Repeat", 'game_id' => 79, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_14 U-78
            ['content' => "Listen and look at the picture. Choose true or false", 'game_id' => 80, 'audio' =>  $Instructions . "Listen-and-look-at-the-picture" . ".mp3"],

            // G-1 lesson_14 U-79
            ['content' => "Choose the correct word", 'game_id' => 81, 'audio' =>  $Instructions . "Choose-the-correct-word" . ".mp3"],

            // G-1 lesson_14 U-80
            ['content' => "Jumbled letters", 'game_id' => 82, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],

            // G-1 lesson_14 U-81
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 83, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_15 U-83
            // game 85 , 86
            ['content' => "Read Listen and repeat after it.", 'game_id' => 85, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],
            ['content' => "Read Listen and repeat after it.", 'game_id' => 86, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_15 U-84
            // game 87 , 88
            ['content' => "Listen and tap the animals you hear.", 'game_id' => 87, 'audio' =>  $Instructions . "Listen-and-tap-the-animals-you" . ".mp3"],
            ['content' => "Listen and look at the picture. Choose true or false", 'game_id' => 88, 'audio' =>  $Instructions . "Listen-and-look-at-the-picture" . ".mp3"],

            // G-1 lesson_15 U-85
            ['content' => "Choose the correct word", 'game_id' => 89, 'audio' =>  $Instructions . "Choose-the-correct-word" . ".mp3"],

            // G-1 lesson_15 U-86
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 90, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

            // G-1 lesson_15 U-87
            ['content' => "Answer the question", 'game_id' => 91, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],


            // ================
            // G-1 lesson_16 U-89
            ['content' => "Listen and Repeat", 'game_id' => 93, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_16 U-90
            ['content' => "Finding things", 'game_id' => 94, 'audio' =>  $Instructions . "Finding-things" . ".mp3"],

            // G-1 lesson_16 U-91
            ['content' => "Matching things in class", 'game_id' => 95, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-1 lesson_16 U-92
            // game 96 , 97
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 96, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],
            ['content' => "Look at the half of the picture and say a word", 'game_id' => 97, 'audio' =>  $Instructions . "Look-at-the-half-of-the-pictur" . ".mp3"],

            // G-1 lesson_16 U-93
            // game 98 , 99
            ['content' => "Trace-and-write", "game_id" => 98, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write-the-correct-letter", "game_id" => 99, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],




            // ================


            // G-1 lesson_17 U-102
            [
                'content' => "Listen and put the body parts in the correct place.", 'game_id' => 102,
                'audio' =>  $Instructions . "Listen-and-put-the-body-parts-in-the-correct-place.mp3"
            ],

            [
                'content' => "Listen and put the body parts in the correct place", 'game_id' => 103, 'audio' => $Instructions . "Listen-and-put-the-body-parts-in-the-correct-place.mp3"
            ],

            [
                'content' => "Matching Parts of the Body", 'game_id' => 104, 'audio' => $Instructions . "Matching-Parts-of-the-Body.mp3"
            ],

            // G-1 lesson_17 U-98
            ['content' => "Listen and Act", 'game_id' => 105, 'audio' => $Instructions . "Listen-and-Act" . ".mp3"],


            // ================
            // G-1 lesson_18 U-101
            ['content' => "Listen Read and Repeat", 'game_id' => 108, 'audio' =>  $Instructions . "Listen_Read_and_Repeat_audio" . ".mp3"],

            // G-1 lesson_18 U-102
            ['content' => "Listen and choose the word you hear", 'game_id' => 109, 'audio' =>  $Instructions . "Listen-and-choose-the-word-you" . ".mp3"],

            // G-1 lesson_18 U-103
            ['content' => "Listen and Act", 'game_id' => 110, 'audio' => $Instructions . "Listen-and-Act" . ".mp3"],

            // G-1 lesson_18 U-104
            ['content' => "Choose the correct word", 'game_id' => 111, 'audio' =>  $Instructions . "Choose-the-correct-word" . ".mp3"],

            // G-1 lesson_18 U-105
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 112, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_19 U-107
            ['content' => "Listen Repeat", 'game_id' => 114, 'audio' =>  $Instructions . "Listen_and_Repeat_audio" . ".mp3"],

            // G-1 lesson_19 U-108
            ['content' => "Listen and choose the word you hear", 'game_id' => 115, 'audio' =>  $Instructions . "Listen-and-choose-the-word-you" . ".mp3"],

            // G-1 lesson_19 U-109
            ['content' => "Listen and Act", 'game_id' => 116, 'audio' => $Instructions . "Listen-and-Act" . ".mp3"],

            // G-1 lesson_19 U-110
            ['content' => "Listen and look at the picture. Choose true or false", 'game_id' => 117, 'audio' =>  $Instructions . "Listen-and-look-at-the-picture" . ".mp3"],

            // G-1 lesson_19 U-111
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 118, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],



            // ================
            // G-1 lesson_20 U-113
            ['content' => "Listen Repeat", 'game_id' => 120, 'audio' =>  $Instructions . "Listen_and_Repeat_audio" . ".mp3"],

            // G-1 lesson_20 U-114
            ['content' => "Listen and tap what you hear", 'game_id' => 121, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_20 U-115
            ['content' => "Matching things", 'game_id' => 122, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_20 U-116
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 123, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],
            ['content' => "Look at the half of the picture and say a word", 'game_id' => 124, 'audio' =>  $Instructions . "Look-at-the-half-of-the-pictur" . ".mp3"],

            // G-1 lesson_20 U-117
            ['content' => "Trace-and-write", "game_id" => 125, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write-the-correct-letter", "game_id" => 126, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],


            // ================
            // G-1 lesson_21 U-119
            // game 128 , 129
            ['content' => "Read listen and Repeat after it.", 'game_id' => 128, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],
            ['content' => "Read listen and Repeat after it.", 'game_id' => 129, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_21 U-120
            ['content' => "Listen and tap what you hear", 'game_id' => 130, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_21 U-121
            ['content' => "Matching things", 'game_id' => 131, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_21 U-122
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 132, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_22 U-124
            // game 134 , 135
            ['content' => "Read listen and Repeat after it.", 'game_id' => 134, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],
            ['content' => "Read listen and Repeat after it.", 'game_id' => 135, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_22 U-125
            ['content' => "Listen and tap what you hear", 'game_id' => 136, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_22 U-126
            ['content' => "Matching things", 'game_id' => 137, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_22 U-127
            ['content' => "Jumbled letters", 'game_id' => 138, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],

            // G-1 lesson_22 U-128
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 139, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_23 U-130
            // game 141 , 142
            ['content' => "Read listen and Repeat after it.", 'game_id' => 141, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],
            ['content' => "Read listen and Repeat after it.", 'game_id' => 142, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_23 U-131
            ['content' => "Click the food box to find the same pictures", 'game_id' => 143, 'audio' =>  $Instructions . "click-the-food-box-to-find-the" . ".mp3"],

            // G-1 lesson_23 U-132
            ['content' => "Listen and look at the picture. Choose true or false", 'game_id' => 144, 'audio' =>  $Instructions . "Listen-and-look-at-the-picture" . ".mp3"],


            // G-1 lesson_23 U-133
            ['content' => "Answer the question", 'game_id' => 145, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            // G-1 lesson_23 U-134
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 146, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_24 U-136
            ['content' => "Read listen and Repeat after it.", 'game_id' => 148, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],


            // G-1 lesson_24 U-137
            ['content' => "Listen and tap what you hear", 'game_id' => 149, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_24 U-139
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 151, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

            // G-1 lesson_24 U-140
            ['content' => "Arranging the words in order for each sentence", 'game_id' => 152, 'audio' =>  $Instructions . "Arranging-the-words-in-order-f" . ".mp3"],


            // ================
            // G-1 lesson_25 U-142
            ['content' => "Read listen and Repeat after it.", 'game_id' => 154, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_25 U-143
            ['content' => "Listen and tap what you hear", 'game_id' => 155, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_25 U-144
            ['content' => "Matching things", 'game_id' => 156, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_25 U-145
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 157, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

            // G-1 lesson_25 U-146
            // Game 158,159
            ['content' => "Trace and write", "game_id" => 158, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write-the-correct-letter", "game_id" => 159, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],


            // ================
            // G-1 lesson_26 U-148
            ['content' => "Read listen and Repeat after it.", 'game_id' => 161, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_26 U-149
            ['content' => "Listen and tap what you hear", 'game_id' => 162, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_26 U-150
            ['content' => "Matching things", 'game_id' => 163, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_26 U-151
            ['content' => "Choose the correct word", 'game_id' => 164, 'audio' =>  $Instructions . "Choose-the-correct-word" . ".mp3"],

            // G-1 lesson_26 U-152
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 165, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_27 U-154
            ['content' => "Read listen and Repeat after it.", 'game_id' => 167, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_27 U-155
            ['content' => "Listen and tap what you hear", 'game_id' => 168, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_27 U-156
            ['content' => "Matching things", 'game_id' => 169, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_27 U-157
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 170, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

            // G-1 lesson_27 U-158
            ['content' => "Jumbled letters", 'game_id' => 171, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],


            // ================
            // G-1 lesson_28 U-160
            ['content' => "Read listen and Repeat after it.", 'game_id' => 173, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_28 U-161
            ['content' => "Listen and tap what you hear", 'game_id' => 174, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_28 U-162
            ['content' => "Matching things", 'game_id' => 175, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_23 U-163
            ['content' => "Answer the question", 'game_id' => 176, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            // G-1 lesson_28 U-164
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 177, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_29 U-166
            ['content' => "Read Listen and repeat after it.", 'game_id' => 179, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_29 U-167
            ['content' => "Listen and tap what you hear", 'game_id' => 180, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_29 U-169
            ['content' => "Jumbled letters", 'game_id' => 182, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],

            // G-1 lesson_29 U-170
            ['content' => "Tap the things in the room and answer the question", 'game_id' => 183, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_30 U-172
            ['content' => "Read listen and Repeat after it.", 'game_id' => 185, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_30 U-173
            ['content' => "Listen and tap what you hear", 'game_id' => 186, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_30 U-174
            ['content' => "Matching things", 'game_id' => 187, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_30 U-175
            ['content' => "Look at the half of the picture and say a word", 'game_id' => 188, 'audio' =>  $Instructions . "Look-at-the-half-of-the-pictur" . ".mp3"],

            // G-1 lesson_30 U-176
            // Game 189 , 190
            ['content' => "Trace and write", "game_id" => 189, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write-the-correct-letter", "game_id" => 190, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],



        ]);




        // // Grade 3   (Temporary)
        // DB::table('game_instructions')->insert([
        //     // G-3 lesson_26 U-7
        //     [
        //         'content' => "Write about your daily routines.", 'game_id' => 113,
        //         'audio' =>  $Instructions . "Write-about-your-daily-routine" . ".mp3"
        //     ],

        //     // G-3 lesson_33 U-3
        //     [
        //         'content' => "Write the opposite.", 'game_id' => 117,
        //         'audio' =>  $Instructions . "Write_the_opposite(N/A)" . ".mp3"
        //     ],
        // ]);

        // // Grade 4   (Temporary)
        // DB::table('game_instructions')->insert([

        //     // G-3 lesson_33 U-3
        //     [
        //         'content' => "Listen to the audio and choose the right picture.",
        //         'game_id' => 125,
        //         'audio' =>  $Instructions . "Listen-to-the-audio-and-choose-the-right-picture" . ".mp3"
        //     ],
        // ]);
    }
}
