@extends('layout.main')
@section('container')

<div class="all-title-box">
    <div class="container text-center">
        <h1>Pengurus<span class="m_1">Dikelola Oleh Orang Orang Yang Memiliki Kemampuan DI Bidangnya</span></h1>
    </div>
</div>

<div class="container full">
    <div class="row justify-content-center">
        <div class="col-md-3 text-center mb-2 mt-2">
            <h2 class="heading-section">DATA PENGURUS TPQ </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-wrap">
                
                <table class="table">
                <thead class="thead-primary table-primary">
                <tr >
                    <th>No  </th>
                    <th>Nama </th>
                    <th>Hp</th>
                    <th>Email</th>
                    <th>Peran</th>
                    <th>Piihan</th>
                    </tr>
                </thead>
                @foreach ($pengurus1 as $data)
                <tbody>
                <tr>
                    <th scope="row" class="scope" > {{ $data->IDPENGURUS }} </th>
                    <td> {{ $data->NAMA }}</td>
                    <td>{{ $data->HP }}</td>
                    <td>{{ $data->EMAIL }}</td>
                    <td>PERAN</td>
                    <td><a href="/detailpengurus{{ $data->IDPENGURUS }}" class="btn btn-primary">Detail Data</a></td>
                </tr>
                </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div>
    <a href="/" class="btn btn-primary">Kembali</a>
</div>






@endsection