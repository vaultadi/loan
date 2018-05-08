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
	emailid VARCHAR(255),
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
	
	