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

            ['name' => 'KBZ-Pay', 'currency' => 'kyats'],
            ['name' => 'WaveMony', 'currency' => 'kyats'],
            ['name' => 'Google-Pay','currency' => 'dollar'],

        ]);

    }
}
