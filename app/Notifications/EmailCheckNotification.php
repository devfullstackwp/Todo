<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailCheckNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected string $email_verification_token;
    protected string $email;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $email_verification_token, string $email)
    {
        $this->email_verification_token = $email_verification_token;
        $this->email = $email;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('Bonjour '.$notifiable->name)
            ->subject('Vérification de votre email')
            ->line('Veuillez cliquer sur le liens ci-dessous pour vérifier votre email.')
            ->action('vérifier votre email', route('CheckEmail', 
            [
                'email_verification_token' => $this->email_verification_token,
                'email' => $this->email
            ]))
            ->salutation("L'équipe".config('app.name'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
