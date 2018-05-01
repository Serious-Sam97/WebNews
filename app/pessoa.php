<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pessoa extends Model
{
    protected $table = 'pessoa';

    protected $fillable = ['nome',  'email', 'nascimento'];
}
