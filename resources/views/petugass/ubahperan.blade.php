@extends('petugass.main')
@section('container')
@foreach ($peran as $data)
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
                    <form action="/peran/update" method="post">
                        {{ csrf_field() }}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Ubah Peran</h3>
                            <div class="row register-form mt-15">
                                <div class="col-md-6">
                                    {{-- <div class="form-group">
                                        <input type="text" class="form-control" placeholder="ID Buku" value="" name="idbuku"/>
                                    </div> --}}
                                    <input type="hidden" class="form-control" value="{{ $data->IDPERAN }}" value="" name="idperan"/>
                                    <div class="form-group">
                                        <label for="namaperan">Nama Peran : </label>
                                        <input type="text" class="form-control" placeholder="Nama Peran" value="{{ $data->PERAN }}" name="namaperan"/>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status : </label><br>
                                        {{-- <input type="text" class="form-control" placeholder="0=non-aktif, 1=aktif" value="{{ $data->AKTIF }}" name="status" /> --}}

                                        <select class="form-select col-md-6" aria-label="Default select example" name="status">
                                            <option selected>Pilih Status</option>
                                            <option value="1">Aktif</option>
                                            <option value="0">Non AKtif</option>
                                          </select>
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Ubah Data"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                <a href="/peran" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endforeach

@endsection
