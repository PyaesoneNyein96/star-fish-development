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
        ////    Grade 3  Assessment 1 ID 76 ( Matching )
        ////////////////////////////////////////////////////////

        $A1_I76_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_1/matching/";
        $A1_I76_matching = "Grade_3/" . "Assessments/" . "Assessment_1/" . "matching/";


        $G3_A1_I76_matching = [

            ['What is she like', 'What does he look like', 'What is he', 'Do you want to be a pilot', "What is your favorite fruit"],
            ['Do you like strawberries', 'What sport are you good at', 'What is your favorite subject', "What subject are you good at",  'What is your sister like'],

        ];

        $G3_A1_I76_matching_image = [

            ["He is handsome", 'My favorite fruit is watermelon', 'She is kind', 'He is doctor', 'No, I don\'t. I want to be an artist'],
            ["I am good at swimming", 'I am good at Maths', 'My favorite subject is English', 'Yes, I do. But my brother doesn\'t', 'My sister is clever'],

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
            ["Tennis", "Basketall", "Football"],
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
                    "q_conver" => "Janes: what is your favorite food? Toby: My favorite food is fried chicken. I like coffee and bread for breakfast. I like fried chicken and rice for lunch and dinner. But I don't like fish. What about you? Jane: I don't like fried chicken. My favorite food is hamburger. I also like beef steak. They are the best. I don't eat vegetables a lot. I don't like fish either.",
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

        $G3_A2_reading_passage = "Grade_3/" . "Assessments/" . "Assessment_1/" . "reading_passage/";
        $A2_ID82_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_1/reading_passage/";

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
            "ocean-fill-blue-water", "sea-animals", "ocean-is-blue", "five-big-oceans", "fish-turtles-octupuses"
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
            ['Barker shop', 'Cafeteria', 'Bakery', "Wash the clothes",  'Throw the rubbish out'],

        ];

        $G3_A3_I84_vocab_1_image = [

            ["Riding a bike", 'Playing the piano', 'Planting', 'Work in groups', 'Draw pictures'],
            ["Wash the clothes", 'Bakery', 'Throw the rubbish out',  'Barker shop', 'Cafeteria'],

        ];

        for ($i = 0; $i < count($G3_A3_I84_vocab_1); $i++) {

            foreach ($G3_A3_I84_vocab_1_image[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 84, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $A3_I84_image . str_replace(' ', '-', strtolower($q)) . ".png",
                        'q_audio' => $AudioDomain . $A3_I84_vocab_1 . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G3_A3_I84_vocab_1[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 84, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $A3_I84_vocab_1 .  str_replace(' ', '-', strtolower($q)) . ".mp3",
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
            "yellow", "thirteen", "green", "laundromat", "drinking"
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
        ////    Grade 3  Assessment 3 ID 87 ( Multiple Choice )
        ////////////////////////////////////////////////////////


        $G3_A1_listen_1 = "Grade_3/" . "Assessments/" . "Assessment_3/" . "listen_1/";
        $A3_ID87_image = $domain . "/storage/images/Grade_3/Assessments/Assessment_3/listen_1/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 87,  'q_audio' =>  $AudioDomain . $G3_A1_listen_1 . "thirteen" . ".mp3", "q_content" => 13, "a_content" => 1],
            ['round' => 1, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 30, "a_content" => 0],
            ['round' => 1, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 31, "a_content" => 0],

            ['round' => 2, 'assess_id' => 87,  'q_audio' =>  $AudioDomain . $G3_A1_listen_1 . "forty" . ".mp3", "q_content" => 14,  "a_content" => 0],
            ['round' => 2, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 40, "a_content" => 1],
            ['round' => 2, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 41, "a_content" => 0],

            ['round' => 3, 'assess_id' => 87,  'q_audio' =>  $AudioDomain . $G3_A1_listen_1 . "fifteen" . ".mp3", "q_content" => 15, "a_content" => 1],
            ['round' => 3, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 50, "a_content" => 0],
            ['round' => 3, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 51, "a_content" => 0],

            ['round' => 4, 'assess_id' => 87,  'q_audio' =>  $AudioDomain . $G3_A1_listen_1 . "sixty" . ".mp3", "q_content" => 16, "a_content" => 0],
            ['round' => 4, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 60, "a_content" => 1],
            ['round' => 4, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 61, "a_content" => 0],

            ['round' => 5, 'assess_id' => 87,  'q_audio' =>  $AudioDomain . $G3_A1_listen_1 . "seventeen" . ".mp3", "q_content" => 17, "a_content" => 1],
            ['round' => 5, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 70, "a_content" => 0],
            ['round' => 5, 'assess_id' => 87,  'q_audio' =>  null, "q_content" => 71, "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 3  Assessment 3 ID 88 ( Listen (2) )
        ////////////////////////////////////////////////////////

        $A3_I88_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_5/listen_2/";
        $G2_A5_ID88_listen_2_path = "Grade_2/" . "Assessments/" . "Assessment_5/" . "listen_2/";

        DB::table('assessment_ans_n_ques')->insert([

            ["round" => 1, "assess_id" => 88, "q_image" => $A3_I88_image . "brush.png", "q_audio" => null, "a_content" => 1],
            ["round" => 1, "assess_id" => 88, "q_image" => $A3_I88_image . "sweep.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "assess_id" => 88, "q_image" => $A3_I88_image . "throw.png", "q_audio" => null, "a_content" => 0],
            ["round" => 1, "assess_id" => 88, "q_image" =>  null, "q_audio" => $AudioDomain . $G2_A5_ID88_listen_2_path . "morning" . ".mp3", "a_content" => null],

            ["round" => 2, "assess_id" => 88, "q_image" => $A3_I88_image . "feed.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "assess_id" => 88, "q_image" => $A3_I88_image . "paint.png", "q_audio" => null, "a_content" => 0],
            ["round" => 2, "assess_id" => 88, "q_image" => $A3_I88_image . "sweep.png", "q_audio" => null, "a_content" => 1],
            ["round" => 2, "assess_id" => 88, "q_image" =>  null, "q_audio" => $AudioDomain . $G2_A5_ID88_listen_2_path . "afternoon" . ".mp3", "a_content" => null],

            ["round" => 3, "assess_id" => 88, "q_image" => $A3_I88_image . "throw.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "assess_id" => 88, "q_image" => $A3_I88_image . "wash.png", "q_audio" => null, "a_content" => 0],
            ["round" => 3, "assess_id" => 88, "q_image" => $A3_I88_image . "feed.png", "q_audio" => null, "a_content" => 1],
            ["round" => 3, "assess_id" => 88, "q_image" =>  null, "q_audio" => $AudioDomain . $G2_A5_ID88_listen_2_path . "evening" . ".mp3", "a_content" => null],

            ["round" => 4, "assess_id" => 88, "q_image" => $A3_I88_image . "plant.png", "q_audio" => null, "a_content" => 1],
            ["round" => 4, "assess_id" => 88, "q_image" => $A3_I88_image . "clean.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "assess_id" => 88, "q_image" => $A3_I88_image . "draw.png", "q_audio" => null, "a_content" => 0],
            ["round" => 4, "assess_id" => 88, "q_image" =>  null, "q_audio" => $AudioDomain . $G2_A5_ID88_listen_2_path . "at-school" . ".mp3", "a_content" => null],

            ["round" => 5, "assess_id" => 88, "q_image" => $A3_I88_image . "running.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "assess_id" => 88, "q_image" => $A3_I88_image . "eating.png", "q_audio" => null, "a_content" => 1],
            ["round" => 5, "assess_id" => 88, "q_image" => $A3_I88_image . "working.png", "q_audio" => null, "a_content" => 0],
            ["round" => 5, "assess_id" => 88, "q_image" =>  null, "q_audio" => $AudioDomain . $G2_A5_ID88_listen_2_path . "dinning-room" . ".mp3", "a_content" => null],

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
    }
}
