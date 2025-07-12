<?php

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

// criei rota para fazer
// Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/consulta/pedidos', function () {
    return view('home');
});


