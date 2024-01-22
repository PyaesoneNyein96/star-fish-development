<?php

namespace Database\Seeders\PsnSeeder;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PSNAnsNQuesG3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    private function removeSpace($val){
        return str_replace(' ','-',$val);
    }


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


        $prefix = "SubBlock_";
        $AtoZ = range('A', 'Z');






        //////////////////////////////////////////// Lesson 21 ///////////////////////////////////////

        // Unit 1 // game_id -> 607




        // Unit 2 sub 1 Reading  <Reading_carouse>

        $contents = [
            'do exercise','feed the dog','throw the rubbish out','clean the apartment','fix the tv','feed the cat','sweep the floor',
            'wash the dishes', 'make the bed', 'wash the clothes','do my homework', 'read e-mails', 'paint the bedroom', 'brush the teeth',
            'clean the yard', 'wash the car'
        ];

        $audio = $AudioDomain."Grade_3/Lesson_21/Reading/";
        $img = $ImageDomain."Grade_3/Lesson_21/Reading/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 608,
                    'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }



        // Unit 2 sub 2 Write <look and write>


        $contents = [
            'exercise','throw','feed','do','wash','paint', 'wash', 'clean',
        ];

        $questions = [
                "_____.",
                "__ the rubbish out.",
                "___ dog.",
                "___ my homework.",
                "___ the clothes.",
                "___ the ____.",
                "____ the car.",
                "___ the yard."
        ];

        $ans = [
            'do exercise','throw','feed','do','wash','paint bedroom', 'wash', 'clean',
        ];


        $images = $ImageDomain . "Grade_2/Lesson_21/Write/";
        $audios = $AudioDomain . "Grade_2/Lesson_21/Write/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 609,
                    'round' => $key + 1,
                    'q_image' => $images.$contents[$key].".png",
                    'q_audio' => $audios.$contents[$key].".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }




    // Unit 3 Practice <look_and_write>


        $contents = [
            'throw','do','sweep','wash-clothes','make-bed','paint', 'brush', 'wash-car',
        ];

        $questions = [
                "what do you do in the evening?",
                "what do you do in the evening?",
                "what do you do in the afternoon?",
                "what do you do in the afternoon?",
                "what do you do in the morning?",
                "what do you do in the afternoon?",
                "what do you do in the morning?",
                "what do you do in the morning?",
        ];

        $ans = [
            "throw the rubbish out.",
            "do homework",
            "sweep the floor",
            "wash the clothes",
            "make the bed",
            "paint the bedroom",
            "brush my teeth",
            "wash the car",
        ];


        $images = $ImageDomain . "Grade_2/Lesson_21/Practice/";
        $audios = $AudioDomain . "Grade_2/Lesson_21/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 610,
                    'round' => $key + 1,
                    'q_image' => $images.$contents[$key].".png",
                    'q_audio' => $audios.$contents[$key].".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }


    // Unit 4 Listen <listening_and_choosing_pics_one>


    $images = $ImageDomain . "Grade_3/Lesson_21/Listen/";
    $audios = $AudioDomain . "Grade_3/Lesson_21/Listen/";

    DB::table('ans_n_ques')->insert([

        ["round" => 1, "game_id" => 611, "q_image" => $images . "feed.png", "q_audio" => null, "a_content" => 0],
        ["round" => 1, "game_id" => 611, "q_image" => $images . "sweep-lady.png", "q_audio" => null, "a_content" => 0],
        ["round" => 1, "game_id" => 611, "q_image" => $images . "throw.png", "q_audio" => null, "a_content" => 1],
        ["round" => 1, "game_id" => 611, "q_image" =>  null, "q_audio" => $audio . "throw" . ".mp3", "a_content" => null],

        ["round" => 2, "game_id" => 611, "q_image" => $images . "feed.png", "q_audio" => null, "a_content" => 0],
        ["round" => 2, "game_id" => 611, "q_image" => $images . "fix.png", "q_audio" => null, "a_content" => 0],
        ["round" => 2, "game_id" => 611, "q_image" => $images . "wash-clothes.png", "q_audio" => null, "a_content" => 1],
        ["round" => 2, "game_id" => 611, "q_image" =>  null, "q_audio" => $audio . "wash-clothes" . ".mp3", "a_content" => null],

        ["round" => 3, "game_id" => 611, "q_image" => $images . "check-email.png", "q_audio" => null, "a_content" => 0],
        ["round" => 3, "game_id" => 611, "q_image" => $images . "exercise.png", "q_audio" => null, "a_content" => 1],
        ["round" => 3, "game_id" => 611, "q_image" => $images . "paint.png", "q_audio" => null, "a_content" => 0],
        ["round" => 3, "game_id" => 611, "q_image" =>  null, "q_audio" => $audio . "exercise" . ".mp3", "a_content" => null],

        ["round" => 4, "game_id" => 611, "q_image" => $images . "sweep-boy.png", "q_audio" => null, "a_content" => 0],
        ["round" => 4, "game_id" => 611, "q_image" => $images . "sweep-lady.png", "q_audio" => null, "a_content" => 1],
        ["round" => 4, "game_id" => 611, "q_image" => $images . "clean-yard.png", "q_audio" => null, "a_content" => 0],
        ["round" => 4, "game_id" => 611, "q_image" =>  null, "q_audio" => $audio . "sweep-lady" . ".mp3", "a_content" => null],

        ["round" => 5, "game_id" => 611, "q_image" => $images . "brush.png", "q_audio" => null, "a_content" => 1],
        ["round" => 5, "game_id" => 611, "q_image" => $images . "clean-yard.png", "q_audio" => null, "a_content" => 0],
        ["round" => 5, "game_id" => 611, "q_image" => $images . "sweep-boy.png", "q_audio" => null, "a_content" => 0],
        ["round" => 5, "game_id" => 611, "q_image" =>  null, "q_audio" => $audio . "brush" . ".mp3", "a_content" => null],

    ]);


    // Unit 5 Speaking <speaking_and_recording>

    $contents = [
        "dog-feeding", "cat-feeding", "check-email", "wash-clothes", "brush-teeth", "make-bed", "wash-car", "clean-yard"
    ];

    $Question_contents = [
        "what do you do in the morning?",
        "what do you do in the evening?",
        "what do you do in the evening?",
        "what do you do in the afternoon?",
        "what do you do in the morning?",
        "what do you do in the morning?",
        "what do you do in the afternoon?",
        "what do you do in the afternoon?",
    ];

    $images = $ImageDomain . "Grade_3/Lesson_21/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_21/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 612,
                'round' => $key + 1,
                // 'round_instruction' => "Look at this picture and speak.",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.$contents[$key].".mp3",
                'q_image' => $images . $value . ".png",
                'a_content' => str_replace('-', ' ', $value)
            ]

        ]);
    }



    //////////////////////////////////////////// Lesson 22 ///////////////////////////////////////

    // Unit 1 // game_id -> 613

    // ....................



    // Unit 2 sub 1 Reading  <Reading_carouse>

        $contents = [
            'do physical exercise','clean the board','Raise your hand',
            'listen to songs','close your arms','listen to the teacher','draw pictures',
            'play with friends', 'water the plants', 'Help each other','work in groups',
            'clean the classroom', 'work alone', 'play games',
            'stay in library', 'work in pair'
        ];

        $audio = $AudioDomain."Grade_3/Lesson_22/Reading/";
        $img = $ImageDomain."Grade_3/Lesson_22/Reading/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 614,
                    'a_content' => $val,
                    'a_image' => $img.str_replace(' ','-',$val).".png",
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
                ],
            ]);
        }






    // Unit 2 sub 2 Write <look and write> -- without question


        $contents = [
            'listen to songs','help-each-other','water-the-plants','draw the pictures','work alone',
            'play with friends', 'stay in library', 'listen to the teacher',
        ];

        $ans = [
            'do exercise','throw','feed','do','wash','paint bedroom', 'wash', 'clean',
        ];


        $images = $ImageDomain . "Grade_2/Lesson_22/Write/";
        $audios = $AudioDomain . "Grade_2/Lesson_22/Write/";

        foreach ($contents as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 615,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($val).".png",
                    'q_audio' => $audio.$this->removeSpace($val).".mp3",
                    'a_content' => $ans[$key],
                ]
            ]);
        }


    // Unit 3 Practice <look_and_write>


        $contents = [
            'listen','exercises','water-plant','work-pair','draw-picture','stay-library', 'listen-teacher',
        ];

        $questions = [
                "what do you sometimes do in your class?",
                "what do you alway do at school?",
                "what do you usually do at school?",
                "what do you often do in your class?",
                "what do you sometimes do in your class?",
                "what do you alway do at school?",
                "what do you often do in your class?",
        ];

        $ans = [
            "Listen to songs.",
            "do physical exercise",
            "water the plants",
            "work in pair",
            "draw the pictures",
            "stay in library",
            "listen to the teacher",
        ];


        $images = $ImageDomain . "Grade_2/Lesson_21/Practice/";
        $audios = $AudioDomain . "Grade_2/Lesson_21/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 616,
                    'round' => $key + 1,
                    'q_image' => $images.$contents[$key].".png",
                    'q_audio' => $audios.$contents[$key].".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }





    // Unit 4 Listen <listening_and_choosing_pics_one>


    $images = $ImageDomain . "Grade_3/Lesson_22/Listen/";
    $audios = $AudioDomain . "Grade_3/Lesson_22/Listen/";

    $contents = [
        ['watering', 'listening','playing'],
        ['exercise', 'listen-teacher','help-each'],
        ['work-pair', 'draw','stay-library'],
        ['help-each', 'work-pair','play-game'],
        ['help-each', 'work-pair','playing'], // play
    ];


    $ans = [
        'playing',
        'exercise',
        'stay-library',
        'play-game',
        'work-pair'
    ];

    foreach ($ans as $key => $value) {

        foreach ($contents[$key] as $j => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 617,
                    'round' => $key + 1,
                    'q_image' => $images.$val.".png",
                    'a_content' => $val == $value ? true : false
                ]
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 617,
                'round' => $key + 1,
                'q_audio' => $audios.$value.".mp3"
            ]
        ]);


    }



















    // Unit 5 Speaking <speaking_and_recording>

    $contents = [
        "dog-feeding", "cat-feeding", "check-email", "wash-clothes", "brush-teeth", "make-bed", "wash-car", "clean-yard"
    ];

    $Question_contents = [
        "what do you do in the morning?",
        "what do you do in the evening?",
        "what do you do in the evening?",
        "what do you do in the afternoon?",
        "what do you do in the morning?",
        "what do you do in the morning?",
        "what do you do in the afternoon?",
        "what do you do in the afternoon?",
    ];

    $images = $ImageDomain . "Grade_3/Lesson_21/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_21/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 612,
                'round' => $key + 1,
                // 'round_instruction' => "Look at this picture and speak.",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.$contents[$key].".mp3",
                'q_image' => $images . $value . ".png",
                'a_content' => str_replace('-', ' ', $value)
            ]

        ]);
    }






































        ////////////////////////////////////////////////////
        ////    Grade 3  Lesson 26 unit 7 ( no round )

        // $questions_G3_L26_U7 = "What time do you get up in the morning? \n What time do you take the bath? \n What time do you eat breakfast? \n What time do you go to school? \n What time do you eat lunch? \n What time do you come back home? \n What time do you do homework? \n What time do you eat dinner? \n What time do you go to bed? \n";

        // // $sampleANs_G3_L26_U7 =
        // //     "A \n\n B \n\n C \n\n D \n\n E \n\n F \n\n G \n\n H \n\n I \n\n ";

        // $sampleANs_G3_L26_U7 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magnam animi a rem recusandae, nobis voluptate, quas laboriosam alias natus esse delectus necessitatibus ipsum sed debitis dolorem. Repellendus, quibusdam beatae.";

        //     DB::table('ans_n_ques')->insert([
        //         [ 'game_id' => 260, 'q_content' => $questions_G3_L26_U7,
        //           'a_content' => $sampleANs_G3_L26_U7],
        //     ]);






        ////////////////////////////////////////////////////
        ////    Grade 3  Lesson 33 unit 3 ( rounds )

        // $qImg = $ImageDomain."Grade_3/lesson_33/Write_the_opposite/";

        // $q_content_G3_L33_U3 = [
        //     'noisy','expensive','ugly','fat','married','old','easy','poor'
        // ];
        // $q_content_G3_L33_U3_img = ['noisy','expensive','ugly','fat','married','old','easy','poor'];

        // $a_content_G3_L33_U3 = [
        //     'quiet','cheap','handsome','thin','single','young','difficult','rich'
        // ];

        // $a_content_G3_L33_U3_audio = [
        //     'noisy--quiet','expensive-cheap','handsome--ugly','fat-thin',
        //     'married--single','young-old','easy-difficult','rich-poor'
        // ];


        // foreach ($q_content_G3_L33_U3 as $key => $value) {
        //      DB::table('ans_n_ques')->insert([
        //         [
        //          'game_id' => 264, 'round' => $key + 1, 'q_image' => $qImg.$q_content_G3_L33_U3_img[$key].".png",
        //          'q_content' => $value, 'a_content' => $a_content_G3_L33_U3[$key],
        //          'q_audio' => $AudioDomain."Grade_3/Lesson_33/Write_the_Opposite/".$a_content_G3_L33_U3_audio[$key].".mp3"
        //         ],
        //     ]);
        // }









    }
}
