<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public static function index($nome = 'Entrar'){

        $noticias = Noticia::returnNoticias();

        $value = session('nome');
        $id = session('id');
        $trueid = "userScreen(".$id.")";

        if(!$value)
            return \View::make('home')
                ->with('nome', $nome)
                ->with('noticias', $noticias)
                ->with('carro', 'sim');

        return \View::make('home')
            ->with('nome', $value)
            ->with('noticias', $noticias)
            ->with('carro', 'sim')
            ->with('id', $trueid);
    }

    function category(Request $request, $nome = 'Entrar'){
        $all = $request->all();
        
        $id = session('id');
        $trueid = "userScreen(".$id.")";

        $noticias = Noticia::returnByCategory($all['id']);

        $value = session('nome');

        if(!$value)
            return \View::make('home')
                ->with('nome', $nome)
                ->with('noticias', $noticias)
                ->with('carro', 'nao');

        return \View::make('home')
            ->with('nome', $value)
            ->with('noticias', $noticias)
            ->with('carro', 'nao')
            ->with('id', $trueid);
    }

}
