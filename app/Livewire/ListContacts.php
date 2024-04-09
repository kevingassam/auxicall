<?php

namespace App\Livewire;

use App\Models\contacts;
use Livewire\Component;

class ListContacts extends Component
{
    public $date;

    public function updatedDate($value){
        $this->date = $value;
    }

    public function render()
    {
        $contacts = contacts::orderBy("id","Desc");
        if(!is_null($this->date)){
            $contacts->whereDate("created_at", $this->date);
        }
        $contacts = $contacts->get();
        return view('livewire.list-contacts', compact("contacts"));
    }

    public function delete($id){
        $contact = contacts::find($id);
        $contact->delete();
    }
}
