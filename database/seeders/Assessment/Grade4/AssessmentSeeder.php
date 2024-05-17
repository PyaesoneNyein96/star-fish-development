<?php

namespace Database\Seeders\Assessment\Grade4;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $domain = app('domain');
        $AudioDomain = $domain . "/storage/audios/";


        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 1 ID 108 ( Matching )
        ////////////////////////////////////////////////////////

        $A1_I108_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_1/matching/";
        $A1_I108_matching = "Grade_4/" . "Assessments/" . "Assessment_1/" . "matching/";

        $G4_A1_I108_matching = [

            ['Curly Hair', 'Shark', 'Hard-working', 'Whale', "Tiger"],
            ["Goat", "Sea horse", "Starfish", "Bear", "Turtle"]

        ];

        $G4_A1_I108_matching_image = [

            ["Tiger",  'Whale', 'Hard-working', 'Curly Hair', 'Shark'],
            ["Bear", "Turtle", "Sea horse", "Starfish", "Goat"]

        ];

        for ($i = 0; $i < count($G4_A1_I108_matching); $i++) {
            foreach ($G4_A1_I108_matching[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 108, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $A1_I108_matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_A1_I108_matching_image[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 108, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $A1_I108_image . str_replace(' ', '-', strtolower($q)) . ".png",
                        'q_audio' => $AudioDomain . $A1_I108_matching . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }

        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 1 ID 109 ( Arranging words )
        ////////////////////////////////////////////////////////

        $G4_A1_ID109_arrange_letter = "Grade_4/" . "Assessments/" . "Assessment_1/" . "rearrange_letter/";
        $A1_ID109_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_1/rearrange_letter/";

        $a_ID109 = [
            "beautiful", "handsome", "old", "young", "lazy", "cow", "snake", "rabbit", "seal", "leopard"
        ];

        foreach ($a_ID109 as $index => $i) {

            $q_ID109_shuf = str_shuffle($i);
            $q_ID109 = str_split($q_ID109_shuf);

            foreach ($q_ID109 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1, 'assess_id' => 109, 'q_content' => strtoupper($j),
                        'q_audio' => $AudioDomain . $G4_A1_ID109_arrange_letter . strtoupper($j) . ".mp3"
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 109,
                    'q_image' => $A1_ID109_image . str_replace(' ', '', strtolower($i)) . ".png",
                    'a_audio' => $AudioDomain . $G4_A1_ID109_arrange_letter . strtolower($i) . ".mp3",
                    'a_content' => strtoupper($i),
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 1 ID 110 ( Listen and Practice )
        ////////////////////////////////////////////////////////

        $G4_A1_listen_n_practice = "Grade_4/" . "Assessments/" . "Assessment_1/" . "listen_n_practice/";
        $A1_ID110_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_1/listen_n_practice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 110, "q_conver" => "What is the name of the speaker's friend?",  'q_audio' =>  $AudioDomain . $G4_A1_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "George", "a_content" => 0],
            ['round' => 1, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Max", "a_content" => 1],
            ['round' => 1, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Jack", "a_content" => 0],

            ['round' => 2, 'assess_id' => 110, "q_conver" => "What is he like?",  'q_audio' =>  $AudioDomain . $G4_A1_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Friendly",  "a_content" => 1],
            ['round' => 2, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Quiet", "a_content" => 0],
            ['round' => 2, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "lazy", "a_content" => 0],

            ['round' => 3, 'assess_id' => 110, "q_conver" => "What color of hair does he have?",  'q_audio' =>  $AudioDomain . $G4_A1_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Blonde", "a_content" => 0],
            ['round' => 3, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Brown", "a_content" => 1],
            ['round' => 3, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Golden", "a_content" => 0],

            ['round' => 4, 'assess_id' => 110, "q_conver" => "Has he got curly hair?",  'q_audio' =>  $AudioDomain . $G4_A1_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Yes, he has.", "a_content" => 1],
            ['round' => 4, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "No, he hasn't.", "a_content" => 0],
            ['round' => 4, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Yes, he does.", "a_content" => 0],

            ['round' => 5, 'assess_id' => 110, "q_conver" => "Does he get an A in the class?",  'q_audio' =>  $AudioDomain . $G4_A1_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Yes, he does.", "a_content" => 1],
            ['round' => 5, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "No, he does't.", "a_content" => 0],
            ['round' => 5, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Yes, he has.", "a_content" => 0],


            ['round' => 6, 'assess_id' => 110, "q_conver" => "A leopard has ____ fur.",  'q_audio' =>  $AudioDomain . $G4_A1_listen_n_practice . "leopard" . ".mp3", "q_content" => "black", "a_content" => 0],
            ['round' => 6, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "yellow", "a_content" => 1],
            ['round' => 6, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "white", "a_content" => 0],

            ['round' => 7, 'assess_id' => 110, "q_conver" => "A leopard can ____ very fast.",  'q_audio' =>  $AudioDomain . $G4_A1_listen_n_practice . "leopard" . ".mp3", "q_content" => "jump",  "a_content" => 0],
            ['round' => 7, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "eat", "a_content" => 0],
            ['round' => 7, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "run", "a_content" => 1],

            ['round' => 8, 'assess_id' => 110, "q_conver" => "Which animal can not jump?",  'q_audio' =>  $AudioDomain . $G4_A1_listen_n_practice . "elephant" . ".mp3", "q_content" => "Leopard", "a_content" => 0],
            ['round' => 8, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Elephant", "a_content" => 1],
            ['round' => 8, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Lion", "a_content" => 0],

            ['round' => 9, 'assess_id' => 110, "q_conver" => "Which animal has a big head?",  'q_audio' =>  $AudioDomain . $G4_A1_listen_n_practice . "lion" . ".mp3", "q_content" => "Leopard", "a_content" => 0],
            ['round' => 9, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Elephant", "a_content" => 0],
            ['round' => 9, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Lion", "a_content" => 1],

            ['round' => 10, 'assess_id' => 110, "q_conver" => "What does the shark eat?",  'q_audio' =>  $AudioDomain . $G4_A1_listen_n_practice . "shark" . ".mp3", "q_content" => "Turtle", "a_content" => 0],
            ['round' => 10, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "fish", "a_content" => 1],
            ['round' => 10, 'assess_id' => 110, "q_conver" => null,  'q_audio' =>  null, "q_content" => "whale", "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 1 ID 111 ( grammar )
        ////////////////////////////////////////////////////////

        $G4_A1_grammar = "Grade_4/" . "Assessments/" . "Assessment_1/" . "grammar/";
        $A1_ID111_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_1/grammar/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 111, "q_image" => $A1_ID111_image . "happy.png", "q_content" => "Is", 'q_conver' => "I ____ usually happy.", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 111, "q_image" => null, 'q_content' => "Am", "q_conver" => null, 'a_content' => 1],
            ['round' => 1, 'assess_id' => 111, "q_image" => null, 'q_content' => "Are", "q_conver" => null, 'a_content' => 0],

            ['round' => 2, 'assess_id' => 111, "q_image" => $A1_ID111_image . "oval.png", "q_content" => "Has", 'q_conver' => "She ____ an oval face.", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 111, "q_image" => null, 'q_content' => "Am", "q_conver" => null, 'a_content' => 0],
            ['round' => 2, 'assess_id' => 111, "q_image" => null, 'q_content' => "Is", "q_conver" => null, 'a_content' => 0],

            ['round' => 3, 'assess_id' => 111, "q_image" => $A1_ID111_image . "sheep.png", "q_content" => "a sheep", 'q_conver' => "How many ____ are there?",  'a_content' => 0],
            ['round' => 3, 'assess_id' => 111, "q_image" => null, 'q_content' => "sheep", "q_conver" => null, 'a_content' => 1],
            ['round' => 3, 'assess_id' => 111, "q_image" => null, 'q_content' => "sheeps", "q_conver" => null, 'a_content' => 0],

            ['round' => 4, 'assess_id' => 111, "q_image" => $A1_ID111_image . "have.png", "q_content" => "Does", 'q_conver' => "____ she have short hair?", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 111, "q_image" => null, 'q_content' => "Do", "q_conver" => null, 'a_content' => 0],
            ['round' => 4, 'assess_id' => 111, "q_image" => null, 'q_content' => "Is", "q_conver" => null, 'a_content' => 0],

            ['round' => 5, 'assess_id' => 111, "q_image" => $A1_ID111_image . "got.png", "q_content" => "Has", 'q_conver' => "____ she got short hair?", 'a_content' => 1],
            ['round' => 5, 'assess_id' => 111, "q_image" => null, 'q_content' => "Does", "q_conver" => null, 'a_content' => 0],
            ['round' => 5, 'assess_id' => 111, "q_image" => null, 'q_content' => "Is", "q_conver" => null, 'a_content' => 0],

            ['round' => 6, 'assess_id' => 111, "q_image" => $A1_ID111_image . "ox.png", "q_content" => "ox", 'q_conver' => "How many ____ are there on the farm?", 'a_content' => 0],
            ['round' => 6, 'assess_id' => 111, "q_image" => null, 'q_content' => "oxs", "q_conver" => null, 'a_content' => 0],
            ['round' => 6, 'assess_id' => 111, "q_image" => null, 'q_content' => "oxen", "q_conver" => null, 'a_content' => 1],

            ['round' => 7, 'assess_id' => 111, "q_image" => $A1_ID111_image . "dog.png", "q_content" => "am", 'q_conver' => "How may dogs ____ there?", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 111, "q_image" => null, 'q_content' => "is", "q_conver" => null, 'a_content' => 0],
            ['round' => 7, 'assess_id' => 111, "q_image" => null, 'q_content' => "are", "q_conver" => null, 'a_content' => 1],

            ['round' => 8, 'assess_id' => 111, "q_image" => $A1_ID111_image . "deer.png", "q_content" => "deer", 'q_conver' => "The plural form of 'deer' is ____.",  'a_content' => 1],
            ['round' => 8, 'assess_id' => 111, "q_image" => null, 'q_content' => "deers", "q_conver" => null, 'a_content' => 0],
            ['round' => 8, 'assess_id' => 111, "q_image" => null, 'q_content' => "deeres", "q_conver" => null, 'a_content' => 0],

            ['round' => 9, 'assess_id' => 111, "q_image" => $A1_ID111_image . "cat.png", "q_content" => "am", 'q_conver' => "The cats ____ chasing the rats.", 'a_content' => 0],
            ['round' => 9, 'assess_id' => 111, "q_image" => null, 'q_content' => "is", "q_conver" => null, 'a_content' => 0],
            ['round' => 9, 'assess_id' => 111, "q_image" => null, 'q_content' => "are", "q_conver" => null, 'a_content' => 1],

            ['round' => 10, 'assess_id' => 111, "q_image" => $A1_ID111_image . "friends.png", "q_content" => "have", 'q_conver' => "Who ____ your friends?", 'a_content' => 0],
            ['round' => 10, 'assess_id' => 111, "q_image" => null, 'q_content' => "are", "q_conver" => null, 'a_content' => 1],
            ['round' => 10, 'assess_id' => 111, "q_image" => null, 'q_content' => "is", "q_conver" => null, 'a_content' => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 1 ID 112 ( Reading Passages (1) )
        ////////////////////////////////////////////////////////

        $G4_A1_reading_passage_1 = "Grade_4/" . "Assessments/" . "Assessment_1/" . "reading_passage_1/";
        $A1_ID112_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_1/reading_passage_1/";

        $A1_ID112_q_audio = [
            "7-people-in-family",
            "emma-younger-bro",
            "sister-name",
            "bro-fri",
            "sis-straight-hair"
        ];

        $A1_ID112_q_conver = [
            "There are 7 people in Emma's family.",
            "Emma has a younger brother.",
            "Her sister's name is Mary.",
            "Her brother is friendly.",
            "Her sister has got straight hair."
        ];

        $A1_ID112_q_audio_ans = [
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"]
        ];

        $A1_ID112_q_audio_a_content = [
            [0, 1],
            [0, 1],
            [0, 1],
            [1, 0],
            [0, 1],
        ];


        for ($i = 0; $i < count($A1_ID112_q_audio); $i++) {

            foreach ($A1_ID112_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 112,
                        'q_content' => $val,
                        'a_content' => $A1_ID112_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 112,
                    "q_audio" => $AudioDomain . $G4_A1_reading_passage_1 . $A1_ID112_q_audio[$i] . ".mp3",
                    "q_conver" => $A1_ID112_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 112,
                    "q_audio" => $AudioDomain . $G4_A1_reading_passage_1 . "audio" . ".mp3",
                    "q_conver" => "Dear Rose, \n    I am writing a letter to you to tell you about my family. There are 5 people in my family. My father is George and my mother is Mary. They are about 45 years old. My big brother is Jack. He is friendly. He always smiles. My younger sister is Eve. She is talkative. She is pretty. She has got long curly hair. \n    Write back soon. Please tell me about your family, too. \nLove,\nEmma",
                    "background" => $A1_ID112_image . "bg.png"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 1 ID 113 ( Reading Passages (2) )
        ////////////////////////////////////////////////////////

        $G4_A1_reading_passage_2 = "Grade_4/" . "Assessments/" . "Assessment_1/" . "reading_passage_2/";
        $A1_ID113_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_1/reading_passage_2/";

        $A1_ID113_q_audio = [
            "help",
            "feed",
            "what-animals-feed",
            "where-chased-bees",
            "helped-from-it"
        ];

        $A1_ID113_q_conver = [
            "Who did Bill and Meg help?",
            "Who did Bill and Meg feed?",
            "What other animals did they feed?",
            "Where did they jump after being chased by the bees?",
            "Who helped them from it?"
        ];

        $A1_ID113_q_audio_ans = [
            ["Grandpa", "Grandma", "Uncle"],
            ["Sheep", "Ducks", "Dogs"],
            ["Cows", "Elephants", "Geese"],
            ["The swimming pool", "The stream", "The waterfall"],
            ["Grandpa", "Grandma", "Uncle"],
        ];

        $A1_ID113_q_audio_a_content = [
            [1, 0, 0],
            [1, 0, 0],
            [1, 0, 0],
            [0, 1, 0],
            [1, 0, 0],
        ];

        for ($i = 0; $i < count($A1_ID113_q_audio); $i++) {

            foreach ($A1_ID113_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 113,
                        "q_audio" => $AudioDomain . $G4_A1_reading_passage_2 . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A1_ID113_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 113,
                    "q_audio" => $AudioDomain . $G4_A1_reading_passage_2 . $A1_ID113_q_audio[$i] . ".mp3",
                    "q_conver" => $A1_ID113_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 113,
                    "q_audio" => $AudioDomain . $G4_A1_reading_passage_2 . "audio" . ".mp3",
                    "q_conver" => "Bill got his friend, Meg. He said, \"Grandpa needs help on his farm.\" They went to the farm. They helped him. They planted seeds. They picked beans. They fed the sheep. They fed the geese. Did they feed the bees? Grandpa said, \"You may not feed the bees. Do NOT go near the bees! Help me feed the cows.\" The kids sneaked near the bees. The bees seemed to be sleeping. Bill stepped on a log. He peeked in the hive. The bees were NOT sleeping! The bees peeked at Bill. Bill yelled, \"The bees see me!\" \"Can they see me?\" said Meg. Bill peeked and… He fell off the log! The bees flew at Bill and Meg. They seemed mad! Bill and Meg ran fast. But the bees were faster. Meg screamed, \"Eeeeek!\" Bill screamed, \"A stream! Jump in the stream!\" They leaped into the stream. Grandpa ran to the stream. He helped the kids. He said, \"Kids must not go near the bees!\"Bill and Meg were sad and wet.",
                    "background" => $A1_ID113_image . "bg.png"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 2 ID 114 ( Matching )
        ////////////////////////////////////////////////////////

        $A2_I114_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_2/matching/";
        $A2_I114_matching = "Grade_4/" . "Assessments/" . "Assessment_2/" . "matching/";

        $G4_A2_I114_matching = [

            ['Spring', 'Twenty-sixth', 'Thirty-first', 'Fall', "Foggy"],
            ["Hill", "Raindow", "Eleventh", "Windy", "Sunny"]

        ];

        $G4_A2_I114_matching_image = [

            ["Foggy",  'Fall', 'Thirty-first', 'Spring', 'Twenty-sixth'],
            ["Windy", "Sunny", "Raindow", "Eleventh", "Hill"]

        ];

        for ($i = 0; $i < count($G4_A2_I114_matching); $i++) {
            foreach ($G4_A2_I114_matching[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 114, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $A2_I114_matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_A2_I114_matching_image[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 114, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $A2_I114_image . str_replace(' ', '-', strtolower($q)) . ".png",
                        'q_audio' => $AudioDomain . $A2_I114_matching . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }

        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 2 ID 115 ( Choice )
        ////////////////////////////////////////////////////////

        $G2_A2_02_multiple_choice = "Grade_4/" . "Assessments/" . "Assessment_2/" . "choice/";
        $A2_ID115_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_2/choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 115, "q_conver" => "Look at the picture, in which positions people are in?", "q_image" => $A2_ID115_image . "kate.png", 'q_content' => "First", 'a_content' => 1],
            ['round' => 1, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Second", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Third", 'a_content' => 0],

            ['round' => 2, 'assess_id' => 115, "q_conver" => "Look at the picture, in which positions people are in?", "q_image" => $A2_ID115_image . "susan.png", 'q_content' => "Seventh", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Eighth", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Ninth", 'a_content' => 0],

            ['round' => 3, 'assess_id' => 115, "q_conver" => "Look at the picture, in which positions people are in?", "q_image" => $A2_ID115_image . "mary.png", 'q_content' => "Third", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Fourth", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Fifth", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 115, "q_conver" => "Look at the picture, in which positions people are in?", "q_image" => $A2_ID115_image . "tim.png", 'q_content' => "Third", 'a_content' => 0],
            ['round' => 4, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Fourth", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Fifth", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 115, "q_conver" => "Look at the picture, in which positions people are in?", "q_image" => $A2_ID115_image . "kurt.png", 'q_content' => "Eighth", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Ninth", 'a_content' => 1],
            ['round' => 5, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Tenth", 'a_content' => 0],


            ['round' => 6, 'assess_id' => 115, "q_conver" => "Look at the picture, in which positions people are in?", "q_image" => $A2_ID115_image . "boris.png", 'q_content' => "First", 'a_content' => 0],
            ['round' => 6, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Second", 'a_content' => 1],
            ['round' => 6, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Third", 'a_content' => 0],

            ['round' => 7, 'assess_id' => 115, "q_conver" => "Look at the picture, in which positions people are in?", "q_image" => $A2_ID115_image . "jake.png", 'q_content' => "First", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Second", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Third", 'a_content' => 1],

            ['round' => 8, 'assess_id' => 115, "q_conver" => "Look at the picture, in which positions people are in?", "q_image" => $A2_ID115_image . "ted.png", 'q_content' => "Fifth", 'a_content' => 0],
            ['round' => 8, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Sixth", 'a_content' => 1],
            ['round' => 8, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Seventh", 'a_content' => 0],

            ['round' => 9, 'assess_id' => 115, "q_conver" => "Look at the picture, in which positions people are in?", "q_image" => $A2_ID115_image . "james.png", 'q_content' => "Seventh", 'a_content' => 1],
            ['round' => 9, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Eighth", 'a_content' => 0],
            ['round' => 9, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "Ninth", 'a_content' => 0],

            ['round' => 10, 'assess_id' => 115, "q_conver" => "Look at the picture, in which positions people are in?", "q_image" => $A2_ID115_image . "waiting-in-bus.png", 'q_content' => "8", 'a_content' => 0],
            ['round' => 10, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "9", 'a_content' => 1],
            ['round' => 10, 'assess_id' => 115, "q_conver" => null, "q_image" => null, 'q_content' => "10", 'a_content' => 0],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 2 ID 116 ( Listening )
        ////////////////////////////////////////////////////////

        $G4_A2_listen_n_practice = "Grade_4/" . "Assessments/" . "Assessment_2/" . "listening/";
        $A2_ID116_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_2/listening/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 116, "q_conver" => "Today, the weather is going to be ____.",  'q_audio' =>  $AudioDomain . $G4_A2_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Sunny", "a_content" => 1],
            ['round' => 1, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Rainy", "a_content" => 0],
            ['round' => 1, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Windy", "a_content" => 0],

            ['round' => 2, 'assess_id' => 116, "q_conver" => "on Monday, it will be ____.",  'q_audio' =>  $AudioDomain . $G4_A2_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Sunny",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Rainy", "a_content" => 1],
            ['round' => 2, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Windy", "a_content" => 0],

            ['round' => 3, 'assess_id' => 116, "q_conver" => "On Wednesday, it will be ____.",  'q_audio' =>  $AudioDomain . $G4_A2_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Sunny", "a_content" => 0],
            ['round' => 3, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Rainy", "a_content" => 0],
            ['round' => 3, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Cloudy", "a_content" => 1],

            ['round' => 4, 'assess_id' => 116, "q_conver" => "On Friday, it will be ____.",  'q_audio' =>  $AudioDomain . $G4_A2_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Rainy", "a_content" => 0],
            ['round' => 4, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Cloudy", "a_content" => 0],
            ['round' => 4, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Snowy", "a_content" => 1],

            ['round' => 5, 'assess_id' => 116, "q_conver" => "On Saturday, it will be ____.",  'q_audio' =>  $AudioDomain . $G4_A2_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Cloudy", "a_content" => 0],
            ['round' => 5, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Snowy", "a_content" => 0],
            ['round' => 5, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Foggy", "a_content" => 1],


            ['round' => 6, 'assess_id' => 116, "q_conver" => "Where is Jack going to?",  'q_audio' =>  $AudioDomain . $G4_A2_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "Library", "a_content" => 0],
            ['round' => 6, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Supermarket", "a_content" => 1],
            ['round' => 6, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Swimming pool", "a_content" => 0],

            ['round' => 7, 'assess_id' => 116, "q_conver" => "When is his birthday?",  'q_audio' =>  $AudioDomain . $G4_A2_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "The 20th of August",  "a_content" => 1],
            ['round' => 7, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "The 12th of August", "a_content" => 0],
            ['round' => 7, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "The 22th of August", "a_content" => 0],

            ['round' => 8, 'assess_id' => 116, "q_conver" => "When is Max's birthday?",  'q_audio' =>  $AudioDomain . $G4_A2_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "The 14th of December", "a_content" => 0],
            ['round' => 8, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "The 15th of December", "a_content" => 1],
            ['round' => 8, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "The 20th of December", "a_content" => 0],

            ['round' => 9, 'assess_id' => 116, "q_conver" => "Which cake will Jack's mom buy?",  'q_audio' =>  $AudioDomain . $G4_A2_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "A cheese cake", "a_content" => 1],
            ['round' => 9, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "A banana cake", "a_content" => 0],
            ['round' => 9, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "A vanilla cake", "a_content" => 0],

            ['round' => 10, 'assess_id' => 116, "q_conver" => "Does Jack invite Max to his birthday party?",  'q_audio' =>  $AudioDomain . $G4_A2_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "Yes, he does.", "a_content" => 1],
            ['round' => 10, 'assess_id' => 116, "q_conver" => null,  'q_audio' =>  null, "q_content" => "No, he doesn't.", "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 2 ID 117 ( Grammar )
        ////////////////////////////////////////////////////////

        $G4_A2_grammar_2 = "Grade_4/" . "Assessments/" . "Assessment_2/" . "grammar/";
        $A2_ID117_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_2/grammar/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 117, "q_conver" => "Which months comes before January?", 'q_content' => "December", 'a_content' => 1],
            ['round' => 1, 'assess_id' => 117, "q_conver" => null, 'q_content' => "February", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 117, "q_conver" => null, 'q_content' => "March", 'a_content' => 0],

            ['round' => 2, 'assess_id' => 117, "q_conver" => "Which season comes before rainy season in Myanmar?", 'q_content' => "Summer", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Rainy season", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Winter", 'a_content' => 0],

            ['round' => 3, 'assess_id' => 117, "q_conver" => "Which season comes after rainy season in Myanmar?", 'q_content' => "Summer", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Rainy season", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Winter", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 117, "q_conver" => "What comes before the 24th?", 'q_content' => "Twenty-second", 'a_content' => 0],
            ['round' => 4, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Twenty-third", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Twenty-fourth", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 117, "q_conver" => "What comes after the 25th?", 'q_content' => "Twenty-fourth", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Twenty-fifth", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Twenty-sixth", 'a_content' => 1],


            ['round' => 6, 'assess_id' => 117, "q_conver" => "Which days comes after Monday?", 'q_content' => "Sunday", 'a_content' => 1],
            ['round' => 6, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Tuesday", 'a_content' => 0],
            ['round' => 6, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Wednesday", 'a_content' => 0],

            ['round' => 7, 'assess_id' => 117, "q_conver" => "Which days comes before Sunday?", 'q_content' => "Friday", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Saturday", 'a_content' => 1],
            ['round' => 7, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Monday", 'a_content' => 0],

            ['round' => 8, 'assess_id' => 117, "q_conver" => "What is the weather like in the hot season?", 'q_content' => "Sunny", 'a_content' => 1],
            ['round' => 8, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Rainy", 'a_content' => 0],
            ['round' => 8, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Cloudy", 'a_content' => 0],

            ['round' => 9, 'assess_id' => 117, "q_conver" => "What is the weather like in the rainy season?", 'q_content' => "Sunny", 'a_content' => 0],
            ['round' => 9, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Rainy", 'a_content' => 1],
            ['round' => 9, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Cloudy", 'a_content' => 0],

            ['round' => 10, 'assess_id' => 117, "q_conver" => "What is the weather like in the cold season?", 'q_content' => "Sunny", 'a_content' => 0],
            ['round' => 10, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Rainy", 'a_content' => 0],
            ['round' => 10, 'assess_id' => 117, "q_conver" => null, 'q_content' => "Snowy", 'a_content' => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 2 ID 118 ( Reading Passages (1) )
        ////////////////////////////////////////////////////////

        $G4_A2_reading_passage_1 = "Grade_4/" . "Assessments/" . "Assessment_2/" . "reading_passage_1/";
        $A2_ID118_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_2/reading_passage_1/";

        $A2_ID118_q_audio = [
            "there-seasons-britain",
            "sunny-warm",
            "rainy",
            "trees-color",
            "snowman"
        ];

        $A2_ID118_q_conver = [
            "There are ____ seasons in Britain.",
            "In ____, it is sunny and warm.",
            "In ____, sometimes, it is rainy.",
            "The trees' color changes in ____.",
            "In ____, you can make a snowman."
        ];

        $A2_ID118_q_audio_ans = [
            ["2", "3", "4"],
            ["spring", "summer", "winter"],
            ["spring", "summer", "winter"],
            ["spring", "autumn", "winter"],
            ["spring", "autumn", "winter"],
        ];

        $A2_ID118_q_audio_a_content = [
            [0, 0, 1],
            [1, 0, 0],
            [0, 1, 0],
            [0, 1, 0],
            [0, 0, 1],
        ];


        for ($i = 0; $i < count($A2_ID118_q_audio); $i++) {

            foreach ($A2_ID118_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 118,
                        "q_audio" => $AudioDomain . $G4_A2_reading_passage_1 . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A2_ID118_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 118,
                    "q_audio" => $AudioDomain . $G4_A2_reading_passage_1 . $A2_ID118_q_audio[$i] . ".mp3",
                    "q_conver" => $A2_ID118_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 118,
                    "q_audio" => $AudioDomain . $G4_A2_reading_passage_1 . "audio" . ".mp3",
                    "q_conver" => "Spring\n In spring the weather changes. One day it's rainy, then it's sunny and warm. There are lots of flowers and the trees are green.\nSummer\nSummer in Britain is often sunny. Put on your sun hats! It isn't hot every day, sometimes, it's rainy.\nAutumn\n In autumn,the trees are orange and brown. It's often rainy and windy. Take your umbrella!\nWinter\nWinter is cold. It's rainy and it's windy. Sometimes it's snowy. Put on your coat and play outside. Let's make a snowman!",
                    "q_content" => "Four seasons in Britain",
                    "background" => $A2_ID118_image . "bg.png"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 2 ID 119 ( Reading Passages (2) )
        ////////////////////////////////////////////////////////

        $G4_A2_reading_passage_2 = "Grade_4/" . "Assessments/" . "Assessment_2/" . "reading_passage_2/";
        $A2_ID119_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_2/reading_passage_2/";

        $A2_ID119_q_audio = [
            "lantern",
            "first-day-of",
            "to-spend-time",
            "red",
            "dumplings"
        ];

        $A2_ID119_q_conver = [
            "The lantern festival started in China.",
            "It is on the first day of the Chinese New Year.",
            "It is for families and friends to spend time together.",
            "The color \"red\" is thought to be lucky.",
            "People eat dumplings during the festival."
        ];

        $A2_ID119_q_audio_ans = [
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"]
        ];

        $A2_ID119_q_audio_a_content = [
            [1, 0],
            [0, 1],
            [1, 0],
            [1, 0],
            [1, 0],
        ];

        for ($i = 0; $i < count($A2_ID119_q_audio); $i++) {

            foreach ($A2_ID119_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 119,
                        'q_content' => $val,
                        'a_content' => $A2_ID119_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 119,
                    "q_audio" => $AudioDomain . $G4_A2_reading_passage_2 . $A2_ID119_q_audio[$i] . ".mp3",
                    "q_conver" => $A2_ID119_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 119,
                    "q_audio" => $AudioDomain . $G4_A2_reading_passage_2 . "audio" . ".mp3",
                    "q_conver" => "The Chinese Lantern Festival began in China. It is now celebrated around the world. It is on the last day of the Chinese New Year. It is a fun day for families and friends. During the festival, people hang lanterns. They are different shapes, sizes, and colors.  Many lanterns are red. It is thought to be a lucky color. During the festival, people eat sweet dumplings. You can watch fireworks displays, too. It is a famous festival.",
                    "q_content" => "Chinese lantern Festival",
                    "background" => $A2_ID119_image . "bg.png"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 3 ID 120 ( Matching )
        ////////////////////////////////////////////////////////

        $A3_I120_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_3/matching/";
        $A3_I120_matching = "Grade_4/" . "Assessments/" . "Assessment_3/" . "matching/";

        $G4_A3_I120_matching = [

            ['Playground', 'Market', 'Zoo', 'Pharmacy', "Cinema"],
            ["Crayon", "Drawing book", "Slippers", "Skirt", "Library"]

        ];

        $G4_A3_I120_matching_image = [

            ["Cinema",  'Pharmacy', 'Zoo', 'Playground', 'Market'],
            ["Skirt", "Library", "Drawing book", "Slippers", "Crayon"]

        ];

        for ($i = 0; $i < count($G4_A3_I120_matching); $i++) {
            foreach ($G4_A3_I120_matching[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 120, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $A3_I120_matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_A3_I120_matching_image[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 120, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $A3_I120_image . str_replace(' ', '-', strtolower($q)) . ".png",
                        'q_audio' => $AudioDomain . $A3_I120_matching . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 3 ID 121 ( Arranging words )
        ////////////////////////////////////////////////////////

        $G4_A3_ID121_arrange_letter = "Grade_4/" . "Assessments/" . "Assessment_3/" . "rearrange_letter/";
        $A3_ID121_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_3/rearrange_letter/";

        $a_ID121 = [
            "east", "west", "euro", "dollar", "kite", "doll", "ruler", "pen", "north", "south"
        ];

        foreach ($a_ID121 as $index => $i) {

            $q_ID121_shuf = str_shuffle($i);
            $q_ID121 = str_split($q_ID121_shuf);

            foreach ($q_ID121 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1, 'assess_id' => 121, 'q_content' => strtoupper($j),
                        'q_audio' => $AudioDomain . $G4_A3_ID121_arrange_letter . strtoupper($j) . ".mp3"
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 121,
                    'q_image' => $A3_ID121_image . str_replace(' ', '', strtolower($i)) . ".png",
                    'a_audio' => $AudioDomain . $G4_A3_ID121_arrange_letter . strtolower($i) . ".mp3",
                    'a_content' => strtoupper($i),
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 3 ID 122 ( Listening )
        ////////////////////////////////////////////////////////

        $G4_A3_listen_n_practice = "Grade_4/" . "Assessments/" . "Assessment_3/" . "listening/";
        $A3_ID122_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_3/listening/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 122, "q_conver" => "What is the currency of Myanmar?",  'q_audio' =>  $AudioDomain . $G4_A3_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Baht", "a_content" => 0],
            ['round' => 1, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Kyat", "a_content" => 1],
            ['round' => 1, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Euro", "a_content" => 0],

            ['round' => 2, 'assess_id' => 122, "q_conver" => "What is the east of Myanmar?",  'q_audio' =>  $AudioDomain . $G4_A3_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "China",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Thailand", "a_content" => 1],
            ['round' => 2, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "India", "a_content" => 0],

            ['round' => 3, 'assess_id' => 122, "q_conver" => "Where is China?",  'q_audio' =>  $AudioDomain . $G4_A3_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "East", "a_content" => 0],
            ['round' => 3, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Northeast", "a_content" => 1],
            ['round' => 3, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Northwest", "a_content" => 0],

            ['round' => 4, 'assess_id' => 122, "q_conver" => "Where is India?",  'q_audio' =>  $AudioDomain . $G4_A3_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "West", "a_content" => 0],
            ['round' => 4, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Northwest", "a_content" => 1],
            ['round' => 4, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "North", "a_content" => 0],

            ['round' => 5, 'assess_id' => 122, "q_conver" => "Where is Bangladesh?",  'q_audio' =>  $AudioDomain . $G4_A3_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "West", "a_content" => 1],
            ['round' => 5, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Northwest", "a_content" => 0],
            ['round' => 5, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "North", "a_content" => 0],


            ['round' => 6, 'assess_id' => 122, "q_conver" => "What is the customer looking for?",  'q_audio' =>  $AudioDomain . $G4_A3_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "Notebooks", "a_content" => 0],
            ['round' => 6, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Markers", "a_content" => 0],
            ['round' => 6, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Highlighters", "a_content" => 1],

            ['round' => 7, 'assess_id' => 122, "q_conver" => "How many does he want?",  'q_audio' =>  $AudioDomain . $G4_A3_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "2",  "a_content" => 0],
            ['round' => 7, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "3", "a_content" => 0],
            ['round' => 7, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "4", "a_content" => 1],

            ['round' => 8, 'assess_id' => 122, "q_conver" => "What color does he want?",  'q_audio' =>  $AudioDomain . $G4_A3_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "Blue", "a_content" => 0],
            ['round' => 8, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Green", "a_content" => 1],
            ['round' => 8, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Yellow", "a_content" => 0],

            ['round' => 9, 'assess_id' => 122, "q_conver" => "How much is each?",  'q_audio' =>  $AudioDomain . $G4_A3_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "$10", "a_content" => 0],
            ['round' => 9, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "$20", "a_content" => 1],
            ['round' => 9, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "$60", "a_content" => 0],

            ['round' => 10, 'assess_id' => 122, "q_conver" => "How much is it in total?",  'q_audio' =>  $AudioDomain . $G4_A3_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "$10", "a_content" => 0],
            ['round' => 10, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "$20", "a_content" => 0],
            ['round' => 10, 'assess_id' => 122, "q_conver" => null,  'q_audio' =>  null, "q_content" => "$60", "a_content" => 1],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 3 ID 123 ( Grammar )
        ////////////////////////////////////////////////////////

        $G4_A3_grammar_2 = "Grade_4/" . "Assessments/" . "Assessment_3/" . "grammar/";
        $A3_ID123_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_3/grammar/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 123, "q_conver" => "You can buy a barbie doll at ____.", 'q_content' => "a stationery shop", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 123, "q_conver" => null, 'q_content' => "a toy shop", 'a_content' => 1],
            ['round' => 1, 'assess_id' => 123, "q_conver" => null, 'q_content' => "a clothes shop", 'a_content' => 0],

            ['round' => 2, 'assess_id' => 123, "q_conver" => "How much ____ the pencil?", 'q_content' => "am", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 123, "q_conver" => null, 'q_content' => "is", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 123, "q_conver" => null, 'q_content' => "are", 'a_content' => 0],

            ['round' => 3, 'assess_id' => 123, "q_conver" => "How much ____ the books?", 'q_content' => "am", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 123, "q_conver" => null, 'q_content' => "is", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 123, "q_conver" => null, 'q_content' => "are", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 123, "q_conver" => "You can buy a ruler at ____.", 'q_content' => "a stationery shop", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 123, "q_conver" => null, 'q_content' => "a toy shop", 'a_content' => 0],
            ['round' => 4, 'assess_id' => 123, "q_conver" => null, 'q_content' => "a clothes shop", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 123, "q_conver" => "You can buy a cake at ____.", 'q_content' => "a stationery shop", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 123, "q_conver" => null, 'q_content' => "a toy shop", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 123, "q_conver" => null, 'q_content' => "a bakery", 'a_content' => 1],


            ['round' => 6, 'assess_id' => 123, "q_conver" => "How much ____ the pencil case?", 'q_content' => "am", 'a_content' => 0],
            ['round' => 6, 'assess_id' => 123, "q_conver" => null, 'q_content' => "is", 'a_content' => 1],
            ['round' => 6, 'assess_id' => 123, "q_conver" => null, 'q_content' => "are", 'a_content' => 0],

            ['round' => 7, 'assess_id' => 123, "q_conver" => "How much ____ the shoes?", 'q_content' => "am", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 123, "q_conver" => null, 'q_content' => "is", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 123, "q_conver" => null, 'q_content' => "are", 'a_content' => 1],

            ['round' => 8, 'assess_id' => 123, "q_conver" => "A: ____ is Laos? \nB: Laos is to the east of Myanmar.", 'q_content' => "What", 'a_content' => 0],
            ['round' => 8, 'assess_id' => 123, "q_conver" => null, 'q_content' => "Where", 'a_content' => 1],
            ['round' => 8, 'assess_id' => 123, "q_conver" => null, 'q_content' => "Why", 'a_content' => 0],

            ['round' => 9, 'assess_id' => 123, "q_conver" => "A: ____ is the currency of Laos? \nB: It's kip.", 'q_content' => "What", 'a_content' => 1],
            ['round' => 9, 'assess_id' => 123, "q_conver" => null, 'q_content' => "Where", 'a_content' => 0],
            ['round' => 9, 'assess_id' => 123, "q_conver" => null, 'q_content' => "Why", 'a_content' => 0],

            ['round' => 10, 'assess_id' => 123, "q_conver" => "A: What is the ____ of Thailand? \nB: It's Bangkok.", 'q_content' => "Currency", 'a_content' => 0],
            ['round' => 10, 'assess_id' => 123, "q_conver" => null, 'q_content' => "Capital", 'a_content' => 1],
            ['round' => 10, 'assess_id' => 123, "q_conver" => null, 'q_content' => "Language", 'a_content' => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 3 ID 124 ( Reading Passages (1) )
        ////////////////////////////////////////////////////////

        $G4_A3_reading_passage_1 = "Grade_4/" . "Assessments/" . "Assessment_3/" . "reading_passage_1/";
        $A3_ID124_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_3/reading_passage_1/";

        $A3_ID124_q_audio = [
            "went-to-cinema",
            "by-train",
            "shopping",
            "near-cereals",
            "father-drove-home"
        ];

        $A3_ID124_q_conver = [
            "Fred and his mother went to the cinema.",
            "They went to town by train.",
            "Fred enjoys shopping.",
            "The rice was near the cereals.",
            "Fred's father drove them home. "
        ];

        $A3_ID124_q_audio_ans = [
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"]
        ];

        $A3_ID124_q_audio_a_content = [
            [0, 1],
            [0, 1],
            [0, 1],
            [1, 0],
            [1, 0],
        ];


        for ($i = 0; $i < count($A3_ID124_q_audio); $i++) {

            foreach ($A3_ID124_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 124,
                        'q_content' => $val,
                        'a_content' => $A3_ID124_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 124,
                    "q_audio" => $AudioDomain . $G4_A3_reading_passage_1 . $A3_ID124_q_audio[$i] . ".mp3",
                    "q_conver" => $A3_ID124_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 124,
                    "q_audio" => $AudioDomain . $G4_A3_reading_passage_1 . "audio" . ".mp3",
                    "q_conver" => "Last Saturday afternoon, Fred's mother decided to go shopping. She asked Fred's help. So, they caught a bus to town. The bus  stopped near a big supermarket, and they went inside carrying a bag. Fred wasn't very happy because he hates shopping! He thinks is boring! Inside the shop, Fred's mother picked some goods that they needed - fruit, bread, some vegetables- but she couldn't find any rice. Fred, finally found it near the cereals. His mother was pleased. Then Fred's mother asked him to bring a bottle of coke. Fred went look for it, but the bottles were in a difficult place so he had to climb on a box to reach for it. When he jumped down, he fell and hurt his leg. To compensate him for his effort, Fred's mother bought him an ice-cream. His leg was hurting a lot so his mother phoned Fred's father that came to drive them home. When they got back, Fred went to bed to rest his leg!",
                    "background" => $A3_ID124_image . "bg.png"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 3 ID 125 ( Reading Passages (2) )
        ////////////////////////////////////////////////////////

        $G4_A3_reading_passage_2 = "Grade_4/" . "Assessments/" . "Assessment_3/" . "reading_passage_2/";
        $A3_ID125_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_3/reading_passage_2/";

        $A3_ID125_q_audio = [
            "in-europe",
            "south-korea",
            "china",
            "tokyo",
            "yuan"
        ];

        $A3_ID125_q_conver = [
            "Japan is in Europe.",
            "South Korea is to the east of Japan.",
            "China is to the northeast of Japan.",
            "The capital of Japan is Tokyo.",
            "The currency of Japan is Yuan."
        ];

        $A3_ID125_q_audio_ans = [
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"]
        ];

        $A3_ID125_q_audio_a_content = [
            [0, 1],
            [0, 1],
            [0, 1],
            [1, 0],
            [0, 1],
        ];

        for ($i = 0; $i < count($A3_ID125_q_audio); $i++) {

            foreach ($A3_ID125_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 125,
                        "q_audio" => $AudioDomain . $G4_A3_reading_passage_2 . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A3_ID125_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 125,
                    "q_audio" => $AudioDomain . $G4_A3_reading_passage_2 . $A3_ID125_q_audio[$i] . ".mp3",
                    "q_conver" => $A3_ID125_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 125,
                    "q_audio" => $AudioDomain . $G4_A3_reading_passage_2 . "audio" . ".mp3",
                    "q_conver" => "Japan is an island country on the Asian continent. The Japanese islands consist of 4 main islands. South Korea is to the west of Japan. Russia and China are to the northwest of Japan. The captial of Japan is Tokyo. The highest mountain in Japan is Mount Fuji. The curency of Japan is Yen.",
                    "background" => $A3_ID125_image . "bg.png"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 4 ID 126 ( Matching )
        ////////////////////////////////////////////////////////

        $A4_I126_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_4/matching/";
        $A4_I126_matching = "Grade_4/" . "Assessments/" . "Assessment_4/" . "matching/";

        $G4_A4_I126_matching = [

            ['Cauliflower', 'Mango', 'Pumpkin', 'Watermelon', "Cereal"],
            ["Blouse", "Dress", "Jacket", "Socks", "Flip flops"]

        ];

        $G4_A4_I126_matching_image = [

            ["Cereal",  'Watermelon', 'Pumpkin', 'Cauliflower', 'Mango'],
            ["Socks", "Flip flops", "Dress", "Jacket", "Blouse"]

        ];

        for ($i = 0; $i < count($G4_A4_I126_matching); $i++) {
            foreach ($G4_A4_I126_matching[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 126, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $A4_I126_matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_A4_I126_matching_image[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 126, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $A4_I126_image . str_replace(' ', '-', strtolower($q)) . ".png",
                        'q_audio' => $AudioDomain . $A4_I126_matching . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }

        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 4 ID 127 ( Arranging words )
        ////////////////////////////////////////////////////////

        $G4_A4_ID127_arrange_letter = "Grade_4/" . "Assessments/" . "Assessment_4/" . "rearrange_letter/";
        $A4_ID127_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_4/rearrange_letter/";

        $a_ID127 = [
            "hat", "cap", "pants", "jeans", "skirt", "pizza", "corn", "pudding", "sushi", "banana"
        ];

        foreach ($a_ID127 as $index => $i) {

            $q_ID127_shuf = str_shuffle($i);
            $q_ID127 = str_split($q_ID127_shuf);

            foreach ($q_ID127 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1, 'assess_id' => 127, 'q_content' => strtoupper($j),
                        'q_audio' => $AudioDomain . $G4_A4_ID127_arrange_letter . strtoupper($j) . ".mp3"
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 127,
                    'q_image' => $A4_ID127_image . str_replace(' ', '', strtolower($i)) . ".png",
                    'a_audio' => $AudioDomain . $G4_A4_ID127_arrange_letter . strtolower($i) . ".mp3",
                    'a_content' => strtoupper($i),
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 4 ID 128 ( Listening (1) )
        ////////////////////////////////////////////////////////

        $G4_A1_listening_1 = "Grade_4/" . "Assessments/" . "Assessment_4/" . "listening_1/";
        $A1_ID128_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_4/listening_1/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 128, "q_audio" => $AudioDomain . $G4_A1_listening_1 . "red-pants.mp3", 'q_image' => $A1_ID128_image . "red-pants.png", "q_content" => "True", "a_content" => 0],
            ['round' => 1, 'assess_id' => 128, "q_audio" => null, 'q_image' => null, "q_content" => "False", "a_content" => 1],

            ['round' => 2, 'assess_id' => 128, "q_audio" => $AudioDomain . $G4_A1_listening_1 . "green-cap.mp3", 'q_image' => $A1_ID128_image . "green-cap.png", "q_content" => "True", "a_content" => 1],
            ['round' => 2, 'assess_id' => 128, "q_audio" => null, 'q_image' => null, "q_content" => "False", "a_content" => 0],

            ['round' => 3, 'assess_id' => 128, "q_audio" => $AudioDomain . $G4_A1_listening_1 . "pink-shoes.mp3", 'q_image' => $A1_ID128_image . "pink-shoes.png", "q_content" => "True", "a_content" => 1],
            ['round' => 3, 'assess_id' => 128, "q_audio" => null, 'q_image' => null, "q_content" => "False", "a_content" => 0],

            ['round' => 4, 'assess_id' => 128, "q_audio" => $AudioDomain . $G4_A1_listening_1 . "pink-coat.mp3", 'q_image' => $A1_ID128_image . "pink-coat.png", "q_content" => "True", "a_content" => 0],
            ['round' => 4, 'assess_id' => 128, "q_audio" => null, 'q_image' => null, "q_content" => "False", "a_content" => 1],

            ['round' => 5, 'assess_id' => 128, "q_audio" => $AudioDomain . $G4_A1_listening_1 . "red-hat.mp3", 'q_image' => $A1_ID128_image . "red-hat.png", "q_content" => "True", "a_content" => 1],
            ['round' => 5, 'assess_id' => 128, "q_audio" => null, 'q_image' => null, "q_content" => "False", "a_content" => 0],

            ['round' => 6, 'assess_id' => 128, "q_audio" => $AudioDomain . $G4_A1_listening_1 . "green-pants.mp3", 'q_image' => $A1_ID128_image . "green-pants.png", "q_content" => "True", "a_content" => 0],
            ['round' => 6, 'assess_id' => 128, "q_audio" => null, 'q_image' => null, "q_content" => "False", "a_content" => 1],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 4 ID 129 ( Listening (2) )
        ////////////////////////////////////////////////////////

        $G4_A4_listen_2 = "Grade_4/" . "Assessments/" . "Assessment_4/" . "listening_2/";
        $A4_ID129_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_4/listening_2/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 129, "q_conver" => "Where is Jack from?",  'q_audio' =>  $AudioDomain . $G4_A4_listen_2 . "first-transcript-audio" . ".mp3", "q_content" => "America", "a_content" => 1],
            ['round' => 1, 'assess_id' => 129, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Italy", "a_content" => 0],
            ['round' => 1, 'assess_id' => 129, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Japan", "a_content" => 0],

            ['round' => 2, 'assess_id' => 129, "q_conver" => "Where is Emma from?",  'q_audio' =>  $AudioDomain . $G4_A4_listen_2 . "first-transcript-audio" . ".mp3", "q_content" => "America",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 129, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Italy", "a_content" => 1],
            ['round' => 2, 'assess_id' => 129, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Japan", "a_content" => 0],

            ['round' => 3, 'assess_id' => 129, "q_conver" => "What is Jack's favourite food?",  'q_audio' =>  $AudioDomain . $G4_A4_listen_2 . "first-transcript-audio" . ".mp3", "q_content" => "Sushi", "a_content" => 0],
            ['round' => 3, 'assess_id' => 129, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Pizza", "a_content" => 0],
            ['round' => 3, 'assess_id' => 129, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Fish and chips", "a_content" => 1],

            ['round' => 4, 'assess_id' => 129, "q_conver" => "What is Emma's favourite food?",  'q_audio' =>  $AudioDomain . $G4_A4_listen_2 . "first-transcript-audio" . ".mp3", "q_content" => "Sushi", "a_content" => 0],
            ['round' => 4, 'assess_id' => 129, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Pizza", "a_content" => 1],
            ['round' => 4, 'assess_id' => 129, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Fish and chips", "a_content" => 0],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 4 ID 130 ( Grammar )
        ////////////////////////////////////////////////////////

        $G4_A4_grammar = "Grade_4/" . "Assessments/" . "Assessment_4/" . "grammar/";
        $A4_ID130_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_4/grammar/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 130, "q_conver" => "Bananas ____ good for health.", 'q_content' => "am", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 130, "q_conver" => null, 'q_content' => "is", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 130, "q_conver" => null, 'q_content' => "are", 'a_content' => 1],

            ['round' => 2, 'assess_id' => 130, "q_conver" => "Chocolate ____ good for health.", 'q_content' => "am", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 130, "q_conver" => null, 'q_content' => "is", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 130, "q_conver" => null, 'q_content' => "are", 'a_content' => 0],

            ['round' => 3, 'assess_id' => 130, "q_conver" => "Biscuits ____ good for health.", 'q_content' => "am", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 130, "q_conver" => null, 'q_content' => "is", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 130, "q_conver" => null, 'q_content' => "are", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 130, "q_conver" => "Emily usually ____ bacon and eggs for breakfast.", 'q_content' => "has", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 130, "q_conver" => null, 'q_content' => "have", 'a_content' => 0],
            ['round' => 4, 'assess_id' => 130, "q_conver" => null, 'q_content' => "had", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 130, "q_conver" => "Jack and Jill usually ____ fride rice for lunch.", 'q_content' => "has", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 130, "q_conver" => null, 'q_content' => "have", 'a_content' => 1],
            ['round' => 5, 'assess_id' => 130, "q_conver" => null, 'q_content' => "had", 'a_content' => 0],


            ['round' => 6, 'assess_id' => 130, "q_conver" => "She is ____ a sweater and jeans.", 'q_content' => "wear", 'a_content' => 0],
            ['round' => 6, 'assess_id' => 130, "q_conver" => null, 'q_content' => "wears", 'a_content' => 0],
            ['round' => 6, 'assess_id' => 130, "q_conver" => null, 'q_content' => "wearing", 'a_content' => 1],

            ['round' => 7, 'assess_id' => 130, "q_conver" => "They ____ wearing school uniform.", 'q_content' => "am", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 130, "q_conver" => null, 'q_content' => "is", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 130, "q_conver" => null, 'q_content' => "are", 'a_content' => 1],

            ['round' => 8, 'assess_id' => 130, "q_conver" => "What ____ they wearing?", 'q_content' => "am", 'a_content' => 0],
            ['round' => 8, 'assess_id' => 130, "q_conver" => null, 'q_content' => "is", 'a_content' => 0],
            ['round' => 8, 'assess_id' => 130, "q_conver" => null, 'q_content' => "are", 'a_content' => 1],

            ['round' => 9, 'assess_id' => 130, "q_conver" => "I ____ to wear a dress.", 'q_content' => "like", 'a_content' => 1],
            ['round' => 9, 'assess_id' => 130, "q_conver" => null, 'q_content' => "likes", 'a_content' => 0],
            ['round' => 9, 'assess_id' => 130, "q_conver" => null, 'q_content' => "liking", 'a_content' => 0],

            ['round' => 10, 'assess_id' => 130, "q_conver" => "He ____ to wear a T-shirt and pants.", 'q_content' => "like", 'a_content' => 0],
            ['round' => 10, 'assess_id' => 130, "q_conver" => null, 'q_content' => "likes", 'a_content' => 1],
            ['round' => 10, 'assess_id' => 130, "q_conver" => null, 'q_content' => "liking", 'a_content' => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 4 ID 131 ( Reading Passages (1) )
        ////////////////////////////////////////////////////////

        $G4_A4_reading_passage_1 = "Grade_4/" . "Assessments/" . "Assessment_4/" . "reading_passage_1/";
        $A4_ID131_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_4/reading_passage_1/";

        $A4_ID131_q_audio = [
            "maria-long-brown-hair",
            "jack-bag",
            "peter-9",
            "maria-canada",
            "peter-fav-color",
            "jack-shoes"
        ];

        $A4_ID131_q_conver = [
            "Maria has long brown hair.",
            "Jack's bag is red.",
            "Peter is 9 years old.",
            "Maria is from Canada.",
            "Peter's favorite color is red.",
            "Jack's shoes are grey."
        ];

        $A4_ID131_q_audio_ans = [
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"]
        ];

        $A4_ID131_q_audio_a_content = [
            [0, 1],
            [0, 1],
            [1, 0],
            [0, 1],
            [1, 0],
            [0, 1],
        ];


        for ($i = 0; $i < count($A4_ID131_q_audio); $i++) {

            foreach ($A4_ID131_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 131,
                        'q_content' => $val,
                        'a_content' => $A4_ID131_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 131,
                    "q_audio" => $AudioDomain . $G4_A4_reading_passage_1 . $A4_ID131_q_audio[$i] . ".mp3",
                    "q_conver" => $A4_ID131_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 131,
                    "q_audio" => $AudioDomain . $G4_A4_reading_passage_1 . "audio" . ".mp3",
                    "q_conver" => "These are Maria, Jack, and Peter. They are friends. They love their school. Maria has short brown hair. Jack has small eyes and a big head. Peter has curly black hair. Maria's purse is purple, and her shoes are pink. She loves pink color. Jack's bag is blue, and his pants are blue too, but his T-shirt is yellow and red. Peter has got a basketball. He likes to play basketball. His shorts are green, and his shoes are grey. He has got a red bag too. His favorite color is red. Maria is 8 years old; Jack is 9 years old, and Peter is 9 years old too. Maria is from Mexico. Jack is from Canada, and Peter is from Ecuador. They have different nationalities.",
                    "background" => $A4_ID131_image . "bg.png"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 4 ID 132 ( Reading Passages (2) )
        ////////////////////////////////////////////////////////

        $G4_A4_reading_passage_2 = "Grade_4/" . "Assessments/" . "Assessment_4/" . "reading_passage_2/";
        $A4_ID132_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_4/reading_passage_2/";

        $A4_ID132_q_audio = [
            "meat",
            "bread",
            "apples",
            "sweets"
        ];

        $A4_ID132_q_conver = [
            "What are meat, fish and eggs good for?",
            "What is bread good for?",
            "What are apples and oranges good for?",
            "Are sweets good for your teeth?"
        ];

        $A4_ID132_q_audio_ans = [
            ["Growth", "Energy", "Health"],
            ["Growth", "Energy", "Health"],
            ["Growth", "Energy", "Health"],
            ["Yes, they are", "No, they aren't"]
        ];

        $A4_ID132_q_audio_a_content = [
            [1, 0, 0],
            [0, 1, 0],
            [0, 0, 1],
            [0, 1, 0],
        ];

        for ($i = 0; $i < count($A4_ID132_q_audio); $i++) {

            foreach ($A4_ID132_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 132,
                        "q_audio" => $AudioDomain . $G4_A4_reading_passage_2 . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A4_ID132_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 132,
                    "q_audio" => $AudioDomain . $G4_A4_reading_passage_2 . $A4_ID132_q_audio[$i] . ".mp3",
                    "q_conver" => $A4_ID132_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 132,
                    "q_audio" => $AudioDomain . $G4_A4_reading_passage_2 . "audio" . ".mp3",
                    "q_conver" => "Healthy food is good for you. You need to have shiny hair and strong bones. The best part about healthy food is that it is tasty. Meat, fish, and eggs are good for growth. Rice, bread and noodles are food for energy. Vegetables and fruits are food for your health. Though ice-creams, and sweets are tasty, only eat a few of them at a time. They can cause your teeth to ache. Eat healthy food and your body will thank you.",
                    "q_content" => "Healthy food",
                    "background" => $A4_ID132_image . "bg.png"
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 5 ID 133 ( Matching )
        ////////////////////////////////////////////////////////

        $A5_I133_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_5/matching/";
        $A5_I133_matching = "Grade_4/" . "Assessments/" . "Assessment_5/" . "matching/";

        $G4_A5_I133_matching = [

            ['Go to the library', 'Go to the art gallery', 'Go to the swimming pool', 'Go to the supermarket', "Go to shopping centre"],
            ["Go to the grandmother's home", "Go to the sports centre", "Write a letter", "Go to the music festival", "Send a letter"]

        ];

        $G4_A5_I133_matching_image = [

            ["Go to shopping centre",  'Go to the supermarket', 'Go to the swimming pool', 'Go to the library', 'Go to the art gallery'],
            ["Go to the music festival", "Send a letter", "Go to the sports centre", "Write a letter", "Go to the grandmother's home"]

        ];

        for ($i = 0; $i < count($G4_A5_I133_matching); $i++) {
            foreach ($G4_A5_I133_matching[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 133, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $A5_I133_matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G4_A5_I133_matching_image[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 133, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $A5_I133_image . str_replace(' ', '-', strtolower($q)) . ".png",
                        'q_audio' => $AudioDomain . $A5_I133_matching . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }

        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 5 ID 134 ( Arranging words )
        ////////////////////////////////////////////////////////

        $G4_A5_ID134_arrange_letter = "Grade_4/" . "Assessments/" . "Assessment_5/" . "rearrange_letter/";
        $A5_ID134_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_5/rearrange_letter/";

        $a_ID134 = [
            "dust", "listen", "phone", "watch", "colour", "play", "music", "ride", "go", "wear"
        ];

        foreach ($a_ID134 as $index => $i) {

            $q_ID134_shuf = str_shuffle($i);
            $q_ID134 = str_split($q_ID134_shuf);

            foreach ($q_ID134 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1, 'assess_id' => 134, 'q_content' => strtoupper($j),
                        'q_audio' => $AudioDomain . $G4_A5_ID134_arrange_letter . strtoupper($j) . ".mp3"
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 134,
                    'q_image' => $A5_ID134_image . str_replace(' ', '', strtolower($i)) . ".png",
                    'a_audio' => $AudioDomain . $G4_A5_ID134_arrange_letter . strtolower($i) . ".mp3",
                    'a_content' => strtoupper($i),
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4  Assessment 5 ID 135 ( Listening Practice )
        ////////////////////////////////////////////////////////

        $G4_A5_listen_n_practice = "Grade_4/" . "Assessments/" . "Assessment_5/" . "listening/";
        $A5_ID135_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_5/listening/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 135, "q_conver" => "When did Max phone his grandmother?",  'q_audio' =>  $AudioDomain . $G4_A5_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Monday", "a_content" => 1],
            ['round' => 1, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Tuesday", "a_content" => 0],
            ['round' => 1, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Wednesday", "a_content" => 0],

            ['round' => 2, 'assess_id' => 135, "q_conver" => "Where did Max go on Wednesday?",  'q_audio' =>  $AudioDomain . $G4_A5_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Shopping centre",  "a_content" => 1],
            ['round' => 2, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Music festival", "a_content" => 0],
            ['round' => 2, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Swimming pool", "a_content" => 0],

            ['round' => 3, 'assess_id' => 135, "q_conver" => "Whom did he go to the music festival with?",  'q_audio' =>  $AudioDomain . $G4_A5_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "Grandmother", "a_content" => 0],
            ['round' => 3, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Mother", "a_content" => 0],
            ['round' => 3, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Brother", "a_content" => 1],

            ['round' => 4, 'assess_id' => 135, "q_conver" => "What did he do on Friday?",  'q_audio' =>  $AudioDomain . $G4_A5_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "went to the music festival", "a_content" => 0],
            ['round' => 4, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "watched TV", "a_content" => 1],
            ['round' => 4, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "studied lessons", "a_content" => 0],

            ['round' => 5, 'assess_id' => 135, "q_conver" => "What did he do on Saturday?",  'q_audio' =>  $AudioDomain . $G4_A5_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "went to the swimming pool", "a_content" => 1],
            ['round' => 5, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "watched TV", "a_content" => 0],
            ['round' => 5, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "studied lessons", "a_content" => 0],

            ['round' => 6, 'assess_id' => 135, "q_conver" => "Did he go out on Sunday?",  'q_audio' =>  $AudioDomain . $G4_A5_listen_n_practice . "first-transcript-audio" . ".mp3", "q_content" => "went to the swimming pool", "a_content" => 0],
            ['round' => 6, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "watched TV", "a_content" => 0],
            ['round' => 6, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "studied lessons", "a_content" => 1],


            ['round' => 7, 'assess_id' => 135, "q_conver" => "Why is Jack calling Emma?",  'q_audio' =>  $AudioDomain . $G4_A5_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "To invite her for his birthday",  "a_content" => 1],
            ['round' => 7, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "To invite her for shopping", "a_content" => 0],
            ['round' => 7, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "To invite her for swimming", "a_content" => 0],

            ['round' => 8, 'assess_id' => 135, "q_conver" => "When is Jack's birthday?",  'q_audio' =>  $AudioDomain . $G4_A5_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "Today", "a_content" => 0],
            ['round' => 8, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Tonight", "a_content" => 0],
            ['round' => 8, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Tomorrow", "a_content" => 1],

            ['round' => 9, 'assess_id' => 135, "q_conver" => "What time will the party start?",  'q_audio' =>  $AudioDomain . $G4_A5_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "5pm", "a_content" => 0],
            ['round' => 9, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "6pm", "a_content" => 1],
            ['round' => 9, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "7pm", "a_content" => 0],

            ['round' => 10, 'assess_id' => 135, "q_conver" => "Will Emma come to the party?",  'q_audio' =>  $AudioDomain . $G4_A5_listen_n_practice . "sec-transcript-audio" . ".mp3", "q_content" => "Yes", "a_content" => 1],
            ['round' => 10, 'assess_id' => 135, "q_conver" => null,  'q_audio' =>  null, "q_content" => "No", "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////
        ///    Grade 4  Assessment 4 ID 136 ( Grammar )
        ////////////////////////////////////////////////////////

        $G4_A5_grammar = "Grade_4/" . "Assessments/" . "Assessment_5/" . "grammar/";
        $A4_ID136_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_5/grammar/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 136, "q_conver" => "I ____ go to the museum tomorrow.", 'q_content' => "am", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 136, "q_conver" => null, 'q_content' => "will", 'a_content' => 1],
            ['round' => 1, 'assess_id' => 136, "q_conver" => null, 'q_content' => "are", 'a_content' => 0],

            ['round' => 2, 'assess_id' => 136, "q_conver" => "Will you ____ to the swimming pool tomorrow?", 'q_content' => "go", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 136, "q_conver" => null, 'q_content' => "went", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 136, "q_conver" => null, 'q_content' => "going", 'a_content' => 0],

            ['round' => 3, 'assess_id' => 136, "q_conver" => "____ you like to join me?", 'q_content' => "Will", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 136, "q_conver" => null, 'q_content' => "Would", 'a_content' => 1],
            ['round' => 3, 'assess_id' => 136, "q_conver" => null, 'q_content' => "Are", 'a_content' => 0],

            ['round' => 4, 'assess_id' => 136, "q_conver" => "Emily ____ an ice-cream last night.", 'q_content' => "eat", 'a_content' => 0],
            ['round' => 4, 'assess_id' => 136, "q_conver" => null, 'q_content' => "ate", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 136, "q_conver" => null, 'q_content' => "eating", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 136, "q_conver" => "Jack and Jill ____ to school yesterday.", 'q_content' => "go", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 136, "q_conver" => null, 'q_content' => "went", 'a_content' => 1],
            ['round' => 5, 'assess_id' => 136, "q_conver" => null, 'q_content' => "going", 'a_content' => 0],


            ['round' => 6, 'assess_id' => 136, "q_conver" => "Anna will ____ to the shopping mall tomorrow.", 'q_content' => "go", 'a_content' => 1],
            ['round' => 6, 'assess_id' => 136, "q_conver" => null, 'q_content' => "went", 'a_content' => 0],
            ['round' => 6, 'assess_id' => 136, "q_conver" => null, 'q_content' => "going", 'a_content' => 0],

            ['round' => 7, 'assess_id' => 136, "q_conver" => "My sister ____ a letter yesterday.", 'q_content' => "write", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 136, "q_conver" => null, 'q_content' => "writes", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 136, "q_conver" => null, 'q_content' => "wrote", 'a_content' => 1],

            ['round' => 8, 'assess_id' => 136, "q_conver" => "Where ____ you go yesterday?", 'q_content' => "do", 'a_content' => 0],
            ['round' => 8, 'assess_id' => 136, "q_conver" => null, 'q_content' => "did", 'a_content' => 1],
            ['round' => 8, 'assess_id' => 136, "q_conver" => null, 'q_content' => "does", 'a_content' => 0],

            ['round' => 9, 'assess_id' => 136, "q_conver" => "Where ____ you go tomorrow?", 'q_content' => "do", 'a_content' => 0],
            ['round' => 9, 'assess_id' => 136, "q_conver" => null, 'q_content' => "did", 'a_content' => 0],
            ['round' => 9, 'assess_id' => 136, "q_conver" => null, 'q_content' => "will", 'a_content' => 1],

            ['round' => 10, 'assess_id' => 136, "q_conver" => "I ____ a bicycle on the beach last weekend.", 'q_content' => "ride", 'a_content' => 0],
            ['round' => 10, 'assess_id' => 136, "q_conver" => null, 'q_content' => "rode", 'a_content' => 1],
            ['round' => 10, 'assess_id' => 136, "q_conver" => null, 'q_content' => "riding", 'a_content' => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 5 ID 137 ( Reading Passages (1) )
        ////////////////////////////////////////////////////////

        $G4_A5_reading_passage_1 = "Grade_4/" . "Assessments/" . "Assessment_5/" . "reading_passage_1/";
        $A5_ID137_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_5/reading_passage_1/";

        $A5_ID137_q_audio = [
            "anna-go-last-holiday",
            "how-go-there",
            "wake-up",
            "afternoon",
            "evening",
            "swim-with"
        ];

        $A5_ID137_q_conver = [
            "Where did Anna go last holiday?",
            "How did she go there?",
            "Did she wake up early in the morning?",
            "What did they do in the afternoon?",
            "What did she do in the evening?",
            "Who did she swim with?"
        ];

        $A5_ID137_q_audio_ans = [
            ["the swimming pool", "another country", "the beach"],
            ["bt car", "by plane", "by boat"],
            ["Yes, she did", "No, she didn't"],
            ["walked", "had lunch", "cooked seafood"],
            ["swam", "rode the bicycle", "walk on the beach"],
            ["her sister ", "herself", "her borther"]
        ];

        $A5_ID137_q_audio_a_content = [
            [0, 0, 1],
            [0, 1, 0],
            [1, 0, 0],
            [0, 1, 0],
            [0, 1, 0],
            [0, 0, 1],
        ];


        for ($i = 0; $i < count($A5_ID137_q_audio); $i++) {

            foreach ($A5_ID137_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 137,
                        "q_audio" => $AudioDomain . $G4_A5_reading_passage_1 . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A5_ID137_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 137,
                    "q_audio" => $AudioDomain . $G4_A5_reading_passage_1 . $A5_ID137_q_audio[$i] . ".mp3",
                    "q_conver" => $A5_ID137_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 137,
                    "q_audio" => $AudioDomain . $G4_A5_reading_passage_1 . "audio" . ".mp3",
                    "q_conver" => "During my last holiday, I went to the beach with my family, my dad, my mom, my sister and my brother. We went there by car. In the early morning, I woke up and walked along the beach. It was so nice. I loved breathing fresh air. In the afternoon, we had a family dinner. We ate lobster, crabs and other seafood. It was delicious. In the evening, I rode a bicycle on the beach with my brother. We went swimming, too.",
                    "background" => $A5_ID137_image . "bg.png"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 4 Assessment 5 ID 138 ( Reading Passages (2) )
        ////////////////////////////////////////////////////////

        $G4_A5_reading_passage_2 = "Grade_4/" . "Assessments/" . "Assessment_5/" . "reading_passage_2/";
        $A5_ID138_image = $domain . "/storage/images/Grade_4/Assessments/Assessment_5/reading_passage_2/";

        $A5_ID138_q_audio = [
            "mon-thurs",
            "fri",
            "sat",
            "sun"
        ];

        $A5_ID138_q_conver = [
            "From Monday to Thursday, where will jack go to?",
            "On Friday, whom will he help?",
            "On Saturday, what will he do?",
            "On Sunday, who will he go to the swimming pool with?"
        ];

        $A5_ID138_q_audio_ans = [
            ["the swimming pool", "the beach", "the school"],
            ["Mother", "Father", "Friends"],
            ["help his mother", "have lunch", "cook something"],
            ["Friends", "Mother", "Father"],
        ];

        $A5_ID138_q_audio_a_content = [
            [0, 0, 1],
            [1, 0, 0],
            [0, 1, 0],
            [1, 0, 0],
        ];

        for ($i = 0; $i < count($A5_ID138_q_audio); $i++) {

            foreach ($A5_ID138_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 138,
                        "q_audio" => $AudioDomain . $G4_A5_reading_passage_2 . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A5_ID138_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 138,
                    "q_audio" => $AudioDomain . $G4_A5_reading_passage_2 . $A5_ID138_q_audio[$i] . ".mp3",
                    "q_conver" => $A5_ID138_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 138,
                    "q_audio" => $AudioDomain . $G4_A5_reading_passage_2 . "audio" . ".mp3",
                    "q_conver" => "I will have a busy week next week. From Monday to Thursday, I will go to school and study lessons. On Friday, I will go the shopping mall with my mother, buy groceries, and help my mother for cooking. On Saturday, I will have delicious lunch together with my family and review my lesson. On Sunday, I will go to the swimming pool and have fun with my friends.",
                    "background" => $A5_ID138_image . "bg.png"
                ],
            ]);
        }
    }
}
