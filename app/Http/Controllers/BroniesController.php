<?php

namespace App\Http\Controllers;

use App\Bronies;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BroniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bron = Bronies::find(1)->bron;
        dd($bron);
        $bronies = Bron::find(1)->bronies;
        dd($bronies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bronies  $bronies
     * @return \Illuminate\Http\Response
     */
    public function show(Bronies $bronies)
    {
        $bron = Bronies::find(1)->bron;
        dd($bron);
        $bron = Bron::find(1)->bronies;
        dd($bronies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bronies  $bronies
     * @return \Illuminate\Http\Response
     */
    public function edit(Bronies $bronies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bronies  $bronies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bronies $bronies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bronies  $bronies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bronies $bronies)
    {
        //
    }

    public function dbCheck()

    {
        $ilebroni = DB::table('bronies')->count();
        print_r($ilebroni);
    }
}
