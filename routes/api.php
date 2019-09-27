<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('cadastrar', 'API\NucleoController@cadastrar');
Route::get('mostrar', 'API\NucleoController@mostrarTodos');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();

Route::middleware('auth:api')->group( function () {
    Route::resource('nucleos', 'API\NucleoController');
    Route::resource('enderecos', 'API\EnderecoController');
    Route::resource('telefones', 'API\TelefoneController');
    Route::resource('pessoas', 'API\PessoaController');
});
