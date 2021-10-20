@extends('petugas.main')
@section('container')

@foreach ($pengurus as $data)

 <!-- Page Content  -->
 <div class="jumbotron">
    <h1 class="display-4"> Selamat Datang! </h1>
    <p class="lead">ASSALAMUALAIKUM, {{ $data->NAMA }} </p>
    <hr class="my-4">
    <p> Email : {{ $data->EMAIL }} </p>
    <p> No HP : {{ $data->HP }} </p>
    <hr class="my-2">
    <p>Kebaikan tidak sama dengan kejahatan. Tolaklah kejahatan itu dengan cara yang lebih baik sehingga 
        yang memusuhimu akan seperti teman yang setia.</p>
        <p><strong>Q.S Fusshilat: 34</strong></p>
    <a class="btn btn-primary btn-lg" href="/ubah{{ $data->IDPENGURUS }}" role="button">Ubah Data</a>
    <a href="/di{{ $data->IDPENGURUS }}" class="btn btn-primary btn-lg"> DETAIL </a>
</div>


@endforeach

@endsection