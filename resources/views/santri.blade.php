@extends('layout.main')
@section('container')


    {{-- <div class="container">
        <table border="1" cellspacing="0" cellpadding="10" class="table-info">
            <tr class="table-danger">
                <th>Nama</th>
                <th>Foto</th>
                <th>Aksi</th>

            </tr>

            @foreach ($santri as $data)
            
            <tr>
                <td > {{ $data->NAMASATRI }} </td>
                <td > <img src="images/{{ $data->foto}}" width="150px" > </td>
                <td>
                    <a href="#">Ubah </a>  || <!--mengirim Absen dengan get -->
                    <a href="#" >Hapus Data</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div> --}}

    <div class="container">
        <div>

            @foreach ($santri as $data)
            <table class="table-info" cellspacing="1" cellpadding="10" action="" method="post" style="border:1px solid red"> 
                
                <tr>
                    <td>
                        <img src="images/{{ $data->foto}}" width="150px">
                    </td>
                </tr>

                <tr class="table-danger">
                    <td >
                        <label for="Absen">Nama : </label>
                    </td>
                    <td>
                        {{ $data->NAMASATRI }}
                    </td>
                </tr>

                <tr class="table-danger">
                    <td> 
                        <label for="Nama">L / P : </label>
                    </td>
                    <td>
                        {{ $data->GENDER }}
                    </td>
                </tr>

                <tr class="table-danger">
                    <td>
                        <label for="Pt">Tanggal Lahir : </label>
                    </td>
                    <td>
                        {{ $data->TAGGALLHR }}
                    </td>
                </tr>

                <tr class="table-danger">
                    <td>
                        <label for="prodi">Kota Lahir : </label>
                    </td>
                    <td>
                        {{ $data->KOTALHR }}
                    </td>
                </tr>
            
                <tr class="table-danger">
                    <td>
                        <label for="foto">Nama Ortu : </label>
                    </td>
                    <td>
                        {{ $data->NAMAORTU }}
                    </td>
                </tr>

                <tr class="table-danger">
                    <td>
                        <label for="foto">No HP : </label>
                    </td>
                    <td>
                        {{ $data->HP }}
                    </td>
                </tr>

                <tr class="table-danger">
                    <td>
                        <label for="foto">Email : </label>
                    </td>
                    <td>
                        {{ $data->EMAIL }}
                    </td>
                </tr>

                <tr class="table-danger">
                    <td>
                        <label for="foto">Tanggal Masuk : </label>
                    </td>
                    <td>
                        {{ $data->TANGGALMASUK }}
                    </td>
                </tr>

                <tr >
                    <td>
                        <button type="submit" name="submit"> Lihat Perkembangan Santri</button>
                    </td>
                </tr>
                </table>
                <br>
                @endforeach
        </div>
    </div>

@endsection