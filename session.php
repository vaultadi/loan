<?php
             include('Connection.php');
             $conn = mysqli_connect($dbhost, $username, $password, $dbname);
			 session_start();
			 if ($_SESSION) {
				$query = "SELECT * FROM Users WHERE emailid='" . $_SESSION['emailid'] . "'";  
				$user = mysqli_fetch_row(mysqli_query($conn, $query));
			 } else {
					
			 }