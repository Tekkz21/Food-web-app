<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phoneNo = $_POST['phoneNo'];
$password = $_POST['pass'];


$conn = new mysqli("localhost:3307","root","Pr@1mf@y@","food_project");

if ($conn-> connect_error) {
	// code...
	die("Not connected succesfully".$conn->connect_error);
}else{
	echo "Connected succesfully<br>";
}

$sql_insert ="INSERT INTO Clients(name,email,phoneNo,password) VALUES('$name','$email','$phoneNo','$password')";
$conn->query($sql_insert);
if ($conn->query($sql_insert) === true) {
	// code...
	echo "Values Inserted<br>";
	
}
else{
	echo "Error ".$conn->error."<br>";
}

insert_data($sql_insert);





$sql_select = "SELECT * FROM Clients";
$results = $conn->query($sql_select);

print_r($results);


//print_r($row);
if($results->num_rows > 0){
	while ($row=$results->fetch_assoc()) {
		// code...
		$rows[] =$row;
	}
}
echo "<pre>";
print_r($rows);
echo "</pre>";





?>