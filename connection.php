<?php

$dbhost = "localhost";
$username   = "root";
$password   = "";
$dbname     = "loanmgmt";
 
$conn = mysqli_connect($dbhost, $username, $password, $dbname);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Creating Users table
$sql1 = "create table Users (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	userid VARCHAR(255) NOT NULL, 
	name VARCHAR(255) NOT NULL,
	passwordinput VARCHAR(255),
	confirm_password VARCHAR(255),
	gender VARCHAR(20),
	address VARCHAR(255),
	country VARCHAR(20),
	mobilenumber VARCHAR(20),
	changetime VARCHAR(255),
	emailid VARCHAR(255),
	pic_path VARCHAR(255),
	birthdate VARCHAR(255),
	user_time_zone VARCHAR(255),
	father  VARCHAR(255),
	mother VARCHAR(255),
	radios1 VARCHAR(10),
	occupation VARCHAR(255),
	secoccupation VARCHAR(255),
	phone VARCHAR(255),
	citizen VARCHAR(255),
	lang VARCHAR(50),
	overview VARCHAR(255),
	pan VARCHAR(20),
	rolei VARCHAR(20))";
if (mysqli_query($conn, $sql1)) {
    //echo "Users Table created successfully";
} else {
    //echo '<br>';
    //echo ("Users Table not created " . mysqli_error($conn));
}

$sql2 = "create table Session (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	emailid VARCHAR(255) NOT NULL,
	passwordinput VARCHAR(255) NOT NULL,
	browser_detail VARCHAR(255) NOT NULL,
	client_ip VARCHAR(255) NOT NULL,
	logintime int(11) NOT NULL
	)";

if (mysqli_query($conn, $sql2)) {
    //echo "Session Table created";
} else {
    //echo '<br>';
    //echo ("Session Table not created" . mysqli_error($conn));
}
	
$sql3 = "create table application(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		formid VARCHAR(255) NOT NULL,
		firstnameinput VARCHAR(255) NOT NULL,
		lastnameinput VARCHAR(255),
		streetinput VARCHAR(255),
		cityinput VARCHAR(255),
		statebasic VARCHAR(50),
		zipinput VARCHAR(50),
		panid VARCHAR(50),
		emailinput VARCHAR(255),
		birthinput VARCHAR(50),
		radios VARCHAR(20),
		selectbasic1 VARCHAR(20),
		selectbasic2 VARCHAR(20))";
		
if (mysqli_query($conn, $sql3)) {
    //echo "application Table created";
} else {
    //echo '<br>';
    //echo ("application Table not created" . mysqli_error($conn));
}