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

            ['game' => 'Video', 'lesson_id' => 1 ],
            ['game' => 'Read and Practice', 'lesson_id' => 1 ],
            ['game' => 'Song', 'lesson_id' => 1 ],
            ['game' => 'Listen and Practice', 'lesson_id' => 1 ],
            ['game' => 'Writing', 'lesson_id' => 1 ],

             // lesson 2's games

            ['game' => 'Video', 'lesson_id' => 2 ],
            ['game' => 'Read and Practice', 'lesson_id' => 2 ],
            ['game' => 'Song', 'lesson_id' => 2 ],
            ['game' => 'Listen and Practice', 'lesson_id' => 2 ],
            ['game' => 'Matching', 'lesson_id' => 2 ],
            ['game' => 'Writing (Arrange Order)', 'lesson_id' => 2 ],

            //  // lesson 3's games

            ['game' => 'Video', 'lesson_id' => 3 ],
            ['game' => 'Read and Listen & Repeat', 'lesson_id' => 3 ],
            ['game' => 'Listen and Practice', 'lesson_id' => 3 ],
            ['game' => 'Writing (Arrange Order)', 'lesson_id' => 3 ],
            ['game' => 'Speaking', 'lesson_id' => 3 ],

            //  // lesson 4's games

            ['game' => 'Video', 'lesson_id' => 4 ],
            ['game' => 'Read and Listen & Repeat', 'lesson_id' => 4 ],
            ['game' => 'Read and Listen & Repeat', 'lesson_id' => 4 ],
            ['game' => 'Listen and Practice', 'lesson_id' => 4 ],
            ['game' => 'Writing (Arrange Order)', 'lesson_id' => 4 ],

            //  // lesson 5's games

            ['game' => 'Target Language & Grammar Explanation', 'lesson_id' => 5 ],
            ['game' => 'Listen and Practice', 'lesson_id' => 5 ],
            ['game' => 'Read and Listen & Repeat', 'lesson_id' => 5 ],
            ['game' => 'Reading Passage', 'lesson_id' => 5 ],
            ['game' => 'Speaking Practice', 'lesson_id' => 5 ],
            ['game' => 'Writing', 'lesson_id' => 5 ],

            // lesson 6's games

            ['game' => 'Target Language & Grammar Explanation', 'lesson_id' => 6 ],
            ['game' => 'Reading', 'lesson_id' => 6 ],
            ['game' => 'Listen and Practice', 'lesson_id' => 6 ],
            ['game' => 'Matching ', 'lesson_id' => 6 ],
            ['game' => 'Speaking Practice', 'lesson_id' => 6 ],
            ['game' => 'Writing', 'lesson_id' => 6 ],


            // // lesson 7's games

            ['game' => 'Target Language & Grammar Explanation', 'lesson_id' => 7 ],
            ['game' => 'Read Listen and Repeat', 'lesson_id' => 7 ],
            ['game' => 'Listen and Practice', 'lesson_id' => 7 ],
            ['game' => 'Matching ', 'lesson_id' => 7 ],
            ['game' => 'Speaking Practice', 'lesson_id' => 7 ],
            ['game' => 'Writing', 'lesson_id' => 7 ],

            // // lesson 8's games

            ['game' => 'Video', 'lesson_id' => 8 ],
            ['game' => 'Read', 'lesson_id' => 8 ],
            ['game' => 'Listening Practice', 'lesson_id' => 8 ],
            ['game' => 'Matching', 'lesson_id' => 8 ],
            ['game' => 'Speaking Practice', 'lesson_id' => 8 ],
            ['game' => 'Reading Passage', 'lesson_id' => 8 ],
            ['game' => 'Writing', 'lesson_id' => 8 ],

            // // lesson 9's games

            ['game' => 'Target Language', 'lesson_id' => 9 ],
            ['game' => 'Reading', 'lesson_id' => 9 ],
            ['game' => 'Listening Practice', 'lesson_id' => 9 ],
            ['game' => 'Matching', 'lesson_id' => 9 ],
            ['game' => 'Speaking Practice', 'lesson_id' => 9 ],
            ['game' => 'Writing', 'lesson_id' => 9 ],

            // // lesson 10's games

            ['game' => 'Target', 'lesson_id' => 10 ],
            ['game' => 'Reading', 'lesson_id' => 10 ],
            ['game' => 'Listen and Practice', 'lesson_id' => 10 ],
            ['game' => 'Matching', 'lesson_id' => 10 ],
            ['game' => 'Speaking Practice', 'lesson_id' => 10 ],
            ['game' => 'Writing', 'lesson_id' => 10 ]




        ]);
    }
}