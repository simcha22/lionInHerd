<?php

use App\Http\Controllers\LessonCrudController;
use App\Http\Controllers\CategoryCrudController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/lessons', [LessonCrudController::class, 'index']);
Route::post('/lessons/create', [LessonCrudController::class, 'store']);
Route::get('/lesson/{id}', [LessonCrudController::class, 'show']);

Route::get('/categories',[CategoryCrudController::class, 'index']);
Route::post('/categories/create',[CategoryCrudController::class, 'store']);
Route::get('/category/{id}',[CategoryCrudController::class, 'show']);

Route::get('/users', [UserController::class, 'index']);
Route::post('/users/create', [UserController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::post('signup', [UserController::class, 'processSignup']);
// Route::post('login', [UserController::class, 'processLogin']);