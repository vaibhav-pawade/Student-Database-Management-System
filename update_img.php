<?php

session_start();
$a=$_SESSION['email'];


//Connect to server
$con=mysqli_connect('localhost','root');
if(!$con){
  die("Server Connection Failed" . mysqli_error($con));
}

//Connect to database.
$data=mysqli_select_db($con,'session');
if(!$data){
  die("Database Connection Failed" . mysqli_error($data));
}


//Updating image
$filename = $_FILES['uploadfile']['name'];
$tempname = $_FILES['uploadfile']['tmp_name'];
$folder="upload/".$filename;
move_uploaded_file($tempname,$folder);
$q1="update `personal` SET `image`='$folder'where email='$a'";
$d1=mysqli_query($con,$q1);
	

header('location:n.php');
?>