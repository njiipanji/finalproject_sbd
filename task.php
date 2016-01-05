<?php
	session_start();
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

		<title>Task</title>
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
								<li class="active"><a href="task.php">Task</a></li>
								<li><a href="logout_auth.php">LOGOUT</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>

		</header>

		<main>
			<div class="container">
				<div class="center">
					<br>
					<h1>TASK</h1>
					<p class="center-align light">Pilih pilihan yang diinginkan.</p>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="task1.php" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<div class="row center">
													<i class="medium material-icons">assignment</i>
												</div>
												<h5 class="center-align">SOAL 1</h5>
												<p class="center-align">Menampilkan nama petugas dan total pelayanan yang<br>melayani tamu dengan total transaksi lebih dari rata-rata.</p><br>
												<div class="col s12 m11 l11" id="noID">
													<div class="input-field col s2 center">
														<i class="small material-icons">person_pin</i>
													</div>
													<div class="input-field col s10">
														<input name="id_petugas" id="id_petugas" type="text" class="validate">
														<label for="id_petugas">No Identitas</label>
													</div>
												</div>
												<div class="col s12 m12 l12 center" id="ceksoal1"><br><br>
													<button class="btn waves-effect waves-light" type="submit">CEK
														<i class="material-icons right">send</i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="task2.php" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<div class="row center">
													<i class="medium material-icons">assignment</i>
												</div>
												<h5 class="center-align">SOAL 2</h5>
												<p class="center-align">Menampilkan wisma dan banyak tamu menginap di bulan tertentu<br>yang melebihi rata-rata dari total tamu yang menginap di bulan tsb.</p><br>
												<div class="col s12 m11 l11" id="transaksi_bulan">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<label class="col s10" for="transaksi_bulan">Bulan Transaksi</label>
													<div class="col s10">
														<select class="browser-default" id="transaksi_bulan" name="transaksi_bulan">
															<option value="" selected>Pilih Bulan</option>
															<option value="1">Januari</option>
															<option value="2">Februari</option>
															<option value="3">Maret</option>
															<option value="4">April</option>
															<option value="5">Mei</option>
															<option value="6">Juni</option>
															<option value="7">Juli</option>
															<option value="8">Agustus</option>
															<option value="9">September</option>
															<option value="10">Oktober</option>
															<option value="11">November</option>
															<option value="12">Desember</option>
														</select>
													</div>
												</div>
												<div class="col s12 m12 l12 center" id="ceksoal2"><br><br>
													<button class="btn waves-effect waves-light" type="submit">CEK
														<i class="material-icons right">send</i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="task3.php" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<div class="row center">
													<i class="medium material-icons">assignment</i>
												</div>
												<h5 class="center-align">SOAL 3</h5>
												<p class="center-align">Menampilkan total pemasukan yang ditangani oleh semua petugas<br>yang melebihi rata-rata dari total pemasukan.</p>
												<div class="col s12 m12 l12 center" id="ceksoal3"><br><br>
													<button class="btn waves-effect waves-light" type="submit">CEK
														<i class="material-icons right">send</i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="task4.php" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<div class="row center">
													<i class="medium material-icons">assignment</i>
												</div>
												<h5 class="center-align">SOAL 4</h5>
												<p class="center-align">Menampilkan nama tamu dan total pengeluarannya yang lebih besar dari rata-rata total pemasukan.</p>
												<div class="col s12 m12 l12 center" id="ceksoal4"><br><br>
													<button class="btn waves-effect waves-light" type="submit">CEK
														<i class="material-icons right">send</i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

		<!--Scripts: Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>