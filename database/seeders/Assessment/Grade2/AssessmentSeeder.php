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

        $G2_A1_listen_n_choice = "Grade_2/" . "Assessments/" . "Assessment_1/" . "listen_n_choice/";
        $A1_ID36_image = $domain . "/storage/images/Grade_2/Assessments/Assessment_1/listen_n_choice/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "clap.png", "q_content" => "Clap your hands", "a_content" => 1],
            ['round' => 1, 'assess_id' => 36, 'q_image' => null, "q_content" => "Jump up high", "a_content" => 0],

            ['round' => 2, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "raise.png", "q_content" => "Stamp your feet", "a_content" => 0],
            ['round' => 2, 'assess_id' => 36, 'q_image' => null, "q_content" => "Raise your hands", "a_content" => 1],

            ['round' => 3, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "turn.png", "q_content" => "Turn around", "a_content" => 1],
            ['round' => 3, 'assess_id' => 36, 'q_image' => null, "q_content" => "Clap your hands", "a_content" => 0],

            ['round' => 4, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "stamp.png", "q_content" => "Jump up high", "a_content" => 0],
            ['round' => 4, 'assess_id' => 36, 'q_image' => null, "q_content" => "Stamp your feet", "a_content" => 1],

            ['round' => 5, 'assess_id' => 36, 'q_image' => $A1_ID36_image . "jump.png", "q_content" => "Turn around", "a_content" => 0],
            ['round' => 5, 'assess_id' => 36, 'q_image' => null, "q_content" => "Jump up high", "a_content" => 1],

        ]);
    }
}
