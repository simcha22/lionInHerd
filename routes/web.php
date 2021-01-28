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


Route::get('/', function () {
    return view('template');
});
*/
//Route::view('/', 'template');

Route::view('/', 'pages.home');
Route::view('/about', 'pages.about');

Route::get('/books', 'booksController@getBooks');
