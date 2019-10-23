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

Route::get('/', 'PostController@index');

Route::get('/create', 'PostController@create');

Route::get('/blog', 'PostController@show');

//Todo: poprawić zapis!
Route::post('/save', 'PostController@store');

Route::get('/blog/{id}', 'PostController@article')->where('id', '[0-9]+');

//Sortowanie:
Route::get('/blog/sort', 'PostController@sort');

Route::get('/o-mnie', 'Controller@about');

Route::get('/kontakt', 'Controller@contact');

Route::get('/sklep', 'Controller@shop');

Route::post('/kontakt', 'Controller@send_message');