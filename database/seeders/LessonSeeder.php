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

        // $grades = range(1,4);
        $grades = 1;
        $lessons =  range(1, 40);

        foreach ($lessons as $l) {

            DB::table('lessons')->insert([
                ['name' => $l, 'grade_id' => $grades]
            ]);
        }


        $grades = 2;
        $lessons =  range(1, 12);

        foreach ($lessons as $l) {
            DB::table('lessons')->insert([
                ['name' => $l, 'grade_id' => $grades]
            ]);
        }
    }
}
