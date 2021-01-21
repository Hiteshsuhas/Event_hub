<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "csefest";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) 
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{

if (isset($_POST["submit"]))
 {

	$fname = $_POST["fname"];
	$email = $_POST['email'];
	$event = $_POST['event'];
	$phone = $_POST['phno'];
	$branch = $_POST['branch'];
	$year = $_POST['year'];


$sql="INSERT INTO register(name,email,event,phone,branch,year)  VALUES ('$fname', '$email','$event','$phone','$branch','$year')";
if(!mysqli_query($con,$sql))
{
		echo 'not inserted';
}
else
{
		header("Location:index.php");
}
	}
}
?>