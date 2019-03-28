<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function notfound(){
        return view('site.404');
    }
    public function aboutUs(){
        return view('site.about_us');
    }
    public function terms(){
        return view('site.terms');
    }
}
