<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{

//numeros primos
public function create()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|integer|min:2',
        ]);

        $numero = $request->input('numero');
        $esPrimo = $this->esPrimo($numero);

        return view('formulario', compact('numero', 'esPrimo'));
    }

    private function esPrimo($numero)
    {
        if ($numero < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }

        return true;
    }



    //numerosamigos
    public function createForm()
    {
        return view('formularioamigo');
    }

    public function storeAmigos(Request $request)
    {
        $request->validate([
            'numero1' => 'required|integer|min:2',
            'numero2' => 'required|integer|min:2',
        ]);

        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');

        $sonAmigos = $this->primos($numero1, $numero2);

        return view('formularioamigo', compact('numero1', 'numero2', 'sonAmigos'));
    }

    private function sumDivisoresPropios($num) {
        $suma = 1;

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $suma += $i;
                if ($i != $num / $i) {
                    $suma += $num / $i;
                }
            }
        }
        return $suma;
    }

    private function primos($num1, $num2) {
        return ($this->sumDivisoresPropios($num1) == $num2) && ($this->sumDivisoresPropios($num2) == $num1);
    }



    //notas
    public function createNotas()
    {
        return view('notas');
    }
    public function storeNotas(Request $request)
    {
        $request->validate([
            'nota1' => 'required|numeric|min:0|max:10',
            'nota2' => 'required|numeric|min:0|max:10',
            'nota3' => 'required|numeric|min:0|max:10',
        ]);

        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');

        $promedio = ($nota1 + $nota2 + $nota3) / 3;

        return view('notas', compact('nota1', 'nota2', 'nota3', 'promedio'));
    }



    // formula cuadratica
   public function createCuadratica()
    {
        return view('cuadratica');
    }

    public function storeCuadratica(Request $request)
    {
        $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ]);

        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

        $discriminante = $b ** 2 - 4 * $a * $c;
        $raiz1 = null;
        $raiz2 = null;

        if ($discriminante >= 0) {
            $raiz1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $raiz2 = (-$b - sqrt($discriminante)) / (2 * $a);
        }

        return view('cuadratica', compact('a', 'b', 'c', 'discriminante', 'raiz1', 'raiz2'));
    }
}


