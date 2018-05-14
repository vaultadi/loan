<?php
include 'connection.php';
include 'session.php';
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
  <script src="js/register.js"></script>
  <script src="js/home/home.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/ss.css">
   <link rel="stylesheet" href="css/button.css">
   
   <link rel="stylesheet" href="css/home/home.css">
   
</head>
<body style="background-image:url('image/1.jpg');
background-position-x: center;
    background-position-y: center;
    background-size: cover;
    background-repeat-x: no-repeat;
    background-repeat-y: no-repeat;
    background-attachment: fixed;
    background-origin: initial;
    background-clip: initial;
    background-color: initial; ">
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container fixed-bg">
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
      <ul class="nav navbar-nav" id="nav">
	          <li><a href="contact.php">Contact Us</a></li>
			  <li><a href="success.php">Home</a></li>
	          <?php if (!empty($_SESSION)) { ?>
			  
			  <li><a href="view.php">Profile</a></li>
			  
			  <?php } ?>
			  <?php if ((!empty($_SESSION)) && ($_SESSION['rolei'] == 'admin'))
{ ?>
				<li><a href="adminview.php">All users</a></li>
				<li><a href="test2.php">All application</a></li>
				<li><a href="feed.php">Feedback</a></li>
<?php
}?>
		      <?php if ((!empty($_SESSION)) && ($_SESSION['rolei'] == 'banker')) { ?>
			  <li><a href="bankview.php">show customer</a></li>
			  <li><a href="viewapp.php">loanlist</a></li>
	          <?php
} ?>
			  <?php if ((!empty($_SESSION)) && ($_SESSION['rolei'] == 'customer'))
{ ?>
			  <li><a href="on_working.php">Application list</a></li>
			  <li><a href="/form/" download="personal_loan_application_form.pdf">Offline Apply</a></li>
			  <li><a href="payment.php">Payment detail</a></li>
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