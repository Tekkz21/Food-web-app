<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		img
		{
			height: 200px;
			width: 200px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="Admin.css">
</head>


<body>

	<div id= 'cards'>
		<?php
		require("connect.php");
		//require ("admin_nav.php");

		echo "";

		$sql = "SELECT * FROM Menu_Items";
		$result = $conn->query($sql);
		//print_r($result);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc() ) 
			{
				echo "<div class= 'menu-card'>

				<h5>".$row['Food_Item_Name']."</h5>
				<p>Description: ".$row['Food_description']."<br> Price: ".$row['Food_Price']."</p>
				<img src=".$row['Food_Image']."> 
				<form method ='get' action='update_menu.php'>
					<input type ='submit' name='Edit' value ='Edit'>
					<input type='hidden' name ='id' value='".$row['Food_Item_ID']."'>
				</form>

				</div>";
			}
		}
			
		?>
	</div>
</body>


</html>