<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConsultaLectores extends Mailable
{
    use Queueable, SerializesModels;


    public $message;
    public  $name;
    public   $email;
    public  $subject;

    public function __construct($name,$message, $email, $subject)
    {

        $this->message =$message;
        $this->name =$name;
        $this->email =$email;
        $this->subject =$subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.consultas');
    }
}
