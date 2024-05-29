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
                    'local_price' => 1,
                    'global_price' => 2,
                    'status' => $key  < 4 ? 1 : 0
                ],
            ]);
        }






    }
}
