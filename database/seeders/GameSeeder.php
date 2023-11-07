<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('games')->insert([

            // lesson 1's games


            ['name' => 'Video', 'lesson_id' => 1 ,'category_id' => rand(1,23)],
            ['name' => 'Read and Practice', 'lesson_id' => 1 ,'category_id' => rand(1,23) ],
            ['name' => 'Song', 'lesson_id' => 1 ,'category_id' => rand(1,23)],
            ['name' => 'Listen and Practice', 'lesson_id' => 1 ,'category_id' => rand(1,23)],
            ['name' => 'Writing', 'lesson_id' => 1 ,'category_id' => rand(1,23)],

             // lesson 2's games

            ['name' => 'Video', 'lesson_id' => 2 ],
            ['name' => 'Read and Practice', 'lesson_id' => 2 ],
            ['name' => 'Song', 'lesson_id' => 2 ],
            ['name' => 'Listen and Practice', 'lesson_id' => 2 ],
            ['name' => 'Matching', 'lesson_id' => 2 ],
            ['name' => 'Writing (Arrange Order)', 'lesson_id' => 2 ],

            //  // lesson 3's games

            ['name' => 'Video', 'lesson_id' => 3 ],
            ['name' => 'Read and Listen & Repeat', 'lesson_id' => 3 ],
            ['name' => 'Listen and Practice', 'lesson_id' => 3 ],
            ['name' => 'Writing (Arrange Order)', 'lesson_id' => 3 ],
            ['name' => 'Speaking', 'lesson_id' => 3 ],

            //  // lesson 4's games

            ['name' => 'Video', 'lesson_id' => 4 ],
            ['name' => 'Read and Listen & Repeat', 'lesson_id' => 4 ],
            ['name' => 'Read and Listen & Repeat', 'lesson_id' => 4 ],
            ['name' => 'Listen and Practice', 'lesson_id' => 4 ],
            ['name' => 'Writing (Arrange Order)', 'lesson_id' => 4 ],

            //  // lesson 5's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 5 ],
            ['name' => 'Listen and Practice', 'lesson_id' => 5 ],
            ['name' => 'Read and Listen & Repeat', 'lesson_id' => 5 ],
            ['name' => 'Reading Passage', 'lesson_id' => 5 ],
            ['name' => 'Speaking Practice', 'lesson_id' => 5 ],
            ['name' => 'Writing', 'lesson_id' => 5 ],

            // lesson 6's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 6 ],
            ['name' => 'Reading', 'lesson_id' => 6 ],
            ['name' => 'Listen and Practice', 'lesson_id' => 6 ],
            ['name' => 'Matching ', 'lesson_id' => 6 ],
            ['name' => 'Speaking Practice', 'lesson_id' => 6 ],
            ['name' => 'Writing', 'lesson_id' => 6 ],


            // // lesson 7's games

            ['name' => 'Target Language & Grammar Explanation', 'lesson_id' => 7 ],
            ['name' => 'Read Listen and Repeat', 'lesson_id' => 7 ],
            ['name' => 'Listen and Practice', 'lesson_id' => 7 ],
            ['name' => 'Matching ', 'lesson_id' => 7 ],
            ['name' => 'Speaking Practice', 'lesson_id' => 7 ],
            ['name' => 'Writing', 'lesson_id' => 7 ],

            // // lesson 8's games

            ['name' => 'Video', 'lesson_id' => 8 ],
            ['name' => 'Read', 'lesson_id' => 8 ],
            ['name' => 'Listening Practice', 'lesson_id' => 8 ],
            ['name' => 'Matching', 'lesson_id' => 8 ],
            ['name' => 'Speaking Practice', 'lesson_id' => 8 ],
            ['name' => 'Reading Passage', 'lesson_id' => 8 ],
            ['name' => 'Writing', 'lesson_id' => 8 ],

            // // lesson 9's games

            ['name' => 'Target Language', 'lesson_id' => 9 ],
            ['name' => 'Reading', 'lesson_id' => 9 ],
            ['name' => 'Listening Practice', 'lesson_id' => 9 ],
            ['name' => 'Matching', 'lesson_id' => 9 ],
            ['name' => 'Speaking Practice', 'lesson_id' => 9 ],
            ['name' => 'Writing', 'lesson_id' => 9 ],

            // // lesson 10's games

            ['name' => 'Target', 'lesson_id' => 10 ],
            ['name' => 'Reading', 'lesson_id' => 10 ],
            ['name' => 'Listen and Practice', 'lesson_id' => 10 ],
            ['name' => 'Matching', 'lesson_id' => 10 ],
            ['name' => 'Speaking Practice', 'lesson_id' => 10 ],
            ['name' => 'Writing', 'lesson_id' => 10 ]




        ]);
    }
}
