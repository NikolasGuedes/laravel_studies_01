<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/mysql_teste', function(){
    DB::connection()->getPdo();
    echo 'OK';
});





Route::get('/mysql', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexao estabelecida com a tabela: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Nenhuma conexao estabelecida" . $e);
    }
});


Route::get('/sqlite', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexao estabelecida com a tabela: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Nenhuma conexao estabelecida" . $e);
    }
});

Route::get('/mysql_two_databases', function () {
    try {
        //Primeira Conexao
        DB::connection('mysql_users')->getPdo();
        echo "Conexao estabelecida com a tabela: " . DB::connection()->getDatabaseName();
        echo '<br>';
        //Segunda Conexao
        DB::connection('mysql_app')->getPdo();
        echo "Conexao estabelecida com a tabela: " . DB::connection()->getDatabaseName();
        echo '<br>';
    } catch (\Exception $e) {
        die("Nenhuma conexao estabelecida" . $e->getMessage());
    }
});
