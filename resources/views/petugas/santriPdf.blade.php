<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .bg{
            background : #00c6ff;
        }

        .register{
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 0;
            padding: 3%;
            /* width : 100%; */
            margin-left: 0;
            margin-right: 0;
        }
        .register-left{
            text-align: center;
            color: #fff;
            margin-top: 2%;
        }
        .register-left input{
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }
        .register-right{
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 5% 50%;
            
        }
        .register-left img{
            margin-top: 10%;
            margin-bottom: 5%;
            width: 150px;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }

        .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -15%;
        }
        .register .register-form{
            padding: 10%;
            margin-top: 10%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 500;
            /* width: 50%; */
            cursor: pointer;
        }
        .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }
        .register .nav-tabs .nav-link{
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register .nav-tabs .nav-link:hover{
            border: none;
        }
        .register .nav-tabs .nav-link.active{
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 4%;
            margin-bottom: -20%;
            color: #495057;
        }

        .kotak{
            border : 2px solid blue;
            padding : 5px;
        }

        .full{
            height: 100%;
        }

        #footer{
            position:fixed;
            /* height: 100%; */
            bottom:0px;
        }
    </style>
</head>
<body>

    <div class="bg">
        <div class="container register">
                <div class="row">
                    {{-- <div class="col-md-3 register-left"> --}}
                        <img src="images/dika.jpg" width="150px">
                        <img src="{{ public_path("images/".$santri->foto) }}" alt="" style="width: 150px; height: 150px;">
                        <img src="{{asset('images/'.$santri->foto)}}">
                    {{-- </div> --}}
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Data Diri Santri</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Absen">Id Santri : </label>
                                            <p class="kotak">{{ $santri->IDSANTRI }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Absen">Nama : </label>
                                            <p class="kotak">{{ $santri->NAMASATRI }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Absen">Tanggal Lahir : </label>
                                            <p class="kotak">{{ $santri->TAGGALLHR }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Absen">Nama Orang Tua : </label>
                                            <p class="kotak">{{ $santri->NAMAORTU }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Absen">Alamat Orang Tua : </label>
                                            <p class="kotak">{{ $santri->ALAMATORTU }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Absen">Email : </label>
                                            <p class="kotak">{{ $santri->EMAIL }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Absen">Nomor Hp : </label>
                                            <p class="kotak">{{ $santri->HP }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Absen">Tanggal Msuk : </label>
                                            <p class="kotak">{{ $santri->TANGGALMASUK }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Absen">Tempat Lahir : </label>
                                            <p class="kotak">{{ $santri->KOTALHR }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Absen">Password : </label>
                                            <p class="kotak">{{ $santri->PASSWORD }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    
</body>
</html>