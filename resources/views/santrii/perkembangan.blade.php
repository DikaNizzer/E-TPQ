

@extends('santrii.main')
@section('container')

<div class="container" style="height:80%">

    @foreach ($kemajuan as $maju)
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <strong> Guru yang menilai  : {{ $maju['NAMA'] }}</strong>
            </div>
            <div class="card-header">
                <strong> Tanggal Penilaian : {{ $maju['TANGGAL'] }}</strong>
            </div>
            <div class="card-body">
                {{-- <p class="card-text">Bab Yang dibaca : {{ $maju['BAB'] }} </p>
                <p class="card-text">Judul Bab Yang dibaca : {{ $maju['JUDUL'] }} </p>
                <p class="card-text">Keterangan {{ $maju['keterangan'] }} </p>

                <p class="card-text">{{ $maju['keterangan'] }} </p>
                <p class="card-text">Dengan Nilai : {{ $maju['nilai'] }} </p> --}}



                  <ul class="list-ticked">
                    <li>Bab Yang dibaca : {{ $maju['BAB'] }}</li>
                    <li>Judul Bab Yang dibaca : {{ $maju['JUDUL'] }}</li>
                    <li>Keterangan : {{ $maju['keterangan'] }}</li>
                    <li>
                        Status : @if ($maju['STATUS'] == "N")
                                Naik
                                @elseif ($maju['STATUS'] == "T")
                                Tetap
                                @elseif ($maju['STATUS'] == "M")
                                Mundur
                                @endif
                    </li>
                  </ul>
                  <blockquote class="blockquote blockquote-primary">
                    <footer class="blockquote-footer"> Dengan Nilai : <cite title="Source Title">Dengan Nilai : {{ $maju['nilai'] }}</cite>
                    </footer>
                  </blockquote>
            </div>
        </div>
    </div>
    @endforeach

    <a href="santri" class="btn btn-primary mt-5">Kembali</a>
</div>


@endsection

