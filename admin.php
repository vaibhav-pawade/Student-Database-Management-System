<html>
<head>
	<title>Student's Login</title>
	<style>
	.container{
		   width: 700px;
   		   height: 600px;
   		   background-color:rgb( 70, 130 ,180);
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
		 
		 width:350px;
  		 height:400px;
   	     margin-top:10px ;

         display:inline-block;
         background-color: rgba(209, 209, 209, 0.8);
 
	}
	h1{
		color:rgba(255,255,255);
		font-size: 50px;
		padding-top: 40px;
		
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
			<h1>Admin Login</h1>
	<div class="child">
	<h2>LOGIN</h2>
		<form action="admin1.php" method="post" >	
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
			</table>
		</form>