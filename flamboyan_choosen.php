<?php
	$choose = $_POST['tipe_kamar'];
	if ($choose==1) {
		header("Location:reservation_kamar_fstandard.php");
	} else if ($choose==2) {
		header("Location:reservation_kamar_feksekutif.php");
	}
	else if ($choose==3) {
		header("Location:reservation_kamar_fvip.php");
	}
?>