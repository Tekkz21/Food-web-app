<?php
require ("connect.php");

print_r($_POST);

if (isset($_POST['Update'])) {
	$id = $_POST['id'];
	$name = $_POST['client_name'];
	$email = $_POST['email'];
	$phoneNo = $_POST['phoneNo'];

	$sqli ="UPDATE Clients SET name ='$name', email='$email', phoneNo='$phoneNo' WHERE client_id = '$id'";
	$conn->query($sqli);
	if ($conn->query($sqli)) {
		echo "<br>Success";
		header("location:User_tables.php");
	}
	else{
		die("Failure".$conn->error);
	}
	
}

?>