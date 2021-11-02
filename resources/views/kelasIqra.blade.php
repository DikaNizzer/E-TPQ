@extends('layout.main')
@section('container')

	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Kelas IQRA'<span class="m_1">kelas diperuntukkan bagi pemula</span></h1>
		</div>
	</div>
	
	<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">

				<div class="container-fluid mt-3">
					<div class="row">

						@foreach ($buku as $item)
							
						<div class="col-lg-3 col-md-6 col-12">
							<div class="our-team">
								<div class="team-img">
									{{-- <img src="images/team-02.png">
									<div class="social">
										<ul>
											<li><a href="#" class="fa fa-facebook"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-linkedin"></a></li>
											<li><a href="#" class="fa fa-skype"></a></li>
										</ul> --}}
									{{-- </div> --}}

								</div>
								<div class="team-content">
									<h4 class="title"> {{ $item->BUKU }} </h4>
									<h3> {{ $item->KETERANGAN }} </h3>
									{{-- <span class="post">Web Designer</span> --}}
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	
	@endsection

