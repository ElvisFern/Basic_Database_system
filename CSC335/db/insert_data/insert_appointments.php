<?php
include '../create_db/connect_to_db.php';

$db_name = 'basic_hospital_db';

$conn = get_db_connection($db_name);

$sql = "INSERT INTO Appointment(date,time,description,pname,ename) SET date=?, time=?, description=?,,pname=?,ename=?";

$time = $_POST["time"];
$date = $_POST["date"];
$description = $_POST["description"];
$ename =$_POST["ename"];
$pname =$_POST["pname"];

$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $date, $time,$description, $ename, $pname);

$stmt->execute();


if ($stmt->affected_rows > 0) {
    echo "Record updated successfully";
	echo "<br><a href=\"home.php\">Home</a>";
} else {
    echo "No record was updated ";
}

$stmt->close();

/


$conn->close();
?>