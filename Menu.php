<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css/Index.css">
</head>
<body>
	<nav id="topnav">
	<ul>
		<li class="navbarlinks " ><a href="Login.php">SIGN IN</a></li>
		<li class="navbarlinks " ><a href="Index.php">HOME</a></li>
		<li class= "navbarlinks "><a href="#">ORDER</a></li>
		<li class="navbarlinks "><a href="Contact.php">CONTACT</a></li>
		<li class="navbarlinks "><a href="Reservation.php">RESERVATIONS</a></li>
		<img src="img/8ea972e2c421436b8247c09c78024395.png">
	</ul>
	</nav>

	<div id="main">

		<div id="cards">
			<?php
require("connect.php");
//require ("admin_nav.php");



$sql = "SELECT * FROM Menu_Items";
$result = $conn->query($sql);
//print_r($result);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc() ) 
	{
		echo "<div class ='menu-card'>";
		echo "<img src=".
		$row['Food_Image'].
		" style ='height: 150px;width: 150px;'>
		<h4>".
		$row['Food_Item_Name'].
		"</h4>
		<p class ='menu-price'>".
		$row['Food_Price'].
		"</p>
		<p>".
		$row['Food_description'].
		"</p>
		<form method='GET' style ='background: inherit; border:none;'>
		<input type='number' placeholder='Quantity' min ='1' name='quantity' style ='width: 65px;'>
		<input type='submit' name='cart' value='Add to Cart'>
	</form>
		 </div> ";
	}
}
	
?>
			
		</div>
		
	</div>

	


	<div id="footer" class="flexcontainer">
	<div id="add-container">
		<aside>
			<h3>ADDRESS</h3>
			<p>
				4th Floor, Daykio Plaza
				<br>
				123 Cedar Avenue, Westlands, Nairobi
			</p>
		</aside>
		<aside>
			<h3>CONTACT US</h3>
			<p>
				info@salskitchen.com
				<br>
				+2547450976
			</p>
			<ul class="social-icons">
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i><i class="fab fa-facebook-f"></i></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>

		</aside>
	</div>
	<div>
		<a href="#bottomnav">RETURN TO TOP</a>
		<hr>
		<p>&copy; 2021 Sal's Kitchen</p>
	</div>
	</div>


</body>
</html>