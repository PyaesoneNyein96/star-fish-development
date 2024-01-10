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
            ['round' => 1, 'game_id' => 253, 'a_image' => $l1G253image . "jane-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name-girl.mp3", "a_conver" => "What's your name?", "background" =>  $l1G253image . "bg.png"],
            ['round' => 1, 'game_id' => 253, 'a_image' => $l1G253image . "jack.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Jack.mp3", "a_conver" => "My name's Jack.", "background" =>  $l1G253image . "bg.png"],

            ['round' => 1, 'game_id' => 253, 'a_image' => $l1G253image . "rosy-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name-girl.mp3", "a_conver" => "What's your name?", "background" =>  $l1G253image . "bg.png"],
            ['round' => 1, 'game_id' => 253, 'a_image' => $l1G253image . "chris.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Chris.mp3", "a_conver" => "My name's Chris.", "background" =>  $l1G253image . "bg.png"],

            ['round' => 2, 'game_id' => 253, 'a_image' => $l1G253image . "jack-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name.mp3", "a_conver" => "What's your name?", "background" =>  $l1G253image . "bg.png"],
            ['round' => 2, 'game_id' => 253, 'a_image' => $l1G253image . "jane.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Jane.mp3", "a_conver" => "My name's Jane.", "background" =>  $l1G253image . "bg.png"],

            ['round' => 2, 'game_id' => 253, 'a_image' => $l1G253image . "chris-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name.mp3", "a_conver" => "What's your name?", "background" =>  $l1G253image . "bg.png"],
            ['round' => 2, 'game_id' => 253, 'a_image' => $l1G253image . "rosy.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Rosy.mp3", "a_conver" => "My name's Rosy.", "background" =>  $l1G253image . "bg.png"],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 1 Game 254 ( Practice for Speaking )
        //////////////////////////////////////////////////////////////

        $G2_L1_practice_speaking = "Grade_2/" . "Lesson_1/" . "practice_speaking/";
        $l1_G254image = $domain . "/storage/images/Grade_2/lesson_1/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 254,  "q_audio" =>  $AudioDomain . $G2_L1_practice_speaking . "Whats-your-name-girl" . ".mp3", 'q_image' => $l1_G254image . "teacher.png", "q_content" => "What is your name?"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 1 Game 255 ( listen and practice )
        //////////////////////////////////////////////////////////////

        $G2_L1_listen_n_practice = "Grade_2/" . "Lesson_1/" . "listen_n_practice/";
        $l1_G255image = $domain . "/storage/images/Grade_2/lesson_1/listen_n_practice/";

        DB::table('ans_n_ques')->insert([

            ['round' => 1, 'game_id' => 255, 'a_image' => $l1_G255image . "teacher.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "These-two-are-the-same-Im-Su.mp3", "a_conver" => "There two are the same. \nI'm Su Su. = My name's Su Su.", "background" =>  $l1_G255image . "bg1.png"],


            ['round' => 2, 'game_id' => 255, 'a_image' => $l1_G255image . "jane.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-my-names-Jane.mp3", "a_conver" => "Hello, my name's Jane. \nWhat's your name?", "background" =>  $l1_G255image . "bg2.png"],
            ['round' => 2, 'game_id' => 255, 'a_image' => $l1_G255image . "chris.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hi-my-names-Chris-Im-Chris.mp3", "a_conver" => "Hi, my name's Chris. \nI'm Chris.", "background" =>  $l1_G255image . "bg2.png"],

            ['round' => 3, 'game_id' => 255, 'a_image' => $l1_G255image . "rosy.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-my-names-Rosy-Whats.mp3", "a_conver" => "Hello, my name's Rosy. \nWhat's your name?", "background" =>  $l1_G255image . "bg2.png"],
            ['round' => 3, 'game_id' => 255, 'a_image' => $l1_G255image . "jane-right.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hi-my-names-Jane-Im-Jane.mp3", "a_conver" => "Hi, my name's Jane. \nI'm Jane.", "background" =>  $l1_G255image . "bg2.png"],


            ['round' => 4, 'game_id' => 255, 'a_image' => $l1_G255image . "teacher.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "He-is-Hes-She-is-Shes.mp3", "a_conver" => "He is = He's \nShe is = She's", "background" =>  $l1_G255image . "bg1.png"],


            ['round' => 5, 'game_id' => 255, 'a_image' => $l1_G255image . "jack.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-my-names-Jack-Whats.mp3", "a_conver" => "Hello, my name's Jack. \nWhat's your name?", "background" =>  $l1_G255image . "bg3.png"],
            ['round' => 5, 'game_id' => 255, 'a_image' => $l1_G255image . "jane-right.png", "a_audio" =>  $AudioDomain . $G2_L1_listen_n_practice . "Hi-my-names-Jane.mp3", "a_conver" => "Hello, my name's Jane.", "background" =>  $l1_G255image . "bg3.png"],
            ['round' => 5, 'game_id' => 255, 'a_image' => $l1_G255image . "jack.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-Jane-Shes-Rosy.mp3", "a_conver" => "Hello, Jane. \nShe's Rosy.", "background" =>  $l1_G255image . "bg3.png"],

            ['round' => 6, 'game_id' => 255, 'a_image' => $l1_G255image . "jack.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-my-names-Jane.mp3", "a_conver" => "Hello, my name's Jane. \nWhat's your name?", "background" =>  $l1_G255image . "bg4.png"],
            ['round' => 6, 'game_id' => 255, 'a_image' => $l1_G255image . "rosy-right.png", "a_audio" =>  $AudioDomain . $G2_L1_listen_n_practice . "Hi-my-names-Rosy-Im-Rosy.mp3", "a_conver" => "Hi, my name's Rosy. \nI'm Rosy.", "background" =>  $l1_G255image . "bg4.png"],
            ['round' => 6, 'game_id' => 255, 'a_image' => $l1_G255image . "jane.png", "a_audio" => $AudioDomain . $G2_L1_listen_n_practice . "Hello-rosy-Hes-Chris.mp3", "a_conver" => "Hello, Rosy. \nShe's Chris.", "background" =>  $l1_G255image . "bg4.png"],

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
            "Hello, my ____ Rosy. \nWhat's your ____ ?",
            "Hi, ____ Chris. \nHello Chris. ____ Rosy.",
            "Hello, my ____ Chris. \nWhat's your ____ ?",
            "Hi, ____ Jane. What's your \n____ ? ____ Jack.",
            "Hello, my ____ Jane. \nWhat's your ____ ?",
            "Hi, ____ Rosy. \nWhat's your ____ ?",
            "Hi, ____ Rosy. \nHello Rosy. ____ Chris.",
            "Hello, My ____ Jane. \n What's your ____ ?",
            "Hi, ____ Jane. \nWhat's your ____ ? \n____ Jack."
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

        $g1_l16_Game256_fill_a = [
            "Hello, my name's Rosy. What's your name ?", "Hi, I'm Chris. Hello Chris. She's Rosy.", "Hello, my name's Chris. What's your name ?", "Hi, She's Jane. What's your name ? I'm Jack.", "Hello, my name's Jane. What's your name ?", "Hi, I'm Rosy. What's your name ?", "Hi, She's Rosy. Hello Rosy. I'm Chris.", "Hi, I'm Jane. What's your name ?", "Hi, She's Jane. What's your name ? I'm Jack."
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
            ['round' => 3, 'game_id' => 257, 'q_audio' => $AudioDomain . $G2_L1_Speaking . "SubBlock_Hello-I-am-rosy-Whats-your-na" . ".mp3", 'q_image' => $l1_G257_image . "girl.png", "q_content" => "Hi, my name is _____.", "q_conver" => "Hello, I am Rosy. What's your name? Introduce me your friends, please."],

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
            ['round' => 3, 'game_id' => 263, 'q_audio' => $AudioDomain . $G2_L2_listen_n_speak . "look-at-the-picture-and-say-wh" . ".mp3", 'q_image' => $l2_G263image . "teacher.png", "q_content" => $l2_G263image . "bicycle.png", "q_conver" => "Look at the pictures and say \nwhat you like and don't like."],
            ['round' => 4, 'game_id' => 263, 'q_audio' => $AudioDomain . $G2_L2_listen_n_speak . "look-at-the-picture-and-say-wh" . ".mp3", 'q_image' => $l2_G263image . "teacher.png", "q_content" => $l2_G263image . "apple.png", "q_conver" => "Look at the pictures and say \nwhat you like and don't like."],
        ]);
    }
}
