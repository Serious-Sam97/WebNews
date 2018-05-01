<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relacao extends Model
{
    protected $table = 'noticia';

    protected $fillable = ['categoria','noticia'];
}
