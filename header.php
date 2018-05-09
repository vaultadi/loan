<?php
include 'connection.php';
include 'Session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a style="color: #ffffff; background-color: #0a829a;" class="navbar-brand" href="index.php">loan</a>
    </div>

    <div class="collapse navbar-collapse" id="navigation">
      <ul class="nav navbar-nav">
	          <li><a href="ContactUs.php">Contact Us</a></li>
	          <?php if (!empty($_SESSION)) { ?>
			  <li><a href="s.php">Home</a></li>
			  <li><a href="view.php">Profile</a></li>
			  
			  <?php } ?>
		      <?php if ((!empty($_SESSION)) && ($_SESSION['rolei'] == 'banker')) { ?>
			  <li><a href="UserListing.php">show customer</a></li>
			  <li><a href="AppointmentList.php">loanlist</a></li>
	          <?php
} ?>
			  <?php if ((!empty($_SESSION)) && ($_SESSION['rolei'] == 'customer'))
{ ?>
			  <li><a href="UserListing.php"></a></li>
			  <li><a href="apply.php">Apply</a></li>
              <?php
}
              if (!empty($_SESSION)) { ?>
              <li><a href="Logout.php">Logout</a></li>
			   <?php 
} else { ?>
               
			   <li><a href="newlogin.php">Log In</a></li>
			   <?php } ?>
      </ul>
    </div>
  </div>
</nav>