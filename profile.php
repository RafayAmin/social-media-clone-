<?php
include_once 'db.php';
 if(!isset($_SESSION['loggedinId']))
 {
  header('location:login.php');
 }
 if(isset($_SESSION['user_name']))
{}
$userId=$_SESSION["loggedinId"];
$getData=mysqli_query ($conn, "SELECT * FROM `reg` WHERE ID = '$userId'");
$row=mysqli_fetch_assoc($getData);
$result = mysqli_query($conn,"SELECT * FROM post WHERE username='$_SESSION[user_name]'");
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Dash Board</title>
  <link rel="stylesheet" href="profile_style.css">
  <link href="http://fonts.cdnfonts.com/css/daniel" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 </head>
  <body class="B">
   <div class="header">
     <div class="L">
       <a href="index.php"><img src="img/home_logo.png" class="logo"/></a>
     </div>
     <div class="S">
     <input type="search" name="user_name" value="Search" class="search"/>
     </div>
		 <div class="U">
      <div class="camera"><a href="upload_img.php"><i class="fa fa-camera" aria-hidden="true"></i></a></div>
      <div class="setting"><a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i></a></div>
     </div>
   </div>
   <!-- profile info displayed -->
   <div>
   <img class="image" src="images/<?php echo $row['image']; ?>"/>
     <h1 class="uname"><?php echo $row['u_name']; ?></h1>
     <h3 class="email"><?php echo $row['email'];?></h3>
     <h4 class="name"><?php echo $row['f_name'] , $row[ 'l_name']?></h4>
   </div>
   <!-- displaying pics--> 
   <div>
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
         <a href="delete.php?id=<?php echo $ress["id"];?>">Delete</a>
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
   </div>


  

	
  </body>
</html>