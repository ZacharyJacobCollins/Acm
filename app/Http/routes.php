<?php

Route::get('/', function () {
    return view('pages.welcome.index');
});

Route::auth();
Route::get('/home', 'HomeController@index');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/members', 'MembersController@index');