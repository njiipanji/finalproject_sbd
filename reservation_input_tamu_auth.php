<?php
	session_start();
	include "connect.php";
	
	$id_tamu = $_POST['id_tamu'];
	$_SESSION['id_tamu'] = $id_tamu;

	$nama_tamu = $_POST['nama_tamu'];
	$_SESSION['nama_tamu'] = $nama_tamu;

	$ttl_tamu = $_POST['ttl_tamu'];
	$_SESSION['ttl_tamu'] = $ttl_tamu;

	$alamat_tamu = $_POST['alamat_tamu'];
	$_SESSION['alamat_tamu'] = $alamat_tamu;

	$telp_tamu = $_POST['telp_tamu'];
	$_SESSION['telp_tamu'] = $telp_tamu;

	header("Location: http://localhost/finalproject_sbd/reservation_final.php");
?>