<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Horizon\Horizon;
use Laravel\Horizon\HorizonApplicationServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class HorizonServiceProvider extends HorizonApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        parent::boot();

        // Horizon::routeSmsNotificationsTo('15556667777');
        // Horizon::routeMailNotificationsTo('example@example.com');
        // Horizon::routeSlackNotificationsTo('slack-webhook-url', '#channel');
    }

    /**
     * Register the Horizon gate.
     *
     * This gate determines who can access Horizon in non-local environments.
     */
    protected function gate(): void
    {
        Gate::define('viewHorizon', function ($user = null) {
            // Accès en local
            if (App::environment('local')) {
                return true;
            }
            
            // Accès temporaire pour tout utilisateur connecté (ATTENTION: à sécuriser)
            // return $user !== null;
            
            // Accès sécurisé par email spécifique
            return in_array(optional($user)->email, [
                'admin@admin.com', // Remplacez par votre vraie adresse email
            ]);
        });
    }
}
