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
		$pwd = $telpPassword[0];
	}

	if ($pwd==$password) {
		$_SESSION['userlogin']=$identity;
		header("Location:index-admin.php?status=LOGIN SUCCESS");
	} else {
		echo "<script type='text/javascript'>alert('Login Gagal! ID atau Telephone tidak ditemukan.');document.location='login.php'</script>";
	}
?>