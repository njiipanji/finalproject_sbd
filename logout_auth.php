<?php
	session_start();
	session_destroy();
	$_SESSION['userlogin'] = '';
	header("Location:index.php");
	exit();
?>