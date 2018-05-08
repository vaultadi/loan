<?php
include('header.php');
?>
<body>
<div class="container">
<div class="row">
<div id="loan_ts">
<legend>LOAN INFO</legend>
<form id="loan_type" action="" method="post" class="form-control form-group">

  <fieldset>
  <div class ="col-xs-6 form-group">
  <div class="col-xs-6 form-group">
  <label>LOAN TYPE</label>
  <select name="loan_type" class="form-control" id="loan_type">
	<option value="">none</option>
    <option value="house">house loan</option>
    <option value="vehicle">vehicle loan</option>
    <option value="personal">personal loan</option>
    <option value="other">other loan</option>
  </select>
  </div>
  <br>
  <div class="col-xs-6 form-group">
  <label>LOAN AMOUNT</label>
  <select name="loan_amount" class="form-control" id="loan_amount">
    <option value="">50000</option>
    <option value="">30000</option>
    <option value="">20000</option>
    <option value="">other</option>
  </select>
  </div>
  <br>
  <div class="col-xs-6 form-group">
  <label>NEW LOAN AMOUNT</label>
  <input type="number" name="amount" class="form-control">
  </div>
  <br>
  <div class="col-xs-6 form-group">
  <label>comment</label>
  <textarea name="comment" rows="2" cols="50" class="form-control">
  </textarea>
 
  </div>
  
  <br>
  <div class="col-xs-6 form-group">
  
  DISCRIPTION
  <h3>Discription Test</h3>
  <h6>->loan amount for 2 wheelers, 50000</h6>
  <h6>->home loan property</h6>
  <h6>->personal loan available for salary</h6>
  
  </div>
  <br>
  <label>status</label>
  <select name="status" class="form-control">
    <option value="">pending</option>
    <option value="">draft</option>
    <option value="">aa</option>
    <option value="">bbb</option>
  </select>
  <br>
  <div style="text-align: center;">
              <button id ="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span>  Register</button>
			  </div>
  </fieldset>
  </form>
  
  </div> 
   
  </div>
  </div>
  </div>
</body>