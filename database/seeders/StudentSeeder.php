<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domain = app('domain');

        DB::table('students')->insert([

            [
                'name' => 'phone user',
                'phone' => "09795686097",
                'email' => null,
                'password' => Hash::make('admin123'),
                'age' => 5,
                'country_id' => 2,
                'city_id' => 2,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 1,
                'isLocal' => 1,
                'level' => 1,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => 0,
                'token' => "10|CzVjS995QURoAlVl9bLE8RofkbHFTevMaLS62RA22e28071b",
                'isSubscriber' => 0
            ],
            [
                'name' => 'psn',
                'phone' => null,
                'email' => 'pyaesonenyein1996@gmail.com',
                'password' => Hash::make('admin123'),
                'age' => 5,
                'country_id' => 2,
                'city_id' => 2,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 1,
                'isLocal' => 1,
                'level' => 1,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => 0,
                'token' => "1|CzVjS995QURoAlVl9bLE8RofkbHFTevMaLS62RA22e28071b",
                'isSubscriber' => 0
            ],

            [
                'name' => 'soe soe lay',
                'phone' => null,
                'email' => "devsophiesoe@gmail.com",
                'password' => Hash::make('admin123'),
                'age' => 7,
                'country_id' => 1,
                'city_id' => 1,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 0,
                'level' => 1,
                'profile_picture' => $domain . "/storage/images/profile_pic/avatar-green.png",
                'status' => 1,
                'grade_chosen' => 1,
                'token' => "2|iJEYWEC6FcDsppSIfpu0jaH9EIbD83Hd3hV8XooYa2d7f183",
                'isSubscriber' => 0
            ],


            [
                'name' => 'htoo',
                'phone' => null,
                'email' => "kohtooantt@gmail.com",
                'password' => Hash::make('admin123'),
                'age' => 12,
                'country_id' => 2,
                'city_id' => 6,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 1,
                'level' => 1,
                'profile_picture' => null,
                'status' => 0,
                'grade_chosen' => 0,
                'token' => "3|BCINRxFsCDA40TOMhpwIlm9VDooXI5P3P0djYWHw3f38eb38",
                'isSubscriber' => 0
            ]



        ]);
    }
}
