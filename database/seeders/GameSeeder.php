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
            ['name' => 'Vocabulary', 'lesson_id' => 1 ],
            ['name' => 'Listening', 'lesson_id' => 1 ],
            ['name' => 'Writing', 'lesson_id' => 1 ],
            ['name' => 'Reading', 'lesson_id' => 1 ],
            ['name' => 'Matching', 'lesson_id' => 1 ],
            ['name' => 'Choosing', 'lesson_id' => 1 ],
            ['name' => 'Grammar', 'lesson_id' => 1 ],

            ['name' => 'Video', 'lesson_id' => 2 ],
            ['name' => 'Vocabulary', 'lesson_id' => 2 ],
            ['name' => 'Listening', 'lesson_id' => 2 ],
            ['name' => 'Writing', 'lesson_id' => 2 ],
            ['name' => 'Reading', 'lesson_id' => 2 ],
            ['name' => 'Matching', 'lesson_id' => 2 ],


        ]);
    }
}
