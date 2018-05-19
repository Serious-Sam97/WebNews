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


    public static function redefinindoSenhaIndex(Request $request){
        $all = $request ->all();
        $id = $all['id'];
        return \View::make('redefinindoSenha')
            ->with('id',$id);
    }


    public static function redefinindoSenha(Request $request){
        $all = $request ->all();

        $data = pessoa::retornaUsuarios()->toArray();

        foreach($data as $pessoa){
            if($pessoa['id'] == $all['id']){
                if($pessoa['senha'] == $all['senha']){
                echo "<script language=javascript>alert('Sua senha não pode ser a mesma' );</script>";
                return homeController::index();
                }
            }
        }
        pessoa::mudaSenha($all['id'],$all['senha']);

        echo "<script language=javascript>alert('A sua senha foi alterada com sucesso' );</script>";
        return homeController::index();
    }




    public static function emailRedefinirSenha(Request $request){
        $all = $request->all();

        $data = pessoa::retornaUsuarios()->toArray();

        foreach($data as $pessoa){
            if($pessoa['email'] == $all['email']){
                $destino = $pessoa;
            }

        }
        if($destino == null){
            echo "<script language=javascript>alert('O usuario não existe' );</script>";
            return homeController::index();
        }

        Mail::to($destino['email']) ->send(new \App\Mail\esqueceu($destino));
            echo "<script language=javascript>alert('Verifique a sua caixa de email' );</script>";
        return homeController::index();
        
    }
}
