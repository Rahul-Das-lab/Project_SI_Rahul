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
Route::get('/index', function () {
    return view("index");
});

//Page d'accueil connecté
Route::get('/home', function() {
    return view('home');
});

//Aller à la page inscription
Route::get('/inscription', function () {
    return view("inscription");
});

//Aller à modifer profil
Route::get('/home/profil', function() {
    return view('profil');
});

//Aller page de connexion
Route::get('/connexion', function () {
    return view("connexion");
});

//Aller à la page de candidature
Route::get('/home/apply', function() {
    return view('apply');
});

//Aller à la page de dépôt de commentaire
Route::get('/home/commentToAdmin', function() {
    return view('commentToAdmin');
});



//Ajouter un user
Route::post('/addUser', 'UserController@add');


//Connexion
Route::post('/connectUser', "UserController@connexionUser")->name("connectUser");


//Modifier le profil
Route::post('/modifProfil', 'UserController@modifierProfil');


//Envoyer un commentaire
Route::post('/sendComment', 'UserController@comment');


//Dépot de candidature
Route::post('/candidate', 'CandidatureController@apply');