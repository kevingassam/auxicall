<?php

namespace App\Livewire\Devis;

use App\Models\ligne_devis;
use Livewire\Component;

class ListeLigne extends Component
{
    protected $listeners = ['ligneCreated' => 'getLignes'];
    public $devis,$list;
    public function mount($devis)
    {
        $this->devis = $devis;
    }

    public function render()
    {
        $this->list = $this->getLignes();
        return view('livewire.devis.liste-ligne');
    }

    public function getLignes(){
        return ligne_devis::where("devis_id",$this->devis->id)->get();
    }

    public function delete($id){
        ligne_devis::find($id)->delete();
    }
}
