<?php

namespace App\Http\Controllers;

use App\pessoa;
use Illuminate\Http\Request;
use mail;

class userController extends Controller
{
    public static function index($nome = 'Entrar'){

        $value = session('nome');
        $id = session('id');

        $data = pessoa::returnUserData($id)->toArray();

        if(!$value)
            return \View::make('userScreen')
                ->with('nome', $nome);

        return \View::make('userScreen')
            ->with('nome', $value)
            ->with('id', $id)
            ->with('data', $data);
    }

    public static function redefinirSenhaView(){
        return \View::make('redefinirSenha');
    }

    public static function redefinirSenha(Request $request){
        $all = $request->all();

        mail($all['email'], 'teste', 'XVIDEOS', 'samir');

    }
}
