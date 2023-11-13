<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('student_grades')->insert([
            ['student_id' => 1,'grade_id' => 1,'isDone' => 0],
            // ['student_id' => 1,'grade_id' => 2,'isDone' => 0],
        ]);
    }
}
