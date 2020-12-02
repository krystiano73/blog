<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Bron extends Model
{

    protected $fillable = [
        'nazwa', 'numer', 'rokprodukcji'
    ];


    public function magazyn()
    {
        return $this->hasOne('App\Magazyn');
    }

    public function dbCheck()

    {
        $broniaia=DB::table('brons')->COUNT();
        print_r($broniaia);
    }


}

