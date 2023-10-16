<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([

            ['name' => 'Yangon', 'country_id' => 1],
            ['name' => 'Bangkok', 'country_id' => 2],
            ['name' => 'Phnom_Penh', 'country_id' => 3],
            ['name' => 'Vientiane', 'country_id' => 4],

        ]);
    }
}
