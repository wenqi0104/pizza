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



Route::get('/', 'PizzaController@welcome');
Route::get('/pizza', 'PizzaController@mainview')-> middleware('auth');
Route::get('/pizza/create', 'PizzaController@create')->name('pizza.create');
//将表单中的数据传入数据库，然后重定向到主页
Route::post('/pizza', 'PizzaController@store');
Route::get('/pizza/{id}','PizzaController@showDetails')-> middleware('auth');
Route::delete('/pizza/{id}','PizzaController@destroy')->name('pizza.destroy')-> middleware('auth');
  


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
