<?php

namespace Database\Seeders\PSNSeeder;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PSNAnsNQuesSeeder extends Seeder
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

        $backgroundDomain = $domain."/storage/images/Backgrounds/";



        // $domainAndAudioPath = $domain."/storage/AtoZ/";
        $prefix = "SubBlock_";
        $AtoZ = range('A', 'Z');




        ////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 1 ( no round )


        DB::table('ans_n_ques')->insert(['game_id' => 1, 'a_content' => 'mC7cPT2F23E', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 1, 'a_content' => 'mC7cPT2F23E (Global)', 'isLocal' => 0]);


        ////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 2 ( no round )

        $AZ = range("A", "Z");
        foreach ($AZ as $key) {
            DB::table('ans_n_ques')->insert([
                ['game_id' => 2, 'a_content' => $key, 'a_image' => $ImageDomainAZ . $key . ".png", 'a_audio' => $AtoZAudio . $prefix . $key . ".mp3"],
            ]);
        }


        ////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 3 ( no round )


        DB::table('ans_n_ques')->insert(['game_id' => 3, 'a_content' => 'b_gBZ-tfAJ4', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 3, 'a_content' => 'b_gBZ-tfAJ4(Global)', 'isLocal' => 0]);



        ///////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 4 ( listen and practice )


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
                [
                    'round' => $i + 1, 'game_id' => 4, 'q_audio' => $AudioDomain . $G1_L1_U4_path . $audios[$index] . ".mp3", 'a_content' => $answers[$index], 'q_conver' => $conver[$index], 'background' => $i + 1 > 4 && $i + 1 < 8 ? $backgroundDomain."G1_L1_U4_bg2".".png" : $backgroundDomain."G1_L1_U4_bg1".".png"
                ],
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
        ////    Grade 1  Lesson 2 Game 7 ( no round )
        ///////////////////////////////////////////////////////

        $az = range("A", "Z");
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
                    ['round' => $i + 1, 'game_id' => 9, 'q_content' => $word, 'q_audio' => $AtoZAudio . $prefix . strtoupper($word) . ".mp3",],
                ]);
            }

                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 9,'background' => $backgroundDomain."G1_L1_U4_bg1".".png"],
                ]);

        }

        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 2 Game 10 ( matching )
        ////////////////////////////////////////////////////////

        $g1_l2_g10 = [

            ['H','L','B','O','M'],
            ['G','J','N','Q','T'],
            ['P','S','C','F','K'],

        ];

        for ($i= 0 ; $i < count($g1_l2_g10) ; $i++) {

            foreach ($g1_l2_g10[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    ['game_id' => 10, 'round' => $i + 1,'q_content' => $q,
                    'q_image' => $q,'q_audio' => $AtoZAudio.$prefix.strtoupper($q).".mp3",]
                ]);

           }
            foreach ($g1_l2_g10[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    ['game_id' => 10, 'round' => $i + 1,'q_content' => strtolower($q),
                    'q_image' => strtolower($q),'q_audio' => $AtoZAudio.$prefix.strtoupper($q).".mp3",]
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
        ////    Grade 1  Lesson 7 Game 38,39 (Sub Units)
        ////////////////////////////////////////////////////////

        $g1_l7_u6_trace_n_write = [
            'G','H','e','f','g','h','F','E'
        ];
            foreach ($g1_l7_u6_trace_n_write as $i => $trace) {
                DB::table('ans_n_ques')->insert([
                    ['round' => $i + 1, 'game_id' => 39, 'q_audio' => $trace.".mp3"
                    ,'q_image' =>$trace.".GIF",'q_content' => $trace],
                ]);
            }

        $g1_l7_u6_rearrange_the_letter_q1 = [
            ['A','B','L','L'],
            ['A','C','E','K'],
            ['G','D','O'],
            ['D','U','S','T','R','E'],
            ['P','A','E','L','P'],
            ['N','A','T'],
        ];

        $g1_l7_u6_rearrange_the_letter_q2 = [
            '_all','_ake','_og','_uster','_pple','_nt'
        ];

        $correctAns =   [

         ['B'],
         ['C'],
         ['D'],
         ['D'],
         ['A'],
         ['A'],

        ];

        $g1_l7_u6_rearrange_the_letter_a = [
            'BALL','CAKE','DOG','DUSTER','APPLE','ANT'
        ];




        for ($i=0; $i < count($g1_l7_u6_rearrange_the_letter_q1) ; $i++) {

            $roundAnswers = [];
            foreach ($g1_l7_u6_rearrange_the_letter_q1[$i] as $k => $word) {

                $isCorrect = in_array($word, $correctAns[$i]);
                $roundAnswers[] = $isCorrect;

                DB::table('ans_n_ques')->insert([
                    [   'round' => $i + 1, 'game_id' => 40,
                        'q_audio' => $word.".mp3",'q_content' => $word,
                        'a_content' => $isCorrect ? 1 : 0,
                    ]
                ]);
            }

            $roundAnswer = implode('', $roundAnswers);

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 40,
                    'q_audio' => $g1_l7_u6_rearrange_the_letter_a[$i].".mp3",
                    'q_image' =>$g1_l7_u6_rearrange_the_letter_a[$i]."_image".".jpg" ,
                    'q_content' => $g1_l7_u6_rearrange_the_letter_q2[$i],
                    'a_content' => $g1_l7_u6_rearrange_the_letter_a[$i]
                ],
            ]);

        }


    ////////////////////////////////////////////////////////
    ////    Grade 1  Lesson 17 Games
    ////////////////////////////////////////////////////////


    //    Grade 1  Lesson 17 Games 2 subunit 1
    $bodyParts = ['Hair','Eye','Cheek','Lip','Tooth','Mouth','Chin'];
    foreach ($bodyParts as $part) {
          DB::table('ans_n_ques')->insert([
                ['game_id' => 99, 'q_audio' => $part.".mp3"
                ,'q_image' =>$part."image".".jpg" ],
            ]);
    }

      //    Grade 1  Lesson 17 Games 2 subunit 2


        $instructions = [ "don't touch your face", "don't touch your mouth",
                "don't touch your nose", "Touch your cheek","Touch your ears",
                "Touch your hair","Touch your Lips", "Touch your nose"
            ];

        foreach ($instructions as $key) {
            DB::table('ans_n_ques')->insert([
                ['game_id' => 100, 'a_content' => $key, 'a_image' => $key . ".png", 'a_audio' =>  $key . ".mp3"],
            ]);
        }






    }
}
