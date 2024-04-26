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

        $grade_1 = [
            ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Listening (Drag and Drop)", "Reading Passages (1)", "Reading Passages (2)", "True or False"],
            ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "True or False (1)", "True or False (2)"],
            ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Drag and Drop", "True or False", "Reading Passages (1)", "Reading Passages (2)"],
            ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "Reading Passages"],
            ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "True or False", "Reading Passages"],
        ];

        $grade_2 = [
            ["Tracing", "Arranging Letter", "Multiple Choice", "Listen and choose", "Fill in the blank", "Multiple Choice", "True or False", "Reading Passages"],
            ["Tracing", "Arranging Letter", "Multiple Choice", "Multiple Choice", "Fill in the blank", "Multiple Choice", "True False", "Reading Passages"],
            ["Tracing", "Arranging Letter", "Matching", "Multiple Choice", "Fill in the blank", "Grammar Multiple Choice", "True False", "Reading Passages"],
            ["Tracing", "Arranging Letter", "Matching", "Multiple Choice", "Fill in the blank",  "True False", "Reading Passages"],
            ["Tracing", "Arranging Letter", "Matching", "Listen and Choice", "Fill in the blank", "Grammar Multiple Choice", "True False", "Reading Passages"],
        ];

        $grade_3 = [
            // // Grade 3
            // ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Listening (Drag and Drop)", "Reading Passages", "True or False"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "True or False"],
            // ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Drag and Drop", "True or False", "Reading Passages"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "Reading Passages"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "True or False", "Reading Passages"],
        ];

        $grade_4 = [
            // // Grade 4
            // ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Listening (Drag and Drop)", "Reading Passages", "True or False"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "True or False"],
            // ["Arranging Letters", "Fill in the blank", "Listening (Multiple Choice)", "Drag and Drop", "True or False", "Reading Passages"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "Grammar", "Reading Passages"],
            // ["Arranging Letters", "Fill in the blank", "Multiple Choice", "Drag and Drop", "True or False", "Reading Passages"],
        ];

        $category_1 = [
            // Grade 1
            [1, 2, 3, 4, 5, 5, 6],
            [1, 2, 3, 11, 7, 5, 5],
            [1, 2, 8, 9, 6, 5, 5],
            [1, 2, 3, 10, 7, 5],
            [1, 2, 12, 9, 6, 5],
        ];

        $category_2 = [
            // Grade 2
            [14, 1, 8, 8, 7, 7, 6, 5],
            [14, 1, 8, 8, 3, 7, 6, 5],
            [14, 1, 13, 8, 3, 7, 6, 5],
            [14, 1, 13, 8, 3, 6, 5],
            [14, 1, 13, 15, 3, 7, 6, 5],
        ];

        $category_3 = [
            // // Grade 3
            // [1, 2, 3, 4, 5, 6],
            // [1, 2, 3, 11, 7, 5],
            // [1, 2, 8, 9, 6, 5],
            // [1, 2, 3, 10, 7, 5],
            // [1, 2, 12, 9, 6, 5],
        ];

        $category_4 = [
            // // Grade 4
            // [1, 2, 3, 4, 5, 6],
            // [1, 2, 3, 11, 7, 5],
            // [1, 2, 8, 9, 6, 5],
            // [1, 2, 3, 10, 7, 5],
            // [1, 2, 12, 9, 6, 5],
        ];

        $gameQues_1 = [
            // Grade 1
            [10, 10, 5, 10, 5, 5, 5],
            [10, 10, 5, 10, 5, 5, 5],
            [10, 10, 5, 12, 5, 5, 5],
            [10, 10, 5, 15, 5, 10],
            [10, 10, 5, 10, 5, 10],
        ];

        $gameQues_2 = [
            // Grade 2
            [0, 6, 6, 5, 5, 5, 5, 10],
            [0, 6, 6, 5, 5, 5, 5, 10],
            [0, 6, 6, 5, 5, 5, 5, 10],
            [0, 6, 6, 5, 5, 5, 10],
            [0, 6, 6, 5, 5, 5, 5, 10],
        ];

        $gameQues_3 = [
            // // Grade 3
            // [10, 10, 5, 10, 10, 5],
            // [10, 10, 5, 10, 5, 10],
            // [10, 10, 5, 12, 5, 10],
            // [10, 10, 5, 15, 5, 10],
            // [10, 10, 5, 10, 5, 10],
        ];

        $gameQues_4 = [
            // // Grade 4
            // [10, 10, 5, 10, 10, 5],
            // [10, 10, 5, 10, 5, 10],
            // [10, 10, 5, 12, 5, 10],
            // [10, 10, 5, 15, 5, 10],
            // [10, 10, 5, 10, 5, 10],
        ];

        $assessQues_1 = [
            // Grade 1
            50, 50, 52, 55, 50,
        ];

        $assessQues_2 = [
            // // Grade 2
            42, 42, 42, 37, 42,
        ];

        $assessQues_3 = [
            // // Grade 3
            // 50, 50, 52, 55, 50,
        ];

        $assessQues_4 = [
            // // Grade 4
            // 50, 50, 52, 55, 50,
        ];

        // Grade 1
        foreach ($grade_1 as $i => $j) {
            foreach ($j as $index => $val) {
                DB::table('assessments')->insert([
                    [
                        'grade_id' => 1,
                        "name" => $i + 1,
                        "assess_game_name" => $val,
                        "assess_category_id" => $category_1[$i][$index],
                        "total_point" => $gameQues_1[$i][$index],
                        "total_assess_ques" => $assessQues_1[$i]
                    ]
                ]);
            }
        }

        // Grade 2
        foreach ($grade_2 as $i => $j) {
            foreach ($j as $index => $val) {
                DB::table('assessments')->insert([
                    [
                        'grade_id' => 2,
                        "name" => $i + 1,
                        "assess_game_name" => $val,
                        "assess_category_id" => $category_2[$i][$index],
                        "total_point" => $gameQues_2[$i][$index],
                        "total_assess_ques" => $assessQues_2[$i]
                    ]
                ]);
            }
        }

        // // Grade 3
        // foreach ($grade_3 as $i => $j) {
        //     foreach ($j as $index => $val) {
        //         DB::table('assessments')->insert([
        //             [
        //                 'grade_id' => 3,
        //                 "name" => $i + 1,
        //                 "assess_game_name" => $val,
        //                 "assess_category_id" => $category_3[$i][$index],
        //                 "total_point" => $gameQues_3[$i][$index],
        //                 "total_assess_ques" => $assessQues_3[$i]
        //             ]
        //         ]);
        //     }
        // }

        // // Grade 4
        // foreach ($grade_4 as $i => $j) {
        //     foreach ($j as $index => $val) {
        //         DB::table('assessments')->insert([
        //             [
        //                 'grade_id' => 4,
        //                 "name" => $i + 1,
        //                 "assess_game_name" => $val,
        //                 "assess_category_id" => $category_4[$i][$index],
        //                 "total_point" => $gameQues_4[$i][$index],
        //                 "total_assess_ques" => $assessQues_4[$i]
        //             ]
        //         ]);
        //     }
        // }
    }
}
