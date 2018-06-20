<?php

//$database_name = 'test';
require_once('conn.php');

$errors = array();
$response = array();

$post_name = $_POST['name'];
$post_comments = $_POST['comments'];

// Check Post
if(!isset($post_name) || empty($post_name)){
	$errors['name'] = 'Name can\'t be empty';
}
// Check Post
if(!isset($post_comments) || empty($post_comments)){
	$errors['comments'] = 'Comment can\'t be empty';
}

// If there isnt any errors
if(!empty($errors))	{
	$response['success'] = false;
	$response['errors'] = $errors;
}else{
	
	// Make sure there isnt any errors
	if($conn->connect_error){
		die("Connection Error".$conn->connect_error);
	}	
	
	// Ssanitize Input
	$name = mysqli_real_escape_string($conn, $post_name);
	$comment = mysqli_real_escape_string($conn, $post_comments);
	
	//Sql  
	$sql = "INSERT INTO `comments`
		(`username`, `comment`) 
		VALUES ('$name', '$comment' )";
	
	// Try to submit the query
	if($conn->query($sql) === TRUE){
		// It posted
		$response['success'] = true;
		$response['posted'] = 'Thanks for Submitting';
	}else{
		// it didnt post
		$response['success'] = false;
		$response['posted'] = 'Database Error'.$conn->error;
	}	
}

// Get all the comments from the db
if($_SERVER['REQUEST_METHOD'] == 'GET'){
	
	$sql = 'SELECT * FROM comments';
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)){
		
	
		while ($row = mysqli_fetch_assoc($result)) {
			$response[] = $row;
		}
		
	}
}

// close the db connection
$conn->close();

// output the data
echo json_encode($response);

?>