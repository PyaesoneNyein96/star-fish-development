<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrationOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     *
     *
     */



    protected $signature = 'app:migration-order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
         $migrations = [
                        // '2020_04_18_005024_create_users_types.php',
                        // '2014_10_12_000000_create_users_table.php',
                        // '2014_10_12_100000_create_password_reset_tokens_table.php',
                        // '2019_08_19_000000_create_failed_jobs_table.php',
                        // '2019_12_14_000001_create_personal_access_tokens_table.php',
                        // '2023_10_15_113831_create_subscription_plans_table.php',
                        // '2023_10_16_141309_create_global_students_table.php',
                        // '2023_10_16_144623_create_local_students_table.php',
                        // '2023_10_16_150441_create_countries_table.php',
                        // '2023_10_16_153201_create_cities_table.php',
                        // '2023_10_16_163058_create_grades_table.php',
                        // '.php',

                    ];


          foreach($migrations as $migration)
        {
           $basePath = 'database/migrations/';
           $migrationName = trim($migration);
           $path = $basePath.$migrationName;
           $this->call('migrate:refresh', [
            '--path' => $path ,
           ]);
        }

    }
}
