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
