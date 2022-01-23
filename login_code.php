<?php
	
include_once 'db.php';
 if(isset($_SESSION['loggedinId']))
 {
  header('location:index.php');
 }
if (isset($_POST['save'])) 
{
  $users_name = $_POST['user_name'];
  $pas= $_POST['pass_word'];
  $pass = md5($pas);
  $sql = "SELECT * FROM reg WHERE u_name='$users_name' && password='$pass'";
  $res = mysqli_query($conn, $sql);
 
  if(mysqli_num_rows($res)>0)
	{
		$rt=mysqli_fetch_assoc($res);
		$userid=$rt['ID'];
		$_SESSION['loggedinId']=$userid;
    $_SESSION['user_name']=$users_name;
		header('Location:index.php');
		
	} 
  else
  {
     echo "invalid user name or password";  
	 

 
}
}
$res=mysqli_query($conn,$sql);
	
	 
?>

