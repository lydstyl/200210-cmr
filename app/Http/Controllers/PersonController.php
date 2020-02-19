<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function index()
    {
        // $persons = [
        //     ['firstName'=>'Prénom du suspect', 'lastName'=>'Nom du suspect'],
        //     ['firstName'=>'ccc', 'lastName'=>'ddd'],
        // ];
    
        // $persons = Person::all();
        //$persons = Person::orderBy('name', 'desc')->get();
        // $persons = Person::where('type', 'CDI')->get();
        $persons = Person::latest()->get();


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
