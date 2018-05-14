<?php
   include ('Connection.php');
   include ('header.php');
   $conn = mysqli_connect($dbhost, $username, $password, $dbname);
   
   if (!empty($_SESSION['emailid']) && !empty($_SESSION['passwordinput'] && !empty($_SESSION['userid'])))
   {
     if ($_SESSION['rolei'] == 'banker')
    {
        	 $sql5 = "SELECT * from Users WHERE rolei = 'customer' ";
    }
	 
   	
       
	   $val = mysqli_query($conn, $sql5) or die(mysql_error());
   
   	
       while ($row = mysqli_fetch_assoc($val))
       {	

  ?>		
			<div class="alert alert-info alert-dismissible">
			<?php echo $row["userid"]."        "  . $row["name"]."       " .$row["changetime"]; 
		
			echo "<a href='#' data-toggle='modal' data-target='#" . $row['userid'] . "'  class='btn btn-sm btn-success pull-right btn-space'>Info</a>"
			?>
			</div>
			


<!-- Modal -->
<div class="modal fade" id="<?php echo $row['userid'] ?>" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><?php echo $row['name']; ?></h4>
         </div>
         <div class="modal-body">
            <p>     
            <div class="table-responsive">
               <table class="table table-user-information table-bordered">
                  <tbody>
                     <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="image/<?php
                        if (empty($row['pic_path']))
                        {
                            echo 'avatar.jpg';
                        }
                        else
                        {
                            echo $row['pic_path'];
                        }
                        ?>" class="img-circle img-responsive"> </div>
                     <tr>
                        <td>ID:</td>
                        <td><?php echo $row['userid'] ?></td>
                     </tr>
                     <tr>
                        <?php if (!empty($row['rolei']))
                           { ?>					  
                        <td>Department:</td>
                        <td><?php echo $row['rolei']; ?>
                        </td>
                        <?php
                           } ?>						
                     </tr>
                     <tr>
                        <td>Name:</td>
                        <td> <?php echo $row['name']; ?></td>
                     </tr>
                     <tr>
                        <td>Date of Birth:</td>
                        <td><?php echo $row['birthdate'] ?></td>
                     </tr>
                     <tr>
                        <td>Gender:</td>
                        <td><?php echo $row['gender'] ?></td>
                     </tr>
                     <tr>
                        <td>father:</td>
                        <td><?php echo $row['father'] ?></td>
                     </tr>
                     <tr>
                        <td>mother:</td>
                        <td><?php echo $row['mother'] ?></td>
                     </tr>
                     <tr>
                        <td>Weight:</td>
                        <td><?php echo $row['occupation'] ?></td>
                     </tr>
                     <tr>
                        <td>Address:</td>
                        <td><?php echo $row['citizen'] . ' ,' . $row['parea'] ?></td>
                     </tr>
                     <tr>
                        <td>Email:</td>
                        <td><a href="mailto:<?php echo $row['emailid'] ?>"><?php echo $row['emailid'] ?></a></td>
                     </tr>
                     <tr>
                        <td>Phone Number:</td>
                        <td>
                           <?php echo $row['phone'] ?> <span class="glyphicon glyphicon-phone-alt"></span><br><br>
                           <?php echo $row['mobilenumber'] ?> <span class="glyphicon glyphicon-earphone"></span>
                        </td>
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
   
}
   else
   {
      header("Location: newogin.php");
   }
   
   //include ('footer.php');
   ?>