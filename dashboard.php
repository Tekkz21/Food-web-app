<?php
session_start();
require("connect.php");
echo "Hello ". $_SESSION['User']."<br>";

$sql = "SELECT * FROM Clients WHERE email ='".$_SESSION['User']."'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/Index.css">
</head>
<body>
	<h4>MY PROFILE</h4>
	<div class="details">
	
	<div class="fl-item">
		
		<label>User ID</label>	
		<span>
		<?php print_r($row['client_id']); ?>
		</span>

	</div>

	<div class="fl-item">
		<label>Name</label>
	<span>
		<?php  print_r($row['name']); ?>
	</span>

	</div>

	<div class="fl-item">
		<label>Email</label>
	<span>
		<?php  print_r($row['email']);  ?>
	</span>
	</div>

	<div class="fl-item">
		<label>Phone Number</label>
	<span>
		<?php  print_r($row['phoneNo']);  ?>
	</span>
	</div>
		<form  method="POST">
			<input type="submit" name="Edit" value="Edit">
		</form>

	</div>
	


</body>
</html>