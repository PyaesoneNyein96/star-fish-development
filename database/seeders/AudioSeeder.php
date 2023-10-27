<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('audio')->insert([
            ['title' => 'A' ,'path' => null],
            ['title' => 'B' ,'path' => null],
            ['title' => 'C' ,'path' => null],
            ['title' => 'D' ,'path' => null],
            ['title' => 'E' ,'path' => null],
            ['title' => 'F' ,'path' => null],
            ['title' => 'G' ,'path' => null],
            ['title' => 'H' ,'path' => null],
        ]);
    }
}
