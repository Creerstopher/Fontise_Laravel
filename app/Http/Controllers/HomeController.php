<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function catalog()
    {
        return view('pages.catalog');
    }
}
