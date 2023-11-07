<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domain = "http://localhost:8000";
        $Imagedomain = $domain."/storage/images/AtoZ/";
        $Audiodomain = $domain."/storage/audios/AtoZ/";

        $prefix = "SubBlock_";
        $AZ = range("A","Z");

        foreach ($AZ as $key) {
            DB::table('items')->insert([
                    ['item' => $key ,'image' => $Imagedomain.$key.".png", 'audio' => $Audiodomain.$prefix.$key.".mp3", 'game_id' => 2],
            ]);
        }

    }
}
