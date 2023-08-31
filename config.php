<?php
	$server="localhost";
	$username="root";
	$pass="";
	$dbname="uk"; 

	$conn= mysqli_connect($server,$username,$pass,$dbname);
	if(!$conn) {
		die ("Conncetion failed: ".mysqli_connect_error());
	}
?>
