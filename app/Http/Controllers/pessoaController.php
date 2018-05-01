<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pessoa extends Controller
{

    public function index() {
        return view('');
    }

    public function store(Request $request)
    {
        $tudo = $request ->all();
        $out = ['nome',  'email', 'nascimento',];
            $out->name       = $tudo['name'];
            $out->email      = $tudo['email'];
            $out->nascimento = $tudo['nascimento'];
        $out->save();
    }

    public function update(Request $request, int $id)
    {
        $tudo = $request ->all();
        $out = Pessoa::find($id);
            $out->name       = $tudo['name'];
            $out->email      = $tudo['email'];
            $out->nascimento = $tudo['nascimento'];
        $out->save();
    }

    public function destroy(int $id)
    {
        App\Flight::destroy(id);
    }
}
// SÓ RETORNA INT
//public function index(int $id)