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
Route::get('/persons', 'PersonController@index')->name('persons.index')->middleware('auth'); // protected route
Route::get('/persons/create', 'PersonController@create')->name('persons.create');
Route::post('/persons', 'PersonController@store')->name('persons.store');
Route::get('/persons/{id}', 'PersonController@show')->name('persons.show');
Route::delete('/persons/{id}', 'PersonController@destroy')->name('persons.destroy');

Route::get('/test/{id}', function ($id) {
    return view('test', [
        'id' => $id
    ]);
});

Auth::routes([
    'register'=>false // do not generate the /register route
]);

Route::get('/home', 'HomeController@index')->name('home');
