<html>
<?php
include '../db/create_db/connect_to_db.php';

$db_name = 'basic_hospital_db';

$conn = get_db_connection($db_name);
-?>
<body>


<ul>
		<?php
		$sql = "SELECT * FROM Appointment";
		if($result = mysqli_query($conn,$sql)){
			if(mysqli_num_rows($result) > 0){
				echo "<table border='1'>
				<tr>
				<th>ID</th>
				<th>Date</th>
				<th>Time</th>
				<th>Description</th>
				<th>Patient Name</th>
				<th>Doctor</th>
				</tr>";

				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['date'] . "</td>";
					echo "<td>" . $row['time'] . "</td>"
					echo "<td>" . $row['description'] . "</td>"
					echo "<td>" . $row['pname'] . "</td>"
					echo "<td>" . $row['ename'] . "</td>"
					echo "</tr>";
				}
				echo "</table>";
			}
			else{
			echo "Something is off"
			}
			
		}
		-?>
<ul>
	
	ename

</body>
<?php 
$conn->close();
-?>
</html>