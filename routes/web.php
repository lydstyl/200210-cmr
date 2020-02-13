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
    $persons = [
        ['firstName'=>'aaa', 'lastName'=>'bbb'],
        ['firstName'=>'ccc', 'lastName'=>'ddd'],
    ];

    $name = request('name');

    return view('welcome', [
        'persons' => $persons,
        'name' => request('name'),
        'age' => request('age')
    ]);
});

Route::get('/test', function () {
    return view('test');
});

// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });