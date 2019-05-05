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
		color:red;

	}
</style>
 </head>
<body>
	<center><img src="http://www.gcoen.ac.in/wp-content/uploads/2017/11/gcoen-logo.png" alt="Government College Of Engineering , Nagpur." style="margin:15px 0px 15px 0px"></center>
	<div class="container1">
		<h1>Forget Password</h1 0px 15px 0px>
	</div>
	<center>
		<h2 style="text-align: center;border:2px ;"><?php echo @$_GET["mail"]; ?>
			<form action="mail.php" method="post">
				<h3 style="color: black;">Enter your email address</h3>
			<h4 style="color: black;">Email:<input type="text" name="email">
			<input type="submit" name="submit" value="submit">
		</form>

  
</center>
</body>
</html>