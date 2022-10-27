<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;   
    public $mess;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $mess)
    {
        $this->name= $name;
        $this->email= $email;        
        $this->mess= $mess;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.message')->subject("New message for SpectrumWise");

    }
}