<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="contact";


$con=mysqli_connect($server_name,$username,$password,$database_name);
if(!$con)
{
	die("Connection Failed" . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$firstname = $_POST['firstname'];   
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	

	$sql_query = "INSERT INTO contact (firstname,lastname,email,phone,subject)
	VALUES ('$firstname','$lastname','$email','$phone','$subject')";

	if(mysqli_query($con,$sql_query))
	{
	echo '<script type="text/javascript"> alert("Data Successfully Registered ") </script>';
	header("refresh:2; url=portfolio.html");
	}
	else
	{
	echo "Error:" . $sql . "" . mysqli_error($con);
	}
	mysqli_close($con);
	}
?>