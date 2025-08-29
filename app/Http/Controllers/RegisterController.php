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
//          Não tem diferença entre $request->input('name') e $request->name
        $nomeCompleto = $request->name . ' ' . $request->surname;


//      Faz o Hash da senha (proteção de senha)       
        $senha = Hash::make($request->password);


//      Transforma os dados em uma array        
        $formdata = [
            'nome' => $nomeCompleto,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'senha' => $request->password
        ];

        return view('testeform', $formdata);
    }
}
