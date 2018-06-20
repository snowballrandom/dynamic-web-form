<?php

// include connection
require_once('conn.php');

	$response = array();

	// Sql statement for getting all the comments
	$sql = 'SELECT * FROM `comments` ORDER BY idComments DESC';
	$result = $conn->query($sql);
	
	// run the query
	$result = mysqli_query($conn, $sql);
	
	// check for rows
	if(mysqli_num_rows($result)){
			
		// if rows place in array for return
		while ($row = mysqli_fetch_assoc($result)) {
			$response[] = $row;
		}
		
	}
	
	// output it 
	echo json_encode($response);
	
?>