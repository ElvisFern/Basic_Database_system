<html>
<?php
include '../db/create_db/connect_to_db.php';

$db_name = 'basic_hospital_db';

$conn = get_db_connection($db_name);
-?>
<body>

<form action="insert_appointments.php" method="post">
	
	<span style = 'position:fixed; left: 100px;top: 200px;'> 
		Date: <input type="text" name="date">
		<br>
	</span>
	
	<span style = 'position:fixed; left: 100px;;top: 250px;'> 
		Time: <input type="text" name="time"><br>
	</span>
	
	<span style = 'position:fixed; left: 100px;;top: 300px;'> 
		Description: <input type="text" name="description"><br>
	</span>
	
	<span style = 'position:fixed; left:4g  100px;;top: 350px;'> 
		<?php
		$sql = "SELECT pname FROM Patient";
		if($result = mysqli_query($conn,$sql)){
			if(mysqli_num_rows($result) > 0){
				echo "<select  name='pname'>"
				while($row = mysqli_fetch_array($result)){
					echo "<option value='" . $row['pname'] . "'>" . $row['pname'] . "</option>";
				}
				echo "</select>";
			}
		}
		-?>
	</span>
	
	<span style = 'position:fixed; left: 100px;;top: 400px;'> 
		<?php
		$sql = "SELECT ename FROM Employee";
		if($result = mysqli_query($conn,$sql)){
			if(mysqli_num_rows($result) > 0){
				echo "<select name='ename'>"
				while($row = mysqli_fetch_array($result)){
					echo "<option value='" . $row['ename'] . "'>" . $row['ename'] . "</option>";
				}
				echo "</select>";
			}
		}
		-?>
	</span>
	
	
	<span style = 'position:fixed; left: 100px;;top: 480px;'> 
		<input type="submit">
	</span>
</form>

</body>
<?php 
$conn->close();
-?>
</html>