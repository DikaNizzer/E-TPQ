@extends('petugas.main')
@section('container')

    @foreach ($santri as $san)

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header tit-up">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Tambah Perkembangan</h4>
          </div>
          <div class="modal-body customer-box">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                  <li><a class="active" href="#Login" data-toggle="tab">Tambah</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                  <div class="tab-pane active" id="Login">
                      <form action="/buatkemajuan" method="post" class="form-horizontal">
                          @csrf
                          <div class="form-group">
                              <div class="col-sm-12">
                                  <label for="kemajuan">Id Kemajuan</label>
                                  <input class="form-control" name="IDKEMAJUAN"  placeholder="01" type="number" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-12">
                                <label for="id">Id Santri</label>
                                  <input class="form-control" name="IDSANTRI" id="id" value="{{ $san->IDSANTRI }}"type="text"  >
                              </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12">
                              <label for="pengurus">Id Pengurus</label>
                                <input class="form-control" name="IDPENGURUS"  placeholder="01" type="text" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                              <label for="status">Status</label>
                                <input class="form-control" name="STATUS"  placeholder="N(Naik), T(Tetap), M(Mundur)"
                                type="text" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                              <label for="keterangan">Keterangan</label>
                                <input class="form-control" name="keterangan"  placeholder="Sudah Membaca"
                                type="text" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                              <label for="nilai">Nilai</label>
                                <input class="form-control" name="nilai"  placeholder="0 - 100"
                                type="number" required >
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

<div class="bg">
<div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="storage/{{ $san->foto }}" width="250px">
                <h3>Assalamualaikum</h3>
                <p>Kebaikan tidak sama dengan kejahatan. Tolaklah kejahatan itu dengan cara yang lebih baik sehingga
                    yang memusuhimu akan seperti teman yang setia.</p>
                    <p><strong>Q.S Fusshilat: 34</strong></p>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Data Diri Santri</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Absen">Id Santri : </label>
                                    <p class="kotak">{{ $san->IDSANTRI }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Nama : </label>
                                    <p class="kotak">{{ $san->NAMASATRI }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Tanggal Lahir : </label>
                                    <p class="kotak">{{ $san->TAGGALLHR }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Nama Orang Tua : </label>
                                    <p class="kotak">{{ $san->NAMAORTU }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Alamat Orang Tua : </label>
                                    <p class="kotak">{{ $san->ALAMATORTU }}</p>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">

                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="L" checked>
                                            <span> L </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="P">
                                            <span>P </span>
                                        </label>
                                        <a href="/cetak{{ $san->IDSANTRI }}" class="btnRegister"> Print Data </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Absen">Email : </label>
                                    <p class="kotak">{{ $san->EMAIL }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Nomor Hp : </label>
                                    <p class="kotak">{{ $san->HP }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Tanggal Msuk : </label>
                                    <p class="kotak">{{ $san->TANGGALMASUK }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Tempat Lahir : </label>
                                    <p class="kotak">{{ $san->KOTALHR }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Password : </label>
                                    <p class="kotak">{{ $san->PASSWORD }}</p>
                                </div>
                                {{-- <input type="submit" class="btnRegister"  value="Tambah Perkembangan"/> --}}
                                <button type="button" href="#" data-toggle="modal" data-target="#tambah" class="btnRegister"> Tambah Perkembangan </button>
                                <a href="/kemajuan{{ $san->IDSANTRI }}"><button type="button"  class="btnRegister"> Lihat Riwayat Perkembangan </button></a>
                            </div>
                            <br>
                            <a href="tabelsantri" class="btn btn-primary mt-15px"> Kembali </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            @endforeach


@endsection
