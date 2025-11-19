<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function mudarCEP(Request $request){

        $validated = $request->validate([
            'cep' => 'max:8|required'
        ]);

        $cep = $request->cep;
        $response = Http::withoutVerifying()->get("https://viacep.com.br/ws/$cep/json/");

         $usuario = usuarios::where('email', session('usuario')->email)->first();
            $usuario->cep = $cep;
            $usuario->save();

            session(['usuario' => $usuario->fresh()]);

    return redirect()->back();
    }


    public function mudarSenha(Request $request){

            $validated = $request->validate([
                'senha' => 'required|confirmed'
            ], [
                'senha.confirmed' => 'Ambas as senhas devem coincidir'
            ]);


            $usuario = usuarios::where('email', session('usuario')->email)->first();
            $usuario->senha = Hash::make($request->senha);
            $usuario->save();

            session(['usuario' => $usuario->fresh()]);

        return redirect()->back();
    }

    public function mudarFone(Request $request){

            $validated = $request->validate([
                'num' => 'digits_between:9,11'
            ],[
                'num.digits_between' => 'O número de telefone deve conter 9-11 digitos'
            ]);

            $usuario = usuarios::where('email', session('usuario')->email)->first();
            $usuario->num = $request->num;
            $usuario->save();

            session(['usuario' => $usuario->fresh()]);

        return redirect()->back();
    }

    public function mudarNome(Request $request){

            $validate = $request->validate([
                'nome' => 'required'
            ]);

            $usuario = usuarios::where('email', session('usuario')->email)->first();
            $usuario->nome = $request->nome;
            $usuario->save();

            session(['usuario' => $usuario->fresh()]);

        return redirect()->back();
    }

}
