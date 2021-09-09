<html>
<?php
include '../db/create_db/connect_to_db.php';

$db_name = 'basic_hospital_db';

$conn = get_db_connection($db_name);
-?>
<body>

<form action="delete_appointments.php" method="post">
	
	
	
	<span style = 'position:fixed; left:4g  100px;;top: 200px;'> 
		<?php
		$sql = "SELECT * FROM Appointment ORDER BY aid  ASC";
		if($result = mysqli_query($conn,$sql)){
			if(mysqli_num_rows($result) > 0){
				echo "<select  name='aid'>"
				while($row = mysqli_fetch_array($result)){
					echo "<option value='" . $row['aid'] . "'>" . $row['aid'] . "</option>";
				}
				echo "</select>";
			}
		}
		-?>
	</span>
	
	
	
	<span style = 'position:fixed; left: 100px;;top: 480px;'> 
		<input type="DELETE">
	</span>
</form>

</body>
<?php 
$conn->close();
-?>
</html>