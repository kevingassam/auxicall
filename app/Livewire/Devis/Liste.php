<?php

namespace App\Livewire\Devis;

use App\Models\devis;
use Livewire\Component;

class Liste extends Component
{
    protected $listeners = ['devisCreated' => 'getDevis'];
    public $devis;
    public function render()
    {
        $this->devis = $this->getDevis();
        return view('livewire.devis.liste');
    }


    public function getDevis(){
        return devis::all();
    }

    public function deleteDevis($id){
        if ($id) {
            $devis = devis::find($id);
            if ($devis) {
                $devis->delete();
                session()->flash('success', 'Devis supprimé');
            } else {
                session()->flash('error', 'Devis non trouvé');
            }
        }
    }
}
