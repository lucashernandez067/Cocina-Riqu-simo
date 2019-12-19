<?php

App::setlocale('es');
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

Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('/profile', 'UserController@update');

Route::get('/recipes', 'RecipesController@index')->name('recipes.index');

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/contacto', 'contact')->name('contact');
Route::view('/nosotros', 'about')->name('about');
