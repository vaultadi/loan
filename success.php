<?php
include 'header.php';
include 'connection.php';
if (!empty($_SESSION))
{
?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> You have Logged in successfully !!
</div>
<?php
}
else
{
    header("Location: newlogin.php");
}

//include ('footer.php');
?>