<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index')->name('page.home');

Route::get('/partecipants', 'PartecipantController@create')->name('page.create');

Route::post('/partecipants/store', 'PartecipantController@store')->name('partecipants.store');
