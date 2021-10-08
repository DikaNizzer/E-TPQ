<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Tambah Data Pengurus</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="buatstyle.css" />
    <link type="text/css" rel="stylesheet" href="style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
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
								<a class="dropdown-item" href="#">Iqra' </a>
								<a class="dropdown-item" href="#">Jus Amma</a>
								<a class="dropdown-item" href="#">Al - Quran</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="#">Pengajar</a></li>
						{{-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Data Santri</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="tabelsantri">Detail Data Santri </a>
								<a class="dropdown-item" href="tambah">Tambah Data Santri</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="/">Keluar</a></li>
						<ul></ul>
						<ul></ul> --}}
					</ul>
				</div>
			</div>
		</nav>
	</header>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form>
							<!-- <div class="form-group">
								<div class="form-checkbox">
									<label for="roundtrip">
										<input type="radio" id="roundtrip" name="flight-type">
										<span></span>Roundtrip
									</label>
									<label for="one-way">
										<input type="radio" id="one-way" name="flight-type">
										<span></span>One way
									</label>
									<label for="multi-city">
										<input type="radio" id="multi-city" name="flight-type">
										<span></span>Multi-City
									</label>
								</div>
							</div> -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Nama :</span>
										<input class="form-control" type="text" placeholder="Wajib Diisi*">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Email : </span>
										<input class="form-control" type="text" placeholder="Wajib Diisi*">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">No Hp : </span>
										<input class="form-control" type="text" placeholder="Wajib Diisi*">
										<!-- <input class="form-control" type="date" required> -->
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Jenis Kelamin : </span>
										<input class="form-control" type="text" placeholder="Wajib Diisi*">
										<!-- <input class="form-control" type="date" required> -->
									</div>
								</div>
								<!-- <div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Adults (18+)</span>
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div> -->
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Pasword : </span>
										<input class="form-control" type="text" placeholder="Wajib Diisi*">
										<!-- <input class="form-control" type="date" required> -->
									</div>
								</div>
								<!-- <div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Children (0-17)</span>
										<select class="form-control">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div> -->
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Sebaga :</span>
										<select class="form-control">
											<option>Staf </option>
											<option>Pengajar</option>
											<option>Entah Apa Lagi YAA</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Simpan</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>