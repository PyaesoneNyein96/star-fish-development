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

    }
}
