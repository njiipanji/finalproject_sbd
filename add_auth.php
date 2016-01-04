<?php
	session_start();
	include "connect.php";

	$add_petugas = "insert into PETUGAS values('".$_POST['id_petugas']."','".$_POST['nama_petugas']."','".$_POST['alamat_petugas']."','".$_POST['telp_petugas']."')";
	$add_petugas_exec = $conn->exec($add_petugas);
	
	if ($add_petugas_exec) {
		echo "<script type='text/javascript'>alert('Tambah data berhasil!');document.location='edit_profile.php'</script>";
    }
    else {
    	echo "<script type='text/javascript'>alert('Tambah data gagal!');document.location='edit_profile.php'</script>";
    }
?>