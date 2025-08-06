<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Notifications\PasswordResetNotification;

#[Layout('components.layouts.auth')]
class Forgot extends Component
{
    #[Validate('required|email|exists:users,email')]
    public string $email = '';

    public function store()
    {
        $this->validate();
        $user = User::where('email', $this->email)->first();
        $token = Str::uuid();

        DB::beginTransaction();
        try {
            DB::table('password_reset_tokens')->where('email', $user->email)->delete();
            DB::table('password_reset_tokens')->insert([
                'email' => $user->email,
                'token' => $token,
                'created_at' => now(),
            ]);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();

        $user->notify(new PasswordResetNotification($token, $user->email));

        session()->flash('success', 'Un email de réinitialisation de mot de passe a été envoyé à votre adresse email.');
        $this->reset('email');
        return redirect()->route('forgot');
    }

    public function render()
    {
        return view('livewire.auth.forgot');
    }
}
