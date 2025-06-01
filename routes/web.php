<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\user2Controller;
use App\Http\Controllers\UserController;
use App\Http\Middleware\OnlyAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');

Route::view('/view2', 'home', ['MyName' => "Nikolas Guedes"]);

//Rota com parametro
Route::get('/valor/{value}', [MainController::class, 'mostrarValor']);

//Rota com nome
Route::get('/rota_abc', function () {
    return 'Rota Nomeada';
})->name('rota_nomeada');

Route::get('/rota_referenciada', function () {
    return redirect()->route('rota_nomeada');
});

//Rota com Prefix
Route::prefix('admin')->group(function () {
    Route::get('/home', [MainController::class, 'index']);
    Route::get('/about', [MainController::class, 'about']);
    Route::get('/management', [MainController::class, 'management']);
});

//Rota com Middleware
Route::get('/admin/only', function () {
    echo 'Apenas Administradores';
})->middleware([OnlyAdmin::class]);

//Rota com Middleware e Prefix
Route::middleware([OnlyAdmin::class])->prefix('admin')->group(function () {
    Route::get('/home', [MainController::class, 'index']);
    Route::get('/about', [MainController::class, 'about']);
    Route::get('/management', [MainController::class, 'management']);
});

//Rota com Controller e Prefix
Route::controller(UserController::class)->prefix('user')->group(function () {
    Route::get('/new', 'new');
    Route::get('/edit', 'edit');
    Route::get('/delete', 'delete');
});

//Caso seja uma rota indefinida
Route::fallback(function () {
    return redirect()->route('index');
});

//Rota com Invokable (apenas uma unica funcao atrelada ao controller)
Route::get('/get', SingleActionController::class)->name('single');

//Rota com uso de Resource
Route::resource('user2', user2Controller::class);

//Rota com uso de Resources
Route::resources([
    'clients' => ClientsController::class,
    'products' => ProductsController::class

]);
