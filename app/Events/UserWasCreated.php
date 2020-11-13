<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserWasCreated
{
    use Dispatchable,  SerializesModels;
    public $message;
    public  $name;
    public   $email;
    public  $subject;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message,$name, $email,$subject)
    {
        $this->message =$message;
        $this->name =$name;
        $this->email =$email;
        $this->subject =$subject;
    }


}
