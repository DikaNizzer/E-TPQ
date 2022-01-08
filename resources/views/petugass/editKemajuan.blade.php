@extends('petugass.main')
@section('container')

@foreach ($kemajuan as $san)
<div class="bg">
    <div class="container register">
            <div class="row">
                <div class="col-md-9 register-right">
                    <form action="/kemajuanupdate" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Edit Data Kemajuan Santri</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" value="{{ $san->IDSANTRI }}" value="" name="id"/>
                                    </div>
                                    <div class="form">
                                        <label for = "location" > Status</label>
                                            <select name="STATUS"  multiple class="form-control"  id="Select" >
                                                <option selected> Status </option>
                                                  <option value="{{ $san->STATUS }}"> Naik </option>
                                                  <option value="{{ $san->STATUS }}"> Tetap </option>
                                                  <option value="{{ $san->STATUS }}"> Mundur </option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                          <label for="keterangan">Keterangan</label>
                                            <input class="form-control" name="keterangan"  placeholder="Sudah Membaca"
                                            type="text" value="{{ $san->keterangan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                          <label for="nilai">Nilai</label>
                                            <input class="form-control" name="nilai"  placeholder="0 - 100"
                                            type="number" value="{{ $san->nilai }}" >
                                        </div>
                                    </div>
                                    <div style='text-align:justify;'><input type="submit" class="btnRegister"  value="Edit Data"/></div>
                                    <br><br><a href="/kemajuan" class="btn btn-primary">Kembali</a>
                                    
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
