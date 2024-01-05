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
        ////    Grade 2  Lesson 1 Game 253 ( video )
        //////////////////////////////////////////////////////////////


        DB::table('ans_n_ques')->insert(['game_id' => 253, 'a_content' => 'lesson_1_video', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 253, 'a_content' => 'lesson_1_video_global', 'isLocal' => 0]);


        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 1 Game 254 ( pronounciation )
        //////////////////////////////////////////////////////////////


        $G2_L1_pronoun = "Grade_2/" . "Lesson_1/" . "pronounciation/";
        $l1G254image = $domain . "/storage/images/Grade_2/lesson_1/pronounciation/";


        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 254, 'a_image' => $l1G254image . "jane-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name-girl.mp3", "a_conver" => "What's your name?", "background" =>  $l1G254image . "bg.png"],
            ['round' => 1, 'game_id' => 254, 'a_image' => $l1G254image . "jack.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Jack.mp3", "a_conver" => "My name's Jack.", "background" =>  $l1G254image . "bg.png"],

            ['round' => 1, 'game_id' => 254, 'a_image' => $l1G254image . "rosy-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name-girl.mp3", "a_conver" => "What's your name?", "background" =>  $l1G254image . "bg.png"],
            ['round' => 1, 'game_id' => 254, 'a_image' => $l1G254image . "chris.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Chris.mp3", "a_conver" => "My name's Chris.", "background" =>  $l1G254image . "bg.png"],

            ['round' => 2, 'game_id' => 254, 'a_image' => $l1G254image . "jack-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name.mp3", "a_conver" => "What's your name?", "background" =>  $l1G254image . "bg.png"],
            ['round' => 2, 'game_id' => 254, 'a_image' => $l1G254image . "jane.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Jane.mp3", "a_conver" => "My name's Jane.", "background" =>  $l1G254image . "bg.png"],

            ['round' => 2, 'game_id' => 254, 'a_image' => $l1G254image . "chris-what.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "Whats-your-name.mp3", "a_conver" => "What's your name?", "background" =>  $l1G254image . "bg.png"],
            ['round' => 2, 'game_id' => 254, 'a_image' => $l1G254image . "rosy.png", "a_audio" => $AudioDomain . $G2_L1_pronoun . "My-names-Rosy.mp3", "a_conver" => "My name's Rosy.", "background" =>  $l1G254image . "bg.png"],

        ]);


        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 1 Game 255 ( Practice for Speaking )
        //////////////////////////////////////////////////////////////

        $G2_L1_practice_speaking = "Grade_2/" . "Lesson_1/" . "practice_speaking/";
        $l1_G255image = $domain . "/storage/images/Grade_2/lesson_1/practice_speaking/";

        DB::table('ans_n_ques')->insert([
            ['round' => 1, 'game_id' => 255,  "q_audio" =>  $AudioDomain . $G2_L1_practice_speaking . "Whats-your-name-girl" . ".mp3", 'q_image' => $l1_G255image . "teacher.png", "q_content" => "What is your name?"],
        ]);



        //////////////////////////////////////////////////////////////
        ////    Grade 2  Lesson 1 Game 256 ( listen and practice )
        //////////////////////////////////////////////////////////////

        $G2_L1_listen_n_practice = "Grade_2/" . "Lesson_1/" . "listen_n_practice/";
        $l1_G256image = $domain . "/storage/images/Grade_2/lesson_1/listen_n_practice/";
    }
}
