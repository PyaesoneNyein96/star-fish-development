<?php

namespace Database\Seeders\Assessment\Grade2;

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
        $ImageDomain = $domain . "/storage/images/";


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 1 ID 34 ( Tracing )
        ////////////////////////////////////////////////////////


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 1 ID 35 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G2_A1_ID35_arrange_letter = "Grade_2/" . "Assessments/" . "Assessment_1/" . "rearrange_letter/";
        $A1_ID25_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_1/rearrange_letter/";

        $a_ID35 = [
            "eagle", "earth", "farmer", "elbow", "fox", "hat"
        ];

        foreach ($a_ID35 as $index => $i) {

            $q_ID35_shuf = str_shuffle($i);
            $q_ID35 = str_split($q_ID35_shuf);

            foreach ($q_ID35 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    ['round' => $index + 1, 'assess_id' => 35, 'q_content' => strtoupper($j), 'q_audio' => $AudioDomain . $G2_A1_ID35_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 35,
                    'q_image' => $A1_ID25_image . str_replace(' ', '', strtolower($i)) . ".png",
                    'a_audio' => $AudioDomain . $G2_A1_ID35_arrange_letter . strtolower($i) . ".mp3",
                    'a_content' => strtoupper($i),
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 1 ID 36 ( multlple choice )
        ////////////////////////////////////////////////////////

        $G2_A1_multiple_choice = "Grade_2/" . "Assessments/" . "Assessment_1/" . "multiple_choice/";
        $A1_ID36_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_1/multiple_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "happy.png", "q_content" => "Happy", "a_content" => 1],
            ['round' => 1, 'assess_id' => 36, 'q_image' => null, "q_content" => "Sad", "a_content" => 0],

            ['round' => 2, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "nervous.png", "q_content" => "Angry", "a_content" => 0],
            ['round' => 2, 'assess_id' => 36, 'q_image' => null, "q_content" => "Nervous", "a_content" => 1],

            ['round' => 3, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "excited.png", "q_content" => "Excited", "a_content" => 1],
            ['round' => 3, 'assess_id' => 36, 'q_image' => null, "q_content" => "Hungry", "a_content" => 0],

            ['round' => 4, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "surprised.png", "q_content" => "Surprised", "a_content" => 1],
            ['round' => 4, 'assess_id' => 36, 'q_image' => null, "q_content" => "Sad", "a_content" => 0],

            ['round' => 5, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "thirsty.png", "q_content" => "Happy", "a_content" => 0],
            ['round' => 5, 'assess_id' => 36, 'q_image' => null, "q_content" => "Thirsty", "a_content" => 1],

            ['round' => 6, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "angry.png", "q_content" => "Excited", "a_content" => 0],
            ['round' => 6, 'assess_id' => 36, 'q_image' => null, "q_content" => "Angry", "a_content" => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 1 ID 37 ( Listen and choice )
        ////////////////////////////////////////////////////////

        $G1_A1_listen_n_choice = "Grade_2/" . "Assessments/" . "Assessment_1/" . "listen_n_choice/";
        $A1_ID37_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_1/listen_n_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 37, 'q_image' => $A1_ID37_image . "clap.png", "q_content" => "Clap your hands", "a_content" => 1],
            ['round' => 1, 'assess_id' => 37, 'q_image' => null, "q_content" => "Jump up high", "a_content" => 0],

            ['round' => 2, 'assess_id' => 37, 'q_image' => $A1_ID37_image . "raise.png", "q_content" => "Stamp your feet", "a_content" => 0],
            ['round' => 2, 'assess_id' => 37, 'q_image' => null, "q_content" => "Raise your hands", "a_content" => 1],

            ['round' => 3, 'assess_id' => 37, 'q_image' => $A1_ID37_image . "turn.png", "q_content" => "Turn around", "a_content" => 1],
            ['round' => 3, 'assess_id' => 37, 'q_image' => null, "q_content" => "Clap your hands", "a_content" => 0],

            ['round' => 4, 'assess_id' => 37, 'q_image' => $A1_ID37_image . "stamp.png", "q_content" => "Jump up high", "a_content" => 0],
            ['round' => 4, 'assess_id' => 37, 'q_image' => null, "q_content" => "Stamp your feet", "a_content" => 1],

            ['round' => 5, 'assess_id' => 37, 'q_image' => $A1_ID37_image . "jump.png", "q_content" => "Turn around", "a_content" => 0],
            ['round' => 5, 'assess_id' => 37, 'q_image' => null, "q_content" => "Jump up high", "a_content" => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 1 ID 38 ( Fill in the blanks )
        ////////////////////////////////////////////////////////

        $G2_A1_fill_in_the_blank = "Grade_2/" . "Assessments/" . "Assessment_1/" . "fill_in_the_blank/";
        $A1_ID38_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_1/fill_in_the_blank/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 38, "q_image" => $A1_ID38_image . "hungry1.png", "q_conver" => "She is ____.", 'q_content' => "Hungry", 'a_content' => 1],
            ['round' => 1, 'assess_id' => 38, "q_image" => null, "q_conver" => null, 'q_content' => "Thirsty", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 38, "q_image" => null, "q_conver" => null, 'q_content' => "Surprised", 'a_content' => 0],

            ['round' => 2, 'assess_id' => 38, "q_image" => $A1_ID38_image . "surprised.png", "q_conver" => "He is ____.", 'q_content' => "Hungry", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 38, "q_image" => null, "q_conver" => null, 'q_content' => "Thirsty", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 38, "q_image" => null, "q_conver" => null, 'q_content' => "Surprised", 'a_content' => 1],

            ['round' => 3, 'assess_id' => 38, "q_image" => $A1_ID38_image . "shy.png", "q_conver" => "She is ____.", 'q_content' => "Hungry", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 38, "q_image" => null, "q_conver" => null, 'q_content' => "Shy", 'a_content' => 1],
            ['round' => 3, 'assess_id' => 38, "q_image" => null, "q_conver" => null, 'q_content' => "Surprised", 'a_content' => 0],

            ['round' => 4, 'assess_id' => 38, "q_image" => $A1_ID38_image . "hungry2.png", "q_conver" => "She is ____.", 'q_content' => "Hungry", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 38, "q_image" => null, "q_conver" => null, 'q_content' => "Thirsty", 'a_content' => 0],
            ['round' => 4, 'assess_id' => 38, "q_image" => null, "q_conver" => null, 'q_content' => "Surprised", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 38, "q_image" => $A1_ID38_image . "thirsty.png", "q_conver" => "I am ____.", 'q_content' => "Shy", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 38, "q_image" => null, "q_conver" => null, 'q_content' => "Sad", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 38, "q_image" => null, "q_conver" => null, 'q_content' => "Thirsty", 'a_content' => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 1 ID 39 ( Multiple Choice )
        ////////////////////////////////////////////////////////

        $G2_A1_06_multiple_choices = "Grade_2/" . "Assessments/" . "Assessment_1/" . "06_multiple_choice/";
        $A1_ID39_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_1/06_multiple_choice/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 39, "q_image" => $A1_ID39_image . "apple.png", "q_conver" => "I ____ apples.", 'q_content' => "like", 'a_content' => 1],
            ['round' => 1, 'assess_id' => 39, "q_image" => null, "q_conver" => null, 'q_content' => "don't like", 'a_content' => 0],

            ['round' => 2, 'assess_id' => 39, "q_image" => $A1_ID39_image . "choco.png", "q_conver" => "You ____ chocolate.", 'q_content' => "like", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 39, "q_image" => null, "q_conver" => null, 'q_content' => "don't like", 'a_content' => 1],

            ['round' => 3, 'assess_id' => 39, "q_image" => $A1_ID39_image . "thin_ovalface.png", "q_conver" => "I am thin. I ____ oval face.", 'q_content' => "has", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 39, "q_image" => null, "q_conver" => null, 'q_content' => "have", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 39, "q_image" => $A1_ID39_image . "short_darkeyes.png", "q_conver" => "You are short. You ____ dark eyes.", 'q_content' => "has", 'a_content' => 0],
            ['round' => 4, 'assess_id' => 39, "q_image" => null, "q_conver" => null, 'q_content' => "have", 'a_content' => 1],

            ['round' => 5, 'assess_id' => 39, "q_image" => $A1_ID39_image . "happy_bigcup.png", "q_conver" => "Jack is happy. He ____ a big cup.", 'q_content' => "has", 'a_content' => 1],
            ['round' => 5, 'assess_id' => 39, "q_image" => null, "q_conver" => null, 'q_content' => "have", 'a_content' => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 1 ID 40 ( True or False )
        ////////////////////////////////////////////////////////

        $G2_A1_true_false = "Grade_2/" . "Assessments/" . "Assessment_1/" . "true_false/";
        $A1_ID40_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_1/true_false/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 40, 'q_audio' => $AudioDomain . $G2_A1_true_false . "jack-n-chris.mp3", 'q_content' => "true",  'a_content' => 1, 'q_image' => $A1_ID40_image . "jack-n-chris.png"],
            ['round' => 1, 'assess_id' => 40, 'q_audio' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'assess_id' => 40, 'q_audio' => $AudioDomain . $G2_A1_true_false . "dont-like-ant.mp3", 'q_content' => "true",  'a_content' => 0, 'q_image' => $A1_ID40_image . "dont-like-ant.png"],
            ['round' => 2, 'assess_id' => 40, 'q_audio' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 3, 'assess_id' => 40, 'q_audio' => $AudioDomain . $G2_A1_true_false . "bread.mp3", 'q_content' => "true",  'a_content' => 0, 'q_image' => $A1_ID40_image . "bread.png"],
            ['round' => 3, 'assess_id' => 40, 'q_audio' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 4, 'assess_id' => 40, 'q_audio' => $AudioDomain . $G2_A1_true_false . "fast-car.mp3", 'q_content' => "true", 'a_content' => 1, 'q_image' => $A1_ID40_image . "fast-car.png"],
            ['round' => 4, 'assess_id' => 40, 'q_audio' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 5, 'assess_id' => 40, 'q_audio' => $AudioDomain . $G2_A1_true_false . "thin-cat.mp3", 'q_content' => "true",  'a_content' => 0, 'q_image' => $A1_ID40_image . "thin-cat.png"],
            ['round' => 5, 'assess_id' => 40, 'q_audio' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 1 ID 41 ( Reading Passages )
        ////////////////////////////////////////////////////////

        $G2_A1_reading_passage = "Grade_2/" . "Assessments/" . "Assessment_1/" . "reading_passage/";
        $A1_ID41_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_1/reading_passage/";

        $A1_ID41_q_audio = [
            "chris-jane-r-friends",
            "chris-8",
            "jane-hungry-when",
            "chris-jane-dont-like-animal",
            "jane-surprised",
        ];

        $A1_ID41_q_conver = [
            "Chris and Jane are friends.",
            "Chris is 8.",
            "Jane is hungry when she wants to eat.",
            "Chris and Jane don't like animals.",
            "Jane is surprised because there is no class today.",
        ];

        $A1_ID41_q_audio_ans = [
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
            ["True", "False"],
        ];

        $A1_ID41_q_audio_a_content = [
            [1, 0],
            [0, 1],
            [1, 0],
            [0, 1],
            [0, 1],
        ];


        for ($i = 0; $i < count($A1_ID41_q_audio); $i++) {

            foreach ($A1_ID41_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 41,
                        'q_content' => $val,
                        'a_content' => $A1_ID41_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 41,
                    "q_audio" => $AudioDomain . $G2_A1_reading_passage . $A1_ID41_q_audio[$i] . ".mp3",
                    "q_conver" => $A1_ID41_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 41,
                    "q_audio" => $AudioDomain . $G2_A1_reading_passage . "chris-n-jane-audio" . ".mp3",
                    "q_conver" => "Chris and Jane are friends. Chris is 10 and Jane is 8. Chris says, \"I am thirsty when I want to drink.\" Jane says, \"I feel hungry when I want to eat.\" They like animals. They don't like cucumber. Chris' friends are excited when they play together. Jane is bored because there is no class today. ",
                    "q_content" => "We talk about food", "background" => $A1_ID41_image . "bg.png"
                ],
            ]);
        }


        ///////////////////////////////////////////////
        ////    Grade 2  Assessment 2 ID 42 ( Tracing )
        ///////////////////////////////////////////////


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 2 ID 43 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G2_A2_ID43_arrange_letter = "Grade_2/" . "Assessments/" . "Assessment_2/" . "rearrange_letter/";
        $A2_I43_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_2/rearrange_letter/";

        $a_ID43 = [
            "itch", "igloo", "insect", "jam", "juice", "july"
        ];

        foreach ($a_ID43 as $index => $i) {

            $q_ID43_shuf = str_shuffle($i);
            $q_ID43 = str_split($q_ID43_shuf);

            foreach ($q_ID43 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1, 'assess_id' => 43, 'q_content' => strtoupper($j),
                        'q_audio' => $AudioDomain . $G2_A2_ID43_arrange_letter . strtoupper($j) . ".mp3"
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 43,
                    'q_image' => $A2_I43_image . str_replace(' ', '', strtolower($i)) . ".png",
                    'a_audio' => $AudioDomain . $G2_A2_ID43_arrange_letter . strtolower($i) . ".mp3",
                    'a_content' => strtoupper($i),
                ],
            ]);
        }

        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 2 ID 44 ( multlple choice )
        ////////////////////////////////////////////////////////

        $G2_A2_multiple_choice = "Grade_2/" . "Assessments/" . "Assessment_2/" . "multiple_choice/";
        $A2_ID44_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_2/multiple_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 44, 'q_image' => $A2_ID44_image . "jacket.png", "q_content" => "Clean jacket", "a_content" => 1],
            ['round' => 1, 'assess_id' => 44, 'q_image' => null, "q_content" => "Dirty jacket", "a_content" => 0],

            ['round' => 2, 'assess_id' => 44, 'q_image' => $A2_ID44_image . "pencil.png", "q_content" => "Long pencil", "a_content" => 0],
            ['round' => 2, 'assess_id' => 44, 'q_image' => null, "q_content" => "Short pencil", "a_content" => 1],

            ['round' => 3, 'assess_id' => 44, 'q_image' => $A2_ID44_image . "pizza.png", "q_content" => "Pizza", "a_content" => 1],
            ['round' => 3, 'assess_id' => 44, 'q_image' => null, "q_content" => "Hot dog", "a_content" => 0],

            ['round' => 4, 'assess_id' => 44, 'q_image' => $A2_ID44_image . "bag.png", "q_content" => "Heavy bag", "a_content" => 1],
            ['round' => 4, 'assess_id' => 44, 'q_image' => null, "q_content" => "Light bag", "a_content" => 0],

            ['round' => 5, 'assess_id' => 44, 'q_image' => $A2_ID44_image . "pineapple.png", "q_content" => "Strawberry", "a_content" => 0],
            ['round' => 5, 'assess_id' => 44, 'q_image' => null, "q_content" => "Pineapple", "a_content" => 1],

            ['round' => 6, 'assess_id' => 44, 'q_image' => $A2_ID44_image . "lesson.png", "q_content" => "Easy lesson", "a_content" => 0],
            ['round' => 6, 'assess_id' => 44, 'q_image' => null, "q_content" => "Difficult lesson", "a_content" => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 2 ID 45 ( multlple choice )
        ////////////////////////////////////////////////////////

        $G2_A2_04_multiple_choice = "Grade_2/" . "Assessments/" . "Assessment_2/" . "04_multiple_choice/";
        $A2_ID45_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_2/04_multiple_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 45, 'q_image' => $A2_ID45_image . "frog.png", "q_content" => "Green frog", "a_content" => 1],
            ['round' => 1, 'assess_id' => 45, 'q_image' => null, "q_content" => "Red frog", "a_content" => 0],

            ['round' => 2, 'assess_id' => 45, 'q_image' => $A2_ID45_image . "cat.png", "q_content" => "White cat", "a_content" => 0],
            ['round' => 2, 'assess_id' => 45, 'q_image' => null, "q_content" => "Black cat", "a_content" => 1],

            ['round' => 3, 'assess_id' => 45, 'q_image' => $A2_ID45_image . "bag.png", "q_content" => "Heavy bag", "a_content" => 0],
            ['round' => 3, 'assess_id' => 45, 'q_image' => null, "q_content" => "Light bag", "a_content" => 1],

            ['round' => 4, 'assess_id' => 45, 'q_image' => $A2_ID45_image . "boy.png", "q_content" => "Monday", "a_content" => 1],
            ['round' => 4, 'assess_id' => 45, 'q_image' => null, "q_content" => "Friday", "a_content" => 0],

            ['round' => 5, 'assess_id' => 45, 'q_image' => $A2_ID45_image . "coffee.png", "q_content" => "Coffee", "a_content" => 1],
            ['round' => 5, 'assess_id' => 45, 'q_image' => null, "q_content" => "Water", "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 2 ID 46 ( Listening )
        ////////////////////////////////////////////////////////


        $G2_A2_fill_in_the_blank = "Grade_2/" . "Assessments/" . "Assessment_2/" . "fill_in_the_blank/";
        $A1_ID46_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_2/fill_in_the_blank/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 46,  'q_audio' =>  $AudioDomain . $G2_A2_fill_in_the_blank . "chris-is" . ".mp3", "q_content" => "Tall", "a_content" => 1],
            ['round' => 1, 'assess_id' => 46,  'q_audio' =>  null, "q_content" => "Beautiful", "a_content" => 0],
            ['round' => 1, 'assess_id' => 46,  'q_audio' =>  null, "q_content" => "Thin", "a_content" => 0],

            ['round' => 2, 'assess_id' => 46,  'q_audio' =>  $AudioDomain . $G2_A2_fill_in_the_blank . "jane-is" . ".mp3", "q_content" => "Tall",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 46,  'q_audio' =>  null, "q_content" => "Beautiful", "a_content" => 1],
            ['round' => 2, 'assess_id' => 46,  'q_audio' =>  null, "q_content" => "Thin", "a_content" => 0],

            ['round' => 3, 'assess_id' => 46,  'q_audio' =>  $AudioDomain . $G2_A2_fill_in_the_blank . "jack-dog-is" . ".mp3", "q_content" => "Tall", "a_content" => 0],
            ['round' => 3, 'assess_id' => 46,  'q_audio' =>  null, "q_content" => "Beautiful", "a_content" => 0],
            ['round' => 3, 'assess_id' => 46,  'q_audio' =>  null, "q_content" => "Thin", "a_content" => 1],

            ['round' => 4, 'assess_id' => 46,  'q_audio' =>  $AudioDomain . $G2_A2_fill_in_the_blank . "fav-food" . ".mp3", "q_content" => "Hamburger", "a_content" => 1],
            ['round' => 4, 'assess_id' => 46,  'q_audio' =>  null, "q_content" => "Sandwich", "a_content" => 0],
            ['round' => 4, 'assess_id' => 46,  'q_audio' =>  null, "q_content" => "Mango", "a_content" => 0],

            ['round' => 5, 'assess_id' => 46,  'q_audio' =>  $AudioDomain . $G2_A2_fill_in_the_blank . "fav-fruit" . ".mp3", "q_content" => "Hamburger", "a_content" => 0],
            ['round' => 5, 'assess_id' => 46,  'q_audio' =>  null, "q_content" => "Sandwich", "a_content" => 0],
            ['round' => 5, 'assess_id' => 46,  'q_audio' =>  null, "q_content" => "Strawberry", "a_content" => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 2 ID 47 ( Multiple Choice )
        ////////////////////////////////////////////////////////

        $G2_A2_06_multiple_choice = "Grade_2/" . "Assessments/" . "Assessment_2/" . "06_multiple_choice/";
        $A2_ID47_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_2/06_multiple_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 47, "q_image" => $A2_ID47_image . "jane.png", "q_conver" => "Jane is beautiful. She ____ long hair.", 'q_content' => "has", 'a_content' => 1],
            ['round' => 1, 'assess_id' => 47, "q_image" => null, "q_conver" => null, 'q_content' => "have", 'a_content' => 0],

            ['round' => 2, 'assess_id' => 47, "q_image" => $A2_ID47_image . "chris.png", "q_conver" => "Chris is tall. He ____ round face.", 'q_content' => "has", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 47, "q_image" => null, "q_conver" => null, 'q_content' => "have", 'a_content' => 0],

            ['round' => 3, 'assess_id' => 47, "q_image" => $A2_ID47_image . "thin_ovalface.png", "q_conver" => "I am thin. I ____ oval face.", 'q_content' => "has", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 47, "q_image" => null, "q_conver" => null, 'q_content' => "have", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 47, "q_image" => $A2_ID47_image . "short_darkeyes.png", "q_conver" => "You are short. You ____ dark eyes.", 'q_content' => "has", 'a_content' => 0],
            ['round' => 4, 'assess_id' => 47, "q_image" => null, "q_conver" => null, 'q_content' => "have", 'a_content' => 1],

            ['round' => 5, 'assess_id' => 47, "q_image" => $A2_ID47_image . "happy_bigcup.png", "q_conver" => "Jack is happy. He ____ a big cup.", 'q_content' => "has", 'a_content' => 1],
            ['round' => 5, 'assess_id' => 47, "q_image" => null, "q_conver" => null, 'q_content' => "have", 'a_content' => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 2 ID 48 ( True or False )
        ////////////////////////////////////////////////////////

        $G2_A2_true_false = "Grade_2/" . "Assessments/" . "Assessment_2/" . "true_false/";
        $A2_ID48_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_2/true_false/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 48, 'q_audio' => $AudioDomain . $G2_A2_true_false . "fat-dog.mp3", 'q_content' => "true",  'a_content' => 1, 'q_image' => $A2_ID48_image . "fat-dog.png"],
            ['round' => 1, 'assess_id' => 48, 'q_audio' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'assess_id' => 48, 'q_audio' => $AudioDomain . $G2_A2_true_false . "short-tree.mp3", 'q_content' => "true",  'a_content' => 0, 'q_image' => $A2_ID48_image . "short-tree.png"],
            ['round' => 2, 'assess_id' => 48, 'q_audio' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 3, 'assess_id' => 48, 'q_audio' => $AudioDomain . $G2_A2_true_false . "ugly-pic.mp3", 'q_content' => "true",  'a_content' => 0, 'q_image' => $A2_ID48_image . "ugly-pic.png"],
            ['round' => 3, 'assess_id' => 48, 'q_audio' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 4, 'assess_id' => 48, 'q_audio' => $AudioDomain . $G2_A2_true_false . "fast-car.mp3", 'q_content' => "true", 'a_content' => 1, 'q_image' => $A2_ID48_image . "fast-car.png"],
            ['round' => 4, 'assess_id' => 48, 'q_audio' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 5, 'assess_id' => 48, 'q_audio' => $AudioDomain . $G2_A2_true_false . "thin-cat.mp3", 'q_content' => "true",  'a_content' => 0, 'q_image' => $A2_ID48_image . "thin-cat.png"],
            ['round' => 5, 'assess_id' => 48, 'q_audio' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 2 ID 49 ( Reading Passages )
        ////////////////////////////////////////////////////////

        $G2_A2_reading_passage = "Grade_2/" . "Assessments/" . "Assessment_2/" . "reading_passage/";
        $A2_ID49_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_2/reading_passage/";

        $A2_ID49_q_audio = [
            "jack-dog",
            "rosy-jack",
            "rosy-has",
            "jack-rosy-like",
            "they-dont-like",
        ];

        $A1_ID49_q_conver = [
            "Jack's dog is ____.",
            "Rosy is Jack's ____.",
            "Rosy has ____.",
            "Jack and Rosy like ____.",
            "They don't like ____ because they have to study.",
        ];

        $A2_ID49_q_audio_ans = [
            ["Rosy", "Lucky"],
            ["Sister", "Friend"],
            ["Long hair", "Short hair"],
            ["Sunday", "Monday"],
            ["Tuesday", "Monday"],
        ];

        $A2_ID49_q_audio_a_content = [
            [0, 1],
            [0, 1],
            [1, 0],
            [1, 0],
            [0, 1],
        ];


        for ($i = 0; $i < count($A2_ID49_q_audio); $i++) {

            foreach ($A2_ID49_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 49,
                        "q_audio" => $AudioDomain . $G2_A2_reading_passage . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A2_ID49_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 49,
                    "q_audio" => $AudioDomain . $G2_A2_reading_passage . $A2_ID49_q_audio[$i] . ".mp3",
                    "q_conver" => $A1_ID49_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 49,
                    "q_audio" => $AudioDomain . $G2_A2_reading_passage . "jack-n-rosy-audio" . ".mp3",
                    "q_conver" => "Jack likes dogs. He has a dog. Its name is Lucky. It is fat and lovely. Jack and Lucky play together every day. They are happy when they play. Rosy is Jack's friend. She is beautiful. She has long hair and brown eyes. Rosy and Jack like Sunday. On Sunday, they go to the park and play with friends. They don't like Monday because they have to study many lessons.",
                    "q_content" => "Jack and Rosy", "background" => $A2_ID49_image . "bg.png"
                ],
            ]);
        }


        ///////////////////////////////////////////////
        ////    Grade 2  Assessment 3 ID 50 ( Tracing )
        ///////////////////////////////////////////////


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 3 ID 51 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G2_A3_ID51_arrange_letter = "Grade_2/" . "Assessments/" . "Assessment_3/" . "rearrange_letter/";
        $A3_I51_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_3/rearrange_letter/";

        $a_ID51 = [
            "octopus", "onion", "owl", "pig", "puzzel", "panda"
        ];

        foreach ($a_ID51 as $index => $i) {

            $q_ID51_shuf = str_shuffle($i);
            $q_ID51 = str_split($q_ID51_shuf);

            foreach ($q_ID51 as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $index + 1, 'assess_id' => 51, 'q_content' => strtoupper($j),
                        'q_audio' => $AudioDomain . $G2_A3_ID51_arrange_letter . strtoupper($j) . ".mp3"
                    ],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $index + 1, 'assess_id' => 51,
                    'q_image' => $A3_I51_image . str_replace(' ', '', strtolower($i)) . ".png",
                    'a_audio' => $AudioDomain . $G2_A3_ID51_arrange_letter . strtolower($i) . ".mp3",
                    'a_content' => strtoupper($i),
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 3 ID 52 ( Matching )
        ////////////////////////////////////////////////////////

        $A3_I52_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_3/matching/";
        $A3_I52_matching = "Grade_2/" . "Assessments/" . "Assessment_3/" . "matching/";


        $G2_A3_I52_matching = [

            ['Mushroom', 'Tree', 'Deer', 'Rope', "Ant"],
            ['Ox', 'Orchid', 'Oil', "Pool",  'Parrot'],

        ];

        $G2_A3_I52_matching_image = [

            ["Ant", 'Deer', 'Rope', 'Mushroom', 'Tree'],
            ["Pool", 'Oil', 'Parrot',  'Ox', 'Orchid'],

        ];


        for ($i = 0; $i < count($G2_A3_I52_matching); $i++) {

            foreach ($G2_A3_I52_matching[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 52, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $q, 'q_audio' => $AudioDomain . $A3_I52_matching .  str_replace(' ', '-', strtolower($q)) . ".mp3",
                    ]
                ]);
            }

            foreach ($G2_A3_I52_matching_image[$i] as $q) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'assess_id' => 52, 'round' => $i + 1, 'q_content' => $q,
                        'q_image' => $A3_I52_image . str_replace(' ', '-', strtolower($q)) . ".png", 'q_audio' => $AudioDomain . $A3_I52_matching . str_replace(' ', '-',  strtolower($q)) . ".mp3",
                    ]
                ]);
            }
        }


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 3 ID 53 ( multlple choice )
        ////////////////////////////////////////////////////////

        $G2_A3_multiple_choice = "Grade_2/" . "Assessments/" . "Assessment_3/" . "multiple_choice/";
        $A3_ID53_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_3/multiple_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 53, 'q_image' => $A3_ID53_image . "basketball.png", "q_content" => "Football", "a_content" => 0],
            ['round' => 1, 'assess_id' => 53, 'q_image' => null, "q_content" => "Basketball", "a_content" => 1],

            ['round' => 2, 'assess_id' => 53, 'q_image' => $A3_ID53_image . "hops.png", "q_content" => "Hopscotch", "a_content" => 1],
            ['round' => 2, 'assess_id' => 53, 'q_image' => null, "q_content" => "Jump rope", "a_content" => 0],

            ['round' => 3, 'assess_id' => 53, 'q_image' => $A3_ID53_image . "hippo.png", "q_content" => "Hippo", "a_content" => 1],
            ['round' => 3, 'assess_id' => 53, 'q_image' => null, "q_content" => "Rhino", "a_content" => 0],

            ['round' => 4, 'assess_id' => 53, 'q_image' => $A3_ID53_image . "rabbit.png", "q_content" => "Snake", "a_content" => 0],
            ['round' => 4, 'assess_id' => 53, 'q_image' => null, "q_content" => "Rabbit", "a_content" => 1],

            ['round' => 5, 'assess_id' => 53, 'q_image' => $A3_ID53_image . "quilt.png", "q_content" => "Quilt", "a_content" => 1],
            ['round' => 5, 'assess_id' => 53, 'q_image' => null, "q_content" => "Quiz", "a_content" => 0],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 3 ID 54 ( Listening )
        ////////////////////////////////////////////////////////


        $G2_A3_fill_in_the_blank = "Grade_2/" . "Assessments/" . "Assessment_3/" . "fill_in_the_blank/";
        $A1_ID54_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_3/fill_in_the_blank/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 54,  'q_audio' =>  $AudioDomain . $G2_A3_fill_in_the_blank . "can-you-quail" . ".mp3", "q_content" => "Quail", "a_content" => 1],
            ['round' => 1, 'assess_id' => 54,  'q_audio' =>  null, "q_content" => "Raincoat", "a_content" => 0],
            ['round' => 1, 'assess_id' => 54,  'q_audio' =>  null, "q_content" => "Rabbit", "a_content" => 0],

            ['round' => 2, 'assess_id' => 54,  'q_audio' =>  $AudioDomain . $G2_A3_fill_in_the_blank . "do-you-like-raincoat" . ".mp3", "q_content" => "Tall",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 54,  'q_audio' =>  null, "q_content" => "Raincoat", "a_content" => 1],
            ['round' => 2, 'assess_id' => 54,  'q_audio' =>  null, "q_content" => "Rabbit", "a_content" => 0],

            ['round' => 3, 'assess_id' => 54,  'q_audio' =>  $AudioDomain . $G2_A3_fill_in_the_blank . "it-is-a-rabbit" . ".mp3", "q_content" => "Tall", "a_content" => 0],
            ['round' => 3, 'assess_id' => 54,  'q_audio' =>  null, "q_content" => "Raincoat", "a_content" => 0],
            ['round' => 3, 'assess_id' => 54,  'q_audio' =>  null, "q_content" => "Rabbit", "a_content" => 1],

            ['round' => 4, 'assess_id' => 54,  'q_audio' =>  $AudioDomain . $G2_A3_fill_in_the_blank . "can-play-tennis" . ".mp3", "q_content" => "Tennis", "a_content" => 1],
            ['round' => 4, 'assess_id' => 54,  'q_audio' =>  null, "q_content" => "Quail", "a_content" => 0],
            ['round' => 4, 'assess_id' => 54,  'q_audio' =>  null, "q_content" => "Rabbit", "a_content" => 0],

            ['round' => 5, 'assess_id' => 54,  'q_audio' =>  $AudioDomain . $G2_A3_fill_in_the_blank . "it-is-quail" . ".mp3", "q_content" => "Quail", "a_content" => 1],
            ['round' => 5, 'assess_id' => 54,  'q_audio' =>  null, "q_content" => "Raincoat", "a_content" => 0],
            ['round' => 5, 'assess_id' => 54,  'q_audio' =>  null, "q_content" => "Rabbit", "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 3 ID 55 ( Grammar Multiple Choice )
        ////////////////////////////////////////////////////////

        $G2_A3_06_multiple_choice = "Grade_2/" . "Assessments/" . "Assessment_3/" . "06_multiple_choice/";
        $A3_ID55_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_3/06_multiple_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 55, "q_image" => $A3_ID55_image . "rosy.png", "q_conver" => "____ Sunday, Rosy eats a salad.", 'q_content' => "In", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 55, "q_image" => null, "q_conver" => null, 'q_content' => "On", 'a_content' => 1],

            ['round' => 2, 'assess_id' => 55, "q_image" => $A3_ID55_image . "chris.png", "q_conver" => "On Saturday, Chris ____ two hamburgers.", 'q_content' => "eats", 'a_content' => 1],
            ['round' => 2, 'assess_id' => 55, "q_image" => null, "q_conver" => null, 'q_content' => "eat", 'a_content' => 0],

            ['round' => 3, 'assess_id' => 55, "q_image" => $A3_ID55_image . "jane.png", "q_conver" => "Jane ____ cake.", 'q_content' => "like", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 55, "q_image" => null, "q_conver" => null, 'q_content' => "likes", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 55, "q_image" => $A3_ID55_image . "pic.png", "q_conver" => "____ you draw pictures? Yes, I can.", 'q_content' => "Can", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 55, "q_image" => null, "q_conver" => null, 'q_content' => "Do", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 55, "q_image" => $A3_ID55_image . "mango.png", "q_conver" => "____ you like mango? No, I don't.", 'q_content' => "Can", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 55, "q_image" => null, "q_conver" => null, 'q_content' => "Do", 'a_content' => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 3 ID 56 ( True or False )
        ////////////////////////////////////////////////////////

        $G2_A3_true_false = "Grade_2/" . "Assessments/" . "Assessment_3/" . "true_false/";
        $A3_ID56_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_3/true_false/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 56, 'q_audio' => $AudioDomain . $G2_A3_true_false . "giraffe.mp3", 'q_content' => "true",  'a_content' => 1, 'q_image' => $A3_ID56_image . "giraffe.png"],
            ['round' => 1, 'assess_id' => 56, 'q_audio' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 2, 'assess_id' => 56, 'q_audio' => $AudioDomain . $G2_A3_true_false . "pineapple.mp3", 'q_content' => "true",  'a_content' => 1, 'q_image' => $A3_ID56_image . "pineapple.png"],
            ['round' => 2, 'assess_id' => 56, 'q_audio' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 3, 'assess_id' => 56, 'q_audio' => $AudioDomain . $G2_A3_true_false . "mango.mp3", 'q_content' => "true",  'a_content' => 0, 'q_image' => $A3_ID56_image . "mango.png"],
            ['round' => 3, 'assess_id' => 56, 'q_audio' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

            ['round' => 4, 'assess_id' => 56, 'q_audio' => $AudioDomain . $G2_A3_true_false . "hippo.mp3", 'q_content' => "true", 'a_content' => 1, 'q_image' => $A3_ID56_image . "hippo.png"],
            ['round' => 4, 'assess_id' => 56, 'q_audio' => null, 'q_content' => "false", 'a_content' => 0, 'q_image' => null],

            ['round' => 5, 'assess_id' => 56, 'q_audio' => $AudioDomain . $G2_A3_true_false . "watermelon.mp3", 'q_content' => "true",  'a_content' => 0, 'q_image' => $A3_ID56_image . "watermelon.png"],
            ['round' => 5, 'assess_id' => 56, 'q_audio' => null, 'q_content' => "false", 'a_content' => 1, 'q_image' => null],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 2  Assessment 3 ID 57 ( Reading Passages )
        ////////////////////////////////////////////////////////

        $G2_A3_reading_passage = "Grade_2/" . "Assessments/" . "Assessment_3/" . "reading_passage/";
        $A3_ID57_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_3/reading_passage/";

        $A2_ID57_q_audio = [
            "lucky-cat",
            "lucky-fish",
            "ted-has",
            "ted-fav",
            "lucky-like",
        ];

        $A1_ID57_q_conver = [
            "Lucky is a little ____ cat.",
            "On Tuesday, Lucky eats ____ fish.",
            "Ted is Lucky's ____.",
            "Ted'favorite sport is ____.",
            "Lucky likes _____ very much. ",
        ];

        $A2_ID57_q_audio_ans = [
            ["brown", "black"],
            ["two", "more"],
            ["brother", "friend"],
            ["football", "tennis"],
            ["football", "fish"],
        ];

        $A2_ID57_q_audio_a_content = [
            [1, 0],
            [1, 0],
            [0, 1],
            [1, 0],
            [0, 1],
        ];


        for ($i = 0; $i < count($A2_ID57_q_audio); $i++) {

            foreach ($A2_ID57_q_audio_ans[$i] as $key => $val) {
                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 57,
                        "q_audio" => $AudioDomain . $G2_A3_reading_passage . str_replace(' ', '-', strtolower($val)) . ".mp3",
                        'q_content' => $val,
                        'a_content' => $A2_ID57_q_audio_a_content[$i][$key]
                    ],
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 57,
                    "q_audio" => $AudioDomain . $G2_A3_reading_passage . $A2_ID57_q_audio[$i] . ".mp3",
                    "q_conver" => $A1_ID57_q_conver[$i]
                ],
            ]);

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 57,
                    "q_audio" => $AudioDomain . $G2_A3_reading_passage . "lucky-audio" . ".mp3",
                    "q_conver" => "Lucky is a little brown cat. On Monday, he eats two fish. On Tuesday, he eats another two fish. On Wednesday, he eats more fish. He likes fish very much. He plays with his friend, Ted. Ted is a monkey. He likes banana. Ted's favorite sport is football. On Thursday, Lucky and Ted play football. Ted can run very fast.",
                    "background" => $A3_ID57_image . "bg.png"
                ],
            ]);
        }
    }
}
