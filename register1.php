<?php

session_start();
$a=$_SESSION['email'];

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

if(!isset($_SESSION['email'])){
  header('location:index.php');
}
?>


<html>
 <head>
  <title>Information Filing Form</title>
  <style>
   .container1{
        
	padding:30px;
	background-color: rgba(209, 209, 209, 0.3);
	margin:auto;
	width:1200px;
	line-height:30px;
        }
   td{
	font-family:Arial;
 
    }
 .head{
       font-style:bold;
}
u{
  text-align: left;
}
 </style>
 <head>
 <body>
 <center>
  <form action="r.php" method="POST" enctype="multipart/form-data">
   <img src="http://www.gcoen.ac.in/wp-content/uploads/2017/11/gcoen-logo.png" alt="Government College Of Engineering , Nagpur." style="padding: 15px 32px">
   <h2><u>STUDENT'S  BIO-DATA FORM</u></h2>
   <div class="container1">
    <h3><u><b>Personal Information</b></u></h3>
   <table cellpadding="5" >
    <tr>
     <td>
      <b>Name</b> 
     </td>
     <td>
      <input type="text" name="name"required placeholder="First Second Surname">
     </td>
     <td rowspan=2>
      <b>Upload Photo</b>
     </td>
     <td colspan=2 rowspan=2>
      <input type="file" name="uploadfile" accept="image/jpg, image/png" required>
    </tr>
    <tr>
     <td>
      <b>Branch</b> 
     </td>
     <td>
      <select  name="branch" required>
       <option selected>Select Branch</option>
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
      <b>Address</b>
     </td>
     <td>
      <textarea rows=2 cols= 30  name="address"required></textarea>
     </td>
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
      <b>Mobile</b>
     </td>
     <td>
      <input type="text" name="mobile" maxlength="10" required>
     </td>
      <td>
       <b>Gender</b>
     </td>
     <td>
      <input type="radio" name="gender" value="MALE" required>Male
      <input type="radio" name="gender" value="FEMALE" required>Female
     </td>
    </tr>
    <tr>
     <td>
      <b>Email</b> 
     </td>
     <td>
       <input type="text" name="email" value="<?php echo"$a"; ?>" readonly>
     </td>
     <td>
      <b>Date Of Birth</b>
     </td>
     <td>
      <input type="date"  name="dob" required>
     </td>
    </tr>
     <tr>
     <td>
      <b>Category</b>
     </td>
     <td>
      <select  name="category" required>
       <option selected>Select Category</option>
       <option>OPEN</option>
       <option>OBC</option>
       <option>SC/ST</option>
       <option>NT</option>
       <option>Others</option>
      </select>
     </td>
     <td>
      <b>Caste</b>
     </td>
     <td>
      <input type="text"  name="caste" required>
     </td>
    </tr>
     <tr>
     <td>
      <b>Adhar Card No.</b>
     </td>
     <td>
      <input type="text"  name="adharno" maxlength="12" required>
     </td>
     <td>
      <b>Blood Group</b>
     </td>
     <td>
      <input type="text" name="bloodgrp" required>
     </td>
    </tr>
   </table>
  </div>
  <br>

<div class="container1">
   <h3><u><b>Educational Qualification</b></u></h3>
   <table cellpadding="5">
    <tr>
     <td>
      <b>SSC MARKS :</b>
     </td>
     <td>
      Total Marks
     </td>
     <td >
      <input type="text" name="ssctm"required>
     </td>
     <td>
      Obtained
     </td>
      <td>
      <input type="text" name="sscom"required>
     </td>
     <td>
      Percentage
     </td>
      <td>
      <input type="text" name="sscp" required>
     <td>
    </tr>
    <tr>
     <td class="head">
      <b>HSC MARKS :</b>
     </td>
     <td>
      Total Marks
     </td>
     <td>
      <input type="text" name="hsctm">
     </td>
     <td>
      Obtained
     </td>
      <td>
      <input type="text" name="hscom">
     </td>
     <td>
      Percentage
     </td>
      <td>
      <input type="text"  name="hscp">
     <td>
    </tr>
    <tr>
     <td class="head">
      <b>POLY. MARKS :</b>
     </td>
     <td>
      Total Marks
     </td>
     <td>
      <input type="text"  name="polytm">
     </td>
     <td>
      Obtained
     </td>
      <td>
      <input type="text" name="polyom">
     </td>
     <td>
      Percentage
     </td>
     <td>
      <input type="text" name="polyp">
     <td>
    </tr>
     <tr>
     <td>
      <b>MHT-CET :</b>
     </td>
     <td>
      Total Marks
     </td>
     <td >
      <input type="text" name="mhtcettm">
     </td>
     <td>
      Obtained
     </td>
      <td>
      <input type="text"  name="mhtcetom">
     </td>
    </tr>
    <tr>
     <td>
      <b>JEE :</b>
     </td>
     <td>
      Total Marks
     </td>
     <td >
      <input type="text"  name="jeetm">
     </td>
     <td>
      Obtained
     </td>
      <td>
      <input type="text" name="jeeom">
     </td>
   </table>
  </div>
  <br>

  <div class="container1">
    <h3><u><b>Professional` Qualification</b></u></h3>
   <table cellpadding="5">
     <tr>
     <td >
      <b>FIRST YEAR :</b>
     </td>
     <td>
      Semester I
     </td>
     <td>
      <input type="text" name="sem1">
     </td>
     <td>
      Semester II
     </td>
      <td>
      <input type="text" name="sem2">
     </td>
     <td>
      Backlog Subjects
     </td>
      <td>
      <input type="text" name="fyback">
     <td>
    </tr>
    <tr>
     <td class="head">
      <b>SECOND YEAR :</b>
     </td>
     <td>
      Semester III
     </td>
     <td>
      <input type="text"  name="sem3" >
     </td>
     <td>
      Semester IV
     </td>
      <td>
      <input type="text" name="sem4" >
     </td>
     <td>
      Backlog Subjects
     </td>
      <td>
      <input type="text" name="syback" >
     <td>
    </tr>
    <tr>
     <td class="head">
      <b>THIRD YEAR  :</b>
     </td>
     <td>
      Semester V
     </td>
     <td>
      <input type="text" name="sem5">
     </td>
     <td>
      Semester VI
     </td>
      <td>
      <input type="text" name="sem6">
     </td>
     <td>
      Backlog Subjects
     </td>
     <td>
      <input type="text" name="tyback">
     <td>
    </tr>
     <tr>
     <td>
      <b>FOURTH YEAR :</b>
     </td>
     <td>
      Semester VII
     </td>
     <td>
      <input type="text" name="sem7">
     </td>
     <td>
      Semester VIII
     </td>
      <td>
      <input type="text" name="sem8">
     </td>
     <td>
      Backlog Subjects
     </td>
     <td>
      <input type="text" name="foyback" >
     <td>
    </tr>
   </table>
   </div>
  <br>

  <div class="container1">
   <table cellpadding="3">
    <tr>
     <td>
       <b>Internship Completed Details :</b>
     </td>
     <td>
      <textarea rows=2 cols= 40 name="internship"></textarea>
     </td>
    </tr>
    <tr>
     <td style="padding:30px 0px 25px 0px;">
      <b>ANY OTHER INFORMATION :</b>
     </td>
    </tr>
    <tr>
     <td>
       NCC
     </td>
     <td>
      <input type="radio" name="ncc" value="YES" required="">YES
      <input type="radio" name="ncc" value="NO" required="">NO
     </td>
    </tr>
    <tr>
     <td>
       Paper Presentation Details
     </td>
     <td>
      <textarea rows=2 cols= 40 name="paper_presentation"></textarea>
     </td>
    </tr>
    <tr>
     <td>
       Project Competition
     </td>
     <td>
      <textarea rows=2 cols= 40 name="project_competition"></textarea>
     </td>
    </tr>
    <tr>
     <td>
      EDP Camp
     </td>
     <td>
      <textarea rows=2 cols= 40 name="edc_camp"></textarea>
     </td>
    </tr>
   </table>
  </div>
  <br>

 
  <input type="submit" value="SUBMIT" style="padding: 15px 32px;border-radius: 8px">

  </form>
 </center>
 </body>
</html>



   
       
    
