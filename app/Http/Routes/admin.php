<?php 
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
{

    Route::get('/', 'LoginController@index')->name('admin-login');
    Route::post('/', 'LoginController@index')->name('admin-login');
    Route::post('/logout', 'LoginController@logout')->name('admin-logout');

    Route::group(['middleware' => 'adminAuth'], function()
    {
       
        Route::get('dashboard', 'DashboardController@index')->name('admin-dashboard');

        Route::get('access-denied', function () {
            return view('admin-access-denied');
        })->name('admin-access-denied');

        Route::get('profile', 'AdminController@profile')->name('admin-profile');
        Route::post('profile', 'AdminController@profile')->name('admin-profile');

        

    });


});





?>