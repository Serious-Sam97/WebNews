<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pessoa extends Model
{
    protected $table = 'pessoa';

    protected $fillable = ['nome','email','senha', 'nascimento', 'sexo'];

    public static function retornaUsuarios(){
        return self::select('id','nome','email','senha','nascimento','sexo')->get();
    }
}
