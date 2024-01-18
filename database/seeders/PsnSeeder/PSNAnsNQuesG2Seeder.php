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


        foreach ($contents as $key => $val) {
               DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 354,
                        'round' => 1,
                        // 'q_content' => $val,
                        'q_image' => $val.".png",
                        'q_audio' => $audio.$val.".mp3",
                    ]
                ]);
        }


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
                'q_content' => "true",
                'q_conver' => "I can play " .str_replace('_',' ',$val).".Can you play it?",
                'a_content' =>  true == $ans[$key] ? true :  false ,
                ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 355,
                'round' => $key + 1,
                'q_content' => "false",
                'a_content' => false == $ans[$key] ? true :  false
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
            ['O','Q','I','I','E','S','U','N'],
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
                    'q_audio' => $audio . strtolower($answers[$i]) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }


        //// Lesson 24 Unit 6 (Speaking) <speaking_and_recording>

        $contents = [
            "Quail", "Rabbit", "Rocket", "Rocket",
            "Quail", "Raincoat", "Rabbit", "Food",
        ];

        $Question_contents = [
            'What is it?',
            'Do you like rabbit',
            'Can you draw a rocket? \n Yes, I can.',
            'Can you draw a rocket?',

            'Can you draw ___? \n Yes,___ ___. No ___, ___.',
            'Do you like ___? \n Yes,______,No ___ ___.',
            'What is it? \n It ___ ___ ___.',
            'What is your favorite food?',
        ];


        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 371, 'round' => $key + 1,
                    'round_instruction' => "Look at this picture and speak.",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $AudioDomain."/Grade_2/Lesson_24/Speaking/".$contents[$key].".mp3",
                    'q_image' => $ImageDomain . "Grade_2/Lesson_24/Speaking/" . $value . ".png",
                    'a_content' => str_replace('-', ' ', $value)
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
            ["What does she eat on Sunday?", "three"],
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
        'bird','Bush','Chair','Egg','Farm','Nest','Quail','Rabbit','Table'
    ];

    $audio = $AudioDomain."Grade_2/Lesson_25/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_2/Lesson_25/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 374,
                    'a_content' => $val,
                    'a_image' => $img.ucfirst($val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }


    // Unit - 3 Choose <mcq_grammar_two>

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
        'under','beside','under','on','on','in','on'
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
        'cat_under_table','dog_under_chair','quail_on_tree','quail_on_bed','rabbit_in_bush'
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
        ['C','T','R','C','K'],
        ['A','T','O','O','M','A'],
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
                'q_audio' => $audio . strtolower($answers[$i]) . ".mp3",
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
       'Dear','Duck','Elephant','Giraffe','Tiger','Wall'
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
        'deer','duck','elephant','giraffe','monkey','tiger',''
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
        'elephant_in-front_of_house',
        'giraffe_beside_the_tree',
        'monkey_on_the_wall',
        'rabbit_in_bush',
        'tiger_behind_the_tree'
      ];

      $given_ques = [
            ['in front of','Beside','on'],
            ['Beside','in','on'],
            ['Behind','in','on'],
            ['Behind','Beside','on'],
            ['Behind','Beside','in front of'],
      ];

    $ans = [
        'in front of','Beside','on','in','behind'
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

        // Sub - 1 <Carousel>

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
        'My name is Chris. I like sport shirts and shorts. \n My favorite color are brown and blue. \n Today, I am wearing a blue sport shirt and black sandals. \n When I go out, I wear shorts.',
        'My name is ___. I like ___ and ___., \n My favorite color are ___ and ___. \n Today I am wearing a ___ and white sandals. \n When I go out, I wear ___.',

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
                    'q_audio' => $audio . strtolower($q) . ".mp3",
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
        ['E', 'C', 'L', 'N','C','Y','E','I'],
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
                'q_audio' => $audio .ucfirst(strtolower($answers[$i])) . ".mp3",
                'a_content' => $answers[$i],
            ]
        ]);
    }


    //// Lesson 30 Unit 5 (Speak) <speaking_and_recording>

        $contents = [
            "Vest", "Village", "Violin", "Van", "Vase", "Unicorn", "Uniform", "Umbrella",
        ];



        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 402,
                    'round' => $key + 1,
                    'round_instruction' => "Look at this picture and speak.",
                    'q_content' => "Where is the ".$value."?",
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
        'cat_under_table','dog_under_chair','quail_on_tree','quail_on_bed','rabbit_in_bush'
      ];

      $given_ques = [
            ['Pink','Green','Gray'],
            ['Cap','Shirt','Gloves'],
            ['Orange','Gray','Purple'],
            ['Orange','Gray','Purple'],
            ['Cap','Shirt','Gloves'],
            ['Cap','Raincoat','Blouse'],
      ];

    $ans = [
        'Green','Shirt','Purple','Orange','Cap','Raincoat'
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
            ['Purple', 'Black', 'Pink', 'Yellow', 'Orange'],
            ['Socks', 'Raincoat', 'Gloves', 'Trousers', 'Shoes']
        ];

        $randomValues = [
            ['Pink', 'Yellow', 'Orange', 'Purple', 'Black'],
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
                        'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 407,
                        'round' => $i + 1,
                        'q_content' => strtolower($q),
                        'q_image' => $img . strtolower($q) . ".png",
                        'q_audio' => $audio . $q . ".mp3",
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


    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 408,
                'round' => $key + 1,
                'round_instruction' => "Look at this picture and speak.",
                'q_content' => $Question_contents[$key],
                'q_audio' => $AudioDomain."/Grade_2/Lesson_31/Speak/".$contents[$key].".mp3",
                'q_image' => $ImageDomain . "Grade_2/Lesson_31/Speak/" . $value . ".png",
                'a_content' => str_replace('-', ' ', $value)
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
                'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
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
            // ['World', 'Watch', 'Water', 'Whale', 'Wall'],
            ['Watermelon', 'Window', 'X-ray', 'Xylophone', 'Wolf'],
            // ['World', 'Window', 'Whale', 'Watermelon', 'Watch'],
        ];

        $randomValues = [
            // ['Water', 'Wall', 'world', 'Watch', 'Whale'],
            ['X-ray', 'Wolf', 'Xylophone', 'Window', 'Watermelon'],
            // ['Whale', 'Watch', 'Watermelon', 'World', 'Window']

        ];

        $audio = $AudioDomain . "Grade_2/Lesson_32/Matching/";
        $img = $ImageDomain . "Grade_2/Lesson_32/Matching/";

        for ($i = 0; $i < count($contents); $i++) {

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
                        'q_audio' => $audio . $q . ".mp3",
                    ]
                ]);
            }
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
                'q_audio' => $audio .ucfirst(strtolower($answers[$i])) . ".mp3",
                'a_content' => $answers[$i],
            ]
        ]);
    }



        //// Lesson 32 Unit 6 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_2/Lesson_32/Reading/";
        $audios = $AudioDomain . "Grade_2/Lesson_32/Reading/";
        // $L32U5_content = ['umbrella','violin','vase'];

        $para = "My name is Chris.I have a rabbit. Her name is Lovely. She is white. She like strawberries and mangoes. She eats ten strawberries every day. She eat three mangoes on Sunday. She can hop and jump. She can't play badminton.";

        $given_q = [
            ["Does she like mangoes? ----, She does.", "Yes"],
            ["What does she eat on Sunday?", "three"],
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
                    'q_content' => null,
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
        'She is wearing a yellow raincoat and red shirt. She is wearing a brown trousers and red boots.',
        'This is Ni Ni. She is wearing a pink scarf a white blouse. She is wearing a blue skirt and green boots.',
        'Hello, I am San San. I have three friends. They are Ni Ni, Toe Toe and Moe Moe.'
    ];

    $images = $ImageDomain . "Grade_2/Lesson_32/Listen_and_Repeat/";
    $audios = $AudioDomain . "Grade_2/Lesson_32/Listen_and_Repeat/";

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



    // Lesson -33 Unit -3 Writing exercise <listening_choosing_answer>

    // Blank ---------------------------------------
    // Blank ---------------------------------------
    // Blank ---------------------------------------
    // Blank ---------------------------------------
    // Blank ---------------------------------------







    // Lesson -33 Unit-4


     $contents = [
        "hat", "t-shirt", "short", "shoes", "sweater", "shirt",
     ];

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 418,
                'round' => $key + 1,
                'round_instruction' => "Look at this picture and speak.",
                // 'q_content' => $Question_contents[$key],
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
                'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
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
                'q_audio' => $audio.$val.".mp3",
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
            ['Yolk', 'Yo-yo', 'Zip', 'Zero', 'Zebra'],
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
                        'q_audio' => $audio . $q . ".mp3",
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
                    'q_audio' => $audio . strtolower($answers[$i]) . ".mp3",
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
                // 'q_content' => $Question_contents[$key],
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
            ['O', 'Z', 'Z'],
            ['T', 'K', 'E', 'M', 'R', 'A'],
            ['O', 'T', 'S', 'H', 'P', 'O', 'Y'],
            ['B','Y','I','A','R','R','L'],
            ['N','M','E','I','C','A'],
        ];

        $answers = [
            'ZOO', 'MARKET', 'TOYSHOP','LIBRARY','CINEMA',
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
                    'q_audio' => $audio . strtolower($answers[$i]) . ".mp3",
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
                        // 'q_content' => $val,
                        'q_image' => $val.".png",
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
            'Hi, I am Jane. I like books. \n I go to the library on Friday. \n I go there by bus.',
            'Hi, I am ___. I like books. \n I go to the ___ on ___ . \n I go there by ___.',
            'Your turn; Hi, I am ___. I like books. \n I go to the ___ on ___ . \n I go there by ___.',

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
        'Cinema','Library','Restaurant','Playground','Toy Shop','Zoo',
        ];

        $audio = $AudioDomain."Grade_2/Lesson_36/Listen_and_Repeat/Reading_2/";
        $img = $ImageDomain."Grade_2/Lesson_36/Listen_and_Repeat/Reading_2/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 432, 'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }



    // Unit -3 Listen and Write < listening_choosing_answer >




      $audio_q = [
        'cat_under_table','dog_under_chair','quail_on_tree','quail_on_bed','rabbit_in_bush'
      ];

      $given_ques = [
            ['Zoo/Playground','Cinema/Toy shop','Market/Bicycle'],
            ['Restaurant/Car','Cinema/Toy shop','Toy shop/Bus'],
            ['Restaurant/Car','Cinema/Toy shop','Toy shop/Bus'],
            ['Zoo/Playground','Cinema/Toy shop','Market/Bicycle'],
            ['Zoo/Playground','Cinema/Toy shop','Market/Bicycle'],
      ];

    $ans = [
        'Zoo/Playground',
        'Cinema/Toy shop',
        'Toy shop/Bus',
        'Cinema/Toy shop',
        'Market/Bicycle'
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


















    }
}
