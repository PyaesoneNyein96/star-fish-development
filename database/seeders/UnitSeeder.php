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

            ['name' => 'Video', 'lesson_id' => 1 ,'category_id' => 2 ],
            ['name' => 'Read and Practice', 'lesson_id' => 1 ,'category_id' => 3 ],
            ['name' => 'Song', 'lesson_id' => 1 ,'category_id' => 1],
            ['name' => 'Listen and Practice', 'lesson_id' => 1 ,'category_id' => 18],
            ['name' => 'Writing', 'lesson_id' => 1 ,'category_id' => 8],

             // lesson 2's games

            ['name' => 'Video', 'lesson_id' => 2 ,'category_id' => 2],
            ['name' => 'Read and Practice', 'lesson_id' => 2 , 'category_id' => 3],
            ['name' => 'Song', 'lesson_id' => 2 , 'category_id' => 1],
            ['name' => 'Listen and Practice', 'lesson_id' => 2 , 'category_id' => 19],
            ['name' => 'Matching', 'lesson_id' => 2, 'category_id' => 11 ],
            ['name' => 'Writing (Arrange Order)', 'lesson_id' => 2 , 'category_id' => 8],

            // lesson 12's games

            ['name' => 'Target language & Grammar Explanation', 'lesson_id' => 12,'category_id' => 28 ],
            ['name' => 'Read Listen & Repeat', 'lesson_id' => 12 ,'category_id' => 28],
            ['name' => 'Drag and Drop', 'lesson_id' => 12 ,'category_id' => 28],
            ['name' => 'Listen and Practice', 'lesson_id' => 12 ,'category_id' => 28],
            ['name' => 'Speaking Practice', 'lesson_id' => 12,'category_id' => 28],
            ['name' => 'Writing', 'lesson_id' => 12,'category_id' => 28],

        ]);

    }
}