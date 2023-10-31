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

            ['name' => 'Video', 'lesson_id' => 1 ],
            ['name' => 'Read and Practice', 'lesson_id' => 1 ],
            ['name' => 'Song', 'lesson_id' => 1 ],
            ['name' => 'Listen and Practice', 'lesson_id' => 1 ],
            ['name' => 'Writing', 'lesson_id' => 1 ],
            // ['name' => 'Matching', 'lesson_id' => 1 ],
            // ['name' => 'Choosing', 'lesson_id' => 1 ],
            // ['name' => 'Grammar', 'lesson_id' => 1 ],


             // lesson 2's units

            ['name' => 'Video', 'lesson_id' => 2 ],
            ['name' => 'Read and Practice', 'lesson_id' => 2 ],
            ['name' => 'Song', 'lesson_id' => 2 ],
            ['name' => 'Listen and Practice', 'lesson_id' => 2 ],
            ['name' => 'Matching', 'lesson_id' => 2 ],
            ['name' => 'Writing (Arrange Order)', 'lesson_id' => 2 ],


        ]);
    }
}
