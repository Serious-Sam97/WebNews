<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pessoa extends Model
{
    protected $table = 'pessoa';

    protected $fillable = ['nome',  'email', 'nascimento', 'sexo'];

    public function update($id,$nome='',$email='',$nascimento='',$sexo='')
    {
        $pessoa = new Pessoa();
        $pessoa->find($id);

        if(!$pessoa->nome == ''){
            $pessoa->nome = $nome;
        }
        if(!$pessoa->email == ''){
            $pessoa->email = $email;
        }
        if(!$pessoa->nascimento == ''){
            $pessoa->nascimento= $nascimento;
        }
        if(!$pessoa->sexo == '') {
            $pessoa->sexo = $sexo;
        }

        $pessoa->save();
    }

}
