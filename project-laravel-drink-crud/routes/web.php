<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index') -> name('index-route');

Route::get('/show/{id}', 'MainController@show') -> name('show-route');

Route::get('/create', 'MainController@create') -> name('create-route');
Route::post('/store', 'MainController@store') -> name('store-route');