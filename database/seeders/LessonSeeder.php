<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $grades = range(1,4);
        $grades = 1;
        $lessons =  range(1, 40);
        // $lessons =  [1,2,12];

        foreach ($lessons as $l) {

            DB::table('lessons')->insert([
                ['name' => $l, 'grade_id' => $grades]
            ]);
        }


        $grades = 2;
        $lessons =  range(1,40);

        foreach ($lessons as $l) {
            DB::table('lessons')->insert([
                ['name' => $l, 'grade_id' => $grades]
            ]);
        }


        $grades = 3;
        $lessons =  range(1,40);

        foreach ($lessons as $l) {
            DB::table('lessons')->insert([
                ['name' => $l, 'grade_id' => $grades]
            ]);
        }


        $grades = 4;
        $lessons =  range(1,40);

        foreach ($lessons as $l) {
            DB::table('lessons')->insert([
                ['name' => $l, 'grade_id' => $grades]
            ]);
        }



        ///////////////// testing ////////////////

        $lessons =  range(2,40);
        foreach ($lessons as $l) {
            DB::table('student_lessons')->insert([
                [
                    'student_id' => 1,
                    'grade_id' => 2,
                    'lesson_id' => $l,
                ]
            ]);
        }

            DB::table('assessment_finish_data')->insert([
                [
                    'student_id' => 1,
                    'grade_id' => 2,
                    'assess_name' => 1,
                    'point' => 1,
                    'finish' => 1,
                ]
            ]);




    }
}
