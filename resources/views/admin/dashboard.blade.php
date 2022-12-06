<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JalanIn</title>
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
	<!--header--->
	<header>
		<a href="#" class="logo">JalanIn</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="#home">Home</a></li>
			<li><a href="#package">Paket</a></li>
			<li><a href="#destination">Destinasi</a></li>
			<li><a href="#contact">Hubungi Kami</a></li>
		</ul>
	</header>

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
			<h1>Selamat Datang<br>Admin</h1>
			<p>Akses semua fitur dengan akses dari admin,<br> website ini sekarang ada di genggamanmu.</p>
			<a href="#first" class="home-btn">Mulai Sekarang	</a>
		</div>
	</section>

	<!--container--->
	<section class="container" id="first">
		<div class="text">
			<h2>Mulai perjalananmu <br>dengan berbagai pelayanan!</h2>
		</div>

		<div class="row-items">
			<div class="container-box">
				<div class="container-img">
					<img src="img/trip1.png">
				</div>
				<h4>Kapal Pesiar</h4>
				<p>19 Properti</p>
			</div>

			<div class="container-box">
				<div class="container-img">
					<img src="img/trip2.png">
				</div>
				<h4>Wisata Kuliner</h4>
				<p>17 Properti</p>
			</div>

			<div class="container-box">
				<div class="container-img">
					<img src="img/trip3.png">
				</div>
				<h4>Musim Panas</h4>
				<p>70 Properti</p>
			</div>

			<div class="container-box">
				<div class="container-img">
					<img src="img/trip4.png">
				</div>
				<h4>Wisata Muncak</h4>
				<p>13 Properti</p>
			</div>

		</div>
	</section>

	<!--Package section--->
	<section class="package" id="package">
		<div class="title">
			<h2>Paket Wisata <br> Yang Akan Datang</h2>
		</div>

		<div class="package-content">
			<div class="box">
				<div class="thum">
					<img src="img/img1.png">
					<h3>$499</h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4>London</h4>
						<p>4h - 5h</p>
					</div>
					<div class="stars">
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="thum">
					<img src="img/img2.png">
					<h3>$499</h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4>New York</h4>
						<p>4h - 5h</p>
					</div>
					<div class="stars">
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="thum">
					<img src="img/img3.png">
					<h3>$499</h3>
				</div>

				<div class="dest-content">
					<div class="location">
						<h4>Dubai</h4>
						<p>4h - 5h</p>
					</div>
					<div class="stars">
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
						<a href="#"><i class='bx bxs-star'></i></a>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!--destination section--->
	<section class="destination" id="destination">
		<div class="title-destination-admin">
			<h2>Rekomendasi Destinasi <br> Dari Kami</h2>
		</div>
		<a class="crud-btn" href="/create">Tambah Destinasi</a>
		<div class="destination-content-admin">
			@foreach ($destinations as $item)
				<div class="col-content">
					<img src="img/img-1.jpg">
					<h5>{{ $item->tujuan }}</h5>
					<p>{{ $item->harga }}</p>
				</div>

			@endforeach
		</div>
	</section>

	<br><br><br><br><br>

	<!--footer--->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Tour</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Tour</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Kontak Kami</h4>
					<ul>
						<li><a href="#">Desa Besito, Gebog</a></li>
						<li><a href="#">SMK Raden Umar Said</a></li>
						<li><a href="#">+62 895354880006</a></li>
						<li><a href="#">info@mydomain.com</a></li>
						<li><a href="#">+1(123)-456-7890</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Sosmed</h4>
					<div class="social">
						<a href="#"><i class='bx bxl-facebook' ></i></a>
						<a href="https://www.instagram.com/its_arayy/"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="#"><i class='bx bxl-twitter' ></i></a>
						<a href="#"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="end-text">
			<p>Copyright ©2022 All rights reserved | Made with by Rasyid&Gavra</p>
		</div>
	</section>

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>