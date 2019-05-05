<html>
<head>
	<title>Student's Login</title>
	<style>
	.container{
		   width: 1000px;
   		   height: 600px;
   		   background-color:rgb( 70, 130 ,180);
   		   padding-bottom: 50px;
	}
	td{
		font-family:Headland One;
	}	
	h2{
		background-color:rgb(0,0,0,0.9);
		color: white;
		padding-top:20px;
		padding-bottom:20px;
		margin-top: 0px;
		margin-bottom: 25px;
	}

	.child{
		 
		 width:340px;
  		 height:400px;
   	     margin:10px ;
         display:inline-block;
         background-color: rgba(209, 209, 209, 0.8);
 
	}
	h1{
		color:rgba(255,255,255);
		font-size: 50px;
		padding-top: 30px;
		
	}
	h3{
		text-align: left;
		margin-bottom: 0px;
	}
	input{
		width: 250px;
		height: 30px;
		border-radius: 2px;
	}
	
	
</style>

</head>
<body>
	<center>
		   <img src="http://www.gcoen.ac.in/wp-content/uploads/2017/11/gcoen-logo.png" alt="Government College Of Engineering , Nagpur." style="margin-top:15px">
		<div class="container">
			<h1>Student Login</h1>
	<div class="child">
	<h2>LOGIN</h2>
	<h3 style="color:red;text-align: center;"><?php echo @$_GET["retry"]; ?>
		<form action="data2.php" method="post" >	
			<table cellpadding="5"> 
				<tr>
					<td align="center">
					<h3>Email</h3>
					</td>
				</tr>
				<tr>
					<td colspan="3" >
					<input type="email" name="email" placeholder=" Email" required="">
					</td>
			    </tr>
			    <tr>
					<td align="center">
					<h3>Password </h3>
					</td>
				</tr>
				<tr>
					<td>
					<input type="Password" name="password" placeholder=" Password" required="">
					</td>
			    </tr>
			    <tr>
					<td align="center">
					<input type="submit" name="submit" value="Log In" required style="background-color:rgb(0,0,0,0.9);color: white;border-color:background-color:rgb(0,0,0,0.9);border-radius: 6px; margin-top: 5px;">
					</td>
			    </tr>
			    <tr><td align="center"><a href="forgotpassword.php"> Forgot Password ?</a></td>
			   
			</tr>
			</table>
		</form>
	</div>
	<div class="child">
		<form action="data1.php" method="post">
			<h2>REGISTER</h2>
			<h3 style="color:red;"><?php echo @$_GET["invalid"]; ?>
			<table cellpadding="5">
				<tr>
					<td align="center">
					<h3>Name</h3>
					</td>
				</tr>
				<tr>
					<td>
					<input type="text" name="sname"  placeholder=" Name" required="">
					</td>
			    </tr>
			    <tr>
					<td align="center">
					<h3>Email </h3>
					</td>
				</tr>
				<tr>
					<td>
					<input type="email" name="semail" placeholder=" Email" required="">
					</td>
			    </tr>
			    <tr>
					<td align="center">
					<h3>Password</h3> 
					</td>
				</tr>
				<tr>
					<td>
					<input type="Password" name="spassword" placeholder=" Password" required="">
					</td>
			    </tr>
			    <tr>
					<td align="center">
					<input type="submit" name="submit" value="Register" required style="background-color:rgb(0,0,0,0.9);color: white;border-color:background-color:rgb(0,0,0,0.9); border-radius: 6px;margin-top: 5px;">
					</td>
			    </tr>
			</table>
		</form>
	</div>

</div>
<!--<script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });
</script>-->
</center></body></html>



