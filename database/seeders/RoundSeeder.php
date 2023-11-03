<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            DB::table('rounds')->insert([
                ['round' => 1,'game_id' => 2],
                ['round' => 2,'game_id' => 2],
                ['round' => 3,'game_id' => 2],
                ['round' => 4,'game_id' => 2],
                ['round' => 5,'game_id' => 2],
            ]);

    }
}
