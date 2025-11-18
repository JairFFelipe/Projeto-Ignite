<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function mudarEmail(Request $request){

        $validated = $request->validate([
            'senha' => 'required|confirmed'
        ], [
            'senha.confirmed' => 'Ambas as senhas devem coincidir'
        ]);


        $usuario = usuarios::where('email', session('usuario')->email)->first();

        $usuario->senha = Hash::make($request->senha);
        $usuario->save();

        return redirect()->back();
    }
}
