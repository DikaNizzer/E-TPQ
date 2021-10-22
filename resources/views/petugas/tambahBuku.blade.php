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
                    <form action="/buku/store" method="post">
                        {{ csrf_field() }}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Tambah Daftar Buku</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="ID Buku" value="" name="idbuku"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Buku" value="" name="namabuku"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Keterangan" value="" name="ketbuku" />
                                    </div>
                                    
                                    <input type="submit" class="btnRegister"  value="Tambah Data"/>
                                    
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


@endsection