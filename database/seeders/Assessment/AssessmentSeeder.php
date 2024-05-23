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
        // // Games
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
            ["Multiple Choice", "Listen & Fill in the blank", "Multiple Choice (Listening)", "Matching", "Reading Passages (1)", "Reading Passages (2)"],
            ["Vocabulary", "Listen and Choose", "Rearrange", "Reading (1)", "Reading (2)"],
            ["Vocabulary (1)", "Vocabulary (2)", "Vocabulary (3)", "Listen (1)", "Listen (2)", "Grammar", "Listening (1)", "Listening (2)"],
            ["Multiple Choice", "Multiple Choice", "Listen (1)", "Listen (2)", "Grammar", "Reading (1)", "Reading (2)"],
            ["Vocabulary (1)", "Vocabulary (2)", "Vocabulary (3)", "Matching", "Listening", "Grammar (1)", "Grammar (2)", "Reading (1)", "Reading (2)"],
        ];

        $grade_4 = [
            ["Matching", "Arranging Words", "Listen and Practice", "Grammar", "Reading Passages (1)", "Reading Passages (2)"],
            ["Matching", "Choose", "Listening",  "Grammar", "Reading Passages (1)", "Reading Passages (2)"],
            ["Matching", "Arranging Letter", "Listening", "Grammar", "Reading Passages (1)", "Reading Passages (2)"],
            ["Matching", "Arranging Letter", "Listening (1)", "Listening (2)", "Grammar", "Reading Passages (1)", "Reading Passages (2)"],
            ["Matching", "Arranging Letter", "Listening Practice", "Grammar", "Reading (1)", "Reading (2)"],
        ];

        // // Categories
        // Grade 1
        $category_1 = [
            [1, 2, 3, 4, 5, 5, 6],
            [1, 2, 3, 11, 7, 5, 5],
            [1, 2, 8, 9, 6, 5, 5],
            [1, 2, 3, 10, 7, 5],
            [1, 2, 12, 9, 6, 5],
        ];

        // Grade 2
        $category_2 = [
            [14, 1, 8, 8, 7, 7, 6, 5],
            [14, 1, 8, 8, 3, 7, 6, 5],
            [14, 1, 13, 8, 3, 7, 6, 5],
            [14, 1, 13, 8, 3, 6, 5],
            [14, 1, 13, 15, 3, 7, 6, 5],
        ];

        // Grade 3
        $category_3 = [
            [8, 16, 3, 20, 5, 5],
            [1, 3, 1, 5, 16],
            [13, 1, 8, 3, 15, 1, 5, 5],
            [8, 7, 3, 15, 1, 5, 5],
            [16, 7, 7, 13, 3, 1, 7, 5, 5],
        ];

        // Grade 4
        $category_4 = [
            [13, 1, 3, 17, 5, 5],
            [13, 19, 3, 18, 5, 5],
            [13, 1, 3, 18, 5, 5],
            [13, 1, 8, 3, 18, 5, 5],
            [13, 1, 3, 18, 5, 5],
        ];

        // //  Question Count
        // Grade 1
        $gameQues_1 = [
            [10, 10, 5, 10, 5, 5, 5],
            [10, 10, 5, 10, 5, 5, 5],
            [10, 10, 5, 12, 5, 5, 5],
            [10, 10, 5, 15, 5, 10],
            [10, 10, 5, 10, 5, 10],
        ];

        // Grade 2
        $gameQues_2 = [
            [8, 6, 6, 5, 5, 5, 5, 10],
            [8, 6, 6, 5, 5, 5, 5, 10],
            [8, 6, 6, 5, 5, 5, 5, 10],
            [8, 6, 6, 5, 5, 5, 10],
            [8, 6, 6, 5, 5, 5, 5, 10],
        ];

        // Grade 3
        $gameQues_3 = [
            [20, 5, 5, 10, 5, 5],
            [20, 10, 10, 5, 5],
            [10, 5, 5, 5, 5, 10, 5, 5],
            [10, 10, 5, 5, 10, 5, 5],
            [5, 5, 5, 5, 10, 5, 5, 5, 5],
        ];

        // // Grade 4
        $gameQues_4 = [
            [10, 10, 10, 10, 5, 5],
            [10, 10, 10, 10, 5, 5],
            [10, 10, 10, 10, 5, 5],
            [10, 10, 5, 5, 10, 5, 5],
            [10, 10, 10, 10, 5, 5],
        ];

        // // Total Question Count
        // Grade 1
        $assessQues_1 = [
            50, 50, 52, 55, 50,
        ];

        // Grade 2
        $assessQues_2 = [
            50, 50, 50, 45, 50,
        ];

        // Grade 3
        $assessQues_3 = [
            50, 50, 50, 50, 50,
        ];

        // Grade 4
        $assessQues_4 = [
            50, 50, 50, 50, 50,
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

        // Grade 3
        foreach ($grade_3 as $i => $j) {
            foreach ($j as $index => $val) {
                DB::table('assessments')->insert([
                    [
                        'grade_id' => 3,
                        "name" => $i + 1,
                        "assess_game_name" => $val,
                        "assess_category_id" => $category_3[$i][$index],
                        "total_point" => $gameQues_3[$i][$index],
                        "total_assess_ques" => $assessQues_3[$i]
                    ]
                ]);
            }
        }

        // Grade 4
        foreach ($grade_4 as $i => $j) {
            foreach ($j as $index => $val) {
                DB::table('assessments')->insert([
                    [
                        'grade_id' => 4,
                        "name" => $i + 1,
                        "assess_game_name" => $val,
                        "assess_category_id" => $category_4[$i][$index],
                        "total_point" => $gameQues_4[$i][$index],
                        "total_assess_ques" => $assessQues_4[$i]
                    ]
                ]);
            }
        }
    }
}
