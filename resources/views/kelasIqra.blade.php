@extends('layout.main')
@section('container')

	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Teachers<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div>
	
	<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">

@foreach($pengurus1 as $dataurus)
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-01.png" >
							<div class="social">
								{{-- <ul> --}}
									{{-- <li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li> --}}
									{{-- <a href="/detailpengurus{{ $dataurus->NAMA }}">{{ $dataurus->NAMA }}</a> --}}
								{{-- </ul> --}}
							</div>
						</div>
						<div class="team-content">
							<a href="detailpengurus{{ $dataurus->NAMA }}"><h3 class="title">{{ $dataurus->NAMA }}</h3></a>
							{{-- <span class="post">Web Developer</span> --}}
						</div>
					</div>
				</div>
@endforeach
				{{-- <div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-02.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">iQRA' 2</h3>
							<span class="post">Web Designer</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-03.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Steve Thomas</h3>
							<span class="post">Web Developer</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-04.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Miranda joy</h3>
							<span class="post">Web Developer</span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-01.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Williamson</h3>
							<span class="post">Web Developer</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-02.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Kristiana</h3>
							<span class="post">Web Designer</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-03.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Steve Thomas</h3>
							<span class="post">Web Developer</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-04.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Miranda joy</h3>
							<span class="post">Web Developer</span>
						</div>
					</div>
				</div> --}}
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid ">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="images/testi_03.png" alt="" class="img-fluid">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	@endsection