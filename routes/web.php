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
Route::get('/', // questo è quello che appare nella barra indirizzi (è lo 'slug')
           'ClothController@home') // questo è il controller e un suo metodo che viene invocato
            -> name('homepage'); // questo è il nome della rotta che uso all'interno del codice per richiamarla

Route::get('/catalogo',
           'ClothController@fullList')
            -> name('fullList');

Route::get('/risparmiosi',
           'ClothController@cheapList')
            -> name('cheap');

Route::get('/inserimento',  // slug, questo nome appare solo nella barra indirizzi
           'ClothController@createItem') // invocazione del metodo 'createItem' del controller 'ClothController'
            -> name('insert');  // nome della route

            // questa è una rotta a cui non è associata una specifica view!
            // Ovvero il metodo invocato non fa return di una view specifica ma una REDIRECT alla
            // rotta 'homepage'.
            // Viene richiamata quando l'utente fa il SUBMIT del form.
            // Il metodo richiamato riceve in POST i dati del FORM (tramite Request)
            // li elabora e prepara una nuova istanza di Cloth da scrivere nel DB.
            // Fa una 'redirect' verso la rotta 'homepage' (tipo il meccanismo POST REDIRECT GET)
Route::post('/inserimento',  // slug, questo url in effetti non viene visto dall'utente, perchè il metodo storeItem
                             // dopo le sue elaborazioni fa una redirect verso la rotta 'homepage'
           'ClothController@storeItem') // invocazione del metodo 'storeItem' del controller 'ClothController'
            -> name('store');  // nome della route
