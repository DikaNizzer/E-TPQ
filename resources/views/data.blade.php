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
    {{-- NAVBAR --}}

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
						<li class="nav-item"><a class="nav-link" href="/">Kembali</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center mb-2 mt-2">
                <h2 class="heading-section">DATA PENGURUS </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">

                    <table class="table">
                    <thead class="thead-primary table-primary">
                    <tr >
                        <th>Absen  </th>
                        <th>Nama</th>
                        <th>Email </th>
                        <th>No Hp </th>
                        <th>Jenis Kelamin </th>
                        <th>Peran </th>
                        <th>Pilihan</th>
                        </tr>
                    </thead>
                    @foreach ($pengurus as $urus)
                    <tbody>
                    <tr>
                        <?php $absen =1 ?>
                        <th scope="row" class="scope" > {{ $urus->IDPENGURUS }} </th>
                        <td>{{ $urus->NAMA }}</td>
                        <td>{{ $urus->EMAIL }}</td>
                        <td>{{ $urus->HP }}</td>
                        <td>{{ $urus->GENDER }}
                            @foreach ($urus->peran as $perann )
                                <td>{{ $perann->PERAN }} </td>
                            @endforeach
                        <td>
                            <a href="/id{{ $urus->IDPENGURUS }}" class="btn btn-info"> DETAIL </a>
                        </td>
                        <?php $absen++ ?>
                    </tr>
                    </tbody>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>


</body>
</html>
