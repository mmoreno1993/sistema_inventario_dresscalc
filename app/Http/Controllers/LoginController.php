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
        if(@$_POST['txtEmail'] != null)
            return redirect('/main');
        unset($_POST);
        return view('login');
    }
    function registro()
    {
        return view('registro');
    }
    function logout()
    {
        unset($_POST);
        return redirect('/');
    }
}
