<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index']);
Route::get('/about', [App\Http\Controllers\FrontEndController::class, 'about']);
Route::get('/services', [App\Http\Controllers\FrontEndController::class, 'services']);
Route::get('/whyus', [App\Http\Controllers\FrontEndController::class, 'whyus']);
Route::get('/contact', [App\Http\Controllers\FrontEndController::class, 'contact']);
Route::get('/portfolio', [App\Http\Controllers\FrontEndPortfolioController::class, 'portfolio']);


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
