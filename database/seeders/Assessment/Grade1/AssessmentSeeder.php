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
        $ImageDomain = $domain . "/storage/images/";


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
            ["N", "O", "Y", "C", "R", "A"],

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
        ////    Grade 1  Assessment 2 ID 8 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G1_A2_ID8_arrange_letter = "Grade_1/" . "Assessments/" . "Assessment_2/" . "rearrange_letter/";
        $A2_ID8_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_2/rearrange_letter/";


        $q_ID8 = [

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

        $a_ID8 = [
            "PARROT", "HORSE", "RABBIT", "KITTEN", "ORANGE", "JUICE", "LAMP", "BEAR", "IRON", "KEY"
        ];

        for ($i = 0; $i < count($q_ID8); $i++) {
            foreach ($q_ID8[$i] as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    ['round' => $i + 1, 'assess_id' => 8, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_A2_ID8_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 8,
                    'q_image' => $A2_ID8_image . str_replace(' ', '', strtolower($a_ID8[$i])) . ".png",
                    'a_audio' => $AudioDomain . $G1_A2_ID8_arrange_letter . strtolower($a_ID8[$i]) . ".mp3",
                    'a_content' => $a_ID8[$i],
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 3 ID 15 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G1_A3_ID15_arrange_letter = "Grade_1/" . "Assessments/" . "Assessment_3/" . "rearrange_letter/";
        $A3_ID15_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_3/rearrange_letter/";


        $q_ID15 = [

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

        $a_ID15 = [
            "FINGER", "NOODLES", "MOUTH", "NEST", "BODY", "TEETH", "BREAD", "CHICKEN", "SOUP", "VEGETABLES"
        ];

        for ($i = 0; $i < count($q_ID15); $i++) {
            foreach ($q_ID15[$i] as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    ['round' => $i + 1, 'assess_id' => 15, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_A3_ID15_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 15,
                    'q_image' => $A3_ID15_image . str_replace(' ', '', strtolower($a_ID15[$i])) . ".png",
                    'a_audio' => $AudioDomain . $G1_A3_ID15_arrange_letter . strtolower($a_ID15[$i]) . ".mp3",
                    'a_content' => $a_ID15[$i],
                ],
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 4 ID 22 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G1_A4_ID22_arrange_letter = "Grade_1/" . "Assessments/" . "Assessment_4/" . "rearrange_letter/";
        $A4_ID22_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_4/rearrange_letter/";


        $q_ID22 = [

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

        $a_ID22 = [
            "WATERMELON", "WHISTLE", "VIOLIN", "RHINO", "SPIDER", "FRUITS", "JAM", "RAMBUTAN", "UMBRELLA"
        ];

        for ($i = 0; $i < count($q_ID22); $i++) {
            foreach ($q_ID22[$i] as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    ['round' => $i + 1, 'assess_id' => 22, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_A4_ID22_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 22,
                    'q_image' => $A4_ID22_image . str_replace(' ', '', strtolower($a_ID22[$i])) . ".png",
                    'a_audio' => $AudioDomain . $G1_A4_ID22_arrange_letter . strtolower($a_ID22[$i]) . ".mp3",
                    'a_content' => $a_ID22[$i],
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 5 ID 28 ( Arranging Letter )
        ////////////////////////////////////////////////////////

        $G1_A5_ID28_arrange_letter = "Grade_1/" . "Assessments/" . "Assessment_5/" . "rearrange_letter/";
        $A5_ID28_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_5/rearrange_letter/";


        $q_ID28 = [

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

        $a_ID28 = [
            "DRAW", "COME", "SING", "DANCE", "FRIEND", "MOTHER", "SISTER", "BROTHER", "ZERO", "YOGURT"
        ];

        for ($i = 0; $i < count($q_ID28); $i++) {
            foreach ($q_ID28[$i] as $j) {
                DB::table('assessment_ans_n_ques')->insert([
                    ['round' => $i + 1, 'assess_id' => 28, 'q_content' => $j, 'q_audio' => $AudioDomain . $G1_A5_ID28_arrange_letter . strtoupper($j) . ".mp3"],
                ]);
            }
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 28,
                    'q_image' => $A5_ID28_image . str_replace(' ', '', strtolower($a_ID28[$i])) . ".png",
                    'a_audio' => $AudioDomain . $G1_A5_ID28_arrange_letter . strtolower($a_ID28[$i]) . ".mp3",
                    'a_content' => $a_ID28[$i],
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
            ['R', 'C', 'I', 'H', 'A'],
            ['R', 'G', 'I', 'A', 'B'],
            ['C', 'H', 'A', 'H', 'T'],
            ['Y', 'G', 'F', 'B', 'D'],
            ['K', 'L', 'F', 'C', 'C'],
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
        ////    Grade 1  Assessment 2 ID 9 ( Fill in the blank )
        ////////////////////////////////////////////////////////


        $G1_A2_fill_in_the_blank = "Grade_1/" . "Assessments/" . "Assessment_2/" . "fill_in_the_blank/";
        $A2_ID9_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_2/fill_in_the_blank/";

        $g1_A2_ID9_fill_in_the_blank_q1 = [

            ['A', 'D', 'A', 'H', 'T'],
            ['A', 'I', 'G', 'H', 'L'],
            ['H', 'G', 'E', 'G'],
            ['I', 'E', 'K', 'T'],
            ['L', 'E', 'F', 'W'],
            ['B', 'I', 'F', 'D'],
            ['E', 'I', 'G', 'C'],
            ['F', 'I', 'H', 'C', 'D'],
            ['C', 'I', 'K', 'C', 'D'],
            ['O', 'C', 'L', 'Z', 'K'],

        ];

        $g1_A2_ID9_fill_in_the_blank_q2 = [
            '_ _ N _', '_ _ R _', '_ _ _', '_ _ T _', '_ _ OW _ R', '_ _ R _', '_ _ _', "_ _ S _", "_ O _ _", "_ O _ _"
        ];

        $correctAns_A2_ID9 =   [

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

        $g1_A2_ID9_fill_in_the_blank_a = [
            'HAND', 'GIRL', 'EGG', 'KITE', 'FLOWER', 'BIRD', 'ICE', "FISH", "COCK", "LOCK"
        ];




        for ($i = 0; $i < count($g1_A2_ID9_fill_in_the_blank_q1); $i++) {

            foreach ($g1_A2_ID9_fill_in_the_blank_q1[$i] as $k => $word) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'assess_id' => 9,
                        'q_audio' => $AudioDomain . $G1_A2_fill_in_the_blank . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_A2_ID9[$i]),
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 9,
                    'q_audio' => $AudioDomain . $G1_A2_fill_in_the_blank . strtolower($g1_A2_ID9_fill_in_the_blank_a[$i]) . ".mp3",
                    'q_image' => $A2_ID9_image .  strtolower($g1_A2_ID9_fill_in_the_blank_a[$i]) . ".png",
                    'q_content' => $g1_A2_ID9_fill_in_the_blank_q2[$i],
                    'a_content' => $g1_A2_ID9_fill_in_the_blank_a[$i]
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 3 ID 16 ( Fill in the blank )
        ////////////////////////////////////////////////////////


        $G1_A3_fill_in_the_blank = "Grade_1/" . "Assessments/" . "Assessment_3/" . "fill_in_the_blank/";
        $A3_ID16_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_3/fill_in_the_blank/";

        $g1_A3_ID16_fill_in_the_blank_q1 = [

            ['A', 'H', 'K', 'I', 'R'],
            ['H', 'D', 'L', 'E', 'A'],
            ['N', 'I', 'K', 'R', "E"],
            ['G', 'Y', 'L', 'E', "J"],
            ['B', 'I', 'L', 'E', "C"],
            ['N', 'I', 'K', 'R', "E"],
            ['E', 'I', 'G', 'K', "L"],
            ['N', 'G', 'E', 'A', 'M'],
            ['N', 'G', 'I', 'A', 'L'],
            ['N', 'N', 'H', 'A', 'E'],

        ];

        $g1_A3_ID16_fill_in_the_blank_q2 = [
            'H _ _ _', 'H _ _ _',  '_ _ E _', '_ _ _', 'R _ _ _', '_ _ C _', 'M _ _ _', "_ O _ K _ Y", "_ A _ _", "_ I _ _"
        ];

        $correctAns_A3_ID16 =   [

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

        $g1_A3_ID16_fill_in_the_blank_a = [
            'HAIR', 'HEAD',  'KNEE', 'LEG', 'RICE', 'NECK', 'MILK', "MONKEY", "NAIL", "NINE"
        ];




        for ($i = 0; $i < count($g1_A3_ID16_fill_in_the_blank_q1); $i++) {

            foreach ($g1_A3_ID16_fill_in_the_blank_q1[$i] as $k => $word) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'assess_id' => 16,
                        'q_audio' => $AudioDomain . $G1_A3_fill_in_the_blank . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_A3_ID16[$i]),
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 16,
                    'q_audio' => $AudioDomain . $G1_A3_fill_in_the_blank . strtolower($g1_A3_ID16_fill_in_the_blank_a[$i]) . ".mp3",
                    'q_image' => $A3_ID16_image .  strtolower($g1_A3_ID16_fill_in_the_blank_a[$i]) . ".png",
                    'q_content' => $g1_A3_ID16_fill_in_the_blank_q2[$i],
                    'a_content' => $g1_A3_ID16_fill_in_the_blank_a[$i]
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 4 ID 23 ( Fill in the blank )
        ////////////////////////////////////////////////////////


        $G1_A4_fill_in_the_blank = "Grade_1/" . "Assessments/" . "Assessment_4/" . "fill_in_the_blank/";
        $A4_ID23_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_4/fill_in_the_blank/";

        $g1_A4_ID23_fill_in_the_blank_q1 = [

            ['R', 'O', 'T', 'W', 'N'],
            ['N', 'P', 'T', 'U', 'N'],
            ['G', 'V', 'T', 'U', "A"],
            ['J', 'F', 'T', 'U', "A"],
            ['W', 'R', 'T', 'U', "A"],
            ['S', 'R', 'V', 'E', "A"],
            ['O', 'Z', 'W', 'X', "T"],
            ['E', 'R', 'W', 'E', "T"],
            ['O', 'R', 'D', 'E', 'A'],
            ['O', 'S', 'T', 'E', 'R'],

        ];

        $g1_A4_ID23_fill_in_the_blank_q2 = [
            '_ _ A _ GE', '_ E _ G _ IN',  '_ _ A _ A', '_ ACK _ R _ IT', '_ A _ E _', '_ _ _ E', '_ _ _', "_ _ E _", "_ O _ _", "_ _ A _"
        ];

        $correctAns_A4_ID23 =   [

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

        $g1_A4_ID23_fill_in_the_blank_a = [
            'ORANGE', 'PENGUIN',  'GUAVA', 'JACKFRUIT', 'WATER', 'VASE', 'TWO', "TREE", "ROAD", "STAR"
        ];




        for ($i = 0; $i < count($g1_A4_ID23_fill_in_the_blank_q1); $i++) {

            foreach ($g1_A4_ID23_fill_in_the_blank_q1[$i] as $k => $word) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'assess_id' => 23,
                        'q_audio' => $AudioDomain . $G1_A4_fill_in_the_blank . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_A4_ID23[$i]),
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 23,
                    'q_audio' => $AudioDomain . $G1_A4_fill_in_the_blank . strtolower($g1_A4_ID23_fill_in_the_blank_a[$i]) . ".mp3",
                    'q_image' => $A4_ID23_image .  strtolower($g1_A4_ID23_fill_in_the_blank_a[$i]) . ".png",
                    'q_content' => $g1_A4_ID23_fill_in_the_blank_q2[$i],
                    'a_content' => $g1_A4_ID23_fill_in_the_blank_a[$i]
                ],
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 5 ID 29 ( Fill in the blank )
        ////////////////////////////////////////////////////////


        $G1_A5_fill_in_the_blank = "Grade_1/" . "Assessments/" . "Assessment_5/" . "fill_in_the_blank/";
        $A5_ID29_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_5/fill_in_the_blank/";

        $g1_A5_ID29_fill_in_the_blank_q1 = [

            ['A', 'P', 'T', 'Y', 'G'],
            ['O', 'P', 'K', 'Y', 'G'],
            ['O', 'X', 'K', 'Y', 'N'],
            ['I', 'P', 'N', 'Z', "G"],
            ['I', 'O', 'K', 'Z', "O"],
            ['A', 'Z', 'E', 'R', "B"],
            ['N', 'U', 'E', 'L', "C"],
            ['H', 'G', 'R', 'L', "T"],
            ['C', 'U', 'R', 'S', "D"],
            ['U', 'R', 'T', 'N', 'G'],

        ];

        $g1_A5_ID29_fill_in_the_blank_q2 = [
            '_ _ CH _', '_ _ L _',  '_ _ LOPHO _ E', '_ _ _', '_ _ _', '_ _ _ RA', '_ N _ L _', "_ _ ANDFA _ HER", "_ O _ _ INS", "A _ _ _"
        ];

        $correctAns_A5_ID29 =   [

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

        $g1_A5_ID29_fill_in_the_blank_a = [
            'YACHT', 'YOLK',  'XYLOPHONE', 'ZIP', 'ZOO', 'ZEBRA', 'UNCLE', "GRANDFATHER", "COUSINS", "AUNT"
        ];




        for ($i = 0; $i < count($g1_A5_ID29_fill_in_the_blank_q1); $i++) {

            foreach ($g1_A5_ID29_fill_in_the_blank_q1[$i] as $k => $word) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1, 'assess_id' => 29,
                        'q_audio' => $AudioDomain . $G1_A5_fill_in_the_blank . strtoupper($word) . ".mp3", 'q_content' => $word,
                        'a_content' =>  implode(' ', $correctAns_A5_ID29[$i]),
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1, 'assess_id' => 29,
                    'q_audio' => $AudioDomain . $G1_A5_fill_in_the_blank . strtolower($g1_A5_ID29_fill_in_the_blank_a[$i]) . ".mp3",
                    'q_image' => $A5_ID29_image .  strtolower($g1_A5_ID29_fill_in_the_blank_a[$i]) . ".png",
                    'q_content' => $g1_A5_ID29_fill_in_the_blank_q2[$i],
                    'a_content' => $g1_A5_ID29_fill_in_the_blank_a[$i]
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
        ////    Grade 1  Assessment 2 ID 10 ( Multiple Choice )
        ////////////////////////////////////////////////////////


        $G1_A2_listening = "Grade_1/" . "Assessments/" . "Assessment_2/" . "listening/";
        $A2_ID10_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_2/listening/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 10,  'q_audio' =>  $AudioDomain . $G1_A2_listening . "This-is-my-house-It-is-big-T" . ".mp3", "q_content" => "hat", "a_content" => 0],
            ['round' => 1, 'assess_id' => 10,  'q_audio' =>  null, "q_content" => "house", "a_content" => 1],
            ['round' => 1, 'assess_id' => 10,  'q_audio' =>  null, "q_content" => "hand", "a_content" => 0],

            ['round' => 2, 'assess_id' => 10,  'q_audio' =>  $AudioDomain . $G1_A2_listening . "This-is-my-house-It-is-big-T" . ".mp3", "q_content" => "flower",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 10,  'q_audio' =>  null, "q_content" => "house", "a_content" => 1],
            ['round' => 2, 'assess_id' => 10,  'q_audio' =>  null, "q_content" => "grass", "a_content" => 0],

            ['round' => 3, 'assess_id' => 10,  'q_audio' =>  $AudioDomain . $G1_A2_listening . "This-is-my-house-It-is-big-T" . ".mp3", "q_content" => "gate", "a_content" => 0],
            ['round' => 3, 'assess_id' => 10,  'q_audio' =>  null, "q_content" => "goat", "a_content" => 0],
            ['round' => 3, 'assess_id' => 10,  'q_audio' =>  null, "q_content" => "grass", "a_content" => 1],

            ['round' => 4, 'assess_id' => 10,  'q_audio' =>  $AudioDomain . $G1_A2_listening . "This-is-my-house-It-is-big-T" . ".mp3", "q_content" => "pink", "a_content" => 0],
            ['round' => 4, 'assess_id' => 10,  'q_audio' =>  null, "q_content" => "yellow", "a_content" => 1],
            ['round' => 4, 'assess_id' => 10,  'q_audio' =>  null, "q_content" => "red", "a_content" => 0],

            ['round' => 5, 'assess_id' => 10,  'q_audio' =>  $AudioDomain . $G1_A2_listening . "This-is-my-house-It-is-big-T" . ".mp3", "q_content" => "gate", "a_content" => 1],
            ['round' => 5, 'assess_id' => 10,  'q_audio' =>  null, "q_content" => "goat", "a_content" => 0],
            ['round' => 5, 'assess_id' => 10,  'q_audio' =>  null, "q_content" => "grass", "a_content" => 0],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 4 ID 24 ( Multiple Choice )
        ////////////////////////////////////////////////////////


        $G1_A4_listening = "Grade_1/" . "Assessments/" . "Assessment_4/" . "listening/";
        $A4_ID24_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_4/listening/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 24,  'q_audio' =>  $AudioDomain . $G1_A4_listening . "Listening" . ".mp3", "q_content" => "melon", "a_content" => 0],
            ['round' => 1, 'assess_id' => 24,  'q_audio' =>  null, "q_content" => "mango", "a_content" => 1],
            ['round' => 1, 'assess_id' => 24,  'q_audio' =>  null, "q_content" => "mangosteen", "a_content" => 0],

            ['round' => 2, 'assess_id' => 24,  'q_audio' =>  $AudioDomain . $G1_A4_listening . "Listening" . ".mp3", "q_content" => "coconut",  "a_content" => 0],
            ['round' => 2, 'assess_id' => 24,  'q_audio' =>  null, "q_content" => "durian", "a_content" => 1],
            ['round' => 2, 'assess_id' => 24,  'q_audio' =>  null, "q_content" => "jackfruit", "a_content" => 0],

            ['round' => 3, 'assess_id' => 24,  'q_audio' =>  $AudioDomain . $G1_A4_listening . "Listening" . ".mp3", "q_content" => "4", "a_content" => 0],
            ['round' => 3, 'assess_id' => 24,  'q_audio' =>  null, "q_content" => "7", "a_content" => 0],
            ['round' => 3, 'assess_id' => 24,  'q_audio' =>  null, "q_content" => "10", "a_content" => 1],

            ['round' => 4, 'assess_id' => 24,  'q_audio' =>  $AudioDomain . $G1_A4_listening . "Listening" . ".mp3", "q_content" => "4 mangoes", "a_content" => 0],
            ['round' => 4, 'assess_id' => 24,  'q_audio' =>  null, "q_content" => "7 mangoes", "a_content" => 1],
            ['round' => 4, 'assess_id' => 24,  'q_audio' =>  null, "q_content" => "10 mangoes", "a_content" => 0],

            ['round' => 5, 'assess_id' => 24,  'q_audio' =>  $AudioDomain . $G1_A4_listening . "Listening" . ".mp3", "q_content" => "How many?", "a_content" => 0],
            ['round' => 5, 'assess_id' => 24,  'q_audio' =>  null, "q_content" => "I don't like mangoes.", "a_content" => 0],
            ['round' => 5, 'assess_id' => 24,  'q_audio' =>  null, "q_content" => "Here you are.", "a_content" => 1],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 2 ID 12 ( Grammar )
        ////////////////////////////////////////////////////////

        $G1_A2_grammar = "Grade_1/" . "Assessments/" . "Assessment_2/" . "grammar/";
        $A2_ID12_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_2/grammar/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 12, "q_image" => $A2_ID12_image . "horse.png", "q_conver" => "It's ____ horse.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 12, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

            ['round' => 2, 'assess_id' => 12, "q_image" => $A2_ID12_image . "goat.png", "q_conver" => "It's ____ goat.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 12, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

            ['round' => 3, 'assess_id' => 12, "q_image" => $A2_ID12_image . "egg.png", "q_conver" => "It's ____ egg.", 'q_content' => "an", 'a_content' => 1],
            ['round' => 3, 'assess_id' => 12, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 0],

            ['round' => 4, 'assess_id' => 12, "q_image" => $A2_ID12_image . "ant.png", "q_conver" => "It's ____ ant.", 'q_content' => "an", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 12, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 12, "q_image" => $A2_ID12_image . "jacket.png", "q_conver" => "It's ____ jacket.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 5, 'assess_id' => 12, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 4 ID 26 ( Grammar )
        ////////////////////////////////////////////////////////

        $G1_A4_grammar = "Grade_1/" . "Assessments/" . "Assessment_4/" . "grammar/";
        $A4_ID26_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_4/grammar/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 26, "q_image" => $G1_A4_grammar . "pineapple.png", "q_conver" => "It's ____ pineapple.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 1, 'assess_id' => 26, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

            ['round' => 2, 'assess_id' => 26, "q_image" => $G1_A4_grammar . "guava.png", "q_conver" => "It's ____ guava.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 2, 'assess_id' => 26, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

            ['round' => 3, 'assess_id' => 26, "q_image" => $G1_A4_grammar . "coconut.png", "q_conver" => "It's ____ coconut.", 'q_content' => "an", 'a_content' => 0],
            ['round' => 3, 'assess_id' => 26, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 1],

            ['round' => 4, 'assess_id' => 26, "q_image" => $G1_A4_grammar . "orange.png", "q_conver" => "It's ____ orange.", 'q_content' => "an", 'a_content' => 1],
            ['round' => 4, 'assess_id' => 26, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 0],

            ['round' => 5, 'assess_id' => 26, "q_image" => $G1_A4_grammar . "avocado.png", "q_conver" => "It's ____ avocado.", 'q_content' => "an", 'a_content' => 1],
            ['round' => 5, 'assess_id' => 26, "q_image" => null, "q_conver" => null, 'q_content' => "a", 'a_content' => 0],

        ]);





        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 3 ID 17 ( Listening (multlple choice) )
        ////////////////////////////////////////////////////////

        $G1_A3_listening_mc = "Grade_1/" . "Assessments/" . "Assessment_3/" . "listening_mc/";
        $A3_ID17_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_3/listening_mc/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 17, 'q_image' => $A3_ID17_image . "nose.png", "q_content" => "Nose", "a_content" => 1],
            ['round' => 1, 'assess_id' => 17, 'q_image' => null, "q_content" => "Mouth", "a_content" => 0],
            ['round' => 1, 'assess_id' => 17, 'q_image' => null, "q_content" => "Cheek", "a_content" => 0],

            ['round' => 2, 'assess_id' => 17, 'q_image' => $A3_ID17_image . "back.png", "q_content" => "Chest", "a_content" => 0],
            ['round' => 2, 'assess_id' => 17, 'q_image' => null, "q_content" => "Stomach", "a_content" => 0],
            ['round' => 2, 'assess_id' => 17, 'q_image' => null, "q_content" => "Waist", "a_content" => 1],

            ['round' => 3, 'assess_id' => 17, 'q_image' => $A3_ID17_image . "leg.png", "q_content" => "Hand", "a_content" => 0],
            ['round' => 3, 'assess_id' => 17, 'q_image' => null, "q_content" => "Body", "a_content" => 0],
            ['round' => 3, 'assess_id' => 17, 'q_image' => null, "q_content" => "Leg", "a_content" => 1],

            ['round' => 4, 'assess_id' => 17, 'q_image' => $A3_ID17_image . "shoulder.png", "q_content" => "Shoulder", "a_content" => 1],
            ['round' => 4, 'assess_id' => 17, 'q_image' => null, "q_content" => "Back", "a_content" => 0],
            ['round' => 4, 'assess_id' => 17, 'q_image' => null, "q_content" => "Neck", "a_content" => 0],

            ['round' => 5, 'assess_id' => 17, 'q_image' => $A3_ID17_image . "face.png", "q_content" => "Head", "a_content" => 1],
            ['round' => 5, 'assess_id' => 17, 'q_image' => null, "q_content" => "Knee", "a_content" => 0],
            ['round' => 5, 'assess_id' => 17, 'q_image' => null, "q_content" => "Toes", "a_content" => 0],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 1 ID 7 ( True or False )
        ////////////////////////////////////////////////////////

        $G1_A1_true_false = "Grade_1/" . "Assessments/" . "Assessment_1/" . "true_false/";
        $A1_ID7_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_1/true_false/";


        DB::table('assessment_ans_n_ques')->insert([
            ['round' => 1, 'assess_id' => 7, 'q_audio' => $AudioDomain . $G1_A1_true_false . "SubBlock_My-names-susan.mp3", 'q_content' => "true", "q_conver" => $A1_ID7_image .  "susan.png", 'a_content' => 0, "round_instruction" => $AudioDomain . $G1_A1_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A1_ID7_image . "star.png"],
            ['round' => 1, 'assess_id' => 7, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 1, "round_instruction" => null, 'q_image' => null],

            ['round' => 2, 'assess_id' => 7, 'q_audio' => $AudioDomain . $G1_A1_true_false . "SubBlock_Im-mary.mp3", 'q_content' => "true", "q_conver" => $A1_ID7_image . "mary.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A1_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A1_ID7_image . "star.png"],
            ['round' => 2, 'assess_id' => 7, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

            ['round' => 3, 'assess_id' => 7, 'q_audio' => $AudioDomain . $G1_A1_true_false . "SubBlock_Its-a-mat.mp3", 'q_content' => "true", "q_conver" => $A1_ID7_image . "mat.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A1_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A1_ID7_image . "star.png"],
            ['round' => 3, 'assess_id' => 7, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

            ['round' => 4, 'assess_id' => 7, 'q_audio' => $AudioDomain . $G1_A1_true_false . "SubBlock_its-one-bag.mp3", 'q_content' => "true", "q_conver" => $A1_ID7_image . "bag.png", 'a_content' => 0, "round_instruction" => $AudioDomain . $G1_A1_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A1_ID7_image . "star.png"],
            ['round' => 4, 'assess_id' => 7, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 1, "round_instruction" => null, 'q_image' => null],

            ['round' => 5, 'assess_id' => 7, 'q_audio' => $AudioDomain . $G1_A1_true_false . "SubBlock_Whats-this.mp3", 'q_content' => "true", "q_conver" => $A1_ID7_image . "what.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A1_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A1_ID7_image . "star.png"],
            ['round' => 5, 'assess_id' => 7, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 3 ID 19 ( True or False )
        ////////////////////////////////////////////////////////

        $G1_A3_true_false = "Grade_1/" . "Assessments/" . "Assessment_3/" . "true_false/";
        $A3_ID19_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_3/true_false/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 19, 'q_audio' => $AudioDomain . $G1_A3_true_false . "SubBlock_I-drink-cake.mp3", 'q_content' => "true", "q_conver" => $A3_ID19_image .  "cake.png", 'a_content' => 0, "round_instruction" => $AudioDomain . $G1_A3_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A3_ID19_image . "star.png"],
            ['round' => 1, 'assess_id' => 19, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 1, "round_instruction" => null, 'q_image' => null],

            ['round' => 2, 'assess_id' => 19, 'q_audio' => $AudioDomain . $G1_A3_true_false . "SubBlock_I-eat-bread.mp3", 'q_content' => "true", "q_conver" => $A3_ID19_image . "bread.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A3_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A3_ID19_image . "star.png"],
            ['round' => 2, 'assess_id' => 19, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

            ['round' => 3, 'assess_id' => 19, 'q_audio' => $AudioDomain . $G1_A3_true_false . "icecreamIdo.mp3", 'q_content' => "true", "q_conver" => $A3_ID19_image . "icecreamIdo.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A3_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A3_ID19_image . "star.png"],
            ['round' => 3, 'assess_id' => 19, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

            ['round' => 4, 'assess_id' => 19, 'q_audio' => $AudioDomain . $G1_A3_true_false . "apple-juice.mp3", 'q_content' => "true", "q_conver" => $A3_ID19_image . "apple-juice.png", 'a_content' => 0, "round_instruction" => $AudioDomain . $G1_A3_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A3_ID19_image . "star.png"],
            ['round' => 4, 'assess_id' => 19, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 1, "round_instruction" => null, 'q_image' => null],

            ['round' => 5, 'assess_id' => 19, 'q_audio' => $AudioDomain . $G1_A3_true_false . "coffee.mp3", 'q_content' => "true", "q_conver" => $A3_ID19_image . "coffee.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A3_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A3_ID19_image . "star.png"],
            ['round' => 5, 'assess_id' => 19, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 5 ID 32 ( True or False )
        ////////////////////////////////////////////////////////

        $G1_A5_true_false = "Grade_1/" . "Assessments/" . "Assessment_5/" . "true_false/";
        $A5_ID32_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_5/true_false/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 32, 'q_audio' => $AudioDomain . $G1_A5_true_false . "SubBlock_This-is-my-mother-His-name-is.mp3", 'q_content' => "true", "q_conver" => $A5_ID32_image .  "emma.png", 'a_content' => 0, "round_instruction" => $AudioDomain . $G1_A5_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A5_ID32_image . "girl.png"],
            ['round' => 1, 'assess_id' => 32, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 1, "round_instruction" => null, 'q_image' => null],

            ['round' => 2, 'assess_id' => 32, 'q_audio' => $AudioDomain . $G1_A5_true_false . "SubBlock_I-have-a-aunt.mp3", 'q_content' => "true", "q_conver" => $A5_ID32_image . "aunt.png", 'a_content' => 0, "round_instruction" => $AudioDomain . $G1_A5_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A5_ID32_image . "girl.png"],
            ['round' => 2, 'assess_id' => 32, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 1, "round_instruction" => null, 'q_image' => null],

            ['round' => 3, 'assess_id' => 32, 'q_audio' => $AudioDomain . $G1_A5_true_false . "SubBlock_This-is-my-aunt-Her-name-is-M.mp3", 'q_content' => "true", "q_conver" => $A5_ID32_image . "mary.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A5_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A5_ID32_image . "girl.png"],
            ['round' => 3, 'assess_id' => 32, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

            ['round' => 4, 'assess_id' => 32, 'q_audio' => $AudioDomain . $G1_A5_true_false . "SubBlock_I-have-an-uncle.mp3", 'q_content' => "true", "q_conver" => $A5_ID32_image . "uncle.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A5_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A5_ID32_image . "girl.png"],
            ['round' => 4, 'assess_id' => 32, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

            ['round' => 5, 'assess_id' => 32, 'q_audio' => $AudioDomain . $G1_A5_true_false . "SubBlock_5-m-7-years-old.mp3", 'q_content' => "true", "q_conver" => $A5_ID32_image . "7-yrs.png", 'a_content' => 1, "round_instruction" => $AudioDomain . $G1_A5_true_false . "SubBlock_Are-the-sentences-true-or-fals.mp3", 'q_image' => $A5_ID32_image . "girl.png"],
            ['round' => 5, 'assess_id' => 32, 'q_audio' => null, 'q_content' => "false", "q_conver" => null, 'a_content' => 0, "round_instruction" => null, 'q_image' => null],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 5 ID 30 ( Multiple Choice )
        ////////////////////////////////////////////////////////

        $G1_A5_multiply_choice = "Grade_1/" . "Assessments/" . "Assessment_5/" . "multiply_choice/";
        $A5_ID30_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_5/multiply_choice/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 30, 'q_audio' => $AudioDomain . $G1_A5_multiply_choice . "SubBlock_This-is-my-father.mp3", 'q_image' => $A5_ID30_image .  "father.png", "q_conver" => $A5_ID30_image .  "father-text.png", 'a_content' => 1, 'q_content' => $A5_ID30_image . "girl.png"],
            ['round' => 1, 'assess_id' => 30, 'q_audio' => null, 'q_image' => $A5_ID30_image . "mother.png", "q_conver" => null, 'a_content' => 0, 'q_content' => null],

            ['round' => 2, 'assess_id' => 30, 'q_audio' => $AudioDomain . $G1_A5_multiply_choice . "SubBlock_She-is-my-mother.mp3", 'q_image' => $A5_ID30_image .  "father.png", "q_conver" => $A5_ID30_image . "mother-text.png", 'a_content' => 0, 'q_content' => $A5_ID30_image . "girl.png"],
            ['round' => 2, 'assess_id' => 30, 'q_audio' => null, 'q_image' => $A5_ID30_image . "mother.png", "q_conver" => null, 'a_content' => 1, 'q_content' => null],

            ['round' => 3, 'assess_id' => 30, 'q_audio' => $AudioDomain . $G1_A5_multiply_choice . "SubBlock_He-is-my-brother.mp3", 'q_image' => $A5_ID30_image .  "brother.png", "q_conver" => $A5_ID30_image . "brother-text.png", 'a_content' => 1, 'q_content' => $A5_ID30_image . "girl.png"],
            ['round' => 3, 'assess_id' => 30, 'q_audio' => null, 'q_image' => $A5_ID30_image . "old.png", "q_conver" => null, 'a_content' => 0, 'q_content' => null],

            ['round' => 4, 'assess_id' => 30, 'q_audio' => $AudioDomain . $G1_A5_multiply_choice . "SubBlock_She-is-my-older-sister.mp3", 'q_image' => $A5_ID30_image .  "brother.png", "q_conver" => $A5_ID30_image . "older-sister-text.png", 'a_content' => 0, 'q_content' => $A5_ID30_image . "girl.png"],
            ['round' => 4, 'assess_id' => 30, 'q_audio' => null, 'q_image' => $A5_ID30_image . "sister.png", "q_conver" => null, 'a_content' => 1, 'q_content' => null],

            ['round' => 5, 'assess_id' => 30, 'q_audio' => $AudioDomain . $G1_A5_multiply_choice . "SubBlock_This-is-my-grandmother.mp3", 'q_image' => $A5_ID30_image .  "grandpa.png", "q_conver" => $A5_ID30_image . "grandma-text.png", 'a_content' => 0, 'q_content' => $A5_ID30_image . "girl.png"],
            ['round' => 5, 'assess_id' => 30, 'q_audio' => null, 'q_image' => $A5_ID30_image . "grandma.png", "q_conver" => null, 'a_content' => 1, 'q_content' => null],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 1 ID 4 ( Drag and Drop )
        ////////////////////////////////////////////////////////

        $G1_A1_drag_n_drop = "Grade_1/" . "Assessments/" . "Assessment_1/" . "drag_n_drop/";
        $A1_ID4_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_1/drag_n_drop/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 4, "q_image" => $A1_ID4_image . "classroom.png", "q_audio" => $AudioDomain . $G1_A1_drag_n_drop . "classroom.mp3"],
            ['round' => 1, 'assess_id' => 4, "q_image" => $A1_ID4_image . "bedroom.png", "q_audio" => $AudioDomain . $G1_A1_drag_n_drop . "bedroom.mp3"],
        ]);

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 4, "q_conver" =>  "doll", "q_content" => "classroom bedroom", "a_content" => "bedroom"],
            ['round' => 1, 'assess_id' => 4, "q_conver" =>  "desk", "q_content" => "classroom bedroom", "a_content" => "classroom"],
            ['round' => 1, 'assess_id' => 4, "q_conver" =>  "dress", "q_content" => "classroom bedroom", "a_content" => "bedroom"],
            ['round' => 1, 'assess_id' => 4, "q_conver" =>  "chair", "q_content" => "classroom bedroom", "a_content" => "classroom"],
            ['round' => 1, 'assess_id' => 4, "q_conver" =>  "clock", "q_content" => "classroom bedroom", "a_content" => "bedroom"],
            ['round' => 1, 'assess_id' => 4, "q_conver" =>  "fan", "q_content" => "classroom bedroom", "a_content" => "bedroom"],
            ['round' => 1, 'assess_id' => 4, "q_conver" =>  "pencil case", "q_content" => "classroom bedroom", "a_content" => "classroom"],
            ['round' => 1, 'assess_id' => 4, "q_conver" =>  "sharpener", "q_content" => "classroom bedroom", "a_content" => "classroom"],
            ['round' => 1, 'assess_id' => 4, "q_conver" =>  "pen", "q_content" => "classroom bedroom", "a_content" => "classroom"],
            ['round' => 1, 'assess_id' => 4, "q_conver" =>  "bed", "q_content" => "classroom bedroom", "a_content" => "bedroom"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 3 ID 18 ( Drag and Drop )
        ////////////////////////////////////////////////////////

        $G1_A3_drag_n_drop = "Grade_1/" . "Assessments/" . "Assessment_3/" . "drag_n_drop/";
        $A3_ID18_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_3/drag_n_drop/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 18, "q_image" => $A3_ID18_image . "pic.png", "q_audio" => $AudioDomain . $G1_A3_drag_n_drop . "SubBlock_My-names-Anna-I-like-juice.mp3"],
        ]);

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "mushroom", "q_content" => "I eat ...., I drink ....", "a_content" => "I eat ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "meat", "q_content" => "I eat ...., I drink ....", "a_content" => "I eat ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "mango juice", "q_content" => "I eat ...., I drink ....", "a_content" => "I drink ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "coffee", "q_content" => "I eat ...., I drink ....", "a_content" => "I drink ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "chicken", "q_content" => "I eat ...., I drink ....", "a_content" => "I eat ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "milk", "q_content" => "I eat ...., I drink ....", "a_content" => "I drink ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "milkshake", "q_content" => "I eat ...., I drink ....", "a_content" => "I drink ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "fish", "q_content" => "I eat ...., I drink ....", "a_content" => "I eat ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "fruits", "q_content" => "I eat ...., I drink ....", "a_content" => "I eat ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "vegetables", "q_content" => "I eat ...., I drink ....", "a_content" => "I eat ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "orange juice", "q_content" => "I eat ...., I drink ....", "a_content" => "I drink ...."],
            ['round' => 1, 'assess_id' => 18, "q_conver" =>  "apple juice", "q_content" => "I eat ...., I drink ....", "a_content" => "I drink ...."],

        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 5 ID 31 ( Drag and Drop )
        ////////////////////////////////////////////////////////

        $G1_A5_drag_n_drop = "Grade_1/" . "Assessments/" . "Assessment_5/" . "drag_n_drop/";
        $A5_ID31_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_5/drag_n_drop/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 31, "q_image" => $A5_ID31_image . "pic.png", "q_audio" => $AudioDomain . $G1_A5_drag_n_drop . "SubBlock_Good-morning-students-Open-t.mp3"],
        ]);

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 31, "q_conver" =>  "the window", "q_content" => "Open, Close, Make, ... your hands", "a_content" => "Open"],
            ['round' => 1, 'assess_id' => 31, "q_conver" =>  "the door", "q_content" => "Open, Close, Make, ... your hands", "a_content" => "Close"],
            ['round' => 1, 'assess_id' => 31, "q_conver" =>  "your textbook", "q_content" => "Open, Close, Make, ... your hands", "a_content" => "Open"],
            ['round' => 1, 'assess_id' => 31, "q_conver" =>  "a group", "q_content" => "Open, Close, Make, ... your hands", "a_content" => "Make"],
            ['round' => 1, 'assess_id' => 31, "q_conver" =>  "pairs", "q_content" => "Open, Close, Make, ... your hands", "a_content" => "Make"],
            ['round' => 1, 'assess_id' => 31, "q_conver" =>  "raise", "q_content" => "Open, Close, Make, ... your hands", "a_content" => "... your hands"],
            ['round' => 1, 'assess_id' => 31, "q_conver" =>  "a circle", "q_content" => "Open, Close, Make, ... your hands", "a_content" => "Make"],
            ['round' => 1, 'assess_id' => 31, "q_conver" =>  "clap", "q_content" => "Open, Close, Make, ... your hands", "a_content" => "... your hands"],
            ['round' => 1, 'assess_id' => 31, "q_conver" =>  "your bag", "q_content" => "Open, Close, Make, ... your hands", "a_content" => "Close"],
            ['round' => 1, 'assess_id' => 31, "q_conver" =>  "a line", "q_content" => "Open, Close, Make, ... your hands", "a_content" => "Make"],

        ]);




        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 4 ID 25 ( Drag and Drop )
        ////////////////////////////////////////////////////////

        $G1_A4_drag_n_drop = "Grade_1/" . "Assessments/" . "Assessment_4/" . "drag_n_drop/";
        $A4_ID25_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_4/drag_n_drop/";

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "olives"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "snail"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "sun"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "quail"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "ostrich"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "queen"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "sea"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "owl"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "quince"],

            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "uncle"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "watch"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "white"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "unicorn"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "wall"],
            ['round' => 1, 'assess_id' => 25, "q_content" => "O Q S U W", "a_content" => "uniform"],
        ]);


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 2 ID 11 ( Drag and Drop )
        ////////////////////////////////////////////////////////

        $G1_A2_drag_n_drop = "Grade_1/" . "Assessments/" . "Assessment_2/" . "drag_n_drop/";
        $A2_ID11_image = $domain . "/storage/images/Grade_1/Assessments/Assessment_2/drag_n_drop/";


        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 11, "q_image" => $A2_ID11_image . "pencil.png", "q_audio" => $AudioDomain . $G1_A2_drag_n_drop . "SubBlock_This-is-a-pencil-Its-hard-I.mp3"],
            ['round' => 1, 'assess_id' => 11, "q_image" => $A2_ID11_image . "jacket.png", "q_audio" => $AudioDomain . $G1_A2_drag_n_drop . "SubBlock_This-is-a-new-jacket-Its-whi.mp3"],
            ['round' => 1, 'assess_id' => 11, "q_image" => $A2_ID11_image . "turtle.png", "q_audio" => $AudioDomain . $G1_A2_drag_n_drop . "SubBlock_Its-a-turtle-Its-green-It.mp3"],
        ]);

        DB::table('assessment_ans_n_ques')->insert([

            ['round' => 1, 'assess_id' => 11, "q_conver" =>  "white", "q_content" => "Pencil Jacket Turtle", "a_content" => "Jacket"],
            ['round' => 1, 'assess_id' => 11, "q_conver" =>  "green", "q_content" => "Pencil Jacket Turtle", "a_content" => "Turtle"],
            ['round' => 1, 'assess_id' => 11, "q_conver" =>  "brown", "q_content" => "Pencil Jacket Turtle", "a_content" => "Pencil"],
            ['round' => 1, 'assess_id' => 11, "q_conver" =>  "old", "q_content" => "Pencil Jacket Turtle", "a_content" => "Turtle"],
            ['round' => 1, 'assess_id' => 11, "q_conver" =>  "new", "q_content" => "Pencil Jacket Turtle", "a_content" => "Jacket"],
            ['round' => 1, 'assess_id' => 11, "q_conver" =>  "hard", "q_content" => "Pencil Jacket Turtle", "a_content" => "Pencil"],
            ['round' => 1, 'assess_id' => 11, "q_conver" =>  "soft", "q_content" => "Pencil Jacket Turtle", "a_content" => "Jacket"],
            ['round' => 1, 'assess_id' => 11, "q_conver" =>  "long", "q_content" => "Pencil Jacket Turtle", "a_content" => "Pencil"],
            ['round' => 1, 'assess_id' => 11, "q_conver" =>  "slow", "q_content" => "Pencil Jacket Turtle", "a_content" => "Turtle"],
            ['round' => 1, 'assess_id' => 11, "q_conver" =>  "clean", "q_content" => "Pencil Jacket Turtle", "a_content" => "Jacket"],

        ]);



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 1 ID 5 ( Reading Passages )
        ////////////////////////////////////////////////////////



        $images = $ImageDomain . "Grade_1/Assessments/Assessment_1/Reading_passage_1/";
        $audios = $AudioDomain . "Grade_1/Assessments/Assessment_1/Reading_passage_1/";

        $para = "Hi, my name is Dan. I'm 5 years old. In the afternoon, I say 'Good Afternoon. Hello and how are you?' They say 'I'm fine.And you?' I say 'I'm great.' It's going to be wonderful day.";

        $given_q = [
            ["What is my name ?", "Dan"],
            ["In the afternoon, I say ___.", "Good Afternoon"],
            ["I say '___'. \n They say 'I'm fine'.", "How are you?"],
            ["They say 'and you' \n I say '___'.", "I'm great"],
            ["I'm ___ years old.' \n I say '___'.", "5"],

        ];

        $given_audio = [
            "what-name.mp3",
            "In-afternoon.mp3",
            "I-say.mp3",
            "they-say.mp3",
            "5-yrs-old.mp3",
        ];

        $paraName = "Dan.mp3";

        $given_answer = [
            ['Dat', 'Dam', 'Dan'],
            ['Good morning', "Good Afternoon", "Good evening"],
            ["What's your name?", 'How are you?', 'Who are you?'],
            ['Good bye', "And you", "I'm great"],
            ['5', '6', '7'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 5,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 5,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 5,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Dan",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 1 ID 6 ( Reading Passages )
        ////////////////////////////////////////////////////////



        $images = $ImageDomain . "Grade_1/Assessments/Assessment_1/Reading_passage_2/";
        $audios = $AudioDomain . "Grade_1/Assessments/Assessment_1/Reading_passage_2/";

        $para = "Hi,I'm Dan. This is my room. I love coloring. My color pencils, crayons, a sharpener and  eraser are on the table. I love playing with toys. A ball in under my chair.";

        $given_q = [
            ["Select the things Dan has in his room.", "Color Pencils"],
            ["Select the things Dan has in his room.", "ball"],
            ["Select the things Dan has in his room.", "table"],
            ["Select the things Dan has in his room.", "eraser"],
            ["Select the things Dan has in his room.", "crayon"],
            ["Select the things Dan has in his room.", "Color pencils"],

        ];

        $given_audio = [
            "Select-thing-dan-room.mp3",
            "Select-thing-dan-room.mp3",
            "Select-thing-dan-room.mp3",
            "Select-thing-dan-room.mp3",
            "Select-thing-dan-room.mp3",
            "Select-thing-dan-room.mp3",
        ];

        $paraName = "Dan's-room.mp3";

        $given_answer = [
            ['Pen', "Color Pencils", "Ruler"],
            ['ball', "dolls", "dog"],
            ['table', 'mat', 'fan'],
            ['duster', "eraser", "clock"],
            ['crayon', 'duster', 'pen'],
            ['Pen', 'Color pencils', 'Ruler'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 6,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 6,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 6,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Dan's room",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }



        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 2 ID 13 ( Reading Passages )
        ////////////////////////////////////////////////////////



        $images = $ImageDomain . "Grade_1/Assessments/Assessment_2/True_or_False_1/";
        $audios = $AudioDomain . "Grade_1/Assessments/Assessment_2/True_or_False_1/";

        $para = "Anna has big farm. She has a cow, a pig and a sheep. \n The cow is black and withe. \n
        Cow: Moooo     Anna:Quite Please. \n
        The pig is pink. \n
        Pig: Oink Oink,  Anna: Quite Please. \n
        The sheep is white. \n
        Sheep: Baaaaaa      Anna: Be quite.
        ";

        $given_q = [
            ["The sheep is noisy. Anna say 'Be quite.'", "True"],
            ["I pig is black.", "False"],
            ["The cow says Baaaa.", "False"],
            ["She has a white sheep.", "True"],
            ["Anna has a small farm.", "False"],
        ];

        $given_audio = [
            "noisy-sheep.mp3",
            "black-pig.mp3",
            "cow-say.mp3",
            "white-sheep.mp3",
            "small-farm.mp3",
        ];

        $paraName = "Anna-farm.mp3";

        $given_answer = [
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 13,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 13,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 13,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Anna's Farm",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }


        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 2 ID 14 ( Reading Passages )
        ////////////////////////////////////////////////////////



        $images = $ImageDomain . "Grade_1/Assessments/Assessment_2/True_or_False_2/";
        $audios = $AudioDomain . "Grade_1/Assessments/Assessment_2/True_or_False_2/";

        $para = "I went to the farm. Flowers, grass and small house are in the farm. \n
        I see a dog and pig. They are playing. The dog is dirty. The pig is dirty too.";

        $given_q = [
            ["The pig is dirty.", "True"],
            ["I sea a dog and cat.", "False"],
            ["The dog is clean.", "False"],
            ["A small house is in the farm.", "True"],
            ["This is a house. It's big.", "False"],
        ];

        $given_audio = [
            "dirty-pig.mp3",
            "dog-cat.mp3",
            "clean-dog.mp3",
            "small-house.mp3",
            "big-house.mp3",
        ];

        $paraName = "Anna-farm.mp3";

        $given_answer = [
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 14,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 14,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 14,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Anna's Farm",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }






        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 3 ID 20 ( Reading Passages )
        ////////////////////////////////////////////////////////



        $images = $ImageDomain . "Grade_1/Assessments/Assessment_3/Reading_passage_1/";
        $audios = $AudioDomain . "Grade_1/Assessments/Assessment_3/Reading_passage_1/";

        $para = "This is yellow mango. She has a big face. She has green hair. She has two brown eyes. \n
         Her lips are red. She has no ears.";

        $given_q = [
            ["Her ___ are red.", "lips"],
            ["She has a big ___.", "face"],
            ["She has brown ___.", "eyes"],
            ["She has ___ hair.", "green"],
            ["This is yellow ___ .", "mango"],

        ];

        $given_audio = [
            "red-lips.mp3",
            "big-face.mp3",
            "brown-eyes.mp3",
            "green-hair.mp3",
            "yellow-mango.mp3",
        ];

        $paraName = "mango-girl.mp3";

        $given_answer = [
            ['hair', "arm", "lips"],
            ['fingers', "face", "feet"],
            ['legs', "ears", "eyes"],
            ['yellow', "red", "green"],
            ['apple', "mango", "orange"],

        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 20,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 20,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 20,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "Mango girl",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }




        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 3 ID 21 ( Reading Passages )
        ////////////////////////////////////////////////////////



        $images = $ImageDomain . "Grade_1/Assessments/Assessment_3/Reading_passage_2/";
        $audios = $AudioDomain . "Grade_1/Assessments/Assessment_3/Reading_passage_2/";

        $para = "The boy: I like chicken. I eat chicken and egg. \n I drink water. I don't like fruits. I don't like juice. \n
         The girl: I like meat. I eat meat. I don't like  vegetables. \n I don't like milk. I drink water. I like fruits.
         ";

        $given_q = [
            ["The girl say 'I like ___'.", "fruits"],
            ["The boy say 'I don't like ___'.", "fruits"],
            ["The girl eat ___.", "meat"],
            ["The boy eat ___.", "chicken"],
            ["The boy and the girl drink ___.", "water"],

        ];

        $given_audio = [
            "girl-like.mp3",
            "boy-do-not-like.mp3",
            "girl-eat.mp3",
            "boy-eat.mp3",
            "both-drink.mp3",
        ];

        $paraName = "We-talk-about-food.mp3";

        $given_answer = [
            ['fruits', "vegetables", "milk"],
            ['fruits', "vegetables", "milk"],
            ['meat', "fish", "chicken"],
            ['meat', "fish", "chicken"],
            ['juice', "milk", "water"],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 21,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 21,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 21,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "We talk about food.",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }





        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 4 ID 27 ( Reading Passages )
        ////////////////////////////////////////////////////////



        $images = $ImageDomain . "Grade_1/Assessments/Assessment_4/Reading_passage/";
        $audios = $AudioDomain . "Grade_1/Assessments/Assessment_4/Reading_passage/";

        $para = "I like fruits. I have strawberries, lychees and grapes. \n I like grapes but I don't like green grapes. \n There are two apples, an orange, a pineapple and a coconut. \n I also eat bananas but I don't like banana juice.";

        $given_q = [
            ["I don't like banana juice.", "True"],
            ["I have strawberries and lychees.", "True"],
            ["There are 5 apples.", "False"],
            ["There are 3 coconuts.", "False"],
            ["I like green grapes.", "False"],
        ];

        $given_audio = [
            "do-not-like-banana-juice.mp3",
            "strawberries-lychees.mp3",
            "5-apples.mp3",
            "3-coconuts.mp3",
            "like-green-grapes.mp3",
        ];

        $paraName = "I-like-fruits.mp3";

        $given_answer = [
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
            ['True', 'False'],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 27,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 27,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 27,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "I like fruits",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }







        ////////////////////////////////////////////////////////
        ////    Grade 1  Assessment 5 ID 33 ( Reading Passages )
        ////////////////////////////////////////////////////////



        $images = $ImageDomain . "Grade_1/Assessments/Assessment_5/Reading_passage/";
        $audios = $AudioDomain . "Grade_1/Assessments/Assessment_5/Reading_passage/";

        $para = "The teacher asks us to sing the ABC songs.\n We raise hands and answer. We sing and dance. \n  Our friends stand up and clap hands. The teacher asks us to draw a picture. \n Our friends raise hands and answer. They draw a ball. \n They draw a car. They draw a airplane. I stand up and clap hands.";

        $given_q = [
            ["They drew an ___'.", "airplane"],
            ["We ___'.", "sing and dance"],
            ["Our friends ___.", "clap hands"],
            ["We ___ and answer.", "raise hands"],
            ["Our teacher asks us to", "sing the ABC songs"],

        ];

        $given_audio = [
            "they-drew-airplane.mp3",
            "we-sing-dance.mp3",
            "our-friends.mp3",
            "we-raise-answer.mp3",
            "teacher-asks.mp3",
        ];

        $paraName = "We-are-in-classroom.mp3";

        $given_answer = [
            ['house', "car", "airplane"],
            ['sit down and stand up', "sing and dance", "open and close the door"],
            ['raise hands', "clap hands", "touch hands"],
            ['raise hands', "clap hands", "touch hands"],
            ['Walk to the door', "sing the ABC songs", "bring a pencil"],
        ];


        for ($i = 0; $i < count($given_answer); $i++) {


            foreach ($given_answer[$i] as $k => $value) {

                DB::table('assessment_ans_n_ques')->insert([
                    [
                        'round' => $i + 1,
                        'assess_id' => 33,
                        // 'q_audio' => $audios . $this->removeSpace(strtolower($value)) . ".mp3",
                        'q_content' => $value,
                        'a_content' => $value == $given_q[$i][1] ? 1 : 0
                    ]
                ]);
            }

            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 33,
                    'q_audio' => $audios . $given_audio[$i],
                    'q_conver' => $given_q[$i][0],    //giver Q
                ]
            ]);
            DB::table('assessment_ans_n_ques')->insert([
                [
                    'round' => $i + 1,
                    'assess_id' => 33,
                    'q_audio' => $audios . $paraName,
                    'q_content' => "We are in the classroom",
                    'q_conver' => $para,
                    'background' => $images . "bg.png"
                ]
            ]);
        }
    }
}
