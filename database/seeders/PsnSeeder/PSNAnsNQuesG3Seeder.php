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
                    // 'q_image' => $images . "character.png", //char
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




    // Unit 2 sub 1 Reading  <Reading_carouse>

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


        $images = $ImageDomain . "Grade_2/Lesson_23/Practice/";
        $audios = $AudioDomain . "Grade_2/Lesson_23/Practice/";

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


        $images = $ImageDomain . "Grade_2/Lesson_24/Practice-1/";
        $audios = $AudioDomain . "Grade_2/Lesson_24/Practice-1/";

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
                    'a_image' => $img.str_replace(' ','-',$val).".png" ,
                    'a_audio' => $audio.str_replace(' ','-',$val).".mp3"
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


        $images = $ImageDomain . "Grade_2/Lesson_25/Practice/";
        $audios = $AudioDomain . "Grade_2/Lesson_25/Practice/";

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
                // 'a_content' => str_replace('-', ' ', $value)
            ]

        ]);
    }



    //// Unit 6 Speaking <speaking_and_recording>

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
                // 'a_content' => str_replace('-', ' ', $value)
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
