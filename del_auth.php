<?php
	session_start();
	include "connect.php";

	$identity = $_GET['id_petugas'];
	$del_petugas = "delete from PETUGAS where ID_PETUGAS = '".$identity."'";
	$del_petugas_exec = $conn->exec($del_petugas);

	if ($del_petugas_exec) {
		echo "<script type='text/javascript'>alert('Delete data berhasil!');document.location='edit_profile.php'</script>";
	} else {
		echo "<script type='text/javascript'>alert('Delete data gagal!');document.location='edit_profile.php'</script>";
	}
?>