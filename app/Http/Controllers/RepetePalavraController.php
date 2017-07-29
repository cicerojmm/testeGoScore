<?php

/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 29/07/17
 * Time: 12:38
 *
 * Recebe uma palavra e mostra ela em forma de pirâmede, com diversas
 * repetições
 */

namespace App\Http\Controllers;

use App\RepetePalavra;
use Illuminate\Http\Request;

class RepetePalavraController extends Controller {
    public function mostraFormulario() {
        return view('paginas/problema4/repete_palavras');
    }

    public function repetePalavra(Request $request) {
        $palavra = $request->all();
        $contatenacao = '';
        $stringFinal = '';

        for($i = 0; $i < 4; $i++) {
            $contatenacao .= ' ' . strtoupper($palavra['palavra']);

            $stringFinal .= $contatenacao . ',';
        }

        $stringFinal = substr($stringFinal, 0, strlen($stringFinal)-1);

        $this->salvaBancoDados($palavra['palavra'], $stringFinal);

        $palavraRetorno = $this->criaMatriString($stringFinal);

        return view('paginas/problema4/repete_palavras')->with('palavraRepetida', $palavraRetorno);

    }


    public function criaMatriString($string) {
        $stringRetorno = explode(',', $string);


        return $stringRetorno;
    }

    private function salvaBancoDados($palavra, $stringFinal) {
        $params = ['palavra_original' => $palavra, 'palavra_repetida' => $stringFinal];

        $repetePalavra = new RepetePalavra($params);
        $repetePalavra->save();
    }


}
