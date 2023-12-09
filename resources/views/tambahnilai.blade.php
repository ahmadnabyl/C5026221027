@extends('master2')
@section('judulhalaman', 'Nilai Kuliah')

@section('konten')

    <h3>Nilai Kuliah</h3>
<br>

    <a href="/nilaikuliah" class="btn btn-success"> <- Kembali</a>

    <br/>
    <br/>

    <form action="/nilaikuliah/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-sm-1 col-form-label">NRP</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-1 col-form-label">Nilai</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-sm-1 col-form-label">SKS</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="SKS" name="SKS">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
