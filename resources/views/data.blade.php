@extends('layout.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center mb-2 mt-2">
                <h2 class="heading-section">DATA PENGURUS </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    
                    <table class="table">
                    <thead class="thead-primary table-primary">
                    <tr >
                        <th>Absen  </th>
                        <th>Nama</th>
                        <th>Email </th>
                        <th>No Hp </th>
                        <th>Jenis Kelamin </th>
                        <th>Peran </th>
                        <th>Pilihan</th>
                        </tr>
                    </thead>
                    @foreach ($pengurus as $urus)
                    <tbody>
                    <tr>
                        <?php $absen =1 ?>
                        <th scope="row" class="scope" ><?= $absen ?></th>
                        <td>{{ $urus->NAMA }}</td>
                        <td>{{ $urus->EMAIL }}</td>
                        <td>{{ $urus->HP }}</td>
                        <td>{{ $urus->GENDER }}
                            @foreach ($urus->peran as $perann )
                                <td>{{ $perann->PERAN }} </td>
                            @endforeach
                        <td>
                            <a href="/id{{ $urus->IDPENGURUS }}" class="btn btn-info"> DETAIL </a>
                        </td>
                        <?php $absen++ ?>
                    </tr>
                    </tbody>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
