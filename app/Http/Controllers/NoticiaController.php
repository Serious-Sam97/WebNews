<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoticiaController extends Controller
{
    function index($idArticle){
        $articles = Noticia::returnArticle($idArticle);
        $articles = $articles->toArray();

        $text = $articles[0]['text'];
        $imgText = $articles[0]['imagem'];

        $imgLogo = 'images/portal.png';

        return \View::make('noticiaGenerica')
            ->with('imgLogo', $imgLogo)
            ->with('text', $text)
            ->with('imgText', $imgText)
            ;
    }
}
