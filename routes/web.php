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

Route::get('about', function () {
    return view('front.about');
});
Route::get('services', function () {
    return view('front.services');
});
Route::get('contact', function () {
    return view('front.contact');
});
Route::get('portfolio', function () {
    return view('front.portfolio');
});
Route::get('whycu', function () {
    return view('front.whycu');
});




//Route::get('/back', function () {
//    return view('admin.index');
//});

Auth::routes();

Route::get('/back', 'HomeController@index');
Route::get('/back/users', 'UserController@index');
Route::get('/logout', 'Auth\LoginController@logout');
