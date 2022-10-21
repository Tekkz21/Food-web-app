<?php 
$conn = new mysqli("localhost:3307","root","Pr@1mf@y@","food_project");

if ($conn->connect_error) {
	// code...
	die("Not connected".$conn->connect_error);
}/*else{
	echo "Connected successfully";
}*/


 ?>