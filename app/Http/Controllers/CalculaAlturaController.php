<?php

namespace App\Http\Controllers;

use App\CalculaAltura;
use Illuminate\Http\Request;


/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 29/07/17
 * Time: 11:41
 *
 * Calcula a quantidade de anos para que uma pessoa seja maior
 * que a outra em relação ao crescimento em cm
 */

class CalculaAlturaController extends Controller {
    public function mostraAltura() {

        return view('paginas/problema3/mostra_altura');
    }

    private function todosBancoDados() {
        $dados = CalculaAltura::all();

        return $dados;
    }

    public function calculaAltura() {
        $qtdAnos = 0;

        $pessoas = $this->todosBancoDados();

        $pessoa1 = $pessoas[0];
        $pessoa2 = $pessoas[1];


        $alturaPessoa1 = $pessoa1->pessoa_altura_m * 100;
        $alturaPessoa2 = $pessoa2->pessoa_altura_m * 100;

       while($alturaPessoa2 <= $alturaPessoa1) {
           $alturaPessoa1 += $pessoa1->pessoa_crescimento_cm;
           $alturaPessoa2 += $pessoa2->pessoa_crescimento_cm;

           $qtdAnos++;
       }

        return response()->json(['qtdAnos' => $qtdAnos]);


    }
}
