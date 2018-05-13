<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticia';

    protected $fillable = ['text','imagem','cat'];

    public static function returnArticle($id){
        return self::select('noticia.text', 'noticia.imagem')
            ->where('noticia.id', $id)
            ->get();
    }


    public static function returnTecnologia(){
        return self::select('noticia.text', 'noticia.imagem','categoria.nome')
            ->join('categoria', 'categoria.id', '=', 'noticia.cat')
            ->where('noticia.cat', 1)
            ->get();
    }
    public static function returnAnime(){
        return self::select('noticia.text', 'noticia.imagem','categoria.nome')
            ->join('categoria', 'categoria.id', '=', 'noticia.cat')
            ->where('noticia.cat', 2)
            ->get();
    }
    public static function returnManga(){
        return self::select('noticia.text', 'noticia.imagem','categoria.nome')
            ->join('categoria', 'categoria.id', '=', 'noticia.cat')
            ->where('noticia.cat', 3)
            ->get();
    }
    public static function returnFilmes(){
        return self::select('noticia.text', 'noticia.imagem','categoria.nome')
            ->join('categoria', 'categoria.id', '=', 'noticia.cat')
            ->where('noticia.cat', 4)
            ->get();
    }
    public static function returnSeries(){
        return self::select('noticia.text', 'noticia.imagem','categoria.nome')
            ->join('categoria', 'categoria.id', '=', 'noticia.cat')
            ->where('noticia.cat', 5)
            ->get();
    }
    public static function returnJogos(){
        return self::select('noticia.text', 'noticia.imagem','categoria.nome')
            ->join('categoria', 'categoria.id', '=', 'noticia.cat')
            ->where('noticia.cat', 6)
            ->get();
    }
    public static function returnLivros(){
        return self::select('noticia.text', 'noticia.imagem','categoria.nome')
            ->join('categoria', 'categoria.id', '=', 'noticia.cat')
            ->where('noticia.cat', 7)
            ->get();
    }

}
