<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //home
    public function index(){
        return view('pages.index');
    }
}