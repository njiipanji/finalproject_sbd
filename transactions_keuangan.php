<?php
	session_start();
	include "connect.php";
	$query_wisma = "select w.nama_wisma, sum(t.total) as total_pemasukan
			  from wisma w, transaksi_sewa_kamar t, menyewa m, kamar k
			  where m.id_transaksi=t.id_transaksi AND
			  		k.no_kamar=m.no_kamar AND
			  		w.id_wisma=k.id_wisma
			  group by w.nama_wisma
			  order by w.nama_wisma asc";
	$firstresult = $conn->query($query_wisma)->fetchAll();

	$query_max = "select max(total_pemasukan) as total
				  from (select w.id_wisma, sum(t.total) as total_pemasukan
				  		from wisma w, transaksi_sewa_kamar t, menyewa m, kamar k
					    where m.id_transaksi=t.id_transaksi AND
					  		k.no_kamar=m.no_kamar AND
					  		w.id_wisma=k.id_wisma
					    group by w.id_wisma)";
	$secondresult = $conn->query($query_max)->fetchAll();
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
								<form class="col s12" action="#" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<div class="row center">
													<i class="medium material-icons">account_balance</i>
												</div>
												<h5 class="center-align">CEK KEUANGAN</h5>
												<p class="center-align">Menampilkan pemasukan dari berbagai wisma dan pemasukan<br>terbesar dari 3 wisma yang ada.</p>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--TABEL QUERY1-->
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1">
						<table class="centered responsive-table highlight">
							<thead>
								<tr>
									<th>WISMA</th>
									<th>TOTAL PEMASUKAN</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ((array)$firstresult as $result1) {
										?>
										<tr>
											<td><?php echo $result1['NAMA_WISMA']?></td>
											<td><?php echo $result1['TOTAL_PEMASUKAN']?></td>
										</tr>
										<?php
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
			</div><br><br>

			<!--TABEL QUERY2-->
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1">
						<table class="centered responsive-table highlight">
							<thead>
								<tr>
									<th>PEMASUKAN TERBESAR</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ((array)$secondresult as $result2) {
										?>
										<tr>
											<td><h4><?php echo $result2['TOTAL']?></h4></td>
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