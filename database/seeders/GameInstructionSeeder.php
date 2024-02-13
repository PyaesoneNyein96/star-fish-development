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

        // Speaking Instruction
        $Speaking_GameID = [

            // Grade 1 > Lesson 1 - 30
            16, 26, 32, 45, 52, 58, 64, 77, 83, 90, 96, 97, 112, 118, 123, 124, 132, 139, 146, 151, 157, 165, 170, 177, 183, 188,
            //
            38, 70, 196, 204, 209, 214, 221, 226, 233, 238, 245, 251,

            // Grade 2 > Lesson 1 - 20
            254, 257, 280, 292, 297, 301, 303, 307, 313, 319, 320, 325, 331, 335, 338, 346,

            // Grade 3 > Lesson 1 - 20
            462, 469, 471, 476, 478, 483, 491, 493, 498, 501, 506, 508, 513, 523, 524, 530, 533, 539, 540, 546, 549, 555, 562, 569, 575, 584, 590, 598, 605,

            // Grade 4 > Lesson 1 - 5 , 10 - 25 , 38 -40
            762, 763, 765, 773, 775, 784, 786, 791, 793, 800, 802, 839, 842, 848, 850, 855, 858, 863, 866, 870, 872, 878, 881, 886, 887, 892, 894, 899, 902, 909, 912, 917, 919, 925, 927, 934, 937, 942, 944, 948, 951, 957, 959, 1048, 1051, 1055, 1057, 1060, 1062
        ];

        foreach ($Speaking_GameID as $value) {
            DB::table('game_instructions')->insert([
                ['content' => "Speaking", 'game_id' => $value, 'audio' =>  $Instructions . "speaking-audio" . ".mp3"],
            ]);
        }


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
            // ['content' => "Tap the things in the room and answer the question", 'game_id' => 16, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],



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
            // ['content' => "Tap the things in the room and answer the question", 'game_id' => 26, 'audio' =>  $Instructions . "Tap_the_things_in_the_room_and" . ".mp3"],

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
            // ['content' => "Look at the picture and say the words. What's this?", 'game_id' => 32, 'audio' =>  $Instructions . "Look-at-the-picture-and-say-th" . ".mp3"],

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
            // ['content' => "Look at the picture and say a word", 'game_id' => 45, 'audio' =>  $Instructions . "SubBlock_Look-at-the-picture-and-say-a" . ".mp3"],

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
            // ['content' => "Describe the pictures", 'game_id' => 52, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],

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
            // ['content' => "What animals do you see on the farm?", 'game_id' => 58, 'audio' =>  $Instructions . "What-animals-do-you-see-on-the" . ".mp3"],

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
            // ['content' => "What colour is it ? What is it ?", 'game_id' => 64, 'audio' =>  $Instructions . "SubBlock_What-colour-is-it-what-is-it" . ".mp3"],

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
            // ['content' => "Describe the pictures. It's", 'game_id' => 77, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],


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
            // ['content' => "Describe the pictures", 'game_id' => 83, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],


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
            // ['content' => "Describe the animals and their sizes and colours.", 'game_id' => 90, 'audio' =>  $Instructions . "SubBlock_describe-the-animals-and-their" . ".mp3"],

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
            // ['content' => "Look at the half of the picture and say a word.", 'game_id' => 97, 'audio' =>  $Instructions . "Look-at-the-half-of-the-picture" . ".mp3"],

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
            // ['content' => "What do you see in the picture", 'game_id' => 123, 'audio' =>  $Instructions . "What-do-you-see-in-the-picture" . ".mp3"],
            // ['content' => "Look at the half of the picture and say a word.", 'game_id' => 124, 'audio' =>  $Instructions . "Look-at-the-half-of-the-picture" . ".mp3"],

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
            // ['content' => "Describe the pictures", 'game_id' => 132, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],


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
            // ['content' => "Describe the picture and say what do you eat", 'game_id' => 139, 'audio' =>  $Instructions . "SubBlock_Describe-the-picture-and-say-w" . ".mp3"],


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
            // ['content' => "Describe the picture and say what do you like", 'game_id' => 146, 'audio' =>  $Instructions . "SubBlock_Describle-the-picture-and-say" . ".mp3"],


            // ================
            // G-1 lesson_24 U-136
            ['content' => "Listen and Repeat", 'game_id' => 148, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_24 U-137
            ['content' => "Listen and tap what you hear", 'game_id' => 149, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_24 U-139
            // ['content' => "Describe the picture and say", 'game_id' => 151, 'audio' =>  $Instructions . "SubBlock_Describe-the-picture-and-say" . ".mp3"],

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
            // ['content' => "Describe the picture and say", 'game_id' => 157, 'audio' =>  $Instructions . "SubBlock_Describe-the-picture-and-say" . ".mp3"],

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
            // ['content' => "Describe the pictures", 'game_id' => 165, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],


            // ================
            // G-1 lesson_27 U-154
            ['content' => "Listen and Repeat", 'game_id' => 167, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-1 lesson_27 U-155
            ['content' => "Listen and tap what you hear", 'game_id' => 168, 'audio' =>  $Instructions . "Listen-and-tap-what-you-hear" . ".mp3"],

            // G-1 lesson_27 U-156
            ['content' => "Matching things", 'game_id' => 169, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],

            // G-1 lesson_27 U-157
            // ['content' => "Describe the pictures", 'game_id' => 170, 'audio' =>  $Instructions . "Describe-the-pictures" . ".mp3"],

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
            // ['content' => "Look at the picture and say a word", 'game_id' => 188, 'audio' =>  $Instructions . "SubBlock_Look-at-the-picture-and-say-a" . ".mp3"],

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
            // ['content' => "Look at the picture and say.", 'game_id' => 221, 'audio' =>  $Instructions . "Look-at-the-picture-and-say" . ".mp3"],

            // Lesson -36
            // Game 3 (225)
            ['content' => "Finding things", 'game_id' => 224, 'audio' =>  $Instructions . "Finding-things" . ".mp3"],

            // Game 4 (226)
            ['content' => "Matching things", 'game_id' => 225, 'audio' =>  $Instructions . "Matching-things" . ".mp3"],


            // Game 6 (228,229)
            ['content' => "Trace and write", "game_id" => 227, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            ['content' => "Write-the-correct-letter", "game_id" => 228, 'audio' =>  $Instructions . "Write-the-correct-letter" . ".mp3"],

            // Lesson - 37
            // Game 3
            ['content' => "Listen and choose the words you hear", "game_id" => 231, 'audio' =>  $Instructions . "Listen-and-choose-the-words-you-say" . ".mp3"],

            // Game 4
            ['content' => "Matching the words and the picture", "game_id" => 232, 'audio' =>  $Instructions . "Matching-the-words-and-the-picture" . ".mp3"],

            // // Game 6 (222)
            // ['content' => "Who are they?", 'game_id' => 233, 'audio' =>  $Instructions . "Who-are-they" . ".mp3"],


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
            // [
            //     'content' => "Listen who they are Tap each speaker and record", "game_id" => 238,
            //     'audio' =>  $Instructions . "Listen-who-they-are-Tap-each-speaker-and-record" . ".mp3"
            // ],



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








            //////////////////////////////////
            ///////       Grade 2      ///////
            //////////////////////////////////

            // G-2 lesson_1 U-234
            ['content' => "Make sure to close your mouth at the end of name say and practice", 'game_id' => 253, 'audio' =>  $Instructions . "Make-sure-to-close-your-mouth" . ".mp3"],

            // G-2 lesson_1 U-235
            // ['content' => "what is your name?", 'game_id' => 254, 'audio' =>  $Instructions . "Whats-your-name-girl" . ".mp3"],

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
            // ['content' => "Look at the pictures and say", 'game_id' => 280, 'audio' =>  $Instructions . "Look-at-the-pictures-and-say" . ".mp3"],



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
            // ['content' => "What is it", 'game_id' => 292, 'audio' =>  $Instructions . "What-is-it" . ".mp3"],



            // G-2 lesson_9 U-273
            ['content' => "Listen and Repeat", 'game_id' => 293, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_9 U-274
            ['content' => "Trace and write", "game_id" => 294, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            // G-2 lesson_9 U-275
            ['content' => "Matching things in class", 'game_id' => 295, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_9 U-276
            ['content' => "Arranging the letters", 'game_id' => 296, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_9 U-277
            // ['content' => "Look at the pictures and speak", 'game_id' => 297, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],



            // G-2 lesson_10 U-279
            ['content' => "Listen and Repeat", 'game_id' => 299, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_10 U-280
            ['content' => "Arranging the letters", 'game_id' => 300, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_10 U-281
            // ['content' => "Look at the pictures and speak", 'game_id' => 301, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],


            // G-2 lesson_11 U-282
            ['content' => "Arranging the letters", 'game_id' => 302, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_11 U-283
            // ['content' => "Look at the pictures and speak", 'game_id' => 303, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],



            // G-2 lesson_12 U-285
            ['content' => "Listen and Repeat", 'game_id' => 305, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_12 U-286
            ['content' => "Listen to the audio and answer the question", 'game_id' => 306, 'audio' => $Instructions . "Listen-to-the-audio-and-answer.mp3"],

            // G-2 lesson_12 U-287
            // ['content' => "Look at the pictures and speak", 'game_id' => 307, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

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
            // ['content' => "Look at the pictures and answer the question", 'game_id' => 313, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],




            // G-2 lesson_14 U-296
            ['content' => "Listen and Repeat", 'game_id' => 316, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_14 U-297
            ['content' => "Listen and choose what you like", 'game_id' => 317, 'audio' => $Instructions . "SubBlock_Listen-and-Choose-what-you-lik.mp3"],

            // G-2 lesson_14 U-298
            // ['content' => "Look at the pictures and answer the question", 'game_id' => 319, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],

            // G-2 lesson_14 U-299
            // ['content' => "Now talk about yourself", 'game_id' => 320, 'audio' =>  $Instructions . "Now-talk-about-yourself" . ".mp3"],



            // G-2 lesson_15 U-300
            ['content' => "Listen and Repeat", 'game_id' => 321, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_15 U-301
            ['content' => "Trace and write", "game_id" => 322, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            // G-2 lesson_15 U-302
            ['content' => "Matching things in class", 'game_id' => 323, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-2 lesson_15 U-303
            ['content' => "Arranging the letters", 'game_id' => 324, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // G-2 lesson_15 U-304
            // ['content' => "Now talk about yourself", 'game_id' => 325, 'audio' =>  $Instructions . "Now-talk-about-yourself" . ".mp3"],

            // G-2 lesson_15 U-305
            ['content' => "Choose the correct answers", 'game_id' => 326, 'audio' =>  $Instructions . "Choose-the-correct-answers" . ".mp3"],



            // G-2 lesson_16 U-307
            ['content' => "Listen and Repeat", 'game_id' => 328, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_16 U-308
            ['content' => "Days of the week", 'game_id' => 329, 'audio' => $Instructions . "Days-of-the-week.mp3"],

            // G-2 lesson_16 U-310
            // ['content' => "Look at the pictures and speak", 'game_id' => 331, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],


            // G-2 lesson_17 U-312
            ['content' => "Listen and Repeat", 'game_id' => 333, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_17 U-313
            ['content' => "Look at the pictures and answer True or False", 'game_id' => 334, 'audio' => $Instructions . "Look-at-the-pictures-and-answe.mp3"],

            // G-2 lesson_17 U-314
            // ['content' => "Talk about your best friend", 'game_id' => 335, 'audio' => $Instructions . "Talk-about-your-best-friend.mp3"],



            // G-2 lesson_18 U-316
            ['content' => "Listen and Repeat", 'game_id' => 337, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-2 lesson_18 U-317
            // ['content' => "Look at the pictures and speak", 'game_id' => 338, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

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
            // ['content' => "Read the question and answer it", 'game_id' => 346, 'audio' =>  $Instructions . "SubBlock_Read-the-question-and-answer-i" . ".mp3"],



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


            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// psn
            // G-2 lesson-21 U-334

            ['content' => "Match the pictures and words. Draw lines", 'game_id' => 354, 'audio' =>  $Instructions . "Match-the-pictures-and-words" . ".mp3"],

            ['content' => "Look at the pictures and speak", 'game_id' => 356, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            ['content' => "Answer the question", 'game_id' => 360, 'audio' =>  $Instructions .
                "Look-at-the-pictures-and-speak" . ".mp3"],

            ['content' => "Trace and write", "game_id" => 363, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            ['content' => "Listen and choose the correct answer", 'game_id' => 364, 'audio' =>  $Instructions . "Listen-and-choose-the-correct" . ".mp3"],

            ['content' => "Now talk about yourself", 'game_id' => 365, 'audio' =>  $Instructions . "Now-talk-about-yourself" . ".mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 367, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Trace and write", "game_id" => 368, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            ['content' => "Arranging the letters", 'game_id' => 370, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            ['content' => "Look at the pictures and speak", 'game_id' => 371, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            ['content' => "Look at the pictures and write the preposition", 'game_id' => 375, 'audio' =>  $Instructions . "Look-at-the-pictures-and-write-the-preposition" . ".mp3"],

            ['content' => "Look at the pictures and speak", 'game_id' => 377, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],


            ['content' => "Listen and Repeat", 'game_id' => 378, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Trace and write", "game_id" => 379, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            ['content' => "Arranging the letters", 'game_id' => 381, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],


            ['content' => "Look at the pictures and speak", 'game_id' => 382, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            ['content' => "Listen and write the preposition.", 'game_id' => 386, 'audio' =>  $Instructions . "Listen-and-write-the-preposition" . ".mp3"],

            ['content' => "Match the pictures and words. Draw lines", 'game_id' => 391, 'audio' =>  $Instructions . "Match-the-pictures-and-words" . ".mp3"],

            ['content' => "Look at the pictures and write the word", 'game_id' => 396, 'audio' =>  $Instructions . "Look-at-the-pictures-and-write-the-word" . ".mp3"],

            ['content' => "Trace and write", "game_id" => 399, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            ['content' => "Look at the pictures and match them with the words", 'game_id' => 400, 'audio' =>  $Instructions . "Look-at-the-pictures-and-match-them-with-the-words" . ".mp3"],

            ['content' => "Arranging the letters", 'game_id' => 401, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            ['content' => "Look at the pictures and write", 'game_id' => 406, 'audio' => $Instructions . "Look-at-the-pictures-and-write.mp3"],

            ['content' => "Look at the pictures and match them with the words", 'game_id' => 407, 'audio' =>  $Instructions . "Look-at-the-pictures-and-match-them-with-the-words" . ".mp3"],

            ['content' => "Look at the pictures and make sentences out loud", 'game_id' => 408, 'audio' => $Instructions . "Look-at-the-pictures-and-make-sentences-out-loud.mp3"],


            ['content' => "Trace and write", "game_id" => 411, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            ['content' => "Match the pictures and words. Draw lines", 'game_id' => 412, 'audio' =>  $Instructions . "Match-the-pictures-and-words" . ".mp3"],

            ['content' => "Arranging the letters", 'game_id' => 413, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],


            ['content' => "Look at the pictures and write", 'game_id' => 417, 'audio' => $Instructions . "Look-at-the-pictures-and-write.mp3"],

            // ['content' => "Speak about yourself", 'game_id' => 418, 'audio' => $Instructions . "Speak-about-yourself.mp3"],


            // ['content' => "Students listen and repeat", 'game_id' => 419, 'audio' => $Instructions . "Students-listen-and-repeat.mp3"],

            ['content' => "Trace and write", "game_id" => 420, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            ['content' => "Look at the pictures and match them with the words", 'game_id' => 421, 'audio' =>  $Instructions . "Look-at-the-pictures-and-match-them-with-the-words" . ".mp3"],

            ['content' => "Arranging the letters", 'game_id' => 423, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            // ['content' => "Listen and repeat the words and sentences", 'game_id' => 425, 'audio' =>  $Instructions . "Listen-and-repeat-the-words-and-sentences" . ".mp3"],
            // ['content' => "Listen and repeat the words and sentences", 'game_id' => 426, 'audio' =>  $Instructions . "Listen-and-repeat-the-words-and-sentences" . ".mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 427, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Look at the pictures and match them with the words", "game_id" => 428, 'audio' =>  $Instructions . "Look-at-the-pictures-and-match-them-with-the-words" . ".mp3"],
            ['content' => "Look at the pictures and make sentences out loud", "game_id" => 429, 'audio' =>  $Instructions . "Look-at-the-pictures-and-make-sentences-out-loud" . ".mp3"],


            // G-2 36
            //   ['content' => "Students listen and repeat the words and sentences. ", "game_id" => 431, 'audio' =>  $Instructions . "Students-listen-and-repeat-the-words-and-sentences" . ".mp3"],
            //   ['content' => "Students listen and repeat the words and sentences. ", "game_id" => 432, 'audio' =>  $Instructions . "Students-listen-and-repeat-the-words-and-sentences" . ".mp3"],
            //   ['content' => "Listen and complete the sentences", "game_id" => 433, 'audio' =>  $Instructions . "Listen-and-complete-the-sentences" . ".mp3"],

            ['content' => "Look at the pictures and make sentences", 'game_id' => 434, 'audio' => $Instructions . "Look-at-the-pictures-and-make-sentences.mp3"],

            //G-2 37
            ['content' => "Listen and repeat the phrases", 'game_id' => 437, 'audio' => $Instructions . "Listen-and-repeat-the-phrases.mp3"],
            ['content' => "Look at the pictures and speak", 'game_id' => 439, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            // G-2 38
            ['content' => " Students listen and repeat the numbers", 'game_id' => 441, 'audio' =>  $Instructions . " Students-listen-and-repeat-the-numbers" . ".mp3"],

            ['content' => "Trace and write", "game_id" => 443, 'audio' =>  $Instructions . "Trace-and-write" . ".mp3"],

            ['content' => "Arranging the letters", 'game_id' => 444, 'audio' =>  $Instructions . "Arranging-the-letters" . ".mp3"],

            ['content' => "Match the pictures and the numbers", 'game_id' => 444, 'audio' =>  $Instructions . "Match-the-pictures-and-the-numbers" . ".mp3"],

            ['content' => "Look at the pictures and speak", 'game_id' => 445, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],


            // G-39

            // ['content' => "Students Listen and repeat the phrases", 'game_id' => 437, 'audio' => $Instructions . "Students listen and repeat the phrases.mp3"],
            // ['content' => "Listen and repeat the sentences", 'game_id' => 437, 'audio' => $Instructions . "Listen and repeat the sentences.mp3"],
            // ['content' => "Listen and write the time", 'game_id' => 437, 'audio' => $Instructions . "Listen and write the time.mp3"],
            ['content' => "Look at the clocks and write the time", 'game_id' => 452, 'audio' => $Instructions . "Look-at-the-clocks-and-write-the-time.mp3"],


            // G-40

            ['content' => "Look at the clocks and match them with the times", 'game_id' => 456, 'audio' => $Instructions . "Look-at-the-clocks-and-match-them-with-the-times.mp3"],

























            //////////////////////////////////
            ///////       Grade 3      ///////
            //////////////////////////////////

            // G-3 lesson_1 U-429
            ['content' => "Listen and Repeat", 'game_id' => 459, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_1 U-430
            ['content' => "Look at the pictures and answer the question", 'game_id' => 460, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],

            // G-3 lesson_1 U-433
            ['content' => "Write about your family members and their jobs", 'game_id' => 463, 'audio' =>  $Instructions . "SubBlock_Write-about-your-family-member" . ".mp3"],

            // G-3 lesson_1 U-434
            ['content' => "Describe your family member", 'game_id' => 464, 'audio' =>  $Instructions . "Describe-your-family-members-H" . ".mp3"],



            // G-3 lesson_2 U-436
            ['content' => "Listen and Repeat", 'game_id' => 466, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_2 U-437
            ['content' => "Look at the pictures and answer the question", 'game_id' => 467, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],

            // G-3 lesson_2 U-438
            ['content' => "Look at the pictures and choose the right answer", 'game_id' => 468, 'audio' =>  $Instructions . "look-at-the-pictures-and-choos" . ".mp3"],


            // G-2 lesson_2 U-439
            // ['content' => "Listen and choose the right question", 'game_id' => 469, 'audio' =>  $Instructions . "Listen-and-choose-the-right-qu" . ".mp3"],


            // G-3 lesson_3 U-443
            ['content' => "Listen and Repeat", 'game_id' => 473, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_3 U-444
            ['content' => "Look at the pictures and write", 'game_id' => 474, 'audio' => $Instructions . "Look-at-the-pictures-and-write.mp3"],

            // G-3 lesson_3 U-445
            ['content' => "Listen and write the jobs for each person", 'game_id' => 475, 'audio' => $Instructions . "Listen-and-write-the-jobs-for.mp3"],

            // G-2 lesson_3 U-446
            // ['content' => "Look at the pictures and answer the question", 'game_id' => 476, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],

            // G-2 lesson_3 U-447
            ['content' => "Write about your dream job. \nWhat do you want to be? What do your brothers and sisters want to be?", 'game_id' => 477, 'audio' =>  $Instructions . "Write-about-your-dream-job-Wh" . ".mp3"],



            // G-2 lesson_4 U-450
            ['content' => "Look at the family tree and add the words to it. And repeat the words", 'game_id' => 480, 'audio' =>  $Instructions . "Look-at-the-family-tree-and-ad" . ".mp3"],

            // G-2 lesson_4 U-451
            ['content' => "Listen to two conversations. How is the second person related to the first person.", 'game_id' => 481, 'audio' =>  $Instructions . "Listen-to-two-conversations-H" . ".mp3"],
            // G-2 lesson_4 U-452
            ['content' => "Listen to two conversations. How is the second person related to the first person.", 'game_id' => 482, 'audio' =>  $Instructions . "Listen-to-two-conversations-H" . ".mp3"],

            // G-2 lesson_4 U-453
            // ['content' => "Write about your family members. What are their names? \nWhat are they? What are they like? What do they look like?", 'game_id' => 483, 'audio' =>  $Instructions . "Write-about-your-family-member" . ".mp3"],


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
            ['content' => "Listen and choose the right answer from the options", 'game_id' => 529, 'audio' => $Instructions . "Listen-and-choose-the-right-answer-from.mp3"],

            // G-3 lesson_10 U-497
            // ['content' => "Listen and choose the correct answer", 'game_id' => 530, 'audio' =>  $Instructions . "Listen-and-choose-the-correct" . ".mp3"],

            // G-3 lesson_10 U-498
            ['content' => "Answer the question", 'game_id' => 531, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            // G-3 lesson_10 U-499
            ['content' => "Look and Write", 'game_id' => 532, 'audio' => $Instructions . "Look-and-write.mp3"],


            // G-3 lesson_11 U-502
            ['content' => "Listen and Repeat", 'game_id' => 535, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_11 U-503
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 536, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-3 lesson_11 U-504
            ['content' => "Read and circle", 'game_id' => 537, 'audio' => $Instructions . "Read-and-circle.mp3"],

            // G-3 lesson_11 U-505
            ['content' => "Listen and write Yes or No", 'game_id' => 538, 'audio' => $Instructions . "Listen-and-write-Yes-or-No.mp3"],




            // G-3 lesson_12 U-509
            ['content' => "Listen and Repeat", 'game_id' => 542, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_12 U-510
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 543, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-3 lesson_12 U-511
            ['content' => "Rearrange to make the correct sentences.", 'game_id' => 544, 'audio' => $Instructions . "Rearrange-to-make-the-correct.mp3"],

            // G-3 lesson_12 U-512
            ['content' => "Listen to the conversation and match the persons with the animals they like.", 'game_id' => 545, 'audio' => $Instructions . "Listen-to-the-conversation-and.mp3"],

            // G-3 lesson_12 U-513
            // ['content' => "Read the text and answer the questions.", 'game_id' => 546, 'audio' => $Instructions . "Read-the-text-and-answer-the-q.mp3"],

            // G-3 lesson_12 U-515
            ['content' => "Write about your favorite animal.", 'game_id' => 548, 'audio' => $Instructions . "Write-about-your-favorite-anim.mp3"],



            // G-3 lesson_13 U-518
            ['content' => "Listen and Repeat", 'game_id' => 551, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_13 U-519
            ['content' => "Rearrange to make the correct sentences.", 'game_id' => 552, 'audio' => $Instructions . "Rearrange-to-make-the-correct.mp3"],

            // G-3 lesson_13 U-520
            ['content' => "Read and Write.", 'game_id' => 553, 'audio' => $Instructions . "Read-and-write.mp3"],

            // G-3 lesson_13 U-521
            ['content' => "Listen and Write.", 'game_id' => 554, 'audio' => $Instructions . "Listen-and-write.mp3"],

            // G-3 lesson_13 U-521
            // ['content' => "Look at the pictures and speak", 'game_id' => 555, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],



            // G-3 lesson_14 U-524
            ['content' => "Listen and Repeat", 'game_id' => 557, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_14 U-525
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 558, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-3 lesson_14 U-526
            ['content' => "Rearrange to make the correct sentences.", 'game_id' => 559, 'audio' => $Instructions . "Rearrange-to-make-the-correct.mp3"],

            // G-3 lesson_14 U-527
            ['content' => "look read and check.", 'game_id' => 560, 'audio' => $Instructions . "Look-read-and-check.mp3"],

            // G-3 lesson_14 U-528
            ['content' => "Listen and write the words. What do you want?", 'game_id' => 561, 'audio' => $Instructions . "Listen-and-write-the-words-Wh.mp3"],

            // G-3 lesson_14 U-530
            ['content' => "My favorite food.", 'game_id' => 563, 'audio' => $Instructions . "My-favorite-food.mp3"],

            // G-3 lesson_14 U-531
            ['content' => "Write about your favorite food.", 'game_id' => 564, 'audio' => $Instructions . "Write-about-your-favorite-food.mp3"],


            // G-3 lesson_15 U-533
            ['content' => "Listen and Repeat", 'game_id' => 566, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_15 U-534
            ['content' => "Rearrange to make the correct sentences.", 'game_id' => 567, 'audio' => $Instructions . "Rearrange-to-make-the-correct.mp3"],

            // G-3 lesson_15 U-535
            ['content' => "Listen and write Yes or No", 'game_id' => 538, 'audio' => $Instructions . "Listen-and-write-Yes-or-No.mp3"],


            // G-3 lesson_16 U-538
            ['content' => "Listen and Repeat", 'game_id' => 571, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_16 U-539
            ['content' => "Look at the picture and choose the right words.", 'game_id' => 572, 'audio' => $Instructions . "SubBlock_Look-at-the-picture-and-choose.mp3"],

            // G-3 lesson_16 U-540
            ['content' => "Count the pictures and answer the question.", 'game_id' => 573, 'audio' => $Instructions . "Count-the-pictures-and-answer.mp3"],

            // G-3 lesson_16 U-541
            ['content' => "Listen and choose the correct answer", 'game_id' => 574, 'audio' =>  $Instructions . "Listen-and-choose-the-correct" . ".mp3"],

            // G-3 lesson_16 U-543
            ['content' => "Read and write Yes or No", 'game_id' => 576, 'audio' =>  $Instructions . "Read-and-write-Yes-or-No" . ".mp3"],

            // G-1 lesson_16 U-544
            ['content' => "Answer the question", 'game_id' => 577, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],




            // G-1 lesson_17 U-546
            ['content' => "Matching things in class", 'game_id' => 579, 'audio' =>  $Instructions . "Matching-things-in-class" . ".mp3"],

            // G-3 lesson_17 U-546
            ['content' => "Listen and Repeat", 'game_id' => 580, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_17 U-547
            ['content' => "Write the colours.", 'game_id' => 581, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_17 U-548
            ['content' => "Complete the sentences", 'game_id' => 582, 'audio' => $Instructions . "Complete-the-sentences.mp3"],

            // G-3 lesson_17 U-549
            ['content' => "Listen and Match the colours and numbers with the people.", 'game_id' => 583, 'audio' => $Instructions . "SubBlock_Listen-and-Match-the-colors-an.mp3"],



            // G-3 lesson_18 U-552
            ['content' => "Listen and Repeat", 'game_id' => 586, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_18 U-553
            ['content' => "Choose the correct answer.", 'game_id' => 587, 'audio' => $Instructions . "Choose-the-correct-answer.mp3"],

            // G-3 lesson_18 U-554
            ['content' => "Write the words for the number.", 'game_id' => 588, 'audio' => $Instructions . "write-the-words-for-the-number.mp3"],

            // G-3 lesson_18 U-555
            ['content' => "Listen and choose the correct answer", 'game_id' => 589, 'audio' =>  $Instructions . "Listen-and-choose-the-correct" . ".mp3"],

            // G-2 lesson_18 U-556
            // ['content' => "Look at the pictures and speak", 'game_id' => 590, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],

            // G-3 lesson_18 U-557
            ['content' => "Listen and write Yes or No", 'game_id' => 591, 'audio' => $Instructions . "Listen-and-write-Yes-or-No.mp3"],

            // G-3 lesson_18 U-558
            ['content' => "Write about your school", 'game_id' => 592, 'audio' => $Instructions . "SubBlock_Write-about-your-school.mp3"],



            // G-3 lesson_19 U-560
            ['content' => "Listen and Repeat", 'game_id' => 594, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_19 U-561
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 595, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-3 lesson_19 U-562
            ['content' => "Look at the picture and choose the right words.", 'game_id' => 596, 'audio' => $Instructions . "SubBlock_Look-at-the-picture-and-choose.mp3"],

            // G-3 lesson_19 U-563
            ['content' => "Listen and choose the words you hear", "game_id" => 597, 'audio' =>  $Instructions . "Listen-and-choose-the-words-you-say" . ".mp3"],

            // G-3 lesson_19 U-564
            // ['content' => "Look at the pictures and speak", 'game_id' => 598, 'audio' =>  $Instructions . "Look-at-the-pictures-and-speak" . ".mp3"],


            // G-3 lesson_20 U-565
            ['content' => "Listen and Repeat", 'game_id' => 600, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-3 lesson_20 U-566
            ['content' => "Look at the picture Read and Say", 'game_id' => 601, 'audio' => $Instructions . "Look-at-the-picture-Read-and-Say.mp3"],

            // G-3 lesson_20 U-567
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 602, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-3 lesson_20 U-568
            ['content' => "Listen and choose the correct answer", 'game_id' => 603, 'audio' =>  $Instructions . "Listen-and-choose-the-correct" . ".mp3"],

            // G-1 lesson_20 U-569
            ['content' => "Answer the question", 'game_id' => 604, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            // G-1 lesson_20 U-571
            ['content' => "Imagine a town and write five things It has.", 'game_id' => 606, 'audio' =>  $Instructions . "Imagine-a-town-and-write-five" . ".mp3"],





            // Grade 3
            /////////// 21 //////////////////// psn3

            ['content' => "Listen and Say", 'game_id' => 608, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            ['content' => "Write the words in the blanks", 'game_id' => 609, 'audio' => $Instructions . "Write-the-words-in-the-blanks" . ".mp3"],

            ['content' => "Answer the question", 'game_id' => 610, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            ['content' => "Write the words in the blanks", 'game_id' => 609, 'audio' => $Instructions . "Write-the-words-in-the-blanks" . ".mp3"],

            ['content' => "Listen and choose the correct picture.", 'game_id' => 611, 'audio' => $Instructions . "Listen-and-choose-the-correct-pic.mp3"],


            /////////// L22 ////////////

            ['content' => "Listen and Say", 'game_id' => 614, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            ['content' => "Look at the pictures and write the word", 'game_id' => 615, 'audio' =>  $Instructions . "Look-at-the-pictures-and-write-the-word" . ".mp3"],

            ['content' => "Look at the picture and answer the question", 'game_id' => 616, 'audio' =>  $Instructions . "Look-at-the-picture-and-answer-the-question" . ".mp3"],

            ['content' => "Listen and choose the correct picture.", 'game_id' => 617, 'audio' => $Instructions . "Listen-and-choose-the-correct-pic.mp3"],

            ['content' => "Read and write Yes or No", 'game_id' => 619, 'audio' =>  $Instructions . "Read-and-write-Yes-or-No" . ".mp3"],

            ['content' => "Write about what you do in school?", 'game_id' => 620, 'audio' =>  $Instructions . "Write-about-what-you-do-in-school" . ".mp3"],



            /////////// L23 ////////////

            ['content' => "Listen and say the words", 'game_id' => 622, 'audio' =>  $Instructions . "Listen-and-say-the-words" . ".mp3"],

            ['content' => "Look at the pictures and complete the sentences", 'game_id' => 623, 'audio' => $Instructions . "Look-at-the-pictures-and-compl.mp3"],

            // G-3 lesson 23 U-587
            ['content' => "Listen and choose the correct picture.", 'game_id' => 625, 'audio' => $Instructions . "Listen-and-choose-the-correct-pic.mp3"],


            //////////// L24 ////////////

            ['content' => "Listen and Say", 'game_id' => 628, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            ['content' => "Answer the question", 'game_id' => 629, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            [
                'content' => "Listen and match the activities with the days", 'game_id' => 631,
                'audio' =>  $Instructions . "Listen-and-match-the-activities-with-the-days" . ".mp3"
            ],

            [
                'content' => "Read the blog. Write Sam’s diary.", 'game_id' => 633,
                'audio' =>  $Instructions . "Read-the-blog-Write-Sams-diary" . ".mp3"
            ],

            ['content' => "Write what do you do in a week?", 'game_id' => 634, 'audio' =>  $Instructions . "Write-what-do-you-do-in-a-week" . ".mp3"],


            //////////// L25 ////////////

            ['content' => "Listen and Say", 'game_id' => 636, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            ['content' => "Look at the pictures and answer the question", 'game_id' => 637, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],

            ['content' => "What can you do?", 'game_id' => 638, 'audio' =>  $Instructions . "What-can-you-do" . ".mp3"],

            ['content' => "Prepare to speak", 'game_id' => 640, 'audio' =>  $Instructions . "Prepare-to-speak" . ".mp3"],


            /////////// L26 ///////////

            ['content' => "Listen and Say", 'game_id' => 642, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            [
                'content' => "Look at the pictures and write in the blanks", 'game_id' => 643,
                'audio' =>  $Instructions . "Look-at-the-pictures-and-write-in-the-blanks" . ".mp3"
            ],

            ['content' => "Look at the clocks and write the time", 'game_id' => 644, 'audio' => $Instructions . "Look-at-the-clocks-and-write-the-time.mp3"],

            [
                'content' => "Listen and choose the correct time", 'game_id' => 645,
                'audio' => $Instructions . "Listen-and-choose-the-correct-time.mp3"
            ],

            [
                'content' => "Write about your daily routine", 'game_id' => 648,
                'audio' => $Instructions . "Write-about-your-daily-routine.mp3"
            ],

            ['content' => "Prepare to speak", 'game_id' => 649, 'audio' =>  $Instructions . "Prepare-to-speak" . ".mp3"],



            /////////// L27 ///////////

            ['content' => "Listen and Say", 'game_id' => 651, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            [
                'content' => "Listen and choose the correct time", 'game_id' => 653,
                'audio' => $Instructions . "Listen-and-choose-the-correct-time.mp3"
            ],

            ['content' => "Prepare to speak", 'game_id' => 655, 'audio' =>  $Instructions . "Prepare-to-speak" . ".mp3"],



            ///////// L28 ///////////

            ['content' => "Listen and Say", 'game_id' => 657, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            ['content' => "Look at the pictures and answer the question", 'game_id' => 658, 'audio' =>  $Instructions . "Look-at-the-pictures-and-answe" . ".mp3"],


            // G-3 Lesson 28 U-619
            ['content' => "Listen and choose the correct picture.", 'game_id' => 659, 'audio' => $Instructions . "Listen-and-choose-the-correct-pic.mp3"],


            // G-3 lesson_28 U-621
            ['content' => "Read and write Yes or No", 'game_id' => 661, 'audio' =>  $Instructions . "Read-and-write-Yes-or-No" . ".mp3"],


            ['content' => "Prepare to speak", 'game_id' => 663, 'audio' =>  $Instructions . "Prepare-to-speak" . ".mp3"],



            /////////// L29 ////////////

            ['content' => "Listen and Say", 'game_id' => 665, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            // ['content' => "Look at the pictures and choice the words", 'game_id' => 666,
            // 'audio' =>  $Instructions . "Look at the pictures and choice the words" . ".mp3"],

            // ['content' => "Listen and complete the sentences", 'game_id' => 667,
            // 'audio' =>  $Instructions . "Listen-and-complete-the-sentences" . ".mp3"],

            // ['content' => "Listen and choose", 'game_id' => 667,'audio' =>  $Instructions . "Listen and choose" . ".mp3"],

            ['content' => "Prepare to speak", 'game_id' => 670, 'audio' =>  $Instructions . "Prepare-to-speak" . ".mp3"],





            ////////// L30 /////////////

            ['content' => "Listen and Say", 'game_id' => 672, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            ['content' => "Look at the pictures and write the word", 'game_id' => 673, 'audio' =>  $Instructions . "Look-at-the-pictures-and-write-the-word" . ".mp3"],

            ['content' => "Look at the picture and answer the question", 'game_id' => 674, 'audio' =>  $Instructions . "Look-at-the-picture-and-answer-the-question" . ".mp3"],

            ['content' => "Listen and choose the correct answer", 'game_id' => 675, 'audio' =>  $Instructions . "Listen-and-choose-the-correct" . ".mp3"],

            ['content' => "Read and write Yes or No", 'game_id' => 677, 'audio' =>  $Instructions . "Read-and-write-Yes-or-No" . ".mp3"],

            ['content' => "Write about your birthday", 'game_id' => 678, 'audio' =>  $Instructions . "Write-about-your-birthday" . ".mp3"],

            ['content' => "Prepare to speak", 'game_id' => 679, 'audio' =>  $Instructions . "Prepare-to-speak" . ".mp3"],



            /////////// L31 ////////////

            ['content' => "Listen and Say", 'game_id' => 681, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            ['content' => "Look at the picture and answer the question", 'game_id' => 682, 'audio' =>  $Instructions . "Look-at-the-picture-and-answer-the-question" . ".mp3"],

            ['content' => "Look at the pictures and complete the sentences", 'game_id' => 683, 'audio' => $Instructions . "Look-at-the-pictures-and-compl.mp3"],

            // ['content' => "Listen and Choice", 'game_id' => 684, 'audio' => $Instructions ."Listen and Choice.mp3"],

            ['content' => "Prepare to speak", 'game_id' => 686, 'audio' => $Instructions . "Prepare-to-speak.mp3"],


            ////////////// L32 /////////////

            ['content' => "Listen and Say", 'game_id' => 688, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 689, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            ['content' => "Look at the pictures and complete the sentences", 'game_id' => 690, 'audio' => $Instructions . "Look-at-the-pictures-and-compl.mp3"],

            // ['content' => "Listen and Choice", 'game_id' => 691, 'audio' =>  $Instructions . "Listen and Choice" . ".mp3"],

            ['content' => "Read and write Yes or No", 'game_id' => 693, 'audio' =>  $Instructions . "Read-and-write-Yes-or-No" . ".mp3"],

            ['content' => "Answer the question", 'game_id' => 694, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            ['content' => "Prepare to speak", 'game_id' => 695, 'audio' =>  $Instructions . "Prepare-to-speak" . ".mp3"],



            ////////////// L33 /////////////

            ['content' => "Listen and Say", 'game_id' => 697, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            // ['content' => "Write the opposite word", 'game_id' => 698, 'audio' =>  $Instructions . "Write the opposite word" . ".mp3"],

            // ['content' => "Unscramble the questions", 'game_id' => 699, 'audio' =>  $Instructions . "WUnscramble the questions" . ".mp3"],

            // ['content' => "Listen and Choice", 'game_id' => 700, 'audio' =>  $Instructions . "Listen and Choice" . ".mp3"],


            ['content' => "Prepare to speak", 'game_id' => 702, 'audio' =>  $Instructions . "Prepare-to-speak" . ".mp3"],


            ////////////// L34 /////////////

            ['content' => "Listen and Say", 'game_id' => 704, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            ['content' => "Look at the pictures and write the word", 'game_id' => 705, 'audio' =>  $Instructions . "Look-at-the-pictures-and-write-the-word" . ".mp3"],

            ['content' => "Look at the picture and answer the questions", 'game_id' => 706, 'audio' =>  $Instructions . "Look-at-the-picture-and-answer-the-question" . ".mp3"],

            // ['content' => "Listen and Choice", 'game_id' => 707, 'audio' =>  $Instructions . "Listen and Choice" . ".mp3"],

            ['content' => "Read and write Yes or No", 'game_id' => 709, 'audio' =>  $Instructions . "Read-and-write-Yes-or-No" . ".mp3"],

            [
                'content' => "Write about your vacation at the beach", 'game_id' => 710,
                'audio' =>  $Instructions . "Write-about-your-vacation-at-the-beach" . ".mp3"
            ],

            ['content' => "Prepare to speak", 'game_id' => 711, 'audio' =>  $Instructions . "Prepare-to-speak" . ".mp3"],


            ////////////// L35 /////////////

            ['content' => "Listen and Say", 'game_id' => 713, 'audio' =>  $Instructions . "Listen-and-say" . ".mp3"],

            ['content' => "Answer the question", 'game_id' => 714, 'audio' =>  $Instructions . "Answer-the-question" . ".mp3"],

            ['content' => "Look at the pictures and choose the right answer", 'game_id' => 715, 'audio' =>  $Instructions . "look-at-the-pictures-and-choos" . ".mp3"],

            ['content' => "Listen to the conversation and choose the right answer.", 'game_id' => 716, 'audio' => $Instructions . "SubBlock_Listen-to-the-conversation-and.mp3"],

            ['content' => "Prepare to speak", 'game_id' => 718, 'audio' =>  $Instructions . "Prepare-to-speak" . ".mp3"],








            //////////////////////////////////
            ///////       Grade 4      ///////
            //////////////////////////////////

            // G-4 lesson_1 U-717
            ['content' => "Listen and Repeat", 'game_id' => 758, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-4 lesson_1 U-718
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 759, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-4 lesson_1 U-719
            ['content' => "Choose the suitable pronoun for the given picture", 'game_id' => 760, 'audio' =>  $Instructions . "Choose-the-suitable-pronouns-f" . ".mp3"],

            // G-4 lesson_1 U-720
            ['content' => "Read Listen and repeat after it.", 'game_id' => 761, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-4 lesson_1 U-723
            ['content' => "Listen to the audio and answer the question", 'game_id' => 764, 'audio' => $Instructions . "Listen-to-the-audio-and-answer.mp3"],

            // G-4 lesson_1 U-725
            ['content' => "After you write 20 words, click submit to appear sample writing.", 'game_id' => 766, 'audio' => $Instructions . "After-you-write-20-words-clic.mp3"],


            // G-4 lesson_2 U-727
            ['content' => "Listen and Repeat", 'game_id' => 768, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-4 lesson_2 U-728
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 769, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-4 lesson_2 U-729
            ['content' => "Choose the suitable pronoun for the given picture", 'game_id' => 770, 'audio' =>  $Instructions . "Choose-the-suitable-pronouns-f" . ".mp3"],

            // G-4 lesson_2 U-729
            ['content' => "Choose the correct verb “has or have” for the given pronoun", 'game_id' => 771, 'audio' =>  $Instructions . "Choose-the-correct-verb-has-o" . ".mp3"],

            // G-4 lesson_2 U-730
            ['content' => "Read Listen and repeat after it.", 'game_id' => 772, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-4 lesson_2 U-732
            ['content' => "Listen and repeat. Match the pictures with the description", 'game_id' => 774, 'audio' =>  $Instructions . "Listen-and-repeat-Match-the-p" . ".mp3"],


            // G-4 lesson_3 U-736
            ['content' => "Listen and Repeat", 'game_id' => 778, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-4 lesson_3 U-737
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 779, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-4 lesson_3 U-738
            ['content' => "Choose the suitable pronoun for the given picture", 'game_id' => 780, 'audio' =>  $Instructions . "Choose-the-suitable-pronouns-f" . ".mp3"],

            // G-4 lesson_3 U-438
            ['content' => "Complete the sentences", 'game_id' => 781, 'audio' => $Instructions . "Complete-the-sentences.mp3"],

            // G-4 lesson_3 U-739
            ['content' => "Read Listen and repeat after it.", 'game_id' => 782, 'audio' =>  $Instructions . "Read-Listen-and-repeat-after" . ".mp3"],

            // G-4 lesson_3 U-740
            ['content' => "Choose the correct answer", 'game_id' => 783, 'audio' =>  $Instructions . "Choose-the-correct-answer" . ".mp3"],

            // G-4 lesson_3 U-741
            ['content' => "Listen and repeat. Match the pictures with the description", 'game_id' => 784, 'audio' =>  $Instructions . "Listen-and-repeat-Match-the-p" . ".mp3"],


            // G-4 lesson_4 U-746
            ['content' => "Listen and Repeat", 'game_id' => 789, 'audio' => $Instructions . "Read-the-following-letters-and.mp3"],

            // G-4 lesson_4 U-747
            ['content' => "Read the following letters and label the children in the picture.", 'game_id' => 790, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            // G-4 lesson_4 U-749
            ['content' => "Listen and repeat. Match the pictures with the description", 'game_id' => 791, 'audio' =>  $Instructions . "Listen-and-repeat-Match-the-p" . ".mp3"],


            // G-4 lesson_5 U-752
            ['content' => "Listen and Repeat", 'game_id' => 795, 'audio' => $Instructions . "Read-the-following-letters-and.mp3"],

            // G-4 lesson_5 U-752
            ['content' => "Listen and Repeat", 'game_id' => 796, 'audio' => $Instructions . "Read-the-following-letters-and.mp3"],

            // G-4 lesson_5 U-753
            ['content' => "Look at the pictures and rearrange the letter", 'game_id' => 797, 'audio' => $Instructions . "Look-at-the-pictures-and-rearr.mp3"],

            // G-4 lesson_5 U-754
            ['content' => "Choose the right word for the given picture", 'game_id' => 798, 'audio' => $Instructions . "SubBlock_Choose-the-right-words-for-the.mp3"],

            // G-4 lesson_5 U-754
            ['content' => "Choose the right verb for the following picture", 'game_id' => 799, 'audio' => $Instructions . "SubBlock_Choose-the-right-verbs-for-the.mp3"],

            // G-4 lesson_5 U-756
            ['content' => "Listen and choose the correct picture", 'game_id' => 801, 'audio' => $Instructions . "Listen-and-choose-the-correct-pic.mp3"],




            // G-4 lesson_10
            ['content' => "Repeat the following words after the speaker", 'game_id' => 836, 'audio' => $Instructions . "Repeat-the-following-words-aft.mp3"],

            ['content' => "Look at the weather forecast. Choose if the sentence is true or false.", 'game_id' => 837, 'audio' => $Instructions . "SubBlock_Look-at-the-weather-forecast.mp3"],

            ['content' => "Choose the right option for the given words.", 'game_id' => 838, 'audio' => $Instructions . "SubBlock_Choose-the-right-option-for-th.mp3"],

            ['content' => "Listen and choose the right answer for the given blank. Check all the right answers.", 'game_id' => 840, 'audio' => $Instructions . "SubBlock_Listen-and-choose-the-right-an.mp3"],

            ['content' => "Read the passage and answer the following questions.", 'game_id' => 841, 'audio' => $Instructions . "SubBlock_Read-the-passage-and-answer-th.mp3"],

            ['content' => "Forecast the weather for next week and write sentences. Use “will be …”", 'game_id' => 843, 'audio' => $Instructions . "SubBlock_Forecast-the-weather-for-next.mp3"],



            // G-4 lesson_11
            ['content' => "Listen and Repeat", 'game_id' => 845, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Unscramble the following words.", 'game_id' => 846, 'audio' => $Instructions . "SubBlock_Unscramble-the-following-words.mp3"],

            ['content' => "Which month comes next?", 'game_id' => 847, 'audio' => $Instructions . "SubBlock_Which-month-comes-next.mp3"],

            ['content' => "Listen to the audio and select the right word.", 'game_id' => 849, 'audio' => $Instructions . "SubBlock_Listen-to-the-audio-and-select.mp3"],



            // G-4 lesson_12
            ['content' => "Listen and Repeat", 'game_id' => 852, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Match the picture and the words.", 'game_id' => 853, 'audio' => $Instructions . "Match-the-picture-and-the-word.mp3"],

            ['content' => "What happens in each season? Match them.", 'game_id' => 854, 'audio' => $Instructions . "SubBlock_What-happens-in-each-season-M.mp3"],

            ['content' => "Listen and choose the right answer from the options.", 'game_id' => 856, 'audio' => $Instructions . "Listen-and-choose-the-right-an-from-option.mp3"],

            ['content' => "Read the passage and answer the following questions.", 'game_id' => 857, 'audio' => $Instructions . "SubBlock_Read-the-passage-and-answer-th.mp3"],

            ['content' => "Write about your favorite season. Use the prompts below. ", 'game_id' => 859, 'audio' => $Instructions . "SubBlock_Write-about-your-favorite-seas.mp3"],



            // G-4 lesson_13
            ['content' => "Listen and Repeat", 'game_id' => 861, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Match the words and the numbers.", 'game_id' => 862, 'audio' => $Instructions . "SubBlock_Match-the-words-and-the-number.mp3"],

            ['content' => "Read the passage and answer the following questions.", 'game_id' => 864, 'audio' => $Instructions . "SubBlock_Read-the-passage-and-answer-th.mp3"],

            ['content' => "Fill out the following sentences with the correct ordinal number.", 'game_id' => 865, 'audio' => $Instructions . "SubBlock_Fill-out-the-following-sentenc.mp3"],



            // G-4 lesson_14
            ['content' => "Listen and Repeat", 'game_id' => 868, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Match the words and the numbers.", 'game_id' => 869, 'audio' => $Instructions . "SubBlock_Match-the-words-and-the-number.mp3"],

            ['content' => "Read the passage and answer the following questions.", 'game_id' => 871, 'audio' => $Instructions . "SubBlock_Read-the-passage-and-answer-th.mp3"],



            // G-4 lesson_15
            ['content' => "Listen and Repeat", 'game_id' => 874, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 875, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Match the words and the numbers.", 'game_id' => 876, 'audio' => $Instructions . "SubBlock_Match-the-words-and-the-number.mp3"],

            ['content' => "Listen to the audio. Match the description with the festivals.", 'game_id' => 877, 'audio' => $Instructions . "SubBlock_Listen-to-the-audio-Match-the.mp3"],

            ['content' => "Read the passage and answer the following questions.", 'game_id' => 879, 'audio' => $Instructions . "SubBlock_Read-the-passage-and-answer-th.mp3"],

            ['content' => "Write about your favorite festivals.", 'game_id' => 880, 'audio' => $Instructions . "SubBlock_Write-about-your-favorite-fest.mp3"],




            // G-4 lesson_16
            ['content' => "Listen and Repeat", 'game_id' => 883, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Match the words and the numbers.", 'game_id' => 884, 'audio' => $Instructions . "SubBlock_Match-the-words-and-the-number.mp3"],

            ['content' => "Listen to the audio. Match the description with the festivals.", 'game_id' => 885, 'audio' => $Instructions . "SubBlock_Listen-to-the-audio-Match-the.mp3"],



            // G-4 lesson_17
            ['content' => "Listen and Repeat", 'game_id' => 889, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "At the shop", 'game_id' => 890, 'audio' => $Instructions . "SubBlock_At-the-shop.mp3"],

            ['content' => "Match the words and the numbers.", 'game_id' => 891, 'audio' => $Instructions . "SubBlock_Match-the-words-and-the-number.mp3"],

            ['content' => "Listen to the audio and choose the right answer.", 'game_id' => 893, 'audio' => $Instructions . "SubBlock_Listen-to-the-audio-and-choose.mp3"],



            // G-4 lesson_18
            ['content' => "Listen and Repeat", 'game_id' => 896, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 897, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Choose the right option. Decide where we can buy these items at?", 'game_id' => 898, 'audio' => $Instructions . "SubBlock_Choose-the-right-option-Decid.mp3"],

            ['content' => "Listen to the audio and choose the right answer.", 'game_id' => 900, 'audio' => $Instructions . "SubBlock_Listen-to-the-audio-and-choose.mp3"],

            ['content' => "Going Shopping", 'game_id' => 901, 'audio' => $Instructions . "SubBlock_Going-Shopping.mp3"],




            // G-4 lesson_19
            ['content' => "Listen and Repeat", 'game_id' => 905, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 906, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Choose the right option. Decide where we can buy these items at?", 'game_id' => 907, 'audio' => $Instructions . "SubBlock_Choose-the-right-option-Decid.mp3"],

            ['content' => "Please decide who says the following dialogue.", 'game_id' => 908, 'audio' => $Instructions . "SubBlock_Please-decide-who-says-the-fol.mp3"],

            ['content' => "Listen to the audio and choose the right answer.", 'game_id' => 910, 'audio' => $Instructions . "SubBlock_Listen-to-the-audio-and-choose.mp3"],

            ['content' => "Answer the questions below. Choose the right answer.", 'game_id' => 911, 'audio' => $Instructions . "SubBlock_Answer-the-questions-below-Ch.mp3"],



            // G-4 lesson_20
            ['content' => "Listen and Repeat", 'game_id' => 914, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen and repeat the following conversation.", 'game_id' => 915, 'audio' => $Instructions . "SubBlock_Listen-and-repeat-the-followin.mp3"],

            ['content' => "Choose the right option for the given words.", 'game_id' => 916, 'audio' => $Instructions . "SubBlock_Choose-the-right-option-for-th.mp3"],

            ['content' => "Listen to the audio and choose the right answer.", 'game_id' => 918, 'audio' => $Instructions . "SubBlock_Listen-to-the-audio-and-choose.mp3"],

            ['content' => "Write about your last shopping experience.", 'game_id' => 920, 'audio' => $Instructions . "SubBlock_Write-about-your-last-shopping.mp3"],




            // G-4 lesson_21
            ['content' => "Listen and Repeat", 'game_id' => 922, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Unscramble the following words.", 'game_id' => 923, 'audio' => $Instructions . "SubBlock_Unscramble-the-following-words.mp3"],

            ['content' => "Match the words and the numbers.", 'game_id' => 924, 'audio' => $Instructions . "SubBlock_Match-the-words-and-the-number.mp3"],

            ['content' => "Listen to the audio and choose the right answer.", 'game_id' => 926, 'audio' => $Instructions . "SubBlock_Listen-to-the-audio-and-choose.mp3"],

            ['content' => "Write about your neighbourhood. Which places are located to the north, east, south, west of your house? Use the prompts.", 'game_id' => 928, 'audio' => $Instructions . "SubBlock_Write-about-your-neighbourhood.mp3"],




            // G-4 lesson_22
            ['content' => "Listen and Repeat", 'game_id' => 930, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 931, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Unscramble the following words.", 'game_id' => 932, 'audio' => $Instructions . "SubBlock_Unscramble-the-following-words.mp3"],

            ['content' => "Look at the map of the country and choose the right currency of the country.", 'game_id' => 933, 'audio' => $Instructions . "SubBlock_Look-at-the-map-of-the-country.mp3"],

            ['content' => "Max will talk about his last vacation in Southeast Asia countries. Listen to the audio and choose the right answer.", 'game_id' => 935, 'audio' => $Instructions . "SubBlock_Max-will-talk-about-his-last-v.mp3"],

            ['content' => "Read the passage and answer the following questions.", 'game_id' => 936, 'audio' => $Instructions . "SubBlock_Read-the-passage-and-answer-th.mp3"],




            // G-4 lesson_23
            ['content' => "Listen and Repeat", 'game_id' => 939, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 940, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Look at the map of the country and choose the right option.", 'game_id' => 941, 'audio' => $Instructions . "SubBlock_Look-at-the-map-of-the-country.mp3"],

            ['content' => "Ben is from Thailand. He is going to talk about his country. Listen and choose the right options.", 'game_id' => 943, 'audio' => $Instructions . "SubBlock_Ben-is-from-Thailand-He-is-go.mp3"],



            // G-4 lesson_24
            ['content' => "Listen and Repeat", 'game_id' => 945, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 946, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Look at the map of the country and choose the right currency of the country.", 'game_id' => 947, 'audio' => $Instructions . "SubBlock_Look-at-the-map-of-the-country.mp3"],

            ['content' => "Listen to the audio and choose the right answer.", 'game_id' => 949, 'audio' => $Instructions . "SubBlock_Listen-to-the-audio-and-choose.mp3"],

            ['content' => "Read the passage and answer the following questions.", 'game_id' => 950, 'audio' => $Instructions . "SubBlock_Read-the-passage-and-answer-th.mp3"],



            // G-4 lesson_25
            ['content' => "Listen and Repeat", 'game_id' => 953, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 954, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Unscramble the following words.", 'game_id' => 955, 'audio' => $Instructions . "SubBlock_Unscramble-the-following-words.mp3"],

            ['content' => "Match the words and the pictures.", 'game_id' => 956, 'audio' => $Instructions . "SubBlock_Match-the-words-and-the-pictur.mp3"],

            ['content' => "Listen to the audio and match the name and the pictures together.", 'game_id' => 958, 'audio' => $Instructions . "SubBlock_Listen-to-the-audio-and-match-together.mp3"],

            ['content' => "Look at the pictures below. Describe what are they wearing.", 'game_id' => 960, 'audio' => $Instructions . "SubBlock_Look-at-the-pictures-below-De.mp3"],



            // G-4 lesson_38
            ['content' => "Listen and Repeat", 'game_id' => 1047, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen and match the plan with the name.", 'game_id' => 1049, 'audio' => $Instructions . "SubBlock_Listen-and-match-the-plan-with.mp3"],

            ['content' => "Read the passage and answer the following questions.", 'game_id' => 1050, 'audio' => $Instructions . "SubBlock_Read-the-passage-and-answer-th.mp3"],



            // G-4 lesson_39
            ['content' => "Listen and Repeat", 'game_id' => 1053, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen and Repeat", 'game_id' => 1054, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Listen to the dialogue and choose the right answers.", 'game_id' => 1056, 'audio' => $Instructions . "SubBlock_Listen-to-the-dialogue-and-cho.mp3"],



            // G-4 lesson_40
            ['content' => "Listen and Repeat", 'game_id' => 1058, 'audio' => $Instructions . "Listen-and-Repeat.mp3"],

            ['content' => "Choose the right word for the given picture", 'game_id' => 1059, 'audio' => $Instructions . "SubBlock_Choose-the-right-words-for-the.mp3"],

            ['content' => "Read the passage and answer the following questions.", 'game_id' => 1061, 'audio' => $Instructions . "SubBlock_Read-the-passage-and-answer-th.mp3"],

            ['content' => "Write your plan for your birthday party. Use the notes.", 'game_id' => 1063, 'audio' => $Instructions . "SubBlock_Write-your-plan-for-your-birthgit .mp3"],

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
        //         'game_id' => 135,
        //         'audio' =>  $Instructions . "Listen-to-the-audio-and-choose-the-right-picture" . ".mp3"
        //     ],
        // ]);















    }
}