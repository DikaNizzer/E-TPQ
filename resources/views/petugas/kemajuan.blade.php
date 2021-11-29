@extends('petugas.main')
@section('container')


    {{-- <section class="ftco-section"> --}}
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center mb-2 mt-2">
					<h2 class="heading-section">TABLE PERKEMBANGAN SANTRI </h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">

						<table class="table">
						<thead class="thead-primary table-primary">
						<tr >
							<th>ID Kemajuan  </th>
							<th>Nama Santri </th>
							<th>Tanggal</th>
							<th>Status</th>
							<th>Nilai</th>
                            <th>Keterangan</th>
                            <th>Menu</th>
							</tr>
						</thead>
                        @foreach ($kemajuan as $maju)
						<tbody>
						<tr>
							<th scope="row" class="scope" >{{ $maju->IDKEMAJUAN }}</th>
                            {{-- @foreach ($maju->santri as $santri ) --}}
                                <td>{{ $santri->NAMASATRI }} </td>
                            {{-- @endforeach --}}

							<td>{{ $maju->TANGGAL }}</td>
							<td>{{ $maju->STATUS }}</td>
                            <td>{{ $maju->nilai }}</td>
							<td>{{ $maju->keterangan }}</td>
							<td>
                                <a href="/edit{{ $maju->IDSANTRI }}" class="btn btn-primary">Edit kemajuan</a>
								<a href="/santrihapus{{ $maju->IDSANTRI }}" class="btn btn-danger">Hapus kemajuan</a>
                            </td>
						</tr>
						</tbody>
                        @endforeach
						</table>
					</div>
				</div>
			</div>
                <a href="/detail{{ $santri->IDSANTRI }}" class="btn btn-primary">Kembali</a>

            {{-- <div class="d-flex justify-content-end">
                {{ $santri->links() }}
            </div> --}}

			<br><br><br><br>
		</div>


	{{-- </section> --}}

    @endsection
