<?php

$con=mysqli_connect("localhost","root","","glogin");
$sql="SELECT * from register";

$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($con, "DELETE FROM register WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:slider1.php");
?>

