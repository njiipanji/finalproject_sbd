<?php
    session_start();
	include "connect.php";
	
    $id_wisma = $_POST['id_wisma'];
    $_SESSION['id_wisma'] = $id_wisma;
    
    $id_jkamar = $_POST['id_jenis'];
    $_SESSION['id_jenis'] = $id_jkamar;
    
    $no_kamar = $_POST['no_kamar'];
    $_SESSION['no_kamar'] = $no_kamar;

    $id_transaksi = $_POST['id_transaksi'];
    $_SESSION['id_transaksi'] = $id_transaksi;

    $tgl_transaksi = date('Y-m-d');
    $_SESSION['tgl_transaksi'] = $tgl_transaksi;

    $tgl_checkin = $_POST['check_in'];
    $_SESSION['tgl_checkin'] = $tgl_checkin;

    $tgl_checkout = $_POST['check_out'];
    $_SESSION['tgl_checkout'] = $tgl_checkout;

    $selisih_tgl = strtotime($tgl_checkout) - strtotime($tgl_checkin);
    $lama_inap = floor($selisih_tgl/86400);
    $_SESSION['lama_inap'] = $lama_inap;

    $tgl_bayar = date('Y-m-d');
    $_SESSION['tgl_bayar'] = $tgl_bayar;

    $denda = 0;
    $_SESSION['denda'] = $denda;

    $query = "select harga_jenis_kamar
              from jenis_kamar
              where id_jenis_kamar='".$id_jkamar."'";
    $harga = $conn->query($query)->fetchAll();
    foreach ((array)$harga as $total) {
        $total_bayar = $lama_inap * $total[0];
    }
    $_SESSION['total_bayar'] = $total_bayar;

    header("Location: http://localhost/finalproject_sbd/reservation_input_tamu.php");
?>