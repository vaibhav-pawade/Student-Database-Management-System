<?php

session_start();

//Connect to server
$con=mysqli_connect('localhost','root');
if(!$con){
	die("Server Connection Failed" . mysqli_error($con));
}

//Connect to database
$db=mysqli_select_db($con,'session');
if(!$db){
	die("Database Connection Failed" . mysqli_error($db));
}

$name=$_POST['sname'];
$email=$_POST['semail'];
$spass=$_POST['spassword'];

//Checking if email is in database or not. And if not present then inserting the email in database.
$q="select * from signin where email='$email'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
	header('location:index.php?invalid=Email is already registered.');
	//echo "<script>
	//alert('Email is already registered');
	//window.location.href='http://localhost/Database_Project_GCOEN/index.php';
	//</script>";
}
else{
	$qy="insert into signin(name,password,email)values('$name',sha1('$spass'),'$email')";
	mysqli_query($con,$qy);
}
?>
<html>
<head>
	<title>Registration successful</title>
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
		<h1>Student Login</h1 0px 15px 0px>
	</div>
	<h2>Student registered successfully.</h2>
	<a href="index.php"><h2>Click here to login.</h2></a><br>
</body>
</html>
