<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pessoa;

class pessoaController extends Controller
{

    public function index($nome = 'Entrar') {

        $value = session('nome');

        if(!$value)
            return \View::make('pessoaCadastro')
                ->with('nome', $nome);

        return \View::make('pessoaCadastro')
            ->with('nome', $value);
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

        session(['nome' => $tudo['nome']]);

        return self::show($tudo['nome']);
    }
    public function login(Request $request){
        $all = $request->all();

        $usuarios = pessoa::retornaUsuarios()->toArray();

        foreach ($usuarios as  $usu){
            if($all['email'] == $usu['email'] && $all['senha'] == $usu['senha']){
                session(['id' => $usu['id']]);
                session(['nome' => $usu['nome']]);
                return self::show($usu['id'],$usu['nome']);
            }
        }
    }
    public function show($nome)
    {
        session_start();
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