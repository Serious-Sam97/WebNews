<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public static function index($nome = 'Entrar'){

        $noticias = Noticia::returnNoticias();

        $value = session('nome');

        if(!$value)
            return \View::make('home')
                ->with('nome', $nome)
                ->with('noticias', $noticias);

        return \View::make('home')
            ->with('nome', $value)
            ->with('noticias', $noticias);
    }

}
