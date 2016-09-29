<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});




//Route::get('/back', function () {
//    return view('admin.index');
//});

Auth::routes();

Route::get('/back', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');
