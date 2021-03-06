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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/*
  RUTAS HOME - WELCOME
*/
Route::get('about', function(){
  return view('about');
});
Route::get('courses', function(){
  return view('courses');
});
Route::get('tutorials', function(){
  return view('tutorials');
});

// POSTS
Route::get('posts/create');
