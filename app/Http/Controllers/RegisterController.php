<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function ticabauau(Request $request){

        $validated = $request->validate([
            'nome' => 'required',
            'phone' => 'digits_between:9,11',
            'email' => 'required',
            'senha' => 'required|confirmed'
        ],[
            'phone.digits_between' => 'O número de telefone deve conter 9-15 digitos',
            'senha.confirmed' => 'A senha ta diferente, burro'
        ]);


 //     Não tem diferença entre $request->input('name') e $request->name
        $nomeCompleto = $request->nome . ' ' . $request->sobrenome;

        $usuario = new usuarios();
        $usuario->nome = $nomeCompleto;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->num = $request->phone;
        $usuario->cpf = 'a';
        $usuario->cep = 'b';

        $usuario->save();
        

//      Transforma os dados em uma array        
        $formdata = [
            'nome' => $nomeCompleto,
            'telefone' => $request->phone,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'senha' => $request->senha
        ];

        return view('testeform', $formdata);
    }
}
