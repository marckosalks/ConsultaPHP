<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SideBarController extends Controller
{
     public function sidbarFiltros(){

        $token = env('BEARER_TOKEN');
        $codEmp = 9;

        $responseOpt = Http::withToken($token)->get( env('OPTION_URL'), [
            'codemp' => $codEmp,
        ]);

        // sdd($responseOpt->json());

        return view('sidebar', [
             'servicosOption' => $responseOpt->json()
        ]);
    }
}
