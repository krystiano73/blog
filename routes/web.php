<?php
use App\Blog;
use App\Bron;
use App\Magazyn;
use App\Bronies;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('blogs','BlogController');
Route::resource('stopien','StopienController');
Route::resource('bron','BronController');
Route::resource('magazyns','MagazynController');
Route::resource('bronies','BroniesController');

//Route::get('count', 'BronController@count');

Route::get('/', function () {
 return view('welcome')->with('blogTotal', App\Blog::count());
});
//Route::get('welcome/{raport}','BronController@index');
//Route::get('bron/{name}','BronController@index');
//Route::get('list', [BlogController::class, 'dbCheck']);
//Route::get('/', function () {
  //  return view('welcome')->with('magazynTotal', App\Magazyn::count());
//});ronies
//Route::get('/', function () {
    // $bronTotal = Bron::withCount();

  //  return view('welcome')->with('bronCount', App\Bron::());

//});
//Route::get('list','MagazynController@magazynio');
//Route::get('bron','BronController@dbCheck');
//Route::get('list','MagazynController@dbOperations');
//Route::get('list','BronController@raport');
//Route::get('/welcome', [BronController::class, 'raport']);
Route::get('welcome','BronController@raport');
Route::get('blogs','BlogController@osoby');
Route::get('blogs','BlogController@ble');
Route::get('list','BlogController@dbCheck');
//Route::get('list/{name?}', function ($name = 'WIST 94') {
  //  return $name;
//});
//Route::get('list/{name}','BronController@index');
//Route::get('welcome','BlogController@dell');
//Route::get('welcome','BlogController@dbCheck');
//Route::get('bron','BronController@dbCheck');
//Route::get('/', function () {
  //return view('welcome')->with('magazynio', App\Bron::dbCheck());
//});

