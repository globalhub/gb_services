<?php
	include 'config.php';
	
		$stmt = mysqli_prepare($connection, "SELECT * FROM $members ORDER BY id ASC");		
		mysqli_stmt_execute($stmt);
		$rows = array();
		mysqli_stmt_bind_result($stmt, $row->id, $row->m_name, $row->unit, $row->job);
		while (mysqli_stmt_fetch($stmt)) {
	      $rows[] = $row;
	      $row = new stdClass();
	      mysqli_stmt_bind_result($stmt, $row->id, $row->m_name, $row->unit, $row->job);
	    }
		
		mysqli_stmt_free_result($stmt);
	    mysqli_close($connection);
		echo json_encode($rows);
		
	
?>