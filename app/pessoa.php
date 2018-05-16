<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pessoa extends Model
{
    protected $table = 'pessoa';

    protected $fillable = ['nome','email','senha', 'nascimento', 'sexo'];

    public static function retornaUsuarios(){
        return self::select('id','nome','email','senha','nascimento','sexo')
            ->get();
    }

    public static function returnUserData($id){
        return self::select('nome', 'email', 'nascimento', 'sexo')
            ->where('id', $id)
            ->get();
    }

    public static function mudaSenha($id, $nova){ 
        return self::table('pessoa')
            ->where('id', $id)
            ->update(['senha' => $nova]);
    }
}
