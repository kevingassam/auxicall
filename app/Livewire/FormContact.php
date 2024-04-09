<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use App\Models\contacts;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormContact extends Component
{

    public $name, $sujet, $email, $message, $phone;
    public function render()
    {
        return view('livewire.form-contact');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string',
            'sujet' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'phone' => 'required|string',
        ]);

        $contact = new contacts();
        $contact->name = $this->name;
        $contact->sujet = $this->sujet;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;
        if ($contact->save()) {
            $this->reset();
            Mail::to($this->email)->send(new ContactMail($contact));
            session()->flash('success', 'Votre message a bien été envoyé');
            $this->name = '';
            $this->sujet = '';
            $this->email = '';
            $this->message = '';
            $this->phone = '';
        } else {
            session()->flash('error', 'Une erreur est survenue lors de l\'envoi du message');
        }


    }
}
