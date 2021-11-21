
      @extends('layout.main')
        @section('container')

        <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div id="home" class="first-section" style="background-image:url('images/bgsantri.jpg');">
                        <div class="dtab">
                            <div class="container">

                                @if(session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                <div class="row">


                                    <div class="col-md-12 col-sm-12 text-right">
                                        <div class="big-tagline">
                                            <h2><strong>TPQ Digital</strong> Pembelajaran Islam Secara Digital</h2>
                                            <p class="lead">Sebuah platform digital untuk memantau perkembangan
                                                putra - putri anda
                                            </p>
                                                <a href="#hubungi" class="hover-btn-new"><span>Hubungi Kami</span></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#tentang" class="hover-btn-new"><span>Informasi</span></a>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <div class="carousel-item">
                    <div id="home" class="first-section" style="background-image:url('images/khatam.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-left">
                                        <div class="big-tagline">
                                            <h2 data-animation="animated zoomInRight">Selamat Datang <strong>di TPQ Digital</strong></h2>
                                            <p class="lead" data-animation="animated fadeInLeft">Sebuah Platform Pembelajaran Al Quran Yang Dikemas Secara Digital</p>
                                                <a href="#hubungi" class="hover-btn-new"><span>Hubungi Kami</span></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#tentang" class="hover-btn-new"><span>Informasi</span></a>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <div class="carousel-item">
                    <div id="home" class="first-section" style="background-image:url('images/muslimah.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <div class="big-tagline">
                                            <h2 data-animation="animated zoomInRight"><strong>Daftarkan Putra Putri Anda</strong> Segera</h2>
                                            <p class="lead" data-animation="animated fadeInLeft">Dapatkan Penawaran Khusus</p>
                                                <a href="#hubungi" class="hover-btn-new"><span>Hubungi Kami</span></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#tentang" class="hover-btn-new"><span>Informasi</span></a>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <!-- Left Control -->
                <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <!-- Right Control -->
                <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <div id="overviews" class="section lb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3 id="tentang">TPQ DIGITAL</h3>
                        <p class="lead"><strong>TPQ Digital</strong> merupakan sebuah Platform online sebagai sarana pengembangan para santri dan santriwati untuk terus belajar dalam mengembangkan minat dan bakat dalam mendalami Qur'an</p>
                    </div>
                </div><!-- end title -->

                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="images/quran.jpg" alt="" class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            <h2>TAHFIDZ AL-QUR'AN</h2>
                            <p>Tahfidz Alquran atau penghafalan Alquran adalah tradisi
                                tertua dalam upaya pemeliharaan Alquran. Seiring dengan
                                perjalanan sejarah perkembangan Islam, berbagai upaya
                                dilakukan untuk menanamkan tradisi tersebut. Tujuan yang
                                ingin dicapai oleh seorang hafidz adalah mewujudkan
                                derajat kemuliaan diri seseorang terhadap agamanya melalui
                                pemeliharaan kitab suci.</p>

                            {{-- <a href="#" class="hover-btn-new orange"><span>Learn More</span></a> --}}
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                </div><!-- end row -->



                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">
                            {{-- <h4>2018 BEST SmartEDU education school</h4> --}}
                            <h2>HAFIDZ AL-QUR'AN</h2>
                            <p>Orang yang mampu menghafal 100.000 hadis secara matan dan sanad.ini gelar di buat pada awalan nama bagi orang yg hafal 100.000 hadis.</p>

                            <p>Rasulullah SAW bersabda
                                "Penghafal Al-Quran akan datang pada hari kiamat, kemudian akan berkata, 'Ya Tuhanku, berikan lah perhiasan (kepada orang yang membaca al-Quran'), kemudian orang itu dipakaikan mahkota karomah (kemuliaan). Sesudah itu Al-Quran memohon kembali, 'Ya Tuhanku ridhailah dia', kemudian Allah meridhainya. Dan diperintahkan kepada orang itu, baca lah (Al-Quran) dan terus lah naik lah (ke surga). Lantas, derajatnya (di surga) pun terus bertambah. pada setiap ayat (yang dibacanya) terdapat satu kebaikan."
                                - hadits riwayat Tirmidzi
                                </p>

                            {{-- <a href="#" class="hover-btn-new orange"><span>Learn More</span></a> --}}
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="post-media wow fadeIn">
                            <img src="images/hafidz.jpeg" alt="" class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->
                </div>

            </div><!-- end container -->
        </div><!-- end section -->


        <div class="hmv-box">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3 id="hubungi">HUBUNGI KAMI</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-8">
                        <div class="inner-hmv">
                            <div class="icon-box-hmv">
                                {{-- <i class="flaticon-instagram"></i> --}}
                                <left><img src="images/instagram-logo.png" alt="" style="width:100px;height:100px;object-fit:cover;-webkit-filter:brightness(100%);"></left>
                            </div>
                            <h3>INSTAGRAM</h3>
                            <div class="tr-pa">IG</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="inner-hmv">
                            <div class="icon-box-hmv">
                                <left><img src="images/whatsapp.png" alt="" style="width:70px;height:70px;object-fit:cover;-webkit-filter:brightness(100%);"></left>
                            </div>
                            <h3>WHATSAPP</h3>
                            <div class="tr-pa">WA</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="inner-hmv">
                            <div class="icon-box-hmv">
                                <left><img src="images/facebook.png" alt="" style="width:70px;height:70px;object-fit:cover;-webkit-filter:brightness(100%);"></left>
                            </div>
                            <h3>FACEBOOK</h3>
                            <div class="tr-pa">F</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection

