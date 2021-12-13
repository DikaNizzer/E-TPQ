@extends('petugas.main')
@section('container')

<div class="bg">
    <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="images/santri.png" alt=""/>
                    <h3>Assalamualaikum</h3>
                    <p>Kebaikan tidak sama dengan kejahatan. Tolaklah kejahatan itu dengan cara yang lebih baik sehingga
                        yang memusuhimu akan seperti teman yang setia.</p>
                        <p><strong>Q.S Fusshilat: 34</strong></p>
                </div>
                <div class="col-md-9 register-right">
                    <form action="/santri/store" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            {{-- KAlo gagal Buat Data Santri --}}
                            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <b>Gagal Membuat AKun Karena :</b>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                                <b>Silahkan Coba Lagi</b>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <h3 class="register-heading">Data Diri Santri</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="ID Santri" value="" name="IDSANTRI" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Password" value="" name="PASSWORD"required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" value="" name="NAMASATRI" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir" value="" name="TAGGALLHR"required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Orang Tua" value="" name="NAMAORTU" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Alamat Orang Tua" value="" name="ALAMATORTU" required/>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">

                                            {{-- <label class="radio inline">
                                                <input type="radio" name="gender" value="L" checked>
                                                <span> L </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="P">
                                                <span>P </span>
                                            </label> --}}

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Jenis Kelamin" value="" name="GENDER" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" value="" name="EMAIL" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nomor Hp" value="" name="HP" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto" class="form-label">Tanggal Masuk</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Masuk" value="" name="TANGGALMASUK" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" value="" name="KOTALHR" required/>
                                    </div>
                                    {{-- <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Upload Foto" value="" name="foto"/>
                                    </div> --}}
                                    <div class="form-group">
                                        {{-- <img class="img-preview img-fluid"> --}}
                                        <label for="foto" class="form-label">Upload Foto</label>
                                        <input class="form-control" type="file" id="foto" name="foto" >
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Tambah Data"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <img class="img-preview img-fluid">
    </div>


    {{-- <script>

        function previewImage(){
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script> --}}
@endsection
