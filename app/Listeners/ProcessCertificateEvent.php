<?php

namespace App\Listeners;

use App\Events\CertificateEvent;
use App\Http\Controllers\API\Assessment\AssessmentController;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProcessCertificateEvent
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CertificateEvent $event): void
    {
        if ($event->tableName === 'certificates') {
            $controller = new AssessmentController();
            $controller->makeCertificate($event->data);
        }
    }
}
