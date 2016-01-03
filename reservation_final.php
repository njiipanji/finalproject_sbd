<?php
	session_start();
	include "connect.php";
	$query = "select w.nama_wisma, jk.nama_jenis_kamar
			  from kamar k, wisma w, jenis_kamar jk
			  where k.no_kamar='".$_SESSION['no_kamar']."' and
			  		k.id_wisma=w.id_wisma and
			  		k.id_jenis_kamar=jk.id_jenis_kamar";
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
					<p class="center-align light"><b>CONFIRMATION</b><br>Cek kembali data di bawah.</p>
					<h5 class="center-align"><br><b>TRANSAKSI<br><b class='blue-text grey lighten-3'><?php echo $_SESSION['id_transaksi']?></b></b></h5>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<h5><br></h5>
					<h5 class="center-align"><br><b>DETAIL KAMAR<br></b></h5>
					<div class="col s12 offset-s2 m12 offset-m2 l12">
						<table class="centered responsive-table highlight">
							<thead>
								<tr>
									<th>WISMA</th>
									<th>TIPE KAMAR</th>
									<th>NO KAMAR</th>
									<th>CHECK IN</th>
									<th>CHECK OUT</th>
									<th>LAMA INAP</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ((array)$rooms as $room) {
										?>
										<tr>
											<td><?php echo $room['NAMA_WISMA']?></td>
											<td><?php echo $room['NAMA_JENIS_KAMAR']?></td>
											<td><?php echo $_SESSION['no_kamar']?></td>
											<td><?php echo $_SESSION['tgl_checkin']?></td>
											<td><?php echo $_SESSION['tgl_checkout']?></td>
											<td><?php echo $_SESSION['lama_inap']?></td>
										</tr>
										<?php
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
			</div>

			<div class="container">
				<div class="row">
					<h5><br></h5>
					<h5 class="center-align"><br><b>DETAIL TAMU<br></b></h5>
					<div class="col s12 offset-s2 m12 offset-m2 l12">
						<table class="centered responsive-table highlight">
							<thead>
								<tr>
									<th>NO IDENTITAS</th>
									<th>NAMA</th>
									<th>TGL LAHIR</th>
									<th>ALAMAT</th>
									<th>TELEPHONE</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?php echo $_SESSION['id_tamu']?></td>
									<td><?php echo $_SESSION['nama_tamu']?></td>
									<td><?php echo $_SESSION['ttl_tamu']?></td>
									<td><?php echo $_SESSION['alamat_tamu']?></td>
									<td><?php echo $_SESSION['telp_tamu']?></td>
								</tr>
							</tbody>
						</table>
					</div>	
				</div>
			</div>


			<div class="container">
				<div class="row">
					<h5><br></h5>
					<h5 class="center-align"><br><b>DETAIL PEMBAYARAN<br></b></h5>
					<div class="col s12 offset-s2 m12 offset-m2 l12">
						<table class="centered responsive-table highlight">
							<thead>
								<tr>
									<th>TGL TRANSAKSI</th>
									<th>TGL BAYAR</th>
									<th>DENDA</th>
									<th>TOTAL BAYAR</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?php echo $_SESSION['tgl_transaksi']?></td>
									<td><?php echo $_SESSION['tgl_bayar']?></td>
									<td><?php echo $_SESSION['denda']?></td>
									<td><?php echo $_SESSION['total_bayar']?></td>
								</tr>
							</tbody>
						</table>
					</div>	
				</div>
			</div>


			<div class="container">
				<div class="row">
					<h5><br></h5>
					<form action="reservation_confirm.php">
						<div class="col s12 m12 l12 center">
							<button class="btn waves-effect waves-light" type="submit">CONFIRM
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