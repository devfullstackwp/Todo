<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CheckMail extends Component
{

    public string $email_verification_token = '';
    public string $email = '';
    public $user;

    public function mount(){
        $this->email_verification_token = request()->query('email_verification_token', '');
        $this->email = request()->query('email', '');

        // Vérifier que les paramètres sont présents
        if (empty($this->email_verification_token) || empty($this->email)) {
            session()->flash('error', 'Lien de vérification invalide.');
            return redirect()->route('register');
        }

        $user = User::where('email_verification_token', $this->email_verification_token)
            ->where('email', $this->email)
            ->first();

        if (!$user) {
            session()->flash('error', 'Le token est invalide ou a expiré. Veuillez faire une nouvelle demande d\'inscription.');
            return redirect()->route('register'); 
        }

        // Vérifier si l'email n'est pas déjà vérifié
        if ($user->email_verified_at !== null) {
            session()->flash('info', 'Votre email est déjà vérifié. Vous pouvez vous connecter.');
            return redirect()->route('login');
        }

        // Vérifier l'email et sauvegarder (méthode explicite)
        try {
            $user->email_verified_at = now();
            $user->email_verification_token = null; // Invalider le token après utilisation
            $saved = $user->save();
            
            if ($saved) {
                session()->flash('success', 'Votre email a été vérifié avec succès. Veuillez vous connecter.');
            } else {
                session()->flash('error', 'Erreur lors de la sauvegarde. Veuillez réessayer.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Erreur lors de la vérification : ' . $e->getMessage());
        }
        
        return redirect()->route('login');
    }


    public function render()
    {
        return view('livewire.auth.check-mail');
    }
}
