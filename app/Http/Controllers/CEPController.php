<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CEPController extends Controller
{
    public function testeCEP(){
    $response = Http::withoutVerifying()->get("https://viacep.com.br/ws/15902192/json/");

    $data = [
        'cep' => $response->json()['cep'] ?? null,
        'bairro' => $response->json()['bairro'] ?? null,
        'cidade' => $response->json()['localidade'] ?? null,
        'estado' => $response->json()['uf'] ?? null, // viaCEP retorna "uf", não "estado"
    ];

    return view('testecep', $data);
}

}
 // Devolve em JSON legível
        //return response()->json($response->json(), 200, [], JSON_UNESCAPED_UNICODE);
