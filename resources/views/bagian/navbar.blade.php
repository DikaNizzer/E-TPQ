
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
										<a href="/pengurus" class="btn btn-light btn-radius btn-brd grd1">Masuk</a>
									<a class="for-pwd" href="javascript:;">Lupa password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form action="buatpengurus" method="post" role="form" class="form-horizontal">
                            {{ csrf_field() }}
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control @error('IDPENGURUS') is-invalid @enderror" placeholder="Id Pengurus"
                                    type="text" name="IDPENGURUS" required value="{{ old('IDPENGURUS') }}">
                                    @error('IDPENGURUS')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="nama" placeholder="Nama" type="text" name="NAMA" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email" name="EMAIL" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="hp" placeholder="Hp" type="text" name="HP" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="jk" placeholder="Jenis Kelamin" type="text" name="GENDER" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="pass" placeholder="Password" type="password" name="PASSWORD" required>
								</div>
							</div>
                            <div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="status" placeholder="Status" type="password" name="AKTIF" required>
								</div>
							</div>
							<div class="form">
								<label for = "location" > Pilih Peran:</label>
									<select name="peran[]" multiple class="form-control"  id="Select" >
                                        <option selected> Pilih Peran </option>
								   @foreach ($peran2 as $data)
										  <option value="{{ $data->IDPERAN }}"> {{ $data->PERAN }}</option>
									@endforeach
									</select>
							</div>



							<div class="row">
								<div class="col-sm-10">
									{{-- <button type="button" class="btn btn-light btn-radius btn-brd grd1"> --}}
                                        <input type="submit" class="btn btn-light btn-radius btn-brd grd1"  value="Tambah Data"/>
										{{-- <a href="buatpengurus" class="btn btn-light btn-radius btn-brd grd1">Simpan &amp; Lanjutkan</a> --}}
									{{-- </button> --}}
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
										<a href="santri" class="btn btn-light btn-radius btn-brd grd1">Masuk</a>
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
											<a href="/ortu" class="btn btn-light btn-radius btn-brd grd1">Masuk</a>
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
	{{-- <div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div> --}}
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">
					<img src="images/logon.png" alt="" />
				</a>
				<a class="navbar-brand" href="/">
					<img src="images/vokasi.png" alt="" width="100px"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
						{{-- <li class="nav-item"><a class="nav-link" href="/info">Informasi</a></li> --}}
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Kelas</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="/kelasIqra">Iqra' </a>
								<a class="dropdown-item" href="#">Jus Amma</a>
								<a class="dropdown-item" href="#">Al - Quran</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="data">Pengajar</a></li>
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
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

