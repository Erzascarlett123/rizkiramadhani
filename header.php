<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pusat Pendidikan Zeni</title>
	<link rel="icon" href="assets/file/zeni.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<style type="text/css">
		.kartu:hover{
			background-color: #008080;
			color: white;
		}

		.kotak:hover{
			background-color: #18d17b;
		}

		p{
			font-size: 18px;
			color: dimgrey;
		}
		.pengajar {
			/* Add shadows to create the "card" effect */
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
		}

		/* On mouse-over, add a deeper shadow */
		.pengajar:hover {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.pengurus {
			/* Add shadows to create the "card" effect */
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
		}

		/* On mouse-over, add a deeper shadow */
		.pengurus:hover {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.berita:hover{
			background-color: #008080;
			color: white;
		}

		.galeri:hover{
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.samping:hover{
			background-color: #008080;
			color: white;
		}
}
</style>
</head>
<body>
	<div class="sticky-top top-nav" style="background: #008080;">
		<nav class="navbar navbar-dark navbar-expand-lg shadow">
			<div class="container">
				<a href="index.php" class="navbar-brand">
					<img src="assets/file/zeni.png" width="70">
				</a>
				<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#lorem" aria-controls="lorem" aria-expanded="false" aria-label="toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="lorem">
					<ul class="navbar-nav text-center">
						<li class="nav-item mx-2 kotak">
							<a href="semua_berita.php" class="nav-link text-white fw-bold">Berita</a>
						</li>
						<li class="nav-item mx-2 kotak">
							<a href="semua_galeri.php" class="nav-link text-white fw-bold">Galeri</a>
						</li>
						<li class="nav-item mx-2 kotak">
							<a href="semua_kegiatan.php" class="nav-link text-white fw-bold">Layanan</a>
						</li>
						<li class="nav-item mx-2 kotak">
							<a href="tentang_kami.php" class="nav-link text-white fw-bold">Tentang Kami</a>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto">
						<li class="nav-item mx-2 kotak">
							<a href="login.php" class="nav-link text-white fw-bold">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>


	<div class="min-vh-100">
		
