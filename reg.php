<?php

$con=mysqli_connect("localhost","root","","glogin");

$id=$_POST['id'];
$unam=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

$insert="insert into register(id,username,email,password,cpassword)
VALUES($id,'$unam','$email','$pass','$cpass')";

$result=mysqli_query($con,$insert);
if($result>0)
{	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Congratulations, You Are Registerd Successfully')
    </SCRIPT>");
}
else
{	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Username Already Exists........ Please Try With Another One...')
    </SCRIPT>");
	//echo $insert;
}

?>