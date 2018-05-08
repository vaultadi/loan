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
<a href="logout.php">logout</a>
<?php
}
else
{
    header("Location: newlogin.php");
}

//include ('footer.php');
?>