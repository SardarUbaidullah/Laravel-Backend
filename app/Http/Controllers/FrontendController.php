<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('Frontend.index');
    }
    public function about(){
        return view('Frontend.about');
    }
    public function book(){
        return view('Frontend.book');
    }
    public function menu(){
        return view('Frontend.menu');
    }
}
