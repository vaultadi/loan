<?php
include 'header.php';
include 'connection.php';

if (!empty($_SESSION))
{

?>
<div class="container">
    <div class="col-sm-6">
	<form action="pays.php" method="post" class="form-group">
        <fieldset>
            <legend>Payment</legend>
            <div class="control-group">
                <label label-default="" class="control-label">Enter Form ID</label>
                <div class="controls input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span></span>
                    <input type="text" id="formid" name="formid" class="form-control" title="First and last name" required="">
                </div>
            </div>
			<br>
            <div class="control-group">
                <label label-default="" class="control-label">Card Number</label>
                <div class="controls">
                    <div class="">
                        <div class="col-md-12 input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
                            <input type="text" id="cardnumber" name="cardnumber" class="form-control" autocomplete="off" maxlength="" title="enter number" required="">
                        </div>
                        
                    </div>
                </div>
            </div>
			<br>
            <div class="control-group ">
                <label label-default="" class="control-label">month</label>
                <div class="controls form-inline">
                    <div class="form-inline">
					
                        <div class="col-md-4 input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <select class="form-control" name="month" id="month">
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
						
						
						<label label-default="" class="control-label">year</label>
						
                        <div class="col-md-3 input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <select class="form-control" name="year" id="year">
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                            </select>
                        
						
						</div>
                    </div>
                </div>
            </div>
			<br>
            <div class="control-group">
                <label label-default="" class="control-label">Card CVV</label>
                <div class="controls">
                    <div class="">
                        <div class="col-md-3 input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            <input type="text" id="cvv" name="cvv" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="">
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                </div>
            </div>
			<br>
			<div class="control-group ">
                <label label-default="" class="control-label">Enter Amount</label>
                <div class="controls input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
                    <input type="text" id="money" name="money" class="form-control" title="Enter Amount" required="">
                </div>
            </div>
			<br>
            <div class="control-group">
              <label label-default="" class="control-label"></label>
              <div class="controls">
                <button type="submit" class="btn btn-primary">Submit</button> 
                <button type="button" class="btn btn-default">Cancel</button>
              </div>
            </div>
        </fieldset>
		</form>
    </div>
</div>
<?php
}
?>