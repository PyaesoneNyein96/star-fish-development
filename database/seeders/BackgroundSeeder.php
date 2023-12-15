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


        // G-1,L-1,U-4

        DB::table('background_images')->insert([
            ['title' => "someTitle", 'round_id' => 1,
            'image' => $ImageDomain."/Backgrounds/"."G1_L1_U4_bg1".".png",],
            ['title' => "someTitle", 'round_id' => 2,
            'image' => $ImageDomain."/Backgrounds/"."G1_L1_U4_bg1".".png",],
            ['title' => "someTitle", 'round_id' => 3,
            'image' => $ImageDomain."/Backgrounds/"."G1_L1_U4_bg1".".png",],
            ['title' => "someTitle", 'round_id' => 4,
            'image' => $ImageDomain."/Backgrounds/"."G1_L1_U4_bg1".".png",],
            ['title' => "someTitle", 'round_id' => 8,
            'image' => $ImageDomain."/Backgrounds/"."G1_L1_U4_bg1".".png",],
            ['title' => "someTitle", 'round_id' => 9,
            'image' => $ImageDomain."/Backgrounds/"."G1_L1_U4_bg1".".png",],
            ['title' => "someTitle", 'round_id' => 10,
            'image' => $ImageDomain."/Backgrounds/"."G1_L1_U4_bg1".".png",],
                        // ============== //
             ['title' => "someTitle", 'round_id' => 5,
            'image' => $ImageDomain."/Backgrounds/"."G1_L1_U4_bg2".".png",],
            ['title' => "someTitle", 'round_id' => 6,
            'image' => $ImageDomain."/Backgrounds/"."G1_L1_U4_bg2".".png",],
            ['title' => "someTitle", 'round_id' => 7,
            'image' => $ImageDomain."/Backgrounds/"."G1_L1_U4_bg2".".png",],
        ]);


        //G-1,L-17,U-2

        // DB::table('background_images')->insert([
        //      ['title' => "someTitle", 'game_id' => 36,
        //     'image' => "G1_L7_U3_background".".png",],
        // ]);



    }
}
