@extends('ortuu.main')
@section('container')


<div class="bg">
    <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">

                    <img src="storage/{{ session()->get('santri')->foto }}" width="250px">
                    <h3>Assalamualaikum</h3>
                    <p>Kebaikan tidak sama dengan kejahatan. Tolaklah kejahatan itu dengan cara yang lebih baik sehingga
                        yang memusuhimu akan seperti teman yang setia.</p>
                        <p><strong>Q.S Fusshilat: 34</strong></p>
                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Data Diri Santri</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Absen">Nama : </label>
                                        <p class="kotak">{{  session()->get('santri')->NAMASATRI }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="Absen">Tanggal Lahir : </label>
                                        <p class="kotak">{{  session()->get('santri')->TAGGALLHR}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="Absen">Nama Orang Tua : </label>
                                        <p class="kotak">{{  session()->get('santri')->NAMAORTU}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="Absen">Alamat Orang Tua : </label>
                                        <p class="kotak">{{  session()->get('santri')->ALAMATORTU}}</p>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label for="Absen">Jenis Kelamin : </label>
                                            @if (session()->get('santri')->GENDER == 'M')
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="L" checked>
                                                <span> Laki - Laki </span>
                                            </label>
                                            @else
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="P" checked>
                                                <span>Perempuan </span>
                                            </label>

                                            @endif



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Absen">Email : </label>
                                        <p class="kotak">{{  session()->get('santri')->EMAIL}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="Absen">Nomor Hp : </label>
                                        <p class="kotak">{{  session()->get('santri')->HP}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="Absen">Tanggal Msuk : </label>
                                        <p class="kotak">{{  session()->get('santri')->TANGGALMASUK}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="Absen">Tempat Lahir : </label>
                                        <p class="kotak">{{  session()->get('santri')->KOTALHR}}</p>
                                    </div>

                                    <button class="btnRegister"><a href="ortuliat{{  session()->get('santri')->IDSANTRI}}"> Lihat Perkembangan</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <br><br>

@endsection
