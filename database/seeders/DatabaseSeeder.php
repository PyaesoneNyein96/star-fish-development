<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use App\Models\StudentLesson;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\GameSeeder;



use Database\Seeders\GradeSeeder;



use Database\Seeders\LessonSeeder;
use Database\Seeders\RewardSeeder;
use Database\Seeders\AnsNQueSeeder;
use Database\Seeders\CountrySeeder;

use Database\Seeders\StudentSeeder;
use Database\Seeders\CategorySeeder;

use Illuminate\Support\Facades\Hash;

use Database\Seeders\GameInstructionSeeder;
use Database\Seeders\SubscriptionPlanSeeder;
use Database\Seeders\Assessment\AssessmentSeeder;
use Database\Seeders\PsnSeeder\PSNAnsNQuesSeeder;

use Database\Seeders\PsnSeeder\PSNAnsNQuesG2Seeder;
use Database\Seeders\PsnSeeder\PSNAnsNQuesG3Seeder;
use Database\Seeders\PsnSeeder\PSNAnsNQuesG4Seeder;
use Database\Seeders\Assessment\AssessmentCategorySeeder;

use Database\Seeders\AnsNQueSeed2\Grade1\AnsNQueSeeder as Grade1AnsNQueSeeder;
use Database\Seeders\AnsNQueSeed2\Grade2\AnsNQueSeeder as Grade2AnsNQueSeeder;

use Database\Seeders\AnsNQueSeed2\Grade3\AnsNQueSeeder as Grade3AnsNQueSeeder;
use Database\Seeders\AnsNQueSeed2\Grade4\AnsNQueSeeder as Grade4AnsNQueSeeder;
use Database\Seeders\Assessment\Grade1\AssessmentSeeder as Grade1AssessmentSeeder;

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



        // App Versions



        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(SubscriptionPlanSeeder::class);

        $this->call(StudentSeeder::class);

        $this->call(GradeSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(GameSeeder::class);

        $this->call(GameInstructionSeeder::class);



        $this->call(RewardSeeder::class);
        // $this->call(AnsNQueSeeder::class);

        // seeder 2
        $this->call(PSNAnsNQuesSeeder::class);
        $this->call(PSNAnsNQuesG2Seeder::class);



        $this->call(Grade1AnsNQueSeeder::class);
        $this->call(Grade2AnsNQueSeeder::class);
        $this->call(Grade3AnsNQueSeeder::class);
        $this->call(Grade4AnsNQueSeeder::class);


        $this->call(PSNAnsNQuesG3Seeder::class);
        $this->call(PSNAnsNQuesG4Seeder::class);

        // Assessment
        $this->call(AssessmentSeeder::class);
        $this->call(AssessmentCategorySeeder::class);
        $this->call(Grade1AssessmentSeeder::class);




    }
}
