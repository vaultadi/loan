<?php
include ('header.php');
include ('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

$sql = "SELECT * FROM application";
if (!empty($_SESSION))
{
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		//echo "id: " . $row["id"]. " - Name: " . $row["cityinput"]. " " . $row["zipinput"]. "<br>";
    if($row['userid']==$_SESSION['userid'])
	{
	?>
		<?php
		if($row['status']=="reject")
		{
		?>
	    
		
		<div class="alert alert-danger alert-dismissible">
		<?php echo $row["formid"]."        "  . $row["firstnameinput"]."       " .$row["panid"]; ?>
		<button type="submit" name="delete" id="delete" class="btn btn-sm btn-danger pull-right btn-space">Delete</button>
		</div>
		
		
		<?php
		}
		 elseif($row['status']=="pending")
		 {
		?>
		
		
		
		<div class="alert alert-warning alert-dismissible">
		<?php echo $row["formid"]."        "  . $row["firstnameinput"]."       " .$row["panid"]; ?>
		<!--<button type="submit" name="pending" id="pending" class="btn btn-sm btn-warning pull-right btn-space"> Pending</button>-->
		<button type="submit" name="pending" id="pending" class="btn btn-sm btn-warning pull-right btn-space"> Info</button>		
		</div>
		
		
		
		<?php
		}
		elseif($row['status']=="approve")
		{
		?>
		
		
		<div class="alert alert-success alert-dismissible">
		<?php echo $row["formid"]."        "  . $row["firstnameinput"]."       " .$row["panid"]; ?>
		<!--<button type="submit" name="approve" id="approve" class="btn btn-sm btn-success pull-right btn-space"> Approve</button>-->
		<a href="pay.php" class="btn btn-sm btn-success pull-right btn-space" role="button">Pay</a>
		<?php
		}
		  else {
		  
		?> 
		 <div class="alert alert-info alert-dismissible">
		
		<?php echo $row["formid"]."        "  . $row["firstnameinput"]."       " .$row["panid"]; ?>
		</div>
		<?php
		}
		}
		?>
		<!--<button type "button" href="#" class="btn btn-sm btn-primary pull-right btn-space" data-toggle="modal" data-target="#myModal">Application</a>-->
		
		</div>
		
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Application</h4>
        </div>
        <div class="modal-body">
          <p>     
		        <div class="table-responsive">
                  <table class="table table-user-information table-bordered">
                    <tbody>					
					
                      <tr>
                        <td>ID:</td>
                        <td><?php echo $row['formid'] ?></td>
                      </tr>
                      					  
                      <tr>
                        <td>Name:</td>
                        <td> <?php echo $row['firstnameinput'] . ', ' . $row['lastnameinput']; ?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth:</td>
                        <td><?php echo $row['birthinput'] ?></td>
                      </tr>
                      <tr>
                        <td>Gender:</td>
                        <td><?php echo $row['radios'] ?></td>
                      </tr>
                      <tr>
                        <td>ZIP Code:</td>
                        <td><?php echo $row['zipinput'] ?></td>
                      </tr>
                      <tr>
                        <td>PAN No:</td>
                        <td><?php echo $row['panid']?></td>
                      </tr>					  
                      <tr>
                        <td>Stree Name:</td>
                        <td><?php echo $row['streetinput']?></td>
                      </tr>					  
                      <tr>
                        <td>Address:</td>
                        <td><?php echo $row['statebasic'] . ' ,' . $row['cityinput'] ?></td>
                      </tr>			  
                      <tr>
                        <td>Email:</td>
                        <td><a href="mailto:<?php echo $row['emailinput'] ?>"><?php echo $row['emailinput'] ?></a></td>
                      </tr>
					  <tr>
                        <td>Loan amount:</td>
                        <td>
						   <?php echo $row['selectbasic1'] ?> <span class="glyphicon glyphicon-tasks"></span><br><br>
						   <?php echo $row['selectbasic2'] ?> <span class="glyphicon glyphicon-usd"></span>
                        </td>    
                      </tr>
                     <tr>
                        <td>Detail:</td>
                        <td><?php echo $row['comment']?></td>
                      </tr>
                    </tbody>
                  </table>
				  </div>
				  </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	
	
		
	
	<?php
	}

	} else {
    ?>
	//echo "0 results";
	<div class="alert alert-success">
  <strong>OOOPs</strong> Not any application available
</div>
	<?php
	
}
}

