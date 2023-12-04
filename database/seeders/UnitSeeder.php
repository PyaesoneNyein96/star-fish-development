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

            ['name' => 'Video', 'lesson_id' => 1, 'category_id' => 2],
            ['name' => 'Read and Practice', 'lesson_id' => 1, 'category_id' => 3],
            ['name' => 'Song', 'lesson_id' => 1, 'category_id' => 1],
            ['name' => 'Listen and Practice', 'lesson_id' => 1, 'category_id' => 18],
            ['name' => 'Writing (Arranging Order)', 'lesson_id' => 1, 'category_id' => 8],

            // lesson 2's games

            ['name' => '1', 'lesson_id' => 2, 'category_id' => 2],
            ['name' => '2', 'lesson_id' => 2, 'category_id' => 3],
            ['name' => '3', 'lesson_id' => 2, 'category_id' => 1],
            ['name' => '4', 'lesson_id' => 2, 'category_id' => 19],
            ['name' => '5', 'lesson_id' => 2, 'category_id' => 11],
            ['name' => '6', 'lesson_id' => 2, 'category_id' => 8],

            // lesson 12's games

            ['name' => '1', 'lesson_id' => 12, 'category_id' => 28],
            ['name' => '2', 'lesson_id' => 12, 'category_id' => 28],
            ['name' => '3', 'lesson_id' => 12, 'category_id' => 28],
            ['name' => '4', 'lesson_id' => 12, 'category_id' => 28],
            ['name' => '5', 'lesson_id' => 12, 'category_id' => 28],
            ['name' => '6', 'lesson_id' => 12, 'category_id' => 28],


            // lesson 3's games

            ['name' => '1', 'lesson_id' => 3, 'category_id' => 3],
            ['name' => '2', 'lesson_id' => 3, 'category_id' => 7],
            ['name' => '3', 'lesson_id' => 3, 'category_id' => 17],
            ['name' => '4', 'lesson_id' => 3, 'category_id' => 13],
            ['name' => '5', 'lesson_id' => 3, 'category_id' => 12],


            // lesson 4's games

            ['name' => '1', 'lesson_id' => 4, 'category_id' => 28],
            ['name' => '2', 'lesson_id' => 4, 'category_id' => 28],
            ['name' => '3', 'lesson_id' => 4, 'category_id' => 28],
            ['name' => '4', 'lesson_id' => 4, 'category_id' => 28],
            ['name' => '5', 'lesson_id' => 4, 'category_id' => 28],
            ['name' => '6', 'lesson_id' => 4, 'category_id' => 28],

        ]);
    }
}
