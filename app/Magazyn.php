<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Magazyn extends Model
{
    protected $fillable = [
        'blogs_id', 'brons_id', 'rozkazprzydzial','numerszafy','numerstanowiska','obsluga','uwagi'
    ];

    public function blog()
    {
        return $this->belongsTo('App\Blog', 'blogs_id');
    }
    public function brons()
    {
        return $this->belongsTo('App\Bron', 'brons_id');
    }
    public function dupa()
    {
        $users = DB::table('magazyns')->get();

        return view('list', ['magazyns' => $users]);
    }



  public function magazynio()
    {
        $magazynio = App\Models\Magazyn::doesntHave('brons_id')->get();
        return view('list', ['magazyns' => $magazynio]);

    }
     //   return view('list', ['magazyns' => $magazynio]);
        //print_r($magazynio);
    //}
   // public function bronies()
    //{
      //  return $this->belongsTo('App\Bronies', 'brons_id');
    //}
   // public function bronies()
 //   {
      //  return $this->belongsTo('App\Bronies', 'brons_id');
   // }
}
