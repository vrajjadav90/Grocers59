<?php

session_start();
include('config.php');

if(isset($_POST['submit']))
{
$unam=$_POST['username'];
$email=$_POST['email'];
$stmt=$mysqli->prepare("SELECT username,email,password FROM register WHERE (username=? && email=?) ");
                $stmt->bind_param('ss',$unam,$email);
                $stmt->execute();
                $stmt -> bind_result($unam,$email,$pass);
                $rs=$stmt->fetch();
                if($rs)
                {
                $pwd=$pass;             
                }

                else
                {
                    echo "<script>alert('Invalid Username/Email or password');</script>";
                }
}

?>










<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Forget Password</title>
	
    <style type="text/css">
	       
           *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            body
            {
                width: 100%;
                min-height: 100vh;
                background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(Images/Grocery59.jpg);
                background-position: center;
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .login
            {
                width: 400px;
                min-height: 400px;
                background: #FFF;
                border-radius: 5px;
                box-shadow: 0 0 5px rgba(0,0,0,.3);
                padding: 40px 30px;
            }

            .login-text
            {
                color: #111;
                font-weight: 500;
                font-size: 1.1rem;
                text-align: center;
                margin-bottom: 20px;
                display: block;
                text-transform: capitalize;
            }
            .login-input 
            {
                width: 100%;
                height: 50px;
                margin-bottom: 25px;
            }
            input
            {
                width: 100%;
                height: 100%;
                border: 2px solid #e7e7e7;
                padding: 15px 20px;
                font-size: 1rem;
                border-radius: 30px;
                background: transparent;
                outline: none;
                transition: .3s;
            }   
            .login-btn
            {
                display: block;
                width: 100%;
                padding: 15px 20px;
                text-align: center;
                border: none;
                background: #a29bfe;
                outline: none;
                border-radius: 30px;
                font-size: 1.2rem;
                color: #FFF;
                cursor: pointer;
                transition: .3s;
            }
            .login-btn:hover
            {
                transform: translateY(-5px);
                background: #6c5ce7;
            }
            .login-register-text
            {
                color: #111;
                font-weight: 600;
            }
            .login-register-text a
            {
                text-decoration: none;
                color: #6c5ce7;
            }

    </style>
</head>
<body>
	<div class="login">
		<?php if(isset($_POST['submit']))
{ ?>
                    <p>Your Password is <?php echo $pwd;?></p>
                    <?php }  ?>
    <form action="" method="POST" class="login-email">

        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Recover Password</p>
		<div class="login-input">
            <input type="text" placeholder="Username" name="username" required>
        </div>
        <div class="login-input">
            <input type="email" placeholder="Email" name="email" required>
        </div>
        
        <div class="login-input">
                <button name="submit" class="login-btn">Show Password</button>
        </div>
	       <p class="login-register-text">Please Login <a href="index.php">Login Here</a>.</p>
    
        </form>
	</div>
</body>
</html>