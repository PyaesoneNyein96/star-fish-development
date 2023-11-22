<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('videos')->insert([
                ['path' => "mC7cPT2F23E" , "isLocal" => 1,'game_id' => 1],
        ]);


    }
}
