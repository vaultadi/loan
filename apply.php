<?php
include 'header.php';
include 'session.php';
?>
<div class="container">
	<div class="row">
<form class="form-horizontal" action="" method="post">
<fieldset>

<!-- Form Name -->
<legend>Loan Application</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstnameinput">First Name</label>  
  <div class="col-md-5">
  <input id="firstnameinput" name="firstnameinput" type="text" placeholder="first name" class="form-control input-md" required="">
  <span class="help-block">Your First Name</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastnameinput">Last Name</label>  
  <div class="col-md-5">
  <input id="lastnameinput" name="lastnameinput" type="text" placeholder="last name" class="form-control input-md" required="">
  <span class="help-block">Your Last Name</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="streetinput">Street Address</label>  
  <div class="col-md-5">
  <input id="streetinput" name="streetinput" type="text" placeholder="street address" class="form-control input-md" required="">
  <span class="help-block">Please enter your street address</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cityinput">City</label>  
  <div class="col-md-4">
  <input id="cityinput" name="cityinput" type="text" placeholder="city" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="statebasic">State</label>
  <div class="col-md-2">
    <select id="statebasic" name="statebasic" class="form-control">
      <option value="AL">Alabama</option>
      <option value="AK">Alaska</option>
      <option value="AZ">Arizona</option>
      <option value="AR">Arkansas</option>
      <option value="CA">California</option>
      <option value="CO">Colorado</option>
      <option value="CT">Connecticut</option>
      <option value="DE">Delaware</option>
      <option value="FL">Florida</option>
      <option value="GA">Georgia</option>
      <option value="HI">Hawaii</option>
      <option value="ID">Idaho</option>
      <option value="IL">Illinois</option>
      <option value="IN">Indiana</option>
      <option value="IA">Iowa</option>
      <option value="KS">Kansas</option>
      <option value="KY">Kentucky</option>
      <option value="LA">Louisiana</option>
      <option value="ME">Maine</option>
      <option value="MD">Maryland</option>
      <option value="MA">Massachusetts</option>
      <option value="MI">Michigan</option>
      <option value="MN">Minnesota</option>
      <option value="MS">Mississippi</option>
      <option value="MO">Missouri</option>
      <option value="MT">Montana</option>
      <option value="NE">Nebraska</option>
      <option value="NV">Nevada</option>
      <option value="NH">New Hampshire</option>
      <option value="NJ">New Jersey</option>
      <option value="NM">New Mexico</option>
      <option value="NY">New York</option>
      <option value="NC">North Carolina</option>
      <option value="ND">North Dakota</option>
      <option value="OH">Ohio</option>
      <option value="OK">Oklahoma</option>
      <option value="OR">Oregon</option>
      <option value="PA">Pennsylvania</option>
      <option value="RI">Rhode Island</option>
      <option value="SC">South Carolina</option>
      <option value="SD">South Dakota</option>
      <option value="TN">Tennessee</option>
      <option value="TX">Texas</option>
      <option value="UT">Utah</option>
      <option value="VT">Vermont</option>
      <option value="VA">Virginia</option>
      <option value="WA">Washington</option>
      <option value="WV">West Virginia</option>
      <option value="WI">Wisconsin</option>
      <option value="WY">Wyoming</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="zipinput">Zip Code</label>  
  <div class="col-md-2">
  <input id="zipinput" name="zipinput" type="text" placeholder="zip code" class="form-control input-md" required="">
  <span class="help-block">Please enter your current zip code</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailinput">Email Address</label>  
  <div class="col-md-4">
  <input id="emailinput" name="emailinput" type="text" placeholder="email address" class="form-control input-md" required="">
  <span class="help-block">Please Enter Your Email Address</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="birthinput">Date of Birth</label>  
  <div class="col-md-2">
  <input id="birthinput" name="birthinput" type="text" placeholder="mm/dd/yyyy" class="form-control input-md" required="">
  <span class="help-block">Please enter your date of birth in mm/dd/yyyy format</span>  
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Gender</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="f" checked="checked">
      Female
    </label>
    </div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="m">
      Male
    </label>
	</div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Loan Type</label>
  <div class="col-md-2">
    <select id="selectbasic1" name="selectbasic1" class="form-control">
      <option value="E">home loan</option>
      <option value="G">vehicle loan</option>
      <option value="F">education loan</option>
      <option value="D">other</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Loan Amount</label>
  <div class="col-md-2">
    <select id="selectbasic2" name="selectbasic2" class="form-control">
      <option value="5">$5,000</option>
      <option value="10">$10,000</option>
      <option value="15">$15,000</option>
      <option value="20">$20,000</option>
      <option value="25">$25,000</option>
      <option value="30">$30,000</option>
      <option value="35">$35,000</option>
      <option value="40">$40,000</option>
      <option value="45">$45,000</option>
      <option value="50">$50,000</option>
      <option value="55">$75,000</option>
      <option value="60">$100,000</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Apply</button>
  </div>
</div>

</fieldset>
</form>
<?php
	if (isset($_POST["selectbasic1"]) && isset($_POST["emailinput"])) {
	$sql = "SELECT * from application where emailinput='" . $_POST["emailinput"] . "' AND selectbasic1='" . $_POST["selectbasic1"] . "'";
		if (mysqli_num_rows(mysqli_query($conn, $sql)) == 0) {
			/*Generating unique formID*/
			$formid = 'frm' . substr(strip_tags($_POST["zipinput"], -4),0) . '' . substr(strip_tags($_POST["firstnameinput"], 0, 2)) . '' . substr(strip_tags($_POST["cityinput"], 0, 2)) . '' . date('His', time());
			$query = "INSERT INTO application (formid,firstnameinput,lastnameinput,streetinput,cityinput,statebasic,zipinput,emailinput,birthinput,radios,selectbasic1,selectbasic2)
			VALUES ('".strtoupper($formid) . "' , '".strip_tags($_POST["firstnameinput"])."' , '".strip_tags($_POST["lastnameinput"])."' , '".strip_tags($_POST["streetinput"])."' , '".strip_tags($_POST["cityinput"])."' , 
			'".strip_tags($_POST["statebasic"])."' , '".strip_tags($_POST["zipinput"])."' , '".strip_tags($_POST["emailinput"])."' , '".strip_tags($_POST["birthinput"])."' , '".strip_tags($_POST["radios"])."' , 
			'".strip_tags($_POST["selectbasic1"])."' , '".strip_tags($_POST["selectbasic2"])."')";
					     
						 mysqli_query($conn, $query);
						 echo "Error: " . $sql . "<br>" . $conn->error;
?>		
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Thanks for your registration <i><?php echo $_POST["firstnameinput"]; ?></i> your userid is <b><?php echo strtoupper($formid); ?> </b> use this ID for future reference.
  </div>
  <?php
    } else {
?>
<div class="alert alert-warning alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> seems like you already have an apply with us. please login.
  </div>
  <?php
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
	//header("Location: index.php"); 
}

?>
