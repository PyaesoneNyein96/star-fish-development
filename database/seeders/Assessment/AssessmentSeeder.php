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
            // Grade 1
            ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Listening (Drag and Drop)", "Reading Passages (1)", "Reading Passages (2)", "True or False"],
            ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "True or False (1)", "True or False (2)"],
            ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Drag and Drop", "True or False", "Reading Passages (1)", "Reading Passages (2)"],
            ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "Reading Passages"],
            ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "True or False", "Reading Passages"],

            // // Grade 2
            // ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Listening (Drag and Drop)", "Reading Passages", "True or False"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "True or False"],
            // ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Drag and Drop", "True or False", "Reading Passages"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "Reading Passages"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "True or False", "Reading Passages"],

            // // Grade 3
            // ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Listening (Drag and Drop)", "Reading Passages", "True or False"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "True or False"],
            // ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Drag and Drop", "True or False", "Reading Passages"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "Reading Passages"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "True or False", "Reading Passages"],

            // // Grade 4
            // ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Listening (Drag and Drop)", "Reading Passages", "True or False"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "True or False"],
            // ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Drag and Drop", "True or False", "Reading Passages"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "Reading Passages"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "True or False", "Reading Passages"],
        ];

        $category = [
            // Grade 1
            [1, 2, 3, 4, 5, 5, 6],
            [1, 2, 3, 11, 7, 5, 5],
            [1, 2, 8, 9, 6, 5, 5],
            [1, 2, 3, 10, 7, 5],
            [1, 2, 12, 9, 6, 5],

            // // Grade 2
            // [1, 2, 3, 4, 5, 6],
            // [1, 2, 3, 11, 7, 5],
            // [1, 2, 8, 9, 6, 5],
            // [1, 2, 3, 10, 7, 5],
            // [1, 2, 12, 9, 6, 5],

            // // Grade 3
            // [1, 2, 3, 4, 5, 6],
            // [1, 2, 3, 11, 7, 5],
            // [1, 2, 8, 9, 6, 5],
            // [1, 2, 3, 10, 7, 5],
            // [1, 2, 12, 9, 6, 5],

            // // Grade 4
            // [1, 2, 3, 4, 5, 6],
            // [1, 2, 3, 11, 7, 5],
            // [1, 2, 8, 9, 6, 5],
            // [1, 2, 3, 10, 7, 5],
            // [1, 2, 12, 9, 6, 5],
        ];

        $gameQues = [
            // Grade 1
            [10, 10, 5, 10, 5, 5, 5],
            [10, 10, 5, 10, 5, 5, 5],
            [10, 10, 5, 12, 5, 5, 5],
            [10, 10, 5, 15, 5, 10],
            [10, 10, 5, 10, 5, 10],

            // // Grade 2
            // [10, 10, 5, 10, 10, 5],
            // [10, 10, 5, 10, 5, 10],
            // [10, 10, 5, 12, 5, 10],
            // [10, 10, 5, 15, 5, 10],
            // [10, 10, 5, 10, 5, 10],

            // // Grade 3
            // [10, 10, 5, 10, 10, 5],
            // [10, 10, 5, 10, 5, 10],
            // [10, 10, 5, 12, 5, 10],
            // [10, 10, 5, 15, 5, 10],
            // [10, 10, 5, 10, 5, 10],

            // // Grade 4
            // [10, 10, 5, 10, 10, 5],
            // [10, 10, 5, 10, 5, 10],
            // [10, 10, 5, 12, 5, 10],
            // [10, 10, 5, 15, 5, 10],
            // [10, 10, 5, 10, 5, 10],
        ];

        $assessQues = [
            // Grade 1
            50, 50, 52, 55, 50,

            // // Grade 2
            // 50, 50, 52, 55, 50,

            // // Grade 3
            // 50, 50, 52, 55, 50,

            // // Grade 4
            // 50, 50, 52, 55, 50,
        ];

        for ($i = 1; $i <= 12; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                foreach ($game[$j - 1] as $key => $val) {
                    DB::table('assessments')->insert([
                        ['grade_id' => $i, "name" => $j, "assess_game_name" => $val, "assess_category_id" => $category[$j - 1][$key], "total_game_ques" => $gameQues[$j - 1][$key], "total_assess_ques" => $assessQues[$j - 1]]
                    ]);
                }
            }
        }
    }
}
