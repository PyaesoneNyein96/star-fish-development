<?php

namespace Database\Seeders\AnsNQueSeed2\Grade2;

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
        ////    Grade 2  Lesson 1 Game 252 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 252, 'a_content' => 'lesson_1_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 252, 'a_content' => 'lesson_1_video_global', 'isLocal' => 0]);


        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 1 Game 253 ( pronounciation )
        //////////////////////////////////////////////////////////////


        $G2_L1_pronoun = "Grade_2/" . "Lesson_1/" . "pronounciation/";
        $l1G253image = $domain . "/storage/images/Grade_2/lesson_1/pronounciation/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 253, 'a_image' => $l1G253image . "jane-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name-girl.mp3", "a_conver" => "What's your name?", "background" =>  $l1G253image . "bg.jpg"],
            ['round' => 1, 'game_id' => 253, 'a_image' => $l1G253image . "jack.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Jack.mp3", "a_conver" => "My name's Jack.", "background" =>  $l1G253image . "bg.jpg"],

            ['round' => 1, 'game_id' => 253, 'a_image' => $l1G253image . "rosy-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name-girl.mp3", "a_conver" => "What's your name?", "background" =>  $l1G253image . "bg.jpg"],
            ['round' => 1, 'game_id' => 253, 'a_image' => $l1G253image . "chris.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Chris.mp3", "a_conver" => "My name's Chris.", "background" =>  $l1G253image . "bg.jpg"],

            ['round' => 2, 'game_id' => 253, 'a_image' => $l1G253image . "jack-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name.mp3", "a_conver" => "What's your name?", "background" =>  $l1G253image . "bg.jpg"],
            ['round' => 2, 'game_id' => 253, 'a_image' => $l1G253image . "jane.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Jane.mp3", "a_conver" => "My name's Jane.", "background" =>  $l1G253image . "bg.jpg"],

            ['round' => 2, 'game_id' => 253, 'a_image' => $l1G253image . "chris-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name.mp3", "a_conver" => "What's your name?", "background" =>  $l1G253image . "bg.jpg"],
            ['round' => 2, 'game_id' => 253, 'a_image' => $l1G253image . "rosy.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Rosy.mp3", "a_conver" => "My name's Rosy.", "background" =>  $l1G253image . "bg.jpg"],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 1 Game 254 ( Practice for Speaking )
        //////////////////////////////////////////////////////////////

        $G2_L1_practice_speaking = "Grade_2/" . "Lesson_1/" . "practice_speaking/";
        $l1_G254image = $domain . "/storage/images/Grade_2/lesson_1/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 254,   'q_image' => $l1_G254image . "teacher.png", "q_conver" => "What is your name?"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 1 Game 255 ( listen and practice )
        //////////////////////////////////////////////////////////////

        $G2_L1_listen_n_practice = "Grade_2/" . "Lesson_1/" . "listen_n_practice/";
        $l1_G255image = $domain . "/storage/images/Grade_2/lesson_1/listen_n_practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 255, 'a_image' => $l1_G255image . "teacher.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "These-two-are-the-same-Im-Su.mp3", "a_conver" => "There two are the same. \nI'm Su Su. = My name's Su Su.", "background" =>  $l1_G255image . "bg1.jpg"],


            ['round' => 2, 'game_id' => 255, 'a_image' => $l1_G255image . "jane.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-my-names-Jane.mp3", "a_conver" => "Hello, my name's Jane. \nWhat's your name?", "background" =>  $l1_G255image . "bg2.jpg"],
            ['round' => 2, 'game_id' => 255, 'a_image' => $l1_G255image . "chris.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hi-my-names-Chris-Im-Chris.mp3", "a_conver" => "Hi, my name's Chris. \nI'm Chris.", "background" =>  $l1_G255image . "bg2.jpg"],

            ['round' => 3, 'game_id' => 255, 'a_image' => $l1_G255image . "rosy.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-my-names-Rosy-Whats.mp3", "a_conver" => "Hello, my name's Rosy. \nWhat's your name?", "background" =>  $l1_G255image . "bg2.jpg"],
            ['round' => 3, 'game_id' => 255, 'a_image' => $l1_G255image . "jane-right.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hi-my-names-Jane-Im-Jane.mp3", "a_conver" => "Hi, my name's Jane. \nI'm Jane.", "background" =>  $l1_G255image . "bg2.jpg"],


            ['round' => 4, 'game_id' => 255, 'a_image' => $l1_G255image . "teacher.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "He-is-Hes-She-is-Shes.mp3", "a_conver" => "He is = He's \nShe is = She's", "background" =>  $l1_G255image . "bg1.jpg"],


            ['round' => 5, 'game_id' => 255, 'a_image' => $l1_G255image . "jack.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-my-names-Jack-Whats.mp3", "a_conver" => "Hello, my name's Jack. \nWhat's your name?", "background" =>  $l1_G255image . "bg3.jpg"],
            ['round' => 5, 'game_id' => 255, 'a_image' => $l1_G255image . "jane-right.png", "a_audio" =>  $AudioDomain . $G2_L1_listen_n_practice . "Hi-my-names-Jane.mp3", "a_conver" => "Hello, my name's Jane.", "background" =>  $l1_G255image . "bg3.jpg"],
            ['round' => 5, 'game_id' => 255, 'a_image' => $l1_G255image . "jack.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-Jane-Shes-Rosy.mp3", "a_conver" => "Hello, Jane. \nShe's Rosy.", "background" =>  $l1_G255image . "bg3.jpg"],

            ['round' => 6, 'game_id' => 255, 'a_image' => $l1_G255image . "jack.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-my-names-Jane.mp3", "a_conver" => "Hello, my name's Jane. \nWhat's your name?", "background" =>  $l1_G255image . "bg4.jpg"],
            ['round' => 6, 'game_id' => 255, 'a_image' => $l1_G255image . "rosy-right.png", "a_audio" =>  $AudioDomain . $G2_L1_listen_n_practice . "Hi-my-names-Rosy-Im-Rosy.mp3", "a_conver" => "Hi, my name's Rosy. \nI'm Rosy.", "background" =>  $l1_G255image . "bg4.jpg"],
            ['round' => 6, 'game_id' => 255, 'a_image' => $l1_G255image . "jane.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-rosy-Hes-Chris.mp3", "a_conver" => "Hello, Rosy. \nShe's Chris.", "background" =>  $l1_G255image . "bg4.jpg"],

        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 1 Game 256 ( Fill in the blank )
        //////////////////////////////////////////////////////////////

        $G2_L1_fill_in_the_blank = "Grade_2/" . "Lesson_1/" . "fill_in_the_blank/";
        $l1_G256image = $domain . "/storage/images/Grade_2/lesson_1/fill_in_the_blank/";

        $g2_l1_Game256_fill_q1 = [
            ["name's", 'name', "I'm", "She's", "He's"],
            ["name's", 'name', "I'm", "She's", "He's"],
            ["name's", 'name', "I'm", "She's", "He's"],
            ["name's", 'name', "I'm", "She's", "He's"],
            ["name's", 'name', "I'm", "She's", "He's"],
            ["name's", 'name', "I'm", "She's", "He's"],
            ["name's", 'name', "I'm", "She's", "He's"],
            ["name's", 'name', "I'm", "She's", "He's"],
            ["name's", 'name', "I'm", "She's", "He's"],

        ];

        $g2_l1_Game256_fill_q2 = [
            "Hello, my ____ Rosy.\nWhat's your ____ ?",
            "Hi, ____ Chris.\nHello Chris. ____ Rosy.",
            "Hello, my ____ Chris.\nWhat's your ____ ?",
            "Hi, ____ Jane. What's your\n____ ? ____ Jack.",
            "Hello, my ____ Jane.\nWhat's your ____ ?",
            "Hi, ____ Rosy.\nWhat's your ____ ?",
            "Hi, ____ Rosy.\nHello Rosy. ____ Chris.",
            "Hello, My ____ Jane.\nWhat's your ____ ?",
            "Hi, ____ Jane.\nWhat's your ____ ?\n____ Jack."
        ];


        $g1_l16_Game256_fill_a = [
            "Hello, my name's Rosy.\nWhat's your name ?",
            "Hi, I'm Chris.\nHello Chris. She's Rosy.",
            "Hello, my name's Chris.\nWhat's your name ?",
            "Hi, She's Jane. What's your\nname ? I'm Jack.",
            "Hello, my name's Jane.\nWhat's your name ?",
            "Hi, I'm Rosy.\nWhat's your name ?",
            "Hi, She's Rosy.\nHello Rosy. I'm Chris.",
            "Hi, My name's Jane.\nWhat's your name ?",
            "Hi, She's Jane.\nWhat's your name ?\nI'm Jack."
        ];

        $correct_G2_l1_Ans =   [

            ["name's", 'name'],
            ["I'm", "She's"],
            ["name's", 'name'],
            ["She's", 'name', "I'm"],
            ["name's", "name"],
            ["I'm", 'name'],
            ["She's", "I'm"],
            ["name's", "name"],
            ["She's", 'name', "I'm"],


        ];

        $g1_l16_Game256_fill_audio = [
            "Hello-my-names-Rosy-Whats", "Hi-i-am-chris", "SubBlock_Hello-my-names-chris-Whats-y", "Hi-She's-Jane-What's-your-name", "Hello-my-names-Jane", "SubBlock_Hello-I-am-rosy-Whats-your-na", "Hi-she's-rosy", "Hello-my-names-Jane", "Hi-She's-Jane-What's-your-name"
        ];




        for ($i = 0; $i < count($g2_l1_Game256_fill_q1); $i++) {

            foreach ($g2_l1_Game256_fill_q1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 256,
                        'q_content' => $word,
                        'a_content' => implode(' ', $correct_G2_l1_Ans[$i]),
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 256,
                    'q_audio' => $AudioDomain . $G2_L1_fill_in_the_blank . $g1_l16_Game256_fill_audio[$i] . ".mp3",
                    'q_content' => $g2_l1_Game256_fill_q2[$i],
                    'a_content' => $g1_l16_Game256_fill_a[$i]
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 1 Game 257 (  Speaking  )
        ////////////////////////////////////////////////////////

        $l1_G257_image = $domain . "/storage/images/Grade_2/lesson_1/Speaking/";
        $G2_L1_Speaking = "Grade_2/" . "Lesson_1/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 257, 'q_audio' => $AudioDomain . $G2_L1_Speaking . "Whats-your-name-girl" . ".mp3", 'q_image' => $l1_G257_image . "girl.png", "q_content" => "She is _____.", "q_conver" => "What's your name?"],
            ['round' => 2, 'game_id' => 257, 'q_audio' => $AudioDomain . $G2_L1_Speaking . "Whats-your-name-girl" . ".mp3", 'q_image' => $l1_G257_image . "girl.png", "q_content" => "He is _____.", "q_conver" => "What's your name?"],
            ['round' => 3, 'game_id' => 257, 'q_audio' => $AudioDomain . $G2_L1_Speaking . "SubBlock_Hello-I-am-rosy-Whats-your-na" . ".mp3", 'q_image' => $l1_G257_image . "girl.png", "q_content" => "Hi, my name is _____.", "q_conver" => "Hello, I am Rosy. What's your name? \nIntroduce me your friends, please."],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 2 Game 258 (  Reading  )
        ////////////////////////////////////////////////////////

        $l2_G258_image = $domain . "/storage/images/Grade_2/lesson_2/reading/";
        $G2_L2_reading = "Grade_2/" . "Lesson_2/" . "reading/";


        $ans_G258 = [
            "Airplane", "Alligator", "Angel", "Animal",  "Ant", "Apple", "Arm", "Arrows", "Ball", "Banana", "Bicycle", "Boat", "Boy", "Bread"
        ];

        $G2_L2_Game258_index = 0;

        foreach ($ans_G258 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 258, 'a_content' => $key, 'a_image' => $l2_G258_image . $ans_G258[$G2_L2_Game258_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L2_reading . strtolower($ans_G258[$G2_L2_Game258_index]) . ".mp3"
                ],
            ]);
            $G2_L2_Game258_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 2 Game 259 (  Trace Word  )
        ////////////////////////////////////////////////////////

        $l2_G259_image = $domain . "/storage/images/Grade_2/lesson_2/trace_word/";
        $G2_L2_trace_word = "Grade_2/" . "Lesson_2/" . "trace_word/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 259, 'q_audio' =>  $AudioDomain . $G2_L2_trace_word . "angel" . ".mp3", 'q_content' =>  null, 'q_image' => $l2_G259_image . "angel" . ".png", 'a_content' => "angel"],
            ['round' => 1, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "n" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "g" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "l" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 2, 'game_id' => 259, 'q_audio' =>  $AudioDomain . $G2_L2_trace_word . "arm" . ".mp3", 'q_content' =>  null, 'q_image' => $l2_G259_image . "arm" . ".png", 'a_content' => "arm"],
            ['round' => 2, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "r" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "m" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 3, 'game_id' => 259, 'q_audio' =>  $AudioDomain . $G2_L2_trace_word . "ball" . ".mp3", 'q_content' =>  null, 'q_image' => $l2_G259_image . "ball" . ".png", 'a_content' => "ball"],
            ['round' => 3, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "b" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "l" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "l" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 4, 'game_id' => 259, 'q_audio' =>  $AudioDomain . $G2_L2_trace_word . "boat" . ".mp3", 'q_content' =>  null, 'q_image' => $l2_G259_image . "boat" . ".png", 'a_content' => "boat"],
            ['round' => 4, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "b" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "t" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 5, 'game_id' => 259, 'q_audio' =>  $AudioDomain . $G2_L2_trace_word . "boy" . ".mp3", 'q_content' =>  null, 'q_image' => $l2_G259_image . "boy" . ".png", 'a_content' => "boy"],
            ['round' => 5, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "b" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "y" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 6, 'game_id' => 259, 'q_audio' =>  $AudioDomain . $G2_L2_trace_word . "bear" . ".mp3", 'q_content' =>  null, 'q_image' => $l2_G259_image . "bear" . ".png", 'a_content' => "bear"],
            ['round' => 6, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "b" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 6, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 6, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 6, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "r" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 7, 'game_id' => 259, 'q_audio' =>  $AudioDomain . $G2_L2_trace_word . "apple" . ".mp3", 'q_content' =>  null, 'q_image' => $l2_G259_image . "apple" . ".png", 'a_content' => "apple"],
            ['round' => 7, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 7, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "p" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 7, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "p" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 7, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "l" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 7, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "e" . ".png", 'q_image' => null, 'a_content' => null],

            ['round' => 8, 'game_id' => 259, 'q_audio' =>  $AudioDomain . $G2_L2_trace_word . "ant" . ".mp3", 'q_content' =>  null, 'q_image' => $l2_G259_image . "ant" . ".png", 'a_content' => "ant"],
            ['round' => 8, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 8, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "n" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 8, 'game_id' => 259, 'q_audio' => null, 'q_content' =>  $l2_G259_image . "t" . ".png", 'q_image' => null, 'a_content' => null],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 2 Game 260 (  Matching  )
        ////////////////////////////////////////////////////////

        $l2_G260_image = $domain . "/storage/images/Grade_2/lesson_2/Matching/";
        $G2_L2_Matching = "Grade_2/" . "Lesson_2/" . "Matching/";


        $G2_L2_Game260_Matching = [

            ['Arrow', 'Alligator', 'Bread', 'Ant', "Arm"],
            ['Boat', 'Bicycle', 'Airplane', 'Boy', "Ball"],

        ];

        $G2_L2_Game260_Matching_image = [

            ['bread', 'arrow', 'arm', 'alligator', "ant"],
            ['airplane', 'boy', 'ball', 'bicycle', 'boat'],

        ];


        for ($i = 0; $i < count($G2_L2_Game260_Matching); $i++) {

            foreach ($G2_L2_Game260_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 260, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G2_L2_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }

            foreach ($G2_L2_Game260_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 260, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l2_G260_image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G2_L2_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 2 Game 261 ( Listen and Write )
        ////////////////////////////////////////////////////////

        $G2_L2_writing = "Grade_2/" . "Lesson_2/" . "writing/";
        $l2_G261_image = $domain . "/storage/images/Grade_2/lesson_2/writing/";


        $q_G261 = [
            ["A", "L", "R", "P", "I", "N", "E", "A"],
            ["A", "G", "N", "E", "L"],
            ["I", "M", "A", "A", "N", "S", "L"],
            ["T", "B", "A", "O"],
            ["I", "B", "L", "Y", "C", "C", "E"],
            ["A", "B", "A", "N", "A", "N"],
            ["O", "B", "A", "O", "N", "L", "L"],
            ["A", "B", "R", "E"],
            ["L", "A", "L", "I", "R", "A", "O", "T", "G"],
            ["O", "A", "R", "R", "W"],


        ];

        $a_G261 = [
            "AIRPLANE", "ANGEL", "ANIMALS", "BOAT", "BICYCLE", "BANANA", "BALLOON", "BEAR", "ALLIGATOR", "ARROW"
        ];

        $G261_Index = 0;

        for ($i = 0; $i < count($q_G261); $i++) {
            foreach ($q_G261[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 261, 'q_content' => $j, 'q_audio' => $AudioDomain . $G2_L2_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 261, 'q_image' => $l2_G261_image . str_replace(' ', '', strtolower($a_G261[$G261_Index])) . ".png", 'a_content' => $a_G261[$G261_Index], 'a_audio' => $AudioDomain . $G2_L2_writing . strtolower($a_G261[$G261_Index]) . ".mp3"],
            ]);
            $G261_Index++;
        }



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 2 Game 262 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 262, 'a_content' => 'lesson_2_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 262, 'a_content' => 'lesson_2_video_global', 'isLocal' => 0]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 2 Game 263 ( listen and speak )
        //////////////////////////////////////////////////////////////

        $G2_L2_listen_n_speak = "Grade_2/" . "Lesson_2/" . "listen_n_speak/";
        $l2_G263image = $domain . "/storage/images/Grade_2/lesson_2/listen_n_speak/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 263, 'a_image' => $l2_G263image . "jane.png", "a_audio" => $AudioDomain . $G2_L2_listen_n_speak . "Hello-Im-Jane-I-like-apples.mp3", "a_conver" => "Hello, I'm Jane. I like apples. What about you? ", "background" =>  $l2_G263image . "bg.png"],
            ['round' => 1, 'game_id' => 263, 'a_image' => $l2_G263image . "rosy.png", "a_audio" => $AudioDomain . $G2_L2_listen_n_speak . "Hi-Jane-Im-Rosy-I-like-ani.mp3", "a_conver" => "Hi, Jane. I'm Rosy. I like animals. What about you?", "background" =>  $l2_G263image . "bg.png"],
            ['round' => 1, 'game_id' => 263, 'a_image' => $l2_G263image . "chris.png", "a_audio" => $AudioDomain . $G2_L2_listen_n_speak . "Hello-Rosy-My-names-Chris.mp3", "a_conver" => "Hello, Rosy. My name's Chris. I like bananas.", "background" =>  $l2_G263image . "bg.png"],

            ['round' => 2, 'game_id' => 263, 'a_image' => $l2_G263image . "jane.png", "a_audio" => $AudioDomain . $G2_L2_listen_n_speak . "Hello-Im-Chris-I-like-angel.mp3", "a_conver" => "Hello, I'm Chris. I like angels. What about you?", "background" =>  $l2_G263image . "bg.png"],
            ['round' => 2, 'game_id' => 263, 'a_image' => $l2_G263image . "rosy.png", "a_audio" => $AudioDomain . $G2_L2_listen_n_speak . "SubBlock_Hi-Chris-Im-Jane-I-like-br.mp3", "a_conver" => "Hi, Chris. I'm Jane. I like bread. What about you?", "background" =>  $l2_G263image . "bg.png"],
            ['round' => 2, 'game_id' => 263, 'a_image' => $l2_G263image . "chris-right.png", "a_audio" => $AudioDomain . $G2_L2_listen_n_speak . "Hello-Jane-My-names-Rosy-I.mp3", "a_conver" => "Hello, Jane. My name's Rosy. I like angels too.", "background" =>  $l2_G263image . "bg.png"],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 263, 'q_image' => $l2_G263image . "teacher.png", "q_content" => $l2_G263image . "bicycle.png", "q_conver" => "Look at the pictures and say \nwhat you like and don't like.", 'round_instruction' => $AudioDomain . $G2_L2_listen_n_speak . "look-at-the-picture-and-say-wh" . ".mp3",],
            ['round' => 4, 'game_id' => 263, 'q_image' => $l2_G263image . "teacher.png", "q_content" => $l2_G263image . "apple.png", "q_conver" => "Look at the pictures and say \nwhat you like and don't like.", 'round_instruction' => $AudioDomain . $G2_L2_listen_n_speak . "look-at-the-picture-and-say-wh" . ".mp3",],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 3 Game 264 ( listen and Repeat )
        //////////////////////////////////////////////////////////////


        $l3_G264_image = $domain . "/storage/images/Grade_2/lesson_3/listen_n_repeat/";
        $G2_L3_reading = "Grade_2/" . "Lesson_3/" . "listen_n_repeat/";


        $ansl3_G264_Content = [
            "Angry", "Bored", "Excited", "Happy", "Hungry", "Jealous", "Joyful", "Nervous", "Sad", "Shy", "Surprised", "Thirsty"
        ];

        foreach ($ansl3_G264_Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 264, 'a_content' => $key, 'a_image' => $l3_G264_image . str_replace(' ', '', $key) . ".png",
                    'a_audio' => $AudioDomain . $G2_L3_reading . str_replace(' ', '', $key) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 3 Game 265 ( speaking )
        ////////////////////////////////////////////////////////

        $l3_G265_image = $domain . "/storage/images/Grade_2/lesson_3/Speaking/";
        $G2_L3_Speaking = "Grade_2/" . "Lesson_3/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 265,  'q_image' => $l3_G265_image . "angry.png", "q_content" => "She is _____."],
            ['round' => 2, 'game_id' => 265,  'q_image' => $l3_G265_image . "happy.png", "q_content" => "He is _____."],
            ['round' => 3, 'game_id' => 265,  'q_image' => $l3_G265_image . "hungry.png", "q_content" => "She is _____."],
            ['round' => 4, 'game_id' => 265,  'q_image' => $l3_G265_image . "jealous.png", "q_content" => "He is _____."],
            ['round' => 5, 'game_id' => 265,  'q_image' => $l3_G265_image . "joyful.png", "q_content" => "She is _____."],
            ['round' => 6, 'game_id' => 265,  'q_image' => $l3_G265_image . "nervous.png", "q_content" => "He is _____."],
            ['round' => 7, 'game_id' => 265,  'q_image' => $l3_G265_image . "sad.png", "q_content" => "She is _____."],
            ['round' => 8, 'game_id' => 265,  'q_image' => $l3_G265_image . "thirsty.png", "q_content" => "He is _____."],
            ['round' => 9, 'game_id' => 265,  'q_image' => $l3_G265_image . "excited.png", "q_content" => "He is _____."],
            ['round' => 10, 'game_id' => 265,  'q_image' => $l3_G265_image . "bored.png", "q_content" => "He is _____."],

        ]);

        DB::table('ans_n_ques')->insert([

            ['round' => 11, 'game_id' => 265, 'a_image' => $l3_G265_image . "hla.png", "a_audio" => $AudioDomain . $G2_L3_Speaking . "Hi-Su-Su-How-are-you-feeling.mp3", "a_conver" => "Hi, Su Su. How are you \nfeeling today?", "background" =>  $l3_G265_image . "bg1.png"],
            ['round' => 11, 'game_id' => 265, 'a_image' => $l3_G265_image . "su.png", "a_audio" => $AudioDomain . $G2_L3_Speaking . "Hello-Hla-Hla-Im-happy.mp3", "a_conver" => "Hello, Hla Hla.\nI'm happy.", "background" =>  $l3_G265_image . "bg1.png"],

            ['round' => 12, 'game_id' => 265, 'a_image' => $l3_G265_image . "su-right.png", "a_audio" => $AudioDomain . $G2_L3_Speaking . "Hi-Aye-Aye-How-are-you-feelin.mp3", "a_conver" => "Hi, Aye Aye. How are you \nfeeling today?", "background" =>  $l3_G265_image . "bg1.png"],
            ['round' => 12, 'game_id' => 265, 'a_image' => $l3_G265_image . "aye.png", "a_audio" => $AudioDomain . $G2_L3_Speaking . "Hello-Su-Su-Im-hungry.mp3", "a_conver" => "Hello, Su Su.\nI'm hungry.", "background" =>  $l3_G265_image . "bg1.png"],

            ['round' => 13, 'game_id' => 265, 'a_image' => $l3_G265_image . "chris.png", "a_audio" => $AudioDomain . $G2_L3_Speaking . "Block_Hi-Kyaw-Kyaw-How-are-you-feeli.mp3", "a_conver" => "Hi, Kyaw Kyaw. How are you \nfeeling today?", "background" =>  $l3_G265_image . "bg1.png"],
            ['round' => 13, 'game_id' => 265, 'a_image' => $l3_G265_image . "kyaw.png", "a_audio" =>  $AudioDomain . $G2_L3_Speaking . "Block_Hello-Chris-Im-sad.mp3", "a_conver" => "Hello, Chris.\nI'm sad.", "background" =>  $l3_G265_image . "bg1.png"],
        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 14, 'game_id' => 265,  'q_image' => $l3_G265_image . "teacher.png", "q_content" => null, "q_conver" => "Hello, what's your name?\nHow are you feeling today?", "round_instruction" => $AudioDomain . $G2_L3_Speaking . "hello-what-name-how-feeling" . ".mp3"],
        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 3 Game 266 ( reading passage )
        ////////////////////////////////////////////////////////

        $G2_L3_reading_passage_path = "Grade_2/" . "Lesson_3/" . "reading_passage/";
        $l3_G266_image = $domain . "/storage/images/Grade_2/lesson_3/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "hungry.mp3", 'q_content' => "hungry", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "thirsty.mp3", 'q_content' => "thirsty", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "happy.mp3", 'q_content' => "happy", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "SubBlock_When-Jane-Wants-to-eat-Shes.mp3", "q_conver" => "When Jane wants to eat,\nshe's ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "Hello-my-name-s-Jane.mp3", "q_content" => "Jane", 'q_conver' => "Hello, my name's Jane. My feelings change like you. When I want to drink, I'm thirsty. I feel hungry when I want to eat. I feel excited when I play with friends, but I feel bored when I watch movies. When I visit my grandparents, I am happy.", 'a_content' => null, "background" => $l3_G266_image . "bg.jpg"],


            ['round' => 2, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "excited.mp3", 'q_content' => "excited", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "happy.mp3", 'q_content' => "happy", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "thirsty.mp3", 'q_content' => "thirsty", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "SubBlock_When-Jane-Wants-to-drink-She.mp3", "q_conver" =>  "When Jane wants to drink,\nshe's ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "Hello-my-name-s-Jane.mp3", "q_content" => "Jane", 'q_conver' => "Hello, my name's Jane. My feelings change like you. When I want to drink, I'm thirsty. I feel hungry when I want to eat. I feel excited when I play with friends, but I feel bored when I watch movies. When I visit my grandparents, I am happy.", 'a_content' => null, "background" => $l3_G266_image . "bg.jpg"],


            ['round' => 3, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "happy.mp3", 'q_content' => "happy",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "excited.mp3", 'q_content' => "excited",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "bored.mp3", 'q_content' => "bored", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "SubBlock_Jane-feels-when-she-plays-with.mp3", "q_conver" => "Jane feels ____,\nwhen she plays with friends", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "Hello-my-name-s-Jane.mp3", "q_content" => "Jane", 'q_conver' => "Hello, my name's Jane. My feelings change like you. When I want to drink, I'm thirsty. I feel hungry when I want to eat. I feel excited when I play with friends, but I feel bored when I watch movies. When I visit my grandparents, I am happy.", 'a_content' => null, "background" => $l3_G266_image . "bg.jpg"],


            ['round' => 4, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "bored.mp3", 'q_content' => "bored", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "hungry.mp3", 'q_content' => "hungry", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "thirsty.mp3", 'q_content' => "thirsty", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "SubBlock_Jane-feels-when-she-watches-mo.mp3", "q_conver" => "Jane feels ____,\nwhen she watches movies.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "Hello-my-name-s-Jane.mp3", "q_content" => "Jane", 'q_conver' => "Hello, my name's Jane. My feelings change like you. When I want to drink, I'm thirsty. I feel hungry when I want to eat. I feel excited when I play with friends, but I feel bored when I watch movies. When I visit my grandparents, I am happy.", 'a_content' => null, "background" => $l3_G266_image . "bg.jpg"],


            ['round' => 5, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "hungry.mp3", 'q_content' => "hungry", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "happy.mp3", 'q_content' => "happy", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "thirsty.mp3", 'q_content' => "thirsty", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "SubBlock_When-jane-visits-her-grandpare.mp3", "q_conver" => "When Jane visits her \ngrandparents, she's ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "Hello-my-name-s-Jane.mp3", "q_content" => "Jane", 'q_conver' => "Hello, my name's Jane. My feelings change like you. When I want to drink, I'm thirsty. I feel hungry when I want to eat. I feel excited when I play with friends, but I feel bored when I watch movies. When I visit my grandparents, I am happy.", 'a_content' => null, "background" => $l3_G266_image . "bg.jpg"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 4 Game 267 (  Read  )
        ////////////////////////////////////////////////////////

        $l4_G267_image = $domain . "/storage/images/Grade_2/lesson_4/read/";
        $G2_L4_read = "Grade_2/" . "Lesson_4/" . "read/";


        $ans_G267 = [
            "Cake", "Cat", "Circle", "Clock",  "Coconut", "Cucumber", "Cup", "Dad", "Dance", "Deer", "Desk", "Dinosaur", "Doll", "Door", "Duck"
        ];

        $G2_L4_Game267_index = 0;

        foreach ($ans_G267 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 267, 'a_content' => $key, 'a_image' => $l4_G267_image . $ans_G267[$G2_L4_Game267_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L4_read . strtolower($ans_G267[$G2_L4_Game267_index]) . ".mp3"
                ],
            ]);
            $G2_L4_Game267_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 4 Game 268 (  Trace Word  )
        ////////////////////////////////////////////////////////

        $l4_G268_image = $domain . "/storage/images/Grade_2/lesson_4/trace_word/";
        $G2_L4_trace_word = "Grade_2/" . "Lesson_4/" . "trace_word/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 268, 'q_audio' =>  $AudioDomain . $G2_L4_trace_word . "cup" . ".mp3", 'q_content' =>  null, 'q_image' => $l4_G268_image . "cup" . ".png", 'a_content' => "cup"],
            ['round' => 1, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "c" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_u" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_p" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 2, 'game_id' => 268, 'q_audio' =>  $AudioDomain . $G2_L4_trace_word . "doll" . ".mp3", 'q_content' =>  null, 'q_image' => $l4_G268_image . "doll" . ".png", 'a_content' => "doll"],
            ['round' => 2, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "d" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_l" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_l" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 3, 'game_id' => 268, 'q_audio' =>  $AudioDomain . $G2_L4_trace_word . "deer" . ".mp3", 'q_content' =>  null, 'q_image' => $l4_G268_image . "deer" . ".png", 'a_content' => "deer"],
            ['round' => 3, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "d" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_r" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 4, 'game_id' => 268, 'q_audio' =>  $AudioDomain . $G2_L4_trace_word . "door" . ".mp3", 'q_content' =>  null, 'q_image' => $l4_G268_image . "door" . ".png", 'a_content' => "door"],
            ['round' => 4, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "d" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_r" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 5, 'game_id' => 268, 'q_audio' =>  $AudioDomain . $G2_L4_trace_word . "cake" . ".mp3", 'q_content' =>  null, 'q_image' => $l4_G268_image . "cake" . ".png", 'a_content' => "cake"],
            ['round' => 5, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "c" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_k" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_e" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 6, 'game_id' => 268, 'q_audio' =>  $AudioDomain . $G2_L4_trace_word . "cat" . ".mp3", 'q_content' =>  null, 'q_image' => $l4_G268_image . "cat" . ".png", 'a_content' => "cat"],
            ['round' => 6, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "c" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 6, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 6, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_t" . ".png", 'q_image' => null, 'a_content' => null],


        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 4 Game 269 (  Matching  )
        ////////////////////////////////////////////////////////

        $l4G269image = $domain . "/storage/images/Grade_2/lesson_4/Matching/";
        $G2_L4_Matching = "Grade_2/" . "Lesson_4/" . "Matching/";


        $G2_L4_Game269_Matching = [

            ['Doll', 'Door', 'Desk', 'Dinosaur', "Deer"],
            ['Cat', 'Cup', 'Cake', 'Clock', "Circle"],

        ];

        $G2_L4_Game269_Matching_image = [

            ['desk', 'deer', 'door', 'doll', 'dinosaur'],
            ['cake', 'circle', 'cup', 'cat', "clock"],

        ];


        for ($i = 0; $i < count($G2_L4_Game269_Matching); $i++) {

            foreach ($G2_L4_Game269_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 269, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G2_L4_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G2_L4_Game269_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 269, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l4G269image . str_replace(' ', '', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $G2_L4_Matching . str_replace(' ', '', strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 4 Game 270 ( writing )
        ////////////////////////////////////////////////////////

        $G2_L4_writing = "Grade_2/" . "Lesson_4/" . "writing/";
        $l4G270image = $domain . "/storage/images/Grade_2/lesson_4/writing/";


        $q_G270 = [
            ["E", "D", "R", "E"],
            ["R", "D", "O", "O"],
            ["U", "C", "C", "U", "R", "E", "M", "B"],
            ["L", "D", "L", "O"],
            ["I", "S", "O", "R", "A", "N", "D", "U"],
            ["E", "N", "C", "D", "A"],
            ["C", "I", "R", "E", "L", "C"],
            ["A", "C", "K", "E"],
            ["U", "T", "N", "O", "O", "C", "C"],
            ["O", "C", "C", "K", "L"],


        ];

        $a_G270 = [
            "DEER", "DOOR", "CUCUMBER", "DOLL", "DINOSAUR", "DANCE", "CIRCLE", "CAKE", "COCONUT", "CLOCK"
        ];

        $G270_Index = 0;

        for ($i = 0; $i < count($q_G270); $i++) {
            foreach ($q_G270[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 270, 'q_content' => $j, 'q_audio' => $AudioDomain . $G2_L4_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 270, 'q_image' => $l4G270image . str_replace(' ', '', strtolower($a_G270[$G270_Index])) . ".png", 'a_content' => $a_G270[$G270_Index], 'a_audio' => $AudioDomain . $G2_L4_writing . strtolower($a_G270[$G270_Index]) . ".mp3"],
            ]);
            $G270_Index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 4 Game 271 ( speaking )
        ////////////////////////////////////////////////////////


        $G2_L4_speaking = "Grade_2/" . "Lesson_4/" . "speaking/";
        $l4G271image = $domain . "/storage/images/Grade_2/lesson_4/speaking/";



        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 271, 'a_image' => $l4G271image . "rosy-right.png", "a_audio" => $AudioDomain . $G2_L4_speaking . "Hello-Im-Rosy-Im-tired-I.mp3", "a_conver" => "Hello, I'm Rosy. I'm tired. I like cat and dinosaur. I don't like chocolate and apples. What about you?", "background" =>  $l4G271image . "bg.jpg"],
            ['round' => 1, 'game_id' => 271, 'a_image' => $l4G271image . "jane.png", "a_audio" => $AudioDomain . $G2_L4_speaking . "Hi-my-names-Jane-Im-happy.mp3", "a_conver" => "Hi, my name's Jane. I'm happy. \nI like apples and cake. I don't like \nalligators.", "background" =>  $l4G271image . "bg.jpg"],

            ['round' => 2, 'game_id' => 271, 'a_image' => $l4G271image . "jack.png", "a_audio" => $AudioDomain . $G2_L4_speaking . "Hi-my-names-Jack-Im-hungry.mp3", "a_conver" => "Hi, my name's Jack. I'm \nhungry. I like coconut \nand chocolate. I don't like \nants and animals. What about you?", "background" =>  $l4G271image . "bg.jpg"],
            ['round' => 2, 'game_id' => 271, 'a_image' => $l4G271image . "rosy.png", "a_audio" => null, "a_conver" => null, "background" =>  $l4G271image . "bg.jpg"],

        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 271,  'q_image' => $l4G271image . "teacher.png", "q_content" => "Hi, I'm _____ (add your name). I'm _____. I like ____ and _____. I don't like ____ and _____. What about you?", "q_conver" => "Now talk about yourself.", "round_instruction" => $AudioDomain . $G2_L4_speaking . "Now-talk-about-yourself" . ".mp3"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 5 Game 272 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 272, 'a_content' => 'lesson_5_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 272, 'a_content' => 'lesson_5_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 5 Game 273 (  vocab  )
        ////////////////////////////////////////////////////////

        $l5_G273_image = $domain . "/storage/images/Grade_2/lesson_5/Vocab/";
        $G2_L5_vocab = "Grade_2/" . "Lesson_5/" . "Vocab/";


        $ans_G273 = [
            "clap-your-hands", "jump-up-high", "raise-your-hands", "stamp-your-feet",  "turn-around"
        ];

        $G2_L5_Game273_index = 0;

        foreach ($ans_G273 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 273, 'a_content' => $key, 'a_image' => $l5_G273_image . $ans_G273[$G2_L5_Game273_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L5_vocab . strtolower($ans_G273[$G2_L5_Game273_index]) . ".mp3"
                ],
            ]);
            $G2_L5_Game273_index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 5 Game 274 (  song  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 274, 'a_content' => 'lesson_5_song', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 274, 'a_content' => 'lesson_5_song_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 5 Game 275 (  song  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 275, 'a_content' => 'lesson_5_song', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 275, 'a_content' => 'lesson_5_song_global', 'isLocal' => 0]);





        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 6 Game 276 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 276, 'a_content' => 'lesson_6_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 276, 'a_content' => 'lesson_6_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 6 Game 277 , 278 (  reading  )
        ////////////////////////////////////////////////////////

        $l6_G277_G278_image = $domain . "/storage/images/Grade_2/lesson_6/reading/";
        $G2_L6_reading = "Grade_2/" . "Lesson_6/" . "reading/";


        $ans_G277 = [
            "brown-eyes", "dark-eyes", "long-hair", "round-face",  "short-hair"
        ];

        $ans_G278 = [
            "he-has-oval-face", "he-has-short-hair", "I-have-brown-eyes", "she-has-long-hair",  "she-has-round-face", "you-have-dark-eyes"
        ];

        $G2_L6_Game277_index = 0;
        $G2_L6_Game278_index = 0;

        foreach ($ans_G277 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 277, 'a_content' => $key, 'a_image' => $l6_G277_G278_image . $ans_G277[$G2_L6_Game277_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L6_reading . strtolower($ans_G277[$G2_L6_Game277_index]) . ".mp3"
                ],
            ]);
            $G2_L6_Game277_index++;
        }

        foreach ($ans_G278 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 278, 'a_content' => $key, 'a_image' => $l6_G277_G278_image . $ans_G278[$G2_L6_Game278_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L6_reading . strtolower($ans_G278[$G2_L6_Game278_index]) . ".mp3"
                ],
            ]);
            $G2_L6_Game278_index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 6 Game 279 (  Matching  )
        ////////////////////////////////////////////////////////

        $l6_G279_image = $domain . "/storage/images/Grade_2/lesson_6/Matching/";
        $G2_L6_Matching = "Grade_2/" . "Lesson_6/" . "Matching/";


        $G2_L6_Game279_Matching = [

            ['Dark eyes', 'Short hair', 'Long hair', 'Round face', "Oval face"],

        ];

        $G2_L6_Game279_Matching_image = [

            ['long-hair', 'oval-face', 'short-hair', 'dark-eyes', "round-face"],

        ];

        $G2_L6_Game279_Matching_image_que = [

            'long hair', 'oval face', 'short hair', 'dark eyes', "round face",

        ];
        $G2_L6_Game279_Matching_image_que_index = 0;

        for ($i = 0; $i < count($G2_L6_Game279_Matching); $i++) {

            foreach ($G2_L6_Game279_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 279, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G2_L6_Matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G2_L6_Game279_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 279, 'round' => $i + 1, 'q_content' => $G2_L6_Game279_Matching_image_que[$G2_L6_Game279_Matching_image_que_index],
                        'q_image' => $l6_G279_image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G2_L6_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
                $G2_L6_Game279_Matching_image_que_index++;
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 6 Game 280 ( speaking )
        ////////////////////////////////////////////////////////

        $l6_G280_image = $domain . "/storage/images/Grade_2/lesson_6/Speaking/";
        $G2_L6_Speaking = "Grade_2/" . "Lesson_6/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 280,  'q_image' => $l6_G280_image . "long-hair.png", "q_content" => "Look at the picture and say."],
            ['round' => 2, 'game_id' => 280,  'q_image' => $l6_G280_image . "short-hair.png", "q_content" => "Look at the picture and say."],
            ['round' => 3, 'game_id' => 280,  'q_image' => $l6_G280_image . "oval-face.png", "q_content" => "Look at the picture and say."],
            ['round' => 4, 'game_id' => 280,  'q_image' => $l6_G280_image . "dark-eyes.png", "q_content" => "Look at the picture and say."],
            ['round' => 5, 'game_id' => 280,  'q_image' => $l6_G280_image . "round-face.png", "q_content" => "Look at the picture and say."],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 7 Game 281 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 281, 'a_content' => 'lesson_7_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 281, 'a_content' => 'lesson_7_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 7 Game 282 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l7_G282_image = $domain . "/storage/images/Grade_2/lesson_7/listen_n_repeat/";
        $G2_L7_listen_n_repeat = "Grade_2/" . "Lesson_7/" . "listen_n_repeat/";


        $ansL7_G282 = [
            "Eagle", "Earth", "Egg", "Elbow",  "Elephant", "Envelope", "Exam", "Eyes", "Fan", "Farm", "Farmer", "Fish", "Flower", "Fox", "Frog", "Fruit"
        ];

        $G2_L7_Game282_index = 0;

        foreach ($ansL7_G282 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 282, 'a_content' => $key, 'a_image' => $l7_G282_image . $ansL7_G282[$G2_L7_Game282_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L7_listen_n_repeat . strtolower($ansL7_G282[$G2_L7_Game282_index]) . ".mp3"
                ],
            ]);
            $G2_L7_Game282_index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 7 Game 283 (  Trace Word  )
        ////////////////////////////////////////////////////////

        $l7_G283_image = $domain . "/storage/images/Grade_2/lesson_7/trace/";
        $G2_L7_trace_word = "Grade_2/" . "Lesson_7/" . "trace/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 283, 'q_audio' =>  $AudioDomain . $G2_L7_trace_word . "egg" . ".mp3", 'q_content' =>  null, 'q_image' => $l7_G283_image . "egg" . ".png", 'a_content' => "egg"],
            ['round' => 1, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_g" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_g" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 2, 'game_id' => 283, 'q_audio' =>  $AudioDomain . $G2_L7_trace_word . "fish" . ".mp3", 'q_content' =>  null, 'q_image' => $l7_G283_image . "fish" . ".png", 'a_content' => "fish"],
            ['round' => 2, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "f" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_i" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_s" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_h" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 3, 'game_id' => 283, 'q_audio' =>  $AudioDomain . $G2_L7_trace_word . "fan" . ".mp3", 'q_content' =>  null, 'q_image' => $l7_G283_image . "fan" . ".png", 'a_content' => "fan"],
            ['round' => 3, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "f" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_n" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 4, 'game_id' => 283, 'q_audio' =>  $AudioDomain . $G2_L7_trace_word . "ear" . ".mp3", 'q_content' =>  null, 'q_image' => $l7_G283_image . "ear" . ".png", 'a_content' => "ear"],
            ['round' => 4, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_r" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 5, 'game_id' => 283, 'q_audio' =>  $AudioDomain . $G2_L7_trace_word . "eagle" . ".mp3", 'q_content' =>  null, 'q_image' => $l7_G283_image . "eagle" . ".png", 'a_content' => "eagle"],
            ['round' => 5, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_g" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_l" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_e" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 6, 'game_id' => 283, 'q_audio' =>  $AudioDomain . $G2_L7_trace_word . "fox" . ".mp3", 'q_content' =>  null, 'q_image' => $l7_G283_image . "fox" . ".png", 'a_content' => "fox"],
            ['round' => 6, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "f" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 6, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 6, 'game_id' => 283, 'q_audio' => null, 'q_content' =>  $l7_G283_image . "small_x" . ".png", 'q_image' => null, 'a_content' => null],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 7 Game 284 (  Matching  )
        ////////////////////////////////////////////////////////

        $l7_G284_image = $domain . "/storage/images/Grade_2/lesson_7/Matching/";
        $G2_L7_Matching = "Grade_2/" . "Lesson_7/" . "Matching/";


        $G2_L7_Game284_Matching = [

            ['Fan', 'Farmer', 'Flower', 'Earth', "Eagle"],
            ['Fox', 'Fish', 'Frog', 'Elbow', "Envelope"],

        ];

        $G2_L7_Game284_Matching_image = [

            ['earth', 'fan', 'eagle', 'farmer', "flower"],
            ['fish', 'frog', 'fox', 'envelope', 'elbow'],

        ];


        for ($i = 0; $i < count($G2_L7_Game284_Matching); $i++) {

            foreach ($G2_L7_Game284_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 284, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G2_L7_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }

            foreach ($G2_L7_Game284_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 284, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l7_G284_image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G2_L7_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }





        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 7 Game 285 ( writing )
        ////////////////////////////////////////////////////////

        $G2_L7_writing = "Grade_2/" . "Lesson_7/" . "writing/";
        $l7G285image = $domain . "/storage/images/Grade_2/lesson_7/writing/";


        $q_G285 = [
            ["N", "V", "E", "E", "O", "P", "L", "E"],
            ["H", "I", "S", "F"],
            ["M", "E", "A", "R", "R", "F"],
            ["U", "I", "S", "T", "R", "F"],
            ["L", "E", "O", "W", "F", "R"],
            ["R", "F", "O", "G"],
            ["A", "F", "N"],
            ["Y", "E", "S", "E"],
            ["L", "O", "E", "B", "W"],
            ["H", "P", "E", "A", "N", "L", "E", "T"],


        ];

        $a_G285 = [
            "ENVELOPE", "FISH", "FARMER", "FRUITS", "FLOWER", "FROG", "FAN", "EYES", "ELBOW", "ELEPHANT"
        ];

        $G285_Index = 0;

        for ($i = 0; $i < count($q_G285); $i++) {
            foreach ($q_G285[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 285, 'q_content' => $j, 'q_audio' => $AudioDomain . $G2_L7_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 285, 'q_image' => $l7G285image . str_replace(' ', '', strtolower($a_G285[$G285_Index])) . ".png", 'a_content' => $a_G285[$G285_Index], 'a_audio' => $AudioDomain . $G2_L7_writing . strtolower($a_G285[$G285_Index]) . ".mp3"],
            ]);
            $G285_Index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 7 Game 286 ( speaking )
        ////////////////////////////////////////////////////////


        $G2_L7_speaking = "Grade_2/" . "Lesson_7/" . "speaking/";
        $l7G286image = $domain . "/storage/images/Grade_2/lesson_7/speaking/";



        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 286, 'a_image' => $l7G286image . "jane.png", "a_audio" => $AudioDomain . $G2_L7_speaking . "SubBlock_Hello-Im-Jane-Im-excited.mp3", "a_conver" => "Hello, I'm Jane. I'm excited. \nI like elephant. I don't like \nfox. What about you?", "background" =>  $l7G286image . "bg.jpg"],
            ['round' => 1, 'game_id' => 286, 'a_image' => $l7G286image . "chris-right.png", "a_audio" => $AudioDomain . $G2_L7_speaking . "Hi-my-names-Chris-Im-happy.mp3", "a_conver" => "Hi, my name's Chris. \nI'm happy. I like eggs. \nI don't like fish.", "background" =>  $l7G286image . "bg.jpg"],

            ['round' => 2, 'game_id' => 286, 'a_image' => $l7G286image . "jack.png", "a_audio" => $AudioDomain . $G2_L7_speaking . "Hi-my-names-Jack-Im-joyful.mp3", "a_conver" => "Hi, my name's Jack. \nI'm joyful. I like fruit \nand chocolate. I don't \nlike fish and eagle. \nWhat about you? ", "background" =>  $l7G286image . "bg.jpg"],
            ['round' => 2, 'game_id' => 286, 'a_image' => $l7G286image . "chris.png", "a_audio" => null, "a_conver" => null, "background" =>  $l7G286image . "bg.jpg"],

        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 3, 'game_id' => 286,  'q_image' => $l7G286image . "teacher.png", "q_content" => "Hi, I'm _____ (add your name). I'm _____. I like ____ and _____. I don't like ____ and _____. What about you?", "q_conver" => "Now talk about yourself.", "round_instruction" => $AudioDomain . $G2_L4_speaking . "Now-talk-about-yourself" . ".mp3"],
        ]);






        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 8 Game 288 (  Listen and write  )
        ////////////////////////////////////////////////////////

        $l8_G288_image = $domain . "/storage/images/Grade_2/lesson_8/listen_n_write/";
        $G2_L8_listen_n_write = "Grade_2/" . "Lesson_8/" . "listen_n_write/";


        $ansL8_G288 = [
            "beautiful-ugly", "big-small", "early-late", "early-late-2",  "fast-slow", "fat-thin", "short-tall"
        ];

        $G2_L8_Game288_index = 0;

        foreach ($ansL8_G288 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 288, 'a_content' => $key, 'a_image' => $l8_G288_image . $ansL8_G288[$G2_L8_Game288_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L8_listen_n_write . strtolower($ansL8_G288[$G2_L8_Game288_index]) . ".mp3"
                ],
            ]);
            $G2_L8_Game288_index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 8 Game 285 ( writing )
        ////////////////////////////////////////////////////////

        $G2_L8_writing = "Grade_2/" . "Lesson_8/" . "writing/";
        $l8G289image = $domain . "/storage/images/Grade_2/lesson_8/writing/";


        $q_G289 = [

            ["I", "B", "P", "C", "U", "G"],
            ["L", "C", "S", "A", "M", "U", "P", "L"],
            ["A", "G", "T", "D", "F", "O"],
            ["H", "G", "I", "T", "D", "N", "O"],
            ["A", "T", "E", "L", "L", "E", "R", "T"],
            ["S", "O", "E", "R", "T", "H", "E", "R", "T"],

        ];

        $a_G289 = [
            "BIGCUP", "SMALLCUP", "FATDOG", "THINDOG", "TALLTREE", "SHORTTREE"
        ];

        $G289_Index = 0;

        for ($i = 0; $i < count($q_G289); $i++) {
            foreach ($q_G289[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 289, 'q_content' => $j, 'q_audio' => $AudioDomain . $G2_L8_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 289, 'q_image' => $l8G289image . str_replace(' ', '', strtolower($a_G289[$G289_Index])) . ".png", 'a_content' => $a_G289[$G289_Index], 'a_audio' => $AudioDomain . $G2_L8_writing . strtolower($a_G289[$G289_Index]) . ".mp3"],
            ]);
            $G289_Index++;
        }


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 8 Game 290 ( look and write )
        ////////////////////////////////////////////////////////

        $G2_L8_look_write = "Grade_2/" . "Lesson_8/" . "look_write/";
        $l8_G290_image = $domain . "/storage/images/Grade_2/lesson_8/look_write/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 290, "q_image" => $l8_G290_image . "tall-tree.png", "q_conver" => "What's this?", 'q_content' => "It's a tree.", 'a_content' => 0],
            ['round' => 1, 'game_id' => 290, "q_image" => null, "q_conver" => null, 'q_content' => "It's tall.", 'a_content' => 0],
            ['round' => 1, 'game_id' => 290, "q_image" => null, "q_conver" => null, 'q_content' => "It's a tall tree.", 'a_content' => 1],

            ['round' => 2, 'game_id' => 290, "q_image" => $l8_G290_image . "short-tree.png", "q_conver" => "What's this?", 'q_content' => "It's a short tree.", 'a_content' => 1],
            ['round' => 2, 'game_id' => 290, "q_image" => null, "q_conver" => null, 'q_content' => "It's short.", 'a_content' => 0],
            ['round' => 2, 'game_id' => 290, "q_image" => null, "q_conver" => null, 'q_content' => "It's a tree.", 'a_content' => 0],

            ['round' => 3, 'game_id' => 290, "q_image" => $l8_G290_image . "small-cup.png", "q_conver" => "What's this?", 'q_content' => "It's small.", 'a_content' => 0],
            ['round' => 3, 'game_id' => 290, "q_image" => null, "q_conver" => null, 'q_content' => "It's a cup.", 'a_content' => 0],
            ['round' => 3, 'game_id' => 290, "q_image" => null, "q_conver" => null, 'q_content' => "It's a small cup.", 'a_content' => 1],

            ['round' => 4, 'game_id' => 290, "q_image" => $l8_G290_image . "big-cup.png", "q_conver" => "What's this?", 'q_content' => "It's a cup.", 'a_content' => 0],
            ['round' => 4, 'game_id' => 290, "q_image" => null, "q_conver" => null, 'q_content' => "It's big.", 'a_content' => 0],
            ['round' => 4, 'game_id' => 290, "q_image" => null, "q_conver" => null, 'q_content' => "It's a big cup.", 'a_content' => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 8 Game 291 ( reading passage )
        ////////////////////////////////////////////////////////

        $G2_L8_reading_passage_path = "Grade_2/" . "Lesson_8/" . "reading_passage/";
        $l8_G291_image = $domain . "/storage/images/Grade_2/lesson_8/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 291, "q_audio" =>  $AudioDomain . $G2_L8_reading_passage_path . "sister.mp3", 'q_content' => "sister", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 291, "q_audio" =>  $AudioDomain . $G2_L8_reading_passage_path . "brother.mp3", 'q_content' => "brother", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 291, "q_audio" => $AudioDomain . $G2_L8_reading_passage_path . "SubBlock_Who-is-Rosy-Chriss-Sister-br.mp3", "q_conver" => "Who is Rosy? Chris' _____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 291, "q_audio" => $AudioDomain . $G2_L8_reading_passage_path . "SubBlock_Chris-is-surprised-because-his.mp3", "q_content" => null, 'q_conver' => "Chris is surprised because his mother makes a big cake for him. Today is his birthday. He is 10 years old now. His little sister, Rosy is happy. She likes cake and chocolate. Chris' father, Max is excited too. He has a great present for Chris.  Chris' family has a birthday party. They sing, clap their hands, stamp their feet, jump on high, and say, 'Happy birthday, Chris!'", 'a_content' => null, "background" => $l8_G291_image . "bg.jpg"],


            ['round' => 2, 'game_id' => 291, "q_audio" =>  $AudioDomain . $G2_L8_reading_passage_path . "father.mp3", 'q_content' => "father", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 291, "q_audio" =>  $AudioDomain . $G2_L8_reading_passage_path . "brother.mp3", 'q_content' => "brother", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 291, "q_audio" => $AudioDomain . $G2_L8_reading_passage_path . "SubBlock_Who-is-Max-Chriss-father-bro.mp3", "q_conver" =>  "Who is Max? Chris' _____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 291, "q_audio" => $AudioDomain . $G2_L8_reading_passage_path . "SubBlock_Chris-is-surprised-because-his.mp3", "q_content" => null, 'q_conver' => "Chris is surprised because his mother makes a big cake for him. Today is his birthday. He is 10 years old now. His little sister, Rosy is happy. She likes cake and chocolate. Chris' father, Max is excited too. He has a great present for Chris.  Chris' family has a birthday party. They sing, clap their hands, stamp their feet, jump on high, and say, 'Happy birthday, Chris!'", 'a_content' => null, "background" => $l8_G291_image . "bg.jpg"],


            ['round' => 3, 'game_id' => 291, "q_audio" =>  $AudioDomain . $G2_L8_reading_passage_path . "party.mp3", 'q_content' => "party",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 291, "q_audio" =>  $AudioDomain . $G2_L8_reading_passage_path . "dinner.mp3", 'q_content' => "dinner",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 291, "q_audio" => $AudioDomain . $G2_L8_reading_passage_path . "SubBlock_The-family-has-a-party-dinner.mp3", "q_conver" => "The family has a _____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 291, "q_audio" => $AudioDomain . $G2_L8_reading_passage_path . "SubBlock_Chris-is-surprised-because-his.mp3", "q_content" => null, 'q_conver' => "Chris is surprised because his mother makes a big cake for him. Today is his birthday. He is 10 years old now. His little sister, Rosy is happy. She likes cake and chocolate. Chris' father, Max is excited too. He has a great present for Chris.  Chris' family has a birthday party. They sing, clap their hands, stamp their feet, jump on high, and say, 'Happy birthday, Chris!'", 'a_content' => null, "background" => $l8_G291_image . "bg.jpg"],


            ['round' => 4, 'game_id' => 291, "q_audio" =>  $AudioDomain . $G2_L8_reading_passage_path . "ten.mp3", 'q_content' => "10", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 291, "q_audio" =>  $AudioDomain . $G2_L8_reading_passage_path . "nine.mp3", 'q_content' => "9", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 291, "q_audio" => $AudioDomain . $G2_L8_reading_passage_path . "SubBlock_How-old-is-he-10-9.mp3", "q_conver" => "How old is he?", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 291, "q_audio" => $AudioDomain . $G2_L8_reading_passage_path . "SubBlock_Chris-is-surprised-because-his.mp3", "q_content" => null, 'q_conver' => "Chris is surprised because his mother makes a big cake for him. Today is his birthday. He is 10 years old now. His little sister, Rosy is happy. She likes cake and chocolate. Chris' father, Max is excited too. He has a great present for Chris.  Chris' family has a birthday party. They sing, clap their hands, stamp their feet, jump on high, and say, 'Happy birthday, Chris!'", 'a_content' => null, "background" => $l8_G291_image . "bg.jpg"],


            ['round' => 5, 'game_id' => 291, "q_audio" =>  $AudioDomain . $G2_L8_reading_passage_path . "exam.mp3", 'q_content' => "exam", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 291, "q_audio" =>  $AudioDomain . $G2_L8_reading_passage_path . "birthday.mp3", 'q_content' => "birthday", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 291, "q_audio" => $AudioDomain . $G2_L8_reading_passage_path . "SubBlock_Today-is-Chris-exam-birthday.mp3", "q_conver" => "Today is Chris' _____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 291, "q_audio" => $AudioDomain . $G2_L8_reading_passage_path . "SubBlock_Chris-is-surprised-because-his.mp3", "q_content" => null, 'q_conver' => "Chris is surprised because his mother makes a big cake for him. Today is his birthday. He is 10 years old now. His little sister, Rosy is happy. She likes cake and chocolate. Chris' father, Max is excited too. He has a great present for Chris.  Chris' family has a birthday party. They sing, clap their hands, stamp their feet, jump on high, and say, 'Happy birthday, Chris!'", 'a_content' => null, "background" => $l8_G291_image . "bg.jpg"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 8 Game 292 ( speaking )
        ////////////////////////////////////////////////////////

        $l8_G292_image = $domain . "/storage/images/Grade_2/lesson_8/Speaking/";
        $G2_L8_Speaking = "Grade_2/" . "Lesson_8/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 292,  'q_image' => $l8_G292_image . "short-tree.png", "q_content" => "What is it?"],
            ['round' => 2, 'game_id' => 292,  'q_image' => $l8_G292_image . "cup.png", "q_content" => "What is it?"],
            ['round' => 3, 'game_id' => 292,  'q_image' => $l8_G292_image . "tall-tree.png", "q_content" => "What is it?"],
            ['round' => 4, 'game_id' => 292,  'q_image' => $l8_G292_image . "thin-dog.png", "q_content" => "What is it?"],
            ['round' => 5, 'game_id' => 292,  'q_image' => $l8_G292_image . "fat-dog.png", "q_content" => "What is it?"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 9 Game 293 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l9_G293_image = $domain . "/storage/images/Grade_2/lesson_9/listen_n_repeat/";
        $G2_L9_listen_n_repeat = "Grade_2/" . "Lesson_9/" . "listen_n_repeat/";


        $ansL9_G293 = [
            "Girl", "Glass", "Goose", "Grapes",  "Guava", "Guitar", "Gym", "Hand", "Hat", "Health", "Heaven", "History", "Homework", "Horse"
        ];

        $G2_L9_Game293_index = 0;

        foreach ($ansL9_G293 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 293, 'a_content' => $key, 'a_image' => $l9_G293_image . $ansL9_G293[$G2_L9_Game293_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L9_listen_n_repeat . strtolower($ansL9_G293[$G2_L9_Game293_index]) . ".mp3"
                ],
            ]);
            $G2_L9_Game293_index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 9 Game 294 (  Trace Word  )
        ////////////////////////////////////////////////////////

        $l9_G294_image = $domain . "/storage/images/Grade_2/lesson_9/trace_word/";
        $G2_L9_trace_word = "Grade_2/" . "Lesson_9/" . "trace_word/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 294, 'q_audio' =>  $AudioDomain . $G2_L9_trace_word . "goose" . ".mp3", 'q_content' =>  null, 'q_image' => $l9_G294_image . "goose" . ".png", 'a_content' => "goose"],
            ['round' => 1, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "g" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_s" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_e" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 2, 'game_id' => 294, 'q_audio' =>  $AudioDomain . $G2_L9_trace_word . "hat" . ".mp3", 'q_content' =>  null, 'q_image' => $l9_G294_image . "hat" . ".png", 'a_content' => "hat"],
            ['round' => 2, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "h" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_t" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 3, 'game_id' => 294, 'q_audio' =>  $AudioDomain . $G2_L9_trace_word . "hand" . ".mp3", 'q_content' =>  null, 'q_image' => $l9_G294_image . "hand" . ".png", 'a_content' => "hand"],
            ['round' => 3, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "h" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_n" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_d" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 4, 'game_id' => 294, 'q_audio' =>  $AudioDomain . $G2_L9_trace_word . "gym" . ".mp3", 'q_content' =>  null, 'q_image' => $l9_G294_image . "gym" . ".png", 'a_content' => "gym"],
            ['round' => 4, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "g" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_y" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_m" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 5, 'game_id' => 294, 'q_audio' =>  $AudioDomain . $G2_L9_trace_word . "girl" . ".mp3", 'q_content' =>  null, 'q_image' => $l9_G294_image . "girl" . ".png", 'a_content' => "girl"],
            ['round' => 5, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "g" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_i" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_r" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 294, 'q_audio' => null, 'q_content' =>  $l9_G294_image . "small_l" . ".png", 'q_image' => null, 'a_content' => null],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 9 Game 295 (  Matching  )
        ////////////////////////////////////////////////////////

        $l9_G295_image = $domain . "/storage/images/Grade_2/lesson_9/Matching/";
        $G2_L9_Matching = "Grade_2/" . "Lesson_9/" . "Matching/";


        $G2_L9_Game295_Matching = [

            ['Guava', 'Goose', 'House', 'Horse', "Hat"],
            ['Hand', 'Glass', 'Girl', 'Gym', "Homework"],

        ];

        $G2_L9_Game295_Matching_image = [

            ['house', 'horse', 'guava', 'hat', "goose"],
            ['girl', 'homework', 'glass', 'hand', 'gym'],

        ];


        for ($i = 0; $i < count($G2_L9_Game295_Matching); $i++) {

            foreach ($G2_L9_Game295_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 295, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G2_L9_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }

            foreach ($G2_L9_Game295_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 295, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l9_G295_image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G2_L9_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 9 Game 296 ( writing )
        ////////////////////////////////////////////////////////

        $G2_L9_writing = "Grade_2/" . "Lesson_9/" . "writing/";
        $l9G296image = $domain . "/storage/images/Grade_2/lesson_9/writing/";


        $q_G296 = [

            ["I", "S", "R", "H", "O", "T", "Y"],
            ["A", "V", "E", "H", "E", "N"],
            ["A", "H", "T", "L", "H", "E"],
            ["A", "G", "V", "U", "A"],
            ["R", "H", "E", "O", "S"],
            ["G", "O", "E", "O", "S"],
            ["R", "I", "L", "G"],
            ["D", "A", "N", "H"],
            ["A", "T", "H"],
            ["M", "Y", "G"],

        ];

        $a_G296 = [
            "HISTORY", "HEAVEN", "HEALTH", "GUAVA", "HORSE", "GOOSE", "GIRL", "HAND", "HAT", "GYM"
        ];

        $G296_Index = 0;

        for ($i = 0; $i < count($q_G296); $i++) {
            foreach ($q_G296[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 296, 'q_content' => $j, 'q_audio' => $AudioDomain . $G2_L9_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 296, 'q_image' => $l9G296image . str_replace(' ', '', strtolower($a_G296[$G296_Index])) . ".png", 'a_content' => $a_G296[$G296_Index], 'a_audio' => $AudioDomain . $G2_L9_writing . strtolower($a_G296[$G296_Index]) . ".mp3"],
            ]);
            $G296_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 9 Game 297 ( speaking )
        ////////////////////////////////////////////////////////

        $l9_G297_image = $domain . "/storage/images/Grade_2/lesson_9/Speaking/";
        $G2_L9_Speaking = "Grade_2/" . "Lesson_9/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 297,  'q_image' => $l9_G297_image . "thin-dog.png", "q_content" => "Look at the picture and speak. \nWhat about you? Do you like it?"],
            ['round' => 2, 'game_id' => 297,  'q_image' => $l9_G297_image . "yellowhat.png", "q_content" => "Look at the picture and speak. What about you? Do you like it?"],
            ['round' => 3, 'game_id' => 297,  'q_image' => $l9_G297_image . "house.png", "q_content" => "Look at the picture and speak. \nWhat about you? Do you like it?"],
            ['round' => 4, 'game_id' => 297,  'q_image' => $l9_G297_image . "blue-hat.png", "q_content" => "Look at the picture and speak. \nWhat about you? Do you like it?"],
            ['round' => 5, 'game_id' => 297,  'q_image' => $l9_G297_image . "fat-dog.png", "q_content" => "Look at the picture and speak. \nWhat about you? Do you like it?"],
            ['round' => 6, 'game_id' => 297,  'q_image' => $l9_G297_image . "drink.png", "q_content" => "Look at the picture and speak. \nWhat about you? Do you like it?"],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 10 Game 298 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 298, 'a_content' => 'lesson_10_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 298, 'a_content' => 'lesson_10_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 10 Game 299 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l10_G299_image = $domain . "/storage/images/Grade_2/lesson_10/listen_n_repeat/";
        $G2_L10_listen_n_repeat = "Grade_2/" . "Lesson_10/" . "listen_n_repeat/";


        $ansL10_G299 = [
            "new-house", "old-house", "heavy-bag", "light-bag",  "hot-coffee", "cold-water", "easy-lesson", "difficult-lesson", "long-pencil", "short-pencil", "clean-jacket", "dirty-jacket"
        ];

        $G2_L10_Game299_index = 0;

        foreach ($ansL10_G299 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 299, 'a_content' => $key, 'a_image' => $l10_G299_image . $ansL10_G299[$G2_L10_Game299_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L10_listen_n_repeat . strtolower($ansL10_G299[$G2_L10_Game299_index]) . ".mp3"
                ],
            ]);
            $G2_L10_Game299_index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 10 Game 300 (  look and write  )
        ////////////////////////////////////////////////////////

        $l10_G300_image = $domain . "/storage/images/Grade_2/lesson_10/look_n_write/";
        $G2_L10_look_n_write = "Grade_2/" . "Lesson_10/" . "look_n_write/";

        $q_content_G2_L10_Game300_img = ["heavy-bag", "light-bag", "easy-lesson", "difficult-lesson", "clean-jacket", "dirty-jacket", "new-house", "old-house"];

        $a_content_G2_L10_Game300 = [
            'heavy bag', 'light bag', 'easy lesson', 'difficult lesson', 'clean jacket', 'dirty jacket', 'new house', 'old house'
        ];

        foreach ($q_content_G2_L10_Game300_img as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 300, 'round' => $key + 1,
                    'q_image' => $l10_G300_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G2_L10_look_n_write . $value . ".mp3",
                    'a_content' => $a_content_G2_L10_Game300[$key],
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 10 Game 301 ( speaking )
        ////////////////////////////////////////////////////////

        $l10_G301_image = $domain . "/storage/images/Grade_2/lesson_10/Speaking/";
        $G2_L10_Speaking = "Grade_2/" . "Lesson_10/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 301,  'q_image' => $l10_G301_image . "new-house.png", "q_content" => "Look at the picture and speak."],
            ['round' => 2, 'game_id' => 301,  'q_image' => $l10_G301_image . "old-house.png", "q_content" => "Look at the picture and speak."],
            ['round' => 3, 'game_id' => 301,  'q_image' => $l10_G301_image . "coffee.png", "q_content" => "Look at the picture and speak."],
            ['round' => 4, 'game_id' => 301,  'q_image' => $l10_G301_image . "ice.png", "q_content" => "Look at the picture and speak."],
            ['round' => 5, 'game_id' => 301,  'q_image' => $l10_G301_image . "girl.png", "q_content" => "Look at the picture and speak."],
            ['round' => 6, 'game_id' => 301,  'q_image' => $l10_G301_image . "boy.png", "q_content" => "Look at the picture and speak."],
            ['round' => 7, 'game_id' => 301,  'q_image' => $l10_G301_image . "full-bag.png", "q_content" => "Look at the picture and speak."],
            ['round' => 8, 'game_id' => 301,  'q_image' => $l10_G301_image . "empty-bag.png", "q_content" => "Look at the picture and speak."],
            ['round' => 9, 'game_id' => 301,  'q_image' => $l10_G301_image . "short-pen.png", "q_content" => "Look at the picture and speak."],
            ['round' => 10, 'game_id' => 301,  'q_image' => $l10_G301_image . "long-pen.png", "q_content" => "Look at the picture and speak."],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 11 Game 302 ( Listen and Write )
        ////////////////////////////////////////////////////////

        $l11_G302_image = $domain . "/storage/images/Grade_2/lesson_11/listen_n_write/";
        $G2_L11_listen_n_write = "Grade_2/" . "Lesson_11/" . "listen_n_write/";

        $g2_l11_Game302_rearrange_the_letter_q1 = [
            ['N', 'W', 'E', 'L', 'Y', 'O', 'W', 'L', 'E'],
            ['A', 'E', 'V', 'Y', 'H'],
            ['G', 'N', 'O', 'L'],
            ['I', 'G', 'B', 'H', 'W', 'I', 'E', 'T'],
            ['R', 'E', 'E', 'G', 'N', 'A', 'L', 'S', 'M', 'L'],
        ];

        $g2_l11_Game302_rearrange_the_letter_q2 = [
            "Is this your car? \nNo, it isn't. My car is ____.\n\nIs it red? No, it isn't. It is ____.",

            "Is this your bag? Yes, it is. \nIs it light? No, it isn't. It is ____.",

            "Is this your pencil? Yes, it is. \nIs it short? No, it isn't. It is ____.",

            "Is this your cat? \nNo, it isn't. My cat is ____.\n\nIs it black? No, it isn't. It is ____.",

            "Is this your frog? \nNo, it isn't. My frog is ____.\n\nIs it yellow? No, it isn't. It is ____.",
        ];

        $g2_l11_Game302_rearrange_the_letter_a = [
            'new yellow', 'heavy', 'long', 'big white', 'small green',
        ];

        $g2_l11_Game302_rearrange_the_letter_a_conver = [
            "Is this your car? \nNo, it isn't. My car is new.\n\nIs it red? No, it isn't. It is yellow.",

            "Is this your bag? Yes, it is. \nIs it light? No, it isn't. It is heavy.",

            "Is this your pencil? Yes, it is. \nIs it short? No, it isn't. It is long.",

            "Is this your cat? \nNo, it isn't. My cat is big.\n\nIs it black? No, it isn't. It is white.",

            "Is this your frog? \nNo, it isn't. My frog is small.\n\nIs it yellow? No, it isn't. It is green.",

        ];

        $g2_l11_Game302_rearrange_the_letter_a_image_audio = [
            'car', 'bag', 'pen', 'cat', 'frog'
        ];




        for ($i = 0; $i < count($g2_l11_Game302_rearrange_the_letter_q1); $i++) {

            foreach ($g2_l11_Game302_rearrange_the_letter_q1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 302,
                        'q_audio' => $AudioDomain . $G2_L11_listen_n_write . strtoupper($word) . ".mp3", 'q_content' => $word,
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 302,
                    'q_audio' => $AudioDomain . $G2_L11_listen_n_write . strtolower($g2_l11_Game302_rearrange_the_letter_a_image_audio[$i]) . ".mp3",
                    'q_image' => $l11_G302_image .  strtolower($g2_l11_Game302_rearrange_the_letter_a_image_audio[$i]) . ".png",
                    'q_content' => $g2_l11_Game302_rearrange_the_letter_q2[$i],
                    'a_conver' => $g2_l11_Game302_rearrange_the_letter_a_conver[$i],
                    'a_content' => $g2_l11_Game302_rearrange_the_letter_a[$i]
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 11 Game 303 ( speaking )
        ////////////////////////////////////////////////////////

        $l11_G303_image = $domain . "/storage/images/Grade_2/lesson_11/Speaking/";
        $G2_L11_Speaking = "Grade_2/" . "Lesson_11/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 303,  'q_image' => $l11_G303_image . "hat.png", "q_content" => "Look at the picture and speak."],
            ['round' => 2, 'game_id' => 303,  'q_image' => $l11_G303_image . "jacket.png", "q_content" => "Look at the picture and speak."],
            ['round' => 3, 'game_id' => 303,  'q_image' => $l11_G303_image . "boat.png", "q_content" => "Look at the picture and speak."],
            ['round' => 4, 'game_id' => 303,  'q_image' => $l11_G303_image . "bicycle.png", "q_content" => "Look at the picture and speak."],
            ['round' => 5, 'game_id' => 303,  'q_image' => $l11_G303_image . "boy.png", "q_content" => "Look at the picture and speak."],
            ['round' => 6, 'game_id' => 303,  'q_image' => $l11_G303_image . "dog.png", "q_content" => "Look at the picture and speak."],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 12 Game 304 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 304, 'a_content' => 'lesson_12_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 304, 'a_content' => 'lesson_12_video_global', 'isLocal' => 0]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 12 Game 305  (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l12_G305_image = $domain . "/storage/images/Grade_2/lesson_12/listen_n_repeat/";
        $G2_L12_listen_n_repeat = "Grade_2/" . "Lesson_12/" . "listen_n_repeat/";


        $ansL10_G305 = [
            "Biscuits", "Bread", "Cake", "Fish",  "Fried-noodles", "Fried-rice", "Fruits", "Hamburger", "Juice", "Meat", "Milk", "Salad", "Sandwich", "Vegetables"
        ];

        $G2_L12_Game305_index = 0;

        foreach ($ansL10_G305 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 305, 'a_content' => $key, 'a_image' => $l12_G305_image . $ansL10_G305[$G2_L12_Game305_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L12_listen_n_repeat . strtolower($ansL10_G305[$G2_L12_Game305_index]) . ".mp3"
                ],
            ]);
            $G2_L12_Game305_index++;
        }


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 12 Game 306 (  listen and choose  )
        ////////////////////////////////////////////////////////

        $l12G306image = $domain . "/storage/images/Grade_2/lesson_12/listen_n_choose/";
        $G2_L12_listen_n_choose_path = "Grade_2/" . "Lesson_12/" . "listen_n_choose/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 306, 'q_audio' => $AudioDomain . $G2_L12_listen_n_choose_path . "Do-you-like-cake.mp3", 'q_conver' => "Do you like cake?", 'q_content' =>  "Yes, I do.", 'a_content' => 1, 'q_image' =>  $l12G306image . "cake.png"],
            ['round' => 1, 'game_id' => 306, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "No, I don't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'game_id' => 306, 'q_audio' => $AudioDomain . $G2_L12_listen_n_choose_path . "SubBlock_Do-you-like-Hamburger-Yes-I-d.mp3", 'q_conver' => "Do you like hamburger?", 'q_content' =>  "Yes, I do.", 'a_content' => 0, 'q_image' =>  $l12G306image . "hamburger.png"],
            ['round' => 2, 'game_id' => 306, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "No, I don't.", 'a_content' => 1, 'q_image' => null],

            ['round' => 3, 'game_id' => 306, 'q_audio' => $AudioDomain . $G2_L12_listen_n_choose_path . "Do-you-like-biscuits.mp3", 'q_conver' => "Do you like biscuits?", 'q_content' =>  "Yes, I do.", 'a_content' => 0, 'q_image' =>  $l12G306image . "cookie.png"],
            ['round' => 3, 'game_id' => 306, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "No, I don't.", 'a_content' => 1, 'q_image' => null],

            ['round' => 4, 'game_id' => 306, 'q_audio' => $AudioDomain . $G2_L12_listen_n_choose_path . "Do-you-like-milk.mp3", 'q_conver' => "Do you like milk?", 'q_content' =>  "Yes, I do.", 'a_content' => 1, 'q_image' =>  $l12G306image . "milk.png"],
            ['round' => 4, 'game_id' => 306, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "No, I don't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 5, 'game_id' => 306, 'q_audio' => $AudioDomain . $G2_L12_listen_n_choose_path . "Do-you-like-vegetables.mp3", 'q_conver' => "Do you like vegetables?", 'q_content' =>  "Yes, I do.", 'a_content' => 0, 'q_image' =>  $l12G306image . "vege.png"],
            ['round' => 5, 'game_id' => 306, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "No, I don't.", 'a_content' => 1, 'q_image' => null],

            ['round' => 6, 'game_id' => 306, 'q_audio' => $AudioDomain . $G2_L12_listen_n_choose_path . "SubBlock_Do-you-like-bread-Yes-I-do-No.mp3", 'q_conver' => "Do you like bread?", 'q_content' =>  "Yes, I do.", 'a_content' => 1, 'q_image' =>  $l12G306image . "bread.png"],
            ['round' => 6, 'game_id' => 306, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "No, I don't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 7, 'game_id' => 306, 'q_audio' => $AudioDomain . $G2_L12_listen_n_choose_path . "Do-you-like-fruit.mp3", 'q_conver' => "Do you like fruits?", 'q_content' =>  "Yes, I do.", 'a_content' => 1, 'q_image' =>  $l12G306image . "fruit.png"],
            ['round' => 7, 'game_id' => 306, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "No, I don't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 8, 'game_id' => 306, 'q_audio' => $AudioDomain . $G2_L12_listen_n_choose_path . "Do-you-like-friend-rice.mp3", 'q_conver' => "Do you like fried rice?", 'q_content' =>  "Yes, I do.", 'a_content' => 1, 'q_image' =>  $l12G306image . "fried-rice.png"],
            ['round' => 8, 'game_id' => 306, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "No, I don't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 9, 'game_id' => 306, 'q_audio' => $AudioDomain . $G2_L12_listen_n_choose_path . "Do-you-like-salad.mp3", 'q_conver' => "Do you like salad?", 'q_content' =>  "Yes, I do.", 'a_content' => 1, 'q_image' =>  $l12G306image . "salad.png"],
            ['round' => 9, 'game_id' => 306, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "No, I don't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 10, 'game_id' => 306, 'q_audio' => $AudioDomain . $G2_L12_listen_n_choose_path . "Do-you-like-fish.mp3", 'q_conver' => "Do you like fish?", 'q_content' =>  "Yes, I do.", 'a_content' => 1, 'q_image' =>  $l12G306image . "fish.png"],
            ['round' => 10, 'game_id' => 306, 'q_audio' => null, 'q_conver' => null, 'q_content' =>  "No, I don't.", 'a_content' => 0, 'q_image' => null],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 12 Game 307 ( speaking )
        ////////////////////////////////////////////////////////

        $l12_G307_image = $domain . "/storage/images/Grade_2/lesson_12/Speaking/";
        $G2_L12_Speaking = "Grade_2/" . "Lesson_12/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 307,  'q_image' => $l12_G307_image . "fish.png", "q_content" => "Look at the picture and speak."],
            ['round' => 2, 'game_id' => 307,  'q_image' => $l12_G307_image . "salad.png", "q_content" => "Look at the picture and speak."],
            ['round' => 3, 'game_id' => 307,  'q_image' => $l12_G307_image . "bread.png", "q_content" => "Look at the picture and speak."],
            ['round' => 4, 'game_id' => 307,  'q_image' => $l12_G307_image . "milk.png", "q_content" => "Look at the picture and speak."],
            ['round' => 5, 'game_id' => 307,  'q_image' => $l12_G307_image . "meat.png", "q_content" => "Look at the picture and speak."],
            ['round' => 6, 'game_id' => 307,  'q_image' => $l12_G307_image . "fruit.png", "q_content" => "Look at the picture and speak."],
            ['round' => 7, 'game_id' => 307,  'q_image' => $l12_G307_image . "vege.png", "q_content" => "Look at the picture and speak."],
            ['round' => 8, 'game_id' => 307,  'q_image' => $l12_G307_image . "rice.png", "q_content" => "Look at the picture and speak."],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 12 Game 308 ( reading passage )
        ////////////////////////////////////////////////////////

        $G2_L12_reading_passage_path = "Grade_2/" . "Lesson_12/" . "reading_passage/";
        $l12_G308_image = $domain . "/storage/images/Grade_2/lesson_12/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 308, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 308, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 308, "q_audio" => $AudioDomain . $G2_L12_reading_passage_path . "Jane-likes-fried-noodles-Tru.mp3", "q_conver" => "Jane likes fried noodles", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 308, "q_audio" => $AudioDomain . $G2_L12_reading_passage_path . "One-day-Jack-goes-to-his-favo.mp3", "q_content" => null, 'q_conver' => "One day, Jack goes to his favorite restaurant with his friends Chris and Jane. There are a lot of people there. Jack orders a big hamburger. The hamburger has meat and vegetables. Chris orders a cheese sandwich, and Jane orders fried noodles. The food is delicious and they are satisfied with their orders. After eating, they drink apple juice. It is cold and sweet. They have a great day.", 'a_content' => null, "background" => $l12_G308_image . "bg.jpg"],


            ['round' => 2, 'game_id' => 308, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 308, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 308, "q_audio" => $AudioDomain . $G2_L12_reading_passage_path . "They-are-not-satisfied-with-th.mp3", "q_conver" =>  "They are not satisfied with the food", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 308, "q_audio" => $AudioDomain . $G2_L12_reading_passage_path . "One-day-Jack-goes-to-his-favo.mp3", "q_content" => null, 'q_conver' => "One day, Jack goes to his favorite restaurant with his friends Chris and Jane. There are a lot of people there. Jack orders a big hamburger. The hamburger has meat and vegetables. Chris orders a cheese sandwich, and Jane orders fried noodles. The food is delicious and they are satisfied with their orders. After eating, they drink apple juice. It is cold and sweet. They have a great day.", 'a_content' => null, "background" => $l12_G308_image . "bg.jpg"],


            ['round' => 3, 'game_id' => 308, "q_audio" =>  null, 'q_content' => "True",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 308, "q_audio" =>  null, 'q_content' => "False",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 308, "q_audio" => $AudioDomain . $G2_L12_reading_passage_path . "They-have-a-great-day-TrueF.mp3", "q_conver" => "They have a great day", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 308, "q_audio" => $AudioDomain . $G2_L12_reading_passage_path . "One-day-Jack-goes-to-his-favo.mp3", "q_content" => null, 'q_conver' => "One day, Jack goes to his favorite restaurant with his friends Chris and Jane. There are a lot of people there. Jack orders a big hamburger. The hamburger has meat and vegetables. Chris orders a cheese sandwich, and Jane orders fried noodles. The food is delicious and they are satisfied with their orders. After eating, they drink apple juice. It is cold and sweet. They have a great day.", 'a_content' => null, "background" => $l12_G308_image . "bg.jpg"],


            ['round' => 4, 'game_id' => 308, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 308, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 308, "q_audio" => $AudioDomain . $G2_L12_reading_passage_path . "Jack-orders-a-big-hamburger.mp3", "q_conver" => "Jack orders a big hamburger", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 308, "q_audio" => $AudioDomain . $G2_L12_reading_passage_path . "One-day-Jack-goes-to-his-favo.mp3", "q_content" => null, 'q_conver' => "One day, Jack goes to his favorite restaurant with his friends Chris and Jane. There are a lot of people there. Jack orders a big hamburger. The hamburger has meat and vegetables. Chris orders a cheese sandwich, and Jane orders fried noodles. The food is delicious and they are satisfied with their orders. After eating, they drink apple juice. It is cold and sweet. They have a great day.", 'a_content' => null, "background" => $l12_G308_image . "bg.jpg"],


            ['round' => 5, 'game_id' => 308, "q_audio" => null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 308, "q_audio" => null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 308, "q_audio" => $AudioDomain . $G2_L12_reading_passage_path . "Jack-goes-to-his-favorite-rest.mp3", "q_conver" => "Jack goes to his favorite restaurant with his father", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 308, "q_audio" => $AudioDomain . $G2_L12_reading_passage_path . "One-day-Jack-goes-to-his-favo.mp3", "q_content" => null, 'q_conver' => "One day, Jack goes to his favorite restaurant with his friends Chris and Jane. There are a lot of people there. Jack orders a big hamburger. The hamburger has meat and vegetables. Chris orders a cheese sandwich, and Jane orders fried noodles. The food is delicious and they are satisfied with their orders. After eating, they drink apple juice. It is cold and sweet. They have a great day.", 'a_content' => null, "background" => $l12_G308_image . "bg.jpg"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 13 Game 309  (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l13_G309_image = $domain . "/storage/images/Grade_2/lesson_13/listen_n_repeat/";
        $G2_L13_listen_n_repeat = "Grade_2/" . "Lesson_13/" . "listen_n_repeat/";


        $ansL13_G309 = [
            "Ice-cream", "Ice", "Igloo", "Ink",  "Insect", "Island", "Jacket", "Jam", "Jelly", "Jewel", "Jug", "Juice", "July", "June"
        ];

        $G2_L13_Game309_index = 0;

        foreach ($ansL13_G309 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 309, 'a_content' => $key, 'a_image' => $l13_G309_image . $ansL13_G309[$G2_L13_Game309_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L13_listen_n_repeat . strtolower($ansL13_G309[$G2_L13_Game309_index]) . ".mp3"
                ],
            ]);
            $G2_L13_Game309_index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 13 Game 310 (  Trace Word  )
        ////////////////////////////////////////////////////////

        $l13_G310_image = $domain . "/storage/images/Grade_2/lesson_13/trace_word/";
        $G2_L13_trace_word = "Grade_2/" . "Lesson_13/" . "trace_word/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 310, 'q_audio' =>  $AudioDomain . $G2_L13_trace_word . "jug" . ".mp3", 'q_content' =>  null, 'q_image' => $l13_G310_image . "jug" . ".png", 'a_content' => "jug"],
            ['round' => 1, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "j" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_u" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_g" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 2, 'game_id' => 310, 'q_audio' =>  $AudioDomain . $G2_L13_trace_word . "jam" . ".mp3", 'q_content' =>  null, 'q_image' => $l13_G310_image . "jam" . ".png", 'a_content' => "jam"],
            ['round' => 2, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "j" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_m" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 3, 'game_id' => 310, 'q_audio' =>  $AudioDomain . $G2_L13_trace_word . "ink" . ".mp3", 'q_content' =>  null, 'q_image' => $l13_G310_image . "ink" . ".png", 'a_content' => "ink"],
            ['round' => 3, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "i" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_n" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_k" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 4, 'game_id' => 310, 'q_audio' =>  $AudioDomain . $G2_L13_trace_word . "ice" . ".mp3", 'q_content' =>  null, 'q_image' => $l13_G310_image . "ice" . ".png", 'a_content' => "ice"],
            ['round' => 4, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "i" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_c" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_e" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 5, 'game_id' => 310, 'q_audio' =>  $AudioDomain . $G2_L13_trace_word . "jelly" . ".mp3", 'q_content' =>  null, 'q_image' => $l13_G310_image . "jelly" . ".png", 'a_content' => "jelly"],
            ['round' => 5, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "j" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_l" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_l" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 310, 'q_audio' => null, 'q_content' =>  $l13_G310_image . "small_y" . ".png", 'q_image' => null, 'a_content' => null],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 13  Game 311 (  Matching  )
        ////////////////////////////////////////////////////////

        $l13_G311_image = $domain . "/storage/images/Grade_2/lesson_13/Matching/";
        $G2_L13_Matching = "Grade_2/" . "Lesson_13/" . "Matching/";


        $G2_L13_Game311_Matching = [

            ['Jelly', 'Juice', 'Igloo', 'Island', "Insect"],
            ['Ink', 'Jug', 'Ice-cream', 'Jam', "Ice"],

        ];

        $G2_L13_Game311_Matching_image = [

            ['insect', 'island', 'juice', 'jelly', "igloo"],
            ['jam', 'ice', 'jug', 'ice-cream', 'ink'],

        ];


        for ($i = 0; $i < count($G2_L13_Game311_Matching); $i++) {

            foreach ($G2_L13_Game311_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 311, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G2_L13_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }

            foreach ($G2_L13_Game311_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 311, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l13_G311_image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G2_L13_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 13 Game 312 ( writing )
        ////////////////////////////////////////////////////////

        $G2_L13_writing = "Grade_2/" . "Lesson_13/" . "writing/";
        $l13G312image = $domain . "/storage/images/Grade_2/lesson_13/writing/";


        $q_G312 = [

            ["I", "L", "O", "O", "G"],
            ["L", "S", "N", "D", "I", "A"],
            ["L", "U", "J", "Y"],
            ["M", "A", "J"],
            ["L", "Y", "L", "J", "E"],
            ["N", "U", "E", "J"],
            ["S", "T", "E", "I", "N", "C"],
            ["J", "C", "E", "U", "I"],

        ];

        $a_G312 = [
            "IGLOO", "ISLAND", "JULY", "JAM", "JELLY", "JUNE", "INSECT", "JUICE"
        ];

        $G312_Index = 0;

        for ($i = 0; $i < count($q_G312); $i++) {
            foreach ($q_G312[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 312, 'q_content' => $j, 'q_audio' => $AudioDomain . $G2_L13_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 312, 'q_image' => $l13G312image . str_replace(' ', '', strtolower($a_G312[$G312_Index])) . ".png", 'a_content' => $a_G312[$G312_Index], 'a_audio' => $AudioDomain . $G2_L13_writing . strtolower($a_G312[$G312_Index]) . ".mp3"],
            ]);
            $G312_Index++;
        }


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 13 Game 313 ( speaking )
        ////////////////////////////////////////////////////////

        $l13_G313_image = $domain . "/storage/images/Grade_2/lesson_13/Speaking/";
        $G2_L13_Speaking = "Grade_2/" . "Lesson_13/" . "Speaking/";


        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 313,  'q_image' => $l13_G313_image . "juice.png", "round_instruction" => $AudioDomain . $G2_L13_Speaking . "I-like-juice-what-about-you" . ".mp3", "q_content" => "I like juice. What about you?"],
            ['round' => 2, 'game_id' => 313,  'q_image' => $l13_G313_image . "ice.png", "round_instruction" => $AudioDomain . $G2_L13_Speaking . "I-dont-like-ice-what-about-you" . ".mp3", "q_content" => "I don't like ice. What about you?"],
            ['round' => 3, 'game_id' => 313,  'q_image' => $l13_G313_image . "igloo.png", "round_instruction" => $AudioDomain . $G2_L13_Speaking . "I-like-igloo-what-about-you" . ".mp3", "q_content" => "I like igloo. What about you?"],
            ['round' => 4, 'game_id' => 313,  'q_image' => $l13_G313_image . "jelly.png", "round_instruction" => $AudioDomain . $G2_L13_Speaking . "I-dont-like-jelly-what-about-you" . ".mp3", "q_content" => "I don't like jelly. What about you?"],
            ['round' => 5, 'game_id' => 313,  'q_image' => $l13_G313_image . "june.png", "round_instruction" => $AudioDomain . $G2_L13_Speaking . "I-like-june-what-about-you" . ".mp3", "q_content" => "I like June. What about you?"],
            ['round' => 6, 'game_id' => 313,  'q_image' => $l13_G313_image . "july.png", "round_instruction" => $AudioDomain . $G2_L13_Speaking . "I-dont-like-july-what-about-you" . ".mp3", "q_content" => "I don't like July. What about you?"],
            ['round' => 7, 'game_id' => 313,  'q_image' => $l13_G313_image . "jewel.png", "round_instruction" => $AudioDomain . $G2_L13_Speaking . "I-like-jewel-what-about-you" . ".mp3", "q_content" => "I like jewel. What about you?"],
            ['round' => 8, 'game_id' => 313,  'q_image' => $l13_G313_image . "jacket.png", "round_instruction" => $AudioDomain . $G2_L13_Speaking . "I-like-jacket-what-about-you" . ".mp3", "q_content" => "I like jacket. What about you?"],
            ['round' => 9, 'game_id' => 313,  'q_image' => $l13_G313_image . "jam.png", "round_instruction" => $AudioDomain . $G2_L13_Speaking . "I-like-jam-what-about-you" . ".mp3", "q_content" => "I like jam. What about you?"],
            ['round' => 10, 'game_id' => 313,  'q_image' => $l13_G313_image . "ice-cream.png", "round_instruction" => $AudioDomain . $G2_L13_Speaking . "I-like-icecream-what-about-you" . ".mp3", "q_content" => "I like ice cream. What about you?"],

        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 13 Game 314 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 314, 'a_content' => 'lesson_13_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 314, 'a_content' => 'lesson_13_video_global', 'isLocal' => 0]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 14 Game 315 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 315, 'a_content' => 'lesson_14_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 315, 'a_content' => 'lesson_14_video_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 14 Game 316 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l14_G316_image = $domain . "/storage/images/Grade_2/lesson_14/listen_n_repeat/";
        $G2_L14_listen_n_repeat = "Grade_2/" . "Lesson_14/" . "listen_n_repeat/";


        $ansL14_G316 = [
            "Cherry", "Chocolate", "Hot-dog", "Ice-cream",  "Lollipop", "Pineapple", "Pizza", "Popcorn", "Pudding", "Strawberry", "Wafers"
        ];

        $G2_L14_Game316_index = 0;

        foreach ($ansL14_G316 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 316, 'a_content' => $key, 'a_image' => $l14_G316_image . $ansL14_G316[$G2_L14_Game316_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L14_listen_n_repeat . strtolower($ansL14_G316[$G2_L14_Game316_index]) . ".mp3"
                ],
            ]);
            $G2_L14_Game316_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 14 Game 317 ( listen and choose )
        ////////////////////////////////////////////////////////

        $l14_G317_image = $domain . "/storage/images/Grade_2/lesson_14/listen_n_choose/";
        $G2_L14_listen_n_choose = "Grade_2/" . "Lesson_14/" . "listen_n_choose/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 317, 'q_audio' => $AudioDomain . $G2_L14_listen_n_choose . "Whats-your-favorite-fruit.mp3", 'q_image' => $l14_G317_image . "strawberry.png", "q_content" => "Strawberry", "q_conver" => "What's your favorite fruit?"],
            ['round' => 1, 'game_id' => 317, 'q_audio' => $AudioDomain . $G2_L14_listen_n_choose . "Whats-your-favorite-fruit.mp3", 'q_image' => $l14_G317_image . "pineapple.png", "q_content" => "Pineapple", "q_conver" => "What's your favorite fruit?"],

            ['round' => 2, 'game_id' => 317, 'q_audio' => $AudioDomain . $G2_L14_listen_n_choose . "Whats-your-favorite-food.mp3", 'q_image' => $l14_G317_image . "wafers.png", "q_content" => "Wafers", "q_conver" => "What's your favorite food?"],
            ['round' => 2, 'game_id' => 317, 'q_audio' => $AudioDomain . $G2_L14_listen_n_choose . "Whats-your-favorite-food.mp3", 'q_image' => $l14_G317_image . "pudding.png", "q_content" => "Pudding", "q_conver" => "What's your favorite food?"],

            ['round' => 3, 'game_id' => 317, 'q_audio' => $AudioDomain . $G2_L14_listen_n_choose . "Whats-your-favorite-food.mp3", 'q_image' => $l14_G317_image . "pizza.png", "q_content" => "Pizza", "q_conver" => "What's your favorite food?"],
            ['round' => 3, 'game_id' => 317, 'q_audio' => $AudioDomain . $G2_L14_listen_n_choose . "Whats-your-favorite-food.mp3", 'q_image' => $l14_G317_image . "hotdog.png", "q_content" => "Hotdog", "q_conver" => "What's your favorite food?"],

            ['round' => 4, 'game_id' => 317, 'q_audio' => $AudioDomain . $G2_L14_listen_n_choose . "Whats-your-favorite-food.mp3", 'q_image' => $l14_G317_image . "bananacake.png", "q_content" => "Banana Cake", "q_conver" => "What's your favorite food?"],
            ['round' => 4, 'game_id' => 317, 'q_audio' => $AudioDomain . $G2_L14_listen_n_choose . "Whats-your-favorite-food.mp3", 'q_image' => $l14_G317_image . "cheesecake.png", "q_content" => "Cheese Cake", "q_conver" => "What's your favorite food?"],

            ['round' => 5, 'game_id' => 317, 'q_audio' => $AudioDomain . $G2_L14_listen_n_choose . "Whats-your-favorite-juice.mp3", 'q_image' => $l14_G317_image . "strawberryjuice.png", "q_content" => "Strawberry Juice", "q_conver" => "Look at the picture and speak?"],
            ['round' => 5, 'game_id' => 317, 'q_audio' => $AudioDomain . $G2_L14_listen_n_choose . "Whats-your-favorite-juice.mp3", 'q_image' => $l14_G317_image . "orangejuice.png", "q_content" => "Orange Juice", "q_conver" => "Look at the picture and speak?"],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 14 Game 9 ( speak )
        ////////////////////////////////////////////////////////

        $l14_G318_image = $domain . "/storage/images/Grade_2/lesson_14/speak/";
        $G2_L14_speak = "Grade_2/" . "Lesson_14/" . "speak/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 318, 'a_image' => $l14_G318_image . "boy.png", "a_audio" => $AudioDomain . $G2_L14_speak . "SubBlock_Whats-your-favorite-food.mp3", "a_conver" => "What is your favorite food?", "background" =>  $l14_G318_image . "bg.jpg"],
            ['round' => 1, 'game_id' => 318, 'a_image' => $l14_G318_image . "girl.png", "a_audio" => $AudioDomain . $G2_L14_speak . "SubBlock_My-favorite-food-is-fried-nood.mp3", "a_conver" => "My favorite food is \nfried noodles.", "background" =>  $l14_G318_image . "bg.jpg"],

            ['round' => 2, 'game_id' => 318, 'a_image' => $l14_G318_image . "girl.png", "a_audio" => $AudioDomain . $G2_L14_speak . "SubBlock_What-about-you.mp3", "a_conver" => "What about you?", "background" =>  $l14_G318_image . "bg.jpg"],
            ['round' => 2, 'game_id' => 318, 'a_image' => $l14_G318_image . "boy.png", "a_audio" => $AudioDomain . $G2_L14_speak . "SubBlock_it-is-hamburger.mp3", "a_conver" => "It is hamburger.", "background" =>  $l14_G318_image . "bg.jpg"],

        ]);

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 319,  'q_image' => $l14_G318_image . "juice.png", "q_content" => "What's your favorite juice?", "round_instruction" => $AudioDomain . $G2_L14_speak . "Whats-your-favorite-juice.mp3"],
            ['round' => 2, 'game_id' => 319,  'q_image' => $l14_G318_image . "food.png", "q_content" => "What's your favorite food?", "round_instruction" => $AudioDomain . $G2_L14_speak . "Whats-your-favorite-food.mp3"],
            ['round' => 3, 'game_id' => 319,  'q_image' => $l14_G318_image . "cake.png", "q_content" => "What's your favorite food?", "round_instruction" => $AudioDomain . $G2_L14_speak . "Whats-your-favorite-food.mp3"],
            ['round' => 4, 'game_id' => 319,  'q_image' => $l14_G318_image . "straw.png", "q_content" => "What's your favorite fruit?", "round_instruction" => $AudioDomain . $G2_L14_speak . "Whats-your-favorite-fruit.mp3"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 14 Game 320 ( Speaking )
        ////////////////////////////////////////////////////////

        $l14_G320_image = $domain . "/storage/images/Grade_2/lesson_14/Speaking/";
        $G2_L14_Speaking = "Grade_2/" . "Lesson_14/" . "Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 320,  'q_image' => $l14_G320_image . "speaker.png", "q_content" => "Hello, my name is _____. I am ___ years old. I am _____. I have ______ and _______. I have ______. My favorite food is _______. My favorite juice is ______. My favorite animal is ______."],
        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 15 Game 321 (  Listen and Repeat  )
        ////////////////////////////////////////////////////////

        $l15_G321_image = $domain . "/storage/images/Grade_2/lesson_15/listen_n_repeat/";
        $G2_L15_listen_n_repeat = "Grade_2/" . "Lesson_15/" . "listen_n_repeat/";


        $ansL15_G321 = [
            "Kangaroo", "Kettle", "Key", "King",  "Kitchen", "Kite", "Knee", "Knife", "Ladder", "Lamp", "Leaf", "Lemon", "Lion", "Lobster", "Lock"
        ];

        $G2_L15_Game321_index = 0;

        foreach ($ansL15_G321 as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 321, 'a_content' => $key, 'a_image' => $l15_G321_image . $ansL15_G321[$G2_L15_Game321_index] . ".png",
                    'a_audio' => $AudioDomain . $G2_L15_listen_n_repeat . strtolower($ansL15_G321[$G2_L15_Game321_index]) . ".mp3"
                ],
            ]);
            $G2_L15_Game321_index++;
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 15 Game 322 (  Trace Word  )
        ////////////////////////////////////////////////////////

        $l15_G322_image = $domain . "/storage/images/Grade_2/lesson_15/trace_word/";
        $G2_L15_trace_word = "Grade_2/" . "Lesson_15/" . "trace_word/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 322, 'q_audio' =>  $AudioDomain . $G2_L15_trace_word . "king" . ".mp3", 'q_content' =>  null, 'q_image' => $l15_G322_image . "king" . ".png", 'a_content' => "king"],
            ['round' => 1, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "k" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-i" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-n" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-g" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 2, 'game_id' => 322, 'q_audio' =>  $AudioDomain . $G2_L15_trace_word . "knee" . ".mp3", 'q_content' =>  null, 'q_image' => $l15_G322_image . "knee" . ".png", 'a_content' => "knee"],
            ['round' => 2, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "k" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-n" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-e" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 3, 'game_id' => 322, 'q_audio' =>  $AudioDomain . $G2_L15_trace_word . "lock" . ".mp3", 'q_content' =>  null, 'q_image' => $l15_G322_image . "lock" . ".png", 'a_content' => "lock"],
            ['round' => 3, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "l" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-c" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-k" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 4, 'game_id' => 322, 'q_audio' =>  $AudioDomain . $G2_L15_trace_word . "leaf" . ".mp3", 'q_content' =>  null, 'q_image' => $l15_G322_image . "leaf" . ".png", 'a_content' => "leaf"],
            ['round' => 4, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "l" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-f" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 5, 'game_id' => 322, 'q_audio' =>  $AudioDomain . $G2_L15_trace_word . "lion" . ".mp3", 'q_content' =>  null, 'q_image' => $l15_G322_image . "lion" . ".png", 'a_content' => "lion"],
            ['round' => 5, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "l" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-i" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 322, 'q_audio' => null, 'q_content' =>  $l15_G322_image . "small-n" . ".png", 'q_image' => null, 'a_content' => null],


        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 15 Game 260 (  Matching  )
        ////////////////////////////////////////////////////////

        $l5_G323_image = $domain . "/storage/images/Grade_2/lesson_15/Matching/";
        $G2_L15_Matching = "Grade_2/" . "Lesson_15/" . "Matching/";


        $G2_L15_Game323_Matching = [

            ['Lobster', 'Kite', 'Ladder', 'Key', "Leaf"],
            ['Lamp', 'Kangaroo', 'Kettle', 'Knife', "Lock"],

        ];

        $G2_L15_Game323_Matching_image = [

            ['ladder', 'key', 'lobster', 'kite', "leaf"],
            ['kettle', 'lamp', 'lock', 'kangaroo', 'knife'],

        ];


        for ($i = 0; $i < count($G2_L15_Game323_Matching); $i++) {

            foreach ($G2_L15_Game323_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 323, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G2_L15_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }

            foreach ($G2_L15_Game323_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 323, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l5_G323_image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G2_L15_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 15 Game 324 ( writing )
        ////////////////////////////////////////////////////////

        $G2_L15_writing = "Grade_2/" . "Lesson_15/" . "writing/";
        $l15G324image = $domain . "/storage/images/Grade_2/lesson_15/writing/";


        $q_G324 = [

            ["Y", "E", "K"],
            ["E", "H", "T", "N", "C", "I", "K"],
            ["L", "D", "R", "A", "D", "E"],
            ["R", "E", "O", "S", "T", "L", "B"],
            ["I", "K", "E", "F", "N"],
            ["L", "O", "N", "I"],
            ["N", "E", "E", "K"],
            ["N", "K", "A", "A", "O", "R", "G", "O"],
            ["L", "E", "K", "E", "T", "T"],
            ["I", "E", "T", "K"],


        ];

        $a_G324 = [
            "KEY", "KITCHEN", "LADDER", "LOBSTER", "KNIFE", "LION", "KNEE", "KANGAROO", "KETTLE", "KITE"
        ];

        $G324_Index = 0;

        for ($i = 0; $i < count($q_G324); $i++) {
            foreach ($q_G324[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 324, 'q_content' => $j, 'q_audio' => $AudioDomain . $G2_L15_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 324, 'q_image' => $l15G324image . str_replace(' ', '', strtolower($a_G324[$G324_Index])) . ".png", 'a_content' => $a_G324[$G324_Index], 'a_audio' => $AudioDomain . $G2_L15_writing . strtolower($a_G324[$G324_Index]) . ".mp3"],
            ]);
            $G324_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 15 Game 320 ( Speaking )
        ////////////////////////////////////////////////////////

        $l15_G325_image = $domain . "/storage/images/Grade_2/lesson_15/Speaking/";
        $G2_L15_Speaking = "Grade_2/" . "Lesson_15/" . "Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 325,  'q_image' => $l15_G325_image . "speaker.png", "q_content" => "My name's _____. I have a _______. His/her name's ______. She has a ______  kite. _____ and I like kites. They are ______  and _______. We fly kites in the ______ . We are ______ when we fly kites. "],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 15 Game 326 ( reading passage )
        ////////////////////////////////////////////////////////

        $G2_L15_reading_passage_path = "Grade_2/" . "Lesson_15/" . "reading_passage/";
        $l15_G326_image = $domain . "/storage/images/Grade_2/lesson_15/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 326, "q_audio" =>  $AudioDomain . $G2_L15_reading_passage_path . "sad.mp3", 'q_content' => "sad", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 326, "q_audio" =>  $AudioDomain . $G2_L15_reading_passage_path . "satisfied.mp3", 'q_content' => "satisfied", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 326, "q_audio" => $AudioDomain . $G2_L15_reading_passage_path . "They-are-when-they-fly-kites.mp3", "q_conver" => "They are _____ \nwhen they fly kites.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 326, "q_audio" => $AudioDomain . $G2_L15_reading_passage_path . "SubBlock_My-name-is-Chris-I-have-a-fri.mp3", "q_content" => null, 'q_conver' => "My name is Chris. I have a friend. Her name is Rosy. She has a colorful and beautiful kite. Rosy and I like to fly kites in the evening. We are satisfied when we fly kites. My favorite fruit is strawberry. Rosy's favorite food is fried noodles. Rosy and I like chocolate cake. We sometimes go to our favorite restaurant and eat.", 'a_content' => null, "background" => $l15_G326_image . "bg.jpg"],


            ['round' => 2, 'game_id' => 326, "q_audio" =>  $AudioDomain . $G2_L15_reading_passage_path . "fried-rice.mp3", 'q_content' => "fried rice", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 326, "q_audio" =>  $AudioDomain . $G2_L15_reading_passage_path . "fried-noodles.mp3", 'q_content' => "fried noodles", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 326, "q_audio" => $AudioDomain . $G2_L15_reading_passage_path . "Chris-favorite-food-is-fried.mp3", "q_conver" =>  "Chris' favorite food is _____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 326, "q_audio" => $AudioDomain . $G2_L15_reading_passage_path . "SubBlock_My-name-is-Chris-I-have-a-fri.mp3", "q_content" => null, 'q_conver' => "My name is Chris. I have a friend. Her name is Rosy. She has a colorful and beautiful kite. Rosy and I like to fly kites in the evening. We are satisfied when we fly kites. My favorite fruit is strawberry. Rosy's favorite food is fried noodles. Rosy and I like chocolate cake. We sometimes go to our favorite restaurant and eat.", 'a_content' => null, "background" => $l15_G326_image . "bg.jpg"],


            ['round' => 3, 'game_id' => 326, "q_audio" =>  $AudioDomain . $G2_L15_reading_passage_path . "park.mp3", 'q_content' => "park",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 326, "q_audio" =>  $AudioDomain . $G2_L15_reading_passage_path . "restaurant.mp3", 'q_content' => "restaurant",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 326, "q_audio" => $AudioDomain . $G2_L15_reading_passage_path . "They-sometimes-go-to-their-fav.mp3", "q_conver" => "They sometimes go to their \nfavorite _____ and eat.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 326, "q_audio" => $AudioDomain . $G2_L15_reading_passage_path . "SubBlock_My-name-is-Chris-I-have-a-fri.mp3", "q_content" => null, 'q_conver' => "My name is Chris. I have a friend. Her name is Rosy. She has a colorful and beautiful kite. Rosy and I like to fly kites in the evening. We are satisfied when we fly kites. My favorite fruit is strawberry. Rosy's favorite food is fried noodles. Rosy and I like chocolate cake. We sometimes go to our favorite restaurant and eat.", 'a_content' => null, "background" => $l15_G326_image . "bg.jpg"],


            ['round' => 4, 'game_id' => 326, "q_audio" =>  $AudioDomain . $G2_L15_reading_passage_path . "kite.mp3", 'q_content' => "kite", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 326, "q_audio" =>  $AudioDomain . $G2_L15_reading_passage_path . "food.mp3", 'q_content' => "food", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 326, "q_audio" => $AudioDomain . $G2_L15_reading_passage_path . "Chris-and-Rosy-like-to-fly-ki.mp3", "q_conver" => "Chris and Rosy like \nto fly _____ .", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 326, "q_audio" => $AudioDomain . $G2_L15_reading_passage_path . "SubBlock_My-name-is-Chris-I-have-a-fri.mp3", "q_content" => null, 'q_conver' => "My name is Chris. I have a friend. Her name is Rosy. She has a colorful and beautiful kite. Rosy and I like to fly kites in the evening. We are satisfied when we fly kites. My favorite fruit is strawberry. Rosy's favorite food is fried noodles. Rosy and I like chocolate cake. We sometimes go to our favorite restaurant and eat.", 'a_content' => null, "background" => $l15_G326_image . "bg.jpg"],


            ['round' => 5, 'game_id' => 326, "q_audio" =>  $AudioDomain . $G2_L15_reading_passage_path . "friend.mp3", 'q_content' => "friend", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 326, "q_audio" =>  $AudioDomain . $G2_L15_reading_passage_path . "sister.mp3", 'q_content' => "sister", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 326, "q_audio" => $AudioDomain . $G2_L15_reading_passage_path . "Rosy-is-Chris-friend-sister.mp3", "q_conver" => "Rosy is Chris' _____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 326, "q_audio" => $AudioDomain . $G2_L15_reading_passage_path . "SubBlock_My-name-is-Chris-I-have-a-fri.mp3", "q_content" => null, 'q_conver' => "My name is Chris. I have a friend. Her name is Rosy. She has a colorful and beautiful kite. Rosy and I like to fly kites in the evening. We are satisfied when we fly kites. My favorite fruit is strawberry. Rosy's favorite food is fried noodles. Rosy and I like chocolate cake. We sometimes go to our favorite restaurant and eat.", 'a_content' => null, "background" => $l15_G326_image . "bg.jpg"],

        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 16 Game 327 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 327, 'a_content' => 'lesson_16_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 327, 'a_content' => 'lesson_16_video_global', 'isLocal' => 0]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 16 Game 328 ( listen and Repeat )
        //////////////////////////////////////////////////////////////


        $l16_G328_image = $domain . "/storage/images/Grade_2/lesson_16/listen_n_repeat/";
        $G2_L16_reading = "Grade_2/" . "Lesson_16/" . "listen_n_repeat/";


        $ansl16_G328_Content = [
            "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
        ];

        foreach ($ansl16_G328_Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 328, 'a_content' => $key, 'a_image' => $l16_G328_image . str_replace(' ', '', $key) . ".png",
                    'a_audio' => $AudioDomain . $G2_L16_reading . str_replace(' ', '', $key) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 16 Game 329 (  Listen and learn  )
        ////////////////////////////////////////////////////////

        $l16_G329_image = $domain . "/storage/images/Grade_2/lesson_16/listen_n_learn/";
        $G2_L16_listen_n_learn = "Grade_2/" . "Lesson_16/" . "listen_n_learn/";


        DB::table('ans_n_ques')->insert([
            [
                'round' => 1, 'game_id' => 329, 'a_content' => "Tuesday", 'q_image' => "Tuesday",
                'a_audio' => $AudioDomain . $G2_L16_listen_n_learn . "Tuesday" . ".mp3", "background" => $l16_G329_image . "bg.jpg"
            ],
            [
                'round' => 1, 'game_id' => 329, 'a_content' => "Thursday", 'q_image' => "Thursday",
                'a_audio' => $AudioDomain . $G2_L16_listen_n_learn . "Thursday" . ".mp3", "background" => $l16_G329_image . "bg.jpg"
            ],
            [
                'round' => 1, 'game_id' => 329, 'a_content' => "Saturday", 'q_image' => "Saturday",
                'a_audio' => $AudioDomain . $G2_L16_listen_n_learn . "Saturday" . ".mp3", "background" => $l16_G329_image . "bg.jpg"
            ],
            [
                'round' => 1, 'game_id' => 329, 'a_content' => "Monday", 'q_image' => "Monday",
                'a_audio' => $AudioDomain . $G2_L16_listen_n_learn . "Monday" . ".mp3", "background" => $l16_G329_image . "bg.jpg"
            ],
            [
                'round' => 1, 'game_id' => 329, 'a_content' => "Friday", 'q_image' => "Friday",
                'a_audio' => $AudioDomain . $G2_L16_listen_n_learn . "Friday" . ".mp3", "background" => $l16_G329_image . "bg.jpg"
            ],
            [
                'round' => 1, 'game_id' => 329, 'a_content' => "Wednesday", 'q_image' => "Wednesday",
                'a_audio' => $AudioDomain . $G2_L16_listen_n_learn . "Wednesday" . ".mp3", "background" => $l16_G329_image . "bg.jpg"
            ],
            [
                'round' => 1, 'game_id' => 329, 'a_content' => "Tuesday", 'q_image' => "Tuesday",
                'a_audio' => $AudioDomain . $G2_L16_listen_n_learn . "Tuesday" . ".mp3", "background" => $l16_G329_image . "bg.jpg"
            ],


        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 16 Game 330 (  song  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 330, 'a_content' => 'lesson_16_song', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 330, 'a_content' => 'lesson_16_song_global', 'isLocal' => 0]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 16 Game 331 ( Speaking )
        ////////////////////////////////////////////////////////

        $l16_G331_image = $domain . "/storage/images/Grade_2/lesson_16/Speaking/";
        $G2_L16_Speaking = "Grade_2/" . "Lesson_16/" . "Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 331,  'q_image' => $l16_G331_image . "wed.png", "q_content" => "Look at the picture and speak?"],
            ['round' => 2, 'game_id' => 331,  'q_image' => $l16_G331_image . "fri.png", "q_content" => "Look at the picture and speak?"],
            ['round' => 3, 'game_id' => 331,  'q_image' => $l16_G331_image . "mon.png", "q_content" => "Look at the picture and speak?"],
            ['round' => 4, 'game_id' => 331,  'q_image' => $l16_G331_image . "thur.png", "q_content" => "Look at the picture and speak?"],
            ['round' => 5, 'game_id' => 331,  'q_image' => $l16_G331_image . "sun.png", "q_content" => "Look at the picture and speak?"],
            ['round' => 6, 'game_id' => 331,  'q_image' => $l16_G331_image . "tue.png", "q_content" => "Look at the picture and speak?"],
            ['round' => 7, 'game_id' => 331,  'q_image' => $l16_G331_image . "sat.png", "q_content" => "Look at the picture and speak?"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 17 Game 332 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 332, 'a_content' => 'lesson_17_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 332, 'a_content' => 'lesson_17_video_global', 'isLocal' => 0]);


        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 17 Game 333 ( listen and Repeat )
        //////////////////////////////////////////////////////////////


        $l17_G333_image = $domain . "/storage/images/Grade_2/lesson_17/listen_n_repeat/";
        $G2_L17_reading = "Grade_2/" . "Lesson_17/" . "listen_n_repeat/";


        $ansl17_G333_Content = [
            "Susie", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
        ];

        foreach ($ansl17_G333_Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 333, 'a_content' => $key, 'a_image' => $l17_G333_image . str_replace(' ', '', $key) . ".png",
                    'a_audio' => $AudioDomain . $G2_L17_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 17 Game 334 (  True or false  )
        ////////////////////////////////////////////////////////

        $l17G334image = $domain . "/storage/images/Grade_2/lesson_17/true_or_false/";
        $G2_L17_true_or_false_path = "Grade_2/" . "Lesson_17/" . "true_or_false/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 334, 'q_audio' => $AudioDomain . $G2_L17_true_or_false_path . "On-Wednesday-she-eats-a-salad.mp3", "q_conver" => "On Wednesday, \nshe eats a salad.", 'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l17G334image . "watermelon.png"],
            ['round' => 1, 'game_id' => 334, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 2, 'game_id' => 334, 'q_audio' => $AudioDomain . $G2_L17_true_or_false_path . "On-Thursday-she-eats-two-bana.mp3", "q_conver" => "On Thursday, \nshe eats two bananas.", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l17G334image . "banana.png"],
            ['round' => 2, 'game_id' => 334, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 3, 'game_id' => 334, 'q_audio' => $AudioDomain . $G2_L17_true_or_false_path . "On-Friday-she-eats-two-apples.mp3", "q_conver" => "On Friday, \nshe eats two apples.", 'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l17G334image . "strawberry.png"],
            ['round' => 3, 'game_id' => 334, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 4, 'game_id' => 334, 'q_audio' => $AudioDomain . $G2_L17_true_or_false_path . "On-Saturday-she-eats-a-cake.mp3", "q_conver" => "On Saturday, \nshe eats a cake.", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l17G334image . "cake.png"],
            ['round' => 4, 'game_id' => 334, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 5, 'game_id' => 334, 'q_audio' => $AudioDomain . $G2_L17_true_or_false_path . "On-Sunday-she-eats-a-hot-dog.mp3", "q_conver" => "On Sunday, \nshe eats a hot dog.", 'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l17G334image . "pineapple.png"],
            ['round' => 5, 'game_id' => 334, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 6, 'game_id' => 334, 'q_audio' => $AudioDomain . $G2_L17_true_or_false_path . "On-Tuesday-she-eats-a-waterme.mp3", "q_conver" => "On Tuesday, \nshe eats a watermelon.", 'q_content' =>  "true", 'a_content' => 0, 'q_image' =>  $l17G334image . "hamburger.png"],
            ['round' => 6, 'game_id' => 334, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 7, 'game_id' => 334, 'q_audio' => $AudioDomain . $G2_L17_true_or_false_path . "On-Monday-she-eats-a-mango-T.mp3", "q_conver" => "On Monday, \nshe eats a mango.", 'q_content' =>  "true", 'a_content' => 1, 'q_image' =>  $l17G334image . "mango.png"],
            ['round' => 7, 'game_id' => 334, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "false", 'a_content' => 0, 'q_image' => null],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 17 Game 335 ( Speaking )
        ////////////////////////////////////////////////////////

        $l17_G335_image = $domain . "/storage/images/Grade_2/lesson_17/Speaking/";
        $G2_L17_Speaking = "Grade_2/" . "Lesson_17/" . "Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 335, "q_audio" => $AudioDomain . $G2_L17_Speaking . "My-best-friend-is-Jack-He-lik" . ".mp3", 'q_image' => $l17_G335_image . "boy.png", "q_content" => "My best friend is _____. He/She likes _____. On Monday, he/she eats ______ ______. On Tuesday, she eats _____ ______. On Wednesday, he eats _____ _____. On Thursday, he eats _____ ______. On Friday, he drinks _____ _____. On Saturday, he eats _____ ______. He likes it very much. On Sunday, he is sick."],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 18 Game 336 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 336, 'a_content' => 'lesson_18_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 336, 'a_content' => 'lesson_18_video_global', 'isLocal' => 0]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 18 Game 337 ( listen and Repeat )
        //////////////////////////////////////////////////////////////


        $l18_G337_image = $domain . "/storage/images/Grade_2/lesson_18/listen_n_repeat/";
        $G2_L18_reading = "Grade_2/" . "Lesson_18/" . "listen_n_repeat/";


        $ansl18_G337_Content = [
            "Dance", "Draw", "Jump", "Read", "Run", "Sing", "Swim", "Write"
        ];

        foreach ($ansl18_G337_Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 337, 'a_content' => $key, 'a_image' => $l18_G337_image . str_replace(' ', '', $key) . ".png",
                    'a_audio' => $AudioDomain . $G2_L18_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 18 Game 338 ( Speaking )
        ////////////////////////////////////////////////////////

        $l18_G338_image = $domain . "/storage/images/Grade_2/lesson_18/Speaking/";
        $G2_L18_Speaking = "Grade_2/" . "Lesson_18/" . "Speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 338,  'q_image' => $l18_G338_image . "swim.png", "round_instruction" => $AudioDomain . $G2_L18_Speaking . "can-he-swim.mp3", "q_content" => "Can he swim?"],
            ['round' => 2, 'game_id' => 338,  'q_image' => $l18_G338_image . "jump.png", "round_instruction" => $AudioDomain . $G2_L18_Speaking . "can-she-jump.mp3", "q_content" => "Can she jump?"],
            ['round' => 3, 'game_id' => 338,  'q_image' => $l18_G338_image . "kite.png", "round_instruction" => $AudioDomain . $G2_L18_Speaking . "can-she-run.mp3", "q_content" => "Can she run?"],
            ['round' => 4, 'game_id' => 338,  'q_image' => $l18_G338_image . "read.png", "round_instruction" => $AudioDomain . $G2_L18_Speaking . "can-she-read.mp3", "q_content" => "Can she read?"],
            ['round' => 5, 'game_id' => 338,  'q_image' => $l18_G338_image . "smile.png", "round_instruction" => $AudioDomain . $G2_L18_Speaking . "can-he-smile.mp3", "q_content" => "Can he smile?"],
            ['round' => 6, 'game_id' => 338,  'q_image' => $l18_G338_image . "speak.png", "round_instruction" => $AudioDomain . $G2_L18_Speaking . "can-she-speak-english.mp3", "q_content" => "Can she speak english?"],
            ['round' => 7, 'game_id' => 338,  'q_image' => $l18_G338_image . "draw.png", "round_instruction" => $AudioDomain . $G2_L18_Speaking . "can-he-write.mp3", "q_content" => "Can he write?"],
            ['round' => 8, 'game_id' => 338,  'q_image' => $l18_G338_image . "sing.png", "round_instruction" => $AudioDomain . $G2_L18_Speaking . "can-she-sing.mp3", "q_content" => "Can she sing?"],
            ['round' => 9, 'game_id' => 338,  'q_image' => $l18_G338_image . "listen.png", "round_instruction" => $AudioDomain . $G2_L18_Speaking . "can-she-sing.mp3", "q_content" => "Can she sing?"],
            ['round' => 10, 'game_id' => 338,  'q_image' => $l18_G338_image . "dance.png", "round_instruction" => $AudioDomain . $G2_L18_Speaking . "can-he-dance.mp3", "q_content" => "Can he dance?"],
        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 18 Game 339 (  listen and choose  )
        ////////////////////////////////////////////////////////

        $l18G339image = $domain . "/storage/images/Grade_2/lesson_18/listen_n_choose/";
        $G2_L18_listen_n_choose_path = "Grade_2/" . "Lesson_18/" . "listen_n_choose/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 339, 'q_audio' => $AudioDomain . $G2_L18_listen_n_choose_path . "Can-you-run-first-Yes-I-can.mp3", "q_conver" => "Can you run first?", 'q_content' =>  "Yes, I can.", 'a_content' => 1, 'q_image' =>  $l18G339image . "run.png"],
            ['round' => 1, 'game_id' => 339, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, I can't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'game_id' => 339, 'q_audio' => $AudioDomain . $G2_L18_listen_n_choose_path . "Can-you-jump-up-high-Yes-I-ca.mp3", "q_conver" =>  "Can you jump up high?", 'q_content' =>  "Yes, I can.", 'a_content' => 1, 'q_image' =>  $l18G339image . "jump.png"],
            ['round' => 2, 'game_id' => 339, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, I can't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 3, 'game_id' => 339, 'q_audio' => $AudioDomain . $G2_L18_listen_n_choose_path . "Can-you-clap-your-hand-Yes-I.mp3", "q_conver" =>  "Can you clap your hand?", 'q_content' =>  "Yes, I can.", 'a_content' => 1, 'q_image' =>  $l18G339image . "hand.png"],
            ['round' => 3, 'game_id' => 339, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, I can't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 4, 'game_id' => 339, 'q_audio' => $AudioDomain . $G2_L18_listen_n_choose_path . "Can-you-draw-Yes-I-can-No.mp3", "q_conver" =>  "Can you draw?", 'q_content' =>  "Yes, I can.", 'a_content' => 0, 'q_image' =>  $l18G339image . "draw.png"],
            ['round' => 4, 'game_id' => 339, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, I can't.", 'a_content' => 1, 'q_image' => null],

            ['round' => 5, 'game_id' => 339, 'q_audio' => $AudioDomain . $G2_L18_listen_n_choose_path . "Can-you-smile-Yes-I-can-No.mp3", "q_conver" =>  "Can you smile?", 'q_content' =>  "Yes, I can.", 'a_content' => 1, 'q_image' =>  $l18G339image . "smile.png"],
            ['round' => 5, 'game_id' => 339, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, I can't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 6, 'game_id' => 339, 'q_audio' => $AudioDomain . $G2_L18_listen_n_choose_path . "SubBlock_Can-you-read-Yes-i-can-No-I-c.mp3", "q_conver" =>  "Can you read?", 'q_content' =>  "Yes, I can.", 'a_content' => 1, 'q_image' =>  $l18G339image . "read.png"],
            ['round' => 6, 'game_id' => 339, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, I can't.", 'a_content' => 0, 'q_image' => null],

            ['round' => 7, 'game_id' => 339, 'q_audio' => $AudioDomain . $G2_L18_listen_n_choose_path . "Can-you-speak-English-Yes-I.mp3", "q_conver" =>  "Can you speak english?", 'q_content' =>  "Yes, I can.", 'a_content' => 0, 'q_image' =>  $l18G339image . "speak.png"],
            ['round' => 7, 'game_id' => 339, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, I can't.", 'a_content' => 1, 'q_image' => null],

            ['round' => 8, 'game_id' => 339, 'q_audio' => $AudioDomain . $G2_L18_listen_n_choose_path . "Can-you-sing-Yes-I-can-No.mp3", "q_conver" =>  "Can you sing?", 'q_content' =>  "Yes, I can.", 'a_content' => 1, 'q_image' =>  $l18G339image . "sing.png"],
            ['round' => 8, 'game_id' => 339, 'q_audio' => null, "q_conver" => null, 'q_content' =>  "No, I can't.", 'a_content' => 0, 'q_image' => null],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 19 Game 340 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 340, 'a_content' => 'lesson_19_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 340, 'a_content' => 'lesson_19_video_global', 'isLocal' => 0]);


        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 19 Game 341 ( listen and Repeat )
        //////////////////////////////////////////////////////////////


        $l19_G341_image = $domain . "/storage/images/Grade_2/lesson_19/listen_n_repeat/";
        $G2_L19_reading = "Grade_2/" . "Lesson_19/" . "listen_n_repeat/";


        $ansl19_G341_Content = [
            "Magic", "Man", "Mango", "Meat", "Monkey", "Moon", "Mug", "Nail", "Necklace", "Needle", "Nest", "Newspaper", "Nose", "Notebook"
        ];

        foreach ($ansl19_G341_Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 341, 'a_content' => $key, 'a_image' => $l19_G341_image . str_replace(' ', '', $key) . ".png",
                    'a_audio' => $AudioDomain . $G2_L19_reading . str_replace(' ', '', $key) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 19 Game 342 (  Trace Word  )
        ////////////////////////////////////////////////////////

        $l19_G342_image = $domain . "/storage/images/Grade_2/lesson_19/trace_word/";
        $G2_L19_trace_word = "Grade_2/" . "Lesson_19/" . "trace_word/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 342, 'q_audio' =>  $AudioDomain . $G2_L19_trace_word . "moon" . ".mp3", 'q_content' =>  null, 'q_image' => $l19_G342_image . "moon" . ".png", 'a_content' => "moon"],
            ['round' => 1, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "m" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-n" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 2, 'game_id' => 342, 'q_audio' =>  $AudioDomain . $G2_L19_trace_word . "nest" . ".mp3", 'q_content' =>  null, 'q_image' => $l19_G342_image . "nest" . ".png", 'a_content' => "nest"],
            ['round' => 2, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "n" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-s" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-t" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 3, 'game_id' => 342, 'q_audio' =>  $AudioDomain . $G2_L19_trace_word . "nail" . ".mp3", 'q_content' =>  null, 'q_image' => $l19_G342_image . "nail" . ".png", 'a_content' => "nail"],
            ['round' => 3, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "n" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-i" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-l" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 4, 'game_id' => 342, 'q_audio' =>  $AudioDomain . $G2_L19_trace_word . "note" . ".mp3", 'q_content' =>  null, 'q_image' => $l19_G342_image . "note" . ".png", 'a_content' => "note"],
            ['round' => 4, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "n" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-t" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-e" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 5, 'game_id' => 342, 'q_audio' =>  $AudioDomain . $G2_L19_trace_word . "man" . ".mp3", 'q_content' =>  null, 'q_image' => $l19_G342_image . "man" . ".png", 'a_content' => "man"],
            ['round' => 5, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "m" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-a" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-n" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 6, 'game_id' => 342, 'q_audio' =>  $AudioDomain . $G2_L19_trace_word . "mug" . ".mp3", 'q_content' =>  null, 'q_image' => $l19_G342_image . "mug" . ".png", 'a_content' => "mug"],
            ['round' => 6, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "m" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 6, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-u" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 6, 'game_id' => 342, 'q_audio' => null, 'q_content' =>  $l19_G342_image . "small-g" . ".png", 'q_image' => null, 'a_content' => null],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 19 Game 343 (  Matching  )
        ////////////////////////////////////////////////////////

        $l19_G343_image = $domain . "/storage/images/Grade_2/lesson_19/Matching/";
        $G2_L19_Matching = "Grade_2/" . "Lesson_19/" . "Matching/";


        $G2_L19_Game343_Matching = [

            ['Nail', 'Notebook', 'Newspaper', 'Necklace', "Needle"],
            ['Mug', 'Mango', 'Monkey', 'Magic', "Moon"],

        ];

        $G2_L19_Game343_Matching_image = [

            ['newspaper', 'necklace', 'needle', 'nail', "notebook"],
            ['monkey', 'magic', 'mug', 'moon', 'mango'],

        ];


        for ($i = 0; $i < count($G2_L19_Game343_Matching); $i++) {

            foreach ($G2_L19_Game343_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 343, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G2_L19_Matching .  ucfirst($q) . ".mp3",
                    ]
                ]);
            }

            foreach ($G2_L19_Game343_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 343, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l19_G343_image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G2_L19_Matching .  ucfirst($q) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 19 Game 344 ( Listen and Write )
        ////////////////////////////////////////////////////////

        $G2_L19_writing = "Grade_2/" . "Lesson_19/" . "listen_n_write/";
        $l19_G344_image = $domain . "/storage/images/Grade_2/lesson_19/listen_n_write/";


        $q_G344 = [
            ["M", "E", "Y", "N", "O", "K"],
            ["A", "O", "G", "N", "M"],
            ["N", "O", "M", "O"],
            ["I", "L", "A", "N"],
            ["C", "K", "A", "E", "L", "E", "N", "C"],
            ["D", "E", "E", "N", "L", "E"],
            ["N", "M", "A"],
            ["U", "M", "G"],
            ["I", "A", "M", "C", "G"],


        ];

        $a_G344 = [
            "MONKEY", "MANGO", "MOON",  "NAIL", "NECKLACE", "NEEDLE", "MAN", "MUG", "MAGIC"
        ];

        $G344_Index = 0;

        for ($i = 0; $i < count($q_G344); $i++) {
            foreach ($q_G344[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 344, 'q_content' => $j, 'q_audio' => $AudioDomain . $G2_L19_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 344, 'q_image' => $l19_G344_image . str_replace(' ', '', strtolower($a_G344[$G344_Index])) . ".png", 'a_content' => $a_G344[$G344_Index], 'a_audio' => $AudioDomain . $G2_L19_writing . strtolower($a_G344[$G344_Index]) . ".mp3"],
            ]);
            $G344_Index++;
        }





        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 19 Game 345 , 346 ( speak )
        ////////////////////////////////////////////////////////

        $G2_L19_speak = "Grade_2/" . "Lesson_19/" . "speak/";
        $l19_G345_G346_image = $domain . "/storage/images/Grade_2/lesson_19/speak/";


        // game 345
        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 345, 'a_image' => $l19_G345_G346_image . "left.png", "a_audio" => $AudioDomain . $G2_L19_speak . "SubBlock_Can-you-draw-mango.mp3", "a_conver" => "Can you draw mango?", "background" =>  $l19_G345_G346_image . "bg.png"],
            ['round' => 1, 'game_id' => 345, 'a_image' => $l19_G345_G346_image . "right.png", "a_audio" => $AudioDomain . $G2_L19_speak . "SubBlock_Yes-i-can-what-about-you.mp3", "a_conver" => "Yes, I can. What about you?", "background" =>  $l19_G345_G346_image . "bg.png"],

            ['round' => 2, 'game_id' => 345, 'a_image' => $l19_G345_G346_image . "left.png", "a_audio" => $AudioDomain . $G2_L19_speak . "SubBlock_I-can-draw-mango-too.mp3", "a_conver" => "I can draw mango too.", "background" =>  $l19_G345_G346_image . "bg.png"],
            ['round' => 2, 'game_id' => 345, 'a_image' => $l19_G345_G346_image . "right.png", "a_audio" => null, "a_conver" => null, "background" =>  $l19_G345_G346_image . "bg.png"],

        ]);

        // game 346
        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 346,  'q_image' => $l19_G345_G346_image . "nose.png", "q_content" => "Can you draw nose?", "round_instruction" => $AudioDomain . $G2_L19_speak . "Can-you-draw-nose" . ".mp3"],
            ['round' => 2, 'game_id' => 346,  'q_image' => $l19_G345_G346_image . "magic.png", "q_content" => "Do you like magic?", "round_instruction" => $AudioDomain . $G2_L19_speak . "Do-you-like-magic" . ".mp3"],
            ['round' => 3, 'game_id' => 346,  'q_image' => $l19_G345_G346_image . "nest.png", "q_content" => "Can you draw nest?", "round_instruction" => $AudioDomain . $G2_L19_speak . "Can-you-draw-nest" . ".mp3"],
            ['round' => 4, 'game_id' => 346,  'q_image' => $l19_G345_G346_image . "necklace.png", "q_content" => "Do you like nacklace?", "round_instruction" => $AudioDomain . $G2_L19_speak . "Do-you-like-necklace" . ".mp3"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 20 Game 347 ( listen and Repeat )
        //////////////////////////////////////////////////////////////


        $l20_G347_image = $domain . "/storage/images/Grade_2/lesson_20/listen_n_repeat/";
        $G2_L20_reading = "Grade_2/" . "Lesson_20/" . "listen_n_repeat/";


        $ansl20_G347_Content = [
            "Octopus", "Oil", "Onion", "Orange", "Orchid", "Oval", "Owl", "Ox", "Panda", "Parrot", "Pig", "Pillow", "Pineapple", "Planet", "Pool", "Puzzle"
        ];

        foreach ($ansl20_G347_Content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 347, 'a_content' => $key, 'a_image' => $l20_G347_image . str_replace(' ', '', $key) . ".png",
                    'a_audio' => $AudioDomain . $G2_L20_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 20 Game 348 (  Trace Word  )
        ////////////////////////////////////////////////////////

        $l20_G348_image = $domain . "/storage/images/Grade_2/lesson_20/trace_word/";
        $G2_L20_trace_word = "Grade_2/" . "Lesson_20/" . "trace_word/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 348, 'q_audio' =>  $AudioDomain . $G2_L20_trace_word . "oil" . ".mp3", 'q_content' =>  null, 'q_image' => $l20_G348_image . "oil" . ".png", 'a_content' => "oil"],
            ['round' => 1, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "small-i" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 1, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "small-l" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 2, 'game_id' => 348, 'q_audio' =>  $AudioDomain . $G2_L20_trace_word . "pig" . ".mp3", 'q_content' =>  null, 'q_image' => $l20_G348_image . "pig" . ".png", 'a_content' => "pig"],
            ['round' => 2, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "p" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "small-i" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 2, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "small-g" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 3, 'game_id' => 348, 'q_audio' =>  $AudioDomain . $G2_L20_trace_word . "pool" . ".mp3", 'q_content' =>  null, 'q_image' => $l20_G348_image . "pool" . ".png", 'a_content' => "pool"],
            ['round' => 3, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "p" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "small-o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "small-o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "small-l" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 4, 'game_id' => 348, 'q_audio' =>  $AudioDomain . $G2_L20_trace_word . "owl" . ".mp3", 'q_content' =>  null, 'q_image' => $l20_G348_image . "owl" . ".png", 'a_content' => "owl"],
            ['round' => 4, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "small-w" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 4, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "small-l" . ".png", 'q_image' => null, 'a_content' => null],


            ['round' => 5, 'game_id' => 348, 'q_audio' =>  $AudioDomain . $G2_L20_trace_word . "ox" . ".mp3", 'q_content' =>  null, 'q_image' => $l20_G348_image . "ox" . ".png", 'a_content' => "ox"],
            ['round' => 5, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "o" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 5, 'game_id' => 348, 'q_audio' => null, 'q_content' =>  $l20_G348_image . "small-x" . ".png", 'q_image' => null, 'a_content' => null],


        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 20 Game 349 (  Matching  )
        ////////////////////////////////////////////////////////

        $l2_G349_image = $domain . "/storage/images/Grade_2/lesson_20/Matching/";
        $G2_L20_Matching = "Grade_2/" . "Lesson_20/" . "Matching/";


        $G2_L20_Game349_Matching = [

            ['Planet', 'Onion', 'Parrot', 'Puzzle', "Pineapple"],
            ['Octopus', 'Owl', 'Panda', 'Oil', "Pig"],

        ];

        $G2_L20_Game349_Matching_image = [

            ['parrot', 'puzzle', 'pineapple', 'planet', "onion"],
            ['panda', 'pig', 'oil', 'owl', 'octopus'],

        ];


        for ($i = 0; $i < count($G2_L20_Game349_Matching); $i++) {

            foreach ($G2_L20_Game349_Matching[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 349, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $G2_L20_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }

            foreach ($G2_L20_Game349_Matching_image[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 349, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $l2_G349_image . strtolower($q) . ".png", 'q_audio' => $AudioDomain . $G2_L20_Matching .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 20 Game 350 ( Listen and Write )
        ////////////////////////////////////////////////////////

        $G2_L20_writing = "Grade_2/" . "Lesson_20/" . "writing/";
        $l20_G350_image = $domain . "/storage/images/Grade_2/lesson_20/writing/";


        $q_G350 = [

            ["W", "P", "L", "I", "O", "L"],
            ["A", "P", "A", "N", "D"],
            ["N", "O", "I", "O", "N"],
            ["E", "L", "T", "A", "P", "N"],
            ["O", "P", "A", "T", "R", "R"],
            ["C", "T", "O", "U", "S", "O", "P"],
            ["C", "H", "I", "D", "O", "R"],
            ["O", "L", "V", "A"],
            ["I", "P", "G"],
            ["L", "O", "P", "O"],


        ];

        $a_G350 = [
            "PILLOW", "PANDA", "ONION", "PLANET", "PARROT", "OCTOPUS", "ORCHID", "OVAL", "PIG", "POOL"
        ];

        $G350_Index = 0;

        for ($i = 0; $i < count($q_G350); $i++) {
            foreach ($q_G350[$i] as $j) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 350, 'q_content' => $j, 'q_audio' => $AudioDomain . $G2_L20_writing . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('ans_n_ques')->insert([
                ['round' => $i + 1, 'game_id' => 350, 'q_image' => $l20_G350_image . str_replace(' ', '', strtolower($a_G350[$G350_Index])) . ".png", 'a_content' => $a_G350[$G350_Index], 'a_audio' => $AudioDomain . $G2_L20_writing . strtolower($a_G350[$G350_Index]) . ".mp3"],
            ]);
            $G350_Index++;
        }



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 20 Game 351 ( reading passage )
        ////////////////////////////////////////////////////////

        $G2_L20_reading_passage_path = "Grade_2/" . "Lesson_20/" . "reading_passage/";
        $l20_G351_image = $domain . "/storage/images/Grade_2/lesson_20/reading_passage/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 351, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 1, 'game_id' => 351, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 1, 'game_id' => 351, "q_audio" => $AudioDomain . $G2_L20_reading_passage_path . "On-Wednesday-Rosy-and-Jane-sw.mp3", "q_conver" => "On Wednesday, Rosy \nand Jane swim", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 1, 'game_id' => 351, "q_audio" => $AudioDomain . $G2_L20_reading_passage_path . "Rosy-likes-strawberry-On-Sund.mp3", "q_content" => null, 'q_conver' => "Rosy likes strawberry. On Sunday, she eats ten strawberries. Her friend is Jane. On Monday, she eats two watermelons. She likes them very much. On Wednesday, Rosy and Jane go to the park to swim. They can swim fast. They swim the whole day. Then, they drink orange juice. Rosy can sing and Jane can dance. On Friday, Rosy and Jane sing and dance. They can't play guitar.", 'a_content' => null, "background" => $l20_G351_image . "bg.jpg"],


            ['round' => 2, 'game_id' => 351, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 351, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 351, "q_audio" => $AudioDomain . $G2_L20_reading_passage_path . "Rosy-can-sing-and-Jane-can-dan.mp3", "q_conver" =>  "Rosy can sing and \nJane can dance.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 351, "q_audio" => $AudioDomain . $G2_L20_reading_passage_path . "Rosy-likes-strawberry-On-Sund.mp3", "q_content" => null, 'q_conver' => "Rosy likes strawberry. On Sunday, she eats ten strawberries. Her friend is Jane. On Monday, she eats two watermelons. She likes them very much. On Wednesday, Rosy and Jane go to the park to swim. They can swim fast. They swim the whole day. Then, they drink orange juice. Rosy can sing and Jane can dance. On Friday, Rosy and Jane sing and dance. They can't play guitar.", 'a_content' => null, "background" => $l20_G351_image . "bg.jpg"],


            ['round' => 3, 'game_id' => 351, "q_audio" =>  null, 'q_content' => "True",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 351, "q_audio" =>  null, 'q_content' => "False",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 351, "q_audio" => $AudioDomain . $G2_L20_reading_passage_path . "They-can-play-guitar-True-fal.mp3", "q_conver" => "They can play guitar", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 351, "q_audio" => $AudioDomain . $G2_L20_reading_passage_path . "Rosy-likes-strawberry-On-Sund.mp3", "q_content" => null, 'q_conver' => "Rosy likes strawberry. On Sunday, she eats ten strawberries. Her friend is Jane. On Monday, she eats two watermelons. She likes them very much. On Wednesday, Rosy and Jane go to the park to swim. They can swim fast. They swim the whole day. Then, they drink orange juice. Rosy can sing and Jane can dance. On Friday, Rosy and Jane sing and dance. They can't play guitar.", 'a_content' => null, "background" => $l20_G351_image . "bg.jpg"],


            ['round' => 4, 'game_id' => 351, "q_audio" =>  null, 'q_content' => "True", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 351, "q_audio" =>  null, 'q_content' => "False", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 351, "q_audio" => $AudioDomain . $G2_L20_reading_passage_path . "On-Monday-Jane-eats-a-waterme.mp3", "q_conver" => "On Monday, Jane eats \na watermelon", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 351, "q_audio" => $AudioDomain . $G2_L20_reading_passage_path . "Rosy-likes-strawberry-On-Sund.mp3", "q_content" => null, 'q_conver' => "Rosy likes strawberry. On Sunday, she eats ten strawberries. Her friend is Jane. On Monday, she eats two watermelons. She likes them very much. On Wednesday, Rosy and Jane go to the park to swim. They can swim fast. They swim the whole day. Then, they drink orange juice. Rosy can sing and Jane can dance. On Friday, Rosy and Jane sing and dance. They can't play guitar.", 'a_content' => null, "background" => $l20_G351_image . "bg.jpg"],


            ['round' => 5, 'game_id' => 351, "q_audio" => null, 'q_content' => "True", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 351, "q_audio" => null, 'q_content' => "False", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 351, "q_audio" => $AudioDomain . $G2_L20_reading_passage_path . "On-Sunday-Rosy-eats-strawberr.mp3", "q_conver" => "On Sunday, Rosy eats \nstrawberry", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 351, "q_audio" => $AudioDomain . $G2_L20_reading_passage_path . "Rosy-likes-strawberry-On-Sund.mp3", "q_content" => null, 'q_conver' => "Rosy likes strawberry. On Sunday, she eats ten strawberries. Her friend is Jane. On Monday, she eats two watermelons. She likes them very much. On Wednesday, Rosy and Jane go to the park to swim. They can swim fast. They swim the whole day. Then, they drink orange juice. Rosy can sing and Jane can dance. On Friday, Rosy and Jane sing and dance. They can't play guitar.", 'a_content' => null, "background" => $l20_G351_image . "bg.jpg"],

        ]);
    }
}
