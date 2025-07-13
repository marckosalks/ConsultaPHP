<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PainelController;
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


Route::get('/consulta/pedidos', function () {
    return view('home');
});


Route::fallback(function () {
    return "Página não encontrada, favor escrever uma rota existente!!!";
});

Route::get('teste', [TesteController::class, 'index']);

// criei rota para fazer
// Route::get('/', [HomeController::class, 'home'])->name('home');

// //passar valor
// Route::get('/teste', function () {
//     return 'aquele abraço!';
// });


// passar paramentros estaticos
// Route::view('/teste', "teste", ['nomeIngresso' => 'Marcos e Duda']);

// Passar dados dinamicos
// Route::get('teste/{id?}/{name?}', function($id = null, $name = null){
//     return view( 'teste', ['id'=> $id,'name'=> $name]);
// })->where(['id', '[0-9]+', 'name', '[A-Za-z]+' ]);


// passar paramentros estaticos
// Route::view('/teste', "teste", ['nomeIngresso' => 'Marcos e Duda']);

// navegação dinamica de rota ele chama sem precisar ser o nome original da rota
// Route::get('/ssr', function(){
//     return view('ha ha ha, eu sou dev de verdade!');
// })->name('painel-index');


