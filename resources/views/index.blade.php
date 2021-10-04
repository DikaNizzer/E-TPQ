
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
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-right">
                                        <div class="big-tagline">
                                            <h2><strong>TPQ Digital</strong> Pembelajaran Islam Secara Digital</h2>
                                            <p class="lead">Sebuah platform digital untuk memantau perkembangan
                                                putra - putri anda
                                            </p>
                                                <a href="#" class="hover-btn-new"><span>Hubungi Kami</span></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" class="hover-btn-new"><span>Informasi</span></a>
                                        </div>
                                    </div>
                                </div><!-- end row -->            
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <div class="carousel-item">
                    <div id="home" class="first-section" style="background-image:url('images/bgislam2.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-left">
                                        <div class="big-tagline">
                                            <h2 data-animation="animated zoomInRight">Selamat Datang <strong>di TPQ Digital</strong></h2>
                                            <p class="lead" data-animation="animated fadeInLeft">Sebuah Platform Pembelajaran Al Quran Yang Dikemas Secara Digital</p>
                                                <a href="#" class="hover-btn-new"><span>Hubungi Kami</span></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" class="hover-btn-new"><span>Informasi</span></a>
                                        </div>
                                    </div>
                                </div><!-- end row -->            
                            </div><!-- end container -->
                        </div>
                    </div><!-- end section -->
                </div>
                <div class="carousel-item">
                    <div id="home" class="first-section" style="background-image:url('images/bgislam.jpg');">
                        <div class="dtab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <div class="big-tagline">
                                            <h2 data-animation="animated zoomInRight"><strong>Daftarkan Putra Putri Anda</strong> Segera</h2>
                                            <p class="lead" data-animation="animated fadeInLeft">Dan Dapatkan Penawaran Khusus</p>
                                                <a href="#" class="hover-btn-new"><span>Hubungi Kami</span></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="#" class="hover-btn-new"><span>Informasi</span></a>
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

    @endsection

