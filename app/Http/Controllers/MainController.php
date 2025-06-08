<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Index(): View
    {
        //METODO 01
        // $data = [
        //     'name' => "nikolas",
        //     'phone' => "11 99999-9999"
        // ];
        // return view('home',$data);

        //METODO 02
        // return view('home', [
        //     'name'=> 'Nikolas Guedes',
        //     'phone' => '11 99999-9999',
        // ]);

        //METODO 03
        // return view('home')
        //     ->with( 'name', "Nikolas Guedes")
        //     ->with( 'name', 'Nikolas Guedes');

        //METODO 04
        $name = 'Nikolas Guedes';
        $phone = '11 9999-9999';

        return view('home', compact('name', 'phone'));
    }
}
