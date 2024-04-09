<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Partenaires extends Component
{
    public $name,$logo,$partenaires;
    
    public function render()
    {
        $this->partenaires = $this->getPartenaires();
        return view('livewire.partenaires');
    }
    
    public function create(){
        $this->validate([
            'name' =>'required|string',
            'logo' =>'required|image|mines:jpg,png,webp,jpeg,gif|max:5000'
        ]);
        $partenaire = new partenaires();
        $partenaire->name = $this->name;
        $partenaire->logo = $this->logo->store('partenaires', 'public');
        if($partenaire->save()){
            session()->flash('success', 'Partenaire ajouté avec succès');
            $this->name = '';
            $this->logo = '';
        }else{
            session()->flash('error', 'Erreur lors de l\'ajout du partenaire');
        }
    }

    public function delete($id){
        $partenaire = partenaires::find($id);
        if($partenaire){
            Storage::delete($partenaire->logo);
            $partenaire->delete();
            session()->flash('success','Le partenaire a été supprimé');
        } else{
            session()->flash('error','Impossible de trouver le partenaire');
        }
    }

    public function getPartenaires(){
        return partenaires::all();
    }


}
