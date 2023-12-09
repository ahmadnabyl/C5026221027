@extends('master2')
@section('judulhalaman', 'Nilai Kuliah')

@section('konten')
    <h3>Nilai Kuliah</h3>

    <a href="/nilaikuliah/tambah" class="btn btn-primary"> Tambah Data</a>
    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $nk)
            <tr>
                <td>{{ $nk->NRP }}</td>
                <td>{{ $nk->NilaiAngka }}</td>
                <td>{{ $nk->SKS }}</td>
                <td>
                @if ($nk->NilaiAngka >= 81)
                    A
                @elseif ($nk->NilaiAngka >= 61 && $nk->NilaiAngka <= 80)
                    B
                @elseif ($nk->NilaiAngka >= 41 && $nk->NilaiAngka <= 60)
                    C
                @elseif ($nk->NilaiAngka <= 40)
                    D
                @else
                    Invalid grade
                @endif
                </td>
                <td> {{ $nk->NilaiAngka * $nk->SKS }} </td>
            </tr>
        @endforeach
    </table>



@endsection
