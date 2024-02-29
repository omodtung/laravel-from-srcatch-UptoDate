<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index1()
    {
        return "hello";
    }
    public function about()
    {
        return view('serviceBase');
    }

    public function sa()
    {
        return view('serviceAdvance');
    }
}
