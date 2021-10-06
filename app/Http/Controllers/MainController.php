<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    function index()
    {
        return view('main');
    }
    function balance()
    {
        return view('balance');
    }
    function earn()
    {
        return view('earn');
    }
    function calc()
    {
        return view('calc');
    }
    function inventory()
    {
        return view('inventory');
    }
}
