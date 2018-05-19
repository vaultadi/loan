<?php 
include 'header.php';
include 'connection.php';



if(isset($_POST['reject'])){

$sql= "UPDATE application SET status='reject' 
		WHERE formid='" . $_GET['id'] . "'";
    
	 mysqli_query($conn,$sql);
	// echo "Error: " . $sql . "<br>" . $conn->error;
	echo 'Details updated successfully !!';
    echo '<br>';
    header('Refresh: 1; URL=viewapp.php');

	}

if(isset($_POST['pending'])){

$sql= "UPDATE application SET status='pending' 
		WHERE formid='" . $_GET['id'] . "'";
    
	mysqli_query($conn,$sql);
//echo "Error: " . $sql . "<br>" . $conn->error;
	echo 'Details updated successfully !!';
    echo '<br>';
    header('Refresh: 1; URL=viewapp.php');

}

if(isset($_POST['approve'])){

$sql= "UPDATE application SET status='approve' 
		WHERE formid='" . $_GET['id'] . "'";
    
	mysqli_query($conn,$sql);
	//echo "Error: " . $sql . "<br>" . $conn->error;
	
	echo 'Details updated successfully !!';
    echo '<br>';
    header('Refresh: 1; URL=viewapp.php');
	}
	
	