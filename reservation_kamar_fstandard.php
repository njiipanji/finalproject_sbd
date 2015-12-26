<?php
	include "connect.php";
	$query = "select max(id_transaksi)+1 as next_transaksi
			  from transaksi_sewa_kamar";
	$id = $conn->query($query)->fetchAll();
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
														<i class="small material-icons">payment</i>
													</div>
													<div class="input-field col s10">
													<?php
														foreach ((array)$id as $idNext) {
													?>		
														<input readonly value="<?php echo $idNext[0];?>" name="id_transaksi" id="id_transaksi" type="text">
														<label for="id_transaksi">ID Transaksi</label>
													<?php
														}
													?>
													</div>
												</div>
												<div class="col s12 m11 l11" id="wismaID">
													<div class="input-field col s2 center">
														<i class="small material-icons">store</i>
													</div>
													<div class="input-field col s10">
														<input readonly value="W01" name="id_wisma" id="id_wisma" type="text">
														<label for="id_wisma">ID Wisma</label>
													</div>
												</div>
												<div class="col s12 m11 l11" id="jenisID">
													<div class="input-field col s2 center">
														<i class="small material-icons">hotel</i>
													</div>
													<div class="input-field col s10">
														<input readonly value="J01" name="id_jenis" id="id_jenis" type="text">
														<label for="id_jenis">ID Jenis Kamar</label>
													</div>
												</div>
												<div class="col s12 m11 l11" id="noKamar">
													<div class="input-field col s2 center">
														<i class="small material-icons">vpn_key</i>
													</div>
													<label class="col s10" for="no_kamar">Nomor Kamar</label>
													<div class="col s10">
														<select class="browser-default" name="no_kamar" id="no_kamar">
															<option value=""disabled selected>Pilih Kamar</option>
															<option value="101">101</option>
															<option value="102">102</option>
															<option value="103">103</option>
															<option value="104">104</option>
															<option value="105">105</option>
															<option value="106">106</option>
															<option value="107">107</option>
															<option value="108">108</option>
															<option value="109">109</option>
															<option value="110">110</option>
														</select>
													</div>
												</div>
												<div class="col s12 m11 l11" id="tglCheckIn">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<label class="col s10" for="check_in">Check-In</label>
													<div class="col s10">
														<input name="check_in" id="check_in" type="date" class="datepicker">
													</div>
												</div>
												<div class="col s12 m11 l11" id="tglCheckOut">
													<div class="input-field col s2 center">
														<i class="small material-icons">date_range</i>
													</div>
													<label class="col s10" for="check_out">Check-Out</label>
													<div class="col s10">
														<input name="check_out" id="check_out" type="date" class="datepicker">
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