<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<title>Transactions</title>
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
								<li class="active"><a href="transactions.php">Transaction</a></li>
								<li><a href="index.php">LOGOUT</a></li>
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
					<h1>TRANSACTIONS</h1>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="#" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<div class="row center">
													<i class="medium material-icons">person</i>
												</div>
												<h5 class="center-align">CEK TAMU</h5>
												<p class="center-align">Menampilkan daftar tamu di bulan tertentu dari berbagai wisma.</p><br>
												<div class="col s12 m11 l11" id="bulanCheck-In">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<label class="col s10" for="bulanCheckIn">Bulan Check-In</label>
													<div class="col s10">
														<select class="browser-default" id="bulanCheckIn" name="bulanCheckIn" disabled>
															<option value="">Pilih Bulan</option>
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
															<option value="11" selected>November</option>
															<option value="12">Desember</option>
														</select>
													</div>
												</div>
												<div class="col s12 m11 l11" id="bulanCheck-In">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<label class="col s10" for="bulanLahir">Bulan Lahir Tamu</label>
													<div class="col s10">
														<select class="browser-default" id="bulanLahir" name="bulanLahir" disabled>
															<option value="">Pilih Bulan</option>
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
															<option value="11" selected>November</option>
															<option value="12">Desember</option>
														</select>
													</div>
												</div>
												<div class="col s12 m12 l12 center" id="cekTransaksiBulan">
													<br><br>
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

			<!--TABEL QUERY-->
			<div class="container"></div>

		</main>

		<!--Scripts: Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>