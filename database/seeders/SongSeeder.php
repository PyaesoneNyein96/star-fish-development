<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('songs')->insert([
                ['path' => "b_gBZ-tfAJ4" , "isLocal" => 1,'game_id' => 3],
            ]);

    }
}
