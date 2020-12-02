<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'stopien', 'imie', 'imieojca', 'nazwisko'
    ];


}
