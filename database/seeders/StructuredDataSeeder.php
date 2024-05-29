<?php

namespace Database\Seeders;

use Carbon\Carbon;
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

        // $loginRange = [3,5,7,10,12,15,20,22];
        $leapYear = Carbon::now()->year % 4 == 0;
        $loginRange = [7,15,30,60,90,120,180, $leapYear ? 366 : 365];

        foreach ($loginRange as $k => $l) {
            DB::table('login_bonuses')->insert([
                'days' => $l,
                'point' => $l,
            ]);
        }



        // App versions

        DB::table('versions')->insert([
            [
                'version' => "1.0.0",
                'force_update' => 0,
                'under_maintenance' => 0,
                'OS' => 0,
                'url' => "https://play.google.com/store/apps/details?id=com.StarFish.LittleStars",
                'created_at' => Carbon::now()
            ],
            [
                'version' => "1.0.0",
                'force_update' => 0,
                'under_maintenance' => 0,
                'OS' => 1,
                'url' => "https://apps.apple.com/star/details?id=com.StarFish.LittleStars",
                'created_at' => Carbon::now()
            ]
        ]);



///////////////
    }
}
