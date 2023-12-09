@extends('master2')
@section('judulhalaman', 'Data Kaos')

@section('konten')

    <h3>Data Kaos</h3>

    <a href="/kaos" class="btn btn-success"> <- Kembali</a>

    <br/>
    <br/>

    <form action="/kaos/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="merkkaos" class="col-sm-1,5 col-form-label">Merk Kaos</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="merkkaos" name="merkkaos">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockkaos" class="col-sm-1,5 col-form-label">Stock Kaos</label>
            <div class="col-sm-4">
                <input type="number"form-control" id="stockkaos" name="stockkaos">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-1,5 col-form-label">Ketersediaan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
