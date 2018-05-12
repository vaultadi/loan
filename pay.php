<?php
include 'header.php';
include 'connection.php';
$conn = mysqli_connect($dbhost, $username, $password, $dbname);
$sql7 = "SELECT * from application";
if (!empty($_SESSION))
{
if (mysqli_num_rows(mysqli_query($conn, $sql7)) >= 1)
    {
        $user = mysqli_fetch_row(mysqli_query($conn, $sql7));
		
	}
	}
	$formid=$user[2];
	$name=$user[3];
	$userid=$user[1];
?>	
<style>
.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-left: 0px; }

</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
          
                </div>
                <div class="panel-body">
                    <form method="post" action="test.php">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
							<input type="text" class="form-control" id="cardnumber" name="cardnumber" placeholder="Valid Card Number"
                                required autofocus />
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="month" name="month" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="year" name="year" placeholder="YYYY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CVV CODE</label>
                                <input type="password" class="form-control" id="cvv" name="cvv" placeholder="CVV" required />
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="cardNumber">
                            ENTER AMOUNT</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
							<input type="text" class="form-control" id="money" name="money" placeholder="Enter Amount" required autofocus />
                            
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <br>
             <button id="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> pay</button>
    </div>
</div>
<?php

if (isset($_POST["cardnumber"]) && isset($_POST["year"])) 
{
   // $sql = "SELECT * from pay where cardnumber='" . $_POST["cardnumber"] . "' AND year='" . $_POST["year"] . "'";
    if (!empty($_SESSION)) {
		
		
		$query = "INSERT INTO pay (userid,formid,name,cardnumber,month,year,cvv,money,time)
					VALUES ('".strtoupper($userid) . "' ,'".strtoupper($formid) . "' , '" . $name . "' , '".strip_tags($_POST["cardnumber"])."','".strip_tags($_POST["month"])."',
					'".strip_tags($_POST["year"])."' ,'".strip_tags($_POST["cvv"])."' , '".strip_tags($_POST["money"])."' , '" . time() . "')";   
			 mysqli_query($conn, $query);
//echo "Error: " . $sql . "<br>" . $conn->error;

?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Thanks for your PAYMENT <i><?php echo $_POST["name"]; ?></i> your userid is <b><?php echo strtoupper($userid); ?> </b>
  </div>
  <?php
  
    } 
	else {
?>
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> Some error
  </div>
  <?php
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
	//header("Location: index.php"); 
}