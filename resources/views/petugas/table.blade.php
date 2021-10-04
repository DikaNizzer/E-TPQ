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
							<th>Foto </th>
							<th>Nama</th>
							<th>Tanggal Masuk</th>
							{{-- <th>Transfer</th> --}}
							<th>Pilihan</th>
							</tr>
						</thead>
                        @foreach ($santri as $data)
						<tbody>
						<tr>
							<th scope="row" class="scope" >{{ $data->IDSANTRI }}</th>
							<td> <img src="images/{{ $data->foto }}" width="150px"></td>
							<td>{{ $data->NAMASATRI }}</td>
							<td>{{ $data->TANGGALMASUK }}</td>
							{{-- <td>$5.00</td> --}}
							<td><a href="/santri/edit/{{ $data->IDSANTRI }}" class="btn btn-primary">Edit Data</a>
                                <a href="#" class="btn btn-primary">Hapus Data</a>
                            </td>
						</tr>
						</tbody>
                        @endforeach
						</table>
					</div>
				</div>
			</div>
            <a href="/pengurus" class="btn btn-primary">Kembali</a>
		</div>

        
	{{-- </section> --}}

    @endsection