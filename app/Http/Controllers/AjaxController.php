<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function receber(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');

        return response()->json([
            'success' => true,
            'mensagem' => 'Dados enviados com sucesso!',
            'nome' => $nome,
            'email' => $email,
        ]);
    }
}
