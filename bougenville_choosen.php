<?php
	$choose = $_POST['tipe_kamar'];
	if ($choose==1) {
		header("Location:reservation_kamar_bstandard.php");
	} else if ($choose==2) {
		header("Location:reservation_kamar_beksekutif.php");
	}
?>