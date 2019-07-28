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



// Route::get('/hello', function () {
//     // return view('welcome');
//     return 'Hello world';
// });

Route::get('/', 'PagesController@index');

Route::get('/books/fiction', 'PagesController@fiction');

Route::get('/books/nonfiction', 'PagesController@services');

// Route::get('/user/{id}', function ($id) {
//     return 'This is user '.$id;
// });

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
