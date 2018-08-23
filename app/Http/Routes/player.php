<?php 
/*
|--------------------------------------------------------------------------
| Player Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'Player', 'prefix' => 'player'], function () 
{
    
    Route::get('/', 'LoginController@index')->name('player-login');
    Route::post('/', 'LoginController@index')->name('player-login');
    Route::get('/logout', 'LoginController@logout')->name('player-logout');


    Route::get('forgot-password', 'ForgotPasswordController@index')->name('player-forgot-password');
    Route::post('forgot-password', 'ForgotPasswordController@index')->name('player-forgot-password');

    Route::get('reset-password/{id}/{key}', 'ForgotPasswordController@reset')->name('player-reset-password');
    Route::post('reset-password/{id}/{key}', 'ForgotPasswordController@reset')->name('player-reset-password');


    Route::get('register-step-1', 'RegisterController@step1')->name('website-register-step-1');
    Route::post('register-step-1', 'RegisterController@step1')->name('website-register-step-1');


    Route::get('register-step-2', 'RegisterController@step2')->name('website-register-step-2');
    Route::post('register-step-2', 'RegisterController@step2')->name('website-register-step-2');

    Route::get('register-step-3', 'RegisterController@step3')->name('website-register-step-3');
    Route::post('register-step-3', 'RegisterController@step3')->name('website-register-step-3');




});



?>