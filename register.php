<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"users");

if (isset($_POST['register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $query = "INSERT INTO persons(name, email, password) VALUES ('$username', '$email', MD5('".$password."'))";
    $result = mysqli_query($connection,$query);
	
	if($result)
	{
	  echo '<script> alert("Data Saved"); </script>';
	  header('location: index.php');
	}
	else
	{
	echo '<script> alert("Data Not Saved"); </script>';
	}
}
?>