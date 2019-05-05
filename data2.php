<?php

session_start();


//Connect to server.
$con=mysqli_connect('localhost','root');
if(!$con){
	die("Server Connection Failed" . mysqli_error($con));
}


//Connect to database.
$db=mysqli_select_db($con,'session');
if(!$db){
	die("Database Connection Failed" . mysqli_error($db));
}


$lemail=$_POST['email'];
$lpass=$_POST['password'];


//Checking if email is registered or not.
$q="select * from signin where email='$lemail' && password=sha1('$lpass')";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['email']=$lemail;
	header('location:home.php');
}else{
	header('location:index.php?retry=Incorrect email or password.');
	//echo "<script>
	//alert('Incorrect email or password.');
	//window.location.href='http://localhost/Database_Project_GCOEN/index.php';
	//</script>";
}
?>