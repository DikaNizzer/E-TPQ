
	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Login Petugas</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Buat Akun</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Nama" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Id" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										<a href="/pengurus" class="light">Simpan</a>
									</button>
									<a class="for-pwd" href="javascript:;">Lupa password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Id" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Simpan &amp; Lanjutkan
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

  <!-- Modal2 -->
	<div class="modal fade" id="loginsantri" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Login Santri</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Loginsantri" data-toggle="tab">Login</a></li>
					<li><a href="#Registrationsantri" data-toggle="tab">Buat Akun</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Loginsantri">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Id" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Simpan
									</button>
									<a class="for-pwd" href="javascript:;">Lupa password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registrationsantri">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Id" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Simpan &amp; Lanjutkan
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

	<!-- Modal3 -->
		<div class="modal fade" id="loginortu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header tit-up">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Login Wali Siswa</h4>
				</div>
				<div class="modal-body customer-box">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li><a class="active" href="#Loginortu" data-toggle="tab">Login</a></li>
						{{-- <li><a href="#Registrationsantri" data-toggle="tab">Registration</a></li> --}}
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="Loginortu">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="email1" placeholder="Name Santri" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="exampleInputPassword1" placeholder="Id Santri" type="text">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-10">
										<button  class="btn btn-light btn-radius btn-brd grd1" >
											<a href="/santri">Cari</a>
										</button>
										<a class="for-pwd" href="javascript:;">Lupa Nama Anak Anda ?</a>
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
			</div>
		</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">
					<img src="images/logon.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="/info">Informasi</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Kelas</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="/kelasIqra">Iqra' </a>
								<a class="dropdown-item" href="#">Jus Amma</a>
								<a class="dropdown-item" href="#">Al - Quran</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="#">Pengajar</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Narahubung</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Login </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#login" >Login Petugas</a>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginsantri">Login Santri</a>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginortu">Login Orang Tua</a>
							</div>
						</li>
						<ul></ul>
						<ul></ul>
					</ul>
					{{-- <ul class="nav navbar-nav navbar-right">
            			<li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Petugas</span></a></li>
          			</ul>
         			<br>
          			<ul> --}}
            {{-- <li></li> --}}
          			{{-- </ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#loginsantri"><span>Santri</span></a></li>
					</ul> --}}
          
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

