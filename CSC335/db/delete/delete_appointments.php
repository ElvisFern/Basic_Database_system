<?php
include '../create_db/connect_to_db.php';

$db_name = 'test_db';

$conn = get_db_connection($db_name);

// sql to delete a record
$sql = "DELETE FROM Appointment WHERE id=?";
$id = $_POST["aid"];

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Record deleted successfully";
} else {
    echo "No records deleted ";
}

$stmt->close();



$conn->close();
?>