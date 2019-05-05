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

$q="select * from personal as pr inner join preacademic_info as pi on pr.id=pi.id and pr.email='$a' inner join engg_info as ei on pi.id=ei.id inner join extra_info as ex on pi.id=ex.id  ";
$result=mysqli_query($con,$q);
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
</style>
 </head>
<body>
	<center><img src="http://www.gcoen.ac.in/wp-content/uploads/2017/11/gcoen-logo.png" alt="Government College Of Engineering , Nagpur." style="margin:15px 0px 15px 0px"></center>
	<div class="container1">
		<h1>Upload Image</h1 0px 15px 0px>
	</div>
	<center>
	<form action="update_img.php" method="POST" enctype="multipart/form-data">
		<img src=<?php echo $e['image']; ?> height='150' width='150'/><br><br>
        <input type="file" name="uploadfile" accept="image/gif, image/jpeg, image/png" required>
        <input type="submit" name="updateimg" value="Upload">
  </form>
</center>
	
</body>
</html>