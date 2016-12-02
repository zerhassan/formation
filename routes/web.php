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

Route::get('/', 'ApplicationController@index');
// Route::get('/contact',function(){
//   return view('contact');
// });

Route::get('/contact','ApplicationController@contact');
Route::get('/contact/new','ApplicationController@new');
Route::post('/contact/new','ApplicationController@save');
Route::get('/contact/{id}/supprimer/','ApplicationController@supprimer');
Route::get('/contact/{id}/voir/','ApplicationController@voir');
