<?php
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


Route::get('/welcome', function () {
    echo ('welcome');
});


Route::get('/index', function(){
	echo "Uji Coba route dengan method GET";
});


Route::get('/show/{id}', function($id){
	echo "Nilai parameter adalah".$id;
});


Route::get('/show/{id?}', function($id=1){
	echo "Nilai parameter adalah".$id;
});


Route::get('/edit/{nama}', function($nama){
	echo "Nilai parameter adalah".$nama;
})->where ('nama','[A-Za-z]+');


Route::get('/index', function(){
	echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});


Route::get('/create', function(){
	echo "Route diakses menggunakan nama";
})->name('create');


Route::get('/produk', 'produkController@index');


Route::get('/produk/show', 'produkController@show');


Route::get('/halaman',function(){
$title = 'Harry Pooter';
$konten = 'harry potter and the deathly hallows: part 2';
return view('konten.halaman',compact('title','konten'));
});

Route::get('/pelanggan', 'pelangganController@index');

Route::get('/produk', 'produkController@index');