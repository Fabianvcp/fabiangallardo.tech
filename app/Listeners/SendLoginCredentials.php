<?php

namespace App\Listeners;

use App\Events\UserWasCreated;
use App\Mail\ConsultaLectores;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendLoginCredentials
{
    public $message;
    public  $name;
    public   $email;
    public  $subject;

    /**
     * Handle the event.
     *
     * @param  UserWasCreated  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
        Mail::to('gallardofabianvcpz@gmail.com')->queue(
            new ConsultaLectores($event->name,$event->message, $event->email, $event->subject)
        );
    }
}
