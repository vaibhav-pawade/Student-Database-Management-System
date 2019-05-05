<?php

session_start();



$lemail=$_POST['email'];
$lpass=$_POST['password'];



if($lemail=='tpogcoen@gmail.com' and $lpass=='gcoen8475'){

	header('location:data_filter.php');
}else{
	echo "<script>
	alert('Incorrect email or password.');
	window.location.href='http://localhost/Database_Project_GCOEN/admin.php';
	</script>";
}
?>