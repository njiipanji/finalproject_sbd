<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<title>Administrator Login</title>
	</head>
	<body>
		<header>
		<!--Navigation-->
			<div class="navbar-fixed">
				<nav class="top-nav grey darken-3">
					<div class="container">
						<div class="nav-wrapper">
							<a href="index.php" class="brand-logo">
								<img src="img/logo.png" style="width:155px">
							</a>
							<ul id="nav-mobile" class="right hide-on-med-and-down">
								<li><a href="services.php">Services</a></li>
								<li class="active"><a href="login.php">LOGIN</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>

		</header>

		<main>
			<div class="container">
				<div class="center">
					<br><br>
					<h1>LOGIN</h1>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12 m9 l12">
						<div id="input" class="section scrollspy">
							<div class="row">
								<!--Form-->
								<form class="col s12" action="login_auth.php" method="post">
									<div class="col s12 m8 offset-m4 l6 offset-l3">
										<!--Login Box-->
										<div class="card-panel grey lighten-5 z-depth-1">
											<div class="row valign-wrapper">
												<div class="col s4 m3">
													<i class="medium material-icons">perm_identity</i>
												</div>
												<div class="input-field col s8 m9 offset-m1">
													<input name="id_pegawai" id="id_pegawai" type="text" class="validate">
													<label for="id_pegawai">ID</label>
												</div>
											</div>
											<div class="row valign-wrapper">
												<div class="col s4 m3">
													<i class="medium material-icons">phone</i>
												</div>
												<div class="input-field col s8 m9 offset-m1">
													<input name="telp_pegawai" id="telp_pegawai" type="password" class="validate">
													<label for="telp_pegawai">Telephone</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col s12 m12 offset-m2 l12 center">
										<button class="btn waves-effect waves-light blue lighten-1" type="submit">ENTER
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