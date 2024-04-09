<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Connexion extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.connexion');
    }

    public function login()
    {
        $credentials = $this->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'string'],
        ]);
    
        $user = User::where('email', $this->email)->first();
    
        if (!$user) {
            session()->flash('error', 'Utilisateur non trouvé');
            $this->resetForm();
            return;
        }
    
        if (!Hash::check($this->password, $user->password)) {
            session()->flash('error', 'Mot de passe incorrect');
            $this->password = '';
            return;
        }

    
        Auth::attempt($credentials);
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            session()->flash('error', 'Une erreur est survenue lors de la connexion');
            return;
        }
    }


    private function resetForm()
    {
        $this->email = '';
        $this->password = '';
    }
}
