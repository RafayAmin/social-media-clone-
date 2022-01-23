<!DOCTYPE html>
<html>
<head>
 <title>Insert Image in MySql using PHP</title>
 <link rel="stylesheet" href="upload_img_style.css">
<script>
 function view() 
 {
     pic.src = URL.createObjectURL(event.target.files[0]);
 }</script>
</head>
<body>
<?php
include_once 'db.php';
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
 $cmt = $_POST['cmmt']; 
 $image = $_FILES['image1']['tmp_name'];
 $fimg = file_get_contents($image);
 
 $sql = "insert into post (img,caption,username) values(?,'$cmt','$_SESSION[user_name]')";
 $getimg = mysqli_prepare($conn,$sql);
 mysqli_stmt_bind_param($getimg, "s",$fimg);
 mysqli_stmt_execute($getimg);
 $check = mysqli_stmt_affected_rows($getimg);
 if($check==1)
 {
 $msg = 'Image Successfullly UPloaded';
 }
 else
 {
 $msg = 'Error uploading image';
 }
 mysqli_close($conn);
}
?>
<div><h2 class="upimg">Upload Image</h2></div> 
<div class="ULform">
 <form action=" " method="post" enctype="multipart/form-data">
  <img class="" id="pic" src="" width="100px" height="100px"/><br/>
  <input type="file" name="image1" onchange="view()"/><br/>
  <input type="text" name="cmmt" placeholder="enter comments"/>
  </br>
  <button class="button">Upload image and comments</button><br/>
  <a href="profile.php">View Images</a>
 </form>
</div>
<?php
 echo $msg;
?>
</body>
</html>
