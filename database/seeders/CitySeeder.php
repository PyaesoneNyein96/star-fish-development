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
            ['name' => 'Mandalay', 'country_id' => 1],
            ['name' => 'NayPyiTaw', 'country_id' => 1],
            ['name' => 'TaungGyi', 'country_id' => 1],

        ]);

        DB::connection('mysql_2')->table('global_cities')->insert([

            ['name' => 'Bangkok', 'global_country_id' => 2],
            ['name' => 'Chiang Mai', 'global_country_id' => 2],
            ['name' => 'Pattaya', 'global_country_id' => 2],

            ['name' => 'Phnom_Penh', 'global_country_id' => 3],
            ['name' => 'Krong Kampong Cham', 'global_country_id' => 3],
            ['name' => 'Krong Battambang', 'global_country_id' => 3],

            ['name' => 'Vientiane', 'global_country_id' => 4],
            ['name' => 'Luang Prabang', 'global_country_id' => 4],
            ['name' => 'Pakse', 'global_country_id' => 4],
        ]);
    }
}
