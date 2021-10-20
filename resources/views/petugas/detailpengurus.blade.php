@extends('petugas.main')
@section('container')

@foreach ($pengurus as $data)
    <div class="bg">
        <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images/santri.png" width="250px">
                        <h3>Assalamualaikum</h3>
                        <p>Kebaikan tidak sama dengan kejahatan. Tolaklah kejahatan itu dengan cara yang lebih baik sehingga 
                            yang memusuhimu akan seperti teman yang setia.</p>
                            <p><strong>Q.S Fusshilat: 34</strong></p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Data Diri Pengurus</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Absen">Nama : </label>
                                            <p class="kotak">{{ $data->NAMA }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Absen">Alamat Email : </label>
                                            <p class="kotak">{{ $data->EMAIL }}</p>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Absen">No Hp : </label>
                                            <p class="kotak">{{ $data->HP }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Absen">Jenis Kelamin : </label>
                                            <p class="kotak">{{ $data->GENDER }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <a href="/pengurus" class="btn btn-primary mt-15px"> Kembali </a>
                </div>
            </div> 
        </div>

@endforeach
@endsection