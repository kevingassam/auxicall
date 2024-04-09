<?php

namespace App\Livewire\Blog;

use App\Models\blogs;
use Livewire\Component;
use Livewire\WithFileUploads;
class Add extends Component
{
    use WithFileUploads;
    public $titre,$description,$photo;
    public function render()
    {
        return view('livewire.blog.add');
    }

    public function create(){
        $this->validate([
            'titre' =>'required|string',
            'description' =>'required|string',
            'photo' =>'required|image|max:4024|mimes:png,jpg,jprg', // 
        ]);

        $blog = new blogs();
        $blog->titre = $this->titre;
        $blog->description = $this->description;
        $blog->photo = $this->photo->store('blog', 'public');
        if($blog->save()){
            session()->flash('message', 'article Added Successfully');
            $this->reset();
            $this->dispatch('blogCreated');
        }else{
            session()->flash('message', 'Something went wrong');
        }
    }
}
