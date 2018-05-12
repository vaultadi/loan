<?php
	
	include('header.php');
	include('Connection.php');
    $conn = mysqli_connect($dbhost, $username, $password, $dbname);
    if (!empty($_SESSION)) {	
		$query = "DELETE FROM Session WHERE emailid = '" . $_SESSION["emailid"] ."' AND passwordinput = '" . $_SESSION["passwordinput"] ."' AND logintime = '" . $_SESSION["time"] ." '";
		mysqli_query($conn, $query);
		unset($_SESSION["emailid"]);
		unset($_SESSION["passwordinput"]);
		unset($_SESSION["time"]);
     }
	
	if(empty($_SESSION['emailid']) && empty($_SESSION['passwordinput']) && empty($_SESSION['time'])) {
		echo "You'll be redirect to login page shortly..."; 
		header('Refresh: 1; URL=newlogin.php');
	}
    		
	session_destroy();
//	include('footer.php');