<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relacao extends Model
{
    protected $table = 'relacao';

    protected $fillable = ['categoria','noticia'];
}
