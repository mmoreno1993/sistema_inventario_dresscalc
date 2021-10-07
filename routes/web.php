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
$router->post('/registro', 'LoginController@registro');
Route::group(['middleware' => 'admin'], function () {
    Route::get('/main', 'MainController@index');
    Route::get('/balance', 'MainController@balance');
    Route::post('/balance/save', 'MainController@save');
    Route::get('/earn', 'MainController@earn');
    Route::get('/calc', 'MainController@calc');
    Route::get('/inventory', 'MainController@inventory');
    Route::get('/contact', 'MainController@contact');
    Route::get('/contact/ventas', 'MainController@ventas');
    Route::get('/contact/gastos', 'MainController@gastos');
});
