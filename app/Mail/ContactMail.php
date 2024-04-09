<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $contact;
    public function __construct($contact)
    {
        $this->contact = $contact;
    }


    public function build()
    {
        return $this->to($this->contact->email)
        ->view('mail.ContactMail')
        ->subject('Formulaire de contact - KG CODE+')
        ->from("no-reply@kevin-gassam.com", "Formulaire de contact - KG CODE+")
        ->with([
            'contact' => $this->contact
        ]);

    }
}
