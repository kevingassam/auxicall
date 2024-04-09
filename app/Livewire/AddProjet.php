<?php

namespace App\Livewire;

use App\Models\categories;
use App\Models\projets;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProjet extends Component
{
    public $categories, $name, $description, $photo, $photos, $categorie_id, $url;
    use WithFileUploads;
    public function render()
    {
        $this->categories = categories::all(["id", "name"]);
        return view('livewire.add-projet');
    }

    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'photo' => 'required|image|max:4000|mimes:png,jpg,jpeg,gif',
        'categorie_id' => 'required|integer|exists:categories,id',
        'url' => 'nullable|url',
        'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    public function create()
    {
        $this->validate();

        $photoJson = [];
        if ($this->photos) {
            foreach ($this->photos->file('photos') as $image) {
                $imageName = $image->store('projets', 'public');
                $photoJson[] = $imageName;
            }
        }

        $projet = new projets();
        $projet->titre = $this->name;
        $projet->description = $this->description;
        $projet->url = $this->url;
        $projet->photo = $this->photo->store('projets', 'public');
        $projet->photos = json_encode($photoJson);
        $projet->categorie_id = $this->categorie_id;
        if ($projet->save()) {
            session()->flash('success', 'projet Created Successfully');
            $this->resetInputFields();
        } else {
            session()->flash('error', 'Something went wrong! Please try again later');
        }
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->description = '';
        $this->categorie_id = '';
        $this->url = '';
        $this->photo = '';
        $this->photos = null;
    }
}
