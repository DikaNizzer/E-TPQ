@extends('layout.main')
@section('container')

<div class="all-title-box">
    <div class="container text-center">
        <h1>Pengurus<span class="m_1">Dikelola Oleh Orang Orang Yang Memiliki Kemampuan DI Bidangnya</span></h1>
    </div>
</div>

<div class="container">
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
                    </tr>
                </thead>
                {{-- @foreach ($santri as $data) --}}
                <tbody>
                <tr>
                    <th scope="row" class="scope" > 1 </th>
                    <td> Nama Pengururs</td>
                    <td>Ini No Hp</td>
                    <td>Ini Email</td>
                    <td>Ini Peran</td>
                </tr>
                <tr>
                    <th scope="row" class="scope" > 2 </th>
                    <td> Hidayat</td>
                    <td>08915234</td>
                    <td>Hidatar@gmail</td>
                    <td>Pemilik</td>
                </tr>
                <tr>
                    <th scope="row" class="scope" > 3 </th>
                    <td>Risa</td>
                    <td>08915234</td>
                    <td>Risa@gmail</td>
                    <td>Pengajar</td>
                </tr>
                </tbody>
                {{-- @endforeach --}}
                </table>
            </div>
        </div>
    </div>
    <a href="/pengurus" class="btn btn-primary">Kembali</a>
</div>





@endsection