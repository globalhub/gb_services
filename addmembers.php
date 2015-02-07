<?php
		
		include 'config.php';
		
		if (isset($_GET['m_name']) && ($_GET['unit']) && ($_GET['job'])){
		
		
		$m_name = $_GET['m_name'];
		$m_name = mysqli_real_escape_string($connection, $m_name);
		$unit = $_GET['unit'];
		$unit = mysqli_real_escape_string($connection, $unit);
		$job = $_GET['job'];
		$job = mysqli_real_escape_string($connection, $job);
		
		
		$stmt = mysqli_prepare($connection, "INSERT INTO $testimonies (m_name, unit, job) 
		VALUES ('$m_name', '$unit', '$job')");
		
		mysqli_stmt_execute($stmt);		

		mysqli_stmt_free_result($stmt);		
		mysqli_close($connection);

		}
		
		?>