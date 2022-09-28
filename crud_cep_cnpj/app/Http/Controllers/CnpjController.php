<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Cnpj\Salvar_CnpjRequest;
use App\Models\Cnpj;

class CnpjController extends Controller
{
    public function index()
    {
        
        $cnpj = Cnpj::all();
        return view('listagem')->with (
            [
                'cnpj' => $cnpj,
            ]
        );
    }

    public function adicionar_cnpj()
    {
        return view('buscar_cnpj');
    }

    public function buscar_cnpj (
        Request $request
    ) {
        $cnpj = $request->get('cnpj');
        $response = Http::get("https://receitaws.com.br/v1/cnpj/{$cnpj}")->json();

        return json_encode (
            [
                'cnpj' => $request['cnpj'],
                'razao_social' => $response['natureza_juridica'],
                'nome_fantasia' => $response['nome'],
                'telefone' => $response['telefone'],
                'situacao' => $response['situacao'],
                'cep' => $response['cep'],
                'numero' => $response['numero'],
                'logradouro' => $response['logradouro']
            ]
        );    
    }

    public function salvar_cnpj (
        Salvar_CnpjRequest $request
    ) {
        $cnpj = cnpj::where('cnpj', $request->input('cnpj'))->first();
        
        if(!$cnpj) {
            $cnpj = $cnpj::create (
                [
                    'cnpj' => $request->input('cnpj'),
                    'nome' => $request['nome'],
                ]
            );
            return redirect('/')->withSucesso('sucesso!');
        }
        return redirect('/')->withErro('');
    }
}