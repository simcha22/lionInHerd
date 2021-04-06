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
Route::view('about', 'pages.about');
Route::get('live', 'LiveController@getLive');
//שיעורים ודרשות
Route::get('lessons', 'categoryController@displayCategoryLessons');
//ספרים
Route::get('books', 'booksController@getBooks');

//רבנים
Route::get('rabbis', 'RabbiController@getRabbis');

//משתמשים
Route::get('signup', 'UserController@displaySignup');
Route::post('signup', 'UserController@processSignup');

Route::get('login', 'UserController@displayLogin');
Route::post('login', 'UserController@processLogin');

//צור קשר
Route::get('contact-rabbi', 'UserController@displayContactRabbi');
Route::get('contact-system', 'UserController@displayContactSystem');

Route::view('admin', 'admin.main');