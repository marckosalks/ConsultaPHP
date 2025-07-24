<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home()
    {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('BEARER_HUB'),
            'Accept' => 'application/json',
        ])->get(env('URL_HUB') . 'servicos/lista', [
            'codemp' => 9
        ]);

        if ($response->successful()) {
            $lista = $response->json();
        }

        return view('home', [
            'servicos' => $lista['data'] ?? [],
        ]);

    }
}
