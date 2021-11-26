@extends('petugas.main')
@section('container')
{{-- @foreach ($buku as $book ) --}}
<div class="container">
    <div class="card">
        <div class="card-header">
          <strong>Nama Buku : {{ $buku->BUKU }}</strong>
        </div>
        <div class="card-body">
          <h3 class="card-title">{{ $buku->KETERANGAN }}</h3>
          <p> Detail Bab :</p>
          <table class="table table-bordered">
            <thead>
                <tr class="table-warning">
                    <th scope="col">No</th>
                    <th scope="col">Bab </th>
                    <th scope="col">Judul Bab</th>
                    <th scope="col">Keterangan</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($buku->bab as $bab )
                    <tr>
                        <th scope="row">{{ $bab->IDBAB }}</th>
                        <td>{{ $bab->BAB }}</td>
                        <td>{{ $bab->JUDUL }}</td>
                        <td>{{ $buku->KETERANGAN }}</td>
                    </tr>
                    @endforeach

                </tbody>
        </table>
    </div>
          <a href="#" class="btn btn-primary">Tambah Keterangan</a>
        </div>
      </div>
{{-- @endforeach --}}






@endsection
