<?php

namespace Database\Seeders\Assessment\Grade3;

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
        ////    Grade 3 Assessment 1 ID 73 ( Multiple Choice )
        ////////////////////////////////////////////////////////

        $G3_A1_multiple_choice = "Grade_3/" . "Assessments/" . "Assessment_1/" . "multiple_choice/";
        $A1_ID73_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_1/multiple_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "chef.png", "q_content" => "A Shopkeeper", "a_content" => 0],
            ['round' => 1, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Doctor", "a_content" => 0],
            ['round' => 1, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Chef", "a_content" => 1],

            ['round' => 2, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "farmer.png", "q_content" => "A Farmer", "a_content" => 1],
            ['round' => 2, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Teacher", "a_content" => 0],
            ['round' => 2, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Doctor", "a_content" => 0],

            ['round' => 3, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "writer.png", "q_content" => "A Shopkeeper", "a_content" => 0],
            ['round' => 3, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Farmer", "a_content" => 0],
            ['round' => 3, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Writer", "a_content" => 1],

            ['round' => 4, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "strong.png", "q_content" => "He is talkative", "a_content" => 0],
            ['round' => 4, 'assess_id' => 73, 'q_image' => null, "q_content" => "He is strong", "a_content" => 1],
            ['round' => 4, 'assess_id' => 73, 'q_image' => null, "q_content" => "He is funny", "a_content" => 0],

            ['round' => 5, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "clever.png", "q_content" => "She is strong", "a_content" => 0],
            ['round' => 5, 'assess_id' => 73, 'q_image' => null, "q_content" => "She is kind", "a_content" => 0],
            ['round' => 5, 'assess_id' => 73, 'q_image' => null, "q_content" => "She is clever", "a_content" => 1],

            ['round' => 6, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "helpful.png", "q_content" => "He is strong", "a_content" => 0],
            ['round' => 6, 'assess_id' => 73, 'q_image' => null, "q_content" => "He is helpful", "a_content" => 1],
            ['round' => 6, 'assess_id' => 73, 'q_image' => null, "q_content" => "He is funny", "a_content" => 0],

            ['round' => 7, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "artist.png", "q_content" => "An Engineer", "a_content" => 0],
            ['round' => 7, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Teacher", "a_content" => 0],
            ['round' => 7, 'assess_id' => 73, 'q_image' => null, "q_content" => "An Artist", "a_content" => 1],

            ['round' => 8, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "police.png", "q_content" => "Police", "a_content" => 1],
            ['round' => 8, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Dentist", "a_content" => 0],
            ['round' => 8, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Firefighter", "a_content" => 0],

            ['round' => 9, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "pilot.png", "q_content" => "An Actor", "a_content" => 0],
            ['round' => 9, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Musician", "a_content" => 0],
            ['round' => 9, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Pilot", "a_content" => 1],

            ['round' => 10, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "strawberry.png", "q_content" => "A Pear", "a_content" => 0],
            ['round' => 10, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Pineapple", "a_content" => 0],
            ['round' => 10, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Strawberry", "a_content" => 1],

            ['round' => 11, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "papaya.png", "q_content" => "A Mango", "a_content" => 0],
            ['round' => 11, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Grape", "a_content" => 0],
            ['round' => 11, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Papaya", "a_content" => 1],

            ['round' => 12, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "carrot.png", "q_content" => "An Eggplant", "a_content" => 0],
            ['round' => 12, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Cabbage", "a_content" => 0],
            ['round' => 12, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Carrot", "a_content" => 1],

            ['round' => 13, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "tomato.png", "q_content" => "A Tomato", "a_content" => 1],
            ['round' => 13, 'assess_id' => 73, 'q_image' => null, "q_content" => "A Potato", "a_content" => 0],
            ['round' => 13, 'assess_id' => 73, 'q_image' => null, "q_content" => "Asparagus", "a_content" => 0],

            ['round' => 14, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "cycling.png", "q_content" => "Running", "a_content" => 0],
            ['round' => 14, 'assess_id' => 73, 'q_image' => null, "q_content" => "Cycling", "a_content" => 1],
            ['round' => 14, 'assess_id' => 73, 'q_image' => null, "q_content" => "Archery", "a_content" => 0],

            ['round' => 15, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "swimming.png", "q_content" => "Judo", "a_content" => 0],
            ['round' => 15, 'assess_id' => 73, 'q_image' => null, "q_content" => "Swimming", "a_content" => 1],
            ['round' => 15, 'assess_id' => 73, 'q_image' => null, "q_content" => "Basketball", "a_content" => 0],

            ['round' => 16, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "tennis.png", "q_content" => "Tennis", "a_content" => 1],
            ['round' => 16, 'assess_id' => 73, 'q_image' => null, "q_content" => "Football", "a_content" => 0],
            ['round' => 16, 'assess_id' => 73, 'q_image' => null, "q_content" => "Badminton", "a_content" => 0],

            ['round' => 17, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "science.png", "q_content" => "English", "a_content" => 0],
            ['round' => 17, 'assess_id' => 73, 'q_image' => null, "q_content" => "Science", "a_content" => 1],
            ['round' => 17, 'assess_id' => 73, 'q_image' => null, "q_content" => "Maths", "a_content" => 0],

            ['round' => 18, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "social-study.png", "q_content" => "Social Studies", "a_content" => 1],
            ['round' => 18, 'assess_id' => 73, 'q_image' => null, "q_content" => "English", "a_content" => 0],
            ['round' => 18, 'assess_id' => 73, 'q_image' => null, "q_content" => "Maths", "a_content" => 0],

            ['round' => 19, 'assess_id' => 73, 'q_image' => $A1_ID73_image . "myanmar.png", "q_content" => "Myanmar", "a_content" => 1],
            ['round' => 19, 'assess_id' => 73, 'q_image' => null, "q_content" => "English", "a_content" => 0],
            ['round' => 19, 'assess_id' => 73, 'q_image' => null, "q_content" => "Maths", "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 1 ID 74 ( Listen and Fill in the blank )
        ////////////////////////////////////////////////////////////////////

        $G3_A1_listen_n_fill_in_the_blank = "Grade_3/" . "Assessments/" . "Assessment_1/" . "listen_n_fill_in_the_blank/";
        $A1_ID74_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_1/listen_n_fill_in_the_blank/";

        $a_content_G3_A1_ID74 = [
            'doctor', 'student', 'sailor', 'shopkeeper', 'farmer'
        ];

        foreach ($a_content_G3_A1_ID74 as $key => $value) {
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'assess_id' => 74, 'round' => $key + 1,
                    'q_image' => $A1_ID74_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_A1_listen_n_fill_in_the_blank . $value . ".mp3",
                    'a_content' => $value,
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 1 ID 75 ( Multiple Choice (Listening) )
        ////////////////////////////////////////////////////////


        $G3_A1_listen_n_choice = "Grade_3/" . "Assessments/" . "Assessment_1/" . "multiple_choice_listening/";
        $A1_ID75_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_1/multiple_choice_listening/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 75, 'q_audio' =>  $AudioDomain . $G3_A1_listen_n_choice . "pineapple-audio" . ".mp3", "q_content" => "pear", "a_content" => 0],
            ['round' => 1, 'assess_id' => 75, 'q_audio' =>  null, "q_content" => "pineapple", "a_content" => 1],
            ['round' => 1, 'assess_id' => 75, 'q_audio' =>  null, "q_content" => "papaya", "a_content" => 0],

            ['round' => 2, 'assess_id' => 75, 'q_audio' =>  $AudioDomain . $G3_A1_listen_n_choice . "potato-audio" . ".mp3", "q_content" => "eggplant",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 75, 'q_audio' =>  null, "q_content" => "tomato", "a_content" => 0],
            ['round' => 2, 'assess_id' => 75, 'q_audio' =>  null, "q_content" => "potato", "a_content" => 1],

            ['round' => 3, 'assess_id' => 75, 'q_audio' =>  $AudioDomain . $G3_A1_listen_n_choice . "swimming-audio" . ".mp3", "q_content" => "running", "a_content" => 0],
            ['round' => 3, 'assess_id' => 75, 'q_audio' =>  null, "q_content" => "cycling", "a_content" => 0],
            ['round' => 3, 'assess_id' => 75, 'q_audio' =>  null, "q_content" => "swimming", "a_content" => 1],

            ['round' => 4, 'assess_id' => 75, 'q_audio' =>  $AudioDomain . $G3_A1_listen_n_choice . "maths-audio" . ".mp3", "q_content" => "English", "a_content" => 0],
            ['round' => 4, 'assess_id' => 75, 'q_audio' =>  null, "q_content" => "Maths", "a_content" => 1],
            ['round' => 4, 'assess_id' => 75, 'q_audio' =>  null, "q_content" => "Science", "a_content" => 0],

            ['round' => 5, 'assess_id' => 75, 'q_audio' =>  $AudioDomain . $G3_A1_listen_n_choice . "cycling-audio" . ".mp3", "q_content" => "cycling", "a_content" => 1],
            ['round' => 5, 'assess_id' => 75, 'q_audio' =>  null, "q_content" => "swimming", "a_content" => 0],
            ['round' => 5, 'assess_id' => 75, 'q_audio' =>  null, "q_content" => "archery", "a_content" => 0],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 1 ID 76 ( Matching )
        ////////////////////////////////////////////////////////

        $A1_I76_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_1/matching/";
        $A1_I76_matching = "Grade_3/" . "Assessments/" . "Assessment_1/" . "matching/";


        $G3_A1_I76_matching = [

            ['What is she like', 'What does he look like', 'What is he', 'Do you want to be a pilot', "What is your favorite fruit"],
            ['Do you like strawberries', 'What sport are you good at', 'What is your favorite subject', "What subject are you good at",  'What is your sister like'],

        ];

        $G3_A1_I76_matching_image = [

            ["He is handsome", 'My favorite fruit is watermelon', 'She is kind', 'He is a doctor', "No, I don't. I want to be an artist"],
            ["I am good at swimming", 'I am good at Maths', 'My favorite subject is English', "Yes, I do. But my brother doesn't", 'My sister is clever'],

        ];

        $q_content1_ID76 = [
            ["A", "B", "C", "D", "E"],
            ["F", "G", "H", "I", "J"]
        ];
        $q_content2_ID76 = [
            ["C", "A", "D", "E", "B"],
            ["I", "F", "H", "G", "J"]
        ];

        for ($i = 0; $i < count($G3_A1_I76_matching); $i++) {

            foreach ($G3_A1_I76_matching[$i] as $index => $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 76, 'round' => $i + 1, 'q_content' => $q_content1_ID76[$i][$index],
                        'q_image' => $q . "?", 'q_audio' => $AudioDomain . $A1_I76_matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G3_A1_I76_matching_image[$i] as $index => $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 76, 'round' => $i + 1, 'q_content' => $q_content2_ID76[$i][$index],
                        'q_image' => $q . ".", 'q_audio' => $AudioDomain . $A1_I76_matching . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 1 ID 77 ( Reading Passages (1) )
        ////////////////////////////////////////////////////////

        $G3_A1_reading_passage_1 = "Grade_3/" . "Assessments/" . "Assessment_1/" . "reading_passage_1/";
        $A1_ID77_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_1/reading_passage_1/";

        $A1_ID77_q_audio = [
            "toby-fav-sport",
            "where-tennis",
            "how-many-days",
            "have-matches",
            "likes-basketball-too",
        ];

        $A1_ID77_q_conver = [
            "What is Toby's favorite sport?",
            "Where does he play tennis?",
            "How many days does he train a week?",
            "When do they have matches?",
            "Who likes basketball too in his family?",
        ];

        $A1_ID77_q_audio_ans = [
            ["Tennis", "Basketball", "Football"],
            ["At school", "At home", "In the park"],
            [2, 4, 3],
            ["Friday", "Saturday", "Sunday"],
            ["His brother", "His sister", "His father"],
        ];

        $A1_ID77_q_audio_a_content = [
            [0, 1, 0],
            [1, 0, 0],
            [0, 1, 0],
            [0, 0, 1],
            [0, 0, 1],
        ];


        for ($i = 0; $i < count($A1_ID77_q_audio); $i++) {

            foreach ($A1_ID77_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 77,
                        "q_audio" => $AudioDomain . $G3_A1_reading_passage_1 . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A1_ID77_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 77,
                    "q_audio" => $AudioDomain . $G3_A1_reading_passage_1 . $A1_ID77_q_audio[$i] . ".mp3",
                    "q_conver" => $A1_ID77_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 77,
                    "q_audio" => $AudioDomain . $G3_A1_reading_passage_1 . "toby-audio" . ".mp3",
                    "q_conver" => "My name is Toby. I like sports. My favorite sport is basketball. I play tennis at school. I am in the school basketball team and we train four days a week, on Mondays, Tuesdays, Wednesdays, Thursdays and Fridays. We have matches every Sunday. The matches are very exciting. My father always comes to the match. He also likes basketball.",
                    "q_content" => "My favorite sport",
                    "background" => $A1_ID77_image . "bg.png"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 1 ID 78 ( Reading Passages (2) )
        ////////////////////////////////////////////////////////

        $G3_A1_reading_passage_2 = "Grade_3/" . "Assessments/" . "Assessment_1/" . "reading_passage_2/";
        $A1_ID78_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_1/reading_passage_2/";

        $A1_ID78_q_audio = [
            "toby-coffee-bread",
            "janes-vege",
            "toby-fried-chi",
            "janes-fried-chi",
            "toby-janes-fish",
        ];

        $A1_ID78_q_conver = [
            "Toby likes coffee and bread for breakfast.",
            "Janes doesn't like vegetables.",
            "Toby doesn't like fried chicken.",
            "Janes doesn't like fried chicken.",
            "Toby and Janes don't like fish.",
        ];

        $A1_ID78_q_audio_ans = [
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"]
        ];

        $A1_ID78_q_audio_a_content = [
            [1, 0],
            [1, 0],
            [0, 1],
            [1, 0],
            [1, 0],
        ];

        for ($i = 0; $i < count($A1_ID78_q_audio); $i++) {

            foreach ($A1_ID78_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 78,
                        'q_content' => $val,
                        'a_content' => $A1_ID78_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 78,
                    "q_audio" => $AudioDomain . $G3_A1_reading_passage_2 . $A1_ID78_q_audio[$i] . ".mp3",
                    "q_conver" => $A1_ID78_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 78,
                    "q_audio" => $AudioDomain . $G3_A1_reading_passage_2 . "jane-toby-audio" . ".mp3",
                    "q_conver" => "Janes: what is your favorite food? Toby: My favorite food is fried chicken. I like coffee and bread for breakfast. I like fried chicken and rice for lunch and dinner. But I don't like fish. What about you? Janes: I don't like fried chicken. My favorite food is hamburger. I also like beef steak. They are the best. I don't eat vegetables a lot. I don't like fish either.",
                    "q_content" => "My favorite sport",
                    "background" => $A1_ID78_image . "bg.png"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 2 ID 79 ( Vocabulary )
        ////////////////////////////////////////////////////////

        $G3_A2_ID79_arrange_letter = "Grade_3/" . "Assessments/" . "Assessment_2/" . "rearrange_letter/";
        $A2_ID79_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_2/rearrange_letter/";

        $a_ID79 = [
            "bedroom", "bathroom", "livingroom", "parrot", "goldfish",
            "squirrel", "rabbit", "monkey", "bear", "panda",
            "armchair", "fridge", "spaghetti", "yoghurt", "cheese",
            "blanket", "alarmclock", "circle", "triangle", "square"
        ];

        foreach ($a_ID79 as $index => $i) {

            $q_ID79_shuf = str_shuffle($i);
            $q_ID79 = str_split($q_ID79_shuf);

            foreach ($q_ID79 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1, 'assess_id' => 79, 'q_content' => strtoupper($j),
                        'q_audio' => $AudioDomain . $G3_A2_ID79_arrange_letter . strtoupper($j) . ".mp3"
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 79,
                    'q_image' => $A2_ID79_image . str_replace(' ', '', strtolower($i)) . ".png",
                    'a_audio' => $AudioDomain . $G3_A2_ID79_arrange_letter . strtolower($i) . ".mp3",
                    'a_content' => strtoupper($i),
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 2 ID 80 ( Listen and Choice )
        ////////////////////////////////////////////////////////


        $G3_A2_listen_n_choice = "Grade_3/" . "Assessments/" . "Assessment_2/" . "listen_n_choice/";
        $A2_ID80_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_2/listen_n_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 80, "q_conver" => "An alarm clock ____",  'q_audio' =>  $AudioDomain . $G3_A2_listen_n_choice . "christina-audio" . ".mp3", "q_content" => "Yes", "a_content" => 1],
            ['round' => 1, 'assess_id' => 80, "q_conver" => null,  'q_audio' =>  null, "q_content" => "No", "a_content" => 0],

            ['round' => 2, 'assess_id' => 80, "q_conver" => "A lamp ____",  'q_audio' =>  $AudioDomain . $G3_A2_listen_n_choice . "christina-audio" . ".mp3", "q_content" => "Yes",  "a_content" => 1],
            ['round' => 2, 'assess_id' => 80, "q_conver" => null,  'q_audio' =>  null, "q_content" => "No", "a_content" => 0],

            ['round' => 3, 'assess_id' => 80, "q_conver" => "A bookshelf ____",  'q_audio' =>  $AudioDomain . $G3_A2_listen_n_choice . "christina-audio" . ".mp3", "q_content" => "Yes", "a_content" => 1],
            ['round' => 3, 'assess_id' => 80, "q_conver" => null,  'q_audio' =>  null, "q_content" => "No", "a_content" => 0],

            ['round' => 4, 'assess_id' => 80, "q_conver" => "A TV ____",  'q_audio' =>  $AudioDomain . $G3_A2_listen_n_choice . "christina-audio" . ".mp3", "q_content" => "Yes", "a_content" => 0],
            ['round' => 4, 'assess_id' => 80, "q_conver" => null,  'q_audio' =>  null, "q_content" => "No", "a_content" => 1],

            ['round' => 5, 'assess_id' => 80, "q_conver" => "A closet ____",  'q_audio' =>  $AudioDomain . $G3_A2_listen_n_choice . "christina-audio" . ".mp3", "q_content" => "Yes", "a_content" => 1],
            ['round' => 5, 'assess_id' => 80, "q_conver" => null,  'q_audio' =>  null, "q_content" => "No", "a_content" => 0],


            ['round' => 6, 'assess_id' => 80, "q_conver" => "Big room ____",  'q_audio' =>  $AudioDomain . $G3_A2_listen_n_choice . "anna-tom-audio" . ".mp3", "q_content" => "Anna", "a_content" => 1],
            ['round' => 6, 'assess_id' => 80, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Tom", "a_content" => 0],

            ['round' => 7, 'assess_id' => 80, "q_conver" => "Small room ____",  'q_audio' =>  $AudioDomain . $G3_A2_listen_n_choice . "anna-tom-audio" . ".mp3", "q_content" => "Anna",  "a_content" => 0],
            ['round' => 7, 'assess_id' => 80, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Tom", "a_content" => 1],

            ['round' => 8, 'assess_id' => 80, "q_conver" => "A computer ____",  'q_audio' =>  $AudioDomain . $G3_A2_listen_n_choice . "anna-tom-audio" . ".mp3", "q_content" => "Anna", "a_content" => 0],
            ['round' => 8, 'assess_id' => 80, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Tom", "a_content" => 1],

            ['round' => 9, 'assess_id' => 80, "q_conver" => "A closet ____",  'q_audio' =>  $AudioDomain . $G3_A2_listen_n_choice . "anna-tom-audio" . ".mp3", "q_content" => "Anna", "a_content" => 1],
            ['round' => 9, 'assess_id' => 80, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Tom", "a_content" => 0],

            ['round' => 10, 'assess_id' => 80, "q_conver" => "Toys ____",  'q_audio' =>  $AudioDomain . $G3_A2_listen_n_choice . "anna-tom-audio" . ".mp3", "q_content" => "Anna", "a_content" => 1],
            ['round' => 10, 'assess_id' => 80, "q_conver" => null,  'q_audio' =>  null, "q_content" => "Tom", "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 2 ID 81 ( Vocabulary )
        ////////////////////////////////////////////////////////

        $G3_A2_ID81_arrange_letter = "Grade_3/" . "Assessments/" . "Assessment_2/" . "vocab/";
        $A2_ID81_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_2/vocab/";

        $a_ID81 = [
            "There is a lamp on the floor.",
            "There is a book on the table.",
            "There is a bike under the stairs.",
            "There is a pet in the house.",
            "There are five windows in the house.",
            "There is a blanket on the bed.",
            "There is a closet in the bedroom.",
            "There is a sofa in the living room.",
            "There is a fridge in the kitchen.",
            "There are posters on the wall."
        ];

        $audio_img_ID81 = [
            "lamp", "book", "bike", "pet", "five-windows", "blanket", "closet", "sofa", "fridge", "posters"
        ];

        foreach ($a_ID81 as $index => $i) {

            $q_ID81 = explode(" ", $i);
            shuffle($q_ID81);

            foreach ($q_ID81 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1,
                        'assess_id' => 81,
                        'q_content' => $j,
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 81,
                    'q_image' => $A2_ID81_image . str_replace(' ', '', $audio_img_ID81[$index]) . ".png",
                    'a_audio' => $AudioDomain . $G3_A2_ID81_arrange_letter . $audio_img_ID81[$index] . ".mp3",
                    'a_content' => $i,
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 2 ID 82 ( Reading Passages )
        ////////////////////////////////////////////////////////

        $G3_A2_reading_passage = "Grade_3/" . "Assessments/" . "Assessment_2/" . "reading_passage/";
        $A2_ID82_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_2/reading_passage/";

        $A2_ID82_q_audio = [
            "pigs",
            "cows",
            "plays-with",
            "dogs",
            "feeds-animals",
        ];

        $A2_ID82_q_conver = [
            "How many pigs are there?",
            "How many cows are there?",
            "She plays with her ____.",
            "How many dogs does she have?",
            "She feeds the animals ____.",
        ];

        $A2_ID82_q_audio_ans = [
            ["four", "two", "five"],
            ["nine", "ten", "eight"],
            ["pigs", "cows", "dogs"],
            ["three", "four", "one"],
            ["everyday", "every Sunday", "every Saturday"],
        ];

        $A2_ID82_q_audio_a_content = [
            [1, 0, 0],
            [0, 1, 0],
            [0, 0, 1],
            [1, 0, 0],
            [1, 0, 0],
        ];

        for ($i = 0; $i < count($A2_ID82_q_audio); $i++) {

            foreach ($A2_ID82_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 82,
                        "q_audio" => $AudioDomain . $G3_A2_reading_passage . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A2_ID82_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 82,
                    "q_audio" => $AudioDomain . $G3_A2_reading_passage . $A2_ID82_q_audio[$i] . ".mp3",
                    "q_conver" => $A2_ID82_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 82,
                    "q_audio" => $AudioDomain . $G3_A2_reading_passage . "anna-audio" . ".mp3",
                    "q_conver" => "Anna has a farm. It is a beautiful farm. On the farm,There are a lot of animals. There are ten cows, eight goats and five sheep. There are also four pigs. They all are making noises. Anna feeds them every day. She loves all the animals on the farm. On the weekends, she usually plays with her dog. She has three dogs.",
                    "q_content" => "At the farm",
                    "background" => $A2_ID82_image . "bg.png"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 2 ID 83 ( Reading (2) )
        ////////////////////////////////////////////////////////////////////

        $G3_A2_reading = "Grade_3/" . "Assessments/" . "Assessment_2/" . "reading/";
        $A2_ID83_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_2/reading/";

        $a_content_G3_A2_ID83 = [
            "The ocean has bright blue water filled with waves.",
            "Many different types of sea animals live in the ocean.",
            "The ocean is blue.",
            "There are five big oceans in the world.",
            "We can see fish, turtles, octopuses, starfish, seahorses, sharks and dolphins."
        ];

        $img_audio_ID83 = [
            "ocean-have", "live-in-ocean", "color-ocean", "how-many-oceans", "see-in-ocean"
        ];

        foreach ($a_content_G3_A2_ID83 as $key => $value) {
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'assess_id' => 83, 'round' => $key + 1,
                    'q_image' => $A2_ID83_image . $img_audio_ID83[$key] . ".png",
                    'q_audio' => $AudioDomain . $G3_A2_reading . $img_audio_ID83[$key] . ".mp3",
                    'a_content' => $value,
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 3 ID 84 ( Vacabulary (1) )
        ////////////////////////////////////////////////////////

        $A3_I84_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_3/vocab_1/";
        $A3_I84_vocab_1 = "Grade_3/" . "Assessments/" . "Assessment_3/" . "vocab_1/";

        $G3_A3_I84_vocab_1 = [

            ['Work in groups', 'Draw pictures', 'Playing the piano', 'Planting', "Riding a bike"],
            ['Barber shop', 'Cafeteria', 'Bakery', "Wash the clothes",  'Throw the rubbish out'],

        ];

        $G3_A3_I84_vocab_1_image = [

            ["Riding a bike", 'Playing the piano', 'Planting', 'Work in groups', 'Draw pictures'],
            ["Wash the clothes", 'Bakery', 'Throw the rubbish out',  'Barber shop', 'Cafeteria'],

        ];

        for ($i = 0; $i < count($G3_A3_I84_vocab_1); $i++) {
            foreach ($G3_A3_I84_vocab_1[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 84, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $A3_I84_vocab_1 .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G3_A3_I84_vocab_1_image[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 84, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $A3_I84_image . str_replace(' ', '-', strtolower($q)) . ".png",
                        'q_audio' => $AudioDomain . $A3_I84_vocab_1 . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }

        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 3 ID 85 ( Vocabulary (2) )
        ////////////////////////////////////////////////////////

        $G3_A3_ID85_arrange_letter = "Grade_3/" . "Assessments/" . "Assessment_3/" . "vocab_2/";
        $A3_ID85_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_3/vocab_2/";

        $a_ID85 = [
            "yellow", "buttons", "green", "laundromat", "drinking"
        ];

        foreach ($a_ID85 as $index => $i) {

            $q_ID85_shuf = str_shuffle($i);
            $q_ID85 = str_split($q_ID85_shuf);

            foreach ($q_ID85 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1, 'assess_id' => 85, 'q_content' => strtoupper($j),
                        'q_audio' => $AudioDomain . $G3_A3_ID85_arrange_letter . strtoupper($j) . ".mp3"
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 85,
                    'q_image' => $A3_ID85_image . str_replace(' ', '', strtolower($i)) . ".png",
                    'a_audio' => $AudioDomain . $G3_A3_ID85_arrange_letter . strtolower($i) . ".mp3",
                    'a_content' => strtoupper($i),
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 3 ID 86 ( Vocabulary (3) )
        ////////////////////////////////////////////////////////

        $G3_A3_multiple_choice = "Grade_3/" . "Assessments/" . "Assessment_3/" . "vocab_3/";
        $A3_ID86_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_3/vocab_3/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 86, 'q_image' => $A3_ID86_image . "swimming.png", "q_content" => "go skiing", "a_content" => 0],
            ['round' => 1, 'assess_id' => 86, 'q_image' => null, "q_content" => "playing computer game", "a_content" => 0],
            ['round' => 1, 'assess_id' => 86, 'q_image' => null, "q_content" => "go swimming", "a_content" => 1],

            ['round' => 2, 'assess_id' => 86, 'q_image' => $A3_ID86_image . "cards.png", "q_content" => "reading", "a_content" => 0],
            ['round' => 2, 'assess_id' => 86, 'q_image' => null, "q_content" => "playing cards", "a_content" => 1],
            ['round' => 2, 'assess_id' => 86, 'q_image' => null, "q_content" => "singing", "a_content" => 0],

            ['round' => 3, 'assess_id' => 86, 'q_image' => $A3_ID86_image . "drug.png", "q_content" => "clinic", "a_content" => 0],
            ['round' => 3, 'assess_id' => 86, 'q_image' => null, "q_content" => "drug store", "a_content" => 1],
            ['round' => 3, 'assess_id' => 86, 'q_image' => null, "q_content" => "hotel", "a_content" => 0],

            ['round' => 4, 'assess_id' => 86, 'q_image' => $A3_ID86_image . "library.png", "q_content" => "study in the library", "a_content" => 1],
            ['round' => 4, 'assess_id' => 86, 'q_image' => null, "q_content" => "clean the classroom", "a_content" => 0],
            ['round' => 4, 'assess_id' => 86, 'q_image' => null, "q_content" => "play with friends", "a_content" => 0],

            ['round' => 5, 'assess_id' => 86, 'q_image' => $A3_ID86_image . "work.png", "q_content" => "work in pair", "a_content" => 1],
            ['round' => 5, 'assess_id' => 86, 'q_image' => null, "q_content" => "work alone", "a_content" => 0],
            ['round' => 5, 'assess_id' => 86, 'q_image' => null, "q_content" => "work in group", "a_content" => 0],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 3 ID 87 ( Listen (1`) )
        ////////////////////////////////////////////////////////


        $G3_A3_listen_1 = "Grade_3/" . "Assessments/" . "Assessment_3/" . "listen_1/";
        $A3_ID87_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_3/listen_1/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 87,  'q_audio' =>  $AudioDomain . $G3_A3_listen_1 . "thirteen" . ".mp3", "q_content" => 13, "a_content" => 1],
            ['round' => 1, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 30, "a_content" => 0],
            ['round' => 1, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 31, "a_content" => 0],

            ['round' => 2, 'assess_id' => 87,  'q_audio' =>  $AudioDomain . $G3_A3_listen_1 . "forty" . ".mp3", "q_content" => 14,  "a_content" => 0],
            ['round' => 2, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 40, "a_content" => 1],
            ['round' => 2, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 41, "a_content" => 0],

            ['round' => 3, 'assess_id' => 87,  'q_audio' =>  $AudioDomain . $G3_A3_listen_1 . "fifteen" . ".mp3", "q_content" => 15, "a_content" => 1],
            ['round' => 3, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 50, "a_content" => 0],
            ['round' => 3, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 51, "a_content" => 0],

            ['round' => 4, 'assess_id' => 87,  'q_audio' =>  $AudioDomain . $G3_A3_listen_1 . "sixty" . ".mp3", "q_content" => 16, "a_content" => 0],
            ['round' => 4, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 60, "a_content" => 1],
            ['round' => 4, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 61, "a_content" => 0],

            ['round' => 5, 'assess_id' => 87,  'q_audio' =>  $AudioDomain . $G3_A3_listen_1 . "seventeen" . ".mp3", "q_content" => 17, "a_content" => 1],
            ['round' => 5, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 70, "a_content" => 0],
            ['round' => 5, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 71, "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 3 ID 88 ( Listen (2) )
        ////////////////////////////////////////////////////////

        $A3_I88_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_3/listen_2/";
        $G3_A3_ID88_listen_2_path = "Grade_3/" . "Assessments/" . "Assessment_3/" . "listen_2/";

        DB::table('assessment_ans_n_ques')->insert([

            ["round" => 1, "assess_id" => 88, "q_image" => $A3_I88_image . "brush.png", "q_audio" => null, "a_content" => 1],
            ["round" => 1, "assess_id" => 88, "q_image" => $A3_I88_image . "sweep.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "assess_id" => 88, "q_image" => $A3_I88_image . "throw.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "assess_id" => 88, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_A3_ID88_listen_2_path . "morning" . ".mp3", "a_content" => null],

            ["round" => 2, "assess_id" => 88, "q_image" => $A3_I88_image . "feed.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "assess_id" => 88, "q_image" => $A3_I88_image . "paint.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "assess_id" => 88, "q_image" => $A3_I88_image . "sweep.png", "q_audio" => null, "a_content" => 1],
            ["round" => 2, "assess_id" => 88, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_A3_ID88_listen_2_path . "afternoon" . ".mp3", "a_content" => null],

            ["round" => 3, "assess_id" => 88, "q_image" => $A3_I88_image . "throw.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "assess_id" => 88, "q_image" => $A3_I88_image . "wash.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "assess_id" => 88, "q_image" => $A3_I88_image . "feed.png", "q_audio" => null, "a_content" => 1],
            ["round" => 3, "assess_id" => 88, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_A3_ID88_listen_2_path . "evening" . ".mp3", "a_content" => null],

            ["round" => 4, "assess_id" => 88, "q_image" => $A3_I88_image . "plant.png", "q_audio" => null, "a_content" => 1],
            ["round" => 4, "assess_id" => 88, "q_image" => $A3_I88_image . "clean.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "assess_id" => 88, "q_image" => $A3_I88_image . "draw.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "assess_id" => 88, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_A3_ID88_listen_2_path . "at-school" . ".mp3", "a_content" => null],

            ["round" => 5, "assess_id" => 88, "q_image" => $A3_I88_image . "running.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "assess_id" => 88, "q_image" => $A3_I88_image . "eating.png", "q_audio" => null, "a_content" => 1],
            ["round" => 5, "assess_id" => 88, "q_image" => $A3_I88_image . "working.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "assess_id" => 88, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_A3_ID88_listen_2_path . "dinning-room" . ".mp3", "a_content" => null],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 3 ID 89 ( Grammar )
        ////////////////////////////////////////////////////////

        $G3_A3_ID89_arrange_letter = "Grade_3/" . "Assessments/" . "Assessment_3/" . "grammar/";
        $A3_ID89_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_3/grammar/";

        $a_ID89 = [
            "How many orange buttons are there ?",
            "How many red hearts are there ?",
            "What do you always do in the morning ?",
            "What are they doing ?",
            "What do you usually do in the morning ?",
            "What do you sometimes do in the classroom ?",
            "What do they do on Sundays ?",
            "How many girls are there in the classroom ?",
            "What is he doing ?",
            "What do you often do at school ?"
        ];

        $audio_img_ID89 = [
            "button", "heart", "bed", "sleep", "wash-car", "draw", "play-football", "girls", "swimming", "do-exercise"
        ];

        foreach ($a_ID89 as $index => $i) {

            $q_ID89 = explode(" ", $i);
            shuffle($q_ID89);

            foreach ($q_ID89 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1,
                        'assess_id' => 89,
                        'q_content' => $j,
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 89,
                    'q_image' => $A3_ID89_image . str_replace(' ', '', $audio_img_ID89[$index]) . ".png",
                    'a_audio' => $AudioDomain . $G3_A3_ID89_arrange_letter . $audio_img_ID89[$index] . ".mp3",
                    'a_content' => $i,
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 3 ID 90 ( Reading Passages (1) )
        ////////////////////////////////////////////////////////

        $G3_A3_reading_passage_1 = "Grade_3/" . "Assessments/" . "Assessment_3/" . "reading_passage_1/";
        $A3_ID90_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_3/reading_passage_1/";

        $A3_ID90_q_audio = [
            "five-boys",
            "jane-school",
            "tom-dentist",
            "all-students",
            "our-english-teacher"
        ];

        $A3_ID90_q_conver = [
            "There are five boys in the class.",
            "Jane is at school.",
            "Tom is at the dentist.",
            "All the other students are helping their teachers.",
            "Our English teacher is home in bed."
        ];

        $A3_ID90_q_audio_ans = [
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"]
        ];

        $A3_ID90_q_audio_a_content = [
            [1, 0],
            [0, 1],
            [1, 0],
            [0, 1],
            [1, 0],
        ];


        for ($i = 0; $i < count($A3_ID90_q_audio); $i++) {

            foreach ($A3_ID90_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 90,
                        'q_content' => $val,
                        'a_content' => $A3_ID90_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 90,
                    "q_audio" => $AudioDomain . $G3_A3_reading_passage_1 . $A3_ID90_q_audio[$i] . ".mp3",
                    "q_conver" => $A3_ID90_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 90,
                    "q_audio" => $AudioDomain . $G3_A3_reading_passage_1 . "audio" . ".mp3",
                    "q_conver" => "There are ten students in my English class, five boys and five girls. All the students in my English class are absent today. Jane is absent. She is sick. Tom is absent because he is at the dentist. All the other students are absent because they are helping their parents. Even our English teacher is absent today because he is home in bed. What a shame! Everybody in my English class is absent today. Everybody except me.",
                    "q_content" => "The students in my English class",
                    "background" => $A3_ID90_image . "bg.png"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 3 ID 91 ( Reading Passages (2) )
        ////////////////////////////////////////////////////////

        $G3_A3_reading_passage_2 = "Grade_3/" . "Assessments/" . "Assessment_3/" . "reading_passage_2/";
        $A3_ID91_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_3/reading_passage_2/";

        $A3_ID91_q_audio = [
            "jones-family-is",
            "jones-reading",
            "toby-jane",
            "jones-family-happy",
            "abby-playing"
        ];

        $A3_ID91_q_conver = [
            "The Jones family in",
            "Mr.Jones is reading",
            "Toby and Jane are",
            "The Jones family is happy today because",
            "Abby is playing"
        ];

        $A3_ID91_q_audio_ans = [
            ["The park", "In the garden"],
            ["A book", "The newspaper"],
            ["Studying", "Playing"],
            ["It is a sunnny day", "It is a beautiful day"],
            ["The guitar", "The piano"]
        ];

        $A3_ID91_q_audio_a_content = [
            [1, 0],
            [0, 1],
            [1, 0],
            [0, 1],
            [1, 0],
        ];


        for ($i = 0; $i < count($A3_ID91_q_audio); $i++) {

            foreach ($A3_ID91_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 91,
                        "q_audio" => $AudioDomain . $G3_A3_reading_passage_2 . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A3_ID91_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 91,
                    "q_audio" => $AudioDomain . $G3_A3_reading_passage_2 . $A3_ID91_q_audio[$i] . ".mp3",
                    "q_conver" => $A3_ID91_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 91,
                    "q_audio" => $AudioDomain . $G3_A3_reading_passage_2 . "audio" . ".mp3",
                    "q_conver" => "The Jones family is in the park today. The sun is shining, and the birds are singing. It's a beautiful day! Mr. Jones is reading the newspaper. Mrs. Jones is listening to the radio. Toby and Jane are studying. And Abby is playing the guitar. The Jones family is happy today. It is a beautiful day. They are in the park.",
                    "q_content" => "In the park",
                    "background" => $A3_ID91_image . "bg.png"
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 4 ID 92 ( Multiple Choice )
        ////////////////////////////////////////////////////////

        $G3_A4_multiple_choice = "Grade_3/" . "Assessments/" . "Assessment_4/" . "multiple_choice/";
        $A4_ID92_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_4/multiple_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 92, 'q_image' => $A4_ID92_image . "acting.png", "q_content" => "Gardening", "a_content" => 0],
            ['round' => 1, 'assess_id' => 92, 'q_image' => null, "q_content" => "Fishing", "a_content" => 0],
            ['round' => 1, 'assess_id' => 92, 'q_image' => null, "q_content" => "Acting", "a_content" => 1],

            ['round' => 2, 'assess_id' => 92, 'q_image' => $A4_ID92_image . "fishing.png", "q_content" => "Dancing", "a_content" => 0],
            ['round' => 2, 'assess_id' => 92, 'q_image' => null, "q_content" => "Fishing", "a_content" => 1],
            ['round' => 2, 'assess_id' => 92, 'q_image' => null, "q_content" => "Gardening", "a_content" => 0],

            ['round' => 3, 'assess_id' => 92, 'q_image' => $A4_ID92_image . "running.png", "q_content" => "Gardening", "a_content" => 0],
            ['round' => 3, 'assess_id' => 92, 'q_image' => null, "q_content" => "Running", "a_content" => 1],
            ['round' => 3, 'assess_id' => 92, 'q_image' => null, "q_content" => "Acting", "a_content" => 0],

            ['round' => 4, 'assess_id' => 92, 'q_image' => $A4_ID92_image . "playing-hide-seek.png", "q_content" => "Playing hide and seek", "a_content" => 1],
            ['round' => 4, 'assess_id' => 92, 'q_image' => null, "q_content" => "Skipping a Rope", "a_content" => 0],
            ['round' => 4, 'assess_id' => 92, 'q_image' => null, "q_content" => "Dancing", "a_content" => 0],

            ['round' => 5, 'assess_id' => 92, 'q_image' => $A4_ID92_image . "gardening.png", "q_content" => "Gardening", "a_content" => 1],
            ['round' => 5, 'assess_id' => 92, 'q_image' => null, "q_content" => "Acting", "a_content" => 0],
            ['round' => 5, 'assess_id' => 92, 'q_image' => null, "q_content" => "Running", "a_content" => 0],

            ['round' => 6, 'assess_id' => 92, 'q_image' => $A4_ID92_image . "skipping-a-rope.png", "q_content" => "Playing hide and seek", "a_content" => 0],
            ['round' => 6, 'assess_id' => 92, 'q_image' => null, "q_content" => "Acting", "a_content" => 0],
            ['round' => 6, 'assess_id' => 92, 'q_image' => null, "q_content" => "Skipping a Rope", "a_content" => 1],

            ['round' => 7, 'assess_id' => 92, 'q_image' => $A4_ID92_image . "going-shopping.png", "q_content" => "Reading", "a_content" => 0],
            ['round' => 7, 'assess_id' => 92, 'q_image' => null, "q_content" => "Going shopping", "a_content" => 1],
            ['round' => 7, 'assess_id' => 92, 'q_image' => null, "q_content" => "Acting", "a_content" => 0],

            ['round' => 8, 'assess_id' => 92, 'q_image' => $A4_ID92_image . "mountain-climbing.png", "q_content" => "Skipping a Rope", "a_content" => 0],
            ['round' => 8, 'assess_id' => 92, 'q_image' => null, "q_content" => "Mountain climbing", "a_content" => 1],
            ['round' => 8, 'assess_id' => 92, 'q_image' => null, "q_content" => "Playing hide and seek", "a_content" => 0],

            ['round' => 9, 'assess_id' => 92, 'q_image' => $A4_ID92_image . "dancing.png", "q_content" => "Dancing", "a_content" => 1],
            ['round' => 9, 'assess_id' => 92, 'q_image' => null, "q_content" => "Running", "a_content" => 0],
            ['round' => 9, 'assess_id' => 92, 'q_image' => null, "q_content" => "Dancing", "a_content" => 0],

            ['round' => 10, 'assess_id' => 92, 'q_image' => $A4_ID92_image . "writing-stories.png", "q_content" => "Writing stories", "a_content" => 1],
            ['round' => 10, 'assess_id' => 92, 'q_image' => null, "q_content" => "Fishing", "a_content" => 0],
            ['round' => 10, 'assess_id' => 92, 'q_image' => null, "q_content" => "Acting", "a_content" => 0],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 4 ID 93 ( Multiple Choice )
        ////////////////////////////////////////////////////////

        $G2_A4_02_multiple_choice = "Grade_3/" . "Assessments/" . "Assessment_4/" . "02_multiple_choice/";
        $A4_ID93_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_4/02_multiple_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 93, "q_image" => $A4_ID93_image . "making.png", "q_conver" => "She is ____.", 'q_content' => "Making origami", 'a_content' => 1],
            ['round' => 1, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Jogging", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Doing Yoga", 'a_content' => 0],

            ['round' => 2, 'assess_id' => 93, "q_image" => $A4_ID93_image . "cold.png", "q_conver" => "She is ____.", 'q_content' => "Hot", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Cold", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Hungry", 'a_content' => 0],

            ['round' => 3, 'assess_id' => 93, "q_image" => $A4_ID93_image . "dance.png", "q_conver" => "They are ____.", 'q_content' => "Going Shopping", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Playing marbles", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Going Dancing", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 93, "q_image" => $A4_ID93_image . "picnic.png", "q_conver" => "They are ____.", 'q_content' => "Having a picnic", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Seeing a movie", 'a_content' => 0],
            ['round' => 4, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Riding a bike", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 93, "q_image" => $A4_ID93_image . "baking.png", "q_conver" => "He is ____.", 'q_content' => "Driving", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Baking", 'a_content' => 1],
            ['round' => 5, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Drawing", 'a_content' => 0],

            ['round' => 6, 'assess_id' => 93, "q_image" => $A4_ID93_image . "washing-car.png", "q_conver" => "She is ____.", 'q_content' => "Brushing her teeth", 'a_content' => 0],
            ['round' => 6, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Planting flowers", 'a_content' => 0],
            ['round' => 6, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Washing her car", 'a_content' => 1],

            ['round' => 7, 'assess_id' => 93, "q_image" => $A4_ID93_image . "hops.png", "q_conver" => "They are ____.", 'q_content' => "Playing marbles", 'a_content' => 0],
            ['round' => 7, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Playing hopscotch", 'a_content' => 1],
            ['round' => 7, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Playing hide and seek", 'a_content' => 0],

            ['round' => 8, 'assess_id' => 93, "q_image" => $A4_ID93_image . "see-a-play.png", "q_conver" => "He is ____.", 'q_content' => "travelling", 'a_content' => 0],
            ['round' => 8, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Skiing", 'a_content' => 0],
            ['round' => 8, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Seeing a play", 'a_content' => 1],

            ['round' => 9, 'assess_id' => 93, "q_image" => $A4_ID93_image . "badminton.png", "q_conver" => "She is ____.", 'q_content' => "Playing volleyball", 'a_content' => 0],
            ['round' => 9, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Playing badminton", 'a_content' => 1],
            ['round' => 9, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Playing tennis", 'a_content' => 0],

            ['round' => 10, 'assess_id' => 93, "q_image" => $A4_ID93_image . "hungry.png", "q_conver" => "She is ____.", 'q_content' => "Hungry", 'a_content' => 1],
            ['round' => 10, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Thirsty", 'a_content' => 0],
            ['round' => 10, 'assess_id' => 93, "q_image" => null, "q_conver" => null, 'q_content' => "Surprised", 'a_content' => 0],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 4 ID 94 ( Listen (1) )
        ////////////////////////////////////////////////////////


        $G3_A4_listen_1 = "Grade_3/" . "Assessments/" . "Assessment_4/" . "listen_1/";
        $A4_ID94_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_4/listen_1/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 94,  'q_audio' =>  $AudioDomain . $G3_A4_listen_1 . "can-act" . ".mp3", "q_content" => "can", "a_content" => 1],
            ['round' => 1, 'assess_id' => 94,  'q_audio' =>  null, "q_content" => "can't", "a_content" => 0],

            ['round' => 2, 'assess_id' => 94,  'q_audio' =>  $AudioDomain . $G3_A4_listen_1 . "cant-ride" . ".mp3", "q_content" => "can",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 94,  'q_audio' =>  null, "q_content" => "can't", "a_content" => 1],

            ['round' => 3, 'assess_id' => 94,  'q_audio' =>  $AudioDomain . $G3_A4_listen_1 . "can-swim" . ".mp3", "q_content" => "can", "a_content" => 1],
            ['round' => 3, 'assess_id' => 94,  'q_audio' =>  null, "q_content" => "can't", "a_content" => 0],

            ['round' => 4, 'assess_id' => 94,  'q_audio' =>  $AudioDomain . $G3_A4_listen_1 . "cant-play" . ".mp3", "q_content" => "can", "a_content" => 0],
            ['round' => 4, 'assess_id' => 94,  'q_audio' =>  null, "q_content" => "can't", "a_content" => 1],

            ['round' => 5, 'assess_id' => 94,  'q_audio' =>  $AudioDomain . $G3_A4_listen_1 . "can-dance" . ".mp3", "q_content" => "can", "a_content" => 1],
            ['round' => 5, 'assess_id' => 94,  'q_audio' =>  null, "q_content" => "can't", "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 4 ID 95 ( Listen (2) )
        ////////////////////////////////////////////////////////

        $A4_I95_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_4/listen_2/";
        $G3_A4_ID95_listen_2_path = "Grade_3/" . "Assessments/" . "Assessment_4/" . "listen_2/";

        DB::table('assessment_ans_n_ques')->insert([

            ["round" => 1, "assess_id" => 95, "q_image" => $A4_I95_image . "7.png", "q_audio" => null, "a_content" => 1],
            ["round" => 1, "assess_id" => 95, "q_image" => $A4_I95_image . "7half.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "assess_id" => 95, "q_image" => $A4_I95_image . "9half.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "assess_id" => 95, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_A4_ID95_listen_2_path . "get-up-7" . ".mp3", "a_content" => null],

            ["round" => 2, "assess_id" => 95, "q_image" => $A4_I95_image . "10.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "assess_id" => 95, "q_image" => $A4_I95_image . "11fifteen.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "assess_id" => 95, "q_image" => $A4_I95_image . "7half.png", "q_audio" => null, "a_content" => 1],
            ["round" => 2, "assess_id" => 95, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_A4_ID95_listen_2_path . "breakfast-7half" . ".mp3", "a_content" => null],

            ["round" => 3, "assess_id" => 95, "q_image" => $A4_I95_image . "10.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "assess_id" => 95, "q_image" => $A4_I95_image . "9half.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "assess_id" => 95, "q_image" => $A4_I95_image . "1half.png", "q_audio" => null, "a_content" => 1],
            ["round" => 3, "assess_id" => 95, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_A4_ID95_listen_2_path . "housework-1half" . ".mp3", "a_content" => null],

            ["round" => 4, "assess_id" => 95, "q_image" => $A4_I95_image . "4.png", "q_audio" => null, "a_content" => 1],
            ["round" => 4, "assess_id" => 95, "q_image" => $A4_I95_image . "3.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "assess_id" => 95, "q_image" => $A4_I95_image . "11.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "assess_id" => 95, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_A4_ID95_listen_2_path . "lesson-4" . ".mp3", "a_content" => null],

            ["round" => 5, "assess_id" => 95, "q_image" => $A4_I95_image . "4.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "assess_id" => 95, "q_image" => $A4_I95_image . "10.png", "q_audio" => null, "a_content" => 1],
            ["round" => 5, "assess_id" => 95, "q_image" => $A4_I95_image . "6half.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "assess_id" => 95, "q_image" =>  null, "q_audio" => $AudioDomain . $G3_A4_ID95_listen_2_path . "bed-10" . ".mp3", "a_content" => null],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 4 ID 96 ( Grammar )
        ////////////////////////////////////////////////////////

        $G3_A4_ID96_arrange_letter = "Grade_3/" . "Assessments/" . "Assessment_4/" . "grammar/";
        $A4_ID96_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_4/grammar/";

        $a_ID96 = [
            "I usually get up at 6 in the morning.",
            'I often have a bath at 6:15.',
            "He is singing a song.",
            "They are playing a catch.",
            "He is playing marbles.",
            "She is yawning because she is tired.",
            "He is shouting because he is angry.",
            "He is crying because he is sad.",
            "I always study my lesson at 7:30 at night.",
            "I always do housework at 4:30."
        ];

        $audio_img_ID96 = [
            "get-up", "bath", "sing", "catch", "marble", "tired", "angry", "sad", "study", "housework"
        ];

        foreach ($a_ID96 as $index => $i) {

            $q_ID96 = explode(" ", $i);
            shuffle($q_ID96);

            foreach ($q_ID96 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1,
                        'assess_id' => 96,
                        'q_content' => $j,
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 96,
                    'q_image' => $A4_ID96_image . str_replace(' ', '', $audio_img_ID96[$index]) . ".png",
                    'a_audio' => $AudioDomain . $G3_A4_ID96_arrange_letter . $audio_img_ID96[$index] . ".mp3",
                    'a_content' => $i,
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 4 ID 97 ( Reading Passages (1) )
        ////////////////////////////////////////////////////////

        $G3_A4_reading_passage_1 = "Grade_3/" . "Assessments/" . "Assessment_4/" . "reading_passage_1/";
        $A4_ID97_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_4/reading_passage_1/";

        $A4_ID97_q_audio = [
            "tom-painting",
            "tom-busy",
            "studying",
            "fixing-her-car",
            "washing-clothes"
        ];

        $A4_ID97_q_conver = [
            "Mr. Tom is painting his bathroom.",
            "Mr. Tom is busy",
            "Toby and Maria are studying the lessons.",
            "Toby's mother is fixing her car.",
            "Toby and Maria are washing their clothes.",
        ];

        $A4_ID97_q_audio_ans = [
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"]
        ];

        $A4_ID97_q_audio_a_content = [
            [0, 1],
            [1, 0],
            [0, 1],
            [0, 1],
            [1, 0],
        ];


        for ($i = 0; $i < count($A4_ID97_q_audio); $i++) {

            foreach ($A4_ID97_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 97,
                        'q_content' => $val,
                        'a_content' => $A4_ID97_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 97,
                    "q_audio" => $AudioDomain . $G3_A4_reading_passage_1 . $A4_ID97_q_audio[$i] . ".mp3",
                    "q_conver" => $A4_ID97_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 97,
                    "q_audio" => $AudioDomain . $G3_A4_reading_passage_1 . "audio" . ".mp3",
                    "q_conver" => "Everybody at River Street is very busy today. Mr. Tom is cleaning his bedroom. Mr. Abby is painting his bathroom. Mrs. Jane is feeding her cat. Toby and Maria are washing their clothes. Toby's father is fixing his car. I am busy too. I am washing my windows. Of course, I am watching my neighbours. It is a busy day at River Street.",
                    "q_content" => "A busy day",
                    "background" => $A4_ID97_image . "bg.png"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 4 ID 98 ( Reading Passages (2) )
        ////////////////////////////////////////////////////////

        $G3_A4_reading_passage_2 = "Grade_3/" . "Assessments/" . "Assessment_4/" . "reading_passage_2/";
        $A4_ID98_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_4/reading_passage_2/";

        $A4_ID98_q_audio = [
            "neighbors-are",
            "man-aprtment-3",
            "people-apartment-2",
            "woman-apartment-4",
            "maria"
        ];

        $A4_ID98_q_conver = [
            "Maria neighbors are",
            "The man in the apartment 3",
            "The people in the apartment 2 are",
            "The woman in the apartment 4 is",
            "Maria is"
        ];

        $A4_ID98_q_audio_ans = [
            ["Noisy", "Quiet"],
            ["Playing the guitar", "Vacuuming his rug"],
            ["Singing", "Dancing"],
            ["Listening to music", "Playing the guitar"],
            ["Angry", "Happy"]
        ];

        $A4_ID98_q_audio_a_content = [
            [1, 0],
            [0, 1],
            [0, 1],
            [0, 1],
            [1, 0],
        ];

        for ($i = 0; $i < count($A4_ID98_q_audio); $i++) {

            foreach ($A4_ID98_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 98,
                        "q_audio" => $AudioDomain . $G3_A4_reading_passage_2 . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A4_ID98_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 98,
                    "q_audio" => $AudioDomain . $G3_A4_reading_passage_2 . $A4_ID98_q_audio[$i] . ".mp3",
                    "q_conver" => $A4_ID98_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 98,
                    "q_audio" => $AudioDomain . $G3_A4_reading_passage_2 . "audio" . ".mp3",
                    "q_conver" => "It's late at night. Maria is sitting on her bed. She is looking at her clock. Her neighbours are making a lot of noise and Maria is very angry. The people in the apartment 2 are dancing. The man in the apartment 3 is vacuuming his rug. The woman in the apartment 4 is playing the guitar. The dog in the apartment 5 is barking. It's very late.  Maria is very tired and angry. What a terrible night!",
                    "q_content" => "Maria is very angry",
                    "background" => $A4_ID98_image . "bg.png"
                ],
            ]);
        }



        ////////////////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 5 ID 99 ( Vocab (1) )
        ////////////////////////////////////////////////////////////////////

        $G3_A5_vocab_1 = "Grade_3/" . "Assessments/" . "Assessment_5/" . "vocab_1/";
        $A5_ID99_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_5/vocab_1/";

        $a_content_G3_A5_ID99 = [
            'easy', 'poor', 'cold', 'sunny', 'beautiful'
        ];

        foreach ($a_content_G3_A5_ID99 as $key => $value) {
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'assess_id' => 99, 'round' => $key + 1,
                    'q_image' => $A5_ID99_image . $value . ".png",
                    'q_audio' => $AudioDomain . $G3_A5_vocab_1 . $value . ".mp3",
                    'a_content' => $value,
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 5 ID 100 ( Vocab (2) )
        ////////////////////////////////////////////////////////

        $G2_A5_vocab_2 = "Grade_3/" . "Assessments/" . "Assessment_5/" . "vocab_2/";
        $A5_ID100_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_5/vocab_2/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 100, "q_image" => $A5_ID100_image . "star.png", "q_conver" => "You can watch films at a ____.", 'q_content' => "Cinema", 'a_content' => 1],
            ['round' => 1, 'assess_id' => 100, "q_image" => null, "q_conver" => null, 'q_content' => "Restaurant", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 100, "q_image" => null, "q_conver" => null, 'q_content' => "Airport", 'a_content' => 0],

            ['round' => 2, 'assess_id' => 100, "q_image" => $A5_ID100_image . "star.png", "q_conver" => "You can see aeroplanes takeoff and landing at an ____.", 'q_content' => "Restaurant", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 100, "q_image" => null, "q_conver" => null, 'q_content' => "Airport", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 100, "q_image" => null, "q_conver" => null, 'q_content' => "Police Station", 'a_content' => 0],

            ['round' => 3, 'assess_id' => 100, "q_image" => $A5_ID100_image . "star.png", "q_conver" => "You can see doctor at a ____.", 'q_content' => "Cinema", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 100, "q_image" => null, "q_conver" => null, 'q_content' => "Airport", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 100, "q_image" => null, "q_conver" => null, 'q_content' => "Hospital", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 100, "q_image" => $A5_ID100_image . "star.png", "q_conver" => "You can eat delicious food at a ____.", 'q_content' => "Restaurant", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 100, "q_image" => null, "q_conver" => null, 'q_content' => "Police Station", 'a_content' => 0],
            ['round' => 4, 'assess_id' => 100, "q_image" => null, "q_conver" => null, 'q_content' => "Cinema", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 100, "q_image" => $A5_ID100_image . "star.png", "q_conver" => "You can get help at a ____.", 'q_content' => "Hospital", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 100, "q_image" => null, "q_conver" => null, 'q_content' => "Police Station", 'a_content' => 1],
            ['round' => 5, 'assess_id' => 100, "q_image" => null, "q_conver" => null, 'q_content' => "Airport", 'a_content' => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 5 ID 101 ( Vocab (3) )
        ////////////////////////////////////////////////////////

        $G2_A5_vocab_3 = "Grade_3/" . "Assessments/" . "Assessment_5/" . "vocab_3/";
        $A5_ID101_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_5/vocab_3/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 101, "q_image" => $A5_ID101_image . "restaurant.png", "q_conver" => "The restaurant is ____ the bank.", 'q_content' => "next to", 'a_content' => 1],
            ['round' => 1, 'assess_id' => 101, "q_image" => null, "q_conver" => null, 'q_content' => "opposite", 'a_content' => 0],

            ['round' => 2, 'assess_id' => 101, "q_image" => $A5_ID101_image . "school.png", "q_conver" => "The school is ____ the library and the park.", 'q_content' => "between", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 101, "q_image" => null, "q_conver" => null, 'q_content' => "next to", 'a_content' => 0],

            ['round' => 3, 'assess_id' => 101, "q_image" => $A5_ID101_image . "go.png", "q_conver" => "Go straight and turn ____.", 'q_content' => "right", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 101, "q_image" => null, "q_conver" => null, 'q_content' => "left", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 101, "q_image" => $A5_ID101_image . "blouse.png", "q_conver" => "I like this ____.", 'q_content' => "blouse", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 101, "q_image" => null, "q_conver" => null, 'q_content' => "jacket", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 101, "q_image" => $A5_ID101_image . "post.png", "q_conver" => "The post office is ____ the park.", 'q_content' => "next to", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 101, "q_image" => null, "q_conver" => null, 'q_content' => "opposite", 'a_content' => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 5 ID 102 ( Matching )
        ////////////////////////////////////////////////////////

        $A5_I102_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_5/matching/";
        $A5_I102_matching = "Grade_3/" . "Assessments/" . "Assessment_5/" . "matching/";

        $G3_A5_I102_matching = [

            ['Boots', 'Belt', 'Necklace', 'Earrings', "Sweater"],

        ];

        $G3_A5_I102_matching_image = [

            ["Sweater",  'Earrings', 'Necklace', 'Boots', 'Belt'],

        ];

        for ($i = 0; $i < count($G3_A5_I102_matching); $i++) {
            foreach ($G3_A5_I102_matching[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 102, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $A5_I102_matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G3_A5_I102_matching_image[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 102, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $A5_I102_image . str_replace(' ', '-', strtolower($q)) . ".png",
                        'q_audio' => $AudioDomain . $A5_I102_matching . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }

        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 5 ID 103 ( Listening (1) )
        ////////////////////////////////////////////////////////


        $G3_A5_listen_1 = "Grade_3/" . "Assessments/" . "Assessment_5/" . "listen_1/";
        $A5_ID103_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_5/listen_1/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 103,  'q_audio' =>  $AudioDomain . $G3_A5_listen_1 . "sunny-sg" . ".mp3", "q_content" => "cloudy", "a_content" => 0],
            ['round' => 1, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "sunny", "a_content" => 1],
            ['round' => 1, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "raining", "a_content" => 0],

            ['round' => 2, 'assess_id' => 103,  'q_audio' =>  $AudioDomain . $G3_A5_listen_1 . "hot-yg" . ".mp3", "q_content" => "humid",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "cold", "a_content" => 0],
            ['round' => 2, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "hot", "a_content" => 1],

            ['round' => 3, 'assess_id' => 103,  'q_audio' =>  $AudioDomain . $G3_A5_listen_1 . "cloudy-s" . ".mp3", "q_content" => "cloudy", "a_content" => 1],
            ['round' => 3, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "snowy", "a_content" => 0],
            ['round' => 3, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "freezing", "a_content" => 0],

            ['round' => 4, 'assess_id' => 103,  'q_audio' =>  $AudioDomain . $G3_A5_listen_1 . "raining-bk" . ".mp3", "q_content" => "raining", "a_content" => 1],
            ['round' => 4, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "snowy", "a_content" => 0],
            ['round' => 4, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "stormy", "a_content" => 0],

            ['round' => 5, 'assess_id' => 103,  'q_audio' =>  $AudioDomain . $G3_A5_listen_1 . "chilly-tks" . ".mp3", "q_content" => "cloudy", "a_content" => 0],
            ['round' => 5, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "freezing", "a_content" => 0],
            ['round' => 5, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "chilly", "a_content" => 1],
        ]);

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 6, 'assess_id' => 103,  'q_audio' =>  $AudioDomain . $G3_A5_listen_1 . "listening-audio" . ".mp3", "q_content" => "right", "q_conver" => "Turn ____ on second avenue.", "a_content" => 1],
            ['round' => 6, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "park", "q_conver" => null, "a_content" => 0],
            ['round' => 6, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "left", "q_conver" => null, "a_content" => 0],

            ['round' => 7, 'assess_id' => 103,  'q_audio' =>  $AudioDomain . $G3_A5_listen_1 . "listening-audio" . ".mp3", "q_content" => "left", "q_conver" => "Turn ____ on South street.", "a_content" => 1],
            ['round' => 7, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "park", "q_conver" => null, "a_content" => 0],
            ['round' => 7, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "right", "q_conver" => null, "a_content" => 0],

            ['round' => 8, 'assess_id' => 103,  'q_audio' =>  $AudioDomain . $G3_A5_listen_1 . "listening-audio" . ".mp3", "q_content" => "left", "q_conver" => "It's on the ____.", "a_content" => 0],
            ['round' => 8, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "restaurant", "q_conver" => null, "a_content" => 0],
            ['round' => 8, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "right", "q_conver" => null, "a_content" => 1],

            ['round' => 9, 'assess_id' => 103,  'q_audio' =>  $AudioDomain . $G3_A5_listen_1 . "listening-audio" . ".mp3", "q_content" => "right", "q_conver" => "Next to the ____.", "a_content" => 0],
            ['round' => 9, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "restaurant", "q_conver" => null, "a_content" => 1],
            ['round' => 9, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "left", "q_conver" => null, "a_content" => 0],

            ['round' => 10, 'assess_id' => 103,  'q_audio' =>  $AudioDomain . $G3_A5_listen_1 . "listening-audio" . ".mp3", "q_content" => "right", "q_conver" => "Opposite the ____.", "a_content" => 0],
            ['round' => 10, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "left", "q_conver" => null, "a_content" => 0],
            ['round' => 10, 'assess_id' => 103,  'q_audio' =>  null, "q_content" => "park", "q_conver" => null, "a_content" => 1],

        ]);

        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 5 ID 104 ( Grammar (1) )
        ////////////////////////////////////////////////////////

        $G3_A5_ID104_arrange_letter = "Grade_3/" . "Assessments/" . "Assessment_5/" . "grammar_1/";
        $A5_ID104_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_5/grammar_1/";

        $a_ID104 = [
            "Is she tall or short ?",
            "Are they single or married ?",
            "What can I do at a hospital ?",
            "How do I get to the school from here ?",
            "How is the weather in Singapore today ?"
        ];

        $audio_img_ID104 = [
            "tall", "single", "hospital", "school", "sg"
        ];

        foreach ($a_ID104 as $index => $i) {

            $q_ID104 = explode(" ", $i);
            shuffle($q_ID104);

            foreach ($q_ID104 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1,
                        'assess_id' => 104,
                        'q_content' => $j,
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 104,
                    'q_image' => $A5_ID104_image . str_replace(' ', '', $audio_img_ID104[$index]) . ".png",
                    'a_audio' => $AudioDomain . $G3_A5_ID104_arrange_letter . $audio_img_ID104[$index] . ".mp3",
                    'a_content' => $i,
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 5 ID 105 ( Grammar (2) )
        ////////////////////////////////////////////////////////

        $G2_A5_grammar_2 = "Grade_3/" . "Assessments/" . "Assessment_5/" . "grammar_2/";
        $A5_ID105_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_5/grammar_2/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 105, "q_image" => $A5_ID105_image . "earrings.png", "q_conver" => "I like ____ earrings.", 'q_content' => "that", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 105, "q_image" => null, "q_conver" => null, 'q_content' => "those", 'a_content' => 1],

            ['round' => 2, 'assess_id' => 105, "q_image" => $A5_ID105_image . "socks.png", "q_conver" => "I like ____ socks.", 'q_content' => "this", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 105, "q_image" => null, "q_conver" => null, 'q_content' => "these", 'a_content' => 1],

            ['round' => 3, 'assess_id' => 105, "q_image" => $A5_ID105_image . "umbrella.png", "q_conver" => "I like ____ umbrella.", 'q_content' => "that", 'a_content' => 1],
            ['round' => 3, 'assess_id' => 105, "q_image" => null, "q_conver" => null, 'q_content' => "those", 'a_content' => 0],

            ['round' => 4, 'assess_id' => 105, "q_image" => $A5_ID105_image . "purse.png", "q_conver" => "Do you like ____ purse?", 'q_content' => "this", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 105, "q_image" => null, "q_conver" => null, 'q_content' => "these", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 105, "q_image" => $A5_ID105_image . "jeans.png", "q_conver" => "Do you like ____ jeans?", 'q_content' => "that", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 105, "q_image" => null, "q_conver" => null, 'q_content' => "those", 'a_content' => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 5 ID 106 ( Reading Passages (1) )
        ////////////////////////////////////////////////////////

        $G3_A5_reading_passage_1 = "Grade_3/" . "Assessments/" . "Assessment_5/" . "reading_passage_1/";
        $A5_ID106_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_5/reading_passage_1/";

        $A5_ID106_q_audio = [
            "friends-and-i-cinema",
            "cinema-next-to",
            "abby-tickets",
            "not-cheap",
            "movie-interesting"
        ];

        $A5_ID106_q_conver = [
            "My friends and I go to the cinema on Saturdays.",
            "The cinema is next to the restaurant, opposite the park.",
            "Abby is buying the tickets.",
            "The tickets are not cheap.",
            "'Beauty and the Beast' movie is very interesting."
        ];

        $A5_ID106_q_audio_ans = [
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"],
            ["Yes", "No"]
        ];

        $A5_ID106_q_audio_a_content = [
            [0, 1],
            [1, 0],
            [0, 1],
            [0, 1],
            [1, 0],
        ];


        for ($i = 0; $i < count($A5_ID106_q_audio); $i++) {

            foreach ($A5_ID106_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 106,
                        'q_content' => $val,
                        'a_content' => $A5_ID106_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 106,
                    "q_audio" => $AudioDomain . $G3_A5_reading_passage_1 . $A5_ID106_q_audio[$i] . ".mp3",
                    "q_conver" => $A5_ID106_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 106,
                    "q_audio" => $AudioDomain . $G3_A5_reading_passage_1 . "audio" . ".mp3",
                    "q_conver" => "It is a sunny day today. My friends and I are at the cinema today. We always go to the cinema on Sundays. The cinema is on Main Road, next to the bank, opposite the park. I am buying some snacks, popcorn and coca cola at a snack shop. My friend Abby is buying the tickets. The tickets are quite expensive. We will watch \"Beauty and the Beast\". The movie is very interesting. We are very excited.",
                    "q_content" => "Going to the cinema",
                    "background" => $A5_ID106_image . "bg.png"
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 3 Assessment 5 ID 107 ( Reading Passages (2) )
        ////////////////////////////////////////////////////////

        $G3_A5_reading_passage_2 = "Grade_3/" . "Assessments/" . "Assessment_5/" . "reading_passage_2/";
        $A5_ID107_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_5/reading_passage_2/";

        $A5_ID107_q_audio = [
            "mother-i-are",
            "mother-buying",
            "looking-for",
            "mother-wants",
            "will-buy-for-brother"
        ];

        $A5_ID107_q_conver = [
            "My mother and I are at a",
            "My mother is buying",
            "I am looking for",
            "My mother wants to buy",
            "I will buy ____ for my brother."
        ];

        $A5_ID107_q_audio_ans = [
            ["supermarket", "movie theatre"],
            ["an expressive dress", "a new dress"],
            ["a pair of jeans", "a pair of shoes"],
            ["a new school bag", "a cake"],
            ["a purse", "a drawing book"]
        ];

        $A5_ID107_q_audio_a_content = [
            [1, 0],
            [0, 1],
            [1, 0],
            [0, 1],
            [0, 1],
        ];

        for ($i = 0; $i < count($A5_ID107_q_audio); $i++) {

            foreach ($A5_ID107_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 107,
                        "q_audio" => $AudioDomain . $G3_A5_reading_passage_2 . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A5_ID107_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 107,
                    "q_audio" => $AudioDomain . $G3_A5_reading_passage_2 . $A5_ID107_q_audio[$i] . ".mp3",
                    "q_conver" => $A5_ID107_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 107,
                    "q_audio" => $AudioDomain . $G3_A5_reading_passage_2 . "audio" . ".mp3",
                    "q_conver" => "My mother and I are at the supermarket. We always go shopping on Saturdays. There are many shops in the supermarket. We can see the clothes shop, food shops, the shoe shops, bakery, etc. My mother is buying new dress. I am looking for a pair of jeans. My mother wants to buy a cake for my brother. Today is his birthday. I want to buy a purse and a new school bag. I will also buy a drawing book for my brother.",
                    "q_content" => "Going shopping",
                    "background" => $A5_ID107_image . "bg.png"
                ],
            ]);
        }
    }
}
