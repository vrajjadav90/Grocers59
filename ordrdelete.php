<?php

$conn=mysqli_connect("localhost","root","","book_form22");
$sql="SELECT * from book_form";

$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM book_form WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:ocancel18.php");
?>

