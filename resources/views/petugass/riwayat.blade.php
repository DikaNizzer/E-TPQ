@extends('petugass.main')
@section('container')



    {{-- <section class="ftco-section"> --}}
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center mb-2 mt-2">
					<h2 class="heading-section">DATA SANTRI TERHAPUS</h2>
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
							<th>Pilihan</th>
							</tr>
						</thead>
                        @foreach ($santri as $data)
						<tbody>
						<tr>
							<th scope="row" class="scope" >{{ $loop->iteration }}</th>
							<td> <img src="storage/{{ $data->foto }}" width="150px"></td>
							<td>{{ $data->NAMASATRI }}</td>
							<td>{{ $data->TANGGALMASUK }}</td>
							<td>
								<a href="/kembalikan{{ $data->IDSANTRI }}" class="btn btn-primary">Kembalikan Data</a>
                                <a href="/permanen{{ $data->IDSANTRI }}" class="btn btn-primary">Hapus Permanen</a>
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
@endsection
