<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserCreatedNotification extends Notification
{
    use Queueable;

    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['mail']; // canal email
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Bienvenue dans notre application')
            ->greeting('Bonjour ' . $this->user->name)
            ->line('Votre compte a été créé avec succès.')
            ->line('Email : ' . $this->user->email)
            ->line('Merci d’utiliser notre application !');
    }
}
