<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\GameSeeder;
use Database\Seeders\ItemSeeder;
use Database\Seeders\SongSeeder;
use Database\Seeders\AudioSeeder;
use Database\Seeders\GradeSeeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\RoundSeeder;
use Database\Seeders\VideoSeeder;
use Database\Seeders\AnswerSeeder;
use Database\Seeders\LessonSeeder;
use Database\Seeders\RewardSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\SubUnitSeeder;
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
        $this->call(SubscriptionPlanSeeder::class);

        Student::factory()->create([
            'name' => 'Global User',
            'email' => 'global@example.com',
            'password' => Hash::make('admin123'),
            'age' => 5,
            'country_id' => 2,
            'city_id' => 2,
            'agreeToPolicy' => 1,
            'deviceId' => 'globalDevice',
            'isAuth' => 1,
            'status' => 1,
            'token' => "1|CzVjS995QURoAlVl9bLE8RofkbHFTevMaLS62RA22e28071b",
            'isSubscriber' => 0
        ]);

        Student::factory()->create([
            'name' => 'Local User',
            'phone' => '+959795686096',
            'email' => Null,
            'password' => Hash::make('admin123'),
            'age' => 5,
            'country_id' => 2,
            'city_id' => 2,
            'agreeToPolicy' => 1,
            'deviceId' => 'localDevice',
            'isAuth' => 1,
            'status' => 1,
            'token' => "2|CzVjS995QURoAlVl9bLE8RofkbHFTevMaLS62RA22e28071b",
            'isSubscriber' => 0
        ]);

         Student::factory()->create([
            'name' => 'thhs',
            'phone' => null,
            'email' => "devsophiesoe@gmail.com",
            'password' => Hash::make('admin123'),
            'age' => 5,
            'country_id' => 2,
            'city_id' => 5,
            'agreeToPolicy' => 1,
            'deviceId' => '0961e4e2-1b95-4a49-ae72-d7770dcd8ac9',
            'isAuth' => 1,
            'isLocal' => 0,
            'status' => 1,
            'token' => "1|MntwdmQMZc1tQ0Is3oGFEa6WPF1mI5RwbcllKPjE33e80309",
            'isSubscriber' => 0
        ]);


        $this->call(GradeSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(GameSeeder::class);
        $this->call(SubUnitSeeder::class);
        $this->call(RoundSeeder::class);
        $this->call(StudentGradeSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(BackgroundSeeder::class);
        $this->call(ConversationSeeder::class);
        $this->call(GameInstructionSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(SongSeeder::class);


        $this->call(RewardSeeder::class);
    }
}
