<?php
	session_start();
	include "connect.php";

	$new_tamu = "insert into TAMU values ('".$_SESSION['id_tamu']."','".$_SESSION['nama_tamu']."',TIMESTAMP'".$_SESSION['ttl_tamu']." 00:00:00','".$_SESSION['alamat_tamu']."','".$_SESSION['telp_tamu']."')";
	$new_tamu_exec = $conn->exec($new_tamu);	
	if ($new_tamu_exec) {
		$new_transaksi = "insert into TRANSAKSI_SEWA_KAMAR values('".$_SESSION['id_transaksi']."','".$_SESSION['userlogin']."','".$_SESSION['id_tamu']."',SYSTIMESTAMP,TIMESTAMP'".$_SESSION['tgl_checkin']." 10:00:00',TIMESTAMP'".$_SESSION['tgl_checkout']." 10:00:00','".$_SESSION['lama_inap']."',SYSTIMESTAMP,'".$_SESSION['denda']."','".$_SESSION['total_bayar']."')";
		$new_transaksi_exec = $conn->exec($new_transaksi);
		if ($new_transaksi_exec) {
			$new_menyewa = "insert into MENYEWA values('".$_SESSION['no_kamar']."','".$_SESSION['id_transaksi']."')";
	        $new_menyewa_exec = $conn->exec($new_menyewa);
	        if ($new_menyewa_exec) {
	            $update_room = "update KAMAR set STATUS_KAMAR='1' where NO_KAMAR='".$_SESSION['no_kamar']."'";
	            $conn->exec($update_room);

	            // destroy session
				$_SESSION['id_wisma'] = '';
				$_SESSION['id_jenis'] = '';
				$_SESSION['no_kamar'] = '';
				$_SESSION['id_transaksi'] = '';
				$_SESSION['tgl_transaksi'] = '';
				$_SESSION['tgl_bayar'] = '';
				$_SESSION['tgl_checkin'] = '';
				$_SESSION['tgl_checkout'] = '';
				$_SESSION['denda'] = '';
				$_SESSION['lama_inap'] = '';
				$_SESSION['total_bayar'] = '';
				$_SESSION['id_tamu'] = '';
				$_SESSION['nama_tamu'] = '';
				$_SESSION['ttl_tamu'] = '';
				$_SESSION['alamat_tamu'] = '';
				$_SESSION['telp_tamu'] = '';

				// PESAN SUKSES
	            echo "<script type='text/javascript'>alert('Transaksi Berhasil!');document.location='index-admin.php'</script>";
	        }
	        else {
	        	// PESAN GAGAL
	        	echo "<script type='text/javascript'>alert('Transaksi Gagal! Masukkan data dengan benar.');document.location='reservation.php'</script>";
	        }
		}
		else {
			$delete_tamu = "delete from TAMU where id_tamu='".$_SESSION['id_tamu']."'";
			$conn->exec($delete_tamu);
			echo "<script type='text/javascript'>alert('Transaksi Gagal! Masukkan data TRANSAKSI dengan benar.');document.location='reservation.php'</script>";
		}
    }
    else {
    	echo "<script type='text/javascript'>alert('Transaksi Gagal! Masukkan data TAMU dengan benar.');document.location='reservation_input_tamu.php'</script>";
    }
?>