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

       for ($i=1; $i <= $g1_l1_u4 ; $i++) {
            DB::table('rounds')->insert([
                ['round' => $i,'game_id' => 4],
            ]);
       }
    //  G1_L1_U4


        $g1_l1_u5 = 3;

        for ($i= 1; $i <= $g1_l1_u5; $i++) {
            DB::table('rounds')->insert([
                ['round' => $i, 'game_id' => 5]
            ]);
        }

        $g1_l2_u4 =4;

        for ($i= 1; $i <= $g1_l2_u4 ; $i++) {
            DB::table('rounds')->insert([
                ['round' => $i, 'game_id' => 9]
            ]);
        }

        $g1_l2_u10 =3;

        for ($i=0; $i < $g1_l2_u10 ; $i++) {
            DB::table('rounds')->insert([
                ['round' => $i, 'game_id' => 10]
            ]);
        }

        $g1_l2_u11 =5;

        for ($i=0; $i < $g1_l2_u11 ; $i++) {
            DB::table('rounds')->insert([
                ['round' => $i, 'game_id' => 11]
            ]);
        }




    }
}
