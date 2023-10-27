<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\GameSeeder;
use Database\Seeders\AudioSeeder;
use Database\Seeders\GradeSeeder;
use Database\Seeders\LessonSeeder;
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

        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(AudioSeeder::class);

        // Unit::factory(10)->create();
    }
}
