@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <h3>Keranjang Belanja</h3>

    <a class="btn btn-success mb-md-3" href="/keranjangbelanja"> <- Kembali</a>
    <div class="container">
        <form action="/keranjangbelanja/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="KodeBarang" class="control-label col-sm-1">Kode Barang</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="KodeBarang" name="KodeBarang">
                </div>
            </div>
            <div class="form-group row">
                <label for="Jumlah" class="col-form-label col-sm-1">Jumlah</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="Jumlah" name="Jumlah">
                </div>
            </div>
            <div class="form-group row">
                <label for="Harga" class="col-form-label col-sm-1">Harga</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="Harga" name="Harga">
                </div>
            </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>

@endsection
