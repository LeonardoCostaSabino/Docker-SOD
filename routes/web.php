<?php

use \Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/sobre', function () {
    return view('pages.sobre');
});

Route::get('/funcoes', function () {
    return view('pages.funcoesSOD');
});

Route::get('/localizar', function () {
    return view('pages.localizar');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/localizar', 'LocalizadorController@index')->name('localizar');

Route::get('/logout', function (){
    Auth::logout();
    return redirect()->route('login');
});

