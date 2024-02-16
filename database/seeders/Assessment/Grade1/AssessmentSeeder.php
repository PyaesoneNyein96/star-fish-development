<?php

namespace Database\Seeders\Assessment\Grade1;

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


        // DB::table('assessment_ans_n_ques')->insert(['assess_id' => 1, 'a_content' => 'lesson_3_video',]);
        // DB::table('assessment_ans_n_ques')->insert(['assess_id' => 2, 'a_content' => 'lesson_3_video_global']);



        // DB::table('assessment_ans_n_ques')->insert([
        //     ['round' => 1, 'assess_id' => 3, 'a_image' => "susan.gif", "a_audio" => "helloiamsusan.mp3", "a_conver" =>  "susan-hello.png", "background" =>  "bg.png"],
        //     ['round' => 1, 'assess_id' => 3, 'a_image' => "mary.gif", "a_audio" => "merry_nicetomeetyou.mp3", "a_conver" =>  "nice-to.png", "background" =>  "bg.png"],

        //     ['round' => 2, 'assess_id' => 3, 'a_image' => "mary.gif", "a_audio" => "helloiammerry.mp3", "a_conver" =>  "mary-hello.png", "background" =>  "bg.png"],
        //     ['round' => 2, 'assess_id' => 3, 'a_image' => "susan.gif", "a_audio" => "nicetomeetyou_susan.mp3", "a_conver" =>  "nice-to.png", "background" =>  "bg.png"],

        //     ['round' => 3, 'assess_id' => 3, 'a_image' => "tom.gif", "a_audio" => "helloiamtom.mp3", "a_conver" =>  "tom-hello.png", "background" =>  "bg.png"],
        //     ['round' => 3, 'assess_id' => 3, 'a_image' => "jerry.gif", "a_audio" => "jerry_nicetomeetyou.mp3", "a_conver" =>  "nice-to.png", "background" =>  "bg.png"],

        //     ['round' => 4, 'assess_id' => 3, 'a_image' => "jerry.gif", "a_audio" => "helloiamjerry.mp3", "a_conver" =>  "jerry-hello.png", "background" =>  "bg.png"],
        //     ['round' => 4, 'assess_id' => 3, 'a_image' => "tom.gif", "a_audio" => "tom_nicetomeetyou.mp3", "a_conver" =>  "nice-to.png", "background" =>  "bg.png"],

        // ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 1 ID 1 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G4_A1_arrange_letter = "Grade_1/" . "Assessments/" . "Assessment_1/" . "rearrange_letter/";
        $A1_ID1_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_1/rearrange_letter/";


        $q_ID1 = [

            ["S", "E", "R", "E", "R", "A"],
            ["R", "E", "L", "U", "R"],
            ["P", "O", "O", "N", "S"],
            ["O", "R", "M", "G", "I", "N", "N"],
            ["T", "T", "L", "B", "O", "E"],
            ["E", "V", "N", "E", "I", "N", "G"],
            ["T", "E", "R", "D", "S", "U"],
            ["C", "I", "L", "E", "N", "P"],
            ["A", "P", "L", "T",  "E"],
            ["N", "O", "Y", "C", "R", "A", "T", "S", "R"],

        ];

        $a_ID1 = [
            "ERASER", "RULER", "SPOON", "MORNING", "BOTTLE", "EVENING", "DUSTER", "PENCIL", "PLATE", "CRAYON"
        ];

        for ($i = 0; $i < count($q_ID1); $i++) {
            foreach ($q_ID1[$i] as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    ['round' => $i + 1, 'assess_id' => 1, 'q_content' => $j, 'q_audio' => $AudioDomain . $G4_A1_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 1,
                    'q_image' => $A1_ID1_image . str_replace(' ', '', strtolower($a_ID1[$i])) . ".png",
                    'a_audio' => $AudioDomain . $G4_A1_arrange_letter . strtolower($a_ID1[$i]) . ".mp3",
                    'a_content' => $a_ID1[$i],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 1 ID 2 ( Fill in the blank )
        ////////////////////////////////////////////////////////


        $G4_A1_fill_in_the_blank = "Grade_1/" . "Assessments/" . "Assessment_1/" . "fill_in_the_blank/";
        $A1_ID2_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_1/fill_in_the_blank/";

        $g1_A1_ID2_fill_in_the_blank_q1 = [

            ['A', 'E', 'C', 'H', 'A'],
            ['A', 'P', 'C', 'H', 'A'],
            ['A', 'D', 'C', 'H', 'O'],
            ['R', 'C', 'I', 'H', 'O'],
            ['R', 'G', 'I', 'A', 'O'],
            ['C', 'H', 'A', 'H', 'T'],
            ['Y', 'G', 'F', 'B', 'D'],
            ['K', 'L', 'F', 'C', 'Z'],
            ['L', 'A', 'E', 'B', 'T'],
            ['A', 'A', 'E', 'B', 'N'],

        ];

        $g1_A1_ID2_fill_in_the_blank_q2 = [
            '_ _ KE', '_ IRPL_NE', '_ _ LL', '_ _ R', '_ _ G', '_ H _ IR', '_ E _', "_ LO _ K", "T _ _ LE", "_ AN _ NA"
        ];

        $correctAns_G2 =   [

            ['C', 'A'],
            ['A', 'A'],
            ['D', 'O'],
            ['C', 'A'],
            ['B', 'A'],
            ['C', 'A'],
            ['B', 'D'],
            ['C', 'C'],
            ['A', 'B'],
            ['B', 'A'],

        ];

        $g1_A1_ID2_fill_in_the_blank_a = [
            'CAKE', 'AIRPLANE', 'DOLL', 'CAR', 'BAG', 'CHAIR', 'BED', "CLOCK", "TABLE", "BANANA"
        ];




        for ($i = 0; $i < count($g1_A1_ID2_fill_in_the_blank_q1); $i++) {

            foreach ($g1_A1_ID2_fill_in_the_blank_q1[$i] as $k => $word) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'assess_id' => 2,
                        'q_audio' => $AudioDomain . $G4_A1_fill_in_the_blank . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_G2[$i]),
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 2,
                    'q_audio' => $AudioDomain . $G4_A1_fill_in_the_blank . strtolower($g1_A1_ID2_fill_in_the_blank_a[$i]) . ".mp3",
                    'q_image' => $A1_ID2_image .  strtolower($g1_A1_ID2_fill_in_the_blank_a[$i]) . ".png",
                    'q_content' => $g1_A1_ID2_fill_in_the_blank_q2[$i],
                    'a_content' => $g1_A1_ID2_fill_in_the_blank_a[$i]
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 1 ID 3 ( Listening )
        ////////////////////////////////////////////////////////


        $G4_A1_listening = "Grade_1/" . "Assessments/" . "Assessment_1/" . "listening/";
        $A1_ID3_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_1/listening/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 3,  'q_audio' =>  $AudioDomain . $G4_A1_listening . "Listening" . ".mp3", "q_content" => "Good morning", "a_content" => 0],
            ['round' => 1, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "Good afternoon", "a_content" => 1],
            ['round' => 1, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "Good evening", "a_content" => 0],

            ['round' => 2, 'assess_id' => 3,  'q_audio' =>  $AudioDomain . $G4_A1_listening . "Listening" . ".mp3", "q_content" => "Ben",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "Can", "a_content" => 0],
            ['round' => 2, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "Dan", "a_content" => 1],

            ['round' => 3, 'assess_id' => 3,  'q_audio' =>  $AudioDomain . $G4_A1_listening . "Listening" . ".mp3", "q_content" => "What's your name?", "a_content" => 0],
            ['round' => 3, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "How are you?", "a_content" => 1],
            ['round' => 3, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "What's this?", "a_content" => 0],

            ['round' => 4, 'assess_id' => 3,  'q_audio' =>  $AudioDomain . $G4_A1_listening . "Listening" . ".mp3", "q_content" => "I'm fine.", "a_content" => 1],
            ['round' => 4, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "I'm ok.", "a_content" => 0],
            ['round' => 4, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "I'm Dan.", "a_content" => 0],

            ['round' => 5, 'assess_id' => 3,  'q_audio' =>  $AudioDomain . $G4_A1_listening . "Listening" . ".mp3", "q_content" => "I'm fine.", "a_content" => 0],
            ['round' => 5, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "I'm great.", "a_content" => 1],
            ['round' => 5, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "I'm ok.", "a_content" => 0],

        ]);
    }
}
