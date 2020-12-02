<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bronies extends Model
{
    public function bron()
    {
        return $this->hasOne('App\Bron');
    }
    public function blog()
    {
        return $this->hasOne('App\Blog');
    }
    public function magazyn()
    {
        return $this->hasOne('App\Magazyn');
    }
}
