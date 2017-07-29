<?php

namespace App\Http\Controllers;

use App\Matriz;
use Illuminate\Http\Request;
Use DB;

/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 29/07/17
 * Time: 11:41
 *
 * Constroi uma matriz 5x5 e imprime os valores de toda a matriz,
 * apenas o pares e apenas os impares.
 */

class MatrizController extends Controller {

    public function mostraMatriz() {
        if($this->verificaBancoDados()) {
            $this->criaMatriz();
        }

        $matriz = $this->recuperaMatriz();
        $matrizPar = $this->recuperaMatrizPar();
        $matrizImpar = $this->recuperaMatrizImpar();

        return view('paginas/problema2/mostra_matriz')->
                with(['matriz'=> $matriz, 'matrizPar' => $matrizPar, 'matrizImpar' => $matrizImpar]);
    }


    private function verificaBancoDados() {
        $estaVazio = false;
        $dados = Matriz::all();

        if(count($dados) == 0) {
           $estaVazio = true;
        }


        return $estaVazio;
    }

    private function criaMatriz() {
        for($i=0; $i < 5; $i++) {
            for($j=0; $j < 5; $j++) {
                $matriz_conteudo = rand(0, 100000);
                $matriz_posicao = $i.$j;

                $novaMatriz = ['matriz_posicao' => $matriz_posicao, 'matriz_conteudo' => $matriz_conteudo];

                $matriz = new Matriz($novaMatriz);
                $matriz->save();
            }
        }
    }

    private function recuperaMatriz() {
        $dados = Matriz::all();
        $matriz = array();

        foreach($dados as $dado) {
            $matriz[substr($dado->matriz_posicao, 0, 1)][substr($dado->matriz_posicao, 1, 1)] = $dado->matriz_conteudo;

        }

        return $matriz;
    }


    private function recuperaMatrizPar() {
        $dados = Matriz::all();
        $matrizPar = array();

        foreach($dados as $dado) {

            if($dado->matriz_conteudo % 2 == 0)
                $matrizPar[substr($dado->matriz_posicao, 0, 1)][substr($dado->matriz_posicao, 1, 1)] = $dado->matriz_conteudo;

        }

        return $matrizPar;
    }

    private function recuperaMatrizImpar() {
        $dados = Matriz::all();
        $matrizImpar = array();

        foreach($dados as $dado) {

            if($dado->matriz_conteudo % 2 != 0)
                $matrizImpar[substr($dado->matriz_posicao, 0, 1)][substr($dado->matriz_posicao, 1, 1)] = $dado->matriz_conteudo;

        }


        return $matrizImpar;
    }
}
