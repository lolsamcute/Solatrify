<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contacts extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id, $name, $email, $subject, $number, $message)
    {
        $this->id = $id;
         $this->name = $name;
         $this->email = $email;
         $this->subject = $subject;
          $this->number = $number;
           $this->message = $message;
       
    }

    
    
    
     /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $address = 'no-reply@solatrify.com';
        $name = 'Solatrify | The Solar Distribution Company';
        $subject = 'Contact Us';
        return $this->markdown('emails.contacts')
        ->from($address, $name)
       
         ->subject($subject)
        ->with([
            
             'id' => $this->id,
             'name' => $this->name,
             'email' => $this->email,
               'subject' => $this->subject,
                 'number' => $this->number,
                   'message' => $this->message,
                   
            
        ]);
    }


}
