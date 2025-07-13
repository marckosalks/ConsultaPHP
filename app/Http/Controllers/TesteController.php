<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TesteController extends Controller
{
    public function index(){
        // $seuNome = 'Marcola';
        // return view('teste', ['seuNome'=>$seuNome]);

        // $response = Http::get('https://api.adviceslip.com/advice');

        // $valorJson = $response->json()['slip']['advice'];


        // dd($response->ok(), $valorJson);


        $response = Http::get('https://api.github.com/users/marckosalks/repos');

        // dd($response->json());

        return view('teste', [
            'repos' => $response->json()
        ]);

    }
}
