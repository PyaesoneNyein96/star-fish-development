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

        $answers1 = ['W','M','H','I','I','M','I','A','M','I'];

        for ($i=1; $i <= count($answers1) ; $i++) {
            DB::table('answer_contents')->insert([
                ['round_id' => $i ,'answer' => null , 'correct_answer' => $answers1[$i -1]],
            ]);
        }
        //  g1 l1 g4

        $answers2 = range("A","Z");

        // for ($i=1; $i <= count($answers2); $i++) {
        //     DB::table('answer_contents')->insert([
        //         ''
        //     ]);
        // }


    }
}
