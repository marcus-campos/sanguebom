<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/','app\controllers\HomeController@index',['only'=>['index']]);

Route::resource('/cadastraDoador','app\controllers\PessoaController@create');
Route::post('/cadastraDoador','app\controllers\PessoaController@store');
Route::resource('/solicitaDoacao','app\controllers\solicitaDoacaoController@create');
Route::post('/cadastraSolicitaDoacao','app\controllers\solicitaDoacaoController@store');
Route::resource('/quem-pode-doar','app\controllers\PessoaController@quemDoa');
Route::resource('/doadores','app\controllers\PessoaController@doadores');