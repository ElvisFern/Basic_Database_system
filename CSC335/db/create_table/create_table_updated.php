<?php


include '../create_db/connect_to_db.php';

$db_name = 'basic_hospital_db';

$conn = get_db_connection($db_name);

// sql to create table
$sql = "CREATE TABLE Patient (
pid INT(6) NOT NULL AUTO_INCREMENT, 
pname VARCHAR(30) NOT NULL,
ssi VARCHAR(30) NOT NULL,
email VARCHAR(50),
dob  VARCHAR(50),
weight VARCHAR(50),
height VARCHAR(50),
meds VARCHAR(50),
address VARCHAR(50),
sex VARCHAR(50),
PRIMARY KEY (id)
)";

$sql = "CREATE TABLE Employee (
eid INT(6) NOT NULL AUTO_INCREMENT, 
ename VARCHAR(30) NOT NULL,
ssi VARCHAR(30) NOT NULL,
email VARCHAR(50),
title  VARCHAR(30),
shift   VARCHAR(30),
sex     VARCHAR(10),
dob     VARCHAR(50),
FOREIGN KEY (dname) REFERENCES Department(dname),
PRIMARY KEY (id)
)";

$sql = "CREATE TABLE Department (
did INT(6) NOT NULL AUTO_INCREMENT, 
dname VARCHAR(30) NOT NULL,
head VARCHAR(30) NOT NULL,,
FOREIGN KEY eid REFERENCES Employee(eid),
PRIMARY KEY (id)
)";

$sql = "CREATE TABLE Appointment (
aid INT(6) NOT NULL AUTO_INCREMENT, 
date VARCHAR(30) NOT NULL,
time VARCHAR(30) NOT NULL,
description  VARCHAR(30),
FOREIGN KEY ename  REFERENCES Employee(ename)
FOREIGN KEY pname REFERENCES Patient(pname),
PRIMARY KEY (id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>