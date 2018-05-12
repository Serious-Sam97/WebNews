<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pessoa;

class pessoaController extends Controller
{

    public function index() {
        return view('pessoaCadastro');
    }

    public function store(Request $request)
    {
        $tudo = $request ->all();
        $out = new pessoa();
            $out->nome       = $tudo['nome'];
            $out->senha      = $tudo['senha'];
            $out->email      = $tudo['email'];
            $out->nascimento = $tudo['nascimento'];
            $out->sexo       = $tudo['sexo'];
        $out->save();

        return homeController::index();
    }

    public function teste(Request $request){
        $all = $request->all();
        var_dump($all);
        die();
    }
}
// SÓ RETORNA INT
//public function index(int $id)