@extends('petugass.main')
@section('container')

@foreach ($santri as $san)
<div class="bg">
    <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="storage/{{ $san->foto }}" alt=""/>
                    <h3>Assalamualaikum</h3>
                    <p>Kebaikan tidak sama dengan kejahatan. Tolaklah kejahatan itu dengan cara yang lebih baik sehingga
                        yang memusuhimu akan seperti teman yang setia.</p>
                        <p><strong>Q.S Fusshilat: 34</strong></p>
                </div>
                <div class="col-md-9 register-right">
                    <form action="/santriupdate" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Edit Data Diri Santri</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    {{-- <div class="form-group"> --}}
                                        <input type="hidden" class="form-control" value="{{ $san->IDSANTRI }}" value="" name="id"/>
                                        <input type="hidden" class="form-control" value="{{ $san->PASSWORD }}" value="" name="pass"/>
                                    {{-- </div> --}}
                                    <div class="form-group">
                                        <label for="nama">Nama : </label>
                                        <input type="text" class="form-control"  value="{{ $san->NAMASATRI }}" name="nama" />
                                    </div>
                                    <div class="form-group">
                                        <label for="lahir">Tanggal Lahir : </label>
                                        <input type="date" class="form-control" value="{{ $san->TAGGALLHR }}" name="lahir"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatlahir">Tempat Lahir : </label>
                                        <input type="text" class="form-control"  value="{{ $san->KOTALHR }}" name="tempatLahir"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="ortu">Nama Orang Tua : </label>
                                        <input type="text" class="form-control"  value="{{ $san->NAMAORTU }}" name="ortu"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat : </label>
                                        <input type="text" class="form-control"  value="{{ $san->ALAMATORTU }}" name="alamat"/>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    {{-- <div class="form-group">
                                        <label for="jk">Jenis Kelamin : </label>
                                        <input type="text" class="form-control"  value="{{ $san->GENDER }}" name="jk"/>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="email">Email : </label>
                                        <input type="text" class="form-control"  value="{{ $san->EMAIL }}"name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">Nomor Hp : </label>
                                        <input type="text" class="form-control" value="{{ $san->HP }}" name="hp"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="masuk">Tanggal Masuk : </label>
                                        <input type="date" class="form-control" value="{{ $san->TANGGALMASUK }}" name="masuk"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto" class="form-label">Upload Foto</label>
                                        <input type="hidden" class="form-control" value="{{ $san->foto }}" name="fotolama"/>
                                        <input class="form-control" type="file" id="foto" name="foto" >
                                    </div>
                                    <div class="form-group">
                                        <label for="foto" class="form-label">Jenis Kelamin</label>
                                        {{-- <input type="text" class="form-control" placeholder="Jenis Kelamin" value="" name="GENDER" required/> --}}

                                        <div class="col-sm-12">
                                            <select class="form-select col-sm-12" aria-label="Default select example" name="jk">
                                                <option selected>Jenis Kelamin</option>
                                                <option value="M">Laki - Laki </option>
                                                <option value="F">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Edit Data"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
