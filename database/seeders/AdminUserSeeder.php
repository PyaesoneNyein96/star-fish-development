<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            ["name" => "SEOMyanmar", "email" => "seomyanmar@admin.com", "password" => Hash::make("seomyanmar123")],
        ];
        foreach ($admins as $user) {
            DB::table('users')->insert($user);
        }
    }
}
