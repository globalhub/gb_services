<?php
	include 'config.php';
	
		$stmt = mysqli_prepare($connection, "SELECT * FROM $units ORDER BY unit_name ASC");		
		mysqli_stmt_execute($stmt);
		$rows = array();
		mysqli_stmt_bind_result($stmt, $row->id, $row->unit_name, $row->unit_head, $row->unit_count);
		while (mysqli_stmt_fetch($stmt)) {
	      $rows[] = $row;
	      $row = new stdClass();
	      mysqli_stmt_bind_result($stmt, $row->id, $row->unit_name, $row->unit_head, $row->unit_count);
	    }
		
		mysqli_stmt_free_result($stmt);
	    mysqli_close($connection);
		echo json_encode($rows);
		
	
?>