<?php

namespace App\Livewire;

use App\Models\partenaires;
use Livewire\Component;

class ListePartenaire extends Component
{
    public function render()
    {
        return view('livewire.liste-partenaire')->with("partenaires",partenaires::all());
    }
}
