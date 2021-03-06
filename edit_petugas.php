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

		<title>Edit Profile</title>
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
			<div class="container">
				<div class="center"><br><br><br>
					<img src="img/person.png" style="width:75px">
					<h2>EDIT PROFILE</h2>
					<p class="center-align light">Ubah data diri petugas.<br><br></p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="edit_auth.php" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<h5 class="center-align">UPDATE DATA PETUGAS</h5>
												<div class="col s12 m11 l11" id="noID">
													<div class="input-field col s2 center">
														<i class="small material-icons">person_pin</i>
													</div>
													<div class="input-field col s10">
														<input readonly name="id_petugas" id="id_petugas" type="text" value="<?php echo $_POST['id_petugas'];?>">
														<label for="id_petugas">ID Petugas</label>
													</div>
												</div>
												<div class="col s12 m11 l11" id="namaPetugas">
													<div class="input-field col s2 center">
														<i class="small material-icons">person</i>
													</div>
													<div class="input-field col s10">
														<input name="nama_petugas" id="nama_petugas" type="text" class="validate">
														<label for="nama_petugas">Nama Petugas</label>
													</div>
												</div>
												<div class="col s12 m11 l11" id="alamatPetugas">
													<div class="input-field col s2 center">
														<i class="small material-icons">location_on</i>
													</div>
													<div class="input-field col s10">
														<input name="alamat_petugas" id="alamat_petugas" type="text" class="validate">
														<label for="alamat_petugas">Alamat</label>
													</div>
												</div>
												<div class="col s12 m11 l11" id="telephonePetugas">
													<div class="input-field col s2 center">
														<i class="small material-icons">phone</i>
													</div>
													<div class="input-field col s10">
														<input name="telp_petugas" id="telp_petugas" type="text" class="validate">
														<label for="telp_petugas">Telephone</label>
													</div>
												</div>
											</div>
										</div>
									<div class="col s12 m12 l12 center">
										<button class="btn waves-effect waves-light" type="submit">UPDATE
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