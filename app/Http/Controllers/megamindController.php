<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;


class megamindController extends Controller
{
      public function mudarCEP($cep){

        

         $usuario = usuarios::where('email', session('usuario')->email)->first();
            $usuario->cep = $cep;
            $usuario->save();

            session(['usuario' => $usuario->fresh()]);
    }

     public function mudarCPF($cpf){



        $usuario = usuarios::where('email', session('usuario')->email)->first();
        $usuario->cpf = $cpf;
        $usuario->save();

        session(['usuario' => $usuario->fresh()]);
    }

    public function truqueSave(Request $request){

        $this->mudarCEP($request->ceps);
        $this->mudarCPF($request->cpfs);

        return redirect("/");
    }
}
