<?php
   include ('Connection.php');
   include ('header.php');
   $conn = mysqli_connect($dbhost, $username, $password, $dbname);
   
   if (!empty($_SESSION['emailid']) && !empty($_SESSION['passwordinput'] && !empty($_SESSION['userid'])))
   {
     
	 $sql5 = "SELECT * from contact";
   	
       $val = mysqli_query($conn, $sql5) or die(mysql_error());
   
   	
       while ($row = mysqli_fetch_assoc($val))
       {	
   ?>	

   
   <div class="alert alert-info alert-dismissible">
	<?php echo $row["name"]."        "  . $row["phone"]."       " .$row["email"]; 
	echo "<a href='#' data-toggle='modal' data-target='#" . $row['name'] . "'  class='btn btn-sm btn-success pull-right btn-space'>Info</a>"
	?>
	<!--<button type="submit" name="approve" id="approve" class="btn btn-sm btn-success pull-right btn-space" data-toggle="modal" data-target="#">Info</button>-->
	</div>

<?php

?>




<!-- Modal -->
<div class="modal fade" id="<?php echo $row['name'] ?>" role="dialog">
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
      
                     <tr>
                        <td>ID:</td>
                        <td><?php echo $row['id'] ?></td>
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
                        <td><?php echo $row['phone'] ?></td>
                     </tr>
                     <tr>
                        <td>Gender:</td>
                        <td><?php echo $row['email'] ?></td>
                     </tr>
                     <tr>
                        <td>father:</td>
                        <td><?php echo $row['creqtime'] ?></td>
                     </tr>
                     <tr>
                        <td>mother:</td>
                        <td><?php echo $row['comment'] ?></td>
                     </tr>
                    
                     
                     <tr>
                        <td>Email:</td>
                        <td><a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a></td>
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
   ?>

<!--<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Your Feedback succefully sent to the admin....... !!
	</div>-->
<?php
 //  header('Refresh: 1; URL=home.php');
   }
/*   else
   {
      header("Location: newlogin.php");
   }

*/ 
   //include ('footer.php');
   ?>