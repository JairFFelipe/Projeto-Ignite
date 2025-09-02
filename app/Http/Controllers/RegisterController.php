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

        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'digits_between:9,11',
            'email' => 'required',
            'password' => 'required|confirmed'
        ],[
            'phone.digits_between' => 'O número de telefone deve conter 9-15 digitos',
            'password.confirmed' => 'A senha ta diferente, burro'
        ]);


//          Não tem diferença entre $request->input('name') e $request->name
        $nomeCompleto = $request->name . ' ' . $request->surname;
//      Transforma os dados em uma array        
        $formdata = [
            'nome' => $nomeCompleto,
            'telefone' => $request->phone,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'senha' => $request->password
        ];

        return view('testeform', $formdata);
    }
}
