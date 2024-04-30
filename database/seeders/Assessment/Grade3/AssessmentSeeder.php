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
    }
}
