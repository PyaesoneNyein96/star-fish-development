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
        $l3G13image = $domain . "/storage/images/Grade_1/lesson_3/read_listen_and_practice/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 13, 'a_image' => $l3G13image . "susan.png", "a_audio" => $AudioDomain . $G1_L3_read_listen_and_practice_path . "audio.mp3", "a_conver" => "I'm Susan.", "background" =>  $l3G13image . "bg1.png"],
            ['round' => 1, 'game_id' => 13, 'a_image' => $l3G13image . "mary-nice.png", "a_audio" => $AudioDomain . $G1_L3_read_listen_and_practice_path . "audio.mp3", "a_conver" => "Nice to meet you.", "background" =>  $l3G13image . "bg1.png"],

            ['round' => 2, 'game_id' => 13, 'a_image' => $l3G13image . "mary.png", "a_audio" => $AudioDomain . $G1_L3_read_listen_and_practice_path . "audio.mp3", "a_conver" => "Hello, I'm Mary.", "background" =>  $l3G13image . "bg2.png"],
            ['round' => 2, 'game_id' => 13, 'a_image' => $l3G13image . "susan-nice.png", "a_audio" => $AudioDomain . $G1_L3_read_listen_and_practice_path . "audio.mp3", "a_conver" => "Nice to meet you.", "background" =>  $l3G13image . "bg2.png"],

            ['round' => 3, 'game_id' => 13, 'a_image' => $l3G13image . "tom.png", "a_audio" => $AudioDomain . $G1_L3_read_listen_and_practice_path . "audio.mp3", "a_conver" => "Hello, I'm Tom.", "background" =>  $l3G13image . "bg3.png"],
            ['round' => 3, 'game_id' => 13, 'a_image' => $l3G13image . "jerry-nice.png", "a_audio" => $AudioDomain . $G1_L3_read_listen_and_practice_path . "audio.mp3", "a_conver" => "Nice to meet you.", "background" =>  $l3G13image . "bg3.png"],

            ['round' => 4, 'game_id' => 13, 'a_image' => $l3G13image . "jerry.png", "a_audio" => $AudioDomain . $G1_L3_read_listen_and_practice_path . "audio.mp3", "a_conver" => "Hello, I'm Jerry.", "background" =>  $l3G13image . "bg3.png"],
            ['round' => 4, 'game_id' => 13, 'a_image' => $l3G13image . "tom-nice.png", "a_audio" => $AudioDomain . $G1_L3_read_listen_and_practice_path . "audio.mp3", "a_conver" => "Nice to meet you.", "background" =>  $l3G13image . "bg3.png"],

        ]);





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
                "mary1",
                "mike1",

                "chris",
                "susan1"
            ],
            [
                "mary1",
                "mike1",

                "chris",
                "susan1"
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
                    ['round' => $G15Id, 'game_id' => 14, 'a_conver' => $converG15[$i][$j], 'a_image' => $l3G14image . $imageG15[$i][$j] . ".png", 'a_audio' => $AudioDomain . $G1_L3_listen_and_practice_path . $audiosG15[$i][$j] . ".mp3", "background" => $l3G14image . "background.png"],
                ]);
                $G15Id++;
            }
        }


        // round 3 + 4 + 5

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "mary.png", 'a_content' => 1],
            ['round' => 3, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "susan.png", 'a_content' => 0],
            ['round' => 3, 'game_id' => 14, 'q_audio' => $AudioDomain . $G1_L3_listen_and_practice_path . "Who-is-Mary.mp3", 'q_content' =>  "Who is Mary?", 'q_image' => null, 'a_content' => null],

            ['round' => 4, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "mary.png", 'a_content' => 0],
            ['round' => 4, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "susan.png", 'a_content' => 1],
            ['round' => 4, 'game_id' => 14, 'q_audio' => $AudioDomain . $G1_L3_listen_and_practice_path . "Who-is-Susan.mp3", 'q_content' =>  "Who is Susan?", 'q_image' => null, 'a_content' => null],

            ['round' => 5, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "mike.png", 'a_content' => 1],
            ['round' => 5, 'game_id' => 14, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l3G14image . "susan.png", 'a_content' => 0],
            ['round' => 5, 'game_id' => 14, 'q_audio' => $AudioDomain . $G1_L3_listen_and_practice_path . "Whos_Mike.mp3", 'q_content' =>  "Who is Mike?", 'q_image' => null, 'a_content' => null],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 3 Game 15 ( Writing (Arrange Order) )
        ////////////////////////////////////////////////////////

        $G1_L3_writing_path = "Grade_1/" . "Lesson_3/" . "writing/";
        $l3G15image = $domain . "/storage/images/Grade_1/lesson_3/writing/";


        $qG16R1 = [
            ["to", "meet", "Hello,", "I'm", "Nice", "you.", "Mary."],
            ["meet", "Nice", "Mike.", "to", "Hello,", "you.", "I'm"],
            ["I'm", "you.", "Nice", "meet", "Tom.", "to", "Hello,"],
        ];

        $audiosG16 = [
            "Hello-Im-Mary-Nice-to-meet",
            "Hello-Im-Mike-Nice-to-meet-y",
            "Hello-Im-Tom-Nice-to-meet-y"
        ];

        $aG16R1 = [
            "Hello, I'm Mary. Nice to meet you.",
            "Hello, I'm Mike. Nice to meet you.",
            "Hello, I'm Tom. Nice to meet you.",
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
            ['round' => 1, 'game_id' => 18, 'a_image' => $l4image . "1.png", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "Whats-your-name.mp3", "a_conver" => "What's your name?", "background" =>  $l4image . "bg1.png"],
            ['round' => 1, 'game_id' => 18, 'a_image' => $l4image . "1.png", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "SubBlock_My-names-mike.mp3", "a_conver" => "My name's Mike.", "background" =>  $l4image . "bg1.png"],

            ['round' => 2, 'game_id' => 18, 'a_image' => $l4image . "2.png", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "SubBlock_Whats-your-name_mike.mp3", "a_conver" => "What's your name?", "background" =>  $l4image . "bg2.png"],
            ['round' => 2, 'game_id' => 18, 'a_image' => $l4image . "2.png", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-name's-Susan.mp3", "a_conver" => "My name's Susan.", "background" =>  $l4image . "bg2.png"],

            ['round' => 3, 'game_id' => 18, 'a_image' => $l4image . "dory.png", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "Whats-your-name.mp3", "a_conver" => "What's your name?", "background" =>  $l4image . "bg3.png"],
            ['round' => 3, 'game_id' => 18, 'a_image' => $l4image . "nemo.png", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-names-Nemo.mp3", "a_conver" => "My name's Nemo.", "background" =>  $l4image . "bg3.png"],

            ['round' => 4, 'game_id' => 18, 'a_image' => $l4image . "nemo1.png", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "SubBlock_Whats-your-name_nemo.mp3", "a_conver" => "What's your name?", "background" =>  $l4image . "bg3.png"],
            ['round' => 4, 'game_id' => 18, 'a_image' => $l4image . "dory1.png", "a_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "My-names-Dory.mp3", "a_conver" => "My name's Dory.", "background" =>  $l4image . "bg3.png"],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 4 Game 19 (  Read, Listen & Repeat )
        ////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 19, 'q_image' => $l4image . "bowie.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "SubBlock_My-names-Bowie.mp3", "q_conver" => "My name's Bowie.", "q_content" => "What's your name?"],
            ['round' => 2, 'game_id' => 19, 'q_image' => $l4image . "kelly.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "SubBlock_My-names-kelly.mp3",  "q_conver" => "My name's Kelly.", "q_content" => "What's your name?"],
            ['round' => 3, 'game_id' => 19, 'q_image' => $l4image . "goldie.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "SubBlock_My-names-Goldie.mp3",  "q_conver" => "My name's Goldie.", "q_content" => "What's your name?"],
            ['round' => 4, 'game_id' => 19, 'q_image' => $l4image . "blu.png", "q_audio" => $AudioDomain . $G1_L4_Read_Listen_n_Repeat_path . "SubBlock_My-names-Blu.mp3",  "q_conver" => "My name's Blu.", "q_content" => "What's your name?"],
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
            "your", "What's", "name", "?", "Dory.", "My", "name's"
        ];
        foreach ($qG21R1 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 21, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 21, 'a_content' => "What's your name ? My name's Dory.", 'a_audio' => "audio"],
        ]);

        // round 2
        $qG21R2 = [
            "is", "your", "name", "What", "?", "name", "is", "My", "Susan."
        ];

        foreach ($qG21R2 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 21, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 21, 'a_content' => "What is your name ? My name is Susan.", 'a_audio' => "audio"],
        ]);

        // round 3
        $qG21R3 = [
            "your", "What's", "name", "?", "Chris.", "name's", "My"
        ];

        foreach ($qG21R3 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 21, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 21, 'a_content' => "What's your name ? My name's Chris.", 'a_audio' => "audio"],
        ]);

        // round 4
        $qG21R4 = [
            "name", "What", "your", "is", "?", "name", "Mary.", "My", "is"
        ];

        foreach ($qG21R4 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 21, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 21, 'a_content' => "What is your name ? My name is Mary.", 'a_audio' => "audio"],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 22 (  Target Language & Grammar Explanation  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 22, 'a_content' => 'lesson_5_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 22, 'a_content' => 'lesson_5_video', 'isLocal' => 0]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 23 (  Listen and Practice  )
        ////////////////////////////////////////////////////////

        $l5G23image = $domain . "/storage/images/Grade_1/lesson_5/listern_n_practice/";
        $G1_L5_G23_listen_n_practice_path = "Grade_1/" . "Lesson_5/" . "listern_n_practice/";

        DB::table('ans_n_ques')->insert([
            ["round" => 1, "game_id" => 23, "q_image" => $l5G23image . "morning.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "game_id" => 23, "q_image" => $l5G23image . "evening.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "game_id" => 23, "q_image" => $l5G23image . "afternoon.png", "q_audio" => null, "a_content" => 1],
            ["round" => 1, "game_id" => 23, "q_image" =>  null, "q_audio" => $AudioDomain . $G1_L5_G23_listen_n_practice_path . "afternoon" . ".mp3", "a_content" => null],

            ["round" => 2, "game_id" => 23, "q_image" => $l5G23image . "evening.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "game_id" => 23, "q_image" => $l5G23image . "morning.png", "q_audio" => null, "a_content" => 1],
            ["round" => 2, "game_id" => 23, "q_image" => $l5G23image . "afternoon.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "game_id" => 23, "q_image" =>  null, "q_audio" => $AudioDomain . $G1_L5_G23_listen_n_practice_path . "Morning" . ".mp3", "a_content" => null],

            ["round" => 3, "game_id" => 23, "q_image" => $l5G23image . "afternoon.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "game_id" => 23, "q_image" => $l5G23image . "evening.png", "q_audio" => null, "a_content" => 1],
            ["round" => 3, "game_id" => 23, "q_image" => $l5G23image . "morning.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "game_id" => 23, "q_image" =>  null, "q_audio" => $AudioDomain . $G1_L5_G23_listen_n_practice_path . "Evening" . ".mp3", "a_content" => null],

        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 24 (  Read Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $G1_L5_G24_read_listen_n_repeat_path = "Grade_1/" . "Lesson_5/" . "Read_listern_n_repeat/";
        $l5G24image = $domain . "/storage/images/Grade_1/lesson_5/Read_listern_n_repeat/";


        DB::table('ans_n_ques')->insert([
            ["round" => 1, "game_id" => 24, "a_image" => $l5G24image . "boy.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-morning.mp3", "a_conver" => "Good Morning", "background" => $l5G24image . "bg.png"],
            ["round" => 1, "game_id" => 24, "a_image" => $l5G24image . "girl.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-morning.mp3", "a_conver" => "Good Morning", "background" => $l5G24image . "bg.png"],

            ["round" => 2, "game_id" => 24, "a_image" => $l5G24image . "boy.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-afternoon.mp3", "a_conver" => "Good Afternoon", "background" => $l5G24image . "bg.png"],
            ["round" => 2, "game_id" => 24, "a_image" => $l5G24image . "girl.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-afternoon.mp3", "a_conver" => "Good Afternoon", "background" => $l5G24image . "bg.png"],

            ["round" => 3, "game_id" => 24, "a_image" => $l5G24image . "boy.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-evening.mp3", "a_conver" => "Good Evening", "background" => $l5G24image . "bg.png"],
            ["round" => 3, "game_id" => 24, "a_image" => $l5G24image . "girl.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "Good-evening.mp3", "a_conver" => "Good Evening", "background" => $l5G24image . "bg.png"],


            ["round" => 4, "game_id" => 24, "a_image" => $l5G24image . "boy.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "i'm_fine.mp3", "a_conver" => "I'm fine.", "background" => $l5G24image . "bg.png"],
            ["round" => 4, "game_id" => 24, "a_image" => $l5G24image . "girl.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "how_are_you_chris.mp3", "a_conver" => "How are you, Chris?", "background" => $l5G24image . "bg.png"],

            ["round" => 5, "game_id" => 24, "a_image" => $l5G24image . "boy.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "how_are_you_susan.mp3", "a_conver" => "How are you, Susan?", "background" => $l5G24image . "bg.png"],
            ["round" => 5, "game_id" => 24, "a_image" => $l5G24image . "girl.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "i'm_ok.mp3", "a_conver" => "I'm OK.", "background" => $l5G24image . "bg.png"],


            ["round" => 6, "game_id" => 24, "a_image" => $l5G24image . "girl2.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "good_afternoon_susan.mp3", "a_conver" => "Good Afternoon, Susan.", "background" => $l5G24image . "bg.png"],
            ["round" => 6, "game_id" => 24, "a_image" => $l5G24image . "girl.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "good_afternoon_mary.mp3", "a_conver" => "Good Afternoon, Mary.", "background" => $l5G24image . "bg.png"],

            ["round" => 7, "game_id" => 24, "a_image" => $l5G24image . "girl2.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "how_are_you.mp3", "a_conver" => "How are you?", "background" => $l5G24image . "bg.png"],
            ["round" => 7, "game_id" => 24, "a_image" => $l5G24image . "girl.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "i'm_great_and_you.mp3", "a_conver" => "I'm great, and you?", "background" => $l5G24image . "bg.png"],
            ["round" => 7, "game_id" => 24, "a_image" => $l5G24image . "girl2.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "i'm_ok_2.mp3", "a_conver" => "I'm OK.", "background" => $l5G24image . "bg.png"],

            ["round" => 8, "game_id" => 24, "a_image" => $l5G24image . "girl2.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "goodbye.mp3", "a_conver" => "GoodBye!", "background" => $l5G24image . "bg.png"],
            ["round" => 8, "game_id" => 24, "a_image" => $l5G24image . "girl.png", "a_audio" => $AudioDomain . $G1_L5_G24_read_listen_n_repeat_path . "goodbye_2.mp3", "a_conver" => "GoodBye!", "background" => $l5G24image . "bg.png"],

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
            ['round' => 1, 'game_id' => 26, 'q_image' => $l5G26image . "orangestar.png", "q_content" => '"Good evening"'],
            ['round' => 2, 'game_id' => 26, 'q_image' => $l5G26image . "orangestar.png", "q_content" => '"Good afternoon"'],
            ['round' => 3, 'game_id' => 26, 'q_image' => $l5G26image . "orangestar.png", "q_content" => '"Good morning"'],
            ['round' => 4, 'game_id' => 26, 'q_image' => $l5G26image . "greenstar.png", "q_content" => "How are you"],
            ['round' => 5, 'game_id' => 26, 'q_image' => $l5G26image . "boy.png", "q_content" => "Nice to meet you, too. How are you?"],
            ['round' => 6, 'game_id' => 26, 'q_image' => $l5G26image . "boy.png", "q_content" => "I'm Chris. What is your name?"],
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
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "color-pencil" . ".mp3", "background" => $l6G30image . "background.png"
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
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "glue" . ".mp3", "background" => $l6G30image . "background.png"
            ],


            [
                'round' => 2, 'game_id' => 30, 'a_content' => "sharpener", 'q_image' => $l6G30image . "sharpener" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "sharpener" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 30, 'a_content' => "pencil_case", 'q_image' => $l6G30image . "pencil_bag" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "pencil-case" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 30, 'a_content' => "pen", 'q_image' => $l6G30image . "pen" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "pen" . ".mp3", "background" => $l6G30image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 30, 'a_content' => "eraser", 'q_image' => $l6G30image . "earser" . ".png",
                'a_audio' => $AudioDomain . $G1_L6_listen_n_practice . "eraser" . ".mp3", "background" => $l6G30image . "background.png"
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
            ['Book', 'Chair', 'pencil', 'Ruler', 'Pen'],
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
        $G1_L6_Speaking = "Grade_1/" . "Lesson_6/" . "Speaking/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 32, "q_audio" =>  $AudioDomain . $G1_L6_Speaking . "audio" . ".mp3", 'q_image' => $l6G32image . "crayon.png", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 2, 'game_id' => 32, "q_audio" =>  $AudioDomain . $G1_L6_Speaking . "audio" . ".mp3", 'q_image' => $l6G32image . "eraser.png", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 3, 'game_id' => 32, "q_audio" =>  $AudioDomain . $G1_L6_Speaking . "audio" . ".mp3", 'q_image' => $l6G32image . "pen.png", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 4, 'game_id' => 32, "q_audio" =>  $AudioDomain . $G1_L6_Speaking . "audio" . ".mp3", 'q_image' => $l6G32image . "pencilcase.png", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 5, 'game_id' => 32, "q_audio" =>  $AudioDomain . $G1_L6_Speaking . "audio" . ".mp3", 'q_image' => $l6G32image . "ruler.png", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 6, 'game_id' => 32, "q_audio" =>  $AudioDomain . $G1_L6_Speaking . "audio" . ".mp3", 'q_image' => $l6G32image . "sharpener.png", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 7, 'game_id' => 32, "q_audio" =>  $AudioDomain . $G1_L6_Speaking . "audio" . ".mp3", 'q_image' => $l6G32image . "bag.png", "q_content" => "Look at the picture and say the words. What's this?"],
            ['round' => 8, 'game_id' => 32, "q_audio" =>  $AudioDomain . $G1_L6_Speaking . "audio" . ".mp3", 'q_image' => $l6G32image . "book.png", "q_content" => "Look at the picture and say the words. What's this?"],
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
                ['round' => 1, 'game_id' => 33,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L6_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 33, "q_image" => $l6G33image . "table.png", 'a_content' => "DESK", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "desk.mp3"],
        ]);

        // round 2
        $G33R2 = [
            "A", "I", "R", "C", "H"
        ];
        foreach ($G33R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 33,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L6_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 33, "q_image" => $l6G33image . "chair.png", 'a_content' => "CHAIR", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "chair.mp3"],
        ]);

        // round 3
        $G33R3 = [
            "C", "I", "L", "E", "N", "P"
        ];
        foreach ($G33R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 33,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L6_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 33, "q_image" => $l6G33image . "pencil.png", 'a_content' => "PENCIL", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "pencil.mp3"],
        ]);

        // round 4
        $G33R4 = [
            "G",  "A", "B"
        ];
        foreach ($G33R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 33, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L6_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 33,  "q_image" => $l6G33image . "bag.png", 'a_content' => "BAG", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "bag.mp3"],
        ]);

        // round 5
        $G33R5 = [
            "R", "E", "L", "U", "R"
        ];
        foreach ($G33R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 33, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L6_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 33, "q_image" => $l6G33image . "ruler.png", 'a_content' => "RULER", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "ruler.mp3"],
        ]);

        // round 6
        $G33R6 = [
            "S", "E", "R", "R", "A", "E"
        ];
        foreach ($G33R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 33,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L6_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 33, "q_image" => $l6G33image . "eraser.png", 'a_content' => "ERASER", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "eraser.mp3"],
        ]);

        // round 7
        $G33R7 = [
            "N", "E", "P"
        ];
        foreach ($G33R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 33, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L6_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 33, "q_image" => $l6G33image . "pen.png",  'a_content' => "PEN", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "pen.mp3"],
        ]);

        // round 8
        $G33R8 = [
            "N", "O", "Y", "C", "R", "A"
        ];
        foreach ($G33R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 33,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L6_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 33, "q_image" => $l6G33image . "crayon.png", 'a_content' => "CRAYON", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "crayon.mp3"],
        ]);

        // round 9
        $G33R8 = [
            "O", "O", "K", "B"
        ];
        foreach ($G33R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 9, 'game_id' => 33,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L6_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 9, 'game_id' => 33, "q_image" => $l6G33image . "book.png", 'a_content' => "BOOK", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "book.mp3"],
        ]);

        // round 10
        $G33R8 = [
            "A", "B", "G"
        ];
        foreach ($G33R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 10, 'game_id' => 33, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L6_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 10, 'game_id' => 33, "q_image" => $l6G33image . "bag.png", 'a_content' => "BAG", 'a_audio' => $AudioDomain . $G1_L6_writing_path . "bag.mp3"],
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
                'round' => 1, 'game_id' => 43, 'a_content' => "fan", 'q_image' => $l8G43image . "fan" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "fan" . ".mp3", "background" => $l8G43image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 43, 'a_content' => "air-con", 'q_image' => $l8G43image . "air-con" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "air-con" . ".mp3", "background" => $l8G43image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 43, 'a_content' => "mat", 'q_image' => $l8G43image . "mat" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "mat" . ".mp3", "background" => $l8G43image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 43, 'a_content' => "clock", 'q_image' => $l8G43image . "clock" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "clock" . ".mp3", "background" => $l8G43image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 43, 'a_content' => "dresser", 'q_image' => $l8G43image . "dresser" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "audio" . ".mp3", "background" => $l8G43image . "bg1.png"
            ],


            [
                'round' => 2, 'game_id' => 43, 'a_content' => "spoon", 'q_image' => $l8G43image . "spoon" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "spoon" . ".mp3", "background" => $l8G43image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 43, 'a_content' => "bottle", 'q_image' => $l8G43image . "bottle" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "bottle" . ".mp3", "background" => $l8G43image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 43, 'a_content' => "cup", 'q_image' => $l8G43image . "cup" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "cup" . ".mp3", "background" => $l8G43image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 43, 'a_content' => "table", 'q_image' => $l8G43image . "table" . ".png",
                'a_audio' => $AudioDomain . $G1_L8_listen_n_practice . "table" . ".mp3", "background" => $l8G43image . "bg2.png"
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

            ['spoon', 'plate', 'bottle', 'table', 'cup'],
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
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G1_L8_Matching . strtolower($G1_L8_Game44_Matching_audio[$G1_L8_Game44_index]) . ".mp3",
                    ]
                ]);
                $G1_L8_Game44_index++;
            }

            foreach ($G1_L8_Game44_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 44, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l8G44image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G1_L8_Matching .  strtolower($G1_L8_Game44_Matching_audio[$G1_L8_Game44_index]) . ".mp3",
                    ]
                ]);
                $G1_L8_Game44_index++;
            }
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 8 Game 45 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l8G45image = $domain . "/storage/images/Grade_1/lesson_8/Speaking/";
        $G1_L8_Speaking = "Grade_1/" . "Lesson_8/" . "Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 45, 'q_image' => $l8G45image . "plate.png", "q_audio" => $AudioDomain . $G1_L8_Speaking . "audio.mp3", "q_content" => "Look at the picture and say a word."],
            ['round' => 2, 'game_id' => 45, 'q_image' => $l8G45image . "spoon.png", "q_audio" => $AudioDomain . $G1_L8_Speaking . "audio.mp3", "q_content" => "Look at the picture and say a word."],
            ['round' => 3, 'game_id' => 45, 'q_image' => $l8G45image . "cup.png", "q_audio" => $AudioDomain . $G1_L8_Speaking . "audio.mp3", "q_content" => "Look at the picture and say a word."],
            ['round' => 4, 'game_id' => 45, 'q_image' => $l8G45image . "table.png", "q_audio" => $AudioDomain . $G1_L8_Speaking . "audio.mp3", "q_content" => "Look at the picture and say a word."],
            ['round' => 5, 'game_id' => 45, 'q_image' => $l8G45image . "clock.png", "q_audio" => $AudioDomain . $G1_L8_Speaking . "audio.mp3", "q_content" => "Look at the picture and say a word."],
            ['round' => 6, 'game_id' => 45, 'q_image' => $l8G45image . "bottle.png", "q_audio" => $AudioDomain . $G1_L8_Speaking . "audio.mp3", "q_content" => "Look at the picture and say a word."],
            ['round' => 7, 'game_id' => 45, 'q_image' => $l8G45image . "apple.png", "q_audio" => $AudioDomain . $G1_L8_Speaking . "audio.mp3", "q_content" => "Look at the picture and say a word."],
            ['round' => 8, 'game_id' => 45, 'q_image' => $l8G45image . "fan.png", "q_audio" => $AudioDomain . $G1_L8_Speaking . "audio.mp3", "q_content" => "Look at the picture and say a word."],
            ['round' => 9, 'game_id' => 45, 'q_image' => $l8G45image . "cake.png", "q_audio" => $AudioDomain . $G1_L8_Speaking . "audio.mp3", "q_content" => "Look at the picture and say a word."],
            ['round' => 10, 'game_id' => 45, 'q_image' => $l8G45image . "bed.png", "q_audio" => $AudioDomain . $G1_L8_Speaking . "audio.mp3", "q_content" => "Look at the picture and say a word."],
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
            ['round' => 1, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path .  "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null, 'a_content' => null, "background" => $l8G46image . "bg.png"],


            ['round' => 2, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "pen.mp3", 'q_content' => "pen", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "pencil.mp3", 'q_content' => "pencil", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h.mp3", "q_conver" => "Select the things she has in her room.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null, 'a_content' => null, "background" => $l8G46image . "bg.png"],


            ['round' => 3, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "duster.mp3", 'q_content' => "duster", "q_conver" => null,  'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "eraser.mp3", 'q_content' => "eraser", "q_conver" => null,  'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h.mp3", "q_conver" => "Select the things she has in her room.", 'q_content' => null,  'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null,  'a_content' => null, "background" => $l8G46image . "bg.png"],


            ['round' => 4, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "spoon.mp3", 'q_content' => "spoon", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "sharpener.mp3", 'q_content' => "sharpener", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h.mp3", "q_conver" => "Select the things she has in her room.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null, 'a_content' => null, "background" => $l8G46image . "bg.png"],


            ['round' => 5, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "bag.mp3", 'q_content' => "bag", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "bed.mp3", 'q_content' => "bed", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h.mp3", "q_conver" => "Select the things she has in her room.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null, 'a_content' => null, "background" => $l8G46image . "bg.png"],


            ['round' => 6, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "doll.mp3", 'q_content' =>  "doll", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 6, 'game_id' => 46, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L8_reading_passage_path . "dress.mp3", 'q_content' => "dress", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 6, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Select-the-things-she-has-in-h.mp3", "q_conver" => "Select the things she has in her room.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 6, 'game_id' => 46, "q_image" => null, "q_audio" => $AudioDomain . $G1_L8_reading_passage_path . "Hi-my-name-is-Anna-I-want-to.mp3", 'q_conver' => "Hi, my name is Anna. I want to describe my room. This is my bed and doll. My doll is Teddy. I love it. This is my table and chair. It's Grade 1 textbook and a pencil case. I have a pencil, eraser and sharpener on it. I love my room.", 'q_content' => null, 'a_content' => null, "background" => $l8G46image . "bg.png"],

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
                ['round' => 1, 'game_id' => 47,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L8_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 47, "q_image" => $l8G47image . "table.png", 'a_content' => "TABLE", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "table.mp3"],
        ]);

        // round 2
        $G47R2 = [
            "T", "T", "L", "O", "B", "E"
        ];
        foreach ($G47R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 47, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L8_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 47,  "q_image" => $l8G47image . "bottle.png", 'a_content' => "BOTTLE", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "bottle.mp3"],
        ]);

        // round 3
        $G47R3 = [
            "P", "O", "N", "S", "O"
        ];
        foreach ($G47R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 47, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L8_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 47, "q_image" => $l8G47image . "spoon.png", 'a_content' => "SPOON", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "spoon.mp3"],
        ]);

        // round 4
        $G47R4 = [
            "D", "E", "B"
        ];
        foreach ($G47R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 47, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L8_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 47, "q_image" => $l8G47image . "bed.png",  'a_content' => "BED", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "bed.mp3"],
        ]);

        // round 5
        $G47R5 = [
            "N", "A", "F"
        ];
        foreach ($G47R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 47, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L8_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 47,  "q_image" => $l8G47image . "fan.png", 'a_content' => "FAN", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "fan.mp3"],
        ]);

        // round 6
        $G47R6 = [
            "P", "E", "L", "T", "A"
        ];
        foreach ($G47R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 47, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L8_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 47, "q_image" => $l8G47image . "plate.png", 'a_content' => "PLATE", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "plate.mp3"],
        ]);

        // round 7
        $G47R7 = [
            "P", "U", "C"
        ];
        foreach ($G47R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 47,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L8_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 47, "q_image" => $l8G47image . "cup.png", 'a_content' => "CUP", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "cups.mp3"],
        ]);

        // round 8
        $G47R8 = [
            "K", "L", "O", "C", "C"
        ];
        foreach ($G47R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 47, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L8_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 47, "q_image" => $l8G47image . "clock.png", 'a_content' => "CLOCK", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "clock.mp3"],
        ]);

        // round 9
        $G47R9 = [
            "A", "T", "M"
        ];
        foreach ($G47R9 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 9, 'game_id' => 47,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L8_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 9, 'game_id' => 47, "q_image" => $l8G47image . "mat.png", 'a_content' => "MAT", 'a_audio' => $AudioDomain . $G1_L8_writing_path . "mat.mp3"],
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
                    'game_id' => 49, 'a_content' => $key, 'a_image' => $l9G49image . strtolower($ansl9Image[$G1_L9_Game49_index]) . ".png",
                    'a_audio' => $AudioDomain . $G1_L9_reading . strtolower($ansl9Audio[$G1_L9_Game49_index]) . ".mp3"
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
                'round' => 1, 'game_id' => 50, 'a_content' => "dog", 'q_image' => $l9G50image . "dog" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "dog" . ".mp3", "background" => $l9G50image . "bg1.jpg"
            ],
            [
                'round' => 1, 'game_id' => 50, 'a_content' => "cat", 'q_image' => $l9G50image . "cat" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "cat" . ".mp3", "background" => $l9G50image . "bg1.jpg"
            ],
            [
                'round' => 1, 'game_id' => 50, 'a_content' => "parrot", 'q_image' => $l9G50image . "parrot1" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "parrot" . ".mp3", "background" => $l9G50image . "bg1.jpg"
            ],
            [
                'round' => 1, 'game_id' => 50, 'a_content' => "bird", 'q_image' => $l9G50image . "bird" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "bird" . ".mp3", "background" => $l9G50image . "bg1.jpg"
            ],
            [
                'round' => 1, 'game_id' => 50, 'a_content' => "kitten", 'q_image' => $l9G50image . "kitten" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "kitten" . ".mp3", "background" => $l9G50image . "bg1.jpg"
            ],



            [
                'round' => 2, 'game_id' => 50, 'a_content' => "puppy", 'q_image' => $l9G50image . "puppy" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "puppy" . ".mp3", "background" => $l9G50image . "bg2.jpg"
            ],
            [
                'round' => 2, 'game_id' => 50, 'a_content' => "goldfish", 'q_image' => $l9G50image . "goldfish" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "goldfish" . ".mp3", "background" => $l9G50image . "bg2.jpg"
            ],
            [
                'round' => 2, 'game_id' => 50, 'a_content' => "parrot", 'q_image' => $l9G50image . "parrot2" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "parrot" . ".mp3", "background" => $l9G50image . "bg2.jpg"
            ],
            [
                'round' => 2, 'game_id' => 50, 'a_content' => "chameleon", 'q_image' => $l9G50image . "chameleon" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "chameleon" . ".mp3", "background" => $l9G50image . "bg2.jpg"
            ],
            [
                'round' => 2, 'game_id' => 50, 'a_content' => "turtle", 'q_image' => $l9G50image . "turtle" . ".png",
                'a_audio' => $AudioDomain . $G1_L9_listen_n_practice . "turtle" . ".mp3", "background" => $l9G50image . "bg2.jpg"
            ],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 9 Game 51 (  Matching  )
        ////////////////////////////////////////////////////////

        $l9G51image = $domain . "/storage/images/Grade_1/lesson_9/Matching/";
        $G1_L9_Matching = "Grade_1/" . "Lesson_9/" . "Matching/";


        $G1_L9_Game51_Matching = [

            ['goldfish', 'kitten', 'puppy', 'chameleon'],
            ['Fish', 'Dog', 'Cat', 'Turtle'],

        ];

        $G1_L9_Game51_Matching_image = [

            ['cat1', 'goldfish', 'chameleon', 'puppy'],
            ['cat2', 'Turtle', 'Fish', 'Dog'],

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
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G1_L9_Matching .  strtolower($G1_L9_Game51_Matching_audio[$G1_L9_Game51_index]) . ".mp3",
                    ]
                ]);
                $G1_L9_Game51_index++;
            }

            foreach ($G1_L9_Game51_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 51, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l9G51image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G1_L9_Matching .  strtolower($G1_L9_Game51_Matching_audio[$G1_L9_Game51_index]) . ".mp3",
                    ]
                ]);
                $G1_L9_Game51_index++;
            }
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 9 Game 52 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l9G52image = $domain . "/storage/images/Grade_1/lesson_9/Speaking/";
        $G1_L9_Speaking = "Grade_1/" . "Lesson_9/" . "Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 52, "q_audio" => $AudioDomain . $G1_L9_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l9G52image . "chameleon.png", "q_content" => "Describe the pictures. It is ____."],
            ['round' => 2, 'game_id' => 52, "q_audio" => $AudioDomain . $G1_L9_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l9G52image . "parrot.png", "q_content" => "Describe the pictures. It is ____."],
            ['round' => 3, 'game_id' => 52, "q_audio" => $AudioDomain . $G1_L9_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l9G52image . "dog.png", "q_content" => "Describe the pictures. It is ____."],
            ['round' => 4, 'game_id' => 52, "q_audio" => $AudioDomain . $G1_L9_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l9G52image . "cat.png", "q_content" => "Describe the pictures. It is ____."],
            ['round' => 5, 'game_id' => 52, "q_audio" => $AudioDomain . $G1_L9_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l9G52image . "fish.png", "q_content" => "Describe the pictures. It is ____."],
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
                ['round' => 1, 'game_id' => 53, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L9_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 53,  "q_image" => $l9G53image . "parrot.png", 'a_content' => "PARROT", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "parrot.mp3"],
        ]);

        // round 2
        $G53R2 = [
            "D", "G", "O"
        ];
        foreach ($G53R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 53,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L9_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 53, "q_image" => $l9G53image . "dog.png", 'a_content' => "DOG", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "dog.mp3"],
        ]);

        // round 3
        $G53R3 = [
            "R", "A", "B", "B", "I", "T"
        ];
        foreach ($G53R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 53, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L9_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 53, "q_image" => $l9G53image . "rabbit.png", 'a_content' => "RABBIT", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "rabbit.mp3"],
        ]);

        // round 4
        $G53R4 = [
            "H", "T", "E", "S", "A", "M", "R"
        ];
        foreach ($G53R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 53,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L9_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 53, "q_image" => $l9G53image . "hamster.png", 'a_content' => "HAMSTER", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "hamster.mp3"],
        ]);

        // round 5
        $G53R5 = [
            "P", "R", "A", "R", 'O', "T"
        ];
        foreach ($G53R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 53, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L9_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 53, "q_image" => $l9G53image . "parrot1.png",  'a_content' => "PARROT", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "parrot.mp3"],
        ]);

        // round 6
        $G53R6 = [
            "M", "H", "A", "O", "N", "C", "E", "L", "E"
        ];
        foreach ($G53R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 53, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L9_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 53, "q_image" => $l9G53image . "chameleon.png", 'a_content' => "CHAMELEON", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "chameleon.mp3"],
        ]);

        // round 7
        $G53R7 = [
            "I", "B", "D", "R"
        ];
        foreach ($G53R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 53, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L9_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 53, "q_image" => $l9G53image . "bird.png",  'a_content' => "BIRD", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "bird.mp3"],
        ]);

        // round 8
        $G53R8 = [
            "T", "A", "C"
        ];
        foreach ($G53R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 53,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L9_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 53, "q_image" => $l9G53image . "cat.png", 'a_content' => "CAT", 'a_audio' => $AudioDomain . $G1_L9_writing_path . "cat.mp3"],
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
                'round' => 1, 'game_id' => 56, 'a_content' => "sheep", 'q_image' => $l10G56image . "sheep" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "sheep" . ".mp3", "background" => $l10G56image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 56, 'a_content' => "rabbit", 'q_image' => $l10G56image . "rabbit" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "rabbit" . ".mp3", "background" => $l10G56image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 56, 'a_content' => "cow", 'q_image' => $l10G56image . "cow1" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "cow" . ".mp3", "background" => $l10G56image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 56, 'a_content' => "pig", 'q_image' => $l10G56image . "pig" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "pig" . ".mp3", "background" => $l10G56image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 56, 'a_content' => "dog", 'q_image' => $l10G56image . "dog" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "dog" . ".mp3", "background" => $l10G56image . "bg1.png"
            ],



            [
                'round' => 2, 'game_id' => 56, 'a_content' => "duck", 'q_image' => $l10G56image . "duck" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "duck" . ".mp3", "background" => $l10G56image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 56, 'a_content' => "cock", 'q_image' => $l10G56image . "cock" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "cock" . ".mp3", "background" => $l10G56image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 56, 'a_content' => "cow", 'q_image' => $l10G56image . "cow1" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "cow" . ".mp3", "background" => $l10G56image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 56, 'a_content' => "pig", 'q_image' => $l10G56image . "pig1" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "pig" . ".mp3", "background" => $l10G56image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 56, 'a_content' => "goat", 'q_image' => $l10G56image . "goat" . ".png",
                'a_audio' => $AudioDomain . $G1_L10_listen_n_practice . "goat" . ".mp3", "background" => $l10G56image . "bg2.png"
            ],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 10 Game 57 (  Matching  )
        ////////////////////////////////////////////////////////

        $l10G57image = $domain . "/storage/images/Grade_1/lesson_10/Matching/";
        $G1_L10_Matching = "Grade_1/" . "Lesson_10/" . "Matching/";

        $G1_L10_Game57_Matching_image = [

            ['duck', 'cock', 'cow', 'pig'],
            ['cow1', 'pig1', 'dog', 'sheep'],

        ];

        $G1_L10_Game57_Matching = [

            ['cow', 'duck', 'pig', 'cock'],
            ['sheep', 'dog', 'cow', 'pig'],

        ];

        $G1_L10_Game57_Matching_audio = [
            'duck', 'cock', 'cow', 'pig',
            'cow', 'duck', 'pig', 'cock',

            'cow', 'pig', 'dog', 'sheep',
            'sheep', 'dog', 'cow', 'pig',

        ];

        $G1_L10_Game57_index = 0;

        for ($i = 0; $i < count($G1_L10_Game57_Matching); $i++) {

            foreach ($G1_L10_Game57_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 57, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l10G57image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G1_L10_Matching .  strtolower($G1_L10_Game57_Matching_audio[$G1_L10_Game57_index]) . ".mp3",
                    ]
                ]);
                $G1_L10_Game57_index++;
            }

            foreach ($G1_L10_Game57_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 57, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G1_L10_Matching .   strtolower($G1_L10_Game57_Matching_audio[$G1_L10_Game57_index]) . ".mp3",
                    ]
                ]);
                $G1_L10_Game57_index++;
            }
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 10 Game 58 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l10G58image = $domain . "/storage/images/Grade_1/lesson_10/Speaking/";
        $G1_L10_Speaking = "Grade_1/" . "Lesson_10/" . "Speaking/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 58, 'q_audio' => $AudioDomain . $G1_L10_Speaking . "What-animals-do-you-see-on-the" . ".mp3", 'q_image' => $l10G58image . "rabbit.png", "q_content" => "What animals do you see on the farm?"],
            ['round' => 2, 'game_id' => 58, 'q_audio' => $AudioDomain . $G1_L10_Speaking . "What-animals-do-you-see-on-the" . ".mp3", 'q_image' => $l10G58image . "pig.png", "q_content" => "What animals do you see on the farm?"],
            ['round' => 3, 'game_id' => 58, 'q_audio' => $AudioDomain . $G1_L10_Speaking . "What-animals-do-you-see-on-the" . ".mp3", 'q_image' => $l10G58image . "goat.png", "q_content" => "What animals do you see on the farm?"],
            ['round' => 4, 'game_id' => 58, 'q_audio' => $AudioDomain . $G1_L10_Speaking . "What-animals-do-you-see-on-the" . ".mp3", 'q_image' => $l10G58image . "horse.png", "q_content" => "What animals do you see on the farm?"],
            ['round' => 5, 'game_id' => 58, 'q_audio' => $AudioDomain . $G1_L10_Speaking . "What-animals-do-you-see-on-the" . ".mp3", 'q_image' => $l10G58image . "duck.png", "q_content" => "What animals do you see on the farm?"],
            ['round' => 6, 'game_id' => 58, 'q_audio' => $AudioDomain . $G1_L10_Speaking . "What-animals-do-you-see-on-the" . ".mp3", 'q_image' => $l10G58image . "sheep.png", "q_content" => "What animals do you see on the farm?"],
            ['round' => 7, 'game_id' => 58, 'q_audio' => $AudioDomain . $G1_L10_Speaking . "What-animals-do-you-see-on-the" . ".mp3", 'q_image' => $l10G58image . "cock.png", "q_content" => "What animals do you see on the farm?"],
            ['round' => 8, 'game_id' => 58, 'q_audio' => $AudioDomain . $G1_L10_Speaking . "What-animals-do-you-see-on-the" . ".mp3", 'q_image' => $l10G58image . "cow.png", "q_content" => "What animals do you see on the farm?"],
            ['round' => 9, 'game_id' => 58, 'q_audio' => $AudioDomain . $G1_L10_Speaking . "What-animals-do-you-see-on-the" . ".mp3", 'q_image' => $l10G58image . "rabbit1.png", "q_content" => "What animals do you see on the farm?"],
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
                ['round' => 1, 'game_id' => 59, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L10_writing_path .  strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 59,  "q_image" => $l10G59image . "cock.png", 'a_content' => "cock", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "cok.mp3"],
        ]);

        // round 2
        $G59R2 = [
            "I", "P", "G"
        ];
        foreach ($G59R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 59,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L10_writing_path .  strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 59, "q_image" => $l10G59image . "pig.png", 'a_content' => "PIG", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "pig.mp3"],
        ]);

        // round 3
        $G59R3 = [
            "W", "O", "C"
        ];
        foreach ($G59R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 59, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L10_writing_path .  strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 59, "q_image" => $l10G59image . "cow.png", 'a_content' => "COW", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "cow.mp3"],
        ]);

        // round 4
        $G59R4 = [
            "C", "U", "K", "D"
        ];
        foreach ($G59R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 59,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L10_writing_path .  strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 59, "q_image" => $l10G59image . "duck.png", 'a_content' => "DUCK", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "duck.mp3"],
        ]);

        // round 5
        $G59R5 = [
            "A", "R", "B", "B", 'T', "I"
        ];
        foreach ($G59R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 59, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L10_writing_path .  strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 59, "q_image" => $l10G59image . "rabbit.png",  'a_content' => "RABBIT", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "rabbit.mp3"],
        ]);

        // round 6
        $G59R6 = [
            "P", "E", "E", "S", "H"
        ];
        foreach ($G59R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 59, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L10_writing_path .  strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 59, "q_image" => $l10G59image . "sheep.png", 'a_content' => "SHEEP", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "sheep.mp3"],
        ]);

        // round 7
        $G59R7 = [
            "t", "a", "c"
        ];
        foreach ($G59R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 59, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L10_writing_path .  strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 59, "q_image" => $l10G59image . "cat.png",  'a_content' => "cat", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "cat.mp3"],
        ]);

        // round 8
        $G59R8 = [
            "S", "O", "R", "H", "E"
        ];
        foreach ($G59R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 59,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L10_writing_path .  strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 59, "q_image" => $l10G59image . "horse.png", 'a_content' => "HORSE", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "horse.mp3"],
        ]);

        // round 9
        $G59R9 = [
            "W", "C", "O"
        ];
        foreach ($G59R9 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 59,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L10_writing_path .  strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 59, "q_image" => $l10G59image . "cow.png", 'a_content' => "COW", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "cow.mp3"],
        ]);

        // round 10
        $G59R10 = [
            "S", "O", "R", "H", "E"
        ];
        foreach ($G59R10 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 59,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L10_writing_path .  strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 59, "q_image" => $l10G59image . "horse.png", 'a_content' => "HORSE", 'a_audio' => $AudioDomain . $G1_L10_writing_path . "horse.mp3"],
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
            "pink", "yellow", "green", "red", "blue"
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
                'game_id' => 62, 'a_content' => "yellow", 'q_image' => $l11G62image . "yellow" . ".png",
                'a_audio' => $AudioDomain . $G1_L11_listen_n_practice . "yellow" . ".mp3", "background" => $l11G62image . "bg.png"
            ],
            [
                'game_id' => 62, 'a_content' => "green", 'q_image' => $l11G62image . "green" . ".png",
                'a_audio' => $AudioDomain . $G1_L11_listen_n_practice . "green" . ".mp3", "background" => $l11G62image . "bg.png"
            ],
            [
                'game_id' => 62, 'a_content' => "grey", 'q_image' => $l11G62image . "gray" . ".png",
                'a_audio' => $AudioDomain . $G1_L11_listen_n_practice . "grey" . ".mp3", "background" => $l11G62image . "bg.png"
            ],
            [
                'game_id' => 62, 'a_content' => "orange", 'q_image' => $l11G62image . "orange" . ".png",
                'a_audio' => $AudioDomain . $G1_L11_listen_n_practice . "orange" . ".mp3", "background" => $l11G62image . "bg.png"
            ],
            [
                'game_id' => 62, 'a_content' => "purple", 'q_image' => $l11G62image . "purple" . ".png",
                'a_audio' => $AudioDomain . $G1_L11_listen_n_practice . "purple" . ".mp3", "background" => $l11G62image . "bg.png"
            ],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 11 Game 63 (  Matching  )
        ////////////////////////////////////////////////////////

        $l11G63image = $domain . "/storage/images/Grade_1/lesson_11/Matching/";
        $G1_L11_Matching = "Grade_1/" . "Lesson_11/" . "Matching/";

        DB::table('ans_n_ques')->insert([
            // round 1
            ['game_id' => 63, 'round' => 1, 'q_content' => "apple", 'q_image' => $l11G63image . "apple" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "red" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "mango", 'q_image' => $l11G63image . "mango" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "yellow" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "orange", 'q_image' => $l11G63image . "orange" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "orange" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "grape", 'q_image' => $l11G63image . "grape" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "purple" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "coconut", 'q_image' => $l11G63image . "coconut" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "brown" . ".mp3"],


            ['game_id' => 63, 'round' => 1, 'q_content' => "orange", 'q_image' => $l11G63image . "orangepen" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "orange" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "apple", 'q_image' => $l11G63image . "greenpen" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "green" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "grape", 'q_image' => $l11G63image . "purplepen" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "purple" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "coconut", 'q_image' => $l11G63image . "brownpen" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "brown" . ".mp3"],
            ['game_id' => 63, 'round' => 1, 'q_content' => "mango", 'q_image' => $l11G63image . "yellowpen" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "yellow" . ".mp3"],



            // round 2
            ['game_id' => 63, 'round' => 2, 'q_content' => "black", 'q_image' => "Black", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "black" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "white", 'q_image' => "White", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "white" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Grey", 'q_image' => "Grey", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "grey" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Purple", 'q_image' => "Purple", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "purple" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Pink", 'q_image' => "Pink", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "pink" . ".mp3"],


            ['game_id' => 63, 'round' => 2, 'q_content' => "Grey", 'q_image' =>  $l11G63image . "grey" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "grey" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Black", 'q_image' =>  $l11G63image . "black" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "black" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "White", 'q_image' =>  $l11G63image . "white" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "white" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "Pink", 'q_image' =>  $l11G63image . "pink" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "pink" . ".mp3"],
            ['game_id' => 63, 'round' => 2, 'q_content' => "blue", 'q_image' =>  $l11G63image . "blue" . ".png", 'q_audio' => $AudioDomain . $G1_L11_Matching .  "purple" . ".mp3"],

        ]);







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 11 Game 64 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l11G64image = $domain . "/storage/images/Grade_1/lesson_11/Speaking/";
        $G1_L11_Speaking = "Grade_1/" . "Lesson_11/" . "Speaking/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 64, 'q_audio' => $AudioDomain . $G1_L11_Speaking . "audio" . ".mp3", 'q_image' => $l11G64image . "apple.png", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 2, 'game_id' => 64, 'q_audio' => $AudioDomain . $G1_L11_Speaking . "audio" . ".mp3", 'q_image' => $l11G64image . "table.png", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 3, 'game_id' => 64, 'q_audio' => $AudioDomain . $G1_L11_Speaking . "audio" . ".mp3", 'q_image' => $l11G64image . "blue_balloon.png", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 4, 'game_id' => 64, 'q_audio' => $AudioDomain . $G1_L11_Speaking . "audio" . ".mp3", 'q_image' => $l11G64image . "dress.png", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 5, 'game_id' => 64, 'q_audio' => $AudioDomain . $G1_L11_Speaking . "audio" . ".mp3", 'q_image' => $l11G64image . "red_balloon.png", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 6, 'game_id' => 64, 'q_audio' => $AudioDomain . $G1_L11_Speaking . "audio" . ".mp3", 'q_image' => $l11G64image . "pink_balloon.png", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 7, 'game_id' => 64, 'q_audio' => $AudioDomain . $G1_L11_Speaking . "audio" . ".mp3", 'q_image' => $l11G64image . "yellow_balloon.png", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 8, 'game_id' => 64, 'q_audio' => $AudioDomain . $G1_L11_Speaking . "audio" . ".mp3", 'q_image' => $l11G64image . "black_balloon.png", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 9, 'game_id' => 64, 'q_audio' => $AudioDomain . $G1_L11_Speaking . "audio" . ".mp3", 'q_image' => $l11G64image . "cat.png", "q_content" => "What colour is it ? What is it ?"],
            ['round' => 10, 'game_id' => 64, 'q_audio' => $AudioDomain . $G1_L11_Speaking . "audio" . ".mp3", 'q_image' => $l11G64image . "parrot.png", "q_content" => "What colour is it ? What is it ?"],
        ]);







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 11 Game 65 (  Reading Passage  )
        ////////////////////////////////////////////////////////

        $G1_L11_reading_passage_path = "Grade_1/" . "Lesson_11/" . "reading_passage/";
        $l11G65image = $domain . "/storage/images/Grade_1/lesson_11/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "car_doll_airplane.mp3", 'q_content' => "car, doll, airplane", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "ball_bear.mp3", 'q_content' => "ball, bear, doll", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "I-love-toys-My-toys-are-car-d.mp3", "q_conver" => "I love toys. My toys are ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "I-love-toys-I-play-with-them.mp3", "q_content" => "I love toys", 'q_conver' => "I love toys. I play with them after school. This is my teddy bear. It's brown and black. This is my dool. It's beautiful. Its dress is blue and purple. I also have a ball. I play with it everyday. It's yellow and blue.", 'a_content' => null, "background" => $l11G65image . "background.png"],


            ['round' => 2, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "black_and_white.mp3", 'q_content' => "black and white", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "blue_and_yellow.mp3", 'q_content' => "blue and yellow", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "red_and_green.mp3", 'q_content' => "red and green", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "What-color-is-the-ball-black.mp3", "q_conver" =>  "What color is the ball?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "I-love-toys-I-play-with-them.mp3", "q_content" => "I love toys", 'q_conver' => "I love toys. I play with them after school. This is my teddy bear. It's brown and black. This is my dool. It's beautiful. Its dress is blue and purple. I also have a ball. I play with it everyday. It's yellow and blue.", 'a_content' => null, "background" => $l11G65image . "background.png"],


            ['round' => 3, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "dree_ball.mp3", 'q_content' => "dress/ball", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 65, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L11_reading_passage_path . "teddy_bear.mp3", 'q_content' => "teddy bear", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "What-is-blue-and-purple-dress.mp3", "q_conver" => "What is blue and purple?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 65, "q_image" => null, "q_audio" => $AudioDomain . $G1_L11_reading_passage_path . "I-love-toys-I-play-with-them.mp3", "q_content" => "I love toys", 'q_conver' => "I love toys. I play with them after school. This is my teddy bear. It's brown and black. This is my dool. It's beautiful. Its dress is blue and purple. I also have a ball. I play with it everyday. It's yellow and blue.", 'a_content' => null, "background" => $l11G65image . "background.png"],


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
            "new", "slow", "dirty", "old", "fast", "clean", "hard", "short", "small"
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

            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "ruler.png", "q_content" => "long short", "a_content" => "long"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "horizontal_ruler.png", "q_content" => "long short", "a_content" => "short"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "book.png", "q_content" => "long short", "a_content" => "short"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "pencil.png", "q_content" => "long short", "a_content" => "long"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "yellow_pencil.png", "q_content" => "long short", "a_content" => "long"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "short_pants.png", "q_content" => "long short", "a_content" => "short"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "hat.png", "q_content" => "long short", "a_content" => "short"],
            ['round' => 1, 'game_id' => 75, "q_image" => $l13G75image . "three_color_pencil.png", "q_content" => "long short", "a_content" => "long"],


            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "pencil_small.png", "q_content" => "big small", "a_content" => "small"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "house.png", "q_content" => "big small", "a_content" => "big"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "eraser.png", "q_content" => "big small", "a_content" => "small"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "elephant.png", "q_content" => "big small", "a_content" => "big"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "dog.png", "q_content" => "big small", "a_content" => "small"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "mouse.png", "q_content" => "big small", "a_content" => "small"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "car.png", "q_content" => "big small", "a_content" => "big"],
            ['round' => 2, 'game_id' => 75, "q_image" => $l13G75image . "cat.png", "q_content" => "big small", "a_content" => "big"],

        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 13 Game 76 (  Listen and Practice  )
        ////////////////////////////////////////////////////////

        $l13G76image = $domain . "/storage/images/Grade_1/lesson_13/listen_and_practice/";
        $G1_L13_listen_and_practice_path = "Grade_1/" . "Lesson_13/" . "listen_and_practice/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-cat-is-small-and-short-T.mp3", 'q_conver' => "This Cat is Small and Short", 'q_content' => "true", 'a_content' => 1, 'q_image' => $l13G76image . "cat.png"],
            ['round' => 1, 'game_id' => 76, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-hat-is-old-True-or-False.mp3", 'q_conver' => "This Hat is Old", 'q_content' => "true", 'a_content' => 1, 'q_image' => $l13G76image . "girl.png"],
            ['round' => 2, 'game_id' => 76, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 3, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-house-is-big-True-or-Fal.mp3", 'q_conver' => "This house is big.", 'q_content' => "true", 'a_content' => 1, 'q_image' => $l13G76image . "house.png"],
            ['round' => 3, 'game_id' => 76, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 4, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "TIts-a-cake-Its-soft-True-o.mp3", 'q_conver' => "It's a cake. It's soft", 'q_content' => "true", 'a_content' => 1, 'q_image' => $l13G76image . "cake.png"],
            ['round' => 4, 'game_id' => 76, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 5, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-girl-is-dirty-True-or-Fal.mp3", 'q_conver' => "This girl is dirty", 'q_content' => "true", 'a_content' => 1, 'q_image' => $l13G76image . "boy.png"],
            ['round' => 5, 'game_id' => 76, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 6, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "Its-a-turtle-Its-fast-True.mp3", 'q_conver' => "It's a turtle. It's fast.", 'q_content' => "true", 'a_content' => 0, 'q_image' => $l13G76image . "turtle.png"],
            ['round' => 6, 'game_id' => 76, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 7, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-bag-is-new-True-or-False.mp3", 'q_conver' => "This Bag is new", 'q_content' => "true", 'a_content' => 1, 'q_image' => $l13G76image . "bag.png"],
            ['round' => 7, 'game_id' => 76, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 8, 'game_id' => 76, 'q_audio' => $AudioDomain . $G1_L13_listen_and_practice_path . "This-pencil-is-long-True-or-Fa.mp3", 'q_conver' => "This pencil is long.", 'q_content' => "true", 'a_content' => 1, 'q_image' => $l13G76image . "pencil.png"],
            ['round' => 8, 'game_id' => 76, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 13 Game 77 (  Speaking Practice  )
        ////////////////////////////////////////////////////////



        $l13G77image = $domain . "/storage/images/Grade_1/lesson_13/Speaking/";
        $G1_L13_Speaking = "Grade_1/" . "Lesson_13/" . "Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 77, 'q_audio' => $AudioDomain . $G1_L13_Speaking . "small-Its-small" . ".mp3", 'q_image' => $l13G77image . "dog.png", "q_content" => "Describe the picture. It's ____."],
            ['round' => 2, 'game_id' => 77, 'q_audio' => $AudioDomain . $G1_L13_Speaking . "big-Its-big" . ".mp3", 'q_image' => $l13G77image . "house.png", "q_content" => "Describe the picture. It's ____."],
            ['round' => 3, 'game_id' => 77, 'q_audio' => $AudioDomain . $G1_L13_Speaking . "short-Its-short" . ".mp3", 'q_image' => $l13G77image . "ruler.png", "q_content" => "Describe the picture. It's ____."],
            ['round' => 4, 'game_id' => 77, 'q_audio' => $AudioDomain . $G1_L13_Speaking . "slow-Its-slow" . ".mp3", 'q_image' => $l13G77image . "girl.png", "q_content" => "Describe the picture. It's ____."],
            ['round' => 5, 'game_id' => 77, 'q_audio' => $AudioDomain . $G1_L13_Speaking . "slow-Its-slow" . ".mp3", 'q_image' => $l13G77image . "turtle.png", "q_content" => "Describe the picture. It's ____."],
            ['round' => 6, 'game_id' => 77, 'q_audio' => $AudioDomain . $G1_L13_Speaking . "soft-Its-soft" . ".mp3", 'q_image' => $l13G77image . "cake.png", "q_content" => "Describe the picture. It's ____."],
            ['round' => 7, 'game_id' => 77, 'q_audio' => $AudioDomain . $G1_L13_Speaking . "fast-Its-fast" . ".mp3", 'q_image' => $l13G77image . "rabbit.png", "q_content" => "Describe the picture. It's ____."],
            ['round' => 8, 'game_id' => 77, 'q_audio' => $AudioDomain . $G1_L13_Speaking . "dirty-Its-dirty" . ".mp3", 'q_image' => $l13G77image . "dirty_girl.png", "q_content" => "Describe the picture. It's ____."],
            ['round' => 9, 'game_id' => 77, 'q_audio' => $AudioDomain . $G1_L13_Speaking . "new-Its-new" . ".mp3", 'q_image' => $l13G77image . "car.png", "q_content" => "Describe the picture. It's ____."],
            ['round' => 10, 'game_id' => 77, 'q_audio' => $AudioDomain . $G1_L13_Speaking . "old-Its-old" . ".mp3", 'q_image' => $l13G77image . "book.png", "q_content" => "Describe the picture. It's ____."],
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
            "cake", "table", "old_car", "car_orange", "fan", "house", "ruler", "apple", "pencil"
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
            ['round' => 1, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "audio.mp3", 'q_conver' => "This is a cat. It's small. It's yellow.", 'q_content' => "true", 'a_content' => 1, 'q_image' =>  $l14G80image . "cat.png"],
            ['round' => 1, 'game_id' => 80, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "audio.mp3", 'q_conver' => "This is a cat. It's small. It's yellow.", 'q_content' => "true", 'a_content' => 0, 'q_image' =>  $l14G80image . "girl.png"],
            ['round' => 2, 'game_id' => 80, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 3, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "This-is-a-house-Its-big-It.mp3", 'q_conver' => "This house is big. It's big. It's white.", 'q_content' => "true", 'a_content' => 1, 'q_image' =>  $l14G80image . "house.png"],
            ['round' => 3, 'game_id' => 80, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 4, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "This-is-a-cake-Its-hard-It.mp3", 'q_conver' => "It's a cake. It's hard. It's yellow", 'q_content' => "true", 'a_content' => 0, 'q_image' =>  $l14G80image . "cake.png"],
            ['round' => 4, 'game_id' => 80, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 5, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "This-is-a-car-Its-old-and-sl-2.mp3", 'q_conver' => "This is a car. It's old and slow. It's green", 'q_content' => "true", 'a_content' => 1, 'q_image' =>  $l14G80image . "car.png"],
            ['round' => 5, 'game_id' => 80, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 6, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "Its-a-doll-Its-soft-Its-y.mp3", 'q_conver' => "It's a doll. It's soft. It's yellow.", 'q_content' => "true", 'a_content' => 1, 'q_image' =>  $l14G80image . "doll.png"],
            ['round' => 6, 'game_id' => 80, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 7, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "This-is-a-bag-Its-old-Its.mp3", 'q_conver' => "This is a bag. It's old. It's red.", 'q_content' => "true", 'a_content' => 0, 'q_image' =>  $l14G80image . "bag.png"],
            ['round' => 7, 'game_id' => 80, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 8, 'game_id' => 80, 'q_audio' => $AudioDomain . $G1_L14_listen_and_practice_path . "This-is-a-pen-Its-long-Its.mp3", 'q_conver' => "This is a pen. It's long. It's brown.", 'q_content' => "true", 'a_content' => 1, 'q_image' =>  $l14G80image . "pen.png"],
            ['round' => 8, 'game_id' => 80, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 14 Game 81 (  Grammar  )
        ////////////////////////////////////////////////////////

        $l14G81image = $domain . "/storage/images/Grade_1/lesson_14/grammar/";
        $G1_L14_grammar_path = "Grade_1/" . "Lesson_14/" . "grammar/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 81, 'q_audio' => $AudioDomain . $G1_L14_grammar_path . "Its-car.mp3", 'q_conver' => "It's ___ car.", 'q_content' => "a", 'a_content' => 1, 'q_image' => $l14G81image . "car.png"],
            ['round' => 1, 'game_id' => 81, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "an", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'game_id' => 81, 'q_audio' => $AudioDomain . $G1_L14_grammar_path . "Its-fan.mp3", 'q_conver' => "It's ___ fan.", 'q_content' => "a", 'a_content' => 1, 'q_image' => $l14G81image . "fan.png"],
            ['round' => 2, 'game_id' => 81, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "an", 'a_content' => 0, 'q_image' => null],

            ['round' => 3, 'game_id' => 81, 'q_audio' => $AudioDomain . $G1_L14_grammar_path . "Its-cake.mp3", 'q_conver' => "It's ___ cake.", 'q_content' => "a", 'a_content' => 1, 'q_image' => $l14G81image . "cake.png"],
            ['round' => 3, 'game_id' => 81, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "an", 'a_content' => 0, 'q_image' => null],

            ['round' => 4, 'game_id' => 81, 'q_audio' => $AudioDomain . $G1_L14_grammar_path . "Its-egg.mp3", 'q_conver' => "It's ___ egg.", 'q_content' => "a", 'a_content' => 0, 'q_image' => $l14G81image . "egg.png"],
            ['round' => 4, 'game_id' => 81, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "an", 'a_content' => 1, 'q_image' => null],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 14 Game 82 (  Writing  )
        ////////////////////////////////////////////////////////

        $l14G82image = $domain . "/storage/images/Grade_1/lesson_14/writing/";
        $G1_L14_writing_path = "Grade_1/" . "Lesson_14/" . "writing/";


        // round 1
        $G82R1 = [
            "A", "G", "E", "T"
        ];
        foreach ($G82R1 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 82, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L14_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 82,  "q_image" => $l14G82image . "gate.png", 'a_content' => "GATE", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "gate.mp3"],
        ]);

        // round 2
        $G82R2 = [
            "O", "G", "T", "A"
        ];
        foreach ($G82R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 82,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L14_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 82, "q_image" => $l14G82image . "goat.png", 'a_content' => "GOAT", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "goat.mp3"],
        ]);

        // round 3
        $G82R3 = [
            "I", "F", "S", "H"
        ];
        foreach ($G82R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 82, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L14_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }
        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 82, "q_image" => $l14G82image . "fish.png", 'a_content' => "FISH", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "fish.mp3"],
        ]);

        // round 4
        $G82R4 = [
            "N", "P", "E"
        ];
        foreach ($G82R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 82,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L14_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 82, "q_image" => $l14G82image . "pen.png", 'a_content' => "PEN", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "pen.mp3"],
        ]);

        // round 5
        $G82R5 = [
            "C", "E", "K", "A"
        ];
        foreach ($G82R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 82, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L14_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 82, "q_image" => $l14G82image . "cake.png",  'a_content' => "CAKE", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "cake.mp3"],
        ]);

        // round 6
        $G82R6 = [
            "L", "F", "R", "W", "E", "O"
        ];
        foreach ($G82R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 82, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L14_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 82, "q_image" => $l14G82image . "flower.png", 'a_content' => "FLOWER", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "flower.mp3"],
        ]);

        // round 7
        $G82R7 = [
            "L", "A", "E", "P", "P"
        ];
        foreach ($G82R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 82, 'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L14_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 82, "q_image" => $l14G82image . "apple.png",  'a_content' => "APPLE", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "apple.mp3"],
        ]);

        // round 8
        $G82R8 = [
            "I", "E", "N", "P", "L", "C"
        ];
        foreach ($G82R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 82,  'q_content' => $i, 'q_audio' =>  $AudioDomain . $G1_L14_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 82, "q_image" => $l14G82image . "pencil.png", 'a_content' => "PENCIL", 'a_audio' => $AudioDomain . $G1_L14_writing_path . "pencil.mp3"],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 14 Game 83 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l14G83image = $domain . "/storage/images/Grade_1/lesson_14/Speaking/";
        $G1_L14_Speaking = "Grade_1/" . "Lesson_14/" . "Speaking/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 83, 'q_audio' =>  $AudioDomain . $G1_L14_Speaking . "audio" . ".mp3", 'q_image' => $l14G83image . "hat.png", "q_content" => "Describe the picture. This is ____. It's ____."],
            ['round' => 2, 'game_id' => 83, 'q_audio' =>  $AudioDomain . $G1_L14_Speaking . "audio" . ".mp3", 'q_image' => $l14G83image . "goat.png", "q_content" => "Describe the picture. This is ____. It's ____."],
            ['round' => 3, 'game_id' => 83, 'q_audio' =>  $AudioDomain . $G1_L14_Speaking . "audio" . ".mp3", 'q_image' => $l14G83image . "fish.png", "q_content" => "Describe the picture. This is ____. It's ____."],
            ['round' => 4, 'game_id' => 83, 'q_audio' =>  $AudioDomain . $G1_L14_Speaking . "audio" . ".mp3", 'q_image' => $l14G83image . "house.png", "q_content" => "Describe the picture. This is ____. It's ____."],
            ['round' => 5, 'game_id' => 83, 'q_audio' =>  $AudioDomain . $G1_L14_Speaking . "audio" . ".mp3", 'q_image' => $l14G83image . "pencil.png", "q_content" => "Describe the picture. This is ____. It's ____."],
            ['round' => 6, 'game_id' => 83, 'q_audio' =>  $AudioDomain . $G1_L14_Speaking . "audio" . ".mp3", 'q_image' => $l14G83image . "apple.png", "q_content" => "Describe the picture. This is ____. It's ____."],

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
        $l15G85image = $domain . "/storage/images/Grade_1/lesson_15/Read_Listen_n_Repeat/";


        DB::table('ans_n_ques')->insert([

            // game 85
            ['round' => 1, 'game_id' => 85, 'a_image' => $l15G85image . "girl.png", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "yellow_cat.mp3", "a_conver" => "Yellow Cat, Yellow Cat.\nWhat's this?", 'q_image' => null],
            ['round' => 1, 'game_id' => 85, 'a_image' => $l15G85image . "cat.png", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "dog_dog.mp3", "a_conver" => "Dog. Dog It's a Dog.\nIt's big. It's black.", 'q_image' => $l15G85image . "dog.png"],

            ['round' => 2, 'game_id' => 85, 'a_image' => $l15G85image . "cat1.png", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "black_dog.mp3", "a_conver" => "Black dog. Black dog,\nwhat's this?", 'q_image' => null],
            ['round' => 2, 'game_id' => 85, 'a_image' => $l15G85image . "dog.png", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "cock_cock.mp3", "a_conver" => "Cock. Cock. it's a cock.\nIt's small. It's white.", 'q_image' => $l15G85image . "cock.png"],


            // game 86
            ['round' => 1, 'game_id' => 86, 'a_image' => $l15G85image . "mouse.png", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "yellow_cat_how.mp3", "a_conver" => "Yellow Cat, Yellow Cat. How are you?", 'q_image' => null],
            ['round' => 1, 'game_id' => 86, 'a_image' => $l15G85image . "cat2right.png", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "im_fine.mp3", "a_conver" => "I'm fine. I'm ok.", 'q_image' => null],

            ['round' => 2, 'game_id' => 86, 'a_image' => $l15G85image . "dogcat.jpeg", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "red_ant.mp3", "a_conver" => "Red ant, Red ant. How are you?", 'q_image' => null],
            ['round' => 2, 'game_id' => 86, 'a_image' => $l15G85image . "ant.png", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "im_great.mp3", "a_conver" => "I'm great. I'm great.", 'q_image' => null],

            ['round' => 3, 'game_id' => 86, 'a_image' => $l15G85image . "dogleft.png", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "tom_tom.mp3", "a_conver" => "Tom, Tom, What's this?", 'q_image' => null],
            ['round' => 3, 'game_id' => 86, 'a_image' => $l15G85image . "catright.png", "a_audio" => $AudioDomain . $G1_L15_Read_Listen_n_Repeat_path . "mouse_mouse.mp3",  "a_conver" => "Mouse, Mouse. It's mouse. It's small. It's brown.", 'q_image' => $l15G85image . "mousemiddle.png",],

        ]);







        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 15 Game 87, 88 (  Listen and Practice  )
        ////////////////////////////////////////////////////////

        $l15_G87_G88_image = $domain . "/storage/images/Grade_1/lesson_15/listen_n_practice/";
        $G1_L15_listen_n_practice = "Grade_1/" . "Lesson_15/" . "listen_n_practice/";


        // game 87
        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "orange fish", 'q_image' => $l15_G87_G88_image . "1/fish" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "orange-fish" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "yellow duck", 'q_image' => $l15_G87_G88_image . "1/duck" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "yellow-duck" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "white sheep", 'q_image' => $l15_G87_G88_image . "1/sheep" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "white-sheep" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "black dog", 'q_image' => $l15_G87_G88_image . "1/dog1" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "black-dog" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "green chameleon", 'q_image' => $l15_G87_G88_image . "1/chameleon" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "green-chameleon" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "red bird", 'q_image' => $l15_G87_G88_image . "1/bird" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "red-bird" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 87, 'a_content' => "brown horse", 'q_image' => $l15_G87_G88_image . "1/horse" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "brown-horse" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],


            [
                'round' => 2, 'game_id' => 87, 'a_content' => "yellow cat", 'q_image' => $l15_G87_G88_image . "1/puppy" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "yellow-cat" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "cock", 'q_image' => $l15_G87_G88_image . "1/cock" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "cock" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "blue bear", 'q_image' => $l15_G87_G88_image . "1/bear" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "blue-bear" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "brown mouse", 'q_image' => $l15_G87_G88_image . "1/mouse" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "brown-mouse" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "pink pig", 'q_image' => $l15_G87_G88_image . "1/pig" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "pink-pig" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "red ant", 'q_image' => $l15_G87_G88_image . "1/ant" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "red-ant" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
            [
                'round' => 2, 'game_id' => 87, 'a_content' => "black dog", 'q_image' => $l15_G87_G88_image . "1/dog2" . ".png",
                'a_audio' => $AudioDomain . $G1_L15_listen_n_practice . "black-dog" . ".mp3", "background" => $l15_G87_G88_image . "1/bg1.png"
            ],
        ]);


        // game 88
        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-an-ant-Its-small-Its.mp3", 'q_conver' => "It's an ant. It's small. It's red.", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l15_G87_G88_image . "2/ant.png"],
            ['round' => 1, 'game_id' => 88, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-rabbit-Its-fast-Its.mp3", 'q_conver' => "It's a rabbit. It's fast. It's brown.", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l15_G87_G88_image . "2/rabbit.png"],
            ['round' => 2, 'game_id' => 88, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 3, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-dog-Its-big-Its-blu.mp3", 'q_conver' => "It's a dog. It's big. It's blue.", 'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l15_G87_G88_image . "2/dog.png"],
            ['round' => 3, 'game_id' => 88, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 4, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-cok-Its-big-Its-red.mp3", 'q_conver' => "It's a cock. It's big. It's red.", 'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l15_G87_G88_image . "2/cock.png"],
            ['round' => 4, 'game_id' => 88, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 5, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-kitten-Its-dirty-It.mp3", 'q_conver' => "It's a kitten. It's dirty. It's yellow.", 'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l15_G87_G88_image . "2/kitten.png"],
            ['round' => 5, 'game_id' => 88, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 6, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-bear-Its-old-Its-br.mp3", 'q_conver' => "It's a bear. It's old. It's brown.", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l15_G87_G88_image . "2/bear.png"],
            ['round' => 6, 'game_id' => 88, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 7, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-hamster-Its-small-It.mp3", 'q_conver' => "It's a hamster. It's small. It's grey and white.", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l15_G87_G88_image . "2/hamster.png"],
            ['round' => 7, 'game_id' => 88, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 8, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-mouse-Its-fast-Its.mp3", 'q_conver' => "It's a mouse. It's fast. It's brown.", 'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l15_G87_G88_image . "2/mouse.png"],
            ['round' => 8, 'game_id' => 88, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 9, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-cat-Its-clean-Its-w.mp3", 'q_conver' => "It's a cat. It's clean. It's white.", 'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l15_G87_G88_image . "2/cat.png"],
            ['round' => 9, 'game_id' => 88, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 10, 'game_id' => 88, 'q_audio' => $AudioDomain . $G1_L15_listen_n_practice . "Its-a-turtle-Its-slow-Its.mp3", 'q_conver' => "It's a turtle. It's slow. It's green.", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l15_G87_G88_image . "2/turtle.png"],
            ['round' => 10, 'game_id' => 88, 'q_audio' => null, 'q_conver' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 15 Game 89 (  Grammar  )
        ////////////////////////////////////////////////////////

        $l15G89image = $domain . "/storage/images/Grade_1/lesson_15/grammar/";
        $G1_L15_grammar_path = "Grade_1/" . "Lesson_15/" . "grammar/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 89, 'q_audio' => $AudioDomain . $G1_L15_grammar_path . "Its-ant.mp3", 'q_conver' => "It's ___ ant.", 'q_content' => "a", 'q_image' =>  $l15G89image . "ant.png", 'a_content' => 0],
            ['round' => 1, 'game_id' => 89, 'q_audio' => null, 'q_conver' => null, 'q_content' => "an", 'q_image' => null, 'a_content' => 1],

            ['round' => 2, 'game_id' => 89, 'q_audio' => $AudioDomain . $G1_L15_grammar_path . "Its-cok.mp3", 'q_conver' => "It's ___ cock.", 'q_content' => "a", 'q_image' =>  $l15G89image . "cock.png", 'a_content' => 1],
            ['round' => 2, 'game_id' => 89, 'q_audio' => null, 'q_conver' => null, 'q_content' => "an", 'q_image' => null, 'a_content' => 0],

            ['round' => 3, 'game_id' => 89, 'q_audio' => $AudioDomain . $G1_L15_grammar_path . "Its-hamster.mp3", 'q_conver' => "It's ___ hamster.", 'q_content' => "a", 'q_image' =>  $l15G89image .  "hamster.png", 'a_content' => 1],
            ['round' => 3, 'game_id' => 89, 'q_audio' => null, 'q_conver' => null, 'q_content' => "an", 'q_image' => null, 'a_content' => 0],

            ['round' => 4, 'game_id' => 89, 'q_audio' => $AudioDomain . $G1_L15_grammar_path . "Its-duck.mp3", 'q_conver' => "It's ___ duck.", 'q_content' => "a", 'q_image' =>  $l15G89image . "duck.png", 'a_content' => 1],
            ['round' => 4, 'game_id' => 89, 'q_audio' => null, 'q_conver' => null, 'q_content' => "an", 'q_image' => null, 'a_content' => 0],

            ['round' => 5, 'game_id' => 89, 'q_audio' => $AudioDomain . $G1_L15_grammar_path . "Its-bear.mp3", 'q_conver' => "It's ___ bear.", 'q_content' => "a", 'q_image' =>  $l15G89image . "bear.png", 'a_content' => 1],
            ['round' => 5, 'game_id' => 89, 'q_audio' => null, 'q_conver' => null, 'q_content' => "an", 'q_image' => null, 'a_content' => 0],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 15 Game 90 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l15G90image = $domain . "/storage/images/Grade_1/lesson_15/Speaking/";
        $G1_L15_Speaking = "Grade_1/" . "Lesson_15/" . "Speaking/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 90, 'q_audio' => $AudioDomain . $G1_L15_Speaking . "audio" . ".mp3", 'q_image' => $l15G90image . "dog.png", "q_content" => "Describe the animals and their sizes and colours."],
            ['round' => 2, 'game_id' => 90, 'q_audio' => $AudioDomain . $G1_L15_Speaking . "audio" . ".mp3", 'q_image' => $l15G90image . "turtle.png", "q_content" => "Describe the animals and their sizes and colours."],
            ['round' => 3, 'game_id' => 90, 'q_audio' => $AudioDomain . $G1_L15_Speaking . "audio" . ".mp3", 'q_image' => $l15G90image . "cock.png", "q_content" => "Describe the animals and their sizes and colours."],
            ['round' => 4, 'game_id' => 90, 'q_audio' => $AudioDomain . $G1_L15_Speaking . "audio" . ".mp3", 'q_image' => $l15G90image . "ant.png", "q_content" => "Describe the animals and their sizes and colours."],
            ['round' => 5, 'game_id' => 90, 'q_audio' => $AudioDomain . $G1_L15_Speaking . "audio" . ".mp3", 'q_image' => $l15G90image . "cat.png", "q_content" => "Describe the animals and their sizes and colours."],

        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 15 Game 91 (  Reading Passage  )
        ////////////////////////////////////////////////////////

        $G1_L15_reading_passage_path = "Grade_1/" . "Lesson_15/" . "reading_passage/";
        $l15G91image = $domain . "/storage/images/Grade_1/lesson_15/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "brown_and_white.mp3", 'q_content' => "brown and white", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "black_and_white.mp3", 'q_content' => "black and white", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "gray_and_white.mp3", 'q_content' => "grey and white", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "The-cow-is-brown-and-white-bla.mp3", "q_conver" => "The cow is ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-He-has-a-cow-a-wh.mp3", "q_content" => "Ben's farm", 'q_conver' => "Ben is six. He has a cow, a white cock, a white sheep and a pig. The cow is black and white. The pig is pink and it's small. He also has a horse. The horse is brown. Ben has a big farm.", 'a_content' => null, "background" => $l15G91image . "bg.png"],


            ['round' => 2, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "big.mp3", 'q_content' => "big", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "ban.mp3", 'q_content' => "ban", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "small.mp3", 'q_content' => "small", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "The-pig-is-big-Ben-small.mp3", "q_conver" =>  "The pig is ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-He-has-a-cow-a-wh.mp3", "q_content" => "Ben's farm", 'q_conver' => "Ben is six. He has a cow, a white cock, a white sheep and a pig. The cow is black and white. The pig is pink and it's small. He also has a horse. The horse is brown. Ben has a big farm.", 'a_content' => null, "background" => $l15G91image . "bg.png"],


            ['round' => 3, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "big.mp3", 'q_content' => "big", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "ban.mp3", 'q_content' => "ban", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "small.mp3", 'q_content' => "small", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "He-has-a-farm-Its-big-Ben-sm.mp3", "q_conver" => "He has a farm. It's ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-He-has-a-cow-a-wh.mp3", "q_content" => "Ben's farm", 'q_conver' => "Ben is six. He has a cow, a white cock, a white sheep and a pig. The cow is black and white. The pig is pink and it's small. He also has a horse. The horse is brown. Ben has a big farm.", 'a_content' => null, "background" => $l15G91image . "bg.png"],


            ['round' => 4, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "goat.mp3", 'q_content' => "goat", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "sheep.mp3", 'q_content' => "sheep", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "duck.mp3", 'q_content' => "duck", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "He-has-a-goat-sheep-duck.mp3", "q_conver" => "He has a ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-He-has-a-cow-a-wh.mp3", "q_content" => "Ben's farm", 'q_conver' => "Ben is six. He has a cow, a white cock, a white sheep and a pig. The cow is black and white. The pig is pink and it's small. He also has a horse. The horse is brown. Ben has a big farm.", 'a_content' => null, "background" => $l15G91image . "bg.png"],


            ['round' => 5, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "six.mp3", 'q_content' => "six", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "pig.mp3", 'q_content' => "pig", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 91, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L15_reading_passage_path . "big.mp3", 'q_content' => "big", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-pig-big.mp3", "q_conver" => "Ben is ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 91, "q_image" => null, "q_audio" => $AudioDomain . $G1_L15_reading_passage_path . "Ben-is-six-He-has-a-cow-a-wh.mp3", "q_content" => "Ben's farm", 'q_conver' => "Ben is six. He has a cow, a white cock, a white sheep and a pig. The cow is black and white. The pig is pink and it's small. He also has a horse. The horse is brown. Ben has a big farm.", 'a_content' => null, "background" => $l15G91image . "bg.png"],


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
                'round' => 1, 'game_id' => 94, 'a_content' => "jam", 'q_image' => $l16G94image . "jam1" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "jam" . ".mp3", "background" => $l16G94image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 94, 'a_content' => "lollipop", 'q_image' => $l16G94image . "lollipop1" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "lollipop" . ".mp3", "background" => $l16G94image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 94, 'a_content' => "ketchup", 'q_image' => $l16G94image . "ketchup" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "ketchup" . ".mp3", "background" => $l16G94image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 94, 'a_content' => "key", 'q_image' => $l16G94image . "key" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "key" . ".mp3", "background" => $l16G94image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 94, 'a_content' => "lock", 'q_image' => $l16G94image . "lock" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "lock" . ".mp3", "background" => $l16G94image . "bg.png"
            ],


            [
                'round' => 2, 'game_id' => 94, 'a_content' => "lollipop", 'q_image' => $l16G94image . "lollipop2" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "lollipop" . ".mp3", "background" => $l16G94image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 94, 'a_content' => "ice", 'q_image' => $l16G94image . "ice" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "ice" . ".mp3", "background" => $l16G94image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 94, 'a_content' => "jam", 'q_image' => $l16G94image . "jam2" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "jam" . ".mp3", "background" => $l16G94image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 94, 'a_content' => "lemon", 'q_image' => $l16G94image . "lemon" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "lemon" . ".mp3", "background" => $l16G94image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 94, 'a_content' => "ice-cream", 'q_image' => $l16G94image . "icecream" . ".png",
                'a_audio' => $AudioDomain . $G1_L16_listen_n_practice . "ice-cream" . ".mp3", "background" => $l16G94image . "bg.png"
            ],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 16 Game 95 (  Matching  )
        ////////////////////////////////////////////////////////

        $l16G95image = $domain . "/storage/images/Grade_1/lesson_16/Matching/";
        $G1_L16_Matching = "Grade_1/" . "Lesson_16/" . "Matching/";


        $G1_L16_Game95_Matching = [

            ['Lock', 'Lamp', 'Key', 'Iron', "Kite"],
            ['Ketchup', 'Ice cream', 'Jam', 'Lollipop', "Juice"],

        ];

        $G1_L16_Game95_Matching_image = [

            ['key', 'iron', 'kite', 'lock', "lamp"],
            ['jam', 'juice', 'ketchup', 'lollipop', 'icecream'],

        ];

        $G1_L16_Game95_Matching_audio = [
            'lock', 'lamp', 'key', 'iron', 'kite',
            'key', 'iron', 'kite', 'lock', 'lamp',

            'ketchup', 'ice-cream', 'jam', 'lollipop', 'juice',
            'jam', 'juice', 'ketchup', 'lollipop', 'ice-cream'

        ];

        $G1_L16_Game95_index = 0;

        for ($i = 0; $i < count($G1_L16_Game95_Matching); $i++) {

            foreach ($G1_L16_Game95_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 95, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G1_L16_Matching .  $G1_L16_Game95_Matching_audio[$G1_L16_Game95_index] . ".mp3",
                    ]
                ]);
                $G1_L16_Game95_index++;
            }

            foreach ($G1_L16_Game95_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 95, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l16G95image . $q . ".png", 'q_audio' => $AudioDomain . $G1_L16_Matching .  $G1_L16_Game95_Matching_audio[$G1_L16_Game95_index] . ".mp3",
                    ]
                ]);
                $G1_L16_Game95_index++;
            }
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 16 Game 96 , 97 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l16_G96_G97_image = $domain . "/storage/images/Grade_1/lesson_16/Speaking/";
        $G1_L16_Speaking = "Grade_1/" . "Lesson_16/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            // game 96
            ['round' => 1, 'game_id' => 96, 'q_audio' => $AudioDomain . $G1_L16_Speaking . "Its-cold-I-need-a-fan-or-a" . ".mp3", 'q_image' => $l16_G96_G97_image . "cold.png", "q_content" => "It's cold. I need \"a fan or a jacket\"."],
            ['round' => 2, 'game_id' => 96, 'q_audio' => $AudioDomain . $G1_L16_Speaking . "Im-eating-hamburger-I-need-j" . ".mp3", 'q_image' => $l16_G96_G97_image . "eating.png", "q_content" => "I'm eating hamburger. I need \"jam or ketchup\"."],
            ['round' => 3, 'game_id' => 96, 'q_audio' => $AudioDomain . $G1_L16_Speaking . "Im-drinking-juice-I-need-ice" . ".mp3", 'q_image' => $l16_G96_G97_image . "drinking.png", "q_content" => "I'm drinking juice. I need \"ice or ice cream\"."],
            ['round' => 4, 'game_id' => 96, 'q_audio' => $AudioDomain . $G1_L16_Speaking . "Turn-on-the-lamp--or-iron" . ".mp3", 'q_image' => $l16_G96_G97_image . "lamp.png", "q_content" => "Turn on the \"lamp or iron\"."],
            ['round' => 5, 'game_id' => 96, 'q_audio' => $AudioDomain . $G1_L16_Speaking . "I-need-to-open-the-door-I-nee" . ".mp3", 'q_image' => $l16_G96_G97_image . "door.png", "q_content" => "I need to open the door. I need \"key or lock\"."],


            // game 97
            ['round' => 1, 'game_id' =>  97, 'q_audio' => $AudioDomain . $G1_L16_Speaking . "Look-at-the-half-of-the-pictur" . ".mp3", 'q_image' => $l16_G96_G97_image . "lemon.png", "q_content" => "Look at the half of the picture and say a word."],
            ['round' => 2, 'game_id' =>  97, 'q_audio' => $AudioDomain . $G1_L16_Speaking . "Look-at-the-half-of-the-pictur" . ".mp3", 'q_image' => $l16_G96_G97_image . "ink.png", "q_content" => "Look at the half of the picture and say a word."],
            ['round' => 3, 'game_id' =>  97, 'q_audio' => $AudioDomain . $G1_L16_Speaking . "Look-at-the-half-of-the-pictur" . ".mp3", 'q_image' => $l16_G96_G97_image . "kite.png", "q_content" => "Look at the half of the picture and say a word."],
            ['round' => 4, 'game_id' =>  97, 'q_audio' => $AudioDomain . $G1_L16_Speaking . "Look-at-the-half-of-the-pictur" . ".mp3", 'q_image' => $l16_G96_G97_image . "lollipop.png", "q_content" => "Look at the half of the picture and say a word."],
            ['round' => 5, 'game_id' =>  97, 'q_audio' => $AudioDomain . $G1_L16_Speaking . "Look-at-the-half-of-the-pictur" . ".mp3", 'q_image' => $l16_G96_G97_image . "icecream.png", "q_content" => "Look at the half of the picture and say a word."],


        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 16 Game 98 , 99 (  Writing  )
        ////////////////////////////////////////////////////////

        $G1_L16_writing = "Grade_1/" . "Lesson_16/" . "writing/";
        $l16_G98_G99_image = $domain . "/storage/images/Grade_1/lesson_16/writing/";


        // game 98
        $G98tracing = [
            'i', 'j', 'K', 'k', 'L', 'l', 'J', 'I'
        ];
        foreach ($G98tracing as $i => $trace) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 98,
                    'q_audio' =>  $AudioDomain . $G1_L16_writing . strtoupper($trace) . ".mp3",
                    'q_content' => ctype_lower($trace) ?   $l16_G98_G99_image . "dotted_small_" . $trace . ".png" :  $l16_G98_G99_image . "dotted_" . $trace . ".png",
                    'q_image' => ctype_lower($trace) ?   $l16_G98_G99_image . "small_" . $trace . ".png" :  $l16_G98_G99_image . $trace . ".png",
                    'a_content' => $trace,
                ],
            ]);
        }

        // game 99
        $g1_l16_Game99_rearrange_the_letter_q1 = [
            ['A', 'H', 'J', 'G', 'K'],
            ['A', 'H', 'C', 'J', 'E'],
            ['A', 'L', 'C', 'J', 'E'],
            ['L', 'H', 'C', 'J', 'E'],
            ['L', 'H', 'K', 'J', 'I'],
            ['L', 'K', 'A', 'J', 'I'],
            ['L', 'K', 'A', 'J', 'I'],
            ['L', 'O', 'A', 'O', 'I'],
            ['A', 'T', 'J', 'G', 'B'],
            ['I', 'T', 'C', 'G', 'B'],
        ];

        $g1_l16_Game99_rearrange_the_letter_q2 = [
            '_ETC_UP', '_UIC_', '__MON', '_O_K', '__TE', '_AC_ET', '_N_', 'L_L_IP_P', '__M', '__E'
        ];

        $correctAns =   [

            ['K', 'H'],
            ['J', 'E'],
            ['L', 'E'],
            ['L', 'C'],
            ['K', "I"],
            ['J', 'K'],
            ['I', 'K'],
            ['O', 'L', 'O'],
            ['J', 'A'],
            ['I', 'C'],

        ];

        $g1_l16_Game99_rearrange_the_letter_a = [
            'KETCHUP', 'JUICE', 'LEMON', 'LOCK', 'KITE', 'JACKET', 'INK', 'LOLLIPOP', 'JAM', 'ICE'
        ];




        for ($i = 0; $i < count($g1_l16_Game99_rearrange_the_letter_q1); $i++) {

            foreach ($g1_l16_Game99_rearrange_the_letter_q1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 99,
                        'q_audio' => $AudioDomain . $G1_L16_writing . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' => implode(' ', $correctAns[$i]),
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 99,
                    'q_audio' => $AudioDomain . $G1_L16_writing . strtolower($g1_l16_Game99_rearrange_the_letter_a[$i]) . ".mp3",
                    'q_image' => $l16_G98_G99_image .  strtolower($g1_l16_Game99_rearrange_the_letter_a[$i]) . ".png",
                    'q_content' => $g1_l16_Game99_rearrange_the_letter_q2[$i],
                    'a_content' => $g1_l16_Game99_rearrange_the_letter_a[$i]
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 18 Game 107 (  Grammar Explanation  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 107, 'a_content' => 'lesson_18_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 107, 'a_content' => 'lesson_18_video_global', 'isLocal' => 0]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 18 Game 108 (  Read Listen and Repeat   )
        ////////////////////////////////////////////////////////

        $L18_G108_bodyParts = ['Head', 'Nose', 'Mouth', 'Neck', 'Chest', 'Arm', 'Stomach', 'Hand', 'Fingers', 'Leg', 'Feet', 'Toes'];

        $G1_L18_read_listen_n_practice = "Grade_1/" . "Lesson_18/" . "read_listen_n_practice/";
        $l18_G108_image = $domain . "/storage/images/Grade_1/lesson_18/read_listen_n_practice/";


        foreach ($L18_G108_bodyParts as $part) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 108,
                    'q_audio' => $AudioDomain . $G1_L18_read_listen_n_practice . $part . ".mp3",
                    'q_image' => $l18_G108_image . strtolower($part) . ".png",
                    'q_content' => $part

                ],
            ]);
        }
        DB::table('ans_n_ques')->insert([
            ['game_id' => 108, 'background' => $l18_G108_image . "bg" . ".png"]
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 18 Game 109 (  Listen and Practice  )
        ////////////////////////////////////////////////////////

        $G1_L18_listen_n_practice_path = "Grade_1/" . "Lesson_18/" . "listen_n_practice/";
        $l18_G109_image = $domain . "/storage/images/Grade_1/lesson_18/listen_n_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 109, 'q_audio' => $AudioDomain . $G1_L18_listen_n_practice_path . "Thigh.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l18_G109_image . "thigh.png", 'q_content' => "knee", 'a_content' => 0],
            ['round' => 1, 'game_id' => 109, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "thigh", 'a_content' => 1],
            ['round' => 1, 'game_id' => 109, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "body", 'a_content' => 0],

            ['round' => 2, 'game_id' => 109, 'q_audio' => $AudioDomain . $G1_L18_listen_n_practice_path . "Fingers.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l18_G109_image . "finger.png", 'q_content' => "toes", 'a_content' => 0],
            ['round' => 2, 'game_id' => 109, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "feet", 'a_content' => 0],
            ['round' => 2, 'game_id' => 109, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "finger", 'a_content' => 1],

            ['round' => 3, 'game_id' => 109, 'q_audio' => $AudioDomain . $G1_L18_listen_n_practice_path . "Waist.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l18_G109_image . "waist.png", 'q_content' => "waist", 'a_content' => 1],
            ['round' => 3, 'game_id' => 109, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "chest", 'a_content' => 0],
            ['round' => 3, 'game_id' => 109, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "leg", 'a_content' => 0],

            ['round' => 4, 'game_id' => 109, 'q_audio' => $AudioDomain . $G1_L18_listen_n_practice_path . "Knee.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l18_G109_image . "knee.png", 'q_content' => "Leg", 'a_content' => 0],
            ['round' => 4, 'game_id' => 109, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "knee", 'a_content' => 1],
            ['round' => 4, 'game_id' => 109, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "thigh", 'a_content' => 0],

            ['round' => 5, 'game_id' => 109, 'q_audio' => $AudioDomain . $G1_L18_listen_n_practice_path . "shoulder.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l18_G109_image . "shoulder.png", 'q_content' => "Shoulder", 'a_content' => 1],
            ['round' => 5, 'game_id' => 109, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "Elbow", 'a_content' => 0],
            ['round' => 5, 'game_id' => 109, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "Neck", 'a_content' => 0],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 18 Game 110 (  Listen and Act  )
        ////////////////////////////////////////////////////////


        $G1_L18_listen_n_act = "Grade_1/" . "Lesson_18/" . "listen_n_act/";
        $l18_G110_image = $domain . "/storage/images/Grade_1/lesson_18/listen_n_act/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 110, 'q_audio' => $AudioDomain . $G1_L18_listen_n_act . "Dont-touch-your-feet.mp3", 'q_content' => "Don't touch your feet", 'q_image' =>  $l18_G110_image . "hair.png", 'a_content' => 1],
            ['round' => 1, 'game_id' => 110, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l18_G110_image . "feet.png", 'a_content' => 0],

            ['round' => 2, 'game_id' => 110, 'q_audio' => $AudioDomain . $G1_L18_listen_n_act . "touch-your-waist.mp3", 'q_content' => "Touch your waist", 'q_image' =>  $l18_G110_image . "feet.png", 'a_content' => 0],
            ['round' => 2, 'game_id' => 110, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l18_G110_image . "waist.png", 'a_content' => 1],

            ['round' => 3, 'game_id' => 110, 'q_audio' => $AudioDomain . $G1_L18_listen_n_act . "Dont-touch-your-ankle.mp3", 'q_content' => "Don't touch your ankle", 'q_image' =>  $l18_G110_image . "leg.png", 'a_content' => 1],
            ['round' => 3, 'game_id' => 110, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l18_G110_image . "ankle.png", 'a_content' => 0],

            ['round' => 4, 'game_id' => 110, 'q_audio' => $AudioDomain . $G1_L18_listen_n_act . "Touch-your-knee.mp3", 'q_content' => "Touch your knee", 'q_image' =>  $l18_G110_image . "mouth.png", 'a_content' => 0],
            ['round' => 4, 'game_id' => 110, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l18_G110_image . "knee.png", 'a_content' => 1],

            ['round' => 5, 'game_id' => 110, 'q_audio' => $AudioDomain . $G1_L18_listen_n_act . "Touch-your-arm.mp3", 'q_content' => "Touch your arm", 'q_image' =>  $l18_G110_image . "arm.png", 'a_content' => 1],
            ['round' => 5, 'game_id' => 110, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l18_G110_image . "head.png", 'a_content' => 0],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 18 Game 111 (  Writing  )
        ////////////////////////////////////////////////////////

        $l18G111image = $domain . "/storage/images/Grade_1/lesson_18/writing/";
        $G1_L18_writing_path = "Grade_1/" . "Lesson_18/" . "writing/";


        // round 1
        $G111R1 = [
            "O", "T", "E", "S"
        ];
        foreach ($G111R1 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 111, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L18_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 111,  "q_image" => $l18G111image . "feet.png", 'a_content' => "TOES", 'a_audio' => $AudioDomain . $G1_L18_writing_path . "Toes.mp3"],
        ]);

        // round 2
        $G111R2 = [
            "O", "T", "M", "S", "A", "H", "C"
        ];
        foreach ($G111R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 111,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L18_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 111, "q_image" => $l18G111image . "stomach.png", 'a_content' => "STOMACH", 'a_audio' => $AudioDomain . $G1_L18_writing_path . "Stomach.mp3"],
        ]);

        // round 3
        $G111R3 = [
            "I", "N", "G", "S", "E", "F", "R"
        ];
        foreach ($G111R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 111, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L18_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }
        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 111, "q_image" => $l18G111image . "fingers.png", 'a_content' => "FINGERS", 'a_audio' => $AudioDomain . $G1_L18_writing_path . "Fingers.mp3"],
        ]);

        // round 4
        $G111R4 = [
            "N", "E", "E", "K"
        ];
        foreach ($G111R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 111,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L18_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 111, "q_image" => $l18G111image . "knee.png", 'a_content' => "KNEE", 'a_audio' => $AudioDomain . $G1_L18_writing_path . "Knee.mp3"],
        ]);

        // round 5
        $G111R5 = [
            "H", "A", "E", "D"
        ];
        foreach ($G111R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 111, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L18_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 111, "q_image" => $l18G111image . "head.png",  'a_content' => "HEAD", 'a_audio' => $AudioDomain . $G1_L18_writing_path . "Head.mp3"],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 18 Game 112 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l18G112image = $domain . "/storage/images/Grade_1/lesson_18/Speaking/";
        $G1_L18_Speaking = "Grade_1/" . "Lesson_18/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 112, 'q_audio' => $AudioDomain . $G1_L18_Speaking . "audio" . ".mp3", 'q_image' => $l18G112image . "finger.png", "q_content" => "Look at the picture say the sentence. Touch your ____."],
            ['round' => 2, 'game_id' => 112, 'q_audio' => $AudioDomain . $G1_L18_Speaking . "audio" . ".mp3", 'q_image' => $l18G112image . "shoulder.png", "q_content" => "Look at the picture say the sentence. Touch your ____."],
            ['round' => 3, 'game_id' => 112, 'q_audio' => $AudioDomain . $G1_L18_Speaking . "audio" . ".mp3", 'q_image' => $l18G112image . "back.png", "q_content" => "Look at the picture say the sentence. Don't touch your ____."],
            ['round' => 4, 'game_id' => 112, 'q_audio' => $AudioDomain . $G1_L18_Speaking . "audio" . ".mp3", 'q_image' => $l18G112image . "knee.png", "q_content" => "Look at the picture say the sentence. Don't touch your ____."],
            ['round' => 5, 'game_id' => 112, 'q_audio' => $AudioDomain . $G1_L18_Speaking . "audio" . ".mp3", 'q_image' => $l18G112image . "hand.png", "q_content" => "Look at the picture say the sentence. Don't touch your ____."],
            ['round' => 6, 'game_id' => 112, 'q_audio' => $AudioDomain . $G1_L18_Speaking . "audio" . ".mp3", 'q_image' => $l18G112image . "feet.png", "q_content" => "Look at the picture say the sentence. Touch your ____."],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 19 Game 113 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 113, 'a_content' => 'lesson_19_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 113, 'a_content' => 'lesson_19_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 19 Game 114 (  Read Listen and Repeat   )
        ////////////////////////////////////////////////////////

        $L19_G114_bodyParts = ['Body', 'Waist', 'Thigh', 'Knee', 'Leg', 'Ankle', 'Toes', 'Feet'];

        $G1_L19_read_listen_n_practice = "Grade_1/" . "Lesson_19/" . "read_listen_n_practice/";
        $l19_G114_image = $domain . "/storage/images/Grade_1/lesson_19/read_listen_n_practice/";


        foreach ($L19_G114_bodyParts as $part) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 114,
                    'q_audio' => $AudioDomain . $G1_L19_read_listen_n_practice . $part . ".mp3",
                    'q_image' => $l19_G114_image . strtolower($part) . ".png",
                    'q_content' => $part

                ],
            ]);
        }
        DB::table('ans_n_ques')->insert([
            ['game_id' => 114, 'background' => $l19_G114_image . "bg" . ".png"]
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 19 Game 115 (  Listen and Practice  )
        ////////////////////////////////////////////////////////

        $G1_L19_listen_n_practice_path = "Grade_1/" . "Lesson_19/" . "listen_n_practice/";
        $l19_G115_image = $domain . "/storage/images/Grade_1/lesson_19/listen_n_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 115, 'q_audio' => $AudioDomain . $G1_L19_listen_n_practice_path . "Feet.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l19_G115_image . "feet.png", 'q_content' => "toes", 'a_content' => 0],
            ['round' => 1, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "feet", 'a_content' => 1],
            ['round' => 1, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "finger", 'a_content' => 0],

            ['round' => 2, 'game_id' => 115, 'q_audio' => $AudioDomain . $G1_L19_listen_n_practice_path . "Leg.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l19_G115_image . "leg1.png", 'q_content' => "waist", 'a_content' => 0],
            ['round' => 2, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "chest", 'a_content' => 0],
            ['round' => 2, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "leg", 'a_content' => 1],

            ['round' => 3, 'game_id' => 115, 'q_audio' => $AudioDomain . $G1_L19_listen_n_practice_path . "Thigh.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l19_G115_image . "thigh.png", 'q_content' => "knee", 'a_content' => 0],
            ['round' => 3, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "thigh", 'a_content' => 1],
            ['round' => 3, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "body", 'a_content' => 0],

            ['round' => 4, 'game_id' => 115, 'q_audio' => $AudioDomain . $G1_L19_listen_n_practice_path . "Ankle.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l19_G115_image . "ankle.png", 'q_content' => "feet", 'a_content' => 0],
            ['round' => 4, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "toes", 'a_content' => 0],
            ['round' => 4, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "ankle", 'a_content' => 1],

            ['round' => 5, 'game_id' => 115, 'q_audio' => $AudioDomain . $G1_L19_listen_n_practice_path . "Leg.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l19_G115_image . "leg.png", 'q_content' => "Leg", 'a_content' => 1],
            ['round' => 5, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "knee", 'a_content' => 0],
            ['round' => 5, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "thigh", 'a_content' => 0],

            ['round' => 6, 'game_id' => 115, 'q_audio' => $AudioDomain . $G1_L19_listen_n_practice_path . "Fingers.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l19_G115_image . "finger.png", 'q_content' => "toes", 'a_content' => 0],
            ['round' => 6, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "feet", 'a_content' => 0],
            ['round' => 6, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "finger", 'a_content' => 1],

            ['round' => 7, 'game_id' => 115, 'q_audio' => $AudioDomain . $G1_L19_listen_n_practice_path . "Waist.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l19_G115_image . "waist.png", 'q_content' => "waist", 'a_content' => 1],
            ['round' => 7, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "chest", 'a_content' => 0],
            ['round' => 7, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "leg", 'a_content' => 0],

            ['round' => 8, 'game_id' => 115, 'q_audio' => $AudioDomain . $G1_L19_listen_n_practice_path . "body.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l19_G115_image . "chest.png", 'q_content' => "knee", 'a_content' => 0],
            ['round' => 8, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "thigh", 'a_content' => 0],
            ['round' => 8, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "body", 'a_content' => 1],

            ['round' => 9, 'game_id' => 115, 'q_audio' => $AudioDomain . $G1_L19_listen_n_practice_path . "Knee.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l19_G115_image . "knee.png", 'q_content' => "Leg", 'a_content' => 0],
            ['round' => 9, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "knee", 'a_content' => 1],
            ['round' => 9, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "thigh", 'a_content' => 0],

            ['round' => 10, 'game_id' => 115, 'q_audio' => $AudioDomain . $G1_L19_listen_n_practice_path . "Toes.mp3", 'q_conver' => "Listen and choose the word you hear.", 'q_image' =>  $l19_G115_image . "toes.png", 'q_content' => "Feet", 'a_content' => 0],
            ['round' => 10, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "toes", 'a_content' => 1],
            ['round' => 10, 'game_id' => 115, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "ankle", 'a_content' => 0],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 19 Game 116 (  Listen and Act  )
        ////////////////////////////////////////////////////////


        $G1_L19_listen_n_act = "Grade_1/" . "Lesson_19/" . "listen_n_act/";
        $l19_G116_image = $domain . "/storage/images/Grade_1/lesson_19/listen_n_act/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 116, 'q_audio' => $AudioDomain . $G1_L19_listen_n_act . "Dont-touch-your-feet.mp3", 'q_content' => "Don't touch your feet", 'q_image' =>  $l19_G116_image . "hair.png", 'a_content' => 1],
            ['round' => 1, 'game_id' => 116, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l19_G116_image . "feet.png", 'a_content' => 0],

            ['round' => 2, 'game_id' => 116, 'q_audio' => $AudioDomain . $G1_L19_listen_n_act . "touch-your-waist.mp3", 'q_content' => "Touch your waist", 'q_image' =>  $l19_G116_image . "feet.png", 'a_content' => 0],
            ['round' => 2, 'game_id' => 116, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l19_G116_image . "waist.png", 'a_content' => 1],

            ['round' => 3, 'game_id' => 116, 'q_audio' => $AudioDomain . $G1_L19_listen_n_act . "Dont-touch-your-ankle.mp3", 'q_content' => "Don't touch your ankle", 'q_image' =>  $l19_G116_image . "leg.png", 'a_content' => 1],
            ['round' => 3, 'game_id' => 116, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l19_G116_image . "ankle.png", 'a_content' => 0],

            ['round' => 4, 'game_id' => 116, 'q_audio' => $AudioDomain . $G1_L19_listen_n_act . "Touch-your-knee.mp3", 'q_content' => "Touch your knee", 'q_image' =>  $l19_G116_image . "mouth.png", 'a_content' => 0],
            ['round' => 4, 'game_id' => 116, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l19_G116_image . "knee.png", 'a_content' => 1],

            ['round' => 5, 'game_id' => 116, 'q_audio' => $AudioDomain . $G1_L19_listen_n_act . "Touch-your-arm.mp3", 'q_content' => "Touch your arm", 'q_image' =>  $l19_G116_image . "arm.png", 'a_content' => 1],
            ['round' => 5, 'game_id' => 116, 'q_audio' => null, 'q_content' => null, 'q_image' =>  $l19_G116_image . "face.png", 'a_content' => 0],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 19 Game 117 (  Reading  )
        ////////////////////////////////////////////////////////


        $G1_L19_reading_passage_path = "Grade_1/" . "Lesson_19/" . "reading_passage/";
        $l19G117image = $domain . "/storage/images/Grade_1/lesson_19/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 117, "q_image" => null, "q_audio" => null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 117, "q_image" => null, "q_audio" => null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 117, "q_image" => null, "q_audio" => $AudioDomain . $G1_L19_reading_passage_path . "SubBlock_She-has-a-small-face-True-Fal.mp3", "q_conver" => "She has a small face.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 117, "q_image" => null, "q_audio" => $AudioDomain . $G1_L19_reading_passage_path . "This-is-a-pink-apple-She-has.mp3", "q_content" => "Ben's farm", 'q_conver' => "This is a pink apple. She has a big face. She has two blue eyes. She has a nose. She has small lip. She has no ears. She has no hair.", 'a_content' => null, "background" => $l19G117image . "bg.png"],


            ['round' => 2, 'game_id' => 117, "q_image" => null, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 117, "q_image" => null, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 117, "q_image" => null, "q_audio" => $AudioDomain . $G1_L19_reading_passage_path . "SubBlock_She-has-small-lips-True-Fals.mp3", "q_conver" =>  "She has small lips.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 117, "q_image" => null, "q_audio" => $AudioDomain . $G1_L19_reading_passage_path . "This-is-a-pink-apple-She-has.mp3", "q_content" => "Ben's farm", 'q_conver' => "This is a pink apple. She has a big face. She has two blue eyes. She has a nose. She has small lip. She has no ears. She has no hair.", 'a_content' => null, "background" => $l19G117image . "bg.png"],


            ['round' => 3, 'game_id' => 117, "q_image" => null, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 117, "q_image" => null, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 117, "q_image" => null, "q_audio" => $AudioDomain . $G1_L19_reading_passage_path . "SubBlock_She-has-two-ears-True-False.mp3", "q_conver" => "She has two ears.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 117, "q_image" => null, "q_audio" => $AudioDomain . $G1_L19_reading_passage_path . "This-is-a-pink-apple-She-has.mp3", "q_content" => "Ben's farm", 'q_conver' => "This is a pink apple. She has a big face. She has two blue eyes. She has a nose. She has small lip. She has no ears. She has no hair.", 'a_content' => null, "background" => $l19G117image . "bg.png"],


            ['round' => 4, 'game_id' => 117, "q_image" => null, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 117, "q_image" => null, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 117, "q_image" => null, "q_audio" => $AudioDomain . $G1_L19_reading_passage_path . "SubBlock_It-is-yellow-True-False.mp3", "q_conver" => "It is yellow.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 117, "q_image" => null, "q_audio" => $AudioDomain . $G1_L19_reading_passage_path . "This-is-a-pink-apple-She-has.mp3", "q_content" => "Ben's farm", 'q_conver' => "This is a pink apple. She has a big face. She has two blue eyes. She has a nose. She has small lip. She has no ears. She has no hair.", 'a_content' => null, "background" => $l19G117image . "bg.png"],


            ['round' => 5, 'game_id' => 117, "q_image" => null, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 117, "q_image" => null, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 117, "q_image" => null, "q_audio" => $AudioDomain . $G1_L19_reading_passage_path . "SubBlock_This-is-an-apple-True-False.mp3", "q_conver" => "This is an apple.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 117, "q_image" => null, "q_audio" => $AudioDomain . $G1_L19_reading_passage_path . "This-is-a-pink-apple-She-has.mp3", "q_content" => "Ben's farm", 'q_conver' => "This is a pink apple. She has a big face. She has two blue eyes. She has a nose. She has small lip. She has no ears. She has no hair.", 'a_content' => null, "background" => $l19G117image . "bg.png"],


        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 19 Game 118 (  Speaking Practice  )
        ////////////////////////////////////////////////////////

        $l19G118image = $domain . "/storage/images/Grade_1/lesson_19/Speaking/";
        $G1_L19_Speaking = "Grade_1/" . "Lesson_19/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 118, "q_audio" =>  $AudioDomain . $G1_L19_Speaking . "audio" . ".mp3", 'q_image' => $l19G118image . "leg.png", "q_content" => "Look at the picture say the sentence. Touch your ____."],
            ['round' => 2, 'game_id' => 118, "q_audio" =>  $AudioDomain . $G1_L19_Speaking . "audio" . ".mp3", 'q_image' => $l19G118image . "ankle.png", "q_content" => "Look at the picture say the sentence. Touch your ____."],
            ['round' => 3, 'game_id' => 118, "q_audio" =>  $AudioDomain . $G1_L19_Speaking . "audio" . ".mp3", 'q_image' => $l19G118image . "feet.png", "q_content" => "Look at the picture say the sentence. Don't touch your ____."],
            ['round' => 4, 'game_id' => 118, "q_audio" =>  $AudioDomain . $G1_L19_Speaking . "audio" . ".mp3", 'q_image' => $l19G118image . "thigh.png", "q_content" => "Look at the picture say the sentence. Don't touch your ____."],
            ['round' => 5, 'game_id' => 118, "q_audio" =>  $AudioDomain . $G1_L19_Speaking . "audio" . ".mp3", 'q_image' => $l19G118image . "waist.png", "q_content" => "Look at the picture say the sentence. Don't touch your ____."],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 20 Game 119 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 119, 'a_content' => 'lesson_20_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 119, 'a_content' => 'lesson_20_video_global', 'isLocal' => 0]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 20 Game 120 (  Read ,Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l20G120image = $domain . "/storage/images/Grade_1/lesson_20/read_listen_n_repeat/";
        $G1_L20_read_listen_n_repeat = "Grade_1/" . "Lesson_20/" . "read_listen_n_repeat/";


        $ansl20Content = [
            "Mango", "Mat", "Meat", "Milk", "Monkey", "Mouth", "Mushroom", "Nail", "Neck", "Nest", "Nine", "Noodles", "Nose", "Nuts"
        ];

        foreach ($ansl20Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 120, 'a_content' => $key, 'a_image' => $l20G120image . strtolower($key) . ".png",
                    'a_audio' => $AudioDomain . $G1_L20_read_listen_n_repeat . strtolower($key) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 20 Game 121 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l20G121image = $domain . "/storage/images/Grade_1/lesson_20/listen_n_practice/";
        $G1_L20_listen_n_practice = "Grade_1/" . "Lesson_20/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([

            [
                'round' => 1, 'game_id' => 121, 'a_content' => "monkey", 'q_image' => $l20G121image . "monkey_without_shadow" . ".png",
                'a_audio' => $AudioDomain . $G1_L20_listen_n_practice . "monkey" . ".mp3", "background" => $l20G121image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 121, 'a_content' => "mango", 'q_image' => $l20G121image . "mango" . ".png",
                'a_audio' => $AudioDomain . $G1_L20_listen_n_practice . "mango" . ".mp3", "background" => $l20G121image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 121, 'a_content' => "milk", 'q_image' => $l20G121image . "milk" . ".png",
                'a_audio' => $AudioDomain . $G1_L20_listen_n_practice . "milk" . ".mp3", "background" => $l20G121image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 121, 'a_content' => "meat", 'q_image' => $l20G121image . "meat" . ".png",
                'a_audio' => $AudioDomain . $G1_L20_listen_n_practice . "meat" . ".mp3", "background" => $l20G121image . "background.png"
            ],


            [
                'round' => 2, 'game_id' => 121, 'a_content' => "mushroom", 'q_image' => $l20G121image . "mushroom" . ".png",
                'a_audio' => $AudioDomain . $G1_L20_listen_n_practice . "mushroom" . ".mp3", "background" => $l20G121image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 121, 'a_content' => "mouth", 'q_image' => $l20G121image . "mouth" . ".png",
                'a_audio' => $AudioDomain . $G1_L20_listen_n_practice . "mouth" . ".mp3", "background" => $l20G121image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 121, 'a_content' => "monkey", 'q_image' => $l20G121image . "monkey" . ".png",
                'a_audio' => $AudioDomain . $G1_L20_listen_n_practice . "monkey" . ".mp3", "background" => $l20G121image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 121, 'a_content' => "nail", 'q_image' => $l20G121image . "nail" . ".png",
                'a_audio' => $AudioDomain . $G1_L20_listen_n_practice . "nail" . ".mp3", "background" => $l20G121image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 121, 'a_content' => "nose", 'q_image' => $l20G121image . "nose" . ".png",
                'a_audio' => $AudioDomain . $G1_L20_listen_n_practice . "nose" . ".mp3", "background" => $l20G121image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 121, 'a_content' => "nuts", 'q_image' => $l20G121image . "nuts" . ".png",
                'a_audio' => $AudioDomain . $G1_L20_listen_n_practice . "nuts" . ".mp3", "background" => $l20G121image . "background.png"
            ],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 20 Game 122 (  Matching  )
        ////////////////////////////////////////////////////////

        $l20G121image = $domain . "/storage/images/Grade_1/lesson_20/Matching/";
        $G1_L20_Matching = "Grade_1/" . "Lesson_20/" . "Matching/";


        $G1_L20_Game121_Matching = [

            ['Nail', 'Monkey', 'Mat', 'Nose', "Mouth"],
            ['mango', 'mushroom', 'milk', 'meat', "noodles"],

        ];

        $G1_L20_Game121_Matching_image = [

            ['mat', 'nose', 'mouth', 'monkey', "nail"],
            ['milk', 'noodles', 'mango', 'mushroom', 'meat'],

        ];


        for ($i = 0; $i < count($G1_L20_Game121_Matching); $i++) {

            foreach ($G1_L20_Game121_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 122, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G1_L20_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }

            foreach ($G1_L20_Game121_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 122, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l20G121image . $q . ".png", 'q_audio' => $AudioDomain . $G1_L20_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 20 Game 123 , 124 ( speaking )
        ////////////////////////////////////////////////////////

        $l20_G123_G124_image = $domain . "/storage/images/Grade_1/lesson_20/Speaking/";
        $G1_L20_Speaking = "Grade_1/" . "Lesson_20/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            // game 123
            ['round' => 1, 'game_id' => 123, 'q_audio' => $AudioDomain . $G1_L20_Speaking . "audio" . ".mp3", 'q_image' => $l20_G123_G124_image . "noodlesoup.png", "q_content" => "This is noodle soup. What do you see in the picture?"],
            ['round' => 2, 'game_id' => 123, 'q_audio' => $AudioDomain . $G1_L20_Speaking . "audio" . ".mp3", 'q_image' => $l20_G123_G124_image . "mango_milkshake.png", "q_content" => "This is mango milkshake. What do you see in the picture?"],

            // game 124
            ['round' => 1, 'game_id' => 124, 'q_audio' => $AudioDomain . $G1_L20_Speaking . "Look-at-the-half-of-the-pictur" . ".mp3", 'q_image' => $l20_G123_G124_image . "meat.png", "q_content" => "Look at the half of the picture and say a word."],
            ['round' => 2, 'game_id' => 124, 'q_audio' => $AudioDomain . $G1_L20_Speaking . "Look-at-the-half-of-the-pictur" . ".mp3", 'q_image' => $l20_G123_G124_image . "noodle.png", "q_content" => "Look at the half of the picture and say a word."],
            ['round' => 3, 'game_id' => 124, 'q_audio' => $AudioDomain . $G1_L20_Speaking . "Look-at-the-half-of-the-pictur" . ".mp3", 'q_image' => $l20_G123_G124_image . "mushroom.png", "q_content" => "Look at the half of the picture and say a word."],
            ['round' => 4, 'game_id' => 124, 'q_audio' => $AudioDomain . $G1_L20_Speaking . "Look-at-the-half-of-the-pictur" . ".mp3", 'q_image' => $l20_G123_G124_image . "nest.png", "q_content" => "Look at the half of the picture and say a word."],
            ['round' => 5, 'game_id' => 124, 'q_audio' => $AudioDomain . $G1_L20_Speaking . "Look-at-the-half-of-the-pictur" . ".mp3", 'q_image' => $l20_G123_G124_image . "nine.png", "q_content" => "Look at the half of the picture and say a word."],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 20 Game 125 , 126 (  Writing  )
        ////////////////////////////////////////////////////////

        $G1_L20_writing = "Grade_1/" . "Lesson_20/" . "writing/";
        $l20_G125_G126_image = $domain . "/storage/images/Grade_1/lesson_20/writing/";


        // game 125
        $G125tracing = [
            'n', 'N', 'm', 'M'
        ];
        foreach ($G125tracing as $i => $trace) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 125,
                    'q_audio' =>  $AudioDomain . $G1_L20_writing . strtoupper($trace) . ".mp3",
                    'q_content' => ctype_lower($trace) ?    $l20_G125_G126_image . "dotted_small_" . $trace . ".png" :   $l20_G125_G126_image . "dotted_" . $trace . ".png",
                    'q_image' => ctype_lower($trace) ?    $l20_G125_G126_image . "small_" . $trace . ".png" :   $l20_G125_G126_image . $trace . ".png",
                    'a_content' => $trace,
                ],
            ]);
        }

        // game 126
        $g1_l20_Game126_rearrange_the_letter_q1 = [
            ['G', 'L', 'K', 'N', 'M'],
            ['U', 'T', 'H', 'N', 'M'],
            ['U', 'M', 'H', 'N', 'N', 'O'],
            ['E', 'M', 'H', 'N', 'T'],
            ['E', 'N', 'H', 'N', 'T'],
            ['U', 'N', 'T', 'N', 'Y'],
            ['U', 'N', 'I', 'N', 'Y'],
            ['M', 'T', 'E', 'N', 'I'],
            ['M', 'T', 'L', 'N', 'I'],

        ];

        $g1_l20_Game126_rearrange_the_letter_q2 = [
            '_I_K', '_O_T_', '_US_RO_M', 'N_S_', '_I_E', 'N__S', '_A_L', 'M_A_', '_A_GO'
        ];

        $correct20Ans =   [

            ['M', 'L'],
            ['M', 'U', 'H'],
            ['M', 'H', 'O'],
            ['E', 'T'],
            ['N', 'N'],
            ['U', 'T'],
            ['N', 'I'],
            ['E', 'T'],
            ['M', 'N'],

        ];

        $g1_l20_Game126_rearrange_the_letter_a = [
            'MILK', 'MOUTH', 'MUSHROOM', 'NEST', 'NINE', 'NUTS', 'NAIL', 'MEAT', 'MANGO'
        ];




        for ($i = 0; $i < count($g1_l20_Game126_rearrange_the_letter_q1); $i++) {

            foreach ($g1_l20_Game126_rearrange_the_letter_q1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 126,
                        'q_audio' => $AudioDomain . $G1_L20_writing .  strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correct20Ans[$i]),
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 126,
                    'q_audio' => $AudioDomain . $G1_L20_writing . strtolower($g1_l20_Game126_rearrange_the_letter_a[$i]) . ".mp3",
                    'q_image' => $l20_G125_G126_image .  strtolower($g1_l20_Game126_rearrange_the_letter_a[$i]) . ".png",
                    'q_content' => $g1_l20_Game126_rearrange_the_letter_q2[$i],
                    'a_content' => $g1_l20_Game126_rearrange_the_letter_a[$i]
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 21 Game 127 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 127, 'a_content' => 'lesson_21_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 127, 'a_content' => 'lesson_21_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 21 Game 128 , 129 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l21_G128_G129image = $domain . "/storage/images/Grade_1/lesson_21/listen_n_repeat/";
        $G1_L21_reading = "Grade_1/" . "Lesson_21/" . "listen_n_repeat/";


        // game 128
        $ansl21G128Content = [
            "Bread", "Cake", "Cheese", "Chicken", "Chocolate", "Cookies", "Egg", "Fruit", "Ice-cream", "Meat", "Noodles", "Soup", "Vegetables",
        ];


        // game 129
        $ansl21G129Content = ["I eat bread and eggs.", "I eat cheesecake.", "I eat chicken rice.", "I eat chocolate cookies.", "I eat noodles."];
        $ansl21G129Image = ["I-eat-bread-and-eggs", "I-eat-cheese-cake", "I-eat-chicken-rice", "I-eat-chocolate-cookies", "I-eat-noodles"];
        $ansl21G129Index = 0;

        foreach ($ansl21G128Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 128, 'a_content' => $key, 'a_image' => $l21_G128_G129image . strtolower($key) . ".png",
                    'a_audio' => $AudioDomain . $G1_L21_reading . strtolower($key) . ".mp3"
                ],
            ]);
        }

        foreach ($ansl21G129Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 129, 'a_content' => $key, 'a_image' => $l21_G128_G129image . $ansl21G129Image[$ansl21G129Index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L21_reading . $ansl21G129Image[$ansl21G129Index] . ".mp3"
                ],
            ]);
            $ansl21G129Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 21 Game 130 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l21G130image = $domain . "/storage/images/Grade_1/lesson_21/listen_n_practice/";
        $G1_L21_listen_n_practice = "Grade_1/" . "Lesson_21/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 130, 'a_content' => "rice", 'q_image' => $l21G130image . "rice" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "rice" . ".mp3", "background" => $l21G130image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 130, 'a_content' => "chicken", 'q_image' => $l21G130image . "chicken" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "chicken" . ".mp3", "background" => $l21G130image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 130, 'a_content' => "vegetable", 'q_image' => $l21G130image . "vegetable" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "vegetable" . ".mp3", "background" => $l21G130image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 130, 'a_content' => "ketchup", 'q_image' => $l21G130image . "ketchup" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "ketchup" . ".mp3", "background" => $l21G130image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 130, 'a_content' => "spoon", 'q_image' => $l21G130image . "spoon" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "spoon" . ".mp3", "background" => $l21G130image . "background.png"
            ],
            [
                'round' => 1, 'game_id' => 130, 'a_content' => "plate", 'q_image' => $l21G130image . "plate" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "plate" . ".mp3", "background" => $l21G130image . "background.png"
            ],


            [
                'round' => 2, 'game_id' => 130, 'a_content' => "I eat mango cake", 'q_image' => $l21G130image . "I-eat-mango-cake" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "I-eat-mango-cake" . ".mp3", "background" => $l21G130image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 130, 'a_content' => "I eat fruit cake", 'q_image' => $l21G130image . "I-eat-fruit-cake" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "I-eat-fruit-cake" . ".mp3", "background" => $l21G130image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 130, 'a_content' => "I eat chocolate ice cream", 'q_image' => $l21G130image . "I-eat-chocolate-ice-cream" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "I-eat-chocolate-ice-cream" . ".mp3", "background" => $l21G130image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 130, 'a_content' => "I eat cheese cake", 'q_image' => $l21G130image . "I-eat-cheese-cake" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "I-eat-cheese-cake" . ".mp3", "background" => $l21G130image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 130, 'a_content' => "I eat chocolate cookies", 'q_image' => $l21G130image . "I-eat-chocolate-cookies" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "I-eat-chocolate-cookies" . ".mp3", "background" => $l21G130image . "background.png"
            ],
            [
                'round' => 2, 'game_id' => 130, 'a_content' => "I eat chocolate bread", 'q_image' => $l21G130image . "I-eat-chocolate-bread" . ".png",
                'a_audio' => $AudioDomain . $G1_L21_listen_n_practice . "I-eat-chocolate-bread" . ".mp3", "background" => $l21G130image . "background.png"
            ],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 21 Game 131 (  Matching  )
        ////////////////////////////////////////////////////////

        $l21G131image = $domain . "/storage/images/Grade_1/lesson_21/Matching/";
        $G1_L21_Matching = "Grade_1/" . "Lesson_21/" . "Matching/";


        $G1_L21_Game131_Matching = [

            ['Cookies', 'Soup', 'Cake', 'Fruits', "Egg"],
            ['Noodles', 'Chicken-rice', 'Chocolate', 'Bread', "Meat"],

        ];

        $G1_L21_Game131_Matching_image = [

            ['cake', 'fruits', 'egg', 'cookies', "soup"],
            ['chocolate', 'noodle', 'meat', 'Chicken-rice', 'bread'],

        ];


        for ($i = 0; $i < count($G1_L21_Game131_Matching); $i++) {

            foreach ($G1_L21_Game131_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 131, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G1_L21_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }

            foreach ($G1_L21_Game131_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 131, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l21G131image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G1_L21_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 21 Game 132 ( speaking )
        ////////////////////////////////////////////////////////

        $l20_G132_image = $domain . "/storage/images/Grade_1/lesson_21/Speaking/";
        $G1_L21_Speaking = "Grade_1/" . "Lesson_21/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 132, 'q_audio' => $AudioDomain . $G1_L21_Speaking . "audio" . ".mp3", 'q_image' => $l20_G132_image . "soup.png", "q_content" => "Describe the picture. I eat ____."],
            ['round' => 2, 'game_id' => 132, 'q_audio' => $AudioDomain . $G1_L21_Speaking . "audio" . ".mp3", 'q_image' => $l20_G132_image . "cookie.png", "q_content" => "Describe the picture. I eat ____."],
            ['round' => 3, 'game_id' => 132, 'q_audio' => $AudioDomain . $G1_L21_Speaking . "audio" . ".mp3", 'q_image' => $l20_G132_image . "cake.png", "q_content" => "Describe the picture. I eat ____ and ____."],
            ['round' => 4, 'game_id' => 132, 'q_audio' => $AudioDomain . $G1_L21_Speaking . "audio" . ".mp3", 'q_image' => $l20_G132_image . "fruits.png", "q_content" => "Describe the picture. I eat ____."],
            ['round' => 5, 'game_id' => 132, 'q_audio' => $AudioDomain . $G1_L21_Speaking . "audio" . ".mp3", 'q_image' => $l20_G132_image . "noodle.png", "q_content" => "Describe the picture. I eat ____."],
            ['round' => 6, 'game_id' => 132, 'q_audio' => $AudioDomain . $G1_L21_Speaking . "audio" . ".mp3", 'q_image' => $l20_G132_image . "bread.png", "q_content" => "Describe the picture. I eat ____ and ____."],
            ['round' => 7, 'game_id' => 132, 'q_audio' => $AudioDomain . $G1_L21_Speaking . "audio" . ".mp3", 'q_image' => $l20_G132_image . "rice.png", "q_content" => "Describe the picture. I eat ____ and ____."],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 22 Game 133 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 133, 'a_content' => 'lesson_22_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 133, 'a_content' => 'lesson_22_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 22 Game 134 , 135 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l22_G134_G135_image = $domain . "/storage/images/Grade_1/lesson_22/listen_n_repeat/";
        $G1_L22_reading = "Grade_1/" . "Lesson_22/" . "listen_n_repeat/";


        // game 134
        $ansl22G134Content = [
            "Apple Juice", "Coffee", "Coke", "Green Tea", "Lemon Juice", "Mango Juice", "Milk", "Milkshake", "Orange Juice", "Soda", "Tea", "Water"
        ];


        // game 135
        $ansl22G135Content = ["I drink coffee.", "I drink coke.", "I drink orange juice.", "I drink tea.", "I drink water."];
        $ansl22G135_Image_audio = ["I-drink-coffee", "I-drink-coke", "I-drink-orange-juice", "I-drink-tea", "I-drink-water"];
        $ansl22G135Index = 0;

        foreach ($ansl22G134Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 134, 'a_content' => $key, 'a_image' => $l22_G134_G135_image . str_replace(' ', '', strtolower($key)) . ".png",
                    'a_audio' => $AudioDomain . $G1_L22_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
                ],
            ]);
        }

        foreach ($ansl22G135Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 135, 'a_content' => $key, 'a_image' => $l22_G134_G135_image . $ansl22G135_Image_audio[$ansl22G135Index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L22_reading . $ansl22G135_Image_audio[$ansl22G135Index] . ".mp3"
                ],
            ]);
            $ansl22G135Index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 22 Game 136(  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l22G136image = $domain . "/storage/images/Grade_1/lesson_22/listen_n_practice/";
        $G1_L22_listen_n_practice = "Grade_1/" . "Lesson_22/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "butter", 'q_image' => $l22G136image . "butter" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "milkshake", 'q_image' => $l22G136image . "milkshake" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "milkshake" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "icecream2", 'q_image' => $l22G136image . "icecream2" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "icecream" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "milk", 'q_image' => $l22G136image . "milk" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "milk" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "soda", 'q_image' => $l22G136image . "soda" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "soda" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "icecream2", 'q_image' => $l22G136image . "icecream2" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "icecream" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "medi2", 'q_image' => $l22G136image . "medi2" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "energydrink", 'q_image' => $l22G136image . "energydrink" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "medi", 'q_image' => $l22G136image . "medi" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "medi2", 'q_image' => $l22G136image . "medi2" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 136, 'a_content' => "mangojuice", 'q_image' => $l22G136image . "mangojuice" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "mangojuice" . ".mp3", "background" => $l22G136image . "bg.png"
            ],


            [
                'round' => 2, 'game_id' => 136, 'a_content' => "coke", 'q_image' => $l22G136image . "coke" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "coke" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "water", 'q_image' => $l22G136image . "water" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "water" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "icecream", 'q_image' => $l22G136image . "icecream" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "icecream" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "applejuice", 'q_image' => $l22G136image . "applejuice" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "applejuice" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "cup", 'q_image' => $l22G136image . "cup" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "coffee", 'q_image' => $l22G136image . "coffee" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "coffee" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "butter", 'q_image' => $l22G136image . "butter" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "medi", 'q_image' => $l22G136image . "medi" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "medi2", 'q_image' => $l22G136image . "medi2" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "energydrink", 'q_image' => $l22G136image . "energydrink" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "medi2", 'q_image' => $l22G136image . "medi2" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "audio" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 136, 'a_content' => "orangejuice", 'q_image' => $l22G136image . "orangejuice" . ".png",
                'a_audio' => $AudioDomain . $G1_L22_listen_n_practice . "orangejuice" . ".mp3", "background" => $l22G136image . "bg.png"
            ],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 22 Game 137 (  Matching  )
        ////////////////////////////////////////////////////////

        $l22G137image = $domain . "/storage/images/Grade_1/lesson_22/Matching/";
        $G1_L22_Matching = "Grade_1/" . "Lesson_22/" . "Matching/";


        $G1_L22_Game137_Matching = [

            ['Apple Juice', 'Mango Juice', 'Soda', 'Milkshake', "Lemon Juice"],
            ['Water', 'Coffee', 'Tea', 'Green Tea', "Milk"],

        ];

        $G1_L22_Game137_Matching_image = [

            ['soda', 'lemonjuice', 'applejuice', 'mangojuice', 'milkshake'],
            ['tea', 'greentea', 'milk', 'water', "coffee"],

        ];


        for ($i = 0; $i < count($G1_L22_Game137_Matching); $i++) {

            foreach ($G1_L22_Game137_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 137, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => str_replace(' ', '', strtolower($q)), 'q_audio' => $AudioDomain . $G1_L22_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G1_L22_Game137_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 137, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l22G137image . str_replace(' ', '', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G1_L22_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }

        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 22 Game 138 (  Writing  )
        ////////////////////////////////////////////////////////

        $l22G138image = $domain . "/storage/images/Grade_1/lesson_22/writing/";
        $G1_L22_writing_path = "Grade_1/" . "Lesson_22/" . "writing/";


        // round 1
        $G138R1 = [
            "A", "T", "B", "L", "E", "E", "E", "G", "V"
        ];
        foreach ($G138R1 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 138, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L22_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 138,  "q_image" => $l22G138image . "vege.png", 'a_content' => "VEGETABLE", 'a_audio' => $AudioDomain . $G1_L22_writing_path . "vegetable.mp3"],
        ]);

        // round 2
        $G138R2 = [
            "F", "C", "O", "E", "E", "F"
        ];
        foreach ($G138R2 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 138,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L22_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 138, "q_image" => $l22G138image . "coffee.png", 'a_content' => "COFFEE", 'a_audio' => $AudioDomain . $G1_L22_writing_path . "coffee.mp3"],
        ]);

        // round 3
        $G138R3 = [
            "T", "A", "W", "E", "R"
        ];
        foreach ($G138R3 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 138, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L22_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }
        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 138, "q_image" => $l22G138image . "water.png", 'a_content' => "WATER", 'a_audio' => $AudioDomain . $G1_L22_writing_path . "water.mp3"],
        ]);

        // round 4
        $G138R4 = [
            "K", "O", "C", "E"
        ];
        foreach ($G138R4 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 138,  'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L22_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 138, "q_image" => $l22G138image . "coke.png", 'a_content' => "COKE", 'a_audio' => $AudioDomain . $G1_L22_writing_path . "coke.mp3"],
        ]);

        // round 5
        $G138R5 = [
            "L", "K", "M", "I", "H", "A", "K", "S", "E"
        ];
        foreach ($G138R5 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 138, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L22_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 138, "q_image" => $l22G138image . "milkshake.png",  'a_content' => "MILKSHAKE", 'a_audio' => $AudioDomain . $G1_L22_writing_path . "milkshake.mp3"],
        ]);

        // round 6
        $G138R6 = [
            "U", "P", "O", "S"
        ];
        foreach ($G138R6 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 138, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L22_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 138, "q_image" => $l22G138image . "soup.png",  'a_content' => "SOUP", 'a_audio' => $AudioDomain . $G1_L22_writing_path . "soup.mp3"],
        ]);

        // round 7
        $G138R7 = [
            "R", "E", "B", "A", "D"
        ];
        foreach ($G138R7 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 138, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L22_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 138, "q_image" => $l22G138image . "bread.png",  'a_content' => "BREAD", 'a_audio' => $AudioDomain . $G1_L22_writing_path . "bread.mp3"],
        ]);

        // round 8
        $G138R8 = [
            "I", "S", "T", "R", "F", "U"
        ];
        foreach ($G138R8 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 138, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L22_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 138, "q_image" => $l22G138image . "fruits.png",  'a_content' => "FRUITS", 'a_audio' => $AudioDomain . $G1_L22_writing_path . "fruits.mp3"],
        ]);

        // round 9
        $G138R9 = [
            "I", "C", "E", "J", "U"
        ];
        foreach ($G138R9 as $i) {
            DB::table('ans_n_ques')->insert([
                ['round' => 9, 'game_id' => 138, 'q_content' => $i, 'q_audio' => $AudioDomain . $G1_L22_writing_path . strtoupper($i) . ".mp3"],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 9, 'game_id' => 138, "q_image" => $l22G138image . "juice.png",  'a_content' => "JUICE", 'a_audio' => $AudioDomain . $G1_L22_writing_path . "juice.mp3"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 22 Game 139 ( speaking )
        ////////////////////////////////////////////////////////

        $l22_G139_image = $domain . "/storage/images/Grade_1/lesson_22/Speaking/";
        $G1_L22_Speaking = "Grade_1/" . "Lesson_22/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 139,  'q_audio' => $AudioDomain . $G1_L22_Speaking . "audio" . ".mp3", 'q_image' => $l22_G139_image . "cookie.png", "q_content" => "Describe the picture and say what do you eat? I eat ____."],
            ['round' => 2, 'game_id' => 139,  'q_audio' => $AudioDomain . $G1_L22_Speaking . "audio" . ".mp3", 'q_image' => $l22_G139_image . "lemon.png", "q_content" => "Describe the picture and say what do you eat? I drink ____."],
            ['round' => 3, 'game_id' => 139,  'q_audio' => $AudioDomain . $G1_L22_Speaking . "audio" . ".mp3", 'q_image' => $l22_G139_image . "coffee.png", "q_content" => "Describe the picture and say what do you eat? I drink ____ ."],
            ['round' => 4, 'game_id' => 139,  'q_audio' => $AudioDomain . $G1_L22_Speaking . "audio" . ".mp3", 'q_image' => $l22_G139_image . "vege.png", "q_content" => "Describe the picture and say what do you eat? I eat ____."],
            ['round' => 5, 'game_id' => 139,  'q_audio' => $AudioDomain . $G1_L22_Speaking . "audio" . ".mp3", 'q_image' => $l22_G139_image . "tea.png", "q_content" => "Describe the picture and say what do you eat? I drink ____."],
            ['round' => 6, 'game_id' => 139,  'q_audio' => $AudioDomain . $G1_L22_Speaking . "audio" . ".mp3", 'q_image' => $l22_G139_image . "milk.png", "q_content" => "Describe the picture and say what do you eat? I drink ____ ."],
            ['round' => 7, 'game_id' => 139,  'q_audio' => $AudioDomain . $G1_L22_Speaking . "audio" . ".mp3", 'q_image' => $l22_G139_image . "orgjuice.png", "q_content" => "Describe the picture and say what do you eat? I drink ____ ."],
            ['round' => 8, 'game_id' => 139,  'q_audio' => $AudioDomain . $G1_L22_Speaking . "audio" . ".mp3", 'q_image' => $l22_G139_image . "water.png", "q_content" => "Describe the picture and say what do you eat? I drink ____ ."],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 23 Game 140 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 140, 'a_content' => 'lesson_23_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 140, 'a_content' => 'lesson_23_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 23 Game 141 , 142 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l23_G141_G142_image = $domain . "/storage/images/Grade_1/lesson_23/listen_n_repeat/";
        $G1_L23_reading = "Grade_1/" . "Lesson_23/" . "listen_n_repeat/";


        // game 141
        $ansl23G141Content = [
            "Bread", "Cake", "Chicken", "Egg", "Fruits", "Juice", "Meat", "Milk", "Vegetables"
        ];


        // game 142
        $ansl23G142Content = ["I like bread. I don't like cake.", "I like chicken. I don't like egg.", "I like fruits. I don't like vegetables.", "I like juice. I don't like milk.", "I like meat. I don't like fish."];
        $ansl23G142_Image_audio = ["I-like-bread-I-dont-like-cak", "I-like-chicken-I-dont-like-e", "I-like-fruits-I-dont-like-ve", "I-like-juice-I-dont-like-mil", "I-like-meat-I-dont-like-fish"];
        $ansl23G142Index = 0;

        foreach ($ansl23G141Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 141, 'a_content' => $key, 'a_image' => $l23_G141_G142_image . str_replace(' ', '', strtolower($key)) . ".png",
                    'a_audio' => $AudioDomain . $G1_L23_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
                ],
            ]);
        }

        foreach ($ansl23G142Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 142, 'a_content' => $key, 'a_image' => $l23_G141_G142_image . $ansl23G142_Image_audio[$ansl23G142Index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L23_reading . $ansl23G142_Image_audio[$ansl23G142Index] . ".mp3"
                ],
            ]);
            $ansl23G142Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 23 Game 143 (  Listen and Practice  )
        ////////////////////////////////////////////////////////


        $G1_L23_listen_n_practice = "Grade_1/" . "Lesson_23/" . "listen_n_practice/";
        $l23_G143_image = $domain . "/storage/images/Grade_1/lesson_23/listen_n_practice/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 143, 'q_content' => "dislike", 'q_image' =>  $l23_G143_image . "fruits.png", "q_conver" => "I like fruits.",  'a_content' => 0],
            ['round' => 1, 'game_id' => 143,  'q_content' => null,   'q_image' => null, "q_conver" => "I don't like fruits.", 'a_content' => 1],

            ['round' => 2, 'game_id' => 143, 'q_content' => "like", 'q_image' =>  $l23_G143_image . "juice.png", "q_conver" => "I like apple juice.", 'a_content' => 1],
            ['round' => 2, 'game_id' => 143,  'q_content' => null,   'q_image' => null, "q_conver" => "I don't like apple juice.", 'a_content' => 0],

            ['round' => 3, 'game_id' => 143, 'q_content' => "like", 'q_image' =>  $l23_G143_image . "coffee.png", "q_conver" => "I like coffee.", 'a_content' => 1],
            ['round' => 3, 'game_id' => 143,  'q_content' => null,   'q_image' => null, "q_conver" => "I don't like coffee.", 'a_content' => 0],

            ['round' => 4, 'game_id' => 143, 'q_content' => "dislike", 'q_image' =>  $l23_G143_image . "fish.png", "q_conver" => "I like fish.", 'a_content' => 0],
            ['round' => 4, 'game_id' => 143,  'q_content' => null,   'q_image' => null, "q_conver" => "I don't like fish.", 'a_content' => 1],

            ['round' => 5, 'game_id' => 143, 'q_content' => "dislike", 'q_image' =>  $l23_G143_image . "soda.png", "q_conver" => "I like soda.", 'a_content' => 0],
            ['round' => 5, 'game_id' => 143,  'q_content' => null,   'q_image' => null, "q_conver" => "I don't like soda.", 'a_content' => 1],

            ['round' => 6, 'game_id' => 143, 'q_content' => "like", 'q_image' =>  $l23_G143_image . "milkshake.png", "q_conver" => "I like milkshake.", 'a_content' => 1],
            ['round' => 6, 'game_id' => 143,  'q_content' => null,   'q_image' => null, "q_conver" => "I don't like milkshake.", 'a_content' => 0],

            ['round' => 7, 'game_id' => 143, 'q_content' => "like", 'q_image' =>  $l23_G143_image . "bread.png", "q_conver" => "I like bread.", 'a_content' => 1],
            ['round' => 7, 'game_id' => 143,  'q_content' => null,   'q_image' => null, "q_conver" => "I don't like bread.", 'a_content' => 0],

            ['round' => 8, 'game_id' => 143, 'q_content' => "like", 'q_image' =>  $l23_G143_image . "chicken.png", "q_conver" => "I like chicken.", 'a_content' => 1],
            ['round' => 8, 'game_id' => 143,  'q_content' => null,   'q_image' => null, "q_conver" => "I don't like chicken.", 'a_content' => 0],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 23 Game 144 (  True or false  )
        ////////////////////////////////////////////////////////

        $l23G144image = $domain . "/storage/images/Grade_1/lesson_23/true_or_false/";
        $G1_L23_true_or_false_path = "Grade_1/" . "Lesson_23/" . "true_or_false/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 144, 'q_audio' => $AudioDomain . $G1_L23_true_or_false_path . "I-like-chicken-True-or-False.mp3", 'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l23G144image . "chicken.png"],
            ['round' => 1, 'game_id' => 144, 'q_audio' => null,  'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 2, 'game_id' => 144, 'q_audio' => $AudioDomain . $G1_L23_true_or_false_path . "I-like-fruits-True-or-False.mp3",  'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l23G144image . "banana.png"],
            ['round' => 2, 'game_id' => 144, 'q_audio' => null,  'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 3, 'game_id' => 144, 'q_audio' => $AudioDomain . $G1_L23_true_or_false_path . "I-dont-like-vegetables-True-o.mp3",  'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l23G144image . "vege.png"],
            ['round' => 3, 'game_id' => 144, 'q_audio' => null,  'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 4, 'game_id' => 144, 'q_audio' => $AudioDomain . $G1_L23_true_or_false_path . "I-like-apple-juice-True-or-Fa.mp3", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l23G144image . "applejuice.png"],
            ['round' => 4, 'game_id' => 144, 'q_audio' => null,  'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 5, 'game_id' => 144, 'q_audio' => $AudioDomain . $G1_L23_true_or_false_path . "I-like-milk-True-or-False.mp3",  'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l23G144image . "milk.png"],
            ['round' => 5, 'game_id' => 144, 'q_audio' => null,  'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 6, 'game_id' => 144, 'q_audio' => $AudioDomain . $G1_L23_true_or_false_path . "audio.mp3", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l23G144image . "mangojuice.png"],
            ['round' => 6, 'game_id' => 144, 'q_audio' => null,  'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 7, 'game_id' => 144, 'q_audio' => $AudioDomain . $G1_L23_true_or_false_path . "I-dont-like-cake-True-or-Fal.mp3", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l23G144image . "cake.png"],
            ['round' => 7, 'game_id' => 144, 'q_audio' => null,  'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 8, 'game_id' => 144, 'q_audio' => $AudioDomain . $G1_L23_true_or_false_path . "I-like-bread-True-or-False.mp3", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l23G144image . "bread.png"],
            ['round' => 8, 'game_id' => 144, 'q_audio' => null,  'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 23 Game 145 ( reading )
        ////////////////////////////////////////////////////////

        $G1_L23_reading_passage_path = "Grade_1/" . "Lesson_23/" . "reading_passage/";
        $l23G145image = $domain . "/storage/images/Grade_1/lesson_23/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "fruits.mp3", 'q_content' => "fruits", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "juice.mp3", 'q_content' => "juice", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "milk.mp3", 'q_content' => "milk", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "The-boy-likes-fruits-juice-mil.mp3", "q_conver" => "The boy likes ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "I-like-juice-I-drink-orange-j.mp3", "q_conver" => "I like juice. I drink orange juice. I eat eggs and vegetables. I don't like fruits.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "I-like-milk-I-drink-milk-I-d.mp3", "q_content" => "We talk about food.", 'q_conver' => "I like milk. I drink milk. I don't like vegetables. I like fruits. I eat bananas.", 'a_content' => null, "background" => $l23G145image . "bg.png"],


            ['round' => 2, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "chicken.mp3", 'q_content' => "chicken", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "egg.mp3", 'q_content' => "eggs", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "noodles.mp3", 'q_content' => "noodles", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "The-boy-eats-chicken-eggs-nood.mp3", "q_conver" =>  "The boy eats ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "I-like-juice-I-drink-orange-j.mp3", "q_conver" =>  "I like juice. I drink orange juice. I eat eggs and vegetables. I don't like fruits.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "I-like-milk-I-drink-milk-I-d.mp3", "q_content" => "We talk about food.", 'q_conver' => "I like milk. I drink milk. I don't like vegetables. I like fruits. I eat bananas.", 'a_content' => null, "background" => $l23G145image . "bg.png"],


            ['round' => 3, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "fruits.mp3", 'q_content' => "fruits", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "vegetables.mp3", 'q_content' => "vegetables",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "banana.mp3", 'q_content' => "bananas", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "The-boy-says-I-dont-like-frui.mp3", "q_conver" => "The boy says I don't like ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "I-like-juice-I-drink-orange-j.mp3", "q_conver" => "I like juice. I drink orange juice. I eat eggs and vegetables. I don't like fruits.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "I-like-milk-I-drink-milk-I-d.mp3", "q_content" => "We talk about food.", 'q_conver' => "I like milk. I drink milk. I don't like vegetables. I like fruits. I eat bananas.", 'a_content' => null, "background" => $l23G145image . "bg.png"],


            ['round' => 4, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "fruits.mp3", 'q_content' => "fruits", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "vegetables.mp3", 'q_content' => "vegetables", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "banana.mp3", 'q_content' => "bananas", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "The-girl-says-I-dont-like-fru.mp3", "q_conver" => "The girl says I don't like ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "I-like-juice-I-drink-orange-j.mp3", "q_conver" => "I like juice. I drink orange juice. I eat eggs and vegetables. I don't like fruits..", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "I-like-milk-I-drink-milk-I-d.mp3", "q_content" => "We talk about food.", 'q_conver' => "I like milk. I drink milk. I don't like vegetables. I like fruits. I eat bananas.", 'a_content' => null, "background" => $l23G145image . "bg.png"],


            ['round' => 5, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "fruits.mp3", 'q_content' => "fruits", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "juice.mp3", 'q_content' => "Juice", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 145, "q_image" => null, "q_audio" =>  $AudioDomain . $G1_L23_reading_passage_path . "milk.mp3", 'q_content' => "Milk", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "The-girl-drinks-fruits-juice-m.mp3", "q_conver" => "The girl drinks ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "I-like-juice-I-drink-orange-j.mp3", "q_conver" => "I like juice. I drink orange juice. I eat eggs and vegetables. I don't like fruits.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 145, "q_image" => null, "q_audio" => $AudioDomain . $G1_L23_reading_passage_path . "I-like-milk-I-drink-milk-I-d.mp3", "q_content" => "We talk about food.", 'q_conver' => "I like milk. I drink milk. I don't like vegetables. I like fruits. I eat bananas.", 'a_content' => null, "background" => $l23G145image . "bg.png"],




        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 23 Game 146 ( speaking )
        ////////////////////////////////////////////////////////

        $l23_G146_image = $domain . "/storage/images/Grade_1/lesson_23/Speaking/";
        $G1_L23_Speaking = "Grade_1/" . "Lesson_23/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 146, "q_audio" => $AudioDomain . $G1_L23_Speaking . "audio" . ".mp3", 'q_image' => $l23_G146_image . "cookie.png", "q_content" => "Describe the picture and say what do you like? I like ____."],
            ['round' => 2, 'game_id' => 146, "q_audio" => $AudioDomain . $G1_L23_Speaking . "audio" . ".mp3", 'q_image' => $l23_G146_image . "jam.png", "q_content" => "Describe the picture and say what do you like? I like ____."],
            ['round' => 3, 'game_id' => 146, "q_audio" => $AudioDomain . $G1_L23_Speaking . "audio" . ".mp3", 'q_image' => $l23_G146_image . "meat.png", "q_content" => "Describe the picture and say what do you like? I like ____ ."],
            ['round' => 4, 'game_id' => 146, "q_audio" => $AudioDomain . $G1_L23_Speaking . "audio" . ".mp3", 'q_image' => $l23_G146_image . "egg.png", "q_content" => "Describe the picture and say what do you like? I like ____."],
            ['round' => 5, 'game_id' => 146, "q_audio" => $AudioDomain . $G1_L23_Speaking . "audio" . ".mp3", 'q_image' => $l23_G146_image . "soda.png", "q_content" => "Describe the picture and say what do you like? I like ____."],
            ['round' => 6, 'game_id' => 146, "q_audio" => $AudioDomain . $G1_L23_Speaking . "audio" . ".mp3", 'q_image' => $l23_G146_image . "cake.png", "q_content" => "Describe the picture and say what do you like? I like ____ ."],
            ['round' => 7, 'game_id' => 146, "q_audio" => $AudioDomain . $G1_L23_Speaking . "audio" . ".mp3", 'q_image' => $l23_G146_image . "juice.png", "q_content" => "Describe the picture and say what do you like? I like ____ ."],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 24 Game 147 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 147, 'a_content' => 'lesson_24_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 147, 'a_content' => 'lesson_24_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 24 Game 148 (  Reading  )
        ////////////////////////////////////////////////////////

        $l24_G148_image = $domain . "/storage/images/Grade_1/lesson_24/reading/";
        $G1_L24_reading = "Grade_1/" . "Lesson_24/" . "reading/";

        // game 148
        $ansl23_G148_Content = ["Do you like apples? Yes, I do.", "Do you like chicken? Yes, I do.", "Do you like coffee? No, I don't.", "Do you like fruits? Yes, I do.", "Do you like juice? Yes, I do.", "Do you like meat? No, I don't.", "Do you like milk? Yes, I do.", "Do you like tea? No, I don't.", "Do you like cake? Yes, I do.", "Do you like vegetable? No, I don't."];
        $ansl24_G148_Image_audio = ["do_you_like_apple", "do_u_like_chicken", "do_u_like_coffee", "do_u_like_fruit", "do_u_like_juice", "audio", "do_u_like_milk", "do_u_like_tea", "do_u_like_cake", "do_you_like_vege"];
        $ansl24_G148_Index = 0;


        foreach ($ansl23_G148_Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 148, 'a_content' => $key, 'a_image' => $l24_G148_image . $ansl24_G148_Image_audio[$ansl24_G148_Index] . ".png",
                    'a_audio' => $AudioDomain . $G1_L24_reading . $ansl24_G148_Image_audio[$ansl24_G148_Index] . ".mp3"
                ],
            ]);
            $ansl24_G148_Index++;
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 24 Game 149 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l24G149image = $domain . "/storage/images/Grade_1/lesson_24/listen_n_practice/";
        $G1_L24_listen_n_practice = "Grade_1/" . "Lesson_24/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 149, 'a_content' => "egg", 'q_image' => $l24G149image . "egg" . ".png",
                'a_audio' => $AudioDomain . $G1_L24_listen_n_practice . "egg" . ".mp3", "background" => $l24G149image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 149, 'a_content' => "meat", 'q_image' => $l24G149image . "meat" . ".png",
                'a_audio' => $AudioDomain . $G1_L24_listen_n_practice . "meat" . ".mp3", "background" => $l24G149image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 149, 'a_content' => "cheese", 'q_image' => $l24G149image . "cheese" . ".png",
                'a_audio' => $AudioDomain . $G1_L24_listen_n_practice . "cheese" . ".mp3", "background" => $l24G149image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 149, 'a_content' => "soda", 'q_image' => $l24G149image . "soda" . ".png",
                'a_audio' => $AudioDomain . $G1_L24_listen_n_practice . "soda" . ".mp3", "background" => $l24G149image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 149, 'a_content' => "cookie", 'q_image' => $l24G149image . "cookies" . ".png",
                'a_audio' => $AudioDomain . $G1_L24_listen_n_practice . "cookies" . ".mp3", "background" => $l24G149image . "bg.png"
            ],


            [
                'round' => 2, 'game_id' => 149, 'a_content' => "coke", 'q_image' => $l24G149image . "coke" . ".png",
                'a_audio' => $AudioDomain . $G1_L24_listen_n_practice . "coke" . ".mp3", "background" => $l24G149image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 149, 'a_content' => "bread", 'q_image' => $l24G149image . "bread" . ".png",
                'a_audio' => $AudioDomain . $G1_L24_listen_n_practice . "bread" . ".mp3", "background" => $l24G149image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 149, 'a_content' => "milk", 'q_image' => $l24G149image . "milk" . ".png",
                'a_audio' => $AudioDomain . $G1_L24_listen_n_practice . "milk" . ".mp3", "background" => $l24G149image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 149, 'a_content' => "cake", 'q_image' => $l24G149image . "cake" . ".png",
                'a_audio' => $AudioDomain . $G1_L24_listen_n_practice . "cake" . ".mp3", "background" => $l24G149image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 149, 'a_content' => "bag", 'q_image' => $l24G149image . "bag" . ".png",
                'a_audio' => $AudioDomain . $G1_L24_listen_n_practice . "bag" . ".mp3", "background" => $l24G149image . "bg.png"
            ],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 24 Game 150 (  song  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 150, 'a_content' => 'lesson_24_song', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 150, 'a_content' => 'lesson_24_song_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 24 Game 151 ( speaking )
        ////////////////////////////////////////////////////////

        $l24_G151_image = $domain . "/storage/images/Grade_1/lesson_24/Speaking/";
        $G1_L24_Speaking = "Grade_1/" . "Lesson_24/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 151, 'q_audio' =>  $AudioDomain . $G1_L24_Speaking . "audio" . ".mp3", 'q_image' => $l24_G151_image . "cookie.png", "q_content" => "Describe the picture and say: Do you like chocolate cookies? Yes, ____."],
            ['round' => 2, 'game_id' => 151, 'q_audio' =>  $AudioDomain . $G1_L24_Speaking . "audio" . ".mp3", 'q_image' => $l24_G151_image . "mangojuice.png", "q_content" => "Describe the picture and say: Do you like orange juice? Yes, ____."],
            ['round' => 3, 'game_id' => 151, 'q_audio' =>  $AudioDomain . $G1_L24_Speaking . "audio" . ".mp3", 'q_image' => $l24_G151_image . "lemonjuice.png", "q_content" => "Describe the picture and say: Do you like lemon juice? No, ____."],
            ['round' => 4, 'game_id' => 151, 'q_audio' =>  $AudioDomain . $G1_L24_Speaking . "audio" . ".mp3", 'q_image' => $l24_G151_image . "vege.png", "q_content" => "Describe the picture and say: Do you like vegetable? No, ____."],
            ['round' => 5, 'game_id' => 151, 'q_audio' =>  $AudioDomain . $G1_L24_Speaking . "audio" . ".mp3", 'q_image' => $l24_G151_image . "milk.png", "q_content" => "Describe the picture and say: Do you like milk? Yes, ____."],
            ['round' => 6, 'game_id' => 151, 'q_audio' =>  $AudioDomain . $G1_L24_Speaking . "audio" . ".mp3", 'q_image' => $l24_G151_image . "egg.png", "q_content" => "Describe the picture and say: Do you like egg? No, ____."],
            ['round' => 7, 'game_id' => 151, 'q_audio' =>  $AudioDomain . $G1_L24_Speaking . "audio" . ".mp3", 'q_image' => $l24_G151_image . "bread.png", "q_content" => "Describe the picture and say: Do you like bread? Yes, ____."],
            ['round' => 8, 'game_id' => 151, 'q_audio' =>  $AudioDomain . $G1_L24_Speaking . "audio" . ".mp3", 'q_image' => $l24_G151_image . "coffee.png", "q_content" => "Describe the picture and say: Do you like coffee? No, ____."],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 24 Game 152 ( Writing (arranging order) )
        ////////////////////////////////////////////////////////

        $G1_L24_writing = "Grade_1/" . "Lesson_24/" . "writing/";


        // round 1
        $qG152R1 = [
            "like", "I", "bread."
        ];
        foreach ($qG152R1 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 1, 'game_id' => 152, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 152, 'a_content' => "I like bread.", 'a_audio' =>  $AudioDomain . $G1_L24_writing . "SubBlock_I-like-bread.mp3"],
        ]);

        // round 2
        $qG152R2 = [
            "I", "tea.", "like", "don't"
        ];

        foreach ($qG152R2 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 2, 'game_id' => 152, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 2, 'game_id' => 152, 'a_content' => "I don't like tea.", 'a_audio' => $AudioDomain . $G1_L24_writing . "SubBlock_I-dont-like-tea.mp3"],
        ]);

        // round 3
        $qG152R3 = [
            "eat", "I", "fruits."
        ];

        foreach ($qG152R3 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 3, 'game_id' => 152, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 152, 'a_content' => "I eat fruits.", 'a_audio' => $AudioDomain . $G1_L24_writing . "SubBlock_I-eat-fruits.mp3"],
        ]);

        // round 4
        $qG152R4 = [
            "drink", "I", "milk."
        ];

        foreach ($qG152R4 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 4, 'game_id' => 152, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 4, 'game_id' => 152, 'a_content' => "I drink milk.", 'a_audio' => $AudioDomain . $G1_L24_writing . "SubBlock_I-drink-milk.mp3"],
        ]);

        // round 5
        $qG152R5 = [
            "noodles.", "I", "like"
        ];

        foreach ($qG152R5 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 5, 'game_id' => 152, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 5, 'game_id' => 152, 'a_content' => "I like noodles.", 'a_audio' => $AudioDomain . $G1_L24_writing . "SubBlock_I-like-noodles.mp3"],
        ]);

        // round 6
        $qG152R6 = [
            "orange", "Do", "like", "juice", "you", "?"
        ];

        foreach ($qG152R6 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 6, 'game_id' => 152, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 6, 'game_id' => 152, 'a_content' => "Do you like orange juice ?", 'a_audio' => $AudioDomain . $G1_L24_writing . "SubBlock_Do-you-like-orange-juice.mp3"],
        ]);

        // round 7
        $qG152R7 = [
            "don't", "I", "like", "chicken", "?", "rice"
        ];

        foreach ($qG152R7 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 7, 'game_id' => 152, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 7, 'game_id' => 152, 'a_content' => "I don't like chicken rice ?", 'a_audio' => $AudioDomain . $G1_L24_writing . "SubBlock_I-dont-like-chicken-rice.mp3"],
        ]);

        // round 8
        $qG152R8 = [
            "you", "cake", "like", "chocolate", "?", "Do"
        ];

        foreach ($qG152R8 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 8, 'game_id' => 152, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 8, 'game_id' => 152, 'a_content' => "Do you like chocolate cake ?", 'a_audio' => $AudioDomain . $G1_L24_writing . "SubBlock_Do-you-like-chocolate-cake.mp3"],
        ]);

        // round 9
        $qG152R9 = [
            "you", "like", "cake", "Do", "?"
        ];

        foreach ($qG152R9 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 9, 'game_id' => 152, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 9, 'game_id' => 152, 'a_content' => "Do you like cake ?", 'a_audio' => $AudioDomain . $G1_L24_writing . "SubBlock_do-you-like-cake.mp3"],
        ]);

        // round 10
        $qG152R10 = [
            "you", "like", "Do", "Apple", "?"
        ];

        foreach ($qG152R10 as $j) {
            DB::table('ans_n_ques')->insert([
                ['round' => 10, 'game_id' => 152, 'q_content' => $j],
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['round' => 10, 'game_id' => 152, 'a_content' => "Do you like apple ?", 'a_audio' => $AudioDomain . $G1_L24_writing . "SubBlock_Do-you-like-apples.mp3"],
        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 25 Game 153 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 153, 'a_content' => 'lesson_25_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 153, 'a_content' => 'lesson_25_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 25 Game 154 (  listen and repeat  )
        ////////////////////////////////////////////////////////

        $l25_G154_image = $domain . "/storage/images/Grade_1/lesson_25/listen_n_repeat/";
        $G1_L25_reading = "Grade_1/" . "Lesson_25/" . "listen_n_repeat/";


        $ansl25G154Content = [
            "Olives", "Orange", "Ostrich", "Owl", "Papaya", "Parrot", "Peacock", "Pear", "Pelican", "Penguin", "Pineapple", "Pomelo"
        ];

        foreach ($ansl25G154Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 154, 'a_content' => $key, 'a_image' => $l25_G154_image . str_replace(' ', '', strtolower($key)) . ".png",
                    'a_audio' => $AudioDomain . $G1_L25_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 25 Game 155 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l25G155image = $domain . "/storage/images/Grade_1/lesson_25/listen_n_practice/";
        $G1_L25_listen_n_practice = "Grade_1/" . "Lesson_25/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 155, 'a_content' => "orange", 'q_image' => $l25G155image . "orange" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "orange" . ".mp3", "background" => $l25G155image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 155, 'a_content' => "olive", 'q_image' => $l25G155image . "olive" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "olives" . ".mp3", "background" => $l25G155image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 155, 'a_content' => "durian", 'q_image' => $l25G155image . "durian" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "durian" . ".mp3", "background" => $l25G155image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 155, 'a_content' => "pineapple", 'q_image' => $l25G155image . "pineapple" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "pineapple" . ".mp3", "background" => $l25G155image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 155, 'a_content' => "meat", 'q_image' => $l25G155image . "meat" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "meat" . ".mp3", "background" => $l25G155image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 155, 'a_content' => "watermelon", 'q_image' => $l25G155image . "watermelon" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "watermelon" . ".mp3", "background" => $l25G155image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 155, 'a_content' => "papaya", 'q_image' => $l25G155image . "papaya" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "papaya" . ".mp3", "background" => $l25G155image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 155, 'a_content' => "pomelo", 'q_image' => $l25G155image . "pomelo" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "pomelo" . ".mp3", "background" => $l25G155image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 155, 'a_content' => "ketchup", 'q_image' => $l25G155image . "ketchup" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "ketchup" . ".mp3", "background" => $l25G155image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 155, 'a_content' => "mangosteen", 'q_image' => $l25G155image . "mangosteen" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "mangosteen" . ".mp3", "background" => $l25G155image . "bg1.png"
            ],


            [
                'round' => 2, 'game_id' => 155, 'a_content' => "owl", 'q_image' => $l25G155image . "owl" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "owl" . ".mp3", "background" => $l25G155image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 155, 'a_content' => "ostrich", 'q_image' => $l25G155image . "ostrich" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "ostrich" . ".mp3", "background" => $l25G155image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 155, 'a_content' => "parrot", 'q_image' => $l25G155image . "parrot" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "parrot" . ".mp3", "background" => $l25G155image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 155, 'a_content' => "peacock", 'q_image' => $l25G155image . "peacock" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "peacock" . ".mp3", "background" => $l25G155image . "bg2.png"
            ],
            [
                'round' => 2, 'game_id' => 155, 'a_content' => "pelican", 'q_image' => $l25G155image . "pelican" . ".png",
                'a_audio' => $AudioDomain . $G1_L25_listen_n_practice . "pelican" . ".mp3", "background" => $l25G155image . "bg2.png"
            ],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 25 Game 156 (  Matching  )
        ////////////////////////////////////////////////////////

        $l25G156image = $domain . "/storage/images/Grade_1/lesson_25/Matching/";
        $G1_L25_Matching = "Grade_1/" . "Lesson_25/" . "Matching/";


        $G1_L25_Game156_Matching = [

            ['Ostrich', 'Parrot', 'Peacock', 'Owl', "Pelican"],
            ['Orange', 'Olives', 'Papaya', 'Pear', "Pomelo"],

        ];

        $G1_L25_Game156_Matching_image = [

            ['peacock', 'owl', 'parrot', 'ostrich', 'pelican'],
            ['papaya', 'pear', 'pomelo', 'olive', "orange"],

        ];


        for ($i = 0; $i < count($G1_L25_Game156_Matching); $i++) {

            foreach ($G1_L25_Game156_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 156, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => str_replace(' ', '', strtolower($q)), 'q_audio' => $AudioDomain . $G1_L25_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G1_L25_Game156_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 156, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l25G156image . str_replace(' ', '', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G1_L25_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 25 Game 157 ( speaking )
        ////////////////////////////////////////////////////////

        $l25_G157_image = $domain . "/storage/images/Grade_1/lesson_25/Speaking/";
        $G1_L25_Speaking = "Grade_1/" . "Lesson_25/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 157,  'q_audio' => $AudioDomain . $G1_L25_Speaking . "audio" . ".mp3", 'q_image' => $l25_G157_image . "papaya.png", "q_content" => "Describe the picture and say This is a ____, it's ____."],
            ['round' => 2, 'game_id' => 157,  'q_audio' => $AudioDomain . $G1_L25_Speaking . "audio" . ".mp3", 'q_image' => $l25_G157_image . "pear.png", "q_content" => "Describe the picture and say This is a ____, it's ____."],
            ['round' => 3, 'game_id' => 157,  'q_audio' => $AudioDomain . $G1_L25_Speaking . "audio" . ".mp3", 'q_image' => $l25_G157_image . "olive.png", "q_content" => "Describe the picture and say This is a ____, it's ____."],
            ['round' => 4, 'game_id' => 157,  'q_audio' => $AudioDomain . $G1_L25_Speaking . "audio" . ".mp3", 'q_image' => $l25_G157_image . "pelican.png", "q_content" => "Describe the picture and say This is a ____, it's ____."],
            ['round' => 5, 'game_id' => 157,  'q_audio' => $AudioDomain . $G1_L25_Speaking . "audio" . ".mp3", 'q_image' => $l25_G157_image . "parrot.png", "q_content" => "Describe the picture and say This is a ____, it's ____."],
            ['round' => 6, 'game_id' => 157,  'q_audio' => $AudioDomain . $G1_L25_Speaking . "audio" . ".mp3", 'q_image' => $l25_G157_image . "orange.png", "q_content" => "Describe the picture and say This is a ____, it's ____."],
            ['round' => 7, 'game_id' => 157,  'q_audio' => $AudioDomain . $G1_L25_Speaking . "audio" . ".mp3", 'q_image' => $l25_G157_image . "pomelo.png", "q_content" => "Describe the picture and say This is a ____, it's ____."],
            ['round' => 8, 'game_id' => 157,  'q_audio' => $AudioDomain . $G1_L25_Speaking . "audio" . ".mp3", 'q_image' => $l25_G157_image . "penguin.png", "q_content" => "Describe the picture and say This is a ____, it's ____."],
            ['round' => 9, 'game_id' => 157,  'q_audio' => $AudioDomain . $G1_L25_Speaking . "audio" . ".mp3", 'q_image' => $l25_G157_image . "ostrich.png", "q_content" => "Describe the picture and say This is a ____, it's ____."],
            ['round' => 10, 'game_id' => 157,  'q_audio' => $AudioDomain . $G1_L25_Speaking . "audio" . ".mp3", 'q_image' => $l25_G157_image . "peacock.png", "q_content" => "Describe the picture and say This is a ____, it's ____."],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 25 Game 158 , 159 (  Writing  )
        ////////////////////////////////////////////////////////

        $G1_L25_writing = "Grade_1/" . "Lesson_25/" . "writing/";
        $l25_G158_G159_image = $domain . "/storage/images/Grade_1/lesson_25/writing/";


        // game 158
        $G158tracing = [
            'p', 'o', 'P', 'O'
        ];
        foreach ($G158tracing as $i => $trace) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 158,
                    'q_audio' =>  $AudioDomain . $G1_L25_writing . strtoupper($trace) . ".mp3",
                    'q_content' => ctype_lower($trace) ?   $l25_G158_G159_image . "dotted_small_" . $trace . ".png" :  $l25_G158_G159_image . "dotted_" . $trace . ".png",
                    'q_image' => ctype_lower($trace) ?   $l25_G158_G159_image . "small_" . $trace . ".png" :  $l25_G158_G159_image . $trace . ".png",
                    'a_content' => $trace,
                ],
            ]);
        }

        // game 159
        $g1_l25_Game159_rearrange_the_letter_q1 = [
            ['A', 'O', 'Y', 'N', 'E'],
            ['E', 'U', 'Y', 'G', 'N'],
            ['L', 'U', 'P', 'G', 'A'],
            ['Y', 'U', 'P', 'A', 'A'],
            ['N', 'E', 'P', 'A', 'O'],
            ['T', 'O', 'I', 'L', 'E'],
            ['T', 'O', 'R', 'G', 'B'],

        ];

        $g1_l25_Game159_rearrange_the_letter_q2 = [
            '_R_NG_', 'P_N__I_', '_E_IC_N', 'P_P__A', 'W_TERM_L__', '_L_V_', '_ST_ICH'
        ];

        $correctAns_G159 =   [

            ['O', 'A', 'E'],
            ['E', 'G', 'U', 'N'],
            ['P', 'L', 'A'],
            ['A', 'A', 'Y'],
            ['A', 'E', 'O', 'N'],
            ['O', 'I', 'E'],
            ['O', 'R'],

        ];

        $g1_l25_Game159_rearrange_the_letter_a = [
            'ORANGE', 'PENGUIN', 'PELICAN', 'PAPAYA', 'WATERMELON', 'OLIVE', 'OSTRICH'
        ];




        for ($i = 0; $i < count($g1_l25_Game159_rearrange_the_letter_q1); $i++) {

            foreach ($g1_l25_Game159_rearrange_the_letter_q1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 159,
                        'q_audio' => $AudioDomain . $G1_L25_writing . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_G159[$i]),
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 159,
                    'q_audio' => $AudioDomain . $G1_L25_writing . strtolower($g1_l25_Game159_rearrange_the_letter_a[$i]) . ".mp3",
                    'q_image' => $l25_G158_G159_image .  strtolower($g1_l25_Game159_rearrange_the_letter_a[$i]) . ".png",
                    'q_content' => $g1_l25_Game159_rearrange_the_letter_q2[$i],
                    'a_content' => $g1_l25_Game159_rearrange_the_letter_a[$i]
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 26 Game 160 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 160, 'a_content' => 'lesson_26_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 160, 'a_content' => 'lesson_26_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 26 Game 161 (  listen and repeat  )
        ////////////////////////////////////////////////////////

        $l26_G161_image = $domain . "/storage/images/Grade_1/lesson_26/listen_n_repeat/";
        $G1_L26_reading = "Grade_1/" . "Lesson_26/" . "listen_n_repeat/";


        $ansl26G161Content = [
            "Apple", "Avocado", "Banana", "Blueberries", "Cherry", "Dragon fruit", "durian", "fruits", "grapes", "guava"
        ];

        foreach ($ansl26G161Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 161, 'a_content' => $key, 'a_image' => $l26_G161_image . str_replace(' ', '', strtolower($key)) . ".png",
                    'a_audio' => $AudioDomain . $G1_L26_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 26 Game 162 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l26G162image = $domain . "/storage/images/Grade_1/lesson_26/listen_n_practice/";
        $G1_L26_listen_n_practice = "Grade_1/" . "Lesson_26/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 162, 'a_content' => "jack fruit", 'q_image' => $l26G162image . "jack-fruit" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "jack-fruit" . ".mp3", "background" => $l26G162image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 162, 'a_content' => "grapes", 'q_image' => $l26G162image . "grapes" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "grapes" . ".mp3", "background" => $l26G162image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 162, 'a_content' => "guava", 'q_image' => $l26G162image . "guava" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "guava" . ".mp3", "background" => $l26G162image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 162, 'a_content' => "kiwi", 'q_image' => $l26G162image . "kiwi" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "kiwi" . ".mp3", "background" => $l26G162image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 162, 'a_content' => "dragon fruit", 'q_image' => $l26G162image . "dragonfruit" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "dragonfruit" . ".mp3", "background" => $l26G162image . "bg.png"
            ],


            [
                'round' => 2, 'game_id' => 162, 'a_content' => "banana", 'q_image' => $l26G162image . "banana" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "banana" . ".mp3", "background" => $l26G162image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 162, 'a_content' => "blueberries", 'q_image' => $l26G162image . "blueberries" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "blueberries" . ".mp3", "background" => $l26G162image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 162, 'a_content' => "pear", 'q_image' => $l26G162image . "pear" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "pear" . ".mp3", "background" => $l26G162image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 162, 'a_content' => "cherry", 'q_image' => $l26G162image . "cherry" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "cherry" . ".mp3", "background" => $l26G162image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 162, 'a_content' => "apple", 'q_image' => $l26G162image . "apple" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "apple" . ".mp3", "background" => $l26G162image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 162, 'a_content' => "custard apple", 'q_image' => $l26G162image . "custard-apple" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "custard-apple" . ".mp3", "background" => $l26G162image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 162, 'a_content' => "coconut", 'q_image' => $l26G162image . "coconut" . ".png",
                'a_audio' => $AudioDomain . $G1_L26_listen_n_practice . "coconut" . ".mp3", "background" => $l26G162image . "bg.png"
            ],


        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 26 Game 163 (  Matching  )
        ////////////////////////////////////////////////////////

        $l26G163image = $domain . "/storage/images/Grade_1/lesson_26/Matching/";
        $G1_L26_Matching = "Grade_1/" . "Lesson_26/" . "Matching/";


        $G1_L26_Game163_Matching = [

            ['avocado', 'banana', 'blueberry', 'cherry', "custard apple"],
            ['jackfruit', 'durian', 'kiwi', 'dragon fruit', "guava"],

        ];

        $G1_L26_Game163_Matching_image = [

            ['blueberry', 'cherry', 'avocado', 'custard apple', 'banana'],
            ['guava', 'durian', 'kiwi', 'jackfruit', "dragon fruit"],

        ];


        for ($i = 0; $i < count($G1_L26_Game163_Matching); $i++) {

            foreach ($G1_L26_Game163_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 163, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => str_replace(' ', '', strtolower($q)), 'q_audio' => $AudioDomain . $G1_L26_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G1_L26_Game163_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 163, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l26G163image . str_replace(' ', '', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G1_L26_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 26 Game 164 (  Grammar  )
        ////////////////////////////////////////////////////////

        $G1_L26_Grammar_path = "Grade_1/" . "Lesson_26/" . "Grammar/";
        $l26G164image = $domain . "/storage/images/Grade_1/lesson_26/Grammar/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 164, 'q_audio' => $AudioDomain . $G1_L26_Grammar_path . "Its-a-an-coconut.mp3", 'q_conver' => "It's [ a/an ] coconut.", 'q_image' =>  $l26G164image . "coconut.png", 'q_content' => "a", 'a_content' => 1],
            ['round' => 1, 'game_id' => 164, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "an", 'a_content' => 0],

            ['round' => 2, 'game_id' => 164, 'q_audio' => $AudioDomain . $G1_L26_Grammar_path . "Its-a-an-avocado.mp3", 'q_conver' => "It's [ a/an ] avocado.", 'q_image' =>  $l26G164image . "avocado.png", 'q_content' => "a", 'a_content' => 0],
            ['round' => 2, 'game_id' => 164, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "an", 'a_content' => 1],

            ['round' => 3, 'game_id' => 164, 'q_audio' => $AudioDomain . $G1_L26_Grammar_path . "Its-a-an-orange.mp3", 'q_conver' => "It's [ a/an ] orange.", 'q_image' =>  $l26G164image . "orange.png", 'q_content' => "a", 'a_content' => 0],
            ['round' => 3, 'game_id' => 164, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "an", 'a_content' => 1],

            ['round' => 4, 'game_id' => 164, 'q_audio' => $AudioDomain . $G1_L26_Grammar_path . "Its-a-an-apple.mp3", 'q_conver' => "It's [ a/an ] apple.", 'q_image' =>  $l26G164image . "apple.png", 'q_content' => "a", 'a_content' => 0],
            ['round' => 4, 'game_id' => 164, 'q_audio' => null, 'q_conver' => null, 'q_image' => null, 'q_content' => "an", 'a_content' => 1],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 26 Game 165 ( speaking )
        ////////////////////////////////////////////////////////

        $l26_G165_image = $domain . "/storage/images/Grade_1/lesson_26/Speaking/";
        $G1_L26_Speaking = "Grade_1/" . "Lesson_26/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 165, 'q_audio' => $AudioDomain . $G1_L26_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l26_G165_image . "apple.png", "q_content" => "Describe the picture. It's ............"],
            ['round' => 2, 'game_id' => 165, 'q_audio' => $AudioDomain . $G1_L26_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l26_G165_image . "orange.png", "q_content" => "Describe the picture. It's ............"],
            ['round' => 3, 'game_id' => 165, 'q_audio' => $AudioDomain . $G1_L26_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l26_G165_image . "dragonfruit.png", "q_content" => "Describe the picture. It's ............"],
            ['round' => 4, 'game_id' => 165, 'q_audio' => $AudioDomain . $G1_L26_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l26_G165_image . "mango.png", "q_content" => "Describe the picture. It's ............"],
            ['round' => 5, 'game_id' => 165, 'q_audio' => $AudioDomain . $G1_L26_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l26_G165_image . "guava.png", "q_content" => "Describe the picture. It's ............"],
            ['round' => 6, 'game_id' => 165, 'q_audio' => $AudioDomain . $G1_L26_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l26_G165_image . "coconut.png", "q_content" => "Describe the picture. It's ............"],
            ['round' => 7, 'game_id' => 165, 'q_audio' => $AudioDomain . $G1_L26_Speaking . "Describe-the-pictures-Its" . ".mp3", 'q_image' => $l26_G165_image . "papaya.png", "q_content" => "Describe the picture. It's ............"],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 27 Game 166 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 166, 'a_content' => 'lesson_27_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 166, 'a_content' => 'lesson_27_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 27 Game 167 (  listen and repeat  )
        ////////////////////////////////////////////////////////

        $l27_G167_image = $domain . "/storage/images/Grade_1/lesson_27/listen_n_repeat/";
        $G1_L27_reading = "Grade_1/" . "Lesson_27/" . "listen_n_repeat/";


        $ansl27G167Content = [
            "pear", "papaya", "peach", "pineapple", "pomelo", "lime", "lemon", "lychee", "Mango", "Mangosteen"
        ];

        foreach ($ansl27G167Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 167, 'a_content' => $key, 'a_image' => $l27_G167_image . str_replace(' ', '', strtolower($key)) . ".png",
                    'a_audio' => $AudioDomain . $G1_L27_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 27 Game 168 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l27G168image = $domain . "/storage/images/Grade_1/lesson_27/listen_n_practice/";
        $G1_L27_listen_n_practice = "Grade_1/" . "Lesson_27/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 168, 'a_content' => "watermelon", 'q_image' => $l27G168image . "watermelon" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "watermelon" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 168, 'a_content' => "pear", 'q_image' => $l27G168image . "pear" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "pear" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 168, 'a_content' => "orange", 'q_image' => $l27G168image . "orange" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "orange" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 168, 'a_content' => "mango", 'q_image' => $l27G168image . "mango" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "mango" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 168, 'a_content' => "mangosteen", 'q_image' => $l27G168image . "mangosteen" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "mangosteen" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 168, 'a_content' => "melon", 'q_image' => $l27G168image . "melon" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "melon" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 168, 'a_content' => "lemon", 'q_image' => $l27G168image . "lemon" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "lemon" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 168, 'a_content' => "lime", 'q_image' => $l27G168image . "lime" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "lime" . ".mp3", "background" => $l27G168image . "bg.png"
            ],



            [
                'round' => 2, 'game_id' => 168, 'a_content' => "pineapple", 'q_image' => $l27G168image . "pineapple" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "pineapple" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 168, 'a_content' => "apple", 'q_image' => $l27G168image . "apple" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "apple" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 168, 'a_content' => "peach", 'q_image' => $l27G168image . "peach" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "peach" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 168, 'a_content' => "papaya", 'q_image' => $l27G168image . "papaya" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "papaya" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 168, 'a_content' => "lychee", 'q_image' => $l27G168image . "lychee" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "lychee" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 168, 'a_content' => "strawberry", 'q_image' => $l27G168image . "strawberry" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "strawberry" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 168, 'a_content' => "pear", 'q_image' => $l27G168image . "pear" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "pear" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 168, 'a_content' => "olives", 'q_image' => $l27G168image . "olives" . ".png",
                'a_audio' => $AudioDomain . $G1_L27_listen_n_practice . "olives" . ".mp3", "background" => $l27G168image . "bg.png"
            ],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 27 Game 169 (  Matching  )
        ////////////////////////////////////////////////////////

        $l27G169image = $domain . "/storage/images/Grade_1/lesson_27/Matching/";
        $G1_L27_Matching = "Grade_1/" . "Lesson_27/" . "Matching/";


        $G1_L27_Game169_Matching = [

            ['papaya', 'peach', 'pineapple', 'watermelon', "mango"],
            ['pineapple', 'durian', 'guava', 'watermelon', "coconut"],
            ['lychee', 'strawberry', 'Rambutan', 'Cherry', "Blueberries"],

        ];

        $G1_L27_Game169_Matching_image = [

            ['watermelon', 'papaya', 'mango', 'peach', 'pineapple'],
            ['guava', 'pineapple', 'jackfruit', 'coconut', "watermelon"],
            ['rambutan', 'lychee', 'cherry', 'blueberry', "strawberry"],

        ];


        for ($i = 0; $i < count($G1_L27_Game169_Matching); $i++) {

            foreach ($G1_L27_Game169_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 169, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => str_replace(' ', '', strtolower($q)), 'q_audio' => $AudioDomain . $G1_L27_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G1_L27_Game169_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 169, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l27G169image . str_replace(' ', '', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G1_L27_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 27 Game 170 ( speaking )
        ////////////////////////////////////////////////////////

        $l27_G170_image = $domain . "/storage/images/Grade_1/lesson_27/Speaking/";
        $G1_L27_Speaking = "Grade_1/" . "Lesson_27/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 170, 'q_audio' => $AudioDomain . $G1_L27_Speaking . "audio" . ".mp3", 'q_image' => $l27_G170_image . "strawberry.png", "q_content" => "Describe the picture. It's a / an ............"],
            ['round' => 2, 'game_id' => 170, 'q_audio' => $AudioDomain . $G1_L27_Speaking . "audio" . ".mp3", 'q_image' => $l27_G170_image . "watermelon.png", "q_content" => "Describe the picture. It's a / an ............"],
            ['round' => 3, 'game_id' => 170, 'q_audio' => $AudioDomain . $G1_L27_Speaking . "audio" . ".mp3", 'q_image' => $l27_G170_image . "custardapple.png", "q_content" => "Describe the picture. It's a / an ............"],
            ['round' => 4, 'game_id' => 170, 'q_audio' => $AudioDomain . $G1_L27_Speaking . "audio" . ".mp3", 'q_image' => $l27_G170_image . "mangosteen.png", "q_content" => "Describe the picture. It's a / an ............"],
            ['round' => 5, 'game_id' => 170, 'q_audio' => $AudioDomain . $G1_L27_Speaking . "audio" . ".mp3", 'q_image' => $l27_G170_image . "papaya.png", "q_content" => "Describe the picture. It's a / an ............"],
            ['round' => 6, 'game_id' => 170, 'q_audio' => $AudioDomain . $G1_L27_Speaking . "audio" . ".mp3", 'q_image' => $l27_G170_image . "orange.png", "q_content" => "Describe the picture. It's a / an ............"],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 27 Game 171 ( writing )
        ////////////////////////////////////////////////////////

        $G1_L27_writing = "Grade_1/" . "Lesson_27/" . "writing/";
        $l27G171image = $domain . "/storage/images/Grade_1/lesson_27/writing/";


        $q_G171 = [
            ["W", "I", "I", "K"],
            ["L", "I", "V", "O", "E", "S"],
            ["C", "A", "D", "O", "A", "V", "O"],
            ["N", "U", "T", "C", "O", "C", "O"],
            ["V", "A", "G", "A", "U"],
            ["R", "I", "A", "N", "U", "D"],
            ["C", "H", "E", "E", "L", "Y"],
            ["H", "E", "R", "R", "C", "Y"],
            ["A", "C", "P", "E", "H"],
            ["O", "M", "P", "E", "L", "O"],


        ];

        $a_G171 = [
            "KIWI", "OLIVES", "AVOCADO", "COCONUT", "GUAVA", "DURIAN", "LYCHEE", "CHERRY", "PEACH", "POMELO"
        ];

        $G171_Index = 0;

        for ($i = 0; $i < count($q_G171); $i++) {
            foreach ($q_G171[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 171, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_L27_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 171, 'q_image' => $l27G171image . str_replace(' ', '', strtolower($a_G171[$G171_Index])) . ".png", 'a_content' => $a_G171[$G171_Index], 'a_audio' => $AudioDomain . $G1_L27_writing . strtolower($a_G171[$G171_Index]) . ".mp3"],
            ]);
            $G171_Index++;
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 28 Game 172 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 172, 'a_content' => 'lesson_28_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 172, 'a_content' => 'lesson_28_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 28 Game 173 (  listen and repeat  )
        ////////////////////////////////////////////////////////

        $l28_G173_image = $domain . "/storage/images/Grade_1/lesson_28/listen_n_repeat/";
        $G1_L28_reading = "Grade_1/" . "Lesson_28/" . "listen_n_repeat/";


        $ansl28_G173_Content = [
            "1-avocado", "2-guavas", "3-pineapples", "4-coconuts", "5-oranges", "5-watermelons", "6-mangoes", "7-kiwis", "8-bananas", "9-oranges", "10-apples"
        ];

        foreach ($ansl28_G173_Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 173, 'a_content' => $key, 'a_image' => $l28_G173_image . str_replace(' ', '', strtolower($key)) . ".png",
                    'a_audio' => $AudioDomain . $G1_L28_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
                ],
            ]);
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 28 Game 174 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l28_G174_image = $domain . "/storage/images/Grade_1/lesson_28/listen_n_practice/";
        $G1_L28_listen_n_practice = "Grade_1/" . "Lesson_28/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([


            [
                'round' => 1, 'game_id' => 174, 'a_content' => "oranges", 'q_image' => $l28_G174_image . "orange" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-oranges-are-there-Th" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 174, 'a_content' => "pineapples", 'q_image' => $l28_G174_image . "pineapple" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-pineapples-are-there" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 174, 'a_content' => "apples", 'q_image' => $l28_G174_image . "apple" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-apples-are-there-The" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 174, 'a_content' => "mangosteens", 'q_image' => $l28_G174_image . "mangosteen2" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-mangosteens-are-there" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 174, 'a_content' => "kiwis", 'q_image' => $l28_G174_image . "kiwi" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-kiwis-are-there-1-ki" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 174, 'a_content' => "bananas", 'q_image' => $l28_G174_image . "banana" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-bananas-are-there-Th" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],


            [
                'round' => 2, 'game_id' => 174, 'a_content' => "lemon", 'q_image' => $l28_G174_image . "lemon" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-lemons-are-there-The" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 174, 'a_content' => "coconut", 'q_image' => $l28_G174_image . "coconut" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-coconuts-are-there-3" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 174, 'a_content' => "guavas", 'q_image' => $l28_G174_image . "guava" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-guavas-are-there-The" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 174, 'a_content' => "pineapples", 'q_image' => $l28_G174_image . "pineapple" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-pineapples-are-there" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 174, 'a_content' => "rambutans", 'q_image' => $l28_G174_image . "rambutan" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "audio" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 174, 'a_content' => "mangoes", 'q_image' => $l28_G174_image . "mango" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-mangoes-are-there-8" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 174, 'a_content' => "watermelons", 'q_image' => $l28_G174_image . "watermelon" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-watermelons-are-there" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 174, 'a_content' => "cherries", 'q_image' => $l28_G174_image . "cherry" . ".png",
                'a_audio' => $AudioDomain . $G1_L28_listen_n_practice . "How-many-cherries-are-there-5" . ".mp3", "background" => $l28_G174_image . "bg.png"
            ],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 28 Game 175 (  Matching  )
        ////////////////////////////////////////////////////////

        $l28G175image = $domain . "/storage/images/Grade_1/lesson_28/Matching/";
        $G1_L28_Matching = "Grade_1/" . "Lesson_28/" . "Matching/";

        $G1_L28_Game175_Matching_image = [

            ['six', 'two', 'five', 'three', 'four'],
            ['three', 'five', 'four', 'six', 'two'],


            ['six', 'two', 'five', 'three', 'four'],
            ['three', 'five', 'four', 'six', 'two'],

        ];


        for ($i = 0; $i < count($G1_L28_Game175_Matching_image); $i++) {

            foreach ($G1_L28_Game175_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 175, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l28G175image . str_replace(' ', '', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G1_L28_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 28 Game 176 ( reading )
        ////////////////////////////////////////////////////////

        $G1_L28_reading_passage_path = "Grade_1/" . "Lesson_28/" . "reading_passage/";
        $l28_G176_image = $domain . "/storage/images/Grade_1/lesson_28/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 176, "q_image" => null, "q_audio" => null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 176, "q_image" => null, "q_audio" => null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 176, "q_image" => null, "q_audio" => $AudioDomain . $G1_L28_reading_passage_path . "There-are-7-bananas-true-or-f.mp3", "q_conver" => "There are 7 bananas", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 176, "q_image" => null, "q_audio" => $AudioDomain . $G1_L28_reading_passage_path . "I-Iike-fruits-I-have-a-pineap.mp3", "q_content" => "I like fruits.", 'q_conver' => "I like fruits. I have a pineapple, one melon and an apple. There are three bananas and two oranges. I also eat grapes. I like green grapes. I don't like purple grapes.", 'a_content' => null, "background" => $l28_G176_image . "bg.png"],


            ['round' => 2, 'game_id' => 176, "q_image" => null, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 176, "q_image" => null, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 176, "q_image" => null, "q_audio" => $AudioDomain . $G1_L28_reading_passage_path . "I-eat-grapes-true-or-false.mp3", "q_conver" =>  "I eat grapes", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 176, "q_image" => null, "q_audio" => $AudioDomain . $G1_L28_reading_passage_path . "I-Iike-fruits-I-have-a-pineap.mp3", "q_content" => "I like fruits.", 'q_conver' => "I like fruits. I have a pineapple, one melon and an apple. There are three bananas and two oranges. I also eat grapes. I like green grapes. I don't like purple grapes.", 'a_content' => null, "background" => $l28_G176_image . "bg.png"],


            ['round' => 3, 'game_id' => 176, "q_image" => null, "q_audio" =>  null, 'q_content' => "True",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 176, "q_image" => null, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 176, "q_image" => null, "q_audio" => $AudioDomain . $G1_L28_reading_passage_path . "I-like-purple-grapes-true-or-f.mp3", "q_conver" => "I like purple grapes", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 176, "q_image" => null, "q_audio" => $AudioDomain . $G1_L28_reading_passage_path . "I-Iike-fruits-I-have-a-pineap.mp3", "q_content" => "I like fruits.", 'q_conver' => "I like fruits. I have a pineapple, one melon and an apple. There are three bananas and two oranges. I also eat grapes. I like green grapes. I don't like purple grapes.", 'a_content' => null, "background" => $l28_G176_image . "bg.png"],


            ['round' => 4, 'game_id' => 176, "q_image" => null, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 176, "q_image" => null, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 176, "q_image" => null, "q_audio" => $AudioDomain . $G1_L28_reading_passage_path . "There-are-2-oranges-true-or-f.mp3", "q_conver" => "There are 2 oranges", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 176, "q_image" => null, "q_audio" => $AudioDomain . $G1_L28_reading_passage_path . "I-Iike-fruits-I-have-a-pineap.mp3", "q_content" => "I like fruits.", 'q_conver' => "I like fruits. I have a pineapple, one melon and an apple. There are three bananas and two oranges. I also eat grapes. I like green grapes. I don't like purple grapes.", 'a_content' => null, "background" => $l28_G176_image . "bg.png"],


            ['round' => 5, 'game_id' => 176, "q_image" => null, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 176, "q_image" => null, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 176, "q_image" => null, "q_audio" => $AudioDomain . $G1_L28_reading_passage_path . "I-have-2-pineapples-true-or-f.mp3", "q_conver" => "I have 2 pineapples", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 176, "q_image" => null, "q_audio" => $AudioDomain . $G1_L28_reading_passage_path . "I-Iike-fruits-I-have-a-pineap.mp3", "q_content" => "I like fruits.", 'q_conver' => "I like fruits. I have a pineapple, one melon and an apple. There are three bananas and two oranges. I also eat grapes. I like green grapes. I don't like purple grapes.", 'a_content' => null, "background" => $l28_G176_image . "bg.png"],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 28 Game 177 ( speaking )
        ////////////////////////////////////////////////////////

        $l28_G177_image = $domain . "/storage/images/Grade_1/lesson_28/Speaking/";
        $G1_L28_Speaking = "Grade_1/" . "Lesson_28/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 177, "q_audio" => $AudioDomain . $G1_L28_Speaking . "audio" . ".mp3", 'q_image' => $l28_G177_image . "guava.png", "q_content" => "How many guavas are there? There are ......."],
            ['round' => 2, 'game_id' => 177, "q_audio" => $AudioDomain . $G1_L28_Speaking . "audio" . ".mp3", 'q_image' => $l28_G177_image . "orange.png", "q_content" => "How many oranges are there? There are ......."],
            ['round' => 3, 'game_id' => 177, "q_audio" => $AudioDomain . $G1_L28_Speaking . "audio" . ".mp3", 'q_image' => $l28_G177_image . "apple.png", "q_content" => "How many apples are there? There are ......."],
            ['round' => 4, 'game_id' => 177, "q_audio" => $AudioDomain . $G1_L28_Speaking . "audio" . ".mp3", 'q_image' => $l28_G177_image . "mango.png", "q_content" => "How many mangoes are there? There are ......."],
            ['round' => 5, 'game_id' => 177, "q_audio" => $AudioDomain . $G1_L28_Speaking . "audio" . ".mp3", 'q_image' => $l28_G177_image . "banana.png", "q_content" => "How many bananas are there? There are ......."],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 29 Game 178 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 178, 'a_content' => 'lesson_29_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 178, 'a_content' => 'lesson_29_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 29 Game 179 (  Read, Listen and Repeat  )
        ////////////////////////////////////////////////////////


        $G1_L29_Read_Listen_n_Repeat_path = "Grade_1/" . "Lesson_29/" . "Read_listen_n_Repeat/";
        $l29_G179_image = $domain . "/storage/images/Grade_1/lesson_29/Read_Listen_n_Repeat/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 179, 'a_image' => $l29_G179_image . "boy.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "Give-me-some-bananas.mp3", "a_conver" => "Give me some bananas.", "background" =>  $l29_G179_image . "bg1.png"],
            ['round' => 1, 'game_id' => 179, 'a_image' => $l29_G179_image . "girl.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "How-many-bananas.mp3", "a_conver" => "How many bananas?", "background" =>  $l29_G179_image . "bg1.png"],

            ['round' => 2, 'game_id' => 179, 'a_image' => $l29_G179_image . "boy.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "3-bananas.mp3", "a_conver" => "3 bananas", "background" =>  $l29_G179_image . "bg2.png"],
            ['round' => 2, 'game_id' => 179, 'a_image' => $l29_G179_image . "girl.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "Here-you-are.mp3", "a_conver" => "Here you are.", "background" =>  $l29_G179_image . "bg2.png"],

            ['round' => 3, 'game_id' => 179, 'a_image' => $l29_G179_image . "boy.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "Thank-you.mp3", "a_conver" => "Thank you", "background" =>  $l29_G179_image . "bg2.png"],
            ['round' => 3, 'game_id' => 179, 'a_image' => $l29_G179_image . "girl.png", "a_audio" => null, "a_conver" => null, "background" =>  $l29_G179_image . "bg2.png"],


            ['round' => 4, 'game_id' => 179, 'a_image' => $l29_G179_image . "boy.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "Give-me-some-mangoes.mp3", "a_conver" => "Give me some mangoes.", "background" =>  $l29_G179_image . "bg1.png"],
            ['round' => 4, 'game_id' => 179, 'a_image' => $l29_G179_image . "girl.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "How-many-mangoes.mp3", "a_conver" => "How many mangoes?", "background" =>  $l29_G179_image . "bg1.png"],

            ['round' => 5, 'game_id' => 179, 'a_image' => $l29_G179_image . "boy.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "5-mangoes.mp3", "a_conver" => "5 mangoes", "background" =>  $l29_G179_image . "bg2.png"],
            ['round' => 5, 'game_id' => 179, 'a_image' => $l29_G179_image . "girl.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "Here-you-are.mp3", "a_conver" => "Here you are.", "background" =>  $l29_G179_image . "bg2.png"],

            ['round' => 6, 'game_id' => 179, 'a_image' => $l29_G179_image . "boy.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "Thank-you.mp3", "a_conver" => "Thank you", "background" =>  $l29_G179_image . "bg2.png"],
            ['round' => 6, 'game_id' => 179, 'a_image' => $l29_G179_image . "girl.png", "a_audio" => null, "a_conver" => null, "background" =>  $l29_G179_image . "bg2.png"],


            ['round' => 7, 'game_id' => 179, 'a_image' => $l29_G179_image . "boy.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "Please-give-me-some-oranges.mp3", "a_conver" => "Please give me some oranges.", "background" =>  $l29_G179_image . "bg1.png"],
            ['round' => 7, 'game_id' => 179, 'a_image' => $l29_G179_image . "girl.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "How-many-oranges.mp3", "a_conver" => "How many oranges?", "background" =>  $l29_G179_image . "bg1.png"],

            ['round' => 8, 'game_id' => 179, 'a_image' => $l29_G179_image . "boy.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "7-oranges.mp3", "a_conver" => "7 oranges", "background" =>  $l29_G179_image . "bg2.png"],
            ['round' => 8, 'game_id' => 179, 'a_image' => $l29_G179_image . "girl.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "Here-you-are.mp3", "a_conver" => "Here you are.", "background" =>  $l29_G179_image . "bg2.png"],

            ['round' => 9, 'game_id' => 179, 'a_image' => $l29_G179_image . "boy.png", "a_audio" => $AudioDomain . $G1_L29_Read_Listen_n_Repeat_path . "Thank-you.mp3", "a_conver" => "Thank you", "background" =>  $l29_G179_image . "bg2.png"],
            ['round' => 9, 'game_id' => 179, 'a_image' => $l29_G179_image . "girl.png", "a_audio" => null, "a_conver" => null, "background" =>  $l29_G179_image . "bg2.png"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 29 Game 180 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l29_G180_image = $domain . "/storage/images/Grade_1/lesson_29/listen_n_practice/";
        $G1_L29_listen_n_practice = "Grade_1/" . "Lesson_29/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([

            [
                'round' => 1, 'game_id' => 180, 'a_content' => "orange", 'q_image' => $l29_G180_image . "orange" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Please-give-me-some-oranges" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 180, 'a_content' => "pineapple", 'q_image' => $l29_G180_image . "pineapple" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Please-give-me-a-pineapple" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 180, 'a_content' => "apple", 'q_image' => $l29_G180_image . "apple" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "audio" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 180, 'a_content' => "mango", 'q_image' => $l29_G180_image . "mango" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Give-me-some-mangoes" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 180, 'a_content' => "mangosteen", 'q_image' => $l29_G180_image . "mangosteen" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "audio" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 180, 'a_content' => "kiwi", 'q_image' => $l29_G180_image . "kiwi" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "audio" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 180, 'a_content' => "banana", 'q_image' => $l29_G180_image . "banana" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Give-me-some-bananas" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 180, 'a_content' => "cherry", 'q_image' => $l29_G180_image . "cherry" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Please-give-me-some-cherries" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 180, 'a_content' => "melon", 'q_image' => $l29_G180_image . "melon" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "audio" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 180, 'a_content' => "grape", 'q_image' => $l29_G180_image . "grape" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Give-me-some-grapes" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],


            [
                'round' => 2, 'game_id' => 180, 'a_content' => "apple", 'q_image' => $l29_G180_image . "apple" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "audio" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 180, 'a_content' => "lemon", 'q_image' => $l29_G180_image . "lemon" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Please-give-me-some-lemons" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 180, 'a_content' => "pineapple", 'q_image' => $l29_G180_image . "pineapple" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Please-give-me-a-pineapple" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 180, 'a_content' => "coconut", 'q_image' => $l29_G180_image . "coconut" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Give-me-3-coconuts" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 1, 'game_id' => 180, 'a_content' => "mangosteen", 'q_image' => $l29_G180_image . "mangosteen" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "audio" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 180, 'a_content' => "guava", 'q_image' => $l29_G180_image . "guava" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Give-me-some-guavas" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 180, 'a_content' => "mango", 'q_image' => $l29_G180_image . "mango" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Give-me-some-mangoes" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 180, 'a_content' => "watermelon", 'q_image' => $l29_G180_image . "watermelon" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Please-give-me-a-watermelon" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 180, 'a_content' => "cherry", 'q_image' => $l29_G180_image . "cherry" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Please-give-me-some-cherries" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 180, 'a_content' => "grape", 'q_image' => $l29_G180_image . "grape" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Give-me-some-grapes" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 180, 'a_content' => "peach", 'q_image' => $l29_G180_image . "peach" . ".png",
                'a_audio' => $AudioDomain . $G1_L29_listen_n_practice . "Give-me-some-peaches" . ".mp3", "background" => $l29_G180_image . "bg.png"
            ],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 29 Game 181 (  song  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 181, 'a_content' => 'lesson_29_song', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 181, 'a_content' => 'lesson_29_song_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 29 Game 182 (  writing  )
        ////////////////////////////////////////////////////////

        $G1_L29_writing = "Grade_1/" . "Lesson_29/" . "writing/";

        $q_G182 = [
            ["bananas.", "me", "some", "Give"],
            ["are.", "you", "Here"],
            ["many", "How", "bananas", "?"],
            ["many", "How", "oranges", "there", "are", "?"],
            ["3", "apples.", "are", "There"],

            ["coconuts.", "me", "some", "Give"],
            ["are.", "you", "Here"],
            ["many", "How", "coconuts", "?"],
            ["many", "How", "mangoes", "there", "are", "?"],
            ["5", "mangoes.", "are", "There"],

        ];

        $a_G182 = [
            "Give me some bananas.", "Here you are.", "How many bananas ?", "How many oranges are there ?", "There are 3 apples.",
            "Give me some coconuts.", "Here you are.", "How many coconuts ?", "How many mangoes are there ?", "There are 5 mangoes.",
        ];

        $a_audio_G182 = [
            "Give me some bananas", "Here you are", "How many bananas", "How many oranges are there", "There are three apples",
            "Give me some coconuts", "Here you are", "How many coconuts", "How many mangoes are there", "There are 5 mangoes",
        ];

        $G182_Index = 0;

        for ($i = 0; $i < count($q_G182); $i++) {
            foreach ($q_G182[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 182, 'q_content' => $j],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 182, 'a_content' => $a_G182[$G182_Index], 'a_audio' => $AudioDomain . $G1_L29_writing . str_replace(' ', '-', strtolower($a_audio_G182[$G182_Index])) . ".mp3"],
            ]);
            $G182_Index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 29 Game 183 ( speaking )
        ////////////////////////////////////////////////////////

        $l29_G183_image = $domain . "/storage/images/Grade_1/lesson_29/Speaking/";
        $G1_L29_Speaking = "Grade_1/" . "Lesson_29/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 183, 'q_audio' => $AudioDomain . $G1_L29_Speaking . "audio" . ".mp3", 'q_image' => $l29_G183_image . "grape.png", "q_content" => "Give me some grapes"],
            ['round' => 2, 'game_id' => 183, 'q_audio' => $AudioDomain . $G1_L29_Speaking . "audio" . ".mp3", 'q_image' => $l29_G183_image . "pear.png", "q_content" => "Give me some pears"],
            ['round' => 3, 'game_id' => 183, 'q_audio' => $AudioDomain . $G1_L29_Speaking . "audio" . ".mp3", 'q_image' => $l29_G183_image . "peach.png", "q_content" => "Please give me a Peach"],
            ['round' => 4, 'game_id' => 183, 'q_audio' => $AudioDomain . $G1_L29_Speaking . "audio" . ".mp3", 'q_image' => $l29_G183_image . "watermelon.png", "q_content" => "Please give me a watermelon"],
            ['round' => 5, 'game_id' => 183, 'q_audio' => $AudioDomain . $G1_L29_Speaking . "audio" . ".mp3", 'q_image' => $l29_G183_image . "coconut.png", "q_content" => "Please give me a coconut"],
            ['round' => 6, 'game_id' => 183, 'q_audio' => $AudioDomain . $G1_L29_Speaking . "audio" . ".mp3", 'q_image' => $l29_G183_image . "avocado.png", "q_content" => "Give me some avocadoes"],
            ['round' => 7, 'game_id' => 183, 'q_audio' => $AudioDomain . $G1_L29_Speaking . "audio" . ".mp3", 'q_image' => $l29_G183_image . "berry.png", "q_content" => "Give me some avocadoes"],
            ['round' => 8, 'game_id' => 183, 'q_audio' => $AudioDomain . $G1_L29_Speaking . "audio" . ".mp3", 'q_image' => $l29_G183_image . "pineapple.png", "q_content" => "Give me some pineapple"],
            ['round' => 9, 'game_id' => 183, 'q_audio' => $AudioDomain . $G1_L29_Speaking . "audio" . ".mp3", 'q_image' => $l29_G183_image . "strawberry.png", "q_content" => "Give me some strawberries"],
            ['round' => 10, 'game_id' => 183, 'q_audio' => $AudioDomain . $G1_L29_Speaking . "audio" . ".mp3", 'q_image' => $l29_G183_image . "banana.png", "q_content" => "Give me some bananas"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 30 Game 184 (  Target Language  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 184, 'a_content' => 'lesson_30_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 184, 'a_content' => 'lesson_30_video_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 30 Game 185 (  listen and repeat  )
        ////////////////////////////////////////////////////////

        $l30_G185_image = $domain . "/storage/images/Grade_1/lesson_30/listen_n_repeat/";
        $G1_L30_reading = "Grade_1/" . "Lesson_30/" . "listen_n_repeat/";


        $ansl27G167Content = [
            "queen", "room", "rain", "raincoat", "rainbow", "quail", "rabbit", "rat", "rhino", "rambutan"
        ];

        foreach ($ansl27G167Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 185, 'a_content' => $key, 'a_image' => $l30_G185_image . str_replace(' ', '', strtolower($key)) . ".png",
                    'a_audio' => $AudioDomain . $G1_L30_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 30 Game 186 (  Listen and practice  )
        ////////////////////////////////////////////////////////

        $l30_G186_image = $domain . "/storage/images/Grade_1/lesson_30/listen_n_practice/";
        $G1_L30_listen_n_practice = "Grade_1/" . "Lesson_30/" . "listen_n_practice/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 186, 'a_content' => "quail", 'q_image' => $l30_G186_image . "quail" . ".png",
                'a_audio' => $AudioDomain . $G1_L30_listen_n_practice . "quail" . ".mp3", "background" => $l30_G186_image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 186, 'a_content' => "parrot", 'q_image' => $l30_G186_image . "parrot" . ".png",
                'a_audio' => $AudioDomain . $G1_L30_listen_n_practice . "parrot" . ".mp3", "background" => $l30_G186_image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 186, 'a_content' => "rhino", 'q_image' => $l30_G186_image . "rhino" . ".png",
                'a_audio' => $AudioDomain . $G1_L30_listen_n_practice . "rhino" . ".mp3", "background" => $l30_G186_image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 186, 'a_content' => "rat", 'q_image' => $l30_G186_image . "rat" . ".png",
                'a_audio' => $AudioDomain . $G1_L30_listen_n_practice . "rat" . ".mp3", "background" => $l30_G186_image . "bg1.png"
            ],
            [
                'round' => 1, 'game_id' => 186, 'a_content' => "hamster", 'q_image' => $l30_G186_image . "hamster" . ".png",
                'a_audio' => $AudioDomain . $G1_L30_listen_n_practice . "hamster" . ".mp3", "background" => $l30_G186_image . "bg1.png"
            ],



            [
                'round' => 2, 'game_id' => 186, 'a_content' => "rambutan", 'q_image' => $l30_G186_image . "rambutan" . ".png",
                'a_audio' => $AudioDomain . $G1_L30_listen_n_practice . "rambutan" . ".mp3", "background" => $l30_G186_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 186, 'a_content' => "strawberry", 'q_image' => $l30_G186_image . "strawberry" . ".png",
                'a_audio' => $AudioDomain . $G1_L30_listen_n_practice . "strawberry" . ".mp3", "background" => $l30_G186_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 186, 'a_content' => "pear", 'q_image' => $l30_G186_image . "pear" . ".png",
                'a_audio' => $AudioDomain . $G1_L30_listen_n_practice . "pear" . ".mp3", "background" => $l30_G186_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 186, 'a_content' => "olives", 'q_image' => $l30_G186_image . "olives" . ".png",
                'a_audio' => $AudioDomain . $G1_L30_listen_n_practice . "olives" . ".mp3", "background" => $l30_G186_image . "bg.png"
            ],
            [
                'round' => 2, 'game_id' => 186, 'a_content' => "papaya", 'q_image' => $l30_G186_image . "papaya" . ".png",
                'a_audio' => $AudioDomain . $G1_L30_listen_n_practice . "papaya" . ".mp3", "background" => $l30_G186_image . "bg.png"
            ],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 30 Game 187 (  Matching  )
        ////////////////////////////////////////////////////////


        $l30_G187_image = $domain . "/storage/images/Grade_1/lesson_30/Matching/";
        $G1_L30_Matching = "Grade_1/" . "Lesson_30/" . "Matching/";

        $G1_L30_Game187_Matching_image = [

            ['rabbit', 'rhino', 'rain', 'raincoat', 'rainbow'],
            ['queen', 'quiet', 'road', 'rambutan', "quince"],

        ];

        $G1_L30_Game187_Matching = [

            ['raincoat', 'rain', 'rhino', 'rainbow', "rabbit"],
            ['Road', 'Qunice', 'Queen', 'Rambutan', "Quiet"],

        ];



        for ($i = 0; $i < count($G1_L30_Game187_Matching); $i++) {

            foreach ($G1_L30_Game187_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 187, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l30_G187_image . str_replace(' ', '', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G1_L30_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G1_L30_Game187_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 187, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => str_replace(' ', '', strtolower($q)), 'q_audio' => $AudioDomain . $G1_L30_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 30 Game 188 ( speaking )
        ////////////////////////////////////////////////////////

        $l30_G188_image = $domain . "/storage/images/Grade_1/lesson_30/Speaking/";
        $G1_L30_Speaking = "Grade_1/" . "Lesson_30/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 188, 'q_audio' => $AudioDomain . $G1_L30_Speaking . "audio" . ".mp3", 'q_image' => $l30_G188_image . "bird.png", "q_content" => "Look at the picture and say a word."],
            ['round' => 2, 'game_id' => 188, 'q_audio' => $AudioDomain . $G1_L30_Speaking . "audio" . ".mp3", 'q_image' => $l30_G188_image . "raincoat.png", "q_content" => "Look at the picture and say a word."],
            ['round' => 3, 'game_id' => 188, 'q_audio' => $AudioDomain . $G1_L30_Speaking . "audio" . ".mp3", 'q_image' => $l30_G188_image . "rainbow.png", "q_content" => "Look at the picture and say a word."],
            ['round' => 4, 'game_id' => 188, 'q_audio' => $AudioDomain . $G1_L30_Speaking . "audio" . ".mp3", 'q_image' => $l30_G188_image . "road.png", "q_content" => "Look at the picture and say a word."],
            ['round' => 5, 'game_id' => 188, 'q_audio' => $AudioDomain . $G1_L30_Speaking . "audio" . ".mp3", 'q_image' => $l30_G188_image . "rhino.png", "q_content" => "Look at the picture and say a word."],
            ['round' => 6, 'game_id' => 188, 'q_audio' => $AudioDomain . $G1_L30_Speaking . "audio" . ".mp3", 'q_image' => $l30_G188_image . "rambutan.png", "q_content" => "Look at the picture and say a word."],
            ['round' => 7, 'game_id' => 188, 'q_audio' => $AudioDomain . $G1_L30_Speaking . "audio" . ".mp3", 'q_image' => $l30_G188_image . "queen.png", "q_content" => "Look at the picture and say a word."],
            ['round' => 8, 'game_id' => 188, 'q_audio' => $AudioDomain . $G1_L30_Speaking . "audio" . ".mp3", 'q_image' => $l30_G188_image . "pear.png", "q_content" => "Look at the picture and say a word."],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 30 Game 189 , 190 (  Writing  )
        ////////////////////////////////////////////////////////

        $G1_L30_writing = "Grade_1/" . "Lesson_30/" . "writing/";
        $l30_G189_G190_image = $domain . "/storage/images/Grade_1/lesson_30/writing/";


        // game 189
        $G189tracing = [
            'q', 'r', 'Q', 'R'
        ];
        foreach ($G189tracing as $i => $trace) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 189,
                    'q_audio' =>  $AudioDomain . $G1_L30_writing . strtoupper($trace) . ".mp3",
                    'q_content' => ctype_lower($trace) ?   $l30_G189_G190_image . "dotted_small_" . $trace . ".png" :  $l30_G189_G190_image . "dotted_" . $trace . ".png",
                    'q_image' => ctype_lower($trace) ?   $l30_G189_G190_image . "small_" . $trace . ".png" :  $l30_G189_G190_image . $trace . ".png",
                    'a_content' => $trace,
                ],
            ]);
        }

        // game 190
        $q_G190 = [
            ["I", "A", "B", "B", "R", "T"],
            ["Y", "E", "R", "R", "B", "P", "R", "S", "A"],
            ["T", "Q", "U", "E", "I"],
            ["I", "R", "A", "N"],
            ["U", "Q", "A", "I", "L"],
            ["U", "Q", "E", "N", "E"],

        ];

        $a_G190 = [
            "RABBIT", "RASPBERRY", "QUIET", "RAIN", "QUAIL", "QUEEN"
        ];

        $G190_Index = 0;

        for ($i = 0; $i < count($q_G190); $i++) {
            foreach ($q_G190[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 190, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_L30_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 190, 'q_image' => $l30_G189_G190_image . str_replace(' ', '', strtolower($a_G190[$G190_Index])) . ".png", 'a_content' => $a_G190[$G190_Index], 'a_audio' => $AudioDomain . $G1_L30_writing . strtolower($a_G190[$G190_Index]) . ".mp3"],
            ]);
            $G190_Index++;
        }
    }
}
