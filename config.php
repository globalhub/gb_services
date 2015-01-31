<?php
	$username = "root";
	$password = "";
	$server = "localhost";
	$port = "";
	$databasename = "lmt_staff";
	$members = "members";
	$reports = "reports";

	$connection = mysqli_connect($server, $username, $password, $databasename);
	mysqli_set_charset($connection,"utf8");
?>