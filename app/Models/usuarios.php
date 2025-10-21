<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use Notifiable;
    protected $filliable = ['nome','email','senha','num','cpf','cep',];

}
