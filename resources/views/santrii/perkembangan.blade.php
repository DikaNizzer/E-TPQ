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
        </div>
        </div>
    </div>


@extends('santrii.main')
@section('container')

<div class="container" style="height:80%">

    @foreach ($kemajuan as $maju)
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Tanggal : {{ $maju->TANGGAL }}
            </div>
            <div class="card-body">
                {{-- @foreach ($maju->pengurus as $pengurus )
                <h5 class="card-title">Petugas Yang Menilai : {{ $pengurus->NAMA }} </h5>
                @endforeach --}}

                <p class="card-text">{{ $maju->keterangan }} </p>
                <p class="card-text">Dengan Nilai : {{ $maju->nilai }} </p>
                <a href="#" data-toggle="modal" data-target="#buku" class="btn btn-primary">Buku Yang Telah Di Baca</a>
            </div>
        </div>
    </div>
    @endforeach

    <a href="santri" class="btn btn-primary mt-5">Kembali</a>
</div>


@endsection

