<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data ;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(Request $request)
    { 
        $this->data = $request;
       //Dans l'instance courante de data il y a la requete
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$this: instance courante
        return $this->from('admin-mail@gmail.com') // sender(emmeteur)
                    ->subject('Nouveau message Art Danse') //objet du mail
                    ->view('emails.mailMessage'); //vue mailMessage du dossier emails
    }
}
