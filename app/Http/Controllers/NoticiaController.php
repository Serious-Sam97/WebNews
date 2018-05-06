<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NoticiaController extends Controller
{
    function index(){
        $imgLogo = 'images/portal.png';


        return \View::make('noticiaGenerica')->with('imgLogo', $imgLogo);
    }
}
