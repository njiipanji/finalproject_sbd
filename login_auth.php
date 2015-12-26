<?php
	session_start();
	$conn = include "connect.php";
	$username = $_POST['id_pegawai'];
	$password = $_POST['telp_pegawai'];

	$query = "select * from PETUGAS where id_petugas='".$username."' and telp_petugas='".$password."'";
	$result = oci_parse("connect.php", $query);
	$tmpcount = oci_fetch($result);
//	$data = oci_execute($result,OCI_DEFAULT);
	if ($tmpcount==1) {
		$_SESSION['username']=$username;
		header("Location:index-admin.php");
	} else {
		header("Location:login.php?status=LOGIN FAILED");
	}
?>