<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pessoa;

class pessoaController extends Controller
{

    public function index() {
        return view('pessoaCadastro');
    }
    public static function retornaHomeLogin(){
        return view('homeLogin');
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
    public function login(Request $request){
        $all = $request->all();
        $usuarios = pessoa::retornaUsuarios()->toArray();

        foreach ($usuarios as  $usu){
            if($all['email'] == $usu['email'] && $all['senha'] == $usu['senha']){
                return self::show($usu['id'],$usu['nome']);
            }
        }
    }
    public function show($id,$nome)
    {
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;

        $nomeLogin = $_SESSION['nome'];

        return homeController::index($nomeLogin);

    }

    public function logout(){
      session()->flush();

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