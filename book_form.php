<?php 
$conn = mysqli_connect("localhost","root","","book_form22");


if(isset($_POST["send"]))
{
     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $land=$_POST['landmark'];
     $town=$_POST['town'];
     $addtype=$_POST['addtype'];
     $payment=$_POST['paymod'];

   $query="INSERT INTO book_form(id,name, phone, landmark, town,addtype,paymod) VALUES('','$name','$phone','$land','$town','$addtype','$payment') ";
   echo '<script>alert("Thank You..! Your Order is confirmed."); location.replace(document.referrer);</script>';
      $run=mysqli_query($conn,$query);
}
?>