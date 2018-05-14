<?php
include 'header.php';
include 'connection.php';
//    $sql = "SELECT * from pay WHERE cardnumber='" . $_POST['cardnumber'] . "' AND year='" . $_POST['year'] . "'";
   if (!empty($_SESSION)) {
	if (isset($_POST["cardnumber"]) && isset($_POST["year"]) && isset($_POST["formid"])) {	
		
		$query = "INSERT INTO pay (userid,formid,name,cardnumber,month,year,cvv,money,time)
					VALUES ('".strtoupper($_SESSION['userid']) . "' ,'".strtoupper($_POST['formid']) . "' , '" . $_SESSION['emailid'] . "' , '".strip_tags($_POST['cardnumber'])."','".strip_tags($_POST['month'])."',
					'".strip_tags($_POST['year'])."' ,'".strip_tags($_POST['cvv'])."' , '".strip_tags($_POST['money'])."' , '" . time() . "')";   
			 mysqli_query($conn, $query);
//echo "Error: " . $sql . "<br>" . $query->error;

?>

<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Thanks for your PAYMENT <i><?php echo $_POST["name"]; ?></i> your userid is <b><?php echo strtoupper($userid); ?> </b>
  </div>
  <?php
			header('Refresh: 1; URL=on_working.php');
    } 
	else {
?>
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> Some error
  </div>
  <?php
      //  echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>