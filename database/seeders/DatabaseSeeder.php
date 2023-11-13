<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\GameSeeder;
use Database\Seeders\ItemSeeder;
use Database\Seeders\AudioSeeder;
use Database\Seeders\GradeSeeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\RoundSeeder;
use Database\Seeders\AnswerSeeder;
use Database\Seeders\LessonSeeder;
use Database\Seeders\RewardSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\QuestionSeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\BackgroundSeeder;
use Database\Seeders\ConversationSeeder;
use Database\Seeders\StudentGradeSeeder;
use Database\Seeders\GameInstructionSeeder;
use Database\Seeders\SubscriptionPlanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();



        // Student::factory(20)->create();


        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);

        Student::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('admin123'),
            'age' => 5,
            'country_id' => 2,
            'city_id' => 2,
            'agreeToPolicy' => 1,
            'deviceId' => 'testDevice',
            'isAuth' => 1,
            'token' => "1|CzVjS995QURoAlVl9bLE8RofkbHFTevMaLS62RA22e28071b"
        ]);



        $this->call(GradeSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(GameSeeder::class);
        $this->call(RoundSeeder::class);
        $this->call(StudentGradeSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(BackgroundSeeder::class);
        $this->call(ConversationSeeder::class);
        $this->call(GameInstructionSeeder::class);


        // $this->call(RewardSeeder::class);
    }
}
