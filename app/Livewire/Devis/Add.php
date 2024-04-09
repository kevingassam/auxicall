<?php

namespace App\Livewire\Devis;

use App\Models\devis;
use Livewire\Component;

class Add extends Component
{

    public  $nom_client,$email_client,$phone_client,$adresse_client,$intitule,$description;
    public function render()
    {
        return view('livewire.devis.add');
    }
    

    protected $rules = [
        'nom_client' =>'required|string',
        'email_client' =>'required|string|email',
        'phone_client' =>'required|string',
        'adresse_client' =>'required|string',
        'intitule' =>'required|string',
        'description' =>'required|string',
    ];

    public function create(){
        
        $this->validate();
        
        $devis = new devis();
        $devis->nom_client = $this->nom_client;
        $devis->email_client = $this->email_client;
        $devis->phone_client = $this->phone_client;
        $devis->adresse_client = $this->adresse_client;
        $devis->titre = $this->intitule;
        $devis->description = $this->description;
        if($devis->save()){
            session()->flash('success', 'Devis Created Successfully');
            //reset form
            $this->dispatch('devisCreated');
            $this->resetInputFields();
        }else{
            session()->flash('error', 'Erreur');
        }
        
    }

    public function resetInputFields(){
        $this->nom_client = '';
        $this->email_client = '';
        $this->phone_client = '';
        $this->adresse_client = '';
        $this->intitule = '';
        $this->description = '';
    }
}
