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
								<li><a href="#">Transaction</a></li>
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
					<p class="center-align light"><b>STEP 3</b><br>Pilih kamar serta tanggal check-in dan check-out.</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="reservation_input_tamu.php" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<h5 class="center-align">REGISTRASI KAMAR</h5>
												<div class="col s12 m11 l11" id="wismaID">
													<div class="input-field col s2 center">
														<i class="small material-icons">store</i>
													</div>
													<div class="input-field col s10">
														<input disabled value="W01" id="id_wisma" type="text" class="validate">
														<label for="id_wisma">ID Wisma</label>
													</div>
												</div>
												<div class="col s12 m11 l11" id="jenisID">
													<div class="input-field col s2 center">
														<i class="small material-icons">hotel</i>
													</div>
													<div class="input-field col s10">
														<input disabled value="J02" id="id_jenis" type="text" class="validate">
														<label for="id_jenis">ID Jenis Kamar</label>
													</div>
												</div>
												<div class="col s12 m11 l11" id="noKamar">
													<div class="input-field col s2 center">
														<i class="small material-icons">vpn_key</i>
													</div>
													<label class="col s10" for="no_kamar">Nomor Kamar</label>
													<div class="col s10">
														<select class="browser-default" id="no_kamar">
															<option value=""disabled selected>Pilih Kamar</option>
															<option value="201">201</option>
															<option value="202">202</option>
															<option value="203">203</option>
															<option value="204">204</option>
															<option value="205">205</option>
														</select>
													</div>
												</div>
												<div class="col s12 m11 l11" id="tglCheckIn">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<label class="col s10" for="check_in">Check-In</label>
													<div class="col s10">
														<input id="check_in" type="date" class="datepicker">
													</div>
												</div>
												<div class="col s12 m11 l11" id="tglCheckOut">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<label class="col s10" for="check_out">Check-Out</label>
													<div class="col s10">
														<input id="check_out" type="date" class="datepicker">
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