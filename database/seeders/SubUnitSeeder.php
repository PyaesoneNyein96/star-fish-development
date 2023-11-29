<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subunits')->insert([
            ['name' => "Trace and write", "game_id" => 17],
            ['name' => "Write the correct letter", "game_id" => 17],

        ]);
    }
}
