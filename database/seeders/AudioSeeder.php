<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domainAndPath = "http://localhost:8000/storage/AtoZ/";
        $prefix = "SubBlock_";
        $words  = range('A','Z');


        foreach ($words as $w) {

            DB::table('audio')->insert([
                ['title' => $prefix.$w ,'path' => $domainAndPath.$prefix.$w.".mp3"],
            ]);

        }



    }
}
