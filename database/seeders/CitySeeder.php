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


        // Myanmar
        DB::table('cities')->insert([

            ['name' => 'Yangon', 'country_id' => 1],
            ['name' => 'Mandalay', 'country_id' => 1],
            ['name' => 'NayPyiTaw', 'country_id' => 1],
            ['name' => 'TaungGyi', 'country_id' => 1],

        ]);


        // Thailand
        DB::table('cities')->insert([

            ['name' => 'Bangkok', 'country_id' => 2],
            ['name' => 'Chiang Mai', 'country_id' => 2],
            ['name' => 'Pattaya', 'country_id' => 2],
            ['name' => 'Pak Kret', 'country_id' => 2],
            ['name' => 'Mae Sot', 'country_id' => 2],
            ['name' => 'Surat Thani', 'country_id' => 2],
            ['name' => 'Nakhon Ratchasima', 'country_id' => 2],
            ['name' => 'Pattaya', 'country_id' => 2],
            ['name' => 'Phuket', 'country_id' => 2],
            ['name' => 'Nong Khai', 'country_id' => 2],
            ['name' => 'Chanthaburi', 'country_id' => 2],

        ]);



        // Cambodia
        DB::table('cities')->insert([

            ['name' => 'Phnom_Penh', 'country_id' => 3],
            ['name' => 'Krong Kampong Cham', 'country_id' => 3],
            ['name' => 'Krong Battambang', 'country_id' => 3],
            ['name' => 'Sihanoukville', 'country_id' => 3],
            ['name' => 'Battambang', 'country_id' => 3],
            ['name' => 'Siem Reap', 'country_id' => 3],
            ['name' => 'Takeo', 'country_id' => 3],
            ['name' => 'Sihanoukville', 'country_id' => 3],


        ]);


        // Laos
        DB::table('cities')->insert([

            ['name' => 'Vientiane', 'country_id' => 4],
            ['name' => 'Luang Prabang', 'country_id' => 4],
            ['name' => 'Pakse', 'country_id' => 4],
            ['name' => 'Savannakhet', 'country_id' => 4],

        ]);






    }
}
