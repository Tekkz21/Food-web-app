<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/Index.css">
</head>
<body>
	<nav id="topnav">
	<ul>
		<li class="navbarlinks " ><a href="Index.php">HOME</a></li>
		<li class="navbarlinks " ><a href="Menu.php">MENU</a></li>
		<li class= "navbarlinks "><a href="#">ORDER</a></li>
		<li class="navbarlinks "><a href="Contact.php">CONTACT</a></li>
		<li class="navbarlinks "><a href="Reservation.php">RESERVATIONS</a></li>
		<img src="img/8ea972e2c421436b8247c09c78024395.png">
	</ul> 
	</nav>
	<div class="text-content1">
		<div id="regForm">
			<h4>Register</h4>
			<form action="new.php" method="post">
				<input type="text" name="name" id="name" placeholder="Name">
				<input type="email" name="email" id="email" placeholder="Email">
				<input type="phoneNo" name="phoneNo" id="pNo" placeholder="Phone Number">
				<input type="password" name="pass" id="pass" placeholder="Password">
				<input type="password" name="cPass" id="cPass" placeholder="Confirm Password">
				<input type="submit" name="Register" value= "Register">
			</form>

			<span>Already have an account? <a href="Login.php">Sign In</a></span>
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
		<a href="#topnav">RETURN TO TOP</a>
		<hr>
		<p>&copy; 2021 Sal's Kitchen</p>
	</div>

</body>
</html>