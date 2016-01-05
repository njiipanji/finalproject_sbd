<?php
	session_start();
	include "connect.php";
	$query = "select distinct w.nama_wisma, count(t.id_transaksi) as total_transaksi
	  		  from wisma w, transaksi_sewa_kamar t, kamar k, menyewa m
	  		  where w.id_wisma = k.id_wisma AND
		  		    m.id_transaksi = t.id_transaksi AND
		  		    k.no_kamar = m.no_kamar AND
		  		    to_char(t.tgl_checkin,'MM') = ".$_POST['transaksi_bulan']." AND
		  		    t.total > (select avg(total)
		  		    		   from transaksi_sewa_kamar
		  		    		   where to_char(t.tgl_checkin,'MM') = ".$_POST['transaksi_bulan'].")
		  	  group by w.nama_wisma";
	$result = $conn->query($query)->fetchAll();
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

		<title>Soal 2</title>
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
													<i class="medium material-icons">assignment</i>
												</div>
												<h5 class="center-align">SOAL 2</h5>
												<p class="center-align">Menampilkan wisma dan banyak tamu menginap di bulan tertentu<br>yang melebihi rata-rata dari total tamu yang menginap di bulan tsb.</p><br>
												<div class="col s12 m11 l11" id="transaksi_bulan">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<div class="input-field col s10">
														<input readonly name="bulan_transaksi" id="bulan_transaksi" type="text" value="<?php
															$bulan = $_POST['transaksi_bulan'];
															if ($bulan=="1") {
																echo "Januari";
															} else if ($bulan=="2") {
																echo "Februari";
															} else if ($bulan=="3") {
																echo "Maret";
															} else if ($bulan=="4") {
																echo "April";
															} else if ($bulan=="5") {
																echo "Mei";
															} else if ($bulan=="6") {
																echo "Juni";
															} else if ($bulan=="7") {
																echo "Juli";
															} else if ($bulan=="8") {
																echo "Agustus";
															} else if ($bulan=="9") {
																echo "September";
															} else if ($bulan=="10") {
																echo "Oktober";
															} else if ($bulan=="11") {
																echo "November";
															} else if ($bulan=="12") {
																echo "Desember";
															}
														?>">
														<label for="bulan_transaksi">Bulan Transaksi</label>
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

			<!--TABEL QUERY1-->
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1">
						<table class="centered responsive-table highlight">
							<thead>
								<tr>
									<th>NAMA WISMA</th>
									<th>TOTAL TAMU</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ((array)$result as $results) {
										?>
										<tr>
											<td><?php echo $results['NAMA_WISMA']?></td>
											<td><?php echo $results['TOTAL_TRANSAKSI']?></td>
										</tr>
										<?php
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
			</div><br><br>

		</main>

		<!--Scripts: Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>