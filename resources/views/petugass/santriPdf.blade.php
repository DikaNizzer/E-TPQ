<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>TPQ Digital</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- ALL VERSION CSS -->
        <link rel="stylesheet" href="css/versions.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">

        <!-- Modernizer for Portfolio -->
        <script src="js/modernizer.js"></script>

        <style>
            .garis_tepi {
                border: 2px solid blue;
            }

        </style>

</head>
<div class="row garis_tepi">
    <div class="col-md-12">
        <div class="table-wrap">
            <div class="container">
                <img src="storage/logo.jpg" style="margin:5px">
            </div>
            <p><center> DATA SANTRI </center></p><br><br>

            <table class="table">
            <thead class="thead-primary table-primary">

                    <tr>
                        <td rowspan="10"><img src="storage/{{ $santri->foto }}" width="250px"></td>
                        <td> </td>
                        <td> </td>
                        <td> ID Santri </td>
                        <td> : {{ $santri->IDSANTRI }} </td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> Nama </td>
                        <td> : {{ $santri->NAMASATRI }}</td>
                    </tr>

                    {{-- <tr>
                        <td> </td>
                        <td> </td>
                        <td> Password </td>
                        <td> : {{ $santri->PASSWORD }}</td>
                    </tr> --}}

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> Tanggal Lahir </td>
                        <td> : {{ $santri->TAGGALLHR }}</td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> Nama Orang Tua </td>
                        <td> : {{ $santri->NAMAORTU }} </td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> Alamat Orang Tua </td>
                        <td> : {{ $santri->ALAMATORTU }}</td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> Email </td>
                        <td> : {{ $santri->EMAIL }}</td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> Nomor Hp </td>
                        <td> : {{ $santri->HP }}</td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> Tempat Lahir </td>
                        <td> : {{ $santri->KOTALHR }}</td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> Tanggal Masuk </td>
                        <td> : {{ $santri->TANGGALMASUK }}</td>
                    </tr>
            </thead>

            </table>
        </div>
    </div>
</div>

</html>
