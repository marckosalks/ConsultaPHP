<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function painel(){

        $painel = 'meu primeiro painel';

        return view('painel', [
            'painel' => $painel
        ]);
    }
}
