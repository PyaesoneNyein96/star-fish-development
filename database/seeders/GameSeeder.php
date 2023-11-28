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

            ['name' => 'Video', 'unit_id' => 1],
            ['name' => 'Read and Practice', 'unit_id' => 2 ],
            ['name' => 'Song', 'unit_id' => 3],
            ['name' => 'Listen and Practice', 'unit_id' => 4 ],
            ['name' => 'Writing', 'unit_id' => 5],
            ['name' => 'Writing 2', 'unit_id' => 5],

             // lesson 2's games

            ['name' => 'Video', 'unit_id' => 6],
            ['name' => 'Read and Practice', 'unit_id' => 7 ],
            ['name' => 'Song', 'unit_id' => 8 ],
            ['name' => 'Listen and Practice', 'unit_id' => 9 ],
            ['name' => 'Matching', 'unit_id' => 10],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 11],

            // //  // lesson 3's games

            // ['name' => 'Video', 'unit_id' => 3 ],
            // ['name' => 'Read and Listen & Repeat', 'unit_id' => 3 ],
            // ['name' => 'Listen and Practice', 'unit_id' => 3 ],
            // ['name' => 'Writing (Arrange Order)', 'unit_id' => 3 ],
            // ['name' => 'Speaking', 'unit_id' => 3 ],

            // //  // lesson 4's games

            // ['name' => 'Video', 'unit_id' => 4 ],
            // ['name' => 'Read and Listen & Repeat', 'unit_id' => 4 ],
            // ['name' => 'Read and Listen & Repeat', 'unit_id' => 4 ],
            // ['name' => 'Listen and Practice', 'unit_id' => 4 ],
            // ['name' => 'Writing (Arrange Order)', 'unit_id' => 4 ],

            // //  // lesson 5's games

            // ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 5 ],
            // ['name' => 'Listen and Practice', 'unit_id' => 5 ],
            // ['name' => 'Read and Listen & Repeat', 'unit_id' => 5 ],
            // ['name' => 'Reading Passage', 'unit_id' => 5 ],
            // ['name' => 'Speaking Practice', 'unit_id' => 5 ],
            // ['name' => 'Writing', 'unit_id' => 5 ],

            // // lesson 6's games

            // ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 6 ],
            // ['name' => 'Reading', 'unit_id' => 6 ],
            // ['name' => 'Listen and Practice', 'unit_id' => 6 ],
            // ['name' => 'Matching ', 'unit_id' => 6 ],
            // ['name' => 'Speaking Practice', 'unit_id' => 6 ],
            // ['name' => 'Writing', 'unit_id' => 6 ],


            // // // lesson 7's games

            // ['name' => 'Target Language & Grammar Explanation', 'unit_id' => 7 ],
            // ['name' => 'Read Listen and Repeat', 'unit_id' => 7 ],
            // ['name' => 'Listen and Practice', 'unit_id' => 7 ],
            // ['name' => 'Matching ', 'unit_id' => 7 ],
            // ['name' => 'Speaking Practice', 'unit_id' => 7 ],
            // ['name' => 'Writing', 'unit_id' => 7 ],

            // // // lesson 8's games

            // ['name' => 'Video', 'unit_id' => 8 ],
            // ['name' => 'Read', 'unit_id' => 8 ],
            // ['name' => 'Listening Practice', 'unit_id' => 8 ],
            // ['name' => 'Matching', 'unit_id' => 8 ],
            // ['name' => 'Speaking Practice', 'unit_id' => 8 ],
            // ['name' => 'Reading Passage', 'unit_id' => 8 ],
            // ['name' => 'Writing', 'unit_id' => 8 ],

            // // // lesson 9's games

            // ['name' => 'Target Language', 'unit_id' => 9 ],
            // ['name' => 'Reading', 'unit_id' => 9 ],
            // ['name' => 'Listening Practice', 'unit_id' => 9 ],
            // ['name' => 'Matching', 'unit_id' => 9 ],
            // ['name' => 'Speaking Practice', 'unit_id' => 9 ],
            // ['name' => 'Writing', 'unit_id' => 9 ],

            // // // lesson 13's games

            ['name' => 'Target language & Grammar Explanation', 'unit_id' => 12 ],
            ['name' => 'Read Listen & Repeat', 'unit_id' => 13 ],
            ['name' => 'Drag and Drop', 'unit_id' => 14 ],
            ['name' => 'Listen and Practice', 'unit_id' => 15 ],
            ['name' => 'Speaking Practice', 'unit_id' => 16],
            ['name' => 'trace and write', 'unit_id' => 17],
            ['name' => 'Write the correct letter', 'unit_id' => 17],




        ]);
    }
}