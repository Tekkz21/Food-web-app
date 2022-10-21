<?php
	require("connect.php");

if (isset($_GET['Edit'])){
	// code...
	$id = $_GET['id'];
	$sql = "SELECT * FROM Menu_Items WHERE Food_Item_ID =".$_GET['id'];
	
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	print_r($row);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Menu</title>
</head>
<body>
	<?php

	




		echo "
	<form  method='POST' enctype='multipart/form-data'>
	
		<input type='text' name='Fname' id='Food_name' required='true' placeholder='Food Name' value='".$row['Food_Item_Name']."'><br><br>
		
		
		<input type='file' name='food_image' id='food_image' required='true' placeholder='Image' value='".$row['Food_Image']."'><br><br>
		
		
		<input type='number' name='food_price' id='food_price' required='true' placeholder='Price' value='".$row['Food_Price']."'><br><br>

		
		<input type='text' name='description' id='description' required='true' placeholder='Description' value='".$row['Food_description']."'><br><br>
		
		
		<input type='text' name='food_category' id='food_category' placeholder='Category' value='".$row['Food_Category']."'><br><br>

		<input type='submit' name='Update' id='Update' value='Update'>";
	?>
</form>
</body>
</html>
<?php
if (isset($_POST['Update'])) {

	$sqlU ="UPDATE Clients SET Food_Item_Name ='$_POST[Fname]', Food_Price='$_POST[food_price]', Food_description ='$_POST[description]', Food_Category = '$_POST[food_category]' WHERE Food_Item_Name ='$_POST[Fname]' ";
	print_r($sqlU);
	$conn->query($sqlU);
	if ($conn->query($sqlU)) {
		echo "<br>Success";
		//header("location:User_tables.php");
	}
	else{
		die("Failure".$conn->error);
	}
	
}

?>