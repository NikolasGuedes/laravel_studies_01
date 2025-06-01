<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    public function __invoke(Request $request): void
    {
        echo "Single Action Controller";
        echo '<br>';
        echo $this->privateMethod();
    }

    private function privateMethod(): string{
        return 'Funcao Privada';
    }
}
