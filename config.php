<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
	$con = mysqli_connect("localhost","root","","member_db");
}

catch(Exception $e){
	$sql = "CREATE DATABASE member_db";
	$conn->query($sql);
	$con = mysqli_connect("localhost","root","","member_db");
	$sql = " CREATE TABLE IF NOT EXISTS `localiusers` (
		  `ID` int(11) NOT NULL AUTO_INCREMENT,
		  `FirstName` varchar(50) NOT NULL,
		  `LastName` varchar(50) NOT NULL,
		  `Email` varchar(50) NOT NULL,
		  `Pass` varchar(20) NOT NULL,
		  `Gender` varchar(20) NOT NULL,
		  PRIMARY KEY (`ID`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

	$newsletter_sql =" CREATE TABLE IF NOT EXISTS `localinewsletter` (
		  `ID` int(11) NOT NULL AUTO_INCREMENT,
		  `Email` varchar(50) NOT NULL,
		  PRIMARY KEY (`ID`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4"; 

	$con->query($newsletter_sql);
	$con->query($sql);
}

?>