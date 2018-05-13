<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public static function index($nome = 'Entrar'){

        //Ainda a terminar, fazer busca no banco de cada noticia!!

        $value = session('nome');

        if(!$value)
            return \View::make('home')
                ->with('nome', $nome);

        return \View::make('home')
            ->with('nome', $value);



    }

}
