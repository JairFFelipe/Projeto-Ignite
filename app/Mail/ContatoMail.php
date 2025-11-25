<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    public $nome;
    public $email;
    public $telefone;
    public $mensagem;

    public function __construct($nome, $email, $mensagem, $telefone)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->mensagem = $mensagem;
    }

    public function build()
    {
        return $this->subject('Nova mensagem')
                    ->view('emails.contato');
    }
};



   

