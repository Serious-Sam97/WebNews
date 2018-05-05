<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pessoa;

class pessoaController extends Controller
{

    public function index() {
        return view('pessoaCadastro');
    }

    public function store(Request $request)
    {
        $tudo = $request ->all();
        $out = new pessoa();
        $out =['nome','email','nascimento','sexo'];
            $out->nome       = $tudo['nome'];
            $out->email      = $tudo['email'];
            $out->nascimento = $tudo['nascimento'];
            $out->sexo       = $tudo['sexo'];
        $out->save();
    }

    public function update(Request $request)
    {
        $all = $request->get();
        $id = $all->id();
        
        $nome = $all->nome;
        $email = $all->email;
        $nascimento = $all->nascimento;
        $sexo = $all->sexo;


        $pessoa = pessoa::find(1);


            $pessoa->nome = 'merdaASDFSDAFSDAFASDFASDFASDF';


            $pessoa->email = 'merda1@gmail.com';


            $pessoa->nascimento= '17/08/97';

            $pessoa->sexo = 'm';



        $pessoa->save();

    }

    public function destroy($id)
    {

    }
}
// SÓ RETORNA INT
//public function index(int $id)