<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Livewire\Attributes\Validate;
use Illuminate\Support\Str;

#[Layout('components.layouts.auth')]
class Reset extends Component
{


    public string $token ='';
    public string $email ='';
    
    #[Validate('required|min:8|max:20|confirmed')]
    public string $password ='';

    #[Validate('required|same:password')]
    public string $password_confirmation ='';

    public string $error = '';

    public $user;

    public function mount(){
        $this->token = request()->query('token', '');

        $password_reset_token = DB::table('password_reset_tokens')
        ->where('token', $this->token)
        ->where('created_at', '>', now()->subHour())
        ->first();

        if(!$password_reset_token){
            session()->flash('error', 'Le token est invalide ou a expiré<br>
            Veuillez de nouveau faire une réinitialisation');
            return redirect()->route('forgot'); 
        }
    
        $this->email = $password_reset_token->email;
        $this->user = User::where('email', $this->email)->firstOrFail();
    }

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


    public function store(){
        $this->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);


        if(  !DB::table('password_reset_tokens')
        ->where('email', $this->email)
        ->where('token', $this->token)
        ->exists()){
            session()->flash('error', 'Le token est invalide ou a expiré<br>
            Veuillez de nouveau faire une réinitialisation');
            return redirect()->route('forgot'); 
        }

        $this->user->update([
            'password' => Hash::make($this->password),
        ]);

        DB::table('password_reset_tokens')
        ->where('token', $this->token)
        ->where('email', $this->email)
        ->delete();

        session()->flash('success', 'Votre mot de passe a été réinitialisé avec succès<br>
        Veuillez vous connecter.');
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.reset');
    }
}
