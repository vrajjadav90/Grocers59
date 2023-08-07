<?php

$con=mysqli_connect("localhost","root","","admin");

$email=$_POST['email'];
$pass=$_POST['password'];

$select="select * from register where email='$email' AND password='$pass' ";
$result=mysqli_query($con,$select);
$num=mysqli_num_rows($result);


if($num==1)
{	
	//echo "<h1>Login Sucesss</h1>";
	header('location:dashboard.php');
}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Please Kindly Check Your Username Or Password....!!')
    </SCRIPT>");
	
	
	//echo $insert;
}



?>