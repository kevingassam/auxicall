<?php

namespace App\Livewire;

use App\Models\configurations;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;



class Configuration extends Component
{
    use WithFileUploads;
    public $phone, $email, $location, $url_location, $logo, $configuration;


    public function render()
    {
        $this->configuration = configurations::first();
        if ($this->configuration) {
            $this->email = $this->configuration->email;
            $this->phone = $this->configuration->phone;
            $this->location = $this->configuration->location;
            $this->url_location = $this->configuration->location_map;
        }
        return view('livewire.configuration');
    }


    protected $rules = [
        'phone' => 'nullable',
        'email' => 'nullable|email:filter',
        'location' => 'nullable',
        'url_location' => 'nullable|url',
        'logo' => 'image|max:1024|mimes:jpg,png,gif,peg',
    ];

    public function update()
    {
        if ($this->configuration) {
            $config = $this->configuration;
        } else {
            $config = configurations::firstOrCreate();
        }

        if ($this->logo) {
            //delete old logo file
            if ($config->logo) {
                Storage::delete($config->logo);
            }
            $config->logo = $this->logo->store('logo', 'public');
        }

        $config->email = $this->email;
        $config->phone = $this->phone;
        $config->location = $this->location;
        $config->location_map = $this->url_location;
        if ($config->save()) {
            session()->flash('success', "Modification effectués avec success");
        } else {
            session()->flash('error', "Erreur lors de la modification");
        }
    }
}
