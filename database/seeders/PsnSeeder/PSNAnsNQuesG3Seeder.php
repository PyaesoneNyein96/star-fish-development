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




        // Unit 2 sub 1 Reading  <Reading_carousel>

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
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }



        // Unit 2 sub 2 Write <look_and_write>


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


        $images = $ImageDomain . "Grade_3/Lesson_21/Write/";
        $audios = $AudioDomain . "Grade_3/Lesson_21/Write/";

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


        $images = $ImageDomain . "Grade_3/Lesson_21/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_21/Practice/";

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



    // Unit 2 sub 1 Reading  <Reading_carousel>

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
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
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


        $images = $ImageDomain . "Grade_3/Lesson_22/Write/";
        $audios = $AudioDomain . "Grade_3/Lesson_22/Write/";

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


        $images = $ImageDomain . "Grade_3/Lesson_21/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_21/Practice/";

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
        "listening", "help", "sweep", "watering", "draw", "draw", "listen-teacher", "playing"
    ];

    $Question_contents = [
        "what do you often do in your class?",
        "what do you usually do at school?",
        "what do you alway do at school?",
        "what do you usually do at school?",
        "what do you sometime do in your class?",
        "what do you often do in your class?",
        "what do you sometime do in your class?",
        "what do you alway do at school?",
    ];

    $images = $ImageDomain . "Grade_3/Lesson_22/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_22/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 618,
                'round' => $key + 1,
                // 'round_instruction' => "Look at this picture and speak.",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.$contents[$key].".mp3",
                'q_image' => $images . $value . ".png",
                'a_content' => str_replace('-', ' ', $value)
            ]

        ]);
    }




    ////  Unit 6 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_3/Lesson_22/Reading/";
        $audios = $AudioDomain . "Grade_3/Lesson_22/Reading/";

        $para = "Hi,My name is Anna.I am a Grade three student. I am eight years old. I go to a school nearby. We do a lot of things at school. I always study in the library. I sometimes play games with friends. I usually do physical exercise in the morning. All my friends do physical exercise. We love that. I often work alone in class. But sometimes we need to work in groups.";

        $given_q = [
            ["Anna doesn't work in groups.", "True"],
            ["Anna doesn't study in the library", "False"],
            ["They do physical exercise in the afternoon.", 'False'],
            ["Anna loves doing physical exercise.", "True"],
            ["Anna sometime plays games with friends.", 'True'],
        ];

        $given_audio = [
            "anna-doesnt-work-group.mp3",
            "anna-doesnt-study-library.mp3",
            "they-do-exercise-afternoon.mp3",
            "ann-loves-exercise",
            "anna-sometime-play-friends.mp3"
        ];
        $paraName = "Hi-my-name-is-Anna.mp3";

        $given_answer = ['True', 'False'];


          for ($i = 0; $i < count($given_q); $i++) {


            foreach ($given_answer as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 619,
                        'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 619,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 619,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }


    // Unit 7 Writing <writing_topic>


        $images = $ImageDomain . "Grade_3/Lesson_22/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_22/Writing/";

        $sample_content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum ";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 620,
                'a_content' => $sample_content
            ],
        ]);





    //////////////////////////////////////////// Lesson 23 ///////////////////////////////////////

    // Unit 1 // game_id -> 621

    // ....................




    // Unit 2 sub 1 Reading  <Reading_carousel>

        $contents = [
            'sleeping','Teaching','Singing','listening','eating','reading','watching',
            'swimming', 'studying', 'drinking','playing-piano', 'planting', 'playing-cards',
            'playing-baseball',
        ];

        $audio = $AudioDomain."Grade_3/Lesson_23/Vocabulary_1/";
        $img = $ImageDomain."Grade_3/Lesson_23/Vocabulary_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 622,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }





    // Sub -2 Vocabulary <rearrange_with_audio>

        $given_ans = [
           ["listening","swimming","teaching"],
           ["listening to music","watching","studying"],
           ['singing','cooking','studying'],
           ['drinking','sleeping','studying'],
           ['drinking','swimming','eating'],
           ['listening','watching','studying'],
           ['swimming','sleeping','studying'],
        ];

        $img = $ImageDomain . "Grade_3/Lesson_23/Vocabulary_2/";
        $audio = $AudioDomain . "Grade_3/Lesson_23/Vocabulary_2/";

        $answers = [
            'teaching', 'listening to music', 'singing', 'drinking', 'eating' , 'watching','sleeping'
        ];

        $questions = [
            "She is ___", "He is ___", "He is ___", "She is ___", "He is ___", "They are ___", "They are ___"
        ];

        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 623,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 623,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                    'q_content' => $questions[$i],
                    'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }




    // Unit 3 Practice <look_and_write>


        $contents = [
            "reading.",
            "eating",
            "planting",
            "playing piano",
            "sleeping",
            "studying",
            "playing baseball",
        ];

        $questions = [
                "what are you doing?",
                "what is he doing?",
                "what is she doing?",
                "what are you doing?",
                "what are they doing?",
                "what are they doing?",
                "what is he doing?",
        ];

        $ans = [
            "reading.",
            "eating",
            "planting",
            "playing piano",
            "sleeping",
            "studying",
            "playing baseball",
        ];


        $images = $ImageDomain . "Grade_3/Lesson_23/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_23/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 624,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($contents[$key]).".png",
                    'q_audio' => $audios.$this->removeSpace($contents[$key]).".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }



    // Unit 4 Listen <listening_and_choosing_pics_one>


    $images = $ImageDomain . "Grade_3/Lesson_23/Listen/";
    $audios = $AudioDomain . "Grade_3/Lesson_23/Listen/";

    $contents = [
        ['washing dishes', 'teaching'],
        ['watching', 'listening'],
        ['washing dishes', 'planting'],
        ['sleeping', 'watching'],
        ['reading', 'eating'],

    ];


    $ans = [
        'teaching',
        'watching',
        'washing dishes',
        'watching',
        'eating'
    ];

    foreach ($ans as $key => $value) {

        foreach ($contents[$key] as $j => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 625,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($val).".png",
                    'a_content' => $val == $value ? true : false
                ]
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 625,
                'round' => $key + 1,
                'q_audio' => $audios.$this->removeSpace($value).".mp3"
            ]
        ]);


    }


    // Unit 5 Speaking <speaking_and_recording>

    $contentImg = [
         "Mr_and_Mrs_Clark",
            "Karen",
            "Johnson",
            "park",
            "library",
            "living-room",
            "bathroom",
            "hospital"
    ];


        $questionContent = [
            "Where are Mr and Mrs Clark? \n ___ in the dinning room. What are they doing? ___ ",
            "Where is Karen? \n ___ in the park. \n What is she doing? ___ ",
            "Where is Ms Johnson? \n ___ in the classroom.\n What is she doing? ___ ",
            "Where are you? \n ___ in the park.\n What are you doing? ___ ",
            "Where are you? \n ___ in the library.\n What are you doing? ___ ",
            "Where are you? \n ___ in the living room.\n What are you doing? ___ ",
            "Where is Marvin? \n ___ in the bathroom.\n What are you doing? ___ ",
            "Where is Mark? \n ___ in hospital.\n What is he doing? ___ ",


        ];

        $questionAudio = [
            "Mr_and_Mrs_Clark",
            "Karen",
            "Johnson",
            "park",
            "library",
            "living-room",
            "bathroom",
            "hospital"
        ];

        $img = $ImageDomain . "Grade_3/Lesson_23/Speaking/";
        $audio = $AudioDomain . "Grade_3/Lesson_23/Speaking/";

        foreach ($questionContent as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 626,
                    'round' => $key + 1,
                    'q_content' => $value,
                    'q_image' => $img . $this->removeSpace($contentImg[$key]) . ".png",
                    'a_content' => null,
                    // 'q_audio' => $audio.$questionAudio[$key],
                ]

            ]);
        }






    //////////////////////////////////////////// Lesson 24 ///////////////////////////////////////

    // Unit 1 // game_id -> 627

    // ....................




    // Unit 2 sub 1 Reading  <Reading_carouse>

        $contents = [
            'swimming','gym','computer_games','watchTV','movies','read','family',
            'gardening', 'friends', 'piano','walk', 'shop', 'park','bike','skiing',
            'football',
        ];

        $audio = $AudioDomain."Grade_3/Lesson_24/Vocabulary/";
        $img = $ImageDomain."Grade_3/Lesson_24/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 628,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }





    // Unit 3 Practice Sub -1 <look_and_write>


        $contents = [
            "swimming",
            "computer_game",
            "reading",
            "watch_TV",
            "ride_bike",
            "piano",
            "football",
        ];

        $questions = [
                "What do you do on Saturdays? \n on Sunday I ___.",
                "What do you do on Tuesday? \n on Tuesday I ___.",
                "What do you do on Thursdays? \n on Thursdays I ___.",
                "What do you do on Wednesdays? \n on Wednesdays I ___.",
                "What do you do on Monday? \n on Monday I ___.",
                "What do you do on Fridays? \n on Fridays I ___.",
                "What do you do on Sunday? \n on Sunday I ___.",
        ];

        $ans = [
            "swimming",
            "computer_game",
            "reading",
            "watch_TV",
            "ride_bike",
            "piano",
            "football",
        ];


        $images = $ImageDomain . "Grade_3/Lesson_24/Practice-1/";
        $audios = $AudioDomain . "Grade_3/Lesson_24/Practice-1/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 629,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($contents[$key]).".png",
                    'q_audio' => $audios.$this->removeSpace($contents[$key]).".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }



    // Sub -2 Vocabulary <rearrange_with_audio>

        $img = $ImageDomain . "Grade_3/Lesson_24/Vocabulary_2/";
        $audio = $AudioDomain . "Grade_3/Lesson_24/Vocabulary_2/";

        $given_answer = [
           ["Do","Go"],
           ["play","Go"],
           ["Do","Play"],
           ["Ride","Play"],
           ["Do","Play"],
           ["Do","Play"],
           ["Play","Go"],
        ];

        $questions = [
            "What do you ___ on Tuesdays?",
            "I ___ swimming on Mondays.",
            "I ___ computer games on Fridays.",
            "I ___ my bike on Wednesdays.",
            "I ___ a musical instrument on Thursdays.",
            "Do you ___ piano on Saturdays?",
            "I ___ play football on Sundays.",
        ];

        $ques_img = [
            "tuesdays",
            "monday",
            "fridays",
            "wednesdays",
            "thursdays",
            "saturdays",
            "sunday"
        ];

        $answers = [
            'Do', 'Go', 'Play', 'Ride', 'Play' , 'Play', 'Play'
        ];

        for ($i = 0; $i < count($given_answer); $i++) {

            foreach ($given_answer[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 630,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 630,
                    'round' => $i + 1,
                    'q_content' => $questions[$i],
                    'q_image' => $img . ucfirst(strtolower($ques_img[$i])) . ".png",
                    'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }



    // Unit 4 Listen <Matching>

    $contents = [
        ['sunday', 'tuesdays', 'saturdays', 'fridays'],

        ];

        $randomValues = [
        ['swimming', 'football', 'watering', 'piano'],

        ];

        $audio = $AudioDomain . "Grade_3/Lesson_24/Matching/";
        $img = $ImageDomain . "Grade_3/Lesson_24/Matching/";

        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 631,
                        'round' => $i + 1,
                        'q_content' => ucfirst($q),
                        'q_image' => $q,
                        'q_audio' => $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 631,
                        'round' => $i + 1,
                        'q_content' => ucfirst($q),
                        'q_image' => $img . strtolower($q) . ".png",
                        'q_audio' => $audio .  strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }




    // Unit 5 Speaking <speaking_and_recording>

    $contents = [
        "swimming", "reading", "help", "watering", "wash-clothes", "painting", "piano",
    ];

    $Question_contents = [
        "What do you do in the Saturday.",
        "What do you do in the Friday.",
        "What do you do in the Monday.",
        "What do you do in the Wednesday.",
        "What do you do in the Tuesdays.",
        "What do you do in the Sunday.",
        "What do you do in the Sunday.",
        "What do you do in the Thursday.",
    ];

    $images = $ImageDomain . "Grade_3/Lesson_24/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_24/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 632,
                'round' => $key + 1,
                // 'round_instruction' => "Look at this picture and speak.",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.$contents[$key].".mp3",
                'q_image' => $images . $value . ".png",
                'a_content' => $this->removeSpace($value)
            ]

        ]);
    }




    //  Unit 6 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_3/Lesson_24/Reading/";
        $audios = $AudioDomain . "Grade_3/Lesson_24/Reading/";

         $para = "It’s a busy week for me. On Monday I play tennis for one hour and on Tuesday I go swimming for one hour. On Wednesday and Friday I watch TV and read a book. On Thursday I ride my bike with my friend. We ride our bikes for two hours.  Saturday is my favorite day.  I go to the park and play with friends. We play football. On Sunday I watch TV and play computer games. What do you do at the weekend?";

        $given_q = [
            ["On Friday ----.", "Watch TV and read a book"],
            ["On Tuesday ___.", "Go swimming"],
            ["On Monday ___ .", 'Play Tennis'],
            ["On Thursday ___ .", 'Ride my bike'],
            ["On Wednesday ___ .", 'Watch TV and read a book'],
            ["On Sunday ___ .", 'Watch TV and play computer games'],
            ["On Saturday ___ .", 'Play football with friends at the park'],

        ];

        $given_audio = [
            "on-friday.mp3",
            "on-tuesday.mp3",
            "on-monday.mp3",
            "on-thursday.mp3",
            "on-wednesday.mp3",
            "on-sunday.mp3",
            "on-saturday.mp3",
        ];

        $paraName = "my_week.mp3";

        $given_answer = [
            ['Watch TV and read a book', 'Go swimming','Ride my bike'],
            ['Play Tennis', 'Go swimming', 'Ride my bike'],
            ['Play Tennis', 'Go swimming', 'Watch TV and read a book'],
            ['Watch TV and read a book', 'Ride my bike','Watch TV and play computer games'],
            ['Watch TV and read a book', 'Go swimming','Watch TV and play computer games'],
            ['Play football with friends at the park', 'Ride my bike','Watch TV and play computer games'],
            ['Play football with friends at the park', 'Ride my bike','Watch TV and play computer games'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 633,
                        'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 633,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 633,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "My Week",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }



        // Unit 7 Writing <writing_topic>


        $images = $ImageDomain . "Grade_3/Lesson_24/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_24/Writing/";

        $sample_content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum ";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 634,
                'a_content' => $sample_content
            ],
        ]);






    //////////////////////////////////////////// Lesson 25 ///////////////////////////////////////

    // Unit 1 // game_id -> 635

    // ....................




    // Unit 2 sub 1 Reading  <Reading_carouse>

        $contents = [
            'act','swim','dance','do ballet','cook','skip a rope', 'sing a song', 'draw', 'speak english', 'bake', 'ride',
            'play a music', 'drive', 'fix', 'build'
        ];

        $audio = $AudioDomain."Grade_3/Lesson_25/Vocabulary/";
        $img = $ImageDomain."Grade_3/Lesson_25/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 636,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png" ,
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }


    // Unit 3 Practice <look_and_write>


        $contents = [
            'skate','teach','swim','bike','cake','ski', 'bus', 'cook',
        ];

        $questions = [
                "Can He skate?",
                "Can she teach?",
                "Can they swim?",
                "Can he ride a bike?",
                "Can he bake cake?",
                "Can they ski?",
                "Can you drive a bus?",
                "Can he cook?",
        ];

        $ans = ["No","not sure","Yes","not sure","Yes","No","No","No",];


        $images = $ImageDomain . "Grade_3/Lesson_25/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_25/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 637,
                    'round' => $key + 1,
                    'q_image' => $images.$contents[$key].".png",
                    'q_audio' => $audios.$contents[$key].".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }



    // Unit - 4 Listen and write <listening_choosing_answer>


        $audio_q = [
            'piano','tennis','swim','sing','car'
        ];

        $given_ans = ["can","can't"];

        $ques = [
            "I can/can't play piano.",
            "I can/can't play tennis.",
            "I can/can't play swim.",
            "I can/can't play sing.",
            "I can/can't drive a car.",
        ];

        $ans = [
            "can","can't","can","can","can't"
        ];

        $audio = $AudioDomain."Grade_3/Lesson_25/Listening/";
        $img = $ImageDomain."Grade_3/Lesson_25/Listening/";

        foreach ($audio_q as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 638,
                    'round' => $key + 1,
                    'q_audio' => $audio.$val.".mp3",
                    'q_content' => $given_ans[0],
                    'q_conver'  =>  $ques[$key],
                    'a_content' => $given_ans[0] == $ans[$key] ? true : false
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 638,
                    'round'  => $key +  1,
                    'q_content' => $given_ans[1],
                    'a_content' => $given_ans[1] == $ans[$key] ? true : false
                ]
            ]);


        }




    // Unit 5 Speaking <speaking_and_recording>

    $contents = [
        "swim", "sing", "speak", "bake", "ski", "bike", "cook", "football"
    ];

    $Question_contents = [
        "Can you swim?",
        "Can you sing a song?",
        "Can you speak english?",
        "Can you bake cake?",
        "Can you ski?",
        "Can you ride a bike?",
        "Can you cook?",
        "Can you play football?",
    ];

    $images = $ImageDomain . "Grade_3/Lesson_25/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_25/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 639,
                'round' => $key + 1,
                // 'round_instruction' => "Look at this picture and speak.",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.$contents[$key].".mp3",
                'q_image' => $images . $value . ".png",
            ]

        ]);
    }



    //// Unit 6 FreePractice <speaking_and_recording>

    $contents = [
        "green_animal"
    ];

    $Question_contents = [
        "What can you do? \n What can't you do? \n Talk about your abilities?",
    ];

    $aud = "what-can-you-do.mp3";

    $images = $ImageDomain . "Grade_3/Lesson_25/FreePractice/";
    $audios = $AudioDomain . "Grade_3/Lesson_25/FreePractice/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 640,
                'round' =>  1,
                // 'round_instruction' => "Look at this picture and speak.",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.$aud,
                'q_image' => $images . $value . ".png",
            ]

        ]);
    }






    //////////////////////////////////////////// Lesson 26 ///////////////////////////////////////

    // Unit 1 // game_id -> 641

    // ....................




    // Unit 2 sub 1 Reading  <Reading_carouse>

        $contents = [
            'eat dinner','talk on the phone','do homework','take a bath','study english','play video games','play violin',
            'listen music', 'switch off light', 'go to bed'
        ];

        $audio = $AudioDomain."Grade_3/Lesson_26/Vocabulary_1/";
        $img = $ImageDomain."Grade_3/Lesson_26/Vocabulary_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 642,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }





    // Sub -2 Vocabulary <look_and_write> // without questions

        $contents = [
            "bath",
            "violin",
            "homework",
            "video-game",
            "listening-song",
            "get-up",
            "breakfast",
            "comb-hair"
        ];


        $images = $ImageDomain . "Grade_3/Lesson_26/Vocabulary_2/";
        $audios = $AudioDomain . "Grade_3/Lesson_26/Vocabulary_2/";

        foreach ($contents as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 643,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($q).".png",
                    'q_audio' => $audios.$this->removeSpace($q).".mp3",
                    'q_content' => null,
                    'a_content' => null,
                ]
            ]);
        }






    // Unit 3 Practice <look_and_write> // Uncertain answer and single question


        $contents = [
            "3-45.",
            "3-55",
            "1-30",
            "2-10",
            "9-45",
            "10-20",
            "6-30",
            "7",
        ];

        $questions = "What time is it?";


        $images = $ImageDomain . "Grade_3/Lesson_26/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_26/Practice/";

        foreach ($contents as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 644,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($q).".png",
                    'q_audio' => $audios.$this->removeSpace($q).".mp3",
                    'q_content' => $q,
                    'a_content' => null,
                ]
            ]);
        }




    // Unit 4 Listen <listening_and_choosing_pics_one>


            $images = $ImageDomain . "Grade_3/Lesson_26/Listening/";
            $audios = $AudioDomain . "Grade_3/Lesson_26/Listening/";

            $contents = [
                ['3-45', '6-30','4-00'],
                ['6-40', '7-00','3-10'],
                ['6-30', '7-00','4-50'],
                ['6-30', '6-10','4-50'],
            ];


            $ans = [
                '6-30',
                '6-40',
                '4-50',
                '6-30',
            ];

            foreach ($ans as $key => $value) {

                foreach ($contents[$key] as $j => $val) {
                    DB::table('ans_n_ques')->insert([
                        [
                            'game_id' => 645,
                            'round' => $key + 1,
                            'q_image' => $images.$val.".png",
                            'a_content' => $val == $value ? true : false
                        ]
                    ]);
                }

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 645,
                        'round' => $key + 1,
                        'q_audio' => $audios.$value.".mp3"
                    ]
                ]);


            }



    // Unit 5 Speaking <speaking_and_recording>

        $contents = [
            "sleep", "watch TV", "do homework", "wash dishes", "singing", "make breakfast", "get up"
        ];

        $Question_contents = [
            "What do he do at 8 o'clock at night?",
            "What do they do at 6:30 in the evening?",
            "What do they do at 6 o'clock in the evening?",
            "What does she do at 8 o'clock in the morning?",
            "What do you do at 2 in the afternoon?",
            "What do you do at 7 o'clock in the morning?",
            "What do you do at 6:30 in the morning?",

        ];

        $images = $ImageDomain . "Grade_3/Lesson_26/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_26/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 646,
                    'round' => $key + 1,
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $audio.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                    'a_content' => $value
                ]

            ]);
        }


    // Unit 6 Reading  <reading_passage_two>


    $images = $ImageDomain . "Grade_3/Lesson_26/Reading/";
    $audios = $AudioDomain . "Grade_3/Lesson_26/Reading/";

    $para = "Hi, My name is Toby. I am 8 years old. I am a Grade 3 student. Today is very busy. In the morning I get up at 6:30. And I brush my teeth, take a bath and eat breakfast at 7:00. Then I get dressed, and I go to school. In the afternoon I eat my lunch at 12:30. And I play with my friends at school. I come back home at 3:00 in the afternoon. I do my homework at 5:00,and  I eat dinner at 6:00 in the evening. After dinner, I watch TV for a while. I go to bed at 8:00. I have a very busy day.";

    $given_q = [
        ["What does he do after lunch at school?", "I play with my friends at school"],
        ["What time does he eat dinner?", "I watch TV for a while"],
        ["What time does he go to bed?", "8 o'clock"],
        ["What time does he eat breakfast in the morning?", "7 o'clock"],
        ["What time does Toby get up in the morning?", "6:30"],
    ];

    $given_audio = [
        "toby-lunch.mp3",
        "toby-dinner.mp3",
        "toby-bed.mp3",
        "toby-breakfast.mp3",
        "toby-get-up.mp3",
    ];

    $paraName = "Hi-my-name-is-Toby.mp3";


      for ($i = 0; $i < count($given_q); $i++) {

        DB::table('ans_n_ques')->insert([
            [
                'round' => $i + 1,
                'game_id' => 647,
                'q_audio' => $audios . $given_audio[$i],
                'q_conver' => $given_q[$i][0],    //giver Q
                'a_content' => $given_q[$i][1],    //ans
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'round' => $i + 1,
                'game_id' => 647,
                'q_audio' => $audios . $paraName,
                'q_content' => "My busy day",
                'q_conver' => $para,
                'background' => $images . "bg.png"
            ]
        ]);
    }


    // Unit 7 Writing <writing_topic>


        $images = $ImageDomain . "Grade_3/Lesson_22/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_22/Writing/";

        $sample_content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum ";

        DB::table('ans_n_ques')->insert([
            [
            'game_id' => 648,
            'a_content' => $sample_content
            ],
        ]);



    //// Unit 8 FreePractice <speaking_and_recording>


    $images = $ImageDomain . "Grade_3/Lesson_26/FreePractice/";
    $audios = $AudioDomain . "Grade_3/Lesson_26/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 649,
                'q_content' =>  "Talk about your daily activities. \n What time do you do these activities?",
                'q_audio' => $audio."Talk-about-your-daily-activities.mp3",
                'q_image' => $images . "green_animal" . ".png",
            ]

        ]);


    // foreach ($contents as $key => $value) {  // condition check for first round

    //     $data = [
    //         'game_id' => 649,
    //         'round' =>  $key + 1,
    //         'q_content' => $Question_contents[$key],
    //         'q_audio' => $audio.$aud,
    //         'q_image' => $images . $value . ".png",
    //     ];

    //     if($key == 0) {
    //         $data['a_image'] = "xxx.png";
    //     }

    //     DB::table('ans_n_ques')->insert($data);
    // }



  //////////////////////////////////////////// Lesson 27 ///////////////////////////////////////

    // Unit 1 // game_id -> 650

    // ....................



    // Unit 2  Vocabulary  <Reading_carouse>

        $contents = [
          "breakfast", "school", "housework", "bath", "watch_tv", "get_up", "home", "study", "bed",
        ];

        $audio = $AudioDomain."Grade_3/Lesson_27/Vocabulary/";
        $img = $ImageDomain."Grade_3/Lesson_27/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 651,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }






    // Unit 3 Practice <look and write> -- without question (with Answer)


        $contents = [
            'I alway go to school at 8:25','I usually have breakfast at 7:30',
            "I often do the housework at 4:30", "I usually go home at 3:45",
            "I sometime watch TV at 8:30", "I usually study my lesson at 7:30",
            "I usually go to bed at 9:00", "I often have a bath at 6:15",
            "I usually get up at 6:00",
        ];




        $images = $ImageDomain . "Grade_3/Lesson_27/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_27/Practice/";

        foreach ($contents as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 652,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($val).".png",
                    'q_audio' => $audio.$this->removeSpace($val).".mp3",

                ]
            ]);
        }



    // Unit - 4 Listen and write <listening_choosing_answer>



      $audio_q = [
        "get-up",
        "breakfast",
        "study",
        "housework",
        "movie",
      ];

      $questions = [
        'What time do you usually get up?',
        'What time do you usually have breakfast?',
        'What time do you always study the lesson?',
        'What time do you sometime do the housework?',
        'What time do you often go to the movie?',

      ];

      $given_ques = [
            ["6:30", "6:20","6:45"],
            ["6:15", "6:50","6:45"],
            ["7:50", "7:20","7:15"],
            ["4:35", "4:25","4:45"],
            ["3:30", "4:30","4:30"],

      ];

    $ans = [
       "6:30","6:50","7:15","4:45", "3:30"
    ];


    $audio = $AudioDomain."Grade_3/Lesson_27/Listen/";
    $img = $ImageDomain."Grade_3/Lesson_27/Listen/";



        foreach ($questions as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 653,
                'round' => $key + 1,
                'q_audio' => $audio.$audio_q[$key].".mp3",
                'q_content' => $given_ques[$key][0],
                'q_conver'  => $val,
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 653,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 653,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);


    }




    // Unit 5 Speaking <speaking_and_recording>

    $contents = [
        "bath","school","watch","study","bed","breakfast","morning"
    ];

    $Question_contents = [
            "What time do you usually have a bath",
            "What time do you alway go to school",
            "What time sometime watch TV",
            "What time do you usually study the lesson",
            "What time do you alway go to bed",
            "What time do you alway have  breakfast",
            "What time do you alway get up in the morning"

    ];

    $images = $ImageDomain . "Grade_3/Lesson_27/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_27/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 654,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($Question_contents[$key]).".mp3",
                'q_content' => $Question_contents[$key]." ?",
                'q_audio' => $audio.$contents[$key].".mp3",
                'q_image' => $images . $value . ".png",
            ]

        ]);
    }




    //// Unit 8 FreePractice <speaking_and_recording>


    $images = $ImageDomain . "Grade_3/Lesson_27/FreePractice/";
    $audios = $AudioDomain . "Grade_3/Lesson_27/FreePractice/";


    DB::table('ans_n_ques')->insert([
        [
            'game_id' => 655,
            'q_content' =>  "Talk about What do you do at home everyday?",
            'q_audio' => $audio."Talk-about-your-do-at-home.mp3",
            'q_image' => $images . "green_animal",
        ]

    ]);






    //////////////////////////////////////////// Lesson 28 ///////////////////////////////////////

    // Unit 1 // game_id -> 656

    // ....................



    // Unit 2  Vocabulary  <Reading_carouse>

        $contents = [
          "acting", "clap", "cry", "dance", "fishing", "fly-kite", "jump", "plant", "guitar","run","sing","skip-rope","sleep", "throw", "walk", "wash-car"
        ];

        $audio = $AudioDomain."Grade_3/Lesson_28/Vocabulary/";
        $img = $ImageDomain."Grade_3/Lesson_28/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 657,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }


    // Unit 3 Practice <look_and_write>


        $contents = [
            'playing guitar','throw a ball','wash her car','fishing','sleeping','acting', 'planting',
        ];

        $questions = [
                "what is he doing?",
                "what is she doing?",
                "what is she doing?",
                "what is she doing?",
                "what are they doing?",
                "what is he doing?",
                "what is she doing?",
        ];


        $images = $ImageDomain . "Grade_3/Lesson_28/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_28/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 658,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($contents[$key]).".png",
                    'q_audio' => $audios.$this->removeSpace($contents[$key]).".mp3",
                    'q_content' => $q,
                ]
            ]);
        }




    // Unit 4 Listen <listening_choosing_answer>



    $images = $ImageDomain . "Grade_3/Lesson_28/Listen/";
    $audios = $AudioDomain . "Grade_3/Lesson_28/Listen/";

    $contents = [
        ['wash her car', 'fishing','walking'],
        ['sleeping', 'playing guitar','running'],
        ['dancing', 'running','singing'],
        ['fishing', 'washing','throwing'],
        ['wash her car', 'planting','walking'],
    ];


    $ans = [
        'walking',
        'playing guitar',
        'dancing',
        'fishing',
        'planting',
    ];

    foreach ($ans as $key => $value) {

        foreach ($contents[$key] as $j => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 659,
                    'round' => $key + 1,
                    'q_image' => $images.$val.".png",
                    'a_content' => $val == $value ? true : false
                ]
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 659,
                'round' => $key + 1,
                'q_audio' => $audios.$value.".mp3"
            ]
        ]);


    }




    // Unit 5 Speaking <speaking_and_recording>

    $contents = [
        "wash","cry","play-guitar","dance","acting","baking","planting-tree","riding-bike"
    ];

    $Question_contents = [
            "Where is you daughter? \n What is she doing?",
            "Where are your grandparents? \n What are they doing?",
            "Where is your nephew? \n What is he doing?",
            "Where are your friends? \n What are they doing?",
            "Where is your niece? \n What is she doing?",
            "Where are your brother and sister? \n What are they doing?",
            "Where is your wife? \n What is she doing?",
            "Where is your mother? \n What is she doing?",
    ];

    $round_instructions = [
        "daughter",'grandparents', 'nephew', 'friends', 'niece', 'brother-sister','wife', 'mother'
    ];

    $images = $ImageDomain . "Grade_3/Lesson_27/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_27/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 660,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($round_instructions[$key]).".mp3",
                'q_content' => $Question_contents[$key]." ?",
                'q_audio' => $audio. $value .".mp3",
                'q_image' => $images . $value . ".png",
            ]

        ]);
    }




    ////  Unit 6 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_3/Lesson_28/Reading/";
        $audios = $AudioDomain . "Grade_3/Lesson_28/Reading/";

        $para = "Hi, my name is Abby. This is my family. There are five of us. They are my father, my mother, my brother, my sister and I. My father is in the living room. He’s reading a book. My mother is in the kitchen. She is cooking dinner. My sister is helping my mother with cooking. My brother is in his bedroom. He is listening to music. I am also in my bedroom. I am studying my lessons because my exam is tomorrow.";

        $given_q = [
            ["His sister is helping her mother.  ______ ", "Yes"],
            ["His brother is playing  in the bedroom. _______ ", "No"],
            ["He is studying the lesson in his bedroom. _______", "Yes"],
            ["His father is reading a book in the living room. ______","Yes"],
            ["His mother is cooking lunch in the kitchen. ______", "No"],
        ];

        $given_audio = [
            "abby-sis.mp3",
            "anna-bro.mp3",
            "abby.mp3",
            "abby-father",
            "abby-mom.mp3"
        ];
        $paraName = "Hi-my-name-is-Abby.mp3";

        $given_answer = ['Yes', 'No'];


          for ($i = 0; $i < count($given_q); $i++) {


            foreach ($given_answer as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 661,
                        'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 661,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 661,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }



    // Unit 7 Writing <writing_topic>


        $images = $ImageDomain . "Grade_3/Lesson_28/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_28/Writing/";

        $sample_content = "Hi, my name is Abby. This is my family. There are five of us. They are my father, my mother, my brother, my sister and I. My father is in the living room. He’s reading a book. My mother is in the kitchen. She is cooking dinner. My sister is helping my mother with cooking. My brother is in his bedroom. He is listening to music. I am also in my bedroom. I am studying my lessons because my exam is tomorrow.
";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 662,
                'a_content' => $sample_content
            ],
        ]);





    //// Unit 8 FreePractice <speaking_and_recording>


    $images = $ImageDomain . "Grade_3/Lesson_28/FreePractice/";
    $audios = $AudioDomain . "Grade_3/Lesson_28/FreePractice/";


    DB::table('ans_n_ques')->insert([
        [
            'game_id' => 663,
            'q_content' =>  "Talk about your family members. \n Where are they now? What are they doing? ",
            'q_audio' => $audio."Talk-about-your-do-at-home.mp3",
            'q_image' => $images . "green_animal",
        ]

    ]);








    //////////////////////////////////////////// Lesson 29 ///////////////////////////////////////

    // Unit 1 // game_id -> 664

    // ....................




    // Unit 2 sub 1 Reading  <Reading_carouse>

        $contents = [
            'dancing','doing-yoga','drawing','eating-out','shopping','catch','football',
            'hide-and-seek', 'hopscotch', 'marbles','tag', 'guitar', 'toy','reading','walk-dog',
            'watch-tv',
        ];

        $audio = $AudioDomain."Grade_3/Lesson_29/Vocabulary/";
        $img = $ImageDomain."Grade_3/Lesson_29/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 665,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }



    // Unit - 2 Choose <look_and_choose>

        $audio = $AudioDomain."Grade_3/Lesson_29/Choose/";
        $img = $ImageDomain."Grade_3/Lesson_29/Choose/";


    $given_ans = [
        ['Going Shopping', 'Dancing', 'Reading'],
        ['Walking dog', 'Playing the guitar','Doing yoga'],
        ['Playing marbles', 'Writing', 'Eating  out'],
        ['Playing marbles', 'Playing catch', 'Doing yoga'],
        ['Playing with toys', 'Watching Tv', 'Playing Tag'],
        ['Playing with toys', 'Walking hopscotch','Playing football'],
        ['Playing with toys', 'Walking dog','Playing football'],
        ['Eating out','Reading', 'Playing hopscotch'],
        ['Eating out' , 'Reading', 'Walking dog'],
        ['Going Shopping', 'Dancing', 'Reading'],
    ];

    $ans = [
        'Going Shopping','Playing the guitar', 'Playing marbles',
        'Doing yoga', 'Watching Tv','Playing football', 'Playing with toys',
        'Eating out', 'Reading', 'Dancing'
    ];

    foreach ($given_ans as $key => $ga) {


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 666,
                'round' => $key + 1,
                'q_image' => $img.$this->removeSpace($ans[$key]).".png",
                'q_content' => $ga[0],
                'a_content' => $ga[0] == $ans[$key] ? true : false
            ]
        ]);
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 666,
                'round' => $key + 1,
                'q_content' => $ga[1],
                'a_content' => $ga[1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 666,
                'round' => $key + 1,
                'q_content' => $ga[2],
                'a_content' => $ga[2] == $ans[$key] ? true : false
            ]
        ]);

    }




    // Unit -3 Practice <rearrange_with_audio>

        $given_ans = [
           ["doing?","What","they", "are"],
           ["she","what","doing?", "is"],
           ["you",'What','doing?','are'],
           ['he','What','doing?','is'],
           ['she','What','doing?','is'],
           ['they','What','doing','are'],
           ['he','What','doing','is','?'],
        ];

        $img = $ImageDomain . "Grade_3/Lesson_29/Practice/";
        $audio = $AudioDomain . "Grade_3/Lesson_29/Practice/";

        $answers = [
            'What are they doing?', 'What is she doing?',
            'What are you doing?', 'What is he doing?',
            'What is she doing?','What are they doing?',
            'What is he doing?'
        ];

        $ques_img = [
            'shopping', 'play-toy', 'guitar', 'watch-tv', 'dancing' ,
            'hopscotch','reading'
        ];

        $questions = [
            "They are going to shopping.", "She is playing with toys.",
            "I'm playing the guitar.", "I'm watching the TV", "She is dancing.",
            "They are playing hopscotch.", "He is reading."
        ];

        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 667,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 667,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($ques_img[$i])) . ".png",
                    'q_content' => $questions[$i],
                    'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }





  // Unit - 5 Listen and write <listening_choosing_answer>


      $questions = [
        'They are ___.',
        'He is ___.',
        'She is ___',
        'We are ___.',
        "I'm ___."

      ];

      $given_ques = [
            ["going shopping", "playing the guitar","playing tag"],
            ["dancing", "playing the guitar","waling dog"],
            ["dancing", "playing the guitar","waling dog"],
            ["going shopping", "Playing marbles","playing tag"],
            ["playing football", "drawing","dancing"],


      ];

    $ans = [
       "going shopping","playing the guitar","dancing","playing tag", "drawing"
    ];


    $audio = $AudioDomain."Grade_3/Lesson_29/Listen/";
    $img = $ImageDomain."Grade_3/Lesson_29/Listen/";



        foreach ($questions as $key => $val) {
        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 668,
                'round' => $key + 1,
                'q_audio' => $audio.$ans[$key].".mp3",
                'q_content' => $given_ques[$key][0],
                'q_conver'  => $val,
                'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
            ]
        ]);



        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 668,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][1],
                'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
            ]
        ]);

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 668,
                'round'  => $key +  1,
                'q_content' => $given_ques[$key][2],
                'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
            ]
        ]);
    }



    // Unit 5 Speaking <speaking_and_recording>

    $contents = [
       "reading","yoga","eating out","hopscotch","playing guitar","playing with toy","painting","walk with dog"
    ];

    $Question_contents = [
        "What are you doing? \n I am reading.",
        "What are you doing?",
        "What are they doing?",
        "What are they doing?",
        "What are you doing?",
        "What is she doing?",
        "What is she doing?",
        "What is he doing?",
    ];



    $images = $ImageDomain . "Grade_3/Lesson_29/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_29/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 669,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                'q_content' => $Question_contents[$key]." ?",
                'q_audio' => $audio.$this->removeSpace($value).".mp3",
                'q_image' => $images .$this->removeSpace($value) . ".png",
            ]

        ]);
    }



    //// Unit 8 FreePractice <speaking_and_recording>


    $images = $ImageDomain . "Grade_3/Lesson_29/FreePractice/";
    $audios = $AudioDomain . "Grade_3/Lesson_29/FreePractice/";


    DB::table('ans_n_ques')->insert([
        [
            'game_id' => 670,
            'q_content' =>  "Talk about friends. Where are they \n now? What are they doing? ",
            'q_audio' => $audio."Talk-about-friends.mp3",
            'q_image' => $images . "girl",
        ]

    ]);








    //////////////////////////////////////////// Lesson 30 ///////////////////////////////////////

    // Unit 1 // game_id -> 671




    // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'camping','cycling', 'exercise', 'fishing', 'flying-kite', 'gardening',
            'grocery shopping', 'picnic','painting', 'badminton', 'football', 'hide-seek',
            'skate','skipping-rope','take-photo','traveling',
        ];

        $audio = $AudioDomain."Grade_3/Lesson_30/Vocabulary/";
        $img = $ImageDomain."Grade_3/Lesson_30/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 672,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }



    // Unit 3 Practice <look_and_write>


        $contents = [
            'badminton','hide and seek','painting','camping','gardening','traveling', 'exercise', 'picnic',
            'cycling','grocery shopping',
        ];

         $ans = [
            'badminton','hide and seek','painting','camping','gardening','traveling', 'exercise', 'picnic',
            'cycling','grocery shopping',
        ];


        $images = $ImageDomain . "Grade_3/Lesson_30/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_30/Practice/";

        foreach ($contents as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 673,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($val).".png",
                    'q_audio' => $audio.$this->removeSpace($val).".mp3",
                    'a_content' => $ans[$key],
                ]
            ]);
        }



    // Unit 4 Answer the question <look_and_write> yes or no


      $contents = [
            'traveling','gardener','kite','hide-seek','selfie','picnic', 'cycling'
        ];

        $questions = [
                "Is he traveling?",
                "Are you gardening?",
                "Is he flying a kite?",
                "Are they playing hide and seek?",
                "Are you taking photos?",
                "Are they having a picnic?",
                "Is she cycling?",
        ];

        $ans = ["No","No","Yes","Yes","Yes","Yes","Yes",];


        $images = $ImageDomain . "Grade_3/Lesson_30/Answer_Question/";
        $audios = $AudioDomain . "Grade_3/Lesson_30/Answer_Question/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 674,
                    'round' => $key + 1,
                    'q_image' => $images.$contents[$key].".png",
                    'q_audio' => $audios.$contents[$key].".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }




    // Unit 5 Listening <listening_choosing_answer>


    $images = $ImageDomain . "Grade_3/Lesson_30/Listening/";
    $audios = $AudioDomain . "Grade_3/Lesson_30/Listening/";

    $contents = [
        ['cycling', 'gardening','fishing'],
        ['skipping rope', 'gardening','play badminton'],
        ['gardening', 'playing hide and seek','having picnic'],
        ['having picnic', 'grocery shopping','playing hide and seek'],
        ['skipping rope', 'cycling','playing football'],
    ];


    $ans = [
        'gardening',
        'skipping rope',
        'having picnic',
        'playing hide and seek',
        'football',
    ];

    foreach ($ans as $key => $value) {

        foreach ($contents[$key] as $j => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 675,
                    'round' => $key + 1,
                    'q_image' => $images.$val.".png",
                    'a_content' => $val == $value ? true : false
                ]
            ]);
        }

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 675,
                'round' => $key + 1,
                'q_audio' => $audios.$value.".mp3"
            ]
        ]);


    }



    // Unit 6 Speaking <speaking_and_recording>

    $contents = [
       "yoga","shopping","fishing","skip-rope","picnic","traveling","gardening"
    ];

    $Question_contents = [
        "Do you like doing yoga? \n Yes I do.",
        "Is he grocery shopping?",
        "Are you fishing?",
        "Is she skipping rope?",
        "Are they having a picnic?",
        "Is he traveling?",
        "Are you gardening?",
    ];



    $images = $ImageDomain . "Grade_3/Lesson_30/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_30/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 676,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.$this->removeSpace($value).".mp3",
                'q_image' => $images .$this->removeSpace($value) . ".png",
            ]

        ]);
    }






    // Unit 6 Reading  <reading_passage_two>


    $images = $ImageDomain . "Grade_3/Lesson_30/Reading/";
    $audios = $AudioDomain . "Grade_3/Lesson_30/Reading/";

    $para = "I am Jenny. Today is my birthday. I am eight years old today. We are having a birthday party. All my friends are here. My mother is preparing cake and ice-cream. My family and my friends will sing ‘ Happy Birthday’ song for me. My friends are playing games now. They all are very happy. But my brother, Toby is still sleeping. My father brought a lot of presents for me. The party will start at 9:00 o’clock. I can’t wait. Today is a happy day for me.";

    $given_q = [
        ["Jenny is eight years old. _______ ", "Yes"],
        ["The party starts at 8:00. _______ ", "No"],
        ["Her mother is preparing a cake.___ ", "Yes"],
        ["Her friends are helping her mother. _____ ", "No"],
        ["Toby is still sleeping.____ ", "Yes"],
    ];

    $given_audio = [
        "jenny-8.mp3",
        "party-8.mp3",
        "mother.mp3",
        "friends.mp3",
        "toby-sleep.mp3",
    ];

    $paraName = "jenny-story.mp3";

        $given_answer = ["Yes","No"];


        for ($i = 0; $i < count($given_q); $i++) {


            foreach ($given_answer as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 677,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 677,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 677,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }


    // Unit 7 Writing <writing_topic>


        $images = $ImageDomain . "Grade_3/Lesson_30/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_30/Writing/";

        $sample_content = "I am Jenny. Today is my birthday. I am eight years old today. We are having a birthday party. All my friends are here. My mother is preparing cake and ice-cream. My family and my friends will sing ‘ Happy Birthday’ song for me. My friends are playing games now. They all are very happy. But my brother, Toby is still sleeping. My father brought a lot of presents for me. The party will start at 9:00 o’clock. I can’t wait. Today is a happy day for me.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 678,
                'a_content' => $sample_content
            ],
        ]);



    //// Unit 8 FreePractice <speaking_and_recording>


    $images = $ImageDomain . "Grade_3/Lesson_30/FreePractice/";
    $audios = $AudioDomain . "Grade_3/Lesson_30/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 679,
                'q_content' =>  "What do you usually do on birthday?",
                'q_audio' => $audio."What-do-u-usually.mp3",
                'q_image' => $images . "girl" . ".png",
            ]

        ]);




    //////////////////////////////////////////// Lesson 31 ///////////////////////////////////////

    // Unit 1 // game_id -> 680




    // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'collect-thing','Doing-yoga', 'going-dancing', 'hiking', 'jogging', 'making-origami',
            'mountain-climbing', 'photography','volleyball', 'seeing-movie', 'seeing-play', 'skating',
            'skiing','traveling','writing-stories'
        ];

        $audio = $AudioDomain."Grade_3/Lesson_31/Vocabulary/";
        $img = $ImageDomain."Grade_3/Lesson_31/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 681,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }


    // Unit 3 Fill in the blank <look_and_write_two>

        $contents = [
            'going dancing', 'doing yoga', 'jogging', 'traveling', 'mountain climbing',
        ];

        $questions = [
            "g___, d___.",
            "d___, y___.",
            "J___",
            "t___",
            "m___,c___"
        ];

        $images = $ImageDomain . "Grade_3/Lesson_31/Fill_in_the_blank/";
        $audios = $AudioDomain . "Grade_3/Lesson_31/Fill_in_the_blank/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 682,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($contents[$key]).".png",
                    'q_audio' => $audios.$this->removeSpace($contents[$key]).".mp3",
                    'q_content' => $q,
                    'a_content' => $contents[$key],
                ]
            ]);
        }




    // Unit 4 Practice <look_and_write> yes or no


      $contents = [
            'movie','swimming','music','stories','traveling'
        ];

        $questions = [
                "Do they like seeing a movie?",
                "Does he like swimming?",
                "Does he like listening music?",
                "Do you like writing stories?",
                "Do you like traveling?",
        ];

        $ans = ["No","Yes","Yes","No","Yes"];


        $images = $ImageDomain . "Grade_3/Lesson_31/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_31/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 683,
                    'round' => $key + 1,
                    'q_image' => $images.$contents[$key].".png",
                    'q_audio' => $audios.$contents[$key].".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }



    // Unit - 5 Listen and write <listening_choosing_answer>

        $audio_q = [
            'traveling','music','origami','does-not-like-traveling','mountain'
        ];

        $given_ans = ["Yes","No"];

        $ques = [
            "Jane like traveling.",
            "Jane doesn't like listening to music.",
            "They both like making origami.",
            "Amy doesn't like traveling.",
            "Amy likes mountain climbing",
        ];

        $ans = [
            "Yes","Yes","No","No","Yes"
        ];

        $audio = $AudioDomain."Grade_3/Lesson_31/Listen/";
        $img = $ImageDomain."Grade_3/Lesson_31/Listen/";

        foreach ($audio_q as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 684,
                    'round' => $key + 1,
                    'q_audio' => $audio.$val.".mp3",
                    'q_content' => $given_ans[0],
                    'q_conver'  =>  $ques[$key],
                    'a_content' => $given_ans[0] == $ans[$key] ? true : false
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 684,
                    'round'  => $key +  1,
                    'q_content' => $given_ans[1],
                    'a_content' => $given_ans[1] == $ans[$key] ? true : false
                ]
            ]);

        }




    // Unit 6 Speaking <speaking_and_recording>

    $contents = [
       "yoga","mountain","origami","writing","movie","jogging"
    ];

    $Question_contents = [
        "Do you like doing yoga? \n Yes I like doing yoga.",
        "Does he like mountain climbing?",
        "Does he like making origami?",
        "Does he like writing stories?",
        "Do they like seeing  a movie?",
        "Do you like jogging?",
    ];


    $images = $ImageDomain . "Grade_3/Lesson_31/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_31/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 685,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.$this->removeSpace($value).".mp3",
                'q_image' => $images .$this->removeSpace($value) . ".png",
            ]

        ]);
    }


    //// Unit 7 FreePractice <speaking_and_recording>


    $images = $ImageDomain . "Grade_3/Lesson_31/FreePractice/";
    $audios = $AudioDomain . "Grade_3/Lesson_31/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 686,
                'q_content' =>  "What are you hobbies?, What do you like \n doing in your free time? \n What don't you like doing?",
                'q_audio' => $audio."What-are-ur-hobbies.mp3",
                'q_image' => $images . "girl" . ".png",
            ]

        ]);





    //////////////////////////////////////////// Lesson 32 ///////////////////////////////////////


    // Unit 1 // game_id -> 687




    // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'angry','bored','cold','embarrassed','happy','hot','hungry','nervous',
            'sad','scared','sick','sleep','surprise','thirsty','tried',
        ];

        $audio = $AudioDomain."Grade_3/Lesson_32/Vocabulary/";
        $img = $ImageDomain."Grade_3/Lesson_32/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 688,
                    'a_content' => $val,
                    'a_image' => $img.$this->removeSpace($val).".png",
                    'a_audio' => $audio.$this->removeSpace($val).".mp3"
                ],
            ]);
        }



    // Unit -3 Arrange <rearrange_with_audio>

        $given_ans = [
            ['U','H','Y','G','R','N'],
            ['A','N','Y','G','R'],
            ['S','D','A','R','C','E'],
            ['T','R','E','I','R'],
            ['B','M','E','A','R','R','S','A','S','D','E'],
            ['D','R','O','U','P'],
            ['L','C','O','D'],
            ['A','S','D']
        ];

        $img = $ImageDomain . "Grade_3/Lesson_32/Arrange/";
        $audio = $AudioDomain . "Grade_3/Lesson_32/Arrange/";

        $answers = [
            'HUNGRY', 'ANGRY', 'SCARED', 'TRIED', 'EMBARRASSED','PROUD','COLD','SAD'
        ];


        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 689,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 689,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                    // 'q_content' => $questions[$i],
                    'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }



    // Unit 4 Language and practice <look_and_write> with blank ___.


        $contents = [
            'sad','angry','nervous','hungry','thirsty','embarrassed', 'tired'
        ];

        $questions = [
                "He is crying because ___.",
                "He is shouting because ___.",
                "She is biting her nail because ___.",
                "The cat is eating because ___.",
                "She is drinking because ___.",
                "He is blushing because ___.",
                "She is yawning because ___.",
        ];


        $images = $ImageDomain . "Grade_3/Lesson_32/Write/";
        $audios = $AudioDomain . "Grade_3/Lesson_32/Write/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 690,
                    'round' => $key + 1,
                    'q_image' => $images.$contents[$key].".png",
                    'q_audio' => $audios.$contents[$key].".mp3",
                    'q_content' => $q,
                    'a_content' => $contents[$key],
                ]
            ]);
        }




    // Unit 5 Listening <listening_choosing_answer>


        $images = $ImageDomain . "Grade_3/Lesson_32/Listening/";
        $audios = $AudioDomain . "Grade_3/Lesson_32/Listening/";

        $contents = [
            ['hot', 'sick','cold'],
            ['thirsty', 'hungry','hot'],
            ['hot', 'sick','cold'],
            ['happy', 'nervous','tired'],
            ['embarrassed', 'angry','scared'],
        ];


        $ans = [
            'cold',
            'hungry',
            'sick',
            'happy',
            'angry',
        ];

        foreach ($ans as $key => $value) {

            foreach ($contents[$key] as $j => $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 691,
                        'round' => $key + 1,
                        'q_image' => $images.$val.".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 691,
                    'round' => $key + 1,
                    'q_audio' => $audios.$value.".mp3"
                ]
            ]);


        }




    // Unit 6 Speaking <speaking_and_recording>

    $contents = [
       "crying","shouting","eating","yawning"
    ];

    $Question_contents = [
        "Why are you crying? \n I am crying because I'm sad. \n I alway cry when I sad.",
        "Why are you shouting?",
        "Why are they eating?",
        "Why is she yawning?",
    ];



    $images = $ImageDomain . "Grade_3/Lesson_32/Speaking/";
    $audios = $AudioDomain . "Grade_3/Lesson_32/Speaking/";

    foreach ($contents as $key => $value) {

        DB::table('ans_n_ques')->insert([

            [
                'game_id' => 692,
                'round' => $key + 1,
                'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                'q_content' => $Question_contents[$key],
                'q_audio' => $audio.$this->removeSpace($value).".mp3",
                'q_image' => $images .$this->removeSpace($value) . ".png",
            ]

        ]);
    }




    // Unit 7 Reading  <reading_passage_two>


    $images = $ImageDomain . "Grade_3/Lesson_32/Reading/";
    $audios = $AudioDomain . "Grade_3/Lesson_32/Reading/";

    $para = "A bad day at the office. Mr. Abby is the president of the company. Unfortunately, all the staff is out today. Nobody is here. As a result, Abby is doing everybody’s job. He is having a very bad day at the office today. He is answering the phone because the receptionist is at the dentist’s office. He is typing because the secretary is in bed with the flu. He is reading the email because the office assistant is on vacation. He is cleaning because the cleaner is late. He is having a very bad day today.";

    $given_q = [
        ["His receptionist is answering the phone. ________", "No"],
        ["Mr Abby is typing because his secretary is busy. _____", "No"],
        ["He is cleaning because the cleaner is late today. _____", "No"],
        ["Everybody is at the office. ______.", "No"],
        ["Mr. Abby is having a very good day today. _____ ", "No"],
    ];

    $given_audio = [
        "answer-phone.mp3",
        "secretary.mp3",
        "cleaner.mp3",
        "every.mp3",
        "good-day.mp3",
    ];

    $paraName = "mr-abby.mp3";

        $given_answer = ["Yes","No"];


        for ($i = 0; $i < count($given_q); $i++) {


            foreach ($given_answer as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 693,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 693,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 693,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "A bad day",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }




    // Unit 8 Practice <look_and_write> <write_possible_answer>


        $contents = [
            'happy', 'angry', 'tired', 'bored', 'scare', 'embarrassed', 'nervous', 'sad'
        ];

         $ans = [
            'I always smile when I am happy',
            'I always shout when I am angry',
            'I always yawn when I am tired',
            'I always bite my nail when I am bored',
            'I always is covering my eyes when I am scare',
            'I always cover my eyes when I am embarrassed',
            'I always blush  when I am embarrassed',
            'I cry when I am sad',
        ];


        $images = $ImageDomain . "Grade_3/Lesson_32/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_32/Writing/";

        foreach ($contents as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 694,
                    'round' => $key + 1,
                    'q_image' => $images.$this->removeSpace($val).".png",
                    'q_audio' => $audio.$this->removeSpace($val).".mp3",
                    'a_content' => $ans[$key],
                ]
            ]);
        }




    //// Unit 9 FreePractice <speaking_and_recording>


    $images = $ImageDomain . "Grade_3/Lesson_32/FreePractice/";
    $audios = $AudioDomain . "Grade_3/Lesson_32/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 695,
                'q_content' =>  "Talk about your busy day. \n How do you feel on that day?",
                'q_audio' => $audio."busy-day.mp3",
                'q_image' => $images . "green_cowboy_starfish" . ".png",
            ]

        ]);







    //////////////////////////////////////////// Lesson 33 ///////////////////////////////////////


    // Unit 1 // game_id -> 696




    // Unit 2 Vocabulary  <cl>

        $contents = [
            ['Tall','Short'],
            ['Young','Old'],
            ['Fat','Thing'],
            ['Married','Single'],
            ['New','Old'],
            ['Handsome','Ugly'],
            ['Large','Small'],
            ['Noisy','Quite'],
            ['Expensive','Cheap'],
            ['Rich','Poor'],
            ['Easy','Difficult']
        ];

        $audio = $AudioDomain."Grade_3/Lesson_33/Vocabulary/";
        $img = $ImageDomain."Grade_3/Lesson_33/Vocabulary/";

        foreach ($contents as $key =>  $val) {

            foreach ($val as $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 697,
                        'a_content' => $v,
                        'a_image' => $img.$this->removeSpace($v).".png",
                        'a_audio' => $audio.$this->removeSpace($v).".mp3",
                        'q_content' => $key
                    ],
                ]);
            }


        }




        // Unit 3 Write the opposite <write_opposite>

        $audio = $AudioDomain."Grade_3/Lesson_33/Write_the_opposite/";
        $img = $ImageDomain."Grade_3/Lesson_33/Write_the_opposite/";

        $contents = [
            'noisy','expensive','ugly','fat','married','old','easy','poor'
        ];

        $ans = [
            'quiet','cheap','handsome','thin','single','young','difficult','rich'
        ];

        foreach ($contents as $key => $value) {
            DB::table('ans_n_ques')->insert([
               [
                'game_id' => 698,
                'round' => $key + 1,
                'q_image' => $img.$value.".png",
                'q_audio' => $audio.$value.".mp3",
                'q_content' => $value,
                'a_content' => $ans[$key],
               ],
           ]);
       }


    // Unit -3 Writing (Arranging) <rearrange_with_audio>

        $given_ans = [
            ['Are','they','married','?'],
            ['difficult','English','is','?'],
            ['new','car','is','there','?'],
            ['noisy','he','is','or','quiet','?'],
            ['dog','your','large','?','is'],
            ['busy','you','are','?']
        ];

        $img = $ImageDomain . "Grade_3/Lesson_33/Writing/";
        $audio = $AudioDomain . "Grade_3/Lesson_33/Writing/";

        $answers = [
            'Are they married?', 'is English difficult?', 'is there new car?',
            'Is he noisy or quiet?', 'Is your dog large','Are you busy?'
        ];


        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 699,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 699,
                    'round' => $i + 1,
                    'q_image' => $img . ucfirst(strtolower($answers[$i])) . ".png",
                    // 'q_content' => $questions[$i],
                    'a_audio' => $audio . ucfirst(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i],
                ]
            ]);
        }




    // Unit - 4 Listen and write <listening_choosing_answer>


            $audio_q = [
                'tall','big','ugly','heavy','short'
            ];

            $given_ans = ["Yes","No"];

            $ques = [
                "Mrs. Grant is tall.",
                "Their house is big.",
                "Their cat is ugly.",
                "Mrs. Grant is heavy.",
                "Mrs. Grant is short.",
            ];

            $ans = [
                "Yes","No","No","Yes","Yes"
            ];

            $audio = $AudioDomain."Grade_3/Lesson_33/Listen/";
            $img = $ImageDomain."Grade_3/Lesson_33/Listen/";

            foreach ($audio_q as $key => $val) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 700,
                        'round' => $key + 1,
                        'q_audio' => $audio.$val.".mp3",
                        'q_content' => $given_ans[0],
                        'q_conver'  =>  $ques[$key],
                        'a_content' => $given_ans[0] == $ans[$key] ? true : false
                    ]
                ]);


                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 700,
                        'round'  => $key +  1,
                        'q_content' => $given_ans[1],
                        'a_content' => $given_ans[1] == $ans[$key] ? true : false
                    ]
                ]);


            }



    // Unit 6 Speaking <speaking_and_recording>

        $contents = [
            "new","noisy","cheap","difficult","young"
        ];

        $Question_contents = [
            "Tell me about your computer. \n Is is new? \n Yes,it is new",
            "Tell me about your neighbors? \n Are they noisy?.",
            "Tell me about the restaurant. \n Is it cheap?",
            "Tell me about the questions in your English book?. \n Are they difficult?",
            "Tell me about your boss. \n Is he young?",

        ];



        $images = $ImageDomain . "Grade_3/Lesson_33/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_33/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 701,
                    'round' => $key + 1,
                    'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $audio.$this->removeSpace($value).".mp3",
                    'q_image' => $images .$this->removeSpace($value) . ".png",
                ]

            ]);
        }





    //// Unit 7 FreePractice <speaking_and_recording>


    $images = $ImageDomain . "Grade_3/Lesson_33/FreePractice/";
    $audios = $AudioDomain . "Grade_3/Lesson_33/FreePractice/";


    DB::table('ans_n_ques')->insert([
        [
            'game_id' => 702,
            'q_content' =>  "Use adjectives to talk about your family member. \n your house, your neighbors and your pets? ",
            'q_audio' => $audio."Talk-about-your-family-member-use-adjectives.mp3",
            'q_image' => $images . "green_animal",
        ]

    ]);











        // -----------


        // $q_content_G3_L33_U3 = [
        //     'noisy','expensive','ugly','fat','married','old','easy','poor'
        // ];
        // $q_content_G3_L33_U3_img = ['noisy','expensive','ugly','fat','married','old','easy','poor'];

        // $a_content_G3_L33_U3 = [
        //     'quiet','cheap','handsome','thin','single','young','difficult','rich'
        // ];

        // $audios = [
        //     'noisy--quiet','expensive-cheap','handsome--ugly','fat-thin',
        //     'married--single','young-old','easy-difficult','rich-poor'
        // ];


        // foreach ($q_content_G3_L33_U3 as $key => $value) {
        //      DB::table('ans_n_ques')->insert([
        //         [
        //          'game_id' => 698,
        //          'round' => $key + 1,
        //          'q_image' => $img.$q_content_G3_L33_U3_img[$key].".png",
        //          'q_content' => $value, 'a_content' => $a_content_G3_L33_U3[$key],
        //          'q_audio' => $AudioDomain."Grade_3/Lesson_33/Write_the_Opposite/".$a_content_G3_L33_U3_audio[$key].".mp3"
        //         ],
        //     ]);
        // }





































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
