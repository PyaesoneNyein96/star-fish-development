<?php

namespace Database\Seeders;

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
        $grades = range(1,12);

        foreach ($grades as $g) {
            DB::table('grades')->insert([
                ['name' => $g,'price' => 10000 + 10000*(int)$g/4 ],
            ]);
        }


        // App versions

        DB::table('versions')->insert([
            [
                'name' => "v1",
                'version_code' => "1.0.0",
                'tag' => "Beta",
                'update_type' => "minor",
                'changelog' => null,
                'OS' => 0,
                'url' => "www.google.com"
            ],
            [
                'name' => "v1",
                'version_code' => "1.0.0",
                'tag' => "Beta",
                'update_type' => "minor",
                'changelog' => null,
                'OS' => 1,
                'url' => "www.youtube.com"
            ]
        ]);



    }
}
