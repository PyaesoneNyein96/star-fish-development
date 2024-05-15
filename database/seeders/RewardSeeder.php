<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // achievement
        DB::table('rewards')->insert([

            ["type" => "achieve", 'name' => 'Necklaces', 'item' => 'item1', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Necklaces', 'item' => 'item2', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Necklaces', 'item' => 'item3', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Necklaces', 'item' => 'item4', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Necklaces', 'item' => 'item5', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Necklaces', 'item' => 'item6', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Necklaces', 'item' => 'item7', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Necklaces', 'item' => 'item8', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Necklaces', 'item' => 'item9', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Necklaces', 'item' => 'item10', 'point' => '30'],

            ["type" => "achieve", 'name' => 'Dinosaurs', 'item' => 'item1', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Dinosaurs', 'item' => 'item2', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Dinosaurs', 'item' => 'item3', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Dinosaurs', 'item' => 'item4', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Dinosaurs', 'item' => 'item5', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Dinosaurs', 'item' => 'item6', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Dinosaurs', 'item' => 'item7', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Dinosaurs', 'item' => 'item8', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Dinosaurs', 'item' => 'item9', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Dinosaurs', 'item' => 'item10', 'point' => '30'],

            ["type" => "achieve", 'name' => 'Butterflies', 'item' => 'item1', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Butterflies', 'item' => 'item2', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Butterflies', 'item' => 'item3', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Butterflies', 'item' => 'item4', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Butterflies', 'item' => 'item5', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Butterflies', 'item' => 'item6', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Butterflies', 'item' => 'item7', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Butterflies', 'item' => 'item8', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Butterflies', 'item' => 'item9', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Butterflies', 'item' => 'item10', 'point' => '30'],

            ["type" => "achieve", 'name' => 'Birds', 'item' => 'item1', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Birds', 'item' => 'item2', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Birds', 'item' => 'item3', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Birds', 'item' => 'item4', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Birds', 'item' => 'item5', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Birds', 'item' => 'item6', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Birds', 'item' => 'item7', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Birds', 'item' => 'item8', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Birds', 'item' => 'item9', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Birds', 'item' => 'item10 ', 'point' => '30'],

            ["type" => "achieve", 'name' => 'Pets', 'item' => 'item1', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Pets', 'item' => 'item2', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Pets', 'item' => 'item3', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Pets', 'item' => 'item4', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Pets', 'item' => 'item5', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Pets', 'item' => 'item6', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Pets', 'item' => 'item7', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Pets', 'item' => 'item8', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Pets', 'item' => 'item9', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Pets', 'item' => 'item10', 'point' => '30'],

            ["type" => "achieve", 'name' => 'Vehicles', 'item' => 'item1', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Vehicles', 'item' => 'item2', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Vehicles', 'item' => 'item3', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Vehicles', 'item' => 'item4', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Vehicles', 'item' => 'item5', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Vehicles', 'item' => 'item6', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Vehicles', 'item' => 'item7', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Vehicles', 'item' => 'item8', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Vehicles', 'item' => 'item9', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Vehicles', 'item' => 'item10', 'point' => '30'],

            ["type" => "achieve", 'name' => 'Crowns', 'item' => 'item1', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Crowns', 'item' => 'item2', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Crowns', 'item' => 'item3', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Crowns', 'item' => 'item4', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Crowns', 'item' => 'item5', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Crowns', 'item' => 'item6', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Crowns', 'item' => 'item7', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Crowns', 'item' => 'item8', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Crowns', 'item' => 'item9', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Crowns', 'item' => 'item10', 'point' => '30'],

            ["type" => "achieve", 'name' => 'ice-cream', 'item' => 'item1', 'point' => '30'],
            ["type" => "achieve", 'name' => 'ice-cream', 'item' => 'item2', 'point' => '30'],
            ["type" => "achieve", 'name' => 'ice-cream', 'item' => 'item3', 'point' => '30'],
            ["type" => "achieve", 'name' => 'ice-cream', 'item' => 'item4', 'point' => '30'],
            ["type" => "achieve", 'name' => 'ice-cream', 'item' => 'item5', 'point' => '30'],
            ["type" => "achieve", 'name' => 'ice-cream', 'item' => 'item6', 'point' => '30'],
            ["type" => "achieve", 'name' => 'ice-cream', 'item' => 'item7', 'point' => '30'],
            ["type" => "achieve", 'name' => 'ice-cream', 'item' => 'item8', 'point' => '30'],
            ["type" => "achieve", 'name' => 'ice-cream', 'item' => 'item9', 'point' => '30'],
            ["type" => "achieve", 'name' => 'ice-cream', 'item' => 'item10', 'point' => '30'],

            ["type" => "achieve", 'name' => 'Cakes', 'item' => 'item1', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Cakes', 'item' => 'item2', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Cakes', 'item' => 'item3', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Cakes', 'item' => 'item4', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Cakes', 'item' => 'item5', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Cakes', 'item' => 'item6', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Cakes', 'item' => 'item7', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Cakes', 'item' => 'item8', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Cakes', 'item' => 'item9', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Cakes', 'item' => 'item10', 'point' => '30'],

            ["type" => "achieve", 'name' => 'Tools', 'item' => 'item1', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Tools', 'item' => 'item2', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Tools', 'item' => 'item3', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Tools', 'item' => 'item4', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Tools', 'item' => 'item5', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Tools', 'item' => 'item6', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Tools', 'item' => 'item7', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Tools', 'item' => 'item8', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Tools', 'item' => 'item9', 'point' => '30'],
            ["type" => "achieve", 'name' => 'Tools', 'item' => 'item10', 'point' => '30'],
        ]);


        // profile
        DB::table('rewards')->insert([

            ["type" => "profile", 'name' => 'Princess', 'item' => 'item1', 'point' => '50'],
            ["type" => "profile", 'name' => 'Princess', 'item' => 'item2', 'point' => '50'],
            ["type" => "profile", 'name' => 'Princess', 'item' => 'item3', 'point' => '50'],
            ["type" => "profile", 'name' => 'Princess', 'item' => 'item4', 'point' => '50'],
            ["type" => "profile", 'name' => 'Princess', 'item' => 'item5', 'point' => '50'],
            ["type" => "profile", 'name' => 'Princess', 'item' => 'item6', 'point' => '50'],

            ["type" => "profile", 'name' => 'Super Hero', 'item' => 'item1', 'point' => '100'],
            ["type" => "profile", 'name' => 'Super Hero', 'item' => 'item2', 'point' => '100'],
            ["type" => "profile", 'name' => 'Super Hero', 'item' => 'item3', 'point' => '100'],
            ["type" => "profile", 'name' => 'Super Hero', 'item' => 'item4', 'point' => '100'],
            ["type" => "profile", 'name' => 'Super Hero', 'item' => 'item5', 'point' => '100'],
            ["type" => "profile", 'name' => 'Super Hero', 'item' => 'item6', 'point' => '100'],

            ["type" => "profile", 'name' => 'Flowers', 'item' => 'item1', 'point' => '150'],
            ["type" => "profile", 'name' => 'Flowers', 'item' => 'item2', 'point' => '150'],
            ["type" => "profile", 'name' => 'Flowers', 'item' => 'item3', 'point' => '150'],
            ["type" => "profile", 'name' => 'Flowers', 'item' => 'item4', 'point' => '150'],
            ["type" => "profile", 'name' => 'Flowers', 'item' => 'item5', 'point' => '150'],
            ["type" => "profile", 'name' => 'Flowers', 'item' => 'item6', 'point' => '150'],

            ["type" => "profile", 'name' => 'House', 'item' => 'item1', 'point' => '200'],
            ["type" => "profile", 'name' => 'House', 'item' => 'item2', 'point' => '200'],
            ["type" => "profile", 'name' => 'House', 'item' => 'item3', 'point' => '200'],
            ["type" => "profile", 'name' => 'House', 'item' => 'item4', 'point' => '200'],
            ["type" => "profile", 'name' => 'House', 'item' => 'item5', 'point' => '200'],
            ["type" => "profile", 'name' => 'House', 'item' => 'item6', 'point' => '200'],

            ["type" => "profile", 'name' => 'Animals', 'item' => 'item1', 'point' => '250'],
            ["type" => "profile", 'name' => 'Animals', 'item' => 'item2', 'point' => '250'],
            ["type" => "profile", 'name' => 'Animals', 'item' => 'item3', 'point' => '250'],
            ["type" => "profile", 'name' => 'Animals', 'item' => 'item4', 'point' => '250'],
            ["type" => "profile", 'name' => 'Animals', 'item' => 'item5', 'point' => '250'],
            ["type" => "profile", 'name' => 'Animals', 'item' => 'item6', 'point' => '250'],

        ]);
    }
}
