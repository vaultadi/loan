<?php
include 'header.php';
include 'connection.php';
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
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Remember
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
							<input type="text" class="form-control" id="cardNumber" name="cardnumber" placeholder="Valid Card Number"
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
							<input type="text" class="form-control" id="money" name="money" placeholder="Enter Amount"
                                required autofocus />
                            
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <!--<li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a>-->
                </li>
            </ul>
            <br/>
             <button id="submit" name="submit" class="btn btn-success btn-lg btn-block">PAY</button>
    </div>
</div>
<?php

if (isset($_POST["cardnumber"]) && isset($_POST["year"])) 
{
    $sql = "SELECT * from pay where cardnumber='" . $_POST["cardnumber"] . "' AND year='" . $_POST["year"] . "'";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) == 0) {
		$query = "INSERT INTO pay (userid,name,cardnumber,month,year,cvv,money,time)
					VALUES ('".strtoupper($userid) . "' , '".strip_tags($_POST["name"])."' , '".strip_tags($_POST["cardnumber"])."','".strip_tags($_POST["month"])."',
					'".strip_tags($_POST["year"])."' ,'".strip_tags($_POST["cvv"])."' , '".strip_tags($_POST["money"])."' , '" . date('Y-m-d H:i:s') . "')";   
			 mysqli_query($conn, $query);
//echo "Error: " . $sql . "<br>" . $conn->error;

?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Thanks for your PAYMENT <i><?php echo $_POST["name"]; ?></i> your userid is <b><?php echo strtoupper($userid); ?> </b>
  </div>
  <?php
  
    } else {
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