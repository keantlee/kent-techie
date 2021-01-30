<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //view index page
    public function index(){
        return view('index');
    }

    //view desktop page
    public function desktop(){
        return view('pages.desktop');
    }

    //view laptop page
    public function laptop(){
        return view('pages.laptop');
    }

    //view console page
    public function console(){
        return view('pages.console');
    }

    //view console game page
    public function game(){
        return view('pages.game_console');
    }
}
