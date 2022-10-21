<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/Index.css">
</head>
<body>
	<nav id="topnav">
	<ul>
		<li class="navbarlinks " ><a href="Login.php">SIGN IN</a></li>
		<li class="navbarlinks " ><a href="Menu.php">MENU</a></li>
		<li class= "navbarlinks "><a href="#">ORDER</a></li>
		<li class="navbarlinks "><a href="Contact.php">CONTACT</a></li>
		<li class="navbarlinks "><a href="Index.php">HOME</a></li>
		<img src="img/8ea972e2c421436b8247c09c78024395.png">
	</ul>
	</nav>

	<div id="container1" class="text-content1">
		<div id="reservationForm" >
			<h3>Make your Reservation</h3>
			<form style= "" action="" method="POST">
				<label for="date">Date*</label><br>
				<input type="Date" name="date" id="date" min="19-07-2021"><br><br>

				<label for="time">Time*</label><br>
				<input type="time" placeholder="hrs:min" min ="09:00" max="21:00"name="time" id="time"><br><br>

				<label for="name">Name</label><br>
				<input type="text" name="Names" id="name" placeholder="Enter names: "><br><br>

				<label for="phoneNo">Phone Number</label><br>
				<input type="tel" name="phoneNo" id="phoneNo" ><br><br>

				<label for="email">Email</label><br>
				<input type="email" name="Email" id="email"><br><br>

				<label>Persons</label><br>
				<select style="padding: 9px;">
					<option>1 person</option>
					<option>2 people</option>
					<option>3 people</option>
					<option>4 people</option>
					<option>5 people</option>
					<option>6 people</option>
					<option>7+ </option>
				</select><br>

				<input type="submit" name="Book" id="book" value="Make your reservation" style="padding: 9px;">




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