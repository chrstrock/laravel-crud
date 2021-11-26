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
//Delete route
Route::delete('/posts/{post}', 'PostController@destroy');

//Update route
Route::post('/posts/{post}', 'PostController@update');

//Post edit route
Route::get('/posts/{post}', 'PostController@edit');

//Store route
Route::post('/create', 'PostController@store');

//Create route
Route::get('/create', 'PostController@create');

//login route
Route::post('/login', 'AuthController@login');

Route::get('/logout', 'AuthController@logout');

Route::get('/', 'AuthController@show')->name('login');


//list route
Route::get('/list', 'PostController@list')->middleware('auth');