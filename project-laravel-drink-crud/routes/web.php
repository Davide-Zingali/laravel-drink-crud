<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index') -> name('index-route');

Route::get('/show/{id}', 'MainController@show') -> name('show-route');
