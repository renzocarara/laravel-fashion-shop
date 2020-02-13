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
           'ClothController@fullList')
            -> name('homepage'); // questo è il nome della rotta che uso all'interno del codice per richiamare la view
