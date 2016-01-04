<?php
	session_start();
	include "connect.php";
	$query = "select *
			  from petugas
			  order by id_petugas asc";
	$admins = $conn->query($query)->fetchAll();
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

		<title>Edit Petugas</title>
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
					<p class="center-align light">Ubah data diri petugas.<br><br><br></p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12 offset-s2 m12 offset-m2 l12">
						<table class="centered responsive-table highlight">
							<thead>
								<tr>
									<th>ID PETUGAS</th>
									<th>NAMA</th>
									<th>ALAMAT</th>
									<th>TELEPHONE</th>
									<th></th>
									<form method="post" action="add_petugas.php">
										<th>
											<button class="btn-floating waves-effect waves-light blue" type="submit">
												<i class="material-icons">add</i>
											</button>	
							 			</th>
									</form>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ((array)$admins as $admin) {
										?>
										<tr>
											<td><?php echo $admin['ID_PETUGAS']?></td>
											<td><?php echo $admin['NAMA_PETUGAS']?></td>
											<td><?php echo $admin['ALAMAT_PETUGAS']?></td>
											<td><?php echo $admin['TELP_PETUGAS']?></td>
											<form method="post" action="edit_petugas.php">
												<td>
													<button class="btn waves-effect waves-light" type="submit" name="id_petugas" value="<?php echo $admin['ID_PETUGAS'] ?>">
														<i class="material-icons">edit</i>
													</button>
									 			</td>
											</form>
											<form method="get" action="del_auth.php">
												<td>
													<button class="btn waves-effect waves-light red" type="submit" name="id_petugas" value="<?php echo $admin['ID_PETUGAS'] ?>">
														<i class="material-icons">delete</i>
													</button>
									 			</td>
											</form>
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