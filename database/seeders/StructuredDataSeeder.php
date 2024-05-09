<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StructuredDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Login Bonus seeder

        $loginRange = [3,5,7,10,12,15,20,22];

        foreach ($loginRange as $k => $l) {
            DB::table('login_bonuses')->insert([
                'days' => $l,
                'point' => $l,
            ]);
        }


    }
}
