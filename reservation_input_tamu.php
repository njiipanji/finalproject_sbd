<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<title>Reservations</title>
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
								<li class="active"><a href="reservation.php">Reservation</a></li>
								<li><a href="transactions.php">Transaction</a></li>
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
					<h1>RESERVATION</h1>
					<p class="center-align light"><b>STEP 4</b><br>Masukkan data diri tamu.</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="#" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<h5 class="center-align">REGISTRASI TAMU</h5>
												<div class="col s12 m11 l11" id="noID">
													<div class="input-field col s2 center">
														<i class="small material-icons">person_pin</i>
													</div>
													<div class="input-field col s10">
														<input id="id_tamu" type="text" class="validate">
														<label for="id_tamu">No Identitas</label>
													</div>
												</div>
												<div class="col s12 m11 l11" id="namaTamu">
													<div class="input-field col s2 center">
														<i class="small material-icons">person</i>
													</div>
													<div class="input-field col s10">
														<input id="nama_tamu" type="text" class="validate">
														<label for="nama_tamu">Nama Lengkap</label>
													</div>
												</div>
												<div class="col s12 m11 l11" id="ttlTamu">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<label class="col s10" for="ttl_tamu">Tanggal Lahir</label>
													<div class="col s10">
														<input id="ttl_tamu" type="date" class="datepicker">
													</div>
												</div>
												<div class="col s12 m11 l11" id="alamatTamu">
													<div class="input-field col s2 center">
														<i class="small material-icons">location_on</i>
													</div>
													<div class="input-field col s10">
														<input id="alamat_tamu" type="text" class="validate">
														<label for="alamat_tamu">Alamat</label>
													</div>
												</div>
												<div class="col s12 m11 l11" id="telephoneTamu">
													<div class="input-field col s2 center">
														<i class="small material-icons">phone</i>
													</div>
													<div class="input-field col s10">
														<input id="telp_tamu" type="text" class="validate">
														<label for="telp_tamu">Telephone</label>
													</div>
												</div>
											</div>
										</div>
									<div class="col s12 m12 l12 center">
										<button class="btn waves-effect waves-light" type="submit">NEXT
											<i class="material-icons right">send</i>
										</button>	
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