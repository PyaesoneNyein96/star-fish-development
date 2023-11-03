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

            // lesson 1's units

            ['game' => 'Video', 'lesson_id' => 1 ],
            ['game' => 'Read and Practice', 'lesson_id' => 1 ],
            ['game' => 'Song', 'lesson_id' => 1 ],
            ['game' => 'Listen and Practice', 'lesson_id' => 1 ],
            ['game' => 'Writing', 'lesson_id' => 1 ],
            // ['game' => 'Matching', 'lesson_id' => 1 ],
            // ['game' => 'Choosing', 'lesson_id' => 1 ],
            // ['game' => 'Grammar', 'lesson_id' => 1 ],


             // lesson 2's units

            ['game' => 'Video', 'lesson_id' => 2 ],
            ['game' => 'Read and Practice', 'lesson_id' => 2 ],
            ['game' => 'Song', 'lesson_id' => 2 ],
            ['game' => 'Listen and Practice', 'lesson_id' => 2 ],
            ['game' => 'Matching', 'lesson_id' => 2 ],
            ['game' => 'Writing (Arrange Order)', 'lesson_id' => 2 ],


        ]);
    }
}
