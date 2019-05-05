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

 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Insertion of data in personal table

$name=    $_POST['name'];
$branch=  $_POST['branch'];
$year=    $_POST['year'];
$address= $_POST['address'];
$mobile=  $_POST['mobile'];
$gender=  $_POST['gender'];
$email=   $_POST['email'];
$dob=     $_POST['dob'];
$category=$_POST['category'];
$caste=   $_POST['caste'];
$adharno= $_POST['adharno'];
$bloodgrp=$_POST['bloodgrp'];
$filename = $_FILES['uploadfile']['name'];
$tempname = $_FILES['uploadfile']['tmp_name'];
$folder="upload/".$filename;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' height='100' width='100'/>";



	$q1="insert into`personal`(`fullname`, `branch`,`year`,`address`,`mobile`,`gender`,`email`, `dob`,`category`,`caste`,`adharno`,`bloodgrp`,`image`) values ('$name','$branch','$year','$address','$mobile','$gender','$email','$dob','$category','$caste','$adharno','$bloodgrp','$folder')";

	$d1=mysqli_query($con,$q1);
	if($d1){
		echo"personal inserted<br>";
	}else{
		echo" personal not inserted<br>";
	}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Insertion of data in preacademic_info table

$ssctm=   $_POST['ssctm'];
$sscom=   $_POST['sscom'];
$sscp=    $_POST['sscp'];
$hsctm=   $_POST['hsctm'];
$hscom=   $_POST['hscom'];
$hscp=    $_POST['hscp'];
$mhtcettm=$_POST['mhtcettm'];
$mhtcetom=$_POST['mhtcetom'];
$jeetm=   $_POST['jeetm'];
$jeeom=   $_POST['jeeom'];
$polytm=   $_POST['polytm'];
$polyom=   $_POST['polyom'];
$polyp=   $_POST['polyp'];


$q2="insert into`preacademic_info`(`ssctm`, `sscom`, `sscp`, `hsctm`, `hscom`, `hscp`, `mhtcettm`, `mhtcetom`, `jeetm`, `jeeom`, `polytm`, `polyom`, `polyp`) values ('$ssctm','$sscom','$sscp','$hsctm','$hscom','$hscp','$mhtcettm','$mhtcetom','$jeetm','$jeeom','$polytm','$polyom','$polyp')";
	
	$d2=mysqli_query($con,$q2);
	if($d2){
		echo"preacademic_info inserted<br>";
	}else{
		echo" preacademic_info not inserted<br>";
	}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Insertion of data in engg_info table


$sem1=   $_POST['sem1'];
$sem2=   $_POST['sem2'];
$sem3=   $_POST['sem3'];
$sem4=   $_POST['sem4'];
$sem5=   $_POST['sem5'];
$sem6=   $_POST['sem6'];
$sem7=   $_POST['sem7'];
$sem8=   $_POST['sem8'];
$fyback= $_POST['fyback'];
$syback= $_POST['syback'];
$tyback= $_POST['tyback'];
$foyback=$_POST['foyback'];

$q3="insert into `engg_info`(`sem1`, `sem2`, `fyback`, `sem3`, `sem4`, `syback`, `sem5`, `sem6`, `tyback`, `sem7`, `sem8`, `foyback`) values ('$sem1','$sem2','$fyback','$sem3','$sem4','$syback','$sem5','$sem6','$tyback','$sem7','$sem8','$foyback')";

$d3=mysqli_query($con,$q3);
	if($d3){
		echo"engg_info inserted<br>";
	}else{
		echo"engg_info not inserted<br>";
	}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Insertion of data in extra_info table

$internship=         $_POST['internship'];
$ncc=                $_POST['ncc'];
$paper_presentation= $_POST['paper_presentation'];
$project_competition=$_POST['project_competition'];
$edc_camp=           $_POST['edc_camp'];


$q4="insert into `extra_info`(`internship`, `ncc`, `paperpresentation_details`, `project_competition`, `edc_camp`) values ('$internship','$ncc','$paper_presentation','$project_competition','$edc_camp')";

$d4=mysqli_query($con,$q4);
	if($d4){
		echo"extra_info inserted<br>";
	}else{
		echo"extra_info not inserted<br>";
	}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


header('location:home.php');

?>