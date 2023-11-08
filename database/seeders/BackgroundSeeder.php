<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $domain = "http://localhost:8000";
        $ImageDomain = $domain."/storage/images/";


        DB::table('background_images')->insert([

                ['title' => "someTitle", 'round_id' => 1,'path' => $ImageDomain."/Backgrounds/"."bg.png",],
                ['title' => "someTitle", 'round_id' => 2,'path' => $ImageDomain."/Backgrounds/"."bg.png",],

        ]);

    }
}
