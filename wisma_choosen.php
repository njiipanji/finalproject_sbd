<?php
	$choose = $_POST['group_wisma'];
	if ($choose==1) {
		header("Location:reservation_tipe_flamboyan.php");
	} else if ($choose==2) {
		header("Location:reservation_tipe_bougenville.php");
	}
	else if ($choose==3) {
		header("Location:reservation_tipe_yasmine.php");
	}
?>