<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"users");

if(isset($_POST['insertcontact']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$query = "INSERT INTO contact(name, email, phone, message)VALUES ('$name','$email', '$phone', '$message')";
	$result = mysqli_query($connection,$query);
	
	if($result)
	{
	  echo '<script> alert("Data Saved"); </script>';
	  header('location: contact.php');
	}
	else
	{
	echo '<script> alert("Data Not Saved"); </script>';
	}
}
?>