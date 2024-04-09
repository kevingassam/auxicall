<?php

namespace App\Livewire;

use App\Models\categories;
use Livewire\Component;
use App\Models\projets as ModelProjets;


class Projets extends Component
{
  
    public  $list_projets;

    // Initialise les propriétés
    public function __construct()
    {
       
    }

    public function render()
    {
        // Utilisez la propriété $list_projets
        $this->list_projets = $this->getprojets();
        return view('livewire.projets');
    }

  

    public function edit($id)
    {
        $projet = ModelProjets::find($id);
        $projet->name = $this->name;
        $projet->description = $this->description;
        if ($projet->save()) {
            session()->flash('success', 'projet Updated Successfully');
        } else {
            session()->flash('error', 'Error Updating projet! Please Try Again Later');
        }
    }

    public function delete($id)
    {
        if (ModelProjets::destroy($id)) {
            session()->flash('success', 'projet Deleted Successfully');
        } else {
            session()->flash('error', 'Error Deleting projet! Please Try Again Later');
        }
    }

    public function getprojets()
    {
        return ModelProjets::Orderby("id", "Desc")->get();
    }

    // Réinitialiser les champs de saisie
 
}
