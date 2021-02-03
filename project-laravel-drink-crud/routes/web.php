<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index') -> name('index-route');

Route::get('/show/{id}', 'MainController@show') -> name('show-route');

Route::get('/create', 'MainController@create') -> name('create-route');
Route::post('/store', 'MainController@store') -> name('store-route');

Route::get('/edit/{id}', 'MainController@edit') -> name('edit-route');
Route::post('/update/{id}', 'MainController@update') -> name('update-route');

Route::get('/delete/{id}', 'MainController@delete') -> name('delete-route');