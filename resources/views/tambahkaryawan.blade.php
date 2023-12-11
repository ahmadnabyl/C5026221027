@extends('master2')
@section('judulhalaman', 'Tambah Data Karyawan')

@section('konten')
    <div class="container">
        <br>
        <h3>Tambah Data Karyawan</h3>
        <br>
        <a href="/karyawan" class="btn btn-success"> <- Kembali</a>
        <br>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Menampilkan Pesan Sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="/karyawan/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="kodepegawai" name="kodepegawai">
                </div>
            </div>
            <div class="form-group row">
                <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="divisi" name="divisi">
                </div>
            </div>
            <div class="form-group row">
                <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="departemen" name="departemen">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4 offset-sm-2">
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection
