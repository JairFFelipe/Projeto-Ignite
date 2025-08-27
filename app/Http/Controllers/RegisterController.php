<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function ticabauau(Request $request){
        $nome = $request->input('name');
        $email = $request->input('email');
        $senha = $request->input('password');


//      Faz o Hash da senha (proteção de senha)       
        $senhaHash = Hash::make($senha);


//      Transforma os dados em uma array        
        $formdata = [
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha
        ];


        return view('testeform', $formdata);
    }
}
