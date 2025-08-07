<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Str;
use App\Notifications\EmailCheckNotification;

#[Layout('components.layouts.auth')]
class Register extends Component
{

    #[Validate('required|min:3|max:20|unique:users,name')]
    public string $name = '';

    #[Validate('required|email|unique:users,email')]
    public string $email = '';

    #[Validate('required|min:8|max:20|confirmed')]
    public string $password = '';
    public string $password_confirmation = '';

    public function updatedPassword()
    {
        // Re-valider la confirmation si elle existe déjà
        if (!empty($this->password_confirmation)) {
            $this->validateOnly('password');
        }
    }

    public function updatedPasswordConfirmation()
    {
        // Valider le password pour vérifier la confirmation
        $this->validateOnly('password');
    }


    public function store()
    {
        $email_verification_token = Str::uuid();

        $this->validate();
        
        // Créer l'utilisateur avec le token de vérification
        $userData = $this->all();
        $userData['email_verification_token'] = $email_verification_token;
        $user = User::create($userData);
        
        // Envoyer l'email de vérification
        $user->notify(new EmailCheckNotification($email_verification_token, $user->email));
        
        return redirect('/login')->with('success', 'Inscription réussie, veuillez vérifier votre email pour vous connecter');
    }

    public function render()
    {
        return view('livewire.auth.register')
        ->title('Inscription - '.config('app.name'))
        ->layoutData([
            'description' => 'Inscrivez-vous pour accéder à votre comtpe.',
        ]);
    }
}