<?php

namespace App\Http\Controllers;

//use App\Blog;
use App\Bron;
use App\Bronies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BronController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $bron = Bron::latest()->paginate(20);

        return view('bron.index',compact('bron'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bron.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nazwa' => 'required',
            'numer' => 'required',
            'rokprodukcji' => 'required',

        ]);

        Bron::create($request->all());

        return redirect()->route('bron.index')
            ->with('success','Broń dodana.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bron  $bron
     * @return \Illuminate\Http\Response
     */
    public function show(Bron $bron)
    {

        return view('bron.show',compact('bron'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bron  $bron
     * @return \Illuminate\Http\Response
     */
    public function edit(Bron $bron)
    {
        return view('bron.edit',compact('bron'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bron  $bron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bron $bron)
    {
        $request->validate([
            'nazwa_id' => 'required',
            'numer' => 'required',
            'rokprodukcji' => 'required',
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bron  $bron
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bron $bron)
    {
        $bron->delete();

        return redirect()->route('bron.index')
            ->with('success','Broń usunięta');
    }





   // public function P83()
  //  {
       // $data= DB::table('brons')
      //      ->where( 'nazwa', 'P-64')->count();
      //  return view('list', ['data'=>$data]);
       // print_r($data);

    //}


  //
   // public function getBronByName(string $name)
   // {

       // return DB::table('brons')
         //   ->where( 'nazwa', $name)->count();

    //}



   // public function getComputerByName(string $name)
    //{
      //  return DB::table('brons')
        //    ->where( 'nazwa', $name)->count();

    //}

    public function raport()
    {
        $wist= DB::table('brons')

            ->where('nazwa', 'WIST 94')->get()->count();
        $p83= DB::table('brons')
            ->where('nazwa', 'P-83')->get()->count();
        $kbk= DB::table('brons')
            ->where('nazwa', 'kbk AKMS')->get()->count();
        $p64= DB::table('brons')
            ->where('nazwa', 'P-64')->get()->count();
        $beryl= DB::table('brons')
            ->where('nazwa', 'BERYL C')->get()->count();
       //dd($p83);
        //dd($wist);
       return view('welcome', ['wist' => $wist, 'p83' => $p83, 'kbk' => $kbk, 'p64' => $p64, 'beryl' => $beryl]);
    }

}
