<?php
	session_start();
	include "connect.php";
	$query = "select distinct p.nama_petugas, count(t.id_petugas) as total_pelayanan
			  		from petugas p, transaksi_sewa_kamar t
			  		where t.id_petugas='".$_POST['id_petugas']."' AND
				  		  p.id_petugas=t.id_petugas AND
				  		  t.total > (select avg(total) from transaksi_sewa_kamar)
				  	group by p.nama_petugas";
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

		<title>Soal 1</title>
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
												<h5 class="center-align">SOAL 1</h5>
												<p class="center-align">Menampilkan nama petugas dan total pelayanan yang<br>melayani tamu dengan total transaksi lebih dari rata-rata.</p><br>
												<div class="col s12 m11 l11" id="noID">
													<div class="input-field col s2 center">
														<i class="small material-icons">person_pin</i>
													</div>
													<div class="input-field col s10">
														<input name="id_petugas" id="id_petugas" type="text" class="validate" value="<?php echo $_POST['id_petugas']; ?>">
														<label for="id_petugas">No Identitas</label>
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
									<th>NAMA PETUGAS</th>
									<th>TOTAL PELAYANAN</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ((array)$result as $results) {
										?>
										<tr>
											<td><?php echo $results['NAMA_PETUGAS']?></td>
											<td><?php echo $results['TOTAL_PELAYANAN']?></td>
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