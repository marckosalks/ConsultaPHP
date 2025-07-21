<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PainelController;
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

Route::get('/consulta/pedidos', [HomeController::class,'home'])->name('option');

// retornando view
// Route::get('/formulario', function () {
//     return view('ajax'); // mostra o formulário
// });

// Route::post('/ajax',  [AjaxController::class, 'receber']);

Route::fallback(function () {
    return "Página não encontrada, favor escrever uma rota existente!!!";
});


