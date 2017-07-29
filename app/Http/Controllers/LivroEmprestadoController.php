<?php

namespace App\Http\Controllers;

use App\LivroEmprestado;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 28/07/17
 * Time: 20:41
 *
 * Salva e calcula o tempo de emprestimo de uma livro para aluno
 * ou professor
 */

class LivroEmprestadoController extends Controller {

    /*
     * Retorna pagina com formulario para entrada de dados
     */
    public function mostraFormulario() {
        return view('paginas/problema1/form_livro_emprestado');
    }

    /*
     * Salva formulario no banco de dados com os dados passados
     * Retorna dado JSON com id da linha que foi inserida no Banco
     * de Dados
     */
    public function salvaFormulario(Request $request) {
        $date = new Datetime();
        $params = $request->all();

        $params['livro_data_emprestimo'] = $date->format('d/m/Y');
        $params['livro_data_entrega'] = $this->calculaDataEntrega($params['livro_tipo_usuario'], $date);

        $livroEmprestado = new LivroEmprestado($params);

        $livroEmprestado->save($params);

        return response()->json(['id' => $livroEmprestado->id]);
    }

    /*
     * Retorna pagina com o resumo de um empresitmo
     * É passado o id do emprestimo para procura no banco de dados
     */
    public function mostraEmprestimo($idEmprestimo) {
        $livroEmprestado = LivroEmprestado::find($idEmprestimo);

        return view('paginas/problema1/mostra_emprestimo')->with('livroEmprestado', $livroEmprestado);
    }

    /*
     * Calcula a data de entrega conforme o tipo de usuario
     * 1. aluno
     * 2. Professor
     */
    private function calculaDataEntrega($tipoUsuario, $dataEmpretimo) {

        if($tipoUsuario == 1) {
            $dataEmpretimo = $dataEmpretimo->add(new DateInterval('P3D'))->format('d/m/Y');

        } else {
            $dataEmpretimo = $dataEmpretimo->add(new DateInterval('P10D'))->format('d/m/Y');

        }

        return $dataEmpretimo;
    }


}
