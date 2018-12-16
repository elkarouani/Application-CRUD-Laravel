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

// Route::get('/', function () {
//     return "Hello world";
// });

Route::get('/hello', function () {
    return "Hello world";
});

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/User/{id}', function ($id) {
    return 'User Id : ' . $id;
});

Route::get('/User/{id}/{name}', function ($id, $name) {
    return 'User Id : ' . $id . '<br>User Name : ' . $name;
});

Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
