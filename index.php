<?php
include_once 'db.php';
 if(!isset($_SESSION['loggedinId']))
 {
  header('location:login.php');
 }
 if(isset($_SESSION['user_name']))
{
	
}
$result = mysqli_query($conn,"SELECT * FROM post");
 $userId=$_SESSION["loggedinId"];
 $getData=mysqli_query ($conn, "SELECT * FROM `reg` WHERE ID = '$userId'");
 $row=mysqli_fetch_assoc($getData);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dash Board</title>
  <link href="http://fonts.cdnfonts.com/css/daniel" rel="stylesheet">
  <link rel="stylesheet" href="index_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
  <body class="B">
    <!-- nav bar -->
   <div class="header">
     <div class="L">
       <a href="index.php"><img src="img/home_logo.png" class="logo"/></a>
     </div>
     <div class="S">
       <input type="search" name="user_name" value="Search" class="search"/>
     </div>
		 <div class="P">
         <a href="profile.php"><img class="pfimage" src="images/<?php echo $row['image'];?>"><a>
         <a class="link" href="profile.php"><?php echo $row['u_name']; ?></a>
     </div>
	 </div>
    <!-- posts -->
   <?php
     $i=0;
     while($ress = mysqli_fetch_array($result)) {
   ?>
    <div class="table">
     <div>
       <img <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($ress['img']).'" height="350" width="350"'; ?> class="pic"/>
     </div>
     <div>
       <div class="like">
         <input type="radio" name="payment" id="card" class="fa fa-heart">
         <label for="card">
           <i ></i>
         </label>
       </div>
       <div class="comment">
          <a href="delete.php?id=<?php echo $ress["id"];?>">Comment</a>
       </div>
       <div class ="delete">
         <a style="font-family: 'Daniel Black', sans-serif; font-size: 12px;"><?php echo $ress["username"];?></a>
       </div>
       <div>
         <div class="caption">
           <a>Caption: <?php echo $ress["caption"]; ?></a>
         </div>
       </div>
     </div>
   </div>


  <?php
   $i++;
   }
 ?>  
   
  

	
  </body>
</html>