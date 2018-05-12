<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public static function index(){

        //Ainda a terminar, fazer busca no banco de cada noticia!!!


        return view('home');
    }
}
