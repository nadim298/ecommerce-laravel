<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $sender_name="";
     public $sender_message="";

    public function __construct($name,$message)
    {
        $this->sender_name=$name;
        $this->sender_message=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $sender_name=$this->sender_name;
      $sender_message=$this->sender_message;
        return $this->view('email/contactemailmessage',compact('sender_name','sender_message'));
    }
}
