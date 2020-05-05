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


//Page d'accueil
Route::get('/', function () {
    return view("index");
});


//Aller à la page inscription
Route::get('/inscription', function () {
    return view("inscription");
});

Route::post('/addUser', 'UserController@add');

