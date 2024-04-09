<?php

namespace App\Livewire\Devis;

use App\Models\ligne_devis;
use Livewire\Component;

class AddLigne extends Component
{


    public $intitule, $qte, $prix, $devis;


    public function mount($devis)
    {
        $this->devis = $devis;
    }

    public function render()
    {
        return view('livewire.devis.add-ligne');
    }

    public function create()
    {
        $ligne = new ligne_devis();
        $ligne->intitule = $this->intitule;
        $ligne->qte = $this->qte;
        $ligne->prix = $this->prix;
        $ligne->devis_id = $this->devis->id;
        if ($ligne->save()) {
            session()->flash("success", "La ligne a été ajoutée avec succès");
        } else {
            session()->flash("error", "Une erreur est survenue lors de l'ajout de la ligne");
        }

        //reset input
        $this->intitule = '';
        $this->qte = '';
        $this->prix = '';
        $this->dispatch('ligneCreated');
    }
}
