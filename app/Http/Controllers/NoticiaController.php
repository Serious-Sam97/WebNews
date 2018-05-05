<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NoticiaController extends Controller
{
    function index(){
        $imgLogo = 'portal.png';
        //return \Illuminate\Support\Facades\View::make("noticiaGenerica")->with($imgLogo);
        return \View::make('noticiaGenerica')->with('imgLogo', $imgLogo);
    }
}
