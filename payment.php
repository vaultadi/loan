<?php
   include ('Connection.php');
   include ('header.php');
   $conn = mysqli_connect($dbhost, $username, $password, $dbname);
   
   if (!empty($_SESSION['emailid']) && !empty($_SESSION['passwordinput'] && !empty($_SESSION['userid'])))
   {
     
	 $sql5 = "SELECT * from pay";
   	
       $val = mysqli_query($conn, $sql5) or die(mysql_error());
   
   	
       while ($row = mysqli_fetch_assoc($val))
       {	
			if($row['userid']==$_SESSION['userid'])
		{
   ?>	
			
   
   <div class="alert alert-info alert-dismissible">
	<?php echo $row["formid"]."        "  . $row["name"]."       " .$row["userid"]; 
	echo "<a href='#' data-toggle='modal' data-target='#" . $row['time'] . "'  class='btn btn-sm btn-success pull-right btn-space'>Info</a>";
	?>

	</div>

<?php
 }
?>

<div class="modal fade container" id="<?php echo $row['time'] ?>" role="dialog">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="row">
            <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                
                    <address>
                        <strong>Payment ID: </strong>
              
                        <?php echo $row['id'] ?></td>
                        <br />
                        <strong>Email Id: </strong>
              
                        <?php echo $_SESSION['emailid'] ?></td>
						<br/>
                        <br />
                        <abbr title="User ID">User ID: </abbr><?php echo $row['userid'] ?></td>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em><?php echo $row['time'] ?></td></em>
                    </p>
                    <p>
                        <em><?php echo $row['year'] ?></td></em>
                    </p>
                </div>
            </div>
            <div class="row">
                
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Card Number</th>
                            <th>#</td></th>
                            <th class="text-center"><?php echo $row['cardnumber'] ?></th>
                            
                        </tr>
                        <tr>
                            <th>Payed Amount</th>
                            <th>#</th>
                            <th class="text-center"><?php echo $row['money'] ?></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
               
            </div>
        		<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		</div>

    </div>
</div>

<?php
  
   }
   }
   else
   {
      header("Location: newogin.php");
   }
   
   //include ('footer.php');
   ?>