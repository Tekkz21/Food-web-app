<?php
session_start();
require_once("connect.php");

if (isset($_POST["Login"])) {
	
	if (empty($_POST["Uname"])|| empty($_POST["Password"] || empty($_POST["User_type"]))) {
		header("location:Login.php");
		exit();
	}
	else{
		
		if ($_POST["User_type"] == "Customer") {
			
		
		$sql = "SELECT * FROM Clients WHERE email = '".$_POST['Uname']."' and password= '".$_POST['Password']."'";
		$result = $conn->query($sql);

		if ($result->fetch_assoc()) {
			$_SESSION['User']= $_POST['Uname'];
			header("location:dashboard.php");
		}
		else{
			header("location:Login.php");
			
		}
	}

	elseif ($_POST["User_type"] == "Admin") {
		$sql = "SELECT * FROM Admins WHERE email = '".$_POST['Uname']."' and password= '".$_POST['Password']."'";
		$result = $conn->query($sql);

		if ($result->fetch_assoc()) {
			$_SESSION['User'] == $_POST['Uname'];
			header("location:User_tables.php");
		}
	}
}
}

?>