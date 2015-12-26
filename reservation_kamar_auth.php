<?php
	include "connect.php";
	$id_tamu = $_POST['id_tamu'];
	$nama_tamu = $_POST['nama_tamu'];
	$ttl_tamu = $_POST['ttl_tamu'];
	$alamat_tamu = $_POST['alamat_tamu'];
	$telp_tamu = $_POST['telp_tamu'];

	$new_tamu = "insert into TAMU values ('".$id_tamu."','".$nama_tamu."',TIMESTAMP'".$ttl_tamu." 00:00:00','".$alamat_tamu."','".$telp_tamu."')";
	$new_tamu_exec = $conn->exec($new_tamu);
	if ($new_tamu_exec) 
    {
        header("Location: http://localhost/finalproject_sbd/reservation_final.php");
    }
    else
    {
        header("Location: http://localhost/finalproject_sbd/reservation_input_tamu.php?status=gagal");
    }
?>