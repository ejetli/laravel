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

Route::get('licences', 'PagesController@getLicences');
Route::get('users', 'PagesController@getUsers');
Route::get('admin', 'PagesController@getAdmin');
Route::get('/','PagesController@getIndex');


/*Route::get('/hi', function () {
    return 'Hi Jet';
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
