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

//Ajouter un user
Route::post('/addUser', 'UserController@add');

//page de connexion
Route::get('/connexion', function () {
    return view("connexion");
});

Route::post('/connectUser', "UserController@connexionUser");