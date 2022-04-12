<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index')->name('page.home');

// da cancellare
Route::get('/welcome', function () {
    return view('welcome');
});

