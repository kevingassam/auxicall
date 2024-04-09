<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\services as ModelServices; // Assurez-vous d'importer le modèle Services
use Livewire\WithFileUploads;

class Services extends Component
{
    use WithFileUploads;
    public $name, $description, $list_services, $icone;
   
    // Initialise les propriétés
    public function __construct()
    {
        $this->resetInputFields();
    }

    public function render()
    {
        // Utilisez la propriété $list_services
        $this->list_services = $this->getServices();
        return view('livewire.services');
    }

    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'icone' => 'required|image|max:2000|mimes:jpg,png,jpeg'
    ];

    public function create()
    {
        $this->validate();
        $service = new ModelServices();
        $service->name = $this->name;
        $service->icone =  $this->icone->store('services', 'public');
        $service->description = $this->description;
        if ($service->save()) {
            session()->flash('success', 'Service Created Successfully');
            $this->resetInputFields();
        } else {
            session()->flash('error', 'Something went wrong! Please try again later');
        }
    }

    public function edit($id)
    {
        $service = ModelServices::find($id);
        $service->name = $this->name;
        $service->description = $this->description;
        if ($service->save()) {
            session()->flash('success', 'Service Updated Successfully');
        } else {
            session()->flash('error', 'Error Updating Service! Please Try Again Later');
        }
    }

    public function delete($id)
    {
        $service = ModelServices::find($id);
        if ($service) {
            Storage::delete($service->icone);
            $service->delete();
            session()->flash('success', 'Service Deleted Successfully');
        } else {
            session()->flash('error', 'Error Deleting Service! Please Try Again Later');
        }
    }

    public function getServices()
    {
        return ModelServices::Orderby("id","Desc")->get();
    }

    // Réinitialiser les champs de saisie
    private function resetInputFields()
    {
        $this->name = '';
        $this->icone = null;
        $this->description = '';
    }
}
