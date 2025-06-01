<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View{
         return view('home');
    }


    public function mostrarValor($valor): void{
         echo "O valor na rota é: $valor";
    }

    public function about(): void{
        echo "Rota About";
    }
}
