<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



    public function run(): void
    {

        $categories = [
            'Video player',
            'Reading carousel',
            'Reading diagram',
            'Reading passage',
            'Reading two columns',
            'Reading conversation',
            'Drag n drop and letter',
            'Drag n drop and sentence',
            'Drag n drop and columns',
            'Drag n drop and pics',
            'Matching columns',
            'Speaking and recording',
            'Rearrange a sentence',
            'Listening and record speaking',
            'Listening and choosing pics',
            'Listening and choosing clouds',
            'Listening and choosing answer',
            'Listening and search items',
            'MCQ Grammar',
            'MCQ T/F Instruction',
            'MCQ T/F Grammar',
            'MCQ Sentence',
            'Letter tracing',

        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                ['name' => $category, 'type' => null ],
            ]);

        }
    }
}
