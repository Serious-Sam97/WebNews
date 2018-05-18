<?php

namespace App\Http\Controllers;

use App\pessoa;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Mail;

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
    public static function redefinindoSenha(Request $request){
        $all = $request ->all();

        pessoa::mudarSenha($all["id"], $all["senha"]);

        return homeController::index();
    }

    public static function redefinirSenha(Request $request){
        $all = $request->all();

        $data = pessoa::retornaUsuarios()->toArray();

        foreach($data as $pessoa){
            if($pessoa['email'] == $all['email']){
                $destino = $pessoa;
            }

        }
        if($destino == null){
            echo "<script language=javascript>alert('o usuario não existe' );</script>";
            return homeController::index();
        }

        

        Mail::to($destino['email']) ->send(new \App\Mail\esqueceu($destino));
            echo "<script language=javascript>alert('verifique a sua caixa de email' );</script>";
        return homeController::index();
        
    }
}
