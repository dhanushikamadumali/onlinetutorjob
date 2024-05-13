<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\sendmail;

class UserRegisterEmail
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
            'subject' => "User Registeration Notification",
            'line1' => 'Some User has register'
        ];
        $event->user->notify(new sendmail($data));
    }
}
