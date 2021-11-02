<!-- Modal -->
    <div class="modal fade" id="buku" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header tit-up">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Buku Yang Telah Di Baca</h4>
            </div>
            <div class="modal-body customer-box">
                <!-- Nav tabs -->
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Registration">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" placeholder="Nama Buku" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" placeholder="Nama Bab" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" placeholder="Ketengan" type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <a href="/santri" class="btn btn-primary">Kembali</a>
        </div>
        </div>
    </div>


@extends('ortu.main')
@section('container')

<div class="container" style="height:80%">

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                TimeStemp Kemajuan
            </div>
            <div class="card-body">
                <h5 class="card-title">Siapa Nama Pengurus Yang Menulis </h5>
                <p class="card-text">Ringkasan Dari Kemajuan </p>
                <a href="#" data-toggle="modal" data-target="#buku" class="btn btn-primary">Buku Yang Telah Di Baca</a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Jumat, 28 September 2021
            </div>
            <div class="card-body">
                <h5 class="card-title">Pak Ardy </h5>
                <p class="card-text">SUdah Membacaa.. </p>
                <a href="#" data-toggle="modal" data-target="#buku" class="btn btn-primary">Buku Yang Telah Di Baca</a>
            </div>
        </div>
    </div>

    <a href="santri" class="btn btn-primary mt-5">Kembali</a>
</div>
        

@endsection 

