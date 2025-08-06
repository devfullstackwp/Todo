<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

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
        $this->validate();
        $user = User::create($this->all());
        auth()->login($user);
        return redirect('/');
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