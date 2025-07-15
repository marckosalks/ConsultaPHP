<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\SideBarController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PainelController::class, 'painel'])->name('painel');


// Route::get('/consulta/pedidos', function () {
//     return view('home');
// });

Route::get('/consulta/pedidos', [HomeController::class,'home'])->name('xyz');


Route::fallback(function () {
    return "Página não encontrada, favor escrever uma rota existente!!!";
});

// Route::get('teste', [TesteController::class, 'index']);

