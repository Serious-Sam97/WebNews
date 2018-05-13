<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public static function index(Request $request, $nome = 'entrar'){

        //Ainda a terminar, fazer busca no banco de cada noticia!!

        return \View::make('home')
            ->with('nome', $nome);

    }
    public static function show(Request $request,$id=-1){

        //procura a session e pega o nome da pessoa 
        $usuarios = pessoa::retornaUsuarios()->toArray();
        $all = $request->all();

        if ($request->session()->has($id)) {
            foreach ($usuarios as  $usu){
                if($id == $usu['id']){
                    $nome = $usu['nome'];

                    
                }
            }

        }else {
            $nome = 'entrar';
        }

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
