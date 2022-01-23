<?php
	
include_once 'db.php';
if($_POST['pass_word'] == $_POST['cofirm'])
{
if (isset($_POST['save'])) 
{
  $u_name = $_POST['user_name'];
  $sql = "SELECT * FROM reg WHERE u_name='$u_name'";
  $res = mysqli_query($conn, $sql);
 
  if(mysqli_num_rows($res) > 0)
  {
    echo "Sorry... user name already taken";  
  }
  else
  {
     
	 $f_name = $_POST['first_name'];
	 $l_name = $_POST['last_name'];
	 $users_name = $_POST['user_name'];
	 $email = $_POST['email'];
	 $pas= $_POST['pass_word'];
	$pass = md5($pas);  
	 
	 $sql = "INSERT INTO reg (f_name,l_name,u_name,email,password)
	 VALUES ('$f_name','$l_name','$users_name','$email','$pass')";
	
	if (mysqli_query($conn, $sql)) 
	 {
		echo "Registration Done !";
	 } 
	 else
		 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
 
}
  
}
else{
	
	echo "password should be same";
	
}

 
	 
?>

<?php
include "reg.php";
?>
