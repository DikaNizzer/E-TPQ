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
</head>
<body>
    @foreach ($santri as $san)
    <div class="bg">
    <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="images/{{ $san->foto}}" width="250px">
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
                                        <label for="Absen">Id Santri : </label>
                                        <p class="kotak">{{ $san->IDSANTRI }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="Absen">Nama : </label>
                                        <p class="kotak">{{ $san->NAMASATRI }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="Absen">Tanggal Lahir : </label>
                                        <p class="kotak">{{ $san->TAGGALLHR }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="Absen">Nama Orang Tua : </label>
                                        <p class="kotak">{{ $san->NAMAORTU }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="Absen">Alamat Orang Tua : </label>
                                        <p class="kotak">{{ $san->ALAMATORTU }}</p>
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
                                            <a href="/cetak{{ $san->IDSANTRI }}" class="btnRegister"> Print Data </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                    <div class="form-group">
                                        <label for="Absen">Password : </label>
                                        <p class="kotak">{{ $san->PASSWORD }}</p>
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Tambah Perkembangan"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/tabelsantri" class="btn btn-primary">Kembali</a>
        </div> 
    </div>
    
    
                @endforeach
    
</body>
</html>