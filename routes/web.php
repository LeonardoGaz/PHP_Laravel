<?php

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
    return "Olá" . 
        "<br>Esta é a rota para cadastro/listagem de hábitos!";
    
    //return view('welcome');
});

Route::get('habitos','HabitosController@index');
