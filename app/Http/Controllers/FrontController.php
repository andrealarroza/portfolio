<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index(){
        $proyectos = config('info.proyectos');

        return view('front.index', compact('proyectos'));
    }
}
