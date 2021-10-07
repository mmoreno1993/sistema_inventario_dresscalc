<?php

namespace App\Http\Controllers;
use App\Http\Models\User;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    function login(Request $request)
    {
        if($request['txtEmail'] != '' && $request['txtPassword'] != ''){
            $user = User::where('email', $request['txtEmail'])
                ->where('password', $request['txtPassword'])
                ->where('enabled', 1)
                ->first();
            if($user != null){
                $request->session()->put('user_token', $user->id);
                return redirect('/main');
            }
            return view('login', ['error' => true]);
        }
        //unset($request[]);
        return view('login', ['error' => false]);
    }
    function registro(Request $request)
    {
        if(!isset($_POST))
            return view('registro', ['error' => false, 'message' => '']);
        $check = User::where('email', $request['txtEmail'])
            ->where('enabled', 1)->first();
        if(trim($request['txtNombres']) != '' && trim($request['txtEmail']) != '' && trim($request['txtPassword']) != '')
        {
            if($check != null)
                return view('registro', ['error' => true, 'message' => 'Este email ya se encuentra registrado']);
            $user = User::create([
                'full_name' => $request['txtNombre'],
                'email' => $request['txtEmail'],
                'password' => $request['txtPassword'],
                'created_at' => date('Y-m-d H:i:s'),
                'enabled' => 1,
            ]);
        }
        return view('registro', ['error' => false, 'message' => '']);
    }
    function logout(Request $request)
    {
        $request->session()->forget('user_token');
        return redirect('/');
    }
}
