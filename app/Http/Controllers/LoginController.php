<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){

        $validated = $request->validate([
            'email' => 'required|email:rfc,dns',
            'senha' => 'required'
        ],[
            'email.required' => 'O campo deve estar preenchido!',
            'senha.required' => 'O campo deve estár preenchido!'
        ]);


        $usuario = usuarios::where('email', $request->email)->first();

            if(!$usuario){
                return back()->withErrors([
                    'email' => 'Este endereço de email não está registrado!'
                ])->withInput();
            }

            if(!Hash::check($request->senha, $usuario->senha)){
                return back()->withErrors([
                    'senha' => 'Senha inválida!'
                ])->withInput();
            }

            session(['usuario' => $usuario]);

        return redirect('/');
    }

    public function logout() {
        session()->forget('usuario');

        return redirect('/');
    }
}
