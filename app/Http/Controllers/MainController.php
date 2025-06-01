<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
         return view('home');
    }


    public function mostrarValor($valor){
         echo "O valor na rota é: $valor";
    }

    public function about(){
        echo "Rota About";
    }
}
