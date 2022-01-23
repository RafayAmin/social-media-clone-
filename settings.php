<?php
    include('db.php');
	if(!isset($_SESSION['loggedinId']))
{
	header('location:index.php');
}

if(isset($_REQUEST['submittt']))
{
	
		$userid=$_SESSION['loggedinId'];
		$up= mysqli_query($conn,"UPDATE `reg` SET `f_name`='$_POST[first_name]', `l_name`='$_POST[last_name]', `u_name`='$_POST[user_name]', `email`='$_POST[email]' WHERE `id`='$userid'");
	
	if(($_FILES['imgg']))
	{
		$img=$_FILES['imgg']['name'];
		$tmpName= $_FILES['imgg']['tmp_name'];
		$uploadDir="images/";
		move_uploaded_file($tmpName,$uploadDir.$img);
		$up= mysqli_query($conn,"UPDATE `reg` SET `image`='$img' WHERE `id`='$userid'");
	
	echo "<p style='color:white;'>Profile updated successfully</p>";
	header('location:profile.php');
		exit;
	}

	else
	{
		echo "<p style='color:white;'>Username,fullname and email are required</p>";
		header('location:settings.php');
		exit;
	}

}


	$userid=$_SESSION['loggedinId'];
$getdata=mysqli_query($conn,"SELECT * FROM reg WHERE id='$userid'");
$row=mysqli_fetch_assoc($getdata);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Dash Board</title>
  <link rel="stylesheet" href="settings_style.css">
  <script class="jsbin" src="script.js"></script>
</head>
  <body class="B">
   <div class="header">
     <div class="L">
     <a href="index.php"><img src="img/home_logo.png" class="logo"/></a>
     </div>
     <div class="S">
     <input type="search" name="user_name" value="Search" class="search"/>
     </div>
			 <div class="P">
       <a class="link" href="log_out.php">log out</a>
       </div>
   </div>
	    <!-- edit profile info form -->
   <div  class="edit">
     <h2>Edit Users Info</h2>
   </div>
   <div  class="eform" >
		  <form method="post" action="#" enctype="multipart/form-data">
       <img src="images/<?php echo $row['image'];?>" class="image"></br>
       <input type="file" name="imgg" onchange="view()"  accept=".jpg, .jpeg, .png">
       First name:<br>
	     <input type="text" value="<?php echo $row['f_name'];?>" name="first_name" required />
	     <br>
		   Last name:<br>
		   <input type="text" value="<?php echo $row['l_name'];?>" name="last_name" required />
		   <br>
	     User name:<br>
		   <input type="text" value="<?php echo $row['u_name'];?>" name="user_name" required />
	     <br>
		   Email Id:<br>
	     <input type="email" value="<?php echo $row['email'];?>" name="email" required />
	     <br><br>
	     <input type="submit" name="submittt" class="button" value="submit"/>
	   </form>
	  </div>
 <!-- change passwoed form -->
	  <div  class="password"><h2>Change Password</h2></div>
	  <div  class="cform">
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
<!-- back button -->

<div class="backdiv"><a class="back" href="profile.php" >Back to profile page</a></div>

	
  </body>
</html>