<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('grades')->insert([

            ['name' => 'Grade_1','description' => null],
            ['name' => 'Grade_2','description' => null],
            ['name' => 'Grade_3','description' => null],
            ['name' => 'Grade_4','description' => null],
            ['name' => 'Grade_5','description' => null],
            ['name' => 'Grade_6','description' => null],
            ['name' => 'Grade_7','description' => null],
            ['name' => 'Grade_8','description' => null],
            ['name' => 'Grade_9','description' => null],
           ['name' => 'Grade_10','description' => null],


        ]);
    }
}
