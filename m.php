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

//Updating Values in personal table

$name=    $_POST['name'];
$branch=  $_POST['branch'];
$address= $_POST['address'];
$mobile=  $_POST['mobile'];
$gender=  $_POST['gender'];
$email=   $_POST['email'];
$dob=     $_POST['dob'];
$category=$_POST['category'];
$caste=   $_POST['caste'];
$adharno= $_POST['adharno'];
$bloodgrp=$_POST['bloodgrp'];
//$filename = $_FILES['uploadfile']['name'];
//$tempname = $_FILES['uploadfile']['tmp_name'];
//$folder="upload/".$filename;
//move_uploaded_file($tempname,$folder);


    $s1="select * from `personal` where email='$a'";
    $sd1=mysqli_query($con,$s1);
    if($sd1){
		echo"personal selected<br>";
	}else{
		echo"personal not selected<br>";
	}
	$e=mysqli_fetch_array($sd1);
 	$id=$e['id'];
 	echo $id;
	


	$q1="update `personal` SET `fullname`='$name',`branch`='$branch',`address`='$address',`mobile`='$mobile',
	`gender`='$gender',`email`='$email',`dob`='$dob',`category`='$category',`caste`='$caste',`adharno`='$adharno',`bloodgrp`='$bloodgrp' where id='$id'";
	$d1=mysqli_query($con,$q1);
	if($d1){
		echo"personal updated<br>";
	}else{
		echo" personal not updated<br>";
	}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Updating Values in preacademic_info table

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


	$s2="select * from `preacademic_info` where id='$id'";
    $sd2=mysqli_query($con,$s2);
    if($sd2){
		echo"preacademic_info selected<br>";
	}else{
		echo" preacademic_info not selected<br>";
	}
	$e1=mysqli_fetch_array($sd2);
	echo $e1['ssctm'].'<br>';
	echo $e1['sscom'].'<br>';
	echo $e1['sscp'].'<br>';
	echo $e1['hsctm'].'<br>';
	
	 echo $polytm;
     echo $polyom;
     echo $polyp;
	
	$q2="update `preacademic_info` set `ssctm`='$ssctm',`sscom`='$sscom',`sscp`='$sscp',`hsctm`='$hsctm',`hscom`='$hscom',`hscp`='$hscp',`mhtcettm`='$mhtcettm',`mhtcetom`='$mhtcetom',`jeetm`='$jeetm',`jeeom`='$jeeom',`polytm`='$polytm',`polyom`='$polyom',`polyp`='$polyp' where id='$id'";
	$d2=mysqli_query($con,$q2);
	if($d2){
		echo"preacademic_info updated<br>";
	}else{
		echo" preacademic_info not updated<br>";
	}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Updating Values in engg_info table

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


	$s3="select * from `engg_info` where id='$id'";
	$sd3=mysqli_query($con,$s1);
    if($sd3){
		echo"engg_info selected<br>";
	}else{
		echo" engg not selected<br>";
	}
	$f=mysqli_fetch_array($sd3);
 	$id=$f['id'];
 	

	$q3="UPDATE `engg_info` SET `sem1`='$sem1',`sem2`='$sem2',`fyback`='$fyback',`sem3`='$sem3',`sem4`='$sem4',`syback`='$syback',`sem5`='$sem5',`sem6`='$sem6',`tyback`='$tyback',`sem7`='$sem7',`sem8`='$sem8',`foyback`='$foyback' WHERE id='$id'";
	$d3=mysqli_query($con,$q3);
	if($d3){
		echo"engg updated<br>";
	}else{
		echo" engg not updated<br>";
	}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Updating Values in extra_info table

$internship=   $_POST['internship'];
$ncc=   $_POST['ncc'];
$paperpresentation=$_POST['paper_presentation'];
$project_competition=   $_POST['project_competition'];
$edc=  $_POST['edc_camp'];


	$s3="select * from `extra_info` where id='$id'";
	$sd3=mysqli_query($con,$s1);
    if($sd3){
		echo"extra_info selected<br>";
	}else{
		echo" extra not selected<br>";
	}


	$q4="UPDATE `extra_info` SET `internship`='$internship',`ncc`='$ncc',`paperpresentation_details`='$paperpresentation',`project_competition`='$project_competition',`edc_camp`='$edc' WHERE id='$id'";
	$d4=mysqli_query($con,$q4);
	if($d4){
		echo"extra updated<br>";
	}else{
		echo" extra not updated<br>";
	}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

header('location:home.php');

?>