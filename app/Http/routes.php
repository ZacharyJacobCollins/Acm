<?php

Route::auth();

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/members', 'MembersController@index');

Route::group(['prefix' => 'file'], function() {
    Route::post('/avatar', 'FileController@updateAvatar');
});

Route::get('/members/ajax/{type}', 'MembersController@ajax');

Route::group(['prefix' => 'meeting'], function() {
    Route::post('/create', 'MeetingController@create');
    Route::post('/review', 'MeetingController@reviewMeeting');
});