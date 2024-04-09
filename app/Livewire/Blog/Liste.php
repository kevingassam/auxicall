<?php

namespace App\Livewire\Blog;

use App\Models\blogs;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Liste extends Component
{
    public $blogs;
    protected $listeners = ['blogCreated' => 'getBlogs'];
    public function render()
    {
        $this->blogs = $this->getBlogs();
        return view('livewire.blog.liste');
    }

    //delete
    public function delete($id)
    {
        if ($id) {
            $blog = blogs::find($id);
            if ($blog) {
                Storage::delete($blog->photo);
                $blog->delete();
                session()->flash('success', 'Article supprimé');
            } else {
                session()->flash('error', 'Article non trouvé');
            }
        } else {
            session()->flash('error', 'Article non trouvé');
        }
    }

    
    public function getBlogs(){
        return blogs::all();
    }
}
