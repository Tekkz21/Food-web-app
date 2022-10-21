<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/Index.css">
</head>
<body>
	<nav id="topnav">
	<ul>
		
		<li class="navbarlinks " ><a href="Menu.php">MENU</a></li>
		<li class= "navbarlinks "><a href="#">ORDER</a></li>
		<li class="navbarlinks "><a href="Contact.php">CONTACT</a></li>
		<li class="navbarlinks "><a href="Reservation.php">RESERVATIONS</a></li>
		<img src="img/8ea972e2c421436b8247c09c78024395.png">
	</ul>
	</nav>

	<div class="text-content1">
		<div id="loginForm" style="background: navajowhite;">
			
			<h2>Login</h2>
			<form method="POST" action="processlogin.php">
				
				<select name="User_type" id="User_type">
					<option value="Customer">Customer</option>
					<option value="Admin">Administrator</option>
				</select>
				<input type="email" placeholder="Enter email" name="Uname" id="name">
				<input type="password" placeholder="Enter password " name="Password" id="pass">

				<input type="submit" name="Login" value="Login">

				<a href="#">Forgot Password?</a><br><br>
				<span>Don't have an account <a href="Registration.php">Sign Up here</a></span>

				<a href=""></a>
			</form>
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