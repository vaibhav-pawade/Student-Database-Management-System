<?php

session_start();
$a=$_SESSION['email'];


//Checking email is set or not
if(!isset($_SESSION['email'])){
	header('location:index.php');
}

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

//Selecting row of email entered in login form from signin table.
$qy1="SELECT * FROM `signin` WHERE email='$a'";
$result=mysqli_query($con,$qy1);
$e=mysqli_fetch_array($result);



?>
<html>
<head>
	<title>Home Page</title>
	<style>
	.container1{
		background-color:rgb(70, 130 ,180);
		padding-top: 50px;
		padding-bottom: 5px;
		text-align: center;
		margin-bottom: 50px;
	}
	h1{
		color:rgba(255,255,255);
		padding-bottom: 10px;
		font-size: 50px;

	}
	h2{
		text-align: center;

	}
	a:link {
    text-decoration: none;
    color: red;
	}

	a:hover {
    
    color: red;
	}

	a:active {
    color: blue;
	}
</style>
 </head>
<body>
	<center><img src="http://www.gcoen.ac.in/wp-content/uploads/2017/11/gcoen-logo.png" alt="Government College Of Engineering , Nagpur." style="margin:15px 0px 15px 0px"></center>
	<div class="container1">
		<h1>Welcome <?php echo $e['name'];?> !!!</h1 0px 15px 0px>
	</div>
	<h2 style="color:red;text-align: center;border:2px ;"><?php echo @$_GET["form_filled"]; ?>
	<a href="register.php"><h2>Fill Information Form</h2></a>
	<a href="edit.php"><h2>Edit Information Form</h2></a>
	<a href="print1.php"><h2>Review / Print Information</h2></a>
	<a href="apply.php"><h2>Apply for Recrutment Process</h2></a>
	<a href="logout.php"><h2>Log Out</h2></a><br>
</body>
</html>
