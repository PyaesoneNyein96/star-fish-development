<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\GameSeeder;
use Database\Seeders\AudioSeeder;
use Database\Seeders\GradeSeeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\LessonSeeder;
use Database\Seeders\RewardSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\SubscriptionPlanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Student::factory(20)->create();
        Student::factory(20)->create();

        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(RewardSeeder::class);
    }
}
