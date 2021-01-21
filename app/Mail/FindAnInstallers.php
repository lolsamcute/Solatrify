<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FindAnInstallers extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($first_name, $last_name, $email)
    {
         $this->first_name = $first_name;
         $this->last_name = $last_name;
         $this->email = $email;
       
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
        $subject = 'Find An Installer request Successful';
        return $this->markdown('emails.findAnInstaller')
        ->from($address, $name)
       
         ->subject($subject)
        ->with([
            
             'first_name' => $this->first_name,
             'last_name' => $this->last_name,
             'email' => $this->email,
           
           
            
        ]);
    }


}
