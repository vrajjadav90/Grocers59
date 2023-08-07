<?php 
$conn = mysqli_connect("localhost","root","","feedback");


if(isset($_POST["fsubmit"]))
{
     $name = $_POST['name'];
     $email = $_POST['email'];
     $tpho=$_POST['tele'];
     $sub=$_POST['subje'];
     $msg=$_POST['message'];
     

   $query="INSERT INTO feedback(id,name, email, tele, subje, message) VALUES('','$name','$email','$tpho','$sub','$msg') ";
   echo '<script>alert("Thank You..! Your Feedback Is Valueable For Us 😊"); location.replace(document.referrer);</script>';
      $run=mysqli_query($conn,$query);
}
?>