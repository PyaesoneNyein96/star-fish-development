<?php

namespace Database\Seeders\PsnSeeder;

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

        $backgroundDomain = $domain . "/storage/images/Backgrounds/";

        $AtoZUpdate = $domain . "/storage/audios/A_to_Z_update/";

        $AZUpdate = [
            'A-for-apple', 'B-for-ball', 'C-for-Cat', 'D-for-Dog', 'E-for-Elephant', 'F-for-Fish', 'G-for-Grapes', 'H-for-Hat', 'I-for-Ice-cream', 'J-for-Jug',
            'K-for-Kite', 'L-for-Lion', 'M-for-mouse', 'N-for-Noodles', 'O-for-Orange',
            'P-for-Panda', 'Q-for-Quail', 'R-for-ring', 'S-for-Snake', 'T-for-Tree', 'U-for-Umbrella', 'V-for-Violin', 'W-for-Whale', 'X-for-xylophone', 'Y-for-Yacht', 'Z-for-Zebra'
        ];
        // $domainAndAudioPath = $domain."/storage/AtoZ/";
        $prefix = "SubBlock_";
        $AtoZ = range('A', 'Z');




        ////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 1 ( no round )


        DB::table('ans_n_ques')->insert(['game_id' => 1, 'a_content' => 'mC7cPT2F23E', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 1, 'a_content' => 'mC7cPT2F23E (Global)', 'isLocal' => 0]);


        ////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 2 ( no round ) (reading_carousel)

        $AZ = range("A", "Z");
        foreach ($AZ as $k => $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 2, 'a_content' => $key, 'a_image' => $ImageDomainAZ . $key . ".png",
                    'a_audio' => $AudioDomain . "A_to_Z_update/" . $AZUpdate[$k] . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 3 ( no round )


        DB::table('ans_n_ques')->insert(['game_id' => 3, 'a_content' => 'b_gBZ-tfAJ4', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 3, 'a_content' => 'b_gBZ-tfAJ4(Global)', 'isLocal' => 0]);



        ///////////////////////////////////////////////////////
        ////    Grade 1  Lesson 1 Game 4 ( listen and practice )


        $G1_L1_U4_path = "Grade_1/Lesson_1/Listen_and_Practice/";
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
                    'round' => $i + 1, 'game_id' => 4,
                    'q_audio' => $AudioDomain . $G1_L1_U4_path . $audios[$index] . ".mp3", 'a_content' => $answers[$index],
                    'q_conver' => $conver[$index],
                    'background' => $i + 1 > 4 && $i + 1 < 8 ? $ImageDomain . $G1_L1_U4_path . "G1_L1_U4_bg2" . ".png" : $ImageDomain . $G1_L1_U4_path . "G1_L1_U4_bg1" . ".png"
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
        foreach ($az as $k => $key) {
            DB::table('ans_n_ques')->insert([
                ['game_id' => 7,
                'a_content' => strtolower($key), 'a_image' => $ImageDomainAZ_small . $key . ".png",
                'a_audio' => $AudioDomain . "A_to_Z_update/" . $AZUpdate[$k] . ".mp3"
            ],
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
                ['round' => $i + 1, 'game_id' => 9, 'background' => $ImageDomain."Grade_1/Lesson_2/Listen_n_Practice/" . "G1_L2_U4_bg" . ".png"],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 2 Game 10 ( matching )
        ////////////////////////////////////////////////////////

        $g1_l2_g10 = [

            ['H', 'L', 'B', 'O', 'M'],
            ['G', 'J', 'N', 'Q', 'T'],
            ['P', 'S', 'C', 'F', 'K'],

        ];

        $randomValues = [
            ['L', 'B', 'M', 'H', 'O'],
            ['G', 'N', 'T', 'J', 'Q'],
            ['F', 'C', 'S', 'P', 'K'],
        ];

        for ($i = 0; $i < count($g1_l2_g10); $i++) {

            foreach ($g1_l2_g10[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 10, 'round' => $i + 1,
                        'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $AtoZAudio . $prefix . strtoupper($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 10, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => strtolower($q), 'q_audio' => $AtoZAudio . $prefix . strtoupper($q) . ".mp3",
                    ]
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

        $AtoZsm = range('a','z');
        for ($i = 0; $i < count($g1_l2_g11); $i++) {

            for ($j = 0; $j < count($AtoZsm); $j++) {
                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 11,
                        'q_content' => $AtoZsm[$j],
                        'a_content' => in_array($AtoZsm[$j], $g1_l2_g11[$i]) ? 1 : 0,
                    ],
                ]);
            }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 7 Games 2 (Carousel)


        $L7_U2_content = ['Apple', 'Ball', 'Boy', 'Ant', 'Airplane', 'Cake', 'Cup', 'Dog', 'Duster', 'Doll'];

        $L7_U2_Img = $ImageDomain . "Grade_1/Lesson_7/Read_Listen_and_Repeat/";
        $L7_U2_audio = $AudioDomain . "Grade_1/Lesson_7/Read_Listen_and_Repeat/";

        foreach ($L7_U2_content as $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 35, 'a_content' => $key, 'a_image' => $L7_U2_Img . strtolower($key) . ".png",
                    'a_audio' => $L7_U2_audio . strtolower($key) . ".mp3"
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 7 Games 3

        $L7_U3_items_1 = ['airplane', 'doll', 'dog', 'apple', 'cup', 'banana'];
        $L7_U3_items_2 = ['ball', 'boy', 'cake', 'ant', 'car', 'duster'];

        $L7_U3_Img = $ImageDomain . "Grade_1/Lesson_7/Listening_and_practice/";
        $L7_U3_audio = $AudioDomain . "Grade_1/Lesson_7/Listening_and_practice/";

        foreach ($L7_U3_items_1 as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 36, 'round' => 1, 'a_content' => $value, 'q_image' => $L7_U3_Img . $value . ".png",
                    'a_audio' => $L7_U3_audio . $value . ".mp3",
                    'background' => $L7_U3_Img . "bg.png"
                ],

                [
                    'game_id' => 36, 'round' => 2, 'a_content' => $L7_U3_items_2[$key], 'q_image' => $L7_U3_Img . $L7_U3_items_2[$key] . ".png",
                    'a_audio' => $L7_U3_audio . $L7_U3_items_2[$key] . ".mp3",
                    'background' => $L7_U3_Img . "bg.png"
                ]

            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 7 Games 4 (Matching)


        $g1_l7_g4 = [

            ['cake', 'cup', 'car', 'dog', 'duster'],
            ['ant', 'apple', 'airplane', 'ball', 'boy'],

        ];

        $randomValues = [
            ['duster', 'cake', 'dog', 'car', 'cup'],
            ['apple', 'ant', 'boy', 'ball', 'airplane'],
        ];

        for ($i = 0; $i < count($g1_l7_g4); $i++) {

            foreach ($g1_l7_g4[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 37, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $AudioDomain . "Grade_1/Lesson_7/Matching/" . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 37, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => $ImageDomain . "Grade_1/Lesson_7/Matching/" . strtolower($q) . ".png",
                        'q_audio' => $AudioDomain . "Grade_1/Lesson_7/Matching/" . strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 7 Games 5 (speaking_and_recording)


        $g1L7U5 = [
            "cup", 'airplane', 'cake', 'apple', 'banana', 'car', 'ball', 'ant', 'dog', 'boy',
        ];


        foreach ($g1L7U5 as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 38, 'round' => $key + 1, 'q_content' => "what's this ?",
                    'q_audio' => $AudioDomain."Grade_1/Lesson_7/Speaking_Practice/"."whats_this".".mp3",
                    'q_image' => $ImageDomain . "Grade_1/Lesson_7/Speaking_Practice/" . $g1L7U5[$key] . ".png",
                    'a_content' => $value
                ]

            ]);
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 7 Games 6  (Sub Units) <letter_tracing>


        $imgDomain = $ImageDomain . "Grade_1/Lesson_7/Writing_Sentences_order/";

        $g1_l7_u6_trace_n_write = [
            // 'G','H','e','f','g','h','F','E'
            'C', 'D', 'a', 'b', 'c', 'd', 'B', 'A'
        ];
        foreach ($g1_l7_u6_trace_n_write as $i => $trace) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 39,
                    'q_audio' => $AtoZAudio . $prefix . strtoupper($trace) . ".mp3",
                    'a_content' => $trace,
                    'q_content' => ctype_lower($trace) ?  $imgDomain . "dotted_small_" . $trace . ".png" : $imgDomain . "dotted_" . $trace . ".png",
                    // 'q_image' => $imgDomain.$trace.".png",
                    'q_image' => ctype_lower($trace) ?  $imgDomain . "small_" . $trace . ".png" : $imgDomain . $trace . ".png",
                ],
            ]);
        }
        // // -------------------
        // // < fill_in_the_blanks >

        // $g1_l7_u6_rearrange_the_letter_q1 = [
        //     ['A','B','L','L'],
        //     ['A','C','E','K'],
        //     ['G','D','O'],
        //     ['D','U','S','T','R','E'],
        //     ['P','A','E','L','P'],
        //     ['N','A','T'],
        // ];

        // $g1_l7_u6_rearrange_the_letter_q2 = [
        //     '_all','_ake','_og','_uster','_pple','_nt'
        // ];

        // $correctAns =   [

        //  ['B'],
        //  ['C'],
        //  ['D'],
        //  ['D'],
        //  ['A'],
        //  ['A'],

        // ];

        // // $g1_l7_u6_rearrange_the_letter_a = [
        // //     'BALL','CAKE','DOG','DUSTER','APPLE','ANT'
        // // ];
        // $g1_l7_u6_rearrange_the_letter_a = [
        //     'Ball','Cake','Dog','Duster','Apple','Ant'
        // ];




        // for ($i=0; $i < count($g1_l7_u6_rearrange_the_letter_q1) ; $i++) {

        //     $roundAnswers = [];
        //     foreach ($g1_l7_u6_rearrange_the_letter_q1[$i] as $k => $word) {

        //         $isCorrect = in_array($word, $correctAns[$i]);
        //         $roundAnswers[] = $isCorrect;

        //         DB::table('ans_n_ques')->insert([
        //             [   'round' => $i + 1, 'game_id' => 40,
        //                 'q_audio' => $word.".mp3",'q_content' => $word,
        //                 'a_content' => $isCorrect ? 1 : 0,
        //             ]
        //         ]);
        //     }

        //     // $roundAnswer = implode('', $roundAnswers);

        //     DB::table('ans_n_ques')->insert([
        //         [
        //             'round' => $i + 1, 'game_id' => 40,
        //             'q_audio' =>$AudioDomain."Grade_1/Lesson_7/Writing_Sentences_order/". $g1_l7_u6_rearrange_the_letter_a[$i].".mp3",
        //             'q_image' =>$ImageDomain."Grade_1/Lesson_7/Writing_Sentences_order/".$g1_l7_u6_rearrange_the_letter_a[$i].".png" ,
        //             'q_content' => $g1_l7_u6_rearrange_the_letter_q2[$i],
        //             'a_content' => $g1_l7_u6_rearrange_the_letter_a[$i],
        //         ],
        //     ]);

        // }


        // -------------------
        // < fill_in_the_blanks >

        $question_1 = [
            ['A', 'B', 'L', 'L'],
            ['A', 'C', 'E', 'K'],
            ['G', 'D', 'O'],
            ['D', 'U', 'S', 'T', 'R', 'E'],
            ['P', 'A', 'E', 'L', 'P'],
            ['N', 'A', 'T'],
        ];

        $question_2 = [
            '_all', '_ake', '_og', '_uster', '_pple', '_nt'
        ];

        $correctAns =   [
         ['B'],
         ['C'],
         ['D'],
         ['D'],
         ['A'],
         ['A'],

        ];


        $answer = [
            'Ball', 'Cake', 'Dog', 'Duster', 'Apple', 'Ant'
        ];

        $img = $ImageDomain."Grade_1/Lesson_7/Writing_Sentences_order/";
        $audio = $AudioDomain."Grade_1/Lesson_7/Writing_Sentences_order/";


        for ($i = 0; $i < count($question_1); $i++) {

            foreach ($question_1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 40,
                        'q_audio' => $word . ".mp3", 'q_content' => $word,
                        'a_content' => implode(' ', $correctAns[$i]),
                    ]
                ]);
            }


            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 40,
                    'q_audio' => $audio . $answer[$i] . ".mp3",
                    'q_image' => $img . $answer[$i] . ".png",
                    'q_content' => $question_2[$i],
                    'a_content' => $answer[$i],
                ],
            ]);
        }








        // lesson -7 END here




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 12 Games 2 (Carousel) (reading_carousel)


        $L12_U2_content = [
            'Ear', 'Egg', 'Eyes', 'Fan', 'Farm', 'Fish', 'Flower', 'Gate', 'Girl', 'Goat', 'Grass', 'Hand', 'Hat', 'House'
        ];
        $L12_U2_audio = [
            'Ear', 'Egg', 'Eye', 'Fan', 'Farm', 'Fish', 'Flower', 'Gate', 'Girl', 'Goat', 'Grass', 'Hand', 'Hat', 'House'
        ];

        foreach ($L12_U2_content as $k => $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 67, 'a_content' => $v,
                    'a_image' => $ImageDomain . "Grade_1/Lesson_12/Reading/" . $v . ".png",
                    'a_audio' => $AudioDomain . "Grade_1/Lesson_12/Reading/" . strtolower($L12_U2_audio[$k]) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 12 Games 3 (listen and practice) (listening_and_search_items)

        $L12_U3_content = [
            'girl', 'hand', 'ear', 'eggs', 'hat', 'dog','dinosaur','ball'
        ];

    $L12_U3_bg = $ImageDomain . "/Grade_1/Lesson_12/Listen_and_Practice/bg.png";
        foreach ($L12_U3_content as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 68, 'a_content' => $v,
                    'q_image' => $ImageDomain . "Grade_1/Lesson_12/Listen_and_Practice/" . $v . ".png",
                    'a_audio' => $AudioDomain . "Grade_1/Lesson_12/Listen_and_Practice/" . $v . ".mp3",
                    'a_content' => $v,
                    'round' => 1,
                    'background' => $L12_U3_bg
                ],
            ]);
        }


        // DB::table('ans_n_ques')->insert([
        //     ['game_id' => 68, 'round' => 1, 'background' => $L12_U3_bg]
        // ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 12 Games 4 (Matching)

        $L12_U4 = [
            ['Girl', 'Goat', 'Hand', 'Hat', 'House'],
            ['ear', 'eye', 'egg', 'fan', 'fish'],
        ];

        $L12_U4_rand = [
            ['Goat', 'Girl', 'House', 'Hat', 'Hand'],
            ['eye', 'ear', 'fan', 'fish', 'egg'],
        ];

        $L12_U4_img_path = "Grade_1/Lesson_12/Matching/";

        for ($i = 0; $i < count($L12_U4); $i++) {

            foreach ($L12_U4[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 69, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $AudioDomain . "Grade_1/Lesson_12/Matching/" . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($L12_U4_rand[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 69, 'round' => $i + 1, 'q_content' => strtolower($q),
                        //  'q_image' => $ImageDomain.strtolower($q).".png",
                        'q_image' => $ImageDomain . $L12_U4_img_path . strtolower($q) . ".png",
                        'q_audio' => $AudioDomain . "Grade_1/Lesson_12/Matching/".strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 12 Games 5 (speaking_and_recording)

        $L12_U5 = [
            "fan", 'girl', 'ear', 'egg', 'hat', 'flower', 'sunflower', 'house', 'goat', 'hamster',
        ];

        foreach ($L12_U5 as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 70, 'round' => $key + 1, 'q_content' => "Say the word?",
                    'q_audio' => $AudioDomain."Grade_1/Lesson_12/Speaking_and_recording/"."Say_the_word" . ".mp3", 'q_image' => $ImageDomain . "Grade_1/Lesson_12/Speaking_practice/" . $value . ".png", 'a_content' => $value
                ]

            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 12 Games 6 subunit-1 (Trace and Write)

        $imgDomain = $ImageDomain . "Grade_1/Lesson_12/trace_and_write/";

        $g1_L12_u6_trace_n_write = [
            'G', 'H', 'e', 'f', 'g', 'h', 'E', 'F'
        ];
        foreach ($g1_L12_u6_trace_n_write as $i => $trace) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 71,
                    'q_audio' => $AtoZAudio . $prefix . strtoupper($trace) . ".mp3",
                    'a_content' => $trace,
                    'q_content' => ctype_lower($trace) ?  $imgDomain . "dotted_small_" . $trace . ".png" : $imgDomain . "dotted_" . $trace . ".png",
                    // 'q_image' => $imgDomain.$trace.".png",
                    'q_image' => ctype_lower($trace) ?  $imgDomain . "small_" . $trace . ".png" : $imgDomain . $trace . ".png",
                ],
            ]);
        }


        ///////////////////////////////////////////////////////////
        // Grade 1 Lesson 12 U - 6 subunit-2 (fill_in_the_blanks)


        $question_1 = [
            ['E', 'Y', 'E'],
            ['G', 'O', 'A', 'T'],
            ['T', 'A', 'H'],
            ['G', 'S', 'A', 'R', 'S'],
            ['W', 'F', 'R', 'E', 'L', 'O'],
            ['R', 'A', 'E'],
            ['N', 'A', 'F'],
        ];

        $question_2 = [
            '_Y_', '_O_T', '__T', '_R_SS', '_LOW_R', '__R', '__N'
        ];

        $correctAns =   [

            ['E', 'E'],
            ['G', 'A'],
            ['H', 'A'],
            ['G', 'A'],
            ['F', 'E'],
            ['E', 'A'],
            ['F', 'A'],

        ];


        $answer = [
            'EYE', 'GOAT', 'HAT', 'GRASS', 'FLOWER', 'EAR', 'FAN'
        ];


        $img = $ImageDomain . "Grade_1/Lesson_12/Write_the_correct_letter/";
        $audio = $AudioDomain . "Grade_1/Lesson_12/Write_the_correct_letter/";


        for ($i = 0; $i < count($question_1); $i++) {

            foreach ($question_1[$i] as $k => $word) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 72,
                        'q_audio' => $word . ".mp3", 'q_content' => $word,
                        'a_content' => implode(' ', $correctAns[$i]),
                    ]
                ]);
            }


            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 72,
                    'q_audio' => $audio . $answer[$i] . ".mp3",
                    'q_image' => $img . $answer[$i] . ".png",
                    'q_content' => $question_2[$i],
                    'a_content' => $answer[$i],
                ],
            ]);
        }




        // for ($i=0; $i < count($g1_l7_u6_rearrange_the_letter_q1) ; $i++) {

        //     $roundAnswers = [];
        //     foreach ($g1_l7_u6_rearrange_the_letter_q1[$i] as $k => $word) {

        //         $isCorrect = in_array($word, $correctAns[$i]);
        //         $roundAnswers[] = $isCorrect;

        //         DB::table('ans_n_ques')->insert([
        //             [   'round' => $i + 1, 'game_id' => 72,
        //                 'q_audio' => $word.".mp3",
        //                 'q_content' => $word,
        //                 'a_content' => $isCorrect ? 1 : 0,
        //             ]
        //         ]);
        //     }

        //     // $roundAnswer = implode('', $roundAnswers);

        //     DB::table('ans_n_ques')->insert([
        //         [
        //             'round' => $i + 1, 'game_id' => 72,
        //             'q_audio' => $AudioDomain."Grade_1/Lesson_12/Write_the_correct_letter/".$g1_l7_u6_rearrange_the_letter_a[$i].".mp3",
        //             'q_image' =>$ImageDomain."Grade_1/Lesson_12/Write_the_correct_letter/".$g1_l7_u6_rearrange_the_letter_a[$i].".png" ,
        //             'q_content' => $g1_l7_u6_rearrange_the_letter_q2[$i],
        //             'a_content' => $g1_l7_u6_rearrange_the_letter_a[$i]
        //         ],
        //     ]);

        // }















        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 17 Games
        ////////////////////////////////////////////////////////


        //    Grade 1  Lesson 17 Games 2 subunit - 1
        $bodyParts = ['Hair', 'Eye', 'Cheek', 'Lip', 'Teeth', 'Mouth', 'Chin', 'Nose'];

        $audioDomainPath = $AudioDomain . "Grade_1/Lesson_17/Listen_and_Repeat/";
        $G1L17ImgDomain = $ImageDomain . "Grade_1/Lesson_17/Listen_and_Repeat/";


        foreach ($bodyParts as $part) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 101,
                    'q_audio' => $audioDomainPath . $part . ".mp3",
                    'q_image' => $G1L17ImgDomain . $part . ".png",
                    'q_content' => $part

                ],
            ]);
        }
        DB::table('ans_n_ques')->insert([
            ['game_id' => 101, 'background' => $G1L17ImgDomain . "head_bg" . ".png"]
        ]);

        ///////////////////////////////////////////////
        //    Grade 1  Lesson 17 Games 2 subunit - 2

        $instructionsContent = [
            "don't touch your face", "don't touch your mouth",
            "don't touch your nose", "Touch your cheek", "Touch your ears",
            "Touch your hair", "Touch your Lips", "Touch your nose"
        ];
        $instructions = [
            'Dont-touch-your-face', 'Dont-touch-your-mouth', 'Dont-touch-your-nose',
            'Touch-your-cheek', 'Touch-your-ears', 'Touch-your-hair', 'Touch-your-lips', 'Touch-your-nose'
        ];


        $Img = $ImageDomain . "Grade_1/Lesson_17/Listen_and_Repeat_2/";
        $audio = $AudioDomain . "Grade_1/Lesson_17/Listen_and_Repeat/";

        foreach ($instructionsContent  as $i => $key) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 102, 'a_content' => $key,
                    'a_image' => $Img . $instructions[$i] . ".png",
                    'a_audio' => $audio . $instructions[$i] . ".mp3"
                ],
            ]);
        }


        ///////////////////////////////////////////////
        //    Grade 1  Lesson 17 Games 3 (drag_n_drop_and_pics)


        $G1L17U3facePart = ["nose", 'left-eye', 'right-eye', 'lip', 'left-ear', 'right-ear','face'];
        $facePartAudio = ["nose", 'left-eye', 'right-eye', 'lip', 'left-ear', 'right-ear','face'];
        $L17U3Img = $ImageDomain . "Grade_1/Lesson_17/Listen_and_Practice/";
        $L17U3Audio = $AudioDomain . "Grade_1/Lesson_17/Listen_and_Practice/";
        foreach ($G1L17U3facePart as $k => $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 103,
                    'a_content' => $v,
                    'q_image' => $L17U3Img . $v . ".png",
                    'q_audio' => $L17U3Audio.$facePartAudio[$k] . ".mp3",
                ]
            ]);
        }

        DB::table('ans_n_ques')->insert([
            ['game_id' => 103, 'background' => $ImageDomain . "Grade_1/Lesson_17/Listen_and_Practice/" . "bg.png"]
        ]);


        ///////////////////////////////////////////////
        //    Grade 1  Lesson 17 Games 4 (Matching)


        $G1L17U4 = [
            ['Hair', 'Chin', 'Nose', 'Face', 'Lips'],
            ['Mouth', 'Nose', 'Teeth', 'Eyes', 'Ears'],
        ];

        $G1L17U4_rand = [
            ['Nose', 'Chin', 'Lips', 'Hair', 'Face'],
            ['Eyes', 'Ears', 'Nose', 'Mouth', 'Teeth'],
        ];
        $L17U4Img = $ImageDomain . "Grade_1/Lesson_17/Matching/";
        $L17U4Audio = $AudioDomain . "Grade_1/Lesson_17/Matching/";
        for ($i = 0; $i < count($G1L17U4); $i++) {

            foreach ($G1L17U4[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 104, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' =>  $q ,
                        'q_audio' => $L17U4Audio . $q . ".mp3",
                    ]
                ]);
            }


            foreach ($G1L17U4_rand[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 104, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => $L17U4Img . strtolower($q) . ".png",
                        'q_audio' => $L17U4Audio . $q . ".mp3",
                    ]
                ]);
            }
        }



        /////////////////////////////////////////////////
        //    Grade 1  Lesson 17 unit 5 Games 105 (listening_conversation_and_choosing_answer)

        $charImg = "green_vector";
        $quesCharImg = ["Touch your cheek", "Touch your ear", "Don't touch your mouth", "Don't touch your eye"];
        $quesCharAudio = ["Touch-your-cheek", "Touch-your-ear", "Dont-touch-your-mouth", "Dont-touch-your-eyes"];
        $charContent = [
            ["pink_girl", "blue_girl"], //2
            ["pink_girl_ear", "blue_girl_mouth"], //1
            ["blue_girl_cheek", "blue_girl_mouth"],  //1
            ["blue_girl_eye", "orange_boy"], //2
        ];
        $ansChars = ["blue_girl_cheek", "blue_girl_eye"];

        $qImg = $ImageDomain . "Grade_1/Lesson_17/Listen_and_Act/";
        $qAudio = $AudioDomain . "Grade_1/Lesson_17/Listen_&_act/";

        DB::table('ans_n_ques')->insert([
            [
                "game_id" => 105, "round" => 1,  "q_content" => "Touch your cheek", "q_audio" => $qAudio . $quesCharAudio[0] . ".mp3",
                "a_image" => $qImg . $charContent[0][0] . ".png", "a_content" => 0
            ],
            [
                "game_id" => 105, "round" => 1,  "q_content" => null, "q_audio" => null,
                "a_image"  => $qImg . $charContent[0][1] . ".png", "a_content" => 1
            ],

            [
                "game_id" => 105, "round" => 2,  "q_content" => "Touch your ear", "q_audio" => $qAudio . $quesCharAudio[1] . ".mp3",
                "a_image" => $qImg . $charContent[1][0] . ".png", "a_content" => 1
            ],
            [
                "game_id" => 105, "round" => 2,  "q_content" => null, "q_audio" => null,
                "a_image"  => $qImg . $charContent[1][1] . ".png", "a_content" => 0
            ],

            [
                "game_id" => 105, "round" => 3,  "q_content" => "Don't touch your mouth", "q_audio" => $qAudio . $quesCharAudio[2] . ".mp3",
                "a_image" => $qImg . $charContent[2][0] . ".png", "a_content" => 1
            ],
            [
                "game_id" => 105, "round" => 3,  "q_content" => null, "q_audio" => null,
                "a_image"  => $qImg . $charContent[2][1] . ".png", "a_content" => 0
            ],

            [
                "game_id" => 105, "round" => 4,  "q_content" => "Don't touch your eye", "q_audio" => $qAudio . $quesCharAudio[3] . ".mp3",
                "a_image" => $qImg . $charContent[3][0] . ".png", "a_content" => 0
            ],
            [
                "game_id" => 105, "round" => 4,  "q_content" => null, "q_audio" => null,
                "a_image"  => $qImg . $charContent[3][1] . ".png", "a_content" => 1
            ],

        ]);



        /////////////////////////////////////////////////
        //    Grade 1  Lesson 17 unit 6 Games 106 (speaking_and_recording)


        $g1L17U6AC = [
            "Mouth", 'Hair', 'Nose', 'Mouth', 'Nose'
        ];

        $g1L17U6AnI = [
            "blueGirl_touch_mouth", "redBoy_touch_hair", "blueGirl_dont_touch_nose",
            "blueGirl_dont_touch_mouth", "redGirl_touch_nose"
        ];

        $g1L17U6QC = [
            "Touch your_____",
            "Touch your_____",
            "Don't touch your_____",
            "Don't touch your_____",
            "Touch your_____",

        ];


        foreach ($g1L17U6AnI as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 106, 'round' => $key + 1, 'q_content' => "Look at the picture say the sentence." . $g1L17U6QC[$key],
                    //   'q_audio' => $value.".mp3",
                    'q_image' => $ImageDomain . "Grade_1/Lesson_17/Speaking_Practice/" . $value . ".png", 'a_content' => $g1L17U6AC[$key]
                ]

            ]);
        }



        /////////////////////////////////////////////////
        //    Grade 1  Lesson 31 unit 2 Games  (reading_carousel)


        $L31_U2 = [
            'Sand', 'Shark', 'Snail', 'Snake', 'Squirrel', 'Star',
            'Table', 'Teeth', 'Ten', 'Tiger', 'Tree', 'Turtle'
        ];

        foreach ($L31_U2 as $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 192,
                    'a_image' => $ImageDomain . "Grade_1/Lesson_31/Listen_and_Repeat/" . $value . ".png",
                    'a_audio' => $AudioDomain . "Grade_1/Lesson_31/Listen_and_Repeat/" . strtolower($value) . ".mp3",
                    'a_content' => $value
                ]
            ]);
        }



        /////////////////////////////////////////////////
        //    Grade 1  Lesson 31 unit 3 SubUnit Game - 1  (listening_and_search_items)

        $L31_U3 = [
            'Snail', 'Tiger', 'Squirrel', 'Turtle', 'Snake',
        ];

        foreach ($L31_U3 as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 193, 'a_content' => $v,
                    'q_image' => $ImageDomain . "Grade_1/Lesson_31/Listen_and_Practice/Game_1/" . strtolower($v) . ".png",
                    'a_audio' => $AudioDomain . "Grade_1/Lesson_31/Listen_and_Practice/" . strtolower($v) . ".mp3",
                    'a_content' => $v,
                    'round' => 1,
                    'background' => $ImageDomain . "/Grade_1/Lesson_31/Listen_and_Practice/Game_1/bg.png"
                ],
            ]);
        }

        // $L12_U3_bg = $ImageDomain . "/Grade_1/Lesson_31/Listen_and_Practice/Game_1/bg.png";

        // DB::table('ans_n_ques')->insert([
        //     ['game_id' => 193, 'round' => 1, 'background' => $L12_U3_bg]
        // ]);




        /////////////////////////////////////////////////
        //    Grade 1  Lesson 31 unit 3 SubUnit Game - 2  (listening_and_search_items)


        $L31_U3_2 = [
            'star', 'sun', 'sand', 'snail', 'tree'
        ];

        foreach ($L31_U3_2 as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 194, 'a_content' => $v,
                    'q_image' => $ImageDomain . "Grade_1/Lesson_31/Listen_and_Practice/Game_2/" . $v . ".png",
                    'a_audio' => $AudioDomain . "Grade_1/Lesson_31/Listen_and_Practice/" . $v . ".mp3",
                    'a_content' => $v,
                    'round' => 1,
                    'background' => $ImageDomain . "/Grade_1/Lesson_31/Listen_and_Practice/Game_2/bg.png"
                ],
            ]);
        }






        /////////////////////////////////////////////////
        //    Grade 1  Lesson 31 unit 4 (matching_columns)



        $L31_U4_r1 = [
            ['Tree', 'Train', 'Turtle', 'Table', 'Ten'],
            ['Sand', 'Shark', 'Star', 'Sun', 'Squirrel']
        ];

        $randomValues = [
            ['Turtle', 'Tree', 'Table', 'Ten', 'Train'],
            ['Sand', 'Squirrel', 'Sun', 'Star', 'Shark']
        ];

        $L31_U4_Audio = $AudioDomain . "Grade_1/Lesson_31/Matching/";
        $L31_U4_Image = $ImageDomain . "Grade_1/Lesson_31/Matching/";

        for ($i = 0; $i < count($L31_U4_r1); $i++) {

            foreach ($L31_U4_r1[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 195, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $L31_U4_Audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 195, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => $L31_U4_Image . strtolower($q) . ".png",
                        'q_audio' => $L31_U4_Audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }




        ///////////////////////////////////////////////////
        // Lesson 31 Unit 5 Speaking (speaking_and_recording)


        $L31_U5 = [
            "Snail", 'Tiger', 'Shark', 'Snake', 'Squirrel', 'Teeth', 'Sea', 'Turtle',
            'Tiger_Snail_Squirrel', 'Tree_Sun_Sand_Turtle_Sea',
        ];

        foreach ($L31_U5 as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 196,
                    'round' => $key + 1,
                    'q_content' => "What do you see in the picture?",
                    'q_audio' => $AudioDomain."/Grade_1/Lesson_31/Speaking/"."What-do-you-see-in-the-picture.mp3",
                    'q_image' => $ImageDomain . "Grade_1/Lesson_31/Speaking/" . $value . ".png", 'a_content' => $value
                ]

            ]);
        }


        ////////////////////////////////////////////////////
        //// Lesson 31 Unit 6 subunit -1 writing 1 (letter_tracing)

        $imgDomain = $ImageDomain . "Grade_1/Lesson_31/Writing_1/";

        $g1_l7_u6_trace_n_write = [
            // 'G','H','e','f','g','h','F','E'
            't', 's', 'T', 'S'
        ];
        foreach ($g1_l7_u6_trace_n_write as $i => $trace) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 197,
                    'q_audio' => $AtoZAudio . $prefix . strtoupper($trace) . ".mp3",
                    'a_content' => $trace,
                    'q_content' => ctype_lower($trace) ?  $imgDomain . "dotted_small_" . $trace . ".png" : $imgDomain . "dotted_" . $trace . ".png",
                    // 'q_image' => $imgDomain.$trace.".png",
                    'q_image' => ctype_lower($trace) ?  $imgDomain . "small_" . $trace . ".png" : $imgDomain . $trace . ".png",
                ],
            ]);
        }


        /////////////////////------------------ sub-2 (rearrange)

        $L31_6_qs = [
            ['D', 'A', 'N', 'S'],
            ['K', 'A', 'N', 'S', 'E'],
            ['G', 'E', 'R', 'T', 'I'],
            ['L', 'E', 'A', 'T', 'B'],
            ['A', 'I', 'L', 'N', 'S'],
            ['R', 'T', 'E', 'E'],
            ['N', 'T', 'E'],
            ['R', 'R', 'E', 'L', 'I', 'Q', 'U', 'S'],
            ['L', 'E', 'T', 'T', 'U', 'R'],
            ['A', 'H', 'R', 'S', 'K'],

        ];

        $L31_6_as = [
            'SAND', 'SNAKE', 'TIGER', 'TABLE', 'SNAIL', 'TREE', 'TEN', 'SQUIRREL', 'TURTLE', 'SHARK'
        ];

        for ($i = 0; $i < count($L31_6_qs); $i++) {

            foreach ($L31_6_qs[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    ['game_id' => 198, 'round' => $i + 1, 'q_content' => $innerVal]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 198,
                    'round' => $i + 1,
                    'a_content' => $L31_6_as[$i],
                    'q_image' => $ImageDomain . "Grade_1/Lesson_31/Writing_2/" . strtolower($L31_6_as[$i]) . ".png",
                    'a_audio' => $AudioDomain . "Grade_1/Lesson_31/Writing_2/" . strtolower($L31_6_as[$i]) . ".mp3",
                ]
            ]);
        }

        //////////////////////////////////  -------- LESSON -32
        //////////////////////////////////////////////////////////////////

        ////////////////////////////////////////////////////
        //// Lesson 32 Unit Listen and Repeat (Reading) (Reading_Carousel slider)

        $L32_contents = [
            'Umbrella', 'Uncle', 'Unicorn', 'Uniform', 'Unit', 'Van', 'Vase',
            'Vegetables', 'Violin', 'Wall', 'Watch', 'Whistle', 'Window'
        ];

        $L32_img = $ImageDomain . "Grade_1/Lesson_32/Listen_and_Repeat/";
        $L32_audio = $AudioDomain . "Grade_1/Lesson_32/Listen_and_Repeat/";

        foreach ($L32_contents as $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 200, 'a_content' => $value,
                    'a_image' => $L32_img . $value . ".png",
                    'a_audio' => $L32_audio . strtolower($value) . ".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////
        //// Lesson 32 Unit Listen and Practice sub-1 (listening_and_search_items)

        $L32_U3_contents = [
            'umbrella', 'ball', 'vase', 'uncle',
        ];


        foreach ($L32_U3_contents as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' =>  1,
                    'game_id' => 201, 'a_content' => $v,
                    'q_image' => $ImageDomain . "Grade_1/Lesson_32/Listen_and_Practice/" . $v . ".png",
                    'a_audio' => $AudioDomain . "Grade_1/Lesson_32/Listen_and_Practice/" . $v . ".mp3",
                    'a_content' => $v,
                    'background' => $ImageDomain . "/Grade_1/Lesson_32/Listen_and_Practice/bg1.png"
                ],
            ]);
        }


        //--------------- Round -2

        $L32_U3_contents = [
            'whistle', 'window', 'unicorn', 'violin', 'vegetables', 'watch'
        ];


        foreach ($L32_U3_contents as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' => 2,
                    'game_id' => 201, 'a_content' => $v,
                    'q_image' => $ImageDomain . "Grade_1/Lesson_32/Listen_and_Practice/" . $v . ".png",
                    'a_audio' => $AudioDomain . "Grade_1/Lesson_32/Listen_and_Practice/" . $v . ".mp3",
                    'a_content' => $v,
                    'background' => $ImageDomain . "/Grade_1/Lesson_32/Listen_and_Practice/bg2.png"
                ],
            ]);
        }





        ////////////////////////////////////////////////////
        //// Lesson 32 Unit 4  (Matching)

        $L32_Matching_q = [
            ['Uncle', 'Vegetables', 'Van', 'Vase', 'Violin'],
            ['Umbrella', 'Unit', 'Uniform', 'Ball', 'Unicorn']
        ];

        $L32_Matching_rand = [
            ['Van', 'Vase', 'Violin', 'Vegetables', 'Uncle'],
            ['Ball', 'Umbrella', 'Unicorn', 'Unit', 'Uniform']
        ];


        $L32_U4_Audio = $AudioDomain . "Grade_1/Lesson_32/Matching/";
        $L32_U4_Image = $ImageDomain . "Grade_1/Lesson_32/Matching/";

        for ($i = 0; $i < count($L32_Matching_q); $i++) {

            foreach ($L32_Matching_q[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 202, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $L32_U4_Audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($L32_Matching_rand[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 202, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => $L32_U4_Image . strtolower($q) . ".png",
                        'q_audio' => $L32_U4_Audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }


        ////////////////////////////////////////////////////
        //// Lesson 32 Unit 5 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_1/Lesson_32/Reading/";
        $audios = $AudioDomain . "Grade_1/Lesson_32/Reading/";
        // $L32U5_content = ['umbrella','violin','vase'];

        $L32U5_para = "This is my room. My room is pink.There are stars and a rainbow on the wall.Chairs and table are pink too. I like unicorn.So,I have a unicorn doll.I have unicorn watch and a pink unicorn raincoat. I also have a unicorn umbrella. My uniform is white and blue. I don't like my uniform ";

        $L32U5_given_q = [
            ["I don't like ----.", "uniform"],
            ["I have a unicorn ----.", "watch"],
            ["I have a pink unicorn _____.", 'umbrella'],
            ["I like ____.", 'unicorn'],
            ["There are ____ on the wall.", 'stars'],
        ];
        $L32U5_given_q_audio = [
            "I-dont-like-unicorn-uniform.mp3",
            "I-have-a-unicorn-watch-whistle.mp3",
            "I-have-a-pink-unicorn-vase-umbrella.mp3",
            "I-like-unicorn-uniform-unit.mp3",
            "There-are-sun-stars-snow-on-the-wall.mp3"
        ];
        $paraName = "This-is-my-room-My-room-is-pink.mp3";

        $L32U5_given_a = [
            ['unicorn', 'uniform', 'unit'],
            ['watch', 'whistle', 'window'],
            ['vase', 'violin', 'umbrella',],
            ['unicorn', 'uniform', 'unit',],
            ['sun', 'stars', 'snow']
        ];


        for ($i = 0; $i < count($L32U5_given_a); $i++) {


            foreach ($L32U5_given_a[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 203,
                        // 'q_audio' => $audios . $value . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $L32U5_given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 203,
                    'q_audio' => $audios . $L32U5_given_q_audio[$i],
                    'q_conver' => $L32U5_given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 203,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $L32U5_para,
                    'q_image' => $images . "character.png", //char
                    'background' => $images . "bg.png"
                ]
            ]);
        }


        ////////////////////////////////////////////////////
        //// Lesson 32 Unit 6 (Speaking Practice) < speaking_and_recording >


        $L32_U6_q = "Look at the picture and say a word";


        $L32_U6_img = [
            'uniform', 'vase', 'van',
            'watch', 'whistle',
            'window', 'unicorn', 'umbrella'
        ];



        foreach ($L32_U6_img as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 204, 'round' => $key + 1,
                    'q_image' => $ImageDomain . "Grade_1/Lesson_32/Speaking/" . $value . ".png",
                    'q_content' => $L32_U6_q,
                    'q_audio' => $AudioDomain."Grade_1/Lesson_32/Speaking/".str_replace(' ', '-', $L32_U6_q).".mp3",
                    'a_content' => $value
                ]

            ]);
        }


        ////////////////////////////////////////////////////
        //// Lesson 33 Unit 2 (Read, Listen and Repeat) < reading_carousel >


        $L33_contents = [
            'Bring-a-pencil', 'Close-your-book', 'Draw-a-ball', 'Look-and-say',
            'Look-at-the-picture', 'Open-your-book', 'Open-the-door', 'Please-be-quiet', 'Write-abc'
        ];

        $L33_img = $ImageDomain . "Grade_1/Lesson_33/Read_Listen_and_Repeat/";
        $L33_audio = $AudioDomain . "Grade_1/Lesson_33/Read_Listen_and_Repeat/";

        foreach ($L33_contents as $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 206, 'a_content' => $value,
                    'a_image' => $L33_img . $value . ".png",
                    'a_audio' => $L33_audio . $value . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////
        //// Lesson 33 Unit 3 (Listen and Practice) <listening_and_search_items>



        $L33_U3_contents = [
           'Open-your-book','Look-at-the-picture','Bring-a-pencil','Close-your-book',
        ];
         $L33_U3_contents_2 = [
        'Write-abc','Please-be-quiet','Close-your-book','Open-your-book'
        ];

        $L33_U3_bg = $ImageDomain . "/Grade_1/Lesson_33/Listen_and_Practice/bg.png";

        foreach ($L33_U3_contents as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' =>  1,
                    'game_id' => 207, 'a_content' => $v,
                    'q_image' => $ImageDomain . "Grade_1/Lesson_33/Listen_and_Practice/" . $v . ".png",
                    'a_audio' => $AudioDomain . "Grade_1/Lesson_33/Listen_and_Practice/" . $v . ".mp3",
                    'a_content' => $v,
                    'background' => $L33_U3_bg
                ],
            ]);
        }
        foreach ($L33_U3_contents_2 as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' =>  2,
                    'game_id' => 207, 'a_content' => $v,
                    'q_image' => $ImageDomain . "Grade_1/Lesson_33/Listen_and_Practice/" . $v . ".png",
                    'a_audio' => $AudioDomain . "Grade_1/Lesson_33/Listen_and_Practice/" . $v . ".mp3",
                    'a_content' => $v,
                    'background' => $L33_U3_bg
                ],
            ]);
        }



        ////////////////////////////////////////////////////
        //// Lesson 33 Unit 4 (Matching) <Matching_columns>



        $L33_U4_r1 = [
            ['Look', 'Open', 'Draw', 'Close', 'Bring'],
        ];

        $randomValues = [
            ['Open', 'Close', 'Look', 'Bring', 'Draw'],
        ];

        $L33_U4_Audio = $AudioDomain . "Grade_1/Lesson_33/Matching/";
        $L33_U4_Image = $ImageDomain . "Grade_1/Lesson_33/Matching/";

        for ($i = 0; $i < count($L33_U4_r1); $i++) {

            foreach ($L33_U4_r1[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 208, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $L33_U4_Audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 208, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => $L33_U4_Image . strtolower($q) . ".png",
                        'q_audio' => $L33_U4_Audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }


        ////////////////////////////////////////////////////
        //// Lesson 33 Unit 5 (Speaking) <speaking_and_recording>

        $L33_U6 = [
            "Draw-the-ball", "Close-the-book", "Please-be-quiet", "Open-your-book", "Write-abc", "Bring-a-pencil", "Look-at-the-picture", "Open-the-door",
        ];


        foreach ($L33_U6 as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 209, 'round' => $key + 1,
                    'q_content' => "Look at this picture and say.",
                    'q_audio' => $AudioDomain."/Grade_1/Lesson_33/Speaking/"."Look-at-the-picture-and-say".".mp3",
                    'q_image' => $ImageDomain . "Grade_1/Lesson_33/Speaking/" . $value . ".png",
                    'a_content' => str_replace('-', ' ', $value)
                ]

            ]);
        }


        //                    34
        ////////////////////////////////////////////////////
        //// Lesson 34 Unit 2 (Reading_Carousel) <Read , Listen and Repeat>

        $L34_content = [
            'Listen and act', 'Listen and draw', 'Listen and read',
            'Listen and say', 'Listen and sing', 'Make a circle',
            'Make a group', 'Make a line', 'Make pairs', 'Touch your friend',
        ];

        $img = $ImageDomain . "Grade_1/Lesson_34/Read_Listen_and_Repeat/";
        $audio = $AudioDomain . "Grade_1/Lesson_34/Read_Listen_and_Repeat/";

        foreach ($L34_content as $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 211, 'a_content' => $value,
                    'a_image' => $img . str_replace(' ', '-', $value) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $value) . ".mp3"
                ],
            ]);
        }

        ////////////////////////////////////////////////////
        //// Lesson 34 Unit 3 (Listen and Practice Game) <mcq_tf_grammar> -True False-


        $L34_U3_q_img = [
            'Make a circle', 'Make a line', 'Make pairs', 'Listen and say', 'Listen and draw',
            'Listen and sing', 'Listen and read', 'Listen and say', 'Touch your friend', 'Make a line'
        ];

        $L34_U3_content = [

            'Make pairs', 'Make a group', 'Make pairs',  'Listen and sing',
            'Listen and act', 'Listen and sing', 'Listen and read', 'Listen and say',
            'Touch your friend', 'Make a circle',
        ];

        $img = $ImageDomain."Grade_1/Lesson_34/Read_Listen_and_Practice/";
        $audio = $AudioDomain."Grade_1/Lesson_34/Read_Listen_and_Practice/";

        $TF = ["True","False"];
        $tf = [ true , false ];


          foreach ($L34_U3_q_img as $k => $value) {

            DB::table('ans_n_ques')->insert([
                     [
                        'game_id' => 212,
                        'round' => $k + 1,
                        'q_image' => $img .str_replace(' ','-',$value). ".png",
                        'q_content' => $TF[0],
                        'q_conver' => $L34_U3_content[$k],
                         'a_content' => ($L34_U3_q_img[$k] == $L34_U3_content[$k]) == $tf[0]  ? true : false
                    ],
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 212,
                    'round' => $k + 1,
                    'q_content' =>  $TF[1],
                    'a_content' => ($L34_U3_q_img[$k] == $L34_U3_content[$k]) == $tf[1]  ? true : false
                ]
            ]);

        }


        ////////////////////////////////////////////////////
        //// Lesson 34 Unit 4 (Writing) <rearrange_with_audio>

        $L34_U_4_content = [
            ['door', 'close', 'the'],
            ['Open', 'book', 'your'],
            ['a', 'pencil', 'Bring'],
            ['at', 'look', 'picture', 'the'],
            ['a', 'draw', 'ball'],
            ['a', 'circle', 'Make'],
            ['friend', 'your', 'Touch'],
            ['ABCD', 'Write'],
            ['and', 'Listen', 'sing'],
            ['group', 'a', 'Make']
        ];
        // $L34_U_4_a = [
        //     ['close','the','door'],
        //     ['Open','your','book'],
        //     ['Bring','a','pencil'],
        //     ['Look','at','the','picture'],
        //     ['draw','a','ball'],
        //     ['Make','a','circle'],
        //     ['Touch','your','friend'],
        //     ['Write','ABCD'],
        //     ['Listen','and','sing'],
        //     ['Make','a','group']
        // ];
        $L34_U_4_a = [
            'Close the door',
            'Open your book',
            'Bring a pencil',
            'Look at the picture',
            'Draw a ball',
            'Make a circle',
            'Touch your friend',
            'Write ABCD',
            'Listen and sing',
            'Make a group'
        ];


        $img = $ImageDomain."Grade_1/Lesson_34/Writing/";
        $audio = $AudioDomain."Grade_1/Lesson_34/Writing/";


        foreach ($L34_U_4_content as $k => $question) {

            foreach ($question as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 213,
                        'round' => $k + 1,
                        'q_content' => $q,
                        // 'q_audio' => $AudioDomain . $q . ".mp3"

                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 213, 'round' => $k + 1,
                    'q_image' => str_replace(' ', '-', $img . $L34_U_4_a[$k]) . ".png",
                    'a_audio' => str_replace(' ', '-', $audio . $L34_U_4_a[$k]) . ".mp3",
                    'a_content' => $L34_U_4_a[$k]
                ]
            ]);
        }


        ////////////////////////////////////////////////////////
        ///// lesson 34 Unit 5 (Speaking) < speaking_and_recording >


        $L34_U3_q_img = [
            'Listen and sing', 'Listen and say', 'Make pairs', 'Touch your friend',
            'Make a circle', 'Make a group', 'Listen and draw', 'Listen and read',
        ];


        foreach ($L34_U3_q_img as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 214, 'round' => $key + 1, 'q_content' => "Look at the picture and say.",
                    'q_image' => $ImageDomain . "Grade_1/Lesson_34/Speaking/" . str_replace(' ', '-', $L34_U3_q_img[$key]) . ".png",
                    'a_content' => $value,
                    'q_audio' => $AudioDomain."Grade_1/Lesson_34/Speaking/"."Look-at-the-picture-and-say.mp3"

                ]

            ]);
        }


        //              35
        ////////////////////////////////////////////////////
        //// Lesson 35 Unit 2 (Reading_Carousel) <Read , Listen and Repeat>

        $content = [
            'Ask and answer', 'Clap your hands', 'Come here',
            'Practice with your friend', 'Raise your hand', 'Say the words',
            'Sing and act', 'Sing and dance', 'Sing the ABC song', 'Walk to the door',
        ];

        $img = $ImageDomain . "Grade_1/Lesson_35/Read_Listen_and_Repeat/";
        $audio = $AudioDomain . "Grade_1/Lesson_35/Read_Listen_and_Repeat/";

        foreach ($content as $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 216, 'a_content' => $value,
                    'a_image' => $img . str_replace(' ', '-', $value) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $value) . ".mp3"
                ],
            ]);
        }





        ////////////////////////////////////////////////////
        //// Lesson 35 Unit 3 (True or False) <mcq_tf_grammar>


        $L35_U3_q_img = [
            'Raise your hand', 'Ask and answer','Ask and answer','Say the words','Sing and act',
            'Sing the ABC song','Raise your hand','Practice with your friend',
            'Clap your hands','Work to the door'
        ];

        $L35_U3_content = [
            'Raise your hand', 'Sing and dance','Ask and answer','Say the words','Come here',
            'Sing the ABC song','Practice with your friend','Practice with your friend',
            'Clap your hands','Come here'
        ];

        $img = $ImageDomain . "Grade_1/Lesson_35/True_False/";
        $audio = $AudioDomain . "Grade_1/Lesson_35/True_False/";


        $TF = ["True","False"];
        $tf = [true, false];

        foreach ($L35_U3_q_img as $k => $value) {

            DB::table('ans_n_ques')->insert([
                     [
                        'game_id' => 217,
                        'round' => $k + 1,
                        'q_image' => $img .str_replace(' ','-',$value). ".png",
                        'q_content' => $TF[0],
                        'q_conver' => $L35_U3_content[$k],
                         'a_content' => ($L35_U3_q_img[$k] == $L35_U3_content[$k]) == $tf[0]  ? true : false
                    ],
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 217,
                    'round' => $k + 1,
                    'q_content' =>  $TF[1],
                    'a_content' => ($L35_U3_q_img[$k] == $L35_U3_content[$k]) == $tf[1]  ? true : false
                ]
            ]);

        }

        ////////////////////////////////////////////////////////
        ////    Song
        ////////////////////////////////////////////////////////



        ////////////////////////////////////////////////////////
        ////    Grade 35  Lesson 5 Game ( matching )
        ////////////////////////////////////////////////////////

        $question = [
            ['Sing', 'Clap', 'Come', 'Sing and Dance', 'Raise'],

        ];

        $randomValues = [
            ['Come', 'Sing and Dance', 'Raise', 'Sing', 'Clap'],
        ];

            $img = $ImageDomain . "Grade_1/Lesson_35/Matching/";
        $audio = $AudioDomain . "Grade_1/Lesson_35/Matching/";

        for ($i = 0; $i < count($question); $i++) {

            foreach ($question[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 219, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => str_replace(' ', '-', $audio . strtolower($q)) . ".mp3",
                    ]
                ]);
            }




            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 219, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => str_replace(' ', '-', $img . strtolower($q)) . ".png",
                        'q_audio' => str_replace(' ', '-', $audio . strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }




        ////////////////////////////////////////////////////
        //// Lesson 35 Unit 6 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_1/Lesson_35/Reading/";
        $audios = $AudioDomain . "Grade_1/Lesson_35/Reading/";
        // $L32U5_content = ['umbrella','violin','vase'];

        $L35_U6_para = "We are in the classroom. Our teacher asks us to come here. Our teacher asks us to sing \"Action\" song. We raise hands and answer. We sing and dance. We sing and act. Our friends stand up and clap hands.";

        $L35_U6_given_q = [
            ["We ___ and answer.", "raise hands"],
            ["We ___ .", "sing and dance"],
            ["Our friends ___.", 'clap hands'],
            ["Our teacher asks us to ___.", 'come here'],
            ["Our teacher asks us to ___ .", 'sing'],
        ];
        $L35_U6_given_q_audio = [
            "We-raise-hands-clap-hands-touch-hands-and-answer.mp3",
            "We-sit-down-and-stand-up-sing-and-dance-open-and-close-the-door.mp3",
            "Our-friends-raise-hands-clap-hands-clap-hands.mp3",
            "Our-teacher-asks-us-to-walk-to-the-door-come-here-bring-a-pencil.mp3",
            "Our-teacher-asks-us-to-sit-down-draw-sing.mp3"
        ];
        $paraName = "We-are-in-the-classroom.mp3";

        $L35_U6_given_a = [
            ['raise hands', 'clap hands', 'touch hands'],
            ['sit down and stand up', 'sing and dance', 'open and close the door'],
            ['raise hands', 'clap hands', 'touch hands',],
            ['Walk to the door', 'come here', 'bring a pencil',],
            ['sit down', 'draw', 'sing']
        ];


        for ($i = 0; $i < count($L35_U6_given_a); $i++) {


            foreach ($L35_U6_given_a[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 220,
                        // 'q_audio' => $audios . $value . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $L35_U6_given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 220,
                    'q_audio' => $audios . $L35_U6_given_q_audio[$i],
                    'q_conver' => $L35_U6_given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 220,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $L35_U6_para,
                    // 'q_image' => $images . "character.png", //char
                    'q_image' => null, //char
                    'background' => $images . "char_bg.png"
                ]
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 35 Games 7 (speaking_and_recording)


        $content = [
            "Sing ABC song", 'Work to the door', 'Sing and act', 'Practice with your friend',
            'Say the words', 'Raise your hand', 'Sing and dance', 'Come here', 'clap your hands', 'Ask and answer',
        ];


        foreach ($content as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 221, 'round' => $key + 1, 'q_content' => "Look at the picture and say.",
                    'q_image' => $ImageDomain . "Grade_1/Lesson_35/Speaking/" . str_replace(' ', '-', $content[$key]) . ".png",
                    'a_content' => $value,
                    'q_audio' => $AudioDomain."Grade_1/Lesson_35/Speaking/"."Look-at-the-picture-and-say.mp3",
                ]

            ]);
        }







        //              36
        ////////////////////////////////////////////////////
        //// Lesson 36 Unit 2 (Reading_Carousel) <Read , Listen and Repeat>

        $content = [
            'X-ray', 'xylophone', 'yacht', 'yellow', 'yolk', 'zebra', 'zero', 'zigzag', 'zoo', 'zoom',
        ];

        $img = $ImageDomain . "Grade_1/Lesson_36/Read_Listen_and_Repeat/";
        $audio = $AudioDomain . "Grade_1/Lesson_36/";

        foreach ($content as $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 223, 'a_content' => $value,
                    'a_image' => $img . str_replace(' ', '-', $value) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $value) . ".mp3"
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 36 Games 3 (listen and practice game) (listening_and_search_items)

        $content = [
            'xylophone', 'yacht', 'yolk', 'zoo','zoom'
        ];


        foreach ($content as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 224, 'a_content' => $v,
                    'q_image' => $ImageDomain . "Grade_1/Lesson_36/Listen_and_Practice_Game/" . $v . ".png",
                    'a_audio' => $audio . $v . ".mp3",
                    'a_content' => $v, 'round' => 1,
                    'background' => $ImageDomain . "/Grade_1/Lesson_36/Listen_and_Practice_Game/bg.png",
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 36 Game 4 ( Matching )
        ////////////////////////////////////////////////////////

        $question = [
            ['Yolk', 'Zigzag', 'Zebra', 'Zoo', 'Xylophone'],
            ['Yolk', 'Yogurt', 'Zero', 'Yellow', 'X-ray']

        ];

        $randomValues = [
            ['Zoo', 'Yolk', 'Zigzag', 'Xylophone', 'Zebra'],
            ['Zero', 'X-ray', 'Yellow', 'Yolk', 'Yogurt']
        ];

        for ($i = 0; $i < count($question); $i++) {

            foreach ($question[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 225, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => str_replace(' ', '-', $audio . strtolower($q)) . ".mp3",
                    ]
                ]);
            }


            $img = $ImageDomain . "Grade_1/Lesson_36/Matching/";
            $audio = $AudioDomain . "Grade_1/Lesson_36/";

            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 225, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => str_replace(' ', '-', $img . strtolower($q)) . ".png",
                        'q_audio' => str_replace(' ', '-', $audio . strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 36 Games 5 (speaking_and_recording)


        $content = [
            "yellow", 'zigzag', 'xylophone', 'X-ray', 'yogurt', 'zero', 'zip'
        ];


        foreach ($content as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 226, 'round' => $key + 1, 'q_content' => "Look at the picture and say a word.",
                    'q_image' => $ImageDomain . "Grade_1/Lesson_36/Speaking/" . str_replace(' ', '-', $content[$key]) . ".png",
                    'a_content' => $value,
                    'q_audio' => $AudioDomain."Grade_1/Lesson_36/Speaking/"."look-at-the-picture-and-say-a-word.mp3",
                ]

            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 36 Games 6 (Writing) <letter_tracing>


        $content = [
            'X-ray', 'xylophone', 'yacht', 'yellow', 'yogurt', 'yolk', 'zebra', 'zero', 'zigzag', 'zip', 'zoo', 'zoom',
        ];


        $imgDomain = $ImageDomain . "Grade_1/Lesson_36/Writing/Writing_1/";

        $content = [
            'Y', 'Z', 'y', 'z', 'x', 'X'
        ];
        foreach ($content as $i => $trace) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 227,
                    'q_audio' => $AtoZAudio . $prefix . strtoupper($trace) . ".mp3",
                    'a_content' => $trace,
                    'q_content' => ctype_lower($trace) ?  $imgDomain . "dotted_small_" . $trace . ".png" : $imgDomain . "dotted_" . $trace . ".png",
                    'q_image' => ctype_lower($trace) ?  $imgDomain . "small_" . $trace . ".png" : $imgDomain . $trace . ".png",
                ],
            ]);
        }


        // < fill_in_the_blanks > ///////////////////////////

        $question_1 = [
            ['Z', 'I', 'G', 'Z', 'A', 'G'],
            ['E', 'Z', 'O', 'R'],
            ['O', 'Y', 'K', 'L'],
            ['E', 'A', 'O', 'H'],
            ['O', 'Z', 'O'],
            ['E', 'A', 'O', 'H'],
            ['R', 'X', 'Y', 'A'],
            ['E', 'Z', 'A', 'B', 'R', 'O', 'R']
        ];



        $question_2 = [
            'Z_G_A_', '____', '__L_', 'Y_C_T', '___', 'Y_LL_W', '_R__', '_E_RA'
        ];

        $correctAns =   [

            ['I', 'Z', 'G'],
            ['Z', 'E', 'R', 'O'],
            ['Y', 'O', 'K'],
            ['A', 'H'],
            ['Z', 'O', 'O'],
            ['E', 'O'],
            ['X', 'A', 'Y'],
            ['Z', 'B']

        ];

        $answer = [
            'ZIGZAG', 'ZERO', 'YOLK', 'YACHT', 'ZOO', 'YELLOW', 'XRAY', 'ZEBRA'
        ];

        $img = $ImageDomain."Grade_1/Lesson_36/Writing/Writing_2/";
        $audio = $AudioDomain."Grade_1/Lesson_36/";

        for ($i = 0; $i < count($question_1); $i++) {

            $roundAnswers = [];
            foreach ($question_1[$i] as $k => $word) {


                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 228,
                        'q_audio' => $word . ".mp3",
                        'q_content' => $word,
                        'a_content' => implode(' ', $correctAns[$i]),
                    ]
                ]);
            }

            // $roundAnswer = implode('', $roundAnswers);

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 228,
                    'q_audio' => $audio.strtolower($answer[$i] . ".mp3"),
                    'q_image' => $img.strtolower($answer[$i] . ".png"),
                    'q_content' => $question_2[$i],
                    'a_content' => $answer[$i],
                ],
            ]);
        }


        //                          37
        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 37 Games 2 (Read_Listen_and_Repeat) <Reading_Carousel>


        $content = [
            'Aunt', 'Brother', 'Father', 'Grandfather', 'Grandmother', 'Mother', 'Sister', 'Uncle'
        ];

        $img = $ImageDomain . "Grade_1/Lesson_37/Read_Listen_and_Repeat/";
        $audio = $AudioDomain . "Grade_1/Lesson_37/";

        foreach ($content as $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 230, 'a_content' => $value,
                    'a_image' => $img . str_replace(' ', '-', $value) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $value) . ".mp3"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 37 Games 3 (listen and practice) (listening_and_search_items)

        // $content_1 = [
        //         'This is my aunt', 'This is my brother', 'This is my father', 'This is my grandfather',
        // ];
        $content_1 = [
                'This is my grandmother', 'This is my brother', 'This is my sister', 'This is my aunt',
        ];
        $content_2 =  [
                'This is my father', 'This is my grandfather', 'This is my uncle', 'This is my aunt'
        ];

        $chrImgs = [
            ['grandmother','brother','sister','aunt'],
            ['father','grandfather','uncle','Aunt']
        ];

        $img = $ImageDomain . "Grade_1/Lesson_37/Listen_and_Practice_Game/";
        $audio = $AudioDomain . "Grade_1/Lesson_37/Listen_and_Practice_Game/";

        $L37_U3_bg = $ImageDomain . "/Grade_1/Lesson_37/Listen_and_Practice_Game/bg.png";

        foreach ($content_1 as $k => $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 231,
                    'a_content' => $v,
                    'q_image' => $img . str_replace(' ', '-', $chrImgs[0][$k]) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $v) . ".mp3",
                    'a_content' => $v,
                    'round' => 1,
                    'background' => $L37_U3_bg
                ],
            ]);
        }

        foreach ($content_2 as $k => $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 231,
                    'a_content' => $v,
                    'q_image' => $img . str_replace(' ', '-', $chrImgs[1][$k]) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $v) . ".mp3",
                    'a_content' => $v,
                    'round' => 2,
                    'background' => $L37_U3_bg
                ],
            ]);
        }










        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 37 Game 4 ( Matching )
        ////////////////////////////////////////////////////////

        $question = [
            ['Grandfather', 'Aunt', 'Brother', 'Uncle', 'Grandmother'],
            ['Grand-father', 'Father', 'Mother', 'Sister', 'brother'],
        ];

        $randomValues = [
            ['Brother', 'Grandmother', 'Grandfather', 'Aunt', 'Uncle'],
            ['Sister', 'brother', 'Father', 'Grand-father', 'Mother']
        ];

        $img = $ImageDomain . "Grade_1/Lesson_37/Matching/";
        $audio = $AudioDomain . "Grade_1/Lesson_37/";

        for ($i = 0; $i < count($question); $i++) {

            foreach ($question[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 232, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' =>  $audio.str_replace(' ', '-', ucfirst($q)) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 232, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => $img.$q .".png",
                        'q_audio' =>$audio.str_replace(' ', '-',ucfirst($q)) . ".mp3",
                    ]
                ]);
            }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 37 Games 5 (speaking_and_recording)


        $content = [
            "Brother", 'Grandfather', 'Aunt', 'Mother', 'Grandmother', 'Sister', 'Uncle', 'Father'
        ];

        $likes = [
            'He likes bananas', 'He likes apples', 'She likes grapes', 'She likes pineapple',
            'She like mangoes', 'She likes watermelon', 'He likes papayas', 'He likes oranges'
        ];

        foreach ($content as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 233, 'round' => $key + 1,
                    'q_content' => "This is my $value." . $likes[$key],
                    'q_image' => $ImageDomain . "Grade_1/Lesson_37/Speaking/" . str_replace(' ', '-', $content[$key]) . ".png",
                    'a_content' => $value,
                    // 'q_audio' => $AudioDomain."Grade_1/Lesson_37/Speaking/"."This-is-my-$value." . str_replace(' ','-',$likes[$key]).".mp3",
                ]

            ]);
        }




        //                          38
        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 38 Games 2 (Read_Listen_and_Repeat) <Reading_Carousel>

        // ucfirst

        $content = [
            'This is my mother.Her name is Emma', 'This is my aunt.Her name is Mary', 'This is my grandmother.Her name is Alice',
            'This is my father.His name is David', 'This is my uncle.His name is John', 'This is my grandfather.His name is James',
        ];

        $imgContent = [
            'mother','aunt','grandmother','father','uncle','grandfather'
        ];

        $img = $ImageDomain . "Grade_1/Lesson_38/Read_Listen_and_Repeat/";
        $audio = $AudioDomain . "Grade_1/Lesson_38/Read_Listen_and_Repeat/";

        foreach ($content as $k => $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 235, 'a_content' => $value,
                    'a_image' => $img . str_replace(' ', '-', $imgContent[$k]) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $value) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 38 Games 3 (listen and practice) (listening_and_search_items)

        $contents = [
            [
                'This is my father.His name is David', 'This is my uncle.His name is John',
                'This is my grandmother.Her name is Alice', 'This is my younger sister.Her name is Jenny',
                'This is my older brother.His name is Mike'
            ],
            [
                'Hello, my name is Susan', 'This is my aunt.Her name is Mary',
                'This is my grandfather.His name is James', 'This is my grandmother Her name is Alice',
                'This is my uncle His name is John'
            ],

        ];


        $img = $ImageDomain . "Grade_1/Lesson_38/Listen_and_Practice_Game/";
        $audio = $AudioDomain . "Grade_1/Lesson_38/Listen_and_Practice_Game/";

        $roundInstructions = [
            "Listen-to-the-boy-and-tick-what-he-said",
            "Listen-to-the-girl-and-tick-what-she-said",
        ];

        foreach ($contents as $k => $content) {

            foreach ($content as $j => $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 236, 'a_content' => $v,
                        'q_image' => $img . str_replace(' ', '-', $v) . ".png",
                        'a_audio' => $audio . str_replace(' ', '-', $v) . ".mp3",
                        'a_content' => $v, 'round' => $k + 1,
                        'round_instruction' =>$audio.$roundInstructions[$k].".mp3",
                        'background' => $ImageDomain . "/Grade_1/Lesson_38/Listen_and_Practice_Game/bg.png"
                    ],
                ]);
            }

        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 38 Games 4 (Writing) (rearrange_with_audio)
        /////////////////////------------------ sub-2 (rearrange)

        $Questions = [
            ['C', 'L', 'U', 'N', 'E'],
            ['R', 'O', 'T', 'B', 'E', 'R', 'H'],
            ['T', 'H', 'M', 'O', 'E', 'R'],
            ['T', 'E', 'R', 'I', 'S', 'S'],
            ['A', 'G', 'R', 'N', 'D', 'T', 'H', 'F', 'A', 'E', 'R'],
            ['T', 'H', 'F', 'A', 'E', 'R'],
        ];

        $answers = [
            'UNCLE', 'BROTHER', 'MOTHER', 'SISTER', 'GRANDFATHER', 'FATHER'
        ];

        for ($i = 0; $i < count($Questions); $i++) {

            foreach ($Questions[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    ['game_id' => 237, 'round' => $i + 1, 'q_content' => $innerVal]
                ]);
            }


            $img = $ImageDomain . "Grade_1/Lesson_38/Writing/";
            $audio = $AudioDomain . "Grade_1/Lesson_38/Writing/";

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 237,
                    'round' => $i + 1,
                    'q_image' => $img . strtolower($answers[$i]) . ".png",
                    'a_audio' => $audio . strtolower($answers[$i]) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }




        ////////////////////////////////////////////////////
        //// Lesson 38 Unit 5 (Speaking) < speaking_and_recording>



        $content = [
            'older brother', 'grandfather', 'grandmother',
            "Uncle", 'aunt', 'younger sister', 'father', 'mother'
        ];

        $names = [
            'His name is Mike', 'His name is James', 'Her name is Alice', 'His name is John',
            'Her name is Mary', 'Her name is Jenny', 'His name is David', 'Her name is Emma',
        ];

        foreach ($content as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 238, 'round' => $key + 1, 'q_content' => "This is my $value." . $names[$key],
                    'q_image' => $ImageDomain . "Grade_1/Lesson_38/Speaking/" . str_replace(' ', '-', $content[$key]) . ".png",
                    'a_content' => $value,
                    'q_audio' => $AudioDomain."Grade_1/Lesson_38/Speaking/"."This-is-my-".str_replace(' ','-',$value)."-".str_replace(' ','-',$names[$key]).".mp3",
                ]

            ]);
        }





        //                          39
        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 39 Games 2 (Listen_and_Repeat) <Reading_Carousel>


        // SubUnit -1 (Reading-1)

        $content = [
            'aunt', 'cousins', 'older brother', 'older sister', 'uncle', 'younger brother', 'younger sister'
        ];

        $img = $ImageDomain . "Grade_1/Lesson_39/Reading-1/";
        $audio = $AudioDomain . "Grade_1/Lesson_39/Reading-1/";

        foreach ($content as $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 240, 'a_content' => $value,
                    'a_image' => $img . str_replace(' ', '-', $value) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $value) . ".mp3"
                ],
            ]);
        }




        // SubUnit -2 (Reading-2)

        $content = [
            'I have an older sister', 'I have a Grandfather', 'I have two cousins'
        ];

        $img = $ImageDomain . "Grade_1/Lesson_39/Reading-2/";
        $audio = $AudioDomain . "Grade_1/Lesson_39/Reading-2/";

        foreach ($content as $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 241, 'a_content' => $value,
                    'a_image' => $img . str_replace(' ', '-', $value) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $value) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 39 Games 3 (Listen_and_Practice) <listening_and_search_items>


        //SubUnit -1 (Round-1)

        $content = [
            'I have an uncle',   //
            'I have a younger sister', //
            'I have an older brother',  //
            'I have a younger brother',//
            'This is my father',
            'This is my mother',
            'This is my grandfather',
            'This is my grandmother',
            'This is my older sister'

        ];
            $audioContent = [
            'I have an uncle',   //
            'I have a younger sister', //
            'I have an older brother',  //
            'I have a younger brother',//
            'This is my father',
            'This is my mother',
            'This is my grandfather',
            'This is my grandmother',
            'This is my older sister'

        ];


        $img = $ImageDomain . "Grade_1/Lesson_39/Listen_and_Practice/";
        $audio = $AudioDomain . "Grade_1/Lesson_39/Listen_and_Practice/";

        foreach ($content as $k => $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 242, 'a_content' => $v,
                    'q_image' => $img . str_replace(' ', '-', $v) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $audioContent[$k]) . ".mp3",
                    'a_content' => $v,
                    'round' => 1,
                    'background' => $ImageDomain . "/Grade_1/Lesson_39/Listen_and_Practice/bg.png"
                ],
            ]);
        }




        ////////////////////////////////////////////////////
        //// Lesson 39 Unit 4 (Grammar) <mcq_grammar>


        $question = [
            'I have ----- older brother.',
            'I have ----- uncle.',
            'I have ----- sister.',
            'I have ----- younger brother.',
            'I have ----- aunt.',
        ];

        $ansList = [
            'an', 'an', 'a', 'a', 'an'
        ];

        $ansSentence = [
            'I have an older brother.',
            'I have an uncle.',
            'I have a sister.',
            'I have a younger brother.',
            'I have an aunt.',
        ];

        $chars = [
            'brother','uncle','sister','younger-brother','aunt'
        ];

        $answer = ['a', 'an'];

        $img = $ImageDomain . "Grade_1/Lesson_39/Grammar/";
        $audio = $AudioDomain . "Grade_1/Lesson_39/Grammar/";

        foreach ($question as $k => $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 243,
                    'round' => $k + 1,
                    'q_image' => $img . str_replace(' ', '-', $chars[$k]) . ".png",
                    'q_audio' => $audio.$chars[$k].".mp3",
                    'q_content' => $answer[0],
                    'q_conver' => $value,
                    'a_content' => $ansList[$k] == $answer[0] ? true : false
                ],
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 243,
                    'round' => $k + 1,
                    'q_content' =>  $answer[1],
                    'a_content' => $ansList[$k] == $answer[1] ? true : false
                ]
            ]);
        }



        //////////////////////////////////////////////////////////////////
        //   Lesson 39  game 5 (Writing (Arranging order)) <rearrange_with_audio>

        $Questions = [
            ['name', 'is', 'Her', 'Alice'],
            ['my', 'is', 'This', 'father'],
            ['two', 'i', 'grandfathers', 'have'],
            ['my', 'is', 'This', 'mother'],
            ['is', 'my', 'grandfathers', 'This'],
            ['name', 'is', 'His', 'James'],
        ];

        $answers = [
            'Her name is ALice',
            'This is my father',
            'I have two grandfathers',
            'This is my mother',
            'This is my grandfathers',
            'His name is James'
        ];

        for ($i = 0; $i < count($Questions); $i++) {

            foreach ($Questions[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    ['game_id' => 244, 'round' => $i + 1, 'q_content' => $innerVal]
                ]);
            }

            $img = $ImageDomain . "Grade_1/Lesson_39/Writing/";
            $audio = $AudioDomain . "Grade_1/Lesson_39/Writing/";

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 244,
                    'round' => $i + 1,
                    // 'q_image' => $img . str_replace(' ', '-', $answers[$i]) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $answers[$i]) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }



        ////////////////////////////////////////////////////
        //// Lesson 39 Unit 6 (Speaking 1) < speaking_and_recording >


        $content = 'Teacher and student';


        $questionContent = [
            'Do you have brother or sister?', 'Do you have Grandfather or Grandmother?',
            "I'm great.What's your father name?", 'Good morning how are you?',
        ];

        $img = $ImageDomain . "Grade_1/Lesson_39/Speaking/";
        $audio = $AudioDomain . "Grade_1/Lesson_39/Speaking/";

        foreach ($questionContent as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 245,
                    'round' => $key + 1,
                    'q_content' => $value,
                    'q_image' => $img . str_replace(' ', '-', $content) . ".png",
                    'a_content' => null,
                    'q_audio' => $AudioDomain."Grade_1/Lesson_39/Speaking/".str_replace(' ','-', $value).".mp3",
                ]

            ]);
        }




        //                          40
        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 40 Games 2 (Listen_and_Repeat) <Reading_Carousel>


        // SubUnit -1 (Reading-1)

        $content = [
            'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten'
        ];

        $img = $ImageDomain . "Grade_1/Lesson_40/Reading_1/";
        $audio = $AudioDomain . "Grade_1/Lesson_40/Reading_1/";

        foreach ($content as $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 247, 'a_content' => $value,
                    'a_image' => $img . str_replace(' ', '-', $value) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $value) . ".mp3"
                ],
            ]);
        }




        // SubUnit -2 (Reading-2)

        $content = [
            "She is four years old", "She is seven years old", "She is nine years old",
            "He is three years old", "He is six years old", "He is two years old",
            "I am three years old", "I am six years old", "I am two years old",
        ];

        $img = $ImageDomain . "Grade_1/Lesson_40/Reading_2/";
        $audio = $AudioDomain . "Grade_1/Lesson_40/Reading_2/";

        foreach ($content as $value) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 248, 'a_content' => $value,
                    'a_image' => $img . str_replace(' ', '-', $value) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $value) . ".mp3"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 40 Games 3 (Listen_and_Practice) <listening_and_search_items>


        $content = [
            [
                "I am 6 years old I have 3 brothers and an older sister",
                'He is one',
                'She is 10',
                'She is 4 years old',
                'He is 5',
            ],

        ];


        $img = $ImageDomain . "Grade_1/Lesson_40/Listen_and_Practice/";
        $audio = $AudioDomain . "Grade_1/Lesson_40/Listen_and_Practice/";



        ////////////////////////////
    $bg = $ImageDomain . "/Grade_1/Lesson_40/Listen_and_Practice/bg.png";

        foreach ($content[0] as $v) {
            DB::table('ans_n_ques')->insert([
                [
                    'round' =>  1,
                    'game_id' => 249, 'a_content' => $v,
                    'q_image' =>  $img . str_replace(' ', '-', $v) . ".png",
                    'a_audio' => $audio . str_replace(' ', '-', $v) . ".mp3",
                    'a_content' => $v,
                    'background' =>  $bg
                ],
            ]);
        }









        ////////////////////////////////////////////////////
        //// Lesson 40 Unit 5 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_1/Lesson_40/Reading/";
        $audios = $AudioDomain . "Grade_1/Lesson_40/Reading/";

        $para = "I have a brother.His name is Jerry. He is 8 years old. He is short brown hair. My brother say 'I like violin'. I don't like xylophone.";

        $given_q = [
            ["He is 8 years old.", 'true'],
            ["He is long brown hair.", 'false'],
            ["He like xylophone.", 'false'],
            ["Her name is Jerry.", 'false'],
            ["I have a brother.", 'true'],
        ];

        $given_q_audio = [
            "He-is-8-years-old-True-or-False.mp3",
            "He-has-long-brown-hair-True-or-False.mp3",
            "He-likes-xylophone-True-or-False.mp3",
            "Her-name-is-Jerry-True-or-False.mp3",
            "I-have-a-brother-True-or-False.mp3"
        ];

        $paraName = "I-have-a-brother-His-name-is-jerry.mp3";

        $given_a = [
            ['true', 'false'],
            ['true', 'false'],
            ['true', 'false'],
            ['true', 'false'],
            ['true', 'false'],
        ];


        for ($i = 0; $i < count($given_a); $i++) {


            foreach ($given_a[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 250,
                        // 'q_audio' => $audios.$value.".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 250,
                    'q_audio' => $audios . $given_q_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 250,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $para,
                    // 'q_image' => $images . "character.png", //char
                    'background' => $images . "bg.png"
                ]
            ]);
        }





        ////////////////////////////////////////////////////
        //// Lesson 40 Unit 6 (Speaking 1) < speaking_and_recording>



        $contentImg = ['Mike', 'Chris', 'two', 'Kevin', 'emma', 'David'];

        $contents = [
            'His', 'eight', 'twin', 'three', 'Her', 'His'
        ];


        $questionContent = [
            "I have an elder brother. ___ name is Mike.",
            "Chris is ___ year old.",
            "I have ___ younger brothers.",
            "Kevin is ___.",
            "This is my mother. ___ name is Emma.",
            "This is my father. ___ name is David."
        ];

        $questionAudio = [
            "I have an elder brother His name is Mike",
            "Chris is eight year old",
            "I have two younger brothers",
            "Kevin is three",
            "This is my mother her name is Emma",
            "This is my father His name is David"

        ];

        $img = $ImageDomain . "Grade_1/Lesson_40/Speaking/";
        $audio = $AudioDomain . "Grade_1/Lesson_40/Speaking/";

        foreach ($questionContent as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 251,
                    'round' => $key + 1,
                    'q_content' => $value,
                    'q_image' => $img . str_replace(' ', '-', $contentImg[$key]) . ".png",
                    'a_content' => $contents[$key],
                    'q_audio' => $AudioDomain."Grade_1/Lesson_40/Speaking/".str_replace(' ','-',$questionAudio[$key]).".mp3"
                ]

            ]);
        }






    }
}