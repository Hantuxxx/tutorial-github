<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
	public function dataproduk()
	{
		$produk = ['Aqua 400ML', 'Pocari', 'Pulpy', 'Donat'];
		return $produk;
	}
	public function index()
	{
		$produk = $this -> dataproduk();
		return view('produk/index',compact('produk'));
	}
}