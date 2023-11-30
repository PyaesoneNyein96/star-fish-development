<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $g1_l1_u4 = 10;

        for ($i = 1; $i <= $g1_l1_u4; $i++) {
            DB::table('rounds')->insert([
                ['round' => $i, 'game_id' => 4],
            ]);
        }
        //  G1_L1_U4


        $g1_l1_u5_1 = 5;


        for ($i = 1; $i <= $g1_l1_u5_1; $i++) {
            DB::table('rounds')->insert([
                ['round' => $i, 'game_id' => 5]
            ]);
        }


        $g1_l2_u4 = 4;

        for ($i = 1; $i <= $g1_l2_u4; $i++) {
            DB::table('rounds')->insert([
                ['round' => $i, 'game_id' => 9]
            ]);
        }

        $g1_l2_u10 = 3;

        for ($i = 1; $i < $g1_l2_u10; $i++) {
            DB::table('rounds')->insert([
                ['round' => $i, 'game_id' => 10]
            ]);
        }

        $g1_l2_u11 = 5;

        for ($i = 1; $i < $g1_l2_u11; $i++) {
            DB::table('rounds')->insert([
                ['round' => $i, 'game_id' => 11]
            ]);
        }

        $g1_l12_u6_sub_1 = 8;
        $g1_l12_u6_sub_2 = 8;

        for ($i = 0; $i < $g1_l12_u6_sub_1; $i++) {
            DB::table('rounds')->insert([
                ['round' => (int)$i + 1, 'game_id' => 17]
            ]);
        }

        for ($i = 0; $i < $g1_l12_u6_sub_2; $i++) {
            DB::table('rounds')->insert([
                ['round' => (int)$i + 1, 'game_id' => 18]
            ]);
        }
    }
}
