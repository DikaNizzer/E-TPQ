@extends('petugas.main')
@section('container')


    {{-- <section class="ftco-section"> --}}
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center mb-2 mt-2">
					<h2 class="heading-section">TABLE JUMLAH SANTRI </h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">

						<table class="table">
						<thead class="thead-primary table-primary">
						<tr >
							<th>Absen  </th>
							<th>Nama</th>
							<th>Pilihan</th>
							</tr>
						</thead>
                        @foreach ($santri as $data)
						<tbody>
						<tr>
							<th scope="row" class="scope" >{{ $data->IDSANTRI }}</th>
							<td>{{ $data->NAMASATRI }}</td>
							<td>
								<a href="/kemajuan{{ $data->IDSANTRI }}" class="btn btn-primary">Detail Kemajuan</a>
                                <a href="#" data-toggle="modal" data-target="#tambah" onclick="idsan('{{ $data->IDSANTRI }}')" class="btn btn-primary">Tambah Kemajuan</a>
								{{-- <a href="/santrihapus{{ $data->IDSANTRI }}" class="btn btn-danger">Hapus Data</a> --}}
                            </td>
						</tr>
						</tbody>
                        @endforeach
						</table>
					</div>
				</div>
			</div>
                <a href="/pengurus" class="btn btn-primary">Kembali</a>

            <div class="d-flex justify-content-end">
                {{-- @foreach ($kemajuan as $kem ) --}}
                {{ $kemajuan }}
                {{-- @endforeach --}}

            </div>

			<br><br><br><br>
		</div>


	{{-- </section> --}}

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
                  <li><a class="active" href="#" data-toggle="tab">Tambah</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                  <div class="tab-pane active" id="Login">
                      <form action="/buatkemajuan" method="post" class="form-horizontal">
                          @csrf
                          {{-- <div class="form-group">
                              <div class="col-sm-12">
                                  <label for="kemajuan">Id Kemajuan</label>
                                  <input class="form-control" name="IDKEMAJUAN"  placeholder="01" type="number" required>
                              </div>
                          </div> --}}
                          <div class="form-group">
                              <div class="col-sm-12">
                                <label for="id">Id Santri</label>
                                  <input class="form-control" name="IDSANTRI" id="hasilid" type="text"  readonly >
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

  <script>
    function idsan(id){
    document.querySelector("#hasilid").value = id;
    }
    </script>
    @endsection
