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

            //////////////////////////////////
            ///////       Grade 1      ///////
            //////////////////////////////////


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
            ['content' => "Look at the picture and say the words. What's this?", 'game_id' => 32, 'audio' =>  $Instructions . "Look-at-the-picture-and-say-th" . ".mp3"],

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
            ['content' => "Write the correct letter", "game_id" => 40, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],


            // ================
            // G-1 lesson_8 U-41
            ['content' => "Listen and Repeat", 'game_id' => 42, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_8 U-42
            ['content' => "Finding things", 'game_id' => 43, 'audio' =>  $Instructions . "Finding-things" . ".mp3"],

            // G-1 lesson_8 U-43
            ['content' => "Matching things in class", 'game_id' => 44, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-1 lesson_8 U-44
            ['content' => "Look at the picture and say a word", 'game_id' => 45, 'audio' =>  $Instructions . "SubBlock_Look-at-the-picture-and-say-a" . ".mp3"],

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
            ['content' => "Describe the pictures", 'game_id' => 52, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],

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
            ['content' => "What animals do you see on the farm?", 'game_id' => 58, 'audio' =>  $Instructions . "What-animals-do-you-see-on-the" . ".mp3"],

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
            ['content' => "What colour is it ? What is it ?", 'game_id' => 64, 'audio' =>  $Instructions . "SubBlock_What-colour-is-it-what-is-it" . ".mp3"],

            // G-1 lesson_11 U-64
            ['content' => "Answer the question", 'game_id' => 65, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],



            // ======================
            // G-1 Lesson_12 U -3

            ['content' => "Listen and tap the words you hear", 'game_id' => 68, 'audio' =>  $Instructions . "Listen-and-tap-the-words-you-hear" . ".mp3"],

            ['content' => "Matching things", 'game_id' => 69, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            ['content' => "Trace and write", "game_id" => 71, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            ['content' => "Write the correct letter", "game_id" => 72, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],






            // ================
            // G-1 lesson_13 U-72
            ['content' => "Listen and Repeat", 'game_id' => 74, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_13 U-73
            ['content' => "Put the objects in the correct places", 'game_id' => 75, 'audio' =>  $Instructions . "Put-the-objects-in-the-correct" . ".mp3"],

            // G-1 lesson_13 U-74
            ['content' => "Listen and look at the picture. Choose true or false", 'game_id' => 76, 'audio' =>  $Instructions . "Listen-and-look-at-the-picture" . ".mp3"],

            // G-1 lesson_13 U-75
            ['content' => "Describe the pictures. It's", 'game_id' => 77, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],


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
            ['content' => "Describe the pictures", 'game_id' => 83, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],


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
            ['content' => "Describe the animals and their sizes and colours.", 'game_id' => 90, 'audio' =>  $Instructions . "SubBlock_describe-the-animals-and-their" . ".mp3"],

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
            // ['content' => "Tap the things in the room and answer the question", 'game_id' => 96, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],
            ['content' => "Look at the half of the picture and say a word.", 'game_id' => 97, 'audio' =>  $Instructions . "Look-at-the-half-of-the-picture" . ".mp3"],

            // G-1 lesson_16 U-93
            // game 98 , 99
            ['content' => "Trace-and-write", "game_id" => 98, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write the correct letter", "game_id" => 99, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],




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
            ['content' => "Listen and Repeat", 'game_id' => 108, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_18 U-102
            ['content' => "Listen and choose the word you hear", 'game_id' => 109, 'audio' =>  $Instructions . "Listen-and-choose-the-word-you" . ".mp3"],

            // G-1 lesson_18 U-103
            ['content' => "Listen and Act", 'game_id' => 110, 'audio' => $Instructions . "Listen-and-Act" . ".mp3"],

            // G-1 lesson_18 U-104
            ['content' => "Choose the correct word", 'game_id' => 111, 'audio' =>  $Instructions . "Choose-the-correct-word" . ".mp3"],

            // G-1 lesson_18 U-105
            // ['content' => "Tap the things in the room and answer the question", 'game_id' => 112, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_19 U-107
            ['content' => "Listen and Repeat", 'game_id' => 114, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_19 U-108
            ['content' => "Listen and choose the word you hear", 'game_id' => 115, 'audio' =>  $Instructions . "Listen-and-choose-the-word-you" . ".mp3"],

            // G-1 lesson_19 U-109
            ['content' => "Listen and Act", 'game_id' => 116, 'audio' => $Instructions . "Listen-and-Act" . ".mp3"],

            // G-1 lesson_19 U-110
            ['content' => "Listen and look at the picture. Choose true or false", 'game_id' => 117, 'audio' =>  $Instructions . "Listen-and-look-at-the-picture" . ".mp3"],

            // G-1 lesson_19 U-111
            // ['content' => "Tap the things in the room and answer the question", 'game_id' => 118, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],



            // ================
            // G-1 lesson_20 U-113
            ['content' => "Listen and Repeat", 'game_id' => 120, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_20 U-114
            ['content' => "Listen and tap what you hear", 'game_id' => 121, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_20 U-115
            ['content' => "Matching things", 'game_id' => 122, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_20 U-116
            ['content' => "What do you see in the picture", 'game_id' => 123, 'audio' =>  $Instructions . "What-do-you-see-in-the-picture" . ".mp3"],
            ['content' => "Look at the half of the picture and say a word.", 'game_id' => 124, 'audio' =>  $Instructions . "Look-at-the-half-of-the-picture" . ".mp3"],

            // G-1 lesson_20 U-117
            ['content' => "Trace-and-write", "game_id" => 125, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write the correct letter", "game_id" => 126, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],


            // ================
            // G-1 lesson_21 U-119
            // game 128 , 129
            ['content' => "Listen and Repeat", 'game_id' => 128, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],
            ['content' => "Listen and Repeat", 'game_id' => 129, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_21 U-120
            ['content' => "Listen and tap what you hear", 'game_id' => 130, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_21 U-121
            ['content' => "Matching things", 'game_id' => 131, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_21 U-122
            ['content' => "Describe the pictures", 'game_id' => 132, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],


            // ================
            // G-1 lesson_22 U-124
            // game 134 , 135
            ['content' => "Listen and Repeat", 'game_id' => 134, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],
            ['content' => "Listen and Repeat", 'game_id' => 135, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_22 U-125
            ['content' => "Listen and tap what you hear", 'game_id' => 136, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_22 U-126
            ['content' => "Matching things", 'game_id' => 137, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_22 U-127
            ['content' => "Jumbled letters", 'game_id' => 138, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],

            // G-1 lesson_22 U-128
            ['content' => "Describe the picture and say what do you eat", 'game_id' => 139, 'audio' =>  $Instructions . "SubBlock_Describe-the-picture-and-say-w" . ".mp3"],


            // ================
            // G-1 lesson_23 U-130
            // game 141 , 142
            ['content' => "Listen and Repeat", 'game_id' => 141, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],
            ['content' => "Listen and Repeat", 'game_id' => 142, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_23 U-131
            ['content' => "Click the food box to find the same pictures", 'game_id' => 143, 'audio' =>  $Instructions . "click-the-food-box-to-find-the" . ".mp3"],

            // G-1 lesson_23 U-132
            ['content' => "Listen and look at the picture. Choose true or false", 'game_id' => 144, 'audio' =>  $Instructions . "Listen-and-look-at-the-picture" . ".mp3"],


            // G-1 lesson_23 U-133
            ['content' => "Answer the question", 'game_id' => 145, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            // G-1 lesson_23 U-134
            ['content' => "Describe the picture and say what do you like", 'game_id' => 146, 'audio' =>  $Instructions . "SubBlock_Describle-the-picture-and-say" . ".mp3"],


            // ================
            // G-1 lesson_24 U-136
            ['content' => "Listen and Repeat", 'game_id' => 148, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_24 U-137
            ['content' => "Listen and tap what you hear", 'game_id' => 149, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_24 U-139
            ['content' => "Describe the picture and say", 'game_id' => 151, 'audio' =>  $Instructions . "SubBlock_Describe-the-picture-and-say" . ".mp3"],

            // G-1 lesson_24 U-140
            ['content' => "Arranging the words in order for each sentence", 'game_id' => 152, 'audio' =>  $Instructions . "Arranging-the-words-in-order-f" . ".mp3"],


            // ================
            // G-1 lesson_25 U-142
            ['content' => "Listen and Repeat", 'game_id' => 154, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_25 U-143
            ['content' => "Listen and tap what you hear", 'game_id' => 155, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_25 U-144
            ['content' => "Matching things", 'game_id' => 156, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_25 U-145
            ['content' => "Describe the picture and say", 'game_id' => 157, 'audio' =>  $Instructions . "SubBlock_Describe-the-picture-and-say" . ".mp3"],

            // G-1 lesson_25 U-146
            // Game 158,159
            ['content' => "Trace and write", "game_id" => 158, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write the correct letter", "game_id" => 159, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],


            // ================
            // G-1 lesson_26 U-148
            ['content' => "Listen and Repeat", 'game_id' => 161, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_26 U-149
            ['content' => "Listen and tap what you hear", 'game_id' => 162, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_26 U-150
            ['content' => "Matching things", 'game_id' => 163, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_26 U-151
            ['content' => "Choose the correct word", 'game_id' => 164, 'audio' =>  $Instructions . "Choose-the-correct-word" . ".mp3"],

            // G-1 lesson_26 U-152
            ['content' => "Describe the pictures", 'game_id' => 165, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],


            // ================
            // G-1 lesson_27 U-154
            ['content' => "Listen and Repeat", 'game_id' => 167, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_27 U-155
            ['content' => "Listen and tap what you hear", 'game_id' => 168, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_27 U-156
            ['content' => "Matching things", 'game_id' => 169, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_27 U-157
            ['content' => "Describe the pictures", 'game_id' => 170, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],

            // G-1 lesson_27 U-158
            ['content' => "Jumbled letters", 'game_id' => 171, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],


            // ================
            // G-1 lesson_28 U-160
            ['content' => "Listen and Repeat", 'game_id' => 173, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_28 U-161
            ['content' => "Listen and tap what you hear", 'game_id' => 174, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_28 U-162
            ['content' => "Matching things", 'game_id' => 175, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_23 U-163
            ['content' => "Answer the question", 'game_id' => 176, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            // G-1 lesson_28 U-164
            // ['content' => "Tap the things in the room and answer the question", 'game_id' => 177, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_29 U-166
            ['content' => "Read Listen and repeat after it.", 'game_id' => 179, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-1 lesson_29 U-167
            ['content' => "Listen and tap what you hear", 'game_id' => 180, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_29 U-169
            ['content' => "Jumbled letters", 'game_id' => 182, 'audio' =>  $Instructions . "Jumbled-letters" . ".mp3"],

            // G-1 lesson_29 U-170
            // ['content' => "Tap the things in the room and answer the question", 'game_id' => 183, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],


            // ================
            // G-1 lesson_30 U-172
            ['content' => "Listen and Repeat", 'game_id' => 185, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_30 U-173
            ['content' => "Listen and tap what you hear", 'game_id' => 186, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_30 U-174
            ['content' => "Matching things", 'game_id' => 187, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_30 U-175
            ['content' => "Look at the picture and say a word", 'game_id' => 188, 'audio' =>  $Instructions . "SubBlock_Look-at-the-picture-and-say-a" . ".mp3"],

            // G-1 lesson_30 U-176
            // Game 189 , 190
            ['content' => "Trace and write", "game_id" => 189, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],
            ['content' => "Write-the-correct-letter", "game_id" => 190, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],

            // G-1 lesson_31 U-180
            // Game 193
            ['content' => "A train running and listen & choose the correct animals in the zoo.", "game_id" => 193, 'audio' =>  $Instructions . "A-train-running" . ".mp3"],
            // Game 194
            ['content' => "What do you see in the picture?", "game_id" => 194, 'audio' =>  $Instructions . "What-do-you-see-in-the-picture" . ".mp3"],


            // Game 195
            ['content' => "Matching things.", "game_id" => 195, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            ['content' => "What do you see in the picture?", "game_id" => 196, 'audio' =>  $Instructions . "What-do-you-see-in-the-picture" . ".mp3"],


            // G-1 lesson_32
            // Game 3 (201)
            ['content' => "Listen-and-tap-what-you-hear.", "game_id" => 201, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],
            // Game 3 (202)
            // ['content' => "Listen-and-tap-what-you-hear.", "game_id" => 202, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],
            // Game 4 (203)
            ['content' =>  "Matching things.", "game_id" => 202, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],
            // Game  5 (204)
            [
                'content' =>  "Select the things she has in her room.", "game_id" => 203,
                'audio' =>  $Instructions . "Select-the-things-she-has-in-her-room" . ".mp3"
            ],
            // Game 6 (205)
            // ['content' => "Look at the half of the picture and say a word", 'game_id' => 205, 'audio' =>  $Instructions . "Look-at-the-half-of-the-picture" . ".mp3"],


            // Lesson 33
            // Game 6 (204)
            ['content' => "Listen to the teacher’s instruction and choose the correct picture.", 'game_id' => 207, 'audio' =>  $Instructions . "Listen-to-the-teachers-instruction" . ".mp3"],

            // Game 6 (205)
            ['content' => "Matching verbs and picture.", 'game_id' => 208, 'audio' =>  $Instructions . "Matching-verbs-and-picture" . ".mp3"],

            // Game 6 (206)
            ['content' => "Look at the picture and say.", 'game_id' => 209, 'audio' =>  $Instructions . "Look-at-the-picture-and-say"],



            // Lesson 34
            // Game 3 (213)
            [
                'content' => "Listen and look at the picture. Choose True or False.", 'game_id' => 212,
                'audio' =>  $Instructions . "Listen-and-look-at-the-picture-Choose-True-or-False" . ".mp3"
            ],

            // Game 3 (214)
            [
                'content' => "Arranging the words in order for each sentence.", 'game_id' => 213,
                'audio' =>  $Instructions . "Arranging-the-words-in-order-for-each-sentence" . ".mp3"
            ],



            // Lesson 35
            // Game 3 (218)
            [
                'content' => "Listen and look at the picture. Choose True or False.", 'game_id' => 217,
                'audio' =>  $Instructions . "Listen-and-look-at-the-picture-Choose-True-or-False" . ".mp3"
            ],

            // Game 5 (220)
            ['content' => "Matching verbs and picture.", 'game_id' => 219, 'audio' =>  $Instructions . "Matching-verbs-and-picture" . ".mp3"],

            // Game 6 (222)
            ['content' => "Look at the picture and say.", 'game_id' => 221, 'audio' =>  $Instructions . "Look-at-the-picture-and-say" . ".mp3"],

            // Lesson -36
            // Game 3 (225)
            ['content' => "Finding things", 'game_id' => 224, 'audio' =>  $Instructions . "Finding-things" . ".mp3"],

            // Game 4 (226)
            ['content' => "Matching things", 'game_id' => 225, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // Game 5 (227)
            ['content' => "Look at the half of the picture and say a word", 'game_id' => 226, 'audio' =>  $Instructions . "Look-at-the-half-of-the-picture" . ".mp3"],

            // Game 6 (228,229)
            ['content' => "Trace and write", "game_id" => 227, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            ['content' => "Write-the-correct-letter", "game_id" => 228, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],

            // Lesson - 37
            // Game 3
            ['content' => "Listen and choose the words you hear", "game_id" => 231, 'audio' =>  $Instructions . "Listen-and-choose-the-words-you-say" . ".mp3"],

            // Game 4
            ['content' => "Matching the words and the picture", "game_id" => 232, 'audio' =>  $Instructions . "Matching-the-words-and-the-picture" . ".mp3"],

            // Game 6 (222)
            ['content' => "Who are they?", 'game_id' => 233, 'audio' =>  $Instructions . "Who-are-they" . ".mp3"],


            // Lesson - 38
            // Game 3  (2 rounds)
            // [
            //     'content' => "Listen to the boy and tick what he said.", "game_id" => 236,
            //     'audio' =>  $Instructions . "Listen-to-the-boy-and-tick-what-he-said" . ".mp3"
            // ],
            // [
            //     'content' => "Listen to the girl and tick what she said.", "game_id" => 236,
            //     'audio' =>  $Instructions . "Listen-to-the-girl-and-tick-what-she-said" . ".mp3"
            // ],

            // Game 6
            [
                'content' => "Listen who they are Tap each speaker and record", "game_id" => 238,
                'audio' =>  $Instructions . "Listen-who-they-are-Tap-each-speaker-and-record" . ".mp3"
            ],



            // Lesson - 39
            // Game 2  (1,2 rounds)
            [
                'content' => "Listen and tap what you hear.", "game_id" => 242,
                'audio' =>  $Instructions . "Listen-and-tap-what-you-hear.mp3"
            ],

            [
                'content' => "Choose the correct word", "game_id" => 243,
                'audio' =>  $Instructions . "Choose-the-correct-word.mp3"
            ],

            [
                'content' => "Arranging the words in order for each sentence", "game_id" => 244,
                'audio' =>  $Instructions . "Arranging-the-words-in-order-for-each-sentence.mp3"
            ],



            // Lesson - 40
            // Game 3
            [
                'content' => "Listen and tap what you hear.", "game_id" => 249,
                'audio' =>  $Instructions . "Listen-and-tap-what-you-hear.mp3"
            ],

            // Game 6
            [
                'content' => "Look at the picture. Read and say", "game_id" => 251,
                'audio' =>  $Instructions . "Look-at-the-picture-Read-and-Say.mp3"
            ],

            [
                'content' => "How old are you?", "game_id" => 251,
                'audio' =>  $Instructions . "How-old-are-you.mp3"
            ],







            //////////////////////////////////
            ///////       Grade 2      ///////
            //////////////////////////////////

            // G-2 lesson_1 U-234
            ['content' => "Make sure to close your mouth at the end of name say and practice", 'game_id' => 253, 'audio' =>  $Instructions . "Make-sure-to-close-your-mouth" . ".mp3"],

            // G-2 lesson_1 U-235
            ['content' => "what is your name?", 'game_id' => 254, 'audio' =>  $Instructions . "Whats-your-name-girl" . ".mp3"],

            // G-2 lesson_1 U-236
            ['content' => "Make sure to close your mouth at the end of name say and practice", 'game_id' => 255, 'audio' =>  $Instructions . "Make-sure-to-close-your-mouth" . ".mp3"],


            // G-2 lesson_2 U-239
            ['content' => "Listen and Repeat", 'game_id' => 258, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_2 U-240
            ['content' => "Trace and write", "game_id" => 259, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            // G-2 lesson_2 U-241
            ['content' => "Matching things in class", 'game_id' => 260, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_2 U-242
            ['content' => "Arranging the letters", 'game_id' => 261, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],



            // G-2 lesson_3 U-245
            ['content' => "Listen and Repeat", 'game_id' => 264, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_3 U-246
            ['content' => "Say how you are feeling today", 'game_id' => 265, 'audio' => $Instructions . "Say-how-you-are-feeling-today.mp3"],

            // G-2 lesson_3 U-247
            ['content' => "Complete the sentences about Jane", 'game_id' => 266, 'audio' => $Instructions . "Complete-the-sentences-about-J.mp3"],



            // G-2 lesson_4 U-248
            ['content' => "Listen and Repeat", 'game_id' => 267, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_4 U-249
            ['content' => "Trace and write", "game_id" => 268, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            // G-2 lesson_4 U-250
            ['content' => "Matching things in class", 'game_id' => 269, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_4 U-251
            ['content' => "Arranging the letters", 'game_id' => 270, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],



            // G-2 lesson_5 U-254
            ['content' => "Listen and Repeat", 'game_id' => 273, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],



            // G-2 lesson_6 U-258
            ['content' => "Listen and Repeat", 'game_id' => 277, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_6 U-258
            ['content' => "Listen and Repeat", 'game_id' => 278, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_6 U-259
            ['content' => "Matching things in class", 'game_id' => 279, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_6 U-260
            ['content' => "Look at the pictures and say", 'game_id' => 280, 'audio' =>  $Instructions . "Look-at-the-pictures-and-say" . ".mp3"],



            // G-2 lesson_7 U-262
            ['content' => "Listen and Repeat", 'game_id' => 282, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_7 U-263
            ['content' => "Trace and write", "game_id" => 283, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            // G-2 lesson_7 U-264
            ['content' => "Matching things in class", 'game_id' => 284, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_7 U-265
            ['content' => "Arranging the letters", 'game_id' => 285, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],




            // G-2 lesson_8 U-268
            ['content' => "Listen and Repeat", 'game_id' => 288, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_8 U-269
            ['content' => "Arranging the letters", 'game_id' => 289, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_8 U-271
            ['content' => "Choose the correct answer", 'game_id' => 291, 'audio' =>  $Instructions . "Choose-the-correct-answer" . ".mp3"],

            // G-2 lesson_8 U-272
            ['content' => "What is it", 'game_id' => 292, 'audio' =>  $Instructions . "What-is-it" . ".mp3"],



            // G-2 lesson_9 U-273
            ['content' => "Listen and Repeat", 'game_id' => 293, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_9 U-274
            ['content' => "Trace and write", "game_id" => 294, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            // G-2 lesson_9 U-275
            ['content' => "Matching things in class", 'game_id' => 295, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_9 U-276
            ['content' => "Arranging the letters", 'game_id' => 296, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_9 U-277
            ['content' => "Look at the pictures and speak", 'game_id' => 297, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],



            // G-2 lesson_10 U-279
            ['content' => "Listen and Repeat", 'game_id' => 299, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_10 U-280
            ['content' => "Arranging the letters", 'game_id' => 300, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_10 U-281
            ['content' => "Look at the pictures and speak", 'game_id' => 301, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],


            // G-2 lesson_11 U-282
            ['content' => "Arranging the letters", 'game_id' => 302, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_11 U-283
            ['content' => "Look at the pictures and speak", 'game_id' => 303, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],



            // G-2 lesson_12 U-285
            ['content' => "Listen and Repeat", 'game_id' => 305, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_12 U-286
            ['content' => "Listen to the audio and answer the question", 'game_id' => 306, 'audio' => $Instructions . "Listen-to-the-audio-and-answer.mp3"],

            // G-2 lesson_12 U-287
            ['content' => "Look at the pictures and speak", 'game_id' => 307, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            // G-1 lesson_12 U-288
            ['content' => "Answer the question", 'game_id' => 308, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],




            // G-2 lesson_13 U-289
            ['content' => "Listen and Repeat", 'game_id' => 309, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_13 U-290
            ['content' => "Trace and write", "game_id" => 310, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            // G-2 lesson_13 U-291
            ['content' => "Matching things in class", 'game_id' => 311, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_13 U-292
            ['content' => "Arranging the letters", 'game_id' => 312, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_13 U-293
            ['content' => "Look at the pictures and answer the question", 'game_id' => 313, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],




            // G-2 lesson_14 U-296
            ['content' => "Listen and Repeat", 'game_id' => 316, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_14 U-297
            ['content' => "Listen and choose what you like", 'game_id' => 317, 'audio' => $Instructions . "SubBlock_Listen-and-Choose-what-you-lik.mp3"],

            // G-2 lesson_14 U-298
            ['content' => "Look at the pictures and answer the question", 'game_id' => 319, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],

            // G-2 lesson_14 U-299
            ['content' => "Now talk about yourself", 'game_id' => 320, 'audio' =>  $Instructions . "Now-talk-about-yourself" . ".mp3"],



            // G-2 lesson_15 U-300
            ['content' => "Listen and Repeat", 'game_id' => 321, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_15 U-301
            ['content' => "Trace and write", "game_id" => 322, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            // G-2 lesson_15 U-302
            ['content' => "Matching things in class", 'game_id' => 323, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_15 U-303
            ['content' => "Arranging the letters", 'game_id' => 324, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_15 U-304
            ['content' => "Now talk about yourself", 'game_id' => 325, 'audio' =>  $Instructions . "Now-talk-about-yourself" . ".mp3"],

            // G-2 lesson_15 U-305
            ['content' => "Choose the correct answers", 'game_id' => 326, 'audio' =>  $Instructions . "Choose-the-correct-answers" . ".mp3"],



            // G-2 lesson_16 U-307
            ['content' => "Listen and Repeat", 'game_id' => 328, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_16 U-308
            ['content' => "Days of the week", 'game_id' => 329, 'audio' => $Instructions . "Days-of-the-week.mp3"],

            // G-2 lesson_16 U-310
            ['content' => "Look at the pictures and speak", 'game_id' => 331, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],


            // G-2 lesson_17 U-312
            ['content' => "Listen and Repeat", 'game_id' => 333, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_17 U-313
            ['content' => "Look at the pictures and answer True or False", 'game_id' => 334, 'audio' => $Instructions . "Look-at-the-pictures-and-answe.mp3"],

            // G-2 lesson_17 U-314
            ['content' => "Talk about your best friend", 'game_id' => 335, 'audio' => $Instructions . "Talk-about-your-best-friend.mp3"],



            // G-2 lesson_18 U-316
            ['content' => "Listen and Repeat", 'game_id' => 337, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_18 U-317
            ['content' => "Look at the pictures and speak", 'game_id' => 338, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            // G-2 lesson_18 U-318
            ['content' => "Look at the pictures and answer True or False", 'game_id' => 339, 'audio' => $Instructions . "Look-at-the-pictures-and-answe.mp3"],




            // G-2 lesson_19 U-320
            ['content' => "Listen and Repeat", 'game_id' => 341, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_19 U-321
            ['content' => "Trace and write", "game_id" => 342, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            // G-2 lesson_19 U-322
            ['content' => "Matching things in class", 'game_id' => 343, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_19 U-323
            ['content' => "Arranging the letters", 'game_id' => 344, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_19 U-324
            ['content' => "Read the question and answer it", 'game_id' => 346, 'audio' =>  $Instructions . "SubBlock_Read-the-question-and-answer-i" . ".mp3"],



            // G-2 lesson_20 U-325
            ['content' => "Listen and Repeat", 'game_id' => 347, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_20 U-326
            ['content' => "Trace and write", "game_id" => 348, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            // G-2 lesson_20 U-327
            ['content' => "Matching things in class", 'game_id' => 349, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_20 U-328
            ['content' => "Arranging the letters", 'game_id' => 350, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-1 lesson_20 U-329
            ['content' => "Answer the question", 'game_id' => 351, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],



            // G-2 lesson-21 U-334

            ['content' => "Match the pictures and words. Draw lines", 'game_id' => 354, 'audio' =>  $Instructions . "Match-the-pictures-and-words" . ".mp3"],

            ['content' => "Look at the pictures and speak", 'game_id' => 356, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            ['content' => "Answer the question", 'game_id' => 360, 'audio' =>  $Instructions .
            "Look-at-the-pictures-and-speak" . ".mp3"],

            ['content' => "Listen and choose the correct answer", 'game_id' => 364, 'audio' =>  $Instructions . "Listen-and-choose-the-correct" . ".mp3"],

             ['content' => "Now talk about yourself", 'game_id' => 365, 'audio' =>  $Instructions . "Now-talk-about-yourself" . ".mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 367, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Arranging the letters", 'game_id' => 370, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            ['content' => "Look at the pictures and speak", 'game_id' => 371, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            ['content' => "Look at the pictures and speak", 'game_id' => 377, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],


            ['content' => "Listen and Repeat", 'game_id' => 378, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Arranging the letters", 'game_id' => 381, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],


            ['content' => "Look at the pictures and speak", 'game_id' => 382, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            ['content' => "Match the pictures and words. Draw lines", 'game_id' => 391, 'audio' =>  $Instructions . "Match-the-pictures-and-words" . ".mp3"],











            //////////////////////////////////
            ///////       Grade 3      ///////
            //////////////////////////////////

            // G-3 lesson_1 U-429
            ['content' => "Listen and Repeat", 'game_id' => 459, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_1 U-430
            ['content' => "Look at the pictures and answer the question", 'game_id' => 460, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],


            // G-2 lesson_1 U-434
            ['content' => "Describe your family member", 'game_id' => 464, 'audio' =>  $Instructions . "Describe-your-family-members-H" . ".mp3"],



            // G-3 lesson_2 U-436
            ['content' => "Listen and Repeat", 'game_id' => 466, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_2 U-437
            ['content' => "Look at the pictures and answer the question", 'game_id' => 467, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],

            // G-2 lesson_2 U-438
            ['content' => "Look at the pictures and choose the right answer", 'game_id' => 468, 'audio' =>  $Instructions . "look-at-the-pictures-and-choos" . ".mp3"],


            // G-2 lesson_2 U-439
            ['content' => "Listen and choose the right question", 'game_id' => 469, 'audio' =>  $Instructions . "Listen-and-choose-the-right-qu" . ".mp3"],


            // G-3 lesson_3 U-443
            ['content' => "Listen and Repeat", 'game_id' => 473, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_3 U-444
            ['content' => "Look at the pictures and write", 'game_id' => 474, 'audio' => $Instructions . "Look-at-the-pictures-and-write.mp3"],

            // G-3 lesson_3 U-445
            ['content' => "Listen and write the jobs for each person", 'game_id' => 475, 'audio' => $Instructions . "Listen-and-write-the-jobs-for.mp3"],

            // G-2 lesson_3 U-446
            ['content' => "Look at the pictures and answer the question", 'game_id' => 476, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],

            // G-2 lesson_3 U-447
            ['content' => "Write about your dream job. \nWhat do you want to be? What do your brothers and sisters want to be?", 'game_id' => 477, 'audio' =>  $Instructions . "Write-about-your-dream-job-Wh" . ".mp3"],



            // G-2 lesson_4 U-450
            ['content' => "Look at the family tree and add the words to it. And repeat the words", 'game_id' => 480, 'audio' =>  $Instructions . "Look-at-the-family-tree-and-ad" . ".mp3"],

            // G-2 lesson_4 U-451
            ['content' => "Listen to two conversations. How is the second person related to the first person.", 'game_id' => 481, 'audio' =>  $Instructions . "Listen-to-two-conversations-H" . ".mp3"],
            // G-2 lesson_4 U-452
            ['content' => "Listen to two conversations. How is the second person related to the first person.", 'game_id' => 482, 'audio' =>  $Instructions . "Listen-to-two-conversations-H" . ".mp3"],

            // G-2 lesson_4 U-453
            ['content' => "Write about your family members. What are their names? \nWhat are they? What are they like? What do they look like?", 'game_id' => 483, 'audio' =>  $Instructions . "Write-about-your-family-member" . ".mp3"],


            // G-3 lesson_5 U-455
            ['content' => "Listen and Repeat", 'game_id' => 486, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_5 U-456
            ['content' => "Write the fruits and vegetables in the correct box.", 'game_id' => 487, 'audio' => $Instructions . "Write-the-fruit-and-vegetables.mp3"],

            // G-3 lesson_5 U-457
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 488, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-3 lesson_5 U-458
            ['content' => "Look at the pictures and complete the sentences", 'game_id' => 489, 'audio' => $Instructions . "Look-at-the-pictures-and-compl.mp3"],

            // G-3 lesson_5 U-459
            ['content' => "Listen and choose the right answers. \nWhat is your favorite fruit or vegetable?", 'game_id' => 490, 'audio' => $Instructions . "Listen-and-choose-the-right-an.mp3"],

            // G-3 lesson_5 U-461
            ['content' => "Complete the sentences", 'game_id' => 492, 'audio' => $Instructions . "Complete-the-sentences.mp3"],




            // G-3 lesson_6 U-464
            ['content' => "Listen and Repeat", 'game_id' => 495, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_6 U-465
            ['content' => "Look at the pictures and complete the sentences", 'game_id' => 496, 'audio' => $Instructions . "Look-at-the-pictures-and-compl.mp3"],

            // G-3 lesson_6 U-466
            ['content' => "Reading Comprehension. My favorite Sports and Games.", 'game_id' => 497, 'audio' => $Instructions . "Reading-Comprehension-My-favo.mp3"],


            // G-3 lesson_6 U-468
            ['content' => "Listen to the conversation and choose the right answer.", 'game_id' => 499, 'audio' => $Instructions . "SubBlock_Listen-to-the-conversation-and.mp3"],

            // G-3 lesson_6 U-469
            ['content' => "Complete the sentences", 'game_id' => 500, 'audio' => $Instructions . "Complete-the-sentences.mp3"],




            // G-3 lesson_7 U-472
            ['content' => "Listen and Repeat", 'game_id' => 503, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_7 U-473
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 504, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-3 lesson_7 U-474
            ['content' => "Look at the pictures and complete the sentences", 'game_id' => 505, 'audio' => $Instructions . "Look-at-the-pictures-and-compl.mp3"],

            // G-3 lesson_7 U-476
            ['content' => "Listen and Match the people with their favorite subjects.", 'game_id' => 507, 'audio' => $Instructions . "Listen-and-Match-the-people.mp3"],


            // G-3 lesson_8 U-479
            ['content' => "Listen and Repeat", 'game_id' => 510, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_8 U-480
            ['content' => "Look and Write", 'game_id' => 511, 'audio' => $Instructions . "Look-and-write.mp3"],

            // G-3 lesson_8 U-481
            ['content' => "Matching things in class", 'game_id' => 512, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-3 lesson_8 U-483
            ['content' => "Listen and choose the correct answer", 'game_id' => 514, 'audio' =>  $Instructions . "Listen-and-choose-the-correct" . ".mp3"],

            // G-3 lesson_8 U-484
            ['content' => "Read the text and write Yes or No.", 'game_id' => 515, 'audio' =>  $Instructions . "Read-the-text-and-write-Yes-or" . ".mp3"],

            // G-3 lesson_8 U-485
            ['content' => "Choose a pet and write about your pet.", 'game_id' => 516, 'audio' =>  $Instructions . "Choose-a-pet-and-write-about-y" . ".mp3"],




            // G-3 lesson_9 U-487
            ['content' => "Listen and Repeat", 'game_id' => 518, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_9 U-488
            ['content' => "write the words in the right column", 'game_id' => 519, 'audio' => $Instructions . "write-the-words-in-the-right-c.mp3"],

            // G-3 lesson_9 U-489
            ['content' => "Fill in the blanks with is or are.", 'game_id' => 520, 'audio' => $Instructions . "Fill-in-the-blanks-with-is-or.mp3"],

            // G-3 lesson_9 U-490
            ['content' => "Rearrange to make the correct sentences.", 'game_id' => 521, 'audio' => $Instructions . "Rearrange-to-make-the-correct.mp3"],

            // G-3 lesson_9 U-491
            ['content' => "Listen and choose the correct picture.", 'game_id' => 522, 'audio' => $Instructions . "Listen-and-choose-the-correct-pic.mp3"],



            // G-3 lesson_10 U-494
            ['content' => "Listen and Repeat", 'game_id' => 526, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_10 U-495
            ['content' => "Look at the pictures and fill in the blanks.", 'game_id' => 527, 'audio' => $Instructions . "Look-at-the-pictures-and-fill.mp3"],

            // G-3 lesson_10 U-496
            ['content' => "Look at the pictures and fill in the blanks.", 'game_id' => 528, 'audio' => $Instructions . "Look-at-the-pictures-and-fill.mp3"],

            // G-3 lesson_10 U-496
            ['content' => "Look at the pictures and write the sentences.", 'game_id' => 529, 'audio' => $Instructions . "look-at-the-pictures-and-write-senc.mp3"],

            // G-3 lesson_10 U-497
            ['content' => "Listen and choose the correct answer", 'game_id' => 530, 'audio' =>  $Instructions . "Listen-and-choose-the-correct" . ".mp3"],

            // G-3 lesson_10 U-498
            ['content' => "Look at the pictures and speak", 'game_id' => 531, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            // G-3 lesson_10 U-499
            ['content' => "Read the text and write Yes or No.", 'game_id' => 532, 'audio' =>  $Instructions . "Read-the-text-and-write-Yes-or" . ".mp3"],

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
