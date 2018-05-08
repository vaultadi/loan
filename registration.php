<?php
include 'header.php';
include 'connection.php';
?>
<div class="container">
	<div class="row">
	<form class="form-horizontal" id="register" action="" method="post">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="username" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-5">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="" class="form-control input-md" required="">
    <span class="help-block">max 16 characters</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirm_password">Confirm Password</label>
  <div class="col-md-5">
    <input id="confirm_password" name="confirm_password" type="password" placeholder="Re-type password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="Male" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="Female">
      Female
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address">default text</textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="country">Country</label>
  <div class="col-md-5">
    <select id="country" name="country" class="form-control">
      <option value="India">India</option>
      <option value="Afghanistan">Afghanistan</option>
      <option value="Aland Islands">Aland Islands</option>
      <option value="Algeria">Albania</option>
      <option value="">Algeria</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mobilenumber">Mobile Number</label>  
  <div class="col-md-5">
  <input id="mobilenumber" name="mobilenumber" type="text" placeholder="Mobile Number" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailId">Email Id</label>  
  <div class="col-md-6">
  <input id="emailid" name="emailid" type="text" placeholder="user@domain.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="languages">User Type</label>
  <div class="col-md-5">
    <select id="rolei" name="rolei" class="form-control" multiple="multiple">
      <option value="admin">Admin</option>
      <option value="banker">Banker</option>
      <option value="customer">customer</option>
    </select>
  </div>
</div>

<!-- Prepended checkbox -->
<div class="form-group">
  <label class="col-md-4 control-label" for="check_critiria">Check the box</label>
  <div class="col-md-6">
    <div class="input-group">
      <span class="input-group-addon">     
          <input type="checkbox">     
      </span>
      <input id="check_critiria" name="check_critiria" class="form-control" type="text" placeholder="I accept the criteria">
    </div>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Submit</button>
  </div>
</div>

</fieldset>
</form>
	</div>
</div>
<?php

if (isset($_POST["mobilenumber"]) && isset($_POST["emailid"])) {
    $sql = "SELECT * from Users where mobilenumber='" . $_POST["mobilenumber"] . "' AND emailid='" . $_POST["emailid"] . "'";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) == 0) {
        
		/*Generating unique PatientID*/
		if ($_POST["rolei"] == 'admin') {
          $userid = 'adm' . substr(strip_tags($_POST["mobilenumber"], -4),0) . '' . substr(strip_tags($_POST["name"], 0, 2)) . '' . substr(strip_tags($_POST["country"], 0, 2)) . '' . date('His', time());
		  }
		  elseif ($_POST["rolei"] == 'banker') {
		  $userid = 'ban' . substr(strip_tags($_POST["mobilenumber"], -4),0) . '' . substr(strip_tags($_POST["name"], 0, 2)) . '' . substr(strip_tags($_POST["country"], 0, 2)) . '' . date('His', time());
		  }
		  else {
		  		  $userid = 'cus' . substr(strip_tags($_POST["mobilenumber"], -4),0) . '' . substr(strip_tags($_POST["name"], 0, 2)) . '' . substr(strip_tags($_POST["country"], 0, 2)) . '' . date('His', time());
				}
				  
			$query = "INSERT INTO Users (userid,name,passwordinput,confirm_password,gender,address,country,mobilenumber,emailid,rolei)
						VALUES ('".strtoupper($userid) . "' , '".strip_tags($_POST["name"])."' , '".strip_tags($_POST["passwordinput"])."' , '".strip_tags($_POST["confirm_password"])."' , '".strip_tags($_POST["gender"])."' , '".strip_tags($_POST["address"])."' ,
						'".strip_tags($_POST["country"])."' , '".strip_tags($_POST["mobilenumber"])."' , '".strip_tags($_POST["emailid"])."' , '".($_POST["rolei"])."')";
						
			     mysqli_query($conn, $query);
?>		
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Thanks for your registration <i><?php echo $_POST["name"]; ?></i> your userid is <b><?php echo strtoupper($userid); ?> </b> use this ID for future reference.
  </div>
  <?php
    } else {
?>
<div class="alert alert-warning alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> seems like you already have an account with us. please login.
  </div>
  <?php
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
	//header("Location: index.php"); 
}