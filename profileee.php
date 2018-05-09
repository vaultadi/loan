<?php 
include 'header.php';
include 'connection.php';
$conn = mysqli_connect($dbhost, $username, $password, $dbname);
$sql7 = "SELECT * from Users where passwordinput='" . $_SESSION["passwordinput"] . "' AND emailid='" . $_SESSION["emailid"] . "' AND rolei='" . $_SESSION["rolei"] . "'";
if (mysqli_num_rows(mysqli_query($conn, $sql7)) >= 1)
{
    $user = mysqli_fetch_row(mysqli_query($conn, $sql7));
?>
<div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal" action="editsave.php?id=<?php echo $user[1] ?>" enctype="multipart/form-data" method="post">
<fieldset>

<!-- Form Name -->
<legend>User profile form requirement</legend>

<!-- Text input-->




<div class="form-group">
  <label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>  
  <div class="col-md-6">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="name" name="name" type="text" placeholder="Name (Full name)" class="form-control input-md" value ="<?php echo $user[2]; ?>">
      </div>

    
  </div>

  
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
  <div class="col-md-6">
    <input id="pic_path" name="pic_path" class="input-file" type="file" value ="<?php echo $user[13]; ?>">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>  
  <div class="col-md-6">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-birthday-cake"></i>
        
       </div>
       <input id="birthdate" name="birthdate" type="text" placeholder="Date Of Birth" class="form-control input-md" value ="<?php echo $user[12]; ?>">
      </div>
  
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Father">Father's name</label>  
  <div class="col-md-6">
  <div class="input-group">
       <div class="input-group-addon">
      <i class="fa fa-male" style="font-size: 20px;"></i>
        
       </div>
      <input id="father" name="father" type="text" placeholder="Father's name" class="form-control input-md" value ="<?php echo $user[16]; ?>">

      </div>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mother">Mother's Name</label>  
  <div class="col-md-6">
  <div class="input-group">
       <div class="input-group-addon">
      <i class="fa fa-female" style="font-size: 20px;"></i>
        
       </div>
  <input id="mother" name="mother" type="text" placeholder="Mother's Name" class="form-control input-md" value ="<?php echo $user[17]; ?>">

      </div>
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Marital Status:</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios1" id="radios-0" value="1" checked="checked">
      Married
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios1" id="radios-1" value="2">
      Unmarried
    </label>
  </div>
</div>

<!-- Text input-->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="Temporary Address">Temporary Address</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-home" style="font-size:20px;"></i>
        
       </div>
 <input id="Temporary Address" name="Temporary Address" type="text" placeholder="Temporary Address" class="form-control input-md">
      </div>
 
    
  </div>
</div>
 -->


<div class="form-group">
  <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Permanent Address</label>  
  <div class="col-md-3  col-xs-4">
  <input id="peraddress" name="peraddress" type="text" placeholder="District" class="form-control input-md ">
  </div>

  <div class="col-md-3 col-xs-4">

  <input id="peraddress" name="peraddress" type="text" placeholder="Area" class="form-control input-md ">
  </div>

  
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Permanent Address"></label>  
  <div class="col-md-3  col-xs-6">
  <input id="peraddress" name="peraddress" type="text" placeholder="Street" class="form-control input-md ">
  
  </div>

  

  
</div>




<div class="form-group">
  <label class="col-md-4 control-label col-xs-12" for="Temporary Address">Temporary Address</label>  
  <div class="col-md-3  col-xs-6">
  <input id="tempaddress" name="tempaddress" type="text" placeholder="District" class="form-control input-md ">
  </div>

  <div class="col-md-3 col-xs-4">

  <input id="tempaddress" name="tempaddress" type="text" placeholder="Area" class="form-control input-md ">
  </div>

  
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Temporary Address"></label>  
  <div class="col-md-3  col-xs-4">
  <input id="tempaddress" name="tempaddress" type="text" placeholder="Street" class="form-control input-md ">
  
  </div>

  

  
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Primary Occupation">Primary Occupation</label>  
  <div class="col-md-6">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-briefcase"></i>
        
       </div>
      <input id="occupation" name="occupation" type="text" placeholder="Primary Occupation" class="form-control input-md" value ="<?php echo $user[19]; ?>">
      </div>
  
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Secondary Occupation (if any)">Secondary Occupation (if any)</label>  
  <div class="col-md-6">
  <div class="input-group">
       <div class="input-group-addon">
      <i class="fa fa-briefcase"></i>
        
       </div>
     <input id="secoccupation" name="secoccupation" type="text" placeholder="Secondary Occupation (if any)" class="form-control input-md" value ="<?php echo $user[20]; ?>">
      </div>
  
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Phone number ">Phone number </label>  
  <div class="col-md-6">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-phone"></i>
        
       </div>
    <input id="phone" name="phone" type="text" placeholder="Primary Phone number " class="form-control input-md" value ="<?php echo $user[21]; ?>">
    
      </div>
      <div class="input-group othertop">
       <div class="input-group-addon">
     <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>
        
       </div>
    <input id="mobilenumber" name="mobilenumber" type="text" placeholder=" Secondary Phone number " class="form-control input-md" value ="<?php echo $user[8]; ?>">
    
      </div>
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email Address">Email Address</label>  
  <div class="col-md-6">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-envelope-o"></i>
        
       </div>
    <input id="emailid" name="emailid" type="text" placeholder="Email Address" class="form-control input-md" value ="<?php echo $user[10]; ?>">
    
      </div>
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Citizenship No.">Citizenship </label>  
  <div class="col-md-6">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-sticky-note-o"></i>
        
       </div>
   <input id="citizen" name="citizen" type="text" placeholder="Citizenship " class="form-control input-md" value ="<?php echo $user[22]; ?>">
    
      </div>
 
    
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Languages Known">Languages Known</label>
  <div class="col-md-6">
  <div class="checkbox">
    <label for="Languages Known-2">
      <input type="checkbox" name="lang" id="Languages Known-2" value="3">
      English
    </label>
    </div>
  <div class="checkbox">
    <label for="Languages Known-3">
      <input type="checkbox" name="lang" id="Languages Known-3" value="4">
      Hindi
    </label>
    </div>

<div class="othertop">
    <label for="Languages Known-4">
    
     
  
    </label>

     <input type="input" name="lang" id="lang"  placeholder="Other Language">
    </div>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="License No.">PAN ID</label>  
  <div class="col-md-6">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-sticky-note-o"></i>
        
       </div>
   <input id="pan" name="pan" type="text" placeholder="License No." class="form-control input-md" value ="<?php echo $user[25]; ?>">
    
      </div>
 
    
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Overview (max 200 words)">Overview (max 200 words)</label>
  <div class="col-md-6">                     
    <textarea class="form-control" rows="10"  id="overview" name="overview">Overview</textarea>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
  <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Submit</a>
  <a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>
    
  </div>
</div>

</fieldset>
</form>
</div>
<div class="col-md-2 hidden-xs">
<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
  </div>


</div>
   </div>
   <?php
   }
   ?>