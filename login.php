<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="log_style.css">
	<title>login</title>
</head>
  <body class="B">
  <div class="header">
			  <img src="img/logo.jpg" class="logo"/>
		  </div>
	  <div class="main">
	  <h1 class="title">LOG IN</h1>
	  <div class="con">
	  <form method="post" action="login_code.php">
		
		<br>
		
		User name:<br>
		<input type="text" name="user_name" required />
		<br>
		Password:<br>
		<input type="password" name="pass_word" required>
		<br>
		<input type="submit" name="save" value="Log In" class="button">
	</form>
	  </div>
	  <a class="link" href="reg.php">Sign Up</a>
	  <a class="link" href="update_pw.php">Change password</a> 
	  </div>
	 
	
  </body>
</html>