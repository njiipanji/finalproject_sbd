<?php
	session_start();
	include "connect.php";

	$edit_petugas = "update PETUGAS
					set nama_petugas='".$_POST['nama_petugas']."', alamat_petugas='".$_POST['alamat_petugas']."', telp_petugas='".$_POST['telp_petugas']."'
					where id_petugas='".$_SESSION['userlogin']."'";
	$edit_petugas_exec = $conn->exec($edit_petugas);	
	if ($edit_petugas_exec) {
		echo "<script type='text/javascript'>alert('Update data berhasil!');document.location='edit_profile.php'</script>";
    }
    else {
    	echo "<script type='text/javascript'>alert('Update data gagal!');document.location='edit_profile.php'</script>";
    }
?>