<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationNotification extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($full_name, $email, $password)
    {
         $this->full_name = $full_name;
         $this->email = $email;
        $this->password = $password;
       
       
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
        $subject = 'Welcome To Solatrify';
        return $this->markdown('emails.registrationNotification')
        ->from($address, $name)
       
         ->subject($subject)
        ->with([
            
             'full_name' => $this->full_name,
             'email' => $this->email,
            'password' => $this->password,
           
            
        ]);
    }


}
