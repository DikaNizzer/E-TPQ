@extends('petugass.main')
@section('container')


    {{-- <section class="ftco-section"> --}}
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center mb-2 mt-2">
                    {{-- KAlo Nerhasil Buat AKun --}}
                                @if(session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif


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
								<a href="/detail{{ $data->IDSANTRI }}" class="btn btn-primary">Detail Data</a>
                                <a href="/edit{{ $data->IDSANTRI }}" class="btn btn-primary">Edit Data</a>
								<a href="/santrihapus{{ $data->IDSANTRI }}" class="btn btn-danger">Hapus Data</a>
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
                {{ $santri->links() }}
            </div>

			<br><br><br><br>
		</div>


	{{-- </section> --}}
    @endsection
