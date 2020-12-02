<?php

namespace App\Http\Controllers;

use App\Magazyn;
use App\Bron;
use App\Blog;
use App\Brons;
use App\Bronies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MagazynController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazyns = Magazyn::latest()->paginate(5);

        return view('magazyns.index',compact('magazyns'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $magazyns_blogs = Blog::all(['id','stopien','imie','imieojca','nazwisko']);
      $magazyns_brons = Bron::all(['id','nazwa','numer','rokprodukcji']);

        return view('magazyns.create',compact('magazyns_blogs','magazyns_brons'));
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
            'blogs_id' => 'required',
           'brons_id' => 'required',
        ]);

        Magazyn::create($request->all());

        return redirect()->route('magazyns.index')
            ->with('success','Magazyn created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Magazyn  $magazyn
     * @return \Illuminate\Http\Response
     */
    public function show(Magazyn $magazyn)
    {

        return view('magazyns.show',compact('magazyn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Magazyn  $magazyn
     * @return \Illuminate\Http\Response
     */
    public function edit(Magazyn $magazyn)
    {
        return view('magazyns.edit',compact('magazyn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Magazyn  $magazyn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magazyn $magazyn)
    {
        $request->validate([
            'blogs_id' => 'required',
            'brons_id' => 'required',
        ]);

        $magazyn->update($request->all());

        return redirect()->route('magazyns.index')
            ->with('success','Magazyn updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Magazyn  $magazyn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magazyn $magazyn)
    {
        $magazyn->delete();

        return redirect()->route('magazyns.index')
            ->with('success','Magazyn deleted successfully');
    }


    public function dbOperations()
    {
        return DB::table('blogs')
            ->select('imie','nazwisko')
            ->where( 'nazwisko', 'marek')
            ->get();


    }

    public function dbCheck()
    {
        $data= DB::table('brons')
            ->where( 'nazwa', 'P-83')->count();

        return view('list', ['data'=>$data]);

    }



  //  public function magazynio()
    //{
      //  $magazynio = App\Models\Magazyn::doesntHave('brons_id')->get();
        //return view('list', ['magazyns' => $magazynio]);
        //print_r($magazynio);
    //}
   // public function count()
    //{
      //  $magazyns = Blog::count();
     //   return view('magazyns.index', compact('magazyns'));
  //  }
}
