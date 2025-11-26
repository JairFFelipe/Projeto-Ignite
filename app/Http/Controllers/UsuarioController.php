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

    public function validarCPF($cpf){

         // Remove qualquer coisa que não seja número
    $cpf = preg_replace('/\D/', '', $cpf);

    // Verifica se tem exatamente 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }

    // Elimina CPFs conhecidos inválidos
    if (preg_match('/^(\\d)\\1{10}$/', $cpf)) {
        return false;
    }

    // Valida o primeiro dígito verificador
    for ($i = 0, $soma = 0; $i < 9; $i++) {
        $soma += intval($cpf[$i]) * (10 - $i);
    }

    $dv1 = ($soma * 10) % 11;
    if ($dv1 == 10) $dv1 = 0;

    if ($dv1 != intval($cpf[9])) {
        return false;
    }

    // Valida o segundo dígito verificador
    for ($i = 0, $soma = 0; $i < 10; $i++) {
        $soma += intval($cpf[$i]) * (11 - $i);
    }

    $dv2 = ($soma * 10) % 11;
    if ($dv2 == 10) $dv2 = 0;

    if ($dv2 != intval($cpf[10])) {
        return false;
    }

    return true;
    }


    public function mudarCPF(Request $request){
        if( !validarCPF($request->cpf) ){
            return redirect()->back()->withErrors(['error' => 'Algo deu errado.']);
        }

        $usuario = usuarios::where('email', session('usuario')->email)->first();
        $usuario->cpf = $request->cpf;
        $usuario->save();

        session(['usuario' => $usuario->fresh()]);
    }

    public function dadosPagMenu(Request $request){

        mudarCPF($request->cpf);

        $validated = $request->validate([
            'cep' => 'max:8|required'
        ]);


        if($request->cep != null){
            $cep = $request->cep;
            $usuario = usuarios::where('email', session('usuario')->email)->first();
                $usuario->cep = $cep;
                $usuario->save();
        }
            session(['usuario' => $usuario->fresh()]);

    }

}
