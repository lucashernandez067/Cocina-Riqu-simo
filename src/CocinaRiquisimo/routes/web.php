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
Route::get('/recipes/yours', 'RecipesController@yours')->name('recipes.yours');
Route::post('/recipes', 'RecipesController@store')->name('recipes.store');
Route::get('/recipes/create', 'RecipesController@create')->name('recipes.create');
Route::get('/recipes/{id}', 'RecipesController@show')->name('recipes.show');
Route::get('/recipes/edit/{id}', 'RecipesController@edit')->name('recipes.edit');
Route::put('/recipes/update/{id}', 'RecipesController@update')->name('recipes.update');
Route::get('/recipes/viewDestroy/{id}', 'RecipesController@viewDestroy')->name('recipes.viewDestroy');
Route::delete('/recipes/delete/{id}', 'RecipesController@destroy')->name('recipes.destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/contacto', 'contact')->name('contact');
Route::view('/nosotros', 'about')->name('about');
