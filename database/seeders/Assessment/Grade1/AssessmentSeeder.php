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


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 1 ID 1 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G1_A1_ID1_arrange_letter = "Grade_1/" . "Assessments/" . "Assessment_1/" . "rearrange_letter/";
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
                    ['round' => $i + 1, 'assess_id' => 1, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_A1_ID1_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 1,
                    'q_image' => $A1_ID1_image . str_replace(' ', '', strtolower($a_ID1[$i])) . ".png",
                    'a_audio' => $AudioDomain . $G1_A1_ID1_arrange_letter . strtolower($a_ID1[$i]) . ".mp3",
                    'a_content' => $a_ID1[$i],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 2 ID 7 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G1_A2_ID7_arrange_letter = "Grade_1/" . "Assessments/" . "Assessment_2/" . "rearrange_letter/";
        $A2_ID7_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_2/rearrange_letter/";


        $q_ID7 = [

            ["A", "P", "R", "R", "O", "T"],
            ["S", "E", "O", "R", "H"],
            ["I", "T", "R", "A", "B", "B"],
            ["T", "T", "I", "E", "N", "K"],
            ["A", "N", "G", "E", "O", "R"],
            ["C", "E", "I", "J", "U"],
            ["P", "A", "M", "L"],
            ["R", "A", "B", "E"],
            ["R", "O", "I", "N"],
            ["Y", "K", "E"],

        ];

        $a_ID7 = [
            "PARROT", "HORSE", "RABBIT", "KITTEN", "ORANGE", "JUICE", "LAMP", "BEAR", "IRON", "KEY"
        ];

        for ($i = 0; $i < count($q_ID7); $i++) {
            foreach ($q_ID7[$i] as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    ['round' => $i + 1, 'assess_id' => 7, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_A2_ID7_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 7,
                    'q_image' => $A2_ID7_image . str_replace(' ', '', strtolower($a_ID7[$i])) . ".png",
                    'a_audio' => $AudioDomain . $G1_A2_ID7_arrange_letter . strtolower($a_ID7[$i]) . ".mp3",
                    'a_content' => $a_ID7[$i],
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 3 ID 13 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G1_A3_ID13_arrange_letter = "Grade_1/" . "Assessments/" . "Assessment_3/" . "rearrange_letter/";
        $A3_ID13_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_3/rearrange_letter/";


        $q_ID13 = [

            ["G", "R", "E", "F", "I", "N"],
            ["D", "L", "E", "S", "N", "O", "O"],
            ["T", "H", "O", "U", "M"],
            ["E", "S", "N", "T"],
            ["D", "O", "B", "Y"],
            ["H", "E", "E", "T", "T"],
            ["R", "E", "A", "D", "B"],
            ["K", "I", "C", "H", "C", "E", "N"],
            ["P", "O", "S", "U"],
            ["T", "A", "B", "L", "E", "S", "V", "E", "E", "G"],

        ];

        $a_ID13 = [
            "FINGER", "NOODLES", "MOUTH", "NEST", "BODY", "TEETH", "BREAD", "CHICKEN", "SOUP", "VEGETABLES"
        ];

        for ($i = 0; $i < count($q_ID13); $i++) {
            foreach ($q_ID13[$i] as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    ['round' => $i + 1, 'assess_id' => 13, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_A3_ID13_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 13,
                    'q_image' => $A3_ID13_image . str_replace(' ', '', strtolower($a_ID13[$i])) . ".png",
                    'a_audio' => $AudioDomain . $G1_A3_ID13_arrange_letter . strtolower($a_ID13[$i]) . ".mp3",
                    'a_content' => $a_ID13[$i],
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 4 ID 19 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G1_A4_ID19_arrange_letter = "Grade_1/" . "Assessments/" . "Assessment_4/" . "rearrange_letter/";
        $A4_ID19_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_4/rearrange_letter/";


        $q_ID19 = [

            ["M", "E", "L", "O", "N", "T", "E", "R", "W", "A"],
            ["S", "T", "L", "E", "W", "H", "I"],
            ["I", "O", "V", "I", "N", "L"],
            ["H", "I", "N", "O", "R"],
            ["P", "S", "I", "R", "D", "E"],
            ["I", "T", "F", "R", "U", "S"],
            ["M", "J", "A"],
            ["B", "U", "T", "A", "N", "R", "A", "M"],
            ["L", "L", "A", "U", "M", "R", "B", "E"],

        ];

        $a_ID19 = [
            "WATERMELON", "WHISTLE", "VIOLIN", "RHINO", "SPIDER", "FRUITS", "JAM", "RAMBUTAN", "UMBRELLA"
        ];

        for ($i = 0; $i < count($q_ID19); $i++) {
            foreach ($q_ID19[$i] as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    ['round' => $i + 1, 'assess_id' => 19, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_A4_ID19_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 19,
                    'q_image' => $A4_ID19_image . str_replace(' ', '', strtolower($a_ID19[$i])) . ".png",
                    'a_audio' => $AudioDomain . $G1_A4_ID19_arrange_letter . strtolower($a_ID19[$i]) . ".mp3",
                    'a_content' => $a_ID19[$i],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 5 ID 25 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G1_A5_ID25_arrange_letter = "Grade_1/" . "Assessments/" . "Assessment_5/" . "rearrange_letter/";
        $A5_ID25_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_5/rearrange_letter/";


        $q_ID25 = [

            ["R", "A", "W", "D"],
            ["M", "O", "C", "E"],
            ["I", "N", "G", "S"],
            ["C", "E", "A", "N", "D"],
            ["E", "N", "D", "F", "R", "I"],
            ["T", "H", "E", "R", "M", "O"],
            ["I", "S", "S", "E", "R", "T"],
            ["B", "R", "O", "E", "R", "H", "T"],
            ["R", "O", "Z", "E"],
            ["G", "U", "R", "T", "Y", "O"],

        ];

        $a_ID25 = [
            "DRAW", "COME", "SING", "DANCE", "FRIEND", "MOTHER", "SISTER", "BROTHER", "ZERO", "YOGURT"
        ];

        for ($i = 0; $i < count($q_ID25); $i++) {
            foreach ($q_ID25[$i] as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    ['round' => $i + 1, 'assess_id' => 25, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_A5_ID25_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 25,
                    'q_image' => $A5_ID25_image . str_replace(' ', '', strtolower($a_ID25[$i])) . ".png",
                    'a_audio' => $AudioDomain . $G1_A5_ID25_arrange_letter . strtolower($a_ID25[$i]) . ".mp3",
                    'a_content' => $a_ID25[$i],
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

        $correctAns_A2_ID2 =   [

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
                        'a_content' =>  implode(' ', $correctAns_A2_ID2[$i]),
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
        ////    Grade 1  Assessment 2 ID 8 ( Fill in the blank )
        ////////////////////////////////////////////////////////


        $G1_A2_fill_in_the_blank = "Grade_1/" . "Assessments/" . "Assessment_2/" . "fill_in_the_blank/";
        $A2_ID8_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_2/fill_in_the_blank/";

        $g1_A2_ID8_fill_in_the_blank_q1 = [

            ['A', 'D', 'A', 'H', 'T'],
            ['A', 'I', 'G', 'H', 'L'],
            ['H', 'G', 'E', 'G'],
            ['I', 'E', 'K', 'T'],
            ['L', 'E', 'F', 'W'],
            ['L', 'I', 'F', 'R'],
            ['E', 'I', 'G', 'C'],
            ['S', 'I', 'H', 'C', 'D'],
            ['O', 'I', 'K', 'C', 'D'],
            ['O', 'C', 'L', 'Z', 'U'],

        ];

        $g1_A2_ID8_fill_in_the_blank_q2 = [
            '_ _ N _', '_ _ R _', '_ _ _', '_ _ T _', '_ _ OW _ R', '_ _ R _', '_ _ _', "_ _ S _", "_ O _ _", "_ O _ _"
        ];

        $correctAns_A2_ID8 =   [

            ['H', 'A', "D"],
            ['G', 'I', "L"],
            ['E', 'G', "G"],
            ['K', 'I', "E"],
            ['F', 'L', "E"],
            ['B', 'I', "D"],
            ['I', 'C', "E"],
            ['F', 'I', 'H'],
            ['C', 'C', "K"],
            ['L', 'C', "K"],

        ];

        $g1_A2_ID8_fill_in_the_blank_a = [
            'HAND', 'GIRL', 'EGG', 'KITE', 'FLOWER', 'BIRD', 'ICE', "FISH", "COCK", "LOCK"
        ];




        for ($i = 0; $i < count($g1_A2_ID8_fill_in_the_blank_q1); $i++) {

            foreach ($g1_A2_ID8_fill_in_the_blank_q1[$i] as $k => $word) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'assess_id' => 8,
                        'q_audio' => $AudioDomain . $G1_A2_fill_in_the_blank . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_A2_ID8[$i]),
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 8,
                    'q_audio' => $AudioDomain . $G1_A2_fill_in_the_blank . strtolower($g1_A2_ID8_fill_in_the_blank_a[$i]) . ".mp3",
                    'q_image' => $A2_ID8_image .  strtolower($g1_A2_ID8_fill_in_the_blank_a[$i]) . ".png",
                    'q_content' => $g1_A2_ID8_fill_in_the_blank_q2[$i],
                    'a_content' => $g1_A2_ID8_fill_in_the_blank_a[$i]
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 3 ID 14 ( Fill in the blank )
        ////////////////////////////////////////////////////////


        $G1_A3_fill_in_the_blank = "Grade_1/" . "Assessments/" . "Assessment_3/" . "fill_in_the_blank/";
        $A3_ID14_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_3/fill_in_the_blank/";

        $g1_A3_ID14_fill_in_the_blank_q1 = [

            ['C', 'H', 'K', 'I', 'R'],
            ['H', 'D', 'L', 'E', 'A'],
            ['K', 'I', 'K', 'R', "E"],
            ['G', 'Y', 'L', 'E', "J"],
            ['B', 'I', 'L', 'R', "C"],
            ['C', 'I', 'K', 'R', "E"],
            ['E', 'I', 'G', 'K', "L"],
            ['N', 'G', 'E', 'A', 'M'],
            ['N', 'G', 'I', 'A', 'L'],
            ['N', 'N', 'H', 'A', 'E'],

        ];

        $g1_A3_ID14_fill_in_the_blank_q2 = [
            'H _ _ _', 'H _ _ _',  '_ _ E _', '_ _ _', 'R _ _ _', '_ _ C _', 'M _ _ _', "_ O _ K _ Y", "_ A _ _", "_ I _ _"
        ];

        $correctAns_A3_ID14 =   [

            ['A', 'I', "R"],
            ['E', 'A', "D"],
            ['K', 'N', "E"],
            ['L', 'E', "G"],
            ['I', 'C', "E"],
            ['N', 'E', "K"],
            ['I', 'L', "K"],
            ['M', 'N', 'E'],
            ['N', 'I', "L"],
            ['N', 'N', "E"],

        ];

        $g1_A3_ID14_fill_in_the_blank_a = [
            'HAIR', 'HEAD',  'KNEE', 'LEG', 'RICE', 'NECK', 'MILK', "MONKEY", "NAIL", "NINE"
        ];




        for ($i = 0; $i < count($g1_A3_ID14_fill_in_the_blank_q1); $i++) {

            foreach ($g1_A3_ID14_fill_in_the_blank_q1[$i] as $k => $word) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'assess_id' => 14,
                        'q_audio' => $AudioDomain . $G1_A3_fill_in_the_blank . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_A3_ID14[$i]),
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 14,
                    'q_audio' => $AudioDomain . $G1_A3_fill_in_the_blank . strtolower($g1_A3_ID14_fill_in_the_blank_a[$i]) . ".mp3",
                    'q_image' => $A3_ID14_image .  strtolower($g1_A3_ID14_fill_in_the_blank_a[$i]) . ".png",
                    'q_content' => $g1_A3_ID14_fill_in_the_blank_q2[$i],
                    'a_content' => $g1_A3_ID14_fill_in_the_blank_a[$i]
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 4 ID 20 ( Fill in the blank )
        ////////////////////////////////////////////////////////


        $G1_A4_fill_in_the_blank = "Grade_1/" . "Assessments/" . "Assessment_4/" . "fill_in_the_blank/";
        $A4_ID20_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_4/fill_in_the_blank/";

        $g1_A4_ID20_fill_in_the_blank_q1 = [

            ['R', 'O', 'T', 'W', 'N'],
            ['N', 'P', 'T', 'U', 'N'],
            ['G', 'V', 'T', 'U', "A"],
            ['C', 'F', 'T', 'U', "A"],
            ['C', 'R', 'T', 'U', "A"],
            ['S', 'R', 'T', 'E', "A"],
            ['O', 'Z', 'W', 'X', "T"],
            ['E', 'R', 'W', 'E', "T"],
            ['O', 'R', 'D', 'E', 'A'],
            ['O', 'S', 'T', 'E', 'R'],

        ];

        $g1_A4_ID20_fill_in_the_blank_q2 = [
            '_ _ A _ GE', '_ E _ G _ IN',  '_ _ A _ A', '_ ACK _ R _ IT', '_ A _ E _', '_ _ _ E', '_ _ _', "_ _ E _", "_ O _ _", "_ _ A _"
        ];

        $correctAns_A4_ID20 =   [

            ['O', 'R', "N"],
            ['P', 'N', "U"],
            ['G', 'U', "V"],
            ['J', 'F', "U"],
            ['W', 'T', "R"],
            ['V', 'A', "S"],
            ['T', 'W', "O"],
            ['T', 'R', 'E'],
            ['R', 'A', "D"],
            ['S', 'T', "R"],

        ];

        $g1_A4_ID20_fill_in_the_blank_a = [
            'ORANGE', 'PENGUIN',  'GUAVA', 'JACKFRUIT', 'WATER', 'VASE', 'TWO', "TREE", "ROAD", "STAR"
        ];




        for ($i = 0; $i < count($g1_A4_ID20_fill_in_the_blank_q1); $i++) {

            foreach ($g1_A4_ID20_fill_in_the_blank_q1[$i] as $k => $word) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'assess_id' => 20,
                        'q_audio' => $AudioDomain . $G1_A4_fill_in_the_blank . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_A4_ID20[$i]),
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 20,
                    'q_audio' => $AudioDomain . $G1_A4_fill_in_the_blank . strtolower($g1_A4_ID20_fill_in_the_blank_a[$i]) . ".mp3",
                    'q_image' => $A4_ID20_image .  strtolower($g1_A4_ID20_fill_in_the_blank_a[$i]) . ".png",
                    'q_content' => $g1_A4_ID20_fill_in_the_blank_q2[$i],
                    'a_content' => $g1_A4_ID20_fill_in_the_blank_a[$i]
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 5 ID 26 ( Fill in the blank )
        ////////////////////////////////////////////////////////


        $G1_A5_fill_in_the_blank = "Grade_1/" . "Assessments/" . "Assessment_5/" . "fill_in_the_blank/";
        $A5_ID26_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_5/fill_in_the_blank/";

        $g1_A5_ID26_fill_in_the_blank_q1 = [

            ['A', 'P', 'T', 'Y', 'G'],
            ['O', 'P', 'K', 'Y', 'G'],
            ['O', 'X', 'K', 'Y', 'N'],
            ['I', 'P', 'N', 'Z', "G"],
            ['I', 'O', 'K', 'Z', "O"],
            ['A', 'O', 'E', 'R', "O"],
            ['N', 'O', 'E', 'L', "C"],
            ['H', 'O', 'R', 'L', "D"],
            ['S', 'O', 'R', 'S', "D"],
            ['U', 'R', 'T', 'N', 'G'],

        ];

        $g1_A5_ID26_fill_in_the_blank_q2 = [
            '_ _ CH _', '_ _ L _',  '_ _ LOPHO _ E', '_ _ _', '_ _ _', '_ _ _ RA', '_ N _ L _', "_ _ ANDFA _ HER", "_ O _ _ INS", "A _ _ _"
        ];

        $correctAns_A5_ID26 =   [

            ['Y', 'A', "T"],
            ['Y', 'O', "K"],
            ['X', 'Y', "N"],
            ['Z', 'I', "P"],
            ['Z', 'O', "O"],
            ['Z', 'E', "B"],
            ['U', 'C', "E"],
            ['G', 'R', "T"],
            ['C', 'U', 'S'],
            ['U', "N", "T"],

        ];

        $g1_A5_ID26_fill_in_the_blank_a = [
            'YACHT', 'YOLK',  'XYLOPHONE', 'ZIP', 'ZOO', 'ZEBRA', 'UNCLE', "GRANDFATHER", "COUSINS", "AUNT"
        ];




        for ($i = 0; $i < count($g1_A5_ID26_fill_in_the_blank_q1); $i++) {

            foreach ($g1_A5_ID26_fill_in_the_blank_q1[$i] as $k => $word) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'assess_id' => 26,
                        'q_audio' => $AudioDomain . $G1_A5_fill_in_the_blank . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_A5_ID26[$i]),
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 26,
                    'q_audio' => $AudioDomain . $G1_A5_fill_in_the_blank . strtolower($g1_A5_ID26_fill_in_the_blank_a[$i]) . ".mp3",
                    'q_image' => $A5_ID26_image .  strtolower($g1_A5_ID26_fill_in_the_blank_a[$i]) . ".png",
                    'q_content' => $g1_A5_ID26_fill_in_the_blank_q2[$i],
                    'a_content' => $g1_A5_ID26_fill_in_the_blank_a[$i]
                ],
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 1 ID 3 ( Listening )
        ////////////////////////////////////////////////////////


        $G1_A1_listening = "Grade_1/" . "Assessments/" . "Assessment_1/" . "listening/";
        $A1_ID3_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_1/listening/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 3,  'q_audio' =>  $AudioDomain . $G1_A1_listening . "Listening" . ".mp3", "q_content" => "Good morning", "a_content" => 0],
            ['round' => 1, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "Good afternoon", "a_content" => 1],
            ['round' => 1, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "Good evening", "a_content" => 0],

            ['round' => 2, 'assess_id' => 3,  'q_audio' =>  $AudioDomain . $G1_A1_listening . "Listening" . ".mp3", "q_content" => "Ben",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "Can", "a_content" => 0],
            ['round' => 2, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "Dan", "a_content" => 1],

            ['round' => 3, 'assess_id' => 3,  'q_audio' =>  $AudioDomain . $G1_A1_listening . "Listening" . ".mp3", "q_content" => "What's your name?", "a_content" => 0],
            ['round' => 3, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "How are you?", "a_content" => 1],
            ['round' => 3, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "What's this?", "a_content" => 0],

            ['round' => 4, 'assess_id' => 3,  'q_audio' =>  $AudioDomain . $G1_A1_listening . "Listening" . ".mp3", "q_content" => "I'm fine.", "a_content" => 1],
            ['round' => 4, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "I'm ok.", "a_content" => 0],
            ['round' => 4, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "I'm Dan.", "a_content" => 0],

            ['round' => 5, 'assess_id' => 3,  'q_audio' =>  $AudioDomain . $G1_A1_listening . "Listening" . ".mp3", "q_content" => "I'm fine.", "a_content" => 0],
            ['round' => 5, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "I'm great.", "a_content" => 1],
            ['round' => 5, 'assess_id' => 3,  'q_audio' =>  null, "q_content" => "I'm ok.", "a_content" => 0],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 2 ID 9 ( Listening )
        ////////////////////////////////////////////////////////


        $G1_A2_listening = "Grade_1/" . "Assessments/" . "Assessment_2/" . "listening/";
        $A2_ID9_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_2/listening/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 9,  'q_audio' =>  $AudioDomain . $G1_A2_listening . "This-is-my-house-It-is-big-T" . ".mp3", "q_content" => "hat", "a_content" => 0],
            ['round' => 1, 'assess_id' => 9,  'q_audio' =>  null, "q_content" => "house", "a_content" => 1],
            ['round' => 1, 'assess_id' => 9,  'q_audio' =>  null, "q_content" => "hand", "a_content" => 0],

            ['round' => 2, 'assess_id' => 9,  'q_audio' =>  $AudioDomain . $G1_A2_listening . "This-is-my-house-It-is-big-T" . ".mp3", "q_content" => "flower",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 9,  'q_audio' =>  null, "q_content" => "hosue", "a_content" => 1],
            ['round' => 2, 'assess_id' => 9,  'q_audio' =>  null, "q_content" => "grass", "a_content" => 0],

            ['round' => 3, 'assess_id' => 9,  'q_audio' =>  $AudioDomain . $G1_A2_listening . "This-is-my-house-It-is-big-T" . ".mp3", "q_content" => "gate", "a_content" => 0],
            ['round' => 3, 'assess_id' => 9,  'q_audio' =>  null, "q_content" => "goat", "a_content" => 0],
            ['round' => 3, 'assess_id' => 9,  'q_audio' =>  null, "q_content" => "grass", "a_content" => 1],

            ['round' => 4, 'assess_id' => 9,  'q_audio' =>  $AudioDomain . $G1_A2_listening . "This-is-my-house-It-is-big-T" . ".mp3", "q_content" => "pink", "a_content" => 0],
            ['round' => 4, 'assess_id' => 9,  'q_audio' =>  null, "q_content" => "yellow", "a_content" => 1],
            ['round' => 4, 'assess_id' => 9,  'q_audio' =>  null, "q_content" => "red", "a_content" => 0],

            ['round' => 5, 'assess_id' => 9,  'q_audio' =>  $AudioDomain . $G1_A2_listening . "This-is-my-house-It-is-big-T" . ".mp3", "q_content" => "gate", "a_content" => 1],
            ['round' => 5, 'assess_id' => 9,  'q_audio' =>  null, "q_content" => "goat", "a_content" => 0],
            ['round' => 5, 'assess_id' => 9,  'q_audio' =>  null, "q_content" => "grass", "a_content" => 0],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 4 ID 21 ( Listening )
        ////////////////////////////////////////////////////////


        $G1_A4_listening = "Grade_1/" . "Assessments/" . "Assessment_4/" . "listening/";
        $A4_ID21_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_4/listening/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 21,  'q_audio' =>  $AudioDomain . $G1_A4_listening . "Listening" . ".mp3", "q_content" => "melon", "a_content" => 0],
            ['round' => 1, 'assess_id' => 21,  'q_audio' =>  null, "q_content" => "mango", "a_content" => 1],
            ['round' => 1, 'assess_id' => 21,  'q_audio' =>  null, "q_content" => "mangosteen", "a_content" => 0],

            ['round' => 2, 'assess_id' => 21,  'q_audio' =>  $AudioDomain . $G1_A4_listening . "Listening" . ".mp3", "q_content" => "coconut",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 21,  'q_audio' =>  null, "q_content" => "durian", "a_content" => 1],
            ['round' => 2, 'assess_id' => 21,  'q_audio' =>  null, "q_content" => "jackfruit", "a_content" => 0],

            ['round' => 3, 'assess_id' => 21,  'q_audio' =>  $AudioDomain . $G1_A4_listening . "Listening" . ".mp3", "q_content" => "4", "a_content" => 0],
            ['round' => 3, 'assess_id' => 21,  'q_audio' =>  null, "q_content" => "7", "a_content" => 0],
            ['round' => 3, 'assess_id' => 21,  'q_audio' =>  null, "q_content" => "10", "a_content" => 1],

            ['round' => 4, 'assess_id' => 21,  'q_audio' =>  $AudioDomain . $G1_A4_listening . "Listening" . ".mp3", "q_content" => "4 mangoes", "a_content" => 0],
            ['round' => 4, 'assess_id' => 21,  'q_audio' =>  null, "q_content" => "7 mangoes", "a_content" => 1],
            ['round' => 4, 'assess_id' => 21,  'q_audio' =>  null, "q_content" => "10 mangoes", "a_content" => 0],

            ['round' => 5, 'assess_id' => 21,  'q_audio' =>  $AudioDomain . $G1_A4_listening . "Listening" . ".mp3", "q_content" => "How many?", "a_content" => 0],
            ['round' => 5, 'assess_id' => 21,  'q_audio' =>  null, "q_content" => "I don't like mangoes.", "a_content" => 0],
            ['round' => 5, 'assess_id' => 21,  'q_audio' =>  null, "q_content" => "Here you are.", "a_content" => 1],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 2 ID 11 ( Grammar )
        ////////////////////////////////////////////////////////

        $G1_A2_grammar = "Grade_1/" . "Assessments/" . "Assessment_2/" . "grammar/";
        $A2_ID11_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_2/grammar/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 11, "q_image" => $G1_A2_grammar . "horse.png", "q_conver" => "It's ____ horse.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 11, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

            ['round' => 2, 'assess_id' => 11, "q_image" => $G1_A2_grammar . "goat.png", "q_conver" => "It's ____ goat.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 11, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

            ['round' => 3, 'assess_id' => 11, "q_image" => $G1_A2_grammar . "egg.png", "q_conver" => "It's ____ egg.", 'q_content' => "an", 'a_content' => 1],
            ['round' => 3, 'assess_id' => 11, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 0],

            ['round' => 4, 'assess_id' => 11, "q_image" => $G1_A2_grammar . "ant.png", "q_conver" => "It's ____ ant.", 'q_content' => "an", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 11, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 11, "q_image" => $G1_A2_grammar . "jacket.png", "q_conver" => "It's ____ jacket.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 11, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 4 ID 23 ( Grammar )
        ////////////////////////////////////////////////////////

        $G1_A4_grammar = "Grade_1/" . "Assessments/" . "Assessment_4/" . "grammar/";
        $A4_ID23_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_4/grammar/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 23, "q_image" => $G1_A4_grammar . "pineapple.png", "q_conver" => "It's ____ pineapple.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 23, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

            ['round' => 2, 'assess_id' => 23, "q_image" => $G1_A4_grammar . "guava.png", "q_conver" => "It's ____ guava.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 23, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

            ['round' => 3, 'assess_id' => 23, "q_image" => $G1_A4_grammar . "coconut.png", "q_conver" => "It's ____ coconut.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 23, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 23, "q_image" => $G1_A4_grammar . "orange.png", "q_conver" => "It's ____ orange.", 'q_content' => "an", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 23, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 23, "q_image" => $G1_A4_grammar . "avocado.png", "q_conver" => "It's ____ avocado.", 'q_content' => "an", 'a_content' => 1],
            ['round' => 5, 'assess_id' => 23, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 0],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 3 ID 15 ( Listening (multlple choice) )
        ////////////////////////////////////////////////////////

        $G1_A3_listening_mc = "Grade_1/" . "Assessments/" . "Assessment_3/" . "listening_mc/";
        $A3_ID15_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_3/listening_mc/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 15, 'q_image' => $A3_ID15_image . "nose.png", "q_content" => "Nose", "a_content" => 1],
            ['round' => 1, 'assess_id' => 15, 'q_image' => null, "q_content" => "Mouth", "a_content" => 0],
            ['round' => 1, 'assess_id' => 15, 'q_image' => null, "q_content" => "Cheek", "a_content" => 0],

            ['round' => 2, 'assess_id' => 15, 'q_image' => $A3_ID15_image . "back.png", "q_content" => "Chest", "a_content" => 0],
            ['round' => 2, 'assess_id' => 15, 'q_image' => null, "q_content" => "Stomach", "a_content" => 0],
            ['round' => 2, 'assess_id' => 15, 'q_image' => null, "q_content" => "Waist", "a_content" => 1],

            ['round' => 3, 'assess_id' => 15, 'q_image' => $A3_ID15_image . "leg.png", "q_content" => "Hand", "a_content" => 0],
            ['round' => 3, 'assess_id' => 15, 'q_image' => null, "q_content" => "Body", "a_content" => 0],
            ['round' => 3, 'assess_id' => 15, 'q_image' => null, "q_content" => "Leg", "a_content" => 1],

            ['round' => 4, 'assess_id' => 15, 'q_image' => $A3_ID15_image . "shoulder.png", "q_content" => "Shoulder", "a_content" => 1],
            ['round' => 4, 'assess_id' => 15, 'q_image' => null, "q_content" => "Back", "a_content" => 0],
            ['round' => 4, 'assess_id' => 15, 'q_image' => null, "q_content" => "Neck", "a_content" => 0],

            ['round' => 5, 'assess_id' => 15, 'q_image' => $A3_ID15_image . "face.png", "q_content" => "Head", "a_content" => 1],
            ['round' => 5, 'assess_id' => 15, 'q_image' => null, "q_content" => "Knee", "a_content" => 0],
            ['round' => 5, 'assess_id' => 15, 'q_image' => null, "q_content" => "Toes", "a_content" => 0],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 1 ID 6 ( True or False )
        ////////////////////////////////////////////////////////

        $G1_A1_true_false = "Grade_1/" . "Assessments/" . "Assessment_1/" . "true_false/";
        $A1_ID6_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_1/true_false/";


        DB::table('assessment_ans_n_ques')->insert([
            ['round' => 1, 'assess_id' => 76, 'q_audio' => $AudioDomain . $G1_A1_true_false . "SubBlock_My-names-susan.mp3", 'q_content' => "true", "q_conver" => $A1_ID6_image .  "susan.png", 'a_content' => 0, "round_instruction" => $AudioDomain . $G1_A1_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A1_ID6_image . "star.png"],
            ['round' => 1, 'assess_id' => 76, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 1, "round_instruction" => null, 'q_image' => null],

            ['round' => 2, 'assess_id' => 76, 'q_audio' => $AudioDomain . $G1_A1_true_false . "SubBlock_Im-mary.mp3", 'q_content' => "true", "q_conver" => $A1_ID6_image . "mary.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A1_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A1_ID6_image . "star.png"],
            ['round' => 2, 'assess_id' => 76, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

            ['round' => 3, 'assess_id' => 76, 'q_audio' => $AudioDomain . $G1_A1_true_false . "SubBlock_Its-a-mat.mp3", 'q_content' => "true", "q_conver" => $A1_ID6_image . "mat.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A1_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A1_ID6_image . "star.png"],
            ['round' => 3, 'assess_id' => 76, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

            ['round' => 4, 'assess_id' => 76, 'q_audio' => $AudioDomain . $G1_A1_true_false . "SubBlock_its-one-bag.mp3", 'q_content' => "true", "q_conver" => $A1_ID6_image . "bag.png", 'a_content' => 0, "round_instruction" => $AudioDomain . $G1_A1_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A1_ID6_image . "star.png"],
            ['round' => 4, 'assess_id' => 76, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 1, "round_instruction" => null, 'q_image' => null],

            ['round' => 5, 'assess_id' => 76, 'q_audio' => $AudioDomain . $G1_A1_true_false . "SubBlock_Whats-this.mp3", 'q_content' => "true", "q_conver" => $A1_ID6_image . "what.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A1_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A1_ID6_image . "star.png"],
            ['round' => 5, 'assess_id' => 76, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

        ]);
    }
}
