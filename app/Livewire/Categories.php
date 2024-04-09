<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\categories as Modelcategories;
class Categories extends Component
{
    public $name, $description,$categories;

    public function render()
    {
        $this->categories = $this->getCategories();
        return view('livewire.categories');
    }

    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
    ];


    public function create()
    {
        $this->validate();
        $categorie = new Modelcategories();
        $categorie->name = $this->name;
        $categorie->description = $this->description;
        if ($categorie->save()) {
            $this->reset();
            session()->flash('success', 'Categorie crée avec succès');
        } else {
            session()->flash('error', 'Erreur lors de la création de la categorie');
        }

    }

    public function delete($id)
    {
        $categorie = Modelcategories::find($id);
        if ($categorie->delete()) {
            session()->flash('success', 'Categorie supprimée avec succès');
        } else {
            session()->flash('error', 'Erreur lors de la suppression de la categorie');
        }
    }


    public function edit($id)
    {
        $categorie = Modelcategories::find($id);
        $categorie->name = $this->name;
        $categorie->description = $this->description;
        if ($categorie->save()) {
            $this->reset();
            session()->flash('success', 'Categorie modifiée avec succès');
        } else {
            session()->flash('error', 'Erreur lors de la modification de la categorie');
        }
    }



    public function getCategories(){
        return Modelcategories::all();
    }
}
