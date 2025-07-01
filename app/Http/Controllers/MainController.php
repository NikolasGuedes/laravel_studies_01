<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function chamaModel()
    {
        //Mostra todos os valores da tabela products
        // $results = Product::all()->toArray();
        // echo '<pre>';
        // print_r($results);

        //Retorna os resultados como um array de objetos stdClass
        // $consult = Product::all()->toArray();
        // $results = $this->ArrayOfObject($consult);
        // $this->showData($results);

        //Buscar produtos ordenandos pelo nome alfabeticamente
        // $consult = Product::orderBy('product_name')->get()->toArray();
        // $results = $this->ArrayOfObject($consult);
        // $this->showData($results);

        //Buscar os 3 primeiros produtos
        // $consult = Product::limit(3)->orderBy('product_name')->get()->toArray();
        // $results = $this->ArrayOfObject($consult);
        // $this->showData($results);

        //Buscar um produto pelo ID
        // $consult = Product::find(10)->toArray();
        // $results = $this->ArrayOfObject($consult);
        // $this->showData($results);

        //Buscar por precos maiores ou igual a 70
        // $consult = Product::where('price', '>=', 70)->get()->toArray();
        // $results = $this->ArrayOfObject($consult);
        // $this->showData($results);

        //Buscar por precos maiores ou igual a 70, retornar apenas o primeiro valor
        $consult = Product::where('price', '>=', 70)->first()->toArray();
        $this->showData($consult);
    }

    private function showData($data)
    {
        echo '<pre>';
        print_r($data);
    }

    private function ArrayOfObject($data)
    {
        $tmp = [];
        foreach ($data as $key => $value) {
            $tmp[] = (object) $value;
        }
        return $tmp;
    }
}
