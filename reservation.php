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
					<p class="center-align light"><b>STEP 1</b><br>Pilih wisma yang ingin dibooking.</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l12">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="wisma_choosen.php" method="post">
									<div class="col s12 m12 l8 offset-l2">
										<!--Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row">
												<div class="col s12 m4">
													<div class="row center">
														<img src="img/flamboyan.png" style="width:100px">
													</div>
													<div class="icon-block">
														<p class="center-align">
															<input name="group_wisma" id="check_flamboyan" value="1" type="radio">
															<label for="check_flamboyan">Flamboyan</label>
														</p>
													</div>
												</div>
												<div class="col s12 m4">
													<div class="row center">
														<img src="img/bougenville.png" style="width:100px">
													</div>
													<div class="icon-block">
														<p class="center-align">
															<input name="group_wisma" id="check_bougenville" value="2" type="radio">
															<label for="check_bougenville">Bougenville</label>
														</p>
													</div>
												</div>
												<div class="col s12 m4">
													<div class="row center">
														<img src="img/yasmine.png" style="width:100px">
													</div>
													<div class="icon-block">
														<p class="center-align">
															<input name="group_wisma" id="check_yasmine" value="3" type="radio">
															<label for="check_yasmine">Yasmine</label>
														</p>
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