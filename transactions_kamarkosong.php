<?php
	session_start();
	include "connect.php";
	$tgl_checkin = $_POST['check_in'];
	$tgl_checkout = $_POST['check_out'];
	$query = "select distinct w.nama_wisma, jk.nama_jenis_kamar, k.no_kamar
			  from kamar k, jenis_kamar jk, wisma w
			  where k.no_kamar not in (select distinct m.no_kamar
			  							from menyewa m, transaksi_sewa_kamar t
			  							where ((to_timestamp('".$tgl_checkin." 10:00:00', 'yyyy-mm-dd HH24:MI:SS') <= t.tgl_checkin AND
			  									to_timestamp('".$tgl_checkout." 10:00:00', 'yyyy-mm-dd HH24:MI:SS') <= t.tgl_checkout AND
			  									to_timestamp('".$tgl_checkout." 10:00:00', 'yyyy-mm-dd HH24:MI:SS') >= t.tgl_checkin) OR
												(to_timestamp('".$tgl_checkin." 10:00:00', 'yyyy-mm-dd HH24:MI:SS') >= t.tgl_checkin AND
			  									to_timestamp('".$tgl_checkout." 10:00:00', 'yyyy-mm-dd HH24:MI:SS') >= t.tgl_checkout AND
			  									to_timestamp('".$tgl_checkout." 10:00:00', 'yyyy-mm-dd HH24:MI:SS') <= t.tgl_checkin) OR
												(to_timestamp('".$tgl_checkin." 10:00:00', 'yyyy-mm-dd HH24:MI:SS') <= t.tgl_checkin AND
			  									to_timestamp('".$tgl_checkout." 10:00:00', 'yyyy-mm-dd HH24:MI:SS') >= t.tgl_checkout) OR
												(to_timestamp('".$tgl_checkin." 10:00:00', 'yyyy-mm-dd HH24:MI:SS') >= t.tgl_checkin AND
			  									to_timestamp('".$tgl_checkout." 10:00:00', 'yyyy-mm-dd HH24:MI:SS') <= t.tgl_checkout)) AND
			  									m.id_transaksi = t.id_transaksi) AND
					jk.id_jenis_kamar = k.id_jenis_kamar AND
					w.id_wisma = k.id_wisma
			  order by w.nama_wisma, k.no_kamar";
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
					<h1>TRANSACTIONS</h1>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="transactions_kamarkosong.php" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<div class="row center">
													<i class="medium material-icons">hotel</i>
												</div>
												<h5 class="center-align">CEK KAMAR KOSONG</h5>
												<p class="center-align">Menampilkan kamar-kamar kosong dari berbagai wisma.</p><br>
												<div class="col s12 m11 l11" id="tglCheckIn">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<label class="col s10" for="check_in">Check-In</label>
													<div class="col s10">
														<input readonly name="check_in" id="check_in" type="date" class="datepicker" value="<?php echo $_POST['check_in'];?>">
													</div>
												</div>
												<div class="col s12 m11 l11" id="tglCheckOut">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<label class="col s10" for="check_out">Check-Out</label>
													<div class="col s10">
														<input readonly name="check_out" id="check_out" type="date" class="datepicker" value="<?php echo $_POST['check_out'];?>">
													</div>
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
									<th>WISMA</th>
									<th>JENIS KAMAR</th>
									<th>NO KAMAR</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ((array)$rooms as $room) {
										?>
										<tr>
											<td><?php echo $room['NAMA_WISMA']?></td>
											<td><?php echo $room['NAMA_JENIS_KAMAR']?></td>
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