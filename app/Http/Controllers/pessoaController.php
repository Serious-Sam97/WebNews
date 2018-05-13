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

                $request->session()->put($usu['id'], $usu['nome']);

                
                return homeController::show($request,$usu['id']);
            }
        }
    }
    public function show(Request $request,$id)
    {
        
        // $usuarios = pessoa::retornaUsuarios()->toArray();
        // $all = $request->all();

        // if ($request->session()->has($id)) {
        //     foreach ($usuarios as  $usu){
        //         if($id == $usu['id']){
        //             $nome = $usu['nome'];

        //             return homeController::index($nome);
        //         }
        //     }

        //     return homeController::index();
        // }

       
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