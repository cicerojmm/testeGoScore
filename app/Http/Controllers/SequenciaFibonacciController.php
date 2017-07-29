<?php

namespace App\Http\Controllers;

use App\SequenciaFibonacci;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 29/07/17
 * Time: 13:29
 */

class SequenciaFibonacciController extends Controller {
    public function mostraFormulario() {
        return view('paginas/problema5/mostra_sequencia_fibonacci');
    }

    public function recebeNumerosAleatorio(Request $request) {
        $numeros = $request->all();

        $matrizNumeros = explode(',', $numeros['numeros']);

        asort($matrizNumeros);

        $matrizFibonacci = $this->validaSequenciaFibonacci($matrizNumeros);
        $stringFibonacci = $this->montaStringFibonacci($matrizFibonacci);
        $this->salvaBancoDados($numeros['numeros'], $stringFibonacci);


        return response()->json(['numeroSequencia' => $stringFibonacci]);
    }


    public function validaSequenciaFibonacci($numeros) {


        $matrizFibonacci = array();
        $i = 0;

        foreach ($numeros as $numero) {
            $anterior = 0;
            $proximo =  1;
            $atual = 0;

            for ($j = 0; $j < $numeros[count($numeros)-1]; $j++) {
                $atual = $anterior + $proximo;

                if ($numero == $atual) {
                    $matrizFibonacci[$i] = $numero;
                }

                $anterior = $proximo;
                $proximo = $atual;

                $i++;
            }
        }

        return $matrizFibonacci;
    }

    private function montaStringFibonacci($matrizFibonacci) {
        $stringFibonacci = '';

        foreach ($matrizFibonacci as $numero) {
            $stringFibonacci .= $numero . ", ";
        }

        $stringFibonacci = substr($stringFibonacci, 0, strlen($stringFibonacci)-2);

        return $stringFibonacci;
    }

    private function salvaBancoDados($numeros, $stringFibonacci) {
        $params = ['numeros_sequencia_aleatoria' => $numeros, 'numeros_sequencia_fibonacci' => $stringFibonacci];

        $sequenciaFibonacci = new SequenciaFibonacci($params);
        $sequenciaFibonacci->save();
    }
}
