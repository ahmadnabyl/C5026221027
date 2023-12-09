@extends('master2')
@section('judulhalaman','Keranjang Belanja')

@section('konten')
    <br>
	<h3>Data Keranjang Belanja</h3>
    <br>
	<a href="/keranjangbelanja/tambah" class="btn btn-primary"> BELI</a>
    <br>
    <br>
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah
                Pembelian</th>
			<th>Harga per
                item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $b)
        <tr>
            <td>{{ $b->ID }}</td>
            <td>{{ $b->KodeBarang}}</td>
            <td>{{ $b->Jumlah }}</td>
            <td>{{ number_format($b->Harga, 2, ',', '.') }}</td>
            <td>{{ number_format($b->Harga * $b->Jumlah, 2, ',', '.') }}</td>
            <td>
                <a href="/keranjangbelanja/hapus/{{ $b->ID }}" class="btn btn-danger">Batal</a>
            </td>
        </tr>
		@endforeach
	</table>

@endsection



