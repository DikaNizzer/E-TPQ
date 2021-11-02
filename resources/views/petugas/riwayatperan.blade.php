@extends('petugas.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 text-center mb-2 mt-2">
            <h2 class="heading-section">DAFTAR PERAN DIHAPUS</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-wrap">
                <table class="table">
                <thead class="thead-primary table-primary">
                <tr >
                    <th>No</th>
                    <th>Nama Peran</th>
                    <th>Waktu DiBuat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($peran as $data)
                <tbody>
                <tr>
                    <?php $absen =1 ?>
                    <th scope="row" class="scope" >{{ $data->IDPERAN }}</th>
                    <td>{{$data->PERAN}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{ $data->AKTIF }}</td>
                    <td>
                        <a href="kembaliperan{{ $data->IDPERAN }}" class="btn btn-info"> Kembalikan Data</a>
                        <a href="dpr{{ $data->IDPERAN }}" class="btn btn-danger"> Hapus Permanen </a>
                    </td>
                    <?php $absen++ ?>
                </tr>
                </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div> 
    <a href="/peran" class="btn btn-primary">Kembali</a>
</div>

    
@endsection