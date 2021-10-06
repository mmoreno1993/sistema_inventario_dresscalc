<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$router->get('/', 'LoginController@index');
$router->get('/login', 'LoginController@login');
$router->get('/logout', 'LoginController@logout');
$router->post('/login', 'LoginController@login');
$router->get('/registro', 'LoginController@registro');
$router->get('/main', 'MainController@index');
$router->get('/balance', 'MainController@balance');
$router->get('/earn', 'MainController@earn');
$router->get('/calc', 'MainController@calc');
$router->get('/inventory', 'MainController@inventory');