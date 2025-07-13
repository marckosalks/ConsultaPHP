<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(){
        $seuNome = 'Marcola';
        return view('teste', ['seuNome'=>$seuNome]);
    }
}
