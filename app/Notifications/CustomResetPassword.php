<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class CustomResetPassword extends Notification
{
    public $token;
    public $email;

    public function __construct($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $resetUrl = url("/reset-password/{$this->token}?email={$this->email}");

        return (new MailMessage)
            ->subject('Redefinição de senha')
            ->view('emails.reset-password', [
                'resetUrl' => $resetUrl
            ]);
    }
}