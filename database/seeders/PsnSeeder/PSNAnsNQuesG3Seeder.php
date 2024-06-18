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


    private function removeSpace($val)
    {
        return str_replace(' ', '-', $val);
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


        DB::table('ans_n_ques')->insert(['game_id' => 607, 'a_content' => '943947026', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 607, 'a_content' => 'lesson_21 (Global)', 'isLocal' => 0]);


        // Unit 2 sub 1 Reading  <Reading_carousel>

        $contents = [
            'do exercise', 'feed the dog', 'throw the rubbish out', 'clean the apartment', 'fix the tv', 'feed the cat', 'sweep the floor',
            'wash the dishes', 'make the bed', 'wash the clothes', 'do my homework', 'read e-mails', 'paint the bedroom', 'brush the teeth',
            'clean the yard', 'wash the car'
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_21/Reading/";
        $img = $ImageDomain . "Grade_3/Lesson_21/Reading/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 608,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }



        // Unit 2 sub 2 Write <look_and_write>


        $contents = [
            'exercise', 'throw', 'feed', 'do', 'wash-clothes', 'paint', 'wash-car', 'clean',
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
            'do exercise', 'throw', 'feed', 'do', 'wash', 'paint bedroom', 'wash', 'clean',
        ];


        $images = $ImageDomain . "Grade_3/Lesson_21/Write/";
        $audios = $AudioDomain . "Grade_3/Lesson_21/Write/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 609,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
                    'q_audio' => $audios . $contents[$key] . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }




        // Unit 3 Practice <look_and_write>


        $contents = [
            'throw', 'do', 'sweep', 'wash-clothes', 'make-bed', 'paint', 'brush', 'wash-car',
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
            "I throw the rubbish out.",
            "I do my homework in the evening.",
            "I sweep the floor in the afternoon.",
            "I wash the clothes in the afternoon.",
            "I make the bed in the morning.",
            "I paint the bedroom in the afternoon.",
            "I brush my teeth in the morning.",
            "I wash the car in the morning.",
        ];


        $images = $ImageDomain . "Grade_3/Lesson_21/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_21/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 610,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
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
            ["round" => 1, "game_id" => 611, "q_image" =>  null, "q_audio" => $audios . "throw" . ".mp3", "a_content" => null],

            ["round" => 2, "game_id" => 611, "q_image" => $images . "feed.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "game_id" => 611, "q_image" => $images . "fix.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "game_id" => 611, "q_image" => $images . "wash-clothes.png", "q_audio" => null, "a_content" => 1],
            ["round" => 2, "game_id" => 611, "q_image" =>  null, "q_audio" => $audios . "wash-clothes" . ".mp3", "a_content" => null],

            ["round" => 3, "game_id" => 611, "q_image" => $images . "check-email.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "game_id" => 611, "q_image" => $images . "exercise.png", "q_audio" => null, "a_content" => 1],
            ["round" => 3, "game_id" => 611, "q_image" => $images . "paint.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "game_id" => 611, "q_image" =>  null, "q_audio" => $audios . "exercise" . ".mp3", "a_content" => null],

            ["round" => 4, "game_id" => 611, "q_image" => $images . "sweep-boy.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "game_id" => 611, "q_image" => $images . "sweep-lady.png", "q_audio" => null, "a_content" => 1],
            ["round" => 4, "game_id" => 611, "q_image" => $images . "clean-yard.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "game_id" => 611, "q_image" =>  null, "q_audio" => $audios . "sweep-lady" . ".mp3", "a_content" => null],

            ["round" => 5, "game_id" => 611, "q_image" => $images . "brush.png", "q_audio" => null, "a_content" => 1],
            ["round" => 5, "game_id" => 611, "q_image" => $images . "clean-yard.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "game_id" => 611, "q_image" => $images . "sweep-boy.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "game_id" => 611, "q_image" =>  null, "q_audio" => $audios . "brush" . ".mp3", "a_content" => null],

        ]);


        // Unit 5 Speaking <speaking_and_recording>

        $contents = [
            "dog-feeding", "cat-feeding", "check-email", "wash-clothes", "brush-teeth", "make-bed", "wash-car", "clean-yard"
        ];

        $Question_contents = [
            "What do you do in the morning?",
            "What do you do in the evening?",
            "What do you do in the evening?",
            "What do you do in the afternoon?",
            "What do you do in the morning?",
            "What do you do in the morning?",
            "What do you do in the afternoon?",
            "What do you do in the afternoon?",
        ];

        $aud = [
            'morning', 'evening', 'evening', 'afternoon', 'morning', 'morning', 'afternoon', 'afternoon'
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
                    'q_audio' => $audios . $aud[$key] . ".mp3",
                    'q_image' => $images . $value . ".png",
                    'a_content' => str_replace('-', ' ', $value)
                ]

            ]);
        }



        //////////////////////////////////////////// Lesson 22 ///////////////////////////////////////

        // Unit 1 // game_id -> 613



        DB::table('ans_n_ques')->insert(['game_id' => 613, 'a_content' => '943947240', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 613, 'a_content' => 'lesson_22 (Global)', 'isLocal' => 0]);




        // Unit 2 sub 1 Reading  <Reading_carousel>

        $contents = [
            'do physical exercise', 'clean the board', 'raise your hand',
            'listen to songs', 'cross your arms', 'listen to the teacher', 'draw pictures',
            'play with friends', 'water the plants', 'help each other', 'work in groups',
            'clean the classroom', 'work alone', 'play games',
            'study in library', 'work in pair'
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_22/Reading/";
        $img = $ImageDomain . "Grade_3/Lesson_22/Reading/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 614,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }






        // Unit 2 sub 2 Write <look and write> -- without question


        $contents = [
            'listen to songs', 'help each other', 'water the plants', 'draw the pictures', 'work alone',
            'play with friends', 'study in library', 'listen to the teacher',
        ];

        $ans = [
            'Yes, Listen to songs.', 'yes, help each other.', 'Yes, water the plants.',
            'Yes, draw pictures.', 'Yes, work alone.', 'Yes, play games.', 'Yes, study in library.', 'Yes, listen to the teacher.',
        ];


        $images = $ImageDomain . "Grade_3/Lesson_22/Write/";
        $audios = $AudioDomain . "Grade_3/Lesson_22/Write/";

        foreach ($contents as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 615,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($val) . ".png",
                    'q_audio' => $audios . $this->removeSpace($val) . ".mp3",
                    'a_content' => $ans[$key],
                ]
            ]);
        }


        // Unit 3 Practice <look_and_write>


        $contents = [
            'listen', 'exercises', 'water-plant', 'work-pair', 'draw-picture', 'stay-library', 'listen-teacher',
        ];

        $questions = [
            "what do you sometimes do in your class?",
            "what do you always do at school?",
            "what do you usually do at school?",
            "what do you often do in your class?",
            "what do you sometimes do in your class?",
            "what do you always do at school?",
            "what do you often do in your class?",
        ];

        $ans = [
            "I sometimes listen to songs in my class.",
            "We always do physical exercise at school.",
            "I usually water the plants.",
            "I often work in pair.",
            "I sometimes draw pictures in my class.",
            "I always study in the library.",
            "We often work in group in our class.",
        ];

        $q_audio = [
            "sometime", 'alway', 'usually', 'often', 'sometime', 'alway', 'often'
        ];


        $images = $ImageDomain . "Grade_3/Lesson_22/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_22/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 616,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
                    'q_audio' => $audios . $q_audio[$key] . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }





        // Unit 4 Listen <listening_and_choosing_pics_one>


        $images = $ImageDomain . "Grade_3/Lesson_22/Listen/";
        $audios = $AudioDomain . "Grade_3/Lesson_22/Listen/";

        $contents = [
            ['watering', 'listening', 'playing'],
            ['exercise', 'listen-teacher', 'help-each'],
            ['work-pair', 'draw', 'stay-library'],
            ['help-each', 'work-pair', 'play-game'],
            ['help-each', 'work-pair', 'playing'], // play
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
                        'q_image' => $images . $val . ".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 617,
                    'round' => $key + 1,
                    'q_audio' => $audios . $value . ".mp3"
                ]
            ]);
        }






        // Unit 5 Speaking <speaking_and_recording>

        $contents = [
            "draw", "listen-teacher", "play-fris", "plants", "draw-2", "listen", "help", "help-2"
        ];

        $aud = [
            "often", "usually", "alway", "usually", "sometime", "often", "sometime", "alway"
        ];

        $Question_contents = [
            "What do you often do in your class?",
            "What do you usually do at school?",
            "What do you alway do at school?",
            "What do you usually do at school?",
            "What do you sometime do in your class?",
            "What do you often do in your class?",
            "What do you sometime do in your class?",
            "What do you alway do at school?",
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
                    'q_audio' => $audios . $aud[$key] . ".mp3",
                    'q_image' => $images . $value . ".png",
                    'a_content' => str_replace('-', ' ', $value)
                ]

            ]);
        }




        ////  Unit 6 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_3/Lesson_22/Reading_paragraph/";
        $audios = $AudioDomain . "Grade_3/Lesson_22/Reading_paragraph/";

        $para = "Hi,My name is Anna.I am a Grade three student. I am eight years old. I go to a school nearby. We do a lot of things at school. I always study in the library. I sometimes play games with friends. I usually do physical exercise in the morning. All my friends do physical exercise. We love that. I often work alone in class. But sometimes we need to work in groups.";

        $given_q = [
            ["Anna doesn't work in groups.", "True"],
            ["Anna doesn't study in the library.", "False"],
            ["They do physical exercise in the afternoon.", 'False'],
            ["Anna loves doing physical exercise.", "True"],
            ["Anna sometime plays games with friends.", 'True'],
        ];

        $given_audio = [
            "anna-doesnt-work-group.mp3",
            "anna-doesnt-study-library.mp3",
            "they-do-exercise-afternoon.mp3",
            "ann-loves-exercise.mp3",
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
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
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
                'round' => 1,
                'q_content' => $images . "sample.png",
                'a_content' => $sample_content
            ],
        ]);





        //////////////////////////////////////////// Lesson 23 ///////////////////////////////////////

        // Unit 1 // game_id -> 621

        DB::table('ans_n_ques')->insert(['game_id' => 621, 'a_content' => '943947397', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 621, 'a_content' => 'lesson_23 (Global)', 'isLocal' => 0]);



        // Unit 2 sub 1 Reading  <Reading_carousel>

        $contents = [
            'sleeping', 'teaching', 'singing', 'listening', 'eating', 'reading', 'watching',
            'swimming', 'studying', 'drinking', 'playing-piano', 'planting', 'playing-cards',
            'playing-baseball',
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_23/Vocabulary_1/";
        $img = $ImageDomain . "Grade_3/Lesson_23/Vocabulary_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 622,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }





        // Sub -2 Vocabulary <choose_right_sentence>

        $given_ans = [
            ["listening", "swimming", "teaching"],
            ["listening to music", "watching", "studying"],
            ['singing', 'cooking', 'studying'],
            ['drinking', 'sleeping', 'studying'],
            ['drinking', 'swimming', 'eating'],
            ['listening', 'watching', 'studying'],
            ['swimming', 'sleeping', 'studying'],
        ];

        $img = $ImageDomain . "Grade_3/Lesson_23/Vocabulary_2/";
        $audio = $AudioDomain . "Grade_3/Lesson_23/Vocabulary_2/";

        $answers = [
            'teaching', 'listening to music', 'singing', 'drinking', 'eating', 'watching', 'sleeping'
        ];

        $questions = [
            "She is ___", "He is ___", "He is ___", "She is ___", "He is ___", "They are ___", "They are ___"
        ];

        for ($i = 0; $i < count($given_ans); $i++) {



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 623,
                    'round' => $i + 1,
                    'q_image' => $img . $this->removeSpace(ucfirst(strtolower($answers[$i]))) . ".png",
                    'q_content' => $given_ans[$i][0],
                    'q_conver' => $questions[$i],
                    // 'a_audio' => $audio . $this->removeSpace(ucfirst(strtolower($answers[$i]))) . ".mp3",
                    'a_content' => $given_ans[$i][0] == $answers[$i],
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 623,
                    'round' => $i + 1,
                    'q_content' => $given_ans[$i][1],
                    'a_content' => $given_ans[$i][1] == $answers[$i],
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 623,
                    'round' => $i + 1,
                    'q_content' => $given_ans[$i][2],
                    'a_content' => $given_ans[$i][2] == $answers[$i],
                ]
            ]);
        }




        // Unit 3 Practice <look_and_write>


        $contents = [
            "reading",
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
            "I am reading.",
            "He is eating.",
            "She is planting.",
            "I am playing the piano.",
            "They are sleeping.",
            "They are studying.",
            "He is playing baseball.",
        ];

        $ques_aud = ['you', 'he', 'she', 'you', 'they', 'they', 'he'];


        $images = $ImageDomain . "Grade_3/Lesson_23/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_23/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 624,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($contents[$key]) . ".png",
                    'q_audio' => $audios . $this->removeSpace($ques_aud[$key]) . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }



        // Unit 4 Listen <listening_and_choosing_pics_one>


        $images = $ImageDomain . "Grade_3/Lesson_23/Listen/";
        $audios = $AudioDomain . "Grade_3/Lesson_23/Listen/";

        $contents = [
            ['sleeping', 'watching-tv'],
            ['cooking', 'teaching'],
            ['cooking', 'planting'],
            ['studying-library', 'eating'],
            ['watching-tv', 'listening-music'],

        ];


        $ans = [
            'sleeping',
            'teaching',
            'cooking',
            'eating',
            'listening-music'
        ];

        foreach ($ans as $key => $value) {

            foreach ($contents[$key] as $j => $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 625,
                        'round' => $key + 1,
                        'q_image' => $images . $this->removeSpace($val) . ".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 625,
                    'round' => $key + 1,
                    'q_audio' => $audios . $this->removeSpace($value) . ".mp3"
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
            "Where are Mr and Mrs Clark? \n ___ in the dinning room. \n What are they doing? \n ___ ",
            "Where is Karen? \n ___ in the park. \n What is she doing? \n ___ ",
            "Where is Ms Johnson? \n ___ in the classroom.\n What is she doing? \n ___ ",
            "Where are you? \n ___ in the park.\n What are you doing? \n ___ ",
            "Where are you? \n ___ in the library.\n What are you doing? \n ___ ",
            "Where are you? \n ___ in the living room.\n What are you doing? \n ___ ",
            "Where is Marvin? \n ___ in the bathroom.\n What are you doing? \n ___ ",
            "Where is Mark? \n ___ in hospital.\n What is he doing? \n ___ ",


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
                    'q_audio' => $audio . $questionAudio[$key].".mp3",
                ]

            ]);
        }






        //////////////////////////////////////////// Lesson 24 ///////////////////////////////////////

        // Unit 1 // game_id -> 627



        DB::table('ans_n_ques')->insert(['game_id' => 627, 'a_content' => '943947533', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 627, 'a_content' => 'lesson_24 (Global)', 'isLocal' => 0]);





        // Unit 2 sub 1 Reading  <Reading_carouse>

        $contents = [
            'swimming', 'gym', 'computer_games', 'watchTV', 'movies', 'read', 'family',
            'gardening', 'friends', 'piano', 'walk', 'shop', 'park', 'bike', 'skiing',
            'football',
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_24/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_24/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 628,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
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
            "play_piano",
            "play_football",
        ];

        $questions = [
            "What do you do on Saturdays? \n on Saturdays I ___.",
            "What do you do on Tuesday? \n on Tuesday I ___.",
            "What do you do on Thursdays? \n on Thursdays I ___.",
            "What do you do on Wednesdays? \n on Wednesdays I ___.",
            "What do you do on Monday? \n on Monday I ___.",
            "What do you do on Fridays? \n on Fridays I ___.",
            "What do you do on Sunday? \n on Sunday I ___.",
        ];

        $ans = [
            "Yes, I go swimming.",
            "Yes, I play game.",
            "Yes, I read a book.",
            "Yes, I watch TV and sleep.",
            "I ride a bike.",
            "Yes, I play a musical instrument.",
            "Yes, I play football.",
        ];


        $images = $ImageDomain . "Grade_3/Lesson_24/Practice-1/";
        $audios = $AudioDomain . "Grade_3/Lesson_24/Practice-1/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 629,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($contents[$key]) . ".png",
                    'q_audio' => $audios . $this->removeSpace($contents[$key]) . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }



        // Sub -2 Vocabulary <choose_right_sentence>

        $img = $ImageDomain . "Grade_3/Lesson_24/Practice-2/";
        $audio = $AudioDomain . "Grade_3/Lesson_24/Practice-2/";

        $given_answer = [
            ["Do", "Go"],
            ["play", "Go"],
            ["Do", "Play"],
            ["Ride", "Play"],
            ["Do", "Play"],
            ["Do", "Play"],
            ["Play", "Go"],
        ];

        $questions = [
            "What do you ___ on Tuesdays?",
            "I ___ swimming on Mondays.",
            "I ___ computer games on Fridays.",
            "I ___ my bike on Wednesdays.",
            "I ___ a musical instrument on Thursdays.",
            "Do you ___ piano on Saturdays?",
            "I ___ football on Sundays.",
        ];

        $ques_img = [
            "tuesdays",
            "mondays",
            "fridays",
            "wednesdays",
            "thursdays",
            "saturdays",
            "sundays"
        ];

        $answers = [
            'Do', 'Go', 'Play', 'Ride', 'Play', 'Play', 'Play'
        ];

        for ($i = 0; $i < count($given_answer); $i++) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 630,
                    'round' => $i + 1,
                    'q_conver' => $questions[$i],
                    'q_image' => $img . strtolower($ques_img[$i]) . ".png",
                    'q_content' => $given_answer[$i][0],
                    'a_content' => $answers[$i] == $given_answer[$i][0],
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 630,
                    'round' => $i + 1,
                    'q_content' => $given_answer[$i][1],
                    'a_content' => $answers[$i] == $given_answer[$i][1],
                ]
            ]);
        }



        // Unit 4 Listen <Matching>

        $contents = [
            ['sundays', 'tuesdays', 'saturdays', 'fridays'],

        ];

        $randomValues = [
            ['swimming', 'football', 'gardening', 'piano'],
        ];

        $randContents = [
            ['sundays', 'saturdays', 'fridays', 'tuesdays']
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


            foreach ($randomValues[$i] as $k => $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 631,
                        'round' => $i + 1,
                        'q_content' => ucfirst($randContents[$i][$k]),
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
            "What do you do in the Saturday?",
            "What do you do in the Friday?",
            "What do you do in the Monday?",
            "What do you do in the Wednesday?",
            "What do you do in the Tuesdays?",
            "What do you do in the Sunday?",
            "What do you do in the Thursday?",
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
                    'q_audio' => $audios . $contents[$key] . ".mp3",
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
            ["On Friday, I ___.", "Watch TV and read a book"],
            ["On Tuesday, I ___.", "Go swimming"],
            ["On Monday, I ___ .", 'Play Tennis'],
            ["On Thursday, I ___ .", 'Ride my bike'],
            ["On Wednesday, I ___ .", 'Watch TV and read a book'],
            ["On Sunday, I ___ .", 'Watch TV and play computer games'],
            ["On Saturday, I ___ .", 'Play football with friends at the park'],

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
            ['Watch TV and read a book', 'Go swimming', 'Ride my bike'],
            ['Play Tennis', 'Go swimming', 'Ride my bike'],
            ['Play Tennis', 'Go swimming', 'Watch TV and read a book'],
            ['Watch TV and read a book', 'Ride my bike', 'Watch TV and play computer games'],
            ['Watch TV and read a book', 'Go swimming', 'Watch TV and play computer games'],
            ['Play football with friends at the park', 'Ride my bike', 'Watch TV and play computer games'],
            ['Play football with friends at the park', 'Ride my bike', 'Watch TV and play computer games'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 633,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
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
                'q_content' => $images . "sample.png",
                'a_content' => $sample_content
            ],
        ]);






        //////////////////////////////////////////// Lesson 25 ///////////////////////////////////////

        // Unit 1 // game_id -> 635



        DB::table('ans_n_ques')->insert(['game_id' => 635, 'a_content' => '943947705', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 635, 'a_content' => 'lesson_25 (Global)', 'isLocal' => 0]);



        // Unit 2 sub 1 Reading  <Reading_carouse>

        $contents = [
            'act', 'swim', 'dance', 'do ballet', 'cook', 'skip a rope', 'sing a song', 'draw', 'speak english', 'bake', 'ride',
            'play a music', 'drive', 'fix', 'build'
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_25/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_25/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 636,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }


        // Unit 3 Practice <look_and_write>


        $contents = [
            'skate', 'teach', 'swim', 'bike', 'cake', 'ski', 'bus', 'cook',
        ];

        $questions = [
            "Can he skate?",
            "Can she teach?",
            "Can they swim?",
            "Can he ride a bike?",
            "Can he bake cakes?",
            "Can they ski?",
            "Can you drive a bus?",
            "Can he cook?",
        ];

        $ans = [
            "No, he can't.",
            "Yes, she can.",
            "Yes, they can.",
            "Yes, he can.",
            "Yes, he can.",
            "No, they can't.",
            "No, I can't.",
            "No, he can't."
        ];


        $images = $ImageDomain . "Grade_3/Lesson_25/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_25/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 637,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
                    'q_audio' => $audios . $contents[$key] . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }



        // Unit - 4 Listen and write <listening_choosing_answer>

        // $audio_q = [
        //     'piano','tennis','swim','sing','car'
        // ];

        $given_ans = ["can", "can't"];

        $ques = [
            "I _____ play piano.",
            "I _____ play tennis.",
            "I _____ play swim.",
            "I _____ play sing.",
            "I _____ drive a car.",
        ];

        $ans = [
            "can", "can't", "can", "can", "can't"
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_25/Listening/";
        $img = $ImageDomain . "Grade_3/Lesson_25/Listening/";

        foreach ($ques as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 638,
                    'round' => $key + 1,
                    'q_audio' => $audio . "Hi-anna-what-can-you-do.mp3",
                    'q_content' => $given_ans[0],
                    'q_conver'  =>  $val,
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
            "Can you bake a cake?",
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
                    'q_audio' => $audios . $contents[$key] . ".mp3",
                    'q_image' => $images . $value . ".png",
                ]

            ]);
        }



        //// Unit 6 FreePractice <speaking_and_recording>

        $contents = [
            "green_animal_round"
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
                    'q_audio' => $audios . $aud,
                    'q_image' => $images . $value . ".png",
                ]

            ]);
        }






        //////////////////////////////////////////// Lesson 26 ///////////////////////////////////////

        // Unit 1 // game_id -> 641


        DB::table('ans_n_ques')->insert(['game_id' => 641, 'a_content' => '943947961', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 641, 'a_content' => 'lesson_26  (Global)', 'isLocal' => 0]);


        // Unit 2 sub 1 Reading  <Reading_carouse>

        $contents = [
            'eat dinner', 'talk on the phone', 'do homework', 'take a bath', 'study english', 'play video games', 'play violin',
            'listen music', 'switch off light', 'go to bed', 'comb hair', 'get dressed', 'eat breakfast', 'brush teeth', 'wash face', 'get up'
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_26/Vocabulary_1/";
        $img = $ImageDomain . "Grade_3/Lesson_26/Vocabulary_1/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 642,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
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

        $ans = [
            'take a bath',
            'play violin',
            'do homework',
            'play video games',
            'listen to music',
            'get up',
            'eat breakfast',
            'comb my hair'
        ];


        $images = $ImageDomain . "Grade_3/Lesson_26/Vocabulary_2/";
        $audios = $AudioDomain . "Grade_3/Lesson_26/Vocabulary_2/";

        foreach ($contents as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 643,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($q) . ".png",
                    'q_audio' => $audios . $this->removeSpace($q) . ".mp3",
                    'q_content' => null,
                    'a_content' => $ans[$key],
                ]
            ]);
        }






        // Unit 3 Practice <look_and_write> // Uncertain answer and single question


        $contents = [
            "2-45",
            "11-15",
            "1-30",
            "2-10",
            "9-45",
            "10-20",
            "6-30",
            "7",
        ];

        $questions = "What time is it?";


        $ans = [
            "It's 2:45.",
            "It's 11:15.",
            "It is 1:30.",
            "It's 2:10.",
            "It's 9:45.",
            "It's 10:20.",
            "It's 6:30.",
            "It's 7:00."
        ];


        $images = $ImageDomain . "Grade_3/Lesson_26/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_26/Practice/";

        foreach ($contents as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 644,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($q) . ".png",
                    'q_audio' => $audios . $this->removeSpace($q) . ".mp3",
                    'q_content' => "What time is it?",
                    'a_content' => $ans[$key],
                ]
            ]);
        }




        // Unit 4 Listen <listening_and_choosing_pics_one>


        $images = $ImageDomain . "Grade_3/Lesson_26/Listening/";
        $audios = $AudioDomain . "Grade_3/Lesson_26/Listening/";

        $contents = [
            ['9-35', '6-30', '4-00'],
            ['6-40', '7-00', '2-10'],
            ['6-30', '7-00', '10-20'],
            ['6-30', '2-10', '10-20'],
        ];


        $ans = [
            '4-00',
            '6-40',
            '7-00',
            '6-30',
        ];

        foreach ($ans as $key => $value) {

            foreach ($contents[$key] as $j => $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 645,
                        'round' => $key + 1,
                        'q_image' => $images . $val . ".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 645,
                    'round' => $key + 1,
                    'q_audio' => $audios . $value . ".mp3"
                ]
            ]);
        }



        // Unit 5 Speaking <speaking_and_recording>

        $contents = [
            "sleep", "watch TV", "do homework", "wash dishes", "singing", "make breakfast", "get up"
        ];

        $Question_contents = [
            "What does she do at 8 o'clock at night?",
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
                    'q_audio' => $audios.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                    'a_content' => $value
                ]

            ]);
        }


        // Unit 6 Reading  <reading_passage_two>


        // $images = $ImageDomain . "Grade_3/Lesson_26/Reading/";
        // $audios = $AudioDomain . "Grade_3/Lesson_26/Reading/";

        // $para = "Hi, My name is Toby. I am 8 years old. I am a Grade 3 student. Today is very busy. In the morning I get up at 6:30. And I brush my teeth, take a bath and eat breakfast at 7:00. Then I get dressed, and I go to school. In the afternoon I eat my lunch at 12:30. And I play with my friends at school. I come back home at 3:00 in the afternoon. I do my homework at 5:00,and  I eat dinner at 6:00 in the evening. After dinner, I watch TV for a while. I go to bed at 8:00. I have a very busy day.";

        // $given_q = [
        //     ["What does he do after lunch at school?", "I play with my friends at school"],
        //     ["What time does he eat dinner?", "I watch TV for a while"],
        //     ["What time does he go to bed?", "8 o'clock"],
        //     ["What time does he eat breakfast in the morning?", "7 o'clock"],
        //     ["What time does Toby get up in the morning?", "6:30"],
        // ];

        // $given_audio = [
        //     "toby-lunch.mp3",
        //     "toby-dinner.mp3",
        //     "toby-bed.mp3",
        //     "toby-breakfast.mp3",
        //     "toby-get-up.mp3",
        // ];

        // $paraName = "Hi-my-name-is-Toby.mp3";

        //  DB::table('ans_n_ques')->insert([
        //         [
        //             'round' => 1,
        //             'game_id' => 647,
        //             'q_audio' => $audios . $paraName,
        //             'q_content' => "My busy day",
        //             'q_conver' => $para,
        //             'background' => $images . "bg.png"
        //         ]
        //     ]);

        //   for ($i = 0; $i < count($given_q); $i++) {

        //     DB::table('ans_n_ques')->insert([
        //         [
        //             'round' => $i + 1,
        //             'game_id' => 647,
        //             'q_audio' => $audios . $given_audio[$i],
        //             'q_conver' => $given_q[$i][0],    //giver Q
        //             'a_content' => $given_q[$i][1],    //ans
        //         ]
        //     ]);

        // }


        ///////////////////////////////////////////////////////////////////

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
                    // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                    // 'q_content' => $value,
                    'a_content' =>  $given_q[$i][1]
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 647,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
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


        ///////////////////////////////////////////////////////////////////

        // Unit 7 Writing <writing_topic>


        $images = $ImageDomain . "Grade_3/Lesson_27/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_27/Writing/";

        $sample_content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum ";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 648,
                'q_content' => $images . "sample.png",
                'a_content' => $sample_content
            ],
        ]);



        //// Unit 8 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_26/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_26/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 649,
                'round' => 1,
                'q_content' =>  "Talk about your daily activities. \n What time do you do these activities?",
                'q_audio' => $audios . "Talk-about-your-daily-activities.mp3",
                'q_image' => $images . "green_animal_round" . ".png",
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


        DB::table('ans_n_ques')->insert(['game_id' => 650, 'a_content' => '943948859', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 650, 'a_content' => 'data (Global)', 'isLocal' => 0]);




        // Unit 2  Vocabulary  <Reading_carouse>

        $contents = [
            "breakfast", "school", "housework", "bath", "watch_tv", "get_up", "home", "study", "bed",
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_27/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_27/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 651,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }






        // Unit 3 Practice <look_and_write> -- without question (with Answer)


        $contents = [
            'I always go to school at 8:25.',
            'I usually have breakfast at 7:30.',
            "I often do the housework at 4:30.",
            "I usually go home at 3:45.",
            "I sometime watch TV at 8:30.",
            "I usually study my lesson at 7:30.",
            "I usually go to bed at 9:00.",
            "I often have a bath at 6:15.",
            "I usually get up at 6:00.",
        ];

        $contents_img = [
            'I always go to school at 8:25',
            'I usually have breakfast at 7:30',
            "I often do the housework at 4:30",
            "I usually go home at 3:45",
            "I sometime watch TV at 8:30",
            "I usually study my lesson at 7:30",
            "I usually go to bed at 9:00",
            "I often have a bath at 6:15",
            "I usually get up at 6:00",
        ];

        $ans = [
            "What time do you always go to school?",
            "What time do you usually have breakfast?",
            "What time do you often do the housework?",
            "What time do you usually go home?",
            "What time do you sometimes watch TV?",
            "What time do you often study your lessons?",
            "What time do you usually go to bed?",
            "What time do you often have a bath?",
            "What time do you usually get up?"
        ];
        $ans_audios = [
            "What time do you always go to school",
            "What time do you usually have breakfast",
            "What time do you often do the housework",
            "What time do you usually go home",
            "What time do you sometimes watch TV",
            "What time do you often study your lessons",
            "What time do you usually go to bed",
            "What time do you often have a bath",
            "What time do you usually get up"
        ];


        $images = $ImageDomain . "Grade_3/Lesson_27/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_27/Practice/";

        foreach ($contents as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 652,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($contents_img[$key]) . ".png",
                    'q_audio' => $audios . $this->removeSpace($ans_audios[$key]) . ".mp3",
                    'q_content' => $val,
                    'a_content' => $ans[$key],
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
            'What time do you sometimes do the housework?',
            'What time do you often go to the movie?',

        ];

        $given_ques = [
            ["6:30", "6:20", "6:45"],
            ["6:15", "6:50", "6:45"],
            ["7:50", "7:20", "7:15"],
            ["4:35", "4:25", "4:45"],
            ["3:30", "4:30", "4:10"],

        ];

        $ans = [
            "6:30", "6:50", "7:15", "4:45", "3:30"
        ];


        $audio = $AudioDomain . "Grade_3/Lesson_27/Listen/";
        $img = $ImageDomain . "Grade_3/Lesson_27/Listen/";



        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 653,
                    'round' => $key + 1,
                    'q_audio' => $audio . $audio_q[$key] . ".mp3",
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
            "bath", "school", "watch", "study", "bed", "breakfast", "morning"
        ];

        $Question_contents = [
            "What time do you usually have a bath",
            "What time do you always go to school",
            "What time do you sometimes watch TV",
            "What time do you usually study the lesson",
            "What time do you always go to bed",
            "What time do you always have  breakfast",
            "What time do you always get up in the morning"

        ];

        $images = $ImageDomain . "Grade_3/Lesson_27/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_27/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 654,
                    'round' => $key + 1,
                    'round_instruction' => $audio . $this->removeSpace($Question_contents[$key]) . ".mp3",
                    'q_content' => $Question_contents[$key] . " ?",
                    'q_audio' => $audio . $contents[$key] . ".mp3",
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
                'round' => 1,
                'q_content' =>  "Talk about yourself. \n What do you do at home everyday?",
                'q_audio' => $audios . "Talk-about-your-do-at-home.mp3",
                'q_image' => $images . "green_animal_round.png",
            ]

        ]);






        //////////////////////////////////////////// Lesson 28 ///////////////////////////////////////

        // Unit 1 // game_id -> 656


        DB::table('ans_n_ques')->insert(['game_id' => 656, 'a_content' => '943949093', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 656, 'a_content' => 'data(Global)', 'isLocal' => 0]);




        // Unit 2  Vocabulary  <Reading_carouse>

        $contents = [
            "acting", "clap", "cry", "dance", "fishing", "fly-kite", "jump", "plant", "guitar", "run", "sing", "skip-rope", "sleep", "throw", "walk", "wash-car"
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_28/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_28/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 657,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }


        // Unit 3 Practice <look_and_write>


        $contents = [
            'playing guitar', 'throw a ball', 'wash her car', 'fishing', 'sleeping', 'acting', 'planting',
        ];


        $questions = [
            "What is he doing?",
            "What is she doing?",
            "What is she doing?",
            "What is she doing?",
            "What are you doing?",
            "What is she doing?",
            "What is she doing?",
        ];

        $ans = [
            "He is playing the guitar.",
            "She is throwing a ball.",
            "She is washing the car.",
            "she is fishing.",
            "I am sleeping.",
            "She is acting in a play.",
            "she is planting flowers."
        ];


        $images = $ImageDomain . "Grade_3/Lesson_28/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_28/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 658,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($contents[$key]) . ".png",
                    // 'q_audio' => $audios . $this->removeSpace(str_replace('?', '', $q)) . ".mp3",
                    'q_audio' => $audios . $this->removeSpace(str_replace('.', '', $ans[$key])) . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }




        // Unit 4 Listen <listening_choosing_answer>



        $images = $ImageDomain . "Grade_3/Lesson_28/Listen/";
        $audios = $AudioDomain . "Grade_3/Lesson_28/Listen/";

        $contents = [
            ['wash her car', 'fishing', 'walking'],
            ['sleeping', 'playing guitar', 'running'],
            ['dancing', 'running', 'singing'],
            ['fishing', 'washing', 'throwing'],
            ['wash her car', 'planting', 'walking'],
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
                        'q_image' => $images . $this->removeSpace($val) . ".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 659,
                    'round' => $key + 1,
                    'q_audio' => $audios . $this->removeSpace($value) . ".mp3"
                ]
            ]);
        }




        // Unit 5 Speaking <speaking_and_recording>

        $contents = [
            "wash", "cry", "play-guitar", "dance", "acting", "baking", "planting-tree", "riding-bike"
        ];

        $Question_contents = [
            "Where is your daughter? \n What is she doing?",
            "Where are your grandparents? \n What are they doing?",
            "Where is your nephew? \n What is he doing?",
            "Where are your friends? \n What are they doing?",
            "Where is your niece? \n What is she doing?",
            "Where are your brother and sister? \n What are they doing?",
            "Where is your wife? \n What is she doing?",
            "Where is your mother? \n What is she doing?",
        ];

        $round_instructions = [
            "daughter", 'grandparents', 'nephew', 'friends', 'niece', 'brother-sister', 'wife', 'mother'
        ];

        $images = $ImageDomain . "Grade_3/Lesson_28/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_28/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 660,
                    'round' => $key + 1,
                    'round_instruction' => $audios . $this->removeSpace($round_instructions[$key]) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios. $value .".mp3",
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
            ["His father is reading a book in the living room. ______", "Yes"],
            ["His mother is cooking lunch in the kitchen. ______", "No"],
        ];

        $given_audio = [
            "abby-sis.mp3",
            "anna-bro.mp3",
            "abby.mp3",
            "abby-father.mp3",
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
                'q_content' => $images . "sample.png",
                'a_content' => $sample_content
            ],
        ]);





        //// Unit 8 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_28/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_28/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 663,
                'round' => 1,
                'q_content' =>  "Talk about your family members. \n Where are they now? What are they doing? ",
                'q_audio' => $audios . "Talk-about-your-do-at-home.mp3",
                'q_image' => $images . "green_animal_round.png",
            ]

        ]);








        //////////////////////////////////////////// Lesson 29 ///////////////////////////////////////

        // Unit 1 // game_id -> 664



        DB::table('ans_n_ques')->insert(['game_id' => 664, 'a_content' => '943949204', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 664, 'a_content' => 'data(Global)', 'isLocal' => 0]);



        // Unit 2 sub 1 Reading  <Reading_carouse>

        $contents = [
            'dancing', 'doing-yoga', 'drawing', 'eating-out', 'shopping', 'catch', 'football',
            'hide-and-seek', 'hopscotch', 'marbles', 'tag', 'guitar', 'toy', 'reading', 'walk-dog',
            'watch-tv',
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_29/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_29/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 665,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }



        // Unit - 3 Choose <look_and_choose>

        $audio = $AudioDomain . "Grade_3/Lesson_29/Choose/";
        $img = $ImageDomain . "Grade_3/Lesson_29/Choose/";


        $given_ans = [
            ['Going Shopping', 'Dancing', 'Reading'],
            ['Walking dog', 'Playing the guitar', 'Doing yoga'],
            ['Playing marbles', 'Writing', 'Eating  out'],
            ['Playing marbles', 'Playing catch', 'Doing yoga'],
            ['Playing with toys', 'Watching Tv', 'Playing Tag'],
            ['Playing with toys', 'Walking hopscotch', 'Playing football'],
            ['Playing with toys', 'Walking dog', 'Playing football'],
            ['Eating out', 'Reading', 'Playing hopscotch'],
            ['Eating out', 'Reading', 'Walking dog'],
            ['Going Shopping', 'Dancing', 'Reading'],
        ];

        $ans = [
            'Going Shopping', 'Playing the guitar', 'Playing marbles',
            'Doing yoga', 'Watching Tv', 'Playing football', 'Playing with toys',
            'Eating out', 'Reading', 'Dancing'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 666,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($ans[$key]) . ".png",
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




        // Unit -4 Practice <rearrange_with_audio>

        $given_ans = [
            ["doing?", "What", "they", "are"],
            ["she", "What", "doing?", "is"],
            ["you", 'What', 'doing?', 'are'],
            ['he', 'What', 'doing?', 'is'],
            ['she', 'What', 'doing?', 'is'],
            ['they', 'What', 'doing?', 'are'],
            ['he', 'What', 'doing?', 'is'],
        ];

        $img = $ImageDomain . "Grade_3/Lesson_29/Practice/";
        $audio = $AudioDomain . "Grade_3/Lesson_29/Practice/";

        $answers = [
            'What are they doing', 'What is she doing',
            'What are you doing', 'What is he doing',
            'What is she doing', 'What are they doing',
            'What is he doing'
        ];

        $ques_img = [
            'shopping', 'play-toy', 'guitar', 'watch-tv', 'dancing',
            'hopscotch', 'reading'
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
                    'a_audio' => $audio . ucfirst(strtolower($this->removeSpace($answers[$i]))) . ".mp3",
                    'a_content' => $answers[$i] . "?",
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
            ["going shopping", "playing the guitar", "playing tag"],
            ["dancing", "playing the guitar", "walking dog"],
            ["dancing", "playing the guitar", "waling dog"],
            ["going shopping", "Playing marbles", "playing tag"],
            ["playing football", "drawing", "dancing"],


        ];

        $ans = [
            "going shopping", "playing the guitar", "dancing", "playing tag", "drawing"
        ];


        $audio = $AudioDomain . "Grade_3/Lesson_29/Listen/";
        $img = $ImageDomain . "Grade_3/Lesson_29/Listen/";



        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 668,
                    'round' => $key + 1,
                    'q_audio' => $audio . $this->removeSpace($ans[$key]) . ".mp3",
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
            "reading", "yoga", "eating out", "hopscotch", "playing guitar", "playing with toy", "painting", "walk with dog"
        ];

        $Question_contents = [
            "What are you doing? \n I am reading.",
            "What is he doing?",
            "What are they doing?",
            "What are they doing?",
            "What is he doing?",
            "What is she doing?",
            "What is she doing?",
            "What are you doing?",
        ];

        $answers = [
            'What are you doing',
            'What is he doing',
            'What are they doing',
            'What are they doing',
            'What is he doing',
            'What is she doing',
            'What is she doing',
            'What are you doing',
        ];



        $images = $ImageDomain . "Grade_3/Lesson_29/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_29/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 669,
                    'round' => $key + 1,
                    'round_instruction' => $audios . $this->removeSpace($answers[$key]) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }



        //// Unit 8 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_29/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_29/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 670,
                'round' => 1,
                // 'q_conver' =>  "Talk about friends. Where are they \n now? What are they doing? ",
                'q_conver' =>  $images . "text-box.png",
                'q_audio' => $audios . "Talk-about-friends.mp3",
                'q_image' => $images . "girl_chara2.png",
            ]

        ]);








        //////////////////////////////////////////// Lesson 30 ///////////////////////////////////////

        // Unit 1 // game_id -> 671

        DB::table('ans_n_ques')->insert(['game_id' => 671, 'a_content' => '943949308', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 671, 'a_content' => 'data(Global)', 'isLocal' => 0]);

        // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'camping', 'cycling', 'exercise', 'fishing', 'flying-kite', 'gardening',
            'grocery shopping', 'picnic', 'painting', 'badminton', 'football', 'hide-seek',
            'skate', 'skipping-rope', 'take-photo', 'traveling',
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_30/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_30/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 672,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }



        // Unit 3 Practice <look_and_write>


        $contents = [
            'badminton', 'hide and seek', 'painting', 'camping', 'gardening', 'traveling', 'exercise', 'picnic',
            'cycling', 'grocery shopping',
        ];

        $ans = [
            'playing badminton', 'playing hide and seek', 'painting', 'camping',
            'gardening', 'travelling', 'doing exercise', 'having a picnic',
            'cycling', 'grocery shopping',
        ];


        $images = $ImageDomain . "Grade_3/Lesson_30/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_30/Practice/";

        foreach ($contents as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 673,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($val) . ".png",
                    'q_audio' => $audios.$this->removeSpace($val).".mp3",
                    'a_content' => $ans[$key],
                ]
            ]);
        }



        // Unit 4 Answer the question <look_and_write> yes or no


        $contents = [
            'traveling', 'gardener', 'kite', 'hide-seek', 'selfie', 'picnic', 'cycling'
        ];

        $questions = [
            "Is he travelling?",
            "Are you gardening?",
            "Is he flying a kite?",
            "Are they playing hide and seek?",
            "Are you taking photos?",
            "Are they having a picnic?",
            "Is she cycling?",
        ];

        // $ans = ["No","No","Yes","Yes","Yes","Yes","Yes",];
        $ans = [
            "No, he isn't. He isn't travelling.",
            "No, I'm not. I'm not gardening.",
            "Yes, he is. He is flying a kite.",
            "Yes, they are. They are playing hide and seek.",
            "yes, I am. I am taking photos.",
            "Yes, they are. They are having a picnic.",
            "Yes, she is. She is cycling."
        ];


        $images = $ImageDomain . "Grade_3/Lesson_30/Answer_Question/";
        $audios = $AudioDomain . "Grade_3/Lesson_30/Answer_Question/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 674,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
                    'q_audio' => $audios . $contents[$key] . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }




        // Unit 5 Listening <listening_choosing_answer>


        $images = $ImageDomain . "Grade_3/Lesson_30/Listening/";
        $audios = $AudioDomain . "Grade_3/Lesson_30/Listening/";

        $contents = [
            ['cycling', 'gardening', 'fishing'],
            ['skipping rope', 'gardening', 'play badminton'],
            ['gardening', 'playing hide and seek', 'having picnic'],
            ['having picnic', 'grocery shopping', 'playing hide and seek'],
            ['skipping rope', 'cycling', 'playing football'],
        ];


        $ans = [
            'gardening',
            'skipping rope',
            'having picnic',
            'playing hide and seek',
            'playing football',
        ];

        foreach ($contents as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 675,
                    'round' => $key + 1,
                    'q_audio' => $audios . $this->removeSpace($ans[$key]) . ".mp3",
                    'q_content' => $val[0],
                    'a_content' => $val[0] == $ans[$key] ? true : false
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 675,
                    'round'  => $key +  1,
                    'q_content' => $val[1],
                    'a_content' => $val[1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 675,
                    'round'  => $key +  1,
                    'q_content' => $val[2],
                    'a_content' => $val[2] == $ans[$key] ? true : false
                ]
            ]);
        }



        // Unit 6 Speaking <speaking_and_recording>

        $contents = [
            "yoga", "shopping", "fishing", "skip-rope", "picnic", "traveling", "gardening"
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

        $round_instructions = [
            "Do you like doing yoga",
            "Is he grocery shopping",
            "Are you fishing",
            "Is she skipping rope",
            "Are they having a picnic",
            "Is he traveling",
            "Are you gardening",
        ];



        $images = $ImageDomain . "Grade_3/Lesson_30/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_30/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 676,
                    'round' => $key + 1,
                    'round_instruction' => $audios . $this->removeSpace($round_instructions[$key]) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }






        // Unit 7 Reading  <reading_passage_two>


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

        $given_answer = ["Yes", "No"];


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


        // Unit 8 Writing <writing_topic>


        $images = $ImageDomain . "Grade_3/Lesson_30/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_30/Writing/";

        $sample_content = "I am Jenny. Today is my birthday. I am eight years old today. We are having a birthday party. All my friends are here. My mother is preparing cake and ice-cream. My family and my friends will sing ‘ Happy Birthday’ song for me. My friends are playing games now. They all are very happy. But my brother, Toby is still sleeping. My father brought a lot of presents for me. The party will start at 9:00 o’clock. I can’t wait. Today is a happy day for me.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 678,
                // 'q_content' => $images."sample.png",
                'a_content' => $sample_content
            ],
        ]);



        //// Unit 9 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_30/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_30/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 679,
                'round' => 1,
                // 'q_conver' =>  "What do you usually do on birthday?",
                'q_conver' =>  $images . "text-box.png",
                'q_audio' => $audios . "What-do-u-usually.mp3",
                'q_image' => $images . "girl_chara2" . ".png",
            ]

        ]);




        //////////////////////////////////////////// Lesson 31 ///////////////////////////////////////

        // Unit 1 // game_id -> 680


        DB::table('ans_n_ques')->insert(['game_id' => 680, 'a_content' => '943949852', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 680, 'a_content' => 'data(Global)', 'isLocal' => 0]);


        // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'collect-thing', 'doing-yoga', 'going-dancing', 'hiking', 'jogging', 'making-origami',
            'mountain-climbing', 'photography', 'volleyball', 'seeing-movie', 'seeing-play', 'skating',
            'skiing', 'traveling', 'writing-stories'
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_31/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_31/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 681,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }


        // Unit 3 Fill in the blank <look_and_write_two>

        $contents = [
            'going dancing', 'doing yoga', 'jogging', 'travelling', 'mountain climbing',
        ];

        $questions = [
            "g___ d___.",
            "d___ y___.",
            "J___",
            "t___",
            "m___ c___"
        ];

        $images = $ImageDomain . "Grade_3/Lesson_31/Fill_in_the_blank/";
        $audios = $AudioDomain . "Grade_3/Lesson_31/Fill_in_the_blank/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 682,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($contents[$key]) . ".png",
                    'q_audio' => $audios . $this->removeSpace($contents[$key]) . ".mp3",
                    'q_content' => $q,
                    'a_content' => $contents[$key],
                ]
            ]);
        }




        // Unit 4 Practice <look_and_write> yes or no


        $contents = [
            'movie',
            //  'swimming',
            'music', 'stories', 'travelling'
        ];

        $questions = [
            "Do they like seeing a movie?",
            // "Does he like swimming?",
            "Does he like listening music?",
            "Do you like writing stories?",
            "Do you like travelling?",
        ];

        $ans = [
            "Yes, they do. They like seeing a movie.",
            // "No, he doesn't. He don't like swimming.",
            "No, he doesn't. He doesn't like listening to music.",
            "No, I don't. I don't like writing stories.",
            "Yes, I do. I like travelling.",
        ];


        $images = $ImageDomain . "Grade_3/Lesson_31/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_31/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 683,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
                    'q_audio' => $audios . $contents[$key] . ".mp3",
                    // 'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }



        // Unit - 5 Listen and write <listening_choosing_answer>

        $audio_q = [
            'travelling', 'music', 'origami', 'does-not-like-traveling', 'mountain'
        ];

        $given_ans = ["Yes", "No"];

        $ques = [
            "Jane like travelling.",
            "Jane doesn't like listening to music.",
            "They both like making origami.",
            "Amy doesn't like travelling.",
            "Amy likes mountain climbing.",
        ];

        $ans = [
            "Yes", "Yes", "No", "No", "Yes"
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_31/Listen/";
        $img = $ImageDomain . "Grade_3/Lesson_31/Listen/";

        foreach ($audio_q as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 684,
                    'round' => $key + 1,
                    'q_audio' => $audio . "Listening.mp3",
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
            "yoga", "mountain", "origami", "writing", "movie", "jogging"
        ];

        $Question_contents = [
            "Do you like doing yoga?",
            "Does she like mountain climbing?",
            "Does he like making origami?",
            "Does he like writing stories?",
            "Do they like seeing  a movie?",
            "Do you like jogging?",
        ];

        $example685 = [
            "Yes I like doing yoga.", null, null, null, null, null
        ];

        $images = $ImageDomain . "Grade_3/Lesson_31/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_31/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 685,
                    'round' => $key + 1,
                    "a_content" => $example685[$key],
                    'round_instruction' => $audios . $this->removeSpace($value) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }


        //// Unit 7 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_31/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_31/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 686,
                'round' => 1,
                'q_content' =>  "What are your hobbies? \n What do you like doing in your free time? \n What don't you like doing?",
                'q_audio' => $audios . "What-are-ur-hobbies.mp3",
                'q_image' => $images . "green_animal_round" . ".png",
            ]

        ]);





        //////////////////////////////////////////// Lesson 32 ///////////////////////////////////////


        // Unit 1 // game_id -> 687


        DB::table('ans_n_ques')->insert(['game_id' => 687, 'a_content' => '943950027', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 687, 'a_content' => 'data(Global)', 'isLocal' => 0]);


        // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'angry', 'bored', 'cold', 'embarrassed', 'happy', 'hot', 'hungry', 'nervous',
            'sad', 'scared', 'sick', 'sleepy', 'surprised', 'thirsty', 'tired',
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_32/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_32/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 688,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }



        // Unit -3 Arrange <rearrange_with_audio>

        $given_ans = [
            ['U', 'H', 'Y', 'G', 'R', 'N'],
            ['A', 'N', 'Y', 'G', 'R'],
            ['S', 'D', 'A', 'R', 'C', 'E'],
            ['T', 'R', 'E', 'I', 'D'],
            ['B', 'M', 'E', 'A', 'R', 'R', 'S', 'A', 'S', 'D', 'E'],
            ['L', 'C', 'O', 'D'],
            ['A', 'S', 'D'],
            // ['D','R','O','U','P'],
        ];

        $img = $ImageDomain . "Grade_3/Lesson_32/Arrange/";
        $audio = $AudioDomain . "Grade_3/Lesson_32/Arrange/";

        $answers = [
            'HUNGRY', 'ANGRY', 'SCARED', 'TIRED', 'EMBARRASSED', 'COLD', 'SAD'
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
            'sad', 'angry', 'nervous', 'hungry', 'thirsty', 'embarrassed', 'tired'
        ];

        $ans690 = [
            "he is sad.",
            "he is angry.",
            "she is nervous.",
            "it is hungry.",
            "she is thirsty.",
            "he is embarrassed.",
            "she is tired."
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


        $images = $ImageDomain . "Grade_3/Lesson_32/Language_and_practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_32/Language_and_practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 690,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
                    'q_audio' => $audios . $contents[$key] . ".mp3",
                    // 'q_content' => $q,
                    'a_content' => $ans690[$key],
                ]
            ]);
        }




        // Unit 5 Listening <listening_choosing_answer>


        $images = $ImageDomain . "Grade_3/Lesson_32/Listening/";
        $audios = $AudioDomain . "Grade_3/Lesson_32/Listening/";

        $contents = [
            ['hot', 'sick', 'cold'],
            ['thirsty', 'hungry', 'hot'],
            ['hot', 'sick', 'cold'],
            ['happy', 'nervous', 'tired'],
            ['embarrassed', 'angry', 'scared'],
        ];


        $ans = [
            'cold',
            'hungry',
            'sick',
            'happy',
            'angry',
        ];

        foreach ($ans as $key => $value) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 691,
                    'round' => $key + 1,
                    'q_audio' => $audios . $value . ".mp3",
                    'q_content' => $contents[$key][0],
                    'a_content' => $value == $contents[$key][0]
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 691,
                    'round' => $key + 1,
                    'q_content' => $contents[$key][1],
                    'a_content' => $value == $contents[$key][1]
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 691,
                    'round' => $key + 1,
                    'q_content' => $contents[$key][2],
                    'a_content' => $value == $contents[$key][2]
                ]
            ]);
        }




        // Unit 6 Speaking <speaking_and_recording>

        $contents = [
            "crying", "shouting", "eating", "yawning"
        ];

        $Question_contents = [
            "Why are you crying?",
            "Why are you shouting?",
            "Why are they eating?",
            "Why is she yawning?",
        ];

        $eg692 = [
            "I am crying because I'm sad. \n I always cry when I sad.", null, null, null
        ];


        $images = $ImageDomain . "Grade_3/Lesson_32/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_32/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 692,
                    'round' => $key + 1,
                    "a_content" => $eg692[$key],
                    'round_instruction' => $audio . $this->removeSpace($value) . "_round_ins" . ".mp3",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $audio . $this->removeSpace($value) . ".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }




        // Unit 7 Reading  <reading_passage_two>


        $images = $ImageDomain . "Grade_3/Lesson_32/Reading/";
        $audios = $AudioDomain . "Grade_3/Lesson_32/Reading/";

        $para = "Mr. Abby is the president of the company. Unfortunately, all the staff is out today. Nobody is here. As a result, Abby is doing everybody’s job. He is having a very bad day at the office today. He is answering the phone because the receptionist is at the dentist’s office. He is typing because the secretary is in bed with the flu. He is reading the email because the office assistant is on vacation. He is cleaning because the cleaner is late. He is having a very bad day today.";

        $given_q = [
            ["His receptionist is answering the phone. ________", "No"],
            ["Mr Abby is typing because his secretary is busy. _____", "No"],
            ["He is cleaning because the cleaner is late today. _____", "Yes"],
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

        $given_answer = ["Yes", "No"];


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
            'I always smile when I am happy.',
            'I always shout when I am angry.',
            'I always yawn when I am tired.',
            'I always bite my nail when I am bored.',
            'I always is covering my eyes when I am scare.',
            'I always blush  when I am embarrassed.',
            'I always cover my eyes when I am nervous.',
            'I cry when I am sad.',
        ];

        $que = [
            "What do you do when you are happy?",
            "What do you do when you are angry?",
            "What do you do when you are tired?",
            "What do you do when you are bored?",
            "What do you do when you are scared?",
            "What do you do when you are embarrassed?",
            "What do you do when you are nervous?",
            "What do you do when you are sad?",
        ];

        $images = $ImageDomain . "Grade_3/Lesson_32/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_32/Writing/";

        foreach ($contents as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 694,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($val) . ".png",
                    'q_audio' => $audios . $this->removeSpace($val) . ".mp3",
                    'q_content' => $que[$key],
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
                'round' => 1,
                'q_content' =>  "Talk about your busy day. \n How do you feel on that day?",
                'q_audio' => $audios . "busy-day.mp3",
                'q_image' => $images . "green_animal_round" . ".png",
            ]

        ]);







        //////////////////////////////////////////// Lesson 33 ///////////////////////////////////////


        // Unit 1 // game_id -> 696


        DB::table('ans_n_ques')->insert(['game_id' => 696, 'a_content' => '943950145', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 696, 'a_content' => 'data(Global)', 'isLocal' => 0]);


        // Unit 2 Vocabulary  <reading_carousel_two>

        $contents = [
            ['Tall', 'Short'],
            ['Young', 'Old-man'],
            ['Fat', 'Thin'],
            ['Married', 'Single'],
            ['New', 'Old'],
            ['Handsome', 'Ugly'],
            ['Large', 'Small'],
            ['Noisy', 'Quiet'],
            ['Expensive', 'Cheap'],
            ['Rich', 'Poor'],
            ['Easy', 'Difficult']
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_33/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_33/Vocabulary/";

        foreach ($contents as $key =>  $val) {

            foreach ($val as $v) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 697,
                        'a_content' => $v,
                        'a_image' => $img . $this->removeSpace($v) . ".png",
                        'a_audio' => $audio . $this->removeSpace($v) . ".mp3",
                        'q_content' => $key
                    ],
                ]);
            }
        }




        // Unit 3 Write the opposite <look_and_write>

        $audio = $AudioDomain . "Grade_3/Lesson_33/Write_the_opposite/";
        $img = $ImageDomain . "Grade_3/Lesson_33/Write_the_opposite/";

        $contents = [
            'noisy', 'expensive', 'ugly', 'fat', 'married', 'old', 'easy', 'poor'
        ];

        $ans = [
            'quiet', 'cheap', 'handsome', 'thin', 'single', 'young', 'difficult', 'rich'
        ];

        foreach ($contents as $key => $value) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 698,
                    'round' => $key + 1,
                    'q_image' => $img . $value . ".png",
                    'q_audio' => $audio . $value . ".mp3",
                    'q_content' => $value,
                    'a_content' => $ans[$key],
                ],
            ]);
        }


        // Unit -4 Writing (Arranging) <rearrange_with_audio>

        $given_ans = [
            ['Are', '?', 'married', 'they'],
            ['difficult', 'English', 'Is', '?'],
            ['new', 'car', 'Is', 'there', 'a', '?'],
            ['noisy', 'he', 'Is', 'or', 'quiet', '?'],
            ['dog', 'your', 'large', '?', 'Is'],
            ['busy', 'you', 'Are', '?']
        ];

        $img = $ImageDomain . "Grade_3/Lesson_33/Writing/";
        $audio = $AudioDomain . "Grade_3/Lesson_33/Writing/";

        $answers = [
            'Are they married', 'Is English difficult', 'Is there a new car',
            'Is he quiet or noisy', 'Is your dog large', 'Are you busy'
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
                    'q_image' => $img . str_replace(' ', '-', strtolower($answers[$i])) . ".png",
                    // 'q_content' => $questions[$i],
                    'a_audio' => $audio . str_replace(' ', '-', strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i] . " ?",
                ]
            ]);
        }




        // Unit - 5 Listen and write <listening_choosing_answer>


        $audio_q = [
            'tall', 'big', 'ugly', 'heavy', 'short'
        ];

        $given_ans = ["Yes", "No"];

        $ques = [
            "Mrs. Grant is tall.",
            "Their house is big.",
            "Their cat is ugly.",
            "Mrs. Grant is heavy.",
            "Mr. Grant is short.",
        ];

        $ans = [
            "Yes", "No", "No", "Yes", "Yes"
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_33/Listen/";
        $img = $ImageDomain . "Grade_3/Lesson_33/Listen/";

        foreach ($audio_q as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 700,
                    'round' => $key + 1,
                    'q_audio' => $audio . "Mr-Grant-is-short-and-heavy.mp3",
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
            "new", "noisy", "cheap", "difficult", "young"
        ];

        $Question_contents = [
            "Tell me about your computer. \n Is is new?",
            "Tell me about your neighbors? \n Are they noisy?",
            "Tell me about the restaurant. \n Is it cheap?",
            "Tell me about the questions in your English book? \n Are they difficult?",
            "Tell me about your boss. \n Is he young?",

        ];

        $eg701 = [
            "Yes, it is new.", null, null, null, null
        ];

        $images = $ImageDomain . "Grade_3/Lesson_33/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_33/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 701,
                    'round' => $key + 1,
                    "a_content" => $eg701[$key],
                    'round_instruction' => $audios . $this->removeSpace($value) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audio.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }




        //// Unit 7 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_33/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_33/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 702,
                'round' => 1,
                'q_content' =>  "Use adjectives to talk about your family members,\n your house, your neighbors and your pets.",
                'q_audio' => $audios . "Talk-about-your-family-member-use-adjectives.mp3",
                'q_image' => $images . "green_animal_round.png",
            ]

        ]);





        //////////////////////////////////////////// Lesson 34 ///////////////////////////////////////


        // Unit 1 // game_id -> 703


        DB::table('ans_n_ques')->insert(['game_id' => 703, 'a_content' => '943950359', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 703, 'a_content' => 'data(Global)', 'isLocal' => 0]);


        // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'It is wet', 'It is foggy', 'It is chilly', 'It is cloudy', 'It is cold',
            'It is dry', 'It is freezing', 'It is hot', 'It is raining', 'It is snowing',
            'It is sunny', 'It is stormy', 'It is windy',
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_34/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_34/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 704,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }



        // Unit 3  Write <look_and_write>


        $contents = [
            'snowing', 'cloudy', 'stormy', 'windy', 'hot', 'foggy', 'sunny',
        ];

        $questions = [
            "It is s____.",
            "It is c____.",
            "It is s____.",
            "It is w____.",
            "It is h____.",
            "It is f____.",
            "It is s____.",
        ];

        $ans = [
            'snowing', 'cloudy', 'stormy', 'windy', 'hot', 'foggy', 'sunny',
        ];


        $images = $ImageDomain . "Grade_3/Lesson_34/Write/";
        $audios = $AudioDomain . "Grade_3/Lesson_34/Write/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 705,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
                    'q_audio' => $audios . $contents[$key] . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }


        // Unit 4 Practice <look_and_write>


        $contents = [
            'New-York', 'Rome', 'Miami', 'Mexico'
        ];

        $questions = [
            "How is the weather in New York?",
            "How is the weather in Rome?",
            "How is the weather in Miami?",
            "How is the weather in Mexico?",
        ];

        $ans = [
            "It is snowing.",
            "It is stormy.",
            "It is raining.",
            "It is sunny.",
        ];


        $images = $ImageDomain . "Grade_3/Lesson_34/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_34/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 706,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
                    'q_audio' => $audios . $contents[$key] . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }




        // Unit 5 Listen <listening_choosing_answer>


        $images = $ImageDomain . "Grade_3/Lesson_34/Listen/";
        $audios = $AudioDomain . "Grade_3/Lesson_34/Listen/";

        $given_ques = [
            ['Cold', 'Cloudy', 'Cool'],
            ['Sunny', 'Raining', 'Snowing'],
            ['Warm', 'Foggy', 'Snowing'],
            ['Cold', 'Chilly', 'Stormy'],
            ['Warm', 'Snowing', 'Cold'],
        ];


        $ans = [
            'Cloudy',
            'Raining',
            'Warm',
            'Stormy',
            'Cold',
        ];

        // foreach ($ans as $key => $value) {

        //     foreach ($contents[$key] as $j => $val) {
        //         DB::table('ans_n_ques')->insert([
        //             [
        //                 'game_id' => 707,
        //                 'round' => $key + 1,
        //                 'q_image' => $images.$val.".png",
        //                 'a_content' => $val == $value ? true : false
        //             ]
        //         ]);
        //     }

        //     DB::table('ans_n_ques')->insert([
        //         [
        //             'game_id' => 707,
        //             'round' => $key + 1,
        //             'q_audio' => $audios.$value.".mp3"
        //         ]
        //     ]);


        // }

        foreach ($ans as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 707,
                    'round' => $key + 1,
                    // 'q_audio' => $audio.$ans[$key].".mp3",
                    'q_audio' => $audios . $val . ".mp3",
                    'q_content' => $given_ques[$key][0],
                    // 'q_conver'  => $val."?",
                    'a_content' => $given_ques[$key][0] == $val ? true : false
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 707,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $val ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 707,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][2],
                    'a_content' => $given_ques[$key][2] == $val ? true : false
                ]
            ]);
        }






        // Unit 6 Speaking <speaking_and_recording>

        $contents = [
            "snowing", "cloudy", "sunny", "foggy", "freezing", "raining", "hot"
        ];

        $Question_contents = "How is the weather today?";



        $images = $ImageDomain . "Grade_3/Lesson_34/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_34/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 708,
                    'round' => $key + 1,
                    'round_instruction' => $audio . $this->removeSpace("How is the weather today") . ".mp3",
                    'q_content' => $Question_contents,
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }





        ////  Unit 7 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_3/Lesson_34/Reading/";
        $audios = $AudioDomain . "Grade_3/Lesson_34/Reading/";

        $para = "I am writing from a hotel at the beach. Abby and I are on vacation for a few days. We are happy to be here. But to tell you the truth, we are having a few problems. The weather isn’t very good. In fact, it is cold and cloudy. Right now I am looking out the window, and it is raining very hard. The restaurants are expensive. The food isn’t very good. All the other hotels are very beautiful and new. But our hotel is very old and ugly. We are having a few problems here. But we are happy.
";

        $given_q = [
            ["The hotel is old.", "Yes"],
            ["It is raining now.", "Yes"],
            ["The food is very good.", "No"],
            ["The restaurants are cheap.", "No"],
            ["The weather is beautiful.", "No"],
        ];

        $given_audio = [
            "hotel-old.mp3",
            "raining-now.mp3",
            "food-good.mp3",
            "cheap.mp3",
            "weather-beautiful.mp3"
        ];
        $paraName = "Abby-vacation.mp3";

        $given_answer = ['Yes', 'No'];


        for ($i = 0; $i < count($given_q); $i++) {


            foreach ($given_answer as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 709,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 709,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 709,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Dear Mother",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }



        // Unit 8 Writing <writing_topic>


        $images = $ImageDomain . "Grade_3/Lesson_34/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_34/Writing/";

        $sample_content = "My family and I are on vacation at the beach now. The weather is nice. It is warm and sunny. The hotel is new. It is very beautiful. The food is delicious. The restaurants aren’t very expensive. Right now, I am sitting on the beach, and all my brothers and sister are swimming.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 710,
                'q_content' => $images . "sample.png",
                'a_content' => $sample_content
            ],
        ]);




        //// Unit 9 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_34/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_34/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 711,
                'round' => 1,
                'q_content' =>  "Talk about your favourite weather. \n Why do you like it? \n What don't you like? \n Why not?",
                'q_audio' => $audios . "Talk-about-your-favorite-weather.mp3",
                'q_image' => $images . "green_starfish_round.png",
            ]

        ]);







        //////////////////////////////////////////// Lesson 35 ///////////////////////////////////////


        // Unit 1 // game_id -> 712


        DB::table('ans_n_ques')->insert(['game_id' => 712, 'a_content' => '943950578', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 712, 'a_content' => 'data(Global)', 'isLocal' => 0]);


        // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            "Airport", "Cinema", 'Concert', 'Flower-shop', 'Hospital', 'Ice cream',
            'Library', 'Museum', 'Pet shop', 'Playground', 'Police station', 'Restaurant',
            'Shoe shop', 'Sport center', 'Toy shop', 'University'
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_35/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_35/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 713,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace(strtolower($val)) . ".mp3"
                ],
            ]);
        }


        // Unit 3 Language practice and learning <look_and_write>


        $contents = [
            'sport center', 'hospital', 'restaurant', 'police station', 'store',
            'flower shop', 'cinema', 'library'
        ];

        $questions = [
            "What can i do at a sports center?",
            "What can i do at a hospital?",
            "What can i do at a restaurant?",
            "What can i do at a police station?",
            "What can i do at a toy store?",
            "What can you do at a flower shop?",
            "What can i do at a cinema?",
            "What can i do at a library?",
        ];

        $ans = [
            'You can play basketball at a sports center.',
            'You can see doctors at a hospital.',
            'You can eat food at a restaurant.',
            'You can get help at a police station.',
            'You can buy toys at a toy store.',
            'you can buy flowers at a flower shop.',
            'You can watch films at a cinema.',
            'You can read books at a library.'
        ];


        $images = $ImageDomain . "Grade_3/Lesson_35/Language_Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_35/Language_Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 714,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($contents[$key]) . ".png",
                    'q_audio' => $audios . $this->removeSpace($contents[$key]) . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }





        // Unit - 4  Look at the picture and choose the correct answer / Choose <look_and_choose>

        $audio = $AudioDomain . "Grade_3/Lesson_35/Choose/";
        $img = $ImageDomain . "Grade_3/Lesson_35/Choose/";


        $given_ans = [
            ['Hospital', 'Flower shop', 'Playground'],
            ['Museum', 'Concert hall', 'Hospital'],
            ['Ice-cream shop', 'Museum', 'Flower shop'],
            ['Cinema', 'Library', 'Restaurant'],
            ['Police station', 'Hospital', 'Museum'],
            ['Hospital', 'Airport', 'Concert hall'],
            ['Restaurant', 'Playground', 'University'],
            ['Pet store', 'Shoe store', 'University'],

        ];

        $ans = [
            'Playground', 'Concert hall', 'Ice-cream shop',
            'Library', 'Museum', 'Hospital', 'Restaurant', 'University'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 715,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($ans[$key]) . ".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 715,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 715,
                    'round' => $key + 1,
                    'q_content' => $ga[2],
                    'a_content' => $ga[2] == $ans[$key] ? true : false
                ]
            ]);
        }




        // Unit - 5 Listening <listening_choosing_answer>


        $given_ques = [
            ['Museum', 'Library', 'Cinema'],
            ['Library', 'Flower shop', 'Hospital'],
            ['Police station', 'Playground', 'Hospital'],
            ['Flower shop', 'Police station', 'Concert hall'],
            ['University', 'Sport center', 'Restaurant'],
        ];

        $ans = [
            'Cinema',
            'Library',
            'Hospital',
            'Police station',
            'Restaurant',
        ];


        $audio = $AudioDomain . "Grade_3/Lesson_35/Listening/";
        $img = $ImageDomain . "Grade_3/Lesson_35/Listening/";



        foreach ($given_ques as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 716,
                    'round' => $key + 1,
                    'q_audio' => $this->removeSpace($audio . $ans[$key]) . ".mp3",
                    'q_content' => $val[0],
                    'a_content' => $val[0] == $ans[$key] ? true : false
                ]
            ]);



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 716,
                    'round'  => $key +  1,
                    'q_content' => $val[1],
                    'a_content' => $val[1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 716,
                    'round'  => $key +  1,
                    'q_content' => $val[2],
                    'a_content' => $val[2] == $ans[$key] ? true : false
                ]
            ]);
        }






        // Unit 6 Speaking <speaking_and_recording>

        $contents = [
            "restaurant", "museum", "police-station", "sport-center", "cinema", "playground", "library"
        ];

        $Question_contents = [
            "What can you do at restaurant?",
            "What can you do at museum?",
            "What can you do at police station?",
            "What can you do at sports center?",
            "What can you do at cinema?",
            "What can you do at playground?",
            "What can you do at library?",
        ];



        $images = $ImageDomain . "Grade_3/Lesson_35/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_35/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 717,
                    'round' => $key + 1,
                    'round_instruction' => $audio . $this->removeSpace($value) . "_round_ins" . ".mp3",
                    'q_content' => $Question_contents[$key],
                    'q_audio' => $audios . $this->removeSpace($value) . ".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }




        //// Unit 7 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_35/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_35/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 718,
                'round' => 1,
                'q_content' => "What can you do at these place? \n Airport, Pet shop \n University, Ice-cream shop",
                'q_audio' => $audios . "what-can-u-do-at-place.mp3",
                'q_image' => $images . "green_starfish_round.png",
            ]

        ]);

        // -----------------------------------  end of Lesson 35 -------------------------------------



        //////////////////////////////////////////// Lesson 36 ///////////////////////////////////////


        // Unit 1 // game_id -> 719


        DB::table('ans_n_ques')->insert(['game_id' => 719, 'a_content' => '943950755', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 719, 'a_content' => 'data(Global)', 'isLocal' => 0]);


        // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            "bakery-bus", "park-2-streets", 'office-hospital', 'restaurant-bank',
            'school-library',
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_36/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_36/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 720,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }


        // Unit 3  Practice  <look_and_write>


        $contents = [
            "restaurant", "hospital", "hotel",
            // "clinic",
            "gas-station", "bakery", "post-office", "bank"
        ];

        $questions = [
            "Where is the restaurant?",
            "Where is the hospital?",
            "Where is the hotel?",
            // "Where is the clinic?",
            "Where is the gas station?",
            "Where is the bakery?",
            "Where is the post office?",
            "Where is the bank"
        ];

        $ans = [
            "It's between the bank and the library.",
            "It's around the corner from the movie theater.",
            "It is opposite the library.",
            // "It's around the corner from the fire station.",
            "It's next to the bus station.",
            "It's between the video store and barber shop.",
            "It's opposite the park.",
            "It's next to the school."
        ];


        $images = $ImageDomain . "Grade_3/Lesson_36/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_36/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 721,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
                    'q_audio' => $audios . $contents[$key] . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }



        // Unit 4 Writing <writing_topic>


        $images = $ImageDomain . "Grade_3/Lesson_36/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_36/Writing/";

        $sample_content = "The bank is next to the restaurant. \n The bus station is opposite the fire station. \n The library is between the movie theatre and the barbershop. \n The laundromat is next to the clinic. \n The barber shop is around the corner from the post office. \n The restaurant is next to the supermarket.\n The school is between the supermarket and the hotel. \n The clinic is between the laundromat and gas station.";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 722,
                'q_content' => $images . "sample.png",
                'a_content' => $sample_content
            ],
        ]);




        // Unit 4 Listen <listening_and_choosing_pics_one>


        $images = $ImageDomain . "Grade_3/Lesson_36/Listen/";
        $audios = $AudioDomain . "Grade_3/Lesson_36/Listen/";

        $contents = [
            ['bank', 'fire-clinic'],
            ['bus-station', 'fire-clinic'],
            ['fire-clinic', 'hospital'],
            ['the-park', 'bank'],
            ['video-bakery', 'restaurant'],
        ];


        $ans = [
            'bank',
            'bus-station',
            'hospital',
            'the-park',
            'restaurant',
        ];

        foreach ($ans as $key => $value) {

            foreach ($contents[$key] as $j => $val) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 723,
                        'round' => $key + 1,
                        'q_image' => $images . $val . ".png",
                        'a_content' => $val == $value ? true : false
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 723,
                    'round' => $key + 1,
                    'q_audio' => $audios . $value . ".mp3"
                ]
            ]);
        }



        // Unit 6 Speaking <speaking_and_recording>

        $contents = [
            "clinic", "supermarket", "drug-store", "gas-station", "bank", "barber"
        ];

        $Question_contents = [
            "Where is the clinic?",
            "Where is the supermarket?",
            "Where is the drug store?",
            "Where is the gas station?",
            "Where is the bank?",
            "Where is the barber shop?",
        ];



        $images = $ImageDomain . "Grade_3/Lesson_36/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_36/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 724,
                    'round' => $key + 1,
                    'round_instruction' => $audios . $this->removeSpace($value) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }




        ////  Unit 7 (Reading) < reading_passage >


        $images = $ImageDomain . "Grade_3/Lesson_36/Reading/";
        $audios = $AudioDomain . "Grade_3/Lesson_36/Reading/";

        $para = "Everybody is talking about the city’s new shopping mall. The shopping mall is outside the city, next to the airport. There are more than one hundred stores in the mall. There are two big department stores.  There are many clothing stores for men, women and children. There is a book store. There are two drug stores, and there are four restaurants.  There is even a larger movie theatre. Everyone is happy. They all are shopping at the new mall.";

        $given_q = [
            ["There is even a large", "a movie theatre"],
            ["The Mall is", 'next to the air port'],
            ["There are clothing stores for", 'men, women and children'],
            ["In the mall, there are .", "two big department stores"],
            ["Everybody is talking about", "The city’s new shopping mall"],
        ];

        $given_audio = [
            "even-large.mp3",
            "mall-is.mp3",
            "clothing-store.mp3",
            "in-the-mall.mp3",
            "everybody-talking.mp3",
        ];

        $paraName = "my_week.mp3";

        $given_answer = [
            ['restaurant', 'a movie theatre', 'clothing store'],
            ['next to the air port', 'opposite the air port', 'around the corner from the airport'],
            ['women', 'men and women', 'men, women and children'],
            ['two restaurants', 'two big department stores', 'two movie theatres'],
            ['Department store', 'Movie theatre', "The city’s new shopping mall"],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 725,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 725,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 725,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }




        //// Unit 8 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_36/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_36/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 726,
                'round' => 1,
                'q_content' => "Is there a shopping mall in your town or city? \n Are there small stores in your town or city? \n Tell about stores where you live.",
                'q_audio' => $audios . "Is-there-a-shopping-mall.mp3",
                'q_image' => $images . "green_starfish_round.png",
            ]

        ]);


        // -----------------------------------  end of Lesson 36 -------------------------------------------




        //////////////////////////////////////////// Lesson 37 ///////////////////////////////////////


        // Unit 1 // game_id -> 727


        DB::table('ans_n_ques')->insert(['game_id' => 727, 'a_content' => '943951593', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 727, 'a_content' => 'data(Global)', 'isLocal' => 0]);


        // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'drive down', 'drive up', 'go straight', 'on the left', 'on the right',
            'turn left', 'turn right', 'walk along', 'walk down', 'walk up'
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_37/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_37/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 728,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }




        // Unit - 3  Choose <look_and_choose>

        $audio = $AudioDomain . "Grade_3/Lesson_37/Choose/";
        $img = $ImageDomain . "Grade_3/Lesson_37/Choose/";


        $given_ans = [
            ['Walk down', 'Turn left'],
            ['On the left', 'On the right'],
            ['On the left', 'On the right'],
            ['Walk up', 'Walk down'],
            ['Walk along', 'Walk down'],
            ['Turn right', 'Turn left'],
            ['Go straight', 'Turn left'],
        ];

        $ans = [
            'Turn left', 'On the right', 'On the left',
            'Walk up', 'Walk along', 'Turn right', 'Go straight'
        ];

        foreach ($given_ans as $key => $ga) {


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 729,
                    'round' => $key + 1,
                    'q_image' => $img . $this->removeSpace($ans[$key]) . ".png",
                    'q_content' => $ga[0],
                    'a_content' => $ga[0] == $ans[$key] ? true : false
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 729,
                    'round' => $key + 1,
                    'q_content' => $ga[1],
                    'a_content' => $ga[1] == $ans[$key] ? true : false
                ]
            ]);
        }




        // Unit 4 Practice <look_and_write>


        $contents = [
            'cinema', 'hospital', 'restaurant', 'library', 'school'
        ];

        $questions = [
            "Excuse me. How do I get to the cinema?",
            "Excuse me. How do I get to the hospital?",
            "Excuse me. How do I get to the restaurant?",
            "Excuse me. How do I get to the library?",
            "Excuse me. How do I get to the school?",

        ];

        $ans = [
            "Walk down. It is on the right.",
            "Walk up and turn left. It is on the right.",
            "Go straight. It is on the right.",
            "Go straight and  turn left. It is on the right.",
            "Go straight and turn left. It is on the left."

        ];


        $images = $ImageDomain . "Grade_3/Lesson_37/Target_Learning_Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_37/Target_Learning_Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 730,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($contents[$key]) . ".png",
                    'q_audio' => $audios . $this->removeSpace($contents[$key]) . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key]
                ]
            ]);
        }




        // Unit 5 Listen <listening_choosing_answer>


        $audio_q = [
            'library', 'clinic', 'hospital', 'laundromat', 'post-office'
        ];

        $given_ans = [
            ['between the sports center', 'opposite the sports center'],
            ['between the bakery and drug store', 'between the bakery and shoe store'],
            ['next to the police station', 'opposite the police station'],
            ['on the right', 'on the left'],
            ['next to the high school', 'across from the high school']
        ];

        $ques = [
            "Can you tell me how to get the library from here?",
            "Can you tell me how to get the clinic from here?",
            "Can you tell me how to get the hospital from here?",
            "Can you tell me how to get the laundromat from here?",
            "Can you tell me how to get the post office from here?",
        ];

        $ans = [
            "opposite the sports center",
            "between the bakery and shoe store",
            "next to the police station",
            "on the right",
            "next to the high school"
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_37/Listen_and_Answer/";
        $img = $ImageDomain . "Grade_3/Lesson_37/Listen_and_Answer/";

        foreach ($audio_q as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 731,
                    'round' => $key + 1,
                    'q_audio' => $audio . $val . ".mp3",
                    'q_conver'  =>  $ques[$key],
                    'q_content' => $given_ans[$key][0],
                    'a_content' => $given_ans[$key][0] == $ans[$key] ? true : false
                ]
            ]);


            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 731,
                    'round'  => $key +  1,
                    'q_content' => $given_ans[$key][1],
                    'a_content' => $given_ans[$key][1] == $ans[$key] ? true : false
                ]
            ]);
        }




        // Unit 6 Speaking <speaking_and_recording>

        $contents = [
            "park", "restaurant", "sports-center", "police-station", "market",
        ];

        $Question_contents = [
            "Excuse me. How do I get to the park from my house? \n Walk along and turn left on 2nd Street. \n You will see the park on the left, \n next to the library",

            "Excuse me. How do I get to the restaurant from my house?",
            "Excuse me. How do I get to the sports center from my house?",
            "Excuse me. How do I get to the police station from my house?",
            "Excuse me. How do I get to the market from my house?",
        ];



        $images = $ImageDomain . "Grade_3/Lesson_37/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_37/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 732,
                    'round' => $key + 1,
                    'round_instruction' => $audios . $this->removeSpace($value) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audio.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }



        /// Unit 7 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_37/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_37/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 733,
                'round' => 1,
                'q_content' => "Prepare to speak.\n Look at the map of your town and describe it.",
                'round_instruction' => $audios . "Look-at-map.mp3",
                'q_image' => $images . "Map-img.png",
            ]

        ]);




        // -----------------------------------  end of Lesson 37 -------------------------------------------




        //////////////////////////////////////////// Lesson 38 ///////////////////////////////////////


        // Unit 1 // game_id -> 734


        DB::table('ans_n_ques')->insert(['game_id' => 734, 'a_content' => '943951789', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 734, 'a_content' => 'data(Global)', 'isLocal' => 0]);


        // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'drag-store', 'straight', 'gym', 'corner', 'on-left', 'on-right', 'opposite-park',
            'left-sec-avenue', 'right-sec-avenue', 'walk-down-sec-avenue', 'walk-up-sec-avenue'
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_38/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_38/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 735,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }



        // Unit 3 Practice <look_and_write>


        $contents = [
            "University", "police-station", "Bus-station", "market", "bakery"
        ];

        $questions = [
            "How do i get to University from here?",
            "How do i get to the police station from here?",
            "How do i get to the Bus station from here?",
            "How do i get to the market from here?",
            "How do i get to the bakery from here?",

        ];

        $ans = [
            "Walk along Elm Street. It's on the right, opposite the museum.",
            "Walk up South Street. It's on the right, next to the bank.",
            "Walk down South Street. It's on the left, opposite the hospital.",
            "Go straight and turn right. It's on the left.",
            "Go straight and turn left. It is on the right."

        ];


        $images = $ImageDomain . "Grade_3/Lesson_38/Practice/";
        $audios = $AudioDomain . "Grade_3/Lesson_38/Practice/";

        foreach ($questions as $key => $q) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 736,
                    'round' => $key + 1,
                    'q_image' => $images . $contents[$key] . ".png",
                    'q_audio' => $audios . $contents[$key] . ".mp3",
                    'q_content' => $q,
                    'a_content' => $ans[$key],
                ]
            ]);
        }


        // Unit - 4 Listening <listening_choosing_answer>


        $questions = [
            'Walk ___ Mall Street.',
            'Turn ___ on Third Avenue.',
            'Go past the  ___',
            'Turn ___ on Maple Street.',
            "___ the flower shop."

        ];

        $given_ques = [
            ["along", "opposite", "right"],
            ["left", "opposite", "right"],
            ["left", "opposite", "movie theater"],
            ["left", "right", "opposite"],
            ["along", "right", "opposite"],
        ];

        $ans = [
            "along", "left", "movie theater", "right", "opposite"
        ];

        $story = "asked-place.mp3";


        $audio = $AudioDomain . "Grade_3/Lesson_38/Listening/";
        $img = $ImageDomain . "Grade_3/Lesson_38/Listening/";



        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 737,
                    'round' => $key + 1,
                    'q_audio' => $audio . $story,
                    'q_content' => $given_ques[$key][0],
                    'q_conver'  => $val,
                    'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
                ]
            ]);



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 737,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 737,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][2],
                    'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
                ]
            ]);
        }



        // Unit 5 Speaking <speaking_and_recording>

        $contents = [
            "concert-hall", "park", "department-store", "zoo", "bus-department",
        ];

        $Question_contents = [
            "Excuse me. How do I get to the pet shop from concert hall?",
            "Excuse me. How do I get to the clinic from the park?",
            "Excuse me. How do I get to the shoe store from the department store?",
            "Excuse me. How do I get to the flower shop from the zoo?",
            "Excuse me. How do I get to the bus station from department store?",
        ];



        $images = $ImageDomain . "Grade_3/Lesson_38/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_38/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 738,
                    'round' => $key + 1,
                    'round_instruction' => $audios . $this->removeSpace($value) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }




        ////  Unit 6 (Reading) < reading_passage >

        $images = $ImageDomain . "Grade_3/Lesson_38/Reading/";
        $audios = $AudioDomain . "Grade_3/Lesson_38/Reading/";

        $para = "Hi,My name is Abby. Today is my birthday. I am having a party at my home. I invited all my friends from school to my party. They all will come to my party. You are also invited to my party. Here is the direction from school to my home. Walk along Third avenue and turn right on Park Street. Walk down Park Street and turn right on Second Avenue. Walk along Second Avenue , and you will see my home on the right, opposite the church.";

        $given_q = [
            ["Abby’s home is next to the fire station.", 'No'],
            ["Abby’s home is opposite the bus station.", "Yes"],
            ["His friends will come to his party from their homes.", 'No'],
            ["Abby’s home is on Second Avenue.", "Yes"],
            ["Abby’s birthday is at the hotel.", "No"],
        ];

        $given_audio = [
            "fire-station.mp3",
            "opposite-bus.mp3",
            "his-fris.mp3",
            "sec-avenue.mp3",
            "hotel.mp3"
        ];
        $paraName = "Hi-my-name-is-abby.mp3";

        $given_answer = ['Yes', 'No'];


        for ($i = 0; $i < count($given_q); $i++) {


            foreach ($given_answer as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 739,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 739,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 739,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }



        // Unit 7 Writing <writing_topic>


        $images = $ImageDomain . "Grade_3/Lesson_38/Writing/";
        $audios = $AudioDomain . "Grade_3/Lesson_38/Writing/";

        $sample_content = "You are going to invite people to your home. Draw a map and write directions to help them to get here. (Give them directions from your school).";

        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 740,
                'a_audio' => $audios . "invite-fris.mp3",
                'q_content' => $images . "map.png",
                'a_content' => $sample_content
            ],
        ]);




        /// Unit 8 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_38/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_38/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 741,
                'round' => 1,
                'q_content' => "Give directions from your home to \n (stores, restaurants, shopping mall.. etc.) .",
                'q_audio' => $audios . "give-direction-from-home.mp3",
                'q_image' => $images . "green_starFish_round.png",
            ]

        ]);





        // -----------------------------------  end of Lesson 38 -------------------------------------------




        //////////////////////////////////////////// Lesson 39 ///////////////////////////////////////


        // Unit 1 // game_id -> 742


        DB::table('ans_n_ques')->insert(['game_id' => 742, 'a_content' => 'data', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 742, 'a_content' => 'data(Global)', 'isLocal' => 0]);


        // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'belt', 'blouse', 'coat', 'dress', 'jacket', 'jeans', 'pajamas', 'pants',
            'shirt', 'shoes', 'skirt', 'socks', 'suit', 'sweater', 'tie',
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_39/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_39/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 743,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }

        // Unit 2 sub 2 Practice <look_and_write>


        $contents = [
            'shirt', 'tie', 'jacket', 'belt', 'pant', 'sock', 'shoe',
        ];

        $ans = [
            'shirt', 'tie', 'jacket', 'belt', 'pants', 'socks', 'shoes',
        ];


        $images = $ImageDomain . "Grade_3/Lesson_39/Vocabulary_2/";
        $audios = $AudioDomain . "Grade_3/Lesson_39/Vocabulary_2/";

        foreach ($contents as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 744,
                    'round' => $key + 1,
                    'q_image' => $images . $this->removeSpace($val) . ".png",
                    // 'q_audio' => $audio.$this->removeSpace($val).".mp3",
                    'a_content' => $ans[$key],
                ]
            ]);
        }




        // Unit -3 Practice (Arranging) <rearrange_with_audio>

        $given_ans = [
            ['like', 'jacket', 'you', '?', 'Do', 'this'],
            ['?', 'you', 'shorts', 'like', 'these', 'Do'],
            ['shirt', 'Do', '?', 'you', 'like', 'this'],
            ['you', '?', 'like', 'jeans', 'these', 'Do'],
            ['these', 'you', 'shoes', 'Do', 'like', '?'],
            ['this', 'Do', 'hat', 'like', 'you', '?'],
        ];

        $img = $ImageDomain . "Grade_3/Lesson_39/Practice/";
        $audio = $AudioDomain . "Grade_3/Lesson_39/Practice/";

        $answers = [
            'Do you like this jacket',
            'Do you like these shorts',
            'Do you like this shirt',
            'Do you like these jeans',
            'Do you like these shoes',
            'Do you like this hat',

        ];


        for ($i = 0; $i < count($given_ans); $i++) {

            foreach ($given_ans[$i]  as  $innerVal) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 745,
                        'round' => $i + 1,
                        'q_content' => $innerVal
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 745,
                    'round' => $i + 1,
                    'q_image' => $img . $this->removeSpace(strtolower($answers[$i])) . ".png",
                    // 'q_content' => $questions[$i],
                    'a_audio' => $audio . $this->removeSpace(strtolower($answers[$i])) . ".mp3",
                    'a_content' => $answers[$i] . " ?",
                ]
            ]);
        }



        // Unit - 5 Listening <listening_choosing_answer>


        $given_ques = [
            ['this dress', 'these dresses'],
            ['this tie', 'these ties'],
            ['belt', 'belts'],
            ['this shoe', 'these shoes'],
            ['this blouse', 'these blouses'],
        ];

        $ans = [
            'this dress',
            'these ties',
            'belt',
            'these shoes',
            'these blouses',
        ];


        $audio = $AudioDomain . "Grade_3/Lesson_39/Listening/";
        $img = $ImageDomain . "Grade_3/Lesson_39/Listening/";



        foreach ($given_ques as $key => $val) {

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 746,
                    'round' => $key + 1,
                    'q_audio' => $this->removeSpace($audio . $ans[$key]) . ".mp3",
                    'q_content' => $val[0],
                    'a_content' => $val[0] == $ans[$key] ? true : false
                ]
            ]);



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 746,
                    'round'  => $key +  1,
                    'q_content' => $val[1],
                    'a_content' => $val[1] == $ans[$key] ? true : false
                ]
            ]);
        }




        // Unit 5 Speaking <speaking_and_recording>

        $contents = [
            "sweater", "shoe", "dress", "socks", "t-shirt", "belt", "jacket"
        ];

        $Question_contents = [
            // "Tell me about your computer. \n it is new",
            "Do you like this sweater?",
            "Do you like these shoes?",
            "Do you like this dress?",
            "Do you like these socks?",
            "Do you like this shirt?",
            "Do you like this belt?",
            "Do you like this jacket?",
        ];



        $images = $ImageDomain . "Grade_3/Lesson_39/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_39/Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 747,
                    'round' => $key + 1,
                    'round_instruction' => $audios . $this->removeSpace($value) . ".mp3",
                    'q_content' => $Question_contents[$key],
                    // 'q_audio' => $audios.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }




        /// Unit 8 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_39/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_39/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 748,
                'round' => 1,
                'q_content' => "What are you wearing today? \n What are your friends in the class wearing today?",
                'q_audio' => $audios . "what-r-today.mp3",
                'q_image' => $images . "green_starfish_round.png",
            ]

        ]);






        // -----------------------------------  end of Lesson 39 -------------------------------------------




        //////////////////////////////////////////// Lesson 40 ///////////////////////////////////////


        // Unit 1 // game_id -> 749


        DB::table('ans_n_ques')->insert(['game_id' => 749, 'a_content' => 'data', 'isLocal' => 1]);
        DB::table('ans_n_ques')->insert(['game_id' => 749, 'a_content' => 'data(Global)', 'isLocal' => 0]);


        // Unit 2 Vocabulary  <Reading_carousel>

        $contents = [
            'boots', 'bracelet', 'briefcase', 'coat', 'earrings', 'glasses', 'gloves', 'hat',
            'mitten', 'necklace', 'purse', 'raincoat', 'stocking', 'trousers', 'umbrella', 'watch',
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_40/Vocabulary/";
        $img = $ImageDomain . "Grade_3/Lesson_40/Vocabulary/";

        foreach ($contents as $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 750,
                    'a_content' => $val,
                    'a_image' => $img . $this->removeSpace($val) . ".png",
                    'a_audio' => $audio . $this->removeSpace($val) . ".mp3"
                ],
            ]);
        }



        // Unit 3 Language learning and practice <fill_in_the_blanks_two>

        $contents = [
            'watch', 'hats', 'boots', 'umbrella', 'purses', 'necklaces', 'earrings',
        ];

        $ques = [
            'I like ___ watch.',
            'I like ___ hats.',
            'I like ___ boots.',
            'I like ___ umbrella.',
            'I like ___ purses.',
            'I like ___ necklaces.',
            'I like ___ earrings.',
        ];

        $given_ans = [
            'that', 'those'
        ];

        $ans = [
            'that',
            'those',
            'those',
            'that',
            'those',
            'those',
            'those',

        ];

        $full_ans = [
            'I like that watch.',
            'I like those hats.',
            'I like those boots.',
            'I like that umbrella.',
            'I like those purses.',
            'I like those necklaces.',
            'I like those earrings.',
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_40/fill_in_the_blanks_two/";
        $img = $ImageDomain . "Grade_3/Lesson_40/fill_in_the_blanks_two/";

        foreach ($contents as $k => $val) {

            foreach ($given_ans as $j => $g_a) {
                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $k + 1,
                        'game_id' => 751,
                        'q_content' => $g_a,
                        'a_content' => $ans[$k],

                    ],
                ]);
            }



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 751,
                    'round' => $k + 1,
                    // 'q_audio' => $audio.$this->removeSpace($val).".mp3",
                    'q_image' => $img . $this->removeSpace($val) . ".png",
                    'q_content' => $ques[$k],
                    'a_content' => $full_ans[$k],
                ],
            ]);
        }


        // ========================================
        // Unit -4 Match the picture <matching_columns>


        $contents = [
            ['earrings', 'coat', 'watch', 'umbrella', 'boots'],
            ['stockings', 'purse', 'hat', 'mittens', 'bracelet']
        ];

        $randomValues = [
            ['boots', 'earrings', 'umbrella', 'coat', 'watch'],
            ['purse', 'stockings', 'bracelet', 'hat', 'mittens']
        ];

        $audio = $AudioDomain . "Grade_3/Lesson_40/Matching/";
        $img = $ImageDomain . "Grade_3/Lesson_40/Matching/";

        for ($i = 0; $i < count($contents); $i++) {

            foreach ($contents[$i] as $q) {

                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 752, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q,
                        'q_audio' => $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }


            foreach ($randomValues[$i] as $q) {
                DB::table('ans_n_ques')->insert([
                    [
                        'game_id' => 752, 'round' => $i + 1, 'q_content' => strtolower($q),
                        'q_image' => $img . strtolower($q) . ".png",
                        'q_audio' => $audio . strtolower($q) . ".mp3",
                    ]
                ]);
            }
        }





        // Unit - 5 Listening <listening_choosing_answer>


        $questions = [
            'What are they buying?',
            'What are they buying?',
            'What are they buying?',
            'What are they buying?',
            'What are they buying?',
        ];

        $given_ques = [
            ["Gloves", "Glasses", "Purses"],
            ["Bag", "Watch", "Hat"],
            ["Boots", "Coat", "Blouse"],
            ["Earrings", "Stockings", "Briefcase"],
            ["Boots", "Coat", "Blouse"],
        ];

        $ans = [
            "Gloves", "Hat", "Coat", "Earrings", "Blouse"
        ];


        $audio = $AudioDomain . "Grade_3/Lesson_40/Listening/";
        $img = $ImageDomain . "Grade_3/Lesson_40/Listening/";



        foreach ($questions as $key => $val) {
            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 753,
                    'round' => $key + 1,
                    'q_audio' => $audio . $ans[$key] . ".mp3",
                    'q_content' => $given_ques[$key][0],
                    'q_conver'  => $val,
                    'a_content' => $given_ques[$key][0] == $ans[$key] ? true : false
                ]
            ]);



            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 753,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][1],
                    'a_content' => $given_ques[$key][1] == $ans[$key] ? true : false
                ]
            ]);

            DB::table('ans_n_ques')->insert([
                [
                    'game_id' => 753,
                    'round'  => $key +  1,
                    'q_content' => $given_ques[$key][2],
                    'a_content' => $given_ques[$key][2] == $ans[$key] ? true : false
                ]
            ]);
        }








        // Unit 6 Speaking <speaking_and_recording>

        $contents = [
            "earrings", "necklace", "umbrella", "boots", "purse", "glasses", "coat",
        ];

        $Question_contents = [
            "Excuse me. I think those are my earrings. \n I don't think so. I think these are my earings.",
            "Excuse me. I think that is my necklace. \n I don't think so. I think this is my necklace.",
            "Excuse me. I think this is my umbrella. \n I don't think so. I think ___.",
            "Excuse me. I think those are my boots. \n I don't think so. I think ___.",
            "Excuse me. I think that is my purse. \n I don't think so. I think ___.",
            "Excuse me. I think those are my glasses. \n I don't think so. I think ___.",
            "Excuse me. I think that is my coat. \n I don't think so. I think ___.",
        ];



        $images = $ImageDomain . "Grade_3/Lesson_40/Speaking/";
        $audios = $AudioDomain . "Grade_3/Lesson_40 /Speaking/";

        foreach ($contents as $key => $value) {

            DB::table('ans_n_ques')->insert([

                [
                    'game_id' => 754,
                    'round' => $key + 1,
                    //  'round_instruction' => $audio.$this->removeSpace($value)."_round_ins".".mp3",
                    'q_content' => $Question_contents[$key],
                    //  'q_audio' => $audios.$this->removeSpace($value).".mp3",
                    'q_image' => $images . $this->removeSpace($value) . ".png",
                ]

            ]);
        }






        ////  Unit 7 (Reading) < reading_passage >


        $images = $ImageDomain . "Grade_3/Lesson_40/Reading/";
        $audios = $AudioDomain . "Grade_3/Lesson_40/Reading/";

        $para = "Fred is very angry this morning. He is looking for something to wear to work, but there is nothing in the closet. He is looking for a clean shirt, but all the shirts are dirty. He is looking for a jacket, but all his jackets are at the dry cleaner’s. He is looking for a pair of pants, but all his pants in the closet are ripped. He is looking for a pair of socks, but all his socks are on the clothes-line, and it is raining.
     He is getting dressed for work, but his closet is empty.";

        $given_q = [
            ["Fred’s shirts are", 'dirty'],
            ["He is looking for a pair of", "pants"],
            ["The weather is", 'not very good'],
            ["Fred is", "at home"],
            ["Fred’s closet is", "empty"],
        ];

        $given_audio = [
            "dirty-shirts.mp3",
            "pair-of-pants.mp3",
            "weather-not-good.mp3",
            "fried-at-home.mp3",
            "empty-closet.mp3",
        ];

        $paraName = "Fried-story.mp3";

        $given_answer = [
            ["dirty", "clean"],
            ["jacket", 'pants'],
            ["beautiful", 'not very good'],
            ["at home", "at work"],
            ["empty", "angry"],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'game_id' => 755,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 755,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'game_id' => 755,
                    'q_audio' => $audios . $paraName,
                    'q_content' => null,
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }




        /// Unit 8 FreePractice <speaking_and_recording>


        $images = $ImageDomain . "Grade_3/Lesson_40/FreePractice/";
        $audios = $AudioDomain . "Grade_3/Lesson_40/FreePractice/";


        DB::table('ans_n_ques')->insert([
            [
                'game_id' => 756,
                'round' => 1,
                'q_content' => "What do you usually wear \n when it is raining? \n  when it is sunny? \n  when it is cold? \n  when it is hot?",
                // 'q_audio' => $audios."what-do-usually-wear.mp3",
                'q_image' => $images . "green_starfish_round.png",
            ]

        ]);
    }
}