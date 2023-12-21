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

        $backgroundDomain = $domain."/storage/images/Backgrounds/";

        $AtoZUpdate = $domain."/storage/audios/A_to_Z_update/";

        $AtiZUpdate = [
            'A-for-apple','B-for-ball','C-for-Cat','D-for-Dog','E-for-Elephant','F-for-Fish', 'G-for-Grapes','H-for-Hat','I-for-Ice-cream', 'J-for-Jug',
            'K-for-Kite','L-for-Lion','M-for-mouse','N-for-Noodles','O-for-Orange',
            'P-for-Panda','Q-for-Quail','R-for-ring','S-for-Snake','T-for-Tree','U-for-Umbrella','V-for-Violin','W-for-Whale','X-for-xylophone','Y-for-Yacht','Z-for-Zebra'
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
                ['game_id' => 2, 'a_content' => $key, 'a_image' => $ImageDomainAZ . $key . ".png",
                 'a_audio' => $AudioDomain."A_to_Z_update/".$AtiZUpdate[$k].".mp3"],
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
                    'round' => $i + 1, 'game_id' => 4, 'q_audio' => $AudioDomain . $G1_L1_U4_path . $audios[$index] . ".mp3", 'a_content' => $answers[$index], 'q_conver' => $conver[$index], 'background' => $i + 1 > 4 && $i + 1 < 8 ? $ImageDomain.$G1_L1_U4_path."G1_L1_U4_bg2".".png" : $ImageDomain.$G1_L1_U4_path."G1_L1_U4_bg1".".png"
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

        $randomValues = [
            ['L','B','M','H','O'],
            ['G','N','T','J','Q'],
            ['F','C','S','P','K'],
        ];

        for ($i= 0 ; $i < count($g1_l2_g10) ; $i++) {

            foreach ($g1_l2_g10[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    ['game_id' => 10, 'round' => $i + 1,'q_content' => $q,
                    'q_image' => $q,'q_audio' => $AtoZAudio.$prefix.strtoupper($q).".mp3",]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
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
        ////    Grade 1  Lesson 7 Games 2 (Carousel)


        $L7_U2_content = ['Apple','Ball','Boy','Ant','Airplane','Cake','Cup','Dog','Duster','Doll'];

        $L7_U2_Img = $ImageDomain."Grade_1/Lesson_7/Read_Listen_and_Repeat/";
        $L7_U2_audio = $AudioDomain."Grade_1/Lesson_7/Read_Listen_and_Repeat/";

        foreach ($L7_U2_content as $key) {
            DB::table('ans_n_ques')->insert([
                ['game_id' => 35, 'a_content' => $key, 'a_image' => $L7_U2_Img . strtolower($key) . ".png",
                 'a_audio' => $L7_U2_audio.strtolower($key).".mp3"],
            ]);
        }

         ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 7 Games 3

        $L7_U3_items_1 = ['airplane','doll','dog','apple','cup','banana'];
        $L7_U3_items_2 = ['ball','boy','cake','ant','car','duster'];

        $L7_U3_Img = $ImageDomain."Grade_1/Lesson_7/Listening_and_practice/";
        $L7_U3_audio = $AudioDomain."Grade_1/Lesson_7/Listening_and_practice/";

        foreach ($L7_U3_items_1 as $key => $value) {
            DB::table('ans_n_ques')->insert([
                ['game_id' => 36, 'round' => 1 ,'a_content' => $value ,'q_image' => $L7_U3_Img.$value.".png",
                'q_audio' =>$L7_U3_audio.$value.".mp3",'background' => $L7_U3_Img."bg.png"],

                ['game_id' => 36, 'round' => 2 ,'a_content' => $L7_U3_items_2[$key] ,'q_image' => $L7_U3_Img.$L7_U3_items_2[$key].".png",
                'q_audio' => $L7_U3_audio.$L7_U3_items_2[$key].".mp3" ,'background' => $L7_U3_Img."bg.png" ]

            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 7 Games 4 (Matching)


        $g1_l7_g4 = [

            ['cake','cup','car','dog','duster'],
            ['ant','apple','airplane','ball','boy'],

        ];

        $randomValues = [
            ['duster','cake','dog','car','cup'],
            ['apple','ant','boy','ball','airplane'],
        ];

        for ($i= 0 ; $i < count($g1_l7_g4) ; $i++) {

            foreach ($g1_l7_g4[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    ['game_id' => 37, 'round' => $i + 1,'q_content' => $q,
                    'q_image' => $q.".png",
                    'q_audio' => $AudioDomain."Grade_1/Lesson_7/Matching/".strtolower($q).".mp3",]
                ]);
           }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    ['game_id' => 37, 'round' => $i + 1,'q_content' => strtolower($q),
                    'q_image' => $ImageDomain."Grade_1/Lesson_7/Matching/". strtolower($q).".png",
                    'q_audio' => $AudioDomain."Grade_1/Lesson_7/Matching/".strtolower($q).".mp3",]
                ]);
           }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 7 Games 5 (speaking_and_recording)


        $g1L7U5 = [
            "cup",'airplane','cake','apple','banana','car','ball','ant','dog','boy',
        ];


        foreach ($g1L7U5 as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 38, 'round' => $key + 1, 'q_content' => "what's this ?",
                    // 'q_audio' => "whats_this?".".mp3",
                    'q_image' => $ImageDomain."Grade_1/Lesson_7/Speaking_Practice/".$g1L7U5[$key].".png",
                    'a_content' => $value ]

            ]);
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 7 Games 6  (Sub Units) <letter_tracing>


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

        // $g1_l7_u6_rearrange_the_letter_a = [
        //     'BALL','CAKE','DOG','DUSTER','APPLE','ANT'
        // ];
        $g1_l7_u6_rearrange_the_letter_a = [
            'Ball','Cake','Dog','Duster','Apple','Ant'
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
                    'q_audio' =>$AudioDomain."Grade_1/Lesson_7/Writing_Sentences_order/". $g1_l7_u6_rearrange_the_letter_a[$i].".mp3",
                    'q_image' =>$ImageDomain."Grade_1/Lesson_7/Writing_Sentences_order/".$g1_l7_u6_rearrange_the_letter_a[$i].".png" ,
                    'q_content' => $g1_l7_u6_rearrange_the_letter_q2[$i],
                    'a_content' => $g1_l7_u6_rearrange_the_letter_a[$i]
                ],
            ]);

        }

        // lesson -7 END here




            ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 12 Games 2 (Carousel) (reading_carousel)


        $L12_U2_content = [
            'Ear','Egg','Eyes','Fan','Farm','Fish','Flower','Gate','Girl'
            ,'Goat','Grass','Hand','Hat','House'
        ];
        $L12_U2_audio = [
            'Ear','Egg','Eye','Fan','Farm','Fish','Flower','Gate','Girl'
            ,'Goat','Grass','Hand','Hat','House'
        ];

        foreach ($L12_U2_content as $k => $v) {
            DB::table('ans_n_ques')->insert([
                [   'game_id' => 67, 'a_content' => $v,
                    'a_image' => $ImageDomain."Grade_1/Lesson_12/Reading/". $v . ".png",
                    'a_audio' => $AudioDomain."Grade_1/Lesson_12/Reading/".strtolower($L12_U2_audio[$k]).".mp3"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 12 Games 3 (listen and practice) (listening_and_search_items)

        $L12_U3_content = [
            'girl','hand','ear','egg','hat','dinosaur','poster','dog','ball'
        ];


        foreach ($L12_U3_content as $v) {
            DB::table('ans_n_ques')->insert([
                [   'game_id' => 68, 'a_content' => $v,
                    'q_image' => $ImageDomain."Grade_1/Lesson_12/Listen_and_Practice/".$v.".png",
                    'a_audio' => $AudioDomain."Grade_1/Lesson_12/Listen_and_Practice/".$v.".mp3",
                    'a_content' => $v, 'round' => 1,
                ],
            ]);

        }
        $L12_U3_bg = $ImageDomain."/Grade_1/Lesson_12/Listen_and_Practice/bg.png";

            DB::table('ans_n_ques')->insert([
                ['game_id' => 68, 'round' => 1, 'background' => $L12_U3_bg ]
            ]);


    ////////////////////////////////////////////////////////
    ////    Grade 1  Lesson 12 Games 4 (Matching)

    $L12_U4 = [
        ['Girl','Goat','Hand','Hat','House'],
        ['ear','eye','egg','fan','fish'],
    ];

    $L12_U4_rand = [
        ['Goat','Girl','House','Hat','Hand'],
        ['eye','ear','fan','fish','egg'],
    ];

    $L12_U4_img_path = "Grade_1/Lesson_12/Matching/";

            for ($i= 0 ; $i < count($L12_U4) ; $i++) {

            foreach ($L12_U4[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                     'game_id' => 69, 'round' => $i + 1,'q_content' => $q,
                     'q_image' => $q.".png",
                     'q_audio' => $AudioDomain."Grade_1/Lesson_12/Matching/".$q.".mp3",]
                ]);
           }


            foreach ($L12_U4_rand[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                     'game_id' => 69, 'round' => $i + 1,'q_content' => strtolower($q),
                    //  'q_image' => $ImageDomain.strtolower($q).".png",
                     'q_image' => $ImageDomain.$L12_U4_img_path.strtolower($q).".png",
                     'q_audio' => $AudioDomain."Grade_1/Lesson_12/Matching/".$q.".mp3",]
                ]);
           }
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 12 Games 5 (speaking_and_recording)

        $L12_U5 = [
            "fan",'girl','ear','egg','hat','flower','sunflower','house','goat','hamster',
        ];

        foreach ($L12_U5 as $key => $value) {

            DB::table('ans_n_ques')->insert([

               ['game_id' => 70, 'round' => $key + 1, 'q_content' => "Say the word?",
                'q_audio' => "Say the word?".".mp3",'q_image' => $ImageDomain."Grade_1/Lesson_12/Speaking_practice/".$value.".png", 'a_content' => $value ]

            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Lesson 12 Games 6 subunit-1 (Trace and Write)

        $imgDomain = $ImageDomain."Grade_1/Lesson_12/trace_and_write/";

        $g1_L12_u6_trace_n_write = [
            'G','H','e','f','g','h','E','F'
        ];
            foreach ($g1_L12_u6_trace_n_write as $i => $trace) {
                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 71,
                        'q_audio' => $AtoZAudio.$prefix.strtoupper($trace).".mp3",
                        'a_content' => $trace,
                        'q_content' => ctype_lower($trace) ?  $imgDomain."dotted_small_".$trace.".png" : $imgDomain."dotted_".$trace.".png",
                        // 'q_image' => $imgDomain.$trace.".png",
                        'q_image' => ctype_lower($trace) ?  $imgDomain."small_".$trace.".png" : $imgDomain.$trace.".png",
                    ],
                ]);
            }


    ///////////////////////////////////////////////////////////
    // Grade 1 Lesson 12 U - 6 subunit-2 (fill_in_the_blanks)


     $g1_l7_u6_rearrange_the_letter_q1 = [
            ['E','Y','E'],
            ['G','O','A','T'],
            ['T','A','H'],
            ['G','S','A','R','S'],
            ['W','F','R','E','L','O'],
            ['R','A','E'],
            ['N','A','F'],
        ];

        $g1_l7_u6_rearrange_the_letter_q2 = [
            '_Y_','_O_T','__T','_R_SS','_LOW_R','__R','__N'
        ];

        $correctAns =   [

            ['E','E'],
            ['G','A'],
            ['H','A'],
            ['G','A'],
            ['F','E'],
            ['E','A'],
            ['F','A'],

        ];


        $g1_l7_u6_rearrange_the_letter_a = [
            'EYE','GOAT','HAT','GRASS','FLOWER','EAR','FAN'
        ];




        for ($i=0; $i < count($g1_l7_u6_rearrange_the_letter_q1) ; $i++) {

            $roundAnswers = [];
            foreach ($g1_l7_u6_rearrange_the_letter_q1[$i] as $k => $word) {

                $isCorrect = in_array($word, $correctAns[$i]);
                $roundAnswers[] = $isCorrect;

                DB::table('ans_n_ques')->insert([
                    [   'round' => $i + 1, 'game_id' => 72,
                        'q_audio' => $word.".mp3",
                        'q_content' => $word,
                        'a_content' => $isCorrect ? 1 : 0,
                    ]
                ]);
            }

            // $roundAnswer = implode('', $roundAnswers);

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 72,
                    'q_audio' => $AudioDomain."Grade_1/Lesson_12/Write_the_correct_letter/".$g1_l7_u6_rearrange_the_letter_a[$i].".mp3",
                    'q_image' =>$ImageDomain."Grade_1/Lesson_12/Write_the_correct_letter/".$g1_l7_u6_rearrange_the_letter_a[$i].".png" ,
                    'q_content' => $g1_l7_u6_rearrange_the_letter_q2[$i],
                    'a_content' => $g1_l7_u6_rearrange_the_letter_a[$i]
                ],
            ]);

        }















    ////////////////////////////////////////////////////////
    ////    Grade 1  Lesson 17 Games
    ////////////////////////////////////////////////////////


    //    Grade 1  Lesson 17 Games 2 subunit 1
    $bodyParts = ['Hair','Eye','Cheek','Lip','Teeth','Mouth','Chin','Nose'];

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
            ['game_id' => 101, 'background' => $G1L17ImgDomain."head_bg".".png" ]
        ]);

        ///////////////////////////////////////////////
        //    Grade 1  Lesson 17 Games 2 subunit 2

        $instructionsContent = [ "don't touch your face", "don't touch your mouth",
                "don't touch your nose", "Touch your cheek","Touch your ears",
                "Touch your hair","Touch your Lips", "Touch your nose"
            ];
        $instructions = [
            'Dont-touch-your-face', 'Dont-touch-your-mouth', 'Dont-touch-your-nose',
            'Touch-your-cheek','Touch-your-ears','Touch-your-hair','Touch-your-lips','Touch-your-nose'
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


    ///////////////////////////////////////////////
    //    Grade 1  Lesson 17 Games 3 (drag_n_drop_and_pics)


    $G1L17U3facePart = ["nose",'left-eye','right-eye','lip','left-ear','right-ear'];

    foreach ($G1L17U3facePart as $v) {
        DB::table('ans_n_ques')->insert([
            ['game_id' => 103, 'q_image' => $ImageDomain.$v.".png",'a_content' => $v ]
        ]);
    }

    DB::table('ans_n_ques')->insert([
        ['game_id' => 103, 'background' => "emptyFaceBackground.png"]
    ]);


    ///////////////////////////////////////////////
    //    Grade 1  Lesson 17 Games 4 (Matching)


    $G1L17U4 = [
        ['Hair','Chin','Nose','Face','Lips'],
        ['Mouth','Nose','Teeth','Eyes','Ears'],
    ];

    $G1L17U4_rand = [
        ['Nose','Chin','Lips','Hair','Face'],
        ['Eyes','Ears','Nose','Mouth','Teeth'],
    ];

            for ($i= 0 ; $i < count($G1L17U4) ; $i++) {

            foreach ($G1L17U4[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    ['game_id' => 104, 'round' => $i + 1,'q_content' => $q,
                    'q_image' => $ImageDomain. $q.".png",'q_audio' => $AudioDomain."Grade_1/Lesson_17/Matching/".$q.".mp3",]
                ]);
           }


            foreach ($G1L17U4_rand[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    ['game_id' => 104, 'round' => $i + 1,'q_content' => strtolower($q),
                    'q_image' => $ImageDomain.strtolower($q).".png",'q_audio' => $AudioDomain."Grade_1/Lesson_17/Matching/".$q.".mp3",]
                ]);
           }
        }



    /////////////////////////////////////////////////
    //    Grade 1  Lesson 17 unit 5 Games 105 (listening_conversation_and_choosing_answer)

       $charImg = "green_vector";
       $quesCharImg = ["Touch your cheek", "Touch your ear", "Don't touch your mouth","Don't touch your eye"];
       $quesCharAudio = ["Touch-your-cheek", "Touch-your-ear", "Dont-touch-your-mouth","Dont-touch-your-eyes"];
       $charContent = [
            ["pink_girl","blue_girl"], //2
            ["pink_girl_ear","blue_girl_mouth"], //1
            ["blue_girl_cheek","blue_girl_mouth"],  //1
            ["blue_girl_eye","orange_boy"], //2
       ];
       $ansChars = ["blue_girl_cheek","blue_girl_eye"];

       $qImg = $ImageDomain."Grade_1/Lesson_17/Listen_and_Act/";
       $qAudio = $AudioDomain."Grade_1/Lesson_17/Listen_&_act/";

        DB::table('ans_n_ques')->insert([
            ["game_id" => 105 , "round"=> 1,  "q_content" => "Touch your cheek", "q_audio" => $qAudio.$quesCharAudio[0].".mp3",
            "a_image" => $qImg.$charContent[0][0].".png", "a_content" => 0],
            ["game_id" => 105, "round"=> 1,  "q_content" => null, "q_audio" => null,
            "a_image"  => $qImg.$charContent[0][1].".png","a_content" => 1],

            ["game_id" => 105, "round"=> 2,  "q_content" => "Touch your ear", "q_audio" => $qAudio.$quesCharAudio[1].".mp3",
            "a_image" => $qImg.$charContent[1][0].".png", "a_content" => 1],
            ["game_id" => 105, "round"=> 2,  "q_content" => null, "q_audio" => null,
            "a_image"  => $qImg.$charContent[1][1].".png","a_content" => 0],

            ["game_id" => 105, "round"=> 3,  "q_content" => "Don't touch your mouth", "q_audio" => $qAudio.$quesCharAudio[2].".mp3",
            "a_image" => $qImg.$charContent[2][0].".png", "a_content" => 1],
            ["game_id" => 105, "round"=> 3,  "q_content" => null, "q_audio" => null,
            "a_image"  => $qImg.$charContent[2][1].".png","a_content" => 0],

            ["game_id" => 105, "round"=> 4,  "q_content" => "Don't touch your eye", "q_audio" => $qAudio.$quesCharAudio[3].".mp3",
            "a_image" => $qImg.$charContent[3][0].".png", "a_content" => 0],
            ["game_id" => 105, "round"=> 4,  "q_content" => null, "q_audio" => null,
            "a_image"  => $qImg.$charContent[3][1].".png","a_content" => 1],

        ]);



    /////////////////////////////////////////////////
    //    Grade 1  Lesson 17 unit 6 Games 106 (speaking_and_recording)


    $g1L17U6AC = [
        "Mouth",'Hair','Nose','Mouth','Nose'
    ];

    $g1L17U6AnI = [
        "blueGirl_touch_mouth", "redBoy_touch_hair", "burGirl_dont_touch_nose",
        "burGirl_dont_touch_mouth", "burGirl_touch_nose"
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

            [ 'game_id' => 106, 'round' => $key + 1, 'q_content' => "Look at the picture say the sentence.".$g1L17U6QC[$key],
            //   'q_audio' => $value.".mp3",
              'q_image' => $ImageDomain."Grade_1/Lesson_17/Speaking_practice/".$value.".png", 'a_content' => $g1L17U6AC[$key] ]

            ]);
        }



    /////////////////////////////////////////////////
    //    Grade 1  Lesson 31 unit 2 Games  (reading_carousel)


        $L31_U2 = [
            'Sand','Shark','Snail','Snake','Squirrel','Star',
            'Table','Teeth','Ten','Tiger','Tree','Turtle'
        ];

        foreach ($L31_U2 as $value) {
            DB::table('ans_n_ques')->insert([
                ['game_id' => 192,
                 'a_image' => $ImageDomain."Grade_1/Lesson_31/Listen_and_Repeat/".$value.".png",
                 'a_audio' => $AudioDomain."Grade_1/Lesson_31/Listen_and_Repeat/".strtolower($value).".mp3",
                 'a_content' => $value
                 ]
            ]);
        }



    /////////////////////////////////////////////////
    //    Grade 1  Lesson 31 unit 3 SubUnit Game - 1  (listening_and_search_items)

      $L31_U3 = [
            'Snail','Tiger','Squirrel','Turtle','Snake',
        ];

        foreach ($L31_U3 as $v) {
            DB::table('ans_n_ques')->insert([
                [   'game_id' => 193, 'a_content' => $v,
                    'q_image' => $ImageDomain."Grade_1/Lesson_31/Listen_and_Practice/Game_1/".strtolower($v).".png",
                    'a_audio' => $AudioDomain."Grade_1/Lesson_31/Listen_and_Practice/".strtolower($v).".mp3",
                    'a_content' => $v,
                    'round' => 1,
                ],
            ]);

        }

        $L12_U3_bg = $ImageDomain."/Grade_1/Lesson_31/Listen_and_Practice/Game_1/bg.png";

        DB::table('ans_n_ques')->insert([
                ['game_id' => 193, 'round' => 1, 'background' => $L12_U3_bg ]
        ]);




    /////////////////////////////////////////////////
    //    Grade 1  Lesson 31 unit 3 SubUnit Game - 2  (listening_and_search_items)


    $L31_U3_2 = [
            // 'star','sun','sand','sea','tree'
            'glass_camera','lifebelt','tree','snail','sand','sun' // to FIX
        ];

        foreach ($L31_U3_2 as $v) {
            DB::table('ans_n_ques')->insert([
                [   'game_id' => 194, 'a_content' => $v,
                    'q_image' => $ImageDomain."Grade_1/Lesson_31/Listen_and_Practice/Game_2/".$v.".png",
                    'a_audio' => $AudioDomain."Grade_1/Lesson_31/Listen_and_Practice/".$v.".mp3",
                    'a_content' => $v,
                    'round' => 1,
                ],
            ]);

        }

        $L12_U3_2_bg = $ImageDomain."/Grade_1/Lesson_31/Listen_and_Practice/Game_2/bg.png";

            DB::table('ans_n_ques')->insert([
                ['game_id' => 194, 'round' => 1, 'background' => $L12_U3_2_bg ]
            ]);





    /////////////////////////////////////////////////
    //    Grade 1  Lesson 31 unit 4 (matching_columns)



    $L32_U4_r1 = [
        ['Tree','Train','Turtle','Table','Ten'],
        ['Sand','Shark','Star','Sun','Squirrel']
    ];

    $randomValues = [
        ['Turtle','Tree','Table','Ten','Train'],
        ['Sand','Squirrel','Sun','Star','Shark']
    ];

    $L32_U4_Audio = $AudioDomain."Grade_1/Lesson_31/Matching/";
    $L32_U4_Image = $ImageDomain."Grade_1/Lesson_31/Matching/";

        for ($i= 0 ; $i < count($L32_U4_r1) ; $i++) {

            foreach ($L32_U4_r1[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                    'game_id' => 195, 'round' => $i + 1,'q_content' => $q,
                    'q_image' => $q,
                    'q_audio' => $L32_U4_Audio.strtolower($q).".mp3",]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    ['game_id' => 195, 'round' => $i + 1,'q_content' => strtolower($q),
                    'q_image' => $L32_U4_Image.strtolower($q).".png",
                    'q_audio' => $L32_U4_Audio.strtolower($q).".mp3",]
                ]);

            }
        }




    ///////////////////////////////////////////////////
    // Lesson 31 Unit 5 Speaking (speaking_and_recording)


      $L31_U5 = [
            "Snail",'Tiger','Shark','Snake','Squirrel','Teeth','Sea','Turtle',
            'Tiger_Snail_Squirrel','Tree_Sun_Sand_Turtle_Sea',
        ];

        foreach ($L31_U5 as $key => $value) {

            DB::table('ans_n_ques')->insert([

               ['game_id' => 196, 'round' => $key + 1, 'q_content' => "What do you see in the picture?",
                'q_image' => $ImageDomain."Grade_1/Lesson_31/Speaking/".$value.".png", 'a_content' => $value ]

            ]);
        }


    ////////////////////////////////////////////////////
    //// Lesson 31 Unit 6 subunit -1 writing 1 (letter_tracing)

     $imgDomain = $ImageDomain."Grade_1/Lesson_31/Writing_1/";

        $g1_l7_u6_trace_n_write = [
            // 'G','H','e','f','g','h','F','E'
            't','s','T','S'
        ];
            foreach ($g1_l7_u6_trace_n_write as $i => $trace) {
                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'game_id' => 197,
                        'q_audio' => $AtoZAudio.$prefix.strtoupper($trace).".mp3",
                        'a_content' => $trace,
                        'q_content' => ctype_lower($trace) ?  $imgDomain."dotted_small_".$trace.".png" : $imgDomain."dotted_".$trace.".png",
                        // 'q_image' => $imgDomain.$trace.".png",
                        'q_image' => ctype_lower($trace) ?  $imgDomain."small_".$trace.".png" : $imgDomain.$trace.".png",
                    ],
                ]);
            }


            /////////////////////------------------ sub-2 (rearrange)

            $L31_6_qs =[
                ['D','A','N','S'],
                ['K','A','N','S','E'],
                ['G','E','R','T','I'],
                ['L','E','A','T','B'],
                ['A','I','L','N','S'],
                ['R','T','E','E'],
                ['N','T','E'],
                ['R','R','E','L','I','Q','U','S'],
                ['L','E','T','T','U','R'],
                ['A','H','R','S','K'],

            ];

            $L31_6_as = [
                'SAND','SNAKE','TIGER','TABLE','SNAIL','TREE','TEN','SQUIRREL','TURTLE','SHARK'
            ];

            for ($i = 0; $i < count($L31_6_qs) ; $i++) {

                foreach ($L31_6_qs[$i]  as  $innerVal) {
                    DB::table('ans_n_ques')->insert([
                        ['game_id' => 198, 'round' => $i + 1 , 'q_content' => $innerVal]
                    ]);
                }

                DB::table('ans_n_ques')->insert([
                        [
                         'game_id' => 198,
                         'round' => $i + 1,
                         'a_content' => $L31_6_as[$i] ,
                         'q_image' => $ImageDomain."Grade_1/Lesson_31/Writing_2/".strtolower($L31_6_as[$i]).".png",
                         'a_image' => $AudioDomain."Grade_1/Lesson_31/Writing_2/".strtolower($L31_6_as[$i]).".mp3",
                         ]
                ]);

            }


    //////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////
    //// Lesson 32 Unit Listen and Repeat (Reading) (Reading_Carousel slider)

    $L32_contents = [
        'Umbrella','Uncle','Unicorn','Uniform','Unit','Van','Vase',
        'Vegetables','Violin','Wall','Watch','Whistle','Window'
    ];

    $L32_img = $ImageDomain."Grade_1/Lesson_32/Listen_and_Repeat/";
    $L32_audio = $AudioDomain."Grade_1/Lesson_32/Listen_and_Repeat/";

    foreach ($L32_contents as $value) {
           DB::table('ans_n_ques')->insert([
                ['game_id' => 200, 'a_content' => $value,
                 'a_image' => $L32_img . strtolower($value) . ".png",
                 'a_audio' => $L32_audio. strtolower($value).".mp3"],
            ]);
    }


     ////////////////////////////////////////////////////
    //// Lesson 32 Unit Listen and Practice  (listening_and_search_items)

    $L32_U3_contents = [
        ['umbrella','ball','vase','uncle','wall'],
        ['unicorn','violin','vegetables','window','whistle','uncle','watch','wall']
    ];


    for ($i=0; $i < count($L32_U3_contents) ; $i++) {

        foreach ($L32_U3_contents[$i] as $v) {
            DB::table('ans_n_ques')->insert([
                [
                'round' => $i + 1 ,
                'game_id' => 201, 'a_content' => $v,
                'q_image' => $ImageDomain."Grade_1/Lesson_32/Listen_and_Practice/".$v.".png",
                'a_audio' => $AudioDomain."Grade_1/Lesson_32/Listen_and_Practice/".$v.".mp3",
                'a_content' => $v,
                ],
            ]);
        }

        $L32_U3_bg = $ImageDomain."/Grade_1/Lesson_32/Listen_and_Practice/bg.png";


        DB::table('ans_n_ques')->insert([
            ['game_id' => 201, 'round' => $i + 1, 'background' => $L32_U3_bg ]
        ]);





    }































    }
}
