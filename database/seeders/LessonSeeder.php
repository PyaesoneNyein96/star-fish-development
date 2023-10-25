<?php

namespace Database\Seeders;

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

          DB::table('lessons')->insert([

            ['name' => 'lesson_1','grade_id' => 1],
            ['name' => 'lesson_2','grade_id' => 1],
            ['name' => 'lesson_3','grade_id' => 1],
            ['name' => 'lesson_4','grade_id' => 1],
            ['name' => 'lesson_5','grade_id' => 1],
            ['name' => 'lesson_6','grade_id' => 1],
            ['name' => 'lesson_7','grade_id' => 1],
            ['name' => 'lesson_8','grade_id' => 1],
            ['name' => 'lesson_9','grade_id' => 1],
           ['name' => 'lesson_10','grade_id' => 1],

        ]);

    }
}
