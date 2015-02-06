<?php
	include 'config.php';
	
		$stmt = mysqli_prepare($connection, "SELECT * FROM $testimonies ORDER BY id DESC");		
		mysqli_stmt_execute($stmt);
		$rows = array();
		mysqli_stmt_bind_result($stmt, $row->id, $row->name, $row->testimony);
		while (mysqli_stmt_fetch($stmt)) {
	      $rows[] = $row;
	      $row = new stdClass();
	      mysqli_stmt_bind_result($stmt, $row->id, $row->name, $row->testimony);
	    }
		
		mysqli_stmt_free_result($stmt);
	    mysqli_close($connection);
		echo json_encode($rows);
		
	
?>