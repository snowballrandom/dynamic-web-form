<?php
$host = "localhost";
$username = "root";
$password = "hello";

$conn = mysqli_connect($host,$username,$password) or die('Cant Connect');

$database_name = 'test';

mysqli_select_db($conn, $database_name) or die("Cant Connect to db"); 
?>