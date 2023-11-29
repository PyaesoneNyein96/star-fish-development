<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SusunitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('student_grades')->insert([
            ['game_id' => 11, 'content' => 'First SUbUnit'],
            ['game_id' => 11, 'content' => 'Sec SUbUnit'],
        ]);
    }
}
