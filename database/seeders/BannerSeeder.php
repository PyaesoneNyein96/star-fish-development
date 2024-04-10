<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $domain = app('domain');
        $domain = "http://localhost:8000/";
        $path = $domain."storage/images/Banner/";

        $banners = [
            ['name' => "banner-1", 'isLocal' => 1],
            ['name' => "banner-2", 'isLocal' => 1],
            ['name' => "banner-3", 'isLocal' => 1],
            ['name' => "banner-4", 'isLocal' => 1],
        ];


        foreach ($banners as $key => $banner) {
            DB::table('banners')->insert([
                    [
                        'name' => $banner['name'],
                        'isLocal' => $banner['isLocal'],
                        'image_path' => $path.$banner['name'].".png",
                        'url' => null,
                    ],
            ]);
        }
    }
}
