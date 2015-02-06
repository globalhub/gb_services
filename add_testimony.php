<?php
		
		include 'config.php';
		
		if (isset($_GET['name']) && ($_GET['testimony'])){
		
		
		$name = $_GET['name'];
		$name = mysqli_real_escape_string($connection, $name);
		$testimony = $_GET['testimony'];
		$testimony = mysqli_real_escape_string($connection, $testimony);
		
		
		$stmt = mysqli_prepare($connection, "INSERT INTO $testimonies (name, testimony) 
		VALUES ('$name', '$testimony')");
		
		mysqli_stmt_execute($stmt);		

		mysqli_stmt_free_result($stmt);		
		mysqli_close($connection);

		}
		
		?>