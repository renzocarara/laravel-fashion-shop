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
            -> name('homepage'); // questo è il nome della rotta che uso all'interno del codice per richiamare la view

Route::get('/catalogo',
           'ClothController@fullList')
            -> name('fullList');

Route::get('/economici',
           'ClothController@cheapList')
            -> name('cheap');
