<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\GameSeeder;
use Database\Seeders\AudioSeeder;


use Database\Seeders\GradeSeeder;
use Database\Seeders\LessonSeeder;



use Database\Seeders\RewardSeeder;
use Database\Seeders\AnsNQueSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\CategorySeeder;

use Illuminate\Support\Facades\Hash;
use Database\Seeders\BackgroundSeeder;
use Database\Seeders\ConversationSeeder;


use Database\Seeders\StudentGradeSeeder;
use Database\Seeders\GameInstructionSeeder;
use Database\Seeders\SubscriptionPlanSeeder;

use Database\Seeders\PsnSeeder\PSNAnsNQuesSeeder;
use Database\Seeders\PsnSeeder\PSNAnsNQuesG2Seeder;
use Database\Seeders\PsnSeeder\PSNAnsNQuesG3Seeder;
use Database\Seeders\PsnSeeder\PSNAnsNQuesG4Seeder;

use Database\Seeders\AnsNQueSeed2\Grade1\AnsNQueSeeder as Grade1AnsNQueSeeder;
use Database\Seeders\AnsNQueSeed2\Grade2\AnsNQueSeeder as Grade2AnsNQueSeeder;
use Database\Seeders\AnsNQueSeed2\Grade3\AnsNQueSeeder as Grade3AnsNQueSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $domain = app('domain');

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
            'isLocal' => 1,
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
            'isLocal' => 0,
            'token' => "2|CzVjS995QURoAlVl9bLE8RofkbHFTevMaLS62RA22e28071b",
            'isSubscriber' => 0
        ]);

        // Student::factory()->create([
        //     'name' => 'thhs',
        //     'phone' => null,
        //     'email' => "devsophiesoe@gmail.com",
        //     'password' => Hash::make('admin123'),
        //     'age' => 5,
        //     'country_id' => 2,
        //     'city_id' => 5,
        //     'agreeToPolicy' => 1,
        //     'deviceId' => '0961e4e2-1b95-4a49-ae72-d7770dcd8ac9',
        //     'isAuth' => 1,
        //     'isLocal' => 0,
        //     'status' => 1,
        //     'token' => "1|MntwdmQMZc1tQ0Is3oGFEa6WPF1mI5RwbcllKPjE33e80309",
        //     'isSubscriber' => 0
        // ]);

        //      Student::factory()->create([
        //     'name' => 'A soe lay',
        //     'phone' => "+959966300826",
        //     'email' => null,
        //     'password' => Hash::make('admin123'),
        //     'age' => 6,
        //     'country_id' => 1,
        //     'city_id' => 1,
        //     'agreeToPolicy' => 1,
        //     'deviceId' => '5bf93e31-95df-458d-8f38-d315d84598f1',
        //     'isAuth' => 1,
        //     'isLocal' => 0,
        //     'status' => 1,
        //     'token' => "2|AcNBOdyxwj07aB7asSP8D2b5Dg5rZJ8ow6Qkk8S72c1b8e2f",
        //     'isSubscriber' => 0
        // ]);
        Student::factory()->create([
            'name' => 'soe soe lay',
            'phone' => null,
            'email' => "devsophiesoe@gmail.com",
            'password' => Hash::make('admin123'),
            'age' => 7,
            'country_id' => 1,
            'city_id' => 1,
            'agreeToPolicy' => 1,
            // 'deviceId' => '41223357-20de-45bd-8005-6675c14c3d5b',
            'deviceId' => null,
            'isAuth' => 0,
            'isLocal' => 0,
            'profile_picture' => $domain . "/storage/images/profile_pic/avatar-green.png",
            'status' => 1,
            'grade_chosen' => 1,
            'token' => "2|iJEYWEC6FcDsppSIfpu0jaH9EIbD83Hd3hV8XooYa2d7f183",
            'isSubscriber' => 0
        ]);

        Student::factory()->create([
            'name' => 'Wy',
            'phone' => "+959688002017",
            'password' => '$2y$10$uZRQEi/eOHri8AqNJRSDT.hy7DEccp4CwqMR4ipc6cABLQAdyBcmO',
            'age' => 12,
            'country_id' => 1,
            'city_id' => 1,
            'agreeToPolicy' => 1,
            'deviceId' => '705f8af0-f5a2-411b-a2bc-0c66f4c9f623',
            'isAuth' => 0,
            'level' => 1,
            'isLocal' => 1,
            'status' => 0,
            'token' => "3|whm8PLnF2vtxp0kOuooMf064Og4cabMZvRQCnpWTc81fba52",
            'isSubscriber' => 0
        ]);

        Student::factory()->create([
            'name' => 'waian',
            'phone' => "+959766999775",
            'password' => '$2y$10$vvJBDuMDrMU4mHlokQlaJOGKS40C9D7egRGKrmhUT3ZNojT8Hn9qS',
            'age' => 10,
            'grade_chosen' => 1,
            'token' => "5|IZCTuyfVS0JiHq9HO1vJx247tPABYPHPen174U6L0852f6a7",
            'deviceId' => '1d9698c2-9090-4add-b73d-e8fee8564d71',
            'isAuth' => 1,
            'agreeToPolicy' => 1,
            'point' => 110,
            'fixed_point' => 110,
            'level' => 11,
            'status' => 1,
            'isLocal' => 1,
            'question_answer' => 110,
            'isSubscriber' => 0,
            'country_id' => 1,
            'city_id' => 1,
        ]);

        Student::factory()->create([
            'name' => 'Timothy',
            'phone' => "+959777704382",
            'password' => '$2y$10$j5.we.hqbEtnH97UdOePTeKBrm9PE6ch.7nFD2vgol4V7wIBC38BK',
            'age' => 10,
            'grade_chosen' => 1,
            'token' => "4|FykZB6AIrCUqaXX8iHD4SMuLftJfwVrkBbnATgng3dc80536",
            'deviceId' => 'b041a905-15e4-4132-93d7-8643eb27adeb',
            'isAuth' => 1,
            'agreeToPolicy' => 1,
            'point' => 0,
            'fixed_point' => 0,
            'level' => 1,
            'status' => 1,
            'isLocal' => 1,
            'question_answer' => 0,
            'isSubscriber' => 0,
            'country_id' => 1,
            'city_id' => 1,
        ]);


        $this->call(GradeSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(GameSeeder::class);

        $this->call(StudentGradeSeeder::class);
        $this->call(BackgroundSeeder::class);
        $this->call(ConversationSeeder::class);
        $this->call(GameInstructionSeeder::class);



        $this->call(RewardSeeder::class);
        // $this->call(AnsNQueSeeder::class);

        // seeder 2
        $this->call(PSNAnsNQuesSeeder::class);
        $this->call(PSNAnsNQuesG2Seeder::class);



        $this->call(Grade1AnsNQueSeeder::class);
        $this->call(Grade2AnsNQueSeeder::class);
        $this->call(Grade3AnsNQueSeeder::class);


        $this->call(PSNAnsNQuesG3Seeder::class);
        $this->call(PSNAnsNQuesG4Seeder::class);
    }
}
