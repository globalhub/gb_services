<?php
	include 'config.php';
	
		$stmt = mysqli_prepare($connection, "SELECT * FROM $members ORDER BY id ASC");		
		mysqli_stmt_execute($stmt);
		$rows = array();
		mysqli_stmt_bind_result($stmt, $row->id, $row->title, $row->first_name, $row->last_name, $row->phone_number, $row->email, $row->unit, $row->job_description, $row->year_joined);
		while (mysqli_stmt_fetch($stmt)) {
	      $rows[] = $row;
	      $row = new stdClass();
	      mysqli_stmt_bind_result($stmt, $row->id, $row->title, $row->first_name, $row->last_name, $row->phone_number, $row->email, $row->unit, $row->job_description, $row->year_joined);
	    }
		
		mysqli_stmt_free_result($stmt);
	    mysqli_close($connection);
		echo json_encode($rows);
		
	
?>