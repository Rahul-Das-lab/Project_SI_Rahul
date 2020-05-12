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

//Page index
Route::get('/', function() {
    return redirect('home');
});

//déconnexion
Route::get('/logout', function() {
    Session::forget('user');
    return redirect('connexion');
});

//Lister les candidatures (prof)
Route::get('/prof/candidatures', "CandidatureController@listCandidatures");

//Page ajout de professeurs
Route::get('/admin/addTeacher', "UserController@addTeacher");

//Admin messagerie
Route::get("/admin/inbox", "UserController@listmsg");
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


//Changer statut
Route::post('/changeStatut', 'CandidatureController@updateStatut');


//Traitement ajouter un professeur par admin
Route::post('/newTeacher', 'UserController@newTeacher');


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