<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function inner(){
        return view('inner-page');
    }
    public function portofolio(){
        return view('portfolio-details');
    }
}
