<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use Notifiable;
    protected $filliable = ['nome','email','senha','num','cpf','cep',];


    public function getNumFormatadoAttribute()
    {
        $num = $this->num;

        return preg_replace(
            '/(\d{2})(\d{5})(\d{4})/',
            '($1) $2-$3',
            $num
        );
    }

    public function getCepFormatadoAttribute()
    {
        $cep = $this->cep;

        return preg_replace(
            '/(\d{5})(\d{3})/',
            '$1-$2',
            $cep
        );
    }


}
