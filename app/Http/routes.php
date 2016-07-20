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
    Route::match(['post', 'get'], '/checkin', 'Meetingcontroller@checkIn');
});

Route::get('/logo', function() {
    return view('components.hoverlogo');
});

Route::group(['prefix' => 'members'], function() {
    Route::get('/', 'MembersController@index');
    Route::get('/ajax/{type}', 'MembersController@ajax');
    Route::match(['post', 'get'], '/courses', 'MembersController@courses');
});


//Admin routes
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::get('/admin', function()
    {
        return view('pages.admin.home');
        
    });

});