<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    function index(){
        return view("noticiaTeste");
    }
}
