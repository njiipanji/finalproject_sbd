<?php
	session_start();

	include "connect.php";

	$identity = $_POST['id_pegawai'];
	$password = $_POST['telp_pegawai'];
	$query = "select telp_petugas
			  from petugas
			  where id_petugas='".$identity."'";

	$telp = $conn->query($query)->fetchAll();

	foreach ((array)$telp as $telpPassword) {
		if ($telpPassword[0]==$password) {
			$_SESSION['userlogin']=$identity;
			header("Location:index-admin.php?status=LOGIN SUCCESS");
		} else {
			header("Location:login.php?status=LOGIN FAILED");
		}
	}
?>