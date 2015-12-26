<?php
    session_start();
	include "connect.php";
	
    // tangkap form
    $id_wisma = $_POST['id_wisma'];
    $id_jkamar = $_POST['id_jenis'];
    $no_kamar = $_POST['no_kamar'];

    // tabel transaksi
    $id_transaksi = $_POST['id_transaksi'];
    $_SESSION['idtransaksi'] = $id_transaksi;
    $id_petugas = $_SESSION['userlogin'];
//  $id_tamu = "";
//  $tgl_transaksi = "";
    $tgl_checkin = $_POST['check_in'];
    $tgl_checkout = $_POST['check_out'];
    $selisih_tgl = strtotime($tgl_checkout) - strtotime($tgl_checkin);
    $lama_inap = floor($selisih_tgl/86400);
//  $tgl_bayar =
//  $denda = 
    $query = "select harga_jenis_kamar
              from jenis_kamar
              where id_jenis_kamar='".$id_jkamar."'";
    $harga = $conn->query($query)->fetchAll();

    foreach ((array)$harga as $total) {
        $total_bayar = $total[0];
    }

	$new_transaksi = "insert into TRANSAKSI_SEWA_KAMAR values('".$id_transaksi."','".$id_petugas."','',SYSTIMESTAMP,TIMESTAMP'".$tgl_checkin." 10:00:00',TIMESTAMP'".$tgl_checkout." 10:00:00','".$lama_inap."',SYSTIMESTAMP,'0','".$total_bayar."')";
    $new_transaksi_exec = $conn->exec($new_transaksi);
   
	if ($new_transaksi_exec) {
        $new_menyewa = "insert into MENYEWA values('".$no_kamar."','".$id_transaksi."')";
        $new_menyewa_exec = $conn->exec($new_menyewa);
        if ($new_menyewa_exec) {
            $update_room = "update KAMAR set STATUS_KAMAR='1' where NO_KAMAR='".$no_kamar."'";
            $conn->exec($update_room);
            header("Location: http://localhost/finalproject_sbd/reservation_input_tamu.php");
        }
        else {
            header("Location: http://localhost/finalproject_sbd/reservation.php?status=gagal");
        }
    }
    else {
        header("Location: http://localhost/finalproject_sbd/reservation.php?status=gagal");
    }
?>