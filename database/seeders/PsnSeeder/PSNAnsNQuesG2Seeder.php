<?php

namespace Database\Seeders\PsnSeeder;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PSNAnsNQuesG2Seeder extends Seeder
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


        $prefix = "SubBlock_";
        $AtoZ = range('A', 'Z');



        // ========================   Lesson - 21 ===================================
        // Unit - 2 <reading_carousel>

        $contents = [
            'Badminton','Basketball','Football','Frisbee','Hide and seek','Hopscotch','Jumping Rope','Volleyball'
        ];

        $audio = $AudioDomain."Grade_2/Lesson_21/Listen_and_Repeat/";
        $img = $ImageDomain."Grade_2/Lesson_21/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 353, 'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }


        // ========================================
        // Unit -3 <matching_columns>


        $contents = [
          'Volleyball','Frisbee','Football','Hopscotch','Basketball'
        ];

        $ans = [
            'Football','Frisbee','Basketball','Hopscotch','Volleyball'
        ];

        $audio = $AudioDomain."Grade_2/Lesson_21/Matching/";
        $img = $ImageDomain."Grade_2/Lesson_21/Matching/";

        foreach ($ans as $key => $val) {
            DB::table('ans_n_ques')->insert([
                 [
                     'game_id' => 354,
                     'round' => 1,
                     'q_content' => strtolower($val),
                     'q_image' => $img.$val.".png",
                     'q_audio' => $audio.$val.".mp3",
                 ]
             ]);
     }



        foreach ($contents as $key => $val) {
               DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 354,
                        'round' => 1,
                        'q_image' => $val,
                        'q_audio' => $audio.$val.".mp3",
                        'q_content' => $val,
                    ]
                ]);
        }





    // ========================================
    // Unit -4  <mcq_tf_instruction>

    $imgs = [
        'basketball','hopscotch', 'hide_and_seek', 'football','frisbee'
    ];

    $ans = [
        false,true,true,false,true
    ];




     $audio = $AudioDomain."Grade_2/Lesson_21/Choose_your_answer/";
        $img = $ImageDomain."Grade_2/Lesson_21/Choose_your_answer/";

    foreach ($imgs as $key => $val) {

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 355,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.str_replace('_','-',$val).".mp3",
                'q_conver' => "I can play " .str_replace('_',' ',$val).".Can you play it?",
                'q_content' =>  "Yes, I can",
                'a_content' =>  true == $ans[$key] ? true : false,
                ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 355,
                'round' => $key + 1,
                'q_content' => "No, I can't",
                'a_content' => false == $ans[$key] ? true : false,
            ]
        ]);
    }


    // ========================================
    // Unit -4  <speaking_and_recording>

        $contentImg = ['basketball', 'volleyball', 'hide and seek', 'football', 'frisbee'];


        $questionContent = [
            "I can play ___. Can ___ ___ ___? Yes,___ ___",
            "I can play ___. ___ ___ ___ ___? No,___ ___",
            "I can play ___. ___ ___ ___ ___? ___ ___ ___",
            "I can play football. Can you play it? No,___ ___",
            "I can play frisbee. Can you play it? Yes,I can.",

        ];

        $questionAudio = [
            "I-Can-Play-Basketball.mp3",
            "I-Can-Play-Volleyball.mp3",
            "I-Can-Play-hide-and-seek.mp3",
            "I-Can-Play-football.mp3",
            "I-Can-Play-frisbee.mp3",
        ];

        $img = $ImageDomain . "Grade_2/Lesson_21/Speaking/";
        $audio = $AudioDomain . "Grade_2/Lesson_21/Speaking/";

        foreach ($questionContent as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 356,
                    'round' => $key + 1,
                    'q_content' => $value,
                    'q_image' => $img . str_replace(' ', '-', $contentImg[$key]) . ".png",
                    'a_content' => null,
                    // 'q_audio' => $audio.$questionAudio[$key],
                ]

            ]);
        }




    // ========================   Lesson - 22 ===================================
    // Unit - 4 <speaking_and_recording>




        $contentImg = ['hopscotch', 'rope-jump', 'sing-english-songs', 'football', 'draw-picture'];

        $questionContent = [
            "I can play hopscotch. Can you play it? Yes,I can.I Can play better than you.",
            "I can play ___ . Can you play it? Yes,I can.I Can play jump rope --- than you.",
            "I can  ___  English songs. Can you ___ ___ ___? Yes,I can.I Can sing English songs ___ ___ you.",
            "I can ___. Can you play it? Yes,I can. I can ___ ___ ___ than you.",
            "I can draw ___ . Can you ___ picture? Yes,I can. I can ___ ___ ___ than you."

        ];

        $questionAudio = [
            "I-Can-play-hopscotch.mp3",
            "I-Can-play-jump-rode.mp3",
            "I-Can-sing-english-songs.mp3",
            "I-Can-Play-football.mp3",
            "I-Can-Play-draw.mp3",
        ];

        $img = $ImageDomain . "Grade_2/Lesson_22/Speaking/";
        $audio = $AudioDomain . "Grade_2/Lesson_22/Speaking/";

        foreach ($questionContent as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 360,
                    'round' => $key + 1,
                    'q_content' => $value,
                    'q_image' => $img . str_replace(' ', '-', $contentImg[$key]) . ".png",
                    'a_content' => null,
                    'q_audio' => $audio.$questionAudio[$key],

                ]

            ]);
        }




    // ========================   Lesson - 23 ===================================
    // Unit - 2 <reading_carousel>

    $contents = [
        'bird','cat','cow','dog','giraffe','goat','hippopotamus','monkey','rabbit','snake',
    ];

    $audio = $AudioDomain."Grade_2/Lesson_23/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_2/Lesson_23/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 362,
                    'a_content' => $val,
                    'a_image' => $img.ucfirst($val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }



    // Unit - 3 <sentence_tracing>

    $words = [
        'Cow','Dog','Cat','Bird',
    ];

    $letters = [
        ['C','o','w'],
        ['D','o','g'],
        ['C','a','t'],
        ['B','i','r','d'],
    ];

    $audio = $AudioDomain."Grade_2/Lesson_23/Trace_words/";
    $img = $ImageDomain."Grade_2/Lesson_23/Trace_words/";


    foreach ($words as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 363,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.$val.".mp3",
                'a_content' => $val

            ]
        ]);


        foreach ($letters[$key] as $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 363,
                    'round' => $key + 1,
                    'q_content' => $img.$value.".png",

                ]
            ]);
        }

    }



    // Unit - 4 Listen and Choose <mcq_grammar_two>

    $imgs = [
        'Snake','Hippo','Rabbit','Bird','Giraffe',
    ];

    $ques = [
        ['Snake','Goat'],
        ['Hippo','Cow'],
        ['Goat','Rabbit'],
        ['Bird','Cat'],
        ['Monkey','Giraffe']
    ];


    $audio = $AudioDomain."Grade_2/Lesson_23/Listen_and_Choose/";
    $img = $ImageDomain."Grade_2/Lesson_23/Listen_and_Choose/";




    foreach ($imgs as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 364,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.$val.".mp3",
                'q_content' => $ques[$key][0],
                'q_conver'  =>  "What is it? \n Its a ___. ",
                'a_content' => $ques[$key][0] == $val ? true : false
            ]
        ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 364,
                    'round'  => $key +  1,
                    'q_content' => $ques[$key][1],
                    'a_content' => $ques[$key][1] == $val ? true : false
                ]
            ]);
    }


    // Lesson 23 unit 4 Speaking <Speaking_recording>


        $contentImg = ["Jane"];

        $questionContent = [
                "HI,I am ___. I can ___ ___. \n I can ___ ___ and ___ ___. \n I can't ___ ___. I like ___. \n My favorite ___ is ___.It is ___."
        ];

        $questionAudio = ["Hi i am Jane.I can sing"];

        $img = $ImageDomain . "Grade_2/Lesson_23/Speaking/";
        $audio = $AudioDomain . "Grade_2/Lesson_23/Speaking/";

        foreach ($questionContent as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 365,
                    'round' => $key + 1,
                    'q_content' => $value,
                    'q_image' => $img . str_replace(' ', '-', $contentImg[$key]) . ".png",
                    'a_content' => null,
                    'q_audio' => $audio.str_replace(' ','-',$questionAudio[$key]).".mp3",
                    // 'q_audio' => null
                ]

            ]);
        }




    // Lesson 24 unit 2 Listen and Practice <Reading_carousel>

    $contents = [
        'Quail', 'Queen', 'Question', 'Quilt', 'Quiz', 'Rabbit',
        'Radio', 'Raincoat', 'Rhino', 'Ring', 'Rocket', 'Rope', 'Ruler'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_24/Listen_and_Practice/";
    $img = $ImageDomain."Grade_2/Lesson_24/Listen_and_Practice/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 367,
                    'a_content' => $val,
                    'a_image' => $img.ucfirst($val).".png",
                    'a_audio' => $audio.str_replace(' ','-',strtolower($val)).".mp3"
                ],
            ]);
        }



    // Lesson 24 Unit 3 Trace Words <sentence_tracing>



    $words = [
        'Rope','Ring','Quiz','Quail',
    ];

    $letters = [
        ['R','o','p','e'],
        ['R','i','n','g'],
        ['Q','u','i','z'],
        ['Q','u','a','i','l'],
    ];

    $audio = $AudioDomain."Grade_2/Lesson_24/Trace_words/";
    $img = $ImageDomain."Grade_2/Lesson_24/Trace_words/";


    foreach ($words as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 368,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.$val.".mp3",
                'a_content' => $val

            ]
        ]);


        foreach ($letters[$key] as $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 368,
                    'round' => $key + 1,
                    'q_content' => $img.$value.".png",

                ]
            ]);
        }

    }



    // Lesson -24 Unit -4 <matching_columns>

    $contents = [
            ['Rope', 'Quail', 'Raincoat', 'Rocket', 'Radio'],
            ['Queen', 'Question', 'Rhino', 'Ring', 'Ruler']
        ];

        $randomValues = [
            ['Raincoat', 'Radio', 'Rocket', 'Quail', 'Rope'],
            ['Queen', 'Ring', 'Ruler', 'Rhino', 'Question']
        ];

        $audio = $AudioDomain . "Grade_2/Lesson_24/Matching/";
        $img = $ImageDomain . "Grade_2/Lesson_24/Matching/";

        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 369, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 369, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => $img . strtolower($q) . ".png",
                        'q_audio' => $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }



    // Lesson -24 Writing <rearrange with audio>


        $Questions = [
            ['I', 'O', 'D', 'R', 'A'],
            ['O', 'P', 'R', 'E'],
            ['I', 'N', 'R', 'C', 'O', 'A', 'A','T'],
            ['I', 'U', 'Q', 'Z'],
            ['R', 'U', 'R', 'E', 'L'],
            ['O', 'P', 'R','E'],
            ['O', 'R', 'H','N','I'],
            ['O','Q','I','T','E','S','U','N'],
            ['E','Q','E','U','N'],
            ['R','O','E','T','K','C'],
        ];

        $answers = [
            'RADIO', 'ROPE', 'RAINCOAT', 'QUIZ', 'RULER', 'ROPE','RHINO','QUESTION','QUEEN','ROCKET'
        ];

        for ($i = 0; $i < count($Questions); $i++) {

            foreach ($Questions[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    ['game_id' => 370, 'round' => $i + 1, 'q_content' => $innerVal]
                ]);
            }


            $img = $ImageDomain . "Grade_2/Lesson_24/Writing/";
            $audio = $AudioDomain . "Grade_2/Lesson_24/Writing/";

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 370,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                    'a_audio' => $audio . strtolower($answers[$i]) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }


        //// Lesson 24 Unit 6 (Speaking) <speaking_and_recording>

        $contents = [
            "What-is-it-quail", "Food", "What-is-it-rabbit", "Rabbit-like", "Rocket",
            "Quail-yes-no", "Raincoat-yes-no", "Rocket-yes-no",
        ];

        $Question_contents = [
            'What is it?',      // quail
            'What is your favorite food?', // Food
            'What is it?',          // rabbit
            'Do you like rabbit',   // rabbit -like
            'Can you draw a rocket?',

            'Can you draw ___? \n Yes,___ ___. No ___, ___.', //  Quail
            'Do you like ___? \n Yes,______,No ___ ___.', // Raincoat
            'Can you draw a rocket? \n Yes, I can.',  //rocket
        ];


        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 371, 'round' => $key + 1,
                    'round_instruction' => "Look at this picture and speak.",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $AudioDomain."/Grade_2/Lesson_24/Speaking/".$contents[$key].".mp3",
                    'q_image' => $ImageDomain . "Grade_2/Lesson_24/Speaking/" . $value . ".png",
                    // 'a_content' => str_replace('-', ' ', $value)
                ]

            ]);
        }




        //// Lesson 24 Unit 7 (Reading Short) < reading_passage >

        $images = $ImageDomain . "Grade_2/Lesson_24/Reading_Short/";
        $audios = $AudioDomain . "Grade_2/Lesson_24/Reading_Short/";
        // $L32U5_content = ['umbrella','violin','vase'];

        $L32U5_para = "My name is Chris.I have a rabbit. Her name is Lovely. She is white. She like strawberries and mangoes. She eats ten strawberries every day. She eat three mangoes on Sunday. She can hop and jump. She can't play badminton.";

        $L32U5_given_q = [
            ["Does she like mangoes? ----, She does.", "Yes"],
            ["What does she eat on Sunday?", "Three mango"],
            ["Can she play badminton? ___ She can.", 'No'],
            ["What color is the rabbit?", "White"],
            ["What is the rabbit's name?.", 'Lovely'],
        ];
        $given_audio = [
            "Does-she-like-mango.mp3",
            "What-does-she-eat-on-sunday.mp3",
            "Can-she-play-badminton.mp3",
            "What-color-is-the-rabbit.mp3",
            "What-is-the-rabbit-name.mp3"
        ];
        $paraName = "My-name-is-Chris.I-have-a-rabbit.mp3";

        $given_answer = [
            ['Yes', 'No'],
            ['Two mango', 'Five mango', 'Three mango'],
            ['Yes', 'No',],
            ['White', 'Gray', 'Black'],
            ['Lovely', 'Sofia', 'Likely']
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 372,
                        'q_audio' => $audios . str_replace(' ','-',strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $L32U5_given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 372,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $L32U5_given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 372,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $L32U5_para,
                    // 'q_image' => $images . "character.png", //char
                    'background' => $images . "bg.png"
                ]
            ]);
        }





    // ========================   Lesson - 25 ===================================
    // Unit - 2 <reading_carousel>

    $contents = [
        'Bird','Bush','Chair','Egg','Farm House','Nest','Quail','Rabbit','Table'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_25/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_2/Lesson_25/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 374,
                    'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }


    // Unit - 3 Choose <mcq_grammar_two>  <mcq_grammar>

    $imgs = [
        'Cat','Cow','Dog','Rabbit','Quail','Egg', 'Bird'
    ];


    $ques = [
        ['under','on','in'],
        ['on','beside','in'],
        ['in','beside','under'],
        ['on','beside','in'],
        ['under','on','in'],
        ['under','on','in'],
        ['Under','on','in']
    ];


    $audio = $AudioDomain."Grade_2/Lesson_25/Choose/";
    $img = $ImageDomain."Grade_2/Lesson_25/Choose/";

    $second_q_contents = [
        'The cat ___ the table.', 'The cow ___ the farm house.', 'The dog ___ the chair.',
        'The rabbit ___ the bush.','The quail ___  the tree.','It is ___ the nest.',
        'it is ___ the tree.'
    ];

    $ans = [
        'under','beside','under','in','on','in','on'
    ];

    foreach ($imgs as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 375,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.$val.".mp3",
                'q_content' => $ques[$key][0],
                'q_conver'  =>  "Where is the $val ?"." " . $second_q_contents[$key] ,
                'a_content' => $ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 375,
                'round'  => $key +  1,
                'q_content' => $ques[$key][1],
                'a_content' => $ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 375,
                'round'  => $key +  1,
                'q_content' => $ques[$key][2],
                'a_content' => $ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);


    }




    // Unit - 4 Listen and write <listening_choosing_answer>


      $audio_q = [
        'cat_on_table','dog_under_chair','quail_on_tree','quail_on_bed','rabbit_in_bush'
      ];

      $given_ques = [
            ['Chair','Table','Bush'],
            ['Table','Bed','Chair'],
            ['Table','Bed','Tree'],
            ['Chair','Table','Bed'],
            ['Chair','Table','Bush'],
      ];

    $ans = [
        'Table','Chair','Tree','Bed','Bush'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_25/Listen_and_write/";
    $img = $ImageDomain."Grade_2/Lesson_25/Listen_and_write/";

    foreach ($audio_q as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 376,
                'round' => $key + 1,
                'q_audio' => $audio.$val.".mp3",
                'q_content' => $given_ques[$key][0],
                // 'q_conver'  =>  "Where is the $val ?". $second_q_contents[$key] ,
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 376,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 376,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);


    }


    //// Lesson 25 Unit 5 (Speaking) <speaking_and_recording>

        $contents = [
            "Egg", "Dog", "Cat", "Quail",
            "Rabbit", "Cow",
        ];

        $Question_contents = [
            'The egg is ___',
            'The dog is ___',
            'The cat is ___',
            'The quail is ___',
            'The rabbit is ___',
            'The cow is ___',
        ];


        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 377, 'round' => $key + 1,
                    'round_instruction' => "Look at this picture and speak.",
                    'q_content' =>"Free Practice. ".$Question_contents[$key],
                    'q_audio' => $AudioDomain."/Grade_2/Lesson_25/Speaking/".$contents[$key].".mp3",
                    'q_image' => $ImageDomain . "Grade_2/Lesson_25/Speaking/" . $value . ".png",
                    'a_content' => str_replace('-', ' ', $value)
                ]

            ]);
        }



    // ========================   Lesson - 26 ===================================
    // Unit - 1 Listen and Repeat <reading_carousel>


    $contents = [
        'Sea','Ship','Shoe','Shop','Snake','Snow','Soup','Sun',
        'Table','Taxi','Tomato','Town','Train','Tree','Truck','Tunnel'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_26/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_2/Lesson_26/Listen_and_Repeat/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 378, 'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
            ],
        ]);
    }


    // Unit -2 Trace Word <Sentence Tracing>

    $words = [
        'Shoe','Taxi','Ship','Tree',
    ];

    $letters = [
        ['S','h','o','e'],
        ['T','a','x','i'],
        ['S','h','i','p'],
        ['T','r','e','e'],
    ];

    $audio = $AudioDomain."Grade_2/Lesson_26/Trace_words/";
    $img = $ImageDomain."Grade_2/Lesson_26/Trace_words/";


    foreach ($words as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 379,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.$val.".mp3",
                'a_content' => $val

            ]
        ]);


        foreach ($letters[$key] as $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 379,
                    'round' => $key + 1,
                    'q_content' => $img.$value.".png",

                ]
            ]);
        }

    }




     // Lesson -26 Unit -3 <matching_columns>

     $contents = [
        ['Shop', 'Truck', 'Train', 'Town', 'Shoe'],
        ['Sun', 'Soup', 'Tunnel', 'Snow', 'Tomato']
    ];

    $randomValues = [
        ['Train', 'Shop', 'Shoe', 'Truck', 'Town'],
        ['Tunnel', 'Snow', 'Tomato', 'Sun', 'Soup']
    ];

    $audio = $AudioDomain . "Grade_2/Lesson_26/Matching_words_and_pictures/";
    $img = $ImageDomain . "Grade_2/Lesson_26/Matching_words_and_pictures/";

    for ($i = 0; $i < count($contents); $i++) {

        foreach ($contents[$i] as $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 380, 'round' => $i + 1, 'q_content' => $q,
                    'q_image' => $q,
                    'q_audio' => $audio . strtolower($q) . ".mp3",
                ]
            ]);
        }


        foreach ($randomValues[$i] as $q) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 380, 'round' => $i + 1, 'q_content' => strtolower($q),
                    'q_image' => $img . strtolower($q) . ".png",
                    'q_audio' => $audio . strtolower($q) . ".mp3",
                ]
            ]);
        }
    }



    // Lesson -26 Unit -4 Listen and write <rearrange with audio>

    $Questions = [
        ['R', 'A', 'N', 'T', 'I'],
        ['R', 'E', 'E', 'T'],
        ['T', 'E', 'N', 'L', 'N', 'U'],
        ['O', 'E', 'S', 'H'],
        ['A', 'E', 'S'],
        ['A', 'X', 'T', 'I'],
        ['C','T','R','U','K'],
        ['T','T','O','O','M','A'],
        ['U','N','S'],
        ['A','N','S','E','K']
    ];

    $answers = [
        'TRAIN', 'TREE', 'TUNNEL', 'SHOE', 'SEA', 'TAXI','TRUCK','TOMATO','SUN','SNAKE',
    ];

    for ($i = 0; $i < count($Questions); $i++) {

        foreach ($Questions[$i]  as  $innerVal) {
            DB::table('ans_n_ques')->insert([
                ['game_id' => 381, 'round' => $i + 1, 'q_content' => $innerVal]
            ]);
        }


        $img = $ImageDomain . "Grade_2/Lesson_26/Listen_and_Writing/";
        $audio = $AudioDomain . "Grade_2/Lesson_26/Listen_and_Writing/";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 381,
                'round' => $i + 1,
                'q_image' => $img . strtolower($answers[$i]) . ".png",
                'a_audio' => $audio . strtolower($answers[$i]) . ".mp3",
                'a_content' => $answers[$i],
            ]
        ]);
    }



     //// Lesson 26 Unit 5 (Speak) <speaking_and_recording>

     $contents = [
        "teacher", "train", "beside_shop", "rabbit",
        "Under_tree", "town",
    ];

    $Question_contents = [
        'My father is a  ___',
        'He goes to school by ___',
        'The school is ___ ths ___.',
        'I have a  ___. It is white and fast.',
        'The rabbit is ___ the __now. \n I love it very much.',
        'I live in   ___',
    ];


    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 382, 'round' => $key + 1,
                'round_instruction' => "Look at this picture and speak.",
                'q_content' => $Question_contents[$key],
                'q_audio' => $AudioDomain."/Grade_2/Lesson_26/Speak/".$contents[$key].".mp3",
                'q_image' => $ImageDomain . "Grade_2/Lesson_26/Speak/" . $value . ".png",
                'a_content' => str_replace('-', ' ', $value)
            ]

        ]);
    }


    // =======================================   27 ==============================================
    // Unit - 2 Reading <reading_carousel>

    // sub -1
    $contents = [
       'Deer','Duck','Elephant','Giraffe','Tiger','Wall'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_27/Reading-1/";
    $img = $ImageDomain."Grade_2/Lesson_27/Reading-1/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 384, 'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
            ],
        ]);
    }


    // sub -2

    $contents = [
        'Deer','Duck','Elephant','Giraffe','Tiger','Monkey'
     ];

     $audio = $AudioDomain."Grade_2/Lesson_27/Reading-2/";
     $img = $ImageDomain."Grade_2/Lesson_27/Reading-2/";

     foreach ($contents as $val) {
         DB::table('ans_n_ques')->insert([
             [
                 'game_id' => 385, 'a_content' => $val,
                 'a_image' => $img.str_replace(' ','-',$val).".png",
                 'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
             ],
         ]);
     }





    // Lesson -27 Unit - 4 Listen and write <listening_choosing_answer>


    $audio_q = [
        'Where_is_the_elephant',
        'Where_is_the_giraffe',
        'Where_is_the_monkey',
        'Where_is_the_rabbit',
        'Where_is_the_tiger',
      ];

      $given_ques = [
            ['in front of','Beside','on'],
            ['Beside','in','on'],
            ['Behind','Beside','on'],
            ['Behind','in','on'],
            ['Behind','Beside','in front of'],
      ];

    $ans = [
        'in front of','Beside','on','in','Behind'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_27/Listen_and_write/";
    $img = $ImageDomain."Grade_2/Lesson_27/Listen_and_write/";

        foreach ($audio_q as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 386,
                'round' => $key + 1,
                'q_audio' => $audio.$val.".mp3",
                'q_content' => $given_ques[$key][0],
                // 'q_conver'  =>  "Where is the $val ?". $second_q_contents[$key] ,
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 386,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 386,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);


    }


        //// Lesson 27 Unit 4 (Speak) <speaking_and_recording>

        $contents = [
            "elephant", "monkey", "duck", "tiger", "giraffe",
        ];
        // $contents = [
        //    1,3,4,8,10
        // ];



        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 387, 'round' => $key + 1,
                    'round_instruction' => "Look at this picture and speak.",
                    'q_content' => "Where is the ".$value."?",
                    'q_audio' => $AudioDomain."/Grade_2/Lesson_27/Speak/".$value.".mp3",
                    'q_image' => $ImageDomain . "Grade_2/Lesson_27/Speak/" . $value . ".png",
                    'a_content' => str_replace('-', ' ', $value)
                ]

            ]);
        }




    // ====================== Lesson -28 ===================================

    // Unit -2 Reading <Reading_carousel>
      $contents = [
            'Blue','Brown','Gray','Green','Ladder','Pink','Short tall','Wall','Yellow'
        ];

        $audio = $AudioDomain."Grade_2/Lesson_28/Reading/";
        $img = $ImageDomain."Grade_2/Lesson_28/Reading/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 389, 'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }






    // Unit - 3 Listen and write <listening_choosing_answer>


      $audio_q = [
        'ant_in_the_cup',
        'bird_is_in_the_nest',
        'cow_is_beside_the_house',
        'deer_is_beside_the_ladder',
        'elephant_is_in-front_the_tree',
        'monkey_on_the_wall'
      ];

      $given_ques = [
            ['Ladder','Nest','Cup'],
            ['Nest','House','Ladder'],
            ['Nest','Tree','House'],
            ['Nest','Ladder','House'],
            ['Tree','Cup','House'],
            ['Cup','Wall','Nest'],
      ];

    $ans = [
        'Cup','Nest','House','Ladder','Tree','Wall'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_28/Listen_and_write/";
    $img = $ImageDomain."Grade_2/Lesson_28/Listen_and_write/";

        foreach ($audio_q as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 390,
                'round' => $key + 1,
                'q_audio' => $audio.$val.".mp3",
                'q_content' => $given_ques[$key][0],
                // 'q_conver'  =>  "Where is the $val ?". $second_q_contents[$key] ,
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 390,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 390,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);

    }





     // Lesson -28 Unit -4 Matching <matching_columns>

     $contents = [
        ['Elephant', 'Ladder', 'Cup', 'Deer', 'Wall'],
        ['Cow', 'Bird', 'Monkey', 'House', 'Nest']
    ];

    $randomValues = [
        ['Cup', 'Deer', 'Elephant', 'Wall', 'Ladder'],
        ['Monkey', 'Nest', 'House', 'COw', 'Bird']
    ];

    $audio = $AudioDomain . "Grade_2/Lesson_28/Matching/";
    $img = $ImageDomain . "Grade_2/Lesson_28/Matching/";

    for ($i = 0; $i < count($contents); $i++) {

        foreach ($contents[$i] as $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 391, 'round' => $i + 1, 'q_content' => $q,
                    'q_image' => $q,
                    'q_audio' => $audio . strtolower($q) . ".mp3",
                ]
            ]);
        }


        foreach ($randomValues[$i] as $q) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 391, 'round' => $i + 1,
                    'q_content' => strtolower($q),
                    'q_image' => $img . strtolower($q) . ".png",
                    'q_audio' => $audio . strtolower($q) . ".mp3",
                ]
            ]);
        }
    }




    //// Lesson 28 Unit 5 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_2/Lesson_28/Reading_Short/";
        $audios = $AudioDomain . "Grade_2/Lesson_28/Reading_Short/";
        // $L32U5_content = ['umbrella','violin','vase'];

        $L32U5_para = "This is Saturday. Jane and Chris go to the zoo. They are very happy today. There are many animals there. In the picture, the giraffe is behind the wall. It's tall, It't yellow and brown. It has a long neck. The monkey is on the tree. It's small. It's brown too. It's very fast. Jane like giraffe and Chris's favorite animal is monkey.";

        $L32U5_given_q = [
            ["The monkey is slow.", "No"],
            ["Chris's favorite animal is giraffe.", "No"],
            ["Jane and Chris are happy today.", 'Yes'],
            ["The giraffe are tall and brown?", "Yes"],
            ["This is Sunday.", 'No'],
        ];

        $given_audio = [
            "The-monkey-is-slow.mp3",
            "Chris-favorite-animal-is-giraffe.mp3",
            "Jane-and-chris-happy-today.mp3",
            "the-giraffe-is-tall-brown.mp3",
            "This-is-sunday.mp3"
        ];
        $paraName = "This-is-Saturday-Jane-and-Chris-go-to-the-zoo.mp3";

        $given_answer = ['Yes', 'No'];



        for ($i = 0; $i < count($L32U5_given_q); $i++) {


            foreach ($given_answer as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 392,
                        'q_audio' => $audios . str_replace(' ','-',strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $L32U5_given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 392,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $L32U5_given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 392,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $L32U5_para,
                    // 'q_image' => $images . "character.png", //char
                    'background' => $images . "bg.png"
                ]
            ]);
        }




    // ========================   Lesson - 29 ===================================
    // Unit - 2 <reading_carousel>


        // Sub - 1

        $contents = [
            'Blouse','Dress','Green','Pink','Sandals',
            'Shorts','Skirt','Sport Shirt', 'White', 'Yellow'
        ];

        $audio = $AudioDomain."Grade_2/Lesson_29/Reading_1/";
        $img = $ImageDomain."Grade_2/Lesson_29/Reading_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 394,
                    'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }

        // Sub - 2 <Carousel>

        $contents = [
            'What are your wearing today? I am wearing a yellow blouse.',
            'What is she wearing today? She is wearing a pink dress.',
            'What is he wearing today? He is wearing blue shorts.',
            'What is Jack wearing today? He is wearing a gray sport shirt.',
        ];

        $data_content = [
            'Wearing_yellow_blouse',
            'Wearing_pink_dress',
            'Wearing_blue_shorts',
            'Wearing_sport_shirt'
        ];

        $audio = $AudioDomain."Grade_2/Lesson_29/Reading_2/";
        $img = $ImageDomain."Grade_2/Lesson_29/Reading_2/";

        foreach ($contents as $k => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 395,
                    'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$data_content[$k]).".png",
                    'a_audio' => $audio.str_replace(' ','-',$data_content[$k]).".mp3"
                ],
            ]);
        }




    //Lesson -29 Unit - 3 Look and write <listening_choosing_answer>


      $audio_q = [
        'wearing_black_sandals',
        'wearing_brown_shorts',
        'wearing_white_skirt',
        'wearing_green_sport_shirt',
        'wearing_pink_blouse'

      ];

      $given_ques = [
            ['Pink blouse','Sport shirt','Black sandals'],
            ['Brown shorts', 'White skirt', 'Yellow sandals'],
            ['Brown shorts', 'White skirt', 'Yellow sandals'],
            ['Pink blouse','Sport shirt','Black sandals'],
            ['Pink blouse','Sport shirt','Black sandals'],


      ];

    $ans = [
        'Black sandals','Brown shorts','White skirt','Sport shirt','Pink blouse'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_29/Look_and_write/";
    $img = $ImageDomain."Grade_2/Lesson_29/Look_and_write/";

        foreach ($audio_q as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 396,
                'round' => $key + 1,
                'q_audio' => $audio.$val.".mp3",
                'q_content' => $given_ques[$key][0],
                // 'q_conver'  =>  "Where is the $val ?". $second_q_contents[$key] ,
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 396,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 396,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);


    }





    //// Lesson 29 Unit 5 (Speak) <speaking_and_recording>

    $contents = "boy_and_girl";

    $Question_contents = [
        "My name is Chris. I like sport shirts and shorts. \n My favorite color are brown and blue.\n Today, I am wearing a blue sport shirt and black sandals.\n When I go out, I wear shorts.",
        "My name is ___. I like ___ and ___.,\n My favorite color are ___ and ___.\n Today I am wearing a ___ and white sandals.\n When I go out, I wear ___.",

    ];

    $ques_contents_audio = [
        'Chris',
        'Jane'
    ];



    foreach ($Question_contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 397,
                'round' => $key + 1,
                'round_instruction' => "Talk about you.",
                'q_content' => $value,
                'q_audio' => $AudioDomain."/Grade_2/Lesson_29/Speak/".$ques_contents_audio[$key].".mp3",
                'q_image' => $ImageDomain . "Grade_2/Lesson_29/Speak/" . $contents . ".png",
                // 'a_content' => str_replace('-', ' ', $value)
            ]

        ]);
    }



    /////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////// - 31 ===========================================

    //  Lesson -30 U-1 Listen and Repeat <Reading_carousel>

            $contents = [
                'Umbrella','Uncle','Unicorn','Unicycle','Uniform','Van','Vase','Vegetables','Vest','Village','Violet','Violin'
            ];

            $audio = $AudioDomain."Grade_2/Lesson_30/Listen_and_Repeat/";
            $img = $ImageDomain."Grade_2/Lesson_30/Listen_and_Repeat/";

            foreach ($contents as $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 398, 'a_content' => $val,
                        'a_image' => $img.str_replace(' ','-',$val).".png",
                        'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                    ],
                ]);
            }




    // Lesson -30 Unit-2 Trace words <sentence_tracing>


        $words = [
            'Vase','Vest','Van'
        ];

        $letters = [
            ['V','a','s','e'],
            ['V','e','s','t'],
            ['V','a','n'],
        ];

        $audio = $AudioDomain."Grade_2/Lesson_30/Trace_words/";
        $img = $ImageDomain."Grade_2/Lesson_30/Trace_words/";


        foreach ($words as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 399,
                    'round' => $key + 1,
                    'q_image' => $img.$val.".png",
                    'q_audio' => $audio.$val.".mp3",
                    'a_content' => $val

                ]
            ]);


            foreach ($letters[$key] as $value) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 399,
                        'round' => $key + 1,
                        'q_content' => $img.$value.".png",

                    ]
                ]);
            }

        }




    // Lesson - 30 Unit -3 Matching words and pictures <matching_columns>

    $contents = [
        ['Umbrella', 'Violin', 'Van', 'Vase', 'Unicycle'],
        ['Uniform', 'Unicorn', 'Village', 'Vest', 'Vegetables']
    ];

    $randomValues = [
        ['Van', 'Unicycle', 'Umbrella', 'Violin', 'Vase'],
        ['Village', 'Vegetables', 'Uniform', 'Unicorn', 'Vest']
    ];

    $audio = $AudioDomain . "Grade_2/Lesson_30/Matching/";
    $img = $ImageDomain . "Grade_2/Lesson_30/Matching/";

    for ($i = 0; $i < count($contents); $i++) {

        foreach ($contents[$i] as $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 400,
                    'round' => $i + 1,
                    'q_content' => $q,
                    'q_image' => $q,
                    'q_audio' => $audio . $q . ".mp3",
                ]
            ]);
        }


        foreach ($randomValues[$i] as $q) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 400, 'round' => $i + 1,
                    'q_content' => strtolower($q),
                    'q_image' => $img . strtolower($q) . ".png",
                    'q_audio' => $audio . $q . ".mp3",
                ]
            ]);
        }
    }





    // Lesson -30 Unit -4 Listen and write <rearrange with audio>

    $Questions = [
        ['E', 'G', 'L', 'I', 'V', 'L', 'A'],
        ['E', 'C', 'L', 'N','C','Y','U','I'],
        ['E', 'A', 'S', 'V'],
        ['E', 'T', 'S', 'V'],
        ['O', 'V', 'I', 'N', 'L', 'I'],
        ['O', 'C', 'U', 'N', 'N', 'R', 'I'],
        ['A', 'V', 'N'],
        ['F','R','M','I','N','O','U'],
        ['U','R','M','B','A','L','L','E'],

    ];

    $answers = [
        'VILLAGE', 'UNICYCLE', 'VASE', 'VEST', 'VIOLIN', 'UNICORN','VAN','UNIFORM','UMBRELLA',
    ];

    for ($i = 0; $i < count($Questions); $i++) {

        foreach ($Questions[$i]  as  $innerVal) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 401,
                    'round' => $i + 1,
                    'q_content' => $innerVal
                ]
            ]);
        }


        $img = $ImageDomain . "Grade_2/Lesson_30/Listen_and_Write/";
        $audio = $AudioDomain . "Grade_2/Lesson_30/Listen_and_Write/";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 401,
                'round' => $i + 1,
                'q_image' => $img . strtolower($answers[$i]) . ".png",
                'a_audio' => $audio .ucfirst(strtolower($answers[$i])) . ".mp3",
                'a_content' => $answers[$i],
            ]
        ]);
    }


    //// Lesson 30 Unit 5 (Speak) <speaking_and_recording>

        $contents = [
            "Vest", "Village", "Violin", "Van", "Vase", "Unicorn", "Blouse", "Umbrella",
        ];



        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 402,
                    'round' => $key + 1,
                    'round_instruction' => "Look at this picture and speak.",
                    'q_content' => "This is ___.",
                    'q_audio' => $AudioDomain."/Grade_2/Lesson_30/Speak/".$value.".mp3",
                    'q_image' => $ImageDomain . "Grade_2/Lesson_30/Speak/" . $value . ".png",
                    'a_content' => str_replace('-', ' ', $value)
                ]

            ]);
        }


    /////////////////////////// 31 ////////////////////////////////

    // Lesson -31 Unit -2 Reading 1 Sub -1 <Reading_carousel>


    $contents = [
        'Blouse','Boots','Cap','Gloves','Orange','Purple','Raincoat','Scarf','Shoes','Socks','Sweater','Trousers'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_31/Reading-1/";
    $img = $ImageDomain."Grade_2/Lesson_31/Reading-1/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 404,
                'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
            ],
        ]);
    }


    // SUB -2

    $contents = [
       'cap-n-blue-scarf',
       'blue-raincoat-n-purple-boots',
       'yellow-T-shirt-n-red-boots',
       'white-sweater-n-brown-trousers'
    ];

    // $data_contents = [
    //     'cap-n-blue-scarf',
    //     'blue-raincoat-n-purple-boots',
    //     'yellow-T-shirt-n-red-boots',
    //     'white-sweater-n-brown-trousers'
    // ];

    $audio = $AudioDomain."Grade_2/Lesson_31/Reading-2/";
    $img = $ImageDomain."Grade_2/Lesson_31/Reading-2/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 405,
                'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
            ],
        ]);
    }




    //  Lesson -31 Unit-3 Look and Write <listen_choosing_answer>



      $audio_q = [
        'blue_T_shirt-red_cap',
        'violet_skirt_green_glove',
        'gray_boots_purple_sweater',
        'gray_scarf_pink_short',
        'yellow_raincoat_black_boots',
        'orange_shoe_brown_dress'
      ];

      $given_ques = [
            ['blue T-shirt and red cap','orange shoe and brown dress','Gray boots and purple sweater'],
            ['Gray scarf and pink short','violet skirt and green glove','yellow raincoat and black boots'],
            ['Gray boots and purple sweater','blue T-shirt and red cap','orange shoe and brown dress'],
            ['blue T-shirt and red cap','yellow raincoat and black boots','Gray scarf and pink short'],
            ['Gray boots and purple sweater','yellow raincoat and black boots','Gray scarf and pink short'],
            ['violet skirt and green glove','orange shoe and brown dress','blue T-shirt and red cap'],
      ];

    $ans = [
        'blue T-shirt and red cap',
        'violet skirt and green glove',
        'Gray boots and purple sweater',
        'Gray scarf and pink short',
        'yellow raincoat and black boots',
        'orange shoe and brown dress',
    ];

    $audio = $AudioDomain."Grade_2/Lesson_31/Look_and_write/";
    $img = $ImageDomain."Grade_2/Lesson_31/Look_and_write/";

        foreach ($audio_q as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 406,
                'round' => $key + 1,
                'q_audio' => $audio.$val.".mp3",
                'q_content' => $given_ques[$key][0],
                // 'q_conver'  =>  "Where is the $val ?". $second_q_contents[$key] ,
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 406,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 406,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);


    }





    // Lesson 31 Unit-4 Matching <Matching_column>


        $contents = [
            // ['Purple gloves', 'Black trousers', 'Pink skirt', 'Yellow raincoat', 'Orange shoes'],
            [ 'Raincoat','Socks', 'Trousers', 'Shoes', 'Gloves', ]
        ];

        $randomValues = [
            // ['Pink skirt', 'Yellow raincoat', 'Orange shoes', 'Purple gloves', 'Black trousers'],
            ['Socks', 'Raincoat', 'Shoes', 'Gloves', 'Trousers']
        ];

        $audio = $AudioDomain . "Grade_2/Lesson_31/Matching/";
        $img = $ImageDomain . "Grade_2/Lesson_31/Matching/";

        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 407,
                        'round' => $i + 1,
                        'q_content' => ucfirst($q),
                        'q_image' => $q,
                        'q_audio' => $audio .str_replace(' ','-',strtolower($q))  . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 407,
                        'round' => $i + 1,
                        'q_content' =>  ucfirst($q),
                        'q_image' => $img . str_replace(' ','-',strtolower($q)) . ".png",
                        'q_audio' => $audio . str_replace(' ','-',strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }



    // Lesson - 31 Unit-5 Speak <speaking_and_recording>



    $contents = [
        "t-shirt", "scarf", "blouse", "sweater", "raincoat",
    ];

    $Question_contents = [
        'He is wearing ___',
        'She is wearing ___',
        'She is wearing ___',
        'She is wearing ___',
        'He is wearing ___',
    ];

    $img = $ImageDomain . "Grade_2/Lesson_31/Speak/";
    $audio = $AudioDomain . "Grade_2/Lesson_31/Speak/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 408,
                'round' => $key + 1,
                'round_instruction' => $audio."Look-at-this-picture-and-speak.mp3",
                'q_content' => "Look at the picture and speak. \n " .$Question_contents[$key],
                'q_audio' => $audio.$contents[$key].".mp3",
                'q_image' => $img . $value . ".png",
            ]

        ]);
    }


    /////////////////////////////// Lesson - 32 ////////////////////////////////



    // Lesson -32 Unit-2 Reading and Repeat <Reading_carousel>

    $contents = [
        'Wall','Watch','Water','Watermelon','Whale','Window','Wolf','World','X-Ray','Xylophone'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_32/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_2/Lesson_32/Listen_and_Repeat/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 410,
                'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',strtolower($val)).".mp3"
            ],
        ]);
    }


    // Lesson -32 Unit-3 Trace <sentence_trace>
     // Unit - 3 Trace <sentence_tracing>

    $words = [
        'Wolf','Wall',
    ];

    $letters = [
        ['W','o','l','f'],
        ['W','a','l','l'],
    ];

    $audio = $AudioDomain."Grade_2/Lesson_32/Trace/";
    $img = $ImageDomain."Grade_2/Lesson_32/Trace/";


    foreach ($words as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 411,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.$val.".mp3",
                'a_content' => $val

            ]
        ]);


        foreach ($letters[$key] as $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 411,
                    'round' => $key + 1,
                    'q_content' => $img.$value.".png",

                ]
            ]);
        }

    }



    // Lesson - 32 Unit-4 Matching <Matching_column>

     $contents = [
            ['World', 'Watch', 'Water', 'Whale', 'Wall'],
            ['Watermelon', 'Window', 'X-ray', 'Xylophone', 'Wolf'],
            ['World', 'Window', 'Whale', 'Watermelon', 'Watch'],
        ];

        $randomValues = [
            ['Water', 'Wall', 'world', 'Watch', 'Whale'],
            ['X-ray', 'Wolf', 'Xylophone', 'Window', 'Watermelon'],
            ['Whale', 'Watch', 'Watermelon', 'World', 'Window']

        ];

        $audio = $AudioDomain . "Grade_2/Lesson_32/Matching/";
        $img = $ImageDomain . "Grade_2/Lesson_32/Matching/";

        for ($i = 0; $i < count($contents) - 1; $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 412,
                        'round' => $i + 1,
                        'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 412,
                        'round' => $i + 1,
                        'q_content' => strtolower($q),
                        'q_image' => $img . strtolower($q) . ".png",
                        'q_audio' => $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }
        foreach ($randomValues[2] as $q) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 412,
                    'round' => 3,
                    'q_content' => strtolower($q),
                    'q_image' => $img . strtolower($q) . ".png",
                    'q_audio' => $audio . strtolower($q) . ".mp3",
                ]
            ]);
        }


        foreach ($contents[2] as $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 412,
                    'round' => 3,
                    'q_content' => $q,
                    'q_image' => $q,
                    'q_audio' => $audio . strtolower($q) . ".mp3",
                ]
            ]);
        }








    // Lesson -32 Unit - 5 Listen and write <rearrange with audio>

    $Questions = [
        ['W', 'N', 'W', 'I', 'O', 'D'],
        ['R', '-', 'A', 'Y','X'],
        ['T', 'A', 'C', 'H', 'W'],
        ['F', 'L', 'W', 'O'],
        ['E', 'L', 'A', 'W', 'E', 'O', 'N', 'R', 'T', 'M'],
        ['C', 'T', 'O','U', 'S', 'O', 'P'],
        ['E', 'H', 'O', 'P', 'Y', 'N', 'O', 'X', 'L'],
        ['H','L','E','W','A'],
        ['A','E','T','R','W'],
        ['R','O','D','W','L'],
    ];

    $answers = [
        'WINDOW', 'X-RAY', 'WATCH', 'WOLF', 'WATERMELON',
        'OCTOPUS','XYLOPHONE','WHALE','WATER', 'WORLD'
    ];

    for ($i = 0; $i < count($Questions); $i++) {

        foreach ($Questions[$i]  as  $innerVal) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 413,
                    'round' => $i + 1,
                    'q_content' => $innerVal
                ]
            ]);
        }


        $img = $ImageDomain . "Grade_2/Lesson_32/Listen_and_Write/";
        $audio = $AudioDomain . "Grade_2/Lesson_32/Listen_and_Write/";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 413,
                'round' => $i + 1,
                'q_image' => $img . strtolower($answers[$i]) . ".png",
                'a_audio' => $audio .strtolower($answers[$i]) . ".mp3",
                'a_content' => $answers[$i],
            ]
        ]);
    }



        //// Lesson 32 Unit 6 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_2/Lesson_32/Reading/";
        $audios = $AudioDomain . "Grade_2/Lesson_32/Reading/";
        // $L32U5_content = ['umbrella','violin','vase'];

        $para = "This is Saturday. Rosy and Jack are on holiday. They are playing at the park. Rosy likes watermelon. She eats two watermelons on Saturday. She is wearing a pink dress and a blue watch today. Jack likes whales. He can play xylophone. He is wearing a blue cap and orange trousers today.";

        $given_q = [
            ["Today is ----.", "Saturday"],
            ["They are playing at the ___.", "park"],
            ["Rosy is wearing a pink ___ today.", 'dress'],
            ["Jack can play ___.", "xylophone"],
        ];

        $given_audio = [
            "This-is-saturday.mp3",
            "playing-in-park.mp3",
            "Rosy-wearing-dress.mp3",
            "Jack-xylophone.mp3",
        ];

        $paraName = "Rosy-jack-story.mp3";

        $given_answer = [
            ['Saturday', 'Sunday','Monday'],
            ['park', 'zoo',],
            ['blouse', 'dress'],
            ['xylophone', 'guitar'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 414,
                        'q_audio' => $audios . str_replace(' ','-',strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 414,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 414,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Rosy and Jack",
                    'q_conver' => $para,
                    // 'q_image' => $images . "character.png", //char
                    'background' => $images . "bg.png"
                ]
            ]);
        }



    // =============================== 33 ==============================


    // Lesson -33 Unit -2 <Reading_conversation>

    $chars = [
      'Toe Toe','Moe Moe', 'Ni Ni', 'San San'
    ];

    $main_conver = [
        'This is Toe Toe. He is wearing a black cap and a yellow shirt. He is wearing a green shorts, yellow socks and brown shoes.',
        'This is Moe Moe. She is wearing a yellow raincoat and red shirt. She is wearing a brown trousers and red boots.',
        'This is Ni Ni. She is wearing a pink scarf a white blouse. She is wearing a blue skirt and green boots.',
        'Hello, I am San San. I have three friends. They are Ni Ni, Toe Toe and Moe Moe.'
    ];

    $images = $ImageDomain . "Grade_2/Lesson_33/Listen_and_Repeat/";
    $audios = $AudioDomain . "Grade_2/Lesson_33/Listen_and_Repeat/";

    foreach ($chars as $key => $value) {
        DB::table('ans_n_ques')->insert([

            [
            'game_id' => 416,
            'round' => $key + 1,
            'a_image' =>  $images.str_replace(' ','-',$value).".png",
            'a_audio' => $audios.str_replace(' ','-',$value).".mp3",
            'a_conver' => $main_conver[$key],
            'background' => $images."bg".$key + 1 .".png",
            ]

        ]);

    }



    // Lesson -33 Unit -3 Writing exercise <look_and_write>

    // Blank ---------------------------------------
    // Blank ---------------------------------------
    // Blank ---------------------------------------
    // Blank ---------------------------------------
    // Blank ---------------------------------------


    $kids = ['Chris','Jack','Jane'];

    $questions = [
            "Chris is wearing a ___.' \n sport shirt','black ___ \n and red socks.",
            "Jack is wearing a yellow \n  t-shirt, ___trousers, and \n blue ___.",
            "Hello, I am Jane. \n I have three ___. \n They are Rosy, jack, and Chris."
    ];

    $ans = [
        "red  short", "black  cap", "friends"
    ];


    $images = $ImageDomain . "Grade_2/Lesson_33/Writing_exercise/";
    $audios = $AudioDomain . "Grade_2/Lesson_33/Writing_exercise/";

    foreach ($questions as $key => $value) {

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 417,
                'round' => $key + 1,
                'q_image' => $images.$kids[$key].".png",
                'q_audio' => $audios.$kids[$key].".mp3",
                'q_content' => $value,
                'a_content' => $ans[$key],
            ]
        ]);
    }









    // Lesson -33 Unit-4


     $contents = [
        "cap", "t-shirt", "short","sport-shirt", "shoes", "sweater",
     ];

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 418,
                'round' => $key + 1,
                // 'round_instruction' => "Look at this picture and speak.",
                // 'q_content' => "Look at this picture and speak.",
                'q_audio' => $AudioDomain."/Grade_2/Lesson_33/Speak/".$contents[$key].".mp3",
                'q_image' => $ImageDomain . "Grade_2/Lesson_33/Speak/" . $value . ".png",
                'a_content' => str_replace('-', ' ', $value)
            ]

        ]);
    }




    //////////////////////////////// 34 //////////////////////////////

    // Lesson -34 Unit - 1 <reading_carousel>


    $contents = [
        'Yard','Yacht','Yawn','Yo-yo','Yoghurt','Yolk','Zebra','Zero','Zip','Zoo'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_34/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_2/Lesson_34/Listen_and_Repeat/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 419,
                'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',strtolower($val)).".mp3"
            ],
        ]);
    }


    // Lesson -34 Unit-2 Trace Word <sentence_trace>
    // Unit - 3 Trace <sentence_tracing>

    $words = [
        'Yawn','Yolk','YoYo','Zero','Zip'
    ];

    $letters = [
        ['Y','a','w','n'],
        ['Y','o','l','k'],
        ['Y','o','Y','o'],
        ['Z','e','r','o'],
        ['Z','i','p'],
    ];

    $audio = $AudioDomain."Grade_2/Lesson_34/Trace_words/";
    $img = $ImageDomain."Grade_2/Lesson_34/Trace_words/";


    foreach ($words as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 420,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.strtolower($val).".mp3",
                'a_content' => $val

            ]
        ]);


        foreach ($letters[$key] as $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 420,
                    'round' => $key + 1,
                    'q_content' => $img.$value.".png",

                ]
            ]);
        }

    }






    // Lesson - 34 Unit-3 Matching <Matching_column>

     $contents = [
            ['Yolk', 'Yo-yo', 'Yoghurt', 'Zero', 'Zebra'],
            ['Yolk', 'Yacht', 'Yoghurt', 'Yawn', 'Yo-yo'],
        ];

        $randomValues = [
            ['Yolk', 'Zero', 'Yo-yo', 'Zebra', 'Yoghurt'],
            ['Yoghurt', 'Yawn', 'Yolk', 'Yacht', 'Yo-yo'],
        ];

        $audio = $AudioDomain . "Grade_2/Lesson_34/Matching/";
        $img = $ImageDomain . "Grade_2/Lesson_34/Matching/";

        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 421,
                        'round' => $i + 1,
                        'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 421,
                        'round' => $i + 1,
                        'q_content' => strtolower($q),
                        'q_image' => $img . strtolower($q) . ".png",
                        'q_audio' =>  $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }





    // Lesson -34 Unit- 4 Listen and Write <rearrange with audio>


        $Questions = [
            ['A', 'Y', 'D', 'R'],
            ['W', 'Y', 'N', 'A'],
            ['Y','U','O','G','H','R','T'],
            ['K', 'Y', 'L', 'O'],
            ['B','E','A','Z','R'],
            ['E', 'R', 'Z', 'O'],
            ['P', 'I', 'Z'],
            ['O', 'Z', 'O'],
        ];

        $answers = [
            'YARD', 'YAWN', 'YOGHURT', 'YOLK', 'ZEBRA', 'ZERO','ZIP','ZOO'
        ];

        for ($i = 0; $i < count($Questions); $i++) {

            foreach ($Questions[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 422,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }


            $img = $ImageDomain . "Grade_2/Lesson_34/Listen_and_Write/";
            $audio = $AudioDomain . "Grade_2/Lesson_34/Listen_and_Write/";

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 422,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                    'a_audio' => $audio . strtolower($answers[$i]) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }



    // Lesson -34 Unit- 5 Speak <speaking_and_recording>

     $contents = [
        "yoghurt", "zebra", "yoyo", "yawn", "zip", "yolk", "yacht",
     ];

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 423,
                'round' => $key + 1,
                'round_instruction' => "What is this?",
                'q_content' =>"What is this?",
                'q_audio' => $AudioDomain."/Grade_2/Lesson_34/Speak/".$contents[$key].".mp3",
                'q_image' => $ImageDomain . "Grade_2/Lesson_34/Speak/" . $value . ".png",
                'a_content' => str_replace('-', ' ', $value)
            ]

        ]);
    }





    ////////////////////////////////////////   Lesson - 35  /////// //////////////////////////

    // Unit -2 Listen and Repeat <Reading_carousel> sub_games

    // Sub -1 ( Reading -1 )


    $contents = [
        'Cinema','Library','Market','Playground','Toy Store','Zoo',
        ];

        $audio = $AudioDomain."Grade_2/Lesson_35/Listen_and_Repeat/Reading_1/";
        $img = $ImageDomain."Grade_2/Lesson_35/Listen_and_Repeat/Reading_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 425, 'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }


    // Sub -2 ( Reading -2 )

    $contents = [
        'Cinema','Library','Market','Playground','Toy Shop','Zoo',
        ];

        $audio = $AudioDomain."Grade_2/Lesson_35/Listen_and_Repeat/Reading_2/";
        $img = $ImageDomain."Grade_2/Lesson_35/Listen_and_Repeat/Reading_2/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 426, 'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }




    // Lesson -35 Unit - 3 Listen and Write <rearrange_with_audio>

        $Questions = [
            ['O', 'O', 'Z'],
            ['T', 'K', 'E', 'M', 'R', 'A'],
            ['O', 'T', 'S', 'H', 'P', 'O', 'Y'],
            ['B','Y','I','A','R','R','L'],
            ['N','M','E','I','C','A'],

            ['S','U','B'],
            ['R','A','I','N','T'],
            ['A','C','R'],
            ['I','C','L','E','C','B','Y'],
            ['A','B','T','O'],
        ];

        $answers = [
            'ZOO', 'MARKET', 'TOYSHOP','LIBRARY','CINEMA', 'BUS', 'TRAIN', 'CAR' , 'BICYCLE','BOAT'
        ];

        for ($i = 0; $i < count($Questions); $i++) {

            foreach ($Questions[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 427,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }


            $img = $ImageDomain . "Grade_2/Lesson_35/Listen_and_Write/";
            $audio = $AudioDomain . "Grade_2/Lesson_35/Listen_and_Write/";

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 427,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                    'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }




    // Lesson -35 Unit-4 Matching <Matching_column>


        $contents = [
          'Bicycle','Boat','Market','Trishaw','Train'
        ];

        $ans = [
            'Trishaw','Train','Bicycle','Boat','Market'
        ];

        $audio = $AudioDomain."Grade_2/Lesson_35/Matching/";
        $img = $ImageDomain."Grade_2/Lesson_35/Matching/";


        foreach ($contents as $key => $val) {
               DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 428,
                        'round' => 1,
                        'q_content' => $val,
                        'q_image' => $val,
                        'q_audio' => $audio.$val.".mp3",
                    ]
                ]);
        }


        foreach ($ans as $key => $val) {
               DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 428,
                        'round' => 1,
                        'q_content' => strtolower($val),
                        'q_image' => $img.$val.".png",
                        'q_audio' => $audio.$val.".mp3",
                    ]
                ]);
        }


    // Lesson -35 Unit -5  Speak <speaking_and_recording>


       $contents = [
            "Bus", "Car", "BusQ",
        ];

        $Question_contents = [
            "Hi, I am Jane. I like books. \n I go to the library on Friday. \n I go there by bus.",
            "Hi, I am ___. I like books. \n I go to the ___ on ___ . \n I go there by ___.",
            "Your turn; Hi, I am ___. I like books. \n I go to the ___ on ___ . \n I go there by ___.",

        ];


        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 429,
                    'round' => $key + 1,
                    'round_instruction' => "Look at this picture and speak.",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $AudioDomain."/Grade_2/Lesson_35/Speak/".$contents[$key].".mp3",
                    'q_image' => $ImageDomain . "Grade_2/Lesson_35/Speak/" . $value . ".png",
                    // 'a_content' => str_replace('-', ' ', $value)
                ]

            ]);
        }



    ////////////////////// Lesson -36 /////////////////////////////


    // Lesson -36 Unit -2 Listen and Repeat <Reading_carousel> sub_games

    // Sub -1 ( Reading -1 )

    $contents = [
        'Cinema','Library','Market','Restaurant','Zoo',
        ];

        $audio = $AudioDomain."Grade_2/Lesson_36/Listen_and_Repeat/Reading_1/";
        $img = $ImageDomain."Grade_2/Lesson_36/Listen_and_Repeat/Reading_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 431, 'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }


    // Sub -2 ( Reading -2 )

    $contents = [
        'I-like-movie','I-like-reading','I-like-hamburgers','I-like-ride','I-like-toys','I-like-elephant',
        ];

    $imgs = [
        'Cinema','Library','Restaurant','Playground','Toyshop','Zoo'
    ];

        $audio = $AudioDomain."Grade_2/Lesson_36/Listen_and_Repeat/Reading_2/";
        $img = $ImageDomain."Grade_2/Lesson_36/Listen_and_Repeat/Reading_2/";

        foreach ($contents as $k => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 432, 'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$imgs[$k]).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }



    // Unit -3 Listen and Write < listening_choosing_answer >

      $audio_q = [
        'cinema-toyshop','market-bicycle','restaurant-car','toyshop-bus','zoo-playground'
      ];

      $given_ques = [
            ['Zoo/Playground','Cinema/Toy shop','Market/Bicycle'],
            ['Zoo/Playground','Cinema/Toy shop','Market/Bicycle'],
            ['Restaurant/Car','Cinema/Toy shop','Toy shop/Bus'],
            ['Restaurant/Car','Cinema/Toy shop','Toy shop/Bus'],
            ['Zoo/Playground','Cinema/Toy shop','Market/Bicycle'],
      ];

    $ans = [
        'Cinema/Toy shop',
        'Market/Bicycle',
        'Restaurant/Car',
        'Toy shop/Bus',
        'Zoo/Playground'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_36/Listen_and_write/";
    $img = $ImageDomain."Grade_2/Lesson_36/Listen_and_write/";

    foreach ($audio_q as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 433,
                'round' => $key + 1,
                'q_audio' => $audio.$val.".mp3",
                'q_content' => $given_ques[$key][0],
                // 'q_conver'  =>  "Where is the $val ?". $second_q_contents[$key] ,
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 433,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 433,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);


    }


     // Lesson -36 Unit -4 Speak  <speaking_and_recording>

        $contentImg = ['restaurant','library','cinema',];


        $questionContent = [
            "Today is Friday! I like friend noodles. So,let's go to the restaurant.Let's go to the restaurant by car.",
            "Today is ___! I like ___.So,let's go ____.Let's go to the ___ by ___.",
            "Today is ___! I like movie.So,let's go to the ____.Let's go to the ___ by ___.",

        ];

        $questionAudio = [
            "today_is_friday_restaurant.mp3",
            "today_is_Sunday_library.mp3",
            "today_is_Saturday_cinema.mp3",
        ];

        $img = $ImageDomain . "Grade_2/Lesson_36/Speak/";
        $audio = $AudioDomain . "Grade_2/Lesson_36/Speak/";

        foreach ($questionContent as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 434,
                    'round' => $key + 1,
                    'q_content' => $value,
                    'q_image' => $img . str_replace(' ', '-', $contentImg[$key]) . ".png",
                    'a_content' => null,
                    'q_audio' => $audio.$questionAudio[$key],
                ]

            ]);
        }



        //// Lesson 36 Unit 6 (Reading) < reading_passage >
        $images = $ImageDomain . "Grade_2/Lesson_36/Reading/";
        $audios = $AudioDomain . "Grade_2/Lesson_36/Reading/";

        $L32U5_para = "Hi, I am Jack. There are four members in my family. I am 8 years old and my sister is 6. My parents take us to the toy shop once a week. This is Saturday. We’re going to buy some toys today. My father says, “Let’s go the toy shop by car.” My mother replies, “I don’t like car. Let’s go there by bus.” My sister says, “I want to go to the toy shop by car.” I reply, “Ok, let’s go to the shop by car.” Finally, my mother agrees.";

        $L32U5_given_q = [
            ["Jack’s mother doesn’t like car.", "Yes"],
            ["They go to the toy shop by car.", "Yes"],
            ["Today is Sunday.", 'No'],
            ["Jack’s sister is 8.", "No"],
            ["There are four members in Jack’s family.", 'Yes'],
        ];

        $given_audio = [
            "jack-mon-doesnt-like-car.mp3",
            "They-go-to-toyshop-by-car.mp3",
            "Today-is-sunday.mp3",
            "jack-sis-8.mp3",
            "four-members-family.mp3"
        ];
        $paraName = "I-am-Jack-There-are-four-members-in-my-family.mp3";

        $given_answer = ['Yes', 'No'];



        for ($i = 0; $i < count($L32U5_given_q); $i++) {


            foreach ($given_answer as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 435,
                        'q_audio' => $audios . str_replace(' ','-',strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $L32U5_given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 435,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $L32U5_given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 435,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $L32U5_para,
                    // 'q_image' => $images . "character.png", //char
                    'background' => $images . "bg.png"
                ]
            ]);
        }



    //////////////////////////////// Lesson -37  ////////////////////////////////

        // Lesson 37 unit-2 listen and learn <reading_carousel>
        $contents = range(1,10);

        $audio = $AudioDomain."Grade_2/Lesson_37/Listen_and_Learn/Reading-1/";
        $img = $ImageDomain."Grade_2/Lesson_37/Listen_and_Learn/Reading-1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 437,
                    'a_content' => $val." bottle",
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val."-green-bottles").".mp3"
                ],
            ]);
        }



    //  Unit -4 Speak <speaking_and_recording>



        $contents = [
           "10-bottles", "8-bottles", "1-bottle", "3-bottles", "4-bottles",
        ];

        $Question_contents = "Look at the picture and speak.";

        $audio = $AudioDomain."Grade_2/Lesson_37/Speak/";
        $img = $ImageDomain."Grade_2/Lesson_37/Speak/";

        foreach ($contents as $key => $value) {

        $data = [
                    'game_id' => 439,
                    'round' => $key + 1,
                    'round_instruction' => $audio."Look-at-the-picture-and-speak.mp3",
                    'q_content' => $Question_contents,
                    'q_audio' => $audio.$value.".mp3",
                    'q_image' => $img.$value . ".png",
                ];
        if($key == 0) {
            $data['q_content'] = $data['q_content']."\n Ten green bottles standing on the wall.";
        }
        DB::table('ans_n_ques')->insert($data);
    }



    ///////////////////////////////// Lesson - 38 /////////////////////////////////////

    // Lesson - 38  Unit - 2 Reading <reading_carousel>

    // sub -1
    $contents = range(1,10);

    $audio = $AudioDomain."Grade_2/Lesson_38/Reading-1/";
    $img = $ImageDomain."Grade_2/Lesson_38/Reading-1/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 441, 'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
            ],
        ]);
    }


    // sub -2

    $contents = [
        'eight watermelons','five cars','four bananas','nine cats','two balls',
        'one apple','seven oranges','six bottles' ,'ten dogs', 'three cups'
     ];

     $audio = $AudioDomain."Grade_2/Lesson_38/Reading-2/";
     $img = $ImageDomain."Grade_2/Lesson_38/Reading-2/";

     foreach ($contents as $val) {
         DB::table('ans_n_ques')->insert([
             [
                'game_id' => 442,
                'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
             ],
         ]);
     }





    //  Unit -3 Tracing < sentence_tracing >

    $words = [
        'Six','Five','Ten','Two','One',
    ];

    $letters = [
        ['S','i','x'],
        ['F','i','v','e'],
        ['T','e','n'],
        ['T','w','o'],
        ['O','n','e'],
    ];


    $audio = $AudioDomain."Grade_2/Lesson_38/Tracing/";
    $img = $ImageDomain."Grade_2/Lesson_38/Tracing/";


    foreach ($words as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 443,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.$val.".mp3",
                'a_content' => $val

            ]
        ]);


        foreach ($letters[$key] as $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 443,
                    'round' => $key + 1,
                    'q_content' => $img.$value.".png",

                ]
            ]);
        }

    }




    // Unit -4  Arranging Letters <rearrange_with_audio>

        $Questions = [
            ['O', 'F', 'U', 'R'],
            ['F', 'V', 'I', 'E'],
            ['H', 'R', 'T', 'E', 'E',],
            ['N', 'V', 'S', 'E', 'E'],
            ['W','T','O'],
            ['E','N','O'],
            ['E','N','T'],
            ['E','N','N','I'],
            ['R','O','F','U'],
            ['S','X','I'],
        ];

        $answers = [
            'FOUR', 'FIVE', 'THREE','SEVEN','TWO','ONE','TEN','NINE','FOUR','SIX'
        ];

        for ($i = 0; $i < count($Questions); $i++) {

            foreach ($Questions[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 444,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }


            $img = $ImageDomain . "Grade_2/Lesson_38/Arranging_Letters/";
            $audio = $AudioDomain . "Grade_2/Lesson_38/Arranging_Letters/";

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 444,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                    'a_audio' => $audio . strtolower($answers[$i]) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }



    // Lesson -38 unit 5 Matching <Matching_column>

     $contents = [
         ['Five', 'Ten', 'One', 'Four', 'Nine'],
         ['Six', 'Three', 'Two', 'Seven', 'Eight'],
        ];

        $randomValues = [
            ['One', 'Nine', 'Four', 'Ten', 'Five'],
            ['Eight', 'Seven', 'Six', 'Three', 'Two'],
        ];

        $audio = $AudioDomain . "Grade_2/Lesson_38/Matching/";
        $img = $ImageDomain . "Grade_2/Lesson_38/Matching/";

        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 445,
                        'round' => $i + 1,
                        'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 445,
                        'round' => $i + 1,
                        'q_content' => strtolower($q),
                        'q_image' => $img . ucfirst(strtolower($q)) . ".png",
                        'q_audio' => $audio .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }



    // Lesson - 38 Unit -6 Speak

       $contents = [
            "two cats", "ten dogs", "five apples", "seven balls", "five bottles"
        ];

        $Question_contents = [
            'James has two cats.',
            'I have ___.',
            'Rosy has ___.',
            'Chris has ___.',
            'I have ___.'


        ];

        $audio = $AudioDomain . "Grade_2/Lesson_38/Speak/";
        $img = $ImageDomain . "Grade_2/Lesson_38/Speak/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 446,
                    'round' => $key + 1,
                    'round_instruction' =>  $audio."Look-at-the-picture-and-speak.mp3",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $audio.str_replace(' ', '-', $value).".mp3",
                    'q_image' => $img.str_replace(' ', '-', $value). ".png",
                ]

            ]);
        }







    ///////////////////////////////// Lesson - 39 /////////////////////////////////////

    // Lesson - 39  Unit - 2 Reading <reading_carousel>

    // sub -1
    $contents = range(1,12);

    $audio = $AudioDomain."Grade_2/Lesson_39/Listen_and_Repeat/Reading-1/";
    $img = $ImageDomain."Grade_2/Lesson_39/Listen_and_Repeat/Reading-1/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 448, 'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',$val)."hr.mp3"
            ],
        ]);
    }


    // sub -2

    $contents = [
        'time-to-go-home','time-to-have-dinner','time-to-get-up','time-to-have-breakfast',
        'time-to-go-to-school','time-to-go-bed','time-to-have-lunch',
     ];

     $audio = $AudioDomain."Grade_2/Lesson_39/Listen_and_Repeat/Reading-2/";
     $img = $ImageDomain."Grade_2/Lesson_39/Listen_and_Repeat/Reading-2/";

     foreach ($contents as $val) {
         DB::table('ans_n_ques')->insert([
             [
                'game_id' => 449,
                'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
             ],
         ]);
    }





    //Lesson -39 Unit - 3 Look and write <listening_choosing_answer>


      $audio_q = [
        "1-O-clock",
        "3-O-clock",
        "5-O-clock",
        "7-O-clock",
        "9-O-clock",
        "12-O-clock",
        "2-O-clock",
        "4-O-clock",
        "6-O-clock",
        "8-O-clock",
      ];

      $given_ques = [
            ["1 O'clock","5 O'clock","9 O'clock"],
            ["4 O'clock","3 O'clock","9 O'clock"],
            ["12 O'clock","3 O'clock","5 O'clock"],
            ["11 O'clock","7 O'clock","6 O'clock"],
            ["9 O'clock","7 O'clock","10 O'clock"],
            ["9 O'clock","7 O'clock","12 O'clock"],
            ["2 O'clock","7 O'clock","12 O'clock"],
            ["2 O'clock","4 O'clock","12 O'clock"],
            ["2 O'clock","4 O'clock","6 O'clock"],
            ["2 O'clock","8 O'clock","6 O'clock"],
      ];

    $ans = [
        "1 O'clock","3 O'clock","5 O'clock","7 O'clock","9 O'clock",
        "12 O'clock","2 O'clock","4 O'clock","6 O'clock","8 O'clock",
    ];

    $aud = [1,3,5,7,9,12,2,4,6,8];

    $audio = $AudioDomain."Grade_2/Lesson_39/Look_and_write/";
    $img = $ImageDomain."Grade_2/Lesson_39/Look_and_write/";

        foreach ($audio_q as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 450,
                'round' => $key + 1,
                'q_audio' => $audio.$aud[$key]."hr.mp3",
                'q_content' => $given_ques[$key][0],
                'q_image' => $img.$val.".png",
                // 'q_conver'  =>  "Where is the $val ?". $second_q_contents[$key] ,
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 450,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 450,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);


    }


    // Unit -4 ================== <reading_conversation>
    // Sub -1

    $chars = [
        ['boy','girl'],
        ['boy'],
        ['teacher','boy'],
        ['teacher']
    ];

    $convers = [
        ['What time is it?',"It is 3 O' clock"],
        ["Ok, It is time to go home."],
        ['What time is it?',"It is 3 O' clock"],
        ["Ok, It is time to have lunch."]
    ];
    $convers_audio = [
        ['What time is it',"It is 3 O' clock"],
        ["Ok, It is time to go home"],
        ['What time is it',"It is 12 O' clock"],
        ["Ok, It is time to have lunch"]
    ];

    $audio = $AudioDomain."Grade_2/Lesson_39/Speak/Speak-1/";
    $img = $ImageDomain."Grade_2/Lesson_39/Speak/Speak-1/";


    foreach ($chars as $key => $char) {

       foreach ($char as $k => $v) {

            DB::table('ans_n_ques')->insert([
                [
                'game_id' => 451,
                'round' => $key + 1,
                'a_image' => $img.$v.".png",
                'a_audio' => str_replace(' ','-',$audio.$convers_audio[$key][$k]).".mp3",
                'a_conver' => $convers[$key][$k],
                "background" => $img."bg".$key + 1 .".png"
                ]
            ]);

       }
    }



    // Unit - 4 ==============


    $contents = [
            "7 O'clock", "6 O'clock","5 O'clock", "8 O'clock", "10 O'clock",
        ];

    $data = [
        7,6,5,8,10
    ];

    $questions = [
        "Look at the clock and speak the time, \n It is time to have breakfast",
        "Look at the clock and speak the time",
        "Look at the clock and speak the time",
        "Look at the clock and speak the time",
        "Look at the clock and speak the time",
    ];

    $round_ins = "Look at the clock and speak the time";


    $audio = $AudioDomain."Grade_2/Lesson_39/Speak/Speak-2/";
    $img = $ImageDomain."Grade_2/Lesson_39/Speak/Speak-2/";



        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 452,
                    'round' => $key + 1,
                    'round_instruction' => $audio."Look-at-the-clock-and-speak-the-time.mp3",
                    'q_content' =>  $questions[$key],
                    'q_image' => $img . $data[$key] . ".png",
                    'a_audio' => $audio.$data[$key].".mp3",
                ]

            ]);
        }

/////////////////////////////////////// Lesson 40 /////////////////////////////////////////

// Unit -2 Listen and Repeat

 $contents = [3,5,6,7,8,10];

    $audio = $AudioDomain."Grade_2/Lesson_40/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_2/Lesson_40/Listen_and_Repeat/";

    foreach ($contents as $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 454, 'a_content' => $val,
                'a_image' => $img.str_replace(' ','-',$val).".png",
                'a_audio' => $audio.str_replace(' ','-',$val)."hr.mp3"
            ],
        ]);
    }




    // Unit -3 Listen and Practice <mcq_grammar>

    $imgs = [
        7,5,12,10,6
    ];


    $ques = [
      [9,3,7],
      [8,5,6],
      [12,11,4],
      [10,6,3],
      [2,8,6]
    ];


    $audio = $AudioDomain."Grade_2/Lesson_40/Listen_and_Practice/";
    $img = $ImageDomain."Grade_2/Lesson_40/Listen_and_Practice/";



    $ans = [
        7,5,12,10,6
    ];

    foreach ($imgs as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 455,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.$val.".mp3",
                'q_content' => $ques[$key][0],
                'q_conver'  =>  "What time is it? \n It's ___O'clock." ,
                'a_content' => $ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 455,
                'round'  => $key +  1,
                'q_content' => $ques[$key][1],
                'a_content' => $ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 455,
                'round'  => $key +  1,
                'q_content' => $ques[$key][2],
                'a_content' => $ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);


    }




    // lesson 40 Unit - 4 Matching

     $contents = [
         ["4 O'clock", "3 O'clock", "2 O'clock","1 O'clock","11 O'clock"],
         ["10 O'clock", "5 O'clock", "7 O'clock","9 O'clock","6 O'clock"],
        ];


        $randomValues = [
           [2,11,4,3,1],
           [5,6,10,7,9],
        ];

        $randomQ_contents = [

        ];

        $audio = $AudioDomain . "Grade_2/Lesson_40/Matching/";
        $img = $ImageDomain . "Grade_2/Lesson_40/Matching/";

        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $k => $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 456,
                        'round' => $i + 1,
                        'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . strtolower(str_replace(' ','-',$q)) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 456,
                        'round' => $i + 1,
                        'q_content' => strtolower($q)." O'clock" ,
                        'q_image' => $img . strtolower($q) . "hr.png",
                        'q_audio' => $audio . $q."-o'clock" . ".mp3",
                    ]
                ]);
            }
        }




        // Lesson 40 Unit - 5 Reading Passage < reading_passage >

        $images = $ImageDomain . "Grade_2/Lesson_40/Reading_passage/";
        $audios = $AudioDomain . "Grade_2/Lesson_40/Reading_passage/";

        $para = "Chris is a student. He goes to school Monday to Friday. On Saturday, he gets up at 8 o’clock. He eats breakfast at 9 o’clock. He eats fried rice. Next, he plays with his dog. He eats lunch at 1 o’clock. He eats rice and chicken. After lunch, he sleeps for 30 minutes. He eats dinner at 6 o’clock. He eats friend noodles and drinks apple juice. Finally, he goes to bed at 10 o’clock.  .";

        $given_q = [
            ["On Saturday, he gets up at ___.", "8 O'clock"],
            ["After lunch, He sleeps for ___.", "30 minutes"],
            ["He goes to bed at ___.", "10 O'clock"],
            ["He eats ___ for breakfast", "fried rice"],
            ["Chris goes to school Monday to ___.", 'Friday'],
        ];

        $given_audio = [
            "On-Saturday-he-gets-up.mp3",
            "After-lunch-he-sleep-for.mp3",
            "He-goes-to-bad.mp3",
            "He-eat-breakfast.mp3",
            "Chris-goes-to-school.mp3"
        ];

        $paraName = "Chris-is-student.mp3";

        $given_answer = [
            ["6 O'clock", "8 O'clock"],
            ['40 minutes', '30 minutes'],
            ["10 O'clock", "9 O'clock"],
            ['fried noodles', 'fried rice'],
            ['Friday', 'Sunday']
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 457,
                        'q_audio' => $audios . str_replace(' ','-',strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'game_id' => 457,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 457,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $para,
                    // 'q_image' => $images . "character.png", //char
                    'background' => $images . "bg.png"
                ]
            ]);
        }






















    }
}
