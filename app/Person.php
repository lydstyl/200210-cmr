<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    protected $casts = [
        'advantages' => 'array' // take the array and turn it into json string for db or from db take the string and return an array
    ];
}
