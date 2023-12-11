<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class KaryawanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $karyawan = DB::table('karyawan')->paginate(15);
    	// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkaryawan');

	}

	// method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // validasi input
        $request->validate([
            'kodepegawai' => [
                'required',
                Rule::unique('karyawan', 'kodepegawai'),
            ],
            'namalengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
        ]);

        // insert data ke table pegawai
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan')->with('success', 'Data berhasil disimpan!');
    }

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan' => $karyawan , 'cari' => $cari]);

	}
}
