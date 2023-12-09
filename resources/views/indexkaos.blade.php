@extends('master2')
@section('judulhalaman','Tugas Pra UAS')

@section('konten')
    <br>
	<h3>Data Kaos</h3>
    <br>
	<a href="/kaos/tambah" class="btn btn-primary"> + Tambah Data Kaos</a>

	<br/>
    <p>Cari Data Kaos :</p>
	<form action="/kaos/cari" method="GET">
		<input class="form-control" name="cari" placeholder="Cari Merk Kaos .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Kaos</th>
			<th>Merk Kaos</th>
			<th>Stock Kaos</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
		@foreach($kaos as $k)
        <tr>
            <td>{{ $k->kodekaos }}</td>
            <td>{{ $k->merkkaos}}</td>
            <td>{{ $k->stockkaos }}</td>
            <td>
                <input type="checkbox" disabled {{ $k->tersedia == 'y' ? 'checked' : '' }}>
            </td>
            <td>
                <a href="/kaos/view/{{ $k->kodekaos }}" class="btn btn-success">View</a>
                |
                <a href="/kaos/edit/{{ $k->kodekaos }}" class="btn btn-warning">Edit</a>
                |
                <a href="/kaos/hapus/{{ $k->kodekaos }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
		@endforeach
	</table>

    {{$kaos->links()}}

@endsection



