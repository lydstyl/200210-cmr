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

Route::get('/', function(){
    return view('welcome');
});
Route::get('/persons', 'PersonController@index');
Route::get('/persons/create', 'PersonController@create');
Route::post('/persons', 'PersonController@store');
Route::get('/persons/{id}', 'PersonController@show');
Route::delete('/persons/{id}', 'PersonController@destroy');

Route::get('/test/{id}', function ($id) {
    return view('test', [
        'id' => $id
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
