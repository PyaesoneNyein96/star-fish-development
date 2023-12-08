<?php

namespace Database\Seeders\AnsNQueSeed2\Grade1;

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


        //////////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 3 Game 12 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 12, 'a_content' => 'lesson_3_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 12, 'a_content' => 'lesson_3_video_global', 'isLocal' => 0]);





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
                ["Hello, I'm Jerry.", "Nice to meet you."],
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

        $G1_L3_listen_and_practice_path = "Grade_1/" . "Lesson_3/" . "listen_and_practice/";

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

        $imageG15 = [
            [
                "mary_image",
                "mike_image",

                "chris_image",
                "susan_image"
            ],
            [
                "mary_image",
                "mike_image",

                "chris_image",
                "susan_image"
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
                    ['round' => $G15Id, 'game_id' => 14, 'a_conver' => $converG15[$i][$j], 'a_image' => $imageG15[$i][$j], 'a_audio' => $AudioDomain . $G1_L3_listen_and_practice_path . $audiosG15[$i][$j] . ".mp3"],
                ]);
                $G15Id++;
            }
        }


        // round 3 + 4 + 5
        $l3G14image = $domain . "/storage/images/Grade_1/lesson_3/listen_and_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "Mary image", 'a_content' => 1],
            ['round' => 3, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "Susan image", 'a_content' => 0],
            ['round' => 3, 'game_id' => 14, 'q_audio' => $AudioDomain . $G1_L3_listen_and_practice_path . "Who-is-Mary.mp3", 'q_content' =>  "Who is Mary?", 'q_image' => null, 'a_content' => null],

            ['round' => 4, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "Mary image", 'a_content' => 0],
            ['round' => 4, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "Susan image", 'a_content' => 1],
            ['round' => 4, 'game_id' => 14, 'q_audio' => $AudioDomain . $G1_L3_listen_and_practice_path . "Who-is-Susan.mp3", 'q_content' =>  "Who is Susan?", 'q_image' => null, 'a_content' => null],

            ['round' => 5, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "Mike image", 'a_content' => 1],
            ['round' => 5, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "Susan image", 'a_content' => 0],
            ['round' => 5, 'game_id' => 14, 'q_audio' => $AudioDomain . $G1_L3_listen_and_practice_path . "Whos_Mike.mp3", 'q_content' =>  "Who is Mike?", 'q_image' => null, 'a_content' => null],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 3 Game 15 ( Writing (Arrange Order) )
        ////////////////////////////////////////////////////////

        $G1_L3_writing_path = "Grade_1/" . "Lesson_3/" . "writing/";
        $l3G15image = $domain . "/storage/images/Grade_1/lesson_3/writing/";


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
                ['round' => $i + 1, 'game_id' => 15, 'q_image' => $l3G15image . "reading_character.png", 'a_content' => $aG16R1[$G16Index], 'a_audio' => $AudioDomain . $G1_L3_writing_path . $audiosG16[$G16Index] . ".mp3"],
            ]);
            $G16Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 3 Game 16 ( speaking )
        ////////////////////////////////////////////////////////

        $l3G16image = $domain . "/storage/images/Grade_1/lesson_3/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 16, 'q_image' => $l3G16image . "Orange_Vector.png", "q_content" => "Hello, I'm ___ . Nice to meet you."],
            ['round' => 2, 'game_id' => 16, 'q_image' => $l3G16image . "Green_Vector.png", "q_content" => "Hi, I'm ___ . Nice to meet you."],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 4 Game 17 ( video )
        ////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 17, 'a_content' => 'lesson_4_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 17, 'a_content' => 'lesson_4_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 4 Game 18 ( Read, Listen & Repeat )
        ////////////////////////////////////////////////////////

        $G1_L4_Read_Listen_n_Repeat_path = "Grade_1/" . "Lesson_4/" . "Read_listen_n_Repeat/";
        $l4image = $domain . "/storage/images/Grade_1/lesson_4/Read_Listen_&_Repeat/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 18, 'q_image' => $l4image . "susan image", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "Whats-your-name.mp3", "q_content" => "What's your name?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 1, 'game_id' => 18, 'q_image' => null, "q_audio" => null, "q_content" => null, 'a_image' => $l4image . "mike image", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-names-Mike.mp3", "a_content" => "My name's Mike."],

            ['round' => 2, 'game_id' => 18, 'q_image' => $l4image . "mike image", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "Whats-your-name.mp3", "q_content" => "What's your name?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 2, 'game_id' => 18, 'q_image' => null, "q_audio" => null, "q_content" => null, 'a_image' => $l4image . "susan image", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-name's-Susan.mp3", "a_content" => "My name's Susan."],

            ['round' => 3, 'game_id' => 18, 'q_image' => $l4image . "dory image", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "Whats-your-name.mp3", "q_content" => "What's your name?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 3, 'game_id' => 18, 'q_image' => null, "q_audio" => null, "q_content" => null, 'a_image' => $l4image . "nemo image", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-names-Nemo.mp3", "a_content" => "My name's Nemo."],

            ['round' => 4, 'game_id' => 18, 'q_image' => $l4image . "nemo image", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "Whats-your-name.mp3", "q_content" => "What's your name?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 4, 'game_id' => 18, 'q_image' => null, "q_audio" => null, "q_content" => null, 'a_image' => $l4image . "dory image", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-names-Dory.mp3", "a_content" => "My name's Dory."],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 4 Game 19 (  Read, Listen & Repeat )
        ////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 19, 'q_image' => $l4image . "bowie.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "bowie audio.mp3", "q_content" => "My name's Bowie."],
            ['round' => 2, 'game_id' => 19, 'q_image' => $l4image . "kelly.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "kelly audio.mp3",  "q_content" => "My name's Kelly."],
            ['round' => 3, 'game_id' => 19, 'q_image' => $l4image . "goldie.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "goldie audio.mp3",  "q_content" => "My name's Goldie."],
            ['round' => 4, 'game_id' => 19, 'q_image' => $l4image . "blu.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "blu audio.mp3",  "q_content" => "My name's Blu."],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 4 Game 20 (  Listen and Practice )
        ////////////////////////////////////////////////////////

        $G1_L4_listen_and_practice_path = "Grade_1/" . "Lesson_4/" . "listen_and_practice/";
        $l4G20Image = $domain . "/storage/images/Grade_1/lesson_4/listen_and_practice/";

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

        $imageG20 = [
            [
                "pink_girl",
                "blue_boy",

                "red_boy",
                "blue_girl"
            ],
            [
                "pink_girl",
                "blue_boy",

                "red_boy",
                "blue_girl"
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
                    ['round' => $G20Id, 'game_id' => 20, 'a_image' => $l4G20Image . $imageG20[$i][$j] . ".png", 'a_conver' => $converG20[$i][$j], 'a_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . $audiosG20[$i][$j] . ".mp3"],
                ]);
            }
            $G20Id++;
        }


        // round 3 + 4 + 5
        $l4G20image = $domain . "/storage/images/Grade_1/lesson_4/listen_and_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "pink_girl_white_border.png", 'a_content' => 1],
            ['round' => 3, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "blue_girl_white_border.png", 'a_content' => 0],
            ['round' => 3, 'game_id' => 20, 'q_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . "Who-is-Mary.mp3", 'q_content' =>  "Who is Mary?", 'q_image' => $l4G20image . "green_vector.png", 'a_content' => null],

            ['round' => 4, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "pink_girl_white_border.png", 'a_content' => 0],
            ['round' => 4, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "blue_girl_white_border.png", 'a_content' => 1],
            ['round' => 4, 'game_id' => 20, 'q_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . "Who-is-Susan.mp3", 'q_content' =>  "Who is Susan?", 'q_image' => $l4G20image . "green_vector.png", 'a_content' => null],

            ['round' => 5, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "blue_boy_white_border.png", 'a_content' => 1],
            ['round' => 5, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "blue_girl_white_border", 'a_content' => 0],
            ['round' => 5, 'game_id' => 20, 'q_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . "Whos_Mike.mp3", 'q_content' =>  "Who is Mike?", 'q_image' => $l4G20image . "green_vector.png", 'a_content' => null],
        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 4 Game 21 ( Writing (arranging order) )
        ////////////////////////////////////////////////////////

        // round 1
        $qG21R1 = [
            "your", "What's", "name", "?", "Dory", "My", "name's"
        ];
        foreach ($qG21R1 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 21, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 21, 'a_content' => "What's your name ? My name's Dory", 'a_audio' => "audio"],
        ]);

        // round 2
        $qG21R2 = [
            "is", "your", "name", "What", "?", "name", "is", "My", "Susan"
        ];

        foreach ($qG21R2 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 21, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 21, 'a_content' => "What is your name ? My name is Susan", 'a_audio' => "audio"],
        ]);

        // round 3
        $qG21R3 = [
            "your", "What's", "name", "?", "Chris", "name's", "My"
        ];

        foreach ($qG21R2 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 21, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 21, 'a_content' => "What's your name ? My name's Chris", 'a_audio' => "audio"],
        ]);

        // round 4
        $qG21R2 = [
            "name", "What", "your", "is", "?", "name", "Mary", "My", "is"
        ];

        foreach ($qG21R2 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 21, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 21, 'a_content' => "What is your name ? My name is Mary", 'a_audio' => "audio"],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 22 (  Target Language & Grammar Explanation  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 22, 'a_content' => 'lesson_5_video', 'isLocal' => 1]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 23 (  Listen and Practice  )
        ////////////////////////////////////////////////////////

        $G1_L5_G23_reading_passage_path = "Grade_1/" . "Lesson_5/" . "listern_n_practice/";

        DB::table('ans_n_ques')->insert([
            ["round" => 1, "game_id" => 23, "q_image" => "afternoon_image", "q_audio" => null, "a_content" => 1],
            ["round" => 1, "game_id" => 23, "q_image" => "morning_image", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "game_id" => 23, "q_image" => "evening_image", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "game_id" => 23, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_G23_reading_passage_path . "afternoon" . ".mp3", "a_content" => null],

            ["round" => 2, "game_id" => 23, "q_image" => "afternoon_image", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "game_id" => 23, "q_image" => "morning_image", "q_audio" => null, "a_content" => 1],
            ["round" => 2, "game_id" => 23, "q_image" => "evening_image", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "game_id" => 23, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_G23_reading_passage_path . "Evening" . ".mp3", "a_content" => null],

            ["round" => 3, "game_id" => 23, "q_image" => "afternoon_image", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "game_id" => 23, "q_image" => "morning_image", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "game_id" => 23, "q_image" => "evening_image", "q_audio" => null, "a_content" => 1],
            ["round" => 3, "game_id" => 23, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_G23_reading_passage_path . "Morning" . ".mp3", "a_content" => null],

        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 24 (  Read Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $G1_L5_G24_read_listen_n_repeat_path = "Grade_1/" . "Lesson_5/" . "Read_listern_n_repeat/";

        DB::table('ans_n_ques')->insert([
            ["round" => 1, "game_id" => 24, "a_image" => "boy_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-morning.mp3", "a_conver" => "Good Morning"],
            ["round" => 1, "game_id" => 24, "a_image" => "girl_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-morning.mp3", "a_conver" => "Good Morning"],

            ["round" => 2, "game_id" => 24, "a_image" => "boy_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-afternoon.mp3", "a_conver" => "Good Afternoon"],
            ["round" => 2, "game_id" => 24, "a_image" => "girl_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-afternoon.mp3", "a_conver" => "Good Afternoon"],

            ["round" => 3, "game_id" => 24, "a_image" => "boy_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-evening.mp3", "a_conver" => "Good Evening"],
            ["round" => 3, "game_id" => 24, "a_image" => "girl_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-evening.mp3", "a_conver" => "Good Evening"],


            ["round" => 4, "game_id" => 24, "a_image" => "boy_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "I'm fine."],
            ["round" => 4, "game_id" => 24, "a_image" => "girl_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "How are you, Chris?"],

            ["round" => 5, "game_id" => 24, "a_image" => "boy_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "How are you, Susan?"],
            ["round" => 5, "game_id" => 24, "a_image" => "girl_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "I'm OK."],


            ["round" => 6, "game_id" => 24, "a_image" => "girl_1_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "Good Afternoon, Susan."],
            ["round" => 6, "game_id" => 24, "a_image" => "girl_2_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "Good Afternoon, Mary."],

            ["round" => 7, "game_id" => 24, "a_image" => "girl_1_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "How are you?"],
            ["round" => 7, "game_id" => 24, "a_image" => "girl_2_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "I'm great, and you?"],
            ["round" => 7, "game_id" => 24, "a_image" => "girl_1_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "I'm OK."],

            ["round" => 8, "game_id" => 24, "a_image" => "girl_1_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "GoodBye!"],
            ["round" => 8, "game_id" => 24, "a_image" => "girl_2_pic", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "audio.mp3", "a_conver" => "GoodBye!"],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 25 (  Reading Passage  )
        ////////////////////////////////////////////////////////

        $G1_L5_reading_passage_path = "Grade_1/" . "Lesson_5/" . "reading_passage/";
        $l5G25image = $domain . "/storage/images/Grade_1/lesson_5/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 25, "q_image" => $l5G25image . "character.png", "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", 'q_content' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_audio' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Early-in-the-morning-I-say-Go.mp3", 'q_content' => "Early in the morning, I say_____.", 'a_audio' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "Good-morning.mp3", 'a_content' => "Good morning"],
            ['round' => 1, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "Good-afternoon.mp3", 'a_content' => "Good afternoon"],
            ['round' => 1, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "Good-evening.mp3", 'a_content' => "Good evening"],


            ['round' => 2, 'game_id' => 25, "q_image" =>  $l5G25image . "character.png", "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", 'q_content' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_audio' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "I-say-They-say-Im-fine-What.mp3", 'q_content' => "I say ____.They say I'm fine.", 'a_audio' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "whats_your_name ", 'a_content' => "What's your name?"],
            ['round' => 2, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "Who-are-you.mp3", 'a_content' => "Who are you?"],
            ['round' => 2, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "How-are-you.mp3", 'a_content' => "How are you?"],


            ['round' => 3, 'game_id' => 25, "q_image" =>  $l5G25image . "character.png", "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", 'q_content' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_audio' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "audio", 'q_content' => "They say \"And you?\" I say \"____\".", 'a_audio' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "I'm Anna."],
            ['round' => 3, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "I'm great."],
            ['round' => 3, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "I'm 6 years old."],


            ['round' => 4, 'game_id' => 25, "q_image" =>  $l5G25image . "character.png", "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", 'q_content' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_audio' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "audio", 'q_content' => "What is my name?", 'a_audio' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "Ant"],
            ['round' => 4, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "Anna"],
            ['round' => 4, 'game_id' => 25, "q_image" => null, "q_audio" => null, 'q_content' => null, 'a_audio' =>  $AudioDomain . $G1_L5_reading_passage_path . "audio", 'a_content' => "Apple"],
        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 26 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l5G26image = $domain . "/storage/images/Grade_1/lesson_5/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 26, 'q_image' => $l5G26image . "orange star image", "q_content" => '"Good evening"'],
            ['round' => 2, 'game_id' => 26, 'q_image' => $l5G26image . "orange star image", "q_content" => '"Good afternoon"'],
            ['round' => 3, 'game_id' => 26, 'q_image' => $l5G26image . "orange star image", "q_content" => '"Good morning"'],
            ['round' => 4, 'game_id' => 26, 'q_image' => $l5G26image . "green star image", "q_content" => "How are you"],
            ['round' => 5, 'game_id' => 26, 'q_image' => $l5G26image . "boy image", "q_content" => "Nice to meet you, too. How are you?"],
            ['round' => 6, 'game_id' => 26, 'q_image' => $l5G26image . "boy image", "q_content" => "I'm Chris. What is your name?"],
        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 27 (  Writing  )
        ////////////////////////////////////////////////////////


        $G1_L5_writing_path = "Grade_1/" . "Lesson_5/" . "writing/";

        $qG27 = [
            ["Good evening, Mary.", "I'm fine.", "GoodBye.", "How are you?", "I'm great.", "And you?"],
            ["Good evening, Mike.", "I'm OK.", "GoodBye.", "How are you?", "I'm great.", "And you?"],
        ];

        $audiosG27 = [
            "audio",
            "audio"
        ];

        $aG27 = [
            "Good evening, Mary. How are you? I'm great. And you? I'm fine. GoodBye.",
            "Good evening, Mike. How are you? I'm great. And you? I'm OK. GoodBye.",

        ];

        $G27Index = 0;

        for ($i = 0; $i < count($qG27); $i++) {
            foreach ($qG27[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 27, 'q_content' => $j],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 27, 'a_content' => $aG27[$G27Index], 'a_audio' => $AudioDomain . $G1_L5_writing_path . $audiosG27[$G27Index] . ".mp3"],
            ]);
            $G27Index++;
        }







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 13 Game 75 (  Drap and Drop  )
        ////////////////////////////////////////////////////////

        $l13G75image = $domain . "/storage/images/Grade_1/lesson_13/drap_and_drop/";

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
    }
}
