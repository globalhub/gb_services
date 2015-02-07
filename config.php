<?php
	$username = "root";
	$password = "";
	$server = "localhost";
	$port = "";
	$databasename = "lmt_staff";
	$members = "tmembers";
	$reports = "reports";
	$units = "units"
	$testimonies = "testimonies";

	$connection = mysqli_connect($server, $username, $password, $databasename);
	mysqli_set_charset($connection,"utf8");
?>