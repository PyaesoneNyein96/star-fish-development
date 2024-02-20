<?php

namespace Database\Seeders\Assessment;

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

        $game = [
            ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Listening (Drag and Drop)", "Reading Passages", "True or False"],
            ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "True or False"],
            ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Drag and Drop", "True or False", "Reading Passages"],
            ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "Reading Passages"],
            ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "True or False", "Reading Passages"],
        ];

        $category = [
            [1, 2, 3, 4, 5, 6],
            [1, 2, 3, 11, 7, 5],
            [1, 2, 8, 9, 6, 5],
            [1, 2, 3, 10, 7, 5],
            [1, 2, 12, 9, 6, 5],
        ];

        for ($i = 1; $i <= 12; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                foreach ($game[$j - 1] as $key => $val) {
                    DB::table('assessments')->insert([
                        ['grade_id' => $i, "name" => $j, "assess_game_name" => $val, "assess_category_id" => $category[$j - 1][$key]]
                    ]);
                }
            }
        }
    }
}
