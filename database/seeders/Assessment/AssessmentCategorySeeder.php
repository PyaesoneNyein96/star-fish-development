<?php

namespace Database\Seeders\Assessment;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "arranging_letter",
            "fill_in_the_blank",
            "multiple_choice"
        ];


        foreach ($categories as $category) {
            DB::table('assessment_categories')->insert([
                ['name' => $category],
            ]);
        }
    }
}
