<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = [
            ['firstName'=>'Prénom du suspect', 'lastName'=>'Nom du suspect'],
            ['firstName'=>'ccc', 'lastName'=>'ddd'],
        ];
    
        $name = request('name');
    
        return view('welcome', [
            'persons' => $persons,
            'name' => request('name'),
            'age' => request('age')
        ]);
    }

    public function show($id)
    {
        return 'Person '.$id;
    }
}
