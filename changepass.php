<?php
/**
 * Validating email & user id exist in User table
 */
 include 'header.php';
 include 'connection.php';
 //include 'session.php';


if (isset($_POST['emailid']) && isset($_POST['userid']) && isset($_POST['passwordinput']) && isset($_POST['confirm_password']))
{
    $sql = "SELECT * from Users where emailid='" . $_POST["emailid"] . "' AND userid='" . $_POST["userid"] . "' ";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) >= 1)
    {  
        /*Updating password value*/
       $sql8 = "UPDATE Users SET passwordinput='" .$_POST['passwordinput'] . "' , 
		                          confirm_password='" . $_POST['confirm_password'] . "' ,
								  changetime='" . time() . "' 
								  WHERE emailid='" . $_POST['emailid'] . "' AND 
								  userid='" . $_POST['userid'] . "'";

        mysqli_query($conn, $sql8);
	//echo "Error: " . $sql8 . "<br>" . $conn->error;	
	//echo $_SESSION["userid"];
?>	
  <div class="alert alert-success alert-dismissible">
    <strong>Success!</strong> You Password has been reset successfully. You can login from <a href="newlogin.php" class="alert-link">here.</a>.
  <?php header('Refresh: 1; URL=newlogin.php'); ?>
  
  </div>		
		
		
<?php
    }
    else
    { ?>
        <div class="alert alert-danger alert-dismissible">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Warning!</strong> Invalid detail. please enter appropriate detail as mentioned while registration!
        </div>
		<?php
    header('Refresh: 1; URL=forgot.php');
	}
}

