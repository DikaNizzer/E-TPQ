@extends('petugass.main')
@section('container')


    {{-- <section class="ftco-section"> --}}
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center mb-2 mt-2">
					<h2 class="heading-section"> PERKEMBANGAN <br>{{ $santri->NAMASATRI }} </h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						<thead class="thead-primary table-primary">
						<tr >
							<th>No Kemajuan  </th>
							{{-- <th>Nama Santri </th> --}}
							<th>Tanggal</th>
							<th>Status</th>
							<th>Nilai</th>
                            <th>Keterangan</th>

							</tr>
						</thead>
                        @foreach ($kemajuan as $maju)
						<tbody>
						<tr>
							<th scope="row" class="scope" >{{ $loop->iteration }}</th>
							<td>{{ $maju->TANGGAL }}</td>

                                @if ( $maju->STATUS == "N")
                                <td> Naik</td>
                                @elseif ( $maju->STATUS == "T")
                                <td>Tetap</td>
                                @elseif ( $maju->STATUS == "M")
                                <td>Mundur</td>
                                @endif
                            <td>{{ $maju->nilai }}</td>
							<td>{{ $maju->keterangan }}</td>
						</tr>
						</tbody>
                        @endforeach
						</table>
					</div>
				</div>
			</div>
                <a href="/Kemajuan" class="btn btn-primary">Kembali</a>

            {{-- <div class="d-flex justify-content-end">
                {{ $santri->links() }}
            </div> --}}

			<br><br><br><br>
		</div>


	{{-- </section> --}}

    @endsection
