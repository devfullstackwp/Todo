<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|min:8|max:20')]
    public string $password = '';

    public bool $remember = false;

    public function store(){
        $this->validate();
        
        // Vérifier d'abord les identifiants
        if (Auth::attempt([
            'email' => $this->email, 
            'password' => $this->password
        ], $this->remember)) {
            
            // Vérifier si l'email est vérifié
            if (auth()->user()->email_verified_at === null) {
                Auth::logout();
                $this->addError('email', 'Veuillez vérifier votre email avant de vous connecter.');
                return;
            }
            
            session()->regenerate();
            return redirect()->intended(route('home'));
        }

        $this->addError('email', 'Ces identifiants ne correspondent pas à nos enregistrements.');
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->title('Connexion - ' . config('app.name'))
            ->layoutData(['description' => 'Connectez-vous à votre compte']);
    }
}