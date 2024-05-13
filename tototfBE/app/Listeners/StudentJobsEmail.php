<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\sendmail;

class StudentJobsEmail
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
    public function handle(object $event): void
    {

        $data = [
            'greeting' => "hello",
            'subject' => "Jobs Creation Notification",
            'line1' => 'Some student has submit a job'
        ];
        $event->user->notify(new sendmail($data));
    }
}
