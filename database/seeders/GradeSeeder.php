<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = range(1, 12);

        foreach ($grades as $key => $g) {
            DB::table('grades')->insert([
                [
                    'name' => $g,
                    'local_price' => 100 + 10 * (int)$g / 4,
                    'global_price' => 20 + 4 * (int)$g / 4,
                    'status' => $key  <= 4 ? 1 : 0
                ],
            ]);
        }


        // App versions

        DB::table('versions')->insert([
            [
                'version' => "1.0.0",
                'force_update' => 1,
                'under_maintenance' => 0,
                'OS' => 0,
                'url' => "https://apps.apple.com/<country>/app/star/12345",
                'created_at' => Carbon::now()
            ],
            [
                'version' => "1.0.0",
                'force_update' => 1,
                'under_maintenance' => 0,
                'OS' => 1,
                'url' => "http://play.google.com/store/apps/details?id=star123",
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
