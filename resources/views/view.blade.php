@extends('master2')
@section('judulhalaman', 'Detail Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h2>Informasi Pegawai</h2>

    <a href="/pegawai" class="btn btn-success"> <- Kembali</a>

    <br/>
    <br/>

    <div class="row">
        <div class="col-sm-2 bg-white text-black p-3 border" style="height: 280px;">
            <div class="border" style="width: 100%; height: 100%;"></div>

        </div>
        <div class="col-sm-3 bg-white text-black p-3 border">
            <p class="card-title">Nama    : {{ $pegawai->pegawai_nama }}</p>
            <p class="card-text">Jabatan  : {{ $pegawai->pegawai_jabatan }}</p>
            <p class="card-text"> Umur    : {{ $pegawai->pegawai_umur }}</p>
            <p class="card-text">Alamat   : {{ $pegawai->pegawai_alamat }}</p>
            <br>
            <input type="button" onclick="window.location.href='/pegawai'" value="OK" class="btn btn-primary">
        </div>
    </div>

@endsection
