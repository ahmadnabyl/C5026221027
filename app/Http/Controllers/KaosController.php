<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaosController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('kaos')->get();
        $kaos = DB::table('kaos')->paginate(15);
    	// mengirim data pegawai ke view index
		return view('indexkaos',['kaos' => $kaos]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkaos');

	}

	// method untuk insert data ke table kaos
	public function store(Request $request)
	{
		// insert data ke table kaos
		DB::table('kaos')->insert([
			'kodekaos' => $request->kodekaos,
			'merkkaos' => $request->merkkaos,
			'stockkaos' => $request->stockkaos,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman kaos
		return redirect('/kaos');

	}

    public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kaos = DB::table('kaos')->where('kodekaos',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editkaos',['kaos' => $kaos]);

	}

    	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('kaos')->where('kodekaos',$request->kodekaos)->update([
			'merkkaos' => $request->merkkaos,
			'stockkaos' => $request->stockkaos,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kaos');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kaos')->where('kodekaos',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/kaos');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kaos = DB::table('kaos')
		->where('merkkaos','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexkaos',['kaos' => $kaos , 'cari' => $cari]);

	}
    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kaos = DB::table('kaos')->where('kodekaos',$id)->get();
		// passing data pegawai yang didapat ke view view.blade.php
		return view('viewkaos',['kaos' => $kaos]);
	}
}

