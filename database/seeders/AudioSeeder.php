<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AudioSeeder extends Seeder
{

    public function run(): void
    {
        $domain = app('domain');
        $domainAndPath = $domain."/storage/AtoZ/";
        $prefix = "SubBlock_";
        $words  = range('A','Z');


        foreach ($words as $w) {

            DB::table('audio')->insert([
                ['title' => $prefix.$w ,'path' => $domainAndPath.$prefix.$w.".mp3", 'game_id' => null, 'round_id' => 1],
            ]);
        }

    // end- A TO Z



    }
}
