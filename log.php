<?php

$con=mysqli_connect("localhost","root","","glogin");

if (isset($_POST['submit'])) {

$email=$_POST['email'];
$pass=$_POST['password'];

$select="select * from register where email='$email' AND password='$pass' ";
$result=mysqli_query($con,$select);
$num=mysqli_num_rows($result);


//$insert="insert into sign_up(email,password)VALUES('$email','$pass')";
//$result=mysqli_query($con,$insert);



if($num==1)
{
	header('location:welcome.php');
}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Please Kindly Check Your Username Or Password....!!')
    </SCRIPT>");
	
	//echo $insert;
}

}

?>