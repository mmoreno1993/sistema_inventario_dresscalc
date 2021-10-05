<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    function login()
    {
        return view('login');
    }
    function registro()
    {
        return view('registro');
    }
}
