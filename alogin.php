<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Grocers59</title>

	<style>
		
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
            	background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(images/Grocery59.jpg);
            	background-position: center;
            	background-size: cover;
            	display: flex;
            	justify-content: center;
            	align-items: center;
           }
           .login 
           {
            	width: 500px;
           		min-height: 500px;
          	 	background: #FFF;
           		border-radius: 20px;
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
           .forgot-btn
           {
           		text-align: right;
           }
           .forgot-btn button 
           {
            	border: none;
            	background-color: transparent;
            	outline: none;
            	font-weight: 450;
           	 	cursor: pointer;
           }

	</style>
</head>
<body>
	<center>
	<div class="login">
    
		<form action="alog.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 3rem; font-weight: 800;">Admin Login</p>
			<div class="login-input">
				<input type="email" placeholder="Email" name="email"  required>
			</div>
			<div class="login-input">
				<input type="password" placeholder="Password" name="password"  required>
			</div>
            <div class="forgot-btn">
                <p class="login-register-text"><a href="recover.php">Forgot Password?</a></p><br>
            </div>
			<div class="login-input">
				<button name="submit" class="login-btn">Admin Login</button>
			</div>
			
		</form>
	</div>
    </center>
</body>
</html>