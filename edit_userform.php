<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit User</title>
</head>
<body>
<?php

require("connect.php");

if (isset($_POST['Delete'])) {
	$sqldel = "DELETE FROM `Clients` WHERE `Clients`.`client_id` = ". $_POST['id'];
	$conn->query($sqldel);
	if ($conn->query($sqldel) === true) {
			echo "Deleted";
			header("location:User_tables.php");
			
		}
	else{
		echo "Failure".$conn->error();
	}

	}

if (isset($_POST['Edit'])) {
	
	$id =$_POST['id'];
	$sql = "SELECT * FROM Clients WHERE client_id =".$id;

	$result = $conn->query($sql) or die($conn->error());
	$row = $result->fetch_assoc();
	print_r($row);
	$name = $row["name"];
	$email = $row["email"];
	$phoneNo = $row["phoneNo"];



	echo "<form action ='update_userform.php' method='POST'>
	<input type='text' value='".$id."' placeholder='Enter id' name='id'>
	<input type='text' value='". $name."'placeholder='Enter name' name='client_name'>
	<input type='text' value='".$email."' placeholder='Enter email' name='email'>
	<input type='text' value='".$phoneNo."' placeholder='Enter phoneNO' name='phoneNo'>
	<input type='submit' name='Update' value ='Update'>
</form>";



}


?>
</body>
</html>