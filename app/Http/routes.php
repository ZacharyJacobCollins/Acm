<?php

Route::get('/', function () {
    return view('pages.welcome.index');
});

Route::auth();
Route::get('/home', 'HomeController@index');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/members', 'MembersController@index');

Route::group(['prefix' => 'update'], function() {
    Route::post('/avatar', 'UploadController@updateAvatar');
});

Route::get('/members/ajax/{type}', 'MembersController@ajax');