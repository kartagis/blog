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
})->name('welcome');

Route::get('about', function()
{
    return view('about');
})->name('about');

Route::get('posts/index', 'PostController@index')->name('posts.index');
Route::get('post', 'PostController@create')->name('post.create');
Route::post('post', 'PostController@store')->name('post.store');
Route::get('login', function()
{
})->name('login');
Route::get('register', function()
{
})->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
