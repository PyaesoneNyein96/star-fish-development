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
                    'a_audio' => $AudioDomain . $G2_L3_reading . str_replace(' ', '', strtolower($key)) . ".mp3"
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
            ['round' => 14, 'game_id' => 265,  'q_image' => $l3_G265_image . "teacher.png", "q_content" => null],
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
            ['round' => 1, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "Hello-my-name-s-Jane.mp3", "q_content" => "I like fruits.", 'q_conver' => "Hello, my name's Jane. My feelings change like you. When I want to drink, I'm thirsty. I feel hungry when I want to eat. I feel excited when I play with friends, but I feel bored when I watch movies. When I visit my grandparents, I am happy.", 'a_content' => null, "background" => $l3_G266_image . "bg.jpg"],


            ['round' => 2, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "excited.mp3", 'q_content' => "excited", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "happy.mp3", 'q_content' => "happy", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 2, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "thirsty.mp3", 'q_content' => "thirsty", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 2, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "SubBlock_When-Jane-Wants-to-drink-She.mp3", "q_conver" =>  "When Jane wants to drink,\nshe's ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 2, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "Hello-my-name-s-Jane.mp3", "q_content" => "I like fruits.", 'q_conver' => "Hello, my name's Jane. My feelings change like you. When I want to drink, I'm thirsty. I feel hungry when I want to eat. I feel excited when I play with friends, but I feel bored when I watch movies. When I visit my grandparents, I am happy.", 'a_content' => null, "background" => $l3_G266_image . "bg.jpg"],


            ['round' => 3, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "happy.mp3", 'q_content' => "happy",  "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "excited.mp3", 'q_content' => "excited",  "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 3, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "bored.mp3", 'q_content' => "bored", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 3, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "SubBlock_Jane-feels-when-she-plays-with.mp3", "q_conver" => "Jane feels ____,\nwhen she plays with friends", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 3, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "Hello-my-name-s-Jane.mp3", "q_content" => "I like fruits.", 'q_conver' => "Hello, my name's Jane. My feelings change like you. When I want to drink, I'm thirsty. I feel hungry when I want to eat. I feel excited when I play with friends, but I feel bored when I watch movies. When I visit my grandparents, I am happy.", 'a_content' => null, "background" => $l3_G266_image . "bg.jpg"],


            ['round' => 4, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "bored.mp3", 'q_content' => "bored", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 4, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "hungry.mp3", 'q_content' => "hungry", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "thirsty.mp3", 'q_content' => "thirsty", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 4, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "SubBlock_Jane-feels-when-she-watches-mo.mp3", "q_conver" => "Jane feels ____,\nwhen she watches movies.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 4, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "Hello-my-name-s-Jane.mp3", "q_content" => "I like fruits.", 'q_conver' => "Hello, my name's Jane. My feelings change like you. When I want to drink, I'm thirsty. I feel hungry when I want to eat. I feel excited when I play with friends, but I feel bored when I watch movies. When I visit my grandparents, I am happy.", 'a_content' => null, "background" => $l3_G266_image . "bg.jpg"],


            ['round' => 5, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "hungry.mp3", 'q_content' => "hungry", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "happy.mp3", 'q_content' => "happy", "q_conver" => null, 'a_content' => 1, "background" => null],
            ['round' => 5, 'game_id' => 266, "q_audio" =>  $AudioDomain . $G2_L3_reading_passage_path . "thirsty.mp3", 'q_content' => "thirsty", "q_conver" => null, 'a_content' => 0, "background" => null],
            ['round' => 5, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "SubBlock_When-jane-visits-her-grandpare.mp3", "q_conver" => "When Jane visits her \ngrandparents, she's ____.", 'q_content' => null, 'a_content' => null, "background" => null],
            ['round' => 5, 'game_id' => 266, "q_audio" => $AudioDomain . $G2_L3_reading_passage_path . "Hello-my-name-s-Jane.mp3", "q_content" => "I like fruits.", 'q_conver' => "Hello, my name's Jane. My feelings change like you. When I want to drink, I'm thirsty. I feel hungry when I want to eat. I feel excited when I play with friends, but I feel bored when I watch movies. When I visit my grandparents, I am happy.", 'a_content' => null, "background" => $l3_G266_image . "bg.jpg"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 4 Game 267 (  Read  )
        ////////////////////////////////////////////////////////

        $l4_G267_image = $domain . "/storage/images/Grade_2/lesson_4/read/";
        $G2_L4_read = "Grade_2/" . "Lesson_4/" . "read/";


        $ans_G267 = [
            "Cake", "Cat", "Circle", "Clock",  "Coconut", "Cucumber", "Cup", "Dad", "Dance", "Dear", "Desk", "Dinosaur", "Doll", "Door", "Duck"
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


            ['round' => 3, 'game_id' => 268, 'q_audio' =>  $AudioDomain . $G2_L4_trace_word . "deer" . ".mp3", 'q_content' =>  null, 'q_image' => $l4_G268_image . "deer" . ".png", 'a_content' => "dear"],
            ['round' => 3, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "d" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_e" . ".png", 'q_image' => null, 'a_content' => null],
            ['round' => 3, 'game_id' => 268, 'q_audio' => null, 'q_content' =>  $l4_G268_image . "small_a" . ".png", 'q_image' => null, 'a_content' => null],
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

            ['Doll', 'Door', 'Desk', 'Dinosaur', "Dear"],
            ['Cat', 'Cup', 'Cake', 'Clock', "Circle"],

        ];

        $G2_L4_Game269_Matching_image = [

            ['desk', 'deer', 'door', 'doll', 'dinosaur'],
            ['cake', 'circle', 'cup', 'cat', "circle"],

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
            ['round' => 3, 'game_id' => 271,  'q_image' => $l4G271image . "teacher.png", "q_content" => "Hi, I'm _____ (add your name). I'm _____. I like ____ and _____. I don't like ____ and _____. What about you?"],
        ]);




        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 5 Game 271 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 271, 'a_content' => 'lesson_5_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 271, 'a_content' => 'lesson_5_video_global', 'isLocal' => 0]);



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
        ////    Grade 1  Lesson 5 Game 274 (  song  )
        ////////////////////////////////////////////////////////

        DB::table('ans_n_ques')->insert(['game_id' => 274, 'a_content' => 'lesson_5_song', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 274, 'a_content' => 'lesson_5_song_global', 'isLocal' => 0]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 5 Game 275 (  song  )
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
                    'game_id' => 277, 'a_content' => $key, 'a_image' => $l6_G277_G278_image . $ans_G277[$G2_L6_Game277_index] . ".jpg",
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
    }
}