<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

/* PREMIERE PAGE ACCUEIL */
Route::get('/', function(){
    return view('accueil');
});

/* DEUXIEME PAGE FORMULAIRE COLLECTE DONNEES PATIENT */
Route::get('/collecte-patient', function(){
    return view('collecte-patient');
});

/* 3eme PAGE CLASSEMENT MALADIE */
Route::get('/classe-maladie', function(){
    return view('classe-maladie');
});
