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
            ['name' => 'Read and Practice', 'unit_id' => 2],
            ['name' => 'Song', 'unit_id' => 3],
            ['name' => 'Listen and Practice', 'unit_id' => 4],
            ['name' => 'Writing', 'unit_id' => 5],


            // lesson 2's games

            ['name' => 'Video', 'unit_id' => 6],
            ['name' => 'Read and Practice', 'unit_id' => 7],
            ['name' => 'Song', 'unit_id' => 8],
            ['name' => 'Listen and Practice', 'unit_id' => 9],
            ['name' => 'Matching', 'unit_id' => 10],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 11],


            // lesson 3's games

            ['name' => 'Video', 'unit_id' => 12],
            ['name' => 'Read Listen and Repect', 'unit_id' => 13],
            ['name' => 'Song', 'unit_id' => 14],
            ['name' => 'Listen and Practice', 'unit_id' => 15],
            ['name' => 'Writing (Arrange Order)', 'unit_id' => 16],
            ['name' => 'Speaking', 'unit_id' => 17],


            // // // lesson 12's games

            ['name' => 'Target language & Grammar Explanation', 'unit_id' => 18],
            ['name' => 'Read Listen & Repeat', 'unit_id' => 19],
            ['name' => 'Drag and Drop', 'unit_id' => 20],
            ['name' => 'Listen and Practice', 'unit_id' => 21],
            ['name' => 'Speaking Practice', 'unit_id' => 22],
            // ['name' => 'trace and write', 'unit_id' => 23],
            // ['name' => 'Write the correct letter', 'unit_id' => 23],

        ]);

        DB::table('games')->insert([
            ['name' => 'trace and write', 'unit_id' => 23, 'instructionGIF' => "trace and writ GIF"],
            ['name' => 'Write the correct letter',  'unit_id' => 23, 'instructionGIF' => "Writ the correct Letter GIF"],
            ['name' => 'trace and write', 'unit_id' => 23, 'instructionGIF' => "trace and writ GIF"],
            ['name' => 'Write the correct letter',  'unit_id' => 23, 'instructionGIF' => "Writ the correct Letter GIF"],
        ]);
    }
}
