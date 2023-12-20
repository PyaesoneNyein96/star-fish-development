<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $domain = "http://localhost:8000";
        $domain = app('domain');
        $ImageDomain = $domain."/storage/images/";




    }
}
