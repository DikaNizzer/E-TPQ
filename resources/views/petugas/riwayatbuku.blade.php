@extends('petugas.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 text-center mb-2 mt-2">
            <h2 class="heading-section">DAFTAR BUKU TELAH DIHAPUS</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-wrap">
                <table class="table">
                <thead class="thead-primary table-primary">
                <tr >
                    <th>No</th>
                    <th>Nama Buku</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($buku as $data)
                <tbody>
                <tr>
                    <?php $absen =1 ?>
                    <th scope="row" class="scope" >{{ $data->IDBUKU }}</th>
                    <td>{{$data->BUKU}}</td>
                    <td>{{$data->KETERANGAN}}</td>
                    <td>
                        <a href="kembalibuku{{ $data->IDBUKU }}" class="btn btn-info"> Kembalikan Data </a>
                        <a href="del{{ $data->IDBUKU }}" class="btn btn-danger"> HAPUS PERMANEN </a>
                    </td>
                    <?php $absen++ ?>
                </tr>
                </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div> 
    <a href="/pengurus" class="btn btn-primary">Kembali</a>
</div>

    
@endsection