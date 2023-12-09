@extends('master2')
@section('judulhalaman', 'Data Kaos')

@section('konten')

    <h3>Edit Kaos</h3>

    <a href="/kaos" class="btn btn-success"> <- Kembali</a>

    <br/>
    <br/>
	@foreach($kaos as $k)
	<form action="/kaos/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkkaos" class="col-sm-1,5 col-form-label">Merk Kaos</label>
            <input type="hidden" name="kodekaos" value="{{ $k->kodekaos }}">
            <div class="col-sm-4">
                <input type="text" required="required" class="form-control" id="merkkaos" name="merkkaos" value="{{ $k->merkkaos }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockkaos" class="col-sm-0,5 col-form-label">Stock Kaos</label>
            <div class="col-sm-4">
                <!-- Perbaikan: Tambahkan atribut name="stockkaos" pada input -->
                <input type="number" required="required" class="form-control" id="stockkaos" name="stockkaos" value="{{$k->stockkaos}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-1,5 col-form-label">Ketersediaan</label>
            <div class="col-sm-4">
                <input type="text" required="required" class="form-control" id="tersedia" name="tersedia" value="{{$k->tersedia}}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
