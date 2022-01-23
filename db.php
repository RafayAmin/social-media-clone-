<?php 
session_start();
$servername='localhost';
$username='root';
$password='';
$dbname="db1";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
	
	die('could not connect to the DB:' .mysql_error());
}


?>