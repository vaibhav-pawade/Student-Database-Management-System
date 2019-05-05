<?php

session_start();



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
		<h1>Welcome Admin !!!</h1 0px 15px 0px>
	</div>
	<center>
	 <form action="filter.php" method="POST" enctype="multipart/form-data">
   <table cellpadding="5" >
   	 <tr>
     <td>
      <b>Branch</b> 
     </td>
     <td>
      <select  name="branch" required>
       <option selected>Select All Branches</option>
       <option>Computer Science And Engineering</option>
       <option>Electronics And Telecommunication</option>
       <option>Mechanical Engineering</option>
       <option>Civil Engineering</option>
       <option>Electrical Engineering</option>
      </select>
     </td>
    </tr>
    <tr>
    <td>
      <b>Present Year</b>
     </td>
     <td>
      <select  name="year" required>
       <option selected>Select Year</option>
       <option>FIRST</option>
       <option>SECOND</option>
       <option>THIRD</option>
       <option>FOURTH</option>
      </select>
     </td>
    </tr>
    <tr>
     <td>
       <b>Gender</b>
     </td>
     <td>
      <input type="radio" name="gender" value="MALE" required>Male
      <input type="radio" name="gender" value="FEMALE" required>Female
      <input type="radio" name="gender" value="FEMALE" required>Both
     </td>
    </tr>
     <tr>
     <td>
      <b>Category</b>
     </td>
     <td>
      <select name="category" required>
       <option selected>Select All Category</option>
       <option>OPEN</option>
       <option>OBC</option>
       <option>SC/ST</option>
       <option>NT</option>
       <option>Others</option>
      </select>
     </td>
   </table>
   <br>
     <input type="submit" value="SUBMIT" style="padding: 15px 32px;border-radius: 8px">

   </center>
  </div>
  <br>
	
</body>
</html>