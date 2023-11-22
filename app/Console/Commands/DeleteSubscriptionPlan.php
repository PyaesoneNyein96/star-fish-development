<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteSubscriptionPlan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-subscription-plan';

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

        $status = StudentGrade::where('created_at', '<=', now())->get();

    }
}
