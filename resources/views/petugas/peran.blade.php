@extends('petugas.main')
@section('container')

<!-- Modal PERAN -->
<div class="modal fade" id="peran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header tit-up">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Tambah Data Peran</h4>
        </div>
        <div class="modal-body customer-box">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li><a class="active" href="#Loginortu" data-toggle="tab">Tambah</a></li>
                {{-- <li><a href="#Registrationsantri" data-toggle="tab">Registration</a></li> --}}
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="Loginortu">
                    <form role="form" class="form-horizontal" action="/peran/store" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="idperan">Id Peran : </label>
                                <input class="form-control" id="id" placeholder="(1, 2, ...)" type="text" name="IDPERAN">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="peran">Sebagai : </label>
                                <input class="form-control" id="peran" placeholder="(pengajar)" type="text" name="PERAN">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="status">Status</label>
                                <input class="form-control" id="status" placeholder="(1=aktif, 0=nonaktif)" type="number" name="AKTIF">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                    <input type="submit" class="btn btn-light btn-radius btn-brd grd1"  value="Tambah Data"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 text-center mb-2 mt-2">
            <h2 class="heading-section">DAFTAR PERAN</h2>
        </div>
    </div>

    {{-- KAlo Nerhasil Buat AKun --}}
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- KAlo gagal Buat AKun --}}
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <b>Gagal Membuat AKun Karena :</b>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        <b>Silahkan Coba Lagi</b>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

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
                        <a href="peranubah{{ $data->IDPERAN }}" class="btn btn-info"> UBAH </a>
                        <a href="peranhapus{{ $data->IDPERAN }}" class="btn btn-info"> HAPUS </a>
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
    <a href="#" data-target="#peran" data-toggle="modal" class="btn btn-primary">Tambah</a>
    <a href="/peranterhapus" class="btn btn-primary ">Data Peran dihapus</a>
</div>

    
@endsection