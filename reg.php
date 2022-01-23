<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="reg_style.css">
	<title>Registration</title>
</head>
  <body class="B">
  <div class="header">
			  <img src="img/logo.jpg" class="logo"/>
		  </div>
	  <div class="main">
	  <h1 class="title">SIGN UP</h1>
		  <div class="con">
		  <form method="post" action="reg_code.php">
	    First name:<br>
		<input type="text" name="first_name" required />
		<br>
		Last name:<br>
		<input type="text" name="last_name" required />
		<br>
		User name:<br>
		<input type="text" name="user_name" required />
		<br>
		Email Id:<br>
		<input type="email" name="email" required />
		<br>
		Password:<br>
		<input type="password" name="pass_word" required>
		<br>
		Confirm Password:<br>
		<input type="password" name="cofirm" required>
		<br><br>
		<input type="submit" name="save" value="submit" class="button">
	</form>
	  </div>
	<a class="link" href="login.php">Login</a>
	<a class="link" href="update_pw.php">Change password</a>  
      </div>
	  
	 
	
  </body>
</html>