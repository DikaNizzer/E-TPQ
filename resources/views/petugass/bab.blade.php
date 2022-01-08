@extends('petugass.main')
@section('container')

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
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $bab->BAB }}</td>
                        <td>{{ $bab->JUDUL }}</td>
                        <td>{{ $bab->KETERANGAN }}</td>
                    </tr>
                    @endforeach

                </tbody>
        </table>
    </div>
          <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary">Tambah Bab</a>
        </div>
      </div>



         <!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header tit-up">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Tambah Bab Pada Buku {{ $buku->BUKU }}</h4>
          </div>
          <div class="modal-body customer-box">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                  <li><a class="active" href="#" data-toggle="tab">Tambah</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                  <div class="tab-pane active" id="Login">
                      <form action="/buatbab" method="post" class="form-horizontal">
                          @csrf

                          <div class="form-group">
                              <div class="col-sm-12">
                                <label for="id">Nama Buku</label>
                                  <input class="form-control" name="namabuku" value="{{ $buku->BUKU }}" type="text"  readonly >
                              </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12">
                              <label for="id">Bab</label>
                                <input class="form-control" name="BAB"  type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                              <label for="id">Judul</label>
                                <input class="form-control" name="Judul"  type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                              <label for="id">Keterangan</label>
                                <input class="form-control" name="KETERANGAN"  type="text" >
                            </div>
                        </div>
                          <div class="form-group">
                            <div class="col-sm-12">
                                <input class="form-control" name="buku_IDBUKU" value="{{ $buku->IDBUKU }}" id="hasilid" type="hidden"  readonly >
                            </div>
                        </div>
                          <div class="row">
                              <div class="col-sm-10">
                                      {{-- <button class="btn btn-light btn-radius btn-brd grd1" type="submit">Masuk</button> --}}
                                      <input type="submit" class="btn btn-light btn-radius btn-brd grd1"  value="Tambah Data"/>
                                  {{-- <a class="for-pwd" href="javascript:;">Lupa password?</a> --}}
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>





@endsection
