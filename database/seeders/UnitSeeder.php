<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('units')->insert([

            // lesson 1's games

            ['unit' => '1', 'lesson_id' => 1, 'category_id' => 2],
            ['unit' => '2', 'lesson_id' => 1, 'category_id' => 3],
            ['unit' => '3', 'lesson_id' => 1, 'category_id' => 1],
            ['unit' => '4', 'lesson_id' => 1, 'category_id' => 18],
            ['unit' => '5', 'lesson_id' => 1, 'category_id' => 8],

            // lesson 2's games

            ['unit' => '1', 'lesson_id' => 2, 'category_id' => 2],
            ['unit' => '2', 'lesson_id' => 2, 'category_id' => 3],
            ['unit' => '3', 'lesson_id' => 2, 'category_id' => 1],
            ['unit' => '4', 'lesson_id' => 2, 'category_id' => 19],
            ['unit' => '5', 'lesson_id' => 2, 'category_id' => 11],
            ['unit' => '6', 'lesson_id' => 2, 'category_id' => 8],


            // lesson 3's games

            ['unit' => '1', 'lesson_id' => 3, 'category_id' => 2],
            ['unit' => '2', 'lesson_id' => 3, 'category_id' => 7],
            ['unit' => '3', 'lesson_id' => 3, 'category_id' => 17],
            ['unit' => '4', 'lesson_id' => 3, 'category_id' => 13],
            ['unit' => '5', 'lesson_id' => 3, 'category_id' => 12],


            // lesson 4's games

            ['unit' => '1', 'lesson_id' => 4, 'category_id' => 28],
            ['unit' => '2', 'lesson_id' => 4, 'category_id' => 28],
            ['unit' => '3', 'lesson_id' => 4, 'category_id' => 28],
            ['unit' => '4', 'lesson_id' => 4, 'category_id' => 28],
            ['unit' => '5', 'lesson_id' => 4, 'category_id' => 28],
            ['unit' => '6', 'lesson_id' => 4, 'category_id' => 28],

            // lesson 12's games

            ['unit' => '1', 'lesson_id' => 12, 'category_id' => 28],
            ['unit' => '2', 'lesson_id' => 12, 'category_id' => 28],
            ['unit' => '3', 'lesson_id' => 12, 'category_id' => 28],
            ['unit' => '4', 'lesson_id' => 12, 'category_id' => 28],
            ['unit' => '5', 'lesson_id' => 12, 'category_id' => 28],
            ['unit' => '6', 'lesson_id' => 12, 'category_id' => 28],


        ]);
    }
}
