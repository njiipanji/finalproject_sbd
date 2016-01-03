<?php
	session_start();
	include "connect.php";
	$query = "select nama_petugas
			  from petugas
			  where id_petugas='".$_SESSION['userlogin']."'";
	$admin = $conn->query($query)->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<title>Guest House ITS - ADMIN</title>
	</head>
	<body>
		<header>
		<!--Navigation-->
			<div class="navbar-fixed">
				<nav class="top-nav grey darken-3">
					<div class="container">
						<div class="nav-wrapper">
							<a href="index-admin.php" class="brand-logo">
								<img src="img/logo.png" style="width:155px">
							</a>
							<ul id="nav-mobile" class="right hide-on-med-and-down">
								<li><a href="reservation.php">Reservation</a></li>
								<li><a href="transactions.php">Transaction</a></li>
								<li><a href="logout_auth.php">LOGOUT</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>

		<main>
			<div id="index-banner" class="parallax-container">
				<div class="section no-pad-bot">
					<div class="container">
						<br><br>
						<div class="row center">
							<img src="img/logo-rumah.png" style="width:180px">
						</div>
						<h1 class="header center blue-text text-lighten-1">Guest House ITS</h1>
						<div class="row center">
							<h5 class="header col s12 grey-text text-darken-4 light">Information System</h5>
							<h5 class="header col s12 grey-text text-darken-4 light"><b>Welcome, <?php foreach ((array)$admin as $administrator) {} echo $administrator[0]?></b></h5>
						</div>
						<br><br>
					</div>
				</div>
				<div class="parallax">
					<img src="img/guesthouse-blur.jpg" alt="Unsplashed background img 1" style="display: block;transform: translate3d(-50%, 205px, 0px);">
				</div>
			</div>

			<div class="container">
				<div class="section">
					<!--Description-->
					<div class="row">
						<div class="col s12 center">
							<h5>
								<i class="medium material-icons">info</i>
							</h5>
							<h4>Description</h4>
							<p class="left-align light">
								Kenyamanan tamu, kerabat, dan keluarga menjadi hal penting bagi sivitas akademika ITS. Oleh sebab itu, ITS berusaha memberikan layanan berupa Wisma Tamu sebagai tempat bermukim selama berkunjung di ITS. Wisma Tamu ITS memberikan pelayanan terbaik bagi pengunjung, termasuk tersedianya fasilitas seperti kamar yang dilengkapi AC, kulkas bersama, televisi 21 inchi, suasana yang tenang dan nyaman karena jauh dari keramaian dan kebisingan, lokasi yang mudah untuk dijangkau, kopi/teh, serta jangka waktu pemesanan yang cukup panjang (6 bulan).
								Perawatan gedung, taman sehingga menjadi asri, serta kamar secara teratur menjadi alasan tersendiri bagi tamu ITS untuk memilih Wisma Tamu sebagai tempat hunian sementara. Untuk saat ini, ITS menyediakan tiga Wisma Tamu, yakni Flamboyan, Bougenville, dan Yasmine.
							</p>
						</div>					
					</div>
				</div>
			</div>

			<div id="index-banner" class="parallax-container valign-wrapper">
				<div class="parallax">
					<img src="img/backyard-blur.jpg" alt="Unsplashed background img 1" style="display: block;transform: translate3d(-50%, 205px, 0px);">
				</div>
			</div>

			<div class="container">
				<div class="section">
					<div class="row">
						<div class="col s12 center">
							<h5>
								<i class="medium material-icons">store</i>
							</h5>
							<h4>Type</h4>
						</div>
					</div>
					<!--Guest House Type-->
					<div class="row">
						<div class="col s12 m4">
							<div class="row center">
								<img src="img/flamboyan.png" style="width:170px">
							</div>
							<div class="icon-block">
								<h5 class="center">Flamboyan</h5>
								<p class="center-align light">Standard<br>Eksekutif<br>VIP</p>
							</div>
						</div>
						<div class="col s12 m4">
							<div class="row center">
								<img src="img/bougenville.png" style="width:170px">
							</div>
							<div class="icon-block">
								<h5 class="center">Bougenville</h5>
								<p class="center-align light">Standard<br>Eksekutif</p>
							</div>
						</div>
						<div class="col s12 m4">
							<div class="row center">
								<img src="img/yasmine.png" style="width:170px">
							</div>
							<div class="icon-block">
								<h5 class="center">Yasmine</h5>
								<p class="center-align light">House Rent</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

		<footer class="page-footer grey darken-3">
			<!--About-->
			<div class="container">
				<h4 align="center" class="white-text"><b>ABOUT</b></h4>
				<div class="row">
					<!--Web Purpose-->
					<div class="col s12 white-text" align="center">Final Project : Information System of Guest House ITS<br>Sistem Basis Data-A
						<br>Informatics Department<br>Institut Teknologi Sepuluh Nopember Surabaya<br>2015<br><br>
						<h5><b>TEAM</b></h5>
					</div>
					<!--Profile-->
					<div class="col l6 s12 white-text" align="center">
						<img src="img/panji2.png" style="width:170px"><br>Panji Rimawan<br>5114100075
					</div>
					<div class="col l6 s12 white-text" align="center">
						<img src="img/sani.png" style="width:170px"><br>Abdul Majid Hasani<br>5114100097
					</div>
				</div>
			</div>
			<!--Copyright-->
			<div class="footer-copyright grey darken-2">
				<div class="container white-text">
					© 2014-2015 Materialize, All rights reserved.
				</div>
			</div>
		</footer>

		<!--Scripts: Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>