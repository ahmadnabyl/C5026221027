<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanjaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$keranjangbelanja = DB::table('keranjangbelanja')->get();
        //$keranjangbelanja = DB::table('keranjangbelanja')->paginate(15);
    	// mengirim data pegawai ke view index
		return view('indexbelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('belibelanja');

	}

	// method untuk insert data ke table kaos
	public function store(Request $request)
	{
		// insert data ke table kaos
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->ID,
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman kaos
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}

