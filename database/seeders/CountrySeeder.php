<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('countries')->insert([
            ['name' => 'Myanmar' ,'timezone' => 'Asia/Yangon'],
            ['name' => 'Thailand' ,'timezone' => 'Asia/Bangkok'],
            ['name' => 'Cambodia' ,'timezone' => 'Asia/Phnom_Penh'],
            ['name' => 'Laos' ,'timezone' => 'Asia/Vientiane'],

            // ['name' => 'Netherlands' ,'timezone' => 'Europe/Amsterdam'],
        ]);

    }
}
