@extends('petugas.main')
@section('container')

    {{-- @foreach ($santri as $san) --}}
<div class="bg">
<div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                {{-- <img src="images/{{ $san->foto}}" width="250px"> --}}
                <img src="images/santri.png" width="250px">
                <h3>Assalamualaikum</h3>
                <p>Kebaikan tidak sama dengan kejahatan. Tolaklah kejahatan itu dengan cara yang lebih baik sehingga 
                    yang memusuhimu akan seperti teman yang setia.</p>
                    <p><strong>Q.S Fusshilat: 34</strong></p>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">san Diri Santri</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Absen">Nama : </label>
                                    {{-- <p class="kotak">{{ $san->NAMASATRI }}</p> --}}
                                    <p class="kotak">Coba</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Tanggal Lahir : </label>
                                    {{-- <p class="kotak">{{ $san->TAGGALLHR }}</p> --}}
                                    <p class="kotak">Coba</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Nama Orang Tua : </label>
                                    {{-- <p class="kotak">{{ $san->NAMAORTU }}</p> --}}
                                    <p class="kotak">Coba</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Alamat Orang Tua : </label>
                                    {{-- <p class="kotak">{{ $san->ALAMATORTU }}</p> --}}
                                    <p class="kotak">Coba</p>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="L" checked>
                                            <span> L </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="P">
                                            <span>P </span> 
                                        </label>
                                    
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Absen">Email : </label>
                                    <p class="kotak">{{ $san->EMAIL }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Nomor Hp : </label>
                                    <p class="kotak">{{ $san->HP }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Tanggal Msuk : </label>
                                    <p class="kotak">{{ $san->TANGGALMASUK }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Absen">Tempat Lahir : </label>
                                    <p class="kotak">{{ $san->KOTALHR }}</p>
                                </div>
                                <input type="submit" class="btnRegister"  value="Lihat Perkembangan"/>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>


            {{-- @endforeach --}}


@endsection