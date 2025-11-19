<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UsuarioCriado;
use App\Mail\ContaCriadaMail;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function registrar(Request $request){

        $request->merge([
            // É meia noite e eu to vendo aula de Regex pra fazer essa porra... SOS
            'phone' => preg_replace('/\D/', '', $request->input('phone')),
        ]);

        $validated = $request->validate([
            'nome' => 'required',
            'sobrenome' => 'required',
            'phone' => 'digits_between:9,11|unique:usuarios,num',
            'email' => 'required|email:rfc,dns|unique:usuarios,email',
            'senha' => 'required|confirmed'
        ], [
             'phone.digits_between' => 'O número de telefone deve conter 9-11 digitos',
             'phone.unique' => 'Este número de telefone já está cadastrado!',
             'senha.confirmed' => 'Ambas as senhas devem coincidir',
             'email.unique' => 'Este endereço de email já está cadastrado!',
             'email.email' => 'Domínio de email inválido!'
         ]);


 //     Não tem diferença entre $request->input('name') e $request->name
        $nomeCompleto = $request->nome . ' ' . $request->sobrenome;

        $usuario = new usuarios();
        $usuario->nome = $nomeCompleto;
        $usuario->email = $request->email;
        $usuario->senha = Hash::make($request->senha);
        $usuario->num = $request->phone;



       $usuario->save();

        Mail::to($usuario->email)->send(new ContaCriadaMail($usuario));

         return redirect('/login');
    }
}
