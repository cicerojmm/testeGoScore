<?php

namespace App\Http\Controllers;

use App\MenuPrincipal;
use Illuminate\Http\Request;

class MenuPrincipalController extends Controller {
    /*
     * Retorna view com os dados do menu principal para a pagina inicial
     */
    function mostraMenu() {
        $itensMenu = MenuPrincipal::all();

        return view('paginas/pagina_inicial')->with('itensMenu', $itensMenu);
    }
}

?>
