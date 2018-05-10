<?php
include 'header.php';
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>
<div class="container animated fadeIn">

  <div class="row">
    <h1 class="header-title"> Contact </h1>
    <hr>
    <div class="col-sm-12" id="parent">
    	<div class="col-sm-6">
    	<iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJaY32Qm3KWTkRuOnKfoIVZws&key=AIzaSyAf64FepFyUGZd3WFWhZzisswVx2K37RFY" allowfullscreen></iframe>
    	</div>

    	<div class="col-sm-6">
    		<form action="" class="contact-form" method="post">
	
		        <div class="form-group input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
		        </div>
		    
		    
		        <div class="form-group form_left input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
		        </div>
		    
		      <div class="form-group input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		           <input type="text" class="form-control" id="phone" name="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
		      </div>
		      <div class="form-group input-group">
			   <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
		      <textarea class="form-control textarea-contact" rows="5" id="comment" name="comment" placeholder="Type Your Message/Feedback here..." required=""></textarea>
		      <br>
			  </div>
			  <div>
	      	  <button id="submitButton" input type="submit" class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send </button>
		      </div>
     		</form>
    	</div>
    </div>
  </div>

  <div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">MAIL & WEBSITE</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp gondhiyahardik6610@gmail.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hardikgondhiya.com
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">CONTACT</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
							<br>
							<br>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-7567065254 
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">ADDRESS</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Junction Plot 
							 "Shree Krishna Krupa", Rajkot - 360001.
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		<!-- /Boxes de Acoes -->
		
		<!--My Portfolio  dont Copy this -->
	    
	</div>
</div>

</div>
<?php
/**
 * Validating email & mobile number exist in User table
 */
if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["comment"]))
	
  {    ?>
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Your query submitted successfully.
  </div>
  
  
 <?php 
	        $query      = "INSERT INTO contact (name, phone, email, comment, creqtime)
						     VALUES ('" . strip_tags($_POST["name"]) . "','" . $_POST["phone"] . "','" . strip_tags($_POST["email"]) . "','" . strip_tags($_POST["comment"]) . "','" . time() . "')";
        
            mysqli_query($conn, $query);
}

//include ('footer.php');
?>