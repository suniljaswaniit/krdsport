<?php 
/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'website'], function()
{
    Route::get('/', 'HomeController@index')->name('website-home');






    Route::get('contact', 'ContactController@index')->name('website-contact');
    Route::post('contact', 'ContactController@index')->name('website-contact');

});



?>