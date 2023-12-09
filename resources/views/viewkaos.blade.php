@extends('master2')
@section('judulhalaman', 'Data Kaos')

@section('konten')
<h3>Informasi Kaos</h3>

<a href="/kaos" class="btn btn-success"><- Kembali</a>

    <br/>
    <br/>

    <div class="row">
        <div class="col-6 border">
        </div>
        <div class="col-6">
            @foreach ($kaos as $k)
            <fieldset disabled>
                <form action="/kaos/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="kodekaos" value="{{ $k->kodekaos }}">
                    <div class="form-group row">
                        <label for="merkkaos" class="col-sm-4 control-label">Merk Kaos</label>
                        <div class="col-sm-8">
                            <input type="text" required="required" name="merkkaos" value="{{ $k->merkkaos }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stockkaos" class="col-sm-4 control-label">Stock Kaos</label>
                        <div class="col-sm-8">
                            <input type="number" required="required" name="stockkaos" value="{{ $k->stockkaos }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tersedia" class="col-sm-4 control-label">Ketersediaan</label>
                        <div class="col-sm-8">
                            <input type="text" required="required" name="tersedia" value="{{ $k->tersedia }}" class="form-control">
                        </div>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" style="width:520px">
                <a href="/kaos" class="btn btn-primary w-25">OK</a>
            </div>
        </div>
    </div>

@endsection
