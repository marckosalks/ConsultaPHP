<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TesteController extends Controller
{
    public function index()
    {
        // $seuNome = 'Marcola';
        // return view('teste', ['seuNome'=>$seuNome]);

        // $response = Http::get('https://api.adviceslip.com/advice');

        // $valorJson = $response->json()['slip']['advice'];


        // dd($response->ok(), $valorJson);


        // $responseOmdb = Http::get('http://www.omdbapi.com/?apikey=' . env('OMDB_API_KEY') . '&s=dorama');

        $responseGitHub = Http::gitsada()->get('marckosalks/repos');

        $responseOmdb = Http::get('http://www.omdbapi.com/?apikey=', [
            'apikey' => env('OMDB_API_KEY'),
            's' => 'spiderman'

        ]);


        if ($responseOmdb->failed()) {

            dd($responseOmdb->json());
        } else {

            return view('teste', [
                'movies' => $responseOmdb->json(),
            ]);
        }


        // dd($responseGitHub->json());

    }
}
