<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoticiaController extends Controller
{
    function index(Request $request){
        $all = $request->all();

        $value = session('nome');

        $articles = Noticia::returnArticle($all['id']);
        $articles = $articles->toArray();

        $text = $articles[0]['text'];
        $imgText = $articles[0]['imagem'];

        $imgLogo = 'images/portal.png';

        if(!$value)
            return \View::make('noticiaGenerica')
                ->with('imgLogo', $imgLogo)
                ->with('text', $text)
                ->with('imgText', $imgText)
                ;
        return \View::make('noticiaGenerica')
            ->with('imgLogo', $imgLogo)
            ->with('text', $text)
            ->with('imgText', $imgText)
            ->with('nome', $value)
            ;
    }
}
