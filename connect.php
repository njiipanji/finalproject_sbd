<?php
//$servername = "localhost";
$username = "SBD_FP";
$password = "12345";
$db="oci:BISMILLAH_FP=XE";

// Create connection
$conn = new PDO ($db, $username, $password);

// Check connection
if (!$conn) {
	$error=oci_error();
	echo "Connection failed.", $error['text'];
}
else{
	echo "Connected successfully";
}
?>