<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\HtmlString;

class VerifyEmail extends Notification

{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        // dd($notifiable);
        $url = URL::temporarySignedRoute(
            'verification.verify', now()->addMinutes(60), ['id' => $notifiable->getKey()]
        );

        return (new MailMessage)
            ->subject(Lang::get('Vérifier votre adresse e-mail'))
            ->greeting(new HtmlString('Bienvenue chez Movinto<br>Validez votre inscription'))
            ->line(new HtmlString('Veuillez cliquer sur ce bouton pour vérifier votre adresse e-mail.'))
            ->action(new HtmlString('Vérifier mon adresse e-mail'), $url)
            ->line('Si vous n\'avez pas créé un compte sur notre plateforme, vous pouvez ignorer cet e-mail.')
            ->salutation(new HtmlString(' Mille fois merci,<br>Movinto'));

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
