<?php

Route::auth();

Route::get('/denied', function()
{
    return view('pages.admin.denied');
});

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'file'], function() {
    Route::post('/avatar', 'FileController@updateAvatar');
});

Route::group(['prefix' => 'meeting'], function() {
    Route::post('/create', 'MeetingController@create');
    Route::get('/schedule', 'MeetingController@schedule');
});

Route::get('/logo', function() {
    return view('components.hoverlogo');
});

Route::get('/members', 'MembersController@index');
Route::get('/members/ajax/{type}', 'MembersController@ajax');


//Admin routes
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::get('/admin', function()
    {
        return view('pages.admin.home');
        
    });

});