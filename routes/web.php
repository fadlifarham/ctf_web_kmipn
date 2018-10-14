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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'User@index');
Route::get('/login', 'User@login');;
Route::post('/loginPost', 'User@loginPost');
Route::get('/logout', 'User@logout');
Route::get('/soal', 'PagesController@soal');
Route::get('/soal/{id_soal}', 'PagesController@viewSoal')->middleware('soal_middleware');
Route::post('/submit', 'PagesController@submit');
Route::get('/score', 'PagesController@score');