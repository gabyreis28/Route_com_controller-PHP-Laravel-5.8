<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('produto'(nome da rota),'MyController(nome da classe)@produto(nome do método)');
Route::get('produtos', 'MyController@produtos');
Route::get('nome', 'MyController@getNome');
Route::get('idade', 'MyController@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'MyController@multiplicar');