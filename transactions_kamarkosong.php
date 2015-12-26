<?php
	include "connect.php";
	$query = "select * from KAMAR where status_kamar='0'";
	$rooms = $conn->query($query)->fetchAll();
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
													<i class="medium material-icons">hotel</i>
												</div>
												<h5 class="center-align">CEK KAMAR KOSONG</h5>
												<p class="center-align">Menampilkan kamar-kamar kosong dari berbagai wisma.</p><br><br>
												<div class="col s12 m12 l12 center" id="cekKamarKosong">
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
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1">
						<table class="centered responsive-table highlight">
							<thead>
								<tr>
									<th>ID WISMA</th>
									<th>ID JENIS KAMAR</th>
									<th>NO KAMAR</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ((array)$rooms as $room) {
										?>
										<tr>
											<td><?php echo $room['ID_WISMA']?></td>
											<td><?php echo $room['ID_JENIS_KAMAR']?></td>
											<td><?php echo $room['NO_KAMAR']?></td>
										</tr>
										<?php
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
			</div>

		</main>

		<!--Scripts: Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>