<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnsNQueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $domain = app('domain');

        $ImageDomain = $domain . "/storage/images/";
        $AudioDomain = $domain . "/storage/audios/";
        $AtoZAudio = $domain . "/storage/audios/AtoZ/";
        $ImageDomainAZ = $domain . "/storage/images/AtoZ/";
        $ImageDomainAZ_small = $domain . "/storage/images/AtoZ_Small/";
        $prefix = "SubBlock_";


        // $domainAndAudioPath = $domain."/storage/AtoZ/";
        $prefix = "SubBlock_";
        $AtoZ = range('A', 'Z');




        ////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 1 ( no round )
        ////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 1, 'a_content' => 'mC7cPT2F23E', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 1, 'a_content' => 'mC7cPT2F23E (Global)', 'isLocal' => 0]);


        ////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 2 ( no round )
        ////////////////////////////////////////////////////

        $AZ = range("A", "Z");
        foreach ($AZ as $key) {
            DB::table('ans_n_ques')->insert([
                ['game_id' => 2, 'a_content' => $key, 'a_image' => $ImageDomainAZ . $key . ".png", 'a_audio' => $AtoZAudio . $prefix . $key . ".mp3"],
            ]);
        }


        ////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 3 ( no round )
        ////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 3, 'a_content' => 'b_gBZ-tfAJ4', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 3, 'a_content' => 'b_gBZ-tfAJ4(Global)', 'isLocal' => 0]);



        ///////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 4 ( listen and practice )
        ///////////////////////////////////////////////////////

        $G1_L1_U4_path = "Grade_1/" . "Lesson_1/" . "listen_practice/";
        $G1_l1_U4_rounds = [

            ['D', 'k', 'f', 'e', 'W', 'j', 'G'],
            ['E', 'K', 'H', 'M', 'T', 'M', 'L'],
            ['R', 'M', 'H', 'W', 'O', 'A', 'Y'],
            ['S', 'B', 'M', 'F', 'I', 'D', 'Z'],
            ['W', 'g', 'y', 'e', 'I', 'T', 'f'],
            ['N', 'M', 'r', 'e', 'm', 'Y', 'A'],
            ['g', 'u', 'y', 'F', 'c', 'I', 'J'],
            ['D', 'k', 'f', 'A', 'W', 'E', 'G'],
            ['y', 'B', 'S', 'F', 'e', 'I', 'Z'],
            ['e', 'K', 'S', 'M', 'T', 'M', 'p'],

        ];

        $conver = [

            "What's your name?",
            "My name's Mary.",
            "How are you?",
            "I'm fine.",
            "It's a bag.",
            "My name's Yuki.",
            "I'm from Japan.",
            "Apples are red.",
            "I'm Susan.",
            "My name's Tom.",

        ];

        $audios = [

            "Whats_your_name", "My_names_Mary", "How_are_you", "Im_fine", "Its_a_bag", "My-names-Yuki", "Im-from-Japan", "Apples-are-red", "Im-Susan", "My-names-Tom",

        ];

        $answers = ['W', 'M M', 'H', 'I', 'I', 'M Y', 'I J', 'A', 'I S', 'M T'];
        $index = 0;
        for ($i = 0; $i < count($G1_l1_U4_rounds); $i++) {

            foreach ($G1_l1_U4_rounds[$i] as  $element) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 4, 'q_content' => $element],
                ]);
            }

            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 4, 'q_audio' => $AudioDomain . $G1_L1_U4_path . $audios[$index] . ".mp3", 'a_content' => $answers[$index], 'q_conver' => $conver[$index]],
            ]);
            $index++;
        }





        ///////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 5 ( drag and drop )
        ///////////////////////////////////////////////////////

        $g1_l1_g5_rs = [
            ['B', 'U', 'Z', 'O', 'E', 'R'],
            ['P', 'Y', 'K', 'C', 'H', 'N'],
            ['Q', 'T', 'L', 'G', 'D', 'W']
        ];

        for ($i = 0; $i < count($g1_l1_g5_rs); $i++) {

            for ($j = 0; $j < count($AtoZ); $j++) {
                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 5,
                        'q_content' => $AtoZ[$j],
                        'a_content' => in_array($AtoZ[$j], $g1_l1_g5_rs[$i]) ? 1 : 0,
                    ],
                ]);
            }
        }



        ///////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 7 ( no round )
        ///////////////////////////////////////////////////////

        $az = range("a", "z");
        foreach ($az as $key) {
            DB::table('ans_n_ques')->insert([
                ['game_id' => 7, 'a_content' => $key, 'a_image' => $ImageDomainAZ_small . $key . ".png", 'a_audio' => $AtoZAudio . $prefix . $key . ".mp3"],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 2 Game 9 ( listen and practice )
        ////////////////////////////////////////////////////////

        $G1_l2_U9_rounds = [
            ['D', 'z', 'h', 'e', 'a', 'f', 'e', 'I'],
            ['h', 'z', 'g', 'v', 'a', 'o', 'x', 'P'],
            ['i', 'z', 'g', 'y', 's', 'o', 'x', 'P'],
            ['i', 't', 'c', 'n', 'm', 'r', 'I', 'e'],
        ];

        for ($i = 0; $i < count($G1_l2_U9_rounds); $i++) {
            foreach ($G1_l2_U9_rounds[$i] as $j => $word) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 9, 'q_content' => $word, 'q_audio' => $AtoZAudio . $prefix . strtoupper($word) . ".mp3"],
                ]);
            }
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 2 Game 11 ( drag and drop )
        ////////////////////////////////////////////////////////

        $g1_l2_g11 = [

            ['z', 'y', 'l', 'j', 's', 'i'],
            ['v', 's', 't', 'y', 'o', 'f'],
            ['u', 'b', 'g', 'h', 'r', 'c'],
            ['o', 'p', 'm', 'q', 'a', 'g'],
            ['k', 'w', 'c', 'x', 'p', 'v']
        ];

        for ($i = 0; $i < count($g1_l2_g11); $i++) {

            for ($j = 0; $j < count($AtoZ); $j++) {
                DB::table('ans_n_ques')->insert([

                    [
                        'round' => $i + 1,
                        'game_id' => 11,
                        'q_content' => $AtoZ[$j],
                        'a_content' => in_array($AtoZ[$j], $g1_l2_g11[$i]) ? 1 : 0,
                    ],
                ]);
            }
        }




        //////////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 3 Game 13 ( read_listen_and_practice )
        //////////////////////////////////////////////////////////////

        $G1_L3_read_listen_and_practice_path = "Grade_1/" . "Lesson_3/" . "read_listen_and_practice/";
        $converG13 = [

            [
                ["I'm Susan.", "Nice to meet you."],
                ["Hello, I'm Mary.", "Nice to meet you."],
            ],
            [
                ["Hello, I'm Tom.", "Nice to meet you."],
                ["Hello, I'm Mary.", "Nice to meet you."],
            ]

        ];

        $audiosG13 = [

            ["Hello-Im-Susan-Nice-to-meet", "Hello-Im-Mary-Nice-to-meet"],
            ["Hello-Im-Tom-Nice-to-meet-y", "Hello-Im-Jerry-Nice-to-meet"]

        ];

        $G13Row = 0;
        foreach ($converG13 as $group) {
            $G13Col = 0;

            foreach ($group as $g) {

                foreach ($g as $sentence) {

                    DB::table('ans_n_ques')->insert([
                        ['round' => $G13Row + 1, 'game_id' => 13, 'a_conver' => $sentence],
                    ]);
                }

                DB::table('ans_n_ques')->insert([
                    ['round' => $G13Row + 1, 'game_id' => 13, 'a_audio' => $AudioDomain . $G1_L3_read_listen_and_practice_path . $audiosG13[$G13Row][$G13Col] . ".mp3"],
                ]);

                $G13Col++;
            }
            $G13Row++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1 Lesson 3 Game 14 ( listen_and_practice )
        ////////////////////////////////////////////////////////

        $G1_L3_listen_and_practice_path = "Grade_1/" . "Lesson_4/" . "listen_and_practice/";

        // round 1 + 2

        $converG15 = [
            [
                "Hello, I'm Mary.",
                "Hello, I'm Mike.",

                "Hello, I'm Chris.",
                "Hello, I'm Susan.",
            ],

            [
                "Nice to meet you.",
                "Nice to meet you.",
                "Nice to meet you.",
                "Nice to meet you."
            ]
        ];

        $audiosG15 = [
            [
                "Hello-Im-Mary",
                "Hello-Im-Mike",
                "Hello-Im-Chris",
                "Hello-Im-Susan",
            ],

            [
                "Nice-to-meet-you-W",
                "Nice-to-meet-you-M",
                "Nice-to-meet-you-M",
                "Nice-to-meet-you-W"
            ]
        ];

        $G15Id = 1;

        for ($i = 0; $i < count($converG15); $i++) {

            for ($j = 0; $j < count($converG15[$i]); $j++) {

                DB::table('ans_n_ques')->insert([
                    ['round' => $G15Id, 'game_id' => 14, 'a_conver' => $converG15[$i][$j], 'a_audio' => $AudioDomain . $G1_L3_listen_and_practice_path . $audiosG15[$i][$j] . ".mp3"],
                ]);
                $G15Id++;
            }
        }


        // round 3 + 4 + 5
        $converG15R2 = [
            "Who is Mary?",
            "Who is Susan?",
            "Who is Mike?",
        ];

        $audiosG15R2 = [
            "Who-is-Mary",
            "Who-is-Susan",
            "Whos_Mike",
        ];

        $G15indexR2 = 0;
        foreach ($converG15R2 as $conv) {
            DB::table('ans_n_ques')->insert([
                ['round' => $G15indexR2 = 1, 'game_id' => 14, 'q_content' => $conv, 'q_audio' => $AudioDomain . $G1_L3_listen_and_practice_path . $audiosG15R2[$G15indexR2] . ".mp3"],
            ]);
            $G15indexR2++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 3 Game 15 ( Writing (Arrange Order) )
        ////////////////////////////////////////////////////////

        $G1_L3_writing_path = "Grade_1/" . "Lesson_3/" . "writing/";

        $qG16R1 = [
            ["To", "Meet", "Hello", "I'm", "Nice", "You", "Mary"],
            ["Meet", "Nice", "Mike", "To", "Hello", "You", "T'm"],
            ["I'm", "You", "Nice", "Meet", "Tom", "To", "Hello"],
        ];

        $audiosG16 = [
            "audio",
            "audio",
            "audio"
        ];

        $aG16R1 = [
            "Hello I'm Mary Nice To Meet You",
            "Hello I'm Mike Nice To Meet You",
            "Hello I'm Tom Nice To Meet You",
        ];

        $G16Index = 0;

        for ($i = 0; $i < count($qG16R1); $i++) {
            foreach ($qG16R1[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 15, 'q_content' => $j],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 15, 'a_content' => $aG16R1[$G16Index], 'a_audio' => $AudioDomain . $G1_L3_writing_path . $audiosG16[$G16Index] . ".mp3"],
            ]);
            $G16Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 3 Game 16 ( speaking )
        ////////////////////////////////////////////////////////

        $l3G16image = $domain . "/storage/images/lesson_3/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 16, 'q_image' => $l3G16image . "orange star image", "q_content" => "Hello, I'm ___ . Nice to meet you."],
            ['round' => 2, 'game_id' => 16, 'q_image' => $l3G16image . "green star image", "q_content" => "Hi, I'm ___ . Nice to meet you."],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 4 Game 19 (  Read, Listen & Repeat )
        ////////////////////////////////////////////////////////

        $l4G19image = $domain . "/storage/images/lesson_4/Read_Listen_&_Repeat/";
        $G1_L3_Read_Listen_n_Repeat_path = "Grade_1/" . "Lesson_3/" . "Read_Listen_&_Repeat/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 19, 'q_image' => $l4G19image . "Bowie image", "q_audio" => $AudioDomain . $G1_L3_Read_Listen_n_Repeat_path . "bowie audio.mp3", "q_content" => "My name's Bowie."],
            ['round' => 2, 'game_id' => 19, 'q_image' => $l4G19image . "Kelly image", "q_audio" => $AudioDomain . $G1_L3_Read_Listen_n_Repeat_path . "kelly audio.mp3",  "q_content" => "My name's Kelly."],
            ['round' => 3, 'game_id' => 19, 'q_image' => $l4G19image . "Goldie image", "q_audio" => $AudioDomain . $G1_L3_Read_Listen_n_Repeat_path . "goldie audio.mp3",  "q_content" => "My name's Goldie."],
            ['round' => 4, 'game_id' => 19, 'q_image' => $l4G19image . "Blu image", "q_audio" => $AudioDomain . $G1_L3_Read_Listen_n_Repeat_path . "blu audio.mp3",  "q_content" => "My name's Blu."],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 4 Game 20 (  Listen and Practice )
        ////////////////////////////////////////////////////////

        $G1_L4_listen_and_practice_path = "Grade_1/" . "Lesson_4/" . "listen_and_practice/";

        // round 1 + 2

        $converG20 = [
            [
                "Hello, I'm Mary.",
                "Hello, I'm Mike.",

                "Hello, I'm Chris.",
                "Hello, I'm Susan.",
            ],

            [
                "Nice to meet you.",
                "Nice to meet you.",
                "Nice to meet you.",
                "Nice to meet you."
            ]
        ];

        $audiosG20 = [
            [
                "Hello-Im-Mary",
                "Hello-Im-Mike",
                "Hello-Im-Chris",
                "Hello-Im-Susan",
            ],

            [
                "Nice-to-meet-you-W",
                "Nice-to-meet-you-M",
                "Nice-to-meet-you-M",
                "Nice-to-meet-you-W"
            ]
        ];

        $G20Id = 1;

        for ($i = 0; $i < count($converG20); $i++) {

            for ($j = 0; $j < count($converG20[$i]); $j++) {

                DB::table('ans_n_ques')->insert([
                    ['round' => $G20Id, 'game_id' => 20, 'a_conver' => $converG20[$i][$j], 'a_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . $audiosG20[$i][$j] . ".mp3"],
                ]);
            }
            $G20Id++;
        }


        // round 3 + 4 + 5
        $l4G20image = $domain . "/storage/images/lesson_4/listen_and_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 20, 'q_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . "Who-is-Mary.mp3", 'q_content' =>  "Who is Mary?", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "Mary image", 'a_content' => 1],
            ['round' => 3, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "Susan image", 'a_content' => 0],

            ['round' => 4, 'game_id' => 20, 'q_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . "Who-is-Susan.mp3", 'q_content' =>  "Who is Susan?", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "Mary image", 'a_content' => 0],
            ['round' => 4, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "Susan image", 'a_content' => 1],

            ['round' => 5, 'game_id' => 20, 'q_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . "Whos_Mike.mp3", 'q_content' =>  "Who is Mike?", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "Mike image", 'a_content' => 1],
            ['round' => 5, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "Susan image", 'a_content' => 0],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 25 (  Reading Passage  )
        ////////////////////////////////////////////////////////

        $G1_L5_reading_passage_path = "Grade_1/" . "Lesson_5/" . "reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 25, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", 'q_content' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_audio' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 25, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Early-in-the-morning-I-say-Go.mp3", 'q_content' => "Early in the morning, I say_____.", 'a_audio' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "Good-morning.mp3", 'a_content' => "Good morning"],
            ['round' => 1, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "Good-afternoon.mp3", 'a_content' => "Good afternoon"],
            ['round' => 1, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "Good-evening.mp3", 'a_content' => "Good evening"],


            ['round' => 2, 'game_id' => 25, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", 'q_content' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_audio' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 25, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "I-say-They-say-Im-fine-What.mp3", 'q_content' => "I say ____.They say I'm fine.", 'a_audio' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "whats_your_name ", 'a_content' => "What's your name?"],
            ['round' => 2, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "Who-are-you.mp3", 'a_content' => "Who are you?"],
            ['round' => 2, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "How-are-you.mp3", 'a_content' => "How are you?"],


            ['round' => 3, 'game_id' => 25, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", 'q_content' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_audio' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 25, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "audio", 'q_content' => "They say \"And you?\" I say \"____\".", 'a_audio' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "I'm Anna."],
            ['round' => 3, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "I'm great."],
            ['round' => 3, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "I'm 6 years old."],


            ['round' => 4, 'game_id' => 25, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", 'q_content' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_audio' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 25, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "audio", 'q_content' => "What is my name?", 'a_audio' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "Ant"],
            ['round' => 4, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "Anna"],
            ['round' => 4, 'game_id' => 25, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "Apple"],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 13 Game 75 (  Drap and Drop  )
        ////////////////////////////////////////////////////////

        $l13G75image = $domain . "/storage/images/lesson_13/drap_and_drop/";

        $G1_L5_reading_passage_path = "Grade_1/" . "Lesson_13/" . "drap_and_drop/";
        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "long ruler image", "a_content" => "long"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "blue red pencil image", "a_content" => "long"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "yello pen image", "a_content" => "long"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "blue red yello pencil image", "a_content" => "long"],

            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "short ruler image", "a_content" => "short"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "book image", "a_content" => "short"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "short pants image", "a_content" => "short"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "hat image", "a_content" => "short"],


            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "house image", "a_content" => "big"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "dog image", "a_content" => "big"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "tiger image", "a_content" => "big"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "mouse image", "a_content" => "big"],

            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "pencil image", "a_content" => "small"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "elephant image", "a_content" => "small"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "car image", "a_content" => "small"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "eraser image", "a_content" => "small"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 17 Game 104 (  Listen & Act  )
        ////////////////////////////////////////////////////////

        $l17G105image = $domain . "/storage/images/lesson_17/Listen_&_Act/";
        $G1_L17_Listen_n_Act_path = "Grade_1/" . "Lesson_17/" . "Listen_&_act/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 105, 'q_audio' => $AudioDomain . $G1_L17_Listen_n_Act_path . "Touch-your-cheek.mp3", 'q_content' =>  "Touch your cheek", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 105, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l17G105image . "touching", 'a_content' => 1],
            ['round' => 1, 'game_id' => 105, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l17G105image . "not touching", 'a_content' => 0],

            ['round' => 2, 'game_id' => 105, 'q_audio' => $AudioDomain . $G1_L17_Listen_n_Act_path . "Touch-your-ear.mp3", 'q_content' =>  "Touch your ear", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 105, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l17G105image . "touching", 'a_content' => 1],
            ['round' => 2, 'game_id' => 105, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l17G105image . "not touching", 'a_content' => 0],

            ['round' => 3, 'game_id' => 105, 'q_audio' => $AudioDomain . $G1_L17_Listen_n_Act_path . "Dont-touch-your-mouth.mp3", 'q_content' =>  "Don't touch your mouth", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 105, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l17G105image . "not touching", 'a_content' => 1],
            ['round' => 3, 'game_id' => 105, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l17G105image . "touching", 'a_content' => 0],

            ['round' => 4, 'game_id' => 105, 'q_audio' => $AudioDomain . $G1_L17_Listen_n_Act_path . "Dont-touch-your-eyes.mp3", 'q_content' =>  "Don't touch your eye", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 105, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l17G105image . "touching", 'a_content' => 0],
            ['round' => 4, 'game_id' => 105, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l17G105image . "not touching", 'a_content' => 1],

            ['round' => 5, 'game_id' => 105, 'q_audio' => $AudioDomain . $G1_L17_Listen_n_Act_path . "Touch-your-cheek.mp3", 'q_content' =>  "Touch your cheek", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 105, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l17G105image . "not touching", 'a_content' => 0],
            ['round' => 5, 'game_id' => 105, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l17G105image . "touching", 'a_content' => 1],
        ]);
    }
}
