<?php
	session_start();
	include "connect.php";
	$query = "select *
			  from transaksi_sewa_kamar
			  where id_transaksi='".$_SESSION['idtransaksi']."'";
	$trans = $conn->query($query)->fetchAll();
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
					<h1>RESERVATION</h1>
					<p class="center-align light"><b>CONFIRMATION</b><br>Data telah tersimpan.</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
						<div id="input" class="section scrollspy">
							<div class="row">
								<h5 class="center-align">TRANSAKSI <?php echo $_SESSION['idtransaksi'];?>, <b>SUKSES</b></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<form action="index-admin.php">
						<div class="col s12 m12 l12 center">
							<button class="btn waves-effect waves-light" type="submit">THANK YOU
								<i class="material-icons right">send</i>
							</button>
						</div>
					</form>
				</div>
			</div>
		</main>

		<!--Scripts: Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>