<?php

namespace App\Http\Controllers;

use App\MenuPrincipal;
use Illuminate\Http\Request;

class MenuPrincipalController extends Controller {
    function mostraMenu() {
        $itensMenu = MenuPrincipal::all();

        return view('paginas/pagina_inicial')->with('itensMenu', $itensMenu);
    }
}

?>
