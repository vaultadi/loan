<?php
include ('header.php');
include ('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

$sql = "SELECT * FROM application WHERE formid='" . $_GET["id"] ."'";
if (!empty($_SESSION))
{
$row = mysqli_fetch_row(mysqli_query($conn, $sql));
?>


		        <div class="table-responsive" align="center">
                  <table class="table table-striped" align="center" style="background-color: #bbbec1; width: 50%;">
                    <tbody>					
					<tr>
                        <td><strong>User ID:</strong></td>
                        <td><strong><?php echo $row[1] ?>
						</strong></td>
                      </tr>
                      <tr>
                        <td><strong>Form ID:</strong></td>
                        <td><strong><?php echo $row[2] ?>
						</strong></td>
                      </tr>
                      					  
                      <tr>
                        <td><strong>Name:</strong></td>
                        <td><strong> <?php echo $row[3] . ', ' . $row[4]; ?></strong></td>
                      </tr>
                      <tr>
                        <td><strong>Date of Birth:</strong></td>
                        <td><strong><?php echo $row[11] ?></strong></td>
                      </tr>
                      <tr>
                        <td><strong>Gender:</strong></td>
                        <td><strong><?php echo $row[12] ?></strong></td>
                      </tr>
                      <tr>
                        <td><strong>ZIP Code:</strong></td>
                        <td><strong><?php echo $row[8] ?></strong></td>
                      </tr>
                      <tr>
                        <td><strong>PAN No:</strong></td>
                        <td><strong><?php echo $row[9]?></strong></td>
                      </tr>					  
                      <tr>
                        <td><strong>Stree Name:</strong></td>
                        <td><strong><?php echo $row[5]?></strong></td>
                      </tr>					  
                      <tr>
                        <td><strong>Address:</strong></td>
                        <td><strong><?php echo $row[7] . ' ,' . $row[6] ?></strong></td>
                      </tr>			  
                      <tr>
                        <td><strong>Email:</strong></td>
                        <td><strong><a href="mailto:<?php echo $row[10] ?>"><?php echo $row[10] ?></a></strong></td>
                      </tr>
					  <tr>
                        <td><strong>Loan amount:</strong></td>
                        <td><strong>
						   <?php echo $row[13] ?> 
						   <?php echo $row[14] ?> 
                        </strong></td>    
                      </tr>
                     <tr>
                        <td><strong>Detail:</strong></td>
                        <td><strong><?php echo $row[15]?></strong></td>
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

