<?php

namespace App\Http\Controllers;

use App\Models\Primo;
use Illuminate\Http\Request;

class PrimoController extends Controller
{
    public function primoCreate()
    {
        return view('primo', ['resultado' => null]);
    }

    public function primoStore(Request $request)
    {
        $request->validate([
            'numero' => 'required|integer|min:2',
        ]);

        $numero = $request->input('numero');
        $esPrimo = $this->esPrimo($numero);
        $this->guardarPrimoEnBD($numero, $esPrimo);
        return view('primo', ['resultado' => $esPrimo, 'numero' => $numero]);
    }

    private function esPrimo($numero)
    {
        if ($numero < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                return false;
            }
        }
        return true;
    }
    private function guardarPrimoEnBD($numero, $esPrimo)
    {
        $primo = new Primo();
        $primo->numero = $numero;
        $primo->es_primo = $esPrimo ? 'Si es primo' : 'No es primo'; 
        $primo->save();
    }
}
