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


//Checking whether the user have filled the information form earlier or not.If not he has to fil it first.
$q="select * from personal where email='$a'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==0){
	header('location:home.php?form_filled=Alert! You have not filled information form.');
	//echo "<script>
	//alert('You have not filled information form.');
	//window.location.href='http://localhost/Database_Project_GCOEN/home.php';
	//</script>";

}else{ 

  	header('location:n.php');

}

?>