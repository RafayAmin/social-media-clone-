<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="update_pw_style.css">
	<title>Password-Change</title>
</head>
  <body class="B">
  <div class="header">
			  <img src="img/logo.jpg" class="logo"/>
		  </div>
    <div class="main"> 
	  <h1 class="title">Change Password</h1>
	  <div class="con">
 <form method="post" action="update_pw_code.php">

User name:<br>
<input type="text" name="user_name" required />
<br>
Email Id:<br>
<input type="email" name="email" required />
<br><br>
Current Password:<br>
<input type="password" name="pass_word" required>
<br>

new password:<br>
<input type="password" name="newp_word" required>
<br>

<input type="submit" name="save" value="submit" class="button">
</form>

  </div>
  <a class="link" href="login.php">Login</a>
	<a class="link" href="reg.php">Sign Up</a> 
	  </div>	
  </body>
</html>