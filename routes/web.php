<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(['prefix' => '/'], function () {
    Route::get('', 'HomeController@index');
});
Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
});





// Route::get('language/{lang}', 'LanguageController@index');

//If unknown url, redirect to homepage.
Route::any('{query}',
    function() { return redirect('/'); })
    ->where('query', '.*');