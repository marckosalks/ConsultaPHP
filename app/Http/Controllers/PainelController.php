<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function painel(){

        //declaração de variave
        $painel = 'meu primeiro select com dados da API';

        // retorno uma view com minha variavel
        return view('painel', [
            'painel' => $painel
        ]);
    }
}
