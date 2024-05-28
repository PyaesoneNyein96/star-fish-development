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
                'name' => 'psn',
                'phone' => null,
                'email' => 'pyaesonenyein1996@gmail.com',
                'password' => Hash::make('admin123'),
                'age' => 5,
                'country_id' => 2,
                'city_id' => 2,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 0,
                'level' => 1,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 0,
                'token' => "1|CzVjS995QURoAlVl9bLE8RofkbHFTevMaLS62RA22e28071b",
                'isSubscriber' => 0
            ],

            [
                'name' => 'ko nyain maung',
                'phone' => null,
                'email' => "+959795686096",
                'password' => Hash::make('admin123'),
                'age' => 7,
                'country_id' => 1,
                'city_id' => 1,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 0,
                'level' => 1,
                'profile_picture' => $domain . "/storage/images/Achievement/Profiles/Princess/item1.png",
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 0,
                'token' => "10|CzVjS995QURoAlVl9bLE8RofkbHFTevMaLS62RA22e28071b",
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
                'profile_picture' => $domain . "/storage/images/Achievement/Profiles/Princess/item2.png",
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 0,
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
                'isLocal' => 0,
                'level' => 1,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 0,
                'token' => "3|BCINRxFsCDA40TOMhpwIlm9VDooXI5P3P0djYWHw3f38eb38",
                'isSubscriber' => 0
            ],

            [
                'name' => 'zwe',
                'phone' => "+959258773560",
                'email' => null,
                'password' => Hash::make('admin123'),
                'age' => 7,
                'country_id' => 1,
                'city_id' => 1,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 1,
                'level' => 1,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 0,
                'token' => "1|xX0ZvemvpMedgbhDOCcOqICgKg0YTjpfv2KnV1Traa776425",
                'isSubscriber' => 0
            ],
            [
                'name' => 'Zwe 2',
                'phone' => "+959894156850",
                'email' => null,
                'password' => Hash::make('admin123'),
                'age' => 12,
                'country_id' => 1,
                'city_id' => 1,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 1,
                'level' => 1,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 0,
                'token' => "10|xX0ZvemvpMedgbhDOCcOqICgKg0YTjpfv2KnV1Traa776425",
                'isSubscriber' => 0
            ],


            [
                'name' => 'yma',
                'phone' => "+959777241550",
                'email' => null,
                'password' => Hash::make('admin123'),
                'age' => 7,
                'country_id' => 1,
                'city_id' => 1,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 1,
                'level' => 1,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 0,
                'token' => "1|5LD1Q8NKmh8Ldnqg5048FybCWlnxLFQGWlixfwNxcf197166",
                'isSubscriber' => 0
            ],
            [
                'name' => 'yi',
                'phone' => "+959979531317",
                'email' => null,
                'password' => Hash::make('admin123'),
                'age' => 6,
                'country_id' => 1,
                'city_id' => 1,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 1,
                'level' => 1,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 0,
                'token' => "1|EOqY20EPCUXVqArlssBGQGM2ifDLVGEdF5GeEn7X4341e07a",
                'isSubscriber' => 0
            ],
            [
                'name' => 'mon',
                'phone' => null,
                'email' => "yimonaye997@gmail.com",
                'password' => Hash::make('admin123'),
                'age' => 6,
                'country_id' => 2,
                'city_id' => 5,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 0,
                'level' => 1,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 300,
                'token' => "1|kOmYAEqfpoVE3mFQa5DeDBq93S7N6Pp3peZl5bBId1aa4575",
                'isSubscriber' => 0
            ]



        ]);


        DB::table('students')->insert([

            [
                'name' => 'Dana',
                'phone' => '+959974373370',
                'email' => null,
                'password' => Hash::make('admin123'),
                'age' => 25,
                'country_id' => 1,
                'city_id' => 1,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 1,
                'level' => 5,
                'point' => 52,
                'fixed_point' => 52,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => 3,
                'question_answer' => 200,
                'token' => "1|4YsGl3rYqeZa7QCtRWijHzMbJ3V53stqpXoZRQ8d0c9baf79",
                'isSubscriber' => 0
            ],
            [
                'name' => 'Tpo',
                'phone' => "+959973659244",
                'email' => null,
                'password' => Hash::make('admin123'),
                'age' => 27,
                'country_id' => 1,
                'city_id' => 1,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 1,
                'level' => 5,
                'point' => 52,
                'fixed_point' => 52,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => 4,
                'question_answer' => 200,
                'token' => "2|4gOjWmThLCiMfZNCAkv9V4drEz5yghQ9z6HUzKfi33c91233",
                'isSubscriber' => 0
            ],


            [
                'name' => 'Admin 2',
                'phone' => "+959799839053",
                'email' => null,
                'password' => Hash::make('admin123'),
                'age' => 10,
                'country_id' => 1,
                'city_id' => 1,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 1,
                'level' => 5,
                'point' => 52,
                'fixed_point' => 52,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 200,
                'token' => "91|CzVjS995QURoAlVl9bLE8RofkbHFTevMaLS62RA22e28071b",
                'isSubscriber' => 0
            ],

            [
                'name' => 'Daniel',
                'phone' => "+959782006953",
                'email' => null,
                'password' => Hash::make('admin123'),
                'age' => 10,
                'country_id' => 1,
                'city_id' => 1,
                'agreeToPolicy' => 1,
                'deviceId' => null,
                'isAuth' => 0,
                'isLocal' => 1,
                'level' => 5,
                'point' => 52,
                'fixed_point' => 52,
                'profile_picture' => null,
                'status' => 1,
                'grade_chosen' => null,
                'question_answer' => 200,
                'token' => "90|CzVjS995QURoAlVl9bLE8RofkbHFTevMaLS62RA22e28071b",
                'isSubscriber' => 0
            ],


        ]);
    }
}
