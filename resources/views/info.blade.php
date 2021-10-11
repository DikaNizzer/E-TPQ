@extends('layout.main')
@section('container')

<div class="all-title-box">
    <div class="container text-center">
        <h1> TPQ Digital<span class="m_1">Sebuah Platform Online Yang Digunakan Untuk Mengembangkan Minat dan Bakat</span></h1>
    </div>
</div>


<div id="overviews" class="section lb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3 id="tentang">TENTANG</h3>
                <p class="lead"><strong>TPQ Digital</strong> merupakan sarana pengembangan para santri dan santriwati untuk terus belajar dalam mengembangkan minat dan bakat dalam mendalami Qur'an</p>
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
 

<div class="hmv-box" id="hubungi">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3 >HUBUNGI KAMI</h3>
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