<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('subscriptions')->insert([

            // ['name' => 'Google Pay', 'price' => 35, 'expiry' => "90"],
            // ['name' => 'K-pay' , 'price' => 40000 ,'expiry' => "90"],
            // ['name' => 'WaveMony', 'price' => 40000, 'expiry' => "90"],

            ['name' => 'Google-Pay','currency' => 'dollar'],
            ['name' => 'KBZ-Pay', 'currency' => 'kyats'],
            ['name' => 'WaveMony', 'currency' => 'kyats'],

        ]);

    }
}
