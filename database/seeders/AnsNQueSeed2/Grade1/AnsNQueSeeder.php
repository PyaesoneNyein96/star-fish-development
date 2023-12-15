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
        $AudioDomain = $domain . "/storage/audios/";



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
        $l3G14image = $domain . "/storage/images/Grade_1/lesson_3/listen_and_practice/";
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
            ["Meet", "Nice", "Mike", "To", "Hello", "You", "I'm"],
            ["I'm", "You", "Nice", "Meet", "Tom", "To", "Hello"],
        ];

        $audiosG16 = [
            "Hello-Im-Mary-Nice-to-meet",
            "Hello-Im-Mike-Nice-to-meet-y",
            "Hello-Im-Tom-Nice-to-meet-y"
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
            ['round' => 1, 'game_id' => 18, 'q_image' => $l4image . "susan_image", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "Whats-your-name.mp3", "q_content" => "What's your name?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 1, 'game_id' => 18, 'q_image' => null, "q_audio" => null, "q_content" => null, 'a_image' => $l4image . "mike_image", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-names-Mike.mp3", "a_content" => "My name's Mike."],

            ['round' => 2, 'game_id' => 18, 'q_image' => $l4image . "mike_image", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "Whats-your-name.mp3", "q_content" => "What's your name?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 2, 'game_id' => 18, 'q_image' => null, "q_audio" => null, "q_content" => null, 'a_image' => $l4image . "susan_image", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-name's-Susan.mp3", "a_content" => "My name's Susan."],

            ['round' => 3, 'game_id' => 18, 'q_image' => $l4image . "dory_image", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "Whats-your-name.mp3", "q_content" => "What's your name?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 3, 'game_id' => 18, 'q_image' => null, "q_audio" => null, "q_content" => null, 'a_image' => $l4image . "nemo_image", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-names-Nemo.mp3", "a_content" => "My name's Nemo."],

            ['round' => 4, 'game_id' => 18, 'q_image' => $l4image . "nemo_image", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "Whats-your-name.mp3", "q_content" => "What's your name?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 4, 'game_id' => 18, 'q_image' => null, "q_audio" => null, "q_content" => null, 'a_image' => $l4image . "dory_image", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-names-Dory.mp3", "a_content" => "My name's Dory."],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 4 Game 19 (  Read, Listen & Repeat )
        ////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 19, 'q_image' => $l4image . "bowie.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "bowie_audio.mp3", "q_conver" => "My name's Bowie.", "q_content" => "What's your name?"],
            ['round' => 2, 'game_id' => 19, 'q_image' => $l4image . "kelly.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "kelly_audio.mp3",  "q_conver" => "My name's Kelly.", "q_content" => "What's your name?"],
            ['round' => 3, 'game_id' => 19, 'q_image' => $l4image . "goldie.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "goldie_audio.mp3",  "q_conver" => "My name's Goldie.", "q_content" => "What's your name?"],
            ['round' => 4, 'game_id' => 19, 'q_image' => $l4image . "blu.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "blu_audio.mp3",  "q_conver" => "My name's Blu.", "q_content" => "What's your name?"],
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
                    ['round' => $G20Id, 'game_id' => 20, 'a_image' => $l4G20Image . $imageG20[$i][$j] . ".png", 'a_conver' => $converG20[$i][$j], 'a_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . $audiosG20[$i][$j] . ".mp3", "background" => $l4G20Image . "background.png"],
                ]);
            }
            $G20Id++;
        }


        // round 3 + 4 + 5
        $l4G20image = $domain . "/storage/images/Grade_1/lesson_4/listen_and_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 20, 'q_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . "Who-is-Mary.mp3", 'q_content' => "Who is Mary?", 'q_image' =>  $l4G20image . "pink_girl_white_border.png", 'a_content' => 1],
            ['round' => 3, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "blue_girl_white_border.png", 'a_content' => 0],

            ['round' => 4, 'game_id' => 20, 'q_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . "Who-is-Susan.mp3", 'q_content' => "Who is Susan?", 'q_image' =>  $l4G20image . "pink_girl_white_border.png", 'a_content' => 0],
            ['round' => 4, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "blue_girl_white_border.png", 'a_content' => 1],

            ['round' => 5, 'game_id' => 20, 'q_audio' => $AudioDomain . $G1_L4_listen_and_practice_path . "Whos_Mike.mp3", 'q_content' => "Who is Mike?", 'q_image' =>  $l4G20image . "blue_boy_white_border.png", 'a_content' => 1],
            ['round' => 5, 'game_id' => 20, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l4G20image . "blue_girl_white_border.png", 'a_content' => 0],
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

        foreach ($qG21R3 as $j) {
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
        DB::table('ans_n_ques')->insert(['game_id' => 22, 'a_content' => 'lesson_5_video', 'isLocal' => 0]);





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
            ['round' => 1, 'game_id' => 25, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L5_reading_passage_path . "good_morning.mp3", 'q_content' => "Good morning", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "good_afternoon.mp3", 'q_content' => "Good afternoon", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "good_evening.mp3", 'q_content' => "Good evening", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Early-in-the-morning-I-say-Go.mp3", "q_conver" => "Early in the morning, I say_____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 25, "q_image" => $l5G25image . "character.png", "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", "q_content" => "Anna", 'q_conver' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_content' => null, "background" => $l5G25image . "background.png"],


            ['round' => 2, 'game_id' => 25, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L5_reading_passage_path . "whats_your_name.mp3", 'q_content' => "What's your name?", "q_conver" => null,  'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 25, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L5_reading_passage_path . "who_are_you.mp3", 'q_content' => "Who are you?", "q_conver" => null,  'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "how_are_you.mp3", 'q_content' => "How are you?", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "I-say-They-say-Im-fine-What.mp3", "q_conver" => "I say ____.They say I'm fine.", 'q_content' => null,  'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 25, "q_image" =>  $l5G25image . "character.png", "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", "q_content" => "Anna", 'q_conver' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.",  'a_content' => null, "background" => $l5G25image . "background.png"],


            ['round' => 3, 'game_id' => 25, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L5_reading_passage_path . "im_anna.mp3", 'q_content' => "I'm Anna.", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 25, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L5_reading_passage_path . "im_great.mp3", 'q_content' => "I'm great.", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "im_6_years_old.mp3", 'q_content' => "I'm 6 years old.", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "They-say-And-you-I-say-Im-A.mp3", "q_conver" => "They say \"And you?\" I say \"____\".", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 25, "q_image" =>  $l5G25image . "character.png", "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", "q_content" => "Anna", 'q_conver' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_content' => null, "background" => $l5G25image . "background.png"],


            ['round' => 4, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "ant.mp3", 'q_content' => "Ant", "q_conver" => null,  'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "anna.mp3", 'q_content' => "Anna", "q_conver" => null,  'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "apple.mp3", 'q_content' => "Apple", "q_conver" => null,  'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 25, "q_image" => null, "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "What-is-my-name-Ant-Anna-Appl.mp3", "q_conver" => "What is my name?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 25, "q_image" =>  $l5G25image . "character.png", "q_audio" => $AudioDomain . $G1_L5_reading_passage_path . "Hi-my-name-is-Anna-Im-6-yea.mp3", "q_content" => "Anna", 'q_conver' => "Hi, my name is Anna. I'm 6 years old. Early in the morning, I say \"Good morning, Hello and how are you?\" They say \"I'm fine. And you? \"I say \"I'm great.\" It's going to be a wonderful day.", 'a_content' => null, "background" => $l5G25image . "background.png"],
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
        ////    Grade 1  Lesson 6 Game 28 (  Target Language ...  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 28, 'a_content' => 'lesson_6_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 28, 'a_content' => 'lesson_6_video_global', 'isLocal' => 0]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 6 Game 29 (  Reading  )
        ////////////////////////////////////////////////////////

        $l6G29image = $domain . "/storage/images/Grade_1/lesson_6/reading/";
        $G1_L6_reading = "Grade_1/" . "Lesson_6/" . "reading/";


        $ansContent = [
            "Bag", "Book", "Chair", "Color Pencils",  "Crayons", "Desk", "Eraser", "Pen", "Pencil Case", "Pencil", "Ruler", "Sharpener"
        ];

        $ansImage = [
            "Bag", "Book", "Chair", "Color_Pencils", "Crayons", "Desk", "Eraser", "Pen", "Pencil_Case", "Pencil", "Ruler", "Sharpener"
        ];

        $ansAudio = [
            "bag", "book", "chair", "color_pencils", "crayon", "desk", "eraser", "pen", "pencil-case", "pencil", "ruler", "sharpener"
        ];

        $G1_L6_Game29_index = 0;

        foreach ($ansContent as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 29, 'a_content' => $key, 'a_image' => $l6G29image . $ansImage[$G1_L6_Game29_index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L6_reading . $ansAudio[$G1_L6_Game29_index] . ".mp3"
                ],
            ]);
            $G1_L6_Game29_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 6 Game 30 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l6G30image = $domain . "/storage/images/Grade_1/lesson_6/listen_n_practice/";
        $G1_L6_listen_n_practice = "Grade_1/" . "Lesson_6/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 30, 'a_content' => "book", 'q_image' => $l6G30image . "book" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "book" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 30, 'a_content' => "pencil", 'q_image' => $l6G30image . "pencil" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "pencil" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 30, 'a_content' => "color pen", 'q_image' => $l6G30image . "color_pen" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "color_pencil" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 30, 'a_content' => "ruler", 'q_image' => $l6G30image . "ruler" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "ruler" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 30, 'a_content' => "eraser", 'q_image' => $l6G30image . "eraser" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "eraser" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 30, 'a_content' => "glue", 'q_image' => $l6G30image . "glue" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "glue_audio" . ".mp3", "background" => $l6G30image . "background.png"
            ],


            [
                'round' => 2, 'game_id' => 30, 'a_content' => "sharpener", 'q_image' => $l6G30image . "sharpener" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "sharpener" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 30, 'a_content' => "pencil_case", 'q_image' => $l6G30image . "pencil_bag" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "pencil_case" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 30, 'a_content' => "pen", 'q_image' => $l6G30image . "pen" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "pen" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 30, 'a_content' => "earser", 'q_image' => $l6G30image . "earser" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "earser" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 30, 'a_content' => "bag", 'q_image' => $l6G30image . "bag" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "bag" . ".mp3", "background" => $l6G30image . "background.png"
            ],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 6 Game 31 (  Matching  )
        ////////////////////////////////////////////////////////

        $l6G31image = $domain . "/storage/images/Grade_1/lesson_6/Matching/";
        $G1_L6_Matching = "Grade_1/" . "Lesson_6/" . "Matching/";


        $G1_L6_Game31_Matching = [

            ['Bag', 'Desk', 'Chair', 'Crayons', 'Ruler'],
            ['Chair', 'book', 'pen', 'pencil', 'Ruler'],
            ['Bag', 'sharpener', 'desk', 'pencil case', 'color pencil'],

        ];

        $G1_L6_Game31_Matching_image = [

            ['Chair', 'Bag', 'Ruler', 'Crayons', 'Desk'],
            ['Book', 'Chair', 'Pencil_image', 'Ruler', 'Pen'],
            ['Sharpener', 'Crayons', 'Bag', 'Desk', 'Pencil_Case'],

        ];

        $G1_L6_Game31_Matching_audio = [
            'bag', 'desk', 'chair', 'crayon', 'ruler',
            'chair', 'bag', 'ruler', 'crayon', 'desk',

            'chair', 'book', 'pen', 'pencil', 'ruler',
            'book', 'chair', 'pencil', 'ruler', 'pen',

            'bag', 'sharpener', 'desk', 'pencil-case', 'crayon',
            'sharpener', 'crayon', 'bag', 'desk', 'pencil-case'
        ];

        $G1_L6_Game31_index = 0;

        for ($i = 0; $i < count($G1_L6_Game31_Matching); $i++) {

            foreach ($G1_L6_Game31_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 31, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G1_L6_Matching .  $G1_L6_Game31_Matching_audio[$G1_L6_Game31_index] . ".mp3",
                    ]
                ]);
                $G1_L6_Game31_index++;
            }

            foreach ($G1_L6_Game31_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 31, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l6G31image . $q . ".png", 'q_audio' => $AudioDomain . $G1_L6_Matching .  $G1_L6_Game31_Matching_audio[$G1_L6_Game31_index] . ".mp3",
                    ]
                ]);
                $G1_L6_Game31_index++;
            }
        }






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 6 Game 32 (  Speaking  )
        ////////////////////////////////////////////////////////

        $l6G32image = $domain . "/storage/images/Grade_1/lesson_6/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 32, 'q_image' => $l6G32image . "crayon_image", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 2, 'game_id' => 32, 'q_image' => $l6G32image . "eraser_image", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 3, 'game_id' => 32, 'q_image' => $l6G32image . "pen_image", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 4, 'game_id' => 32, 'q_image' => $l6G32image . "pencil_case_image", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 5, 'game_id' => 32, 'q_image' => $l6G32image . "ruler_image", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 6, 'game_id' => 32, 'q_image' => $l6G32image . "sharpener_image", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 7, 'game_id' => 32, 'q_image' => $l6G32image . "bag_image", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 8, 'game_id' => 32, 'q_image' => $l6G32image . "book_image", "q_content" => "Look at the picture and say the words. What's this?"],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 6 Game 33 (  Writing  )
        ////////////////////////////////////////////////////////

        $l6G33image = $domain . "/storage/images/Grade_1/lesson_6/writing/";
        $G1_L6_writing_path = "Grade_1/" . "Lesson_6/" . "writing/";


        // round 1
        $G33R1 = [
            "A", "S", "K", "E", "D"
        ];
        foreach ($G33R1 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 33,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 33, "q_image" => $l6G33image . "desk_image", 'a_content' => "DESK", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "desk.mp3"],
        ]);

        // round 2
        $G33R2 = [
            "A", "I", "R", "C", "H"
        ];
        foreach ($G33R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 33,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 33, "q_image" => $l6G33image . "chair_image", 'a_content' => "CHAIR", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "audio"],
        ]);

        // round 3
        $G33R3 = [
            "C", "I", "L", "E", "N", "P"
        ];
        foreach ($G33R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 33,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 33, "q_image" => $l6G33image . "pencil_image", 'a_content' => "PENCIL", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "audio"],
        ]);

        // round 4
        $G33R4 = [
            "G",  "A", "B"
        ];
        foreach ($G33R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 33, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 33,  "q_image" => $l6G33image . "bag_image", 'a_content' => "BAG", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "audio"],
        ]);

        // round 5
        $G33R5 = [
            "R", "E", "L", "U", "R"
        ];
        foreach ($G33R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 33, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 33, "q_image" => $l6G33image . "ruler_image", 'a_content' => "RULER", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "audio"],
        ]);

        // round 6
        $G33R6 = [
            "S", "E", "R", "R", "A", "E"
        ];
        foreach ($G33R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 33,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 33, "q_image" => $l6G33image . "eraser_image", 'a_content' => "ERASER", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "audio"],
        ]);

        // round 7
        $G33R7 = [
            "N", "E", "P"
        ];
        foreach ($G33R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 33, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 33, "q_image" => $l6G33image . "pen_image",  'a_content' => "PEN", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "audio"],
        ]);

        // round 8
        $G33R8 = [
            "N", "O", "Y", "C", "R", "A"
        ];
        foreach ($G33R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 33,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 33, "q_image" => $l6G33image . "crayon_image", 'a_content' => "CRAYON", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "audio"],
        ]);

        // round 9
        $G33R8 = [
            "O", "O", "K", "B"
        ];
        foreach ($G33R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 9, 'game_id' => 33,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 9, 'game_id' => 33, "q_image" => $l6G33image . "book_image", 'a_content' => "BOOK", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "audio"],
        ]);

        // round 10
        $G33R8 = [
            "A", "B", "G"
        ];
        foreach ($G33R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 10, 'game_id' => 33, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 10, 'game_id' => 33, "q_image" => $l6G33image . "bag_image", 'a_content' => "BAG", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "audio"],
        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 8 Game 41 (  Video  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 41, 'a_content' => 'lesson_8_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 41, 'a_content' => 'lesson_8_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 8 Game 42 (  Read  )
        ////////////////////////////////////////////////////////

        $l8G42image = $domain . "/storage/images/Grade_1/lesson_8/reading/";
        $G1_L8_reading = "Grade_1/" . "Lesson_8/" . "reading/";


        $ansl8Content = [
            "Air-Con", "Bed", "Bottle", "Chair", "Clock", "Cup", "Dress", "Fan", "Mat", "Plate", "Spoon", "Table"
        ];

        $ansl8Image = [
            "Air_Con", "Bed", "Bottle", "Chair", "Clock", "Cup", "Dress", "Fan", "Mat", "Plate", "Spoon", "Table"
        ];

        $ansl8Audio = [
            "air-con", "bed", "bottle", "chair", "clock", "cups", "dress", "fan", "mat", "plate", "spoon", "table"
        ];



        $G1_L8_Game42_index = 0;

        foreach ($ansl8Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 42, 'a_content' => $key, 'a_image' => $l8G42image . $ansl8Image[$G1_L8_Game42_index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L8_reading . $ansl8Audio[$G1_L8_Game42_index] . ".mp3"
                ],
            ]);
            $G1_L8_Game42_index++;
        }







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 8 Game 43 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l8G43image = $domain . "/storage/images/Grade_1/lesson_8/listen_n_practice/";
        $G1_L8_listen_n_practice = "Grade_1/" . "Lesson_8/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 43, 'a_content' => "thing...", 'q_image' => $l8G43image . "thing_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "thing_audio" . ".mp3", "background" => $l8G43image . "background.png"
            ],


            [
                'round' => 2, 'game_id' => 43, 'a_content' => "thing...", 'q_image' => $l8G43image . "thing_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "thing_audio" . ".mp3", "background" => $l8G43image . "background.png"
            ],
        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 8 Game 44 (  Matching  )
        ////////////////////////////////////////////////////////

        $l8G44image = $domain . "/storage/images/Grade_1/lesson_8/Matching/";
        $G1_L8_Matching = "Grade_1/" . "Lesson_8/" . "Matching/";


        $G1_L8_Game44_Matching = [

            ['Plate', 'Spoon', 'Bottle', 'Cup', 'table'],
            ['bed', 'fan', 'air-con', 'mat', 'clock'],

        ];

        $G1_L8_Game44_Matching_image = [

            ['Spoon', 'Plate', 'Bottle', 'table', 'Cup'],
            ['fan', 'bed', 'clock', 'air-con', 'mat'],

        ];

        $G1_L8_Game44_Matching_audio = [
            'Plate', 'Spoon', 'Bottle', 'Cup', 'table',
            'Spoon', 'Plate', 'Bottle', 'table', 'Cup',

            'bed', 'fan', 'air-con', 'mat', 'clock',
            'fan', 'bed', 'clock', 'air-con', 'mat',

        ];

        $G1_L8_Game44_index = 0;

        for ($i = 0; $i < count($G1_L8_Game44_Matching); $i++) {

            foreach ($G1_L8_Game44_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 44, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G1_L8_Matching .  $G1_L8_Game44_Matching_audio[$G1_L8_Game44_index] . ".mp3",
                    ]
                ]);
                $G1_L8_Game44_index++;
            }

            foreach ($G1_L8_Game44_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 44, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l8G44image . $q . ".png", 'q_audio' => $AudioDomain . $G1_L8_Matching .  $G1_L8_Game44_Matching_audio[$G1_L8_Game44_index] . ".mp3",
                    ]
                ]);
                $G1_L8_Game44_index++;
            }
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 8 Game 45 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l8G45image = $domain . "/storage/images/Grade_1/lesson_8/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 45, 'q_image' => $l8G45image . "plate_image", "q_content" => "Look at the picture and say the words."],
            ['round' => 2, 'game_id' => 45, 'q_image' => $l8G45image . "spoon_image", "q_content" => "Look at the picture and say the words."],
            ['round' => 3, 'game_id' => 45, 'q_image' => $l8G45image . "cup_image", "q_content" => "Look at the picture and say the words."],
            ['round' => 4, 'game_id' => 45, 'q_image' => $l8G45image . "table_image", "q_content" => "Look at the picture and say the words."],
            ['round' => 5, 'game_id' => 45, 'q_image' => $l8G45image . "clock_image", "q_content" => "Look at the picture and say the words."],
            ['round' => 6, 'game_id' => 45, 'q_image' => $l8G45image . "bottle_image", "q_content" => "Look at the picture and say the words."],
            ['round' => 7, 'game_id' => 45, 'q_image' => $l8G45image . "apple_image", "q_content" => "Look at the picture and say the words."],
            ['round' => 8, 'game_id' => 45, 'q_image' => $l8G45image . "fan_image", "q_content" => "Look at the picture and say the words."],
            ['round' => 9, 'game_id' => 45, 'q_image' => $l8G45image . "cake_image", "q_content" => "Look at the picture and say the words."],
            ['round' => 10, 'game_id' => 45, 'q_image' => $l8G45image . "bed_image", "q_content" => "Look at the picture and say the words."],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 8 Game 46 (  Reading Passage  )
        ////////////////////////////////////////////////////////

        $G1_L8_reading_passage_path = "Grade_1/" . "Lesson_8/" . "reading_passage/";
        $l8G46image = $domain . "/storage/images/Grade_1/lesson_8/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "desk.mp3", 'q_content' => "desk", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "chair.mp3", 'q_content' => "chair", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h.mp3", "q_conver" => "Select the things she has in her room.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 46, "q_image" => $l8G46image . "character.png", "q_audio" => $AudioDomain . $G1_L8_reading_passage_path .  "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null, 'a_content' => null, "background" => $l8G46image . "background.png"],


            ['round' => 2, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "pen.mp3", 'q_content' => "pen", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "pencil.mp3", 'q_content' => "pencil", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h.mp3", "q_conver" => "Select the things she has in her room.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 46, "q_image" =>  $l8G46image . "character.png", "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null, 'a_content' => null, "background" => $l8G46image . "background.png"],


            ['round' => 3, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "duster.mp3", 'q_content' => "duster", "q_conver" => null,  'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "eraser.mp3", 'q_content' => "eraser", "q_conver" => null,  'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h", "q_conver" => "Select the things she has in her room.", 'q_content' => null,  'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 46, "q_image" =>  $l8G46image . "character.png", "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null,  'a_content' => null, "background" => $l8G46image . "background.png"],


            ['round' => 4, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "spoon.mp3", 'q_content' => "spoon", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "sharpener.mp3", 'q_content' => "sharpener", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h", "q_conver" => "Select the things she has in her room.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 46, "q_image" =>  $l8G46image . "character.png", "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null, 'a_content' => null, "background" => $l8G46image . "background.png"],


            ['round' => 5, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "bag.mp3", 'q_content' => "bag", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "bed.mp3", 'q_content' => "bed", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h", "q_conver" => "Select the things she has in her room.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 46, "q_image" =>  $l8G46image . "character.png", "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null, 'a_content' => null, "background" => $l8G46image . "background.png"],


            ['round' => 6, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "doll.mp3", 'q_content' =>  "doll", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 6, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "dress.mp3", 'q_content' => "dress", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 6, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h", "q_conver" => "Select the things she has in her room.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 6, 'game_id' => 46, "q_image" =>  $l8G46image . "character.png", "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null, 'a_content' => null, "background" => $l8G46image . "background.png"],

        ]);







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 8 Game 47 (  Writing  )
        ////////////////////////////////////////////////////////


        $l8G47image = $domain . "/storage/images/Grade_1/lesson_8/writing/";
        $G1_L8_writing_path = "Grade_1/" . "Lesson_8/" . "writing/";


        // round 1
        $G47R1 = [
            "L", "E", "T", "A", "B"
        ];
        foreach ($G47R1 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 47,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 47, "q_image" => $l8G47image . "table_image", 'a_content' => "TABLE", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "table.mp3"],
        ]);

        // round 2
        $G47R2 = [
            "T", "T", "L", "O", "B", "E"
        ];
        foreach ($G47R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 47, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 47,  "q_image" => $l8G47image . "bottle_image", 'a_content' => "BOTTLE", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "bottle.mp3"],
        ]);

        // round 3
        $G47R3 = [
            "P", "O", "N", "S", "O"
        ];
        foreach ($G47R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 47, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 47, "q_image" => $l8G47image . "spoon_image", 'a_content' => "SPOON", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "spoon.mp3"],
        ]);

        // round 4
        $G47R4 = [
            "D", "E", "B"
        ];
        foreach ($G47R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 47, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 47, "q_image" => $l8G47image . "bed_image",  'a_content' => "BED", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "bed.mp3"],
        ]);

        // round 5
        $G47R5 = [
            "N", "A", "F"
        ];
        foreach ($G47R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 47, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 47,  "q_image" => $l8G47image . "fan_image", 'a_content' => "FAN", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "fan.mp3"],
        ]);

        // round 6
        $G47R6 = [
            "P", "E", "L", "T", "A"
        ];
        foreach ($G47R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 47, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 47, "q_image" => $l8G47image . "plate_image", 'a_content' => "PLATE", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "plate.mp3"],
        ]);

        // round 7
        $G47R7 = [
            "P", "U", "C"
        ];
        foreach ($G47R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 47,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 47, "q_image" => $l8G47image . "cup_image", 'a_content' => "CUP", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "cups.mp3"],
        ]);

        // round 8
        $G47R8 = [
            "K", "L", "O", "C", "C"
        ];
        foreach ($G47R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 47, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 47, "q_image" => $l8G47image . "clock_image", 'a_content' => "CLOCK", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "clock.mp3"],
        ]);

        // round 9
        $G47R9 = [
            "A", "T", "M"
        ];
        foreach ($G47R9 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 9, 'game_id' => 47,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 9, 'game_id' => 47, "q_image" => $l8G47image . "mat_image", 'a_content' => "MAT", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "mat.mp3"],
        ]);







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 9 Game 48 (  Target language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 48, 'a_content' => 'lesson_9_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 48, 'a_content' => 'lesson_9_video_global', 'isLocal' => 0]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 9 Game 49 (  Reading  )
        ////////////////////////////////////////////////////////

        $l9G49image = $domain . "/storage/images/Grade_1/lesson_9/reading/";
        $G1_L9_reading = "Grade_1/" . "Lesson_9/" . "reading/";


        $ansl9Content = [
            "Bird", "Cat", "Dog", "Fish", "Kitten", "Parrot", "Puppy"
        ];

        $ansl9Image = [
            "Bird", "Cat", "Dog", "Fish", "Kitten", "Parrot", "Puppy"
        ];

        $ansl9Audio = [
            "bird", "cat", "dog", "fish", "kitten", "parrot", "puppy"
        ];



        $G1_L9_Game49_index = 0;

        foreach ($ansl9Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 49, 'a_content' => $key, 'a_image' => $l9G49image . $ansl9Image[$G1_L9_Game49_index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L9_reading . $ansl9Audio[$G1_L9_Game49_index] . ".mp3"
                ],
            ]);
            $G1_L9_Game49_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 9 Game 50 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l9G50image = $domain . "/storage/images/Grade_1/lesson_9/listen_n_practice/";
        $G1_L9_listen_n_practice = "Grade_1/" . "Lesson_9/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 50, 'a_content' => "thing...", 'q_image' => $l9G50image . "thing_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "thing_audio" . ".mp3", "background" => $l9G50image . "background.png"
            ],


            [
                'round' => 2, 'game_id' => 50, 'a_content' => "thing...", 'q_image' => $l9G50image . "thing_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "thing_audio" . ".mp3", "background" => $l9G50image . "background.png"
            ],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 9 Game 51 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l9G51image = $domain . "/storage/images/Grade_1/lesson_9/Matching/";
        $G1_L9_Matching = "Grade_1/" . "Lesson_9/" . "Matching/";


        $G1_L9_Game51_Matching = [

            ['goldfish', 'kitten', 'puppy', 'chameleon'],
            ['Fish', 'Dog', 'Cat', 'Turtle'],

        ];

        $G1_L9_Game51_Matching_image = [

            ['Cat', 'goldfish', 'chameleon', 'puppy'],
            ['Cat', 'Turtle', 'Fish', 'Dog'],

        ];

        $G1_L9_Game51_Matching_audio = [
            'goldfish', 'kitten', 'puppy', 'chameleon',
            'cat', 'goldfish', 'chameleon', 'puppy',

            'fish', 'dog', 'cat', 'turtle',
            'cat', 'turtle', 'fish', 'dog',

        ];

        $G1_L9_Game51_index = 0;

        for ($i = 0; $i < count($G1_L9_Game51_Matching); $i++) {

            foreach ($G1_L9_Game51_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 51, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G1_L9_Matching .  $G1_L9_Game51_Matching_audio[$G1_L9_Game51_index] . ".mp3",
                    ]
                ]);
                $G1_L9_Game51_index++;
            }

            foreach ($G1_L9_Game51_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 51, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l9G51image . $q . ".png", 'q_audio' => $AudioDomain . $G1_L9_Matching .  $G1_L9_Game51_Matching_audio[$G1_L9_Game51_index] . ".mp3",
                    ]
                ]);
                $G1_L9_Game51_index++;
            }
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 9 Game 52 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l9G52image = $domain . "/storage/images/Grade_1/lesson_9/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 52, 'q_image' => $l9G52image . "chameleon_image", "q_content" => "Describe the pictures. It is ____."],
            ['round' => 2, 'game_id' => 52, 'q_image' => $l9G52image . "parrot_image", "q_content" => "Describe the pictures. It is ____."],
            ['round' => 3, 'game_id' => 52, 'q_image' => $l9G52image . "dog_image", "q_content" => "Describe the pictures. It is ____."],
            ['round' => 4, 'game_id' => 52, 'q_image' => $l9G52image . "cat_image", "q_content" => "Describe the pictures. It is ____."],
            ['round' => 5, 'game_id' => 52, 'q_image' => $l9G52image . "fish_image", "q_content" => "Describe the pictures. It is ____."],
        ]);







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 9 Game 53 (  Writing  )
        ////////////////////////////////////////////////////////

        $l9G53image = $domain . "/storage/images/Grade_1/lesson_9/writing/";
        $G1_L9_writing_path = "Grade_1/" . "Lesson_9/" . "writing/";


        // round 1
        $G53R1 = [
            "P", "R", "A", "R", "O", "T"
        ];
        foreach ($G53R1 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 53, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 53,  "q_image" => $l9G53image . "parrot_image", 'a_content' => "PARROT", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "parrot.mp3"],
        ]);

        // round 2
        $G53R2 = [
            "D", "G", "O"
        ];
        foreach ($G53R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 53,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 53, "q_image" => $l9G53image . "dog_image", 'a_content' => "DOG", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "dog.mp3"],
        ]);

        // round 3
        $G53R3 = [
            "R", "A", "B", "B", "I", "T"
        ];
        foreach ($G53R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 53, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 53, "q_image" => $l9G53image . "RABBIT_image", 'a_content' => "RABBIT", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "rabbit.mp3"],
        ]);

        // round 4
        $G53R4 = [
            "H", "T", "E", "S", "A", "M", "R"
        ];
        foreach ($G53R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 53,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 53, "q_image" => $l9G53image . "HAMSTER_image", 'a_content' => "HAMSTER", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "hamster.mp3"],
        ]);

        // round 5
        $G53R5 = [
            "P", "R", "A", "R", 'O', "T"
        ];
        foreach ($G53R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 53, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 53, "q_image" => $l9G53image . "PARROT_image",  'a_content' => "PARROT", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "parrot.mp3"],
        ]);

        // round 6
        $G53R6 = [
            "M", "H", "A", "O", "N", "C", "E", "L", "E"
        ];
        foreach ($G53R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 53, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 53, "q_image" => $l9G53image . "CHAMELEON_image", 'a_content' => "CHAMELEON", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "chameleon.mp3"],
        ]);

        // round 7
        $G53R7 = [
            "I", "B", "D", "R"
        ];
        foreach ($G53R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 53, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 53, "q_image" => $l9G53image . "BIRD_image",  'a_content' => "BIRD", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "bird.mp3"],
        ]);

        // round 8
        $G53R8 = [
            "T", "A", "C"
        ];
        foreach ($G53R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 53,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 53, "q_image" => $l9G53image . "CAT_image", 'a_content' => "CAT", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "cat.mp3"],
        ]);









        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 10 Game 54 (  Target language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 54, 'a_content' => 'lesson_10_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 54, 'a_content' => 'lesson_10_video_global', 'isLocal' => 0]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 10 Game 55 (  Reading  )
        ////////////////////////////////////////////////////////

        $l10G55image = $domain . "/storage/images/Grade_1/lesson_10/reading/";
        $G1_L10_reading = "Grade_1/" . "Lesson_10/" . "reading/";


        $ansl10Content = [
            "Dog", "Goldfish", "Parrot", "Rabbit", "Turtle"
        ];

        $ansl10Image = [
            "Dog", "Goldfish", "Parrot", "Rabbit", "Turtle"
        ];

        $ansl10Audio = [
            "dog", "goldfish", "parrot", "rabbit", "turtle"
        ];



        $G1_L10_Game55_index = 0;

        foreach ($ansl10Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 55, 'a_content' => $key, 'a_image' => $l10G55image . $ansl10Image[$G1_L10_Game55_index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L10_reading . $ansl10Audio[$G1_L10_Game55_index] . ".mp3"
                ],
            ]);
            $G1_L10_Game55_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 10 Game 56 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l10G56image = $domain . "/storage/images/Grade_1/lesson_10/listen_n_practice/";
        $G1_L10_listen_n_practice = "Grade_1/" . "Lesson_10/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 56, 'a_content' => "thing...", 'q_image' => $l10G56image . "thing_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "thing_audio" . ".mp3", "background" => $l10G56image . "background.png"
            ],


            [
                'round' => 2, 'game_id' => 56, 'a_content' => "thing...", 'q_image' => $l10G56image . "thing_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "thing_audio" . ".mp3", "background" => $l10G56image . "background.png"
            ],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 10 Game 57 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l10G57image = $domain . "/storage/images/Grade_1/lesson_10/Matching/";
        $G1_L10_Matching = "Grade_1/" . "Lesson_10/" . "Matching/";

        $G1_L10_Game57_Matching_image = [

            ['duck', 'cock', 'cow', 'pig'],
            ['cow', 'pig', 'dog', 'sheep'],

        ];

        $G1_L10_Game57_Matching = [

            ['cow', 'duck', 'pig', 'cock'],
            ['sheep', 'dog', 'cow', 'pig'],

        ];

        $G1_L10_Game57_Matching_audio = [
            'duck', 'cok', 'cow', 'pig',
            'cow', 'duck', 'pig', 'cok',

            'cow', 'pig', 'dog', 'sheep',
            'sheep', 'dog', 'cow', 'pig',

        ];

        $G1_L10_Game57_index = 0;

        for ($i = 0; $i < count($G1_L10_Game57_Matching); $i++) {

            foreach ($G1_L10_Game57_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 57, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l10G57image . $q . ".png", 'q_audio' => $AudioDomain . $G1_L10_Matching .  $G1_L10_Game57_Matching_audio[$G1_L10_Game57_index] . ".mp3",
                    ]
                ]);
                $G1_L10_Game57_index++;
            }

            foreach ($G1_L10_Game57_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 57, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G1_L10_Matching .  $G1_L10_Game57_Matching_audio[$G1_L10_Game57_index] . ".mp3",
                    ]
                ]);
                $G1_L10_Game57_index++;
            }
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 10 Game 58 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l10G58image = $domain . "/storage/images/Grade_1/lesson_10/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 58, 'q_image' => $l10G58image . "rabbit_image", "q_content" => "What animals do you see on the farm?"],
            ['round' => 2, 'game_id' => 58, 'q_image' => $l10G58image . "pig_image", "q_content" => "What animals do you see on the farm?"],
            ['round' => 3, 'game_id' => 58, 'q_image' => $l10G58image . "goat_image", "q_content" => "What animals do you see on the farm?"],
            ['round' => 4, 'game_id' => 58, 'q_image' => $l10G58image . "horse_image", "q_content" => "What animals do you see on the farm?"],
            ['round' => 5, 'game_id' => 58, 'q_image' => $l10G58image . "duck_image", "q_content" => "What animals do you see on the farm?"],
            ['round' => 6, 'game_id' => 58, 'q_image' => $l10G58image . "sheep_image", "q_content" => "What animals do you see on the farm?"],
            ['round' => 7, 'game_id' => 58, 'q_image' => $l10G58image . "cock_image", "q_content" => "What animals do you see on the farm?"],
            ['round' => 8, 'game_id' => 58, 'q_image' => $l10G58image . "cow_image", "q_content" => "What animals do you see on the farm?"],
            ['round' => 9, 'game_id' => 58, 'q_image' => $l10G58image . "rabbit_image", "q_content" => "What animals do you see on the farm?"],
        ]);







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 10 Game 59 (  Writing  )
        ////////////////////////////////////////////////////////

        $l10G59image = $domain . "/storage/images/Grade_1/lesson_10/writing/";
        $G1_L10_writing_path = "Grade_1/" . "Lesson_10/" . "writing/";


        // round 1
        $G59R1 = [
            "k", "c", "c", "o"
        ];
        foreach ($G59R1 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 59, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 59,  "q_image" => $l10G59image . "cock_image", 'a_content' => "cock", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "cok.mp3"],
        ]);

        // round 2
        $G59R2 = [
            "I", "P", "G"
        ];
        foreach ($G59R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 59,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 59, "q_image" => $l10G59image . "PIG_image", 'a_content' => "PIG", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "pig.mp3"],
        ]);

        // round 3
        $G59R3 = [
            "W", "O", "C"
        ];
        foreach ($G59R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 59, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 59, "q_image" => $l10G59image . "COW_image", 'a_content' => "COW", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "cow.mp3"],
        ]);

        // round 4
        $G59R4 = [
            "C", "U", "K", "D"
        ];
        foreach ($G59R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 59,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 59, "q_image" => $l10G59image . "DUCK_image", 'a_content' => "DUCK", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "duck.mp3"],
        ]);

        // round 5
        $G59R5 = [
            "A", "R", "B", "B", 'T', "I"
        ];
        foreach ($G59R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 59, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 59, "q_image" => $l10G59image . "RABBIT_image",  'a_content' => "RABBIT", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "rabbit.mp3"],
        ]);

        // round 6
        $G59R6 = [
            "P", "E", "E", "S", "H"
        ];
        foreach ($G59R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 59, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 59, "q_image" => $l10G59image . "SHEEP_image", 'a_content' => "SHEEP", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "sheep.mp3"],
        ]);

        // round 7
        $G59R7 = [
            "t", "a", "c"
        ];
        foreach ($G59R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 59, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 59, "q_image" => $l10G59image . "cat_image",  'a_content' => "cat", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "cat.mp3"],
        ]);

        // round 8
        $G59R8 = [
            "S", "O", "R", "H", "E"
        ];
        foreach ($G59R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 59,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 59, "q_image" => $l10G59image . "HORSE_image", 'a_content' => "HORSE", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "horse.mp3"],
        ]);

        // round 9
        $G59R9 = [
            "W", "C", "O"
        ];
        foreach ($G59R9 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 59,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 59, "q_image" => $l10G59image . "COW_image", 'a_content' => "COW", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "cow.mp3"],
        ]);

        // round 10
        $G59R10 = [
            "S", "O", "R", "H", "E"
        ];
        foreach ($G59R10 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 59,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 59, "q_image" => $l10G59image . "HORSE_image", 'a_content' => "HORSE", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "horse.mp3"],
        ]);







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 11 Game 60 (  Target language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 60, 'a_content' => 'lesson_11_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 60, 'a_content' => 'lesson_11_video_global', 'isLocal' => 0]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 11 Game 61 (  Reading  )
        ////////////////////////////////////////////////////////

        $l11G61image = $domain . "/storage/images/Grade_1/lesson_11/reading/";
        $G1_L11_reading = "Grade_1/" . "Lesson_11/" . "reading/";


        $ansl11Content = [
            "Pink", "Yellow", "Green", "Red", "Blue"
        ];

        $ansl11Image = [
            "Pink_image", "Yellow_image", "Green_image", "Red_image", "Blue_image"
        ];

        $ansl11Audio = [
            "pink", "yellow", "green", "red", "blue"
        ];



        $G1_L11_Game61_index = 0;

        foreach ($ansl11Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 61, 'a_content' => $key, 'a_image' => $l11G61image . $ansl11Image[$G1_L11_Game61_index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L11_reading . $ansl11Audio[$G1_L11_Game61_index] . ".mp3"
                ],
            ]);
            $G1_L11_Game61_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 11 Game 62 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l11G62image = $domain . "/storage/images/Grade_1/lesson_11/listen_n_practice/";
        $G1_L11_listen_n_practice = "Grade_1/" . "Lesson_11/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 62, 'a_content' => "yellow", 'q_image' => $l11G62image . "yellow_balloon_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L11_listen_n_practice . "yellow" . ".mp3", "background" => $l11G62image . "background.png"
            ],
            [
                'game_id' => 62, 'a_content' => "green", 'q_image' => $l11G62image . "green_balloon_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L11_listen_n_practice . "green" . ".mp3", "background" => $l11G62image . "background.png"
            ],
            [
                'game_id' => 62, 'a_content' => "grey", 'q_image' => $l11G62image . "grey_balloon_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L11_listen_n_practice . "grey" . ".mp3", "background" => $l11G62image . "background.png"
            ],
            [
                'game_id' => 62, 'a_content' => "orange", 'q_image' => $l11G62image . "orange_balloon_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L11_listen_n_practice . "orange" . ".mp3", "background" => $l11G62image . "background.png"
            ],
            [
                'game_id' => 62, 'a_content' => "purple", 'q_image' => $l11G62image . "purple_balloon_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L11_listen_n_practice . "purple" . ".mp3", "background" => $l11G62image . "background.png"
            ],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 11 Game 63 (  Matching  )
        ////////////////////////////////////////////////////////

        $l11G63image = $domain . "/storage/images/Grade_1/lesson_11/Matching/";
        $G1_L11_Matching = "Grade_1/" . "Lesson_11/" . "Matching/";

        DB::table('ans_n_ques')->insert([
            // round 1
            ['game_id' => 63, 'round' => 1, 'q_content' => "apple", 'q_image' => $l11G63image . "apple_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "apple_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "mango", 'q_image' => $l11G63image . "mango_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "mango_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "orange", 'q_image' => $l11G63image . "orange_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "orange_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "grape", 'q_image' => $l11G63image . "grape_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "grape_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "coconut", 'q_image' => $l11G63image . "coconut_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "coconut_audio" . ".mp3"],


            ['game_id' => 63, 'round' => 1, 'q_content' => "orange_pen", 'q_image' => $l11G63image . "orange_pen_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "orange_pen_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "apple_pen", 'q_image' => $l11G63image . "apple_pen_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "apple_pen_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "grape_pen", 'q_image' => $l11G63image . "grape_pen_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "grape_pen_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "coconut_pen", 'q_image' => $l11G63image . "coconut_pen_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "coconut_pen_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "mango_pen", 'q_image' => $l11G63image . "mango_pen_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "mango_pen_audio" . ".mp3"],



            // round 2
            ['game_id' => 63, 'round' => 2, 'q_content' => "black", 'q_image' => "Black", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "black_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "white", 'q_image' => "White", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "white_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Grey", 'q_image' => "Grey", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "Grey_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Purple", 'q_image' => "Purple", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "Purple_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Pink", 'q_image' => "Pink", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "Pink_audio" . ".mp3"],


            ['game_id' => 63, 'round' => 2, 'q_content' => "Grey_item", 'q_image' =>  $l11G63image . "Grey_item_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "Grey_item_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Black_item", 'q_image' =>  $l11G63image . "Black_item_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "Black_item_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "White_item", 'q_image' =>  $l11G63image . "White_item_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "White_item_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Pink_item", 'q_image' =>  $l11G63image . "Pink_item_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "Pink_item_audio" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Purple_item", 'q_image' =>  $l11G63image . "Purple_item_image" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "Purple_item_audio" . ".mp3"],

        ]);







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 11 Game 64 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l11G64image = $domain . "/storage/images/Grade_1/lesson_11/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 64, 'q_image' => $l11G64image . "apple_image", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 2, 'game_id' => 64, 'q_image' => $l11G64image . "table_image", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 3, 'game_id' => 64, 'q_image' => $l11G64image . "blue_balloon_image", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 4, 'game_id' => 64, 'q_image' => $l11G64image . "dress_image", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 5, 'game_id' => 64, 'q_image' => $l11G64image . "red_balloon_image", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 6, 'game_id' => 64, 'q_image' => $l11G64image . "pink_balloon_image", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 7, 'game_id' => 64, 'q_image' => $l11G64image . "yellow_balloon_image", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 8, 'game_id' => 64, 'q_image' => $l11G64image . "black_balloon_image", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 9, 'game_id' => 64, 'q_image' => $l11G64image . "cat_image", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 10, 'game_id' => 64, 'q_image' => $l11G64image . "parrot_image", "q_content" => "What colour is it ? What is it ?"],
        ]);







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 11 Game 65 (  Reading Passage  )
        ////////////////////////////////////////////////////////

        $G1_L11_reading_passage_path = "Grade_1/" . "Lesson_11/" . "reading_passage/";
        $l11G65image = $domain . "/storage/images/Grade_1/lesson_11/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "audio.mp3", 'q_content' => "car, doll, airplane", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "audio.mp3", 'q_content' => "ball, bear, doll", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "I-love-toys-My-toys-are-car-d.mp3", "q_conver" => "I love toys. My toys are ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 65, "q_image" => $l11G65image . "character.png", "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "I-love-toys-I-play-with-them.mp3", "q_content" => "I love toys", 'q_conver' => "I love toys. I play with them after school. This is my teddy bear. It's brown and black. This is my dool. It's beautiful. Its dress is blue and purple. I also have a ball. I play with it everyday. It's yellow and blue.", 'a_content' => null, "background" => $l11G65image . "background.png"],


            ['round' => 2, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "audio.mp3", 'q_content' => "black and white", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "audio.mp3", 'q_content' => "blue and yellow", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "audio.mp3", 'q_content' => "red and green", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "What-color-is-the-ball-black.mp3", "q_conver" =>  "What color is the ball?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 65, "q_image" =>  $l11G65image . "character.png", "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "I-love-toys-I-play-with-them.mp3", "q_content" => "I love toys", 'q_conver' => "I love toys. I play with them after school. This is my teddy bear. It's brown and black. This is my dool. It's beautiful. Its dress is blue and purple. I also have a ball. I play with it everyday. It's yellow and blue.", 'a_content' => null, "background" => $l11G65image . "background.png"],


            ['round' => 3, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "audio", 'q_content' => "dress/ball", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "audio", 'q_content' => "teddy bear", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "What-is-blue-and-purple-dress.mp3", "q_conver" => "What is blue and purple?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 65, "q_image" =>  $l11G65image . "character.png", "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "I-love-toys-I-play-with-them.mp3", "q_content" => "I love toys", 'q_conver' => "I love toys. I play with them after school. This is my teddy bear. It's brown and black. This is my dool. It's beautiful. Its dress is blue and purple. I also have a ball. I play with it everyday. It's yellow and blue.", 'a_content' => null, "background" => $l11G65image . "background.png"],


        ]);








        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 13 Game 73 (  Target language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 73, 'a_content' => 'lesson_13_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 73, 'a_content' => 'lesson_13_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 13 Game 74 (  Reading, Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l13G74image = $domain . "/storage/images/Grade_1/lesson_13/reading/";
        $G1_L13_reading = "Grade_1/" . "Lesson_13/" . "reading/";


        $ansl13Content = [
            "\"new\" - It's new.", "\"slow\" - It's slow.", "\"dirty\" - It's dirty.", "\"old\" - It's old.", "\"fast\" - It's fast.", "\"clean\" - It's clean.", "\"Hard\" - It's hard.", "\"Short\" - It's short.", "\"Small\" - It's small."
        ];

        $ansl13Image = [
            "new_image", "slow_image", "dirty_image", "old_image", "fast_image", "clean_image", "hard_image", "short_image", "small_image"
        ];

        $ansl13Audio = [
            "new-Its-new", "slow-Its-slow", "dirty-Its-dirty", "old-Its-old", "fast-Its-fast", "clean-Its-clean", "hard-Its-hard", "short-Its-short", "small-Its-small"
        ];



        $G1_L13_Game74_index = 0;

        foreach ($ansl13Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 74, 'a_content' => $key, 'a_image' => $l13G74image . $ansl13Image[$G1_L13_Game74_index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L13_reading . $ansl13Audio[$G1_L13_Game74_index] . ".mp3"
                ],
            ]);
            $G1_L13_Game74_index++;
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 13 Game 75 (  Drap and Drop  )
        ////////////////////////////////////////////////////////

        $l13G75image = $domain . "/storage/images/Grade_1/lesson_13/Drap_n_Drop/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "ruler.png", "a_content" => "long"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "pencil.png", "a_content" => "long"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "yellow_pencil.png", "a_content" => "long"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "three_color_pencil.png", "a_content" => "long"],

            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "horizontal_ruler.png", "a_content" => "short"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "book.png", "a_content" => "short"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "short_pants.png", "a_content" => "short"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "hat.png", "a_content" => "short"],


            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "house.png", "a_content" => "big"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "dog.png", "a_content" => "big"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "cat.png", "a_content" => "big"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "mouse.png", "a_content" => "big"],

            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "pencil_small.png", "a_content" => "small"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "elephant.png", "a_content" => "small"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "car.png", "a_content" => "small"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "eraser.png", "a_content" => "small"],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 13 Game 76 (  Listen and Practice  )
        ////////////////////////////////////////////////////////

        $l13G76image = $domain . "/storage/images/Grade_1/lesson_13/listen_and_practice/";
        $G1_L13_listen_and_practice_path = "Grade_1/" . "Lesson_13/" . "listen_and_practice/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-cat-is-small-and-short-T.mp3", 'q_content' => "This Cat is Small and Short", 'q_image' =>  $l13G76image . "true_image.png", 'a_content' => 1, 'a_image' => $l13G76image . "cat_image"],
            ['round' => 1, 'game_id' => 76, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l13G76image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 2, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-hat-is-old-True-or-False.mp3", 'q_content' => "This Hat is Old", 'q_image' =>  $l13G76image . "true_image.png", 'a_content' => 1, 'a_image' => $l13G76image . "hat_image"],
            ['round' => 2, 'game_id' => 76, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l13G76image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 3, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-house-is-big-True-or-Fal.mp3", 'q_content' => "This house is big.", 'q_image' =>  $l13G76image . "true_image.png", 'a_content' => 1, 'a_image' => $l13G76image . "house_image"],
            ['round' => 3, 'game_id' => 76, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l13G76image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 4, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "TIts-a-cake-Its-soft-True-o.mp3", 'q_content' => "It's a cake. It's soft", 'q_image' =>  $l13G76image . "true_image.png", 'a_content' => 1, 'a_image' => $l13G76image . "cake_image"],
            ['round' => 4, 'game_id' => 76, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l13G76image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 5, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-girl-is-dirty-True-or-Fal.mp3", 'q_content' => "This girl is dirty", 'q_image' =>  $l13G76image . "true_image.png", 'a_content' => 1, 'a_image' => $l13G76image . "girl_image"],
            ['round' => 5, 'game_id' => 76, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l13G76image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 6, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "Its-a-turtle-Its-fast-True.mp3", 'q_content' => "It's a turtle. It's fast.", 'q_image' =>  $l13G76image . "true_image.png", 'a_content' => 0, 'a_image' => $l13G76image . "turtle_image"],
            ['round' => 6, 'game_id' => 76, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l13G76image . "false_image.png", 'a_content' => 1, 'a_image' => null],

            ['round' => 7, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-bag-is-new-True-or-False.mp3", 'q_content' => "This Bag is new", 'q_image' =>  $l13G76image . "true_image.png", 'a_content' => 1, 'a_image' => $l13G76image . "Bag_image"],
            ['round' => 7, 'game_id' => 76, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l13G76image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 8, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-pencil-is-long-True-or-Fa.mp3", 'q_content' => "This pencil is long.", 'q_image' =>  $l13G76image . "true_image.png", 'a_content' => 1, 'a_image' => $l13G76image . "pencil_image"],
            ['round' => 8, 'game_id' => 76, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l13G76image . "false_image.png", 'a_content' => 0, 'a_image' => null],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 13 Game 77 (  Speaking Practice  )
        ////////////////////////////////////////////////////////



        $l13G77image = $domain . "/storage/images/Grade_1/lesson_13/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 77, 'q_image' => $l13G77image . "dog_image", "q_content" => "Describe the picture. It's ____."],
            ['round' => 2, 'game_id' => 77, 'q_image' => $l13G77image . "house_image", "q_content" => "Describe the picture. It's ____."],
            ['round' => 3, 'game_id' => 77, 'q_image' => $l13G77image . "ruler_image", "q_content" => "Describe the picture. It's ____."],
            ['round' => 4, 'game_id' => 77, 'q_image' => $l13G77image . "girl_image", "q_content" => "Describe the picture. It's ____."],
            ['round' => 5, 'game_id' => 77, 'q_image' => $l13G77image . "turtle_image", "q_content" => "Describe the picture. It's ____."],
            ['round' => 6, 'game_id' => 77, 'q_image' => $l13G77image . "cake_image", "q_content" => "Describe the picture. It's ____."],
            ['round' => 7, 'game_id' => 77, 'q_image' => $l13G77image . "rabbit_image", "q_content" => "Describe the picture. It's ____."],
            ['round' => 8, 'game_id' => 77, 'q_image' => $l13G77image . "dirty_girl_image", "q_content" => "Describe the picture. It's ____."],
            ['round' => 9, 'game_id' => 77, 'q_image' => $l13G77image . "car_image", "q_content" => "Describe the picture. It's ____."],
            ['round' => 10, 'game_id' => 77, 'q_image' => $l13G77image . "book_image", "q_content" => "Describe the picture. It's ____."],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 14 Game 78 (  Target language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 78, 'a_content' => 'lesson_14_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 78, 'a_content' => 'lesson_14_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 14 Game 79 (  Reading, Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l14G79image = $domain . "/storage/images/Grade_1/lesson_14/reading/";
        $G1_L14_reading = "Grade_1/" . "Lesson_14/" . "reading/";


        $ansl14Content = [
            "This is a cake. It's soft. It's yellow", "This is a table. It's hard. It's grey.", "This is a car. It's old and slow. It's green.", "This is a car. It's small. It's orange.", "This is a fan. It's new. It's pink.", "This is a house. It's old. It's black.", "This is a ruler. It's long. It's white.", "This is an apple. It's big. It's red.", "This is a pencil. It's short. It's brown."
        ];

        $ansl14Image = [
            "cake_image", "table_image", "old_car_image", "car_orange_image", "fan_image", "house_image", "ruler_image", "apple_image", "pencil_image"
        ];

        $ansl14Audio = [
            "This-is-a-cake-Its-soft-It", "This-is-a-table-Its-hard-It", "This-is-a-car-Its-old-and-sl", "This-is-a-car-Its-small-It", "This-is-a-fan-Its-new-Its", "This-is-a-house-Its-old-It", "This-is-a-ruler-Its-long-It", "This-is-an-apple-Its-big-It", "This-is-a-pencil-Its-short"
        ];



        $G1_L14_Game79_index = 0;

        foreach ($ansl14Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 79, 'a_content' => $key, 'a_image' => $l14G79image . $ansl14Image[$G1_L14_Game79_index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L14_reading . $ansl14Audio[$G1_L14_Game79_index] . ".mp3"
                ],
            ]);
            $G1_L14_Game79_index++;
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 14 Game 80 (  Listen and Practice  )
        ////////////////////////////////////////////////////////

        $l14G80image = $domain . "/storage/images/Grade_1/lesson_14/listen_and_practice/";
        $G1_L14_listen_and_practice_path = "Grade_1/" . "Lesson_14/" . "listen_and_practice/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "audio.mp3", 'q_content' => "This is a cat. It's small. It's yellow.", 'q_image' =>  $l14G80image . "true_image.png", 'a_content' => 1, 'a_image' =>  $l14G80image . "cat_image"],
            ['round' => 1, 'game_id' => 80, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G80image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 2, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "audio.mp3", 'q_content' => "This is a cat. It's small. It's yellow.", 'q_image' =>  $l14G80image . "true_image.png", 'a_content' => 0, 'a_image' =>  $l14G80image . "cat_image"],
            ['round' => 2, 'game_id' => 80, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G80image . "false_image.png", 'a_content' => 1, 'a_image' => null],

            ['round' => 3, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "This-is-a-house-Its-big-It.mp3", 'q_content' => "This house is big. It's big. It's white.", 'q_image' =>  $l14G80image . "true_image.png", 'a_content' => 1, 'a_image' =>  $l14G80image . "house_image"],
            ['round' => 3, 'game_id' => 80, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G80image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 4, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "This-is-a-cake-Its-hard-It.mp3", 'q_content' => "It's a cake. It's hard. It's yellow", 'q_image' =>  $l14G80image . "true_image.png", 'a_content' => 0, 'a_image' =>  $l14G80image . "cake_image"],
            ['round' => 4, 'game_id' => 80, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G80image . "false_image.png", 'a_content' => 1, 'a_image' => null],

            ['round' => 5, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "This-is-a-car-Its-old-and-sl-2.mp3", 'q_content' => "This is a car. It's old and slow. It's green", 'q_image' =>  $l14G80image . "true_image.png", 'a_content' => 1, 'a_image' =>  $l14G80image . "car_image"],
            ['round' => 5, 'game_id' => 80, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G80image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 6, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "Its-a-doll-Its-soft-Its-y.mp3", 'q_content' => "It's a doll. It's soft. It's yellow.", 'q_image' =>  $l14G80image . "true_image.png", 'a_content' => 1, 'a_image' =>  $l14G80image . "doll_image"],
            ['round' => 6, 'game_id' => 80, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G80image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 7, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "This-is-a-bag-Its-old-Its.mp3", 'q_content' => "This is a bag. It's old. It's red.", 'q_image' =>  $l14G80image . "true_image.png", 'a_content' => 0, 'a_image' =>  $l14G80image . "bag_image"],
            ['round' => 7, 'game_id' => 80, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G80image . "false_image.png", 'a_content' => 1, 'a_image' => null],

            ['round' => 8, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "This-is-a-pen-Its-long-Its.mp3", 'q_content' => "This is a pen. It's long. It's brown.", 'q_image' =>  $l14G80image . "true_image.png", 'a_content' => 1, 'a_image' =>  $l14G80image . "pen_image"],
            ['round' => 8, 'game_id' => 80, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G80image . "false_image.png", 'a_content' => 0, 'a_image' => null],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 14 Game 81 (  Grammar  )
        ////////////////////////////////////////////////////////

        $l14G81image = $domain . "/storage/images/Grade_1/lesson_14/grammar/";
        $G1_L14_grammar_path = "Grade_1/" . "Lesson_14/" . "grammar/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 81, 'q_audio' => $AudioDomain . $G1_L14_grammar_path . "Its-car.mp3", 'q_content' => "It's ___ car.", 'q_image' =>  $l14G81image . "a_image.png", 'a_content' => 1],
            ['round' => 1, 'game_id' => 81, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G81image . "an_image.png", 'a_content' => 0],

            ['round' => 2, 'game_id' => 81, 'q_audio' => $AudioDomain . $G1_L14_grammar_path . "Its-fan.mp3", 'q_content' => "It's ___ fan.", 'q_image' =>  $l14G81image . "a_image.png", 'a_content' => 1],
            ['round' => 2, 'game_id' => 81, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G81image . "an_image.png", 'a_content' => 0],

            ['round' => 3, 'game_id' => 81, 'q_audio' => $AudioDomain . $G1_L14_grammar_path . "Its-cake.mp3", 'q_content' => "It's ___ cake.", 'q_image' =>  $l14G81image . "a_image.png", 'a_content' => 1],
            ['round' => 3, 'game_id' => 81, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G81image . "an_image.png", 'a_content' => 0],

            ['round' => 4, 'game_id' => 81, 'q_audio' => $AudioDomain . $G1_L14_grammar_path . "Its-egg.mp3", 'q_content' => "It's ___ fan.", 'q_image' =>  $l14G81image . "a_image.png", 'a_content' => 0],
            ['round' => 4, 'game_id' => 81, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l14G81image . "an_image.png", 'a_content' => 1],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 14 Game 82 (  Writing  )
        ////////////////////////////////////////////////////////

        $l14G82image = $domain . "/storage/images/Grade_1/lesson_14/writing/";
        $G1_L14_writing_path = "Grade_1/" . "Lesson_14/" . "writing/";


        // round 1
        $G82R1 = [
            "A", "G", "E", "E"
        ];
        foreach ($G82R1 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 82, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 82,  "q_image" => $l14G82image . "agee_image", 'a_content' => "Thank U pr", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "agee.mp3"],
        ]);

        // round 2
        $G82R2 = [
            "O", "G", "T", "A"
        ];
        foreach ($G82R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 82,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 82, "q_image" => $l14G82image . "GOAT_image", 'a_content' => "GOAT", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "goat.mp3"],
        ]);

        // round 3
        $G82R3 = [
            "I", "F", "S", "H"
        ];
        foreach ($G82R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 82, 'q_content' => $i],
            ]);
        }
        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 82, "q_image" => $l14G82image . "FISH_image", 'a_content' => "FISH", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "fish.mp3"],
        ]);

        // round 4
        $G82R4 = [
            "N", "P", "E"
        ];
        foreach ($G82R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 82,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 82, "q_image" => $l14G82image . "PEN_image", 'a_content' => "PEN", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "pen.mp3"],
        ]);

        // round 5
        $G82R5 = [
            "C", "E", "K", "A"
        ];
        foreach ($G82R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 82, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 82, "q_image" => $l14G82image . "CAKE_image",  'a_content' => "CAKE", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "cake.mp3"],
        ]);

        // round 6
        $G82R6 = [
            "L", "F", "R", "W", "E", "O"
        ];
        foreach ($G82R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 82, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 82, "q_image" => $l14G82image . "FLOWER_image", 'a_content' => "FLOWER", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "flower_audio.mp3"],
        ]);

        // round 7
        $G82R7 = [
            "L", "A", "E", "P", "P"
        ];
        foreach ($G82R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 82, 'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 82, "q_image" => $l14G82image . "APPLE_image",  'a_content' => "APPLE", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "apple.mp3"],
        ]);

        // round 8
        $G82R8 = [
            "I", "E", "N", "P", "L", "C"
        ];
        foreach ($G82R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 82,  'q_content' => $i],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 82, "q_image" => $l14G82image . "PENCIL_image", 'a_content' => "PENCIL", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "pencil.mp3"],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 14 Game 83 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l14G83image = $domain . "/storage/images/Grade_1/lesson_14/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 83, 'q_image' => $l14G83image . "hat_image", "q_content" => "Describe the picture. This is ____. It's ____."],
            ['round' => 2, 'game_id' => 83, 'q_image' => $l14G83image . "goat_image", "q_content" => "Describe the picture. This is ____. It's ____."],
            ['round' => 3, 'game_id' => 83, 'q_image' => $l14G83image . "fish_image", "q_content" => "Describe the picture. This is ____. It's ____."],
            ['round' => 4, 'game_id' => 83, 'q_image' => $l14G83image . "house_image", "q_content" => "Describe the picture. This is ____. It's ____."],
            ['round' => 5, 'game_id' => 83, 'q_image' => $l14G83image . "pencil_image", "q_content" => "Describe the picture. This is ____. It's ____."],
            ['round' => 6, 'game_id' => 83, 'q_image' => $l14G83image . "apple_image", "q_content" => "Describe the picture. This is ____. It's ____."],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 15 Game 84 (  Target language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 84, 'a_content' => 'lesson_15_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 84, 'a_content' => 'lesson_15_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 15 Game 85, 86 (  Read, Listen and Repeat  )
        ////////////////////////////////////////////////////////


        $G1_L15_Read_Listen_n_Repeat_path = "Grade_1/" . "Lesson_15/" . "Read_listen_n_Repeat/";
        $l15G85image = $domain . "/storage/images/Grade_1/lesson_15/Read_Listen_&_Repeat/";


        DB::table('ans_n_ques')->insert([

            // game 85
            ['round' => 1, 'game_id' => 85, 'q_image' => $l15G85image . "girl_image", "q_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "audio.mp3", "q_content" => "Yellow Cat, Yellow Cat. What's this?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 1, 'game_id' => 85, 'q_image' => $l15G85image . "dog_image", "q_audio" => null, "q_content" => null, 'a_image' => $l15G85image . "cat_image", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "audio.mp3", "a_content" => "Dog. Dog It's a Dog. It's big. It's black."],

            ['round' => 2, 'game_id' => 85, 'q_image' => $l15G85image . "cat_image", "q_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "audio.mp3", "q_content" => "Black dog. Black dog, what's this?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 2, 'game_id' => 85, 'q_image' => $l15G85image . "cock_image", "q_audio" => null, "q_content" => null, 'a_image' => $l15G85image . "dog_image", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "audio.mp3", "a_content" => "Cock. Cock. it's a cock. It's small. It's white."],


            // game 86
            ['round' => 1, 'game_id' => 86, 'q_image' => $l15G85image . "mouse_image", "q_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "audio.mp3", "q_content" => "Yellow Cat, Yellow Cat. How are you?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 1, 'game_id' => 86, 'q_image' => null, "q_audio" => null, "q_content" => null, 'a_image' => $l15G85image . "cat_image", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "audio.mp3", "a_content" => "I'm fine. I'm ok."],

            ['round' => 2, 'game_id' => 86, 'q_image' => $l15G85image . "dogcat_image", "q_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "audio.mp3", "q_content" => "Red ant, Red ant. How are you?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 2, 'game_id' => 86, 'q_image' => null, "q_audio" => null, "q_content" => null, 'a_image' => $l15G85image . "ant_image", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "audio.mp3", "a_content" => "I'm great. I'm great."],

            ['round' => 3, 'game_id' => 86, 'q_image' => $l15G85image . "dog_image", "q_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "audio.mp3", "q_content" => "Tom, Tom, What's this?", 'a_image' => null, "a_audio" => null, "a_content" => null],
            ['round' => 3, 'game_id' => 86, 'q_image' => $l15G85image . "mouse_image", "q_audio" => null, "q_content" => null, 'a_image' => $l15G85image . "cat_image", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "audio.mp3", "a_content" => "Mouse, Mouse. It's mouse. It's small. It's brown."],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 15 Game 87, 88 (  Listen and Practice  )
        ////////////////////////////////////////////////////////

        $l15_G87_G88_image = $domain . "/storage/images/Grade_1/lesson_15/listen_n_practice/";
        $G1_L15_listen_n_practice = "Grade_1/" . "Lesson_15/" . "listen_n_practice/";


        // game 87
        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "orange fish", 'q_image' => $l15_G87_G88_image . "orange_fish_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "orange-fish" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "yellow duck", 'q_image' => $l15_G87_G88_image . "yellow_duck_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "yellow-duck" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "white sheep", 'q_image' => $l15_G87_G88_image . "white_sheep_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "white-sheep" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "black dog", 'q_image' => $l15_G87_G88_image . "black_dog_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "black-dog" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "green chameleon", 'q_image' => $l15_G87_G88_image . "green_chameleon_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "green-chameleon" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "red bird", 'q_image' => $l15_G87_G88_image . "red_bird_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "red-bird" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "brown horse", 'q_image' => $l15_G87_G88_image . "brown_horse_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "brown-horse" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],


            [
                'round' => 2, 'game_id' => 87, 'a_content' => "yellow cat", 'q_image' => $l15_G87_G88_image . "yellow_cat_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "yellow-cat" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "cock", 'q_image' => $l15_G87_G88_image . "cock_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "cock" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "blue bear", 'q_image' => $l15_G87_G88_image . "blue_bear_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "blue-bear" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "brown mouse", 'q_image' => $l15_G87_G88_image . "brown_mouse_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "brown-mouse" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "pink pig", 'q_image' => $l15_G87_G88_image . "pink_pig_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "pink-pig" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "red ant", 'q_image' => $l15_G87_G88_image . "red_ant_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "red-ant" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "black dog", 'q_image' => $l15_G87_G88_image . "black_dog_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "black-dog" . ".mp3", "background" => $l15_G87_G88_image . "background.png"
            ],
        ]);


        // game 88
        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-an-ant-Its-small-Its.mp3", 'q_content' => "It's an ant. It's small. It's red.", 'q_image' =>  $l15_G87_G88_image . "true_image.png", 'a_content' => 1, 'a_image' =>  $l15_G87_G88_image . "ant_image"],
            ['round' => 1, 'game_id' => 88, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15_G87_G88_image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 2, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-rabbit-Its-fast-Its.mp3", 'q_content' => "It's a rabbit. It's fast. It's brown.", 'q_image' =>  $l15_G87_G88_image . "true_image.png", 'a_content' => 1, 'a_image' =>  $l15_G87_G88_image . "rabbit_image"],
            ['round' => 2, 'game_id' => 88, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15_G87_G88_image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 3, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-dog-Its-big-Its-blu.mp3", 'q_content' => "It's a dog. It's big. It's blue.", 'q_image' =>  $l15_G87_G88_image . "true_image.png", 'a_content' => 0, 'a_image' =>  $l15_G87_G88_image . "dog_image"],
            ['round' => 3, 'game_id' => 88, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15_G87_G88_image . "false_image.png", 'a_content' => 1, 'a_image' => null],

            ['round' => 4, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-cok-Its-big-Its-red.mp3", 'q_content' => "It's a cock. It's big. It's red.", 'q_image' =>  $l15_G87_G88_image . "true_image.png", 'a_content' => 0, 'a_image' =>  $l15_G87_G88_image . "cock_image"],
            ['round' => 4, 'game_id' => 88, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15_G87_G88_image . "false_image.png", 'a_content' => 1, 'a_image' => null],

            ['round' => 5, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-kitten-Its-dirty-It.mp3", 'q_content' => "It's a kitten. It's dirty. It's yellow.", 'q_image' =>  $l15_G87_G88_image . "true_image.png", 'a_content' => 0, 'a_image' =>  $l15_G87_G88_image . "kitten_image"],
            ['round' => 5, 'game_id' => 88, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15_G87_G88_image . "false_image.png", 'a_content' => 1, 'a_image' => null],

            ['round' => 6, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-bear-Its-old-Its-br.mp3", 'q_content' => "It's a bear. It's old. It's brown.", 'q_image' =>  $l15_G87_G88_image . "true_image.png", 'a_content' => 1, 'a_image' =>  $l15_G87_G88_image . "bear_image"],
            ['round' => 6, 'game_id' => 88, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15_G87_G88_image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 7, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-hamster-Its-small-It.mp3", 'q_content' => "It's a hamster. It's small. It's grey and white.", 'q_image' =>  $l15_G87_G88_image . "true_image.png", 'a_content' => 1, 'a_image' =>  $l15_G87_G88_image . "hamster_image"],
            ['round' => 7, 'game_id' => 88, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15_G87_G88_image . "false_image.png", 'a_content' => 0, 'a_image' => null],

            ['round' => 8, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-mouse-Its-fast-Its.mp3", 'q_content' => "It's a mouse. It's fast. It's brown.", 'q_image' =>  $l15_G87_G88_image . "true_image.png", 'a_content' => 0, 'a_image' =>  $l15_G87_G88_image . "mouse_image"],
            ['round' => 8, 'game_id' => 88, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15_G87_G88_image . "false_image.png", 'a_content' => 1, 'a_image' => null],

            ['round' => 9, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-cat-Its-clean-Its-w.mp3", 'q_content' => "It's a cat. It's clean. It's white.", 'q_image' =>  $l15_G87_G88_image . "true_image.png", 'a_content' => 0, 'a_image' =>  $l15_G87_G88_image . "cat_image"],
            ['round' => 9, 'game_id' => 88, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15_G87_G88_image . "false_image.png", 'a_content' => 1, 'a_image' => null],

            ['round' => 10, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-turtle-Its-slow-Its.mp3", 'q_content' => "It's a turtle. It's slow. It's green.", 'q_image' =>  $l15_G87_G88_image . "true_image.png", 'a_content' => 1, 'a_image' =>  $l15_G87_G88_image . "turtle_image"],
            ['round' => 10, 'game_id' => 88, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15_G87_G88_image . "false_image.png", 'a_content' => 0, 'a_image' => null],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 15 Game 89 (  Grammar  )
        ////////////////////////////////////////////////////////

        $l15G89image = $domain . "/storage/images/Grade_1/lesson_15/grammar/";
        $G1_L15_grammar_path = "Grade_1/" . "Lesson_15/" . "grammar/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 89, 'q_audio' => $AudioDomain . $G1_L15_grammar_path . "Its-ant.mp3", 'q_content' => "It's ___ ant.", 'q_image' =>  $l15G89image . "a_image.png", 'a_image' =>  $l15G89image . "ant_image", 'a_content' => 0],
            ['round' => 1, 'game_id' => 89, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15G89image . "an_image.png", 'a_image' => null, 'a_content' => 1],

            ['round' => 2, 'game_id' => 89, 'q_audio' => $AudioDomain . $G1_L15_grammar_path . "Its-cok.mp3", 'q_content' => "It's ___ cock.", 'q_image' =>  $l15G89image . "a_image.png", 'a_image' =>  $l15G89image . "cock_image", 'a_content' => 1],
            ['round' => 2, 'game_id' => 89, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15G89image . "an_image.png", 'a_image' => null, 'a_content' => 0],

            ['round' => 3, 'game_id' => 89, 'q_audio' => $AudioDomain . $G1_L15_grammar_path . "Its-hamster.mp3", 'q_content' => "It's ___ hamster.", 'q_image' =>  $l15G89image . "a_image.png", 'a_image' =>  $l15G89image .  "hamster_image", 'a_content' => 1],
            ['round' => 3, 'game_id' => 89, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15G89image . "an_image.png", 'a_image' => null, 'a_content' => 0],

            ['round' => 4, 'game_id' => 89, 'q_audio' => $AudioDomain . $G1_L15_grammar_path . "Its-duck.mp3", 'q_content' => "It's ___ duck.", 'q_image' =>  $l15G89image . "a_image.png", 'a_image' =>  $l15G89image . "duck_image", 'a_content' => 1],
            ['round' => 4, 'game_id' => 89, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15G89image . "an_image.png", 'a_image' => null, 'a_content' => 0],

            ['round' => 5, 'game_id' => 89, 'q_audio' => $AudioDomain . $G1_L15_grammar_path . "Its-bear.mp3", 'q_content' => "It's ___ bear.", 'q_image' =>  $l15G89image . "a_image.png", 'a_image' =>  $l15G89image . "bear_image", 'a_content' => 1],
            ['round' => 5, 'game_id' => 89, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l15G89image . "an_image.png", 'a_image' => null, 'a_content' => 0],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 15 Game 90 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l15G90image = $domain . "/storage/images/Grade_1/lesson_15/Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 90, 'q_image' => $l15G90image . "dog_image", "q_content" => "Describe the animals and their sizes and colours."],
            ['round' => 2, 'game_id' => 90, 'q_image' => $l15G90image . "turtle_image", "q_content" => "Describe the animals and their sizes and colours."],
            ['round' => 3, 'game_id' => 90, 'q_image' => $l15G90image . "cock_image", "q_content" => "Describe the animals and their sizes and colours."],
            ['round' => 4, 'game_id' => 90, 'q_image' => $l15G90image . "ant_image", "q_content" => "Describe the animals and their sizes and colours."],
            ['round' => 5, 'game_id' => 90, 'q_image' => $l15G90image . "cat_image", "q_content" => "Describe the animals and their sizes and colours."],

        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 15 Game 91 (  Reading Passage  )
        ////////////////////////////////////////////////////////

        $G1_L15_reading_passage_path = "Grade_1/" . "Lesson_15/" . "reading_passage/";
        $l15G91image = $domain . "/storage/images/Grade_1/lesson_15/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "audio.mp3", 'q_content' => "brown and white", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "audio.mp3", 'q_content' => "black and white", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio.mp3", 'q_content' => "grey and white", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "The-cow-is-brown-and-white-bla.mp3", "q_conver" => "The cow is ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 91, "q_image" => $l15G91image . "character.png", "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-He-has-a-cow-a-wh.mp3", "q_content" => "Ben's farm", 'q_conver' => "Ben is six. He has a cow, a white cock, a white sheep and a pig. The cow is black and white. The pig is pink and it's small. He also has a horse. The horse is brown. Ben has a big farm.", 'a_content' => null, "background" => $l15G91image . "background.png"],


            ['round' => 2, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio.mp3", 'q_content' => "big", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio.mp3", 'q_content' => "ban", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio.mp3", 'q_content' => "small", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "The-pig-is-big-Ben-small.mp3", "q_conver" =>  "The pig is ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 91, "q_image" =>  $l15G91image . "character.png", "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-He-has-a-cow-a-wh.mp3", "q_content" => "Ben's farm", 'q_conver' => "Ben is six. He has a cow, a white cock, a white sheep and a pig. The cow is black and white. The pig is pink and it's small. He also has a horse. The horse is brown. Ben has a big farm.", 'a_content' => null, "background" => $l15G91image . "background.png"],


            ['round' => 3, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio", 'q_content' => "big", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio", 'q_content' => "ban", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio", 'q_content' => "small", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "He-has-a-farm-Its-big-Ben-sm.mp3", "q_conver" => "He has a farm. It's ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 91, "q_image" =>  $l15G91image . "character.png", "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-He-has-a-cow-a-wh.mp3", "q_content" => "Ben's farm", 'q_conver' => "Ben is six. He has a cow, a white cock, a white sheep and a pig. The cow is black and white. The pig is pink and it's small. He also has a horse. The horse is brown. Ben has a big farm.", 'a_content' => null, "background" => $l15G91image . "background.png"],


            ['round' => 4, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio", 'q_content' => "goat", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio", 'q_content' => "sheep", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio", 'q_content' => "duck", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "He-has-a-goat-sheep-duck.mp3", "q_conver" => "He has a ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 91, "q_image" =>  $l15G91image . "character.png", "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-He-has-a-cow-a-wh.mp3", "q_content" => "Ben's farm", 'q_conver' => "Ben is six. He has a cow, a white cock, a white sheep and a pig. The cow is black and white. The pig is pink and it's small. He also has a horse. The horse is brown. Ben has a big farm.", 'a_content' => null, "background" => $l15G91image . "background.png"],


            ['round' => 5, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio", 'q_content' => "six", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio", 'q_content' => "pig", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "audio", 'q_content' => "big", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-pig-big.mp3", "q_conver" => "Ben is ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 91, "q_image" =>  $l15G91image . "character.png", "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-He-has-a-cow-a-wh.mp3", "q_content" => "Ben's farm", 'q_conver' => "Ben is six. He has a cow, a white cock, a white sheep and a pig. The cow is black and white. The pig is pink and it's small. He also has a horse. The horse is brown. Ben has a big farm.", 'a_content' => null, "background" => $l15G91image . "background.png"],


        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 16 Game 92 (  Target language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 92, 'a_content' => 'lesson_16_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 92, 'a_content' => 'lesson_16_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 16 Game 93 (  Reading, Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l16G93image = $domain . "/storage/images/Grade_1/lesson_16/reading/";
        $G1_L16_reading = "Grade_1/" . "Lesson_16/" . "reading/";


        $ansl16Content = [
            "Ice-cream", "Ice", "Ink", "Iron", "Jacket", "Jam", "ketchup", "Key", "Kite", "Lamp", "Lemon", "Lock", "lollipop"
        ];

        $ansl16Image = [
            "Ice-cream", "Ice", "Ink", "Iron", "Jacket", "Jam", "ketchup", "Key", "Kite", "Lamp", "Lemon", "Lock", "lollipop"
        ];

        $ansl16Audio = [
            "ice-cream", "ice", "ink", "iron", "jacket", "jam", "ketchup", "key", "kite", "lamp", "lemon", "lock", "lollipop"
        ];



        $G1_L16_Game93_index = 0;

        foreach ($ansl16Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 93, 'a_content' => $key, 'a_image' => $l16G93image . $ansl16Image[$G1_L16_Game93_index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L16_reading . $ansl16Audio[$G1_L16_Game93_index] . ".mp3"
                ],
            ]);
            $G1_L16_Game93_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 16 Game 94 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l16G94image = $domain . "/storage/images/Grade_1/lesson_16/listen_n_practice/";
        $G1_L16_listen_n_practice = "Grade_1/" . "Lesson_16/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 94, 'a_content' => "jam", 'q_image' => $l16G94image . "jam_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "jam" . ".mp3", "background" => $l16G94image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 94, 'a_content' => "lollipop", 'q_image' => $l16G94image . "lollipop_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "lollipop" . ".mp3", "background" => $l16G94image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 94, 'a_content' => "ketchup", 'q_image' => $l16G94image . "ketchup_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "ketchup" . ".mp3", "background" => $l16G94image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 94, 'a_content' => "key", 'q_image' => $l16G94image . "key_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "key" . ".mp3", "background" => $l16G94image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 94, 'a_content' => "lock", 'q_image' => $l16G94image . "lock_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "lock" . ".mp3", "background" => $l16G94image . "background.png"
            ],


            [
                'round' => 2, 'game_id' => 94, 'a_content' => "lollipop", 'q_image' => $l16G94image . "lollipop_image" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "lollipop" . ".mp3", "background" => $l16G94image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 94, 'a_content' => "ice", 'q_image' => $l16G94image . "ice" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "ice" . ".mp3", "background" => $l16G94image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 94, 'a_content' => "jam", 'q_image' => $l16G94image . "jam" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "jam" . ".mp3", "background" => $l16G94image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 94, 'a_content' => "lemon", 'q_image' => $l16G94image . "lemon" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "lemon" . ".mp3", "background" => $l16G94image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 94, 'a_content' => "ice-cream", 'q_image' => $l16G94image . "ice-cream" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "ice-cream" . ".mp3", "background" => $l16G94image . "background.png"
            ],

        ]);
    }
}
