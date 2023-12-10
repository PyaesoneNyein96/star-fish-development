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


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

          ///////////////////////////////////////////////////////
        ////    Grade 1  Lesson 2 Game 7 ( no round )
        ///////////////////////////////////////////////////////

        $az = range("A", "Z");
        foreach ($az as $key) {
            DB::table('ans_n_ques')->insert([
                ['game_id' => 7, 'a_content' => strtolower($key) , 'a_image' => $ImageDomainAZ_small . $key . ".png", 'a_audio' => $AtoZAudio . $prefix . $key . ".mp3"],
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
        ////    Grade 1  Lesson 7 Games  (Sub Units) <letter_tracing>
        $imgDomain = $ImageDomain."Grade_1/Lesson_7/Writing_Sentences_order/";

        $g1_l7_u6_trace_n_write = [
            // 'G','H','e','f','g','h','F','E'
            'C','D','a','b','c','d','B','A'
        ];
            foreach ($g1_l7_u6_trace_n_write as $i => $trace) {
                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 39,
                        'q_audio' => $AtoZAudio.$prefix.strtoupper($trace).".mp3",
                        'a_content' => $trace,
                        'q_content' => ctype_lower($trace) ?  $imgDomain."dotted_small_".$trace.".png" : $imgDomain."dotted_".$trace.".png",
                        // 'q_image' => $imgDomain.$trace.".png",
                        'q_image' => ctype_lower($trace) ?  $imgDomain."small_".$trace.".png" : $imgDomain.$trace.".png",
                    ],
                ]);
            }
        // -------------------
        // < fill_in_the_blanks >

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
    $bodyParts = ['Hair','Eye_Null','Cheek','Lip','Teeth','Mouth','Chin'];

    $audioDomainPath = $AudioDomain."Grade_1/Lesson_17/Listen_and_Repeat/";
    $G1L17ImgDomain = $ImageDomain."Grade_1/Lesson_17/Listen_and_Repeat/";


    foreach ($bodyParts as $part) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 101,
                'q_audio' => $audioDomainPath.$part.".mp3",
                'q_image' =>$G1L17ImgDomain.$part.".png",
                'q_content' => $part

            ],
        ]);
    }
        DB::table('ans_n_ques')->insert([
            ['game_id' => 101, 'background' => $backgroundDomain."G1_L17_U2_head_bg".".png" ]
        ]);

      //    Grade 1  Lesson 17 Games 2 subunit 2


        $instructionsContent = [ "don't touch your face", "don't touch your mouth",
                "don't touch your nose", "Touch your cheek","Touch your ears",
                "Touch your hair","Touch your Lips", "Touch your nose"
            ];
        $instructions = [
            'Dont-touch-your-face', 'Dont-touch-your-mouth', 'Dont-touch-your-nose',
            'Touch-your-Cheek','Touch-your-ears','Touch-your-hair','Touch-your-lips','Touch-your-nose'
        ];


        $Img = $ImageDomain."Grade_1/Lesson_17/Listen_and_Repeat_2/";
        $audio = $AudioDomain."Grade_1/Lesson_17/Listen_and_Repeat/";

        foreach ($instructionsContent  as $i => $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 102, 'a_content' => $key,
                    'a_image' =>$Img.$instructions[$i].".png",
                    'a_audio' => $audio.$instructions[$i].".mp3"
                ],
            ]);
        }

    /////////////////////////////////////////////////


       //    Grade 1  Lesson 17 unit 5 Games 105

       $quesCharImg = ["Touch your cheek", "Touch your ear", "Don't touch your mouth","Don't touch your eye"];
       $quesCharAudio = ["Touch-your-cheek", "Touch-your-ear", "Dont-touch-your-mouth","Dont-touch-your-eyes"];
       $charContent = [
            ["pink_girl","blue_girl"], //1
            ["pink_girl_ear","blue_girl_mouth"], //1
            ["blue_girl_cheek","blue_girl_mouth"],  //1
            ["blue_girl_eye","orange_boy"], //2
       ];
       $ansChars = ["blue_girl_cheek","blue_girl_eye"];

       $qImg = $ImageDomain."Grade_1/Lesson_17/Listen_and_Act/";
       $qAudio = $AudioDomain."Grade_1/Lesson_17/Listen_&_act/";

       DB::table('ans_n_ques')->insert([
            ["game_id" => 105 , "round"=> 1, "q_image" => "starFishImage", "q_content" => "Touch your cheek", "q_audio" => $qAudio.$quesCharAudio[0].".mp3",
            "a_image" => $qImg.$charContent[0][0].".png", "a_content" => 1],
            ["game_id" => 105, "round"=> 1, "q_image" => null, "q_content" => null, "q_audio" => null,
            "a_image"  => $charContent[0][1].".png","a_content" => 0],

            ["game_id" => 105, "round"=> 2, "q_image" => "starFishImage", "q_content" => "Touch your ear", "q_audio" => $qAudio.$quesCharAudio[1].".mp3",
            "a_image" => $qImg.$charContent[1][0].".png", "a_content" => 1],
            ["game_id" => 105, "round"=> 2, "q_image" => null, "q_content" => null, "q_audio" => null,
            "a_image"  => $charContent[1][1].".png","a_content" => 0],

            ["game_id" => 105, "round"=> 3, "q_image" => "starFishImage", "q_content" => "Don't touch your mouth", "q_audio" => $qAudio.$quesCharAudio[2].".mp3",
            "a_image" => $qImg.$charContent[2][0].".png", "a_content" => 1],
            ["game_id" => 105, "round"=> 3, "q_image" => null, "q_content" => null, "q_audio" => null,
            "a_image"  => $charContent[2][1].".png","a_content" => 0],

            ["game_id" => 105, "round"=> 4, "q_image" => "starFishImage", "q_content" => "Don't touch your eye", "q_audio" => $qAudio.$quesCharAudio[3].".mp3",
            "a_image" => $qImg.$charContent[3][0].".png", "a_content" => 0],
            ["game_id" => 105, "round"=> 4, "q_image" => null, "q_content" => null, "q_audio" => null,
            "a_image"  => $charContent[3][1].".png","a_content" => 1],

       ]);



    }
}
