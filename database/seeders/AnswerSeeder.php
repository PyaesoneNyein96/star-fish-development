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

        //  g1 l1 g4
        $answers1 = ['W','M M','H','I','I','M Y','I J','A','I S ','M T'];

        for ($i=1; $i <= count($answers1) ; $i++) {
            DB::table('answer_contents')->insert([
                ['round_id' => $i ,'answer' => null , 'correct_answer' => $answers1[$i -1]],
            ]);
        }

        //  g1 l1 g5
        // $answers2 = range("A","Z");
        $answers2 = [11,12,13];

        foreach ($answers2 as $ans) {
            DB::table('answer_contents')->insert([
                ['round_id' => $ans, 'answer' => null,
                'correct_answer' => "ABCDEFGHIJKLMNOPQRSTUVWXYZ"],
            ]);
        }



    }
}
