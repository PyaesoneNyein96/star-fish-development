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
                    'game_id' => 354, 'a_content' => $val,
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
                        'game_id' => 355,
                        'round' => 1,
                        'q_content' => $val,
                        'q_image' => $val.".png",
                        'q_audio' => $audio.$val.".mp3",
                    ]
                ]);
        }


        foreach ($ans as $key => $val) {
               DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 355,
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
                'game_id' => 356,
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
                'game_id' => 356,
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
                    'game_id' => 357,
                    'round' => $key + 1,
                    'q_content' => $value,
                    'q_image' => $img . str_replace(' ', '-', $contentImg[$key]) . ".png",
                    'a_content' => null,
                    // 'q_audio' => $audio.$questionAudio[$key],
                    'q_audio' => null
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
                    'game_id' => 361,
                    'round' => $key + 1,
                    'q_content' => $value,
                    'q_image' => $img . str_replace(' ', '-', $contentImg[$key]) . ".png",
                    'a_content' => null,
                    // 'q_audio' => $audio.$questionAudio[$key],
                    'q_audio' => null
                ]

            ]);
        }




    // ========================   Lesson - 23 ===================================
    // Unit - 1 <reading_carousel>

    $contents = [
        'bird','cat','cow','dog','giraffe','goat','hippopotamus','monkey','rabbit','snake',
    ];

    $audio = $AudioDomain."Grade_2/Lesson_23/Listen_and_Repeat/";
    $img = $ImageDomain."Grade_2/Lesson_23/Listen_and_Repeat/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 363,
                    'a_content' => $val,
                    'a_image' => $img.ucfirst($val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }



    // Unit - 2 <sentence_tracing>

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
                'game_id' => 364,
                'round' => $key + 1,
                'q_image' => $img.$val.".png",
                'q_audio' => $audio.$val.".mp3",
                'a_content' => $val

            ]
        ]);


        foreach ($letters[$key] as $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 364,
                    'round' => $key + 1,
                    'q_content' => $img.$value.".png",

                ]
            ]);
        }

    }



    // Unit - 3 Listen and Choose <mcq_grammar_two>

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
                'game_id' => 365,
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
                    'game_id' => 365,
                    'round'  => $key +  1,
                    'q_content' => $ques[$key][1],
                    'a_content' => $ques[$key][1] == $val ? true : false
                ]
            ]);
    }


    // Lesson 23 unit 4 Speaking <Speaking_recording>


       $contentImg = "Jane";


        $questionContent = [
                "HI,I am ___. I can ___ ___. \n I can ___ ___ and ___ ___. \n I can't ___ ___. I like ___. \n My favorite ___ is ___.It is ___."
        ];

        $questionAudio = ["Hi i am Jane.I can sing"];

        $img = $ImageDomain . "Grade_2/Lesson_23/Speaking/";
        $audio = $AudioDomain . "Grade_2/Lesson_23/Speaking/";

        foreach ($questionContent as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 366,
                    'round' => $key + 1,
                    'q_content' => $value,
                    'q_image' => $img . str_replace(' ', '-', $contentImg[$key]) . ".png",
                    'a_content' => null,
                    // 'q_audio' => $audio.str_replace(' ','-',$questionAudio[$key])."mp3",
                    'q_audio' => null
                ]

            ]);
        }










    }
}
