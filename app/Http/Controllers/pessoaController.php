<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pessoa;

class pessoaController extends Controller
{

    public function index($nome = 'Entrar')
    {

        $value = session('nome');

        if (!$value)
            return \View::make('pessoaCadastro')
                ->with('nome', $nome);

        return \View::make('pessoaCadastro')
            ->with('nome', $value);
    }

    public function store(Request $request)
    {
        $cadastroA = pessoa::retornaUsuarios()->toArray();

        $tudo = $request->all();

        foreach ($cadastroA as $key => $cad) {
            if (!$tudo['nome'] || $tudo['email'] == $cad['email'] || !$tudo['senha'] || !$tudo['nascimento'] || !$tudo['sexo']) {
                echo('<script type="text/javascript">
            alert("Você não preencheu algum campo!");
            </script>');

                return self::index();
            }
        }

        $out = new pessoa();
        $out->nome = $tudo['nome'];
        $out->senha = $tudo['senha'];
        $out->email = $tudo['email'];
        $out->nascimento = $tudo['nascimento'];
        $out->sexo = $tudo['sexo'];
        $out->save();

        session(['nome' => $tudo['nome']]);

        return self::show($tudo['nome']);
    }

    public function login(Request $request)
    {
        $all = $request->all();

        $usuarios = pessoa::retornaUsuarios()->toArray();

        foreach ($usuarios as $usu) {
            if ($all['email'] == $usu['email'] && $all['senha'] == $usu['senha']) {
                session(['id' => $usu['id']]);
                session(['nome' => $usu['nome']]);
                return self::show($usu['id'], $usu['nome']);
            }
        }
        echo('<script type="text/javascript"> 
        alert("Po cara você errou o email ou a senha!");
        </script>');

        return self::index();

    }

    public function show($nome)
    {
        session_start();
        $_SESSION['nome'] = $nome;
        $nomeLogin = $_SESSION['nome'];
        return homeController::index($nomeLogin);
    }

    public function logout()
    {
        session()->flush();

        return homeController::index();
    }
}