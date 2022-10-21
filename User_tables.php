
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User_table_View</title>
	<style type="text/css">
		table,td
		{
			background: whitesmoke;
			border:  solid 1px black;
			color:  darkcyan;

		}
		table
		{
			border-collapse: collapse;
			width: 70%;
		}
	</style>
	
</head>
<body>

	<?php
	$conn = new mysqli("localhost:3307","root","Pr@1mf@y@","food_project");

	if ($conn->connect_error) {
		// code...
		die("Not connected".$conn->connect_error);
	}else{
		echo "Connected successfully";
	}
	
	$sql_select = "SELECT * FROM Clients";
	$results = $conn->query($sql_select);
	echo "<pre>";
	//print_r($results);
	echo "</pre>";
	
	
echo "<br><table>
		<thead>
			<th>Client ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th colspan ='2'>Action</th>
			

		</thead>";
		
		if ($results->num_rows>0) {
			// code...
			while ($row = $results->fetch_assoc()) {
			
			
				echo "<tr>
				 <td>"."$row[client_id]"."</td>
				 <td>"."$row[name]"."</td>
				 <td>"."$row[email]"."</td>
				 <td>"."$row[phoneNo]"."</td>";
				 
				/* echo "<td>
				 <a href='User_tables.php?delete="."$row[client_id]".">Delete</a></td><td>
				 <a href='User_tables.php?edit="."$row[client_id]".">Edit</a>


				 </td></tr>";*/

				 echo "<td><form action='edit_userform.php' method='POST'>
				 <input type='submit' value='Edit' name='Edit'>
				 <input type='submit' value='Delete' name='Delete'>
				 <input type='hidden' name='id' value ='"."$row[client_id]"."'>
				 </form>
				 </td>
				 
	

				</tr>";

			
			//if (isset($_POST["Delete"])) {
				/*	$sqldel = "SELECT * FROM Clients WHERE client_id = '$_POST['id']'";
					$conn->query($sqldel);
					if ($conn->query($sqldel) === true) {
						echo "Deleted";
					}
					else{
						echo "Failure".$conn->error;
					}
				}	*/


				/*if (isset($_GET['edit'])) {
					// code...
				}*/
			
			}
		}	
		
		


	echo "</table>";
	?>



</body>
</html>




