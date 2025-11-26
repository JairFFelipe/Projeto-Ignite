<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class usuarios extends Authenticatable
{
    protected $table = 'usuarios';

    use Notifiable;
    protected $fillable = ['nome','email','senha','num','cpf','cep',];

    public function getAuthPassword(){
        return $this->senha;
    }


    public function getNumFormatadoAttribute(){
        $num = $this->num;

        return preg_replace(
            '/(\d{2})(\d{5})(\d{4})/',
            '($1) $2-$3',
            $num
        );
    }

    public function getCepFormatadoAttribute(){
        $cep = $this->cep;

        return preg_replace(
            '/(\d{5})(\d{3})/',
            '$1-$2',
            $cep
        );
    }


}
