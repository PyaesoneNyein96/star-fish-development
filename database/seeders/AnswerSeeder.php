<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $AtoZ = range('A','Z');

        // //  g-1 l-1 g-4 ========================== cloud
        $answers1 = ['W','M M','H','I','I','M Y','I J','A','I S','M T'];

        for ($i=1; $i <= count($answers1) ; $i++) {
            DB::table('answer_contents')->insert([
                ['round_id' => $i ,'answer' => null , 'correct_answer' => $answers1[$i -1]],
            ]);
        }

        // //  g-1 l-1 g-5 ========================== drag n drop
        $g1_l1_g5_rs = [
             ['B','U','Z','O','E','R'],
             ['P','Y','K','C','H','N'],
             ['Q','T','L','G','D','W'],
             ['X','U','I','P','T','G'],
             ['H','J','M','P','W','Q'],
        ];

        for ($i= 0 ; $i < count($g1_l1_g5_rs) ; $i++) {

            for ($j = 0 ; $j < count($AtoZ) ; $j ++) {
                DB::table('answer_contents')->insert([
                    [
                        'round_id' => (int)$i + 11,
                        'answer' => $AtoZ[$j],
                        'correct_answer' => in_array($AtoZ[$j], $g1_l1_g5_rs[$i]) ? 1 : 0,
                    ],
                ]);
            }
        }

           // //  g-1 l-2 g-11 ========================== drag n drop
        $g1_l2_g11 = [
             ['z','y','l','j','s','i'],
             ['v','s','t','y','o','f'],
             ['u','b','g','h','r','c'],
             ['o','p','m','q','a','g'],
             ['k','w','c','x','p','v']
        ];

        for ($i= 0 ; $i < count($g1_l2_g11) ; $i++) {

            for ($j= 0 ; $j < count($AtoZ) ; $j ++) {
                DB::table('answer_contents')->insert([
                    [
                        'round_id' => (int)$i + 27,
                        'answer' => $AtoZ[$j],
                        'correct_answer' => in_array($AtoZ[$j], $g1_l2_g11[$i]) ? 1 : 0,
                    ],
                ]);
            }
        }


         // //  g-1 l-12 g-18 ========================== tracing

        $g1_l12_g18_sub_1 =['G','H','e','f','g','h','F','E'];

        for ($i= 0; $i < count($g1_l12_g18_sub_1) ; $i++) {
            DB::table('answer_contents')->insert([
                ['round_id' => (int)$i + 33 ,'answer' => $g1_l12_g18_sub_1[$i]." "."Image" , 'correct_answer' => $g1_l12_g18_sub_1[$i]." "."dotted"],
            ]);
        }

        // $g1_l12_g18_sub_2 =['EYE','GOAT','HAT','GRASS','FLOWER','GESG','EAR','FAN'];

        // for ($i= 0; $i < count($g1_l12_g18_sub_2) ; $i++) {
        //     DB::table('answer_contents')->insert([
        //         ['round_id' => (int)$i + 26 ,'answer' => $g1_l12_g18_sub_1[$i]." "."Image" , 'correct_answer' => $g1_l12_g18_sub_1[$i]." "."dotted"],
        //     ]);
        // }





    }
}
