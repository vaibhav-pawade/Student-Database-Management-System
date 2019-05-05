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

if(!isset($_SESSION['email'])){
  header('location:index.php');
}


//Joining all the tables(personal,preacademic,engg_info,extra_info)
$q="select * from personal as pr inner join preacademic_info as pi on pr.id=pi.id and pr.email='$a' inner join engg_info as ei on pi.id=ei.id inner join extra_info as ex on pi.id=ex.id  ";
$result=mysqli_query($con,$q);
$e=mysqli_fetch_array($result);

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
a{
  text-align: center;
}
 </style>
 <head>
 <body>
 <center>
  
   <img src="http://www.gcoen.ac.in/wp-content/uploads/2017/11/gcoen-logo.png" alt="Government College Of Engineering , Nagpur." style="padding: 15px 32px">
   <h2><u>STUDENT'S  BIO-DATA </u></h2>
   <div class="container1">
   <table cellpadding="5" >
    <tr>
     <td>
      <b>Name</b> 
     </td>
     <td>
      <input type="text" name="name" value= "<?php echo $e['fullname']; ?>" readonly>
     </td>
     <td rowspan=3>
      <b>Student Photo</b>
    </td>
    <td rowspan=3>
      <img src=<?php echo $e['image']; ?> height='100' width='100'/><br>
    </td>
  </form>
   </tr>
   <tr>
     <td>
      <b>Branch</b> 
     </td>
     <td>
      <select  name="branch" required>
       <option selected><?php echo $e['branch']; ?></option>
      </select>
     </td>
    </tr>
    <tr>
     <td>  
      <b>Address</b>
     </td>
     <td colspan="3">
      <textarea rows=2 cols= 25  name="address"required readonly><?php echo $e['address']; ?></textarea>
     </td>
    </tr>
    <tr>
     <td>
      <b>Mobile</b>
     </td>
     <td>
      <input type="text" name="mobile" maxlength="10" required value= "<?php echo $e['mobile']; ?>"readonly>
     </td>
    </tr>
        <tr>
      <td>
       <b>Gender</b>
     </td>
     <td>
      <input type="text" name="gender" value= "<?php echo $e['gender']; ?>">
    </td>
     <td>
      <b>Present Year</b>
     </td>
     <td>
      <input type="text" name="year" value= "<?php echo $e['year']; ?>" readonly>
     </td>
   </tr>
    <tr>
     <td>
      <b>Email</b>  
     </td>
     <td>
      <input type="email"  name="email" required value= "<?php echo $e['email']; ?>" readonly>
     </td>
     <td>
      <b>Date Of Birth</b>
     </td>
     <td>
      <input type="text"  name="dob" required value= "<?php echo $e['dob']; ?>" readonly>
     </td>
    </tr>
     <tr>
     <td>
      <b>Category</b>
     </td>
     <td>
      <input type="text" name="category" required readonly value= "<?php echo $e['category']; ?>">
     </td>
     <td>
      <b>Caste</b>
     </td>
     <td>
      <input type="text"  name="caste" required value= "<?php echo $e['caste']; ?>"readonly>
     </td>
    </tr>
     <tr>
     <td>
      <b>Adhar Card No.</b>
     </td>
     <td>
      <input type="text"  name="adharno" maxlength="12" required value= "<?php echo $e['adharno']; ?>"readonly>
     </td>
     <td>
      <b>Blood Group</b>
     </td>
     <td>
      <input type="text" name="bloodgrp" required value= "<?php echo $e['bloodgrp']; ?>" readonly>
     </td>
    </tr>
   </table>
  </div>
  <br>
  <br>
  <div class="container1">
   <table cellpadding="5">
    <tr>
     <td>
      <b>SSC MARKS :</b>
     </td>
     <td>
      Total Marks
     </td>
     <td >
      <input type="text" name="ssctm"required value= "<?php echo $e['ssctm']; ?>" readonly>
     </td>
     <td>
      Obtained
     </td>
      <td>
      <input type="text" name="sscom"required value= "<?php echo $e['sscom']; ?>" readonly>
     </td>
     <td>
      Percentage
     </td>
      <td>
      <input type="text" name="sscp" required value= "<?php echo $e['sscp']; ?>" readonly>
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
      <input type="text" name="hsctm" value= "<?php echo $e['hsctm']; ?>" readonly>
     </td>
     <td>
      Obtained
     </td>
      <td>
      <input type="text" name="hscom"  value= "<?php echo $e['hscom']; ?>" readonly>
     </td>
     <td>
      Percentage
     </td>
      <td>
      <input type="text"  name="hscp" value= "<?php echo $e['hscp']; ?>" readonly>
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
      <input type="text" value= "<?php echo $e['polytm']; ?>" readonly>
     </td>
     <td>
      Obtained
     </td>
      <td>
      <input type="text" value= "<?php echo $e['polyom']; ?>"readonly>
     </td>
     <td>
      Percentage
     </td>
     <td>
      <input type="text" value= "<?php echo $e['polyp']; ?>" readonly>
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
      <input type="text" name="mhtcettm" value= "<?php echo $e['mhtcettm']; ?>" readonly>
     </td>
     <td>
      Obtained
     </td>
      <td>
      <input type="text"  name="mhtcetom" value= "<?php echo $e['mhtcetom']; ?>" readonly>
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
      <input type="text"  name="jeetm"  value= "<?php echo $e['jeetm']; ?>" readonly>
     </td>
     <td>
      Obtained
     </td>
      <td>
      <input type="text" name="jeeom"  value= "<?php echo $e['jeeom']; ?>" readonly>
     </td>
   </table>
  </div>
  <br>
    <div class="container1">
   <table cellpadding="5">
     <tr>
     <td >
      <b>FIRST YEAR :</b>
     </td>
     <td>
      Semester I
     </td>
     <td>
      <input type="text" name="sem1" value= "<?php echo $e['sem1']; ?>" readonly >
     </td>
     <td>
      Semester II
     </td>
      <td>
      <input type="text" name="sem2"  value= "<?php echo $e['sem2']; ?>" readonly>
     </td>
     <td>
      Backlog Subjects
     </td>
      <td>
      <input type="text" name="fyback" value= "<?php echo $e['fyback']; ?>" readonly>
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
      <input type="text"  name="sem3" value= "<?php echo $e['sem3']; ?>" readonly>
     </td>
     <td>
      Semester IV
     </td>
      <td>
      <input type="text" name="sem4"  value= "<?php echo $e['sem4']; ?>" readonly>
     </td>
     <td>
      Backlog Subjects
     </td>
      <td>
      <input type="text" name="syback" value= "<?php echo $e['syback']; ?>" readonly>
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
      <input type="text" value= "<?php echo $e['sem5']; ?>"  name="sem5" readonly>
     </td>
     <td>
      Semester VI
     </td>
      <td>
      <input type="text" value= "<?php echo $e['sem6']; ?>"  name="sem6" readonly>
     </td>
     <td>
      Backlog Subjects
     </td>
     <td>
      <input type="text" name="tyback" value= "<?php echo $e['tyback']; ?>"  readonly>
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
      <input type="text" name="sem7" value= "<?php echo $e['sem7']; ?>" readonly>
     </td>
     <td>
      Semester VIII
     </td>
      <td>
      <input type="text" name="sem8" value= "<?php echo $e['sem8']; ?>" readonly>
     </td>
     <td>
      Backlog Subjects
     </td>
     <td>
      <input type="text" name="foyback" value= "<?php echo $e['foyback']; ?>" readonly>
     <td>
    </tr>
   </table>
   </div>
  <br>
  <div class="container1">
   <table cellpadding="3">
    <tr>
     <td>
       <b>Internship Completed Details</b>
     </td>
     <td>
      <textarea rows=2 cols= 40 name="internship" readonly><?php echo $e['internship']; ?></textarea>
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
      <input type="text" name="ncc" value="<?php echo $e['ncc']; ?>" readonly>
     </td>
    </tr>
    <tr>
     <td>
       Paper Presentation Details
     </td>
     <td>
      <textarea rows=2 cols= 40 name="paper_presentation" readonly><?php echo $e['paperpresentation_details']; ?></textarea>
     </td>
    </tr>
    <tr>
     <td>
       Project Competition
     </td>
     <td>
      <textarea rows=2 cols= 40 name="project_competition" readonly><?php echo $e['project_competition']; ?></textarea>
     </td>
    </tr>
    <tr>
     <td>
      EDC Camp
     </td>
     <td>
      <textarea rows=2 cols= 40 name="edc_camp" readonly><?php echo $e['edc_camp']; ?></textarea>
     </td>
    </tr>
   </table>
  </div>
  <br>
  <button onclick="myFunction()" style="padding: 15px 32px;border-radius: 8px">PRINT</button>
<script>
function myFunction() {
    window.print();
}
</script>
 </center>
 </body>
</html>
