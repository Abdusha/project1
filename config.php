<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_gd_fri";

	$conn = mysqli_connect($host, $user, $pass, $db);
	
	if (mysqli_connect_errno()){
    	die("Disconnect. ".mysqli_connect_error());
  	} 
?>