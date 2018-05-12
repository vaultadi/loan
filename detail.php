<?php
include ('header.php');
include ('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

$sql = "SELECT * FROM application WHERE formid='" . $_GET["id"] ."'";
if (!empty($_SESSION))
{
$row = mysqli_fetch_row(mysqli_query($conn, $sql));
?>


		        <div class="table-responsive">
                  <table class="table table-user-information table-bordered">
                    <tbody>					
					<tr>
                        <td>User ID:</td>
                        <td><?php echo $row[1] ?>
						</td>
                      </tr>
                      <tr>
                        <td>Form ID:</td>
                        <td><?php echo $row[2] ?>
						</td>
                      </tr>
                      					  
                      <tr>
                        <td>Name:</td>
                        <td> <?php echo $row[3] . ', ' . $row[4]; ?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth:</td>
                        <td><?php echo $row[11] ?></td>
                      </tr>
                      <tr>
                        <td>Gender:</td>
                        <td><?php echo $row[12] ?></td>
                      </tr>
                      <tr>
                        <td>ZIP Code:</td>
                        <td><?php echo $row[8] ?></td>
                      </tr>
                      <tr>
                        <td>PAN No:</td>
                        <td><?php echo $row[9]?></td>
                      </tr>					  
                      <tr>
                        <td>Stree Name:</td>
                        <td><?php echo $row[5]?></td>
                      </tr>					  
                      <tr>
                        <td>Address:</td>
                        <td><?php echo $row[7] . ' ,' . $row[6] ?></td>
                      </tr>			  
                      <tr>
                        <td>Email:</td>
                        <td><a href="mailto:<?php echo $row[10] ?>"><?php echo $row[10] ?></a></td>
                      </tr>
					  <tr>
                        <td>Loan amount:</td>
                        <td>
						   <?php echo $row[13] ?> 
						   <?php echo $row[14] ?> 
                        </td>    
                      </tr>
                     <tr>
                        <td>Detail:</td>
                        <td><?php echo $row[15]?></td>
                      </tr>
                    </tbody>
                  </table>
				  </div>
				  </p>
        </div>
      </div>
      
    </div>
  </div>
	
		
	
	<?php
	}

	 else {
    ?>
	
	<div class="alert alert-success">
  <strong>OOOPs</strong> Not any application available
</div>

<?php
}
?>

