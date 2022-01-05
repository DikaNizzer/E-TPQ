@extends('petugass.main')
@section('container')



 <!-- Page Content  -->
 <div class="jumbotron">
    <h1 class="display-4"> Selamat Datang! </h1>
    {{-- @if(session(user)->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                        @endif --}}
    <p class="lead">ASSALAMUALAIKUM, {{ Auth::user()->NAMA }} </p>
    <hr class="my-4">
    <p> Email : {{ Auth::user()->EMAIL }} </p>
    <p> No HP : {{ Auth::user()->HP }} </p>
    <hr class="my-2">
    <p>Kebaikan tidak sama dengan kejahatan. Tolaklah kejahatan itu dengan cara yang lebih baik sehingga
        yang memusuhimu akan seperti teman yang setia.</p>
        <p><strong>Q.S Fusshilat: 34</strong></p>
    <a class="btn btn-primary btn-lg" href="/ubah{{ Auth::user()->IDPENGURUS }}" role="button">Ubah Data</a>
    <a href="/di{{ Auth::user()->IDPENGURUS }}" class="btn btn-primary btn-lg"> DETAIL </a>
</div>




@endsection
