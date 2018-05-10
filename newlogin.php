<?php
include 'header.php';
include 'connection.php';
if (empty($_SESSION))
{
?>
<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="forgot.php">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="emailid" type="email" class="form-control" name="emailid" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="passwordinput" type="password" class="form-control" name="passwordinput" placeholder="password">
                                    </div>
                                    

                                
									<!-- Select Multiple -->
									<div class="form-group">
									  <label class="col-md-2 control-label" for="languages">User Type</label>
									  <div class="col-md-5">
										<select id="rolei" name="rolei" class="form-control" multiple="multiple">
										  <option value="admin">Admin</option>
										  <option value="banker">Banker</option>
										  <option value="customer">customer</option>
										</select>
									  </div>
									</div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div style="text-align: center;">
										<button id="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> LogIn</button>
									</div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="registration.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
<?php

if (isset($_POST["passwordinput"]) && isset($_POST["emailid"]) && isset($_POST["rolei"]))
{

    $sql4 = "SELECT emailid from Users where passwordinput='" . strip_tags($_POST["passwordinput"]) . "' AND emailid='" . strip_tags($_POST["emailid"]) . "' AND rolei='" . $_POST["rolei"] . "'";
	
    if (mysqli_num_rows(mysqli_query($conn, $sql4)) >= 1)
		{
			$_SESSION['emailid'] = strip_tags($_POST["emailid"]);
			$_SESSION['passwordinput'] = strip_tags($_POST["passwordinput"]);
			$_SESSION['rolei'] = $_POST["rolei"];
			$_SESSION['time'] = time();
		
		$sql6 = "SELECT * from Session where emailid='" . $_SESSION['emailid'] . "' AND passwordinput='" . ($_POST["passwordinput"]) . "'";
        if (mysqli_num_rows(mysqli_query($conn, $sql6)) == 0)
		{
		

            /*insert into session table*/
            $query = "INSERT INTO Session (emailid, passwordinput, browser_detail, client_ip, logintime)VALUES ('" . strip_tags($_POST["emailid"]) . "','" . strip_tags($_POST["passwordinput"]) . "','" . $_SERVER['HTTP_USER_AGENT'] . "','" . $_SERVER['REMOTE_ADDR'] . "','" . $_SESSION['time'] . "')";
            mysqli_query($conn, $query);
        }
		else
        {

            $sql7 = "UPDATE Session SET logintime='" . time() . "' ,
                               			browser_detail='" . $_SERVER['HTTP_USER_AGENT'] . "',
										client_ip='" . $_SERVER['REMOTE_ADDR'] . "' 
										WHERE emailid='" . $_SESSION['emailid'] . "' AND 
										passwordinput='" . $_SESSION['passwordinput'] . "'";

            mysqli_query($conn, $sql7);
        }
		?>

                <?php 
				header("Location: success.php");
    }
    else
    {
?>
                    <div class="alert alert-warning alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!</strong> Invalid login credential. Incase you didn't remember use forgot Password !
                    </div>
                    <?php
    }
}
else
{

}
}
else {
header("Location: success.php");
}

//include ('footer.php');
?>