<?php
include 'header.php';
include 'connection.php';
if (empty($_SESSION))

{
?>
<div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="fpassword" autocomplete="off" method="post" action="changepass.php">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="emailid" name="emailid" placeholder="email address" class="form-control"  type="email">
                        </div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon"><i class="glyphicon glyphicon-tags color-blue"></i></span>
							<input id="userid" name="userid" placeholder="USER ID" class="form-control"  type="text">
                      </div>
					  <br>
						<div class="input-group">
						  <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
							<input id="passwordinput" name="passwordinput" placeholder="enter new password" class="form-control"  type="password">
                      </div>
					  <br>
					  <div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
							<input id="confirm_password" name="confirm_password" placeholder="re-enter password" class="form-control"  type="password">
                      </div>
					  </div>
                      <div class="form-group">
                        <button id="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Password Change</button>
                      </div>
                      
                   
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
<?php
}
else
{
    //header("Location: ForgotPassword.php");
   
  }
//include ('footer.php');
?>

