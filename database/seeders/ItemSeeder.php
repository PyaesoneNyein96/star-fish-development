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

        $domain = app('domain');
        $ImageDomainAZ = $domain."/storage/images/AtoZ/";
        $ImageDomainAZ_small = $domain."/storage/images/AtoZ_Small/";
        $AudioDomain = $domain."/storage/audios/AtoZ/";



        $prefix = "SubBlock_";

        $AZ = range("A","Z");
        foreach ($AZ as $key) {
            DB::table('items')->insert([
                    ['item' => $key ,'image' => $ImageDomainAZ.$key.".png", 'audio' => $AudioDomain.$prefix.$key.".mp3", 'game_id' => 2],
            ]);
        }

        $az = range("a","z");
        foreach ($az as $key) {
            DB::table('items')->insert([
                    ['item' => $key ,'image' => $ImageDomainAZ_small.$key.".png", 'audio' => $AudioDomain.$prefix.$key.".mp3", 'game_id' => 7],
            ]);
        }





    }
}
