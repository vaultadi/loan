<?php
include ('header.php');
include ('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);

if (isset($_POST))
{

    $filepath = "images/" . $_FILES["pic_path"]["name"];
    move_uploaded_file($_FILES["pic_path"]["tmp_name"], $filepath);
    if (isset($_POST["pan"]))
    {
        $id = $_POST["pan"];
    }
    else
    {
        $id = NULL;
    }

    $sql8 = "UPDATE users SET name='" . $_POST['name'] . "' ,
							 middlenam='" . $_POST["middlename"] . "',
							 lastname='" . $_POST["lastname"] . "',
							 birthdate='" . $_POST["birthdate"] . "',
							 gender='" . $_POST["gender"] . "',
							 mobilenumber='" . $_POST["mobilenumber"] . "',
							 emailid='" . $_POST["emailid"] . "',
						     father='" . $_POST["father"] . "',
						     mother='" . $_POST["mother"] . "',
        			         citizen='" . $_POST["citizen"] . "',
							 changetime='" . time() . "',								 
   				             occupation='" . $_POST["occupation"] . "',
        			         secoccupation='" . $_POST["secoccupation"] . "',
   				             city='" . $_POST["city"] . "',
   				             country='" . $_POST["country"] . "',				
   				             department='" . $dept . "',
   				             phone='" . $_POST["phone"] . "',
   				             profile_pic_path	='" . $_FILES["pic_path"]["name"] . "'							 
   				             WHERE userid='" . $_GET['id'] . "'";
    mysqli_query($conn, $sql8);
    echo 'Details updated successfully !!';
    echo '<br>';
    header('Refresh: 1; URL=profileee.php');
}
else
{
    header('Refresh: 1; URL=UserLogin.php');
}