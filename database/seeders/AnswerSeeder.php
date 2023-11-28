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

        // //  g-1 l-1 g-4 ==========================
        $answers1 = ['W','M M','H','I','I','M Y','I J','A','I S','M T'];

        for ($i=1; $i <= count($answers1) ; $i++) {
            DB::table('answer_contents')->insert([
                ['round_id' => $i ,'answer' => null , 'correct_answer' => $answers1[$i -1]],
            ]);
        }

        // //  g-1 l-1 g-5 ==========================
        $AtoZ = range('A','Z');
        $g1_l_1_g5_rs = [
             ['B','U','Z','O','E','R'],
             ['P','Y','K','C','H','N'],
             ['Q','T','L','G','D','W']
        ];

        for ($i= 0 ; $i < count($g1_l_1_g5_rs) ; $i++) {

            for ($j= 0 ; $j < count($AtoZ) ; $j ++) {
                DB::table('answer_contents')->insert([
                    [
                        'round_id' => (int)$i + 11,
                        'answer' => $AtoZ[$j],
                        'correct_answer' => in_array($AtoZ[$j], $g1_l_1_g5_rs[$i]) ? 1 : 0,
                    ],
                ]);
            }
        }








    }
}