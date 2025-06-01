<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Route::view('/view2', 'home', ['MyName' => "Nikolas Guedes"]);

//Rota com parametro
Route::get('/valor/{value}', [MainController::class, 'mostrarValor']);

//Rota com nome
Route::get('/rota_abc', function(){
    return 'Rota Nomeada';
})->name('rota_nomeada');

Route::get('/rota_referenciada', function(){
    return redirect()->route('rota_nomeada');
});

//Rota com Prefix
Route::prefix('admin')->group(function(){
    Route::get('/home', [MainController::class, 'index']);
    Route::get('/about', [MainController::class, 'about']);
    Route::get('/management', [MainController::class, 'management']);
});

//Rota com Prefix
Route::prefix('admin')->group(function(){
    Route::get('/home', [MainController::class, 'index']);
    Route::get('/about', [MainController::class, 'about']);
    Route::get('/management', [MainController::class, 'management']);
});
